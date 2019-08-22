<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php $investasi = [
        [
            "gambar"    => "kyuhyun.JPG",
            "investor"  => "Bagus",
            "nominal"   => "3812891823", 
            "nomor"     => "082-6565121",
            "alamat"    => "pucang anom",
            "umur"      => "18",
        ],
        [
            "gambar"    => "cityhunter.JPG",
            "investor"  => "Tirta",
            "nominal"   => "837236", 
            "nomor"     => "091-7216361",
            "alamat"    => "semarang anom",
            "umur"      => "32",
            "level"     => [1,2,3,4],
        ],
    ] ?>

</head>
<body>

    <h3> daftar Investor </h3>

    <!--
        ASSOCIATIVE ARRAY
        key-nya adalah string yang kita buat sendiri
        urutan tidak begitu penting,
        yang penting kecocokan key & value
    -->
    
    <?php foreach ( $investasi as $invest ) : ?>
        
        <ul>
            <li> 
                <img width="100" height="100" src="gambar/<?= $invest["gambar"] ?>">
            </li>
            <li> investor   : <?= $invest["investor"] ?> </li>
            <li> nominal    : <?= $invest["nominal"] ?> </li>
            <li> nomor      : <?= $invest["nomor"] ?> </li>
            <li> alamat     : <?= $invest["alamat"] ?> </li>
            <li> umur       : <?= $invest["umur"] ?> </li>
        </ul>

    <?php endforeach ?>

    <!-- Memilih (array multi dimensi) -->
    <p> level : <?= $investasi[1]["level"][2]; ?> </p>

</body>
</html>