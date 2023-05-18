<?php 
// koneksi database
include 'konek.php';
 
// menangkap data yang di kirim dari form //sesuai yang ada di atribute pada tabel
$id_Pelanggan = $_POST['id_Pelanggan'];
$id_Supir = $_POST['id_Supir'];
$id_Mobil = $_POST['id_Mobil'];
$akhir_Sewa = $_POST['akhir_Sewa'];
$tanggal_Sewa = $_POST['tanggal_Sewa'];
$status_Pembayaran = $_POST['status_Pembayaran'];
$total_Bayar = $_POST['total_Bayar'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into penyewaan values('','$id_Pelanggan','$id_Supir','$id_Mobil','$tanggal_Sewa','$akhir_Sewa','$status_Pembayaran','$total_Bayar')"); // login adalah id_Mobil table di database
 
// mengalihkan halaman kembali ke index.php
header("location:penyewaan.php");
 
?>