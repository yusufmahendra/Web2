<?php 
//array multidimensi/ array didalam array/ array bersarang 
$mahasiswa =[
    ["Yusuf Mahendra", "22510011", "Sistem Informasi", "yusuf_22510011@stimata.ac.id"],
    ["Mahendra", "22610011", "Sistem Informasi", "yusuf_22610011@stimata.ac.id"],
    ["Yusuf", "22610012", "Teknologi Informasi", "yusuf_22610012@stimata.ac.id"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <?php foreach($mhs as $m) : ?>
        <li><?php echo $m; ?></li>
            <?php endforeach; ?>
    </ul>
    <?php endforeach; ?>
</body>
</html>