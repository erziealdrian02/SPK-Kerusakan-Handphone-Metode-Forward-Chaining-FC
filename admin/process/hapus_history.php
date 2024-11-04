<?php
	session_start();
	include 'koneksi.php';

	if (isset($_GET['riwayat_id'])) {
		
		$riwayat_id = $_GET['riwayat_id'];
		mysqli_query($connect, "DELETE FROM riwayat WHERE riwayat_id = '$riwayat_id'");
		echo "<script>alert('Berhasil Menghapus')</script>";
		header("location:../list_history.php");

	} else {
		echo "<h1>NGAPAIN WOI</h1>";
	}
?>
