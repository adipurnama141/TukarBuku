CREATE TABLE `purchase` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`IDuser` INT(11) NOT NULL DEFAULT '0',
	`IDproduct` INT(20) NOT NULL DEFAULT '0',
	`Qty` INT(11) NOT NULL DEFAULT '0',
	`Consignee` TEXT NULL,
	`Address` TEXT NULL,
	`Postal` TEXT NULL,
	`Phone` TEXT NULL,
	`CCN` TEXT NULL,
	`CVV` TEXT NULL,
	`Timestamp` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`ID`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=4
;
