<!DOCTYPE html>
<html>
	<head>
		<?php include 'koneksi.php'; ?>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="styleloginutp.css" />
	</head>

	<body>
		<br><br><br>
		<div>
		<form method="POST" action="proses-login.php">
		<h1>LOGIN</h1>
			<div>
				<input class="masuk" type="text" name="username" placeholder="Username" />
			</div>
			<div>
				<input class="masuk" type="password" name="password" placeholder="Password" />
			</div>
			<input class="btn" type="submit" value="Login"><br>
		<br>
		<div class="dnhv"><center>Don't have an account? <b><a class="get" href="daftar.php">Get Started</a></b></center></div>
		</form>
		</div>
        <br>
        <br>

	</body>
</html>
