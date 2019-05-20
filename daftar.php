<!DOCTYPE html>
<html>

<head>
	<style type="text/css">
		#latar {
			margin: auto;
			width: auto;
			height: 1500px;
			border: 1px solid green;
			text-align: center;
			background-color: salmon;
		}
		#logo {
			margin: auto;
			width: 350px;
			height: 120px;
			border: 1px solid green;
			text-align: center;
			background-image: url('LOGO.png')
		}
		.login {
			width: 100%;
			max-width: 380px;
			padding: 15px;
			margin: auto;
		}

		.login .checkbox {
			font-weight: 400;
		}

		.login .form-control {
			position: relative;
			box-sizing: border-box;
			height: auto;
			padding: 10px;
			font-size: 16px;
		}

		.login .form-control:focus {
			z-index: 2;
		}

		.login input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}

		.login input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
	</style>
	<title>X-Daftar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
	<div id="latar">
			<br><br>
			<form action="prosesdaftar.php" method="post" class="login">
				<div id="logo"> </div>
				<h3 class="h3 mb-3 font-weight-normal">Please sign up</h3>
				<label for="email" class="sr-only" type=>Email</label>
				<input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>

				<label for="nohp" class="sr-only" type=>No HP</label>
				<input type="text" id="nohp" name="nohp" class="form-control" placeholder="No HP" required autofocus>

				<label for="jk" class="sr-only" type=>Jenis Kelamin</label>
				Jenis Kelamin &emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;&emsp; <input name="jk" type="radio" value="laki-laki" />laki-laki <input name="jk"
									type="radio" value="perempuan" />Perempuan

				<label for="ttl" class="sr-only" type=>Tanggal Lahir</label>
				<input type="date" id="ttl" name="ttl" class="form-control" placeholder="Tanggal Lahir" required autofocus>

				<label for="alamat" class="sr-only" type=textarea>Alamat</label>
				<textarea style="width:350px; height:150px" class="form-control"  name="alamat" placeholder="Alamat"></textarea>
				
				<label for="username" class="sr-only" type=>username</label>
				<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>

				<label for="password" class="sr-only">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

					<button class="btn btn-lg btn-primary btn-block" type="submit" value="login">LOG IN</button>
					<tr>
						<td colspan="2" align-text="left">Sudah Punya akun ? <a href="login.php"><b>Log in</b></a>
						</td>
					</tr>
					<br><br>
					<p class="mt-5 mb-3 text-muted">&copy; 2019 X-LIMITED</p>
			</form>
		</div>
	</div>
</body>