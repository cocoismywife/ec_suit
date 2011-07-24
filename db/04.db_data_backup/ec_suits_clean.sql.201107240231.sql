-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2011 at 06:31 下午
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `EC_SUITS`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `es_answers`
--


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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `es_buttons`
--

INSERT INTO `es_buttons` (`id`, `name`, `type`, `desc`, `image_id`) VALUES
(1, 'Ｊ44', 'J', '', 18),
(2, 'Ｊ08', 'J', '', 19),
(3, 'Ｊ56', 'J', '', 20),
(4, 'Ｊ66', 'J', '', 21),
(5, 'Ｊ28', 'J', '', 22),
(6, 'Ｊ09', 'J', '', 23),
(7, 'Ｘ44', 'X', '', 24),
(8, 'Ｘ56', 'X', '', 25),
(9, 'Ｘ58', 'X', '', 26),
(10, 'Ｘ93', 'X', '', 27),
(11, 'Ｘ98', 'X', '', 28),
(12, 'Ｘ01', 'X', '', 29),
(13, 'Ｔ42', 'T', '', 30),
(14, 'Ｔ48', 'T', '', 31),
(15, 'Ｔ53', 'T', '', 32),
(16, 'Ｔ58', 'T', '', 33),
(17, 'Ｔ93', 'T', '', 34),
(18, 'Ｔ98', 'T', '', 35),
(19, 'Ｎ01', 'N', '', 36),
(20, 'Ｎ02', 'N', '', 37),
(21, 'Ｎ03', 'N', '', 38),
(22, 'Ｎ04', 'N', '', 39),
(23, 'Ｈ46', 'N', '', 40),
(24, 'Ｈ43', 'N', '', 41);

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Page Seq.4\n生地選択' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `es_fabrics`
--


-- --------------------------------------------------------

--
-- Table structure for table `es_genders`
--

CREATE TABLE IF NOT EXISTS `es_genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Page Seq.2\n男女選択' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `es_genders`
--

INSERT INTO `es_genders` (`id`, `name`, `desc`, `image_id`) VALUES
(1, '男性', '男性', 1),
(2, '女性', '女性', 2);

-- --------------------------------------------------------

--
-- Table structure for table `es_hems`
--

CREATE TABLE IF NOT EXISTS `es_hems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `es_hems`
--

INSERT INTO `es_hems` (`id`, `name`, `desc`, `image_id`) VALUES
(1, 'シングル', 'シングル', 16),
(2, 'ダブル', 'ダブル', 17);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=93 ;

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
(92, 'img_flow17_45000301.png', 'files/images', '272738', 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `es_linings`
--

CREATE TABLE IF NOT EXISTS `es_linings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `es_linings`
--

INSERT INTO `es_linings` (`id`, `name`, `desc`, `image_id`) VALUES
(1, 'レギュラー', 'レギュラー', 6),
(2, '角台場', '角台場', 7),
(3, 'Ｒ台場', 'Ｒ台場', 8);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `es_orders`
--


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
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `es_order_details`
--


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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `es_shirts`
--

INSERT INTO `es_shirts` (`id`, `name`, `type`, `desc`, `image_id`) VALUES
(1, '39', 'オックス', '', 70),
(2, '20', 'オックス', '', 71),
(3, '22', 'オックス', '', 72),
(4, '24', 'オックス', '', 73),
(5, '26', 'オックス', '', 74),
(6, '5350', 'ストライプ', '', 76),
(7, '5351', 'ストライプ', '', 77),
(8, '5360', 'ストライプ', '', 78),
(9, '5361', 'ストライプ', '', 79),
(10, '5425', 'ストライプ', '', 80),
(11, '5426', 'ストライプ', '', 81),
(12, '161', 'ロンスト', '', 82),
(13, '162', 'ロンスト', '', 83),
(14, '163', 'ロンスト', '', 84),
(15, '164', 'ロンスト', '', 85),
(16, '165', 'ロンスト', '', 86),
(17, '430522', 'チェック', '', 87),
(18, '430536', 'チェック', '', 88),
(19, '13009732', 'チェック', '', 89),
(20, '13009749', 'チェック', '', 90),
(21, '45000292', 'チェック', '', 91),
(22, '45000301', 'チェック', '', 92);

-- --------------------------------------------------------

--
-- Table structure for table `es_shoes`
--

CREATE TABLE IF NOT EXISTS `es_shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `es_shoes`
--


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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `es_ties`
--

INSERT INTO `es_ties` (`id`, `name`, `type`, `desc`, `image_id`) VALUES
(1, 'ＳＴ1', 'ストライプ', '', 42),
(2, 'ＳＴ2', 'ストライプ', '', 43),
(3, 'ＳＴ3', 'ストライプ', '', 44),
(4, 'ＳＴ4', 'ストライプ', '', 45),
(5, 'ＳＴ5', 'ストライプ', '', 46),
(6, 'ＳＴ6', 'ストライプ', '', 47),
(7, 'DO1', 'ドット', '', 48),
(8, 'DO2', 'ドット', '', 49),
(9, 'DO3', 'ドット', '', 50),
(10, 'DO4', 'ドット', '', 51),
(11, 'DO5', 'ドット', '', 52),
(12, 'DO6', 'ドット', '', 53),
(13, 'SO1', 'ソリッド', '', 54),
(14, 'SO2', 'ソリッド', '', 55),
(15, 'SO3', 'ソリッド', '', 56),
(16, 'SO4', 'ソリッド', '', 57),
(17, 'SO5', 'ソリッド', '', 58),
(18, 'SO6', 'ソリッド', '', 59),
(19, 'CH1', 'チェック', '', 60),
(20, 'CH2', 'チェック', '', 61),
(21, 'CH3', 'チェック', '', 62),
(22, 'CH4', 'チェック', NULL, 0),
(23, 'CH5', 'チェック', NULL, 0),
(24, 'CH6', 'チェック', NULL, 0),
(25, 'PR1', 'プリント', '', 63),
(26, 'PR2', 'プリント', '', 64),
(27, 'PR3', 'プリント', '', 66),
(28, 'PR4', 'プリント', '', 67),
(29, 'PR5', 'プリント', '', 68),
(30, 'PR6', 'プリント', '', 69);

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
