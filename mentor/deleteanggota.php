<?php
include '../koneksi.php';
$bp = $_GET['bp_peserta'];
mysqli_query($koneksi,"DELETE FROM peserta WHERE bp_peserta='$bp'");
header('location:peserta.php');
?>