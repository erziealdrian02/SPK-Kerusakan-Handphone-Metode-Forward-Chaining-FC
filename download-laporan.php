<?php
include('koneksi.php');
// start session
session_start();

// check if session data exists
$merek = $_SESSION['merek'] ?? 'N/A';
$tipe = $_SESSION['tipe'] ?? 'N/A';
$nama = $_SESSION['Nama'] ?? 'N/A';
$notlp = $_SESSION['notlp'] ?? 'N/A';
$alamat = $_SESSION['alamat'] ?? 'N/A';
$tanggal = $_SESSION['tanggal'] ?? 'N/A';
$kerusakan = $_SESSION['kerusakan'] ?? 'N/A';
$gejala_1 = $_SESSION['gejala_1'] ?? 'N/A';
$gejala_2 = $_SESSION['gejala_2'] ?? 'N/A';
$gejala_3 = $_SESSION['gejala_3'] ?? 'N/A';
$nama_mekanik = $_SESSION['nama_mekanik'] ?? 'N/A';


require '../vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();

// Generate HTML content
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
        @media print {
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    .diagnose-page {
        width: 100%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #000;
        box-sizing: border-box;
    }
    .content {
        width: 100%;
    }
    .container {
        width: 100%;
        margin: 0 auto;
    }
    .info {
        text-align: center;
        margin-bottom: 20px;
    }
    .info h1 {
        font-size: 24px;
        margin: 0;
    }
    .table-container {
        width: 100%;
    }
    .table-container h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    .table th, .table td {
        border: 1px solid #000;
        padding: 8px;
        text-align: left;
    }
    .table th {
        background-color: #f2f2f2;
    }
    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
        }

        @media screen {
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            .diagnose-page {
                width: 100%;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ddd;
                box-sizing: border-box;
            }
            .content {
                width: 100%;
            }
            .container {
                width: 100%;
                margin: 0 auto;
            }
            .info {
                text-align: center;
                margin-bottom: 20px;
            }
            .info h1 {
                font-size: 24px;
                margin: 0;
            }
            .table-container {
                width: 100%;
            }
            .table-container h3 {
                font-size: 20px;
                margin-bottom: 10px;
            }
            .table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            .table th, .table td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            .table th {
                background-color: #f2f2f2;
            }
            .table tbody tr:nth-child(even) {
                background-color: #f9f9f9;
            }
        }


    </style>
</head>
<body>
<div class='diagnose-page'>
        <div class='content'>
            <div class='container'>
                <div class='info'>
                    <h1>Hasil konsultasi : $nama_mekanik</h1>
                </div>
                <!-- Contoh tabel -->
                <div class='table-container'>
                    <div>
                        <h3>Pemilik</h3>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No. Telephone</th>
                                    <th>Alamat</th>
                                    <th>Tipe Motor</th>
                                    <th>Merek Motor</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>$nama</td>
                                    <td>$notlp</td>
                                    <td>$alamat</td>
                                    <td>$tipe</td>
                                    <td>$merek</td>
                                    <td>$tanggal</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <h3>Gejala yang terpilih</h3>
                                <table class='table'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gejala Satu</th>
                                            <th>Gejala Dua</th>
                                            <th>Gejala Tiga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>$gejala_1</td>
                                        <td>$gejala_2</td>
                                        <td>$gejala_3</td>
                                    </tr>
                                </table>
                    </div>

                    <div>
                        <h3>Hasil Kerusakan</h3>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kerusakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>$kerusakan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Hasil_Konsultasi.pdf', ['Attachment' => false]);
