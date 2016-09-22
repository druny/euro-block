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
  PRIMARY KEY (`id`),
  KEY `FK_ordered_products_orders` (`order_id`),
  CONSTRAINT `FK_ordered_products_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.ordered_products: ~38 rows (approximately)
DELETE FROM `ordered_products`;
/*!40000 ALTER TABLE `ordered_products` DISABLE KEYS */;
INSERT INTO `ordered_products` (`id`, `order_id`, `product_id`, `name`, `price`, `block_name`, `amount`, `total_price`) VALUES
	(8, 7, 5, 'с пенополистирольным вкладышем M35', 215, 'Блок рядовой', 321, 69015),
	(9, 8, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 32, 1888),
	(10, 8, 2, 'андезитобазальтовый М75', 62, 'Блок стеновой', 21, 1302),
	(11, 8, 3, 'андезитобазальтовый М100', 68, 'Блок стеновой', 12, 816),
	(12, 9, 16, 'Порода: базальт, андезитобазальт', 650, 'Щебень', 1, 650),
	(13, 10, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 545, 19075),
	(14, 11, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059),
	(15, 12, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059),
	(16, 13, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059),
	(17, 14, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059),
	(18, 15, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059),
	(19, 16, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 123, 4059),
	(20, 17, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 246, 8118),
	(21, 18, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 246, 8118),
	(22, 19, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 246, 8118),
	(23, 20, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177),
	(24, 21, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177),
	(25, 22, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177),
	(26, 23, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177),
	(27, 24, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177),
	(28, 25, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 369, 12177),
	(29, 26, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 0, 0),
	(30, 26, 2, 'андезитобазальтовый М75', 62, 'Блок стеновой', 0, 0),
	(31, 26, 3, 'андезитобазальтовый М100', 68, 'Блок стеновой', 32, 2176),
	(32, 27, 1, 'андезитобазальтовый М50', 59, 'Блок стеновой', 12, 708),
	(33, 27, 2, 'андезитобазальтовый М75', 62, 'Блок стеновой', 312, 19344),
	(34, 27, 3, 'андезитобазальтовый М100', 68, 'Блок стеновой', 12, 816),
	(35, 28, 8, 'андезитобазальтовые', 370, 'Блоки вентиляционные', 3, 1110),
	(36, 28, 10, 'тротуарная фигурная "Волна"', 690, 'Плитка бетонная', 32, 22080),
	(37, 28, 11, 'тротуарная прямоугольная', 670, 'Плитка бетонная', 0, 0),
	(38, 28, 12, '«Старый город»', 570, 'Плитка бетонная', 0, 0),
	(39, 28, 13, '"Квадрат"', 535, 'Плитка бетонная', 0, 0),
	(40, 28, 9, 'андезитобазальтовый М50', 33, 'Евроблок', 3, 99),
	(41, 29, 4, 'андезитобазальтовый M35', 35, 'Блок перегородочный ', 1, 35),
	(42, 29, 10, 'тротуарная фигурная "Волна"', 690, 'Плитка бетонная', 3, 2070),
	(43, 29, 11, 'тротуарная прямоугольная', 670, 'Плитка бетонная', 4, 2680),
	(44, 29, 12, '«Старый город»', 570, 'Плитка бетонная', 1, 570),
	(45, 29, 13, '"Квадрат"', 535, 'Плитка бетонная', 2, 1070);
/*!40000 ALTER TABLE `ordered_products` ENABLE KEYS */;


-- Dumping structure for table euro-block.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_date` date DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `street` varchar(30) DEFAULT NULL,
  `paid` float unsigned NOT NULL DEFAULT '0',
  `blocks_shipped` int(10) unsigned DEFAULT NULL,
  `blocks_left` int(10) unsigned DEFAULT NULL,
  `pallets_shipped` int(10) unsigned DEFAULT NULL,
  `pallets_left` int(10) unsigned DEFAULT NULL,
  `locality` varchar(30) DEFAULT NULL,
  `crane` tinyint(3) unsigned DEFAULT NULL,
  `payment_type` varchar(20) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.orders: ~23 rows (approximately)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `delivery_date`, `city`, `user_id`, `street`, `paid`, `blocks_shipped`, `blocks_left`, `pallets_shipped`, `pallets_left`, `locality`, `crane`, `payment_type`, `sum`, `is_active`, `is_done`, `manager_id`, `order_date`) VALUES
	(7, '2016-08-17', 'sdf', 1, 'sdf', 0, NULL, NULL, NULL, NULL, 'sdf', 0, 'requisites', 69015, 1, 0, NULL, '0000-00-00 00:00:00'),
	(8, '2016-08-10', 'LOL', 1, 'OLO', 0, NULL, NULL, NULL, NULL, 'LOL', 1, 'cash', 4006, 1, 0, NULL, '0000-00-00 00:00:00'),
	(9, '2016-08-02', '312', 1, '123', 0, NULL, NULL, NULL, NULL, '123', NULL, 'requisites', 650, 1, 0, NULL, '0000-00-00 00:00:00'),
	(10, '2016-08-28', '312', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 19075, 1, 0, NULL, '0000-00-00 00:00:00'),
	(11, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(12, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(13, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(14, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(15, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(16, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059, 1, 0, NULL, '0000-00-00 00:00:00'),
	(17, '2016-08-10', '313', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'cash', 8118, 1, 0, NULL, '0000-00-00 00:00:00'),
	(18, '2016-08-10', '313', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'cash', 8118, 1, 0, NULL, '0000-00-00 00:00:00'),
	(19, '2016-08-10', '313', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'cash', 8118, 1, 0, NULL, '0000-00-00 00:00:00'),
	(20, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(21, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(22, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(23, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(24, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(25, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177, 1, 0, NULL, '0000-00-00 00:00:00'),
	(26, '2016-08-06', 'Москва', 1, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 1, 'score', 2176, 1, 0, NULL, '2016-12-16 00:00:00'),
	(27, '2016-08-18', 'Ривия', 1, 'Советская', 2, 2, 4, 3, 4, 'Миерин', 1, 'score', 20868, 0, 1, 1, '2016-08-09 22:55:55'),
	(28, '2016-09-23', NULL, 1, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 1, 'score', 23289, 1, 0, 1, '2016-09-02 03:23:02'),
	(29, '2016-10-07', NULL, 1, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 0, 'score', 6425, 0, 1, 1, '2016-09-02 03:24:42');
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
	(8, 6, 'андезитобазальтовые', 370, NULL, NULL, '910х300х180', NULL, NULL, NULL, NULL, NULL),
	(9, 7, 'андезитобазальтовый М50', 33, 15, 1050, '390×190×188', 0.35, 8.79, 72, 'F50', NULL),
	(10, 8, 'тротуарная фигурная "Волна"', 690, NULL, NULL, '225×125×80', NULL, NULL, NULL, NULL, NULL),
	(11, 8, 'тротуарная прямоугольная', 670, NULL, NULL, '260×85×60', NULL, NULL, NULL, NULL, NULL),
	(12, 8, '«Старый город»', 570, NULL, NULL, '180×120×60', NULL, NULL, NULL, NULL, NULL),
	(13, 8, '"Квадрат"', 535, NULL, NULL, '120×120×60', NULL, NULL, NULL, NULL, NULL),
	(14, 9, 'Тротуарный', 180, 22, NULL, '600х200х80', NULL, NULL, 60, NULL, NULL),
	(15, 9, 'Дорожный', 620, 90, NULL, '900x300x150', NULL, NULL, 90, NULL, NULL),
	(16, 10, 'Порода: базальт, андезитобазальт', 650, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `ownership_type_id`, `username`, `passport`, `member_type`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `registration_place`, `issued_by`, `legal_address`, `inn`, `kpp`) VALUES
	(1, '127.0.0.1', NULL, 'administrator', NULL, NULL, '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1472773281, 1, 'Admin', 'istrator', 'ADMIN', '0', NULL, NULL, NULL, NULL, NULL),
	(3, '127.0.0.1', NULL, 'geralt777', NULL, NULL, '$2y$08$CgJoPNEvk8EJLHT5EW.89OdGarn6zM8rUtLOBfjMT1ioiCnI0g.XG', NULL, 'geralt@from.rivia', NULL, NULL, NULL, NULL, 1470668133, 1470677159, 1, 'Geralt', 'Rivia', 'Kaer Morhen', '0988123123', NULL, NULL, NULL, NULL, NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.users_groups: ~3 rows (approximately)
DELETE FROM `users_groups`;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(4, 3, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;