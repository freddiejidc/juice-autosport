-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 05:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carauto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `nameb` varchar(255) NOT NULL,
  `imageb` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `nameb`, `imageb`, `price`) VALUES
(73, 'Ford Mustang Limited Edition 2014', 'auto.5cc9dfa04d3705.33165821.jpg', 23000.00),
(72, 'Ford Mustang 2006', 'auto.5cc9df5ae3e0a2.14976977.jpg', 6999.99),
(71, 'Mercedes Benz 2007', 'auto.5cc9df21a523f7.37469206.jpg', 4999.99),
(70, 'Acura LS 2009', 'auto.5cc9de284500d2.03758032.jpg', 6000.00),
(69, 'Boat Vinl 1990', 'auto.5cc9de0db0a253.58185833.jpg', 455.99),
(68, 'Toyota Camry 2014', 'auto.5cc9ddcdcd9257.85842968.jpg', 11999.99),
(67, 'Jeep 2015', 'auto.5cc9dd844e4c83.81489452.jpg', 15999.99),
(66, 'Lexus Coop 2011', 'auto.5cc9dd59764db6.89740039.jpg', 9999.99),
(65, 'Lexus Coop 2011', 'auto.5cc9dd457ef8e9.44388161.jpg', 9.00),
(64, 'Cadillac STX 2015', 'auto.5cc9dca2536b99.30545522.jpg', 35000.00),
(63, 'Honda Turbo7 2015', 'auto.5cc9dc1d985c28.28223781.jpg', 26000.00),
(62, 'Lexus Coop 2015', 'auto.5cc9dbdc00bfc7.43735986.jpg', 18999.99),
(61, 'PT Cruiser 2004', 'auto.5cc9dba085dcf8.47144634.jpg', 3000.00),
(60, 'Geo z7 2000', 'auto.5cc9db6c848ad0.32876704.jpg', 1500.00),
(59, 'Volvo Crossover 2014', 'auto.5cc9db41811971.77242814.jpg', 26000.00),
(58, 'Highlander 2013', 'auto.5cc9db1968e6a7.22562501.jpg', 9999.99),
(57, 'Jeep Liberty 2012', 'auto.5cc9da896fc796.51340174.jpg', 10999.99),
(56, 'Ford Focus', 'auto.5cc9d92a7473e8.19540739.jpg', 8000.00),
(55, 'Kia Rio 2010', 'auto.5cc9d8dd51b354.61767323.jpg', 6000.00),
(46, 'Ford Expedition 06', 'fordexp.5cc9d53280d076.51322519.jpg', 7500.00),
(47, 'BMW 7Series 09', 'auto.5cc9d5b5f01ec8.52333899.jpg', 12000.99),
(48, 'Kia Rondo 2010', 'auto.5cc9d603b591e2.97382514.jpg', 14999.99),
(49, 'Mercedes Benz Crossover 2011', 'auto.5cc9d63c47f4c7.44091518.jpg', 20499.99),
(50, 'BMX S Class 2009', 'auto.5cc9d67b37c253.62532965.jpg', 13000.99),
(51, 'Chevy Camaro 2014', 'auto.5cc9d6d6761da2.87477589.jpg', 18500.99),
(52, 'Lexus SX 2015', 'auto.5cc9d73bdce2b8.63018889.jpg', 22000.85),
(53, 'Acura LS 2000', 'auto.5cc9d78434d565.38173495.jpg', 2400.00),
(54, 'Mercedes Wagon 2013', 'auto.5cc9d7bda3e1d1.89776491.jpg', 22000.00),
(74, 'Chevy Malibu 2016', 'auto.5cc9dfc6107d02.88613188.jpg', 10999.99),
(75, 'Acura LS 2006', 'auto.5cc9dfec6e7598.23602312.jpg', 3875.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
