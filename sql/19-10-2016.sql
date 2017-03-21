-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.11 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for euro-block
DROP DATABASE IF EXISTS `euro-block`;
CREATE DATABASE IF NOT EXISTS `euro-block` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `euro-block`;


-- Dumping structure for table euro-block.blocks
DROP TABLE IF EXISTS `blocks`;
CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.blocks: ~10 rows (approximately)
DELETE FROM `blocks`;
/*!40000 ALTER TABLE `blocks` DISABLE KEYS */;
INSERT INTO `blocks` (`id`, `name`, `img`) VALUES
	(1, 'Блок стеновой', '/img/products/block01.png'),
	(2, 'Блок перегородочный ', '/img/products/block02.png'),
	(3, 'Блок рядовой', '/img/products/block03.png'),
	(4, 'Блок угловой', '/img/products/block04.png'),
	(5, 'Блок половинчатый', '/img/products/block05.png'),
	(6, 'Блоки вентиляционные', '/img/products/Ventblock7.png'),
	(7, 'Евроблок', '/img/products/Euroblock6.png'),
	(8, 'Плитка бетонная', '/img/products/plitka01_red8.png'),
	(9, 'Бордюр', '/img/products/bordur3 11.png'),
	(10, 'Щебень', '/img/products/scheb_gr_4(14).png');
/*!40000 ALTER TABLE `blocks` ENABLE KEYS */;


-- Dumping structure for table euro-block.blocks_settlements
DROP TABLE IF EXISTS `blocks_settlements`;
CREATE TABLE IF NOT EXISTS `blocks_settlements` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `block_id` int(10) unsigned NOT NULL,
  `settlement_id` int(10) unsigned NOT NULL,
  `with_crane` float DEFAULT NULL,
  `without_crane` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=232 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.blocks_settlements: ~217 rows (approximately)
