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
CREATE DATABASE IF NOT EXISTS `euro-block` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `euro-block`;


-- Dumping structure for table euro-block.blocks
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


-- Dumping structure for table euro-block.ordered_products
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.ordered_products: ~24 rows (approximately)
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
	(31, 26, 3, 'андезитобазальтовый М100', 68, 'Блок стеновой', 32, 2176);
/*!40000 ALTER TABLE `ordered_products` ENABLE KEYS */;


-- Dumping structure for table euro-block.ordered_status
CREATE TABLE IF NOT EXISTS `ordered_status` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.ordered_status: ~8 rows (approximately)
DELETE FROM `ordered_status`;
/*!40000 ALTER TABLE `ordered_status` DISABLE KEYS */;
INSERT INTO `ordered_status` (`id`, `order_id`, `status_id`) VALUES
	(1, 25, 1),
	(2, 24, 1),
	(3, 23, 1),
	(4, 22, 1),
	(5, 21, 1),
	(6, 20, 1),
	(7, 19, 1),
	(8, 26, 1),
	(9, 18, 1),
	(10, 17, 1),
	(11, 16, 1),
	(12, 15, 1),
	(13, 14, 1),
	(14, 13, 1),
	(15, 12, 1),
	(16, 11, 1),
	(17, 10, 1),
	(18, 9, 1),
	(19, 8, 1);
/*!40000 ALTER TABLE `ordered_status` ENABLE KEYS */;


-- Dumping structure for table euro-block.orders
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
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `FK_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.orders: ~20 rows (approximately)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `delivery_date`, `city`, `user_id`, `street`, `paid`, `blocks_shipped`, `blocks_left`, `pallets_shipped`, `pallets_left`, `locality`, `crane`, `payment_type`, `sum`) VALUES
	(7, '2016-08-17', 'sdf', 1, 'sdf', 0, NULL, NULL, NULL, NULL, 'sdf', 0, 'requisites', 69015),
	(8, '2016-08-10', 'LOL', 1, 'OLO', 0, NULL, NULL, NULL, NULL, 'LOL', 1, 'cash', 4006),
	(9, '2016-08-02', '312', 1, '123', 0, NULL, NULL, NULL, NULL, '123', NULL, 'requisites', 650),
	(10, '2016-08-28', '312', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 19075),
	(11, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059),
	(12, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059),
	(13, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059),
	(14, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059),
	(15, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059),
	(16, '2016-08-17', '123', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'score', 4059),
	(17, '2016-08-10', '313', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'cash', 8118),
	(18, '2016-08-10', '313', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'cash', 8118),
	(19, '2016-08-10', '313', 1, '123', 0, NULL, NULL, NULL, NULL, '123', 1, 'cash', 8118),
	(20, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177),
	(21, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177),
	(22, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177),
	(23, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177),
	(24, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177),
	(25, '2016-09-03', 'q', 1, 'q', 0, NULL, NULL, NULL, NULL, 'q', 0, 'requisites', 12177),
	(26, '2016-08-06', 'Москва', 1, 'Кирова', 0, NULL, NULL, NULL, NULL, 'Москва', 1, 'score', 2176);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;


-- Dumping structure for table euro-block.products
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


-- Dumping structure for table euro-block.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table euro-block.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1470695493, 1, 'Admin', 'istrator', 'ADMIN', '0'),
	(3, '127.0.0.1', 'geralt777', '$2y$08$CgJoPNEvk8EJLHT5EW.89OdGarn6zM8rUtLOBfjMT1ioiCnI0g.XG', NULL, 'geralt@from.rivia', NULL, NULL, NULL, NULL, 1470668133, 1470677159, 1, 'Geralt', 'Rivia', 'Kaer Morhen', '0988123123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table euro-block.users_groups
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
