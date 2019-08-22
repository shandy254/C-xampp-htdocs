<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style> 

        .kotak{
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            background-color: #bada55;
            transition: 1s;
            float: left;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }

    </style>

    <?php $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
     ] ?>

</head>
<body>

    <div class="kotak"> <?= $angka[1][1]; ?> </div>
    
    <div class="clear"> </div>

    <?php foreach( $angka as $a ) : ?>
        <?php foreach( $a as $b ) : ?>
            <div class="kotak"> <?= $b ?> </div>
        <?php endforeach ?>
        <div class="clear"> </div>
    <?php endforeach ?>

    
</body>
</html>