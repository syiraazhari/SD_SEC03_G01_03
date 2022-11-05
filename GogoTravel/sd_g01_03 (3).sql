-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 06:40 PM
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
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `package_id` int(3) NOT NULL,
  `title` text NOT NULL,
  `info` text NOT NULL,
  `price` int(11) NOT NULL,
  `memo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`package_id`, `title`, `info`, `price`, `memo`) VALUES
(1, 'bla', 'wad', 566, 'wawaw'),
(2, 'Discover the Beautiful Rainforest of Borneo', 'Starting from ', 599, 'Borneo, a giant, rugged island in Southeast Asia’s Malay <br>\r\n										Archipelago, is shared by the Malaysian states of Sabah and <br>\r\n										Sarawak, Indonesian Kalimantan and the tiny nation of Brunei.</p>'),
(3, 'WHAT ARE THOSE', 'Catch the trip for RM', 500, 'SABAH WE GO FISHING GO JUMP AROUND TREES IT WILL BE HELLA FUN');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(3) NOT NULL,
  `title` text NOT NULL,
  `price` int(6) NOT NULL,
  `memo` text NOT NULL,
  `duration` int(2) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `title`, `price`, `memo`, `duration`, `location`) VALUES
(1, 'FREE TRIPS 3', 499, 'WOWOWOWO ojwcaoj', 4, 'Tanjung Perak, Rambutan'),
(2, '4D3N Wilderness Sabah', 800, 'SABAH WE GO FISHING GO JUMP AROUND TREES IT WILL BE HELLA FUN.', 4, 'Sabah'),
(3, '4D3N KL City Exploration', 699, 'The city vibes of Kuala Lumpur City never fails to remind you that you have tons of work to do still :D', 4, 'Kuala Lumpur City'),
(4, '3D2N Pulau Pangkor Getaway', 299, 'Pulau Pangkor, an island with beautiful beaches and crystal clear sea water, just like Langkawi.', 3, ' Manjung, Perak'),
(5, '7D6N Long Holiday ', 799, 'Enjoy a week-long holiday around Pahang for just the low price of RM799.', 7, 'Pahang'),
(6, '2D1N Genting Skyworld', 299, 'Enjoy the latest tourist attraction of Geting Skyworld at Genting Highlands! Just at a low price of RM399', 2, 'Wilayah Persekutuan Kuala Lumpur');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `usertype` varchar(20) NOT NULL DEFAULT 'user',
  `verification_code` text NOT NULL,
  `email_verified_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`, `email`, `usertype`, `verification_code`, `email_verified_at`) VALUES
(1, 'admin', 'ADMIN', 'admin123', 'admin@gmail.com', 'admin', '', NULL),
(2, 'jhnysins2', 'Sins Johnny', 'eqweqw', 'jnysins@gmail.com', 'staff', '274555', NULL),
(61, 'benny', 'Ben Lim ', '123', 'benlccop123@gmail.com', 'user', '122819', NULL),
(66, 'easton6969', 'Kok Eason', 'B@nD@1009', 'benchina02@gmail.com', 'user', '570491', NULL),
(67, 'aideen_teamon', 'Aideen ', 'timun@@109', 'choong.b@graduate.utm.my', 'user', '268482', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `package_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
