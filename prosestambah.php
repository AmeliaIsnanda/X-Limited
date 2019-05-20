<?php 
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$shipping_from = $_POST['shipping_from'];
	$initial_price = $_POST['initial_price'];
	$condition = $_POST['kondisi'];
	$price = $_POST['price'];

	try {
		
		if (
			!isset($_FILES['gambar']['error']) ||
			is_array($_FILES['gambar']['error'])
		) {
			throw new RuntimeException('Invalid parameters.');
		}
	
		switch ($_FILES['gambar']['error']) {
			case UPLOAD_ERR_OK:
				break;
			case UPLOAD_ERR_NO_FILE:
				throw new RuntimeException('No file sent.');
			case UPLOAD_ERR_INI_SIZE:
			case UPLOAD_ERR_FORM_SIZE:
				throw new RuntimeException('Exceeded filesize limit.');
			default:
				throw new RuntimeException('Unknown errors.');
		}
	
		$finfo = new finfo(FILEINFO_MIME_TYPE);
		if (false === $ext = array_search(
			$finfo->file($_FILES['gambar']['tmp_name']),
			array(
				'jpg' => 'image/jpeg',
				'png' => 'image/png',
				'gif' => 'image/gif',
			),
			true
		)) {
			throw new RuntimeException('Invalid file format.');
		}
	
		// You should name it uniquely.
		// DO NOT USE $_FILES['gambar']['name'] WITHOUT ANY VALIDATION !!
		// On this example, obtain safe unique name from its binary data.
		$file_name = $_FILES['gambar']['tmp_name'];
		$new_file_name = sha1_file($file_name);

		if (!move_uploaded_file(
			$file_name,
			sprintf('./uploads/%s.%s',
				$new_file_name,
				$ext
			)
		)) {
			throw new RuntimeException('Failed to move uploaded file.');
		}
	
		// 'File is uploaded successfully.';
		$query = mysqli_query($koneksi, "INSERT INTO sepatu (gambar, nama, size, color, kondisi, price, initial_price, shipping_from) VALUES ('./uploads/$new_file_name.$ext', '$nama', '$size', '$color', '$condition', '$price', '$initial_price', '$shipping_from')") or die(mysqli_error());

		if ($query) {
			header("Location: http://localhost/PROJECTPBW/HalAdmin.php"); exit;
		} else {
			echo "Gagal";
		}
	
	} catch (RuntimeException $e) {
	
		echo $e->getMessage();
	
	}