<?php
// koneksi ke database
// dengan urutan parameter : nama host -> username mysql -> password mysql -> nama database
$db = mysqli_connect("localhost", "root", "", "phpdasar");





// Function untuk membuat query
// mysqli_fetch_assoc() merupakan function yg berguna untuk mengembalikan data berupa array associative
function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}





// function untuk menambahkan data (create)
// htmlspecialchars berfungsi supaya user tidak bisa input elemen html yg mengakibatkan perbuahan elemen html yg sudah dibuat
// mysqli_affected_rows() merupakan function yang berguna untuk menghasilkan pesan yang ada pada databse, jika kueri berhasil maka pesan yang di terima 0, apabila tidak berhasil (error) pesan yg diterima -1
function tambah($method)
{
    global $db;

    // $gambar = htmlspecialchars($method["gambar"]);
    $nama = htmlspecialchars($method["nama"]);
    $harga = htmlspecialchars($method["harga"]);
    $storage = htmlspecialchars($method["storage"]);
    $kamera = htmlspecialchars($method["kamera"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    };

    $query  = ("INSERT INTO daftar_handphone VALUES (
        '', '$nama', '$harga', '$storage', '$kamera', '$gambar')"
    );

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}





// function untuk upload file
// explode('pemisah', 'kata') => function php untuk memecah string menjadi array
// end('kata') => function php untuk memilih kata terakhir dari delimiter pada function explode()
// strtolower('kata') => function php untuk merubah huruf menjadi huruf kecil semua
// in_array('jarum','padi') => function php untuk cek adakah string di dalam sebuah array
// move_uploaded_file('alamat asal','alamat tujuan') =? function php untuk memindahkan file dari penyimpanan sementara ke file tujuan
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        echo "
            <script>
                alert('upload gambar terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah file yang di upload ekstensi nya gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
            <script>
                alert('file yang anda upload bukan gambar!');
            </script>
        ";
        return false;
    }

    // cek jika ukuran nya terlalu besar (dalam satuan byte)
    if ($ukuranFile > 1000000) {
        echo "
            <script>
                alert('ukuran file yang anda upload terlalu besar!');
            </script>
        ";
        return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama file baru (nama random) agar nama file yang sama tidak menimpa file yang lama
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $namaFile;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}





// function untuk menghapus data (delete)
function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM daftar_handphone WHERE id = $id");
    return mysqli_affected_rows($db);
}





// function untuk ubah data (update)
function ubah($method)
{
    global $db;

    $id = $method["id"];
    // htmlspecialchars berfungsi supaya user tidak bisa input elemen html yg mengakibatkan perbuahan elemen html yg sudah dibuat
    // $gambar = htmlspecialchars($method["gambar"]);
    $nama = htmlspecialchars($method["nama"]);
    $harga = htmlspecialchars($method["harga"]);
    $storage = htmlspecialchars($method["storage"]);
    $kamera = htmlspecialchars($method["kamera"]);

    $gambarLama = $method["gambarLama"];

    // cek apakah user upload gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query  = "UPDATE daftar_handphone SET
                    gambar = '$gambar',
                    nama = '$nama',
                    harga = '$harga',
                    storage = '$storage',
                    kamera = '$kamera'
                    WHERE id = $id
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}





// function untuk cari data
// LIKE %% berfungsi untuk mencari data tidak harus full teks
function cari($keyword)
{
    $query = "SELECT * FROM daftar_handphone
                WHERE
                nama LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                storage LIKE '%$keyword%' OR
                kamera LIKE '%$keyword%'
            ";
    return query($query);
}




// function untuk registrasi
// stripslashes() => function php untuk menhilangkan slash agar tidak ada di database
// mysqli_real_escape_string => function php untuk memungkinkan user memasukan password ada tanda kutipnya dan dimasukan ke database
function registrasi($data)
{
    global $db;

    $username = strtolower(stripslashes($data["username"]));
    $password =  mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    // username sudah ada atau belum
    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");

    // pengecekan apakah jika username sudah ada di database
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('gunakan username lain');
            </script>
        ";

        return false;
    }

    // cek konfirmasi password2
    if ($password !== $password2) {
        echo "
            <script>
                alert('konnfirmasi password tidak sesuai!');
            </script>
        ";

        return false;
    }

    // enkripsi password
    // password_hash('teks', PASSWORD_DEFAULT) => function php untuk enkripsi password menjadi acak
    // tidak disarankan menggunakan function md5() untuk enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($db, "INSERT INTO user VALUES ('', '$username', '$password')");

    return mysqli_affected_rows($db);
}
