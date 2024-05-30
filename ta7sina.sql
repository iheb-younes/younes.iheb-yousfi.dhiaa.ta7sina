-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2024 at 05:02 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta7sina`
--

-- --------------------------------------------------------

--
-- Table structure for table `acheter`
--

DROP TABLE IF EXISTS `acheter`;
CREATE TABLE IF NOT EXISTS `acheter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Gamme_Dove` int(11) NOT NULL,
  `Creme_de_peau` int(11) NOT NULL,
  `Sechoir_ENZO_2en1` int(11) NOT NULL,
  `plaque_ENZO` int(11) NOT NULL,
  `pack_parfume` int(11) NOT NULL,
  `parfume` int(11) NOT NULL,
  `LaiTuo` int(11) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acheter`
--

INSERT INTO `acheter` (`id`, `Gamme_Dove`, `Creme_de_peau`, `Sechoir_ENZO_2en1`, `plaque_ENZO`, `pack_parfume`, `parfume`, `LaiTuo`, `tel`) VALUES
(1, 1, 0, 0, 1, 7, 0, 0, '0664579099'),
(4, 0, 0, 4, 0, 0, 0, 0, '0664579099');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_reservation` varchar(50) NOT NULL,
  `time_reservation` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `barber` varchar(50) NOT NULL,
  `numero_tlf` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `date_reservation` (`date_reservation`,`time_reservation`,`barber`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`name`, `email`, `date_reservation`, `time_reservation`, `service`, `barber`, `numero_tlf`, `id`) VALUES
('bbbbbb', 'billel@gmail.com', '2024-05-28', '11:30', 'trim', 'sarah', '0664579099', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
