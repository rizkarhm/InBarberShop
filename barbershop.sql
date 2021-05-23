-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 07:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_booking`
--

CREATE TABLE `tabel_booking` (
  `id_booking` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `jam_booking` time NOT NULL,
  `keterangan_booking` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_booking`
--

INSERT INTO `tabel_booking` (`id_booking`, `id_user`, `id_paket`, `tanggal_booking`, `jam_booking`, `keterangan_booking`, `time`) VALUES
(1, 1, 1, '2021-05-16', '12:00:00', NULL, '2021-05-16 12:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_diskon`
--

CREATE TABLE `tabel_diskon` (
  `id_diskon` int(11) NOT NULL,
  `nama_diskon` varchar(100) NOT NULL,
  `jumlah_diskon` int(11) NOT NULL,
  `deskripsi_diskon` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_galery`
--

CREATE TABLE `tabel_galery` (
  `id_foto` int(11) NOT NULL,
  `nama_foto` varchar(200) NOT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_harga`
--

CREATE TABLE `tabel_harga` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_harga`
--

INSERT INTO `tabel_harga` (`id_paket`, `nama_paket`, `harga_paket`) VALUES
(1, 'Potong Rambut', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kontak`
--

CREATE TABLE `tabel_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(100) NOT NULL,
  `link_kontak` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pencapaian`
--

CREATE TABLE `tabel_pencapaian` (
  `id_pencapaian` int(11) NOT NULL,
  `nama_pencapaian` int(100) NOT NULL,
  `jumlah_pencapaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `telepon_user` varchar(20) NOT NULL,
  `foto_user` varchar(500) DEFAULT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(10) NOT NULL,
  `level_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `telepon_user`, `foto_user`, `email_user`, `password_user`, `level_user`) VALUES
(1, 'rizka', '087859159058', NULL, 'rizkarahma67@gmail.com', 'rizka123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_booking`
--
ALTER TABLE `tabel_booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tabel_diskon`
--
ALTER TABLE `tabel_diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `tabel_galery`
--
ALTER TABLE `tabel_galery`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tabel_harga`
--
ALTER TABLE `tabel_harga`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tabel_kontak`
--
ALTER TABLE `tabel_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tabel_pencapaian`
--
ALTER TABLE `tabel_pencapaian`
  ADD PRIMARY KEY (`id_pencapaian`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_booking`
--
ALTER TABLE `tabel_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_diskon`
--
ALTER TABLE `tabel_diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_galery`
--
ALTER TABLE `tabel_galery`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_harga`
--
ALTER TABLE `tabel_harga`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_kontak`
--
ALTER TABLE `tabel_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_pencapaian`
--
ALTER TABLE `tabel_pencapaian`
  MODIFY `id_pencapaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_booking`
--
ALTER TABLE `tabel_booking`
  ADD CONSTRAINT `tabel_booking_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_booking_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tabel_harga` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
