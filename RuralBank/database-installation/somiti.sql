-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 06:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `somiti`
--

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan` int(100) NOT NULL,
  `installment` int(200) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan`, `installment`, `id`) VALUES
(2160, 11, 20);

-- --------------------------------------------------------

--
-- Table structure for table `totaltra`
--

CREATE TABLE `totaltra` (
  `tratype` varchar(50) NOT NULL,
  `amt` int(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totaltra`
--

INSERT INTO `totaltra` (`tratype`, `amt`, `id`) VALUES
('withdraw', 500, 15),
('deposit', 5000, 15),
('withdraw', 1000, 15),
('withdraw', 1, 15),
('withdraw', 1000, 15),
('withdraw', 1001, 15),
('withdraw', 1000, 15),
('deposit', 2000, 15),
('withdraw', 990, 15),
('withdraw', 10, 15),
('deposit', 999, 15),
('deposit', 2, 15),
('withdraw', 500, 15),
('withdraw', 100, 15),
('withdraw', 399, 15),
('withdraw', 0, 1),
('deposit', 9, 15),
('withdraw', 9, 15),
('deposit', 1000, 15),
('withdraw', 0, 15),
('withdraw', 1, 15),
('deposit', 1000, 15),
('deposit', 1000, 15),
('withdraw', 1000, 15),
('deposit', 2000, 15),
('withdraw', 1000, 15),
('withdraw', 2999, 15),
('deposit', 0, 15),
('deposit', 2, 15),
('withdraw', 1, 15),
('deposit', 1000, 16),
('withdraw', 3000, 16),
('withdraw', 0, 18),
('withdraw', 500, 18),
('withdraw', 0, 20),
('withdraw', 0, 20),
('withdraw', 100, 20),
('withdraw', 0, 20),
('withdraw', 50, 20),
('withdraw', 0, 20),
('withdraw', 0, 20),
('withdraw', 0, 20),
('withdraw', 0, 20),
('withdraw', 0, 20),
('withdraw', 0, 20),
('withdraw', 20, 20),
('withdraw', 20, 20),
('withdraw', 10, 20),
('withdraw', 10, 20),
('withdraw', 90, 20),
('deposit', 100, 20),
('withdraw', 20, 20),
('withdraw', 0, 20),
('deposit', 0, 20),
('deposit', 20, 20),
('withdraw', 50, 20),
('deposit', 20, 20),
('deposit', 30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Toid` int(50) NOT NULL,
  `Fromid` int(50) NOT NULL,
  `amt` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Toid`, `Fromid`, `amt`) VALUES
(7, 4, 500),
(1, 14, 5000),
(14, 1, 8000),
(14, 1, 4000),
(1, 14, 5000),
(0, 1, 0),
(14, 1, 4000),
(14, 15, 499),
(1, 15, 2000),
(15, 15, 2000),
(15, 15, 100000),
(17, 16, 2000),
(18, 20, 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `intbalans` int(50) DEFAULT NULL,
  `curr_ballence` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `intbalans`, `curr_ballence`) VALUES
(18, 'john', '123', 1000, 0),
(19, 'john', '123', 0, 0),
(20, 'apon', 'apon1234566', 500, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
