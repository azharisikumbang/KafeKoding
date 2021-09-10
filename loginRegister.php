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

    <title>Kafekoding | Login</title>
  </head>

  <body>
    <div class="container-logins">
      <div class="form-container">
        <div class="signin-signup">

          <!-- login -->
          <form action="Proses/proseslogin.php" method="POST" class="sign-in-form">
            <h2 class="title" style="font-weight: 600">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="text" name="id" placeholder="Nomor Induk Mahasiswa" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="submit" value="login" class="btn btn-solid solid" />
            <p class="social-text"><a href="forgotPassword.php" style="color: #dad8d8"> Forgot Password ?</a></p>
          </form>
          <!-- end of login -->

          <!-- register -->
          <form action="Proses/proregis.php" method="POST" class="sign-up-form">
            <h2 class="title" style="font-weight: 600">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nama Lengkap" name="nama_peserta">
            </div>
            <div class="input-field">
              <i class="fas fa-school"></i>
              <input type="text" placeholder="Asal Kampus" name="asal_kampus">
            </div>
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="text" placeholder="Nomor Induk Mahasiswa" name="bp_peserta">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password">
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email">
            </div>
            <input type="submit" value="sign up" class="btn btn-solid solid" name="submit">
          </form>
        </div>
      </div>
      <div class="panels-container">
        <!-- left image -->
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum Mempunyai akun ?</h3>
            <p>Segera daftarkan dirimu dan dapatkan kelas gratis dari kafekoding</p>
            <button class="btn transparent btn-solid" id="sign-up-btn">Sign Up</button>
          </div>
          <img src="libraries/images/login.png.png" class="image-login-register" alt="" />
        </div>

        <!-- right image -->
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Mempunyai akun ?</h3>
            <p>Silahkan login di akun anda dan dapatkan keseruannya</p>
            <button class="btn transparent btn-solid" id="sign-in-btn">Sign In</button>
          </div>
          <img src="libraries/images/register.png" class="image-login-register" alt="" />
        </div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="libraries/jquery/jquery-3.5.1.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.js"></script>

    <script>
      // login register
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container_logins = document.querySelector(".container-logins");

      sign_up_btn.addEventListener("click", () => {
        container_logins.classList.add("sign-up-mode");
      });
      sign_in_btn.addEventListener("click", () => {
        container_logins.classList.remove("sign-up-mode");
      });
    </script>
  </body>
</html>
