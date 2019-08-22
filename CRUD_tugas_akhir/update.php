<?php
include "koneksi.php";

$produk			=	$_POST['produk'];
$harga			=	$_POST['harga'];
$jumlah			=	$_POST['jumlah'];
$total_harga	=	$harga * $jumlah;

$ubah = "UPDATE data_penjualan SET harga='$harga',jumlah='$jumlah', total_harga='$total_harga'
		WHERE produk='$produk'";
		
mysqli_query($conn,$ubah);
header("location:tampildata.php");


?>