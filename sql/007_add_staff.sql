DROP TABLE IF EXISTS `magc`.`staffs`;

CREATE  TABLE IF NOT EXISTS `magc`.`staffs` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `title` VARCHAR(45) NULL ,
  `office` VARCHAR(45) NULL ,
  `phone` VARCHAR(20) NULL ,
  `email` VARCHAR(55) NULL ,
  `image_path` VARCHAR(100) NULL ,
  `personal_website` VARCHAR(100) NULL ,
  `personal_work` VARCHAR(100) NULL ,
  `student_work` VARCHAR(100) NULL ,
  `description` VARCHAR(2000) NULL ,
  PRIMARY KEY (`id`) );
