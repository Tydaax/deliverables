-- MySQL Script generated by MySQL Workbench
-- Wed Sep  4 15:24:29 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema library
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema library
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `library` DEFAULT CHARACTER SET utf8 ;
USE `library` ;

-- -----------------------------------------------------
-- Table `library`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`Users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `lastName` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `birthDate` DATETIME NOT NULL,
  `phone` INT NOT NULL,
  `mail` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `library`.`Livres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`Livres` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `author` VARCHAR(255) NOT NULL,
  `genre` VARCHAR(100) NOT NULL,
  `height` VARCHAR(45) NOT NULL,
  `publisher` INT(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `library`.`Emprunts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`Emprunts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `startDate` DATETIME NOT NULL,
  `endDate` DATETIME NOT NULL,
  `Users_id` INT NOT NULL,
  `Livres_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Users_id`, `Livres_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_Emprunts_Users_idx` (`Users_id` ASC),
  INDEX `fk_Emprunts_Livres1_idx` (`Livres_id` ASC),
  CONSTRAINT `fk_Emprunts_Users`
    FOREIGN KEY (`Users_id`)
    REFERENCES `library`.`Users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Emprunts_Livres1`
    FOREIGN KEY (`Livres_id`)
    REFERENCES `library`.`Livres` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `library`.`Reservations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`Reservations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` DATETIME NOT NULL,
  `Users_id` INT NOT NULL,
  `Livres_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Users_id`, `Livres_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `users_id_UNIQUE` (`users_id` ASC),
  UNIQUE INDEX `Reservationscol_UNIQUE` (`livres_id` ASC),
  INDEX `fk_Reservations_Users1_idx` (`Users_id` ASC),
  INDEX `fk_Reservations_Livres1_idx` (`Livres_id` ASC),
  CONSTRAINT `fk_Reservations_Users1`
    FOREIGN KEY (`Users_id`)
    REFERENCES `library`.`Users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reservations_Livres1`
    FOREIGN KEY (`Livres_id`)
    REFERENCES `library`.`Livres` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
