<?php
$mahasiswa = ["Ardy Wirasaputra", "181011450168", "Teknik Informatika", "Ardywirasaputra@gmail.com"];
$daftarMahasiswa = [
    ["Dedeh Pertiwi", "181011450876", "Teknik Informatika", "Dedehpertiwi@gmail.com"],
    ["Zahra Devita", "181011450837", "Teknik Informatika", "Zahradevita@gmail.com"],
    ["Cici Awalia", "181011450993", "Teknik Informatika", "Ciciawalia@gmail.com"]
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
    <!-- cara untuk memanggil 1 array -->
    <h1>Mahasiswa</h1>
    <ul>
        <li>Nama: <?= $mahasiswa[0]; ?></li>
        <li>NIM : <?= $mahasiswa[1]; ?></li>
        <li>Jurusan : <?= $mahasiswa[2]; ?></li>
        <li>Email : <?= $mahasiswa[3]; ?></li>
    </ul>

    <!-- cara untuk memanggil beberapa array -->
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($daftarMahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>