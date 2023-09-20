<?php 
include('../../config/koneksi.php');
$nama = $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['password'];
$level = $_GET['level'];

$query = mysqli_query($koneksi, "INSERT INTO tb_user (id,nama,username,password,level) VALUES ('','$nama','$username','$password','$level')");
header('location: ../index.php?page=manoperator');
?>