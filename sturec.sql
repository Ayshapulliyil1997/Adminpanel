-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2022 at 11:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sturec`
--

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `username` varchar(500) NOT NULL,
  `home` varchar(500) NOT NULL,
  `about` varchar(500) NOT NULL,
  `services` varchar(500) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `content` text NOT NULL,
  `heading1` varchar(6000) NOT NULL,
  `aboutcon` text NOT NULL,
  `aboutcon1` text NOT NULL,
  `heading2` varchar(6000) NOT NULL,
  `servicescon` text NOT NULL,
  `servicescon1` text NOT NULL,
  `heading3` text NOT NULL,
  `heading4` text NOT NULL,
  `heading5` text NOT NULL,
  `heading6` text NOT NULL,
  `heading7` text NOT NULL,
  `contact` text NOT NULL,
  `heading8` text NOT NULL,
  `heading9` text NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL,
  `email` varchar(100) NOT NULL,
  `phn` varchar(100) NOT NULL,
  `company` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`username`, `home`, `about`, `services`, `heading`, `content`, `heading1`, `aboutcon`, `aboutcon1`, `heading2`, `servicescon`, `servicescon1`, `heading3`, `heading4`, `heading5`, `heading6`, `heading7`, `contact`, `heading8`, `heading9`, `id`, `name`, `image`, `email`, `phn`, `company`) VALUES
('anu', 'homeee', 'abou', 'sir', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '0', ''),
('anu', 'homeee', 'abou', 'sir', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '', '', '', '0', ''),
('aysa', 'xdfcgvhb', 'dxfcgvhb', 'fgvhbj', '', '', 'fgvhb', 'xcfvbn', 'dxfcgvhbjn', ' bnm', 'drftghj', 'dfcgvhbjnkm', 'nm,', ' bn', 'nm', 'bam,', 'bam', 'bnm', 'bam', '', 3, '', '', 'bvcxz', '876543', 'vghbjnk');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(200) NOT NULL,
  `filename` varchar(3999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'aysa', '$2y$10$3GMFYXsbJebYnpK8tFzYe.yIsv79dTdoOPQ4JfzNoMNuR.3FvBhCa', '2021-09-06 08:59:12'),
(2, 'ras', '$2y$10$uex1jmCy5MQFGbPTVUG49eKmcv9M9JA1B0UKvPdYXyFZDjU8.AwQS', '2021-09-06 12:33:11'),
(3, 'ayna', '$2y$10$ry4Gc54XaLEPIELND9g5f.x1DTEZhQl5sKSbymieERne2tXWmqXKa', '2021-09-06 12:33:55'),
(4, 'adi', '$2y$10$VdEo8uXhlAz2tcly7LyP8OFT6GeFHOndbTXHeWlKkrvdENdlvpCnG', '2021-09-06 12:35:52'),
(5, 'shiv', '$2y$10$Dn6InISK6Ng3tXoW0fwZnOIXNoD2sl3LSlzVIof9WAz6JfiWgJ.Za', '2021-09-06 12:37:23'),
(6, 'dil', '$2y$10$2coQ34ByxQLfhep0I0S/C.y0GaWDXgMUnm79unH8OwN6RurtH3gHe', '2021-09-06 12:41:17'),
(7, 'anu', '$2y$10$HFG1yn9cTabbhD2NRbBkQOFVdHOk4J1TFdVae9BaMoKLC21sGqeOe', '2021-09-07 14:19:26'),
(8, 'anju', '$2y$10$.eKPivddWjzMMStnL/goKOhaM0LutcliLluYNgPfCwKorzj0zlq6G', '2021-09-25 11:27:32'),
(9, 'andu', '$2y$10$V2CEMy2FT.t.FXuU99.2ZOT0oYslJ1r4Yn4v4xVP2s8S/iV7dtYLa', '2022-01-04 18:12:45'),
(10, 'ays', '$2y$10$AUmuPoqUzgfQiJuwk5qLAeYpIOCFSdOxGooY6Qj/hbpgeJ0LNpRy2', '2022-01-06 00:23:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
