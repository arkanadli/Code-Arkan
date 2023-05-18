<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: fornlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
  <link rel="stylesheet" href="profileFIX.css">
  
  <link rel="Website icon" type="png" href="imgweb/LOGOFIX.png">

  <title>GANCANGRENT</title>
</head>

<body>

  <!-- gambar avatar profile -->

  <!-- navbar -->
  
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <!-- logo -->
      <a class="navbar-brand" href="#"><img src="imgweb/LOGOFIX.png" width="110" height="100" alt="" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- button -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav btn ms-auto">
          <li class="nav-item">
            <a class="nav-link me-2 btn-light btn text-dark" style="border-radius: 24px" href="formUser.php"> <b>Home</b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <div class="login-box">
    <center>
      <img style="width: 200px;" id="PF" src="imgweb/icon profile.png" alt="avatar">
    </center>

    <form>
      <div class="user-box">
        <input type="text" name="" value="<?php echo $_SESSION['nama'] ?>" required="">
        <label>nama</label>
      </div>
      <div class="user-box">
        <input type="tel" name="" value="<?php echo $_SESSION['no_Handphone'] ?>" required="">
        <label for="phone">no handphone</label>
      </div>
      <div class="user-box">
        <input type="text" name="" value="<?php echo $_SESSION['email'] ?>" required="">
        <label>alamat email</label>
      </div>
      <div class="user-box">
        <input type="text" name="" value="<?php echo $_SESSION['alamat'] ?>" required="">
        <label>alamat tempat tinggal</label>
      </div>
      <div class="user-box">
        <input type="text" name="" value="<?php echo $_SESSION['umur'] ?>" required="">
        <label>umur</label>
      </div>
      <div class="button-simp">
        <button class="button-27" role="button">SIMPAN</button>
      </div>
    </form>
  </div>



  <div class="wrapper">
    <center>
      <div class="container">
        <div class="batas">
          <h1 class="text-center display-3">GANCANGRENT</h1>
        </div>

        <div class="kontak">
          <img id="map" src="laman/map.png" alt="footer" /><br /><br /><br />
          <img id="hp" src="laman/hp.png" alt="footer" /><br /><br /><br />
          <img id="mail" src="laman/mail.png" alt="footer" /><br /><br /><br />
        </div>

        <!-- isi dari map, telephone, mail -->
        <div class="isi">
          <p>cornerin aja, JL. malu-malu<br />kav200A,cibiru, Bandung</p>
          <br />
          <p>66778812342</p>
          <br /><br>
          <p>info@rent-car</p>
        </div>
        <!--akhir isi dari map, telephone, mail -->

        <div class="ident">
          <div class="pt">
            <p><b>PT. ARIKANNGGA</b></p>

            <div class="pt-isi">
              <p>rental mobil berkualitas<br />dengan driver ataupun lepas kunci</p>
            </div>
          </div>
          <br />
          <div class="layanan">
            <p><b>Layanan kami</b></p>
          </div>

          <div class="layanan-isi">
            <p>sewa mobil</p>
          </div>
        </div>

        <div class="gambar-footer">
          <img id="logo-footer" src="laman/LOGO GR NEW 2.png" alt="footer" /><br />
          <div>
            <ul class="sosmed">
              <li><img id="twitt" src="laman/twitter logo 1.png" alt="footer" /></li>
              <li><img id="FB" src="laman/facebook logo 1.png" alt="footer" /></li>
              <li><img id="IG" src="laman/instagram logo 1.png" alt="footer" /></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="cr">
        <p>Copyright ⓒ 2022. Rent-CAR. all right reserved</p>
      </div>
    </center>
  </div>

  <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script> -->

</body>

</html>