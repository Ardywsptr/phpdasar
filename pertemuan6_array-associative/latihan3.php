<?php
// array associative
// definisinya sama seperti array numerik, kecua;i
// key-nya adalah string yang di buat sendiri
$daftarMahasiswa = [
    [
        "nama" => "Dedeh Pertiwi",
        "nim" => "181011450876",
        "jurusan" => "Teknik Informatika",
        "email" => "Dedehpertiwi@gmail.com",
        "gambar" => "foto1.jpg"
    ],
    [
        "nama" => "Zahra Devita",
        "nim" => "181011450837",
        "jurusan" => "Teknik Informatika",
        "email" => "Zahradevita@gmail.com",
        "gambar" => "foto2.jpeg"
    ],
    [
        "nama" => "Cici Awalia",
        "nim" => "181011450993",
        "jurusan" => "Teknik Informatika",
        "email" => "Ciciawalia@gmail.com",
        "gambar" => "foto3.png"
    ]
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
    <!-- cara untuk memanggil beberapa array dengan array associative -->
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($daftarMahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>