DELETE FROM `blocks_settlements`;
/*!40000 ALTER TABLE `blocks_settlements` DISABLE KEYS */;
INSERT INTO `blocks_settlements` (`id`, `block_id`, `settlement_id`, `with_crane`, `without_crane`) VALUES
	(1, 1, 1, 19, 24),
	(2, 2, 1, 9.5, 12),
	(3, 3, 1, 30.4, 38.4),
	(4, 4, 1, 30.4, 38.4),
	(5, 5, 1, 15.2, 19.2),
	(6, 1, 2, 17, 22),
	(7, 2, 2, 8.5, 11),
	(8, 3, 2, 29.6, 37.6),
	(9, 4, 2, 39.6, 37.6),
	(10, 5, 2, 14.8, 18.8),
	(11, 1, 3, 19, 24),
	(12, 2, 3, 9.5, 12),
	(13, 3, 3, 30.4, 38.4),
	(14, 4, 3, 30.4, 38.4),
	(15, 5, 3, 15.2, 19.2),
	(16, 1, 4, 10, 15),
	(17, 2, 4, 5, 7.5),
	(18, 3, 4, 16, 24),
	(19, 4, 4, 16, 24),
	(21, 1, 5, 10, 15),
	(22, 2, 5, 5, 7.5),
	(23, 3, 5, 16, 24),
	(24, 4, 5, 16, 24),
	(25, 5, 5, 8, 12),
	(26, 5, 4, 8, 12),
	(27, 1, 6, 15, 20),
	(28, 2, 6, 7.5, 10),
	(29, 3, 6, 24, 32),
	(30, 4, 6, 24, 32),
	(31, 5, 6, 12, 16),
	(32, 1, 7, 9, 14),
	(33, 2, 7, 4.5, 7),
	(34, 3, 7, 14.4, 22.4),
	(35, 4, 7, 14.4, 22.4),
	(36, 5, 7, 7.2, 11.2),
	(37, 1, 8, 11, 16),
	(38, 2, 8, 5.5, 8),
	(39, 3, 8, 17.6, 25.6),
	(40, 4, 8, 17.6, 25.6),
	(41, 5, 8, 8.8, 12.8),
	(42, 1, 9, 12, 17),
	(43, 2, 9, 6, 8.5),
	(44, 3, 9, 19.2, 27.2),
	(45, 4, 9, 19.2, 27.2),
	(46, 5, 9, 9.6, 13.6),
	(47, 1, 10, 13, 18),
	(48, 2, 10, 6.5, 9),
	(49, 3, 10, 20.8, 28.8),
	(50, 4, 10, 20.8, 28.8),
	(51, 5, 10, 10.4, 14.4),
	(52, 1, 11, 9, 14),
	(53, 2, 11, 4.5, 7),
	(54, 3, 11, 14.4, 22.4),
	(55, 4, 11, 14.4, 22.4),
	(56, 5, 11, 7.2, 11.2),
	(57, 1, 12, 38, 43),
	(58, 2, 12, 19, 21),
	(59, 3, 12, 61.4, 69.4),
	(60, 4, 12, 61.4, 69.4),
	(61, 5, 12, 30.2, 34.7),
	(62, 1, 13, 39, 44),
	(63, 2, 13, 19.5, 22),
	(64, 3, 13, 62.4, 70.4),
	(65, 4, 13, 62.4, 70.4),
	(66, 5, 13, 31.2, 35.2),
	(67, 1, 14, 39, 44),
	(68, 2, 14, 19.5, 22),
	(69, 3, 14, 62.4, 70.4),
	(70, 4, 14, 62.1, 70.4),
	(71, 5, 14, 31.2, 35.2),
	(72, 1, 15, 21, 26),
	(73, 2, 15, 10.5, 13),
	(74, 3, 15, 33.6, 41.6),
	(75, 4, 15, 33.6, 41.6),
	(76, 5, 15, 16.8, 20.8),
	(77, 1, 16, 36, 41),
	(78, 2, 16, 18, 20.5),
	(79, 3, 16, 57.6, 65.6),
	(80, 4, 16, 57.6, 65.6),
	(81, 5, 16, 28.8, 32.8),
	(82, 1, 17, 15, 20),
	(83, 2, 17, 7.5, 10),
	(84, 3, 17, 24, 32),
	(85, 4, 17, 24, 32),
	(86, 5, 17, 12, 16),
	(87, 1, 18, 9, 14),
	(88, 2, 18, 4.5, 7),
	(89, 3, 18, 14.4, 22.4),
	(90, 4, 18, 14.4, 22.4),
	(91, 5, 18, 7.2, 11.2),
	(92, 1, 19, 25, 30),
	(93, 2, 19, 12.5, 15),
	(94, 3, 19, 40, 48),
	(95, 4, 19, 40, 48),
	(96, 5, 19, 20, 24),
	(97, 1, 20, 20, 25),
	(98, 2, 20, 10, 12.5),
	(99, 3, 20, 32.6, 40.6),
	(100, 4, 20, 32.6, 40.6),
	(101, 5, 20, 16.3, 20.3),
	(102, 1, 21, 9, 14),
	(103, 2, 21, 4.5, 14),
	(104, 3, 21, 14.4, 22.4),
	(105, 4, 21, 14.4, 22.4),
	(106, 5, 21, 7.2, 11.2),
	(107, 1, 22, 31, 36),
	(108, 2, 22, 15.5, 18),
	(109, 3, 22, 43.6, 51.6),
	(110, 4, 22, 43.6, 51.6),
	(111, 5, 22, 21.8, 25.8),
	(112, 1, 23, 15, 20),
	(113, 2, 23, 7.5, 10),
	(114, 3, 23, 24, 32),
	(115, 4, 23, 24, 32),
	(116, 5, 23, 12, 16),
	(117, 1, 24, 9, 14),
	(118, 2, 24, 4.5, 7),
	(119, 3, 24, 14.4, 22.4),
	(120, 4, 24, 14.4, 22.4),
	(121, 5, 24, 7.2, 11.2),
	(122, 1, 25, 21, 26),
	(123, 2, 25, 10.5, 13),
	(124, 3, 25, 33.6, 41.6),
	(125, 4, 25, 33.6, 41.6),
	(126, 5, 25, 16.8, 20.8),
	(127, 1, 26, 11, 16),
	(128, 2, 26, 5.5, 8),
	(129, 3, 26, 17.6, 25.6),
	(130, 4, 26, 17.6, 25.6),
	(131, 5, 26, 8.8, 12.8),
	(132, 1, 27, 20, 25),
	(133, 2, 27, 10, 12.5),
	(134, 3, 27, 32, 40),
	(135, 4, 27, 32, 40),
	(136, 5, 27, 16, 20),
	(137, 1, 28, 15, 20),
	(138, 2, 28, 7.5, 10),
	(139, 3, 28, 24, 32),
	(140, 4, 28, 24, 32),
	(141, 5, 28, 12, 16),
	(142, 1, 29, 9, 14),
	(143, 2, 29, 4.5, 7),
	(144, 3, 29, 14.4, 22.4),
	(145, 4, 29, 14.4, 22.4),
	(146, 5, 29, 7.2, 11.2),
	(147, 1, 30, 20, 25),
	(148, 2, 30, 10, 12.2),
	(149, 3, 30, 32.6, 40.6),
	(150, 4, 30, 32.6, 40.6),
	(151, 5, 30, 16.3, 20.3),
	(152, 1, 31, 10, 15),
	(153, 2, 31, 5, 7.5),
	(154, 3, 31, 16, 24),
	(155, 4, 31, 16, 24),
	(156, 5, 31, 8, 12),
	(157, 1, 32, 8, 13),
	(158, 2, 32, 4, 6.5),
	(159, 3, 32, 12.8, 20.8),
	(160, 4, 32, 12.8, 20.8),
	(161, 5, 32, 6.4, 10.4),
	(162, 1, 33, 16, 21),
	(163, 2, 33, 8, 10.5),
	(164, 3, 33, 25, 33),
	(165, 4, 33, 25, 33),
	(166, 5, 33, 12.5, 16.5),
	(167, 1, 34, 17, 22),
	(168, 2, 34, 8.5, 11),
	(169, 3, 34, 26, 34),
	(170, 4, 34, 26, 34),
	(171, 5, 34, 13, 17),
	(172, 1, 35, 18, 23),
	(173, 2, 35, 9, 11.5),
	(174, 3, 35, 28.8, 36.8),
	(175, 4, 35, 28.8, 36.8),
	(176, 5, 35, 14.4, 18.4),
	(177, 1, 36, 14, 19),
	(178, 2, 36, 7, 9.5),
	(179, 3, 36, 22.4, 30.4),
	(180, 4, 36, 22.4, 30.4),
	(181, 5, 36, 11.2, 15.2),
	(182, 1, 37, 9, 14),
	(183, 2, 37, 4.5, 7),
	(184, 3, 37, 14.4, 22.4),
	(185, 4, 37, 14.4, 22.4),
	(186, 5, 37, 7.2, 11.2),
	(187, 1, 38, 18, 23),
	(188, 2, 38, 9, 11.5),
	(189, 3, 38, 28.8, 36.5),
	(190, 4, 38, 28.8, 36.5),
	(191, 5, 38, 14.4, 18.4),
	(192, 1, 39, 4, 9),
	(193, 2, 39, 2, 4.5),
	(194, 3, 39, 10, 18),
	(195, 4, 39, 10, 18),
	(196, 5, 39, 5, 9),
	(197, 1, 40, 10, 15),
	(198, 2, 40, 5, 7.5),
	(199, 3, 40, 16, 24),
	(200, 4, 40, 16, 24),
	(201, 5, 40, 8, 12),
	(202, 1, 41, 10, 15),
	(203, 2, 41, 5, 7.5),
	(204, 3, 41, 16, 24),
	(205, 4, 41, 16, 24),
	(206, 5, 41, 8, 12),
	(207, 1, 42, 8, 13),
	(208, 2, 42, 4, 6.5),
	(209, 3, 42, 12.8, 20.8),
	(210, 4, 42, 12.8, 20.8),
	(211, 5, 42, 604, 10.4),
	(212, 1, 43, 14, 19),
	(213, 2, 43, 7, 9.5),
	(214, 3, 43, 22.4, 30.4),
	(215, 4, 43, 22.4, 30.4),
	(216, 5, 43, 11.2, 15.2),
	(217, 1, 44, 28, 33),
	(218, 2, 44, 28, 33),
	(219, 3, 44, 44.8, 52.8),
	(220, 4, 44, 44.8, 52.8),
	(221, 5, 44, 22.4, 26.4),
	(222, 1, 45, 16, 21),
	(223, 2, 45, 8, 10.5),
	(224, 3, 45, 25.6, 33.6),
	(225, 4, 45, 25.6, 33.6),
	(226, 5, 45, 12.8, 16.8),
	(227, 1, 46, 28, 33),
	(228, 2, 46, 14, 16.5),
	(229, 3, 46, 44.8, 52.8),
	(230, 4, 46, 44.8, 52.8),
	(231, 5, 46, 22.4, 26.4);
