<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode POST</title>
</head>
<body>
    <?php
    if (isset($_POST["submit"])) : ?>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
        <?php endif; ?>


    <from action="latihan4.php" method="POST">
        Masukan Nama Film :
        <input type="text" nama="nama">
        <br>
        <button type="submit" nama="submit">
        kirim
        </button>
    </from>
</body>
</html>