<html>
    <head>
        <title>Toko Shop</title>
    </head>
    <body>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">TOKO SEMPURNA</a>
            </div>
            <div class="link">
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
                    if(isset($_SESSION["username"])) :?>
                    <li>
                        <a href="#">Halo, <?= $_SESSION["nama_lengkap"]; ?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    <?php endif; ?>
                    <?php if(!isset($_SESSION["username"])) : ?>
                        <li>
                            <a href="index.php">Login</a>
                        </li>
                        <li>
                            <a href="register/index.php">Register</a>
                        </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
        <div class="kotak"></div>
        <div class="produk1"></div>
        <div class="produk2"></div>
        <div class="produk3"></div>
        <div class="produk4"></div>
    </body>
</html>