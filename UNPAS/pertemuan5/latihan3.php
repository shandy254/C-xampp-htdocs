<?php
    // penerapan array pada kasus nyata
    // array numerik --> array yang indeksnya angka ('0', '1', dst..) 

    $siswa = ["bagus", "A11.2018.1144", "Semarang Utara", "TI"];
    $mahasiswa = [
        ["Tirta", "A12.2019.1142", "Pucang Gading", "SI"],
        ["RS", "AA.111.1213", "Semeru Dalam", "Managemen"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php foreach( $siswa as $s ){ ?>
        <div> <?php echo $s ?> </div>
    <?php } ?>

    <br> <br>

    <?php foreach( $siswa as $m ) : ?>
        <div> <?= $m; ?> </div>
    <?php endforeach; ?> 

    <br> <br>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li> <?php echo $mhs[0] ?> </li>
        <li> <?php echo $mhs[1] ?> </li>
        <li> <?php echo $mhs[2] ?> </li>
        <li> <?php echo $mhs[3] ?> </li>
    </ul>
    <?php endforeach; ?>

    <!-- 
        array numerik, data bisa tertukar
        Data harus urut
        selanjutnya ASSOCIATIVE ARRAY
        indeksnya bukan lagi angka, tapi string
        indeksnya berasosiasi dengan nilainya
    -->

</body>
</html>