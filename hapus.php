<?php 
	include 'koneksi.php';

	$id = $_GET['id'];

	$query = mysqli_query($koneksi, "DELETE FROM sepatu WHERE id = '$id'")
	or die(mysqli_error($koneksi));

	if ($query) {
		header("Location: http://localhost/PROJECTPBW/HalAdmin.php");
	} else {
		echo"Gagal";
	}
 ?>