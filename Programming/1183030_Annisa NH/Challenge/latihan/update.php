<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$warna = $_POST['warna'];

mysqli_query($host,"UPDATE macam SET id='$id', nama='$nama', warna='$warna' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>