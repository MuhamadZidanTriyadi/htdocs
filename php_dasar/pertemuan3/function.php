<?php 
function salam($waktu, $nama) {
    return "Selamat $waktu, $nama";
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1><?= salam("Pagi","Zidan"); ?></h1>
</body>
</html>