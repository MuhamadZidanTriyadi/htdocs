<?php 

require "prosesregister.php";

if(isset($_POST["register"])) {
    if(tambahuser($_POST) > 0) {
        echo "<script type = 'text/javascript'>
        alert('Register Berhasil, Silahkan Login!')
        window.location = 'login.php' </script>";
    } else {
        echo "<script type = 'text/javascript'>
        alert('Maaf, Register Gagal')
        window.location = 'register.php' </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-box">
        <h1>Daftar</h1>
        <form method="POST" action="">
            <div class="user-box">
                <input type="text" name="nik" required="">
                <label for="nik">Nik</label>
            </div>
            <div class="user-box">
                <input type="text" name="nama" required="">
                <label for="nama">Nama</label>
            </div>
            <div class="user-box">
                <input type="text" name="username" required="">
                <label for="username">Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label for="password">Password</label>
            </div>
            <div class="user-box">
                <input type="text" name="telepon" required="">
                <label for="telepon">Telepon</label>
            </div>
            <center>
                <button type="submit" name="register">Register</button>
            </center>
  </form>  
  <h4>Sudah Punya Akun? Kembali 
  <a href="login.php"><button type="submit" class="btn btn-outline-info">Login</button></a></h4>
 </div>  
</body>
</html>