-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 01:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classifieds`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fulladdress` varchar(1000) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `productinfo` varchar(100) DEFAULT NULL,
  `productname` varchar(100) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`product_id`, `name`, `fulladdress`, `phone`, `productinfo`, `productname`, `price`, `brand`, `type`) VALUES
(1, 'Xiaomi', 'No.1, New Street, Banglore', '+919865231426', 'Newly  launched iphone 12 pro max', '12 pro max', 89999, 'Apple', 'Used'),
(2, 'Apple', 'No. 2, North Street, Banglore', '+919876543210', 'Amoled with 120Hz panel', 'Note 10 pro', 12999, 'mi', 'New');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
