<?php
include("koneksi.php");

$id = $_GET['id'];
$cari = "SELECT * FROM mahasiswa WHERE id='$id'";
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
		<td colspan="3" align="center">FORM MAHASISWA</td>
	</tr>
	<!--MEMBUAT BARIS ID-->
	<tr>
		<td align="left">ID</td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="id" value="<?php echo $isi[0];?>"/><br/> <!--NAME = ID-->
		</td>
	</tr>
	<!--MEMBUAT BARIS NAMA-->
	<tr>
		<td align="left">NAMA </td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="nama"value="<?php echo $isi[1];?>"/><br/> <!--NAME = NAMA-->
		</td>
	</tr>
	<!--MEMBUAT BARIS NIM-->
	<tr>
		<td align="left">NIM</td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="nim" value="<?php echo $isi[2];?>"/><br/> <!--NAME = NIM-->
		</td>
	</tr>
	<!--MEMBUAT BARIS JURUSAN-->
	<tr>
		<td align="left">JURUSAN</td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="jurusan" value="<?php echo $isi[3];?>"/><br/> <!--NAME = jurusan-->
		</td>
	</tr>
	<!--MEMBUAT TOMBOL SUBMIT-->
	<tr>
		<td colspan="3" align="center">
		<input type="submit" name="Simpan"/>
		<input type="reset" name="Reset"/></td>		
	</tr>
</table>
</form>
</body>

</html>