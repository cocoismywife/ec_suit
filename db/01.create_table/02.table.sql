SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `EC_SUITS` ;
CREATE SCHEMA IF NOT EXISTS `EC_SUITS` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
SHOW WARNINGS;
USE `EC_SUITS` ;

-- -----------------------------------------------------
-- Table `es_styles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_styles` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_styles` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(20) NOT NULL ,
  `desc` VARCHAR(45) NULL ,
  `upload_file_url` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Page Seq.3\nスタイル選択';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_categories` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_categories` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(20) NOT NULL COMMENT 'Top level of category' ,
  `desc` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Page Seq.4\n生地選択';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_sub_categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_sub_categories` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_sub_categories` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(20) NOT NULL COMMENT 'Second level of category' ,
  `desc` VARCHAR(45) NULL ,
  `category_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Page Seq.4\n生地選択';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_attributes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_attributes` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_attributes` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(20) NOT NULL COMMENT 'Third level of category' ,
  `desc` VARCHAR(45) NULL ,
  `sub_category_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Page Seq.4\n生地選択';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_genders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_genders` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_genders` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(20) NOT NULL ,
  `desc` VARCHAR(45) NULL ,
  `upload_file_url` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Page Seq.2\n男女選択';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_fabrics`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_fabrics` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_fabrics` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(50) NOT NULL ,
  `desc` VARCHAR(200) NULL ,
  `price` DECIMAL(9,2) NOT NULL COMMENT 'Price of fabric' ,
  `attribute_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Page Seq.4\n生地選択';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_collars`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_collars` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_collars` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(25) NOT NULL ,
  `desc` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_ties`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_ties` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_ties` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(25) NOT NULL ,
  `desc` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_cuffs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_cuffs` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_cuffs` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(25) NOT NULL ,
  `desc` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_pockets`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_pockets` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_pockets` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(25) NOT NULL ,
  `desc` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_buttons`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_buttons` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_buttons` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(25) NOT NULL ,
  `desc` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_shirts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_shirts` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_shirts` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(25) NOT NULL ,
  `desc` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_shoes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_shoes` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_shoes` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(25) NOT NULL ,
  `desc` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_orders` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_orders` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `first_name` VARCHAR(45) NULL ,
  `last_name` VARCHAR(45) NULL ,
  `first_name_kana` VARCHAR(45) NULL ,
  `last_name_kana` VARCHAR(45) NULL ,
  `zip_code` VARCHAR(45) NULL ,
  `address` VARCHAR(45) NULL ,
  `mobile_number` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `purchase_date` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_questions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_questions` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_questions` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `create_date` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_options`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_options` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_options` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `options_text` VARCHAR(45) NOT NULL ,
  `options_value` VARCHAR(45) NULL ,
  `question_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_surveies`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_surveies` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_surveies` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_answers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_answers` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_answers` (
  `id` INT NOT NULL ,
  `order_id` INT NOT NULL ,
  `survey_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_surveies_has_es_questions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_surveies_has_es_questions` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_surveies_has_es_questions` (
  `es_surveies_id` INT NOT NULL ,
  `es_questions_id` INT NOT NULL ,
  PRIMARY KEY (`es_surveies_id`, `es_questions_id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `es_answer_details`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `es_answer_details` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `es_answer_details` (
  `id` INT NOT NULL ,
  `answer_id` INT NOT NULL ,
  `option_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIG