<?php
include 'koneksi.php';
$username         = $_POST['username'];

$password         = $_POST['password'];

$email            = $_POST['email'];

$no_hp            = $_POST['no_hp'];

$cekuser          = mysqli_query($conn, "SELECT * FROM daftar WHERE username = '$username'");

if(mysqli_num_rows($cekuser) > 0) {
  echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
} else {
  if(!$username || !$password) {
    echo "<div align='center'>Username dan password tidak boleh kosong! <a href='daftar.php'>Back</a>";
  } else {
    $simpan = mysqli_query($conn, "INSERT INTO daftar(username, password, email, no_hp)
    VALUES ('$username', '$password', '$email', '$no_hp')");
      if($simpan) {
        echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='loginutp.php'>Login</a></div>";
      } else {
        echo "<div align='center'>Proses Gagal!</div>";
      }
    }
  }
?>
