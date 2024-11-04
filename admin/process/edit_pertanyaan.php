<?php
include ('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode_pertanyaan = $_POST['kode_pertanyaan'];
    $isi_pertanyaan = $_POST['isi_pertanyaan'];

    // Update the database with the new data
    $query = "UPDATE pertanyaan SET isi_pertanyaan = '$isi_pertanyaan' WHERE kode_pertanyaan = '$kode_pertanyaan'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert('Berhasil Mengedit Data'); window.location.href = '../list_pertanyaan.php';</script>";
    } else {
        echo "<script>alert('Gagal mengedit data: " . mysqli_error($connect) . "'); window.location.href = 'form_page.php';</script>";
    }
}
?>
