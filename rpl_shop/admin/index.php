<?php

session_start();

if(!isset($_SESSION['username'])){
    echo'
    <script type="text/javascript">
        alert("Anda Belom Login, Silahkan Login Terlebih Dahalu")
        window.location = "../login/index.php"
    </script>
    ';
}

?>

<?php require '../layout/sidebar.php'; ?>
<div class="main">
    <h3>Hallo, Selamat Datang Di Toko Rekayasa Perangkat Lunak</h3>
</div>