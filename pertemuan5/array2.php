<?php 
/*
--- pengulangan pada array ---
// for atau foreach untuk setiap()

gunakan for untuk tampilan user, bukan var_dump itu buat dev misal pas bug


php echo dpt diganti mnjadi =

*/

$angka = [16, 24, 40, 60, 72, 88, 100, 120]


?>



<!DOCTYPE html>
<html>
<head>
    <title>array</title>
    <style>
        .kotak{
            width: 50px;
            height: 50p;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{clear:both;}
    </style>
</head>
<body>
    <?php
    for($i = 0; $i < count($angka); $i++){ 
    
    ?>

        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>
    <?php foreach($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

<!--gaya template-->
<div class="clear"></div>

<?php foreach($angka as $a) :?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

</body>
</html>