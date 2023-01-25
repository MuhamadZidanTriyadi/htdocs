<?php

require 'koneksi.php';

function tambahuser ($data) {
    global $conn;
$nip = $_POST ['nip'];
$ndep = $_POST ['ndep'];
$nblk = $_POST ['nblk'];
$jk = $_POST ['jk'];
$alamat= $_POST ['alamat'];
$telp = $_POST ['telp'];
$jabatan = $_POST ['jabatan'];
$gaji   = $_POST ['gaji'];
$nocab = $_POST ['nocab'];

$simpan = mysqli_query($conn, "INSERT INTO pegawai VALUES ('$nip', '$ndep', '$nblk', '$jk', '$alamat','$telp','$jabatan','$gaji','$nocab')");

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
