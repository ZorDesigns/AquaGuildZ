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

-- Dumping structure for table gcms.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `icon` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table gcms.categories: 3 rows
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `icon`) VALUES
	(1, 'General', NULL),
	(2, 'Officer\'s Corner', NULL),
	(3, 'Developer\'s Corner', NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.news: 4 rows
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `author`, `date`, `content`, `title`, `comments`, `image`) VALUES
	(1, 0, '2015-10-23 01:15:35', 'Μια πολλή καλή αρχή για το Guild μας! Μπράβο σε όλους που συμμετείχαν στο Encounter και διαλύσαμε το 2ο Boss του Hellfire Citadel (HFC)!\r\nΣυνχαρητήρια σε όλους και καλή συνέχεια.', 'Mythic: Hellfire Assault', 0, 'hellfireass'),
	(2, 0, '0000-00-00 00:00:00', 'Test News: English', 'Test News: English', 0, 'hellfireass'),
	(3, 0, '2015-11-24 04:42:36', 'Test News: English', 'asdasd', 0, 'hellfireass'),
	(4, 0, '2015-11-24 04:43:13', 'Μια πολλή καλή αρχή για το Guild μας! Μπράβο σε όλους που συμμετείχαν στο Encounter και διαλύσαμε το 2ο Boss του Hellfire Citadel (HFC)!\r\nΣυνχαρητήρια σε όλους και καλή συνέχεια.', 'tests', 0, 'hellfireass');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


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
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

-- Dumping data for table gcms.replies: 1 rows
DELETE FROM `replies`;
/*!40000 ALTER TABLE `replies` DISABLE KEYS */;
INSERT INTO `replies` (`id`, `threadID`, `title`, `content`, `author`, `date`) VALUES
	(52, 1, '', '1st finished reply!', 'GreekTheGeek', '2015-10-28 13:43:35');
/*!40000 ALTER TABLE `replies` ENABLE KEYS */;


-- Dumping structure for table gcms.screenshots
DROP TABLE IF EXISTS `screenshots`;
CREATE TABLE IF NOT EXISTS `screenshots` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'intro',
  `desc` varchar(255) DEFAULT 'There is no Description',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.screenshots: 0 rows
DELETE FROM `screenshots`;
/*!40000 ALTER TABLE `screenshots` DISABLE KEYS */;
/*!40000 ALTER TABLE `screenshots` ENABLE KEYS */;


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


-- Dumping structure for table gcms.subcategories
DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE IF NOT EXISTS `subcategories` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `cat` text NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table gcms.subcategories: 5 rows
DELETE FROM `subcategories`;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` (`uid`, `title`, `desc`, `cat`, `rank`) VALUES
	(1, 'News', 'Great News from our Guild', '1', 1),
	(2, 'Chit Chat', 'Members coffee area', '1', 1),
	(3, 'Decisions', 'Decisions... Decisions... Decisions', '2', 3),
	(4, 'Chit Chat', 'Officers chill room', '2', 3),
	(5, 'Requests', 'Here you can make requests for the developers', '3', 1);
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;


-- Dumping structure for table gcms.subscriptions
DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `threadID` int(10) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gcms.subscriptions: 0 rows
DELETE FROM `subscriptions`;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;


-- Dumping structure for table gcms.threads
DROP TABLE IF EXISTS `threads`;
CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat` tinytext NOT NULL,
  `title` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `totalRatings` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` int(10) NOT NULL,
  `tags` varchar(255) NOT NULL DEFAULT 'none',
  `last_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table gcms.threads: 8 rows
