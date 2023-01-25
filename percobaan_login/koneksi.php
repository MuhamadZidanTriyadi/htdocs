<?php
    $host = "localhost";//host server
    $user = "root";//user login phpmyadmin
    $pass = "";//pass login phpmyadmin
    $db = "percobaan_login";//nama database
    $conn = mysqli_connect ( $host, $user, $pass, $db )
            or die ("koneksi gagal");
?>