<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <br>    
    <br>
    <h1>WEB <span>PENJUALAN</span><br>BARANG DAN PRODUK
    <br>
    <span>ELEKTRONIK</span>
    </h1>
    <div class="form">
        <h3>Tambah Produk</h3>
        <form action="simpan_barang.php" method="POST">
            <div class="user">
                <input type="text" name="nama_barang" placeholder="Masukkan Nama Produk">
            </div>
            <br>
            <br>
            <div class="user">
                <input type="file" nane="foto" placeholder="Masukkan Foto Produk">
            </div>
            <div class="user">
                <input type="text" name="jenis_barang" placeholder="Masukkan Jenis Produk">
            </div>
            <br>
            <div class="user">
                <input type="text" name="harga_satuan" placeholder="Masukkan Harga Produk">
            </div>
            <br>
            <div class="user">
                <input type="text" name="stok_barang" placeholder="Masukkan Stok Produk">
            </div>
            <br>
            <button type="Sumbit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>