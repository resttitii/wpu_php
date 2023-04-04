<?php
$mahasiswa = ["resti ika pertiwi", "212410103005", "informatika", "resti@gmail.com"];

//array multidimensi => array di dalem array

$mahasiswa1 = [["resti ika pertiwi", "212410103005", "informatika", "resti@gmail.com"],
                ["titi", "2124", "ti", "tii@gmail.com"]
];

?>


<!--contoh 1-->
<!DOCTYPE html>
<html>
<head>
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <ul>
        <li>resti ika pertiwi</li>
        <li>212410103005</li>
        <li>informatika</li>
        <li>resti@gmail.com</li>
    </ul>
</body>
</html>


<!--contoh 2 dengan looping-->
<!DOCTYPE html>
<html>
<head>
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?= $mhs ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>


<!--contoh 3-->
<!DOCTYPE html>
<html>
<head>
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <ul>
            <li><?= $mahasiswa[0]; ?></li>
            <li><?= $mahasiswa[1]; ?></li>
            <li><?= $mahasiswa[2]; ?></li>
            <li><?= $mahasiswa[3]; ?></li>
    </ul>
</body>
</html>


<!--contoh 4-->
<!DOCTYPE html>
<html>
<head>
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <?php foreach($mahasiswa1 as $mhs1):?>
    <ul>
            <li>Nama:<?= $mhs1[0]; ?></li>
            <li>NIM:<?= $mhs1[1]; ?></li>
            <li>Prodi:<?= $mhs1[2]; ?></li>
            <li>email:<?= $mhs1[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>