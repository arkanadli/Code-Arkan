<?php 
// koneksi database
include 'konek.php';
 
// menangkap data yang di kirim dari form //sesuai yang ada di atribute pada tabel
$username = $_POST['username'];
$password = $_POST['password'];

// ssadsad
// menginput data ke database
mysqli_query($koneksi,"insert into pelanggan values('','$username','$password','','','','','','user')"); // login adalah nama table di database

// mengalihkan halaman kembali ke index.php
header("location:formlogin.php");
 
?>