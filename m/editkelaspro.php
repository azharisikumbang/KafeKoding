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

    mysqli_query($koneksi, "UPDATE kelas SET kelas = '$kelas', mentor_kelas = '$mentor_kelas', link_wa = '$link_wa', jam_kelas = '$jam_kelas', kuota_kelas = '$kuota_kelas', status_kelas = '$status' WHERE kode_kelas = '$kode_kelas'") or die (mysqli_error());
    header('location:kelas.php');
}
?>