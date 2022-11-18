-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 05:52 AM
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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `package_id` int(255) NOT NULL,
  `title` text NOT NULL,
  `booking_number` varchar(255) NOT NULL,
  `price` int(6) NOT NULL,
  `status` varchar(255) NOT NULL,
  `checkout_session_id` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `package_id`, `title`, `booking_number`, `price`, `status`, `checkout_session_id`, `date`) VALUES
(57, 'Ben Lim ', 'benlccop123@gmail.com', 6, '2D1N Genting Skyworld', 'GGTB16375349b49330', 299, 'approved', 'cs_test_a1hhjmBqjpyYXzeOO8BpRcZ2KYecEbVERnpugYygvLAcFc7SqMedFb63kj', '2022-11-17 03:06:03'),
(60, 'Kok Eason', 'benchina02@gmail.com', 3, '4D3N KL City Exploration', 'GGTB1637539ca48a76', 699, 'approved', 'cs_test_a11GrzqSblkcUHsqxEmGHtpsLRh3YgS6lmfwOmklll2QYfWHNNDmQtBvq1', '2022-11-17 03:28:10'),
(61, 'Kok Eason', 'benchina02@gmail.com', 6, '2D1N Genting Skyworld', 'GGTB163753b15585be', 299, 'approved', 'cs_test_a1khKCjqTkXSzDScuu5NRLhaFKQXlgoovZJ27n3SrwwcgixSeRb8SjqlZa', '2022-11-17 03:33:41'),
(62, 'Ben Lim ', 'benlccop123@gmail.com', 1, 'FREE TRIPS 3', 'GGTB16376a3e7069f8', 499, 'approved', 'cs_test_a1VRum5OQLFKIXqmovhtWumjq4KMev6599S8VxewZ6dR2srBUIhX0x3S2E', '2022-11-18 05:13:11'),
(63, 'Ben Lim ', 'benlccop123@gmail.com', 1, 'FREE TRIPS 3', 'GGTB16376a6e0effad', 499, '', '', '2022-11-18 05:25:52'),
(64, 'Ben Lim ', 'benlccop123@gmail.com', 1, 'FREE TRIPS 3', 'GGTB16376a958bd092', 499, '', '', '2022-11-18 05:36:24'),
(65, 'Ben Lim ', 'benlccop123@gmail.com', 1, 'FREE TRIPS 3', 'GGTB16376aab786c50', 499, 'approved', 'cs_test_a1Cj4SYsVrrkdsdu2U4Y4U4nht6cwClHdLcsd38ghoorIGmi8VIrZIixZG', '2022-11-18 05:42:15'),
(66, 'Ben Lim ', 'benlccop123@gmail.com', 2, '4D3N Wilderness Sabah', 'GGTB16376abca67354', 800, 'approved', 'cs_test_a1mNbNZwfoyqcVFZ92RMmLZGeF7yf7IWpJ99sWHUhbGIFQgLmO2ekEYMDO', '2022-11-18 05:46:50'),
(67, 'Ben Lim ', 'benlccop123@gmail.com', 2, '4D3N Wilderness Sabah', 'GGTB16376aed118a71', 800, '', '', '2022-11-18 05:59:45'),
(68, 'Ben Lim ', 'benlccop123@gmail.com', 5, '7D6N Long Holiday ', 'GGTB16376aede17c9f', 799, 'approved', 'cs_test_a11a8tcByHA6bgf1qjawXfCB68sGM1YZ5Xdjs64cREMCG3CRAYMttnS5bg', '2022-11-18 05:59:58'),
(69, 'Ben Lim ', 'benlccop123@gmail.com', 3, '4D3N KL City Exploration', 'GGTB16376afdbce062', 699, 'approved', 'cs_test_a1PMNdChpAECl2emwfLSQVqWz5BiAU13dT9rUw56Jlq8fl4EyXgWTiUL8A', '2022-11-18 06:04:11'),
(70, 'Ben Lim ', 'benlccop123@gmail.com', 2, '4D3N Wilderness Sabah', 'GGTB16376b3d948dd3', 800, 'approved', 'cs_test_a1xQFm4aRDTFSpTV4HVM7UpNXLzd2JhSO145W9YTQbL0fxSgnt9542crUp', '2022-11-18 06:21:13');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`id`, `name`, `email`, `subject`, `message`) VALUES
(6, 'JARJIT', 'UPINIPIN@GMAIL.COM', 'UPIN IPIN PACKAGE', 'JARJIT IS COOL');

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
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reset_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resetpassword`
--

INSERT INTO `resetpassword` (`id`, `email`, `reset_code`) VALUES
(1, 'choong.b@graduate.utm.my', '1637684b179f44'),
(2, 'choong.b@graduate.utm.my', '1637685053681f'),
(3, 'choong.b@graduate.utm.my', '1637685d5b9180'),
(4, 'choong.b@graduate.utm.my', '1637686233be60'),
(5, 'choong.b@graduate.utm.my', '163768b81e8719'),
(6, 'choong.b@graduate.utm.my', '163768b962d857'),
(7, 'choong.b@graduate.utm.my', '163768c44a4d1a'),
(8, 'choong.b@graduate.utm.my', '163768cd369231'),
(9, 'choong.b@graduate.utm.my', '163768de620436'),
(10, 'choong.b@graduate.utm.my', '163768e1880ee7'),
(11, 'choong.b@graduate.utm.my', '163768eb0694ab'),
(12, 'choong.b@graduate.utm.my', '163768ee27c8a8'),
(13, 'choong.b@graduate.utm.my', '163768f151d707'),
(14, 'choong.b@graduate.utm.my', '163768f7e28ee1'),
(15, 'choong.b@graduate.utm.my', '16376901a99cc5'),
(16, 'choong.b@graduate.utm.my', '16376920b355eb'),
(17, 'choong.b@graduate.utm.my', '1637692394cdb0'),
(18, 'choong.b@graduate.utm.my', '163769446b9394'),
(19, 'choong.b@graduate.utm.my', '1637694db92eef'),
(20, 'choong.b@graduate.utm.my', '163769596a42ae'),
(21, 'choong.b@graduate.utm.my', '163769673b93d9'),
(22, 'choong.b@graduate.utm.my', '1637696e922bdb'),
(23, 'choong.b@graduate.utm.my', '16376976b6ba32'),
(24, 'choong.b@graduate.utm.my', '1637697af1ae04'),
(25, 'choong.b@graduate.utm.my', '1637697d6bf19d'),
(26, 'choong.b@graduate.utm.my', '16376980f24d56'),
(27, 'choong.b@graduate.utm.my', '16376982d88fa5'),
(28, 'choong.b@graduate.utm.my', '1637698569bcab'),
(29, 'choong.b@graduate.utm.my', '1637698763dc76'),
(30, 'choong.b@graduate.utm.my', '16376988e5f811'),
(31, 'choong.b@graduate.utm.my', '1637698c449a45'),
(32, 'choong.b@graduate.utm.my', '1637698e6464c2'),
(33, 'choong.b@graduate.utm.my', '16376991706b6f'),
(34, 'choong.b@graduate.utm.my', '16376993a0f58d'),
(35, 'choong.b@graduate.utm.my', '1637699e8d2727'),
(36, 'choong.b@graduate.utm.my', '163769a8341ffd'),
(37, 'choong.b@graduate.utm.my', '163769add0f0a2'),
(38, 'choong.b@graduate.utm.my', '163769b769ff32'),
(39, 'choong.b@graduate.utm.my', '163769baf0b00a'),
(40, 'choong.b@graduate.utm.my', '163769fedeb9ef');

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
(61, 'benny', 'Ben Lim ', '1234', 'benlccop123@gmail.com', 'user', '122819', NULL),
(66, 'easton6969', 'Kok Eason', 'B@nD@1009', 'benchina02@gmail.com', 'user', '570491', NULL),
(67, 'aideen_teamon', 'Aideen ', 'timun@@109', 'choong.b@graduate.utm.my', 'user', '268482', NULL),
(70, 'knax2424', 'Ben Lim', 'efef', 'irwan@graduate.utm.my', 'user', '155435', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `feedback_form`
--
ALTER TABLE `feedback_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
