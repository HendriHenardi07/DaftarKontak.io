<?php 
include('koneksi.php');
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query = mysqli_query($koneksi, "INSERT INTO tb_user (id,nama,username,password,level) VALUES ('','$nama','$username','$password','$level')");
header('location: ../register/register.php');

?>