-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 06:42 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skbss`
--
CREATE DATABASE IF NOT EXISTS `skbss` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `skbss`;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `contact` varchar(16) NOT NULL,
  `complain_type` set('operating system','application system','database system','hardware infragment','technical problem') NOT NULL,
  `description` varchar(256) NOT NULL,
  `complain_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `name`, `contact`, `complain_type`, `description`, `complain_date`) VALUES
(1, 'surajit', '01700822626', 'technical problem', 'problem in email login', '2019-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `created_at`) VALUES
(10, 'mhfaisal14@cse.pstu.ac.bd', 'mhfaisal', '$2y$10$Zy9ITz0K7mGx9/vqnEDsUutaMxIJoozBLNOK.ftcHpBQ2lXxV70Na', '2018-10-19 17:41:16'),
(11, 'mahmudulhasanfaisal.hijbullah@gmail.com', 'mhfaisalbd', '$2y$10$Mbtteu./lEmeKKCHxQbJ6OD7GQGkPR/oOt43pX5NxjQcsG4oEuCge', '2018-10-19 19:58:48'),
(12, 'srshohan201103@gmail.com', 'shohan', '$2y$10$7P0XZaYJeVGHnD4IGmTdJOr4txNkKApLmACJi1813Br3fihhuK5zW', '2018-10-19 20:07:47'),
(13, 'surajitbiswascse1997@gmail.com', 'surajit', '$2y$10$N8dGCW4SFPK4S.cG4RikLOR/Qmx.xmmWPs.iUxAGYnglbbYAavvVK', '2019-01-27 01:17:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
