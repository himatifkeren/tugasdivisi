<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" media="screen" href="css/halaman_lihatbarang.css"/>
<link rel="stylesheet" type="text/css" media="screen" href="css/w3.css"/>
<head>
  <title>Halaman Lihat Barang</title>
</head>


<body>
  <div class="header w3-grey w3-display-container">
    <div class="header1  w3-display-middle w3-card-4">
         <center><h1><font size="72"> Lihat Barang </font> </h1></center>
    </div>
  </div>  
<div class="conten w3-display-container">
  
  <div class="subconten1 w3-bar w3-green w3-display-topmiddle">
    <div class="w3-bar-item w3-hover-grey"><a href="halaman_admin.php">Home</a></div>
  </div>
  <div class="subconten2">
<center><table widht="8000" height="100" border="0" cellpadding="5" cellspacing="2" bgcolor="gray">
<tr bgcolor="#999999">
  <th><font color="white">ID Barang</font></th>
  <th><font color="white">Gambar</font></th>
  <th><font color="white">Nama Barang</font></th>
  <th><font color="white">Kategori</font></th>
  <th><font color="white">Berat Ons</font></th>
  <th><font color="white">Harga</font></th>
  <th><font color="white">Kondisi</font></th>
 <th><font color="white">Stok</font></th>
 <th><font color="white"></font></th>
 <th><font color="white">Barang Terjual</font></th>
 </tr>
 
 <?php
   $host ="localhost";
   $user ="root";
   $paswd="";
   $db   ="barangdata";

   $koneksi= @mysqli_connect($host,$user,$paswd,$db);//[Melakukan koneksi baru ke server mysql]
   if(!$koneksi)
   {
    die(@mysqli_connect_error());//[mengembalikan deskripsi kesalahan dari kesalahan koneksi terakhir]//
   }
   $hasil = @mysqli_query($koneksi,"select * from tb_barang");//[Melakukan query pada data bases]//
   while($row = @mysqli_fetch_array($hasil, MYSQLI_BOTH))
   {
  ?>
  <tr bgcolor="#FFFFFF">
  <td><?php echo $row['id_barang'];?></td>
  <td><img src="gambar/<?php echo $row['gambar'];?>"style="width:100px"></td>
  <td><?php echo $row['nama']; ?></td>
  <td><?php echo $row['kategori']; ?></td>
  <td><?php echo $row['berat']; ?></td>
  <td><?php echo $row['harga']; ?></td>
  <td><?php echo $row['kondisi']; ?></td>
  <td><?php echo $row['stok']; ?></td>
  <td><a href="halaman_update.php?id_barang=<?php echo $row['id_barang'];?>">Edit</a>    
  <a href="delet.php?id_barang=<?php echo $row['id_barang']; ?>">Delete</a></td>
  <td><?php echo $row['barang_terjual']; ?></td>
  </tr>
  <?php
  }
  ?>
</table></center>
  </div>  
</div>
</body>
</html>