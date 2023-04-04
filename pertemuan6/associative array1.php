<?php
//print_r lebih ringkas daripada var_dump
//print_r gada tipe data sama jumlah karakter di dalamnya







?>


<!DOCTYPE html>
<html>
<head>
    <title>coba array</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php 
    $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9]
    ?>

    <?php foreach($angka as $a):?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach;?>
</body>
</html>




<!--associative array-->

<!DOCTYPE html>
<html>
<head>
    <title>coba array</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
    $angka1 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]; //ada 3 elemen array di dalam array besar
    echo $angka1[1][1];
    ?>

    <?php foreach($angka1 as $a1):?>
        <?php foreach($a1 as $a11):?>
            <div class="kotak"><?= $a11; ?></div>
        <?php endforeach;?>
        <div class="clear"></div>
    <?php endforeach;?>
</body>
</html>

