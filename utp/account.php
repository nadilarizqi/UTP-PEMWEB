<?php
include 'koneksi.php';
include 'session_admin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
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
					<center><b>Account</b>
				</div>
				<table width="600px" border="1">
					<thead>
						<tr>
							<th>NO.</th>
							<th>Username</th>
							<th>Email</th>
							<th>No.Hp</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$res = mysqli_query($conn, "SELECT username, email, no_hp FROM daftar");
							while($row = mysqli_fetch_array($res)){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['no_hp']; ?></td>
							<td>
								<a href="hapus.php?username=<?php echo $row['username'];?>">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>

</body>
</html>
