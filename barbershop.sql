-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql312.byetcluster.com
-- Generation Time: Jun 11, 2021 at 10:58 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28804617_barbershop`
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
  `gambar` varchar(100) DEFAULT NULL,
  `insert_at` datetime NOT NULL,
  `insert_by` int(11) NOT NULL,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_blog`
--

INSERT INTO `tabel_blog` (`id_blog`, `id_kategori`, `judul`, `isi`, `gambar`, `insert_at`, `insert_by`, `update_at`, `update_by`) VALUES
(12, 1, 'Pompadour ', 'Pompadour tergolong model rambut ikonik dan timeless lo, Sahabat 99!\r\n\r\nPasalnya dari tahun ke tahun, gaya rambut ini masih menjadi tren dan banyak yang menggunakannya.\r\n\r\nGaya rambut pria keren tersebut pun cocok untuk kamu yang punya rambut tebal dan senang bereksperimen dengan pomade.', 'bg_4.jpg', '2021-06-07 00:30:51', 2, '2021-06-07 11:35:48', 1),
(27, 4, 'Under Cut', '<p>Gaya rambut undercut adalah gaya rambut yang modis dari tahun 1910-an hingga 1940-an, terutama di kalangan pria, dan mengalami kebangkitan yang terus berkembang di tahun 1980-an sebelum menjadi sepenuhnya modis lagi di tahun 2011-an</p>\r\n', 'person_1.jpg', '2021-06-10 11:44:16', 1, '2021-06-10 15:46:30', 7),
(19, 4, 'Crew Cut', '<p><em>Crew Cut</em>&nbsp;adalah model potongan rambut pria klasik dan cocok untuk sepanjang masa yang telah populer sejak abad ke-18. Ada dua jenis&nbsp;<em>crew cut</em>, yakni versi Eropa dan Amerika.</p>\r\n\r\n<p>Versi Eropa, memiliki potongan rambut yang panjang rambutnya berseragam di seluruh bagian kepala dan tidak melebihi 1,5 sentimeter. Sedangkan versi Amerika, pada bagian samping dan belakang dibuat lebih tipis, sementara bagian atas dibiarkan panjang sekitar 2 sentimeter.</p>\r\n\r\n<p>Model rambut pria&nbsp;<em>crew cut</em>&nbsp;versi Amerika sangat cocok dipakai bagi kamu yang memiliki rambut ikal atau keriting, karena memberi kesan bervolume pada rambut.</p>\r\n', 'Crew-Cut.jpg', '2021-06-08 13:48:46', 7, '2021-06-08 17:51:02', 7),
(21, 4, 'Comb Over', '<p>Comb over merupakan model rambut yang menyatukan gaya garis menyisir dengan gaya horizontal serta menyatukannya dengan undercut pada bagian bawah.</p>\r\n\r\n<p>Cara menatanya dengan menyisir rambut ke atas dengan berbagai gaya. Kamu bisa menggunakan&nbsp;<em>pomade&nbsp;</em>agar rambut bagian atas tetap&nbsp;<em>stay&nbsp;</em>pada tempatnya.</p>\r\n\r\n<p>Kamu juga bisa menggunakan gaya dengan teknik gradasi. Dari bagian leher rambut dibuat paling tipis, lalu semakin naik maka semakin tebal dan panjang.</p>\r\n\r\n<p>Dan pada bagian samping rambut dibuat memudar, kemudian rambut depan disisir ke atas dan berakhir ke bagian belakang.&nbsp;</p>\r\n', 'Crew-Cut.jpg', '2021-06-08 13:57:00', 8, '2021-06-08 18:10:36', 7),
(22, 1, 'Textured Crop', '<p>Gaya rambut pria pendek ini mirip dengan&nbsp;<a href=\"https://www.allthingshair.com/id-id/gaya-model-rambut-pria/trend-model-rambut-pria/model-rambut-pria-sesuai-bentuk-wajah/\"><em>crop cut&nbsp;</em></a>(<em>Caesar haircut</em>) dengan tambahan&nbsp;<em>layer&nbsp;</em>pada bagian atas rambut. Cara menatanya mudah, cukup pakai&nbsp;<a href=\"https://www.allthingshair.com/id-id/produk/clear-styling-cream/\"><em>gel</em>&nbsp;rambut</a>&nbsp;atau&nbsp;<em>hairspray&nbsp;</em>supaya lebih berbentuk dan tidak mudah &lsquo;kempes&rsquo;.</p>\r\n', '1-model-rambut-terbaru-2018-textured-crop-pada-pria-532x355.jpg', '2021-06-08 14:01:23', 8, '2021-06-08 18:04:18', 8),
(13, 1, 'Jenis-jenis Pomade Berdasarkan Fungsinya', '<p>Mengenal pomade tidak cukup hanya dari bahan pembuatnya saja tapi juga harus mengenali jenis-jenis pomade berdasarkan fungsinya. Karena dengan mengenali fungsi dari masing-masing pomade, kamu tidak akan keliru dalam mengaplikasikannya. Terlebih pomade memiliki berbagai jenis dan masing-masing memiliki fungsi yang berbeda.</p>\r\n\r\n<p>Secara&nbsp; umum fungsi pomade memang untuk membentuk atau menata rambut karena <a href=\"https://giovanibarbershop.com/produk/pomade/\">pomade</a> sendiri merupakan produk kosmetik varian minyak rambut yang diperuntukkan bagi laki-laki. Namun demikian, istilah membentuk dan menata rambut memiliki banyak arti, sebanyak jenis penataan rambut yang dikenal luas.</p>\r\n\r\n<h2>Karakteristik Pomade Berdasarkan Bahan Pembuatnya</h2>\r\n\r\n<p>Sebelum membahas tentang macam-macam pomade berdasarkan fungsinya, alangkah baiknya jika terlebih dahulu mengenal karakteristitk pomade berdasarkan bahan pembuatnya. Hal tersebut disebabkan karena karakteristik bahan dasar ikut mempengaruhi fungsi pomade dalam penataan rambut.</p>\r\n\r\n<p>Saat ini setidaknya ada 5 jenis pomade berdasarkan bahan pembuatnya yang dijual di Indonesia. Kelima jenis pomade tersebut adalah sebagai berikut:</p>\r\n\r\n<h3>1. Pomade Oil Based</h3>\r\n\r\n<p>Dibuat dengan bahan dasar minyak, pomade oil based memiliki daya lengket yang kuat sehingga cocok untuk mereka yang berambut panjang. Karakteristik tersebut menjadikan pomade jenis ini kerap dimanfaatkan untuk membuat tatanan rambut tetap rapi sepanjang hari meski menjalankan aktifitas di luar ruangan dan kepala berkeringat atau tertimpah air hujan.</p>\r\n\r\n<p>Namun, karena memiliki daya lengket yang kuat itulah menjadikan pomade jenis ini sulit untuk dibersihkan. Agar dapat dibersihkan butuh keramas dengan shampo serta mengguyurnya dengan air berulang kali</p>\r\n\r\n<h3>2. Pomade Water Based</h3>\r\n\r\n<p>Karakter dari water based pomade ini memiliki tekstur yang solid seperti gel tapi cukup mudah saat diaplikasikan pada rambut. Meski daya lengketnya tidak sekuat pomade berbahan dasar minyak, namun sangat cocok untuk dipakai beraktifitas di luar ruangan. Terlebih oleh mereka yang berambut pendek dan tipis.</p>\r\n\r\n<p>Karena daya lengketnya tidak sekuat pomade oil based, pomade jenis ini cukup mudah dibersihkan. Sekali keramas dengan shampo dan dibilas air, rambut pun akan normal kembali.</p>\r\n\r\n<h3>3. Mix Based Pomade</h3>\r\n\r\n<p>Dengan bahan campuran minyak dan air menjadikan mix based memiliki perpaduan karakter antara pomade berbahan dasar minyak dan berbahan dasar air. Daya lengketnya tidak sekuat oil based tapi lebih kuat jika dibanding pomade water based. Itu sebabnya sangat cocok untuk rambut short neat atau undercut.</p>\r\n\r\n<h3>4. Clay Pomade</h3>\r\n\r\n<p>Pomade jenis ini relatif baru sehingga jarang ditemui di pasaran. Dengan menggunakan bahan dasar clay atau tanah liat dari jenis bentonit yang berasal dari pelapukan abu vulkanik, clay pomade memiliki daya serap tinggi dan natural look.</p>\r\n\r\n<h3>5. Last Beer Based Pomade</h3>\r\n\r\n<p>Meski menggunakan bahan dasar beer, pomade jenis ini dijamin aman dan halal. Kenapa demikian? Karena last beer based tidak mengandung alkohol dan yang diambil dari beer hanya manfaatnya saja, yaitu kandungan vitamin dan protein yang baik untuk memperkuat rambut.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'person_3.jpg', '2021-06-07 01:30:30', 2, '2021-06-10 15:57:08', 7),
(23, 1, 'Slicked Back', '<p>Gaya rambut&nbsp;<a href=\"https://www.allthingshair.com/id-id/gaya-model-rambut-pria/undercut/gaya-rambut-undercut-slick-back/\" target=\"_blank\">slicked back</a>&nbsp;cocok untuk kamu yang ingin tampil rapi namun tetap modern. Ini merupakan variasi dari potongan rambut undercut atau fade yang ditata klimis ke arah belakang. Kamu bisa memperoleh model rambut ini dengan bantuan&nbsp;<em><a href=\"https://www.allthingshair.com/id-id/produk/axe-perfect-control-pomade/\" target=\"_blank\">AXE Perfect Control Pomade</a></em>&nbsp;yang terbuat dari bahan dasar air. Tidak terasa kaku dan lengket saat digunakan!</p>\r\n', 'model-rambut-slicked-back-kekinian-untuk-pria-532x588.jpg', '2021-06-08 14:03:16', 8, '2021-06-08 18:03:53', 8),
(24, 4, 'Mohawk with Taper Fade', '<p>Kamu yang terbiasa dengan rambut pendek bisa coba menggabungkan potongan mohawk dengan taper fade yang rapi.<em>&nbsp;Fun</em>&nbsp;dan<em>&nbsp;stylish!rfgyf4rtgt4rf</em></p>\r\n', 'Mohawk-with-Taper-Fade-532x415.jpg', '2021-06-08 14:05:29', 8, '2021-06-09 06:57:58', 8),
(25, 4, 'Fringe Crop', '<p>Nah,&nbsp;<a href=\"https://www.allthingshair.com/id-id/gaya-model-rambut-pria/\" target=\"_blank\">gaya rambut pria</a>&nbsp;ini mirip dengan&nbsp;<em>French crop&nbsp;</em>yang cenderung tegas. Namun fokusnya terdapat di bagian poni (<em>fringe</em>) yang dipotong rata tanpa tambahan&nbsp;<em>layer.&nbsp;</em>Kedua sisi rambut dipapas habis dengan model&nbsp;<em>fade.</em></p>\r\n', 'gallery-7.jpg', '2021-06-08 14:07:10', 8, '2021-06-08 18:09:59', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_booking`
--

CREATE TABLE `tabel_booking` (
  `id_booking` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `id_paket` int(11) NOT NULL,
  `tanggal_booking` varchar(100) NOT NULL,
  `jam_booking` time NOT NULL,
  `keterangan_booking` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_booking`
--

INSERT INTO `tabel_booking` (`id_booking`, `nama`, `telepon`, `id_paket`, `tanggal_booking`, `jam_booking`, `keterangan_booking`, `time`, `status`) VALUES
(48, 'Deni Chandra', '0897866621', 3, '06/12/2021', '12:00:00', '<p>-</p>\r\n', '2021-06-10 15:41:54', 'in process'),
(49, 'Angga Baratan', '08278666654', 3, '06/16/2021', '10:00:00', '<p>Untuk 2 orang</p>\r\n', '2021-06-10 15:56:37', 'complete'),
(45, 'Rizkaa', '087859159058', 8, '06/19/2021', '08:30:00', '<p>test</p>\r\n', '2021-06-09 04:06:01', 'pending'),
(46, 'Test', '123', 8, '06/26/2021', '09:00:00', 'untuk 2 orang', '2021-06-09 04:09:06', 'pending'),
(34, 'Hassan', '087325656322', 8, '07/02/2021', '08:30:00', '', '2021-06-08 18:22:44', 'complete'),
(35, 'Zul', '123', 8, '07/09/2021', '10:00:00', '', '2021-06-09 04:05:19', 'complete'),
(37, 'Rizkaa', '34635', 4, '06/24/2021', '08:00:00', '', '2021-06-08 18:36:37', 'in process');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_feedback`
--

CREATE TABLE `tabel_feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_feedback`
--

INSERT INTO `tabel_feedback` (`id`, `nama`, `email`, `subject`, `pesan`) VALUES
(1, 'Rizka', 'rizkarahma67@gmail.com', 'Pesan', 'Semoga sukses kedepannya');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_galery`
--

CREATE TABLE `tabel_galery` (
  `id_foto` int(11) NOT NULL,
  `nama_foto` varchar(200) NOT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(9, 'foto 8', 'gallery-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_harga`
--

CREATE TABLE `tabel_harga` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `deskripsi_paket` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_harga`
--

INSERT INTO `tabel_harga` (`id_paket`, `nama_paket`, `harga_paket`, `deskripsi_paket`) VALUES
(2, 'Gentlemen Cut', 50000, 'Perawatan kami yang berkualitas tinggi namun cepat. Potong rambut kamu lalu diakhiri dengan pemakaian tonik atau pomade.'),
(3, 'Gentlemen Grooming', 60000, 'A complete menâ€™s grooming service. Dimulai dengan membersihkan wajah dengan handuk dingin**kemudian potong rambut lalu keramas, selanjutnya membersihkan wajah dengan handuk hangat, mendapatkan pijat kepala dan punggung lalu diakhiri dengan pengaplikasian tonik atau pomade.\r\n'),
(4, 'Kids Haircut', 35000, 'Pengalaman potong rambut yang ramah dan nyaman untuk si kecil.'),
(5, 'Grooming + Hair Tattoo', 150000, 'Untuk kamu yang ingin mencari gaya rambut khas. Biarkan barberman kami yang terampil untuk membentuk dan merancang gaya rambut-mu seperti hasil mahakaryanya.\r\n'),
(6, 'Wash, Massage & Hairspa', 50000, 'Diawali dengan pemijatan kepala dan punggung , lalu dapatkan rambut kilaumu yang lebih sehat dengan hairspa dan pengaplikasian tonik atau pomade'),
(7, 'Basic Hair Color', 100000, 'Warnai rambumu (tanpa dibleaching) dengan sempurna sesuai dengan warna idaman-mu dengan barberman kami yang sudah berpengalaman.'),
(8, 'Hair Repair Treatment', 100000, 'Treatment untuk rambut yang sudah rusak akibat bahan kimia yang berfungsi untuk mengembalikan kesehatan rambutmu'),
(9, 'Perm Hair Treatment', 90000, 'Pengeritingan rambut dengan hasil yang natural dan trendy.');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori_blog`
--

CREATE TABLE `tabel_kategori_blog` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kategori_blog`
--

INSERT INTO `tabel_kategori_blog` (`id_kategori`, `kategori`) VALUES
(1, 'Trend Terkini'),
(4, 'Gaya Rambut Pria');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kontak`
--

CREATE TABLE `tabel_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(100) NOT NULL,
  `link_kontak` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kontak`
--

INSERT INTO `tabel_kontak` (`id_kontak`, `nama_kontak`, `link_kontak`) VALUES
(1, 'Alamat', 'Jalan Veteran, Malang, Jawa Timur'),
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pencapaian`
--

INSERT INTO `tabel_pencapaian` (`id_pencapaian`, `nama_pencapaian`, `jumlah_pencapaian`) VALUES
(1, 'Kreasi Makeup', 705),
(2, 'Penghargaan', 105),
(3, 'Happy Client', 3879),
(4, 'Member', 2501);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `nim_user` varchar(20) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `level_user` varchar(10) NOT NULL,
  `jobdesk` varchar(100) DEFAULT NULL,
  `foto_user` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `nim_user`, `email_user`, `password_user`, `level_user`, `jobdesk`, `foto_user`) VALUES
(1, 'Rizka Nur Rahma', '203140914111001', 'rizkanurrahma@student.ub.ac.id', 'aef2c231d5e776c0e0656eaf68767848', 'Admin', 'Project Manager, Backend Developer', 'Rizka.png'),
(2, 'Zulfikar', '203140914111014', 'arjunosutajaya@student.ub.ac.id', '994d1c236804d0a6a79e9bd55cd5d1f0', 'Admin', 'UI / UX, Frontend Developer', 'zulfikar.jpg'),
(3, 'Hassan', '203140914111025', 'hassanjadi25@student.ub.ac.id', 'f04e1fd4cbfeecfdce8aa2ad6e9cf4ac', 'Admin', 'Frontend Developer, Tester', 'hassan.png'),
(4, 'Citra', '203140914111019', 'citraputrid@student.ub.ac.id', 'e260eab6a7c45d139631f72b55d8506b', 'Admin', 'System Analyst, Tester', 'citra.jpeg'),
(5, 'M. Yudha', '203140914111012', 'yudha@gmail.com', '2b9633304de305ed5c03fe19b7a06afe', 'Admin', 'System Analyst, Tester', 'yudha.jpeg'),
(6, 'Khenaro D.', '203140914111007', 'daffasyrof@student.ub.ac.id', '135a4e22cda0e0a68499e6d6e2a861aa', 'Admin', 'System Analyst, Backend Developer', 'daffa.JPG'),
(7, 'Superadmin', 'Superadmin', 'Superadmin', 'dddcdaa8264e6d96baadd43f324fbd83', 'Superadmin', 'Superadmin', ''),
(8, 'Admin', 'Admin', 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 'Admin', 'Admin', '');

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
-- Indexes for table `tabel_feedback`
--
ALTER TABLE `tabel_feedback`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tabel_booking`
--
ALTER TABLE `tabel_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tabel_feedback`
--
ALTER TABLE `tabel_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_galery`
--
ALTER TABLE `tabel_galery`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabel_harga`
--
ALTER TABLE `tabel_harga`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabel_kategori_blog`
--
ALTER TABLE `tabel_kategori_blog`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_kontak`
--
ALTER TABLE `tabel_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabel_pencapaian`
--
ALTER TABLE `tabel_pencapaian`
  MODIFY `id_pencapaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
