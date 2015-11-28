CREATE TABLE `version` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`text` TEXT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM
AUTO_INCREMENT=2
;

INSERT INTO `gcms`.`version` (`id`, `text`) VALUES (1, '1.0 ALPHA');
INSERT INTO `gcms`.`version` (`id`, `text`) VALUES (2, '1.5 BETA');