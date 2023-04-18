<?php
$db = mysqli_connect("localhost", "root", "", "phpdasar");
$result = mysqli_query($db, "SELECT * FROM daftar_handphone");

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

var_dump($rows);
