<!-- halaman untuk admin -->
<?php
session_start();

// jika belum login maka balik ke halaman login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require "functions.php";

$handphone = query("SELECT * FROM daftar_handphone");

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
    <!-- jika tidak menggunakan jquery script tidak bisa di letakan di head, harus di bawah sebelum tutup body -->
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/script.js"></script>

    <title>Halaman Admin</title>

    <style>
        .loader {
            width: 28px;
            position: absolute;
            top: 113px;
            right: 220px;
            z-index: -1;
            display: none;
        }

        @media print {

            .tambah,
            .form-cari,
            .logout,
            .aksi {
                display: none;
            }
        }
    </style>
</head>

<body>
    <h1>Daftar Handphone</h1>

    <a class="tambah" href="tambah.php">Tambah data handphone</a>
    <br><br>

    <form class="form-cari" action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="masukkan keyword anda..." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>

        <img class="loader" src="img/loader.gif" alt="">
    </form>
    <br><br>

    <div id="container">
        <table border=" 1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th class="aksi">Aksi</th>
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
                    <td class="aksi">
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
    </div>

    <br>

    <a class="logout" href="logout.php">Logout</a>

</body>

</html>