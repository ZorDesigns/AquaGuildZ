-- Dumping changes for table gcms.vids
ALTER TABLE `vids` ADD COLUMN `desc` VARCHAR(255) NULL DEFAULT 'staff' AFTER `image`;
-- Dumping structure for table gcms.screenshots
CREATE TABLE IF NOT EXISTS `screenshots` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'intro',
  `desc` varchar(255) DEFAULT 'There is no Description',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- Dumping structure for table gcms.wallpapers
CREATE TABLE IF NOT EXISTS `wallpapers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'intro',
  `desc` varchar(255) DEFAULT 'There is no Description',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;