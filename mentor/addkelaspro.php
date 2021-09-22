<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $kode_kelas = $_POST['kode_kelas'];
    $kelas = $_POST['kelas'];
    $mentor_kelas = implode("<br>", $_POST['mentor_kelas']);
    $link_wa = $_POST['link_wa'];
    $jam_kelas = $_POST['jam_kelas'];
    $kuota_kelas = $_POST['kuota_kelas'];
    $status = $_POST['status_kelas'];

    mysqli_query($koneksi, "INSERT INTO kelas VALUES('$kode_kelas','$kelas','$kuota_kelas','$jam_kelas','$mentor_kelas','$link_wa','$status')") or die(mysqli_error());
    header('location:kelas.php');
}
?>