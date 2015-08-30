-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2015 at 12:07 PM
-- Server version: 5.5.35
-- PHP Version: 5.4.4-14+deb7u8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tvzb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tva`
--

CREATE TABLE IF NOT EXISTS `tva` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(40) NOT NULL,
  `Pitanje` varchar(250) NOT NULL,
  `Kategorija` varchar(80) NOT NULL,
  `Datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tva`
--

INSERT INTO `tva` (`ID`, `Ime`, `Pitanje`, `Kategorija`, `Datum`) VALUES
(1, 'sdfdsf', 'sdfsdfdsfs', 'Baze Podataka', '2015-08-25 14:19:01'),
(2, 'Ela', 'jsdjajsdasjdj glupa sam', 'Matematika 2', '2015-08-29 14:01:21'),
(3, 'dasdsad', '', 'Programiranja', '2015-08-29 19:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `tvo`
--

CREATE TABLE IF NOT EXISTS `tvo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Br` int(11) NOT NULL,
  `Nick` varchar(40) NOT NULL,
  `Odgovor` varchar(250) NOT NULL,
  `Datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tvo`
--

INSERT INTO `tvo` (`ID`, `Br`, `Nick`, `Odgovor`, `Datum`) VALUES
(1, 1, 'Lukica', 'sadasdsadasdsad', '2015-08-25 14:22:20'),
(2, 2, 'asdasd', 'asdasdas', '2015-08-29 14:01:30'),
(3, 2, 'asdasd', 'asdada', '2015-08-30 15:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `tvu`
--

CREATE TABLE IF NOT EXISTS `tvu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(220) NOT NULL,
  `email` varchar(150) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tvu`
--

INSERT INTO `tvu` (`ID`, `username`, `password`, `email`, `role`) VALUES
(1, 'Lgado', 'medvjed1234', '', 'admin'),
(2, 'Luka', '565087de574773ac9a0033afca395e02', '', ''),
(3, 'yxc', 'fcea920f7412b5da7be0cf42b8c93759', '', ''),
(4, 'asd', '259a2d1f68fef2c2b38eddd9b4eb2f10', '', ''),
(5, 'qweweqweqwe', 'eba2e59a74d8cb30d1d5c8ab5ab589a3', '', ''),
(6, 'qweweqweqwe', 'eba2e59a74d8cb30d1d5c8ab5ab589a3', '', ''),
(7, 'asdadadsa', '199e2b5a10dc906f42550af3c54ff3ac', '', ''),
(8, 'asdasd', 'asdasd', 'asdasd@gmail.com', 'korisnik'),
(9, 'LUKAGADO', '177522ce4c35c4507442f193e56f897b', '', ''),
(10, 'LUKAGADO', '177522ce4c35c4507442f193e56f897b', '', 'LUKAGADO@gmail.com'),
(11, 'elakorbar', 'aad6d84aa4feabb132c708b34a405947', '', 'elakorbar@gmail.com'),
(12, 'eloooooo', '1972ad5038ee7b8f123adff266198135', 'sadasdsad', 'eloooooo@asd.com'),
(13, 'Ukoliko', '88162595c58939c4ae0b35f39892e6e7', 'Ukoliko@adasd', 'Ukoliko@adasd'),
(14, 'description', '67daf92c833c41c95db874e18fcb2786', '', ''),
(15, 'Nemojte', 'c5bd3278b9a4426917d8f36acf5e5c14', 'Nemojte@sad', ''),
(16, 'Paragraph', 'feaf0a320c3d678ad30dd179b7d21584', 'Paragraph@sad', 'korisnik'),
(17, 'Gadoschi', '88162595c58939c4ae0b35f39892e6e7', 'gado@gmail.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
