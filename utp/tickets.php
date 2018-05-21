<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tickets</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- bagian header template -->
	<header>
		<h1 class="judul">Football Tickets</h1>
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
					<b>Santiago Bernabeu</b>
				</div>
				<table width="600px">
					<tr>
						<td align="center"><img src="RMA\stadium_Bernabeu_en.png"></td>
					</tr>
				</table>
				<hr>
				<br>
				<div class="tickets">
					<b>Tickets</b>
				</div>
				<table width="600px" border="1">
					<tr>
						<td rowspan="7" align="top"><b>WEST STAND</b></td>
						<td class="a">130$</td>
						<td class="a" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="b">130$</td>
						<td class="b" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="c">155$</td>
						<td class="c" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="d">145$</td>
						<td class="d" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="e">110$</td>
						<td class="e" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="f">90$</td>
						<td class="f" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="g">60$</td>
						<td class="g" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td rowspan="7" align="top"><b>EAST STAND</b></td>
						<td class="a">130$</td>
						<td class="a" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="b">130$</td>
						<td class="b" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="c">155$</td>
						<td class="c" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="d">145$</td>
						<td class="d" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="e">110$</td>
						<td class="e" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="f">90$</td>
						<td class="f" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="g">60$</td>
						<td class="g" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td rowspan="7" align="top"><b>NORTH STAND</b></td>
						<td class="a">90$</td>
						<td class="a" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="b">90$</td>
						<td class="b" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="c">100$</td>
						<td class="c" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="d">95$</td>
						<td class="d" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="e">70$</td>
						<td class="e" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="f">55$</td>
						<td class="f" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="g">45$</td>
						<td class="g" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td rowspan="7" align="top"><b>SOUTH STAND</b></td>
						<td class="a">90$</td>
						<td class="a" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="b">90$</td>
						<td class="b" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="c">100$</td>
						<td class="c" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="d">95$</td>
						<td class="d" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="e">70$</td>
						<td class="e" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="f">55$</td>
						<td class="f" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
					<tr>
						<td class="g">45$</td>
						<td class="g" width="100px"><a href="beli.php" class="continue-lendo1">Beli Tiket</a></td>
					</tr>
				</table>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>

</body>
</html>
