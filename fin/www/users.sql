-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 18 2018 г., 12:05
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mysql`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `secondn` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `surname`, `name`, `secondn`, `email`, `login`, `password`) VALUES
(20, 'Аликин', 'Артем', 'Евгеньевич', 'aae11work@gmail.com', '74b87337454200d4d33f80c4663dc5e5', '74b87337454200d4d33f80c4663dc5e5'),
(21, 'fdvf', 'dfvdfv', 'fvdfvdf', 'fdvfdvdf', '15de21c670ae7c3f6f3f1f37029303c9', '15de21c670ae7c3f6f3f1f37029303c9'),
(22, 'fdvdfv', 'fdvdfv', 'fdvfdv', 'fdvfdv', 'hhhh', 'e61e7de603852182385da5e907b4b232'),
(23, 'dfdv', 'fdvfdv', 'fvfdv', 'fdvdf', 'fff', 'fff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
