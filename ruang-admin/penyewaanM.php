<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- css saya  -->
    <link rel="stylesheet" href="rental.css" />

    <link rel="Website icon" type="png" href="imgweb/LOGOFIX.png">

    <title>GANCANGRENT</title>

  </head>
  <!-- pro css -->
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #1d267d" id="navbar">
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
                <a class="nav-link active me-2 text-white" aria-current="page" href="formUser.php"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-2 text-white" href="#kontak"><b>Contact</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-2 text-white" href="formlogin.php"><b>Log out</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-2 btn-light btn text-dark active" style="border-radius: 24px" href="profileweb.php"> <b>Profile</b></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>      

    <!-- jumbotron -->
    <div class="container-fluid text-white">
      <div class="container">
        <div class="text-center">
          <img data-aos="fade-left" class="img-fluid" data-aos-duration="1600" src="imgweb/sedan-car.png" alt="Gambar Mobil" />
        </div>
        <div class="text-center">
          <h1 class="display-4" data-aos="fade-down"  data-aos-duration="1500">Mazda 2 GT AT</h1>
          <div class="container">
            <div class="row">
              <div class="col-md-8 offset-md-2 text-center">
                <blockquote class="blockquote" data-aos="fade-up" data-aos-duration="2000">
                  <p class="mb-0">"Gancang Rent sewa mobil dengan harga terjangkau dan jasa sopir dalam dan luar kota."</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5 border mt-5 text-white" data-aos="zoom-in-right" data-aos-offset="500" data-aos-duration="1500" style="border-radius: 70px; background-color: #131a33">
      <div class="row">
        <div class="col-md-6 text-center">
          <h3 class="text-uppercase font-weight-bold">Sewa Mobil</h3>
          <hr class="bg-danger mx-auto" style="width: 50px; height: 2px" />
          <p class="lead">Harga mobil perhari:</p>
          <h2 class="font-weight-bold text-danger mb-4">Rp. 800.000/24 jam</h2>
          <a href="#" class="btn btn-danger btn-anim btn-lg rounded-pill px-5 py-3">Sewa Sekarang</a>
        </div>
        <div class="col-md-6 text-center">
          <h3 class="text-uppercase font-weight-bold">Sewa Sopir</h3>
          <hr class="bg-danger mx-auto" style="width: 50px; height: 2px" />
          <p class="lead">Harga sewa perhari:</p>
          <h2 class="font-weight-bold text-danger mb-4">Rp. 175.000/24 jam</h2>
          <a href="#" class="btn btn-danger btn-anim btn-lg rounded-pill px-5 py-3">Sewa Sekarang</a>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12 text-center">
          <h4 class="text-uppercase font-weight-bold">Catatan:</h4>
          <hr class="bg-danger mx-auto" style="width: 50px; height: 2px" />
          <ul class="list-unstyled mx-auto w-50">
            <li>Harga belum termasuk biaya sopir, bensin, parkir, tol, dan makan sopir.</li>
            <li>Sewa mobil berlaku selama 24 jam dengan waktu check-in pukul 00.00 dan check-out pukul 00.00.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid py-1 mt-5 text-white">
      <div class="row">
        <div class="col-md-4 text-center mb-4 mt-4" data-aos="zoom-in" data-aos-duration="1000">
          <img src="imgweb/seat_col.png" alt="Logo Kursi Mobil" width="50" class="mb-2" />
          <h4 class="text-uppercase font-weight-bold">Kursi</h4>
          <p class="lead mb-0">5 Kursi</p>
        </div>
        <div class="col-md-4 text-center mb-4 mt-4" data-aos="zoom-in" data-aos-duration="1500">
          <img src="imgweb/manual-transmission.png" alt="Logo Pombensin" width="50" class="mb-2" />
          <h4 class="text-uppercase font-weight-bold">Transmisi</h4>
          <p class="lead mb-0">Manual</p>
        </div>
        <div class="col-md-4 text-center mb-5 mt-4" data-aos="zoom-in" data-aos-duration="2000">
          <img src="imgweb/gas-pump.png" alt="Logo Pombensin" width="50" class="mb-2" />
          <h4 class="text-uppercase font-weight-bold">Bahan Bakar</h4>
          <p class="lead mb-0">Kapasitas 50 Liter</p>
        </div>
        <div class="col-md-12 text-center mt-4 mb-4" data-aos="zoom-in" data-aos-duration="2500">
          <img src="imgweb/car-engine.png" alt="Logo Pombensin" width="50" class="mb-2" />
          <h4 class="text-uppercase font-weight-bold">Mesin</h4>
          <h2 class="font-weight-bold mb-0">1200 cc</h2>
        </div>
      </div>
    </div>

    <section id="kontak" class="text-white contact mt-5 container-fluid">
        <div class="container-fluid" style="background-color: #131a33;">
            <center>
                <div class="container">
                    <div class="batas">
                        <h1 class="text-center display-4" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="250">GANCANGRENT</h1>
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
    </section>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

     <!-- my bootstrap -->
     <script src="interface.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
