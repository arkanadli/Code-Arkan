<?php 
// koneksi database
include 'konek.php';
 
// menangkap data id yang di kirim dari url
$idmobil = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from mobil where id_Mobil='$idmobil'");
 
header("location:mobil.php");
 
?>