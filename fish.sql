-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 11. pro 2016, 15:24
-- Verze serveru: 5.6.15-log
-- Verze PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `fish`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Vypisuji data pro tabulku `menu`
--

INSERT INTO `menu` (`id`, `menu`) VALUES
(1, 'aktuality'),
(2, 'legislativa'),
(3, 'popis revír?'),
(4, 'závody'),
(5, 'kružek');

-- --------------------------------------------------------

--
-- Struktura tabulky `zprava`
--

CREATE TABLE IF NOT EXISTS `zprava` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(255) NOT NULL,
  `zprava` varchar(255) NOT NULL,
  `menu_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Vypisuji data pro tabulku `zprava`
--

INSERT INTO `zprava` (`id`, `nazev`, `zprava`, `menu_id`) VALUES
(1, 'prvni aktualita', 'prvni clanek', 1),
(3, 'prvni', 'prvni clanek', 2),
(4, 'prvni', 'prvni clanek', 3),
(5, 'prvni', 'prvni clanek', 4),
(6, 'prvni', 'prvni clanek', 5),
(7, 'druhy', 'druhy clanek', 1),
(28, 'aaa', 'xgfx', 3),
(29, 'aaa', 'bm\r\nb\r\nb\r\nb\r\nb\r\nb', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
