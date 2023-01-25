<?php

require 'koneksi.php';

function tambahuser ($data) {
    global $conn;
$nik = $_POST ['nik'];
$nama = $_POST ['nama'];
$username = $_POST ['username'];
$password = $_POST ['password'];
$telepon = $_POST ['telepon'];

$simpan = mysqli_query($conn, "INSERT INTO register VALUES ('$nik', '$nama', '$username', '$password', '$telepon')");

return mysqli_affected_rows($conn);
}
// $result = mysqli_query($conn, $simpan);
//     if($result) {//jika simpan berhasil maka muncul pesan dan menuju ke halaman prc
//         echo "<script>alert('data berhasil disimpan');
//         document.location= 'login.php' </script>";
//     } else {//jika simpan gagal maka muncul pesan 
//         echo "<script>alert('data gagal disimpan');
//         document.location= 'register.php' </script>";
//     }
?>