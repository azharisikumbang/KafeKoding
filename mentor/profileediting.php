<body>
<?php
    include "../koneksi.php";
    if($_POST['id_mentor']) {
    $id_mentor = $_POST['id_mentor'];      
    $query = mysqli_query($koneksi,"SELECT * FROM mentor WHERE id_mentor = $id_mentor");
    while ($data = mysqli_fetch_assoc($query)){
?>
<form method="POST" action="profileproses.php">
  <div class="form-group">
    <label>ID Mentor</label>
          <input type="text" class="form-control" name="id_mentor" value="<?php echo $data['id_mentor'];?>" readonly>
    <label>Nama Mentor</label>
          <input type="text" class="form-control" name="nama_mentor" value="<?php echo $data['nama_mentor'];?>">
    <label>Kelas</label>
          <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas'];?>">
    <label>Password</label>
          <input type="text" class="form-control" name="password" value="<?php echo $data['password'];?>">
    <label>Status</label>
          <input type="text" class="form-control" name="status" value="<?php echo $data['status'];?>">
  </div>
  <button class="btn btn-primary" name="submit">Update</button>
</form>
<?php }} ?>
</body>