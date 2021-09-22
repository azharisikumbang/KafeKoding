<?php 
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
              <h1 class="h3 mb-2" style="color: #02366e;">Table Kelas</h1>
              <p class="mb-4" style="color: #bdbdbd;">Silahkan tambah ataupun Update data kelas apabila di perlukan</p>
            </div>
            <div class="col-12">
            <div class="card card-table">
              <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="h3 m-0 font-weight-bold text-primary align-self-center">
                  Data Kelas
                </h6>   
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered text-center table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Kelas</th>
                        <th>BP Peserta</th>
                        <th>Status</th>
                        <th>Nilai Akhir</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <?php
                    include '../koneksi.php';
                    $nama = $_SESSION['nama'];
                    $cari = mysqli_query($koneksi,"SELECT kelas FROM mentor WHERE nama_mentor = '$nama'");
                    $data = mysqli_fetch_assoc($cari);
                    $kls = $data['kelas'];
                    $query = mysqli_query($koneksi, "SELECT * FROM kelas_peserta WHERE kelas = '$kls'");
                    while ($dt = mysqli_fetch_assoc($query)) { ?>
                    <tbody>
                      <tr>
                        <td><?php echo $kls; ?></td>
                        <td><?php echo $dt['bp_peserta'];?></td>
                        <td><?php echo $dt['status'];?></td>
                        <td><?php echo $dt['nilai_akhir'];?></td>
                        <td><?php echo $dt['keterangan'];?></td>
                        <td>
                          <a href="deletepeserta.php?bp_peserta=<?php echo $dt['bp_peserta'];?>&kelas=<?php echo $data['kelas'];?>"><i class="fas fa-trash"></i></a> 
                         &nbsp; | &nbsp; 

                <!-- START:MODAL -->
                <!-- button modal -->
                <a href="#" type="button" 
                data-toggle="modal"
                data-target="#EditModal"
                data-id="<?php echo $dt['bp_peserta'];?>"
                data-kelas="<?php echo $data['kelas'];?>"
                >   
                <i class="fas fa-pen"></i>
             </a>
            
                <!-- Modal -->
                <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="EditModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- Modal-body -->
                      <!-- form -->
                      <div class="modal-body">
                        <div class="editmodal"></div>
                      </div>
                      <!-- form -->
                    </div>
                  </div>
                </div>
                <!-- END: MODAL -->
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
    <script>
      $(document).ready(function(){
        $('#EditModal').on('show.bs.modal',function(e){
          var rowid = $(e.relatedTarget).data('id');
          var kelas = $(e.relatedTarget).data('kelas');
          $.ajax({
            type    : 'post',
            url     : 'editpeserta.php',
            data    : 'bp_peserta='+rowid+'&kelas='+kelas,
            success : function(data){
              $('.editmodal').html(data);
            }
          });
        });
      });
    </script>
    
  </body>
</html>