<?php 
/*
----- USER-DEFINED FUNCTION -----

*/

function salam($waktu, $nama){
    return "Selamat $waktu, $nama!";
}



?>


<!--contoh 1-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan function</title>
</head>
<body>
    <h1><?php echo salam("pagi", "titi"); ?></h1>
</body>
</html>


<?php 
function salam1($waktu1 = "datang", $nama1 = "admin"){
    return "Selamat $waktu1, $nama1!";
}
?>


<!--contoh 2-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan function</title>
</head>
<body>
    <h1><?php echo salam1(); ?></h1> <!--kalau ga diisi parameter apa2 maka akan diisi default yang udah diatur => datang sm admin-->
</body>
</html>


<!--contoh 3-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan function</title>
</head>
<body>
    <h1><?php echo salam1("pagi"); ?></h1> <!--kalau ga diisi parameter cuma satu ajaa maka sisae bakal diisi default-->
</body>
</html>