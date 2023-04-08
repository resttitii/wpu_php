<?php 
//cek apakah tombol submit sudah diklik atau belum
if (isset($_POST["submit"])){
    //cek username
    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
        //jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else{
        //jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>login admin</title>
</head>
<body>
    <h1>selamat datang, admin!</h1>
    
    <?php if (isset($error)): ?>
        <p style="color : red; font-style:italic;">username / password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">login</button>
            </li>
        </form>
    </ul>

</body>
</html>