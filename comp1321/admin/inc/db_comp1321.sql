-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 06:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_comp1321`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `authorID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`authorID`, `name`, `email`) VALUES
(1, 'Yasmin Hurd', 'mw3828b@greenwich.ac.uk'),
(5, 'Mia Wallace', 'miawallace1999@hotmail.co.uk');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `category`) VALUES
(1, 'Donuts'),
(2, 'Chocolate'),
(3, 'Cakes'),
(4, 'Biscuits'),
(9, 'Tart');

-- --------------------------------------------------------

--
-- Table structure for table `recipecategory`
--

CREATE TABLE `recipecategory` (
  `recipeid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipecategory`
--

INSERT INTO `recipecategory` (`recipeid`, `categoryid`) VALUES
(1, 1),
(2, 2),
(4, 1),
(6, 1),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipeID` int(11) NOT NULL,
  `recipe_name` text NOT NULL,
  `author` text NOT NULL,
  `img` text DEFAULT NULL,
  `ingredients` mediumtext DEFAULT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipeID`, `recipe_name`, `author`, `img`, `ingredients`, `author_id`) VALUES
(1, 'Jam & Coconut Coated Donuts', 'Yasmin Hurd', 'img/donuts.jpg', 'Jam<br> Coconut Flakes <br> Flour <br>', 1),
(2, 'Dark Chocolate Brownies', 'Yasmin Hurd', 'img/brownies.jpg', NULL, 1),
(4, 'Lemon Donuts', 'Yasmin Hurd', 'img/lemon-donuts.jpg', NULL, 1),
(6, 'Sugared Mini Donuts', 'Yasmin Hurd', 'img/sugar-donuts.jpg', NULL, 1),
(7, 'Banana Cake', 'Mia Wallace', 'img/banana_cake.jpg', '- Bananas<br>\r\n- Flour<br>\r\n- 2 Eggs<br>\r\n- Cinnamon<br>\r\n- Brown Sugar<br>', 5),
(58, 'Hiya', '', NULL, NULL, 5),
(59, 'dgvv', '', NULL, NULL, 1),
(61, 'ygygygy', '', NULL, NULL, 5),
(62, 'Tart', '', NULL, NULL, 1),
(63, 'testing', '', NULL, NULL, 1),
(64, 'bruhh', '', NULL, NULL, 1),
(65, 'bruhh', '', NULL, NULL, 1),
(66, 'bruhh', '', NULL, NULL, 1),
(67, 'super', '', NULL, NULL, 1),
(68, 'super', '', NULL, NULL, 1),
(69, 'super', '', NULL, NULL, 1),
(70, 'super', '', NULL, NULL, 1),
(71, 'super', '', NULL, NULL, 1),
(72, 'super', '', NULL, NULL, 1),
(73, 'super', '', NULL, NULL, 1),
(74, 'yellow', '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authorID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `recipecategory`
--
ALTER TABLE `recipecategory`
  ADD PRIMARY KEY (`recipeid`,`categoryid`),
  ADD KEY `recipeid` (`recipeid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipeID`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipecategory`
--
ALTER TABLE `recipecategory`
  ADD CONSTRAINT `recipecategory_ibfk_1` FOREIGN KEY (`recipeid`) REFERENCES `recipes` (`recipeID`) ON DELETE CASCADE,
  ADD CONSTRAINT `recipecategory_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryID`) ON DELETE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`authorID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
