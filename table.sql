-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2016 at 09:28 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mileage` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(20) NOT NULL,
  `usag` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`name`, `brand`, `mileage`, `price`, `usag`) VALUES
('800', 'maruthi', '100', 150000, 'dc'),
('chevorlet camaroa gs', 'chevorlet', '150', 350000, 'pf'),
('chevorlett corvette ', 'chevvorlet', '150', 400000, 'pf'),
('dodge challenger srt', 'srt', '100', 150000, 'pf'),
('ford shelby gt500', 'ford', '100', 300000, 'pf'),
('lamborgini sesto elm', 'lamborgini', '150', 450000, 'pf'),
('lamborgini veneno', 'lamborgini', '200', 500000, 'pf'),
('lotus exige s coupe', 'lotus', '100', 100000, 'pf'),
('mini cooper s roadst', 'mini', '150', 100000, 'pf'),
('nissan 370z', 'nissan', '150', 100000, 'pf'),
('prius', 'toyota', '150', 100000, 'pf'),
('tacomo', 'toyota', '150', 200000, 'pf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
