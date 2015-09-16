CREATE TABLE `mojotrollz_addon` (
	`name` CHAR(50) NOT NULL,
	`version` CHAR(50) NULL DEFAULT NULL,
	`description` TEXT NULL,
	`link_1_12_1` TEXT NULL,
	`link_2_4_3` TEXT NULL,
	`link_3_3_5a` TEXT NULL,
	PRIMARY KEY (`name`)
)
ENGINE=InnoDB
;
