ALTER TABLE `users`
	ADD COLUMN `g_points` TEXT NOT NULL AFTER `avatar`;

ALTER TABLE `users`
	CHANGE COLUMN `g_points` `g_points` INT NOT NULL AFTER `avatar`,
	ADD COLUMN `creep_points` INT NOT NULL AFTER `g_points`,
	ADD COLUMN `saint_points` INT NOT NULL AFTER `creep_points`;

ALTER TABLE `vids`
	DROP COLUMN `image`;
