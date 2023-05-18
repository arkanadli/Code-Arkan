<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded" style=" margin-top: 100px; width:50%;">




        <div class="card-body">
            <a href="index.php" class="btn btn-outline-primary ">KEMBALI</a>
            <br>
            <br>
            <?php
            include('konek.php');
            $iduser = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from pelanggan where id_Pelanggan = '$iduser'") or die(mysqli_error($koneksi));

            $row = mysqli_fetch_assoc($data);
            ?>
            <h1>EDIT USER</h1>
            <form method="post" action="" role="form">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required="" value="<?= $row['username']; ?>">

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required="" value="<?= $row['password']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" required="" value="<?= $row['nama']; ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required="" value="<?= $row['email']; ?>">
                </div>
                <div class="form-group">
                    <label>No handphone</label>
                    <input type="text" name="no_Handphone" class="form-control" required="" value="<?= $row['no_Handphone']; ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" required="" value="<?= $row['alamat']; ?>">
                </div>
                <div class="form-group">
                    <label>Umur</label>
                    <input type="text" name="umur" class="form-control" required="" value="<?= $row['umur']; ?>">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role" class="form-control" required="" value="<?= $row['role']; ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-success " name="submit" <?php "<script>alert('Data Berhasil Disimpan!');window.location='index.php';</script>"; ?>>Ubah Data</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $username    = $_POST['username'];
                $password    = $_POST['password'];
                $nama        = $_POST['nama'];
                $email       = $_POST['email'];
                $no_Handphone = $_POST['no_Handphone'];
                $alamat      = $_POST['alamat'];
                $umur        = $_POST['umur'];
                $role        = $_POST['role'];    
                mysqli_query($koneksi, "UPDATE pelanggan SET username='$username', password='$password', nama='$nama', email='$email', no_Handphone='$no_Handphone' , alamat='$alamat' ,umur='$umur', role='$role' where id_Pelanggan='$iduser'") or die(mysqli_error($koneksi));

                echo "<script>alert('Data Berhasil Diubah!');window.location='index.php';</script>";
            }
            ?>

        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>