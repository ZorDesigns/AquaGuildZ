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
(1445548107000, 'Maouzi', 'Twisting Nether', 'Sturmangriff / Charge', 11, 8, 1, 100, 13100, 'internal-record-3674/5/116116485-avatar.jpg', 'Restoration', 'U', '1', 1010),
(1445460592000, 'Galïni', 'Twisting Nether', 'Sturmangriff / Charge', 2, 10, 1, 100, 15285, 'internal-record-3674/160/110485920-avatar.jpg', 'Holy', 'b', '1', 9232),
(1445548296000, 'Baldazzar', 'Twisting Nether', 'Sturmangriff / Charge', 6, 6, 0, 100, 11975, 'internal-record-3674/167/111048615-avatar.jpg', 'Blood', 'd', '1', 1781),
(1445548454000, 'Hajrudin', 'Twisting Nether', 'Sturmangriff / Charge', 3, 2, 0, 100, 11925, 'internal-record-3674/41/115904553-avatar.jpg', 'Marksmanship', 'Y', '1', 2305),
(1445548300000, 'Primohunter', 'Twisting Nether', 'Sturmangriff / Charge', 3, 2, 0, 100, 11030, 'internal-record-3674/251/94009083-avatar.jpg', 'Marksmanship', 'Y', '1', 24825),
(1445548697000, 'Kugar', 'Twisting Nether', 'Sturmangriff / Charge', 9, 2, 1, 100, 13570, 'internal-record-3674/27/115824923-avatar.jpg', 'Destruction', 'V', '1', 10538),
(1445459995000, 'Akalyptos', 'Twisting Nether', 'Sturmangriff / Charge', 3, 10, 0, 100, 14125, 'internal-record-3674/18/95493650-avatar.jpg', 'Marksmanship', 'Y', '1', 2594),
(1445547504000, 'Nistnesous', 'Twisting Nether', 'Sturmangriff / Charge', 8, 5, 0, 100, 23865, 'internal-record-3674/133/93972357-avatar.jpg', 'Arcane', 'e', '1', 188216),
(1445547877000, 'Zaithe', 'Twisting Nether', 'Sturmangriff / Charge', 4, 8, 0, 100, 12190, 'internal-record-3674/228/95024356-avatar.jpg', 'Assassination', 'c', '1', 1061),
(1445547467000, 'Smãs', 'Twisting Nether', 'Sturmangriff / Charge', 1, 2, 0, 100, 22780, 'internal-record-3674/54/95537974-avatar.jpg', 'Fury', 'Z', '1', 33840);

/*!40000 ALTER TABLE `chars` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
