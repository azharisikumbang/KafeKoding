<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $bp_peserta = $_POST['bp_peserta'];
    $nama_peserta = $_POST['nama_peserta'];
    $asal_kampus = $_POST['asal_kampus'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $status = 'Peserta';

    mysqli_query($koneksi, "INSERT INTO peserta VALUES('$bp_peserta','$nama_peserta','$asal_kampus','$email','$password','$status')") or die(mysqli_error());
    mysqli_query($koneksi, "INSERT INTO login VALUES('$bp_peserta','$password','$status','$nama_peserta')") or die(mysqli_error());
    header('location:../loginRegister.php');
}
?>