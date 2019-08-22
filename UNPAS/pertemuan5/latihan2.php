<?php

    // belajar array sesungguhnya
    // for / foreach
    $angka = [21, 34, 51, 39, 1];

?>

<style>

    .kotak{
        width : 50px ;
        height : 50px ;
        background-color : skyblue ; 
        margin : 3px ;
        text-align : center ;
        line-height : 50px ;
        float : left ;
    }

    .clear{
        clear: both;
    }

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h3> Menampilkan elemen pada array </h3>
    
    <?php for ($i=0; $i<5; $i++){  ?>
        <div class="kotak"> 3 </div> 
    <?php } ?>

    <div class="clear">   </div>


    <!-- Cara 1 : 'count' untuk mengetahui banyak isi data array -->

    <?php for ($i=0; $i<count($angka); $i++){  ?>
        <div class="kotak"> <?php echo $angka[$i]; ?> </div> 
    <?php } ?>

    <div class="clear">   </div>


    <!-- Cara 2 : 'foreach' adalah perulangan khusus untuk array -->

    <?php foreach( $angka as $a ){ ?>
        <div class="kotak"> <?php echo $a ?> </div> 
    <?php } ?>

    <div class="clear">   </div>


    <!-- Cara 3 : menggunakan 'templating' (lebih ringkas) -->

    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"> <?= $a ?> </div> 
    <?php endforeach ?>

</body>
</html>