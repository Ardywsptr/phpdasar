<?php
session_start();

// jika belum login maka balik ke halaman login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require "functions.php";

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
            <script>
                alert('data berhasil di hapus!');
                // redirect versi javascript
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('data gagal di hapus!');
                // redirect versi javascript
                document.location.href = 'index.php';
            </script>
        ";
}
