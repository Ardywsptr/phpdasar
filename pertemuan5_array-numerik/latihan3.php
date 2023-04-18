<?php
$mahasiswa = ["Ardy Wirasaputra", "181011450168", "Teknik Informatika", "Ardywirasaputra@gmail.com"];
$daftarMahasiswa = [
    ["Dedeh Pertiwi", "181011450244", "Akuntansi", "Dedehpertiwi@gmail.com"],
    ["Cici Awalia", "181011450172", "Teknik Arsitektur", "Ciciawalia@gmail.com"],
    ["Zahra Devita", "181011450475", "Design Komunikasi Visual", "Zahradevita@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Mahasiswa</h1>
    <!-- memanggil 1 array dengan cara biasa -->
    <ul>
        <li>Nama : <?= $mahasiswa[0] ?></li>
        <li>NIM : <?= $mahasiswa[1] ?></li>
        <li>Jurusan : <?= $mahasiswa[2] ?></li>
        <li>Email : <?= $mahasiswa[3] ?></li>
    </ul>

    <!-- memanggil 1 array dengan looping -->
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Daftar Mahasiswa</h1>
    <!-- memanggil beberapa array (array multidimensi) dengan looping -->
    <?php foreach ($daftarMahasiswa as $msw) : ?>
        <ul>
            <li>Nama : <?= $msw[0] ?></li>
            <li>NIM : <?= $msw[1] ?></li>
            <li>Jurusan : <?= $msw[2] ?></li>
            <li>Email : <?= $msw[3] ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>