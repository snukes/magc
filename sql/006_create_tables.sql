SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `magc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `magc` ;

-- -----------------------------------------------------
-- Table `magc`.`artists`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magc`.`artists` ;

CREATE  TABLE IF NOT EXISTS `magc`.`artists` (
  `id` INT NOT NULL ,
  `first_name` VARCHAR(30) NULL ,
  `last_name` VARCHAR(30) NULL ,
  `location` VARCHAR(30) NULL ,
  `artist_medium` VARCHAR(30) NULL ,
  `about` VARCHAR(500) NULL ,
  `artist_picture` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `magc`.`artworks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magc`.`artworks` ;

CREATE  TABLE IF NOT EXISTS `magc`.`artworks` (
  `id` INT NOT NULL ,
  `title` VARCHAR(30) NULL ,
  `description` VARCHAR(500) NULL ,
  `artwork_medium` VARCHAR(30) NULL ,
  `price` VARCHAR(45) NULL ,
  `dimensions` VARCHAR(45) NULL ,
  `weight` VARCHAR(45) NULL ,
  `artworkPicture` VARCHAR(60) NULL ,
  `in_stock` TINYINT(1)  NOT NULL DEFAULT TRUE ,
  `artist_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Artwork_Artist_idx` (`artist_id` ASC) ,
  CONSTRAINT `fk_Artwork_Artist`
    FOREIGN KEY (`artist_id` )
    REFERENCES `magc`.`artists` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `magc`.`shopping_carts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magc`.`shopping_carts` ;

CREATE  TABLE IF NOT EXISTS `magc`.`shopping_carts` (
  `id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `magc`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magc`.`users` ;

CREATE  TABLE IF NOT EXISTS `magc`.`users` (
  `id` INT NOT NULL ,
  `username` VARCHAR(20) NULL ,
  `first_name` VARCHAR(30) NULL ,
  `last_name` VARCHAR(30) NULL ,
  `address` VARCHAR(30) NULL ,
  `city` VARCHAR(30) NULL ,
  `region` VARCHAR(30) NULL ,
  `postalCode` DECIMAL(5) NOT NULL ,
  `phone` DECIMAL(10) NULL ,
  `email` VARCHAR(45) NULL ,
  `password` VARCHAR(30) NULL ,
  `role` VARCHAR(10) NULL DEFAULT 'viewer' ,
  `shopping_cart_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_user_shopping_cart1` (`shopping_cart_id` ASC) ,
  CONSTRAINT `fk_user_shopping_cart1`
    FOREIGN KEY (`shopping_cart_id` )
    REFERENCES `magc`.`shopping_carts` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `magc`.`artworks_has_shopping_carts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magc`.`artworks_has_shopping_carts` ;

CREATE  TABLE IF NOT EXISTS `magc`.`artworks_has_shopping_carts` (
  `artwork_id` INT NOT NULL ,
  `shopping_cart_id` INT NOT NULL ,
  PRIMARY KEY (`artwork_id`, `shopping_cart_id`) ,
  INDEX `fk_artwork_has_shopping_cart_shopping_cart1` (`shopping_cart_id` ASC) ,
  CONSTRAINT `fk_artwork_has_shopping_cart_artwork1`
    FOREIGN KEY (`artwork_id` )
    REFERENCES `magc`.`artworks` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_artwork_has_shopping_cart_shopping_cart1`
    FOREIGN KEY (`shopping_cart_id` )
    REFERENCES `magc`.`shopping_carts` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
