-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 01:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pudidi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `hobi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `nama`, `email`, `username`, `alamat`, `jk`, `foto`, `hobi`) VALUES
(18, 'asdfgh', 'asdfg@s.cm', 'aaaaa', 'asdfghj', 'Perempuan', 'Profil.png', ''),
(19, 'asd', 'isnannurahmadw@outlook.com', 'isnannura`', 'asdf', 'Perempuan', 'Profil.png', ''),
(20, 'Bagus Cahyono', 'isnanwijayakusuma77@gmail.com', 'isnanwijayakusum', 'wdv', 'Perempuan', 'Planet9_3840x2160.jpg', ''),
(21, 'Bagus Cahyono', 'isnanwijayakusuma77@gmail.com', 'isnanwijayakusum99', 'Kabupaten Wilangi', 'Perempuan', 'Planet9_3840x2160.jpg', ''),
(22, 'Bagas Cahyono', 'isnanwijayakusuma@student.uns.ac.id', 'isnanwijayakusumr', 'Kabupaten Wilangi', 'Perempuan', 'Planet9_3840x2160.jpg', ''),
(23, 'Bagas Cahyono', 'isnanwijayakusuma77@gmail.com', 'isnanwijayakusu5', 'Kabupaten Wilangi', 'Perempuan', 'Planet9_3840x2160.jpg', ''),
(24, 'Bagus Cahyono', 'isnannurahmadw@outlook.com', 'isnannurahma1', 'Gresik', 'Perempuan', 'Planet9_3840x2160.jpg', ''),
(25, 'Bagus Cahyono', 'isnannurahmadw@outlook.com', 'isnannurahma8', 'Gresik', 'Laki - laki', 'Planet9_3840x2160.jpg', ''),
(26, 'Bagus Cahyono', 'isnannurahmadw@outlook.com', 'isnannurahma8', 'Gresik', 'Laki - laki', 'Planet9_3840x2160.jpg', ''),
(27, 'Bagus Cahyono', 'isnannurahmadw@outlook.com', 'isnannurahma8', 'Gresik', 'Laki - laki', 'Planet9_3840x2160.jpg', ''),
(28, 'Bagus Cahyono', 'isnanwijayakusuma77@gmail.com', 'isnanwijayakusu2', 'Gresik', 'Perempuan', 'Planet9_3840x2160.jpg', ''),
(29, 'Bagus Cahyono', 'isnanwijayakusuma77@gmail.com', 'isnanwijayakus22', 'Kabupaten Wilangi', 'Perempuan', '1.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Samsung XL', 1200000, '1.jpg'),
(2, 'Renovo F7', 3300000, '2.jpg'),
(3, 'Lenovo Revo', 6590000, '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
