<?php
include 'koneksi.php';
$username = $_GET ['username'];
$hapus = mysqli_query($conn, "delete from daftar WHERE username='$username'")or die(mysql_error());
header("location:account.php");
?>
