-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 02:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenurban`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES(1, 'bestin', 'sj', 'bestin.s.jorly@gmail.com', '6a204bd89f3c8348afd5c77c717a097a');

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES(1, 'bestin_s_jorly', '$2y$10$RnDwpen5c8.gtZLaxHEHDOKWY77t/20A4RRkWBsjlPuu7Wmy0HyBu', 'MyG5Xw2I12EWdJeD', '$2y$10$XL/RhpCz.uQoWE1xV77Wje4I4ker.gtg7YV4yqNwLZfzIYnP7E8Na', '2019-02-16 22:39:57', 'super');
INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES(2, 'admin', '$2y$10$Pf0IityH6kr6mzIBUwO8bewq7lYGQMOCDfMUMp6OVEx/tipPjrQCi', 'MyG5Xw2I12EWdJeD', '$2y$10$XL/RhpCz.uQoWE1xV77Wje4I4ker.gtg7YV4yqNwLZfzIYnP7E8Na', '2019-08-22 01:12:33', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pquantity` varchar(255) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productprice` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `pid`, `pquantity`, `orderid`, `productprice`) VALUES(29, 25, '5', 22, '10');
INSERT INTO `orderitems` (`id`, `pid`, `pquantity`, `orderid`, `productprice`) VALUES(28, 23, '5', 22, '10');
INSERT INTO `orderitems` (`id`, `pid`, `pquantity`, `orderid`, `productprice`) VALUES(27, 24, '5', 21, '12');
INSERT INTO `orderitems` (`id`, `pid`, `pquantity`, `orderid`, `productprice`) VALUES(26, 23, '1', 20, '10');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `totalprice` varchar(255) NOT NULL,
  `orderstatus` varchar(255) NOT NULL,
  `shipping` varchar(30) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `totalprice`, `orderstatus`, `shipping`, `paymentmode`, `timestamp`) VALUES(22, 13, '100', 'Order placed', 'not assigned', 'cash', '2022-07-11 22:35:37');
INSERT INTO `orders` (`id`, `uid`, `totalprice`, `orderstatus`, `shipping`, `paymentmode`, `timestamp`) VALUES(21, 13, '60', 'Delivered', 'bestin_s_jorly', 'cash', '2022-07-11 13:52:49');
INSERT INTO `orders` (`id`, `uid`, `totalprice`, `orderstatus`, `shipping`, `paymentmode`, `timestamp`) VALUES(20, 12, '10', 'Order Placed', '', 'cash', '2022-07-10 13:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `ordertracking`
--

CREATE TABLE `ordertracking` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unit` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `review` text NOT NULL,
  `rate` int(1) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `plastic` varchar(20) NOT NULL DEFAULT '0',
  `metal` varchar(20) NOT NULL DEFAULT '0',
  `kitchen` varchar(20) NOT NULL DEFAULT '0',
  `drain` varchar(20) NOT NULL DEFAULT '0',
  `income` int(20) NOT NULL DEFAULT 0,
  `expense` int(20) NOT NULL DEFAULT 0,
  `status` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `address`, `email`, `password`, `timestamp`) VALUES(12, 'bestin_s_jorly', 'Palayamkunnu po Varkala', 'bestin.s.jorly@gmail.com', '$2y$10$0P.oNQax88IHiQwWT8vrSudrc1n/euKZOGFpKuW87mOII5UksTrXy', '2022-07-03 15:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `usersmeta`
--

CREATE TABLE `usersmeta` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT 'IN',
  `zip` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersmeta`
--

INSERT INTO `usersmeta` (`id`, `uid`, `firstname`, `lastname`, `address`, `city`, `state`, `country`, `zip`, `mobile`) VALUES(1, 12, 'bestin', 'sj', 'Palayamkunnu po Varkala', 'TVM', 'KERALA', 'IN', '695146', '07356135610');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertracking`
--
ALTER TABLE `ordertracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usersmeta`
--
ALTER TABLE `usersmeta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ordertracking`
--
ALTER TABLE `ordertracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usersmeta`
--
ALTER TABLE `usersmeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
