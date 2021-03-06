CREATE DATABASE friendsbook;

USE friendsbook;

CREATE TABLE `user` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(50) NOT NULL DEFAULT '0',
	`email` VARCHAR(100) NOT NULL DEFAULT '0',
	`password` VARCHAR(100) NOT NULL DEFAULT '0',
	PRIMARY KEY (`ID`),
	UNIQUE INDEX `user`(`username`)
) ENGINE = InnoDB;

CREATE TABLE `tans` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userID` INT NOT NULL,
  `tan` VARCHAR(13) NOT NULL,
  `used` BOOLEAN NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`userID`) REFERENCES `user`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;

CREATE TABLE `entries` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `userID` INT NOT NULL ,
  `tanID` INT NOT NULL ,
  `vorname` LONGTEXT NOT NULL ,
  `nachname` LONGTEXT NOT NULL ,
  `geburtstag` LONGTEXT DEFAULT NULL ,
  `wohnort` LONGTEXT DEFAULT NULL ,
  `strasse` LONGTEXT DEFAULT NULL ,
  `kennenUns` LONGTEXT NOT NULL ,
  `festnetz` LONGTEXT DEFAULT NULL ,
  `handynummer` LONGTEXT DEFAULT NULL ,
  `email` LONGTEXT NOT NULL ,
  `hobbies` LONGTEXT DEFAULT NULL ,
  `berufswunsch` LONGTEXT DEFAULT NULL ,
  `essen` LONGTEXT DEFAULT NULL ,
  `insel` LONGTEXT DEFAULT NULL ,
  `film` LONGTEXT DEFAULT NULL ,
  `sport` LONGTEXT DEFAULT NULL ,
  `charakter` LONGTEXT DEFAULT NULL ,
  `tier` LONGTEXT DEFAULT NULL ,
  `musik` LONGTEXT DEFAULT NULL ,
  `game` LONGTEXT DEFAULT NULL ,
  `alk` LONGTEXT DEFAULT NULL ,
  `story` LONGTEXT DEFAULT NULL ,
  `absturz` LONGTEXT DEFAULT NULL ,
  `trinkspiel` LONGTEXT DEFAULT NULL ,
  PRIMARY KEY (`id`),
  UNIQUE (`tanID`),
  FOREIGN KEY (`userID`) REFERENCES `user`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`tanID`) REFERENCES `tans`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
