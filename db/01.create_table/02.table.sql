-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2011 at 04:37 下午
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ec_suits`
--

-- --------------------------------------------------------

--
-- Table structure for table `es_answers`
--

CREATE TABLE IF NOT EXISTS `es_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_big_brands`
--

CREATE TABLE IF NOT EXISTS `es_big_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_big_traceries`
--

CREATE TABLE IF NOT EXISTS `es_big_traceries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT 'Third level of category',
  `desc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Page Seq.4\n生地選択' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_buttons`
--

CREATE TABLE IF NOT EXISTS `es_buttons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  `image_mirror_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_collars`
--

CREATE TABLE IF NOT EXISTS `es_collars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_colors`
--

CREATE TABLE IF NOT EXISTS `es_colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT 'Top level of category',
  `desc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Page Seq.4\n生地選択' AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_fabrics`
--

CREATE TABLE IF NOT EXISTS `es_fabrics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL COMMENT '生地ID',
  `name` varchar(200) NOT NULL COMMENT '生地名',
  `price` int(11) NOT NULL COMMENT '値段',
  `color_id` int(11) DEFAULT NULL COMMENT '色',
  `big_tracery_id` int(11) DEFAULT NULL COMMENT '柄:大カテゴリ',
  `small_tracery_id` int(11) DEFAULT NULL COMMENT '柄:小カテゴリ',
  `season_id` int(11) DEFAULT NULL COMMENT '季節',
  `big_brand_id` int(11) DEFAULT NULL COMMENT 'ブランド:大カテゴリ',
  `small_brand_id` int(11) DEFAULT NULL COMMENT 'ブランド:小カテゴリ',
  `remark` text COMMENT '備考',
  `image_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Page Seq.4\n生地選択' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_genders`
--

CREATE TABLE IF NOT EXISTS `es_genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  `image_mirror_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Page Seq.2\n男女選択' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_hems`
--

CREATE TABLE IF NOT EXISTS `es_hems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  `image_mirror_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_images`
--

CREATE TABLE IF NOT EXISTS `es_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `path` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `mime` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=173 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_linings`
--

CREATE TABLE IF NOT EXISTS `es_linings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  `image_mirror_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_lining_fabrics`
--

CREATE TABLE IF NOT EXISTS `es_lining_fabrics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `desc` varchar(200) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  `image_mirror_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_es_lining_fabrics_es_images1` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_lining_sets`
--

CREATE TABLE IF NOT EXISTS `es_lining_sets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lining_id` int(11) NOT NULL,
  `lining_fabric_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_es_lining_sets_es_linings1` (`lining_id`),
  KEY `fk_es_lining_sets_es_lining_fabrics1` (`lining_fabric_id`),
  KEY `fk_es_lining_sets_es_images1` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=109 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_options`
--

CREATE TABLE IF NOT EXISTS `es_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(45) NOT NULL,
  `value` varchar(45) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_orders`
--

CREATE TABLE IF NOT EXISTS `es_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `first_name_kana` varchar(45) DEFAULT NULL,
  `last_name_kana` varchar(45) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `purchase_date` datetime DEFAULT NULL,
  `survey_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_order_details`
--

CREATE TABLE IF NOT EXISTS `es_order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender_id` int(11) DEFAULT NULL,
  `style_id` int(11) DEFAULT NULL,
  `fabric_id` int(11) DEFAULT NULL,
  `lining_id` int(11) DEFAULT NULL,
  `lining_fabric_id` int(11) DEFAULT NULL,
  `collar_id` int(11) DEFAULT NULL,
  `pocket_id` int(11) DEFAULT NULL,
  `hem_id` int(11) DEFAULT NULL,
  `button_id` int(11) DEFAULT NULL,
  `ty_id` int(11) DEFAULT NULL,
  `shirt_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_pockets`
--

CREATE TABLE IF NOT EXISTS `es_pockets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_prices`
--

CREATE TABLE IF NOT EXISTS `es_prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_questions`
--

CREATE TABLE IF NOT EXISTS `es_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `addition` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_seasons`
--

CREATE TABLE IF NOT EXISTS `es_seasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_shirts`
--

CREATE TABLE IF NOT EXISTS `es_shirts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  `image_mirror_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_small_brands`
--

CREATE TABLE IF NOT EXISTS `es_small_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `big_brand_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_small_traceries`
--

CREATE TABLE IF NOT EXISTS `es_small_traceries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT 'Second level of category',
  `desc` varchar(45) DEFAULT NULL,
  `big_tracery_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Page Seq.4\n生地選択' AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_styles`
--

CREATE TABLE IF NOT EXISTS `es_styles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Page Seq.3\nスタイル選択' AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_surveys`
--

CREATE TABLE IF NOT EXISTS `es_surveys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_ties`
--

CREATE TABLE IF NOT EXISTS `es_ties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  `image_mirror_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_users`
--

CREATE TABLE IF NOT EXISTS `es_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL COMMENT '	',
  `password` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions_surveys`
--

CREATE TABLE IF NOT EXISTS `questions_surveys` (
  `question_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`,`survey_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
