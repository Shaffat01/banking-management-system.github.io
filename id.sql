-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 04:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE `id` (
  `cse_Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id`
--

INSERT INTO `id` (`cse_Id`, `name`, `id`, `dept`, `address`, `image`) VALUES
(0, 'Akash', '1802139', 'ECE', 'jhinaidah', 'id-1637586312-4061554.jpg'),
(1, 'Shaffat Mahmud', '1802154', 'ece', 'Newtown,sector-1', 'id-1637538234-410175.png'),
(2, 'Shaffat Mahmud', '1802154', 'ece', 'Newtown,sector-1', 'id-1637538362-1800786.png'),
(5, 'Shaffat Mahmud', '1802154', 'ece', 'Newtown,sector-1', 'id-1637538516-6463906.png'),
(8, 'Amirul Sarkar', '1802169', 'ece', 'Aulbad,joynagor,kaitola,bera,pabna', 'id-1637539875-6067511.jpg'),
(9, 'page_id', '1802154', 'ece', 'Newtown,sector-1', 'id-1637540106-6831333.jpg'),
(10, 'ibrar', '1802244', 'skslkls', 'dorsona', 'id-1637574777-678384.jpg'),
(11, 'ibrar', '1802244', 'skslkls', 'dorsona', 'id-1637574792-1009263.jpg'),
(12, 'Amirul Sarkar', '1802244', 'ece', 'Aulbad,joynagor,kaitola,bera,pabna', 'id-1637584717-6291998.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`cse_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `id`
--
ALTER TABLE `id`
  MODIFY `cse_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
