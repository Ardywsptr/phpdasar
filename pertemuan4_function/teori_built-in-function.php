<?php

// FUNCTION DATE/TIME

// Date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-F-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time() + 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
// echo mktime(0, 0, 0, 3, 1, 1999);
// echo date("l", mktime(0, 0, 0, 3, 1, 1999));

// strtotime
// echo strtotime("1 march 1999");
// echo date("l", strtotime("1 march 1999"));



// FUNCTION STRING
// strlen () -> untuk menghitung panjang sebuah string
// strcmp () -> untuk membandingkan 2 buah string
// explode () -> untuk memecah sebuah string menjadi array
// htmlspecialchars -> untuk menjaga code dri hacker



//  FUNCTION UTILITY/BANTUAN
// var_dump() -> untuk mencetak isi dari sebuah variabel, array, objek
// isset() -> untuk mengecek apakah sebuah variabel sudah pernah dibuat atau belum, output yang dikeluarkan berupa boolean
// empty() -> untuk mengecek apakah nilai dari varibel ada isinya atau tidak, output yang dikeluarkan berupa boolean
// die() -> untuk menghentikan sebuah program
// sleep() -> untuk menghentikan sementara sebuah program