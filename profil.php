<?php

	session_start();
	
	include "koneksi.php";

	if (!isset($_SESSION['username'])) {
		header('Location: login.php');
	}

	$sql = mysqli_query($koneksi, 'select * from login where username=\'' . $_SESSION['username'] . '\' && admin=1');

	if (mysqli_num_rows($sql) == 0) {
		echo "Anda bukan admin!";
		exit;
	}
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
	<title>X-Admin</title>
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
            				<li>
									<a href="HalAdmin.php">
										<i class="glyphicon glyphicon-folder-open"></i>
										Data Barang </a>
							</li>
							<li>
									<a href="profil.php">
										<i class="glyphicon glyphicon-user"></i>
										Data User </a>
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
					<h1>Lihat Data</h1>
					<table class="table" border="1">
						<thead>
							<tr>
								<th>email</th>
								<th>TTL</th>
								<th>jk</th>
								<th>NO HP</th>
								<th>alamat</th>
								<th>Username</th>
                <th>Password</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								include 'koneksi.php';
								$data = mysqli_query($koneksi, "SELECT * FROM login") or die (mysqli_error($koneksi));
								foreach ($data as $baris) { ?>
									<tr>
										<td><?php echo $baris['email'] ?></td>
										<td><?php echo $baris['ttl'] ?></td>
										<td><?php echo $baris['jk'] ?></td>
										<td><?php echo $baris['nohp'] ?></td>
										<td><?php echo $baris['alamat'] ?></td>
										<td><?php echo $baris['username'] ?></td>
                    <td><?php echo $baris['password'] ?></td>
									</tr>
								<?php }
							?>
						</tbody>
					</table>
			</div>
		</div>
		</div>
		<div id="bawah">
			<br>
			<p class="mt-5 mb-3 text-muted">&copy; 2019 X-LIMITED</p>
		</div>
	</div>
</body>
