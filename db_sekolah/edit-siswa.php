<?php

include('koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM siswa WHERE id_siswa = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Edit Siswa</title>
</head>

<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            EDIT SISWA
          </div>
          <div class="card-body">
            <form action="update-siswa.php" method="POST">

              <div class="form-group">
                <label>nama</label>
                <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan nama Siswa" class="form-control”>
                  <input type=" hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
              </div>

              <div class="form-group">
                <label>tanggal lahir</label>
                <input type="text" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir'] ?>" placeholder="Masukkan tanggal_lahir Siswa" class="form-control">
              </div>

              <div class="form-group">
                <label>jenis kelamin</label>
                <input type="text" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'] ?>" placeholder="Masukkan jenis_kelamin Siswa" class="form-control">
              </div>

              <button type="submit" class="btn btn-success">UPDATE</button>
              <button type="reset" class="btn btn-warning">RESET</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>