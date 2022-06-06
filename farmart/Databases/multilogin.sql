-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 10:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `multilogin`
--

CREATE TABLE `multilogin` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmPassword` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `activation_expiry` datetime NOT NULL,
  `activated_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multilogin`
--

INSERT INTO `multilogin` (`id`, `firstName`, `lastName`, `email`, `username`, `phoneNo`, `password`, `confirmPassword`, `role`, `status`, `address`, `state`, `activation_code`, `activation_expiry`, `activated_at`, `created_at`, `updated_at`) VALUES
(4, 'Tsion', 'Bizuayehu', 'tsonbizuayehu3@gmail.com', 'tsi123', 912345678, '$2y$10$2qpL78/BYwktT', '123456', 'farmer', 'notverified', '882 Flagler Dr', 'Addis Ababa', '282619', '0000-00-00 00:00:00', NULL, '2022-06-06 15:31:27', '2022-06-06 18:31:27'),
(5, 'TSION', 'Bizuayehu', '2emailme1234@gmail.com', 'tsionbizuayehu3@gmail.com', 912345678, '$2y$10$mHo/IIXqtvJtm', '123456', 'admin', 'verified', '882 Flagler Dr', 'Addis Ababa', '0', '0000-00-00 00:00:00', NULL, '2022-06-06 15:32:36', '2022-06-06 18:43:20'),
(8, 'Tsion', 'Bizuayehu', 'tsionbizuayehu3@gmail.com', 'tsionbizuayehu3@gmail.com', 912345678, '$2y$10$OscXuvM2f1otV', '123456', 'customer', 'verified', '882 Flagler Dr', 'Addis Ababa', '0', '0000-00-00 00:00:00', NULL, '2022-06-06 20:38:00', '2022-06-06 23:38:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multilogin`
--
ALTER TABLE `multilogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multilogin`
--
ALTER TABLE `multilogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
