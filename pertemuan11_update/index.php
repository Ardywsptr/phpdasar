<!-- halaman untuk admin -->
<?php
require "functions.php";
$handphone = query("SELECT * FROM daftar_handphone");
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

    <a href="tambah.php">Tambah data handphone</a>
    <br><br>

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
</body>

</html>