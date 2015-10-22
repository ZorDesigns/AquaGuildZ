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

-- Dumping structure for table gcms.chars
DROP TABLE IF EXISTS `chars`;
CREATE TABLE IF NOT EXISTS `chars` (
  `lastModified` bigint(20) DEFAULT NULL,
  `name` tinytext NOT NULL,
  `realm` text,
  `battlegroup` text,
  `class` int(11) DEFAULT NULL,
  `race` int(11) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `achievementPoints` bigint(20) DEFAULT NULL,
  `thumbnail` text,
  `talent` text,
  `calcClass` text,
  `faction` tinytext,
  `totalHonorableKills` bigint(20) DEFAULT NULL,
  UNIQUE KEY `UNIQUE` (`name`(12))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
