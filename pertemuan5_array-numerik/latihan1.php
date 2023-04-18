<?php
// array
// variabel yang dapat memiliki banyak nilai
// nilai pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key nya adalah indeks yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 nilai pada array
// echo $arr1[1];
// echo "<br>";
// echo $bulan[2];

// menambahkan nilai baru pada array
var_dump($hari);
echo "<br>";
$hari[] = "Kamis";
$hari[] = "Jum'at";
var_dump($hari);
