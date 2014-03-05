-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 05 Mar 2014, 20:05
-- Wersja serwera: 5.5.34-0ubuntu0.13.04.1
-- Wersja PHP: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `smiechm`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `quoteId` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `content` longtext COLLATE utf8_polish_ci NOT NULL,
  `source` varchar(1023) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`quoteId`),
  UNIQUE KEY `quoteId` (`quoteId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `quotes`
--

INSERT INTO `quotes` (`quoteId`, `author`, `content`, `source`) VALUES
(1, 'a', 'lorem', 'b'),
(2, 'r', 'ipsum', 'd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `quote_tags`
--

CREATE TABLE IF NOT EXISTS `quote_tags` (
  `quoteId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `quote_tags`
--

INSERT INTO `quote_tags` (`quoteId`, `tagId`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tagId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`tagId`),
  UNIQUE KEY `tagId` (`tagId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `tags`
--

INSERT INTO `tags` (`tagId`, `title`) VALUES
(1, 'foo'),
(2, 'bar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
