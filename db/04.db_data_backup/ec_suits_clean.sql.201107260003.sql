-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2011 at 04:03 下午
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

--
-- Dumping data for table `es_answers`
--

INSERT INTO `es_answers` (`id`, `question_id`, `order_id`, `option_id`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 7),
(3, 3, 1, 12),
(4, 4, 1, 17),
(5, 5, 1, 22),
(6, 6, 1, 27),
(7, 7, 1, 32),
(8, 8, 1, 35),
(9, 9, 1, 41),
(10, 10, 1, 47),
(11, 1, 2, 1),
(12, 2, 2, 7),
(13, 3, 2, 12),
(14, 4, 2, 17),
(15, 5, 2, 22),
(16, 6, 2, 27),
(17, 7, 2, 32),
(18, 8, 2, 35),
(19, 9, 2, 41),
(20, 10, 2, 47);

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

--
-- Dumping data for table `es_big_brands`
--

INSERT INTO `es_big_brands` (`id`, `name`, `desc`) VALUES
(1, '日本製', '日本製'),
(2, 'イタリア製', 'イタリア製'),
(3, 'イギリス製', 'イギリス製'),
(4, 'その他', 'その他');

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

--
-- Dumping data for table `es_big_traceries`
--

INSERT INTO `es_big_traceries` (`id`, `name`, `desc`) VALUES
(1, '無地', '無地'),
(2, 'ストライプ', 'ストライプ'),
(3, 'ウインドウペン、チェック', 'ウインドウペン、チェック'),
(4, 'その他', 'その他');

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
(1, 'Ｊ44', 'J', 'Ｊ44', 18, 149),
(2, 'Ｊ08', 'J', 'Ｊ08', 19, 150),
(3, 'Ｊ56', 'J', 'Ｊ56', 20, 151),
(4, 'Ｊ66', 'J', 'Ｊ66', 21, 152),
(5, 'Ｊ28', 'J', 'Ｊ28', 22, 153),
(6, 'Ｊ09', 'J', 'Ｊ09', 23, 154),
(7, 'Ｘ44', 'X', 'Ｘ44', 24, 155),
(8, 'Ｘ56', 'X', 'Ｘ56', 25, 156),
(9, 'Ｘ58', 'X', 'Ｘ58', 26, 157),
(10, 'Ｘ93', 'X', 'Ｘ93', 27, 158),
(11, 'Ｘ98', 'X', 'Ｘ98', 28, 159),
(12, 'Ｘ01', 'X', 'Ｘ01', 29, 160),
(13, 'Ｔ42', 'T', 'Ｔ42', 30, 161),
(14, 'Ｔ48', 'T', 'Ｔ48', 31, 162),
(15, 'Ｔ53', 'T', 'Ｔ53', 32, 163),
(16, 'Ｔ58', 'T', 'Ｔ58', 33, 164),
(17, 'Ｔ93', 'T', 'Ｔ93', 34, 165),
(18, 'Ｔ98', 'T', 'Ｔ98', 35, 166),
(19, 'Ｎ01', 'N', 'Ｎ01', 36, 167),
(20, 'Ｎ02', 'N', 'Ｎ02', 37, 168),
(21, 'Ｎ03', 'N', 'Ｎ03', 38, 169),
(22, 'Ｎ04', 'N', 'Ｎ04', 39, 170),
(23, 'Ｈ46', 'N', 'Ｈ46', 40, 171),
(24, 'Ｈ43', 'N', 'Ｈ43', 41, 172);

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

--
-- Dumping data for table `es_collars`
--

INSERT INTO `es_collars` (`id`, `name`, `desc`, `image_id`) VALUES
(1, 'ノッチ', 'ノッチ', 9),
(2, 'セミノッチ', 'セミノッチ', 10),
(3, 'ピーク', 'ピーク', 11),
(4, 'セミピーク', 'セミピーク', 12);

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

--
-- Dumping data for table `es_colors`
--

INSERT INTO `es_colors` (`id`, `name`, `desc`) VALUES
(1, '紺系（ネイビー、ブルー）', '紺系（ネイビー、ブルー）'),
(2, '灰系（グレー、チャコール）', '灰系（グレー、チャコール）'),
(3, '茶系（ブラウン、ベージュ）', '茶系（ブラウン、ベージュ）'),
(4, 'ブラック', 'ブラック'),
(5, 'その他', 'その他');

