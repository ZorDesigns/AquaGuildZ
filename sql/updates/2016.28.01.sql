ALTER TABLE `threads`
ALTER `author` DROP DEFAULT;
ALTER TABLE `threads` CHANGE COLUMN `author` `author` VARCHAR(50) NOT NULL AFTER `content`;