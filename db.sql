-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table drawmycity.drawings
CREATE TABLE IF NOT EXISTS `drawings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` float(9,6) NOT NULL DEFAULT '0.000000',
  `lon` float(9,6) NOT NULL DEFAULT '0.000000',
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table drawmycity.drawings: ~7 rows (approximately)
/*!40000 ALTER TABLE `drawings` DISABLE KEYS */;
INSERT INTO `drawings` (`id`, `city`, `lat`, `lon`, `price`, `created_at`, `updated_at`) VALUES
	(1, 'Seoul', 37.560001, 126.970001, 1000.00, NULL, NULL),
	(2, 'Lisbon', 38.720001, -9.140000, 800.00, NULL, NULL),
	(53, 'Berlin', 52.520000, 13.400000, 8200.00, '2020-06-27 23:19:52', '2020-06-27 23:19:53'),
	(54, 'Amsterdam', 52.368843, 4.888116, 500.00, NULL, NULL),
	(55, 'New York', 40.714355, -73.998100, 900.00, '2020-06-29 11:56:43', NULL),
	(56, 'Kuala Lumpur', 3.142204, 101.697006, 500.00, '2020-06-29 12:07:37', '2020-06-29 12:07:38'),
	(57, 'Penang', 5.414100, 100.328796, 400.00, '2020-06-29 17:16:04', '2020-06-29 17:16:05');
/*!40000 ALTER TABLE `drawings` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
