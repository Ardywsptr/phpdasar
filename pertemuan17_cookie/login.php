<?php
session_start();
require 'functions.php';

// cek cookie terlebih dahulu
// if (isset($_COOKIE["login"])) {
//     // cek apakah nilai cookie nya sesuai
//     if ($_COOKIE["login"] == "true") {
//         // jika sesuai maka jalankan session
//         $_SESSION["login"] = true;
//     }
// }

// enkripsi cookie
if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {

    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    // ambil data username berdasarkan id
    $result = mysqli_query($db, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek value (yg sudah di enkripso) dari key cookie apakah cocok dengan username 
    // hash() => function php untuk generate
    if ($key === hash("sha256", $row["username"])) {
        $_SESSION["login"] = true;
    }
}

// jika sudah login maka balik ke halaman index
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek apakah username yang di ketikan ada pada database
    $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    // mysqli_num_rows() => function php untuk hitung ada berapa baris yang dikembalikan pada querry SELECT, klo ada username tersebut didalam tabel user maka nilai nya 1, kalau tidak ada nilai nya 0
    // password_verify('string blm diacak', 'string sdh diacak') => function php untuk membuat password hash menjadi string (kebalikan dari function password_hash())
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // tambahkan session
            $_SESSION["login"] = true;

            // cek remember me (cookie)
            if (isset($_POST["remember"])) {
                // buat cookie yang bertahan 60detik
                // setcookie("login", "true", time() + 60); => tidak ter enkripsi

                // enkripsi cookie dengan algoritma sha256
                setcookie("id", $row["id"], time() + 60);
                setcookie("key", hash("sha256", $row["username"]), time() + 60);
            }

            header("Location: index.php");
            exit;
        };
    }

    $error = true;
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        .input {
            display: block;
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Halaman Login</h1>

    <?php if (isset($error)) : ?>
        <p style="color:red; font-style:italic;">Username/password yang anda masukan salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label class="input" for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label class="input" for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>