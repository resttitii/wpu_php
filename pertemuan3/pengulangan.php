<?php 
/* 
=== pengulangan ===
1. for
- for(inisialisasi, terminasi, increment/decrement)
- inisialisasi => var awal
- terminasi => memberhentikan pengulangan
- increment/decrement => supaya pengulangannya bisa maju atau mundur)
- tanda kurwal bisa diganti : untuk di awal dan akhir bisa diganti end for;, end if;, dll itu tergantung gunain apa

2. while
sama konsepnya dengan for, tetapi yang membedakan penulisan kondisianya

3. do while 
- lakukan dulu baru dicek kondisinya
- mirip while, tetapi ada perbedaan
- ketika kondisnya false maka akan dijalankan sekali, 
- kalo while kan tidak akan dijalankan samsek

4. foreach
- pengulangan khusus array
*/

//-----for-----
//for($i = 0; $i < 5; $i++ ) { // i akan dimulai dari 0 dan berulang kurang dari 5
//    echo "Hello World! <br>"; // br atau brealdown
//}

//-----while-----
//$i = 0;
//while($i < 5){
//    echo "Hello World! <br>";
//$i++;
//}

//-----do while-----
//$i = 0; //kalo 10 kan brrti bakal false jd bakal ditampilin sekali doang
//do{
//    echo "Hello World!";
//$i++;
//} while($i < 5);
?>


<!--contoh penggunaan for php dalam html -->
<!DOCTYPE html>
<html lang='en'>
<head> 
    <meta charset="UTF-8">
    <title>latihan 3</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for($i = 1; $i <= 3; $i++){ 
                echo "<tr>";
                for($j = 1; $j <= 5; $j++){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>


<!--contoh penggunaan for php dalam html => seperti template yang sering digunakan => dalam html boleh berkali-kali untuk buka tutup php-->
<!DOCTYPE html>
<html lang='en'>
<head> 
    <meta charset="UTF-8">
    <title>latihan 3</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++){?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++){?>
                    <td><?php echo "$i, $j";?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>


<!--contoh penggunaan for php dalam html => dengan pengubahan tanda kurung kurawal menjadi tanda titik dua : dan endfor; -->
<!DOCTYPE html>
<html lang='en'>
<head> 
    <meta charset="UTF-8">
    <title>latihan 2</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for($i = 1; $i <= 3; $i++): 
                echo "<tr>";
                for($j = 1; $j <= 5; $j++){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            endfor;
        ?>
    </table>
</body>
</html>


<!--contoh penggunaan for php dalam html => dengan pengubahan tanda kurung kurawal menjadi tanda titik dua : dan endfor; -->
<!DOCTYPE html>
<html lang='en'>
<head> 
    <meta charset="UTF-8">
    <title>latihan 3</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++):?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++){?>
                    <td><?php echo "$i, $j";?></td>
                <?php } ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>