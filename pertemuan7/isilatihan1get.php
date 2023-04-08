<?php 
//cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"]) || 
    !isset($_GET["NIM"])||
    !isset($_GET["EMAIL"])||
    !isset($_GET["prodi"])||
    !isset($_GET["gambar"])){
    //redirect
    header("Location: latihan1get.php");
    exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>detail mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="image/<?= $_GET["gambar"];?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["NIM"]; ?></li>
        <li><?= $_GET["EMAIL"]; ?></li>
        <li><?= $_GET["prodi"]; ?></li>
    </ul>

    <a href="latihan1get.php">kembali ke halaman daftar mahasiswa</a>

</body>
</html>