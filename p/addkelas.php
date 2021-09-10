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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style/css/style.css">
</head>
<body>
      <div class="wrapper d-flex align-items-stretch">
      	<!-- Navigation Bar -->
      	<?php include 'menubar.php'; ?>
      	<!-- End of Navigation Bar -->

            <!-- Page Content -->
            <div id="content" class="p-4 p-md-5 pt-5">
                  <h3 align="center">Pilih Kelas Anda</h3>
                  <table class="table table-dark table-striped" align="center" id="data">
                    <thead>
                    <tr align="center">
                      <td>Kelas</td>
                      <td>Jam Kelas</td>
                      <td>Mentor</td>
                      <td>Kuota</td>
                      <td>Aksi</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include '../koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM kelas") or die (mysqli_error());
                    while($data = mysqli_fetch_assoc($query)){
                    ?>
                    <tr align="center">
                      <td><?php echo $data['kelas'];?></td>
                      <td><?php echo $data['jam_kelas'];?></td>
                      <td><?php echo $data['mentor_kelas'];?></td>
                      <td><?php echo $data['kuota_kelas'];?></td>
                      <td><a href="add.php?kode_kelas=<?php echo $data['kode_kelas'];?>" class="btn btn-info btn-circle btn-circle-sm m-1" type="button"><i class="fa fa-plus"></i></a>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
            </div>
            <!-- End of Page Content -->
      </div>
</body>
</html>