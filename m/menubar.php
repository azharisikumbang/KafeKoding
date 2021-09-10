<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" href="style/css/style.css">
  </head>
  <body>
		<!-- <div class="wrapper d-flex align-items-stretch"> -->
			<nav id="sidebar">
				<!-- <div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
 -->	  		<div class="img bg-wrap text-center py-4">
	  			<div class="user-logo">
	  				<h3>
            <?php session_start(); echo $_SESSION['id'];?> <!-- NIP -->
            </h3>
            <h3>
              <?php echo $_SESSION['nama'];?> <!-- Nama Pegawai -->
            </h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="main.php"><span class="fa fa-home mr-3"></span>Main Page</a>
          </li>
          <li class="active">
            <a href="kelas.php"><span class="fa fa-link mr-3"></span>Kelas</a>
          </li>
          <li class="active">
            <a href="mentor.php"><span class="fa fa-tasks mr-3"></span>Mentor</a>
          </li>
          <li class="active">
            <a href="classediting.php"><span class="fa fa-cog mr-3"></span>Edit Kelas</a>
          </li>
          <li class="active">
            <a href="profileediting.php"><span class="fa fa-cog mr-3"></span>Edit Profile</a>
          </li>
          <li class="active">
            <a href="logout.php"><span class="fa fa-sign-out mr-3"></span>Log Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <!-- <div id="content" class="p-4 p-md-5 pt-5"> -->
      <!-- </div> -->

		<!-- </div> -->

    <script src="style/js/jquery.min.js"></script>
    <script src="style/js/popper.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <script src="style/js/main.js"></script>
  </body>
</html>