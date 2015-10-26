
-- Volcando estructura para tabla website.forum_replies
DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
id - INT - 5 Length - Primary Key - AI,
threadID - VARCHAR - 255 Length,
email - VARCHAR - 255 Length,
  PRIMARY KEY (`id`)
) ENGINE=MYISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
