-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.5.27
-- Версия на PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `db_rusibusev`
--

-- --------------------------------------------------------

--
-- Структура на таблица `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `youtube_video` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Ссхема на данните от таблица `cities`
--

INSERT INTO `cities` (`id`, `name`, `code`, `youtube_video`) VALUES
(1, 'София', 'sf', 'TVTNivPtTC0'),
(2, 'Велико Търново', 'vt', '6RrJaARrxuk'),
(3, 'Варна', 'va', 'QKWjkrcaeNY');

-- --------------------------------------------------------

--
-- Структура на таблица `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(450) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Ссхема на данните от таблица `images`
--

INSERT INTO `images` (`id`, `url`, `type`) VALUES
(1, 'http://bfly.files.wordpress.com/2010/07/cropped-bflydotcom.jpg', 'main'),
(2, 'http://www.sanilaccounty.org/images/nature-banner.jpg', 'main'),
(3, 'http://cm.naturelabs.org/wp-content/themes/rumput-hijau/img/headers/rumput-hijau-2.jpg', 'main');

-- --------------------------------------------------------

--
-- Структура на таблица `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(45) DEFAULT NULL,
  `to` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `seat` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Ссхема на данните от таблица `tickets`
--

INSERT INTO `tickets` (`id`, `from`, `to`, `date`, `seat`, `user_id`) VALUES
(6, 'sf', 'va', '2014-06-24', '1', 2);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Ссхема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'me@local', '202cb962ac59075b964b07152d234b70'),
(2, 'you@local', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
