-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 10:13 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--
CREATE DATABASE IF NOT EXISTS `cinema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cinema`;

-- --------------------------------------------------------

--
-- Table structure for table `admain`
--

DROP TABLE IF EXISTS `admain`;
CREATE TABLE `admain` (
  `user_name` varchar(80) NOT NULL,
  `password` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admain`
--

INSERT INTO `admain` VALUES
('rosol', 111111),
('zahraa', 111111),
('hiba', 111111),
('fatima', 111111);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `film` varchar(80) NOT NULL,
  `time` int(2) NOT NULL,
  `venue` int(4) NOT NULL,
  `ticket` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` VALUES
('five feet apart', 0, 23, 'children'),
('five feet apart', 0, 23, 'children'),
('five feet apart', 0, 23, 'children'),
('five feet apart', 0, 23, 'children'),
('five feet apart', 0, 23, 'children'),
('five feet apart', 0, 23, 'children'),
('five feet apart', 0, 23, 'children'),
('five feet apart', 0, 23, 'children'),
('five feet apart', 0, 23, 'children'),
('five feet apart', 0, 23, 'children'),
('five feet apart', 9, 23, 'children'),
('five feet apart', 9, 23, 'children'),
('five feet apart', 9, 23, 'children'),
('five feet apart', 9, 23, 'children'),
('five feet apart', 9, 23, 'children'),
('five feet apart', 9, 23, 'children'),
('someone great', 4, 23, 'children'),
('five feet apart', 9, 23, 'children');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `email` varchar(80) NOT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `user_name` varchar(80) NOT NULL,
  `password` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` VALUES
('rosolalshamary20@gmail.com', 11111111, 'shamary', 111111),
('rosol bashar@gmail.com', 1111111111, 'rosolalshamary12@gmail.com', 1111111111),
('rosol bashar@gmail.com', 1111111111, 'rosolalshamary12@gmail.com', 1111111111),
('rosol bashar@gmail.com', 1111111111, 'rosolalshamary12@gmail.com', 1111111111);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
