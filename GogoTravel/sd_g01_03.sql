-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 07:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sd_g01_03`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `usertype` varchar(20) NOT NULL DEFAULT 'user',
  `name` text NOT NULL,
  `verification_code` text NOT NULL,
  `email_verified_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `usertype`, `name`, `verification_code`, `email_verified_at`) VALUES
(1, 'admin', '1234', 'admin@gmail.com', 'admin', 'USER', '', NULL),
(2, 'user', '1234', 'user@gmail.com', 'user', '', '', NULL),
(3, 'staff', '1234', 'staff@gmail.com', 'staff', '', '', NULL),
(18, 'benlim2002', '1234', 'benlccop123@gmail.com', 'user', 'Ben Lim', '724533', NULL),
(19, 'knax2424', '1234', 'benlccop123@gmail.com', 'user', 'Kok Eason', '340495', NULL),
(20, 'c.notsure', '1234', 'benlccop123@gmail.com', 'user', 'Irwan', '599568', NULL),
(21, 'c.notsure', '1234', 'benlccop123@gmail.com', 'user', 'Irwan', '205017', NULL),
(22, 'c.notsure', '1234', 'yasuocs@gmail.com', 'user', 'Irwan', '688034', NULL),
(23, 'c.notsure', '123', 'yasuocs@gmail.com', 'user', 'Irwan', '129720', NULL),
(24, '224ewq', 'wqe', 'choong.b@graduate.utm.my', 'user', 'Kok Eason1', '148595', NULL),
(25, 'knax2424', '123', 'benlccop123@gmail.com', 'user', 'Ben Lim', '396048', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
