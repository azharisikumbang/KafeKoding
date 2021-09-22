<?php
include '../koneksi.php';
$id_mentor = $_GET['id_mentor'];
mysqli_query($koneksi,"DELETE FROM mentor WHERE id_mentor='$id_mentor'");
header('location:mentor.php');
?>