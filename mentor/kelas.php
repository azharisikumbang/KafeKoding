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
                <!-- START:MODAL -->
                <!-- button modal -->
                <a href="#" type="button" 
                   class="btn btn-primary align-self-center"
                   data-toggle="modal"
                   data-target="#TambahexampleModal">   
                   <i class="fas fa-plus fa-1x">Tambah Data Kelas</i>
                </a>
               
                <!-- Modal -->
                <div class="modal fade" id="TambahexampleModal" tabindex="-1" role="dialog" aria-labelledby="TambahexampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="TambahexampleModalLabel">Tambah Data Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- Modal-body -->
                     <!-- form -->
                     <div class="modal-body">
                       <form method="POST" action="addkelaspro.php">
                        <div class="form-group">
                          <label>Kode Kelas</label>
                          <input type="number" name="kode_kelas" class="form-control">
                          <label>Kelas</label>
                          <input type="text" name="kelas" class="form-control">
                          <label>Kuota Kelas</label>
                          <input type="number" name="kuota_kelas" class="form-control">
                          <label>Jam Kelas</label>
                          <input type="text" name="jam_kelas" class="form-control" list="time">
                          <datalist id="time">
                          <option>08.00-10.00</option>
                          <option>10.00-12.0</option>
                          <option>13.00-15.00</option>
                          </datalist>
                          <div id="mentor">
                          <label>Mentor Kelas</label>
                          <input type="text" name="mentor_kelas[]" class="form-control" list="mentorkelas">
                          <datalist id="mentorkelas">
                          <?php 
                          include '../koneksi.php';
                          $query = mysqli_query($koneksi, "SELECT nama_mentor FROM mentor");
                          while ($data = mysqli_fetch_assoc($query)) { ?>
                            <option><?php echo $data['nama_mentor'];?></option>
                          <?php }?>
                          </datalist>
                          </div>
                          <label>Link Whatsapp</label>
                          <input type="url" name="link_wa" class="form-control" list="status">
                          <label>Status</label>
                          <input type="text" name="status_kelas" class="form-control" list="status">
                          <datalist id="status">
                            <option value="Buka">Buka</option>
                            <option value="Tutup">Tutup</option>
                          </datalist>
                          <hr>
                          <input type="submit" name="submit" class="btn btn-success">
                        </div>
                      </form>
                      <button class="btn btn-success" id="add_button"><i class="fa fa-plus"></i></button>
                      <button class="btn btn-danger" id="remove"><i class="fa fa-times"></i></button>
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
                        <th>Kode Kelas</th>
                        <th>Kelas</th>
                        <th>Kuota Kelas</th>
                        <th>Jam Kelas</th>
                        <th>Mentor Kelas</th>
                        <th>Link Whatsapp Kelas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <?php 
                    include '../koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY jam_kelas") or die(mysqli_error());
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $data['kode_kelas'];?></td>
                        <td><?php echo $data['kelas'];?></td>
                        <td><?php echo $data['kuota_kelas'];?></td>
                        <td><?php echo $data['jam_kelas'];?></td>
                        <td><?php echo $data['mentor_kelas']; ?></td>
                        <td>
                              <a href="<?php echo $data['link_wa'];?>"><?php echo $data['kelas'];?></a>
                        </td>
                        <td><?php echo $data['status_kelas'];?></td>
                        <td>
                          <a href="deletekelas.php?kode_kelas=<?php echo $data['kode_kelas'];?>"><i class="fas fa-trash"></i></a> 
                         &nbsp; | &nbsp; 

                <!-- START:MODAL -->
                <!-- button modal -->
                <a href="#" type="button" 
                data-toggle="modal"
                data-target="#EditModal"
                data-id="<?php echo $data['kode_kelas'];?>">   
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
            url     : 'editkelas.php',
            data    : 'kode_kelas='+rowid,
            success : function(data){
              $('.editmodal').html(data);
            }
          });
        });
      });
    </script>

    <script>
      $(document).ready(function() {
        var fieldmentor = '<div id="mentor2"><label>Mentor Kelas</label><input type="text" name="mentor_kelas[]" class="form-control" list="mentorkelas">';

        var x = 1;
        $("#add_button").click(function() {
          if(x <= 3){
            x++;
            $("#mentor").append(fieldmentor);
          }
          else{
            window.alert("Maaf, Limit Data Mentor Hanya Tiga");
          }
        });
        $(document).on("click", "#remove", function() {
          $("#mentor2").remove();
      });
      })
    </script>
    
  </body>
</html>