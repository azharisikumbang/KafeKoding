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
                  <h4 align="center">Edit Data Mentor</h4>

                  <!-- Form Layout --> 
                  <?php 
                  include '../koneksi.php';
                  $bp_peserta = $_GET['bp_peserta'];
                  $kelas = $_GET['kelas'];
                  $query = mysqli_query($koneksi, "SELECT * FROM kelas_peserta WHERE bp_peserta = '$bp_peserta' AND kelas = '$kelas'") or die (mysqli_error());
                  while ($data = mysqli_fetch_assoc($query)) {
                  ?>
                  <form class="form-group" method="POST">
                    
                   <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $data['status'];?>" style="background: gainsboro; color: black; width:100%;">
                      </div>
                    </div>

                    <div class="row mb-3">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">Nilai Tugas</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nilai_tugas" value="<?php echo $data['nilai_tugas'];?>" style="background: gainsboro; color: black; width:100%;" readonly>
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">Nilai Akhir</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nilai_akhir" value="<?php echo $data['nilai_akhir'];?>" style="background: gainsboro; color: black; width:100%;" readonly>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" style="float: right;">Update Data</button>
                    <?php } ?>
                  </form>
                  <!-- End of Form Layout -->
            </div>
            <!-- End of Page Content -->
      </div>
</body>
</html>
