<?php
// ini adalah komentar
// ini jg komentar

/*
ini komentar
buat banyak baris
*/


/*----- pertemuan 2 - php dasar -----
sintaks php

1. standar output
- echo
- print
- print_r => buat array
- var dump => isi dari var

2. penulisan sintaks php
- dapat nulis html di dalemnya
- php di dalam html => ini yang bakal dipake

3. variable dan tipe data
- nama tidak boleh angka tp boleh mengandung angka

4.operator matematika
+, -, *, /, % (modulo)

5. penggabungan string
menggunakan tanda . => titik

6. operator assigntmenr
=, +=, -=, /=, %=, .= 

7. operator perbandingan
<, >, <=, >=

8. identitas
===, !==

9. operator logika
&&, ||, !
*/

//penggunaan standar output
    echo "resti ika pertiwi";
    print "ini titi";
    print_r("halow titi");
    var_dump("itung deh ini"); //nampilin tipe data dan ukurannya
    echo 123; //gaperlu kutip
    echo true; //hasilnya 1
    echo false; //hasilnya nol



//contoh penggunaan var => jangan lupa titik koma
$nama = "titikun";
$nama1 = "titi awaw"

?>



<?php 

//contoh penggunaan operator matematika
echo 1 + 1;
$x = 10;
$y = 6;
echo $x * $y;


//conoth penggabungan var menggunakan titik
$nama_depan = "resti";
$nama_belakang = "ika";
echo $nama_depan . " " . $nama_belakang;

$nama2 = "resti";
$nama2 .= " ";
$nama2 .= "pertiwi";
echo $nama2;


//contoh penggunaan var_dump
var_dump(1>5); //false

var_dump(1 === "1"); //false karena tipe e beda

$t = 10;
var_dump($t < 20 && $x % 2 == 0);

?>


<!--contoh penggunaan php di dalam html-->
<!DOCTYPE html>
<html lang='en'>
<head> 
    <meta charset="UTF-8">
    <title>BELAJAR PHP</title>
</head>
</html>

<body>
    <h1>Halo, selamat datang <?php echo $nama;?></h1>
    <p><?php echo "ini adalah pragraf"; ?></p>
</body>


<!--contoh penggunaan html di dalam php-->
<!DOCTYPE html>
<html lang='en'>
<head> 
    <meta charset="UTF-8">
    <title>BELAJAR PHP</title>
</head>
</html>

<body>
    <?php 
        echo "<h1>Halooooo selamat dateng!</h1>"
    ?>
</body>