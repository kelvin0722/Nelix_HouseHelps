-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 07:04 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `househelps`
--

-- --------------------------------------------------------

--
-- Table structure for table `memberdetails`
--

CREATE TABLE `memberdetails` (
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `password` text NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `dateofbirth` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `marritalstatus` int(11) NOT NULL,
  `city` text NOT NULL,
  `county` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberdetails`
--

INSERT INTO `memberdetails` (`firstname`, `secondname`, `password`, `emailaddress`, `dateofbirth`, `gender`, `marritalstatus`, `city`, `county`) VALUES
('Kelvin', 'Mwangi', 'cv b', 'kelvinngaccha', '2016-05-03', 0, 1, 'Ngong', 'Kisumu'),
('Samuel', 'Macharia', 'nelson', 'samuelmacharia@gmail.com', '2016-05-02', 0, 1, 'kirinyaga', 'kirinyaga'),
('sadad', 'Macharia', 'sdaddad', 'samuelmacharia@gmail.com', '2016-05-02', 0, 1, 'kdadsa', 'kirinyaga'),
('ASSA', 'sSS', 'Ssass', 'samuelmacharia@gmail.com', '2016-05-02', 0, 0, 'sSs', 'kirinyaga'),
('Jackson', 'Omwami', 'jackomwami', 'jackomwami@gmail.com', '2016-05-09', 0, 1, 'Ngong', 'kakamega'),
('sadsada', 'sdadsd', 'sadsdasd', 'kelvinngacha@yahoo.com', '2016-05-03', 0, 0, 'dadsasa', 'dadsadsa'),
('sadsada', 'sdadsd', 'adsad', 'kelvinngacha@yahoo.com', '2016-05-03', 0, 0, 'dadsasa', 'dadsadsa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
