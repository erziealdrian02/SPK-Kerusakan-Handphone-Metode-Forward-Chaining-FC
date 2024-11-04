<?php
include('koneksi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $print = 0;
    $merek = $_POST['merek'];
    $tipe = $_POST['tipe'];
    $solusi = $_POST['solusi'];
    $fakta = isset($_POST['fakta']) ? $_POST['fakta'] : ''; // Cek jika 'fakta' ada
    $oleh = isset($_POST['oleh']) ? $_POST['oleh'] : ''; // Cek jika 'oleh' ada
    $isi_solusi = $_POST['isi_solusi'];
    $status = 'Proses Selesai';

    // Generate a unique riwayat_id with 'rwy' prefix followed by random numbers
    $random_number = mt_rand(1000, 9999); // Generate a random number between 1000 and 9999
    $riwayat_id = 'rwy' . $random_number;

    $sql = "INSERT INTO riwayat (riwayat_id, merek, tipe, solusi, fakta, oleh, isi_solusi, status) 
            VALUES ('$riwayat_id', '$merek', '$tipe', '$solusi', '$fakta', '$oleh', '$isi_solusi', '$status')";

    if (mysqli_query($connect, $sql)) {
        header('Location: ../index.php'); // Ganti dengan halaman yang sesuai
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
}
unset($_SESSION['merek']);
unset($_SESSION['tipe']);