DELETE FROM `threads`;
/*!40000 ALTER TABLE `threads` DISABLE KEYS */;
INSERT INTO `threads` (`id`, `cat`, `title`, `rating`, `totalRatings`, `content`, `author`, `tags`, `last_date`) VALUES
	(1, '1', 'Lorem Ipsum 1', '5', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'ilovetags', '2015-10-26 18:00:39'),
	(2, '1', 'Lorem Ipsum 2', '0', '0', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'ilovetags', '2015-10-27 01:00:39'),
	(4, '2', 'Lorem Ipsum 4', '0', '0', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'testsetsetst', '2015-10-29 14:17:14'),
	(3, '2', 'Lorem Ipsum 3', '5', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'none', '2015-10-27 01:00:39'),
	(5, '1', 'asdasd', '5', '1', '<p>testsets</p>\r\n', 0, 'tets', '2015-11-19 01:41:52'),
	(6, '1', 'Lorem Ipsum 3', '', '', '<p><strong>Bold</strong></p>\r\n\r\n<p><em>Italic <strong>Bold Italic</strong></em></p>\r\n\r\n<p><s>Crossed</s><em>&nbsp;<s>Crossed Italic</s></em>&nbsp;<strong><em><s>Crossed Italic Bold</s></em></strong></p>\r\n\r\n<p>List:</p>\r\n\r\n<ol>\r\n	<li>One</li>\r\n	<li>Two</li>\r\n	<li>Three</li>\r\n</ol>\r\n\r\n<p>Not numbered List</p>\r\n\r\n<ul>\r\n	<li>One</li>\r\n	<li>Two</li>\r\n	<li>Three</li>\r\n</ul>\r\n\r\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">Container</div>\r\n\r\n<p>WoWHead Item:</p>\r\n\r\n<a href="//www.wowhead.com/item=25697" class="q3" rel="gems=23121&amp;ench=2647&amp;pcs=25695:25696:25697">[Felstalker Bracers]</a>\r\n\r\n\r\n<p>Image:&nbsp;</p>\r\n\r\n<p><img alt="" src="http://wow.zamimg.com/uploads/screenshots/resized/489903.jpg" style="height:218px; width:200px" /></p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>One</td>\r\n			<td>Two</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Three</td>\r\n			<td>Four</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Five</td>\r\n			<td>Six</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Youtube Video:</p>\r\n\r\n<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/mHXdphhuQeQ" width="640"></iframe></p>\r\n', 0, 'test2', '2015-11-19 01:49:34'),
	(7, '3', 'Decisions', '5', '1', '<p>DecisionsDecisionsDecisionsDecisions</p>\r\n', 0, 'decisions', '2015-11-19 22:46:48'),
	(8, '1', 'News', '', '', '<p>This is the News!</p>\r\n', 0, 'news', '2015-11-19 22:49:15');
/*!40000 ALTER TABLE `threads` ENABLE KEYS */;


-- Dumping structure for table gcms.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `bTag` text,
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
INSERT INTO `users` (`uid`, `email`, `bTag`, `password`, `name`, `rank`, `avatar`, `signup_date`) VALUES
	(1, 'alex_pap_2010@live.com', 'GreekTheGeek', 'aeb34368c5d53aee32431b5386f71c56', 'Alexandros Papadopoulos', 4, '', 0),
	(2, 'alexfred@live.com', 'FailZorD', 'aeb34368c5d53aee32431b5386f71c56', 'Alex Papadopoulos', 2, '', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table gcms.version
DROP TABLE IF EXISTS `version`;
CREATE TABLE IF NOT EXISTS `version` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.version: 0 rows
DELETE FROM `version`;
/*!40000 ALTER TABLE `version` DISABLE KEYS */;
INSERT INTO `version` (`id`, `text`) VALUES
	(1, '1.0 ALPHA'),
	(2, '1.5 BETA');
/*!40000 ALTER TABLE `version` ENABLE KEYS */;


-- Dumping structure for table gcms.vids
DROP TABLE IF EXISTS `vids`;
CREATE TABLE IF NOT EXISTS `vids` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `contentlnk` text CHARACTER SET latin1,
  `title` text CHARACTER SET latin1,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'staff',
  `desc` varchar(255) DEFAULT 'staff',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.vids: 2 rows
DELETE FROM `vids`;
/*!40000 ALTER TABLE `vids` DISABLE KEYS */;
INSERT INTO `vids` (`id`, `contentlnk`, `title`, `image`, `desc`) VALUES
	(1, 'https://www.youtube.com/watch?v=M6s04rFylfQ', 'Intro', 'vids', 'This is a small Description for the Video'),
	(2, 'https://www.youtube.com/watch?v=M6s04rFylfQ', 'Intro 2', 'vids', 'This is a small Description for the Video');
/*!40000 ALTER TABLE `vids` ENABLE KEYS */;


-- Dumping structure for table gcms.wallpapers
DROP TABLE IF EXISTS `wallpapers`;
CREATE TABLE IF NOT EXISTS `wallpapers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'intro',
  `desc` varchar(255) DEFAULT 'There is no Description',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.wallpapers: 0 rows
DELETE FROM `wallpapers`;
/*!40000 ALTER TABLE `wallpapers` DISABLE KEYS */;
/*!40000 ALTER TABLE `wallpapers` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
