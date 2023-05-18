<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded" style=" margin-top: 100px; width:50%;">




        <div class="card-body">
            <a href="jenis.php" class="btn btn-outline-primary ">KEMBALI</a>
            <br>
            <br>
            <?php
            include('konek.php');
            $idjenis = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from jenis where id_Jenis = '$idjenis'") or die(mysqli_error($koneksi));

            $row = mysqli_fetch_assoc($data);
            ?>
            <h1>EDIT JENIS</h1>
            <form method="post" action="" role="form">
                <div class="form-group">
                    <label>Id Brand</label>
                    <input type="text" name="id_Brand" class="form-control" required="" value="<?= $row['id_Brand']; ?>">

                </div>
                <div class="form-group">
                    <label>Nama Jenis</label>
                    <input type="text" name="nama_Jenis" class="form-control" required="" value="<?= $row['nama_Jenis']; ?>">
                </div>
                <div class="form-group">
                    <label>Jumlah Kursi</label>
                    <input type="text" name="jumlah_Kursi" class="form-control" required="" value="<?= $row['jumlah_Kursi']; ?>">
                </div>
                <div class="form-group">
                    <label>Tahun Keluaran</label>
                    <input type="text" name="tahun_Keluaran" class="form-control" required="" value="<?= $row['tahun_Keluaran']; ?>">
                </div>
                <div class="form-group">
                    <label>Tarif Per Hari</label>
                    <input type="text" name="tarif" class="form-control" required="" value="<?= $row['tarif']; ?>">
                </div>
               
                <br>
                <button type="submit" class="btn btn-success " name="submit" <?php "<script>alert('Data Berhasil Disimpan!');window.location='jenis.php';</script>"; ?>>Ubah Data</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $id_Brand    = $_POST['id_Brand'];
                $nama_Jenis    = $_POST['nama_Jenis'];
                $jumlah_Kursi       = $_POST['jumlah_Kursi'];
                $tahun_Keluaran = $_POST['tahun_Keluaran'];
                $tarif      = $_POST['tarif'];
                mysqli_query($koneksi, "UPDATE jenis SET id_Brand='$id_Brand', nama_Jenis='$nama_Jenis', jumlah_Kursi='$jumlah_Kursi', tahun_Keluaran='$tahun_Keluaran' , tarif='$tarif' where id_Jenis='$idjenis'") or die(mysqli_error($koneksi));

                echo "<script>alert('Data Berhasil Diubah!');window.location='jenis.php';</script>";
            }
            ?>

        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>