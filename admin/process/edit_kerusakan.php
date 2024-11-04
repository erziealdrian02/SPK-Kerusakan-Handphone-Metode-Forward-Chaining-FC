<?php
include ('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode_kerusakan = $_POST['kode_kerusakan'];
    $solusi = $_POST['solusi'];
    $fakta = $_POST['fakta'];

    // Update the database with the new data
    $query = "UPDATE kerusakan SET solusi = '$solusi', fakta = '$fakta' WHERE kode_kerusakan = '$kode_kerusakan'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert('Berhasil Mengedit Data'); window.location.href = '../list_kerusakan.php';</script>";
    } else {
        echo "<script>alert('Gagal mengedit data: " . mysqli_error($connect) . "'); window.location.href = 'form_page.php';</script>";
    }
}
?>
