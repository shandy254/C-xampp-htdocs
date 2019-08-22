<?php
include("koneksi.php");

$id = $_GET['id'];
$cari = "SELECT * FROM data_penjualan WHERE id=$id";
$hasil = mysqli_query($conn,$cari);
$isi = mysqli_fetch_array($hasil);

?>
<html>

<head>
	<title>UPDATE DATA</title>
</head>

<body>
<form action="update.php" method="get">
<table border="0" width="100" align="center">
	<tr>
		<td colspan="3" align="center">FORM PENJUALAN</td>
	</tr>
	
	<tr>
		<td align="left">Produk</td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="produk" value="<?php echo $isi[0];?>"/><br/> 
		</td>
	</tr>
	
	<tr>
		<td align="left">Harga</td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="harga"value="<?php echo $isi[1];?>"/><br/> 
		</td>
	</tr>
	
	<tr>
		<td align="left">Jumlah</td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="jumlah" value="<?php echo $isi[2];?>"/><br/>
		</td>
	</tr>
	
	
	
	<tr>
		<td colspan="3" align="center">
		<input type="submit" name="Simpan"/>
		<input type="reset" name="Reset"/></td>		
	</tr>
</table>
</form>
</body>

</html>