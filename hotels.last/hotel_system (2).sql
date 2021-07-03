-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2019 at 06:49 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `phone` int(15) NOT NULL,
  `place_of_receipt` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name_of_car` varchar(40) NOT NULL,
  `period` varchar(20) NOT NULL,
  `drive` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `phone` int(15) NOT NULL,
  `no_people` int(3) NOT NULL,
  `main_dish` varchar(30) NOT NULL,
  `said_dish` varchar(30) NOT NULL,
  `drink` varchar(30) NOT NULL,
  `comment` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`date`, `time`, `phone`, `no_people`, `main_dish`, `said_dish`, `drink`, `comment`) VALUES
('2019-06-18', '02:00:00', 33, 6, 'myvalue2', 'myvalue5', 'myvalue9', 'wwwwww'),
('2019-10-21', '02:00:00', 55, 6, 'Carbonada', 'Rockell cake', 'Carbonated water', 'MAHSIKHOH\r\nKJHGFDSDFRGTHYJKL;'),
('2019-08-14', '02:00:00', 6666, 6, 'Beef steak', 'Alfajores', 'Grape juice', 'dsa\r\nljkhgf'),
('2019-04-18', '02:00:00', 888888, 6, 'Milanesas', 'Dulcede leche', 'Natural juice', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `room_number` int(3) NOT NULL,
  `adult` int(3) NOT NULL,
  `children` int(3) NOT NULL,
  `room_type` varchar(40) NOT NULL,
  `payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`arrival`, `departure`, `full_name`, `phone`, `email`, `room_number`, `adult`, `children`, `room_type`, `payment`) VALUES
('2019-04-23', '2019-04-21', 'maha', 66, 'mahamaa123@hotmail.com', 8, 6, 0, 'Chalet with sea view ( 1,200 $ )', 'Cash'),
('2019-04-23', '2019-04-20', 'maha', 222, 'mahamaa123@hotmail.com', 7, 6, 3, 'Superior ( 250 $ )', 'Cash'),
('2019-04-15', '2019-04-25', 'maha', 777, 'mahamaa123@hotmail.com', 5, 2, 0, 'Suite with Garden view ( 400 $ )', 'Cash'),
('2019-04-21', '2019-04-24', 'maha', 987, 'mahamaa123@hotmail.com', 8, 6, 7, 'Suite ( 250 $ )', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `tourism`
--

CREATE TABLE `tourism` (
  `name` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `children` int(10) NOT NULL,
  `adult` int(10) NOT NULL,
  `hours` varchar(20) NOT NULL,
  `place` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tourism`
--

INSERT INTO `tourism` (`name`, `phone`, `children`, `adult`, `hours`, `place`) VALUES
('n', 44, 2, 2, 'More than three hour', ''),
('maha', 57, 2, 2, 'Three hours', ''),
('maha', 888, 3, 1, 'More than three hour', 'Dubai Fountain,Burj khalifa,Dubai Mall,Dubai Aquarium Amd Zoo'),
('maha', 987, 1, 3, 'Three hours', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `name` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`name`, `phone`, `email`, `message`) VALUES
('', 0, '', ''),
('maha woow', 32, 'kjjkljlnh', ''),
('maha', 222, 'mahamaa123@hotmail.com', 'gg'),
('maha', 777, 'ggggggggggg', 'kkkkkkkkkkk'),
('Aleen', 4433, '', ''),
('maha abdulrahim', 767676, 'mahamaa123@hotmail.com', 'hello..'),
('maha abdulrahim', 5436789, 'mahamaa123@hotmail.com', 'hello..'),
('mmmmmmmm', 55555555, 'mahamaa123@hotmail.com', 'kkkkjjjjjjjjjjjj'),
('maha', 2147483647, 'ggggggggggg', 'kkkkkkkkkkk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `tourism`
--
ALTER TABLE `tourism`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`phone`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
