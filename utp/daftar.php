<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include 'koneksi.php'; ?>
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="styleloginutp.css" />
	</head>

	<body>
    <br><div class="awal">
    <center><h2><b>Tonton Pertandingan Favoritmu dengan Lebih Mudah</b></h2></center>
    <center><h3><b>Join Now!!</b></h3></center>
    </div>
    <br>
    <div>
		<form method="POST" action="proses-input.php" class="tabledaftar">
    <h1><font color="white"><center><b>SIGN UP</b></h1>
      <tr>
        <td><font color="white"><label for="username"><b>Username</font></b></label></td>
        <td><input type="text" placeholder="Enter username" name="username" required></td>
      </tr>
			<br>

			<tr>
        <td><label for="psw"><b>Password</b></label></td>
      	<td><input type="password" placeholder="Enter Password" name="password" required></td>
      </tr>
			<br>

			<tr>
        <td><font color="white"><label for="email"><b>Alamat Email</font></b></label></td>
        <td><input type="text" placeholder="Enter Alamat Email" name="email" required></td>
      </tr>
			<br>

			<tr>
        <td><label for="no-hp"><b>No HP</b></label></td>
        <td><input type="text" placeholder="Enter No HP" name="no_hp" required></td>
      </tr>
      <input class="btns" type="submit" value="Sign Up">
      <br><br>
      <div class="dnhv"><center>Already have an account? <a class="get" href="loginutp.php">Login here.</a></center></div>
    </form>
    </div>
    <br>
    <br>
  </body>
</html>
