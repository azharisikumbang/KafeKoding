<?php
include '../koneksi.php';
$bp_peserta = $_GET['bp_peserta'];
$kelas = $_GET['kelas'];

mysqli_query($koneksi,"DELETE FROM kelas_peserta WHERE bp_peserta='$bp_peserta' AND kelas='$kelas'") or die (mysqli_error());
mysqli_query($koneksi, "UPDATE kelas SET kuota_kelas = kuota_kelas + 1 WHERE kelas = '$kelas'");
header('location:main.php');
?>