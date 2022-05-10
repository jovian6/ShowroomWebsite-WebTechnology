-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 08:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(8) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `telp` varchar(16) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `telp`, `alamat`, `username`, `password`) VALUES
(1, 'Admin', '0812345678909', 'UK Petra', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(8) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(16) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `telp`, `email`, `password`) VALUES
(1, 'arnol', 'jombang', '0812345678906', 'arnol.com', 'kwangsoo'),
(2, 'kendrew', 'surabaya', '0812345678908', 'kendrew.com', 'littlekenken'),
(3, 'jovian', 'bojonegoro', '0812345678907', 'jovian.com', '05122000'),
(4, 'Hugo', 'Bali', '0812345678904', 'hugo.com', 'jagobasket');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(8) NOT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `harga` int(12) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `deskripsi` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `merk`, `nama`, `tanggal`, `harga`, `tahun`, `deskripsi`) VALUES
(1, 'toyota', 'fortuner', '09-04-2018', 380000000, 2018, 'mulus, orisinil, dan gagah'),
(2, 'honda', 'crv', '10-10-2016', 250000000, 2015, 'pintu kiri agak penyok'),
(3, 'suzuki', 'panther', '21-09-2020', 40000000, 2002, 'kuno namun cepat'),
(4, 'toyota', 'yaris', '04-12-2015', 150000000, 2014, 'ada goresan di depan karena nabrak pot tetangga');

-- --------------------------------------------------------

--
-- Table structure for table `test_drive`
--

CREATE TABLE `test_drive` (
  `id_test_drive` int(8) NOT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `waktu` varchar(10) DEFAULT NULL,
  `id_customer` int(8) DEFAULT NULL,
  `id_mobil` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_drive`
--

INSERT INTO `test_drive` (`id_test_drive`, `tanggal`, `waktu`, `id_customer`, `id_mobil`) VALUES
(7, '04-12-2001', '10:00', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(8) NOT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `dp(persen)` int(30) DEFAULT NULL,
  `tenor(tahun)` int(30) DEFAULT NULL,
  `metode_pembayaran` varchar(20) DEFAULT NULL,
  `id_customer` int(8) DEFAULT NULL,
  `id_mobil` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `dp(persen)`, `tenor(tahun)`, `metode_pembayaran`, `id_customer`, `id_mobil`) VALUES
(1, '21-09-2020', 50, 3, 'Kredit', 1, 3),
(3, '09-09-2009', 100, 0, 'Tunai', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `test_drive`
--
ALTER TABLE `test_drive`
  ADD PRIMARY KEY (`id_test_drive`),
  ADD KEY `test_drive_fk1` (`id_customer`),
  ADD KEY `test_drive_fk3` (`id_mobil`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_fk1` (`id_customer`),
  ADD KEY `transaksi_fk3` (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test_drive`
--
ALTER TABLE `test_drive`
  MODIFY `id_test_drive` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `test_drive`
--
ALTER TABLE `test_drive`
  ADD CONSTRAINT `test_drive_fk1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `test_drive_fk3` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_fk1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `transaksi_fk3` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
