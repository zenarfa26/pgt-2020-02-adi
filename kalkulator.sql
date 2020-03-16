-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 09:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalkulator`
--

-- --------------------------------------------------------

--
-- Table structure for table `operasi`
--

CREATE TABLE `operasi` (
  `a` double NOT NULL,
  `b` double NOT NULL,
  `c` double NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operasi`
--

INSERT INTO `operasi` (`a`, `b`, `c`, `ket`) VALUES
(2, 3, 5, 'A'),
(3, 5, 8, 'A'),
(5, 8, 13, 'B'),
(8, 13, 21, 'C'),
(13, 21, 34, 'C'),
(21, 34, 55, 'C'),
(34, 55, 89, 'C'),
(55, 89, 144, 'C'),
(89, 144, 233, 'C'),
(144, 233, 377, 'C'),
(233, 377, 610, 'C'),
(4, 5, 9, 'A'),
(5, 9, 14, 'B'),
(9, 14, 23, 'C'),
(14, 23, 37, 'C'),
(23, 37, 60, 'C'),
(37, 60, 97, 'C'),
(60, 97, 157, 'C'),
(97, 157, 254, 'C'),
(157, 254, 411, 'C'),
(254, 411, 665, 'C'),
(411, 665, 1076, 'C'),
(-1, -1, -2, 'D'),
(-1, -2, -3, 'D'),
(-2, -3, -5, 'D'),
(-3, -5, -8, 'D'),
(-5, -8, -13, 'D'),
(-8, -13, -21, 'D'),
(-13, -21, -34, 'D'),
(-21, -34, -55, 'D'),
(-34, -55, -89, 'D'),
(-55, -89, -144, 'D'),
(-89, -144, -233, 'D'),
(9, 10, 19, 'B'),
(10, 19, 29, 'C'),
(19, 29, 48, 'C'),
(29, 48, 77, 'C'),
(48, 77, 125, 'C'),
(77, 125, 202, 'C'),
(125, 202, 327, 'C'),
(202, 327, 529, 'C'),
(327, 529, 856, 'C'),
(529, 856, 1385, 'C'),
(856, 1385, 2241, 'C');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
