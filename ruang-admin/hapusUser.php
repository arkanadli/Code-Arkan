<?php 
// koneksi database
include 'konek.php';
 
// menangkap data id yang di kirim dari url
$iduser = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pelanggan where id_Pelanggan='$iduser'");
 
header("location:index.php");
 
?>