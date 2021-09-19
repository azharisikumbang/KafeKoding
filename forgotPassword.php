<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css" />

    <!-- data-aos.css -->

    <!-- fontfamily -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
    <!-- link css -->
    <link rel="stylesheet" href="libraries/css/login.css" />
    <!-- light-slider -->

    <title>Kafekoding | Forgot Password</title>
  </head>

  <body>
    <div class="container">
      <div class="row align-items-center justify-content-center" style="height: 100vh">
        <div class="col-12 col-lg-6 align-items-center justify-content-center">
          <div class="card" style="padding: 50px 0px; border-radius: 10px">
            <form action="#" class="sign-in-form" style="padding-top: 50px; padding-bottom: 50px" method="POST">
              <h3 class="title" style="font-weight: 600">Forgot Password</h3>
              <div class="input-field">
                <i class="fas fa-address-card"></i>
                <input type="text" placeholder="Nomor Induk Mahasiswa" name="id">
              </div>
              <input type="submit" value="Kirim" name="submit" class="btn btn-solid solid" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="libraries/jquery/jquery-3.5.1.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.js"></script>
  </body>
</html>


<?php 
if (isset($_POST['submit'])) {
  $id = $_POST['id'];

  mysqli_query($koneksi, "UPDATE login SET password = 'Kafekoding' WHERE id = '$id'");
  header('location:loginRegister.php');
}
?>