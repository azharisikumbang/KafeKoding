<?php 
// error_reporting(0);
session_start();
if (!isset($_SESSION['login'])) {
  header('location:../loginRegister.php');
}
?>
<?php include_once 'count.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Kafekoding Dashboard</title>
    <link rel="shortcut icon" href="../libraries/images/logo.png" />

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link rel="stylesheet" href="../libraries/fonts/1.ttf">
    <!-- Custom styles for this template-->
    <link href="libraries/css/sb-admin-2.css" rel="stylesheet" />
   
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <?php include 'menubar.php'; ?>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <?php include 'topbar.php'; ?>

          <!-- Begin Page Content -->
          <div class="container-fluid ">
            <!-- Page Heading -->

            <!-- Content Row -->
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12">
              <div class="card admin-cards mb-4  all-cards ">
                <div class="card-body row p-3 d-flex ">
                  <div class="col-sm12 col-md-6 align-self-center ">
                    <h3 class="admin-judul">
                      Hallo <?php echo $_SESSION['nama'];?>, Selamat datang
                    </h3>
                    <p class="admin-paragraph text-left">
                     Hallo <?php echo $_SESSION['nama'];?>, selamat datang di Dashboard Kafekoding,
                     Silahkan cek data yang perlu anda cek di dashboard ini terdapat data peserta, materi, mentor uangkas, dan Daftar tunggu
                    </p>
                  </div>
                  <div class="col-sm12 col-md-6 image-admin d-flex justify-content-center align-self-center">
                    <img src="../libraries/images/image-header.png" alt="">
                  </div>
                </div>
               
              </div>
              </div>
            </div>
              <div class="row">
              <!-- Mentor -->
              <div class="col-xl-3 col-md-12 mb-4">
                <div class="card card-data all-cards">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-3 style="color: #02366e;">Mentor</div>
                        <div class="h5 font-weight-bold text-gray-800">
                          <?php
                          echo Hitung('mentor')." Orang";
                          ?>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user fa-3x" style="color: #02366e;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <!-- data materi -->
              <div class="col-xl-3 col-md-12 mb-4">
                <div class="card card-data all-cards">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-3 style="color: #02366e;">Kelas</div>
                        <div class="h5 font-weight-bold text-gray-800">
                        <?php
                          echo Hitung('kelas');
                          ?>
                        Kelas</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-building fa-3x" style="color: #02366e;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- data peserta terdaftar -->
              <div class="col-xl-3 col-md-12 mb-4">
                <div class="card card-data all-cards">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-3 style="color: #02366e;">Peserta</div>
                        <div class="h5 font-weight-bold text-gray-800">
                        <?php 
                          echo Hitung('peserta');
                          ?>
                        Orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-3x" style="color: #02366e;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <!-- data Uang kas -->
               <!-- <div class="col-xl-3 col-md-12 mb-4">
                <div class="card card-data all-cards">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-3 style="color: #02366e;">Uang Kas</div>
                        <div class="h5 font-weight-bold text-gray-800"><?php 
                          //include '../koneksi.php';
                          //$query_mysqli = mysqli_query($koneksi, "SELECT * FROM uang_kas")or die(mysqli_error());
                          //$total_duit = 0;
                          //while ($data = mysqli_fetch_array($query_mysqli)) {
                          //$total_duit += $data['jumlah_bayar'];
                          //}
                          //echo number_format($total_duit);
                          //?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-3x" style="color: #02366e;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>

       
            

            <!-- Content Row -->
       
         
            

       
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Kafekoding 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../libraries/jquery/jquery-3.5.1.js"></script>
    <script src="libraries/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="libraries/jquery/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="libraries/js/sb-admin-2.min.js"></script>
  </body>
</html>
