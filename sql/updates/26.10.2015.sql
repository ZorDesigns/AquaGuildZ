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

-- Dumping structure for table gcms.replies
DROP TABLE IF EXISTS `replies`;
CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `threadID` int(5) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `author` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Dumping data for table gcms.replies: 1 rows
DELETE FROM `replies`;
/*!40000 ALTER TABLE `replies` DISABLE KEYS */;
INSERT INTO `replies` (`id`, `threadID`, `title`, `content`, `author`, `date`) VALUES
	(1, 0, 'Reply: Title One', 'Tests are awesome and we feel upset', '1', '2015-10-26 18:07:41');
/*!40000 ALTER TABLE `replies` ENABLE KEYS */;


-- Dumping structure for table gcms.subscriptions
DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `threadID` int(10) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Dumping data for table gcms.subscriptions: 0 rows
DELETE FROM `subscriptions`;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;


-- Dumping structure for table gcms.threads
DROP TABLE IF EXISTS `threads`;
CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `totalRatings` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` int(10) NOT NULL,
  `tags` varchar(255) NOT NULL DEFAULT 'none',
  `last_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table gcms.threads: 1 rows
DELETE FROM `threads`;
/*!40000 ALTER TABLE `threads` DISABLE KEYS */;
INSERT INTO `threads` (`id`, `title`, `rating`, `totalRatings`, `content`, `author`, `tags`, `last_date`) VALUES
	(1, 'Test: Title One', '', '', 'Tests are awesome and we feel upset sometimes but not all the times', 1, 'ilovetags', '2015-10-26 18:00:39');
/*!40000 ALTER TABLE `threads` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
