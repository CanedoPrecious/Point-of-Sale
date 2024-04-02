-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 12:31 AM
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
-- Table structure for table `pos_categori`
--

CREATE TABLE `pos_categori` (
  `c_id` int(11) NOT NULL,
  `c_category` varchar(255) NOT NULL,
  `c_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pos_categori`
--

INSERT INTO `pos_categori` (`c_id`, `c_category`, `c_description`) VALUES
(0, 'Fresh Produce', ' Fresh harvest such as, fruits(orange, apples, etc.), vegetables(beans, malunggay, etc.), and other fresh goods harvest.'),
(4, 'Seafoods ', 'Foods that are related in the sea such as, fish, shrimps, crabs, etc.'),
(5, 'Can goods ', 'Goods that are inside the can such as, youngstown, cornbeef, beefloaf, and other related can goods.'),
(6, 'Bread & pastry ', 'bread, cookies, and other baked goods.');

-- --------------------------------------------------------

--
-- Table structure for table `pos_product`
--

CREATE TABLE `pos_product` (
  `P_code` int(11) NOT NULL,
  `P_name` varchar(255) NOT NULL,
  `P_category_id` varchar(50) NOT NULL,
  `P_stock` int(11) NOT NULL,
  `P_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pos_product`
--

INSERT INTO `pos_product` (`P_code`, `P_name`, `P_category_id`, `P_stock`, `P_price`) VALUES
(1001, 'Shopao', 'Bread & Pastry', 30, 10),
(1006, 'Crab', 'Seafoods', 30, 50),
(1008, 'Beans', 'Fresh Produce', 20, 50),
(1010, 'Beef loaf', 'Can goods', 20, 25);

-- --------------------------------------------------------

--
-- Table structure for table `pos_users`
--

CREATE TABLE `pos_users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_username` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pos_users`
--

INSERT INTO `pos_users` (`u_id`, `u_name`, `u_email`, `u_username`, `u_password`) VALUES
(1, 'Precious Canedo', 'lilyleclear939@gmail.com', 'Shootey', '$2y$10$bNvl7.2b0Pdr6uEvUVSu8.GCLSM98anMfAyVRcOYOREDnb9Y8l69m'),
(2, 'Maria Fate Hidalgo', 'hidalgoMF@gmail.com', 'Fate', '$2y$10$IywMzIRqVc/LU2Oah0kbmeaw7scaXsrmQhcM4Mx.hFOLHgFw09Fke'),
(3, 'Ryan Reganan', 'ser@gmail.com', 'Ryan', '$2y$10$ZsRjW77a6PREtr1CpiJvqeBMHUwz3NUlnnQfjV/py6Jp/5vJN9Nui'),
(4, 'Aizamae Dayondon', 'aizamae@gmail.com', 'Aiza', '$2y$10$h8lyc3l5PWPJFvuv27LYvOBlcOcx4zuOYsVy7BbMGZRH0OKMZuM8K'),
(5, 'MJ Mayan-ao', 'mjmayan-ao@gmail.com', 'MJ-Mayan-oa', '$2y$10$84zHEgIeKCA/GEa8vAbz2.flp2OptW8SRigdX95e04hvI3BmeiIAy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pos_categori`
--
ALTER TABLE `pos_categori`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `pos_product`
--
ALTER TABLE `pos_product`
  ADD PRIMARY KEY (`P_code`);

--
-- Indexes for table `pos_users`
--
ALTER TABLE `pos_users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pos_categori`
--
ALTER TABLE `pos_categori`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pos_users`
--
ALTER TABLE `pos_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
