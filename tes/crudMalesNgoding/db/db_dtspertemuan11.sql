-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 03:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dtspertemuan11`
--

-- --------------------------------------------------------

--
-- Table structure for table `maki_tb_barang`
--

CREATE TABLE `maki_tb_barang` (
  `no` int(4) NOT NULL,
  `nama_merek` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maki_tb_barang`
--

INSERT INTO `maki_tb_barang` (`no`, `nama_merek`, `warna`, `jumlah`) VALUES
(1, 'Nike', 'Merah', 30),
(2, 'Puma', 'Hitam', 20),
(3, 'asd', 'dsa', 2),
(4, 'dsa', 'dsa', 3),
(5, 'asdasd', 'dsadas', 4);

-- --------------------------------------------------------

--
-- Table structure for table `maki_tb_user`
--

CREATE TABLE `maki_tb_user` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maki_tb_user`
--

INSERT INTO `maki_tb_user` (`id`, `username`, `password`) VALUES
(1, 'ADMIN', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maki_tb_barang`
--
ALTER TABLE `maki_tb_barang`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `maki_tb_user`
--
ALTER TABLE `maki_tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maki_tb_barang`
--
ALTER TABLE `maki_tb_barang`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maki_tb_user`
--
ALTER TABLE `maki_tb_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
