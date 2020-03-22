-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 06:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `code_order` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `technician` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_order` date NOT NULL,
  `date_finish` date NOT NULL,
  `price` int(11) NOT NULL,
  `shipment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `code_order`, `customer`, `technician`, `image`, `detail`, `status`, `date_order`, `date_finish`, `price`, `shipment`) VALUES
(3, 1677978096, 'andry', 'default', 'andry.png', 'error mas,ngelu aku', 'in_progress', '2020-03-21', '0000-00-00', 0, ''),
(11, 26335840, 'andry', 'default', 'andry.jpg', 'aaaaaaaaaaaaa', 'in_queue', '2020-03-22', '0000-00-00', 0, ''),
(12, 95869841, 'andry', 'default', 'andry1.png', 'wes kenek mas', 'in_queue', '2020-03-22', '0000-00-00', 0, ''),
(13, 1200570903, 'andry', 'default', 'andry2.png', 'erer', 'in_queue', '2020-03-22', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `image`, `status`) VALUES
(1, 'admin', 'admin', '', 'admin'),
(2, 'default', 'default', '', 'technician'),
(3, 'andry', '123', 'andry.jpg', 'customer'),
(4, 'kiki', '123', 'kiki.png', 'technician-unverified'),
(5, 'rijalll', '123', 'rijalll.jpg', 'technician'),
(6, 'lemon', '123', 'lemon.jpg', 'technician-unverified'),
(7, 'bukan', '123', 'bukan.jpg', 'customer-unverified');

-- --------------------------------------------------------

--
-- Table structure for table `user_customer`
--

CREATE TABLE `user_customer` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_customer`
--

INSERT INTO `user_customer` (`id`, `user`, `password`, `fullname`, `image`, `email`, `address`, `phone`) VALUES
(1, 'andry', '123', 'Andry Dwi S', 'andry.jpg', 'andry.dwi.s@gmail.com', 'malang', '08986895328'),
(2, 'bukan', '123', 'Andry Dwi S', 'bukan.jpg', 'andry.dwi.s@gmail.com', 'malang', '08986895328');

-- --------------------------------------------------------

--
-- Table structure for table `user_technician`
--

CREATE TABLE `user_technician` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_technician`
--

INSERT INTO `user_technician` (`id`, `user`, `password`, `fullname`, `image`, `email`, `address`, `phone`, `education`) VALUES
(1, 'default', 'default', '', '', '', '', '', ''),
(2, 'kiki', '123', 'kiki wibu', 'kiki.png', 'andry.dwi.s@gmail.com', 'malang', '08986895328', 'S1'),
(3, 'rijalll', '123', 'rizal', 'rijalll.jpg', 'andry.dwi.s@gmail.com', 'malang', '08986895328', 'SMA/SMK'),
(4, 'lemon', '123', 'lemon', 'lemon.jpg', 'andry.knights@gmail.com', 'malang', '123', 'SMA/SMK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer` (`customer`,`technician`),
  ADD KEY `technician` (`technician`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `user_customer`
--
ALTER TABLE `user_customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `user_technician`
--
ALTER TABLE `user_technician`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_customer`
--
ALTER TABLE `user_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_technician`
--
ALTER TABLE `user_technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `user_customer` (`user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`technician`) REFERENCES `user_technician` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_customer`
--
ALTER TABLE `user_customer`
  ADD CONSTRAINT `user_customer_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_technician`
--
ALTER TABLE `user_technician`
  ADD CONSTRAINT `user_technician_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
