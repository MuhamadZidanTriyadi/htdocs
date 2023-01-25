<?php
// belajar scope (lingkungan) variable

//ini adalah variabel nama
$nama = "Zidan";

//ini adalah fungsi fungsi dapatNama
function dapatNama()
{
    //ini adalah kata kunci untuk mendapatkan variabel nama didalam function dapatNama
    global $nama;
    echo $nama;
}

//function dapatNama dipanggil
dapatNama();

?>