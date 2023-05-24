<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- login -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- cdnjs css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- cdnjs thame -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- css saya  -->
    <link rel="stylesheet" href="rental.css" />

    <link rel="Website icon" type="png" href="imgweb/LOGOFIX.png">

    <title>GANCANGRENT</title>
</head>

<body>
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
                        <a class="nav-link active me-2 text-white" aria-current="page" href="#home"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2 text-white" href="#kontak"><b>Contact</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2 text-white" href="formlogin.php"><b>Log out</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2 btn-light btn text-dark" style="border-radius: 24px" href="profileweb.php"> <b>Profile</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
        <p class="text-white jmb" data-aos="fade-up" style="text-shadow: 3px 2px 2px black;"><b>GANCANGRENT</b></p>
    </div>
    
    <!-- jumbotron -->

    <!-- feedback -->
    <section style="padding: 10px" class="text-center text-white feedback container-fluid">
        <div class="posisi">
            <div class="d-inline-block" data-tilt data-aos="zoom-in-down" data-aos-duration="3000">
                <img class="lingkaran1" src="imgweb/feedback1.png" class="rounded" alt="..." />
                <p style="font-size: 30px; text-shadow: 3px 2px 2px black;">Bantuan 24 jam</p>
            </div>
            <div class="d-inline-block" data-tilt data-aos="zoom-in-down" data-aos-duration="3000">
                <img class="lingkaran2" src="imgweb/feedback2.png" class="rounded" alt="..." />
                <p style="font-size: 30px; text-shadow: 3px 2px 2px black;">Harga terjangkau</p>
            </div>
            <div class="d-inline-block" data-tilt data-aos="zoom-in-down" data-aos-duration="3000">
                <img class="lingkaran3" src="imgweb/feedback3.png" class="rounded" alt="..." />
                <p style="font-size: 30px; text-shadow: 3px 2px 2px black;">Perasyaratan mudah</p>
            </div>
        </div>

        <!-- owl-carousel -->
        <div class="container-fluid owel my-5">
            <h1 class="text-center fw-bold display-1 mb-5" data-aos="zoom-in">Pilih Mobil Rental</h1>
            <div class="row">
                <div class="owl-carousel owl-theme styleImg">
                    <div class="item mb-4">
                        <div class="border-0 shadow">
                            <img src="imgweb/sedan-car.png" data-aos="zoom-in" data-aos-duration="1000" alt="" class="card-img-top img-fluid" />
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <h4 class="text-white mb-4">Mazda 2 GT AT</h4>
                                <h4 style="color: yellow;" class="mb-4">Rp.800.000/24jam</h4>
                                <a href="penyewaanM.php" type="button" class="btn btn-outline-warning" data-tilt>RENTAL SEKARANG</a>
                              </div>                              
                        </div>
                    </div>
                    <!-- end -->
                    <div class="item mb-4">
                        <div class="border-0 shadow">
                            <img src="imgweb/hyundai-tucson.png" data-aos="zoom-in" data-aos-duration="2000" alt="" class="card-img-top img-fluid" />
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <h4 class="text-white mb-4">Hyundai Tucson</h4>
                                <h4 style="color: yellow;" class="mb-4">Rp.500.000/24jam</h4>
                                <a href="lamansewa.php" type="button" class="btn btn-outline-warning" data-tilt>RENTAL SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <div class="item mb-4">
                        <div class="border-0 shadow">
                            <img src="imgweb/rubicon-jeep-car.png" data-aos="zoom-in" data-aos-duration="3000" alt="" class="card-img-top img-fluid" />
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <h4 class="text-white mb-4">Jeep Wrangler Rubicon 4x4</h4>
                                <h4 style="color: yellow;" class="mb-4">Rp.9.000.000/24jam</h4>
                                <a href="lamansewa.php" type="button" class="btn btn-outline-warning" data-tilt>RENTAL SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <div class="item mb-4">
                        <div class="border-0 shadow">
                            <img src="imgweb/honda_civic.png" data-aos="zoom-in" data-aos-duration="3000" alt="" class="card-img-top img-fluid" />
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <h4 class="text-white mb-4">Honda Civic</h4>
                                <h4 style="color: yellow;" class="mb-4">Rp.550.000/24jam</h4>
                                <a href="lamansewa.php" type="button" class="btn btn-outline-warning" data-tilt>RENTAL SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <div class="item mb-4">
                        <div class="border-0 shadow">
                            <img src="imgweb/toyota-avanza.png" data-aos="zoom-in" data-aos-duration="3000" alt="" class="card-img-top img-fluid" />
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <h4 class="text-white mb-4">Toyota Avanza</h4>
                                <h4 style="color: yellow;" class="mb-4">Rp.550.000/24jam</h4>
                                <a href="lamansewa.php" type="button" class="btn btn-outline-warning" data-tilt>RENTAL SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <div class="item mb-4">
                        <div class="border-0 shadow">
                            <img src="imgweb/honda-brio.png" data-aos="zoom-in" data-aos-duration="3000" alt="" class="card-img-top img-fluid" />
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <h4 class="text-white mb-4">Honda Brio RS MT dan CVT</h4>
                                <h4 style="color: yellow;" class="mb-4">Rp.550.000/24jam</h4>
                                <a href="lamansewa.php" type="button" class="btn btn-outline-warning" data-tilt>RENTAL SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <div class="item mb-4">
                        <div class="border-0 shadow">
                            <img src="imgweb/grand-livina-special-version.png" data-aos="zoom-in" data-aos-duration="3000" alt="" class="card-img-top img-fluid" />
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <h4 class="text-white mb-4">Nissan Livina</h4>
                                <h4 style="color: yellow;" class="mb-4">Rp.550.000/24jam</h4>
                                <a href="lamansewa.php" type="button" class="btn btn-outline-warning" data-tilt>RENTAL SEKARANG</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- owl-carousel -->
        </div>
    </section>
    <!-- feedback -->

    <!-- informasi -->
    <div class="row infr container-fluid">
        <div class="col-md-6">
          <p class="text-white p-5"><strong>Apakah kamu mencari mobil rental di bandung?</strong> <br> <br> Kamu ingin berpergian ke luar kota atau mengelilingi
                        kota mu sendiri namun tidak memiliki kendaran atau
                        kendaraanmu sedang rusak? tenang saja kami memiliki <br>
                        mobil-mobil yang dapat membantu kamu membawa keluarga
                        jalan-jalan diluar kota atau di dalam kota. dapatkaan itu semua
                        di website Gancang-Rent.</p>
        </div>
        <div class="col-md-6">
            <img class="img-fluid" data-aos="zoom-in-left" data-aos-duration="2000" src="imgweb/carLogin.png" alt="...">
          </div>
      </div>
      
      
    <!-- informasi -->

    <!-- contact -->

    <section id="kontak" class="text-white contact">
        <div class="container-fluid" style="background-color: #131a33;">
            <center>
                <div class="container">
                    <div class="batas">
                        <h1 class="text-center display-4" data-aos="zoom-in"><b>GANCANGRENT</b></h1>
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
    <!-- contact -->



    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- cdnjs jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- cdnjs file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script type="text/javascript" src="vanilla-tilt.min.js"></script>

    <!-- my bootstrap -->
    <script src="interface.js"></script>
</body>

</html>