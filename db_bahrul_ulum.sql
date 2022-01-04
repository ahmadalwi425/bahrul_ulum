-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 03:02 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bahrul_ulum`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_ortu_nama_wali` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ortu_status_wali` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ortu_no_hp_wali` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ortu_alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ortu_kelurahan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ortu_provinsi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ortu_kota` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ortu_kecamatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `ibu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ayah_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `data_ortu_nama_wali`, `data_ortu_status_wali`, `data_ortu_no_hp_wali`, `data_ortu_alamat`, `data_ortu_kelurahan`, `data_ortu_provinsi`, `data_ortu_kota`, `data_ortu_kecamatan`, `siswa_id`, `ibu_id`, `ayah_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE `lembaga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lembaga_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lembaga`
--

INSERT INTO `lembaga` (`id`, `lembaga_nama`) VALUES
(1, 'TK'),
(2, 'SMP'),
(3, 'SMA');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level_nama`) VALUES
(1, 'admin'),
(2, 'karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_17_070458_create_level_table', 1),
(6, '2021_12_17_070608_create_pendaftaran_table', 1),
(7, '2021_12_17_070636_create_siswa_table', 1),
(8, '2021_12_17_070722_create_lembaga_table', 1),
(9, '2021_12_18_091403_create_data_ortu_table', 1),
(10, '2021_12_18_093124_create_personal_ortu_table', 1),
(11, '2021_12_18_093256_create_status_ortu_table', 1),
(12, '2021_12_18_093741_create_pendidikan_sebelumnya_table', 1),
(13, '2021_12_24_202508_create_menu_table', 2),
(14, '2021_12_24_202721_create_berita_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftaran_no_kk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_nisn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_no_kip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendaftaran_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_tanggal_lahir` date NOT NULL,
  `pendaftaran_alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_kelurahan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_provinsi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_kecamatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_kode_pos` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_agama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_anak_ke` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_jumlah_saudara` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_status_tempat_tinggal` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_pembiaya` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_kewarganegaraan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_kebutuhan_khusus` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_kebutuhan_disabilitas` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_kepala_keluarga` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_pernah_paud` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_pernah_tk` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_jarak_tempuh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_waktu_tempuh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_cita_cita` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_hobi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_media_sosial` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran_status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'diminta',
  `pendaftaran_tanggal_masuk` date NOT NULL,
  `lembaga_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `pendaftaran_no_kk`, `pendaftaran_nisn`, `pendaftaran_no_kip`, `pendaftaran_nama`, `pendaftaran_jenis_kelamin`, `pendaftaran_tempat_lahir`, `pendaftaran_tanggal_lahir`, `pendaftaran_alamat`, `pendaftaran_kelurahan`, `pendaftaran_provinsi`, `pendaftaran_kota`, `pendaftaran_kecamatan`, `pendaftaran_kode_pos`, `pendaftaran_agama`, `pendaftaran_no_hp`, `pendaftaran_anak_ke`, `pendaftaran_jumlah_saudara`, `pendaftaran_status_tempat_tinggal`, `pendaftaran_pembiaya`, `pendaftaran_kewarganegaraan`, `pendaftaran_kebutuhan_khusus`, `pendaftaran_kebutuhan_disabilitas`, `pendaftaran_kepala_keluarga`, `pendaftaran_pernah_paud`, `pendaftaran_pernah_tk`, `pendaftaran_jarak_tempuh`, `pendaftaran_waktu_tempuh`, `pendaftaran_cita_cita`, `pendaftaran_hobi`, `pendaftaran_media_sosial`, `pendaftaran_status`, `pendaftaran_tanggal_masuk`, `lembaga_id`) VALUES
