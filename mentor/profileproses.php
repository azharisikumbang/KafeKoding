<?php

include '../koneksi.php';

if (isset($_POST['submit'])) {
  
$id_mentor = $_POST['id_mentor'];
$nama_mentor = $_POST['nama_mentor'];
$kelas = $_POST['kelas'];
$status = $_POST['status'];
$password = $_POST['password'];
 
mysqli_query($koneksi, "UPDATE mentor SET nama_mentor='$nama_mentor', kelas='$kelas', password='$password', status='$status' WHERE id_mentor='$id_mentor'") or die(mysqli_error());
mysqli_query($koneksi, "UPDATE login SET password = '$password', nama = '$nama_mentor', status='$status' WHERE id='$id_mentor'") or die (mysqli_error());
header("location:mentor.php");
}
?>