<?php 
error_reporting(0);
session_start();
if (!isset($_SESSION['login'])) {
  header('location:../loginRegister.php');
}
?>
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
              <div class="col">
              <h1 class="h3 mb-2" style="color: #02366e;">Table Peserta</h1>
              <p class="mb-4" style="color: #bdbdbd;">Berikut Data Peserta Kafekoding</p>
            </div>
            <div class="col-12">
            <div class="card card-table">
              <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="h3 m-0 font-weight-bold text-primary align-self-center">
                  Data Peserta
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered text-center table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Kode Kelas</th>
                        <th>Kelas</th>
                        <th>Kuota Kelas</th>
                        <th>Jam Kelas</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <?php 
                    include '../koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM peserta") or die(mysqli_error());
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $data['bp_peserta'];?></td>
                        <td><?php echo $data['nama_peserta'];?></td>
                        <td><?php echo $data['asal_kampus'];?></td>
                        <td><?php echo $data['email'];?></td>
                        <td>
                          <a href="deleteanggota.php?bp_peserta=<?php echo $data['bp_peserta'];?>"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr> 
                    </tbody>
                  <?php } ?>
                  </table>
                </div>
              </div>
            </div>
            </div>
            </div>
<!-- Melanjutkan membuat tabel mentor -->
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

    <!-- Bootstrap core JavaScript-->
    <script src="../libraries/jquery/jquery-3.5.1.js"></script>
    <script src="libraries/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="libraries/jquery/jquery.easing.min.js"></script>
    </script>
    
  </body>
</html>