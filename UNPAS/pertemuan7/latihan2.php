<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <li> <img width="200" height="200" src="gambar/<?= $_GET["gambar"]; ?>"> </li>
        <li> <?= $_GET["investor"]; ?> </li>
        <li> <?= $_GET["nominal"]; ?> </li>
        <li> <?= $_GET["nomor"]; ?> </li>
        <li> <?= $_GET["alamat"]; ?> </li>
        <li> <?= $_GET["umur"]; ?> </li>
    </ul>

</body>
</html>