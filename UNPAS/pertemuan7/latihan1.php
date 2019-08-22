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

    <!-- 
        Variabel ada 3, yaitu:
        variabel global,
        variabel lokal,
        dan variabel superglobals,
        
        variabel superglobal adalah variabel asli yang sudah ada di php
        yang akan dipelajari di sini '$_GET' & '$_POST'
        GET menggunakan url, POST menggunakan form
    -->

    
    <!-- $_GET => cara kerja: mengirim data ke url, data di url dikirimkan ke halaman --> 
    <ul>
        <?php foreach( $investasi as $invest ) : ?>
            <li>
                <a href="latihan2.php?
                    gambar=<?= $invest["gambar"]; ?>
                    &investor=<?= $invest["investor"]; ?>
                    &nominal=<?= $invest["nominal"]; ?>
                    &nomor=<?= $invest["nomor"]; ?>
                    &alamat=<?= $invest["alamat"]; ?>
                    &umur=<?= $invest["umur"]; ?>
                    ">
                    <?php echo $invest["investor"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    

</body>
</html>