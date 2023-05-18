<?php 
// koneksi database
include 'konek.php';
 
// menangkap data id yang di kirim dari url
$idjenis = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from jenis where id_Jenis='$idjenis'");
 
header("location:jenis.php");
 
?>