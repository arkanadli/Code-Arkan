<?php 
// koneksi database
include 'konek.php';
 
// menangkap data id yang di kirim dari url
$idsupir = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from supir where id_Supir='$idsupir'");
 
header("location:supir.php");
 
?>