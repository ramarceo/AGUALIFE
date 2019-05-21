-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 04:30 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agua_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressID` int(11) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `auditID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `auditTypeID` int(10) NOT NULL,
  `details` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`auditID`, `userID`, `auditTypeID`, `details`, `created_at`) VALUES
(1, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 12:42:15'),
(2, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 12:51:53'),
(3, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 12:52:05'),
(4, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 12:54:35'),
(5, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 12:58:43'),
(6, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 12:58:47'),
(7, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 13:00:23'),
(8, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 13:00:28'),
(9, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 13:02:46'),
(10, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 13:03:11'),
(11, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 13:16:58'),
(12, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 13:17:03'),
(13, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 13:18:38'),
(14, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 13:18:52'),
(15, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 13:20:34'),
(16, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 13:36:56'),
(17, 2, 2, 'alvinpan@gmail.com logged in to the system.', '2019-03-01 13:37:04'),
(18, 2, 3, 'alvinpan@gmail.com logged out.', '2019-03-01 13:38:59'),
(19, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 13:42:37'),
(20, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 13:42:41'),
(21, 2, 2, 'alvinpan@gmail.com logged in to the system.', '2019-03-01 13:42:50'),
(22, 2, 3, 'alvinpan@gmail.com logged out.', '2019-03-01 13:43:00'),
(23, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 13:47:58'),
(24, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 13:48:01'),
(25, 2, 2, 'alvinpan@gmail.com logged in to the system.', '2019-03-01 13:48:16'),
(26, 2, 2, 'alvinpan@gmail.com logged in to the system.', '2019-03-01 13:52:22'),
(27, 2, 3, 'alvinpan@gmail.com logged out.', '2019-03-01 13:52:36'),
(28, 2, 2, 'alvinpan@gmail.com logged in to the system.', '2019-03-01 13:53:18'),
(29, 2, 2, 'alvinpan@gmail.com logged in to the system.', '2019-03-01 13:53:21'),
(30, 2, 3, 'alvinpan@gmail.com logged out.', '2019-03-01 14:07:15'),
(31, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 14:07:32'),
(32, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 14:08:57'),
(33, 2, 2, 'alvinpan@gmail.com logged in to the system.', '2019-03-01 14:09:07'),
(34, 2, 2, 'alvinpan@gmail.com logged in to the system.', '2019-03-01 14:09:11'),
(35, 2, 3, 'alvinpan@gmail.com logged out.', '2019-03-01 14:09:19'),
(36, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 14:18:20'),
(37, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 14:46:26'),
(38, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 14:46:29'),
(39, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-01 15:53:20'),
(40, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-01 15:53:24'),
(41, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-02 04:19:13'),
(42, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-02 04:22:25'),
(43, 3, 2, 'kcablon77@gmail.com logged in to the system.', '2019-03-02 04:22:29'),
(44, 3, 3, 'kcablon77@gmail.com logged out.', '2019-03-02 04:25:24'),
(45, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-03-02 04:25:42'),
(46, 1, 3, 'arceo.ramon@gmail.com logged out.', '2019-03-02 04:26:08'),
(47, 1, 2, 'arceo.ramon@gmail.com logged in to the system.', '2019-05-17 04:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `audittype`
--

CREATE TABLE `audittype` (
  `auditTypeID` int(10) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audittype`
--

INSERT INTO `audittype` (`auditTypeID`, `type`) VALUES
(1, 'User Registration'),
(2, 'Account Login'),
(3, 'Account Logout'),
(4, 'Update Profile'),
(5, 'Change Password'),
(6, 'Delete User'),
(7, 'Delete Cooperative'),
(8, 'Update User'),
(9, 'Update Cooperative'),
(10, 'Add User'),
(11, 'Add Cooperative'),
(12, 'Invest Transaction'),
(13, 'Withdrawal');

-- --------------------------------------------------------

--
-- Table structure for table `cooperative`
--

CREATE TABLE `cooperative` (
  `coopID` int(11) NOT NULL,
  `roleID` int(3) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` int(100) NOT NULL,
  `govtID` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `head` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `repayRate` float NOT NULL,
  `status` varchar(10) NOT NULL,
  `pledgeLimit` int(11) NOT NULL,
  `interestRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `depositID` int(11) NOT NULL,
  `userID` int(11) UNSIGNED NOT NULL,
  `date` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticketID` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` text NOT NULL,
  `resolve` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `roleID` int(2) NOT NULL DEFAULT '0',
  `addressID` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `govt_ID` varchar(100) DEFAULT NULL,
  `isConfirmed` tinyint(4) NOT NULL DEFAULT '0',
  `validationCode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `roleID`, `addressID`, `userName`, `firstName`, `lastName`, `email`, `password`, `created_at`, `govt_ID`, `isConfirmed`, `validationCode`) VALUES
(2, 0, 0, '', 'Kenneth', 'Isleta', 'kenneth@gmail.com', '2a2611b0ccde69af534480cb96eb9a13', '2019-05-16 17:52:56', NULL, 0, '6855d0f4ba2eb240492e16261b367cc8'),
(3, 0, 0, '', 'Stacey', 'Tan', 'paulinestacey.tan@benilde.edu.ph', '1ef87b6e93260e01c9bca2903c2367b1837b817a5b82d309ae095e01ddc76b6f', '2019-05-16 17:54:12', NULL, 0, 'a9031793f2c29bac7104b116b83cbe7acb49a95c96bb1037f1e20facdcb6b185'),
(4, 0, 0, '', 'Katrina ', 'Mangulabnan', 'katkat@gmail.com', 'f347f27466b6f6f05700990e91ec785f4f2b233298c194198b4fa3df276ff77a', '2019-05-16 17:55:40', NULL, 0, '0fbecd65267a8be954c439f7ba9df24e430eb3db3a557b5d8d81399c455d7494'),
(5, 0, 0, '', 'Kevin', 'Ablon', 'kcablon77@gmail.com', '1b1d6185e1e3cb25a3f9c38394df0156f5cd6314277c295f42e9dd87928e686b', '2019-05-16 18:09:24', NULL, 0, '989943368547ab8ac75b86f771aeeb1a96f493dc2a34a350dbd9199138373cb6');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `withdrawalid` int(11) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawalreceipt`
--

CREATE TABLE `withdrawalreceipt` (
  `receiptid` int(11) NOT NULL,
  `withdrawalid` int(11) UNSIGNED NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressID`),
  ADD KEY `addressID` (`addressID`);

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`auditID`);

--
-- Indexes for table `audittype`
--
ALTER TABLE `audittype`
  ADD PRIMARY KEY (`auditTypeID`);

--
-- Indexes for table `cooperative`
--
ALTER TABLE `cooperative`
  ADD PRIMARY KEY (`coopID`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`depositID`),
  ADD KEY `userid` (`userID`),
  ADD KEY `userid_2` (`userID`),
  ADD KEY `userID_3` (`userID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticketID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `roleID` (`roleID`),
  ADD KEY `addressID` (`addressID`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`withdrawalid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `withdrawalid` (`withdrawalid`);

--
-- Indexes for table `withdrawalreceipt`
--
ALTER TABLE `withdrawalreceipt`
  ADD PRIMARY KEY (`receiptid`),
  ADD KEY `withdrawalid` (`withdrawalid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `auditID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `audittype`
--
ALTER TABLE `audittype`
  MODIFY `auditTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cooperative`
--
ALTER TABLE `cooperative`
  MODIFY `coopID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `depositID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticketID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `withdrawalid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdrawalreceipt`
--
ALTER TABLE `withdrawalreceipt`
  MODIFY `receiptid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
