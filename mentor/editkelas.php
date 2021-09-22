<body>
<?php
    include "../koneksi.php";
    if($_POST['kode_kelas']) {
    $kode_kelas = $_POST['kode_kelas'];      
    $query = mysqli_query($koneksi,"SELECT * FROM kelas WHERE kode_kelas = $kode_kelas");
    while ($data = mysqli_fetch_assoc($query)){
?>
<form method="POST" action="editkelaspro.php">
  <div class="form-group">
    <label>Kode Kelas</label>
          <input type="text" class="form-control" name="kode_kelas" value="<?php echo $data['kode_kelas'];?>" readonly>
    <label>Kelas</label>
          <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas'];?>">
    <label>Kuota Kelas</label>
          <input type="number" class="form-control" name="kuota_kelas" value="<?php echo $data['kuota_kelas'];?>">
    <label>Jam Kelas</label>
          <input type="text" class="form-control" name="jam_kelas" value="<?php echo $data['jam_kelas'];?>" list="jam_kelas">
          <datalist id="jam_kelas">
          <?php 
          include '../koneksi.php';
          $query = mysqli_query($koneksi, "SELECT DISTINCT(jam_kelas) from kelas");
          while ($datax = mysqli_fetch_assoc($query)) { 
          ?>
          <option><?php echo $datax['jam_kelas']; ?></option>
          <?php } ?>
          </datalist>
    
    <label>Mentor Kelas</label>
          <?php 
          $nm = explode("<br>",$data['mentor_kelas']);
          $ln = count($nm);
          for ($i=0; $i <= $ln - 1 ; $i++) {
          ?>
          <input type="text" class="form-control" name="mentor_kelas[]" value="<?php echo $nm[$i];?>" list="nama_mentor"><br>
          <?php } ?>

          <!-- Datalist -->
          <datalist id="nama_mentor">
          <?php 
          include '../koneksi.php';
          $query = mysqli_query($koneksi, "SELECT DISTINCT(nama_mentor) from mentor");
          while ($data9 = mysqli_fetch_assoc($query)) { 
          ?>
          <option><?php echo $data9['nama_mentor']; ?></option>
          <?php } ?>
          </datalist>
          <!-- End of Datalist -->

    <label>Link Whatsapp</label>
          <input type="url" class="form-control" name="link_wa" value="<?php echo $data['link_wa'];?>">
    <label>Status</label>
          <input type="text" class="form-control" name="status_kelas" value="<?php echo $data['status_kelas'];?>" list="stats">
          <datalist>
                <option>Buka</option>
                <option>Tutup</option>
          </datalist>
  </div>
  <button class="btn btn-primary" name="submit">Update</button>
</form>
<?php }} ?>
</body>