<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
</head>
<body>

<h2>Input Barang</h2>
<?php
    $host ="localhost";
    $user ="root";
    $paswd="";
    $db   ="barangdata";
//yang diatas membuat koneksi dataabase
   $koneksi=mysqli_connect($host,$user,$paswd,$db);//[Melakukan koneksi baru ke server mysql]
   if(!$koneksi)
   {
    die(mysqli_connect_error());//[mengembalikan deskripsi kesalahan dari kesalahan koneksi terakhir]//
   }
   //end membuat database
$gambar  = $_POST["gambar"];
$nama = $_POST["nama"];
$kategori = $_POST["kategori"]; 
$berat = $_POST["berat"];
$harga = $_POST["harga"];
$kondisi = $_POST["kondisi"];
$stok = $_POST["stok"];
$folder = "C:\xampp\htdocs\Himatif\gambar\\";
  // insert data ke database

$sqlstr="insert into tb_barang values('','$gambar','$nama','$kategori','$berat','$harga','$kondisi','$stok','0')";
$hasil=@mysqli_query($koneksi,$sqlstr); //[Melakukan query pada data bases]//
 if($hasil)
 {
  move_uploaded_file($temp, $folder . $name);
 	echo("Data berhasil disimpan !<br>");
  header("Location: lihat_barang.php");
  {}
 }else{
 	echo("data tidak berhasil disimpan");
 }
?>
<br><a href="halaman_inputbarang.php">Kembali</a> <!--Membuat link menuju ke halaman lain-->
</body>
</html>