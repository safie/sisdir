-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table sisdir.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisdir.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_10_17_065241_create_model_seksyens_table', 1),
	(4, '2018_10_19_014553_create_model_units_table', 2),
	(5, '2018_10_19_015212_create_model_stafs_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table sisdir.model_stafs
CREATE TABLE IF NOT EXISTS `model_stafs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisdir.model_stafs: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_stafs` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_stafs` ENABLE KEYS */;

-- Dumping structure for table sisdir.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisdir.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table sisdir.seksyen
CREATE TABLE IF NOT EXISTS `seksyen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_seksyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan_seksyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_seksyen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisdir.seksyen: ~11 rows (approximately)
/*!40000 ALTER TABLE `seksyen` DISABLE KEYS */;
INSERT INTO `seksyen` (`id`, `nama_seksyen`, `singkatan_seksyen`, `alamat_seksyen`, `created_at`, `updated_at`) VALUES
	(8, 'Seksyen Ekonomi Makro', 'MAKRO', 'Seksyen Ekonomi Makro,\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras 4, Blok B5, Pusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-18 05:48:58', '2018-10-18 16:35:40'),
	(9, 'Seksyen Ekonomi Alam Sekitar dan Sumber Asli', 'SEASSA', 'Seksyen Ekonomi Alam Sekitar dan Sumber Asli,\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras -1, Blok B5, Pusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-18 05:49:52', '2018-10-18 05:49:52'),
	(10, 'Seksyen Industri Perkhidmatan', 'SIP', 'Seksyen Industri Perkhidmatan,\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras 4, Blok B6, Pusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-18 08:32:41', '2018-10-18 08:32:41'),
	(13, 'Seksyen Pengurusan Maklumat', 'SPM', 'Seksyen Pengurusan Maklumat, \r\nUnit Perancang Ekonomi, \r\nKementerian Hal Ehwal Ekonomi, \r\nAras -2, Blok B5, \r\nPusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-18 16:35:19', '2018-10-18 16:35:19'),
	(14, 'Seksyen Bajet Pembangunan', 'BAJET', 'Seksyen Bajet Pembangunan,\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras 2, Blok B6,\r\nPusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-19 01:04:31', '2018-10-19 01:04:31'),
	(15, 'Seksyen Industri Pembuatan Sains dan Teknologi', 'SIPST', 'Seksyen Industri Pembuatan, Sains dan Teknologi,\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras 4, Blok B6, Pusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-19 01:05:58', '2018-10-19 01:05:58'),
	(16, 'Seksyen Infrastruktur dan Kemudahan Awam', 'INFRA', 'Seksyen Infrastruktur dan Kemudahan Awam,\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras 5, Blok B6,\r\nPusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-19 01:06:39', '2018-10-19 01:06:39'),
	(17, 'JPPN & Dasar dan UPB', 'JPPN', 'Pasukan Jawatankuasa Perancang Pembangunan Negara (JPPN) & Dasar dan Unit Pembangunan Bumiputera (UPB),\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras 2  Blok B5, Pusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-19 01:07:27', '2018-10-19 01:07:27'),
	(18, 'Seksyen K-Ekonomi', 'SK', 'Seksyen K-Ekonomi,\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras 1, Blok B5,\r\nPusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-19 01:08:11', '2018-10-19 01:08:11'),
	(19, 'Seksyen Kerjasama Antarabangsa', 'SKA', 'Seksyen Kerjasama Antarabangsa,\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras 2, Blok B5,\r\nPusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-19 01:08:56', '2018-10-19 01:08:56'),
	(20, 'Seksyen Keselamatan dan Ketenteraman Awam', 'SKKA', 'Seksyen Keselamatan dan Ketenteraman Awam,\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras -2, Blok B6, Pusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-19 01:10:05', '2018-10-19 01:10:05'),
	(21, 'Seksyen Khidmat Pengurusan', 'SKP', 'Seksyen Khidmat Pengurusan,\r\nUnit Perancang Ekonomi,\r\nKementerian Hal Ehwal Ekonomi,\r\nAras -2, Blok B5,\r\nPusat Pentadbiran Kerajaan Persekutuan,\r\n62502 W.P Putrajaya', '2018-10-19 01:10:40', '2018-10-19 01:10:40');
/*!40000 ALTER TABLE `seksyen` ENABLE KEYS */;

-- Dumping structure for table sisdir.unit
CREATE TABLE IF NOT EXISTS `unit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_seksyen` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisdir.unit: ~1 rows (approximately)
/*!40000 ALTER TABLE `unit` DISABLE KEYS */;
INSERT INTO `unit` (`id`, `nama_unit`, `id_seksyen`, `created_at`, `updated_at`) VALUES
	(4, 'Unit Multimedia', 13, '2018-10-22 04:47:47', '2018-10-22 04:47:47'),
	(5, 'Unit Strategik', 13, '2018-10-22 04:50:18', '2018-10-22 04:50:18');
/*!40000 ALTER TABLE `unit` ENABLE KEYS */;

-- Dumping structure for table sisdir.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisdir.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
