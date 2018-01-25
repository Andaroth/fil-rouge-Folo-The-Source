# FilRouge5 - FoloTheSource - SQL

* ## dbname = 'FoloTheSource'

    * ### 'newsletter' :

CREATE TABLE `FoloTheSource`.`newsletter` (
  `id` SMALLINT NOT NULL AUTO_INCREMENT ,
  `email` VARCHAR(100) NOT NULL ,
  `subscriptionDate` DATETIME NOT NULL ,
  PRIMARY KEY (`id`)) ENGINE = InnoDB;
