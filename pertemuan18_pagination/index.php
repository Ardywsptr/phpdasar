<!-- halaman untuk admin -->
<?php
session_start();
require "functions.php";

// jika belum login maka balik ke halaman login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


// pagination konfigurasi
// ceil() => function php untuk membulatkan hasil pecahan ke atas
// floor() => function php untuk membulatkan hasil pecahan ke bawah
// round() function php untuk membulatkan hasil pecahan jika <5 kebawah dan >5 keatas
$jmlDataPerHal = 4;
$result = mysqli_query($db, "SELECT * FROM daftar_handphone");
$jmlData = mysqli_num_rows($result);
$jmlHal = ceil($jmlData / $jmlDataPerHal);

// mencari hal aktif dgn pengkondisian normal
// if (isset($_GET["halaman"])) {
//     $halAktif = $_GET["halaman"];
// } else {
//     $halAktif = 1;
// }

//  mencari hal aktif dgn pengkondisian operator ternary
$halAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

// jika berada di halaman 1, awal data = 0
// jika berada di halaman 2, awal data = 4
// jika berada di halaman 3, awal data = 8
$awalData = ($jmlDataPerHal * $halAktif) - $jmlDataPerHal;


// kueri untuk menampilkan seluruh halaman
// $handphone = query("SELECT * FROM daftar_handphone");

// kueri menggunakan LIMIT untuk pagination
// dengan 2 value, value pertama merupakan urutan mulai dari mana dengan index mulai dari 0 & value kedua merupakan mau berapa data yang ditampilkan
$handphone = query("SELECT * FROM daftar_handphone LIMIT $awalData, $jmlDataPerHal");

// jika tombol cari di klik
if (isset($_POST["cari"])) {
    $handphone = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Handphone</h1>
    <!-- tambah data -->
    <a href="tambah.php">Tambah data handphone</a>
    <br><br>
    <!-- searching -->
    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="masukkan keyword anda..." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <!-- pagination -->
    <?php if ($halAktif > 1) : ?>
        <a href="?halaman=<?= $halAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jmlHal; $i++) : ?>
        <?php if ($i == $halAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: black;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halAktif < $jmlHal) : ?>
        <a href="?halaman=<?= $halAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

    <br>
    <br>
    <!-- table data -->
    <table border=" 1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Storage</th>
            <th>Kamera</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($handphone as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"] ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('apakah anda yakin?');">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"] ?>" alt="" width="90"></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["harga"] ?></td>
                <td><?= $row["storage"] ?></td>
                <td><?= $row["kamera"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
    <br>
    <br>
    <!-- logout -->
    <a href="logout.php">Logout</a>
</body>

</html>