<?php 
// koneksi database
include 'konek.php';
 
// menangkap data id yang di kirim dari url
$idpenyewaan = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from penyewaan where id_Penyewaan='$idpenyewaan'");
 
header("location:penyewaan.php");
 
?>