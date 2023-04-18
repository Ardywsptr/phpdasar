<?php
require 'functions.php';

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
        label {
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
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>