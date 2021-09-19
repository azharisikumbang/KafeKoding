<?php 
if (isset($_POST['submit'])) {
  include '../koneksi.php';
  $id = $_POST['id'];
  $pass = $_POST['password'];

  $statement = "UPDATE login SET password = '$pass' WHERE id = '$id'";

  if (!mysqli_query($koneksi, $statement)) {
    echo "<script>alert('System Error !');window.location.href='../forgotPassword.php';</script>";
  } else {
    
    echo "<script>alert('Password sudah berubah');window.location.href='../loginRegister.php';</script>";
}
}
?>