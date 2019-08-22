<?php
include"koneksi.php";

$id = $_GET ['id'];
$hapus= "DELETE FROM data_penjualan WHERE id='$id'";

mysqli_query($conn,$hapus);
header('location:tampildata.php');
?>