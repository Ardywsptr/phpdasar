<?php
// koneksi ke database
// dengan urutan parameter : nama host -> username mysql -> password mysql -> nama database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// Function untuk menampilkan data (read)
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


function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM daftar_handphone WHERE id = $id");
    return mysqli_affected_rows($db);
}
