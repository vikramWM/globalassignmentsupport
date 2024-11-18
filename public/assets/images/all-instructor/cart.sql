-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2024 at 07:31 AM
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
-- Database: `wallplanet_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `price` decimal(8,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `is_placed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `is_deleted`, `price`, `total`, `address_id`, `payment_method`, `is_placed`, `created_at`, `updated_at`) VALUES
(21, 5, 70, 1, 0, NULL, 4112.90, 5, 'cash', 1, '2024-09-07 04:53:08', '2024-09-10 01:44:02'),
(22, 5, 71, 3, 0, NULL, 4112.90, 5, 'cash', 1, '2024-09-07 05:01:05', '2024-09-10 01:48:46'),
(23, 5, 72, 1, 1, NULL, NULL, 0, '', 0, '2024-09-07 06:35:39', '2024-09-11 07:00:17'),
(24, 5, 74, 1, 0, NULL, 4112.90, 5, 'cash', 1, '2024-09-09 02:09:10', '2024-09-10 01:44:02'),
(25, 5, 71, 2, 0, NULL, NULL, NULL, NULL, 0, '2024-09-10 01:53:50', '2024-09-11 23:47:29'),
(26, 5, 70, 5, 0, NULL, 4620.00, 9, 'cash', 1, '2024-09-10 02:08:55', '2024-09-10 02:46:28'),
(27, 5, 73, 2, 0, NULL, NULL, NULL, NULL, 0, '2024-09-11 02:41:03', '2024-09-11 23:45:05'),
(28, 5, 70, 1, 0, NULL, NULL, NULL, NULL, 0, '2024-09-11 04:56:50', '2024-09-11 06:46:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
