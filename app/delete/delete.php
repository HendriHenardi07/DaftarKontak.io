<?php 
include('../../config/koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM tb_daftarkontak WHERE id='$id'");

header('location: ../index.php?page=kelolakontak')
?>