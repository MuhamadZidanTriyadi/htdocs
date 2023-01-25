<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama                = $_POST['nama'];
$tanggal_lahir       = $_POST['tanggal_lahir'];
$jenis_kelamin       = $_POST['jenis_kelamin'];

//query insert data ke dalam database
$query = "INSERT INTO siswa (nama, tanggal_lahir, jenis_kelamin) VALUES ('$nama', '$tanggal_lahir', '$jenis_kelamin')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
