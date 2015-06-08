-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Version del servidor:         5.5.27 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(10) NOT NULL,
  `avatar` VARCHAR(255) CHARACTER SET utf8 NOT NULL DEFAULT '0-0.jpg',
  `blizz` TINYINT(1) DEFAULT '0',
  `class` VARCHAR(255) CHARACTER SET utf8 NOT NULL,
  `firstName` VARCHAR(255) CHARACTER SET utf8 NOT NULL,
  `lastName` VARCHAR(255) CHARACTER SET utf8 NOT NULL,
  `character` INT(10) NOT NULL DEFAULT '0',
  `vote_points` INT(10) NOT NULL DEFAULT '0',
  `char_realm` INT(10) NOT NULL DEFAULT '1',
  `registerIp` VARCHAR(30) CHARACTER SET utf8 NOT NULL DEFAULT '127.0.0.1',
  `country` VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL,
  `birth` DATE DEFAULT NULL,
  `quest1` INT(2) NOT NULL DEFAULT '0',
  `ans1` VARCHAR(50) CHARACTER SET utf8 NOT NULL DEFAULT 'undefined',
  PRIMARY KEY (`id`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;