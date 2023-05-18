<?php 
// koneksi database
include 'konek.php';
 
// menangkap data id yang di kirim dari url
$idbrand = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from brand where id_Brand='$idbrand'");
 
header("location:brand.php");
 
?>