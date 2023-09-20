<?php 
include('../../config/koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id='$id'");

header('location: ../index.php?page=manoperator')
?>