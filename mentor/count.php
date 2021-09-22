<?php 
function Hitung($nama_tabel)
{
	include '../koneksi.php';
	$query = mysqli_query($koneksi, "SELECT * FROM $nama_tabel") or die (mysqli_error());
	$total = mysqli_num_rows($query);
	return $total;
}
?>