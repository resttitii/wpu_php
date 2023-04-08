<?php 
require 'functions.php';

//ambil data url
$id = $_GET["id"];

//query
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek tombol submit dah ditekan po belum
if(isset($_POST["submit"])){


    //cek keberhasilan
    if (ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href ='index.php'
            </script>
        ";
    } else {
        echo"
            <script>
            alert('data tidak berhasil diubah!');
            document.location.href ='index.php'
            </script>
        ";
    }
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h1>ubah data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for = "nama"> nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>"required>
            </li>
            <li>
                <label for = "nim"> nim :</label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for = "email"> email :</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for = "prodi"> prodi :</label>
                <input type="text" name="prodi" id="prodi" required value="<?= $mhs["prodi"]; ?>">
            </li>
            <li>
                <label for = "gambar"> gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">ubah data</button>
            </li>
        </ul>
    </form>

</body>
</html>
