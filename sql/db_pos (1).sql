-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 12:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `pos_accnt`
--

CREATE TABLE `pos_accnt` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_username` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pos_accnt`
--

INSERT INTO `pos_accnt` (`a_id`, `a_name`, `a_email`, `a_username`, `a_password`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'Admin', 'admin123'),
(2, 'Maria User', 'user@gmail.com', 'User', '$2y$10$W8JrawHoNXcafpRPLs2PxubhyDBN3KmT07YAfYK6T3QQFTbaH0Uzu');

-- --------------------------------------------------------

--
-- Table structure for table `pos_categori`
--

CREATE TABLE `pos_categori` (
  `c_id` int(11) NOT NULL,
  `c_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pos_categori`
--

INSERT INTO `pos_categori` (`c_id`, `c_category`) VALUES
(1, 'Seafoods'),
(2, 'Fruits'),
(3, 'Vegetables');

-- --------------------------------------------------------

--
-- Table structure for table `pos_product`
--

CREATE TABLE `pos_product` (
  `P_code` int(11) NOT NULL,
  `P_name` varchar(255) NOT NULL,
  `P_category_id` int(11) NOT NULL,
  `P_stock` int(11) NOT NULL,
  `P_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pos_product`
--

INSERT INTO `pos_product` (`P_code`, `P_name`, `P_category_id`, `P_stock`, `P_price`) VALUES
(1003, 'Cabbage ', 3, 10, 20),
(1111, 'Tilapia', 1, 10, 200),
(20221, 'Apples', 2, 12, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pos_sale`
--

CREATE TABLE `pos_sale` (
  `s_no` int(11) NOT NULL,
  `s_date` date NOT NULL,
  `s_product_id` int(11) NOT NULL,
  `s_qty` int(11) NOT NULL,
  `s_price` float NOT NULL,
  `s_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pos_accnt`
--
ALTER TABLE `pos_accnt`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `pos_categori`
--
ALTER TABLE `pos_categori`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `pos_product`
--
ALTER TABLE `pos_product`
  ADD PRIMARY KEY (`P_code`),
  ADD KEY `P_category_id` (`P_category_id`);

--
-- Indexes for table `pos_sale`
--
ALTER TABLE `pos_sale`
  ADD PRIMARY KEY (`s_no`),
  ADD KEY `s_product_id` (`s_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pos_accnt`
--
ALTER TABLE `pos_accnt`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pos_sale`
--
ALTER TABLE `pos_sale`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
