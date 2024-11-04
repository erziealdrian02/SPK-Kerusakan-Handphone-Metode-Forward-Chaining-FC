-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2024 at 09:10 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_counter_fc`
--

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `kode_kerusakan` varchar(50) NOT NULL,
  `solusi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fakta` varchar(100) DEFAULT NULL,
  `oleh` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`kode_kerusakan`, `solusi`, `fakta`, `oleh`, `status`) VALUES
('KER01', 'Perbaiki atau ganti baterai', 'Baterai handphone habis atau rusak', 'Sistem Pakar', 'Dalam Proses'),
('KER02', 'Ganti layar handphone', 'Layar handphone pecah atau rusak', 'Sistem Pakar', 'Dalam Proses'),
('KER03', 'Perbaiki layar sentuh handphone', 'Tidak dapat menekan tombol yang ada pada layar', 'Sistem Pakar', 'Dalam Proses'),
('KER04', 'Perbaiki atau ganti speaker handphone', 'Speaker handphone rusak atau aus', 'Sistem Pakar', 'Dalam Proses'),
('KER05', 'Perbaiki atau ganti komponen pendingin', 'Handphone sering panas karena komponen pendingin rusak', 'Sistem Pakar', 'Dalam Proses'),
('KER06', 'Perbaiki atau ganti layar handphoneeee', 'Layar handphone gelap atau tidak menyala karena komponen layar rusak', 'Sistem Pakar', 'Dalam Proses'),
('KER07', 'Perbaiki atau ganti baterai handphone', 'Baterai handphone cepat habis karena baterai sudah tidak optimal', 'Sistem Pakar', 'Dalam Proses'),
('KER08', 'Perbaiki atau ganti komponen handphone yang terkena cairan', 'Handphone terkena cairan atau terendam air', 'Sistem Pakar', 'Dalam Proses'),
('KER09', 'Perbaiki atau ganti kamera handphone', 'Kamera handphone rusak atau tidak berfungsi dengan baik', 'Sistem Pakar', 'Dalam Proses'),
('KER10', 'Perbaiki atau ganti komponen handphone yang rusak karena terjatuh', 'Handphone terkena guncangan atau jatuh', 'Sistem Pakar', 'Dalam Proses'),
('KER11', 'Perbaiki sistem operasi atau ganti perangkat lunak', 'Handphone sering restart karena masalah sistem operasi atau perangkat lunak', 'Sistem Pakar', 'Dalam Proses'),
('KER12', 'Perbaiki atau ganti komponen jaringan atau Wi-Fi', 'Masalah koneksi jaringan atau Wi-Fi pada handphone', 'Sistem Pakar', 'Dalam Proses'),
('KER13', 'Perbaiki atau ganti komponen yang menyebabkan lag', 'Handphone sering mengalami lag karena komponen kinerja rendah', 'Sistem Pakar', 'Dalam Proses'),
('KER14', 'Perbaiki layar sentuh handphone atau ganti komponen', 'Layar sentuh handphone merespon lambat atau tidak merespons', 'Sistem Pakar', 'Dalam Proses'),
('KER15', 'Perbaiki atau ganti aplikasi yang menyebabkan crash', 'Aplikasi handphone sering crash atau berhenti bekerja', 'Sistem Pakar', 'Dalam Proses'),
('KER16', 'Perbaiki atau ganti komponen yang menyebabkan suara aneh', 'Handphone sering mengeluarkan suara aneh atau berisik', 'Sistem Pakar', 'Dalam Proses'),
('KER17', 'Perbaiki atau ganti komponen jaringan seluler', 'Masalah sinyal atau jaringan seluler pada handphone', 'Sistem Pakar', 'Dalam Proses'),
('KER18', 'Perbaiki atau ganti layar handphone', 'Layar handphone berkedip atau berubah warna secara aneh', 'Sistem Pakar', 'Dalam Proses'),
('KER19', 'Perbaiki atau ganti port pengisian daya handphone', 'Handphone sering mengalami masalah pengisian daya atau port pengisian daya rusak', 'Sistem Pakar', 'Dalam Proses'),
('KER20', 'Perbaiki atau ganti komponen handphone', 'Handphone sering hang atau tidak merespons karena komponen handphone rusak', 'Sistem Pakar', 'Dalam Proses'),
('KER21', 'Perbaiki atau ganti komponen layar sentuh handphone', 'Layar sentuh handphone tidak berfungsi dengan baik karena komponen layar sentuh rusak', 'Sistem Pakar', 'Dalam Proses'),
('KER22', 'Bersihkan atau hapus data yang tidak perlu', 'Handphone sering kehabisan ruang penyimpanan karena data yang tidak perlu', 'Sistem Pakar', 'Dalam Proses'),
('KER23', 'Perbaiki atau ganti sistem operasi handphone', 'Handphone terkena virus atau malware yang merusak sistem operasi', 'Sistem Pakar', 'Dalam Proses'),
('KER24', 'Perbaiki atau ganti komponen yang mengalami kerusakan fisik', 'Handphone mengalami kerusakan fisik karena terjatuh atau terkena benturan', 'Sistem Pakar', 'Dalam Proses'),
('KER25', 'Perbaiki atau ganti komponen handphone', 'Handphone tidak dapat melakukan panggilan atau menerima pesan karena kerusakan komponen handphone', 'Sistem Pakar', 'Dalam Proses'),
('KER26', 'Terus Rawat Handphone mu', 'Tidak Ditemukan kerusakan', 'Sistem Pakar', 'Dalam Proses');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `kode_pertanyaan` varchar(50) NOT NULL,
  `isi_pertanyaan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`kode_pertanyaan`, `isi_pertanyaan`) VALUES
