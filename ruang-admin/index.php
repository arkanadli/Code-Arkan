<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: formlogin.php");
}

?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- logo -->
  <link href="img/logo/logo.png" rel="icon" />
  <!-- akhir logo  -->
  <title>RuangAdmin - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/ruang-admin.min.css" rel="stylesheet" />
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo2.png" />
        </div>
        <div class="sidebar-brand-text mx-3">Ruang Admin</div>
      </a>
      <hr class="sidebar-divider my-0" />
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Data User</span></a>
      </li>
      <hr class="sidebar-divider" />
      <div class="sidebar-heading">Inventaris</div>
      <!-- bootstrap btn  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="brand.php">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Brand Mobil</span>
        </a>
      </li>
      <!-- bootstrap btn  -->
      <!-- forms btn  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="jenis.php">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Jenis Mobil</span>
        </a>
      </li>
      <!-- tabels btn  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="mobil.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Inventaris Mobil</span>
        </a>
      </li>
      <!-- tabels btn  -->
      <!-- Ui color btn  -->
      <li class="nav-item">
        <a class="nav-link" href="supir.php">
          <i class="fas fa-fw fa-palette"></i>
          <span>Data Sopir</span>
        </a>
      </li>
      <!-- Ui color btn  -->
      <!-- Ui color btn  -->
      <hr class="sidebar-divider" />
      <div class="sidebar-heading">Transaction</div>
      <li class="nav-item">
        <a class="nav-link" href="penyewaan.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Transaksi penyewaan</span>
        </a>
      </li>
      <hr class="sidebar-divider" />
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <!-- prof -->
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px" />
                <span class="ml-2 d-none d-lg-inline text-white small"><?php echo "Welcome, " . $_SESSION['nama']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data User</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"></div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"></div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"></div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"></div>

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">

              <div class="card-body" style="width: 100%;">
                <!-- pasang disini -->
                <div class="container shadow-lg p-3 mb-5 bg-body rounded" style=" margin-top:0px; width:100%;">
                  <form method="POST" action="tambahUser.php">
                    <button type="input" class="btn btn-outline-primary">Tambah</button>

                  </form>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <tr>
                        <th>No</th>
                        <th>Id Pelanggan</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No handphone</th>
                        <th>Alamat</th>
                        <th>Umur</th>
                        <th>Role</th>
                        <th>Aksi</th>
                      </tr>
                  </div>
                </div>
                <?php
                include 'konek.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select * from pelanggan");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['id_Pelanggan']; ?></td>
                    <td><?php echo $d['username']; ?></td>
                    <td><?php echo $d['password']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td><?php echo $d['no_Handphone']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['umur']; ?></td>
                    <td><?php echo $d['role']; ?></td>

                    <td>
                      <a role="button" class="btn btn-info" href="editUser.php?id=<?php echo $d['id_Pelanggan']; ?>"> &nbsp; UBAH </a> </button>
                      <a role="button" class="btn btn-danger" href="hapusUser.php?id=<?php echo $d['id_Pelanggan']; ?>">HAPUS</a></button>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>

        <!--Row-->



        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to logout?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="formlogin.php" class="btn btn-primary">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!---Container Fluid-->
    </div>
    <!-- Footer -->

    <!-- Footer -->
  </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>