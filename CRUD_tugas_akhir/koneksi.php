<?php
$conn=mysqli_connect("localhost","root","") or die("Tidak konek");
$db=mysqli_select_db($conn,"dbcoffee") or die ("Database tidak ada");
?>