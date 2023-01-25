<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
    <div class="login-box">
        <h1>Form Register</h1>
        <form method="POST" action="">
            <input type="text" placeholder="NIP" class="user-box">

            <input type="text" placeholder="Nama Depan" class="user-box">

            <input type="text" placeholder="Nama Belakang" class="user-box">

            <input type="text" placeholder="Gender" list="gender" class="user-box">
            <datalist id="gender">
                <option value="Laki-Laki"></option>
                <option value="Perempuan"></option>
            </datalist>

            <input type="text" placeholder="Alamat" class="user-box">

            <input type="text" placeholder="Telepon" class="user-box">

            <input type="text" placeholder="Jabatan" class="user-box">

            <input type="text" placeholder="Gaji" class="user-box">

            <input type="text" placeholder="Cabang" class="user-box">

            <button type="submit" class="submit">Register</button>
        </form>
        <p>Sudah Punya Akun? Kembali
            <a href="login.php">Login</a>
        </p>
    </div>
</body>

</html>