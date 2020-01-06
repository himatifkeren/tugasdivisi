<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$warna = $_POST['warna'];

 
mysqli_query($host,"INSERT INTO macam VALUES('$id','$nama','$warna')");
 
header("location:index.php?pesan=input");
?>