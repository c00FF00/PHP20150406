-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 27 2015 г., 13:06
-- Версия сервера: 5.5.41-0ubuntu0.14.04.1
-- Версия PHP: 5.6.7-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `bodynews` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=333 ;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `date`, `author`, `subject`, `bodynews`) VALUES
(325, '2015-04-23 06:57:20', 'Ð’Ð’Ð’', 'ÐÐ', 'D'),
(326, '2015-04-22 08:27:49', 'a', 'd', '3'),
(327, '2015-04-22 08:28:37', 'd', 'f', 'g'),
(332, '2015-04-24 08:28:47', 'Asdf', 'asd', 'dDF');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(127) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
