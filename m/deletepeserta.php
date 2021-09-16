<?php
include '../koneksi.php';
$bp = $_GET['bp_peserta'];
$kelas = $_GET['kelas'];
mysqli_query($koneksi,"DELETE FROM kelas_peserta WHERE bp_peserta='$bp' AND kelas='$kelas'");
header('location:main.php');
?>