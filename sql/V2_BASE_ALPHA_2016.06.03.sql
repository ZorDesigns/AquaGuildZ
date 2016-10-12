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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gcms.categories: 3 rows
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `icon`) VALUES
	(1, 'General', NULL),
	(2, 'Officer\'s Corner', NULL),
	(3, 'Developer\'s Corner', NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table gcms.com_slides
DROP TABLE IF EXISTS `com_slides`;
CREATE TABLE IF NOT EXISTS `com_slides` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1,
  `lnk` text CHARACTER SET latin1,
  `desc` text CHARACTER SET latin1,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'noslider',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.com_slides: 2 rows
DELETE FROM `com_slides`;
/*!40000 ALTER TABLE `com_slides` DISABLE KEYS */;
INSERT INTO `com_slides` (`id`, `title`, `lnk`, `desc`, `image`) VALUES
	(1, 'Icy Veins', 'http://icy-veins.com', 'Icy Veins! The best place to read about your class! Cool Features and Premade Macros', 'noslider'),
	(2, 'MMO Champion', 'http://facebook.com', 'More News from MMO-Champion about World of Warcraft!', 'recruit');
/*!40000 ALTER TABLE `com_slides` ENABLE KEYS */;


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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table gcms.recruits
DROP TABLE IF EXISTS `recruits`;
CREATE TABLE IF NOT EXISTS `recruits` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` int(10) NOT NULL,
  `character` varchar(255) NOT NULL,
  `battletag` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `spec` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'New',
  `approved` int(11) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q4_info` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q10` varchar(255) NOT NULL,
  `q11` varchar(255) NOT NULL,
  `q11_info` varchar(255) NOT NULL,
  `q12` varchar(255) NOT NULL,
  `q13` varchar(255) NOT NULL,
  `q14` varchar(255) NOT NULL,
  `q15` varchar(255) NOT NULL,
  `q16` varchar(255) NOT NULL,
  `last_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table gcms.recruits_panel
DROP TABLE IF EXISTS `recruits_panel`;
CREATE TABLE IF NOT EXISTS `recruits_panel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `class` varchar(50) DEFAULT NULL,
  `class_img` varchar(50) DEFAULT NULL,
  `spec1` varchar(50) DEFAULT NULL,
  `spec1_info` varchar(50) DEFAULT '0',
  `spec2` varchar(50) DEFAULT NULL,
  `spec2_info` varchar(50) DEFAULT '0',
  `spec3` varchar(50) DEFAULT NULL,
  `spec3_info` varchar(50) DEFAULT '0',
  `spec4` varchar(50) DEFAULT NULL,
  `spec4_info` varchar(50) DEFAULT '0',
  `closed` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.recruits_panel: 12 rows
DELETE FROM `recruits_panel`;
/*!40000 ALTER TABLE `recruits_panel` DISABLE KEYS */;
INSERT INTO `recruits_panel` (`id`, `class`, `class_img`, `spec1`, `spec1_info`, `spec2`, `spec2_info`, `spec3`, `spec3_info`, `spec4`, `spec4_info`, `closed`) VALUES
	(1, 'Warrior', 'class_warrior', 'ability_warrior_defensivestance', '0', 'ability_warrior_savageblow', '0', 'ability_warrior_innerrage', '0', '0', '1', '0'),
	(2, 'Paladin', 'class_paladin', 'spell_holy_holybolt', '0', 'spell_holy_auraoflight', '0', 'ability_paladin_shieldofthetemplar', '0', '0', '1', '0'),
	(3, 'Hunter', 'class_hunter', 'ability_hunter_beasttaming', '0', 'ability_hunter_explosiveshot', '0', 'ability_marksmanship', '0', '0', '1', '0'),
	(4, 'Rogue', 'class_rogue', 'ability_rogue_eviscerate', '0', 'ability_backstab', '0', 'ability_stealth', '0', '0', '1', '0'),
	(5, 'Priest', 'class_priest', 'spell_holy_powerwordshield', '0', 'spell_holy_guardianspirit', '0', 'spell_shadow_shadowform', '0', '0', '1', '0'),
	(6, 'Death Knight', 'class_deathknight', 'spell_deathknight_unholypresence', '0', 'spell_deathknight_frostpresence', '0', 'spell_deathknight_bloodpresence', '0', '0', '1', '0'),
	(7, 'Shaman', 'class_shaman', 'spell_nature_lightning', '0', 'spell_nature_lightningshield', '0', 'spell_nature_healingwavelesser', '0', '0', '1', '0'),
	(8, 'Mage', 'class_mage', 'spell_frost_frostbolt02', '0', 'spell_fire_flamebolt', '0', 'spell_arcane_blast', '0', '0', '1', '0'),
	(9, 'Warlock', 'class_warlock', 'spell_shadow_rainoffire', '0', 'spell_shadow_deathcoil', '0', 'spell_shadow_metamorphosis', '0', '0', '1', '0'),
	(10, 'Monk', 'class_monk', 'monk_stance_wiseserpent', '0', 'monk_stance_whitetiger', '0', 'monk_stance_drunkenox', '0', '0', '1', '0'),
	(11, 'Druid', 'class_druid', 'ability_druid_catform', '0', 'ability_racial_bearform', '0', 'spell_nature_forceofnature', '0', 'ability_druid_improvedtreeform', '0', '0'),
	(12, 'Demon Hunter', 'class_demonhunter', '', '1', 'ability_demonhunter_specdps', '0', 'ability_demonhunter_spectank', '0', NULL, '1', '1');
/*!40000 ALTER TABLE `recruits_panel` ENABLE KEYS */;



-- Dumping structure for table gcms.recr_replies
DROP TABLE IF EXISTS `recr_replies`;
CREATE TABLE IF NOT EXISTS `recr_replies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `recrID` int(5) NOT NULL,
  `content` text NOT NULL,
  `author` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table gcms.replies
DROP TABLE IF EXISTS `replies`;
CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `threadID` int(5) NOT NULL,
  `title` mediumtext NOT NULL,
  `content` mediumtext NOT NULL,
  `author` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table gcms.screenshots
DROP TABLE IF EXISTS `screenshots`;
CREATE TABLE IF NOT EXISTS `screenshots` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text,
  `image` varchar(255) DEFAULT 'intro',
  `desc` varchar(255) DEFAULT 'There is no Description',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table gcms.slides
DROP TABLE IF EXISTS `slides`;
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alt` text CHARACTER SET latin1,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'staff',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.slides: 3 rows
DELETE FROM `slides`;
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` (`id`, `alt`, `image`) VALUES
	(1, NULL, 'recruit'),
	(2, NULL, 'councilhell'),
	(3, NULL, 'hellfireass');
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- Data exporting was unselected.


-- Dumping structure for table gcms.threads
DROP TABLE IF EXISTS `threads`;
CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat` tinytext CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `rating` varchar(255) CHARACTER SET utf8 NOT NULL,
  `totalRatings` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hot` int(2) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'none',
  `last_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table gcms.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `bTag` text,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `rank` int(11) DEFAULT NULL,
  `avatar` text NOT NULL,
  `g_points` int(11) NOT NULL,
  `creep_points` int(11) NOT NULL,
  `saint_points` int(11) NOT NULL,
  `signup_date` datetime NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table gcms.version
DROP TABLE IF EXISTS `version`;
CREATE TABLE IF NOT EXISTS `version` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.version: 3 rows
DELETE FROM `version`;
/*!40000 ALTER TABLE `version` DISABLE KEYS */;
INSERT INTO `version` (`id`, `text`) VALUES
	(1, '1.0 ALPHA'),
	(2, '1.5 BETA'),
	(3, '2.0 ALPHA'),
	(4, '2.1 ALPHA');
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table gcms.vids: 2 rows
DELETE FROM `vids`;
/*!40000 ALTER TABLE `vids` DISABLE KEYS */;
INSERT INTO `vids` (`id`, `contentlnk`, `title`, `image`, `desc`) VALUES
	(1, 'M6s04rFylfQ', 'Intro', 'vids', 'This is a small Description for the Video'),
	(2, 'M6s04rFylfQ', 'Intro 2', 'vids', 'This is a small Description for the Video');
/*!40000 ALTER TABLE `vids` ENABLE KEYS */;


-- Dumping structure for table gcms.wallpapers
DROP TABLE IF EXISTS `wallpapers`;
CREATE TABLE IF NOT EXISTS `wallpapers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'intro',
  `desc` varchar(255) DEFAULT 'There is no Description',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping structure for table gcms.wallpapers
DROP TABLE IF EXISTS `youtubers`;
CREATE TABLE `youtubers` (
	`id` INT(5) NOT NULL AUTO_INCREMENT,
	`name` TEXT NOT NULL,
	`link` TEXT NULL,
	`image` TEXT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=MyISAM
AUTO_INCREMENT=4;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