-- --------------------------------------------------------

--
-- Table structure for table `es_fabrics`
--

CREATE TABLE IF NOT EXISTS `es_fabrics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL COMMENT '生地ID',
  `name` varchar(200) NOT NULL COMMENT '生地名',
  `price` decimal(9,2) NOT NULL COMMENT '値段',
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

--
-- Dumping data for table `es_fabrics`
--

INSERT INTO `es_fabrics` (`id`, `code`, `name`, `price`, `color_id`, `big_tracery_id`, `small_tracery_id`, `season_id`, `big_brand_id`, `small_brand_id`, `remark`, `image_id`, `created`, `modified`) VALUES
(1, 'TEST007', 'test', 7000.00, 1, 2, NULL, 1, 2, NULL, '', 93, NULL, NULL);

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

--
-- Dumping data for table `es_genders`
--

INSERT INTO `es_genders` (`id`, `name`, `desc`, `image_id`, `image_mirror_id`) VALUES
(1, '男性', '男性', 1, 142),
(2, '女性', '女性', 2, 143);

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

--
-- Dumping data for table `es_hems`
--

INSERT INTO `es_hems` (`id`, `name`, `desc`, `image_id`, `image_mirror_id`) VALUES
(1, 'シングル', 'シングル', 16, 147),
(2, 'ダブル', 'ダブル', 17, 148);

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

--
-- Dumping data for table `es_images`
--

INSERT INTO `es_images` (`id`, `name`, `path`, `size`, `mime`) VALUES
(1, 'bu_man.png', 'files/images', '9923', 'image/png'),
(2, 'bu_woman.png', 'files/images', '9274', 'image/png'),
(3, 'bu_2button.png', 'files/images', '33767', 'image/png'),
(4, 'bu_3button.png', 'files/images', '33545', 'image/png'),
(5, 'bu_4button.png', 'files/images', '32828', 'image/png'),
(6, 'bu_regular.png', 'files/images', '9352', 'image/png'),
(7, 'bu_kaku.png', 'files/images', '10746', 'image/png'),
(8, 'bu_r.png', 'files/images', '10674', 'image/png'),
(9, 'bu_notch.png', 'files/images', '26532', 'image/png'),
(10, 'bu_semi_notch.png', 'files/images', '27787', 'image/png'),
(11, 'bu_peak.png', 'files/images', '26377', 'image/png'),
(12, 'bu_semi_peak.png', 'files/images', '27546', 'image/png'),
(13, 'bu_normal.png', 'files/images', '21906', 'image/png'),
(14, 'bu_hacking.png', 'files/images', '24100', 'image/png'),
(15, 'bu_out.png', 'files/images', '22362', 'image/png'),
(16, 'bu_single.png', 'files/images', '44746', 'image/png'),
(17, 'bu_double.png', 'files/images', '45222', 'image/png'),
(18, 'img_flow14_j44.png', 'files/images', '30315', 'image/png'),
(19, 'img_flow14_j08.png', 'files/images', '27628', 'image/png'),
(20, 'img_flow14_j56.png', 'files/images', '28183', 'image/png'),
(21, 'img_flow14_j66.png', 'files/images', '30214', 'image/png'),
(22, 'img_flow14_j28.png', 'files/images', '28590', 'image/png'),
(23, 'img_flow14_j09.png', 'files/images', '25578', 'image/png'),
(24, 'img_flow14_x44.png', 'files/images', '30240', 'image/png'),
(25, 'img_flow14_x56.png', 'files/images', '30869', 'image/png'),
(26, 'img_flow14_x58.png', 'files/images', '29198', 'image/png'),
(27, 'img_flow14_t93.png', 'files/images', '31310', 'image/png'),
(28, 'img_flow14_x98.png', 'files/images', '28858', 'image/png'),
(29, 'img_flow14_x01.png', 'files/images', '25171', 'image/png'),
(30, 'img_flow14_t42.png', 'files/images', '31471', 'image/png'),
(31, 'img_flow14_t48.png', 'files/images', '31841', 'image/png'),
(32, 'img_flow14_t53.png', 'files/images', '31392', 'image/png'),
(33, 'img_flow14_t58.png', 'files/images', '29721', 'image/png'),
(34, 'img_flow14_t93-0.png', 'files/images', '31310', 'image/png'),
(35, 'img_flow14_t98.png', 'files/images', '30796', 'image/png'),
(36, 'img_flow14_n01.png', 'files/images', '29448', 'image/png'),
(37, 'img_flow14_n02.png', 'files/images', '30500', 'image/png'),
(38, 'img_flow14_n03.png', 'files/images', '31570', 'image/png'),
(39, 'img_flow14_n04.png', 'files/images', '32271', 'image/png'),
(40, 'img_flow14_h46.png', 'files/images', '30397', 'image/png'),
(41, 'img_flow14_h43.png', 'files/images', '30587', 'image/png'),
(42, 'img_flow16_st1.png', 'files/images', '108995', 'image/png'),
(43, 'img_flow16_st2.png', 'files/images', '111387', 'image/png'),
(44, 'img_flow16_st3.png', 'files/images', '123066', 'image/png'),
(45, 'img_flow16_st4.png', 'files/images', '111646', 'image/png'),
(46, 'img_flow16_st5.png', 'files/images', '128063', 'image/png'),
(47, 'img_flow16_st6.png', 'files/images', '122120', 'image/png'),
(48, 'img_flow16_do1.png', 'files/images', '108272', 'image/png'),
(49, 'img_flow16_do2.png', 'files/images', '107252', 'image/png'),
(50, 'img_flow16_do3.png', 'files/images', '102103', 'image/png'),
(51, 'img_flow16_do4.png', 'files/images', '95139', 'image/png'),
(52, 'img_flow16_do5.png', 'files/images', '91372', 'image/png'),
(53, 'img_flow16_do6.png', 'files/images', '86223', 'image/png'),
(54, 'img_flow16_so1.png', 'files/images', '135670', 'image/png'),
(55, 'img_flow16_so2.png', 'files/images', '133413', 'image/png'),
(56, 'img_flow16_so3.png', 'files/images', '135371', 'image/png'),
(57, 'img_flow16_so4.png', 'files/images', '97427', 'image/png'),
(58, 'img_flow16_so5.png', 'files/images', '107810', 'image/png'),
(59, 'img_flow16_so6.png', 'files/images', '77948', 'image/png'),
(60, 'img_flow16_ch1.png', 'files/images', '106934', 'image/png'),
(61, 'img_flow16_ch2.png', 'files/images', '125388', 'image/png'),
(62, 'img_flow16_ch3.png', 'files/images', '123516', 'image/png'),
(63, 'img_flow16_pr1.png', 'files/images', '135555', 'image/png'),
(64, 'img_flow16_pr2.png', 'files/images', '119987', 'image/png'),
(65, 'img_flow16_pr3.png', 'files/images', '128759', 'image/png'),
(66, 'img_flow16_pr3-0.png', 'files/images', '128759', 'image/png'),
(67, 'img_flow16_pr4.png', 'files/images', '129991', 'image/png'),
(68, 'img_flow16_pr5.png', 'files/images', '121019', 'image/png'),
(69, 'img_flow16_pr6.png', 'files/images', '102680', 'image/png'),
(70, 'img_flow17_39.png', 'files/images', '110215', 'image/png'),
(71, 'img_flow17_20.png', 'files/images', '133464', 'image/png'),
(72, 'img_flow17_22.png', 'files/images', '155245', 'image/png'),
(73, 'img_flow17_24.png', 'files/images', '117103', 'image/png'),
(74, 'img_flow17_26.png', 'files/images', '116292', 'image/png'),
(75, 'img_flow17_t_umb_5350.png', 'files/images', '30618', 'image/png'),
(76, 'img_flow17_5350.png', 'files/images', '107969', 'image/png'),
(77, 'img_flow17_5351.png', 'files/images', '160326', 'image/png'),
(78, 'img_flow17_5360.png', 'files/images', '124309', 'image/png'),
(79, 'img_flow17_5361.png', 'files/images', '121178', 'image/png'),
(80, 'img_flow17_5425.png', 'files/images', '187138', 'image/png'),
(81, 'img_flow17_5426.png', 'files/images', '164666', 'image/png'),
(82, 'img_flow17_161.png', 'files/images', '226213', 'image/png'),
(83, 'img_flow17_162.png', 'files/images', '223747', 'image/png'),
(84, 'img_flow17_163.png', 'files/images', '159531', 'image/png'),
(85, 'img_flow17_164.png', 'files/images', '204539', 'image/png'),
(86, 'img_flow17_165.png', 'files/images', '194368', 'image/png'),
(87, 'img_flow17_430522.png', 'files/images', '133450', 'image/png'),
(88, 'img_flow17_430536.png', 'files/images', '138410', 'image/png'),
(89, 'img_flow17_13009732.png', 'files/images', '291811', 'image/png'),
(90, 'img_flow17_13009749.png', 'files/images', '301819', 'image/png'),
(91, 'img_flow17_45000292.png', 'files/images', '269166', 'image/png'),
(92, 'img_flow17_45000301.png', 'files/images', '272738', 'image/png'),
(93, 'img_flow16_t_umb_st1.png', 'files/images/mirror', '35405', 'image/png'),
(94, 'img_flow16_t_umb_st2.png', 'files/images/mirror', '34781', 'image/png'),
(95, 'img_flow16_t_umb_st3.png', 'files/images/mirror', '38367', 'image/png'),
(96, 'img_flow16_t_umb_st4.png', 'files/images/mirror', '36797', 'image/png'),
(97, 'img_flow16_t_umb_st5.png', 'files/images/mirror', '39278', 'image/png'),
(98, 'img_flow16_t_umb_st6.png', 'files/images/mirror', '39556', 'image/png'),
(99, 'img_flow16_t_umb_d01.png', 'files/images/mirror', '35028', 'image/png'),
(100, 'img_flow16_t_umb_d02.png', 'files/images/mirror', '34515', 'image/png'),
(101, 'img_flow16_t_umb_d03.png', 'files/images/mirror', '30580', 'image/png'),
(102, 'img_flow16_t_umb_d04.png', 'files/images/mirror', '29134', 'image/png'),
(103, 'img_flow16_t_umb_d05.png', 'files/images/mirror', '28297', 'image/png'),
(104, 'img_flow16_t_umb_d06.png', 'files/images/mirror', '28493', 'image/png'),
(105, 'img_flow16_t_umb_so1.png', 'files/images/mirror', '39533', 'image/png'),
(106, 'img_flow16_t_umb_so2.png', 'files/images/mirror', '43162', 'image/png'),
(107, 'img_flow16_t_umb_so3.png', 'files/images/mirror', '44064', 'image/png'),
(108, 'img_flow16_t_umb_so4.png', 'files/images/mirror', '28089', 'image/png'),
(109, 'img_flow16_t_umb_so5.png', 'files/images/mirror', '36374', 'image/png'),
(110, 'img_flow16_t_umb_so6.png', 'files/images/mirror', '24127', 'image/png'),
(111, 'img_flow16_t_umb_ch1.png', 'files/images/mirror', '34334', 'image/png'),
(112, 'img_flow16_t_umb_ch2.png', 'files/images/mirror', '40004', 'image/png'),
(113, 'img_flow16_t_umb_ch3.png', 'files/images/mirror', '39352', 'image/png'),
(114, 'img_flow16_t_umb_pr1.png', 'files/images/mirror', '40642', 'image/png'),
(115, 'img_flow16_t_umb_pr2.png', 'files/images/mirror', '36061', 'image/png'),
(116, 'img_flow16_t_umb_pr3.png', 'files/images/mirror', '39731', 'image/png'),
(117, 'img_flow16_t_umb_pr4.png', 'files/images/mirror', '43531', 'image/png'),
(118, 'img_flow16_t_umb_pr5.png', 'files/images/mirror', '37578', 'image/png'),
(119, 'img_flow16_t_umb_pr6.png', 'files/images/mirror', '27250', 'image/png'),
(120, 'img_flow17_t_umb_39.png', 'files/images/mirror', '24242', 'image/png'),
(121, 'img_flow17_t_umb_20.png', 'files/images/mirror', '41495', 'image/png'),
(122, 'img_flow17_t_umb_22.png', 'files/images/mirror', '38744', 'image/png'),
(123, 'img_flow17_t_umb_24.png', 'files/images/mirror', '39389', 'image/png'),
(124, 'img_flow17_t_umb_26.png', 'files/images/mirror', '33977', 'image/png'),
(125, 'img_flow17_t_umb_5350.png', 'files/images/mirror', '30618', 'image/png'),
(126, 'img_flow17_t_umb_5351.png', 'files/images/mirror', '31703', 'image/png'),
(127, 'img_flow17_t_umb_5360.png', 'files/images/mirror', '29028', 'image/png'),
(128, 'img_flow17_t_umb_5361.png', 'files/images/mirror', '32637', 'image/png'),
(129, 'img_flow17_t_umb_5425.png', 'files/images/mirror', '30037', 'image/png'),
(130, 'img_flow17_t_umb_5426.png', 'files/images/mirror', '27703', 'image/png'),
(131, 'img_flow17_t_umb_161.png', 'files/images/mirror', '31504', 'image/png'),
(132, 'img_flow17_t_umb_162.png', 'files/images/mirror', '28304', 'image/png'),
(133, 'img_flow17_t_umb_163.png', 'files/images/mirror', '27498', 'image/png'),
(134, 'img_flow17_t_umb_164.png', 'files/images/mirror', '32436', 'image/png'),
(135, 'img_flow17_t_umb_165.png', 'files/images/mirror', '34817', 'image/png'),
(136, 'img_flow17_t_umb_430522.png', 'files/images/mirror', '27854', 'image/png'),
(137, 'img_flow17_t_umb_430536.png', 'files/images/mirror', '27620', 'image/png'),
(138, 'img_flow17_t_umb_13009732.png', 'files/images/mirror', '32558', 'image/png'),
(139, 'img_flow17_t_umb_13009749.png', 'files/images/mirror', '38780', 'image/png'),
(140, 'img_flow17_t_umb_45000292.png', 'files/images/mirror', '31965', 'image/png'),
(141, 'img_flow17_t_umb_45000301.png', 'files/images/mirror', '29912', 'image/png'),
(142, 'img_t_umb_man.png', 'files/images/mirror', '4539', 'image/png'),
(143, 'img_t_umb_woman.png', 'files/images/mirror', '4391', 'image/png'),
(144, 'img_t_umb_regular.png', 'files/images/mirror', '5127', 'image/png'),
(145, 'img_t_umb_kaku.png', 'files/images/mirror', '5608', 'image/png'),
(146, 'img_t_umb_r.png', 'files/images/mirror', '5643', 'image/png'),
(147, 'img_t_umb_single.png', 'files/images/mirror', '8154', 'image/png'),
(148, 'img_t_umb_double.png', 'files/images/mirror', '8216', 'image/png'),
(149, 'img_t_umb_j44.png', 'files/images/mirror', '11586', 'image/png'),
(150, 'img_t_umb_j08.png', 'files/images/mirror', '11189', 'image/png'),
(151, 'img_t_umb_j56.png', 'files/images/mirror', '11129', 'image/png'),
(152, 'img_t_umb_j66.png', 'files/images/mirror', '11569', 'image/png'),
(153, 'img_t_umb_j28.png', 'files/images/mirror', '11073', 'image/png'),
(154, 'img_t_umb_j09.png', 'files/images/mirror', '10378', 'image/png'),
(155, 'img_t_umb_x44.png', 'files/images/mirror', '11397', 'image/png'),
(156, 'img_t_umb_x56.png', 'files/images/mirror', '11558', 'image/png'),
(157, 'img_t_umb_x58.png', 'files/images/mirror', '11157', 'image/png'),
(158, 'img_t_umb_x93.png', 'files/images/mirror', '11340', 'image/png'),
(159, 'img_t_umb_x98.png', 'files/images/mirror', '11181', 'image/png'),
(160, 'img_t_umb_x01.png', 'files/images/mirror', '10025', 'image/png'),
(161, 'img_t_umb_t42.png', 'files/images/mirror', '11961', 'image/png'),
(162, 'img_t_umb_t48.png', 'files/images/mirror', '12126', 'image/png'),
(163, 'img_t_umb_t53.png', 'files/images/mirror', '11929', 'image/png'),
(164, 'img_t_umb_t58.png', 'files/images/mirror', '11811', 'image/png'),
(165, 'img_t_umb_t93.png', 'files/images/mirror', '11981', 'image/png'),
(166, 'img_t_umb_t98.png', 'files/images/mirror', '11995', 'image/png'),
(167, 'img_t_umb_n01.png', 'files/images/mirror', '11754', 'image/png'),
(168, 'img_t_umb_n02.png', 'files/images/mirror', '11856', 'image/png'),
(169, 'img_t_umb_n03.png', 'files/images/mirror', '12235', 'image/png'),
(170, 'img_t_umb_n04.png', 'files/images/mirror', '12292', 'image/png'),
(171, 'img_t_umb_h46.png', 'files/images/mirror', '11634', 'image/png'),
(172, 'img_t_umb_h43.png', 'files/images/mirror', '11701', 'image/png');

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

--
-- Dumping data for table `es_linings`
--

INSERT INTO `es_linings` (`id`, `name`, `desc`, `image_id`, `image_mirror_id`) VALUES
(1, 'レギュラー', 'レギュラー', 6, 144),
(2, '角台場', '角台場', 7, 145),
(3, 'Ｒ台場', 'Ｒ台場', 8, 146);

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

--
-- Dumping data for table `es_options`
--

INSERT INTO `es_options` (`id`, `text`, `value`, `question_id`) VALUES
(1, '１０代', '', 1),
(2, '２０代', '', 1),
(3, '３０代', '', 1),
(4, '４０代', '', 1),
(5, '５０代', '', 1),
(6, '６０代', '', 1),
(7, '営業職', '', 2),
(8, '事務職', '', 2),
(9, '企画職（デザイナー、エンジニアなど）', '', 2),
(10, '販売職', '', 2),
(11, '専門職（医師、弁護士など）', '', 2),
(12, '紹介', '', 3),
(13, '近所', '', 3),
(14, '雑誌', '', 3),
(15, 'インターネット', '', 3),
(16, '広告（ポスティングチラシなど）', '', 3),
(17, '０着', '', 4),
(18, '１着', '', 4),
(19, '２〜３着', '', 4),
(20, '４〜６着', '', 4),
(21, '７着以上', '', 4),
(22, '３０,０００円未満', '', 5),
(23, '３０,０００円〜５０,０００円', '', 5),
(24, '５０,０００円〜８０,０００円', '', 5),
(25, '８０,０００円〜１００,０００円', '', 5),
(26, '１００,０００円以上', '', 5),
(27, 'ネイビー', '', 6),
(28, 'グレー', '', 6),
(29, 'ブラウン', '', 6),
(30, 'ブラック', '', 6),
(31, 'ベージュ', '', 6),
(32, 'モデルになってもいい（顔出し）', '', 7),
(33, 'スーツだけならいい', '', 7),
(34, 'ダメ', '', 7),
(35, 'デザイン', '', 8),
(36, '丈夫さ', '', 8),
(37, '生地', '', 8),
(38, '値段', '', 8),
(39, '流行', '', 8),
(40, '温度調節', '', 8),
(41, 'ＴＰＯにあっているか', '', 9),
(42, '流行にそっているか', '', 9),
(43, '目立っているか', '', 9),
(44, 'スマートに見えるか', '', 9),
(45, '体にあっているか', '', 9),
(46, '似合っているか', '', 9),
(47, 'ポロシャツ', '', 10),
(48, '靴', '', 10),
(49, 'ネクタイ', '', 10),
(50, 'マフラー', '', 10),
(51, '靴下', '', 10),
(52, '下着', '', 10),
(53, '時計', '', 10),
(54, '財布', '', 10),
(55, '名刺入れ', '', 10),
(56, '手帳ケース', '', 10);

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

--
-- Dumping data for table `es_orders`
--

INSERT INTO `es_orders` (`id`, `first_name`, `last_name`, `first_name_kana`, `last_name_kana`, `zip_code`, `address`, `mobile_number`, `email`, `purchase_date`, `survey_id`, `created`, `modified`) VALUES
(1, '注文', '番号', 'ヒロト', 'イヌカイ', NULL, 'メールアドレス	商品名	注文日', '12345678901', 'test@test.test', '2011-07-23 23:42:00', 1, NULL, NULL),
(2, 'test', 'test', 'test', 'test', NULL, 'test', '12345678901', 'test@test.test', '2011-07-25 00:34:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `es_order_details`
--

CREATE TABLE IF NOT EXISTS `es_order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender_id` int(11) DEFAULT NULL,
  `style_id` int(11) DEFAULT NULL,
  `fabric_id` int(11) DEFAULT NULL,
  `collar_id` int(11) DEFAULT NULL,
  `pocket_id` int(11) DEFAULT NULL,
  `hem_id` int(11) DEFAULT NULL,
  `button_id` int(11) DEFAULT NULL,
  `ty_id` int(11) DEFAULT NULL,
  `shirt_id` int(11) DEFAULT NULL,
  `lining_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `es_order_details`
