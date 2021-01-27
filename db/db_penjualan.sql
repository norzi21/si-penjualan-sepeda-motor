-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2021 at 04:30 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `id_penjualan` varchar(10) NOT NULL,
  `nm_sales` varchar(50) NOT NULL,
  `nm_pembeli` varchar(50) NOT NULL,
  `no_telp` text NOT NULL,
  `alamat` text NOT NULL,
  `jenis_motor` varchar(20) NOT NULL,
  `tgl_beli` date NOT NULL,
  PRIMARY KEY (`id_penjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `nm_sales`, `nm_pembeli`, `no_telp`, `alamat`, `jenis_motor`, `tgl_beli`) VALUES
('PJ001', '1001', 'ALDRIANSYAH', '082127182718', 'Jl. Cokroaminoto No.21', 'SM003', '2021-01-02'),
('PJ002', '1002', 'Sri Utami', '082273501452', 'Pulo Bandring', 'SM002', '2021-01-03'),
('PJ003', '1003', 'Indah', '082276761536', 'Bunut Seberang', 'SM001', '2021-01-03'),
('PJ004', '1002', 'Nora Zizi', '087816272671', 'Kisaran', 'SM003', '2021-01-05'),
('PJ005', '1002', 'Syahputra', '087767261726', 'Kisaran', 'SM005', '2021-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE IF NOT EXISTS `salesman` (
  `id_sales` int(11) NOT NULL AUTO_INCREMENT,
  `nm_sales` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `target` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1004 ;

--
-- Dumping data for table `salesman`
--

INSERT INTO `salesman` (`id_sales`, `nm_sales`, `alamat`, `no_telp`, `target`) VALUES
(1001, 'Aji Syahputra', 'Jl. Cokroaminoto', '082147483647', '13'),
(1002, 'Wahyudi', 'Jl. Ahmad Yani', '087856251422', '20'),
(1003, 'Adi', 'Jl. Durian', '082132332123', '20');

-- --------------------------------------------------------

--
-- Table structure for table `sepeda_motor`
--

CREATE TABLE IF NOT EXISTS `sepeda_motor` (
  `kd_sepedamotor` varchar(10) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_jual` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_sepedamotor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepeda_motor`
--

INSERT INTO `sepeda_motor` (`kd_sepedamotor`, `merk`, `stok`, `harga_jual`) VALUES
('SM001', 'BEAT CBS', 35, '16.600.000'),
('SM002', 'BEAT CBS-ISS', 20, '17.650.000'),
('SM003', 'CBR150R', 15, '36.150.000'),
('SM004', 'VARIO 150', 26, '25.070.000'),
('SM005', 'PCX', 14, '34.220.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'devk@gmail.com', 'Admin', 1, 'Staff Kepaniteraan Hukum'),
('sales', '3d2172418ce305c7d16d4b05597c6a59', 'devk@gmail.com', 'Indah', 2, 'Salesman ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
