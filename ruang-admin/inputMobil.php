<?php 
// koneksi database
include 'konek.php';

// menangkap data yang di kirim dari form //sesuai yang ada di atribute pada tabel

$id_Jenis = $_POST['id_Jenis'];
$warna_Mobil = $_POST['warna_Mobil'];
$nopol_Mobil = $_POST['nopol_Mobil'];
$status = $_POST['status'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into mobil values('','$id_Jenis','$warna_Mobil','$nopol_Mobil','$status')"); // login adalah nama table di database
 
// mengalihkan halaman kembali ke index.php
header("location:mobil.php");
 
?>