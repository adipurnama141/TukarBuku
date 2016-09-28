CREATE TABLE `product` (
	`IDproduct` INT(11) NOT NULL AUTO_INCREMENT,
	`Title` TEXT NOT NULL,
	`Price` TEXT NOT NULL,
	`Description` TEXT NOT NULL,
	`IDuser` INT(11) NOT NULL,
	`nLike` INT(11) NOT NULL DEFAULT '0',
	`nPurchase` INT(11) NOT NULL DEFAULT '0',
	`Timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`IDproduct`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=6
;

CREATE TABLE `user` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`FullName` TEXT NOT NULL,
	`Username` TEXT NOT NULL,
	`Email` TEXT NOT NULL,
	`Password` TEXT NOT NULL,
	`Address` TEXT NOT NULL,
	`PostalCode` TEXT NOT NULL,
	`PhoneNumber` TEXT NOT NULL,
	PRIMARY KEY (`ID`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=8
;
