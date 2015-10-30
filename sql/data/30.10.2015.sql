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
-- Dumping data for table gcms.categories: 3 rows
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `icon`) VALUES
	(1, 'General', NULL),
	(2, 'Officer\'s Corner', NULL),
	(3, 'Developer\'s Corner', NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping data for table gcms.news: 2 rows
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `author`, `date`, `content`, `title`, `comments`, `image`) VALUES
	(1, 0, '2015-10-23 01:15:35', 'Μια πολλή καλή αρχή για το Guild μας! Μπράβο σε όλους που συμμετείχαν στο Encounter και διαλύσαμε το 2ο Boss του Hellfire Citadel (HFC)!\r\nΣυνχαρητήρια σε όλους και καλή συνέχεια.', 'Mythic: Hellfire Assault', 0, 'hellfireass'),
	(2, 0, '0000-00-00 00:00:00', 'Test News: English', 'Test News: English', 0, 'hellfireass');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping data for table gcms.replies: 1 rows
DELETE FROM `replies`;
/*!40000 ALTER TABLE `replies` DISABLE KEYS */;
INSERT INTO `replies` (`id`, `threadID`, `title`, `content`, `author`, `date`) VALUES
	(52, 1, '', '1st finished reply!', 'GreekTheGeek', '2015-10-28 13:43:35');
/*!40000 ALTER TABLE `replies` ENABLE KEYS */;

-- Dumping data for table gcms.slides: 1 rows
DELETE FROM `slides`;
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` (`id`, `alt`, `image`) VALUES
	(1, NULL, 'recruit');
/*!40000 ALTER TABLE `slides` ENABLE KEYS */;

-- Dumping data for table gcms.subcategories: 5 rows
DELETE FROM `subcategories`;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` (`uid`, `title`, `desc`, `cat`) VALUES
	(1, 'News', 'Great News from our Guild', '1'),
	(2, 'Chit Chat', 'Members coffee area', '1'),
	(3, 'Decisions', 'Decisions... Decisions... Decisions', '2'),
	(4, 'Chit Chat', 'Officers chill room', '2'),
	(5, 'Requests', 'Here you can make requests for the developers', '3');
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;

-- Dumping data for table gcms.subscriptions: 0 rows
DELETE FROM `subscriptions`;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;

-- Dumping data for table gcms.threads: 4 rows
DELETE FROM `threads`;
/*!40000 ALTER TABLE `threads` DISABLE KEYS */;
INSERT INTO `threads` (`id`, `cat`, `title`, `rating`, `totalRatings`, `content`, `author`, `tags`, `last_date`) VALUES
	(1, '1', 'Lorem Ipsum 1', '5', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'ilovetags', '2015-10-26 18:00:39'),
	(2, '1', 'Lorem Ipsum 2', '0', '0', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'ilovetags', '2015-10-27 01:00:39'),
	(4, '2', 'Lorem Ipsum 4', '0', '0', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'testsetsetst', '2015-10-29 14:17:14'),
	(3, '2', 'Lorem Ipsum 3', '5', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'none', '2015-10-27 01:00:39');
/*!40000 ALTER TABLE `threads` ENABLE KEYS */;

-- Dumping data for table gcms.vids: 1 rows
DELETE FROM `vids`;
/*!40000 ALTER TABLE `vids` DISABLE KEYS */;
INSERT INTO `vids` (`id`, `contentlnk`, `title`, `image`) VALUES
	(1, 'https://www.youtube.com/watch?v=M6s04rFylfQ', 'Intro', 'intro');
/*!40000 ALTER TABLE `vids` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
