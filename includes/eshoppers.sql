-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 06:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshoppers`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(222) NOT NULL,
  `description` varchar(244) NOT NULL,
  `image` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`) VALUES
(2, 'tshirt', '33 RS', 'clothes', 'images/shop/product10.jpg'),
(3, 'jeans', '33 Rs', 'jeans for all season', 'images/shop/product12.jpg'),
(4, 'pants', '299 Rs', 'Full pants Both for men And women', 'images/shop/product8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `mobile` varchar(244) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`) VALUES
(6, 'kaif4', 'kaifk468@gmail.conm', '7408001310', '$2y$10$3uJCMKZuxcLgukG4kJDnzObcKdLB07DoD82M9', '$2y$10$LLfPV43orpw01owsRdgpY.iuckcHABClOjdnlOCbA6ellb8/6w.EK'),
(7, 'admin', 'jalebi@bai.nach', '7408001310', '$2y$10$TB.ToWLXQGMqLEl9S7bN8ebELMdN6Pe9awUtO', '$2y$10$vdV86deiECW0LCT00Q7jxeETusixoqDlmleGvq5BjfiCt0QXK.7Zy'),
(8, 'admin', 'gaifk468@gmail.conm', '7408001310', '$2y$10$NNdTd6HxCN6UTokxT898oeCd9tcwNSzKFSJME5240g1qbNP9kxvLC', '$2y$10$0faWcJMmWAjl1RGfnkNjRee71/tz7i7/bOMWk3e7W/sCEjptG8jde'),
(9, 'kaif9', 'kaifk468@gmail.conm', '7408001310', '$2y$10$AMwyocZW9JICoB3rDNijteOC9yBz6tsUqHB.j7QOwj12LaXTH2p72', '$2y$10$M8KnGxQl3S2naUr5o5fTv.07eMMfsy1jOf5XcWFBShQZ/9NXD3vF6'),
(10, 'admin', 'gaifk468@gmail.con', '7408001310', '$2y$10$iOLYpY09zw8kvuK14O9cCe1EhUOAn7Q1jAtFvzmJ5Fsy5ex8n3o9.', '$2y$10$6j1mbkQcv4P4lA6psUNvXu9vNyzQ4jiiG1S4XZYip6fgKy0ANBpni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