('PERT01', 'Apakah handphone Anda bisa dinyalakan?'),
('PERT02', 'Pilih Pertanyaan Paling Relevan'),
('PERT03', 'Apakah layar handphone Anda pecah atau retak?'),
('PERT04', 'Apakah handphone Anda sering mati mendadak?'),
('PERT05', 'Apakah Anda sering mengalami masalah dengan suara atau speaker handphone?'),
('PERT06', 'Apakah tombol-tombol handphone Anda sulit ditekan?'),
('PERT07', 'Apakah handphone Anda sering panas saat digunakan?'),
('PERT08', 'Apakah layar handphone Anda gelap atau tidak menyala?'),
('PERT08-a', 'Apakah layar handphone Anda gelap atau tidak menyala?'),
('PERT09', 'Apakah baterai handphone Anda sering cepat habis?'),
('PERT10', 'Apakah handphone Anda terkena cairan atau terendam air?'),
('PERT11', 'Apakah handphone Anda mengalami masalah dengan kamera?'),
('PERT12', 'Apakah handphone Anda terkena guncangan atau jatuh?'),
('PERT13', 'Apakah handphone Anda sering restart sendiri?'),
('PERT14', 'Apakah Anda mengalami masalah dengan koneksi jaringan atau Wi-Fi pada handphone Anda?'),
('PERT15', 'Apakah handphone Anda sering mengalami lag atau lambat dalam kinerjanya?'),
('PERT16', 'Apakah layar handphone Anda merespon sentuhan dengan lambat atau tidak merespons sama sekali?'),
('PERT17', 'Apakah Anda sering mengalami masalah dengan aplikasi yang crash atau berhenti bekerja secara tiba-tiba?'),
('PERT18', 'Apakah Anda sering mendengar suara aneh atau berisik dari handphone Anda?'),
('PERT19', 'Apakah handphone Anda mengalami masalah dengan sinyal atau jaringan seluler?'),
('PERT20', 'Apakah layar handphone Anda berkedip atau berubah warna secara aneh?'),
('PERT21', 'Apakah Anda sering mengalami masalah dengan pengisian daya atau port pengisian daya pada handphone Anda?'),
('PERT22', 'Apakah handphone Anda sering hang atau tidak merespons?'),
('PERT23', 'Apakah handphone Anda mengalami masalah dengan layar sentuh?'),
('PERT24', 'Apakah handphone Anda sering kehabisan ruang penyimpanan?'),
('PERT25', 'Apakah handphone Anda terkena virus atau malware?'),
('PERT26', 'Apakah handphone Anda tidak dapat melakukan panggilan atau menerima pesan?'),
('PERT27', 'Apakah Beramasalah dengan Aplikasi?'),
('PERT28', 'Apakah Beramasalah dengan Tampilan?'),
('PERT29', 'Apakah Beramasalah dengan Layar?'),
('PERT30', 'Apakah Beramasalah dengan Kamera?'),
('PERT31', 'Apakah Beramasalah dengan Daya?'),
('PERT32', 'Apakah Beramasalah dengan Speaker/Mic?'),
('PERT33', 'Apakah Beramasalah dengan Jaringan?'),
('PERT34', 'Apakah Beramasalah dengan Port Pengisian daya?'),
('PERT35', 'Apakah kamera masih menyalah?'),
('PERT36', 'Apakah Sudah coba bersihkan lensanya?'),
('PERT37', 'Coba Bersihkan Lensanya terlebih Dahulu'),
('PERT38', 'Apakah Kameranya sudah terlihat bagus?'),
('PERT39', 'Apakah Anda  mengalami masalah dengan Microphonenya?'),
('PERT40', 'Apakah Suara Anda Tidak Dapat terdengar melalui Microphone?'),
('PERT41', 'Apakah Sudah coba membersihkan port pengisian daya?'),
('PERT42', 'Apakah Pengisian daya sudah betul?'),
('PERT43', 'Apakah Pengisian daya sudah betul?'),
('PERT44', 'Apakah anda menggunakan Wi-Fi atau Jaringan Seluler'),
('PERT45', 'Apakah Orang lain bisa mengakses jaringan dari Wi-Fi Tersebut?'),
('PERT46', 'Apakah anda Memiliki Kuota?'),
('PERT47', 'Apakah Terdapat sinyal di sana?'),
('PERT48', 'Apakah Speaker tidak mengeluarkan suara?');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `riwayat_id` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `solusi` varchar(100) NOT NULL,
  `fakta` varchar(100) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `isi_solusi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`riwayat_id`, `merek`, `tipe`, `solusi`, `fakta`, `oleh`, `isi_solusi`, `status`, `created_at`) VALUES
('rwy1053', 'Xiaomi', 'Redmi Not 5', 'Ganti layar handphone', 'Layar handphone pecah atau rusak', 'Sistem Pakar', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-06-21 06:36:27'),
('rwy1343', '', '', '', '', '', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-07-11 03:26:36'),
('rwy1473', 'Xiaomi', '10 Pro', 'Ganti layar handphone', 'Layar handphone pecah atau rusak', 'Sistem Pakar', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-06-21 02:02:21'),
('rwy2468', '', '', '', '', '', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-07-11 03:25:38'),
('rwy3785', 'Xiaomi', '10 Pro', 'Perbaiki atau ganti layar handphone', 'Layar handphone berkedip atau berubah warna secara aneh', 'Sistem Pakar', 'Perbaiki atau ganti layar handphone yang berkedip atau berubah warna.', 'Proses Selesai', '2024-06-21 01:59:33'),
('rwy4263', 'Xiaomi', 'Redmi Not 5', 'Perbaiki atau ganti layar handphone', 'Layar handphone berkedip atau berubah warna secara aneh', 'Sistem Pakar', 'Perbaiki atau ganti layar handphone yang berkedip atau berubah warna.', 'Proses Selesai', '2024-06-14 13:14:08'),
('rwy4516', 'Xiaomi', 'Redmi Not 5', 'Terus Rawat Handphone mu', 'Tidak Ditemukan kerusakan', 'Sistem Pakar', 'Coba Tekan Bagian Tombol Power', 'Proses Selesai', '2024-06-11 04:37:34'),
('rwy5114', 'Xiaomi', 'Redmi Not 5', 'Perbaiki atau ganti sistem operasi handphone', 'Handphone terkena virus atau malware yang merusak sistem operasi', 'Sistem Pakar', 'Perbaiki atau ganti sistem operasi handphone untuk mengatasi masalah virus atau malware.', 'Proses Selesai', '2024-06-19 06:59:20'),
('rwy5455', 'Samsung', 'Redmi Not 5', 'Ganti layar handphone', 'Layar handphone pecah atau rusak', 'Sistem Pakar', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-06-21 02:02:48'),
('rwy5486', '', '', 'Ganti layar handphone', 'Layar handphone pecah atau rusak', 'Sistem Pakar', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-07-11 03:08:33'),
('rwy5623', 'Samsung', 'Galaxy Z', 'Ganti layar handphone', 'Layar handphone pecah atau rusak', 'Sistem Pakar', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-06-14 13:26:19'),
('rwy6071', 'Xiami', 'Xiaomi', '', '', '', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-07-18 02:26:34'),
('rwy7741', '', '', '', '', '', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-07-11 03:28:48'),
('rwy8058', 'Xiaomi', 'Galaxy Z', 'Ganti layar handphone', 'Layar handphone pecah atau rusak', 'Sistem Pakar', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-07-09 10:46:01'),
('rwy8262', 'Xiaomi', '10 Pro', 'Terus Rawat Handphone mu', 'Tidak Ditemukan kerusakan', 'Sistem Pakar', 'Rawat Terus Handphone mu ', 'Proses Selesai', '2024-06-14 13:32:16'),
('rwy8793', 'Xiaomi', '10 Pro', 'Perbaiki atau ganti speaker handphone', 'Speaker handphone rusak atau aus', 'Sistem Pakar', 'Perbaiki atau ganti speaker handphone yang rusak atau aus.', 'Proses Selesai', '2024-06-14 13:28:20'),
('rwy8919', 'infinix', 'hot 11 play', 'Perbaiki layar sentuh handphone', 'Tidak dapat menekan tombol yang ada pada layar', 'Sistem Pakar', 'Perbaiki layar sentuh handphone.', 'Proses Selesai', '2024-06-20 03:43:36'),
('rwy9154', 'Samsung', 'Redmi Not 5', 'Ganti layar handphone', 'Layar handphone pecah atau rusak', 'Sistem Pakar', 'Ganti layar handphone yang pecah atau rusak.', 'Proses Selesai', '2024-06-19 18:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `kode_solusi` varchar(50) NOT NULL,
  `isi_solusi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`kode_solusi`, `isi_solusi`) VALUES
