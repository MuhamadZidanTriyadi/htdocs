<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-box">
        <h1>LOGIN</h1>
        <form method="post" action="proseslogin.php">
            <div class="user-box">
                <input type="text" name="username" required="">
                <label for="username">Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label for="password">Password</label>
            </div>
            <center>
                <div class="ct-btn">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </center>
            <h4>Daftar
                <a href="register.php"><button type="button" class="btn btn-outline-info">Di Sini</button></a>
            </h4>
        </form>
    </div>
</body>
</html>