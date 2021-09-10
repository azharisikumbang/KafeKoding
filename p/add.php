<?php
include '../koneksi.php';
$kode_kelas = $_GET['kode_kelas'];
session_start();
$bp_peserta = $_SESSION['id'];


$query = mysqli_query($koneksi, "SELECT*FROM kelas WHERE kode_kelas='$kode_kelas'") or die (mysqli_error());
$data = mysqli_fetch_assoc($query);

$kelas = $data['kelas'];
$jam = $data['jam_kelas'];
$link = $data['link_wa'];

$statement = "INSERT INTO kelas_peserta VALUES('$bp_peserta','$kelas','$jam','$link','Belum Validasi','0','0','Belum Lulus')";

$run = mysqli_query($koneksi, $statement);

if (mysqli_error($run)) {
    echo "<script>
    alert('Hello');
    document.location='p/addkelas.php';
    </script>";
} else {
    header('location:addkelas.php');
}
?>