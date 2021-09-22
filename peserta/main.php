<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header('location:../loginRegister.php');
  exit();
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
          <div class="container-fluid p-0 ">
            <!-- Page Heading -->

            <!-- Content Row -->
            <div class="row p-2" >
              <div class="col-xl-12 col-md-12 col-sm-12">
              <div class="card admin-cards mb-4  all-cards ">
                <div class="card-body row p-3 d-flex ">
                  <div class="col-sm12 col-md-6 align-self-center ">
                    <h3 class="admin-judul">
                      Hallo <?php echo $_SESSION['nama'];?>, Selamat datang
                    </h3>
                    <?php include 'modal.php';?>
                    <p class="admin-paragraph text-left">
                     Hallo <?php echo $_SESSION['nama'];?>, selamat datang di Dashboard Kafekoding,
                     Silahkan cek data yang perlu anda cek di dashboard ini terdapat data peserta, kelas dan lainnya
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
            <!-- Content Row -->
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered text-center table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>BP Peserta</th>
                        <th>Kelas</th>
                        <th>Jam Kelas</th>
                        <th>Link Whatsapp</th>
                        <th>Status</th>
                        <th>Hapus</th>
                      </tr>
                    </thead>
                    <?php
                    include '../koneksi.php';
                    $id = $_SESSION['id'];
                    $query = mysqli_query($koneksi, "SELECT * FROM kelas_peserta WHERE bp_peserta = '$id'") or die (mysqli_error());
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tbody>
                    <tr>
                      <td><?php echo $data['bp_peserta'];?></td>
                      <td><?php echo $data['kelas'];?></td>
                      <td><?php echo $data['jam_kelas'];?></td>
                      <td><a href=<?php echo $data['link_wa'];?>><?php echo $data['kelas'];?></a></td>
                      <td><?php echo $data['status'];?></td>
                      <td><a href="deletekelas.php?bp_peserta=<?php echo $data['bp_peserta'];?>&kelas=<?php echo $data['kelas'];?>"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    </tbody>
                    <p style="display: none" id="stats"><?php echo $datamain['status'];?></p>
                    <?php } ?>
                  </table>
                  <p id="warning" style="display: block; color: red; text-align: center;">Saat ini anda belum melakukan pendaftaran kelas</p>
                </div>
          </div>
        </div>
          <!-- /.container-fluid -->
            </div>
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
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(event) {
        var stats = document.getElementById('stats').innerText;
        if (stats == 'Diterima') {
          document.getElementById('warning').style.display = 'none';
        }
      });
    </script>

    <div class="modal fade" id="EditDataPesertaModal">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Peserta</h5> 
            </div>

            <div class="modal-body">
              <div class="form-group">
                <?php
                include '../koneksi.php';
                $query = mysqli_query($koneksi, "SELECT * FROM data_peserta WHERE id_peserta = $id_peserta")or die(mysqli_error());
                while ($data = mysqli_fetch_assoc($query)) {
                ?>
                <form method="POST" action="../Proses/editdatapeserta.php">
                  <label>ID Peserta</label>
                  <input name="id_peserta" class="form-control" value="<?php echo $data['id_peserta'];?>" readonly>
                  <label>Nama Peserta</label>
                  <input type="text" name="nama_peserta" class="form-control" value="<?php echo $data['nama_peserta'];?>">
                  <label>Nomor Telepon</label>
                  <input name="no_telp" class="form-control" value="<?php echo $data['no_telp'];?>">
                  <label>Nama Kampus</label>
                  <input name="nama_kampus" class="form-control" value="<?php echo $data['nama_kampus'];?>">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control"><?php echo $data['alamat'];?></textarea>
                  <label>Password</label>
                  <input type="password" name="password" class="form-control"><hr>
                  <input type="submit" name="submitdata" class="btn btn-primary" style="width: 100%">
                </form>
                <?php } ?>
              </div>
            </div>
        </div>
    </div>
    </div>

    <!--Warning-->
    <div class="modal fade" id="Warning">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Warning</h5>
          </div>
          <div class="modal-body">
            <h5>Mohon Maaf, fitur ini belum tersedia</h5>
          </div>
        </div>
      </div>
    </div>
    <!--End of Warning-->

    <script>
      $(document).ready(function(){
        $('#EditPesertaModal').on('show.bs.modal',function(e){
          var rowid = $(e.relatedTarget).data('id');
          $.ajax({
            type    : 'post',
            url     : '../Proses/updatedatakelas.php',
            data    : 'id_peserta='+rowid,
            success : function(data){
              $('.editpeserta').html(data);
            }
          });
        });
      });
    </script>
</div>
  </body>
</html>