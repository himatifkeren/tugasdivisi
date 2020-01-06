<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($host,"DELETE FROM macam WHERE id='$id'");
 
header("location:index.php?pesan=hapus");
?>