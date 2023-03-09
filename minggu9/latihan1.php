<?php
$film = [
    [
    "judul" => "Surga di Dawah Langit", 
    "pemain" => "Neona Ayu", 
    "tahun" => "2023",
    "gambar" => "1.jpg"
    ],

    [
    "judul" => "Iblis dalam Darah", 
    "pemain" => "Michelle Joan", 
    "tahun" => "2023",
    "gambar" => "2.jpg"
    ],

    [
    "judul" => "Losmen Melati", 
    "pemain" => "Alexandra Gottardo", 
    "tahun" => "2023",
    "gambar" => "3.jpg"
    ],

    [
    "judul" => "Perjanjian Gaib", 
    "pemain" => "Dennis Adhiswara", 
    "tahun" => "2023",
    "gambar" => "4.jpg"
    ],

    [
    "judul" => "Kun Ana Wa Anta", 
    "pemain" => "Muzakki Ramdhan", 
    "tahun" => "2023",
    "gambar" => "5.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>

<body>
    <h1>Daftar Film</h1>
<ul>
    <?php foreach ($film as $flm):?>
        <li>
            <a href="latihan2.php?judul=<?= $flm["judul"]; ?>&pemain= <?= $flm["pemain"]; ?>&tahun= <?= $flm["tahun"]; ?>&gambar=<?= $flm["gambar"];?> "><?= $flm["judul"]; ?></a>
        </li>

    <?php endforeach; ?>
</ul>   
</body>
</html>