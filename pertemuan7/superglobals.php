<?php 
/*
=== superglobals ===
- var yang dimiliki php yang bisa diakses kapanpun dan dimanapun

--- contoh --- => semuanya tipe array asosiatif => perlakukan seperti array asosiatif
- $_GET
- $_POST
- $_REQUEST
- $_SESSION
- $_COOKIE
- $_SERVER
- $_ENV

*/

var_dump($_GET); //isinya kosong
var_dump($_POST); //isinya kosong
var_dump($_SERVER); //sudah ada isi => informasi terkait server
echo $_SERVER["SERVER_NAME"]; //isinya => localhost

echo "<br>";

?>