CREATE TABLE `mojotrollz_beta` (
	`code` CHAR(6) NOT NULL,
	`user` INT(11) NOT NULL,
	`user_new` INT(11) NULL DEFAULT NULL,
	`date_generated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`date_redeemed` TIMESTAMP NULL DEFAULT NULL,
	PRIMARY KEY (`code`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;