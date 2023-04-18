<!-- halaman untuk admin -->
<?php
// koneksi ke database
// dengan urutan parameter : nama host -> username mysql -> password mysql -> nama database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel daftar handphone / query data daftar handphone
// dengan urutan parameter : koneksi database -> query sesuai perintah
$result = mysqli_query($db, "SELECT * FROM daftar_handphone");
// $result itu  ibarat lemarinya

// cara untuk ambil data (fetch) daftar handphone dari object result :
// mysqli_fetch_row() -> mengembalikan data berupa array numerik
// mysqli_fetch_assoc() -> mengembalikan data berupa array associative -> direkomendasikan
// mysqli_fetch_array() -> mengembalikan data berupa array numerik dan associative
// mysqli_fetch_object() -> mengembalikan data berupa object

// while ($row = mysqli_fetch_assoc($result)) {
//     var_dump($row);
// }
// $row itu ibarat bajunya

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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
        <?php endwhile ?>
    </table>
</body>

</html>