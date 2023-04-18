<?php
usleep(500000);
require "../functions.php";

$keyword = $_GET["keyword"];

$query =
    "SELECT * FROM daftar_handphone
            WHERE
            nama LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            storage LIKE '%$keyword%' OR
            kamera LIKE '%$keyword%'
        ";

$handphone = query($query);
?>

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