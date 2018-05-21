<?php
include 'koneksi.php';
session_start();//Memulai session

//Menyimpan session
$user_check = $_SESSION['username'];

$ses_sql		= mysqli_query($conn, "SELECT username FROM daftar
WHERE username='$user_check'");
$row			      = mysqli_fetch_assoc($ses_sql);
$login_session  = $row['username'];

if(!isset($login_session)){
	mysqli_close(); //Menutup koneksi
	header('Location:loginutp.php'); //Mengarahkan ke LOGIN
}
?>
