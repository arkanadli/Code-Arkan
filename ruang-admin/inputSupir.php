<?php 
// koneksi database
include 'konek.php';

// menangkap data yang di kirim dari form //sesuai yang ada di atribute pada tabel

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$no_Handphone = $_POST['no_Handphone'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];

// asdasd

// menginput data ke database
mysqli_query($koneksi,"insert into supir values('','$nama','$gender','$no_Handphone','$alamat','$umur')"); // login adalah nama table di database
 
// mengalihkan halaman kembali ke index.php
header("location:supir.php");
 
?>