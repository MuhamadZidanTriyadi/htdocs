<table width="100%" border="0" align="center" cellpadding="0" cellspasing="0">
    <tr bgcolor="#ff6600">
        <th width="5">No</td>
        <th width="80" height="42">NIP</td>
        <th width="130">Nama Depan</td>
        <th width="130">Nama Belakang</td>
        <th width="60">Jenis Kelamin</td>
        <th width="170">Alamat</td>
        <th width="130">Jabatan</td>
        <th width="130">Gaji</td>
        <th width="130">Nocab</td>
    </tr>
    <?php
    include "koneksi.php";
    $Cari   = "SELECT * FROM pegawai ORDER BY nip";
    $Tampil = mysqli_query($conn, $Cari);
    $nomor  = 0;
    while ($hasil  = mysqli_fetch_array($Tampil)) {
        $nip       = stripslashes($hasil['nip']);
        $ndep      = stripslashes($hasil['ndep']);
        $nblk      = stripslashes($hasil['nblk']);
        $jk        = stripslashes($hasil['jk']);
        $alamat    = stripslashes($hasil['alamat']);
        $jabatan   = stripslashes($hasil['jabatan']);
        $gaji      = stripslashes($hasil['gaji']);
        $nocab     = stripslashes($hasil['nocab']);
    {
    $nomor++;
    ?>
    <tr align="center" bgcolor="#DFE6EF">
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
    </tr>
    <tr align="center">
        <td height="32"><?=$nomor?></td>
        <td><?=$nip?></td>
        <td><?=$ndep?></td>
        <td><?=$nblk?></td>
        <td><?=$jk?></td>
        <td><?=$alamat?></td>
        <td><?=$jabatan?></td>
        <td><?=$gaji?></td>
        <td><?=$nocab?></td>
    </tr>
    <?php
    }
}
?>

</table>
<a href="tampil2.php">Tampilkan Data Login</a>
<a href="index.php">LOGUOT</a>
</div>