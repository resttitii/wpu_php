<?php 
/*
== var scope / lingkup variable ==



*/

//$x = 10; //var lokal untuk file ini
// echo $x; =>> bakal tampil angka 10

$x = 10; //var lokal untuk halaman

function tampilx(){
    //$x = 20;
    //echo $x; //var lokal yang untuk function itu aja
    
    global $x; //akan memanggil var x yang ada di luar function
    echo $x;

}

tampilx();
echo "<br>";
//echo $x; //bakal tampil nilai 10 yang ada di var luar function



?>