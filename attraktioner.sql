-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 22 okt 2014 kl 09:31
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `lekpark`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `attraktioner`
--

CREATE TABLE IF NOT EXISTS `attraktioner` (
`id` int(11) NOT NULL,
  `namn` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumpning av Data i tabell `attraktioner`
--

INSERT INTO `attraktioner` (`id`, `namn`) VALUES
(1, 'gungor'),
(10, 'gfdsa'),
(11, 'gfdsa'),
(12, 'gfdsa'),
(13, 'gfdsa'),
(14, 'gfdsa'),
(15, 'gfdsa'),
(16, 'gfdsa'),
(17, 'gungor'),
(18, 'gre');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `attraktioner`
--
ALTER TABLE `attraktioner`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `attraktioner`
--
ALTER TABLE `attraktioner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
