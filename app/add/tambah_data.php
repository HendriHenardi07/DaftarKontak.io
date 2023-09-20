<?php 
include('../../config/koneksi.php');
$nama = $_GET['nama'];
$nohp = $_GET['nohp'];
$jenis = $_GET['jenis'];
$status = $_GET['status'];

$query = mysqli_query($koneksi, "INSERT INTO tb_daftarkontak (id,nama,nohp,jenis,status) VALUES ('','$nama','$nohp','$jenis','$status')");

header('location: ../index.php?page=kelolakontak')
?>