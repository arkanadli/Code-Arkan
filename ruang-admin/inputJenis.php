<?php 
// koneksi database
include 'konek.php';

// menangkap data yang di kirim dari form //sesuai yang ada di atribute pada tabel

$id_Brand = $_POST['id_Brand'];
$nama_Jenis = $_POST['nama_Jenis'];
$jumlah_Kursi = $_POST['jumlah_Kursi'];
$tahun_Keluaran = $_POST['tahun_Keluaran'];
$tarif = $_POST['tarif'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into jenis values('','$id_Brand','$nama_Jenis','$jumlah_Kursi','$tahun_Keluaran','$tarif')"); // login adalah nama table di database
 
// mengalihkan halaman kembali ke index.php
header("location:jenis.php");
 
?>