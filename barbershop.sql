-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 08:02 AM
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
-- Table structure for table `tabel_blog`
--

CREATE TABLE `tabel_blog` (
  `id_blog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `insert_at` datetime NOT NULL,
  `insert_by` int(11) NOT NULL,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_blog`
--

INSERT INTO `tabel_blog` (`id_blog`, `id_kategori`, `judul`, `isi`, `insert_at`, `insert_by`, `update_at`, `update_by`) VALUES
(1, 1, 'Cara blogging melalui android', 'Lorem ipsum', '2021-05-25 11:25:42', 1, '2021-05-25 04:26:19', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_booking`
--

CREATE TABLE `tabel_booking` (
  `id_booking` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `jam_booking` time NOT NULL,
  `keterangan_booking` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_booking`
--

INSERT INTO `tabel_booking` (`id_booking`, `id_paket`, `tanggal_booking`, `jam_booking`, `keterangan_booking`, `time`) VALUES
(1, 1, '2021-05-16', '12:00:00', NULL, '2021-05-16 12:32:29');

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

--
-- Dumping data for table `tabel_diskon`
--

INSERT INTO `tabel_diskon` (`id_diskon`, `nama_diskon`, `jumlah_diskon`, `deskripsi_diskon`) VALUES
(1, 'DISKON SEMUA LAYANAN', 25, 'Daftarkan diri anda sekarang juga dan dapatkan special diskon 25% untuk Member InBarberShop');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_galery`
--

CREATE TABLE `tabel_galery` (
  `id_foto` int(11) NOT NULL,
  `nama_foto` varchar(200) NOT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_galery`
--

INSERT INTO `tabel_galery` (`id_foto`, `nama_foto`, `foto`) VALUES
(1, 'foto 1', 'gallery-1.jpg'),
(2, 'foto 2', 'gallery-2.jpg'),
(3, 'foto 3', 'gallery-3.jpg'),
(4, 'foto 4', 'gallery-4.jpg'),
(5, 'foto 5', 'gallery-5.jpg'),
(6, 'foto 6', 'gallery-6.jpg'),
(7, 'foto 7', 'gallery-7.jpg'),
(8, 'foto 8', 'gallery-8.jpg');

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
(1, 'Potong Rambut', 30000),
(2, 'Gentlemen Cut', 50000),
(3, 'Gentlemen Grooming', 60000),
(4, 'Kids Haircut', 30000),
(5, 'Grooming + Hair Tattoo', 150000),
(6, 'Wash, Massage & Hairspa', 50000),
(7, 'Basic Hair Color', 100000),
(8, 'Hair Repair Treatment', 100000),
(9, 'Perm Hair Treatment\r\n', 90000),
(11, 'All in', 97000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori_blog`
--

CREATE TABLE `tabel_kategori_blog` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kategori_blog`
--

INSERT INTO `tabel_kategori_blog` (`id_kategori`, `kategori`) VALUES
(1, 'android\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kontak`
--

CREATE TABLE `tabel_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(100) NOT NULL,
  `link_kontak` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kontak`
--

INSERT INTO `tabel_kontak` (`id_kontak`, `nama_kontak`, `link_kontak`) VALUES
(1, 'Alamat', 'Jalan Veteran, Malang, Jawa Timur, 65145'),
(2, 'Telepon ', '+62 341 551611'),
(3, 'E-mail', 'humas@ub.ac.id'),
(4, 'Website ', 'InBarberShop Malang'),
(5, 'Twitter', 'https://twitter.com/UB_Official/'),
(6, 'Facebook', 'https://web.facebook.com/Universitas.Brawijaya.Official'),
(7, 'Instagram', 'https://www.instagram.com/univ.brawijaya/');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pencapaian`
--

CREATE TABLE `tabel_pencapaian` (
  `id_pencapaian` int(11) NOT NULL,
  `nama_pencapaian` varchar(100) NOT NULL,
  `jumlah_pencapaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pencapaian`
--

INSERT INTO `tabel_pencapaian` (`id_pencapaian`, `nama_pencapaian`, `jumlah_pencapaian`) VALUES
(1, 'Kreasi Makeup', 705),
(2, 'Penghargaan', 105),
(3, 'Happy Client', 3875),
(4, 'Member', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `telepon_user` varchar(20) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `level_user` varchar(10) NOT NULL,
  `foto_user` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `telepon_user`, `email_user`, `password_user`, `level_user`, `foto_user`) VALUES
(1, 'rizkaaa', '087859159058', 'rizkarahma67@gmail.com', 'aef2c231d5e776c0e0656eaf68767848', 'Superadmin', ''),
(2, 'Achmad Zulfikar', '087859150002', 'zulfikar@gmail.com', '994d1c236804d0a6a79e9bd55cd5d1f0', 'Admin', NULL),
(3, 'Hassan Jadi', '087823341110', 'hassan@gmail.com', 'f04e1fd4cbfeecfdce8aa2ad6e9cf4ac', 'Admin', NULL),
(4, 'Citra Putri', '087823341110', 'citra@gmail.com', 'e260eab6a7c45d139631f72b55d8506b', 'Admin', NULL),
(5, 'M Yudha', '089609940201', 'yudha@gmail.com', '2b9633304de305ed5c03fe19b7a06afe', 'Admin', NULL),
(6, 'Daffa A', '087859159077', 'daffa@gmail.com', '135a4e22cda0e0a68499e6d6e2a861aa', 'Admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_blog`
--
ALTER TABLE `tabel_blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_kategori` (`id_kategori`,`insert_by`,`update_by`),
  ADD KEY `insert_by` (`insert_by`),
  ADD KEY `update_by` (`update_by`);

--
-- Indexes for table `tabel_booking`
--
ALTER TABLE `tabel_booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_paket` (`id_paket`);

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
-- Indexes for table `tabel_kategori_blog`
--
ALTER TABLE `tabel_kategori_blog`
  ADD PRIMARY KEY (`id_kategori`);

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
-- AUTO_INCREMENT for table `tabel_blog`
--
ALTER TABLE `tabel_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_booking`
--
ALTER TABLE `tabel_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_diskon`
--
ALTER TABLE `tabel_diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_galery`
--
ALTER TABLE `tabel_galery`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabel_harga`
--
ALTER TABLE `tabel_harga`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tabel_kategori_blog`
--
ALTER TABLE `tabel_kategori_blog`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_kontak`
--
ALTER TABLE `tabel_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_pencapaian`
--
ALTER TABLE `tabel_pencapaian`
  MODIFY `id_pencapaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_blog`
--
ALTER TABLE `tabel_blog`
  ADD CONSTRAINT `tabel_blog_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tabel_kategori_blog` (`id_kategori`),
  ADD CONSTRAINT `tabel_blog_ibfk_2` FOREIGN KEY (`insert_by`) REFERENCES `tabel_user` (`id_user`),
  ADD CONSTRAINT `tabel_blog_ibfk_3` FOREIGN KEY (`update_by`) REFERENCES `tabel_user` (`id_user`);

--
-- Constraints for table `tabel_booking`
--
ALTER TABLE `tabel_booking`
  ADD CONSTRAINT `tabel_booking_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tabel_harga` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
