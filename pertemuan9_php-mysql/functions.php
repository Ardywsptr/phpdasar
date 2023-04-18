<?php
// koneksi ke database
// dengan urutan parameter : nama host -> username mysql -> password mysql -> nama database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// function untuk menamppilkan data (read)
function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
