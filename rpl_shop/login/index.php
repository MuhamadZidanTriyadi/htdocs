<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2><i>RPL SHOP</i></h2>
        <h3>Login Akun</h3>
        <form action="process.php" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">

            <button type="submit" name="login" class="btn-login">Login</button>

            <div class="register">
                <span>Belum Mempunyai Akun? 
                    <a href="../register/index.php">Silahkan Register</a>
                </span>
            </div>

        </form>
    </div>
</body>
</html>