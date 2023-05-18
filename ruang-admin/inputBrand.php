<?php
// koneksi database
include 'konek.php';

// menangkap data yang di kirim dari form //sesuai yang ada di atribute pada tabel

$nama = $_POST['nama'];
$asal_Negara = $_POST['asal_Negara'];


// menginput data ke database
mysqli_query($koneksi, "insert into brand values('','$nama','$asal_Negara')"); // login adalah nama table di database
if (isset($_POST['submit'])) {
    

    echo "<script>alert('Data Berhasil Diubah!');window.location='jenis.php';</script>";
}

// mengalihkan halaman kembali ke index.php
header("location:brand.php");

?>