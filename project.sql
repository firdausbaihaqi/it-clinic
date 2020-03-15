-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 09:47 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'andry', '123', 'technician'),
(5, 'andryyy', '123', 'technician'),
(7, 'kiki', '`23', 'technician-unverified'),
(8, 'andrydwis', '123', 'customer-unverified');

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
(18, 'andrydwis', '123', 'Andry Dwi S', 'andrydwis.jpg', 'andry.dwi.s@gmail.com', 'malang', '08986895328');

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
(38, 'andry', '123', 'Andry Dwi S', 'andry.jpg', 'andry.dwi.s@gmail.com', 'malang', '08986895328', 'D3'),
(39, 'andryyy', '123', 'Andry Dwi S', 'andryyy.jpg', 'andry.dwi.s@gmail.com', 'Semanggi Barat no 25', '08986895328', 'D1/D2'),
(41, 'kiki', '`23', 'fiqiiiiiii', 'kiki1.jpg', 'andry.dwi.s@gmail.com', '11', '1', 'SMA/SMK');

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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_customer`
--
ALTER TABLE `user_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_technician`
--
ALTER TABLE `user_technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
