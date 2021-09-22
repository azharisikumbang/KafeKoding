<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header('location:../loginRegister.php');
}
?>
<!DOCTYPE html>
<html>
<head>
      <title>Admin Page</title>
	<!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
      <div class="wrapper d-flex align-items-stretch">
      	<!-- Navigation Bar -->
      	<?php include_once 'menubar.php'; ?>
      	<!-- End of Navigation Bar -->

            <!-- Page Content -->
            <div id="content" class="p-4 p-md-5 pt-5">
              <div class="btn-group" role="group" aria-label="Basic example" style="float: right;">
              </div>
              <h4 align="center">Daftar Kelas Kafe Koding</h4>
              <form class="form-group" method="POST" action="addmentorpro.php" style="width: 100%">
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">ID Mentor</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" name="id_mentor" style="background: gainsboro; color: black; width: 100%;">
                      </div>
                    </div>

                    <div class="row mb-3" id="mentor">
                      <label class="col-sm-2 col-form-label">Nama Mentor</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_mentor" style="background: gainsboro; color: black; width: 100%;">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Kelas</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="kelas" style="background: gainsboro; color: black; width: 100%;">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Password</label>
                      <div class='col-sm-10'>
                        <input type='password' class='form-control' name="password" id="password" style='background: gainsboro; color: black; width: 100%'>
                        <br>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="status" style="background: gainsboro; color: black; width: 100%;" list="stats">
                        <datalist id="stats">
                            <option>Mentor</option>
                            <option>Mentor Magang</option>
                            <option>Pasif</option>
                        </datalist>
                      </div>
                    </div>
                    <button class='btn btn-primary' type="button" id='add_button'><i class="fa fa-eye" onclick="Show()" id="ii"></i></button>
                    <!-- eye-slash -->
                    <input type="reset" class="btn btn-danger">
                    <button class="btn btn-primary" style="float: right;" name="submit">Hasil</button>
              </form>
            </div>
            <!-- End of Page Content -->
      </div>

      <script>
          function Show() {
              var id = document.getElementById('password');
              var ii = document.getElementById('ii');

              if (id.type === 'password'){
                  id.type = 'text';
                  ii.className = 'fa fa-eye-slash';
              }
              else{
                  id.type='password';
                  ii.className = 'fa fa-eye';
              }
          }
      </script>
</body>
</html>