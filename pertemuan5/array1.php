<?php 
/*
--- ARRAY ---
- sebuah var yang bisa menampung lebih dari 1 nilai
- nilai dalam array disebut elemen
- elemen dalam array boleh tipe yang berbeda misal string sm angka
- pasangan antara key dan value
- key-nya adalah index yang dimulai dari 0
 */

//membuat array
//cara lama
$hari = array("senin", "selasa", "rabu");

//cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];

//menampilkan array
//gunakan var_dump() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//menampilkan satu elemen
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

//menambahkan elemen baru pada array
var_dump($hari);
$hari [] = "kamis";
$hari [] = "jumat";
echo "<br>";
var_dump($hari);


?>