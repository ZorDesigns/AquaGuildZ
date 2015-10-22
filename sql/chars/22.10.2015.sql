-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.15-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table gcms.chars: 2 rows
DELETE FROM `chars`;
/*!40000 ALTER TABLE `chars` DISABLE KEYS */;
INSERT INTO `chars` (`lastModified`, `name`, `realm`, `battlegroup`, `class`, `race`, `gender`, `level`, `achievementPoints`, `thumbnail`, `talent`, `calcClass`, `faction`, `totalHonorableKills`) VALUES
	(1444728050000, 'Baldazzar', 'Twisting Nether', 'Sturmangriff / Charge', 6, 6, 0, 100, 11835, 'internal-record-3674/167/111048615-avatar.jpg', 'Blood', 'd', '1', 1777),
	(1444760033000, 'Maouzi', 'Twisting Nether', 'Sturmangriff / Charge', 11, 8, 1, 100, 12955, 'internal-record-3674/5/116116485-avatar.jpg', 'Restoration', 'U', '1', 1008);
/*!40000 ALTER TABLE `chars` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
