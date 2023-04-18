<?php
session_start();

// jika belum login maka balik ke halaman login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require "functions.php";

if (isset($_POST["submit"])) {
    // var_dump($_FILES);
    // var_dump($_POST);
    // die;

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data yang anda tambahkan berhasil!');
                // redirect versi javascript
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data yang anda tambahkan gagal!');
                // redirect versi javascript
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data handphone</title>
</head>

<body>
    <h1>Tambah data handphone</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <label for="storage">Storage</label>
                <input type="text" name="storage" id="storage">
            </li>
            <li>
                <label for="kamera">Kamera</label>
                <input type="text" name="kamera" id="kamera">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
    <a href="index.php">dashboard</a>
</body>

</html>