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
              <form class="form-group" method="POST" action="addkelaspro.php" style="width: 100%">
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Kode Kelas</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" name="kode_kelas" style="background: gainsboro; color: black; width: 100%;">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Kelas</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="kelas" style="background: gainsboro; color: black; width: 100%;">
                      </div>
                    </div>

                    <div class="row mb-3" id="mentor">
                      <label class="col-sm-2 col-form-label">Nama Mentor</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="mentor_kelas[]" style="background: gainsboro; color: black; width: 100%;" list="nama_mentor">
                        <datalist id="nama_mentor">
                          <?php 
                          include '../koneksi.php';
                          $query = mysqli_query($koneksi, "SELECT DISTINCT(nama_mentor) from mentor");
                          while ($data = mysqli_fetch_assoc($query)) { 
                          ?>
                            <option><?php echo $data['nama_mentor']; ?></option>
                          <?php } ?>
                        </datalist>
                      </div>
                      </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Link Whatsapp</label>
                      <div class='col-sm-10'>
                        <input type='text' class='form-control' name='link_wa' style='background: gainsboro; color: black; width: 100%;'>
                        <br>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Jam Kelas, Kuota</label>
                      <div class='col-sm-10'>
                        <div class="form-inline row">
                        <input type='text' class='form-control' name="jam_kelas" style='background: gainsboro; color: black; width: 600px; margin-left: 15px' list="jam">&nbsp;&nbsp;
                        <datalist id="jam">
                            <option>08.00-10.00</option>
                            <option>10.00-12.10</option>
                            <option>13.00-15.30</option>
                        </datalist>
                        <input type="text" name="kuota_kelas" class="form-control" style="background-color: gainsboro; width: 97px;" oninput="Count()">
                        </div>
                        <br>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="status_kelas" style="background: gainsboro; color: black; width: 100%;" list="stats">
                        <datalist id="stats">
                            <option>Buka</option>
                            <option>Tutup</option>
                        </datalist>
                      </div>
                    </div>
                    <button class='btn btn-primary' type="button" id='add_button'><i class="fa fa-plus"></i></button>
                    <button class='btn btn-danger' type="button" id='deleteButton'><i class="fa fa-times"></i></button>
                    <input type="reset" class="btn btn-danger">
                    <button class="btn btn-primary" style="float: right;" name="submit">Hasil</button>
              </form>
            </div>
            <!-- End of Page Content -->
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
      var addButton = $('#add_button'); //Add button selector
      var fieldHTMLMentor = '<div class="row mb-3" id="mentor2" style="margin-top:20px;"><label class="col-sm-2 col-form-label" style="padding-left: 20px;">Nama Mentor</label><div class="col-sm-10" style="padding-left: 21px; width: 500px;"><input type="text" class="form-control" name="mentor_kelas[]" style="background: gainsboro; color: black; width: 103%;" list="nama_mentor"></div></div>'
      
      var x = 1;
      $("#add_button").click(function(){
          if(x <= 3){ 
              x++;
              var fieldHTMLBiaya = '<div class="row mb-3" id="biaya2"><label class="col-sm-2 col-form-label" style="padding-left: 20px;">Biaya Kegiatan</label><div class="col-sm-10" style="padding-left: 21px; width: 500px;"><div class="form-inline row"><input type="text" id="BiayaKegiatan'+x+'" class="form-control" style="background: gainsboro; color: black; width: 600px; margin-left: 15px;">&nbsp;&nbsp;<input type="text" name="Qty" id="Qty'+x+'" class="form-control" style="background-color: gainsboro; width: 97px;" oninput="CountDynamic('+x+')">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="total'+x+'" class="form-control" style="background-color: gainsboro; width: 180px;" name="Biaya[]" readonly></div></div></div>'
              $("#mentor").append(fieldHTMLMentor); //Add field html
          }
          else{
            window.alert("Maaf, Limit Dari Data Mentor Hanyalah 3");
          }
      });
      $(document).on("click", "#deleteButton", function() {
          $("#mentor2").remove();
      });
  });
</script>
</body>
</html>