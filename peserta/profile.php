<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
  
$bp_peserta = $_POST['bp_peserta'];
$nama_peserta = $_POST['nama_peserta'];
$asal_kampus = $_POST['asal_kampus'];
$email = $_POST['email'];
$password = $_POST['password'];
 
mysqli_query($koneksi, "UPDATE peserta SET nama_peserta='$nama_peserta', password='$password', asal_kampus='$asal_kampus', email='$email' WHERE bp_peserta='$bp_peserta'") or die(mysqli_error());
header("location:main.php");
}
?>