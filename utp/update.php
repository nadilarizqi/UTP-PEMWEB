<?php
include 'koneksi.php';
session_start();

$username1         = $_POST['username1'];
$password1         = $_POST['password1'];
$email1            = $_POST['email1'];
$no_hp1            = $_POST['no_hp1'];

$username = $_SESSION['username'];

$cekuser          = mysqli_query($conn, "SELECT * FROM daftar WHERE username = '$username1'");

if(mysqli_num_rows($cekuser) > 0) {
  echo "<div align='center'>Username Sudah Ada! Gunakan username lain. <a href='edit.php'>Back</a></div>";
} else {
  if(!$username1 || !$password1) {
    echo "<div align='center'>Username dan password tidak boleh kosong! <a href='edit.php'>Back</a>";
  } else {
    $update = mysqli_query($conn, "UPDATE daftar SET username='$username1',
    password='$password1', email='$email1', no_hp='$no_hp1'  WHERE username='$username'");
      if($update) {
        header("location:index.php");
      } else {
        echo "<div align='center'>Proses Gagal!</div>";
      }
    }
  }
?>
