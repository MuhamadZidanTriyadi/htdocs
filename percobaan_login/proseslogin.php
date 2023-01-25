<?php
require 'koneksi.php';

$user= $_POST['username'];
$pass= $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM register where username='$user' and password='$pass'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "proseslogin";
  }else{
  header("location:login.php?pesan=gagal/pastikan_anda_data_dengan_benar");
}
?>