/*!40000 ALTER TABLE `blocks_settlements` ENABLE KEYS */;


-- Dumping structure for table euro-block.groups
DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.groups: ~2 rows (approximately)
DELETE FROM `groups`;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'members', 'General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Dumping structure for table euro-block.members_type
DROP TABLE IF EXISTS `members_type`;
CREATE TABLE IF NOT EXISTS `members_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.members_type: ~2 rows (approximately)
DELETE FROM `members_type`;
/*!40000 ALTER TABLE `members_type` DISABLE KEYS */;
INSERT INTO `members_type` (`id`, `name`) VALUES
	(1, 'individual'),
	(2, 'organization');
/*!40000 ALTER TABLE `members_type` ENABLE KEYS */;


-- Dumping structure for table euro-block.ordered_products
DROP TABLE IF EXISTS `ordered_products`;
CREATE TABLE IF NOT EXISTS `ordered_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `block_name` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `block_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ordered_products_orders` (`order_id`),
  CONSTRAINT `FK_ordered_products_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.ordered_products: ~63 rows (approximately)
DELETE FROM `ordered_products`;
/*!40000 ALTER TABLE `ordered_products` DISABLE KEYS */;
INSERT INTO `ordered_products` (`id`, `order_id`, `product_id`, `name`, `price`, `block_name`, `amount`, `total_price`, `block_id`) VALUES
	(8, 7, 5, 'с пенополистирольным вкладышем M35', 215, 'Блок рядовой', 321, 69015, NULL),
	(9, 8, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 32, 1888, NULL),
	(10, 8, 2, 'андезитобазальтовый М75', 62, 'Блок стеновой', 21, 1302, NULL),
	(11, 8, 3, 'андезитобазальтовый М100', 68, 'Блок стеновой', 12, 816, NULL),
	(12, 9, 16, 'Порода: базальт, андезитобазальт', 650, 'Щебень', 1, 650, NULL),
	(13, 10, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 545, 19075, NULL),
	(14, 11, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059, NULL),
	(15, 12, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059, NULL),
	(16, 13, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059, NULL),
	(17, 14, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059, NULL),
	(18, 15, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059, NULL),
	(19, 16, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059, NULL),
	(20, 17, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 246, 8118, NULL),
	(21, 18, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 246, 8118, NULL),
	(22, 19, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 246, 8118, NULL),
	(23, 20, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177, NULL),
	(24, 21, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177, NULL),
	(25, 22, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177, NULL),
	(26, 23, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177, NULL),
	(27, 24, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177, NULL),
	(28, 25, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177, NULL),
	(29, 26, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 0, 0, NULL),
	(30, 26, 2, 'андезитобазальтовый М75', 62, 'Блок стеновой', 0, 0, NULL),
	(31, 26, 3, 'андезитобазальтовый М100', 68, 'Блок стеновой', 32, 2176, NULL),
	(32, 27, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 12, 708, NULL),
	(33, 27, 2, 'андезитобазальтовый М75', 62, 'Блок стеновой', 312, 19344, NULL),
	(34, 27, 3, 'андезитобазальтовый М100', 68, 'Блок стеновой', 12, 816, NULL),
	(35, 28, 8, 'андезитобазальтовые', 370, 'Блоки вентиляционные', 3, 1110, NULL),
	(36, 28, 10, 'тротуарная фигурная "Волна"', 690, 'Плитка бетонная', 32, 22080, NULL),
	(37, 28, 11, 'тротуарная прямоугольная', 670, 'Плитка бетонная', 0, 0, NULL),
	(38, 28, 12, '«Старый город»', 570, 'Плитка бетонная', 0, 0, NULL),
	(39, 28, 13, '"Квадрат"', 535, 'Плитка бетонная', 0, 0, NULL),
	(40, 28, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 3, 99, NULL),
	(41, 29, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 1, 35, NULL),
	(42, 29, 10, 'тротуарная фигурная "Волна"', 690, 'Плитка бетонная', 3, 2070, NULL),
	(43, 29, 11, 'тротуарная прямоугольная', 670, 'Плитка бетонная', 4, 2680, NULL),
	(44, 29, 12, '«Старый город»', 570, 'Плитка бетонная', 1, 570, NULL),
	(45, 29, 13, '"Квадрат"', 535, 'Плитка бетонная', 2, 1070, NULL),
	(46, 30, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 3, 177, NULL),
	(47, 30, 2, 'андезитобазальтовый М75', 62, 'Блок стеновой', 2, 124, NULL),
	(48, 30, 3, 'андезитобазальтовый М100', 68, 'Блок стеновой', 4, 272, NULL),
	(49, 31, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(50, 32, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(51, 33, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(52, 34, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(53, 35, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(54, 36, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 23, 1357, NULL),
	(55, 36, 2, 'андезитобазальтовый М75', 62, 'Блок стеновой', 23, 1426, NULL),
	(56, 36, 3, 'андезитобазальтовый М100', 68, 'Блок стеновой', 23, 1564, NULL),
	(57, 37, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(58, 38, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(59, 39, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 9, 315, NULL),
	(60, 40, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 5, 175, NULL),
	(61, 41, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(62, 42, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(63, 43, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(64, 44, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(65, 45, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(66, 46, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(67, 47, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 5, 175, NULL),
	(68, 48, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 2, 70, NULL),
	(69, 49, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 2, 118, NULL),
	(70, 50, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 23, 1357, NULL),
	(71, 66, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 23, 1357, 1),
	(72, 66, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 3, 105, 2),
	(73, 67, 6, 'с пенополистирольным вкладышем M35', 245, 'Блок угловой', 16, 3920, 4),
	(74, 67, 14, 'Тротуарный', 180, 'Бордюр', 123, 22140, 9),
	(75, 68, 16, 'Порода: базальт, андезитобазальт', 650, 'Щебень', 4, 2600, 10),
	(76, 69, 16, 'Порода: базальт, андезитобазальт', 650, 'Щебень', 23, 14950, 10),
	(77, 70, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 823, 28805, 2),
	(78, 70, 3, 'андезитобазальтовый М100', 68, 'Блок стеновой', 21, 1428, 1);
/*!40000 ALTER TABLE `ordered_products` ENABLE KEYS */;


-- Dumping structure for table euro-block.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_date` date DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `number_of_pallets` int(10) unsigned NOT NULL,
  `street` varchar(30) DEFAULT NULL,
  `paid` float unsigned NOT NULL DEFAULT '0',
  `blocks_shipped` int(10) unsigned DEFAULT NULL,
  `blocks_left` int(10) unsigned DEFAULT NULL,
  `pallets_shipped` int(10) unsigned DEFAULT NULL,
  `pallets_left` int(10) unsigned DEFAULT NULL,
  `settlement` varchar(30) DEFAULT NULL,
  `crane` tinyint(3) unsigned DEFAULT NULL,
  `payment_type` varchar(20) NOT NULL,
  `delivery_cost` float DEFAULT NULL,
  `sum` float NOT NULL,
  `is_active` tinyint(3) unsigned NOT NULL,
  `is_done` tinyint(3) unsigned NOT NULL,
  `manager_id` int(10) unsigned DEFAULT NULL,
  `order_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `FK_orders_users_2` (`manager_id`),
  CONSTRAINT `FK_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FK_orders_users_2` FOREIGN KEY (`manager_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.orders: ~63 rows (approximately)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `delivery_date`, `city`, `user_id`, `number_of_pallets`, `street`, `paid`, `blocks_shipped`, `blocks_left`, `pallets_shipped`, `pallets_left`, `settlement`, `crane`, `payment_type`, `delivery_cost`, `sum`, `is_active`, `is_done`, `manager_id`, `order_date`) VALUES
	(7, '2016-08-17', 'sdf', 1, 0, 'sdf', 0, NULL, NULL, NULL, NULL, 'sdf', 0, 'requisites', NULL, 69015, 1, 0, NULL, '0000-00-00 00:00:00'),
	(8, '2016-08-10', 'LOL', 1, 0, 'OLO', 0, NULL, NULL, NULL, NULL, 'LOL', 1, 'cash', NULL, 4006, 1, 0, NULL, '0000-00-00 00:00:00'),
	(9, '2016-08-02', '312', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', NULL, 'requisites', NULL, 650, 1, 0, NULL, '0000-00-00 00:00:00'),
	(10, '2016-08-28', '312', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', NULL, 19075, 1, 0, NULL, '0000-00-00 00:00:00'),
	(11, '2016-08-17', '123', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', NULL, 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(12, '2016-08-17', '123', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', NULL, 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(13, '2016-08-17', '123', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', NULL, 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(14, '2016-08-17', '123', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', NULL, 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(15, '2016-08-17', '123', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', NULL, 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(16, '2016-08-17', '123', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', NULL, 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(17, '2016-08-10', '313', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'cash', NULL, 8118, 1, 0, NULL, '0000-00-00 00:00:00'),
	(18, '2016-08-10', '313', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'cash', NULL, 8118, 1, 0, NULL, '0000-00-00 00:00:00'),
	(19, '2016-08-10', '313', 1, 0, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'cash', NULL, 8118, 1, 0, NULL, '0000-00-00 00:00:00'),
	(20, '2016-09-03', 'q', 1, 0, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', NULL, 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(21, '2016-09-03', 'q', 1, 0, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', NULL, 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(22, '2016-09-03', 'q', 1, 0, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', NULL, 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(23, '2016-09-03', 'q', 1, 0, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', NULL, 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(24, '2016-09-03', 'q', 1, 0, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', NULL, 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(25, '2016-09-03', 'q', 1, 0, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', NULL, 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(26, '2016-08-06', 'Москва', 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 1, 'score', NULL, 2176, 1, 0, NULL, '2016-12-16 00:00:00'),
	(27, '2016-08-18', 'Ривия', 1, 0, 'Советская', 2, 2, 4, 3, 4, 'Миерин', 1, 'score', NULL, 20868, 0, 1, 1, '2016-08-09 22:55:55'),
	(28, '2016-09-23', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 1, 'score', NULL, 23289, 1, 0, 1, '2016-09-02 03:23:02'),
	(29, '2016-10-07', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 0, 'score', NULL, 6425, 0, 1, 1, '2016-09-02 03:24:42'),
	(30, '2016-09-28', NULL, 4, 0, 'Кирова 5', 0, NULL, NULL, NULL, NULL, 'Москва', 0, 'score', NULL, 573, 1, 0, NULL, '2016-09-05 01:31:25'),
	(31, '2016-10-12', NULL, 1, 0, '323', 0, NULL, NULL, NULL, NULL, '2323', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 14:43:49'),
	(32, '2016-10-12', NULL, 1, 0, '323', 0, NULL, NULL, NULL, NULL, '2323', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 14:44:12'),
	(33, '2016-10-12', NULL, 1, 0, '323', 0, NULL, NULL, NULL, NULL, '2323', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 14:46:23'),
	(34, '2016-10-12', NULL, 1, 0, '323', 0, NULL, NULL, NULL, NULL, '2323', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 14:46:52'),
	(35, '2016-10-12', NULL, 1, 0, '323', 0, NULL, NULL, NULL, NULL, '2323', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 14:48:03'),
	(36, '2016-10-03', NULL, 1, 0, 'asd', 0, NULL, NULL, NULL, NULL, 'asd', 2, 'score', NULL, 4347, 1, 0, NULL, '2016-09-28 14:49:53'),
	(37, '2016-10-12', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 14:50:40'),
	(38, '2016-10-04', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 14:57:11'),
	(39, '2016-10-20', NULL, 1, 0, '5', 0, NULL, NULL, NULL, NULL, '5', 0, 'score', NULL, 315, 1, 0, NULL, '2016-09-28 15:09:42'),
	(40, '2016-10-12', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 0, 'score', NULL, 175, 1, 0, NULL, '2016-09-28 15:10:13'),
	(41, '2016-10-12', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 15:10:40'),
	(42, '2016-10-12', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 15:16:49'),
	(43, '2016-10-12', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 15:17:03'),
	(44, '2016-10-12', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 15:17:10'),
	(45, '2016-10-12', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 15:17:19'),
	(46, '2016-10-12', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 15:17:33'),
	(47, '0000-00-00', NULL, 1, 0, '2', 0, NULL, NULL, NULL, NULL, '2', 2, 'score', NULL, 175, 1, 0, 1, '2016-09-28 16:44:34'),
	(48, '0000-00-00', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, '123', 2, 'score', NULL, 70, 1, 0, NULL, '2016-09-28 16:46:42'),
	(49, '2016-10-20', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, '123', 0, 'requisites', NULL, 118, 1, 0, NULL, '2016-10-07 01:47:12'),
	(50, '2016-10-25', NULL, 5, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 0, 'requisites', NULL, 1357, 1, 0, NULL, '2016-10-07 02:01:07'),
	(51, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:19:06'),
	(52, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:21:16'),
	(53, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:21:20'),
	(54, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:21:21'),
	(55, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:21:25'),
	(56, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:21:29'),
	(57, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:21:41'),
	(58, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:21:52'),
	(59, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:23:41'),
	(60, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:23:47'),
	(61, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:23:55'),
	(62, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:24:26'),
	(63, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:24:28'),
	(64, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:24:29'),
	(65, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:24:41'),
	(66, '2016-10-25', NULL, 1, 0, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 0, 'score', 343, 1462, 1, 0, NULL, '2016-10-18 00:25:07'),
	(67, '2016-10-27', NULL, 1, 0, 'OLO', 0, NULL, NULL, NULL, NULL, 'Андреевка', 0, 'score', 3336, 26060, 1, 0, NULL, '2016-10-18 00:34:41'),
	(68, '2016-10-27', NULL, 1, 0, '123', 0, NULL, NULL, NULL, NULL, 'Воздвиженка', 1, 'requisites', 0, 2600, 1, 0, NULL, '2016-10-18 01:21:44'),
	(69, '2016-11-02', NULL, 1, 0, 'sdf', 0, NULL, NULL, NULL, NULL, 'Славянка', 0, 'requisites', 529, 14950, 1, 0, NULL, '2016-10-18 01:23:11'),
	(70, '2016-10-26', NULL, 1, 9, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Андреевка', 0, 'score', 14178, 30233, 1, 0, NULL, '2016-10-19 01:27:42');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;


-- Dumping structure for table euro-block.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `weight` float DEFAULT NULL,
  `average_density` float DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `transcalency` float DEFAULT NULL,
  `water_absorption` float DEFAULT NULL,
  `pallets` int(11) DEFAULT NULL,
  `frost_resistance` varchar(20) DEFAULT NULL,
  `fire_resistance` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_products_blocks` (`block_id`),
  CONSTRAINT `FK_products_blocks` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.products: ~16 rows (approximately)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `block_id`, `name`, `price`, `weight`, `average_density`, `size`, `transcalency`, `water_absorption`, `pallets`, `frost_resistance`, `fire_resistance`) VALUES
	(1, 1, 'андезитобазальтовый М50', 59, 19.5, 1450, '390×190×188', 0.45, 8.79, 72, 'F50', 2.5),
	(2, 1, 'андезитобазальтовый М75', 62, 21, 1500, '390×190×188', 0.45, 8.79, 72, 'F50', 2.5),
	(3, 1, 'андезитобазальтовый М100', 68, 22, 1550, '390×190×188', 0.45, 8.79, 72, 'F50', 2.5),
	(4, 2, 'андезитобазальтовый M35', 35, 9.5, 1390, '390×90×188', NULL, 8.79, 144, NULL, 0.75),
	(5, 3, 'с пенополистирольным вкладышем M35', 215, 18.5, 1000, '390×288×188', 0.085, NULL, 36, 'F35', NULL),
	(6, 4, 'с пенополистирольным вкладышем M35', 245, 21, 1000, '495×288×188', 0.085, NULL, 36, 'F35', NULL),
	(7, 5, 'с пенополистирольным вкладышем M35', 130, NULL, 1000, '190×288×188', 0.085, NULL, 72, 'F35', NULL),
	(8, 6, 'андезитобазальтовые', 370, NULL, NULL, '910х300х180', NULL, NULL, 72, NULL, NULL),
	(9, 7, 'андезитобазальтовый М50', 33, 15, 1050, '390×190×188', 0.35, 8.79, 72, 'F50', NULL),
	(10, 8, 'тротуарная фигурная "Волна"', 690, NULL, NULL, '225×125×80', NULL, NULL, 60, NULL, NULL),
	(11, 8, 'тротуарная прямоугольная', 670, NULL, NULL, '260×85×60', NULL, NULL, 60, NULL, NULL),
	(12, 8, '«Старый город»', 570, NULL, NULL, '180×120×60', NULL, NULL, 60, NULL, NULL),
	(13, 8, '"Квадрат"', 535, NULL, NULL, '120×120×60', NULL, NULL, 60, NULL, NULL),
	(14, 9, 'Тротуарный', 180, 22, NULL, '600х200х80', NULL, NULL, 60, NULL, NULL),
	(15, 9, 'Дорожный', 620, 90, NULL, '900x300x150', NULL, NULL, 90, NULL, NULL),
	(16, 10, 'Порода: базальт, андезитобазальт', 650, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


-- Dumping structure for table euro-block.settlements
DROP TABLE IF EXISTS `settlements`;
CREATE TABLE IF NOT EXISTS `settlements` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `kilometers` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COMMENT='Contains the list of the cities, a distance in kilometers and cost of delivery';

-- Dumping data for table euro-block.settlements: ~45 rows (approximately)
DELETE FROM `settlements`;
/*!40000 ALTER TABLE `settlements` DISABLE KEYS */;
INSERT INTO `settlements` (`id`, `name`, `kilometers`) VALUES
	(1, 'Андреевка', 156),
	(2, 'Анисимовка', 136),
	(3, 'Арсеньев', 169),
	(4, 'Артем', 64),
	(5, 'Барабаш', 74),
	(6, 'Большой камень', 129),
	(7, 'Воздвиженка', 40),
	(8, 'Владивосток (Заря. Бам. Снеговая падь)', 84),
	(9, 'Владивосток (Центр. Баляева)', 84),
	(10, 'Владивосток (Эгершельд. Тихая. Чуркин)', 84),
	(11, 'В.Надеждинск', 48),
	(12, 'Дальнегорск', 421),
	(13, 'Дальнереченск', 339),
	(14, 'Де-фриз', 61),
	(15, 'Зарубино', 157),
	(16, 'Кавалерово', 356),
	(17, 'Камень - Рыболов', 139),
	(18, 'Кипарисово', 33),
	(19, 'Кировский', 236),
	(20, 'Краскино', 174),
	(21, 'Каймановка', 37),
	(22, 'Лесозаводск', 292),
	(23, 'Лукьяновка', 130),
	(24, 'Михайловка', 45),
	(25, 'Находка', 198),
	(26, 'Новошахтинский', 69),
	(27, 'Партизанск', 187),
	(28, 'Пограничный', 125),
	(29, 'Покровка', 63),
	(30, 'Посьет', 177),
	(31, 'Пуцыловка', 59),
	(32, 'Раздольное', 18),
	(33, 'о.Русский', 113),
	(34, 'Сибирцево', 97),
	(35, 'Славянка', 126),
	(36, 'Смоляниново', 103),
	(37, 'Соловей Ключ', 50),
	(38, 'Спасск-Дальний', 152),
	(39, 'Тереховка', NULL),
	(40, 'Угловое.Трудовое', NULL),
	(41, 'Угольная, Весенняя', NULL),
	(42, 'Уссурийск', 28),
	(43, 'Шкотово', 90),
	(44, 'Чугуевка', 246),
	(45, 'Хороль', 105),
	(46, 'Хасан', 221);
/*!40000 ALTER TABLE `settlements` ENABLE KEYS */;


-- Dumping structure for table euro-block.status
DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.status: ~2 rows (approximately)
DELETE FROM `status`;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` (`id`, `status`) VALUES
	(1, 'active'),
	(2, 'arhive');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;


-- Dumping structure for table euro-block.type_of_ownership
DROP TABLE IF EXISTS `type_of_ownership`;
CREATE TABLE IF NOT EXISTS `type_of_ownership` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.type_of_ownership: ~3 rows (approximately)
DELETE FROM `type_of_ownership`;
/*!40000 ALTER TABLE `type_of_ownership` DISABLE KEYS */;
INSERT INTO `type_of_ownership` (`id`, `type`) VALUES
	(1, 'ООО'),
	(2, 'ОАО'),
	(3, 'ИП');
/*!40000 ALTER TABLE `type_of_ownership` ENABLE KEYS */;


-- Dumping structure for table euro-block.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `ownership_type_id` int(10) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `passport` varchar(100) DEFAULT NULL,
  `member_type` int(11) unsigned DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `registration_place` int(11) DEFAULT NULL,
  `issued_by` varchar(255) DEFAULT NULL,
  `legal_address` varchar(50) DEFAULT NULL,
  `inn` bigint(20) DEFAULT NULL,
  `kpp` bigint(20) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_members_type` (`member_type`),
  KEY `FK_users_type_of_ownership` (`ownership_type_id`),
  CONSTRAINT `FK_users_members_type` FOREIGN KEY (`member_type`) REFERENCES `members_type` (`id`),
  CONSTRAINT `FK_users_type_of_ownership` FOREIGN KEY (`ownership_type_id`) REFERENCES `type_of_ownership` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.users: ~4 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `ownership_type_id`, `username`, `passport`, `member_type`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `registration_place`, `issued_by`, `legal_address`, `inn`, `kpp`) VALUES
	(1, '127.0.0.1', 1, 'administrator', NULL, 1, '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1476827303, 1, 'Admin', 'istrator', 'ADMIN', '0', NULL, NULL, NULL, NULL, NULL),
	(3, '127.0.0.1', NULL, 'geralt777', NULL, NULL, '$2y$08$CgJoPNEvk8EJLHT5EW.89OdGarn6zM8rUtLOBfjMT1ioiCnI0g.XG', NULL, 'geralt@from.rivia', NULL, NULL, NULL, NULL, 1470668133, 1470677159, 1, 'Geralt', 'Rivia', 'Kaer Morhen', '0988123123', NULL, NULL, NULL, NULL, NULL),
	(4, '127.0.0.1', 1, NULL, NULL, 2, '$2y$08$Kw/paXfiipE7hdd81INZhOwD8Mob5IcB9z3XFlxwcdJWzeu52A76C', NULL, 'druny195@rambler.ru', NULL, NULL, NULL, NULL, 1473028264, 1473028264, 1, 'Андрей', 'Даниленко', 'СК ОНИКС', '+380987584671', NULL, NULL, 'Балалаева, 6', 2147483647, 00000000002147483647),
	(5, '127.0.0.1', 1, NULL, NULL, 2, '$2y$08$E9BVI3b4dHD9eSiu8lHfG.a4GrGLhf9L/Kz.grm9KFdUM8Q5W66nO', NULL, 'druny1952@rambler.ru', NULL, NULL, NULL, NULL, 1475794828, 1475794828, 1, 'Андрей', 'Даниленко', 'LOL', '2536271013', NULL, NULL, '3313133', 2147483647, 00000000002147483647);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table euro-block.users_groups
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.users_groups: ~3 rows (approximately)
DELETE FROM `users_groups`;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(4, 3, 2),
	(5, 4, 2),
	(6, 5, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
