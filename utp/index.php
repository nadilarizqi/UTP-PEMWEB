<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Football Tickets</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- bagian header template -->
	<header>
		<b><h1 class="judul">FOOTBALL TICKETS</h1></b>
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
				<div class="keterangan">
					Putaran 18 - La Liga
				</div><br>
				<div class="tanggal-pertandingan">
					Senin <b>07 Januari 2019</b>
				</div>
				<table width="600px">
					<tr>
						<td align="center"><img src="RMA\logo.png"></td>
						<td align="center"></td>
						<td align="center"><img src="RMA\villarreal_mediano.png"></td>
					</tr>
					<tr>
						<td align="center"><h1>Real Madrid</h1></td>
						<td align="center"><h1>VS</h1></td>
						<td align="center"><h1>Villarreal</h1></td>
					</tr>
				</table>
				<hr>
				<a href="tickets.php" class="continue-lendo">Beli Tiket</a>
			</div>
			<div class="conteudo">
				<div class="keterangan">
					Putaran 19 - La Liga
				</div><br>
				<div class="tanggal-pertandingan">
					Senin <b>14 Januari 2019</b>
				</div>
				<table width="600px">
					<tr>
						<td align="center"><img src="RMA\logo.png"></td>
						<td align="center"></td>
						<td align="center"><img src="RMA\Athletic_Club.png"></td>
					</tr>
					<tr>
						<td align="center"><h1>Real Madrid</h1></td>
						<td align="center"><h1>VS</h1></td>
						<td align="center"><h1>Athletic Club</h1></td>
					</tr>
				</table>
				<hr>
				<a href="tickets.php" class="continue-lendo">Beli Tiket</a>
			</div>
			<div class="conteudo">
				<div class="keterangan">
					Putaran 20 - La Liga
				</div><br>
				<div class="tanggal-pertandingan">
					Jumat <b>18 Januari 2019</b>
				</div>
				<table width="600px">
					<tr>
						<td align="center"><img src="RMA\logo.png"></td>
						<td align="center"></td>
						<td align="center"><img src="RMA\FC_Barcelona.png"></td>
					</tr>
					<tr>
						<td align="center"><h1>Real Madrid</h1></td>
						<td align="center"><h1>VS</h1></td>
						<td align="center"><h1>Barcelona</h1></td>
					</tr>
				</table>
				<hr>
				<a href="tickets.php" class="continue-lendo">Beli Tiket</a>
			</div>
			<div class="conteudo">
				<div class="keterangan">
					1/8 Final (leg 1) - Champions League
				</div><br>
				<div class="tanggal-pertandingan">
					Rabu <b>23 Januari 2019</b>
				</div>
				<table width="600px">
					<tr>
						<td align="center"><img src="RMA\logo.png"></td>
						<td align="center"></td>
						<td align="center"><img src="RMA\Bayern_Munchen.png"></td>
					</tr>
					<tr>
						<td align="center"><h1>Real Madrid</h1></td>
						<td align="center"><h1>VS</h1></td>
						<td align="center"><h1>Bayern Munchen</h1></td>
					</tr>
				</table>
				<hr>
				<a href="tickets.php" class="continue-lendo">Beli Tiket</a>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>

</body>
</html>
