CREATE TABLE `order` (
	`id` BIGINT(20) NOT NULL AUTO_INCREMENT,
	`amount` INT(10) NOT NULL,
	`buyer` VARCHAR(255) NOT NULL,
	`receipt_id` VARCHAR(20) NOT NULL,
	`items` VARCHAR(255) NOT NULL,
	`buyer_email` VARCHAR(50) NOT NULL,
	`buyer_ip` VARCHAR(20) NOT NULL,
	`note` TEXT(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
	`city` VARCHAR(20) NOT NULL,
	`phone` VARCHAR(20) NOT NULL,
	`hash_key` VARCHAR(255) NOT NULL,
	`entry_at` DATE NOT NULL,
	`entry_by` INT(10) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;