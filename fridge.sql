-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 05:10 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fridge`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `dom` date NOT NULL,
  `pd` date NOT NULL,
  `domd` varchar(255) NOT NULL,
  `ed` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `dom`, `pd`, `domd`, `ed`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Banana', '2023-05-20', '2023-05-23', '8', '2023-05-24', 'Q6SidJZVqUSDenQrk5XWslUcwe7XnizrBgEHdmUJ.jpg', '2023-05-23 13:56:35', '2023-05-23 14:48:06'),
(6, 'Cherry', '2023-05-21', '2023-05-22', '2', '2023-05-22', '0TaViNSYbTBtU3pwYKuofniIr1eVebrmXr2ZMV0J.jpg', '2023-05-23 14:48:51', '2023-05-23 14:49:14'),
(7, 'Yoghurt', '2023-05-14', '2023-05-16', '6', '2023-06-01', 'H6LaH25DawZYl9L4GrBdwvayWj5y1Ycz9LQgVv1I.jpg', '2023-05-23 14:55:18', '2023-05-23 15:03:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
