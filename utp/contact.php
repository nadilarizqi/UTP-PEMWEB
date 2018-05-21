<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- bagian header template -->
	<header>
		<h1 class="judul">FOOTBALL TICKETS</h1>
		<p class="deskripsi">Menjual Tiket Pertandingan Sepak Bola di Stadion Santiago Bernabeu</p>
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
				<div class="contact">
					<center><b>Contact Me</b>
				</div>
				<center>
				<table width="600px">
					<table border="6">
					<tr>
						<td><font size="4"><font color="black">Nama</font></td>
					  <td><font size="4"><font color="black">Jonatan Andreansyah</font></td>
					</tr>
					<tr>
						<td><font size="4"><font color="black">Alamat Kantor</font></td>
		        <td><font size="4"><font color="black">Jl.Endrosuratmin No. 101 Amerika Serikat</font></td>
					</tr>
					<tr>
						<td><font size="4"><font color="black">No HP</font></td>
						<td><font size="4"><font color="black">085928922235</font></td>
					</tr>
					<tr>
						<td><font size="4"><font color="black">Alamat Email</font></td>
						<td><font size="4"><font color="black">JonatanAndre@gmail.com</font></td>
					</tr>
				</table>
				</center>
				<hr>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>

</body>
</html>
