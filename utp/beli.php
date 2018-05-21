<?php
include 'koneksi.php';
include 'session.php';
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
					<center><b>Transfer</b>
				</div>
				<table width="600px">
					<table>
					<tr>
						<td width="200px"><font size="6"><font color="black">Bank</font></td>
					  <td><font size="6"><font color="black">BNI</font></td>
					</tr>
					<tr>
						<td width="200px"><font size="6"><font color="black">No.Rek.</font></td>
		        <td><font size="6"><font color="black">0987654354</font></td>
					</tr>
					<tr>
						<td width="200px"><font size="6"><font color="black">A.N</font></td>
						<td><font size="6"><font color="black">Jonatan Andreansyah</font></td>
					</tr>
				</table>
				<hr><br>
				<table width="600px">
					<table>
					<tr>
						<td width="200px"><font size="6"><font color="black">Bank</font></td>
					  <td><font size="6"><font color="black">BCA</font></td>
					</tr>
					<tr>
						<td width="200px"><font size="6"><font color="black">No.Rek.</font></td>
		        <td><font size="6"><font color="black">01265767956</font></td>
					</tr>
					<tr>
						<td width="200px"><font size="6"><font color="black">A.N</font></td>
						<td><font size="6"><font color="black">Jonatan Andreansyah</font></td>
					</tr>
				</table>
				<hr><br>
				<table width="600px">
					<table>
					<tr>
						<td width="200px"><font size="6"><font color="black">Bank</font></td>
					  <td><font size="6"><font color="black">Mandiri</font></td>
					</tr>
					<tr>
						<td width="200px"><font size="6"><font color="black">No.Rek.</font></td>
		        <td><font size="6"><font color="black">0453452356</font></td>
					</tr>
					<tr>
						<td width="200px"><font size="6"><font color="black">A.N</font></td>
						<td><font size="6"><font color="black">Jonatan Andreansyah</font></td>
					</tr>
				</table>
				<hr><br>
				Anda diberi waktu 24 jam untuk transfer ke salah satu rekening di atas.
				Jika Anda telah transfer, maka tiket akan dikirimkan ke email Anda.
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>

</body>
</html>
