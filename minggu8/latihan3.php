<?php 
//array multidimensi
$mahasiswa = [
    [
    "nama" => "Yusuf Mahendra", 
    "nim" => "22510011", 
    "jurusan" => "Sistem Informasi", 
    "email" => "yusuf_22510011@stimata.co.id",
    "tugas" => ["100, 90, 80"]
    ],

    [
    "nama" => "Mahendra", 
    "nim" => "22610011", 
    "jurusan" => "Teknologi Informasi", 
    "email" => "mahendra_22510011@stimata.co.id"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <?php echo $mahasiswa[0]["tugas"][1]; ?>
</body>

</html>