<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Data</title>
</head>
<body>
    <h2>Input Data Penjualan Laptop</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none">Data Penjualan Laptop</a><br><br>
    <form action="" method="POST">
        <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id" placeholder="ID" required></td>
        </tr>
        <tr>
            <td>Produk</td>
            <td>:</td>
            <td><input type="text" name="produk" placeholder="Produk" required></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="text" name="harga" placeholder="Harga" required></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar" placeholder="Gambar"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
    </form>
    <?php 
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
    $insert = mysqli_query($conn, "INSERT INTO laptop VALUES 
        ('".$_POST['id']."',
        '".$_POST['produk']."',
        '".$_POST['harga']."',
        '".$_POST['gambar']."')");
        if($insert){
            echo 'berhasil disimpan';
        }else{
            echo 'gagal disimpan';
        }
    }
    ?>
</body>
</html>