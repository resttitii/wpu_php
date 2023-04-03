<?php 
/* 
=== pengkodisian / percabangan ===
1. if .. else

2. if .. else if .. else


3. ternary
- pengganti if else sederhana

4. switch
- if else yg terlalu banyak dapat disingkat dengan switch
*/



//if => print benar
$x = 10;

if($x < 20){
    echo "benar";
}


// if => hasil print kosong karena cuma kasih kondisi bener tp hasil aslinya tuh false
$y = 30;
if($y < 20){
    echo "benar"; //salah maka akan kosong
}


// if else => nah ini baru eksekusi bener dan salah
$z = 10;
if($z < 20){
    echo "benar";
} else{
    echo "salah";
}


// if else if else => nah ini ada elif kek python
$z = 20;
if($z < 20){
    echo "benar";
} else if($z == 20){
    echo "bingo";
} else{
    echo "salah";
}
?>

<!-- contoh penggunaan pengkodisian dengan memberikan warna di dalam tabel baris yang ganjil-->
<!DOCTYPE html>
<html lang='en'>
<head> 
    <meta charset="UTF-8">
    <title>latihan 3</title>
    <style>
        .warna-baris-color{
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++):?>
            <?php if($i %2 == 1):?>
                <tr class="warna-baris-color">
            <?php else : ?>
                <tr>
            <?php endif;?>
                <?php for ($j = 1; $j <= 5; $j++){?>
                    <td><?php echo "$i, $j";?></td>
                <?php } ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>