--

INSERT INTO `es_order_details` (`id`, `gender_id`, `style_id`, `fabric_id`, `collar_id`, `pocket_id`, `hem_id`, `button_id`, `ty_id`, `shirt_id`, `lining_id`, `image_id`, `order_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 2, 2, 1, 3, 2, 2, 7, 12, 12, NULL, NULL, 2);

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

--
-- Dumping data for table `es_pockets`
--

INSERT INTO `es_pockets` (`id`, `name`, `desc`, `image_id`) VALUES
(1, 'ノーマル', 'ノーマル', 13),
(2, 'ハッキング', 'ハッキング', 14),
(3, 'アウト', 'アウト', 15);

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

--
-- Dumping data for table `es_prices`
--

INSERT INTO `es_prices` (`id`, `name`, `desc`) VALUES
(1, '５０，０００円以下', '５０，０００円以下'),
(2, '５０，００１円～７５，０００円', '５０，００１円～７５，０００円'),
(3, '７５，００１円～１００，０００円', '７５，００１円～１００，０００円'),
(4, '１００，００１円以上', '１００，００１円以上');

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

--
-- Dumping data for table `es_questions`
--

INSERT INTO `es_questions` (`id`, `name`, `create_date`, `addition`) VALUES
(1, '年齢', NULL, NULL),
(2, '職業', NULL, NULL),
(3, '当店を知ったきっかけ', NULL, NULL),
(4, 'スーツを何着お持ちですか？', NULL, NULL),
(5, 'スーツにかけられる予算は？', NULL, NULL),
(6, '好みの色は', NULL, NULL),
(7, 'ホームページに紹介しても良いですか？', NULL, NULL),
(8, 'スーツを選ぶ際に最も優先することは?', NULL, NULL),
(9, 'スーツのコーディネートで一番悩むところは?', NULL, NULL),
(10, 'スーツ以外にオーダーしてみたいものは?', NULL, NULL);

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

--
-- Dumping data for table `es_seasons`
--

INSERT INTO `es_seasons` (`id`, `name`, `desc`) VALUES
(1, '春夏', '春夏'),
(2, '秋冬', '秋冬');

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

--
-- Dumping data for table `es_shirts`
--

INSERT INTO `es_shirts` (`id`, `name`, `type`, `desc`, `image_id`, `image_mirror_id`) VALUES
(1, '39', 'オックス', '39', 70, 120),
(2, '20', 'オックス', '20', 71, 121),
(3, '22', 'オックス', '22', 72, 122),
(4, '24', 'オックス', '24', 73, 123),
(5, '26', 'オックス', '26', 74, 124),
(6, '5350', 'ストライプ', '5350', 76, 125),
(7, '5351', 'ストライプ', '5351', 77, 126),
(8, '5360', 'ストライプ', '5360', 78, 127),
(9, '5361', 'ストライプ', '5361', 79, 128),
(10, '5425', 'ストライプ', '5425', 80, 129),
(11, '5426', 'ストライプ', '5426', 81, 130),
(12, '161', 'ロンスト', '161', 82, 131),
(13, '162', 'ロンスト', '162', 83, 132),
(14, '163', 'ロンスト', '163', 84, 133),
(15, '164', 'ロンスト', '164', 85, 134),
(16, '165', 'ロンスト', '165', 86, 135),
(17, '430522', 'チェック', '430522', 87, 136),
(18, '430536', 'チェック', '430536', 88, 137),
(19, '13009732', 'チェック', '13009732', 89, 138),
(20, '13009749', 'チェック', '13009749', 90, 139),
(21, '45000292', 'チェック', '45000292', 91, 140),
(22, '45000301', 'チェック', '45000301', 92, 141);

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

--
-- Dumping data for table `es_small_brands`
--

INSERT INTO `es_small_brands` (`id`, `name`, `desc`, `big_brand_id`) VALUES
(1, '大同毛織', '大同毛織', 1),
(2, '御幸毛織', '御幸毛織', 1),
(3, 'その他', 'その他', 1),
(4, 'CANONICO', 'CANONICO', 2),
(5, 'Ermenegildo Zegna', 'Ermenegildo Zegna', 2),
(6, 'Loro Piana', 'Loro Piana', 2),
(7, 'その他', 'その他', 2),
(8, 'Dormeuil', 'Dormeuil', 3),
(9, 'Dunhill', 'Dunhill', 3),
(10, 'Scabal', 'Scabal', 3),
(11, 'Taylor & Lodge', 'Taylor & Lodge', 3),
(12, 'Hardy Amies', 'Hardy Amies', 3),
(13, 'その他', 'その他', 3);

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

--
-- Dumping data for table `es_small_traceries`
--

INSERT INTO `es_small_traceries` (`id`, `name`, `desc`, `big_tracery_id`) VALUES
(1, '細いストライプ', '細いストライプ', 2),
(2, '太いストライプ', '太いストライプ', 2),
(3, '柄ストライプ', '柄ストライプ', 2),
(4, 'その他', 'その他', 2),
(5, 'ウインドウペン', 'ウインドウペン', 3),
(6, 'チェック', 'チェック', 3),
(7, 'その他', 'その他', 3),
(8, '織り柄', '織り柄', 4),
(9, 'その他', 'その他', 4);

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

--
-- Dumping data for table `es_styles`
--

INSERT INTO `es_styles` (`id`, `name`, `desc`, `image_id`) VALUES
(1, '２つボタン', '２つボタン', 3),
(2, '３つボタン', '３つボタン', 4),
(3, 'ダブル４×２', 'ダブル４×２', 5);

-- --------------------------------------------------------

--
-- Table structure for table `es_surveys`
--

CREATE TABLE IF NOT EXISTS `es_surveys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `es_surveys`
--

INSERT INTO `es_surveys` (`id`, `name`) VALUES
(1, 'Default'),
(2, 'Gentlemen Survey'),
(3, 'Lady Survey');

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

--
-- Dumping data for table `es_ties`
--

INSERT INTO `es_ties` (`id`, `name`, `type`, `desc`, `image_id`, `image_mirror_id`) VALUES
(1, 'ＳＴ1', 'ストライプ', 'ＳＴ1', 42, 93),
(2, 'ＳＴ2', 'ストライプ', 'ＳＴ2', 43, 94),
(3, 'ＳＴ3', 'ストライプ', 'ＳＴ3', 44, 95),
(4, 'ＳＴ4', 'ストライプ', 'ＳＴ4', 45, 96),
(5, 'ＳＴ5', 'ストライプ', 'ＳＴ5', 46, 97),
(6, 'ＳＴ6', 'ストライプ', 'ＳＴ6', 47, 98),
(7, 'DO1', 'ドット', 'DO1', 48, 99),
(8, 'DO2', 'ドット', 'DO2', 49, 100),
(9, 'DO3', 'ドット', 'DO3', 50, 101),
(10, 'DO4', 'ドット', 'DO4', 51, 102),
(11, 'DO5', 'ドット', 'DO5', 52, 103),
(12, 'DO6', 'ドット', 'DO6', 53, 104),
(13, 'SO1', 'ソリッド', 'SO1', 54, 105),
(14, 'SO2', 'ソリッド', 'SO2', 55, 106),
(15, 'SO3', 'ソリッド', 'SO3', 56, 107),
(16, 'SO4', 'ソリッド', 'SO4', 57, 108),
(17, 'SO5', 'ソリッド', 'SO5', 58, 109),
(18, 'SO6', 'ソリッド', 'SO6', 59, 110),
(19, 'CH1', 'チェック', 'CH1', 60, 111),
(20, 'CH2', 'チェック', 'CH2', 61, 112),
(21, 'CH3', 'チェック', 'CH3', 62, 113),
(22, 'CH4', 'チェック', 'CH4', 0, NULL),
(23, 'CH5', 'チェック', 'CH5', 0, NULL),
(24, 'CH6', 'チェック', 'CH6', 0, NULL),
(25, 'PR1', 'プリント', 'PR1', 63, 114),
(26, 'PR2', 'プリント', 'PR2', 64, 115),
(27, 'PR3', 'プリント', 'PR3', 66, 116),
(28, 'PR4', 'プリント', 'PR4', 67, 117),
(29, 'PR5', 'プリント', 'PR5', 68, 118),
(30, 'PR6', 'プリント', 'PR6', 69, 119);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `es_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `questions_surveys`
--

CREATE TABLE IF NOT EXISTS `questions_surveys` (
  `question_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`,`survey_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions_surveys`
--

INSERT INTO `questions_surveys` (`question_id`, `survey_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1);
