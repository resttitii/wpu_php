<?php 

$mahasiswa = [[
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
<html lang="en">
<head>
    <title>get</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs):?>
        <ul>  
            <li><img src="image/<?=$mhs["gambar"]; ?>"></li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["NIM"]; ?></li>
            <li><?= $mhs["EMAIL"]; ?></li>
            <li><?= $mhs["prodi"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>




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
            <a href="isilatihanget.php?nama=<?= $mhs1["nama"];?>"><?= $mhs1["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
