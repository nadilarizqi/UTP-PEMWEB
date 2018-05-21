<?php
include 'koneksi.php';

$username 	= $_POST['username'];
$password 	= $_POST['password'];

$login		= mysqli_query($conn, "SELECT * FROM admin
WHERE username='$username' and password='$password'");
$cek		= mysqli_num_rows($login);

if ($cek > 0) {
	session_start();
	$_SESSION['username'] = $username;
	//echo "login berhasil";
	header("location:index.php");
}
else {
	//echo "login gagal";
	header("location:loginadmin.php");
}
?>
