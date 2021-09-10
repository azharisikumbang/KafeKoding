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
      <link rel="stylesheet" href="style/css/style.css">
</head>
<body>
      <div class="wrapper d-flex align-items-stretch">
      	<!-- Navigation Bar -->
      	<?php include 'menubar.php'; ?>
      	<!-- End of Navigation Bar -->

            <!-- Page Content -->
            <div id="content" class="p-4 p-md-5 pt-5">
            <div class="btn-group" role="group" aria-label="Basic example" style="float: right;">
                        <button type="button" class="btn btn-primary">
                              <a href="addmentor.php" style="color: white"><i class="fa fa-plus"></i></a>
                        </button>
                  </div>
                  <h3 align="center">Daftar Mentor</h3>
                  <table class="table table-dark table-striped" align="center" id="data">
                    <thead>
                    <tr align="center">
                      <td>ID Mentor</td>
                      <td>Nama Mentor</td>
                      <td>Kelas</td>
                      <td>Status</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include '../koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM mentor") or die (mysqli_error());
                    while($data = mysqli_fetch_assoc($query)){
                    ?>
                    <tr id="tampil" align="center">
                      <td><?php echo $data['id_mentor'];?></td>
                      <td><?php echo $data['nama_mentor'];?></td>
                      <td><?php echo $data['kelas'];?></td>
                      <td><?php echo $data['status'];?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
            </div>
            <!-- End of Page Content -->
      </div>
</body>
</html>