<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $id_mentor = $_POST['id_mentor'];
    $nama_mentor = $_POST['nama_mentor'];
    $kelas = $_POST['kelas'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    mysqli_query($koneksi, "INSERT INTO mentor VALUES('$id_mentor','$nama_mentor','$kelas','$password','$status')") or die(mysqli_error());
    mysqli_query($koneksi, "INSERT INTO login VALUES('$id_mentor','$password','$status','$nama_mentor')") or die(mysqli_error());
    header('location:mentor.php');
}
?>