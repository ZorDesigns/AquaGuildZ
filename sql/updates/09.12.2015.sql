ALTER TABLE `users`
	CHANGE COLUMN `name` `firstname` VARCHAR(50) NOT NULL AFTER `password`,
	ADD COLUMN `lastname` VARCHAR(50) NOT NULL AFTER `firstname`;