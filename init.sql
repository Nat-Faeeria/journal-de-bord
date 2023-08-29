CREATE DATABASE IF NOT EXISTS jdb;
USE jdb;

DROP TABLE IF EXISTS `Entries`;

CREATE TABLE `Entries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `dateEcriture` date DEFAULT NULL,
  `pensee` text,
  PRIMARY KEY (`id`)
);


INSERT INTO `Entries` VALUES (6,'Murl','1972-09-09','And she thought it over a little faster?\" said a.'),(7,'Zaria','1974-01-19','My notion was that it was as long as there.'),(8,'Casimir','1997-07-21','The Dormouse again took a great hurry. An.'),(9,'Batz','1972-01-16','I goes like a serpent. She had already heard her.'),(10,'Iva','1980-07-19','Cat. \'Do you mean that you have of putting.');