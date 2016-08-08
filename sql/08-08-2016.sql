-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.31 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных euro-block
DROP DATABASE IF EXISTS `euro-block`;
CREATE DATABASE IF NOT EXISTS `euro-block` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `euro-block`;


-- Дамп структуры для таблица euro-block.blocks
DROP TABLE IF EXISTS `blocks`;
CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы euro-block.blocks: ~10 rows (приблизительно)
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


-- Дамп структуры для таблица euro-block.groups
DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы euro-block.groups: ~2 rows (приблизительно)
DELETE FROM `groups`;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'members', 'General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Дамп структуры для таблица euro-block.ordered_products
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы euro-block.ordered_products: ~0 rows (приблизительно)
DELETE FROM `ordered_products`;
/*!40000 ALTER TABLE `ordered_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordered_products` ENABLE KEYS */;


-- Дамп структуры для таблица euro-block.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_date` date DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `locality` varchar(30) DEFAULT NULL,
  `crane` tinyint(3) unsigned DEFAULT NULL,
  `payment_type` varchar(20) NOT NULL,
  `sum` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы euro-block.orders: ~0 rows (приблизительно)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;


-- Дамп структуры для таблица euro-block.products
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

-- Дамп данных таблицы euro-block.products: ~16 rows (приблизительно)
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


-- Дамп структуры для таблица euro-block.users
DROP TABLE IF EXISTS `users`;
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

-- Дамп данных таблицы euro-block.users: ~2 rows (приблизительно)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1470668698, 1, 'Admin', 'istrator', 'ADMIN', '0'),
	(3, '127.0.0.1', 'geralt777', '$2y$08$CgJoPNEvk8EJLHT5EW.89OdGarn6zM8rUtLOBfjMT1ioiCnI0g.XG', NULL, 'geralt@from.rivia', NULL, NULL, NULL, NULL, 1470668133, 1470668686, 1, 'Geralt', 'Rivia', 'Kaer Morhen', '0988123123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Дамп структуры для таблица euro-block.users_groups
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

-- Дамп данных таблицы euro-block.users_groups: ~3 rows (приблизительно)
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
