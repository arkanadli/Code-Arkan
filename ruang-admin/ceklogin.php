<?php
    session_start();
    include 'konek.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $dataUser = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE username='$username' and password='$password' and role='user'");
    $cekUser = mysqli_num_rows($dataUser);
     $dataAdmin = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE username='$username' and password='$password' and role='admin'");
    $cekAdmin = mysqli_num_rows($dataAdmin);
    if($cekUser > 0){
        $_SESSION['username']=$username;
        $d = mysqli_fetch_array($dataUser);
        $id_Pelanggan = $d['id_Pelanggan'];
        $nama = $d['nama'];
        $email = $d['email'];
        $no_Handphone = $d['no_Handphone'];
        $alamat = $d['alamat'];
        $umur = $d['umur'];
        $_SESSION['id_Pelanggan']=$id_Pelanggan;
        $_SESSION['no_Handphone']=$no_Handphone;
        $_SESSION['email']=$email;
        $_SESSION['alamat']=$alamat;
        $_SESSION['umur']=$umur;
        $_SESSION['nama'] = $nama;
        // $_SESSION['status']="login";
        header("location: formUser.php");
        // header("location: https://arkanadli.github.io/Code-Arkan/FinalAssignment");
    }
    else if ($cekAdmin){
        $_SESSION['username']=$username;
        $d = mysqli_fetch_array($dataAdmin);
        $id_Pelanggan = $d['id_Pelanggan'];
        $_SESSION['id_Pelanggan']=$id_Pelanggan;
        $nama = $d['nama'];
        $_SESSION['nama'] = $nama;
        // $_SESSION['status']="login";
        header("location: index.php");

    }
    else {
        echo "<script> alert ('login gagal ! username dan password tidak benar '); </script>";
        echo "<script> window.location = 'formlogin.php';</script>";
    }
    
    ?>