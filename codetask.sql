-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 12:48 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codetask`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `ord_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `ord_id`) VALUES
(1, 'manoj kumar', 'manoj@gmail.com', '1234567980', 'no 10 wall st usa', '1'),
(2, 'kathir', 'manoj@gmail.com', '1234567980', 'no 10 wall st usa', '2'),
(3, 'sss', 'ss@gmail.com', '1234567980', 'no 10 wall st usa', '3'),
(4, 'james', 'james@gmail.com', '1234567980', 'no 10 wall st usa', '4'),
(5, 'manoj kumar1', 'manoj11@gmail.com', '1234567980', 'fdgddfgdfgdf', '5');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `generated_id` varchar(300) NOT NULL,
  `dates` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `generated_id`, `dates`, `status`) VALUES
(1, '1625219731', '2021-07-02 11:55:31', 'placed'),
(2, '1625220068', '2021-07-02 12:01:08', 'placed'),
(3, '1625222263', '2021-07-02 12:37:43', 'placed'),
(4, '1625222367', '2021-07-02 12:39:27', 'placed'),
(5, '1625222867', '2021-07-02 12:47:47', 'placed');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `prd_id` varchar(300) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `price` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `ord_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `prd_id`, `qty`, `price`, `name`, `ord_id`) VALUES
(1, '1', '1', '5', 'detol', '1'),
(2, '2', '2', '5', 'vim liquid', '1'),
(3, '1', '1', '5', 'detol', '2'),
(4, '2', '3', '5', 'vim liquid', '3'),
(5, '1', '2', '5', 'detol', '4'),
(6, '4', '1', '10', 'tigerbuiscuits', '5'),
(7, '3', '2', '10', 'britania', '5');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `sdesc` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `img` text NOT NULL,
  `price` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `cate_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `sdesc`, `description`, `img`, `price`, `status`, `cate_id`) VALUES
(1, 'detol', 'germs free', 'virus free', 'devops2.png', '5', '1', '2'),
(2, 'vim liquid', 'extra dark', 'write smooth', 'devops3.png', '5', '1', '2'),
(3, 'britania', 'healthy things ', 'healthy things ', 'samplecrud2.png', '10', '1', '1'),
(4, 'tigerbuiscuits', 'good for health', 'high milk good taste', 'downloadtiger.jpg', '10', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
