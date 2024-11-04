<?php
	session_start();
	include 'koneksi.php';

	if (isset($_GET['kode_pertanyaan'])) {
		
		$kode_pertanyaan = $_GET['kode_pertanyaan'];
		mysqli_query($connect, "DELETE FROM pertanyaan WHERE kode_pertanyaan = '$kode_pertanyaan'");
		echo "<script>alert('Berhasil Menghapus')</script>";
		header("location:../list_pertanyaan.php");

	} else {
		echo "<h1>NGAPAIN WOI</h1>";
	}
?>
