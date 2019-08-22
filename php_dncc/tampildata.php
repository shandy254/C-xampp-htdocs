<?php

include"koneksi.php";
$tampil= "SELECT * FROM mahasiswa";
$hasil = mysqli_query($conn,$tampil);

?>
<h1 align="center"> TAMPIL DATA MAHASISWA </h1>
<a href="form.php">Tambah Data</a>
<table align="center" border="2">
<tr>
	<th>ID</th>
	<th>NAMA</th>
	<th>NIM</th>
	<th>JURUSAN</th>
	<th colspan=2>AKSI</th>
	
</tr>
<?php
while ($isi=mysqli_fetch_array($hasil))
{
?>
		<tr>
			<td><?php echo $isi[0]; ?></td>
			<td><?php echo $isi[1]; ?></td>
			<td><?php echo $isi[2]; ?></td>
			<td><?php echo $isi[3]; ?></td>
			<td><?php echo"<a href=edit.php?id=$isi[0]>Edit</a>";?></td>
			<td><?php echo"<a href=delete.php?id=$isi[0]>DELETE</a>";?></td>
		</tr>
<?php
}
?>
	</tr>
	</table>
