-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 09:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_e`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(6) NOT NULL,
  `categoryName` varchar(30) NOT NULL,
  `categoryDescription` varchar(30) NOT NULL,
  `categoryImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryName`, `categoryDescription`, `categoryImage`) VALUES
(1, 'test', 't1', 't2'),
(2, 'shoe', 'sneakers', 'location');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `company_email` varchar(250) NOT NULL,
  `company_tradeType` varchar(30) NOT NULL,
  `company_country` varchar(30) NOT NULL,
  `company_number` varchar(200) NOT NULL,
  `company_TRN` varchar(50) NOT NULL,
  `company_NIS` varchar(50) NOT NULL,
  `company_address` varchar(250) NOT NULL,
  `company_logo` varchar(200) NOT NULL,
  `datecreate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyid`, `userid`, `company_name`, `company_email`, `company_tradeType`, `company_country`, `company_number`, `company_TRN`, `company_NIS`, `company_address`, `company_logo`, `datecreate`) VALUES
(1, 7, 'test Company', 'test@email.com', 'Tech', 'Jamaica', '', '123456789', 'X123456', 'Somewhere', '', ''),
(3, 6, 'test Company', 'test@email.com', 'Tech', 'Jamaica', '', '123456784', 'X123456', 'Somewhere', '\\Static\\img\\testcom.jpeg', ''),
(5, 3, 'testcom', 'test1@email.com', 'Technology', 'Food Service', '32132521', '32132521', 'x123456', 'testcom', '../Static/userUploadstopup failed in sep2622.jpg', '15/Feb/2023 --- 04:41:41pm'),
(6, 17, 'gg', 'g@email.com', 'Food Service', 'Technology', '1234567', '12345678909876543', 'x1234567654323454', 'gg', '../Static/userUploadsIMG_1783.JPG', '15/Feb/2023 --- 08:31:05pm'),
(7, 1, 'test', 'test100@email.com', 'Colothing', 'Technology', '23456789', '12321222121212', 'x1212121212', 'test', '../Static/userUploadsScreenshot_20221102_084016.png', '16/Feb/2023 --- 02:59:39am');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(6) NOT NULL,
  `invoiceNumber` int(6) NOT NULL,
  `productid` int(6) NOT NULL,
  `orderDate` date NOT NULL,
  `orderTime` time NOT NULL,
  `userid` int(6) NOT NULL,
  `buyerCompanyId` int(11) NOT NULL,
  `orderQuantity` int(6) NOT NULL,
  `orderShipToAdd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `invoiceNumber`, `productid`, `orderDate`, `orderTime`, `userid`, `buyerCompanyId`, `orderQuantity`, `orderShipToAdd`) VALUES
(3, 2023021, 2, '2023-11-02', '12:02:00', 2, 1, 20, 'location');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(6) NOT NULL,
  `categoryid` int(6) NOT NULL,
  `Companyid` int(250) NOT NULL,
  `productName` varchar(30) NOT NULL,
  `productAmount` int(6) NOT NULL,
  `productUnitprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `Companyid`, `productName`, `productAmount`, `productUnitprice`) VALUES
(2, 1, 2, 'vans', 34, 125.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `user_Firstname` varchar(30) NOT NULL,
  `user_Lastname` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `telephone_no` int(10) NOT NULL,
  `verificationCode` varchar(20) DEFAULT NULL,
  `isVerified` varchar(20) DEFAULT NULL,
  `dateCreated` varchar(20) NOT NULL,
  `user_imgLink` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `user_Firstname`, `user_Lastname`, `user_email`, `user_password`, `telephone_no`, `verificationCode`, `isVerified`, `dateCreated`, `user_imgLink`) VALUES
(1, 'dog', 'shine', 'dog@email.com', 'aBc1234567', 123456987, NULL, NULL, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyid`),
  ADD UNIQUE KEY `company_TRN` (`company_TRN`),
  ADD KEY `company_name` (`company_name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`invoiceNumber`),
  ADD UNIQUE KEY `orderid` (`orderid`),
  ADD UNIQUE KEY `invoiceNumber` (`invoiceNumber`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`categoryid`,`Companyid`,`productName`),
  ADD UNIQUE KEY `productid` (`productid`),
  ADD KEY `categoryid` (`categoryid`),
  ADD KEY `Companyid` (`Companyid`) USING BTREE,
  ADD KEY `productName` (`productName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
