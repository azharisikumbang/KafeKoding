<body>
<?php
    include "../koneksi.php";
    if($_POST['bp_peserta']) {
    $bp_peserta = $_POST['bp_peserta'];
    $kelas = $_POST['kelas'];  
    $query = mysqli_query($koneksi,"SELECT * FROM kelas_peserta WHERE bp_peserta = $bp_peserta AND kelas = '$kelas'");
    while ($data = mysqli_fetch_assoc($query)){
?>
<form method="POST" action="prosesval.php">
  <div class="form-group">
    <label>BP Peserta</label>
          <input type="text" class="form-control" name="bp_peserta" value="<?php echo $data['bp_peserta'];?>" readonly>
    <label>Kelas</label>
          <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas'];?>" readonly>
    <label>Nilai Peserta</label>
          <input type="text" class="form-control" name="nilai_akhir" value="<?php echo $data['nilai_akhir'];?>">
  </div>
  <button class="btn btn-primary" name="submit">Update</button>
</form>
<?php }} ?>
</body>