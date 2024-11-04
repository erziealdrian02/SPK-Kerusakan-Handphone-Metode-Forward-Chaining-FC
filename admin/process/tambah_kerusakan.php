<?php
include ('koneksi.php');
if (isset($_POST['submit'])) {
    $solusi = $_POST['solusi'];
    $fakta = $_POST['fakta'];

    $random_number = mt_rand(27, 200); // Generate a random number between 1 and 100
    $kode_kerusakan = 'KER' . $random_number;
    $oleh = 'Sistem Pakar';
    $status = 'Dalam Proses';

    $sql = "INSERT INTO kerusakan (kode_kerusakan, solusi, fakta, oleh, status) VALUES ('$kode_kerusakan', '$solusi', '$fakta', '$oleh', '$status')";
    $query = mysqli_query($connect, $sql);
    
    if ($query) {
        echo "<script>alert('Berhasil memasukkan data Alternatif'); window.location.href = '../list_kerusakan.php';</script>";
    } else {
        echo "<script>alert('Gagal memasukkan data: " . mysqli_error($connect) . "'); window.location.href = 'form_page.php';</script>";
    }

    mysqli_close($connect);
} else {
    echo "<script>alert('Form tidak disubmit dengan benar'); window.location.href = '../list_kerusakan.php';</script>";
}
?>
