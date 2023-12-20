-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 09:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman-lab-cbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama`, `user_name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Balqis', 'Bandi', '$2y$10$Gec1K1lI7H3N9kxUBZIceOt9FYunt7P35JXxoLkG/LMlUpIUOAP5i', '2023-12-06 00:47:53', '2023-12-06 00:47:53'),
(2, 'Balqis', 'in`am', '$2y$10$q8PiKU/yxIfJBClXfzgjV.VnBS5F6tVdDYEf6yikpCxjO8E1PxuHa', '2023-12-06 00:48:11', '2023-12-06 00:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `detil_pinjaman_eksternals`
--

CREATE TABLE `detil_pinjaman_eksternals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_peminjaman` varchar(255) NOT NULL,
  `nama_penanggung_jawab` varchar(255) NOT NULL,
  `no_kontak` varchar(255) NOT NULL,
  `id_admin` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_sesi` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detil_pinjaman_eksternals`
--

INSERT INTO `detil_pinjaman_eksternals` (`id`, `id_peminjaman`, `nama_penanggung_jawab`, `no_kontak`, `id_admin`, `created_at`, `updated_at`, `id_sesi`) VALUES
(1, '6', 'Liza Pratiwi', '081233334444123', 1, '2023-12-20 01:05:25', '2023-12-20 01:05:25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `disetujuis`
--

CREATE TABLE `disetujuis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_kepala_cbt` int(11) NOT NULL,
  `tanggal_disetujui` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_admin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama_fasilitas`, `gambar`, `jumlah`, `keterangan`, `id_admin`, `created_at`, `updated_at`) VALUES
(19, 'ruang cbt', '1701847308.jpeg', '1', 'Kelas Ujian', NULL, '2023-12-06 00:21:48', '2023-12-06 00:21:48'),
(20, 'Lab CBT', '1701933998.jpeg', '1', 'Keperluan UJian Sumatif', NULL, '2023-12-07 00:26:38', '2023-12-07 00:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `kepala__c_b_t_s`
--

CREATE TABLE `kepala__c_b_t_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIP` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepala__c_b_t_s`
--

INSERT INTO `kepala__c_b_t_s` (`id`, `NIP`, `nama`, `user_name`, `password`, `email`, `kontak`, `created_at`, `updated_at`) VALUES
(2, '123451233455', 'dr. Muhammad In`am, si', 'in`am', '123456', 'adminwebsitepro@gmail.com', '08125555678', '2023-12-06 00:51:36', '2023-12-06 00:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_02_091528_create_admins_table', 2),
(6, '2023_11_02_093838_create_fasilitas_table', 3),
(7, '2023_11_02_095858_create_user_prodis_table', 4),
(8, '2023_11_02_124404_create_pinjaman_detil_internals_table', 5),
(9, '2023_11_02_125955_create_detil_pinjaman_eksternals_table', 6),
(10, '2023_11_07_011937_create_peminjamen_table', 7),
(11, '2023_11_07_014822_create_kepala__c_b_t_s_table', 8),
(12, '2023_12_05_074725_create_disetujuis_table', 9),
(13, '2023_12_06_082429_create_sesi_peminjamen_table', 10),
(14, '2023_12_06_082904_update_detail_peminjaman', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) NOT NULL,
  `no_peminjaman` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `is_internal` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `no_peminjaman`, `tanggal_mulai`, `tanggal_selesai`, `keperluan`, `is_internal`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-11-22', '2023-11-22', 'Ujian Sumatif', 1, NULL, NULL),
(5, 5, '2023-12-06', '2023-12-06', 'ujian', 1, '2023-12-06 00:57:06', '2023-12-06 00:57:06'),
(6, 6, '2023-12-19', '2023-12-19', 'Ujian Tengah', 0, '2023-12-19 01:18:43', '2023-12-19 01:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman_detil_internals`
--

CREATE TABLE `pinjaman_detil_internals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_peminjaman` bigint(20) NOT NULL,
  `id_userprodi` bigint(20) NOT NULL,
  `nama_penanggung_jawab` varchar(255) NOT NULL,
  `no_kontak` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_sesi` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjaman_detil_internals`
--

INSERT INTO `pinjaman_detil_internals` (`id`, `id_peminjaman`, `id_userprodi`, `nama_penanggung_jawab`, `no_kontak`, `created_at`, `updated_at`, `id_sesi`) VALUES
(2, 1, 2, 'Liza Pratiwi', '081233334444123', '2023-12-14 02:42:05', '2023-12-14 02:42:05', 1),
(3, 5, 1, 'Andhi Fahrurrroji', '081233334444124', '2023-12-14 08:04:45', '2023-12-14 08:04:45', 3),
(4, 1, 3, 'dr. Mohammad In`am Ilmiawan, M.Biomed', '081233334444124', '2023-12-20 00:31:08', '2023-12-20 00:31:08', 4),
(5, 5, 2, 'dr. Mohammad In`am Ilmiawan, M.Biomed', '081233334444124', '2023-12-20 01:10:25', '2023-12-20 01:10:25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sesi_peminjamen`
--

CREATE TABLE `sesi_peminjamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sesi` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sesi_peminjamen`
--

INSERT INTO `sesi_peminjamen` (`id`, `nama_sesi`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 'Sesi 1', '08.00 - 10.00', NULL, NULL),
(2, 'Sesi 2', '10.00 - 12.00', NULL, NULL),
(3, 'Sesi 3', '12.00 - 14.00', NULL, NULL),
(4, 'Sesi 4', '14.00 - 16.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'saya', 'saya@gmail.com', NULL, '$2y$10$jBpjxxJhfEYlq1fMYs5GQ.9OjK9.CI1bTbt8mBb0zWiL34V4p6ieG', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_prodis`
--

CREATE TABLE `user_prodis` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_prodis`
--

INSERT INTO `user_prodis` (`id`, `username`, `nama_prodi`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Liza', 'Farmasi', '$2y$10$pjHC84OR6smzg5FCuv06G.8/Cx6849fvE/Eyy3ediVKqP3UVLVxBi', '2023-11-21 01:55:27', '2023-11-21 01:55:27'),
(2, 'Panji', 'Apoteker', '$2y$10$xS0.ti1ZkN03BLBMvOX.p.ZHCMAoPzY2XxBQUhb8KO2unAsAF/9Mq', '2023-11-21 19:37:21', '2023-11-21 19:37:21'),
(3, 'bandi', 'Profesi Dokter', '$2y$10$VXn7Dqc9wHOrTR5WjBCs7umzA2Bgo4Tk.NzQkxa0MOZSzLtOanyLy', '2023-12-06 00:50:28', '2023-12-06 00:50:28'),
(4, 'Eri Bayu', 'Kedokteran', '$2y$10$S51ZFODb9bQd/rEiPOUv/OiOw.FNjBgKft/0OQhp/g3LofjAq7x5y', '2023-12-13 03:17:18', '2023-12-13 03:17:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detil_pinjaman_eksternals`
--
ALTER TABLE `detil_pinjaman_eksternals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disetujuis`
--
ALTER TABLE `disetujuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepala__c_b_t_s`
--
ALTER TABLE `kepala__c_b_t_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pinjaman_detil_internals`
--
ALTER TABLE `pinjaman_detil_internals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_userprodi` (`id_userprodi`);

--
-- Indexes for table `sesi_peminjamen`
--
ALTER TABLE `sesi_peminjamen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_prodis`
--
ALTER TABLE `user_prodis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detil_pinjaman_eksternals`
--
ALTER TABLE `detil_pinjaman_eksternals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disetujuis`
--
ALTER TABLE `disetujuis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kepala__c_b_t_s`
--
ALTER TABLE `kepala__c_b_t_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pinjaman_detil_internals`
--
ALTER TABLE `pinjaman_detil_internals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sesi_peminjamen`
--
ALTER TABLE `sesi_peminjamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_prodis`
--
ALTER TABLE `user_prodis`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjaman_detil_internals`
--
ALTER TABLE `pinjaman_detil_internals`
  ADD CONSTRAINT `pinjaman_detil_internals_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`),
  ADD CONSTRAINT `pinjaman_detil_internals_ibfk_2` FOREIGN KEY (`id_userprodi`) REFERENCES `user_prodis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
