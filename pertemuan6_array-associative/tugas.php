<?php
$daftarHandphone = [
    [
        "gambar" => "fotohp1.webp",
        "nama" => "Vivo V25e",
        "harga" => 3779000,
        "storage" => "8/128 GB",
        "kamera" => "64/32 MP",
    ],
    [
        "gambar" => "fotohp2.webp",
        "nama" => "Samsung Galaxy A23 5G",
        "harga" => 3999000,
        "storage" => "6/128 GB",
        "kamera" => "50/8 MP",
    ],
    [
        "gambar" => "fotohp3.webp",
        "nama" => "Infinix Zero 5G",
        "harga" => 3499000,
        "storage" => "8/128 GB",
        "kamera" => "48/16 MP",
    ],
    [
        "gambar" => "fotohp4.webp",
        "nama" => "Redmi Note 11 Pro",
        "harga" => 3577000,
        "storage" => "8/128 GB",
        "kamera" => "108/16 MP",
    ],
    [
        "gambar" => "fotohp5.webp",
        "nama" => "Samsung Galaxy A33 5G",
        "harga" => 4699000,
        "storage" => "8/128 GB",
        "kamera" => "48/13 MP",
    ],
    [
        "gambar" => "fotohp6.webp",
        "nama" => "Infinix Note 12 VIP",
        "harga" => 3625000,
        "storage" => "8/256 GB",
        "kamera" => "108/16 MP",
    ],
    [
        "gambar" => "fotohp7.webp",
        "nama" => "Samsung Galaxy M23 5G",
        "harga" => 3289000,
        "storage" => "6/128 GB",
        "kamera" => "50/8 MP",
    ],
    [
        "gambar" => "fotohp8.webp",
        "nama" => "OPPO A96",
        "harga" => 3400000,
        "storage" => "8/256 GB",
        "kamera" => "50/16 MP",
    ],
    [
        "gambar" => "fotohp9.webp",
        "nama" => "realme 9 Pro",
        "harga" => 3599000,
        "storage" => "6/128 GB",
        "kamera" => "64/16 MP",
    ],
    [
        "gambar" => "fotohp10.webp",
        "nama" => "Samsung Galaxy M33 5G",
        "harga" => 2999000,
        "storage" => "6/128 GB",
        "kamera" => "50/8 MP",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Handphone 3 Jutaan</title>
</head>

<body>
    <h1>Daftar Handphone</h1>
    <?php foreach ($daftarHandphone as $handphone) : ?>
        <ul>
            <li><img src="img/<?= $handphone["gambar"]; ?>" alt=""></li>
            <li>Nama : <?= $handphone["nama"]; ?></li>
            <li>Harga : <?= $handphone["harga"]; ?></li>
            <li>Storage : <?= $handphone["storage"]; ?></li>
            <li>Kamera : <?= $handphone["kamera"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>