<?php
// require "functions.php"
// koneksi database
$db = mysqli_connect("localhost", "root", "", "phpdasar");
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // var_dump($_POST);
    $gambar = $_POST["gambar"];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $storage = $_POST["storage"];
    $kamera = $_POST["kamera"];

    // query insert data
    $query  = ("INSERT INTO daftar_handphone VALUES (
        '', '$nama', '$harga', '$storage', '$kamera', '$gambar')"
    );

    mysqli_query($db, $query);

    // cek apakah data berhasil di tambahkan atau tidak
    if (mysqli_affected_rows($db) > 0) {
        echo "Data yang anda masukan berhasil";
    } else {
        echo "Data yang anda masukan gagal";
        echo "<br><br>";
        echo mysqli_error($db);
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
    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
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