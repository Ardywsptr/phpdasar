<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Tanpa menggunakan perulangan -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td>3,2</td>
            <td>3,3</td>
            <td>3,4</td>
            <td>3,5</td>
        </tr>
    </table> -->





    <!-- menggunakan perulangan dengan for ver.1 -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i,$j for v.1 </td>";
            }
            echo "</tr>";
        }
        ?>
    </table> -->

    <!-- menggunakan perulangan dengan while ver.1 -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php
        $i = 1;
        while ($i <= 3) {
            echo "<tr>";
            $j = 1;
            while ($j <= 5) {
                echo "<td>$i,$j while v.1</td>";
                $j++;
            }
            echo "</tr>";
            $i++;
        }
        ?>
    </table> -->

    <!-- menggunakan perulangan dengan do..while ver.1 -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php
        $i = 1;
        do {
            echo "<tr>";
            $j = 1;
            do {
                echo "<td>$i,$j do..while v.1</td>";
                $j++;
            } while ($j <= 5);
            echo "</tr>";
            $i++;
        } while ($i <= 3);
        ?>
    </table> -->





    <!-- menggunakan perulangan dengan for ver.2 tamplate -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) { ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) { ?>
                    <td><?php echo "$i,$j for v.2" ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table> -->

    <!-- menggunakan perulangan dengan while ver.2 tamplate -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php
        $i = 1;
        while ($i <= 3) { ?>
                <tr>
                    <?php
                    $j = 1;
                    while ($j <= 5) { ?>
                        <td><?php echo "$i,$j while v.2" ?></td>
                    <?php $j++;
                    } ?>
                <tr>
        <?php $i++;
        } ?>
    </table> -->

    <!-- menggunakan perulangan dengan do..while ver.2 tamplate -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php
        $i = 1;
        do { ?>
                <tr>
                    <?php
                    $j = 1;
                    do { ?>
                        <td><?php echo "$i,$j do..while v.2" ?></td>
                    <?php $j++;
                    } while ($j <= 5);
                    ?>
                </tr>
            <?php $i++;
        } while ($i <= 3);
            ?>
    </table> -->





    <!-- menggunakan perulangan dengan for ver.3 tamplate -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i,$j for v.3" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table> -->

    <!-- menggunakan perulangan dengan while ver.3 tamplate -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php
        $i = 1;
        while ($i <= 3) : ?>
                <tr>
                    <?php
                    $j = 1;
                    while ($j <= 5) : ?>
                        <td><?php echo "$i,$j while v.3" ?></td>
                    <?php $j++;
                    endwhile; ?>
                <tr>
        <?php $i++;
        endwhile; ?>
    </table> -->

    <!-- menggunakan perulangan dengan do..while ver.3 tamplate -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php
        $i = 1;
        do { ?>
                <tr>
                    <?php
                    $j = 1;
                    do { ?>
                        <td><?php echo "$i,$j do..while v.3" ?></td>
                    <?php $j++;
                    } while ($j <= 5);
                    ?>
                </tr>
            <?php $i++;
        } while ($i <= 3);
            ?>
    </table> -->





    <!-- menggunakan perulangan dengan for ver.4 tamplate -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i,$j for v.4" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table> -->

    <!-- menggunakan perulangan dengan while ver.4 tamplate -->
    <!-- <table border="1" cellpadding="20" cellspacing="0">
        <?php
        $i = 1;
        while ($i <= 3) : ?>
                <tr>
                    <?php
                    $j = 1;
                    while ($j <= 5) : ?>
                        <td><?= "$i,$j while v.4" ?></td>
                    <?php $j++;
                    endwhile; ?>
                <tr>
        <?php $i++;
        endwhile; ?>
    </table> -->

    <!-- menggunakan perulangan dengan do..while ver.4 tamplate -->
    <table border="1" cellpadding="20" cellspacing="0">
        <?php
        $i = 1;
        do { ?>
            <tr>
                <?php
                $j = 1;
                do { ?>
                    <td><?= "$i,$j do..while v.4" ?></td>
                <?php $j++;
                } while ($j <= 5);
                ?>
            </tr>
        <?php $i++;
        } while ($i <= 3);
        ?>
    </table>
</body>

</html>