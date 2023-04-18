<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Percabangan</title>
    <style>
        .warna_baris {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <!-- ini merupakan v.1 tanpa template -->
    <table border="1" cellpadding="20" cellspacing="0">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            if ($i % 2 == 0) {
                echo "<tr class='warna_baris'>";
            } else {
                echo "<tr>";
            }
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i,$j for v.1 </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <!-- ini merupakan v.2 menggunakan template -->
    <!-- <table border="1" cellpadding="30" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna_baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i,$j for v.2" ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table> -->
</body>

</html>