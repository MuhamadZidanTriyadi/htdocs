<?php 
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM laptop WHERE id = '".$_GET['id']."' ");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
</head>
<body>
    <h2>Edit Data Penjualan Laptop</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none">Data Penjualan Laptop</a><br><br>
    <form action="" method="POST">
        <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id" value="<?php echo $result['id'] ?>" required></td>
        </tr>
        <tr>
            <td>Produk</td>
            <td>:</td>
            <td><input type="text" name="produk" value="<?php echo $result['produk'] ?>" required></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="text" name="harga" value="<?php echo $result['harga'] ?>" required></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar" value="<?php echo $result['gambar'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="edit" value="Simpan"></td>
        </tr>
    </table>
    </form>
    <?php 
    include 'koneksi.php';
    if(isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE laptop SET produk = '".$_POST['produk']."', 
        harga = '".$_POST['harga']."',  gambar = '".$_POST['gambar']."' 
        WHERE id = '".$_GET['id']."'");
        if($update){
            echo 'berhasil edit';
        }else{
            echo 'gagal edit';
        }
    }
    ?>
</body>
</html>