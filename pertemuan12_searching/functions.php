<?php
// koneksi ke database
// dengan urutan parameter : nama host -> username mysql -> password mysql -> nama database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// Function untuk membuat query
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
function tambah($method)
{
    global $db;

    // htmlspecialchars berfungsi supaya user tidak bisa input elemen html yg mengakibatkan perbuahan elemen html yg sudah dibuat
    $gambar = htmlspecialchars($method["gambar"]);
    $nama = htmlspecialchars($method["nama"]);
    $harga = htmlspecialchars($method["harga"]);
    $storage = htmlspecialchars($method["storage"]);
    $kamera = htmlspecialchars($method["kamera"]);

    $query  = ("INSERT INTO daftar_handphone VALUES (
        '', '$nama', '$harga', '$storage', '$kamera', '$gambar')"
    );

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
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
    $gambar = htmlspecialchars($method["gambar"]);
    $nama = htmlspecialchars($method["nama"]);
    $harga = htmlspecialchars($method["harga"]);
    $storage = htmlspecialchars($method["storage"]);
    $kamera = htmlspecialchars($method["kamera"]);

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
