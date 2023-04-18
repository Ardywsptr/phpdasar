<?php
// pertemuan 2 - PHP Dasar
// sintaks PHP

// standar output
// echo, print
// print_r
// var_dump

// penulisan sintaks PHP
// 1. PHP di dalam HTML <- direkomendasikan
// 2. HTML di dalam PHP

// variabel dan tipe data
// variabel
// diawali dengan $
// tidak boleh di awali dengan angka, tapi boleh mengandung angka
$usia = 24;
$jenis_kelamin = "Laki-laki";
// echo "Saya berumur $usia tahun dan saya adalah seorang $jenis_kelamin";

// penggabungan string/concatention/concat
// menggunakan . (titik)
// echo $usia." dan ".$jenis_kelamin;

// perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");  <- menghasilkan true karena hanya cek nilai bukan sama tipe data nya

// perbandingan identitas
// ===, !==
// var_dump(1 === "1"); <- menghasilkan false karena tipe datanya berbeda walaupun nilai nya sama

// Logika
// &&, ||, ! <- AND, OR, NOT
$x = 30;
// var_dump($x < 20 && $x % 2 == 0); <-- menghasilkan false karena kedua perbandingan diharuskan true, jika salah satu bernilai false maka hasil nya false
// var_dump($x < 20 || $x % 2 == 0); <-- menghasilkan true karena ada salah satu perbandingan bernilai true, akan menghasilkan false apabila kedua perbandingan bernilai false
?>