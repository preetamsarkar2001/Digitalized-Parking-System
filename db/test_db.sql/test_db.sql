-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 12:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `email`, `mobile`, `status`) VALUES
('1', 'sangram', '12345', '1', 'sangramunhale@gmail.com', '9527080980', '1');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `date1` date NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `vehicalno` varchar(255) NOT NULL,
  `slot` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`date1`, `time1`, `time2`, `vehicalno`, `slot`, `count`, `total`) VALUES
('2021-05-07', '02:36:00', '03:36:00', '', '', '', ''),
('2021-05-07', '02:36:00', '03:36:00', '', '', '', ''),
('2021-05-16', '16:08:00', '17:08:00', '', '', '', ''),
('2021-05-17', '14:10:00', '16:10:00', '', '', '', ''),
('2021-05-17', '14:10:00', '16:10:00', '', '', '', ''),
('2021-05-28', '14:54:00', '17:54:00', '', '', '', ''),
('2021-05-06', '09:26:00', '15:26:00', '', '', '', ''),
('2021-05-08', '02:03:00', '03:03:00', 'MH-22-S51', '', '', ''),
('2021-05-08', '00:19:00', '01:19:00', 'MH-04-AS123', '', '', ''),
('2021-05-07', '17:00:00', '19:00:00', 'MH-02-1231', '', '', ''),
('2021-05-11', '12:11:00', '14:11:00', 'MH-04-AS123', '', '', ''),
('2021-06-19', '22:57:00', '23:57:00', 'MH-22-S51', '', '', ''),
('2021-06-20', '15:35:00', '16:35:00', 'MH-04-AS123', '', '', ''),
('2021-07-03', '16:06:00', '17:06:00', 'MH-04-13223', '', '', ''),
('2021-10-05', '04:46:00', '18:46:00', 'Mh-05-1233', '', '', ''),
('2022-05-01', '18:33:00', '20:33:00', 'MH-04-AS123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user`, `email`, `mobile`, `comment`) VALUES
(1, 'sam', 'sam@sam.com', '12345678', ' nice               \r\n              '),
(2, '', '', '', '                \r\n              '),
(3, 'sangram Unhale', 'sangramunhale@gmail.com', '9527080980', '                Your Site is Nice\r\n              '),
(4, 'gayatri', 'gayatri@gmail.com', '9527080980', 'your site is osm                \r\n              '),
(5, 'sangram Unhale', 'Sam@gmail.com', '123456789', '                very nice\r\n              '),
(6, 'Yuvraj', 'Yuraj@gmail.com', '9527080980', '                \r\n         Nice     '),
(7, 'nilesh bhale', 'nilesh@gmail.com', '123344567', 'xyz                \r\n              ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user`, `email`, `message`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('sangram Unhale', 'sangramunhale@gmail.com', 'This site is OSM'),
('vishal', 'vishal@gmail.com', 'Nice'),
('sam', 'sangram@gmail.com', 'Thank You'),
('sangram Unhale', 'sangramunhale@gmail.com', 'THANK YOU................'),
('sangram Unhale', 'sangramunhale@gmail.com', 'thank'),
('Yuvraj', 'Yuraj@gmail.com', 'Thank you'),
('sangram Unhale', 'sangramunhale@gmail.com', 'djafsdaFDJAdasdfkuaDJYDFSDJSF'),
('sangram Unhale', 'sangramunhale@gmail.com', 'nice'),
('nilesh bhale', 'nilesh@gmail.com', 'nice'),
('sangram Unhale', 'sangramunhale@gmail.com', 'fadfyt');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `user` varchar(255) NOT NULL,
  `cardno` varchar(255) NOT NULL,
  `expirydate` varchar(255) NOT NULL,
  `cvv` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`user`, `cardno`, `expirydate`, `cvv`) VALUES
('sam', '1232', '12', 123),
('sam', '1231 3123 4134 3122', '12 / 33', 124),
('sangram', '1212 1423 4341 4141', '12 / 31', 567),
('sam', '9987 6545 3256 8976', '76 / 31', 121),
('vishal', '1234 5678 9012 3456', '12 / 34', 123),
('sam', '1231 2312 3123 1312', '12 / 33', 123),
('Anu Unhale', '1242 3556 7897 6543', '12 / 32', 123),
('sangram Unhale', '2133 1343 5414 2341', '12 / 34', 132),
('sangram unhale', '1234 5678 9012 3456', '12 / 34', 123),
('sangram Unhale', '1234 5678 7676 6534', '12 / 34', 123),
('yuvraj', '2314 5672 3457 6457', '12 / 34', 123),
('vishal', '7389 4768 6461 2346', '43 / 54', 322),
('sangram', '6775 9768 5787 7654', '12 / 34', 432),
('nilesh', '1233 4324 2534 5677', '12 / 34', 123),
('sangram unhale', '1231 3135 6127 7111', '12 / 23', 123),
('shubham', '123123123123', '12/23', 222);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `Dob`) VALUES
(1, 'sangram', '1234', 'Sam', '0000-00-00'),
(5, 'sam', '81dc9bdb52d04dc20036dbd8313ed055', 'sangram sunil unhale', '0000-00-00'),
(6, 'sam1', '827ccb0eea8a706c4c34a16891f84e7b', 'Sangram Unhale', '0000-00-00'),
(7, 'sangram@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Sangram Unhale', '0000-00-00'),
(9, 'vishal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'vishal', '0000-00-00'),
(10, 'Harshad@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Harshad', '0000-00-00'),
(11, 'vishal1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'vishal yadav', '0000-00-00'),
(12, 'anu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Anu', '0000-00-00'),
(13, 'gayatri@gmail.cob', '81dc9bdb52d04dc20036dbd8313ed055', 'gayatri zad', '0000-00-00'),
(14, 'saurabh16sharangdhar@gmail.com', '2ad192fa6080505528de587aef98a2d9', 'saurabh sharangdhar', '0000-00-00'),
(15, 'sam@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Sam Unhale', '0000-00-00'),
(16, 'Harshad1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Harshad Sha', '2021-04-09'),
(17, 'Yuvraj@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Yuraj Dhawle', '1999-07-21'),
(18, 'bhalenilesh1@gmail.com', '412134f251683973df3dcdf8da754d3e', 'nilesh bhale', '1999-03-19'),
(19, 'shubham@gmail.com', '714d69d19d1ba043d5266a1738119546', 'ute shubham', '2022-04-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
