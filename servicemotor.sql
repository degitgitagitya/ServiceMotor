-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2018 at 02:23 PM
-- Server version: 10.2.6-MariaDB-log
-- PHP Version: 7.1.14

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
-- Table structure for table `mekanik`
--

CREATE TABLE `mekanik` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mekanik`
--

INSERT INTO `mekanik` (`id`, `nama`) VALUES
('M001', 'Budi'),
('M002', 'Sopian');

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
(15, 'Gitgit', 'Bandung', '2266985', 'Honda'),
(16, 'Detya', '', '', ''),
(17, 'Gitgit', 'Bandung', '2266985', 'Honda'),
(18, 'De', 'Tasikmalaya', '5566985', 'Yamaha');

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
(5, 'K002', 'P005'),
(6, 'K002', 'P006'),
(7, 'K002', 'P007'),
(8, 'K003', 'P008'),
(9, 'K004', 'P009'),
(10, 'K005', 'P010'),
(11, 'K005', 'P011'),
(12, 'K005', 'P012'),
(13, 'K006', 'P013'),
(14, 'K006', 'P014'),
(15, 'K007', 'P015'),
(16, 'K008', 'P016'),
(17, 'K009', 'P017'),
(18, 'K010', 'P018'),
(19, 'K010', 'P019'),
(20, 'K010', 'P020');

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
('P010', 'CYLDR.SB.AS.FR.BK.MT', 100000, 5),
('P011', 'BOLT FLANGE 8X28\r\n', 12000, 8),
('P012', 'SWITCH,LIGHT', 1005000, 10),
('P013', 'SOCKET HEADLIGHT ASSY\r\n', 48000, 12),
('P014', 'HEADLIGHT ASSY\r\n', 165000, 5),
('P015', 'SWINGARM RR ASSY\r\n', 370000, 3),
('P016', 'COVER UNDER R SD(BLK)\r\n', 117000, 8),
('P017', 'HORN COMP,R', 600000, 9),
('P018', 'T SHIRT BEAT BIRU HIJAU\r\n', 40000, 3),
('P019', 'OFFSET WR\r\n', 38000, 5),
('P020', 'BAR COMP STEP\r\n', 80000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksifinal`
--

CREATE TABLE `transaksifinal` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_transaksi` varchar(50) NOT NULL,
  `harga_total` int(12) NOT NULL,
  `nama_mekanik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `transaksifinal`
--

INSERT INTO `transaksifinal` (`id_transaksi`, `id_kasir`, `id_pelanggan`, `tanggal_transaksi`, `harga_total`, `nama_mekanik`) VALUES
('T-1', 1, 6, '25/6/2018', 0, ''),
('T-2', 1, 14, '25/6/2018', 0, ''),
('T-3', 1, 15, '25/6/2018', 45000000, ''),
('T-4', 1, 16, '25/6/2018', 0, ''),
('T-5', 1, 17, '25/6/2018', 0, 'Budi'),
('T-6', 1, 18, '25/6/2018', 0, 'Budi');

-- --------------------------------------------------------

--
-- Table structure for table `transaksijasa`
--

CREATE TABLE `transaksijasa` (
  `id` int(11) NOT NULL,
  `id_referensi_jasa` varchar(50) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `transaksijasa`
--

INSERT INTO `transaksijasa` (`id`, `id_referensi_jasa`, `id_transaksi`) VALUES
(18, 'K001', 'T-1'),
(19, 'K003', 'T-1'),
(24, 'K006', 'T-5');

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
(49, 'P002', 'T-3', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `mekanik`
--
ALTER TABLE `mekanik`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `referensijasa_detail`
--
ALTER TABLE `referensijasa_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksijasa`
--
ALTER TABLE `transaksijasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `transaksipart`
--
ALTER TABLE `transaksipart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
