<?php
$koneksi = mysqli_connect('localhost','root','','daftarkontak');

// mengecek koneksi
if(!$koneksi){
    die("Koneksi Gagal:". mysqli_connect_error());
}else{
    // echo "Koneksi Berhasil";
}
?>