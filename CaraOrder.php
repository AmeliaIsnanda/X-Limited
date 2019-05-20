<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

		#latar { width: 1300px; height: 1500px; border: 1px solid green; background-color : black; text-align: center; margin: 2px}
		#atas { width: 1300px; height: 150px; background-color: salmon; margin: 2px; color : brown;   }
		#logo { margin:auto; width: 350px; height: 120px; border: 1px solid green ; text-align: center; background-image: url('LOGO.png')}
		#tengah { width: 1300px; height: 1300px; background-color: brown; margin: 2px; color : bisque; }
		#kanan { width: 300px; height: 1300px; background-color: bisque; margin: 2px; color : bisque;  float: right; }
		#kiri { width: 990px; height:1300px; background-color: bisque; margin: 2px; color : brown; float: left; text-align: left;}
		#bawah { width: 1300px; height: 50px; background-color: salmon ; margin: 2px; color : brown;  }
		#kiriatas { width: 975px; height: 450px; background-color: bisque; margin: 5px; color : brown;    }
		ul { list-style: square; color:white; text-align: left;}
		li { color : white; }
		form {color : brown;}


	</style>
	<title>X-CaraOrder</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script> 
</head>
<body>
	<div id="latar"> 
		<div id="atas">
			<br>
			<div id="logo"></div> 

		</div>
		<div id="tengah">
		<div id="kanan">
				<br>
				<form action="cari.php" method="get">
					<label></label>
					<input type="text" name="cari">
					<input type="submit" value="Cari">
				</form>
				<br><br>
				<div class="profile-sidebar">
					<div class="profile-usermenu">
						<ul class="nav">
							<li class="active">
								<a href="home.php">
									<i class="glyphicon glyphicon-home"></i>
									Home </a>
							</li>
							<li>
								<a href="CaraOrder.php">
									<i class="glyphicon glyphicon-ok"></i>
									Cara Order </a>
							</li>
							<li>
								<a href="AboutUs.php" target="_blank">
									<i class="glyphicon glyphicon-sunglasses"></i>
									About Us </a>
							</li>
							<li>
								<a href="logout.php">
									<i class="glyphicon glyphicon-log-out"></i>
									Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="kiri">
				<div id="kiriatas">
					<br><h3>CARA ORDER</h3><br>
					
					1. Klik detail gambar sepatu yang dipilih</br>
					2. Klik buy Now Pada Halaman Detail </br>
					3. Pada Halaman Transaksi akan tertera nomor rekening dan alamat sesuai dengan Input user saat register </br>
					4. Transfer uang sejumlah harga yang tertera kepada no.rek dalam batas waktu 24 jam </br>
					5. Barang Akan dikirim saat user telah melakukan pembayaran  </br>
					6. Barang Akan sampai dalam 2-5 hari sesuai jarak pembeli </br>
					7. Jika ada keterlambatan pengiriman maupun kerusakan barang dapat menghubungi admin </br>
					8. CP admin tertera dalam menu About Us di Side Bar </br>
					9. Jika dalam 24 jam belum melakukan pembayaran, transaksi automatis gagal.
			</div>

			</div>
		</div>
		<div id="bawah">
			<br>
			<h6>Copyright 2019 X-LIMITED</h6>
		</div>
	</div>
</body>
