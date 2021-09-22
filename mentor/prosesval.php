<?php
if (isset($_POST['submit'])) {
      include '../koneksi.php';
      $nilai_akhir = $_POST['nilai_akhir'];
      $bp = $_POST['bp_peserta'];
      $kelas = $_POST['kelas'];

      if ($nilai_akhir > 60) {
            $keterangan = 'Lulus';
      } else {
            $keterangan = 'Belum Lulus';
      }
      
      mysqli_query($koneksi, "UPDATE kelas_peserta SET nilai_akhir = '$nilai_akhir', keterangan = '$keterangan' WHERE bp_peserta = '$bp' AND kelas='$kelas'") or die(mysqli_error());
      header('location:daftarPeserta.php');
}?>