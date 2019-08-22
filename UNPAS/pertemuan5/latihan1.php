<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3> Array <h3>

    <?php
        // Belajar Array

        // cara lama (sebelum php 4.0)
        $tanggal = array("satu", 2, "4");

        // cara baru
        $hari   = ["senin", "selasa", "rabu"];
        $bulan  = ["Januari", "februari", "Maret"];

        $arr    = ["Senin", 17, '10', true];
        // array pada php bisa di isi dg tipe data yg berbeda2


        // cetak

        // echo $hari --> tidak bisa
        // harusnya : 

        echo $hari[1] . "<br>" ; 
        // hanya mencetak isi data

        var_dump ($bulan) ; 
        // mencetak 'array ke berapa', 'tipe data' ,
        // 'jumlah karakter', dan 'isi data'
        echo "<br>" ;  

        print_r ($arr) ;    
        // mencetak 'array ke berapa' & 'isi data' 
        echo "<br>" ; 

        /* 
            var_dump & print_r --> versi debugging
            digunakan untuk developer,
            bukan untuk user
        */


        /// Belajar penggunaan array sesungguhnya di latihan 2


    //    for($i=0; $i<3; $i++){
    //        echo $hari[i]; }



    ?>
</body>
</html>