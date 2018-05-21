<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Setting</title>
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
				<div class="stadium">
					<b>Setting</b>
				</div>
				<?php
					$sql = "SELECT * FROM daftar WHERE username='".$_SESSION['username']."'";
					$query = mysqli_query($conn, $sql);
					while ($data = mysqli_fetch_array($query)) {
				?>
				<table width="600px">
					<tr>
						<td>Username</td>
						<td><?php echo $data['username']; ?></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><?php echo $data['password'];; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $data['email'];?></td>
					</tr>
					<tr>
						<td>No.Hp</td>
						<td><?php echo $data['no_hp'];?></td>
					</tr>
				</table>
			<?php } ?>
				<hr>
				<a href="edit.php" class="continue-lendo">Edit</a><br><br>
				<a href="logout.php" class="continue-lendo">Logout</a>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>

</body>
</html>
