<!DOCTYPE html>
<html>
<head>
      <title>Admin Page</title>
	<!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../style/css/style.css">
</head>
<body>
      <div class="wrapper d-flex align-items-stretch">
      	<!-- Navigation Bar -->
      	<?php include 'menubar.php'; ?>
      	<!-- End of Navigation Bar -->

            <!-- Page Content -->
            <div id="content" class="p-4 p-md-5 pt-5">
                  <h4 align="center">Tambah Tugas</h4>

                  <!-- Form Layout -->
                  <form class="form-group" action="../Proses/prosestugas.php" method="POST" enctype="multipart/form-data">
                  <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">ID Peserta</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="bp_peserta" value="<?php echo $_SESSION['id'];?>" style="background: gainsboro; color: black; width:100%;" readonly>
                      </div>
                    </div>
                    
                   <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="kelas" list="kelas" style="background: gainsboro; color: black; width:100%;">
                        <datalist id="kelas">
                          <?php 
                          include '../koneksi.php';
                          $id = $_SESSION['id'];
                          $query = mysqli_query($koneksi, "SELECT kelas from kelas_peserta WHERE bp_peserta = '$id'");
                          while ($data = mysqli_fetch_assoc($query)) { 
                          ?>
                            <option><?php echo $data['kelas']; ?></option>
                          <?php } ?>
                        </datalist>
                    </div>
                    </div>


                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Tugas</label>
                      <div class="col-sm-10">
                        <input type="file" id="tugas" class="form-control" name="Tgskelas" style="background: gainsboro; color: black; width:100%;">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Pertemuan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" oninput="Type()" name="pertemuan" list="pertemuan" style="background: gainsboro; color: black; width:100%;">
                        <datalist id="pertemuan">
                            <?php 
                            for ($i=1; $i <=14 ; $i++) { 
                                echo '<option>'.$i.'</option>';
                            }?>
                        </datalist>  
                    </div>
                    </div>

                    <div class="row mb-3" style="display: none;">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Hidden</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="hidden" name="hidden" style="background: gainsboro; color: black; width:100%;" readonly>
                      </div>
                    </div>
                    <button class='btn btn-primary' type="button" id='add_button' onclick="Link()"><i id="aa" class="fa fa-link"></i></button>
                    <button type="submit" class="btn btn-primary" name="submit" style="float: right;">Update Data</button>
                  </form>
                  <!-- End of Form Layout -->
            </div>
            <!-- End of Page Content -->
      </div>
      <script>
          function Link() {
              var tugas = document.getElementById('tugas');
              var aa = document.getElementById('aa');

              if (tugas.type === 'file') {
                  tugas.type = 'url';
                  aa.className = 'fa fa-file';
              }
              else{
                  tugas.type = 'file';
                  aa.className = 'fa fa-link';
              }
          }

          function Type() {
              var type = document.getElementById('tugas');

              x = type.type;

              document.getElementById('hidden').value = x;
          }
      </script>
</body>
</html>
