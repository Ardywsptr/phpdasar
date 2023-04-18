<?php
// pengulangan pada array -> array numerik
// menggunakan for / foreach
$angka = [12, 8, 92, 1, 3, 99, 30, 1, 2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- memanggil beberapa nilai array dengan cara biasa menggunakan for -->
    <?php for ($i = 0; $i < 6; $i++) : ?>
        <div class="box"><?= $angka[$i] ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <!-- memanggil semua nilai array menggunakan function count() dengan cara biasa menggunakan for -->
    <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div class="box"><?= $angka[$i] ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <!-- memanggil semua nilai array menggunakan function count() dengan cara lebih ringkas menggunakan foreach -->
    <?php foreach ($angka as $a) : ?>
        <div class="box"><?= $a ?></div>
    <?php endforeach; ?>
</body>

</html>