<?php
// menghilangkan session secara manual dengan function session_destroy()

session_start();
session_destroy();

// jika ingin memunculkan session harus balik ke halaman 1 yaitu halaman di mana session dibuat