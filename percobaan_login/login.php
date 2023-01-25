<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styleL.css">
</head>

<body>
    <div class="login-box">
            <h1>Login</h1>
            <form method="post" action="proseslogin.php">
                    <input type="text" name="username" class="user-box" placeholder="Username"> 
            
                    <input type="password" name="Password" class="user-box" placeholder="Password"> 
            
        <button type="submit" class="submit">Login</button>

        <a href="register.php">Register</a>
        </form>
    </div>
</body>

</html>