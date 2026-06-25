-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2026 at 01:07 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cobauas_pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` int NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `hari_kerja_masuk` int NOT NULL,
  `gaji_dasar_per_hari` decimal(12,2) NOT NULL,
  `jenis_karyawan` enum('kontrak','tetap','magang') NOT NULL,
  `durasi_kontrak_bulan` int DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `tunjangan_kesehatan` decimal(12,2) DEFAULT NULL,
  `opsi_saham_id` varchar(50) DEFAULT NULL,
  `uang_saku_bulanan` decimal(12,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulan`, `agensi_penyalur`, `tunjangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
(1, 'Budi Santoso', 'IT Support', 22, '250000.00', 'tetap', NULL, NULL, '500000.00', 'ESOP-001', NULL, NULL),
(2, 'Siti Aminah', 'Human Resources', 21, '230000.00', 'tetap', NULL, NULL, '450000.00', 'ESOP-002', NULL, NULL),
(3, 'Ahmad Fauzi', 'Finance', 22, '280000.00', 'tetap', NULL, NULL, '600000.00', 'ESOP-003', NULL, NULL),
(4, 'Dewi Lestari', 'Marketing', 20, '240000.00', 'tetap', NULL, NULL, '500000.00', 'ESOP-004', NULL, NULL),
(5, 'Eko Prasetyo', 'Operations', 23, '220000.00', 'tetap', NULL, NULL, '400000.00', 'ESOP-005', NULL, NULL),
(6, 'Fitriani', 'Legal', 21, '300000.00', 'tetap', NULL, NULL, '650000.00', 'ESOP-006', NULL, NULL),
(7, 'Gilang Permana', 'IT Support', 22, '180000.00', 'kontrak', 12, 'PT Mitra Solusi', NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', 'Operations', 19, '170000.00', 'kontrak', 6, 'PT Global Talent', NULL, NULL, NULL, NULL),
(9, 'Indah Permatasari', 'Marketing', 21, '190000.00', 'kontrak', 12, 'PT Mitra Solusi', NULL, NULL, NULL, NULL),
(10, 'Joko Susilo', 'Security', 24, '150000.00', 'kontrak', 24, 'PT Garda Utama', NULL, NULL, NULL, NULL),
(11, 'Kartika Putri', 'Finance', 20, '200000.00', 'kontrak', 6, 'PT Global Talent', NULL, NULL, NULL, NULL),
(12, 'Lukman Hakim', 'Logistics', 22, '165000.00', 'kontrak', 12, 'PT Garda Utama', NULL, NULL, NULL, NULL),
(13, 'Mega Utami', 'Procurement', 21, '185000.00', 'kontrak', 6, 'PT Mitra Solusi', NULL, NULL, NULL, NULL),
(14, 'Naufal Azhar', 'IT Support', 18, '90000.00', 'magang', NULL, NULL, NULL, NULL, '2000000.00', 'Sertifikat MSIB - Backend Developer'),
(15, 'Olivia Lazuardi', 'Human Resources', 20, '85000.00', 'magang', NULL, NULL, NULL, NULL, '1800000.00', 'Sertifikat MSIB - HR Analyst'),
(16, 'Panji Triatmojo', 'Marketing', 15, '85000.00', 'magang', NULL, NULL, NULL, NULL, '1800000.00', 'Sertifikat Mandiri'),
(17, 'Qonita Syahida', 'Finance', 22, '95000.00', 'magang', NULL, NULL, NULL, NULL, '2100000.00', 'Sertifikat MSIB - Data Analyst'),
(18, 'Rian Hidayat', 'Operations', 19, '80000.00', 'magang', NULL, NULL, NULL, NULL, '1700000.00', 'Sertifikat Mandiri'),
(19, 'Salsabila', 'Legal', 17, '90000.00', 'magang', NULL, NULL, NULL, NULL, '2000000.00', 'Sertifikat MSIB - Corporate Legal'),
(20, 'Taufik Hidayat', 'IT Support', 21, '95000.00', 'magang', NULL, NULL, NULL, NULL, '2100000.00', 'Sertifikat MSIB - UI/UX Designer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
