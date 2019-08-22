<?php
include("koneksi.php"); //untuk menghubungkan file koneksi
$produk			=	$_POST['produk'];
$harga			=	$_POST['harga'];
$jumlah			=	$_POST['jumlah'];
$total_harga	=	$harga * $jumlah;

$dsave="INSERT INTO data_penjualan(produk,harga,jumlah,total_harga)
		VALUES('$produk','$harga','$jumlah','$total_harga')";
		mysqli_query($conn,$dsave);
		
header('location:tampildata.php');	
?>