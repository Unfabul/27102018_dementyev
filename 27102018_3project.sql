-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 17 2019 г., 18:59
-- Версия сервера: 10.1.32-MariaDB
-- Версия PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `27102018_3project`
--
CREATE DATABASE IF NOT EXISTS `27102018_3project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `27102018_3project`;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `sku` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `photo` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `sale` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `description`, `price`, `photo`, `active`, `sale`) VALUES
(1, 'Синяя куртка', 111111, 'Мужская синяя куртка', 5000, '/images/catalog/1.jpg', 1, 0),
(2, 'Зеленая куртка', 222222, 'Мужская зеленая куртка', 4800, '/images/catalog/2.jpg', 1, 0),
(3, 'Зеленая рубашка', 333333, 'Мужская зеленая рубашка', 3500, '/images/catalog/3.png', 1, 0),
(4, 'Черная куртка', 444444, 'Мужская черная куртка', 8000, '/images/catalog/6.jpg', 1, 0),
(5, 'Серые кеды', 555555, 'Серые кеды', 2800.5, '/images/catalog/7.jpg', 1, 0.15),
(6, 'Синие джинсы', 666666, 'Синие джинсы', 1500, '/images/catalog/11.jpg', 1, 0),
(7, 'Синяя куртка 2', 111111, 'Мужская синяя куртка', 5000, '/images/catalog/1.jpg', 1, 0),
(8, 'Зеленая куртка 2', 222222, 'Мужская зеленая куртка', 4800, '/images/catalog/2.jpg', 1, 0),
(9, 'Зеленая рубашка 2', 333333, 'Мужская зеленая рубашка', 3500, '/images/catalog/3.png', 1, 0),
(10, 'Черная куртка 2', 444444, 'Мужская черная куртка', 8000, '/images/catalog/6.jpg', 1, 0),
(11, 'Серые кеды 2', 555555, 'Серые кеды', 2800.5, '/images/catalog/7.jpg', 1, 0.15),
(12, 'Синие джинсы 2', 666666, 'Синие джинсы', 1500, '/images/catalog/11.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product_sizes`
--

CREATE TABLE IF NOT EXISTS `product_sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size`, `quantity`) VALUES
(1, 1, 'XL', 10),
(2, 1, 'L', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
