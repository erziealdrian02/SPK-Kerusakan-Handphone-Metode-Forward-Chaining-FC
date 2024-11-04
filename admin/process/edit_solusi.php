<?php
include ('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode_solusi = $_POST['kode_solusi'];
    $isi_solusi = $_POST['isi_solusi'];

    // Update the database with the new data
    $query = "UPDATE solusi SET isi_solusi = '$isi_solusi' WHERE kode_solusi = '$kode_solusi'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert('Berhasil Mengedit Data'); window.location.href = '../list_solusi.php';</script>";
    } else {
        echo "<script>alert('Gagal mengedit data: " . mysqli_error($connect) . "'); window.location.href = 'form_page.php';</script>";
    }
}
?>
