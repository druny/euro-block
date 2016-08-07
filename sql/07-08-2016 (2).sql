-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 07 2016 г., 15:18
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

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_blocks` (`block_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_blocks` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
