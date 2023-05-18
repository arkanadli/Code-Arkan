<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit mobil</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded" style=" margin-top: 100px; width:50%;">




        <div class="card-body">
            <a href="mobil.php" class="btn btn-outline-primary ">KEMBALI</a>
            <br>
            <br>
            <?php
            include('konek.php');
            $idmobil = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from mobil where id_mobil = '$idmobil'") or die(mysqli_error($koneksi));

            $row = mysqli_fetch_assoc($data);
            ?>
            <h1>EDIT MOBIL</h1>
            <form method="post" action="" role="form">
                <div class="form-group">
                    <label>Id Jenis</label>
                    <input type="text" name="id_Jenis" class="form-control" required="" value="<?= $row['id_Jenis']; ?>">

                </div>
                <div class="form-group">
                    <label>Warna Mobil</label>
                    <input type="text" name="warna_Mobil" class="form-control" required="" value="<?= $row['warna_Mobil']; ?>">
                </div>
                <div class="form-group">
                    <label>No Polisi</label>
                    <input type="text" name="nopol_Mobil" class="form-control" required="" value="<?= $row['nopol_Mobil']; ?>">
                </div>
                <div class="form-group">
                    <label>Status Peminjaman</label>
                    <input type="text" name="status" class="form-control" required="" value="<?= $row['status']; ?>">
                </div>
               
                <br>
                <button type="submit" class="btn btn-success " name="submit" <?php "<script>alert('Data Berhasil Disimpan!');window.location='mobil.php';</script>"; ?>>Ubah Data</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $id_Jenis    = $_POST['id_Jenis'];
                $warna_Mobil       = $_POST['warna_Mobil'];
                $nopol_Mobil = $_POST['nopol_Mobil'];
                $status      = $_POST['status'];
                mysqli_query($koneksi, "UPDATE mobil SET id_Jenis='$id_Jenis', warna_Mobil='$warna_Mobil', nopol_Mobil='$nopol_Mobil' , status='$status' where id_mobil='$idmobil'") or die(mysqli_error($koneksi));

                echo "<script>alert('Data Berhasil Diubah!');window.location='mobil.php';</script>";
            }
            ?>

        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>