<?php
session_start();
include('process/koneksi.php');
require './vendor/autoload.php';

use Dompdf\Dompdf;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cetak'])) {
    $_SESSION['merek'] = $_POST['merek'];
    $_SESSION['tipe'] = $_POST['tipe'];
    $_SESSION['isi_solusi'] = $_POST['isi_solusi'];

    // Fetch data for the session
    include "process/fungsi.php";
    kesimpulan($_SESSION['isi_solusi']);
}

// Check if session data exists
$merek = $_SESSION['merek'] ?? 'N/A';
$tipe = $_SESSION['tipe'] ?? 'N/A';
$isi_solusi = $_SESSION['isi_solusi'] ?? 'N/A';
$fakta = $_SESSION['fakta'] ?? 'N/A';
$solusi = $_SESSION['solusi'] ?? 'N/A';
$oleh = $_SESSION['oleh'] ?? 'N/A';
$status = $_SESSION['status'] ?? 'N/A';

$dompdf = new Dompdf();

$html = "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8' />
    <title>WiradaMotor</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' />
    <link rel='stylesheet' href='../css/style.css' />
    <style>
        .diagnose-page .content .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        min-height: calc(100vh - 80px);
        }

        .diagnose-page .content .info h1 {
        color: #5d5d5d;
        font-size: 44px;
        text-align: center;
        margin: 1px;
        }
        .diagnose-page .action-button a {
        border: 1px solid #ccc;
        border-radius: 20px;
        padding: 12px 30px;
        margin: 30px;
        cursor: pointer;
        color: #fff;
        background-color: #6c63ff;
        transition: all 0.3s ease;
        width: 200px;
        text-align: center;
        }

        .table-container {
        width: 100%; /* Tabel mengisi lebar penuh */
        margin-top: 20px;
        overflow-x: auto;
        }

        .table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ddd;
        }

        .table th,
        .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        }

        .table th {
        background-color: #f2f2f2;
        color: #333;
        }

        .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
        }

        .table tbody tr:hover {
        background-color: #f1f1f1;
        }

    </style>
</head>
<body>
<div class='diagnose-page'>
        <div class='content'>
            <div class='container'>
                <div class='info'>
                    <h1>Hasil Diagnosa</h1>
                </div>
                <!-- Contoh tabel -->
                <div class='table-container'>
                    <div>
                        <h3>Kerusakan</h3>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kerusakan yang dia alami</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>$isi_solusi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <h3>Handphone</h3>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Merek Handphone</th>
                                    <th>Tipe Handphone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>$merek</td>
                                    <td>$tipe</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <h3>Kerusakan yang di Alami</h3>
                                <table class='table'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kerusakan</th>
                                            <th>Di sarankan</th>
                                            <th>Di diagnosa oleh</th>
                                            <th>Status Saat ini</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>$fakta</td>
                                        <td>$solusi</td>
                                        <td>$oleh</td>
                                        <td>$status</td>
                                    </tr>
                                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('Laporan_Diagnosa.pdf', ['Attachment' => false]);
