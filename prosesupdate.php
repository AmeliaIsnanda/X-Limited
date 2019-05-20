<?php 
	include 'koneksi.php';


	$nomor = $_GET['id'];
	$nama = $_POST['nama'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$condition = $_POST['kondisi'];
	$price = $_POST['price'];
	$initial_price = $_POST['initial_price'];
	$shipping_from = $_POST['shipping_from'];

	$query=mysqli_query($koneksi,"UPDATE sepatu SET id='$nomor', nama='$nama', size='$size', color='$color', kondisi='$condition', price='$price', initial_price='$initial_price', shipping_from='$shipping_from'  WHERE id = '$nomor'")
	or die(mysqli_error($koneksi));

	if ($query) {
		header("Location: http://localhost/PROJECTPBW/HalAdmin.php"); exit;
	} else {
		echo "Gagal";
	}
 ?>