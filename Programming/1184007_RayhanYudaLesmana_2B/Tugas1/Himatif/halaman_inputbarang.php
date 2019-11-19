<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" media="screen" href="css/halaman_inputbarang.css"/>
<link rel="stylesheet" type="text/css" media="screen" href="css/w3.css"/>
<head>
	<title>Halaman Input Barang</title>
</head>


<body>
	<div class="header w3-grey w3-display-container">
		<div class="header1  w3-display-middle w3-card-4">
				 <center><h1><font size="72"> Input barang </font> </h1></center>
		</div>
	</div>	
<div class="conten w3-display-container">
	
	<div class="subconten1 w3-bar w3-green w3-display-topmiddle">
		<div class="w3-bar-item w3-hover-grey"><a href="halaman_admin.php">Home</a></div>
	</div>
	<div class="subconten2">

     <div class="daftar1 w3-display-topleft w3-card-4">
                <div class=" ">
                    <div class="loginbutton w3-container w3-green">
                        <h5><b>Input Barang</b></h5>
                    </div>
                    <form action="masukan_data.php" method="post">
                    <form class="w3-container"> <!-- membuat sebuah form HTML untuk input pengguna -->
            
                        <p> <!-- untuk membuat paragraf -->

                            <label><b>Gambar</b></label> <!-- membuat sebuah label untuk sebuah elemen <input> -->
                            <input class="w3-input w3-border" type="file" name="gambar" style="width: ;"> <!--  membuat sebuah kontrol input -->
                        </p>
                         <p>
                            <label><b>Nama Barang</b></label>
                            <input class="w3-input w3-border" type="text" name="nama" style="width: ;">
                        </p>
                        <p>
                            <label><b>Kategori</b></label>
                            <input class="w3-input w3-border" type="text" name="kategori" style="width: ;">
                        </p> 
                        <p>
                            <label><b>Berat Ons</b></label>
                            <input class="w3-input w3-border" type="text" name="berat" style="width: ;">
                        </p>
                        <p>
                            <label><b>Harga</b></label>
                            <input class="w3-input w3-border" type="text" name="harga" style="width: ;">
                        </p>
                        <p>
                            <label><b>Kondisi</b></label>
                            <input class="w3-input w3-border" type="text" name="kondisi" style="width: ;">
                        </p>
                        <p>
                            <label><b>Stok</b></label>
                            <input class="w3-input w3-border" type="text" name="stok" style="width: ;">
                        </p>
                        <div class="wrapper w3-green">
                            <div class="btn">
                                <button type="button value="send" ><b>InputData</b></button> <!-- membuat sebuah tombol yang dapat diklik -->
                            </div>
                        </div>
                    </form>
                 </form>
                </div>
            </div>
	</div>	
</div>
</body>
</html>