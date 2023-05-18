<?php 
// koneksi database
include 'konek.php';
 
// menangkap data yang di kirim dari form //sesuai yang ada di atribute pada tabel
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_Handphone = $_POST['no_Handphone'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$role = $_POST['role'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pelanggan values('','$username','$password','$nama','$email','$no_Handphone','$alamat','$umur','$role')"); // login adalah nama table di database
echo "<script>alert('Data Berhasil Diubah!');window.location='penyewaan.php';</script>";  
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>