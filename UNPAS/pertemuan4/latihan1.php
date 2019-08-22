<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Function </title>

</head>
<body>
    <h1> Function </h1>
    <br>
    <p> berikut adalah Pembelajaran php tentang fungsi <p>
    <br>

    
    <?php
    // ini adalah komen 
    /*
        ini adalah pembelajaran PHP untuk pemula dari pak Sandhika Galih (UNPAS)
        video sebelumnya berisi tentang 'intro','Sejarah & Karakteristik PHP',

        kemudian pada 
        pertemuan 1 : persiapan lingkungan
        pertemuan 2 : sintaks php (operator, logika, dkk)
        pertemuan 3 : Struktur Kendali/ control flow (perulangan & kondisi)
        pertemuan 4 : Function (
            built in Function : 'date(), time(), mktime(), & strtotime()' &
            user definition Function : 'fungsi buatan dari user' )

    */

    /// sekarang mari belajar function
    echo "<br>date <br>";
    echo date("d-m-y") ."<br>";
    echo date ("l, d M Y"). "<br>";

    echo "<br>time <br>";
    echo time(). "<br>"; 
        // detik dimulai dari 1 Jan 1970 
        // EPOCH time/ UNIX Timestamp
        // bisa dikolaborasikan dengan 'date()'
        
    echo "<br>kolaborasi date & time <br>";
    echo date("l", time()+60*60*24); // hari berikutnya pake '+'
    echo date("l");
    echo date("l", time()-60*60*24); // hari sebelumnya pake '-'

    echo "<br><br>mktime <br>";
    echo mktime(0,0,0,0,0,0)."<br>";
    // urutan = jam, menit, detik, bulan, tanggal, tahun
    echo date("l", mktime(0,0,0,1,1,2019))."<br>";

    echo "<br> strtotime <br>";
    echo strtotime("")."<br>";
    echo strtotime("1 jan 2019")."<br>";
    echo date("l", strtotime("25 aug 2017"));



    
    
    ?>

</body>
</html>