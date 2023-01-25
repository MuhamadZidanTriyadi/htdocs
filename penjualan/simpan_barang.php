<?php

require 'koneksi.php';

if(tambahUser($_POST) > 0 ) {
    echo "<script type = 'text/javascript'>
    alert('Barang Produk Berhasil Ditambahkan')
    window.location= 'tambah_barang.php' </script>";
    }else{
    echo "<script type ='text/javascript'>
    alert('Maaf, Barang Produk Gagal ditambahkan')
    window.location= '#'</script>";
}

function tambahUser($data) {
    global $conn;

$id_barang    =$_POST['id_barang'];  
$nama_barang  = $_POST['nama_barang'];
$foto   = $_FILES['foto']["name"];
$files  = $_FILES['foto']['tmp_name'];
$jenis_barang  = $_POST['jenis_barang'];
$harga_satuan  = $_POST['harga_satuan'];
$stok_barang   = $_POST['stok_barang'];

$sql  = mysqli_query ($conn, "INSERT INTO barang(nama_barang,foto,jenis_barang,harga_satuan,stok_barang) VALUES('$id_barang','$nama_barang','$foto','$files','$jenis_barang','$harga_satuan','$stok_barang')");
move_uploaded_file($tmp_name, "gambar/".$foto);
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "simpan_barang";
    header("location:data_barang.php");
}else{
    header("location:data_barang.php?pesan=gagal/pastikan_anda_memasukan_data_dengan_benar");
}

return mysqli_affected_rows($conn);
}
?>