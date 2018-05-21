<!DOCTYPE html>
<html>
	<head>
		<?php include 'koneksi.php'; ?>
		<title>Login Admin</title>
		<link rel="stylesheet" type="text/css" href="styleloginutp.css" />
	</head>

	<body>
		<h1>LOGIN ADMIN</h1>
		<center><p>Anda tidak dapat mengakses halaman ini sebelum login sebagai Admin!!<p>
		<div>
		<form method="POST" action="proses-login-admin.php">
			<div>
				<input type="text" name="username" placeholder="Username" />
			</div>
			<div>
				<input type="password" name="password" placeholder="Password" />
			</div>
			<input class="btn" type="submit" value="Login">
		</form>
		</div>
	</body>
</html>
