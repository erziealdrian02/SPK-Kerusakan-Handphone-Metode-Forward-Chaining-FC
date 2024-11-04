<?php
	session_start();
	include 'koneksi.php';

	if (isset($_GET['kode_solusi'])) {
		
		$kode_solusi = $_GET['kode_solusi'];
		mysqli_query($connect, "DELETE FROM solusi WHERE kode_solusi = '$kode_solusi'");
		echo "<script>alert('Berhasil Menghapus')</script>";
		header("location:../list_solusi.php");

	} else {
		echo "<h1>NGAPAIN WOI</h1>";
	}
?>
