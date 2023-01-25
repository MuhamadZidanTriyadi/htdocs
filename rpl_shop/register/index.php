<?php 

require 'proses.php';

if(isset($_POST["register"])){
    if(register($_POST) > 0){
        echo '
            <script type="text/javascript">
            alert("Register berhasil, Silahkan Login")
            window.location = "../login/index.php"
            </script>
        ';
    }else{
        echo '
            <script type="text/javascript">
            alert("Register gagal, Silahkan coba lagi")
            window.location = "index.php"
            </script>
        ';
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h2><i>RPL SHOP</i></h2>
        <h3>Register Akun</h3>
        <form action="" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            <br>
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            
            <input type="hidden" name="roles" class="form-control" value="Costumer">

            <button type="submit" name="register" class="btn-register">Register</button>

            <div class="login">
                <span>Sudah Mempunyai Akun? 
                    <a href="../login/index.php">Silahkan Login</a>
                </span>
            </div>

        </form>
    </div>
</body>
</html>