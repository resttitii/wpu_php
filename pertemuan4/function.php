<?php 
/*
----- FUNCTION -----
- potongan program atau baris-baris kode yang dibuat untuk mempermudah dalam membuat program
- program dpt dikasih nama n dapat dipanggil berulang ulang
- php.net/manual/en/funcref.php

jenis
- built-in function => sudah dimiliki php
- user-defined fuction => yg dibuat oleh user

BUILT-IN FUNCTION
- date/time => akan sering dipake
    a. date()
        l itu buat hari
        d itu tanggal
        M itu bulan
        m itu bulan tp dalam bentuk angka
        Y itu tahun
    b. time()
    c. mktime()
        untuk membuat sendiri detik yang telah berlalu
        parameternya ada 6 => jam, menit, detik, bulan, tanggal, tahun
        
    d. strtotime()
        masukkan format tanggal maka akan keluar detiknya

- string
    a. strlen()
        untuk menghitung panjang string
    b. strcmp()
        untuk membandingkan 2 string
    c. explode()
        untuk memecah string menjadi array
    d. htmlspecialchars()
        function khusus yang menjaga kita dari orang yang mau masuk ke website kita. ex: hacker


- utility
    a. var_dump()
        mencetak isi dari var, array, object
    b. isset()
        mengecek apakah sebuah var sudah dibikin atau belum => true atau false
    c. empty()
        mengecek apakah var kosong atau tidak
    d. die()
        memberhentikan program
    e. sleep()
        memberhentikan beberapa detik

*/

?>


<?php 
//percobaan date
    //date(); =>>> gabisa soalnya minimal ada 1 parameter dan belum ada echo 
    date("l"); //tidak tampil apa2 karena lom panggil echo
    echo date("l"); //tergantung kita cobaiinya hari itu jg. tampilkan l berarti tampilkan harinya saja
    echo date("l, d-M-Y");


//percobaan time
    // UNIX Timestamp / EPOCH TIME => detik yang telah berlalu sejak 1 januari 1970
    echo time(); //bole gapake parameter
    echo date("l", time() + 172800); //172800 => detik dalam 2 hari >> 60 * 60 * 24 * 2
    echo date("l", time() + 60*60*24*100); //untuk hitung 100 hari ke depan hari apa
    echo date("l", time() - 60*60*24*100); //untuk 100 hari ke belakang
    echo date("d M Y", time() + 60*60*24*100);


//percobaan mktime
    // echo mktime(0, 0, 0, 0, 0, 0, 0); parameternya ada 6
    echo mktime(0, 0, 0, 7, 16, 2003); //detik yg telah berlalu dari aku lair
    echo date("l", mktime(0, 0, 0, 7, 16, 2003));


//percobaan strtotime
    echo strtotime("16 july 2003");
    echo date("l", strtotime("16 july 2003"));
?>