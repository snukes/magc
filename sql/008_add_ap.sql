DROP TABLE IF EXISTS `magc`.`programs`;

CREATE  TABLE IF NOT EXISTS `magc`.`programs` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `image_path` VARCHAR(100) NULL ,
  `faculty_contact` VARCHAR(100) NULL ,
  `catalog_page` VARCHAR(20) NULL ,
  `description` VARCHAR(10000) NULL ,
  PRIMARY KEY (`id`) );
