<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>

<body>
    <?php if (isset($_POST["submit"])) : ?>
        <h1>Hallo, Selamat Datang <?= $_POST["username"]; ?> !</h1>
    <?php endif; ?>
    <!-- pada form untuk mengirim data wajib ada atribut action (alamat pengirim) dan method -->
    <!-- secara default pada form mempunyai action kosong (kirim ke diri sendiri) dan method nya GET -->
    <!-- jika atribut action tidak mempunyai value maka akan mengirim ke diri nya sendiri -->
    <!-- name pada input menjadi key untuk pemanggilan data yang dikirim ke $_POST -->
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>

</html>