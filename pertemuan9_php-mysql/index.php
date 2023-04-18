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

    <table border="1" cellpadding="10" cellspacing="0">
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
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?php echo $row["gambar"] ?>" alt="" width="90"></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["harga"] ?></td>
                <td><?php echo $row["storage"] ?></td>
                <td><?php echo $row["kamera"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>

</html>