('1111', 'Test Add Solusi'),
('1234', 'Test Edit Solusi'),
('SOL01', 'Perbaiki atau ganti baterai handphone.'),
('SOL02', 'Ganti layar handphone yang pecah atau rusak.'),
('SOL03', 'Perbaiki layar sentuh handphone.'),
('SOL04', 'Perbaiki atau ganti speaker handphone yang rusak atau aus.'),
('SOL05', 'Perbaiki atau ganti komponen pendingin untuk mengatasi masalah panas.'),
('SOL06', 'Perbaiki atau ganti komponen layar handphone yang rusak untuk mengatasi layar gelap atau tidak menyala.'),
('SOL07', 'Ganti baterai handphone yang sudah tidak optimal.'),
('SOL08', 'Perbaiki atau ganti komponen yang terkena cairan untuk mengatasi masalah handphone terendam air.'),
('SOL09', 'Perbaiki atau ganti kamera handphone yang rusak untuk memperbaiki masalah kamera.'),
('SOL10', 'Perbaiki atau ganti komponen handphone yang rusak karena terjatuh untuk mengatasi masalah akibat guncangan.'),
('SOL11', 'Perbaiki atau ganti sistem operasi atau perangkat lunak untuk mengatasi masalah restart sendiri.'),
('SOL12', 'Perbaiki atau ganti komponen jaringan atau Wi-Fi untuk mengatasi masalah koneksi.'),
('SOL13', 'Perbaiki atau ganti komponen yang menyebabkan lag untuk mengatasi kinerja yang lambat.'),
('SOL14', 'Perbaiki layar sentuh handphone atau ganti komponen yang rusak.'),
('SOL15', 'Perbaiki atau ganti aplikasi yang menyebabkan crash untuk mengatasi masalah crash aplikasi.'),
('SOL16', 'Perbaiki atau ganti komponen yang menyebabkan suara aneh atau berisik.'),
('SOL17', 'Perbaiki atau ganti komponen jaringan seluler untuk mengatasi masalah sinyal atau jaringan.'),
('SOL18', 'Perbaiki atau ganti layar handphone yang berkedip atau berubah warna.'),
('SOL19', 'Perbaiki atau ganti port pengisian daya handphone untuk mengatasi masalah pengisian daya.'),
('SOL20', 'Perbaiki atau ganti komponen handphone yang rusak untuk mengatasi masalah hang atau tidak merespons.'),
('SOL21', 'Perbaiki atau ganti komponen layar sentuh handphone yang rusak untuk memperbaiki masalah layar sentuh.'),
('SOL22', 'Bersihkan atau hapus data yang tidak perlu untuk mengatasi masalah ruang penyimpanan penuh.'),
('SOL23', 'Perbaiki atau ganti sistem operasi handphone untuk mengatasi masalah virus atau malware.'),
('SOL24', 'Perbaiki atau ganti komponen handphone yang mengalami kerusakan fisik akibat jatuh atau benturan.'),
('SOL25', 'Perbaiki atau ganti komponen handphone untuk memperbaiki masalah panggilan atau pesan yang tidak dapat diterima.'),
('SOL26', 'Coba Tekan Bagian Tombol Power'),
('SOL27', 'Rawat Terus Handphone mu '),
('SOL28', 'Beli Paket internet di Toko terdekat untuk kembali mendapatkan internet.'),
('SOL29', 'Coba Hubungi Provider terkait mungkin Wi-Fi Terdapat gangguan.'),
('SOL30', 'Cari Tempat lain yang dekat dengan Tower sinyal.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`kode_kerusakan`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`riwayat_id`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`kode_solusi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
