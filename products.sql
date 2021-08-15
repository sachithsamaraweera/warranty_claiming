-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 09:58 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `warranty`
--

CREATE TABLE `warranty` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `purchased_shop` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `purchased_date` date NOT NULL,
  `warranty_coverage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warranty`
--

INSERT INTO `warranty` (`id`, `item_name`, `purchased_shop`, `description`, `purchased_date`, `warranty_coverage`) VALUES
(1, 'aasfas', 'safasf', 'fasfasf', '2021-08-14', 6),
(2, 'Fantech Hg11', 'NeoView', 'and', '2021-08-14', 6),
(3, 'Fantech Hg17', 'NeoView', '', '2021-08-05', 12),
(4, 'Mouse', 'NeoView', '', '2021-08-14', 6),
(5, 'Keyboard', 'NeoView', '', '2021-08-14', 6),
(27, 'Fantech Hg123', 'NeoView', '', '2021-08-14', 6),
(28, 'Keyboard', 'NeoView', '', '2021-08-14', 6),
(29, 'Keyboard', 'NeoView', 'erer', '2021-08-14', 6),
(30, 'Monitor', 'NeoView', '', '2021-08-14', 12),
(31, 'RTX3080ti', 'Chama', 'badu supiri', '2021-05-24', 36),
(32, 'MSI GTX 1660Ti OC', 'RedTech', 'box eka dunne ne shop eke paraya', '2020-02-14', 36),
(33, 'abbb', 'NeoView', '', '2021-08-14', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warranty`
--
ALTER TABLE `warranty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `warranty`
--
ALTER TABLE `warranty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
