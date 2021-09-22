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
              <h1 class="h3 mb-2" style="color: #02366e;">Table Mentor</h1>
              <p class="mb-4" style="color: #bdbdbd;">Silahkan tambah ataupun Update data mentor apabila di perlukan</p>
            </div>
            <div class="col-12">
            <div class="card card-table">
              <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="h3 m-0 font-weight-bold text-primary align-self-center">
                  Data Mentor
                </h6>
                <!-- START:MODAL -->
                <!-- button modal -->
                <a href="#" type="button" 
                   class="btn btn-primary align-self-center"
                   data-toggle="modal"
                   data-target="#TambahexampleModal">   
                   <i class="fas fa-plus fa-1x">Tambah Data Mentor</i>
                </a>
               
                <!-- Modal -->
                <div class="modal fade" id="TambahexampleModal" tabindex="-1" role="dialog" aria-labelledby="TambahexampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="TambahexampleModalLabel">Tambah Data Mentor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- Modal-body -->
                     <!-- form -->
                     <div class="modal-body">
                       <form method="POST" action="addmentorpro.php" enctype="multipart/form-data">
                        <div class="form-group">
                          <label>ID Mentor</label>
                          <input type="number" name="id_mentor" class="form-control">
                          <label>Nama Mentor</label>
                          <input type="text" name="nama_mentor" class="form-control">
                          <label>Kelas</label>
                          <input type="text" name="kelas" class="form-control" list="kelas">
                          <datalist id="kelas">
                          <?php 
                          include '../koneksi.php';
                          $query = mysqli_query($koneksi, "SELECT DISTINCT(kelas) from kelas");
                          while ($datax = mysqli_fetch_assoc($query)) { 
                          ?>
                            <option><?php echo $datax['kelas']; ?></option>
                          <?php } ?>
                        </datalist>
                          <!-- Select distinct -->
                          <label>Password</label>
                          <input type="password" name="password" class="form-control">
                          <label>Status</label>
                          <input type="text" name="status" class="form-control" list="status">
                          <datalist id="status">
                            <option>Pasif</option>
                            <option>Mentor</option>
                            <option>Mentor Magang</option>
                          </select>
                          <label>Foto</label>
                          <input type="file" name="foto" class="form-control">
                          <hr>
                          <input type="submit" name="submit" class="btn btn-success">
                        </div>
                      </form>
                     </div>
                     <!-- form -->
                    </div>
                  </div>
                </div>
                <!-- END: MODAL -->
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered text-center table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>BP Mentor</th>
                        <th>Nama Mentor</th>
                        <th>Kelas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <?php 
                    include '../koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM mentor ORDER BY status") or die(mysqli_error());
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $data['id_mentor'];?></td>
                        <td><?php echo $data['nama_mentor'];?></td>
                        <td><?php echo $data['kelas'];?></td>
                        <td><?php echo $data['status']; ?></td>
                        <td>
                          <a href="deletementor.php?id_mentor=<?php echo $data['id_mentor'];?>"><i class="fas fa-trash"></i></a> 
                         &nbsp; | &nbsp; 

                <!-- START:MODAL -->
                <!-- button modal -->
                <a href="#" type="button" 
                data-toggle="modal"
                data-target="#EditModal"
                data-id="<?php echo $data['id_mentor'];?>">   
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
          $.ajax({
            type    : 'post',
            url     : 'profileediting.php',
            data    : 'id_mentor='+rowid,
            success : function(data){
              $('.editmodal').html(data);
            }
          });
        });
      });
    </script>
  </body>
</html>