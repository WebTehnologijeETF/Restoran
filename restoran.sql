-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2015 at 11:48 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `novosti` int(11) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autor` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `novosti` (`novosti`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `novosti`, `datum`, `autor`, `email`, `tekst`) VALUES
(1, 1, '2015-05-28 22:21:27', 'anonimus', 'mail@mail.com', 'prvi komentar...'),
(2, 1, '2015-05-28 22:21:54', 'neko', 'nekimail@mail.com', 'neki komentar...'),
(16, 1, '2015-06-07 21:42:19', '', '', 'hfghfghfg'),
(17, 1, '2015-06-07 21:44:46', '', '', 'hfghf'),
(18, 1, '2015-06-07 21:48:44', '', '', 'dasdd'),
(19, 1, '2015-06-07 21:52:40', '', '', 'dsadada');

-- --------------------------------------------------------

--
-- Table structure for table `loginpodaci`
--

CREATE TABLE IF NOT EXISTS `loginpodaci` (
  `username` varchar(15) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `loginpodaci`
--

INSERT INTO `loginpodaci` (`username`, `password`) VALUES
('admin', 'admin'),
('ime', 'pass'),
('nurif', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE IF NOT EXISTS `novosti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` datetime NOT NULL,
  `autor` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `naslov` varchar(35) COLLATE utf8_slovenian_ci NOT NULL,
  `slika` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `tekstDet` text COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `datum`, `autor`, `naslov`, `slika`, `tekst`, `tekstDet`) VALUES
(1, '2015-03-15 15:22:11', 'Nurif Dedagić', 'WORLD''S 50 BEST RESTAURANT AWARD', 'novostiSlika.jpg', 'Palace je nedavno stavljen na listu S. Pellegrino svjetskih najboljih\r\nrestorana pod rednim brojem 37.', 'Palace je nedavno stavljen na listu S. Pellegrino svjetskih najboljih\r\nrestorana pod rednim brojem 37.\r\n\r\nOvo postignuće postavlja nas na lidersku poziciju u BiH, gdje smo također\r\ndobili mnogobrojna priznanja.\r\n\r\nSvi smo veoma ponosni na ovo postignuće.\r\n\r\nHvala svima koji su podržali Palace tokom proteklih godina.'),
(2, '2015-03-02 12:35:51', 'Nurif Dedagić', 'INFORMACIJE O REZERVACIJAMA', '', 'Obavještavamo Vas da za mjesec april nema više slobodnih termina.\r\nRezervacije za mjesec maj počinju na 1. april.', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `komentari_ibfk_1` FOREIGN KEY (`novosti`) REFERENCES `novosti` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
