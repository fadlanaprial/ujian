-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 12:36 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `user_id`) VALUES
(1, 'PHP', 1),
(2, 'JAVA', 1),
(3, 'Python', 2),
(4, 'C++', 2),
(5, 'Go', 2),
(6, 'React', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'fadlan'),
(2, 'imam'),
(3, 'roy'),
(4, 'habibi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
