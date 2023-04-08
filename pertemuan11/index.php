<?php
//menyiapkan data 
require 'functions.php'; //bisa pake include
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <a href="tambah.php">tambah data mahasiswa</a>
    <br><br>


    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>no.</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>nama</th>
            <th>nim</th>
            <th>email</th>
            <th>prodi</th>
        </tr>
        
        <?php $i = 1; ?>

        <?php foreach($mahasiswa as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> | 
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
            </td>
            <td>
                <img src="image/<?= $row["gambar"]; ?>">
            </td>
            <td><?= $row ["nama"] ?></td>
            <td><?= $row ["nim"] ?></td>
            <td><?= $row ["email"] ?></td>
            <td><?= $row ["prodi"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach;?>

    </table>

</body>
</html>