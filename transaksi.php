<?php
	include "koneksi.php";

	$sql = mysqli_query($koneksi, 'select * from sepatu where id=' . $_GET['id']);
	$hasil = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

		#latar { width: 1300px; height: 1500px; border: 1px solid green; background-color : black; text-align: center; margin: 2px}
		#atas { width: 1300px; height: 150px; background-color: salmon; margin: 2px; color : brown;   }
		#logo { margin:auto; width: 350px; height: 120px; border: 1px solid green ; text-align: center; background-image: url('LOGO.png')}
		#tengah { width: 1300px; height: 1300px; background-color: brown; margin: 2px; color : bisque; }
		#kanan { width: 300px; height: 1300px; background-color: bisque; margin: 2px; color : bisque;  float: right; }
		#kiri { width: 990px; height:1300px; background-color: bisque; margin: 2px; color : brown; float: left}
		#bawah { width: 1300px; height: 50px; background-color: salmon ; margin: 2px; color : brown;  }
		#kiriatas { width: 975px; height: 450px; background-color: bisque; margin: 5px; color : brown;    }
		ul { list-style: square; color:white; text-align: left;}
		li { color : white; }
		form {color : brown;}


	</style>
	<title>X-Transaksi</title>
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
					<br><h3>TRANSAKSI</h3><br>
					
					Type : <?= $hasil['nama'] ?> <br>
					Color : <?= $hasil['color'] ?><br>
					Size : <?= $hasil['size'] ?><br>
					Condition : <?= $hasil['kondisi'] ?><br>
					Price : Rp.<?= number_format($hasil['price'], 0, ',', '.') ?>,-<br>
					No Rek . 097-7543-876 ( A BANK ) / 624-7726-00 ( KELA BANK )<br>
					<br>
					Pengiriman : <?= $hasil['shipping_from'] ?><br>
					*barang akan dikirim setelah anda melakukan transaksi pembayaran pengiriman.<br>
					*batas waktu pembayaran 24 jam. <br>
					*barang akan sampai dalam 2-5 hari sesuai alamat tertera <br>
					*jika ada kesalahan hubungi : <br>
					Line : @xlimited <br>
					Ig : xlimited.id <br>
					Email : Xlimited@gmail.co.id<br>
					Office : JL. XX 3 no 46, kuningan - JKT<br>
			</div>
				<table> 
						<tr>
							<td><a href="home.php"><input type="submit" name="Finish" value="Finish"></a></td>  
							<td><br></td>
						</tr>  
					</table>
			</div>
		</div>
		<div id="bawah">
			<br>
			<p class="mt-5 mb-3 text-muted">&copy; 2019 X-LIMITED</p>
		</div>
	</div>
</body>
