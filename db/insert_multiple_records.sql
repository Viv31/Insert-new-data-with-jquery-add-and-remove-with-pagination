-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 06:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insert_multiple_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `date_insert` date NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `quantity`, `price`, `date_insert`, `product_img`) VALUES
(23, 'viv', 'viv', 2, 10, '2020-05-16', 'uploads/202005161589639710employee.png'),
(24, 'title one', 'Description one', 1, 100, '2020-05-16', ''),
(25, 'viv', 'viv', 1, 100, '1970-01-01', 'uploads/202005161589644446c'),
(26, 'viv', 'viv', 1, 100, '1970-01-01', 'uploads/202005161589644447o'),
(27, 'viv', 'viv', 1, 100, '1970-01-01', 'uploads/202005161589644447v'),
(28, 'viv', 'viv', 1, 200, '1970-01-01', 'uploads/202005161589644447e'),
(29, 'New Title', 'New Description', 1, 2000, '2020-05-22', ''),
(30, 'New Title', 'New Description', 1, 2000, '2020-05-22', ''),
(31, 'New Title', 'New Description', 1, 2000, '2020-05-22', ''),
(32, 'New Title', 'New Description', 1, 2000, '2020-05-22', ''),
(33, 'New Title', 'New Description', 1, 2000, '2020-05-22', ''),
(34, 'New Title', 'New Description', 1, 2000, '2020-05-22', ''),
(35, 'New Title', 'New Description', 1, 2000, '2020-05-22', ''),
(36, 'Test Data', 'Test Data', 10, 1000, '2020-05-22', 'uploads/202005161589644828user-profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
