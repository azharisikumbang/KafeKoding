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
                  <h4 align="center">Edit Data Kelas</h4>

                  <!-- Form Layout --> 
                  <?php 
                  include '../koneksi.php';
                  // session_start();
                  $mentor_kelas = 'Citra Febriawirti';
                  $query = mysqli_query($koneksi, "SELECT * FROM kelas WHERE mentor_kelas = '$mentor_kelas'") or die (mysqli_error());
                  while ($data = mysqli_fetch_assoc($query)) {
                  ?>
                  <form class="form-group" method="POST">
                  <div class="row mb-3">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">Kode Kelas</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="kode_kelas" value="<?php echo $data['kode_kelas'];?>" style="background: gainsboro; color: black; width:100%;" readonly>
                      </div>
                    </div>
                    
                   <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas'];?>" style="background: gainsboro; color: black; width:100%;">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Kuota Kelas</label>
                      <div class="col-sm-10">
                        <input type="kelas" class="form-control" id="kelas" name="kuokelas" value="<?php echo $data['kuota_kelas'];?>" style="background: gainsboro; color: black; width:100%;">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Jam Kelas</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" list="jam" id="password" name="jam_kelas" value="<?php echo $data['jam_kelas'];?>" style="background: gainsboro; color: black; width:100%;">
                        <datalist id="jam">
                          <?php 
                          include '../koneksi.php';
                          $query = mysqli_query($koneksi, "SELECT DISTINCT(jam_kelas) from kelas");
                          while ($dax = mysqli_fetch_assoc($query)) { 
                          ?>
                            <option><?php echo $dax['jam_kelas']; ?></option>
                          <?php } ?>
                        </datalist>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $data['status_kelas'];?>" style="background: gainsboro; color: black; width:100%;">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Link Whatsapp Kelas</label>
                      <div class="col-sm-10">
                        <input type="url" class="form-control" id="link_wa" name="link_wa" value="<?php echo $data['link_wa'];?>" style="background: gainsboro; color: black; width:100%;">
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" style="float: right;">Update Data</button>
                    <?php } ?>
                  </form>
                  <!-- End of Form Layout -->
            </div>
            <!-- End of Page Content -->
      </div>
      <script src="../style/js/show.js"></script>
</body>
</html>

<?php

include '../koneksi.php';

if (isset($_POST['submit'])) {
  
$ID = $_POST['ID'];
$Nama = $_POST['Nama'];
$Password = $_POST['password'];
 
mysqli_query($koneksi, "UPDATE datapegawai SET Nama='$Nama', Password='$Password' WHERE ID='$ID'") or die(mysqli_error());
header("location:profile.php");
}
?>
