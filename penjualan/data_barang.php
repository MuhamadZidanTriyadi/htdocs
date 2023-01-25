<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <center><h2>Data Produk</h2></center>
    <table class="table table-bordered" id="dataTable" width="100%" border="1" cellspacing="0" cellpadding="13">
        <a href="tambah_barang.php"><button type="button" class="btn btn-info">Tambah Barang</button></a>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Foto Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php 
            require 'koneksi.php';
            $sql = mysqli_query($conn, "SELECT * from barang");
            while ($data = mysqli_fetch_array($sql)) {
                
                ?>
        <tbody>
            <tr>
                <td><?= $data['id_barang']; ?></td>
                <td><?= $data['nama_barang']; ?></td>
                <td><img src="gambar/<?php echo $foto?>"></td>
                <td><?= $data['jenis_barang']; ?></td>
                <td>Rp<?= $data['harga_satuan']; ?>/-</td>
                <td><?= $data['stok_barang']; ?></td>
                <td>
                <a href="#"><button type="button" class="btn btn-primary">Edit</button>
                <a href="#"></a><button type="button" class="btn btn-danger">Hapus</button>
                <a href="hapus_barang.php" onclick="return confirm('Yakin Mau Dihapus?')">
            
            </a>

                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>