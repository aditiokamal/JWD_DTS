-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 08:36 AM
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
-- Database: `db_sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `no` int(11) NOT NULL,
  `kode_barang` int(6) NOT NULL,
  `tgl_masuk` text NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `spesifikasi` varchar(250) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `harga_beli` int(20) NOT NULL,
  `harga_jual` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`no`, `kode_barang`, `tgl_masuk`, `nama_barang`, `spesifikasi`, `supplier`, `harga_beli`, `harga_jual`) VALUES
(1, 100011, '2020-11-07', 'Buku Tulis', '58 Lembar', 'Sinar Dunia', 5000, 7000),
(2, 100012, '2020-11-07', 'Buku Tulis', '38 Lembar', 'Kiki', 4000, 6000),
(3, 123123, '2020-11-07', 'TES', 'TES', 'TES', 321, 312);

-- --------------------------------------------------------

--
-- Table structure for table `data_supplier`
--

CREATE TABLE `data_supplier` (
  `no` int(11) NOT NULL,
  `kode_supplier` int(6) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` varchar(250) NOT NULL,
  `kontak_supplier` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_supplier`
--

INSERT INTO `data_supplier` (`no`, `kode_supplier`, `nama_supplier`, `alamat_supplier`, `kontak_supplier`) VALUES
(1, 200011, 'Sinar Dunia', 'Bogor', '0812345678'),
(2, 200012, 'Kiki', 'Sukabumi', '0876543210'),
(3, 1000013, 'TES', 'TES', 'TES');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `authority` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `name`, `authority`) VALUES
(1, 'admin', 'admin', 'ADMINISTRATOR', 'ADMINISTRATOR'),
(2, 'admin', 'admin', 'ADMINISTRATOR', 'ADMINISTRATOR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `data_supplier`
--
ALTER TABLE `data_supplier`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_supplier`
--
ALTER TABLE `data_supplier`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
