CREATE TABLE `like_db` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`UserID` INT(11) NULL DEFAULT '0',
	`ProductID` INT(11) NULL DEFAULT '0',
	PRIMARY KEY (`ID`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=39
;


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
AUTO_INCREMENT=12
;

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
AUTO_INCREMENT=11
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
AUTO_INCREMENT=15
;

