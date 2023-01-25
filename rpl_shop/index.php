<?php 

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Costumer</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="navbar">
        <div class="nav-logo">
            <a href="#">RPL SHOP</a>
        </div>
        <div class="nav-links">
            <ul>
                <li>
                    <a href="index.php">Beranda</a>
                </li>
                <li>
                    <a href="cart.php">Keranjang</a>
                </li>
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <?php 
                if(isset($_SESSION["username"])) : ?>
                    <li>
                        <a href="#">Halo, <?= $_SESSION["nama_lengkap"]; ?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                <?php endif; ?>
                <?php if(!isset($_SESSION["username"])) : ?>
                    <li>
                        <a href="login/index.php">Login</a>
                    </li>
                    <li>
                        <a href="register/index.php">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="kotak"></div>
    <div class="produk1"></div>
    <div class="produk2"></div>
    <div class="produk3"></div>
    <div class="produk4"></div>
    <!-- <div class="produk5"></div> -->

</body>
</html>