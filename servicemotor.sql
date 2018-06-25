-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 04:29 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servicemotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id` int(11) NOT NULL,
  `nama_kasir` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id`, `nama_kasir`, `username`, `password`, `role`) VALUES
(1, 'Ali', 'ali', 'ali', 'Kasir'),
(2, 'De Gitgit', 'degitgit', 'degitgit', 'Kasir'),
(3, 'Admin', 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(50) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `stnk` varchar(50) NOT NULL,
  `merk_motor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `alamat`, `stnk`, `merk_motor`) VALUES
(1, 'Shiddiq', 'Gerlong Girang', '12233144523499', 'Honda'),
(2, 'Husein', 'Jl. Pamekar Mulya', '31222331403992', 'Yamaha'),
(3, 'Rafif', 'Geger Arum', '33219492839993', 'Suzuki'),
(4, 'Risman', 'Citarum', '23001390304920', 'Suzuki'),
(5, 'Supri', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `referensijasa`
--

CREATE TABLE `referensijasa` (
  `id` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga_jasa` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `referensijasa`
--

INSERT INTO `referensijasa` (`id`, `kategori`, `harga_jasa`) VALUES
('K001', 'Kategori A', 1000000),
('K002', 'Kategori B', 2000000),
('K003', 'Kategori C', 3000000),
('K004', 'Kategori D', 4000000),
('K005', 'Kategori E', 5000000),
('K006', 'Kategori F', 6000000),
('K007', 'Kategori G', 7000000),
('K008', 'Kategori H', 8000000),
('K009', 'Kategori I', 9000000),
('K010', 'Kategori J', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `referensijasa_detail`
--

CREATE TABLE `referensijasa_detail` (
  `id` int(11) NOT NULL,
  `id_jasa` varchar(255) NOT NULL,
  `id_part` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `referensijasa_detail`
--

INSERT INTO `referensijasa_detail` (`id`, `id_jasa`, `id_part`) VALUES
(1, 'K001', 'P001'),
(2, 'K001', 'P002'),
(3, 'K001', 'P003'),
(4, 'K001', 'P004'),
(5, 'K002', 'P001'),
(6, 'K002', 'P005'),
(7, 'K002', 'P006'),
(8, 'K003', 'P007'),
(9, 'K004', 'P008'),
(10, 'K005', 'P010'),
(11, 'K005', 'P009'),
(12, 'K005', 'P007'),
(13, 'K006', 'P001'),
(14, 'K006', 'P002'),
(15, 'K007', 'P010'),
(16, 'K008', 'P008'),
(17, 'K009', 'P001'),
(18, 'K010', 'P001'),
(19, 'K010', 'P002'),
(20, 'K010', 'P003');

-- --------------------------------------------------------

--
-- Table structure for table `referensipart`
--

CREATE TABLE `referensipart` (
  `id` varchar(50) NOT NULL,
  `nama_part` varchar(50) NOT NULL,
  `harga_part` int(12) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `referensipart`
--

INSERT INTO `referensipart` (`id`, `nama_part`, `harga_part`, `stok`) VALUES
('P001', 'BATTERY CHARGER MF', 10000000, 10),
('P002', 'HOLDER,NEEDLE JET', 15000000, 20),
('P003', 'PIPE,RR', 2000000, 15),
('P004', 'SCREW PAN 6X12', 500000, 8),
('P005', 'STAY RADIATOR LOWER', 1400000, 9),
('P006', 'BOLT ADAPTOR', 110000, 17),
('P007', '88120KTM000FMB', 120000, 15),
('P008', 'STRIPE RED L', 1200000, 14),
('P009', 'SPG,DRUM STOPPER', 15000000, 11),
('P010', 'CYLDR.SB.AS.FR.BK.MT', 100000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksifinal`
--

CREATE TABLE `transaksifinal` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_transaksi` varchar(50) NOT NULL,
  `harga_total` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `transaksifinal`
--

INSERT INTO `transaksifinal` (`id_transaksi`, `id_kasir`, `id_pelanggan`, `tanggal_transaksi`, `harga_total`) VALUES
('T-1', 1, 0, '24/6/2018', 150000),
('T-2', 1, 0, '25/6/2018', 160000),
('T-3', 1, 0, '25/6/2018', 200000),
('T-4', 1, 0, '25/6/2018', 8000000),
('T-5', 1, 0, '25/6/2018', 60000000),
('T-6', 1, 0, '25/6/2018', 8560000),
('T-7', 1, 5, '25/6/2018', 5130000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksijasa`
--

CREATE TABLE `transaksijasa` (
  `id` int(11) NOT NULL,
  `id_referensi_jasa` int(11) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `transaksijasa`
--

INSERT INTO `transaksijasa` (`id`, `id_referensi_jasa`, `id_transaksi`) VALUES
(1, 1, '1'),
(2, 1, 'P'),
(3, 2, 'P'),
(6, 1, 'P'),
(7, 1, 'P225478'),
(8, 2, 'P225478'),
(9, 1, 'P123887583'),
(10, 1, 'TDe Gitgit Agitya2018/06/0363'),
(11, 2, 'TDe Gitgit Agitya2018/06/0363'),
(14, 1, 'T998376652018/06/0316'),
(15, 2, 'T998376652018/06/0316'),
(16, 1, 'T29988592018/06/0312'),
(17, 2, 'T29988592018/06/0312');

-- --------------------------------------------------------

--
-- Table structure for table `transaksipart`
--

CREATE TABLE `transaksipart` (
  `id` int(11) NOT NULL,
  `id_referensi_part` varchar(50) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `transaksipart`
--

INSERT INTO `transaksipart` (`id`, `id_referensi_part`, `id_transaksi`, `quantity`) VALUES
(41, 'P003', 'T-4', 4),
(42, 'P002', 'T-5', 4),
(44, 'P007', 'T-6', 3),
(45, 'P003', 'T-6', 2),
(46, 'P005', 'T-6', 3),
(47, 'P006', 'T-7', 3),
(48, 'P008', 'T-7', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `referensijasa`
--
ALTER TABLE `referensijasa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `referensijasa_detail`
--
ALTER TABLE `referensijasa_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `referensipart`
--
ALTER TABLE `referensipart`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `transaksifinal`
--
ALTER TABLE `transaksifinal`
  ADD PRIMARY KEY (`id_transaksi`) USING BTREE;

--
-- Indexes for table `transaksijasa`
--
ALTER TABLE `transaksijasa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `transaksipart`
--
ALTER TABLE `transaksipart`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `referensijasa_detail`
--
ALTER TABLE `referensijasa_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksijasa`
--
ALTER TABLE `transaksijasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksipart`
--
ALTER TABLE `transaksipart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
