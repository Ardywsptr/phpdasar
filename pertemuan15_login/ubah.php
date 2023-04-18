<?php
require "functions.php";

// ambil data URL
$id = $_GET["id"];

// query data handphone berdasarkan id
$hp = query("SELECT * FROM daftar_handphone WHERE id = $id")[0];
// var_dump($hp[0]["nama"]);

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di ubah
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data yang anda ubah berhasil!');
                // redirect versi javascript
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data yang anda ubah gagal!');
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
    <title>Ubah data handphone</title>
</head>

<body>
    <h1>Ubah data handphone</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <input type="hidden" name="id" id="id" value="<?= $hp["id"] ?>">
            <input type="hidden" name="gambarLama" value="<?= $hp["gambar"] ?>">
            <li>
                <label for="gambar">Gambar</label><br>
                <img src="img/<?= $hp["gambar"] ?>" alt="" width="200"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required value="<?= $hp["nama"] ?>">
            </li>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" value="<?= $hp["harga"] ?>">
            </li>
            <li>
                <label for="storage">Storage</label>
                <input type="text" name="storage" id="storage" value="<?= $hp["storage"] ?>">
            </li>
            <li>
                <label for="kamera">Kamera</label>
                <input type="text" name="kamera" id="kamera" value="<?= $hp["kamera"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
    <a href="index.php">dashboard</a>
</body>

</html>