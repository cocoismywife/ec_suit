-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2011 at 03:03 下午
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

--
-- Dumping data for table `es_buttons`
--

INSERT INTO `es_buttons` (`id`, `name`, `type`, `desc`, `image_id`, `image_mirror_id`) VALUES
(1, 'Ｊ44', 'J', 'Ｊ44', 18, NULL),
(2, 'Ｊ08', 'J', 'Ｊ08', 19, NULL),
(3, 'Ｊ56', 'J', 'Ｊ56', 20, NULL),
(4, 'Ｊ66', 'J', 'Ｊ66', 21, NULL),
(5, 'Ｊ28', 'J', 'Ｊ28', 22, NULL),
(6, 'Ｊ09', 'J', 'Ｊ09', 23, NULL),
(7, 'Ｘ44', 'X', 'Ｘ44', 24, NULL),
(8, 'Ｘ56', 'X', 'Ｘ56', 25, NULL),
(9, 'Ｘ58', 'X', 'Ｘ58', 26, NULL),
(10, 'Ｘ93', 'X', 'Ｘ93', 27, NULL),
(11, 'Ｘ98', 'X', 'Ｘ98', 28, NULL),
(12, 'Ｘ01', 'X', 'Ｘ01', 29, NULL),
(13, 'Ｔ42', 'T', 'Ｔ42', 30, NULL),
(14, 'Ｔ48', 'T', 'Ｔ48', 31, NULL),
(15, 'Ｔ53', 'T', 'Ｔ53', 32, NULL),
(16, 'Ｔ58', 'T', 'Ｔ58', 33, NULL),
(17, 'Ｔ93', 'T', 'Ｔ93', 34, NULL),
(18, 'Ｔ98', 'T', 'Ｔ98', 35, NULL),
(19, 'Ｎ01', 'N', 'Ｎ01', 36, NULL),
(20, 'Ｎ02', 'N', 'Ｎ02', 37, NULL),
(21, 'Ｎ03', 'N', 'Ｎ03', 38, NULL),
(22, 'Ｎ04', 'N', 'Ｎ04', 39, NULL),
(23, 'Ｈ46', 'N', 'Ｈ46', 40, NULL),
(24, 'Ｈ43', 'N', 'Ｈ43', 41, NULL);
