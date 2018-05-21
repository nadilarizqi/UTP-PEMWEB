<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- bagian header template -->
	<header>
		<h1 class="judul">Edit</h1>
		<p class="deskripsi">Menjual tiket pertandingan sepak bola di stadion Santiago Bernabeu</p>
	</header>
	<!-- akhir bagian header template -->

	<div class="wrap">
		<!-- bagian menu		 -->
		<nav class="menu">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="stadium.php">Stadium</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="account.php">Account</a>
				</li>
				<?php
				session_start();
				if(!isset($_SESSION['username'])) {?>
					<li class="login">
						<a href="loginutp.php">login</a>
					</li>
				<?php
				} else {
					if($_SESSION['username']=='admin') {?>
						<li class="login">
							<a href="logout.php"><b>Logout</b></a>
						</li>
					<?php
					} else {
						$username = $_SESSION['username'];?>
						<li class="login">
							<a href="setting.php"><b><?php echo $username;?></b></a>
						</li>
					<?php
					}
				} ?>
			</ul>
		</nav>
		<!-- akhir bagian menu -->

		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<h2>Info</h2>
				<p>Selamat datang di Football Tickets, situs ini menyediakan penjualan
					pertandingan sepakbola di stadion Santiago Bernabeu kandang klub
					sepakbola Real Madrid.</p>
			</div>
		</aside>
		<!-- akhir bagian sidebar website -->

		<!-- bagian konten Blog -->
		<div class="blog">
			<div class="conteudo">
				<div class="stadium">
					<b>Edit</b>
				</div>
				<form method="POST" action="update.php">
				<table width="600px">
					<tr>
						<td>Username</td>
						<td><input type="text" placeholder="Enter Username" name="username1" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" placeholder="Enter Password" name="password1" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" placeholder="Enter Email" name="email1" required></td>
					</tr>
					<tr>
						<td>No.Hp</td>
						<td><input type="text" placeholder="Enter No.Hp" name="no_hp1" required></td>
					</tr>
					<tr>
						<td><input class="continue-lendo" type="submit" value="Update"></td>
					</tr>
				</table>
				<hr>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>

</body>
</html>
