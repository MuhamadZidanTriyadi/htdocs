<?php 
include 'koneksi.php';
if(isset($_GET['id'])){
    $delete = mysqli_query($conn, "DELETE FROM laptop WHERE id = '".$_GET['id']."' ");
    header('location:index.php');
}
?>