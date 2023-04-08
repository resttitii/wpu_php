<?php
$mahasiswa1 = [[
    "nama" => "resti ika pertiwi",
    "NIM" => "212410103005",
    "EMAIL" => "resti@gmail.com",
    "prodi" => "informatika",
    "gambar" => "kucing.jpg",
    ],
    [
    "nama" => "restiti",
    "NIM" => "212410103007",
    "EMAIL" => "restiti@gmail.com",
    "prodi" => "informatika",
    "gambar" => "kucing1.jpg",
    ]
];
?>




<!DOCTYPE html>
<html>
<head>
    <title>get</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa1 as $mhs1):?>
        <li>
            <a href="isilatihan1get.php?
            nama=<?= $mhs1["nama"];?>
            &NIM=<?= $mhs1["NIM"];?>
            &EMAIL=<?= $mhs1["EMAIL"];?>
            &prodi=<?= $mhs1["prodi"];?>
            &gambar=<?= $mhs1["gambar"];?>"><?= $mhs1["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
