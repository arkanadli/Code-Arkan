<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penyewaan</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded" style=" margin-top: 100px; width:50%;">




        <div class="card-body">
            <a href="penyewaan.php" class="btn btn-outline-primary ">KEMBALI</a>
            <br>
            <br>
            <?php
            include('konek.php');
            $idpenyewaan = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from penyewaan where id_Penyewaan = '$idpenyewaan'") or die(mysqli_error($koneksi));

            $row = mysqli_fetch_assoc($data);
            ?>
            <h1>EDIT PENYEWAAN</h1>
            <form method="post" action="" role="form">
                <div class="form-group">
                    <label>Id Pelanggan</label>
                    <input type="text" name="id_Pelanggan" class="form-control" required="" value="<?= $row['id_Pelanggan']; ?>">

                </div>
                <div class="form-group">
                    <label>Id Supir</label>
                    <input type="text" name="id_Supir" class="form-control" required="" value="<?= $row['id_Supir']; ?>">
                </div>
                <div class="form-group">
                    <label>Id Mobil</label>
                    <input type="text" name="id_Mobil" class="form-control" required="" value="<?= $row['id_Mobil']; ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Awal Sewa</label>
                    <input type="date" name="tanggal_Sewa" class="form-control" required="" value="<?= $row['tanggal_Sewa']; ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal Akhir Sewa</label>
                    <input type="date" name="akhir_Sewa" class="form-control" required="" value="<?= $row['akhir_Sewa']; ?>">
                </div>
                <div class="form-group">
                    <label>Status Pembayaran</label>
                    <input type="text" name="status_Pembayaran" class="form-control" required="" value="<?= $row['status_Pembayaran']; ?>">
                </div>
                <div class="form-group">
                    <label>Total Pembayaran</label>
                    <input type="text" name="total_Bayar" class="form-control" required="" value="<?= $row['total_Bayar']; ?>">
                </div>

                <br>
                <button type="submit" class="btn btn-success " name="submit" <?php "<script>alert('Data Berhasil Disimpan!');window.location='penyewaan.php';</script>"; ?>>Ubah Data</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $id_Pelanggan    = $_POST['id_Pelanggan'];
                $id_Supir    = $_POST['id_Supir'];
                $id_Mobil        = $_POST['id_Mobil'];
                $akhir_Sewa       = $_POST['akhir_Sewa'];
                $tanggal_Sewa = $_POST['tanggal_Sewa'];
                $status_Pembayaran      = $_POST['status_Pembayaran'];
                $total_Bayar        = $_POST['total_Bayar'];

                mysqli_query($koneksi, "UPDATE penyewaan SET id_Pelanggan='$id_Pelanggan', id_Supir='$id_Supir', id_Mobil='$id_Mobil', akhir_Sewa='$akhir_Sewa', tanggal_Sewa='$tanggal_Sewa' , status_Pembayaran='$status_Pembayaran' ,total_Bayar='$total_Bayar' where id_Penyewaan='$idpenyewaan'") or die(mysqli_error($koneksi));

                echo "<script>alert('Data Berhasil Diubah!');window.location='penyewaan.php';</script>";
            }
            ?>

        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>