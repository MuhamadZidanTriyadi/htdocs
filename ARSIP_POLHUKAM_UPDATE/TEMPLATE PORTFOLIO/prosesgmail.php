<?php
require 'koneksi.php';
$Nama_anda = $_POST ['Nama_anda'];
$Alamat_email = $_POST ['Alamat_email'];
$Subject = $_POST ['Subject'];
$Pesan = $_POST ['Pesan'];

$simpan = mysqli_query($conn, "INSERT INTO gmail VALUES ('$Nama_anda', '$Alamat_email', '$Subject', '$Pesan')");
?>