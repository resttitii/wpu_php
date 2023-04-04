<!--array numerik-->
<?php
$mahasiswa = [
    ["resti", "999", "resti@gmail.com", "si"],
    ["reti", "934", "reti@gmail.com", "ti"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>Nama:<?php echo $mhs[0]; ?></li>
        <li>NIM:<?php echo $mhs[1]; ?></li>
        <li>Email<?php echo $mhs[2]; ?></li>
        <li>jurusan<?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>



<?php 
/*
array numerik => array yang indeksnya angka
array assosiatif => array yang kita sendiri bikin indeknya => key-nya adalah string yang kita buat sendiri
*/


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
    //"tugas" => [90, 60, 100]
    ]
]; //array assosiatif yg indeknya nama, nim, dsb



//panggil assosiatif
//echo $mahasiswa1["prodi"];
echo $mahasiswa1["1"]["EMAIL"];
//echo $mahasiswa1["1"]["tugas"][2];
?>




<!--array assosiatif-->
<!DOCTYPE html>
<html>
<head>
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <?php foreach($mahasiswa1 as $mhs1): ?>
    <ul>
        <li>
            <img src="image/<?= $mhs1["gambar"]?>">
        </li>
        <li>Nama:<?php echo $mhs1["nama"]; ?></li>
        <li>NIM:<?php echo $mhs1["NIM"]; ?></li>
        <li>Email<?php echo $mhs1["EMAIL"]; ?></li>
        <li>jurusan<?php echo $mhs1["prodi"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>