<?php 

// belajar CRUD
// menampilkan isi query

// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");
    // (nama host, username, password, nama db) 

// query (mengambil tabel)
$result = mysqli_query($conn, "SELECT * FROM pelanggan");

// cek apakah terkoneksi
// var_dump($result);

// mencari error
/*
if ( !$result ) {
    echo mysqli_error($conn);
} 
*/


// mengambil data (fetch) dari tabel
// mysqli_fetch_row ()     // mengembalikan array numerik
// mysqli_fetch_assoc ()   // mengembalikan array associative
// mysqli_fetch_array ()   // mengembalikan keduanya ( numerik & assosiatif )
// mysqli_fetch_object ()  // mengembalikan dengan object

// cara / contoh
var_dump (mysqli_fetch_row ($result)[3]); echo "<br>";

// atau (sesuai tutor)
$row = mysqli_fetch_row($result); 
var_dump ($row); 
echo "<br>";
$assoc = mysqli_fetch_assoc($result); 
var_dump ($assoc); 
echo "<br>";
$array = mysqli_fetch_array($result); 
var_dump ($array["resi"]); 
echo "<br>";
$object = mysqli_fetch_object($result); 
var_dump ($object->nama); 
echo "<br>";


echo "<br>"
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
    
<img src="kor/1.jpg">

</body>
</html>