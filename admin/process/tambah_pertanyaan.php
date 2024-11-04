<?php
include ('koneksi.php');
if (isset($_POST['submit'])) {
    $isi_pertanyaan = $_POST['isi_pertanyaan'];

    $random_number = mt_rand(50, 200); // Generate a random number between 1 and 100
    $kode_pertanyaan = 'PERT' . $random_number;

    $sql = "INSERT INTO pertanyaan (kode_pertanyaan, isi_pertanyaan) VALUES ('$kode_pertanyaan', '$isi_pertanyaan')";
    $query = mysqli_query($connect, $sql);
    
    if ($query) {
        echo "<script>alert('Berhasil memasukkan data Alternatif'); window.location.href = '../list_pertanyaan.php';</script>";
    } else {
        echo "<script>alert('Gagal memasukkan data: " . mysqli_error($connect) . "'); window.location.href = 'form_page.php';</script>";
    }

    mysqli_close($connect);
} else {
    echo "<script>alert('Form tidak disubmit dengan benar'); window.location.href = '../list_pertanyaan.php';</script>";
}
?>
