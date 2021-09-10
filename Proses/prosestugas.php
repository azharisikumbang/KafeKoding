<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
  
$bp_peserta = $_POST['bp_peserta'];
$kelas = $_POST['kelas'];
$pertemuan = $_POST['pertemuan'];
$nilai = 0;

$ty = $_POST['hidden'];

if ($ty == 'url') {
    $tgs = $_POST['Tgskelas'];
}
else{
    $tgs = $_FILES['Tgskelas']['name'];
    move_uploaded_file($_FILES['Tgskelas']['tmp_name'], "../tugas/".$_FILES['Tgskelas']['name']);
}
 
mysqli_query($koneksi, "INSERT INTO tugas VALUES('$bp_peserta','$kelas','$pertemuan','$tgs','$nilai','$ty')") or die(mysqli_error());
header("location:../p/tugas.php");
}
?>