(1, '3244', '3534234', '4534', 'dfsvxcv', 'dvsdv', 'sdfsdf', '2021-12-08', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'hfdgd', '3453', 'sdfsdf', '345342', '2', '4', 'dfgdfgdd', 'asdasdf', 'sdfsdfsdf', 'fergd', 'dfgd', 'ddfgdfg', 'dfg', 'dfg', 'gdc', '2dg', '32dffg', 'rdggd', 'dfgdfg', 'diminta', '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan_sebelumnya`
--

CREATE TABLE `pendidikan_sebelumnya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan_sebelumnya_nama_sekolah` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_sebelumnya_alamat_sekolah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_sebelumnya_mengaji` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_sebelumnya_asal_tpq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_ortu`
--

CREATE TABLE `personal_ortu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personal_ortu_nik` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_ortu_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_ortu_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_ortu_tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_ortu_tanggal_lahir` date NOT NULL,
  `personal_ortu_pendidikan_terakhir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_ortu_pekerjaan` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_ortu_no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_ortu_penghasilan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_no_kk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_nisn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_no_kip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siswa_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_tanggal_lahir` date NOT NULL,
  `siswa_alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_kelurahan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_provinsi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_kecamatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_kode_pos` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_agama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_anak_ke` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_jumlah_saudara` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_status_tempat_tinggal` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_pembiaya` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_kewarganegaraan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_kebutuhan_khusus` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_kebutuhan_disabilitas` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_kepala_keluarga` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_pernah_paud` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_pernah_tk` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_jarak_tempuh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_waktu_tempuh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_cita_cita` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_hobi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_media_sosial` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lembaga_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `siswa_no_kk`, `siswa_nisn`, `siswa_no_kip`, `siswa_nama`, `siswa_jenis_kelamin`, `siswa_tempat_lahir`, `siswa_tanggal_lahir`, `siswa_alamat`, `siswa_kelurahan`, `siswa_provinsi`, `siswa_kota`, `siswa_kecamatan`, `siswa_kode_pos`, `siswa_agama`, `siswa_no_hp`, `siswa_anak_ke`, `siswa_jumlah_saudara`, `siswa_status_tempat_tinggal`, `siswa_pembiaya`, `siswa_kewarganegaraan`, `siswa_kebutuhan_khusus`, `siswa_kebutuhan_disabilitas`, `siswa_kepala_keluarga`, `siswa_pernah_paud`, `siswa_pernah_tk`, `siswa_jarak_tempuh`, `siswa_waktu_tempuh`, `siswa_cita_cita`, `siswa_hobi`, `siswa_media_sosial`, `lembaga_id`) VALUES
(1, '234324', '32341', '234234', 'siswa1', 'laki-laki', 'jakarta', '2021-12-23', 'Jl. siswa1', 'aasdasd', 'sdfsdf', 'sdfsdf', 'gfsdf', '3124', 'islam', '0814263', '2', '4', 'rumah', 'ayah', 'Indonesia', 'Ada', 'Ada', 'bapak siswa1', 'pernah', 'pernah', '2 km', '12 menit', 'Pilot', 'Main', 'siswa1_123', 1),
(2, '234324', '32342', '234234', 'siswa12', 'laki-laki', 'jakarta', '2021-12-23', 'Jl. siswa1', 'aasdasd', 'sdfsdf', 'sdfsdf', 'gfsdf', '3124', 'islam', '0814263', '2', '4', 'rumah', 'ayah', 'Indonesia', 'Ada', 'Ada', 'bapak siswa1', 'pernah', 'pernah', '2 km', '12 menit', 'Pilot', 'Main', 'siswa1_123', 2),
(3, '234324', '32343', '234234', 'siswa2', 'laki-laki', 'jakarta', '2021-12-23', 'Jl. siswa1', 'aasdasd', 'sdfsdf', 'sdfsdf', 'gfsdf', '3124', 'islam', '0814263', '2', '4', 'rumah', 'ayah', 'Indonesia', 'Tidak ada', 'Tidak ada', 'bapak siswa1', 'pernah', 'pernah', '2 km', '12 menit', 'Pilot', 'Main', 'siswa1_123', 2),
(4, '234324', '32344', '234234', 'siswa3', 'laki-laki', 'jakarta', '2021-12-23', 'Jl. siswa1', 'aasdasd', 'sdfsdf', 'sdfsdf', 'gfsdf', '3124', 'islam', '0814263', '2', '4', 'rumah', 'ayah', 'Indonesia', 'Tidak ada', 'Tidak ada', 'bapak siswa1', 'pernah', 'pernah', '2 km', '12 menit', 'Pilot', 'Main', 'siswa1_123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `status_ortu`
--

CREATE TABLE `status_ortu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_ortu_nama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$qx2j4lxBANmUEJHDXcttpO29dAmUR.IQUD6J66HPNQE9ty6oCcCFC', 1, NULL, '2021-12-23 23:02:01', '2021-12-23 23:02:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_id` (`siswa_id`),
  ADD KEY `ibu_id` (`ibu_id`),
  ADD KEY `ayah_id` (`ayah_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lembaga`
--
ALTER TABLE `lembaga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lembaga_id` (`lembaga_id`);

--
-- Indexes for table `pendidikan_sebelumnya`
--
ALTER TABLE `pendidikan_sebelumnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personal_ortu`
--
ALTER TABLE `personal_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lembaga_id` (`lembaga_id`);

--
-- Indexes for table `status_ortu`
--
ALTER TABLE `status_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendidikan_sebelumnya`
--
ALTER TABLE `pendidikan_sebelumnya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_ortu`
--
ALTER TABLE `personal_ortu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_ortu`
--
ALTER TABLE `status_ortu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD CONSTRAINT `data_ortu_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`),
  ADD CONSTRAINT `data_ortu_ibfk_2` FOREIGN KEY (`ayah_id`) REFERENCES `personal_ortu` (`id`),
  ADD CONSTRAINT `data_ortu_ibfk_3` FOREIGN KEY (`ibu_id`) REFERENCES `personal_ortu` (`id`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`lembaga_id`) REFERENCES `lembaga` (`id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`lembaga_id`) REFERENCES `lembaga` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
