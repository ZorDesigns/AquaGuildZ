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

-- Dumping data for table gcms.chars: 2 rows
DELETE FROM `chars`;
/*!40000 ALTER TABLE `chars` DISABLE KEYS */;
INSERT INTO `chars` (`lastModified`, `name`, `realm`, `battlegroup`, `class`, `race`, `gender`, `level`, `achievementPoints`, `thumbnail`, `talent`, `calcClass`, `faction`, `totalHonorableKills`) VALUES
	(1444728050000, 'Baldazzar', 'Twisting Nether', 'Sturmangriff / Charge', 6, 6, 0, 100, 11835, 'internal-record-3674/167/111048615-avatar.jpg', 'Blood', 'd', '1', 1777),
	(1444760033000, 'Maouzi', 'Twisting Nether', 'Sturmangriff / Charge', 11, 8, 1, 100, 12955, 'internal-record-3674/5/116116485-avatar.jpg', 'Restoration', 'U', '1', 1008);
/*!40000 ALTER TABLE `chars` ENABLE KEYS */;


-- Dumping structure for table gcms.news
DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` int(10) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `content` text,
  `title` mediumtext,
  `comments` int(10) DEFAULT '0',
  `image` varchar(255) DEFAULT 'staff',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.news: 2 rows
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `author`, `date`, `content`, `title`, `comments`, `image`) VALUES
	(1, 0, '2015-10-23 01:15:35', 'Μια πολλή καλή αρχή για το Guild μας! Μπράβο σε όλους που συμμετείχαν στο Encounter και διαλύσαμε το 2ο Boss του Hellfire Citadel (HFC)!\r\nΣυνχαρητήρια σε όλους και καλή συνέχεια.', 'Mythic: Hellfire Assault', 0, 'hellfireass'),
	(2, 0, '0000-00-00 00:00:00', 'sadasd', 'asdasd', 0, 'hellfireass');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


-- Dumping structure for table gcms.progress
DROP TABLE IF EXISTS `progress`;
CREATE TABLE IF NOT EXISTS `progress` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `raid` tinytext,
  `name` text,
  `kills` tinyint(4) DEFAULT NULL,
  `diff` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.progress: 4 rows
DELETE FROM `progress`;
/*!40000 ALTER TABLE `progress` DISABLE KEYS */;
INSERT INTO `progress` (`id`, `raid`, `name`, `kills`, `diff`) VALUES
	(1, 'BRF', 'Blackhand', 2, '1'),
	(2, 'BRF', 'Blackhand ', 3, '2'),
	(3, 'HFC', 'Archimonde', 10, '2'),
	(4, 'HFC', 'Archimonde', 0, '1');
/*!40000 ALTER TABLE `progress` ENABLE KEYS */;


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
	(1, 0, 'Dick', 'Dicks are not awesome', '1', '2015-10-26 18:07:41');
/*!40000 ALTER TABLE `replies` ENABLE KEYS */;


-- Dumping structure for table gcms.slides
DROP TABLE IF EXISTS `slides`;
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alt` text CHARACTER SET latin1,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'staff',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.slides: 1 rows
DELETE FROM `slides`;
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` (`id`, `alt`, `image`) VALUES
	(1, NULL, 'recruit');
/*!40000 ALTER TABLE `slides` ENABLE KEYS */;


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
	(1, 'Hello', '', '', 'Dicks are awesome', 1, 'ilovetags', '2015-10-26 18:00:39');
/*!40000 ALTER TABLE `threads` ENABLE KEYS */;


-- Dumping structure for table gcms.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rank` int(11) DEFAULT NULL,
  `avatar` text NOT NULL,
  `signup_date` int(10) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.users: 2 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`uid`, `email`, `password`, `name`, `rank`, `avatar`, `signup_date`) VALUES
	(1, 'alex_pap_2010@live.com', 'aeb34368c5d53aee32431b5386f71c56', 'Alexandros Papadopoulos', 3, '', 0),
	(2, 'alexfred@live.com', 'aeb34368c5d53aee32431b5386f71c56', 'Alex', 0, '', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table gcms.vids
DROP TABLE IF EXISTS `vids`;
CREATE TABLE IF NOT EXISTS `vids` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `contentlnk` text CHARACTER SET latin1,
  `title` text CHARACTER SET latin1,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'staff',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.vids: 1 rows
DELETE FROM `vids`;
/*!40000 ALTER TABLE `vids` DISABLE KEYS */;
INSERT INTO `vids` (`id`, `contentlnk`, `title`, `image`) VALUES
	(1, 'https://www.youtube.com/watch?v=M6s04rFylfQ', 'Intro', 'intro');
/*!40000 ALTER TABLE `vids` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
