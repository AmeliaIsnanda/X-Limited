<!DOCTYPE html>
<html>

<head>
	<style type="text/css">
		#latar {
			margin: auto;
			width: 1310px;
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
		}
	</style>
	<title>X-Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
	<div id="latar">
			<br><br>
			<form action="proseslogin.php" class="login" method="post">
				<div id="logo"> </div>
				<h3 class="h3 mb-3 font-weight-normal">Please sign in</h3>
				<label for="username" class="sr-only" type=>username</label>
				<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
				<label for="password" class="sr-only">Password</label><br>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
					<button class="btn btn-lg btn-primary btn-block" type="submit" value="login">LOG IN</button>
					<tr>
						<td colspan="2" align-text="left">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a>
						</td>
					</tr>
					<br><br>
					<p class="mt-5 mb-3 text-muted">&copy; 2019 X-LIMITED</p>
			</form>
	</div>
</body>

</html>