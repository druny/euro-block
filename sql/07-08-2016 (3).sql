-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 07 2016 г., 15:46
-- Версия сервера: 5.7.11
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `euro-block`
--
CREATE DATABASE IF NOT EXISTS `euro-block` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `euro-block`;

-- --------------------------------------------------------

--
-- Структура таблицы `blocks`
--

DROP TABLE IF EXISTS `blocks`;
CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `blocks`
--

TRUNCATE TABLE `blocks`;
--
-- Дамп данных таблицы `blocks`
--

INSERT INTO `blocks` (`id`, `name`) VALUES
(1, 'Блок стеновой'),
(2, 'Блок перегородочный '),
(3, 'Блок рядовой'),
(4, 'Блок угловой'),
(5, 'Блок половинчатый'),
(6, 'Блоки вентиляционные'),
(7, 'Евроблок'),
(8, 'Плитка бетонная'),
(9, 'Бордюр'),
(10, 'Щебень');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `groups`
--

TRUNCATE TABLE `groups`;
--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
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
  `fire_resistance` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `products`
--

TRUNCATE TABLE `products`;
--
-- Дамп данных таблицы `products`
--

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

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
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
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `users`
--

TRUNCATE TABLE `users`;
--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1469276742, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', 'awdawdawd', '$2y$08$tl7gXte2VnDBcnMlVazJAed0aBlo/bAHh9ngpBvY3ctypQfQb6BIS', NULL, 'awdawd@awd.awd', NULL, NULL, NULL, NULL, 1469367237, 1469367457, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `users_groups`
--

TRUNCATE TABLE `users_groups`;
--
-- Дамп данных таблицы `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_blocks` (`block_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_blocks` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
