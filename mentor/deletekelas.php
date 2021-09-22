<?php
include '../koneksi.php';
$kode_kelas = $_GET['kode_kelas'];
mysqli_query($koneksi, "DELETE FROM kelas WHERE kode_kelas = '$kode_kelas'");
header('location:kelas.php');