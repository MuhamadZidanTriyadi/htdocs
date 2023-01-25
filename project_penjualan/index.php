<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penjualan Laptop</title>
</head>
<body>
    <h2>Data Laptop</h2>
    <a href="form-input.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none">Tambah Data</a><br><br>
    <table border="1" cellspacing ="0" width="50%">
        <tr style="text-align:center;font-weight:bold;background-color:#eee;">
            <td>ID</td>
            <td>Nama Produk</td>
            <td>Harga Produk</td>
            <td>Gambar produk</td>
            <td>Opsi</td>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $select = mysqli_query($conn, 'SELECT * FROM laptop');
        if(mysqli_num_rows($select) > 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr style="text-align:center;">
            <td><?php echo $no++ ?></td>    
            <td><?php echo $hasil['produk'] ?></td>
            <td>Rp<?php echo $hasil['harga'] ?></td>
            <td align="center"><img src="gambar/><?php echo $data['gambar'];?>" width="60" height="80"></td>
            <td>
                <a href="form-edit.php?id=<?php echo $hasil['id'] ?>">Edit</a> 
                <a href="delete.php?id=<?php echo $hasil['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php }}else{ ?>
        <tr>
            <td colspan="5" align="center">Data Kosong</td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>