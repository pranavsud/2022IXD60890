-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2022 at 03:11 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audia_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(32) NOT NULL,
  `title` varchar(128) NOT NULL,
  `images` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `category`, `title`, `images`, `thumbnail`, `price`, `description`, `quantity`, `total`) VALUES
(1, '2022-11-08 01:29:57', '2022-11-08 01:29:57', 'Headphones', 'Major 4', '', 'major4.jpg', '149.99', 'Major 4 enhances bass and noise reduction.', 25, '0'),
(2, '2022-11-08 01:35:38', '2022-11-08 01:35:38', 'Headphones', 'FLY ANC', '', 'flying.jpg', '119.99', 'Fly ANC is great for noise-cancellation.', 38, '0'),
(3, '2022-11-08 01:39:14', '2022-11-08 01:39:14', 'Headphones', 'WH-1000XM5', '', 'wh1000.jpg', '299.99', 'Industry leading wireless headphones for sound and function. ', 50, '0'),
(4, '2022-11-08 01:41:49', '2022-11-08 01:41:49', 'Headphones', 'Beoplay H95', '', 'beoplay.jpg', '349.99', 'Beoplay has sleek design and comfort. ', 45, '0'),
(5, '2022-11-08 01:43:40', '2022-11-08 01:43:40', 'Speakers', 'Onyx Studio 7', '', 'onyxstudio.jpg', '199.99', 'Onyx Studio 6 produces enriching sound and augments all around experience.', 50, '0'),
(6, '2022-11-08 01:46:16', '2022-11-08 01:46:16', 'Speakers', 'Kilburn', '', 'kilburn.jpg', '299.99', 'Kilburn is the best portable speaker in its range.', 50, '0'),
(7, '2022-11-08 01:49:40', '2022-11-08 01:49:40', 'Speakers', 'Revolve+', '', 'revolve.jpg', '249.99', 'Revolve+ accentuates bass and treble with a small handy design.', 50, '0'),
(8, '2022-11-08 01:53:09', '2022-11-08 01:53:09', 'Speakers', 'Beolit', '', 'beolit.jpg', '499.99', 'Beolit has refined sound quality and exemplary range without comprising clarity. ', 30, '0'),
(9, '2022-11-08 01:58:09', '2022-11-08 01:58:09', 'Home Theatre', 'Bose Premium', '', 'bosepremium.jpg', '2100.00', 'The best home audio system for the price range. ', 0, '0'),
(10, '2022-11-08 02:03:06', '2022-11-08 02:03:06', 'Home Theater', 'R-800F', '', 'r800f.jpg', '899.99', 'Great surround sound with sturdy and sleek body design. ', 20, '0'),
(11, '2022-11-08 02:05:48', '2022-11-08 02:05:48', 'Home Theater', 'Home Line 3', '', 'homeline.jpg', '1099.99', 'Best combination speakers with amplifying sound coordination technology. ', 35, '0'),
(12, '2022-11-08 02:08:52', '2022-11-08 02:08:52', 'Home Theater ', 'Ray Immersive', '', 'ray.jpg', '1051.00', 'Complimenting sound throw and balance for immersive experience. ', 25, '0');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
