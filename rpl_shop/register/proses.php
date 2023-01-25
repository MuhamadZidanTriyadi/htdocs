<?php

require '../koneksi.php';

function register($data){

    global $conn;

    $username = $data["username"];
    $nama_lengkap = $data["nama_lengkap"];
    $password = $data["password"];
    $roles = $data["roles"];

    $query = "INSERT INTO user VALUES(NULL, '$username', '$nama_lengkap', '$password', '$roles')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



?>