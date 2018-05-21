<?php
$user_name  = "root";
$password   = "";
$database   = "utp";
$host_name  = "localhost";

$conn = mysqli_connect($host_name, $user_name, $password, $database);
if (!$conn) {
	die("Koneksi Error: " .mysqli_connect_error());
}
?>
