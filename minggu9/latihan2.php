<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
</head>
<body>
    <ul>
        <li><img src="<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["judul"]; ?></li>
        <li><?= $_GET["pemain"]; ?></li>
        <li><?= $_GET["tahun"]; ?></li>
    </ul>
    
    <a href="latihan1.php">Kembali ke halaman sebelumnya</a>
</body>

</html>