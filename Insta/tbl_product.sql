
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
(1, 'Item 1', '1.jpg', 3500.00),
(2, 'Item 2', '2.jpg', 4600.00),
(3, 'Item 3', '3.jpg', 4000.00),
(4, 'Item 4', '4.jpg', 13000.00),
(5, 'Item 5', '5.jpg', 4000.00),
(6, 'Item 6', '6.jpg', 16000.00),
(7, 'Item 7', '7.jpg', 2700.00),
(8, 'Item 8', '8.jpg', 5000.00),
(9, 'Item 9', '9.jpg', 7000.00),
(10, 'Item 10', '10.jpg', 9000.00),
(11, 'Item 11', '11.jpg', 8000.00),
(12, 'Item 12', '12.jpg', 15000.00),
(13, 'Item 13', '13.jpg', 11000.00),
(14, 'Item 14', '14.jpg', 6000.00),
(15, 'Item 15', '15.jpg', 7200.00),
(16, 'Item 16', '16.jpg', 6600.00),
(17, 'Item 17', '17.jpg', 8000.00),
(18, 'Item 18', '18.jpg', 4500.00),
(19, 'Item 19', '19.jpg', 10500.00),
(20, 'Item 20', '20.jpg', 9200.00),
(21, 'Item 21', '21.jpg', 7400.00),
(22, 'Item 22', '22.jpg', 5600.00),
(23, 'Item 23', '23.jpg', 4000.00),
(24, 'Item 24', '24.jpg', 5000.00),
(25, 'Item 25', '25.jpg', 8900.00);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
