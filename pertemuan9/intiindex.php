<?php 
//koneksi ke database => hostname, username, pass, nama database
$conn = mysqli_connect("localhost", "root", "", "phpdasar1");


//ambil data mahasiswa dari tabel mahasiswa / query => koneksi ke database, sintaks query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

/*
=== ambil data (fetch) dari object result ===
4 cara
1. mysqli_fetch_row() => mengembalikan array numerik
2. mysqli_fetch_assoc() => mengembalikan array asosiatif
3. mysqli_fetch_array() =>
4. mysqli_fetch_object() => */

//$mhs = mysqli_fetch_row($result);
//var_dump($mhs);
//var_dump($mhs[3]);

//$mhs = mysqli_fetch_assoc($result);
//var_dump($result);
//var_dump($mhs["prodi"]);

//$mhs = mysqli_fetch_array($result);
//var_dump($result);
//var_dump($mhs[3]);

//$mhs = mysqli_fetch_object($result);
//var_dump($mhs -> nama);


//while($mhs = mysqli_fetch_assoc($result)){

//}



?>



<!DOCTYPE html>
<html>
<head>
    <title>halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

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

        <?php while($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> | 
                <a href="">hapus</a>
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
        <?php endwhile;?>

    </table>

</body>
</html>