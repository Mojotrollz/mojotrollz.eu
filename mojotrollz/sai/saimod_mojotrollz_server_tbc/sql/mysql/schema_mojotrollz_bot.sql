CREATE TABLE `mojotrollz_bot` (
	`account_id` INT(11) UNSIGNED NOT NULL,
	`char_id` INT(11) UNSIGNED NOT NULL,
	`server_id` INT(11) UNSIGNED NOT NULL,
	UNIQUE INDEX `account_id` (`account_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;