<?php 
include('../../config/koneksi.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$nohp = $_GET['nohp'];
$jenis = $_GET['jenis'];
$status = $_GET['status'];

$query = mysqli_query($koneksi, "UPDATE tb_daftarkontak set nama='$nama', nohp='$nohp', jenis='$jenis', status='$status'
WHERE id='$id'");

header('location: ../index.php?page=kelolakontak')
?>