<?php
// echo date("l, d-m-y");
// untuk menampilkan tanggal dengan format tertentu

// time
// UNIK TIMESTAMP

// echo time();


// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal,tahun
// echo date("l", mktime(0,0,0,5,8,2005));


//strtotime
echo date("l", strtotime("05 aug 2005"));
?>