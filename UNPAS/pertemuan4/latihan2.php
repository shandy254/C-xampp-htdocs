<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php 
        function waktu($tanggal){
            $hari=date("l", strtotime($tanggal));  
        
            return "selamat datang pada hari $hari";
        }   
        
        function  tambah($a, $b){
            return $c=$a+$b;
        }
    ?>

</head>
<body>

    <!-- user definition Function : 'fungsi buatan dari user' -->
    
    <p>
        <?php echo waktu("20 jan 2019"). "<br>". "2 + 3 = ". tambah(2, 3) ?>
    </p>

</body>
</html>