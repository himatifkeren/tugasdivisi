<html>
<head>
	<title>Challenge Devteam</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Taman Bunga</h1>
	</div>
	<br/>
	<a href="index.php">Lihat Semua Data</a>
	<br/>
	<h3>Input data baru</h3>
	<form action="input_aksi.php" method="post">		
		<table>
			<tr>
				<td>ID</td>
				<td><input type="id" name="id"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Warna</td>
				<td><input type="text" name="warna"></td>					
			</tr>	
				
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>