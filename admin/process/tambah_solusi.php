<?php
include ('koneksi.php');
if (isset($_POST['submit'])) {
    $isi_solusi = $_POST['isi_solusi'];

    $random_number = mt_rand(31, 200); // Generate a random number between 1 and 100
    $kode_solusi = 'SOL' . $random_number;

    $sql = "INSERT INTO solusi (kode_solusi, isi_solusi) VALUES ('$kode_solusi', '$isi_solusi')";
    $query = mysqli_query($connect, $sql);
    
    if ($query) {
        echo "<script>alert('Berhasil memasukkan data Alternatif'); window.location.href = '../list_solusi.php';</script>";
    } else {
        echo "<script>alert('Gagal memasukkan data: " . mysqli_error($connect) . "'); window.location.href = 'form_page.php';</script>";
    }

    mysqli_close($connect);
} else {
    echo "<script>alert('Form tidak disubmit dengan benar'); window.location.href = '../list_pertanyaan.php';</script>";
}
?>
