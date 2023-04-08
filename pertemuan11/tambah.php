<?php 
require 'functions.php';

//cek tombol submit dah ditekan po belum
if(isset($_POST["submit"])){


    //cek keberhasilan
    if (tambah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href ='index.php'
            </script>
        ";
    } else {
        echo"
            <script>
            alert('data tidak berhasil ditambahkan!');
            document.location.href ='index.php'
            </script>
        ";
    }
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>tambah data mahasiswa</title>
</head>
<body>
    <h1>tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for = "nama"> nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for = "nim"> nim :</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for = "email"> email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for = "prodi"> prodi :</label>
                <input type="text" name="prodi" id="prodi" required>
            </li>
            <li>
                <label for = "gambar"> gambar :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">tambah data</button>
            </li>
        </ul>
    </form>

</body>
</html>