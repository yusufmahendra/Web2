<?php 
//array multidimensi
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
    <title>Film Terbaru 2023</title>
</head>
<body>
    <h1>Film Terbaru 2023</h1>
    <?php foreach ($film as $flm): ?>
    <ul>
        <li>
            <img src="img/<?= $flm ["gambar"] ;?>">
        </li>
        <li>Judul : <?= $flm["judul"] ?></li>
        <li>Pemain : <?= $flm["pemain"] ?></li>
        <li>Tahun : <?= $flm["tahun"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>