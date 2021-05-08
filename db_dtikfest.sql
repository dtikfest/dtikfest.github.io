-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 01:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dtikfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tahun` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `tahun`) VALUES
(1, 'img1.png', 2021),
(2, 'img2.png', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `hadiah`
--

CREATE TABLE `hadiah` (
  `id_hadiah` int(11) UNSIGNED NOT NULL,
  `hadiah_nominal` varchar(25) NOT NULL,
  `hadiah_fasilitas` varchar(255) NOT NULL,
  `hadiah_lainnya` varchar(255) NOT NULL,
  `id_industri` int(11) UNSIGNED NOT NULL,
  `tahun` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hadiah_kategori_pemenang`
--

CREATE TABLE `hadiah_kategori_pemenang` (
  `id_kategori_pemenang` int(11) UNSIGNED NOT NULL,
  `id_hadiah` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `industri`
--

CREATE TABLE `industri` (
  `id_industri` int(11) UNSIGNED NOT NULL,
  `nama_industri` varchar(255) NOT NULL,
  `logo_industri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industri`
--

INSERT INTO `industri` (`id_industri`, `nama_industri`, `logo_industri`) VALUES
(1, 'Virtuahive', 'sponsor-1.png'),
(2, 'Trustmedis', 'sponsor-2.png'),
(3, 'Alterra', 'sponsor-3.png'),
(4, 'Hewlett Packarcd', 'sponsor-4.png'),
(5, 'Rasyid Institute', 'sponsor-5.png'),
(6, 'Maulidan Games', 'sponsor-6.png'),
(7, 'PTI', 'sponsor-7.png'),
(8, 'Sindika', 'sponsor-8.png');

-- --------------------------------------------------------

--
-- Table structure for table `juri`
--

CREATE TABLE `juri` (
  `id_juri` int(11) UNSIGNED NOT NULL,
  `nama_juri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `juri_kategori_pemenang`
--

CREATE TABLE `juri_kategori_pemenang` (
  `id_juri` int(11) UNSIGNED NOT NULL,
  `id_kategori_pemenang` int(11) UNSIGNED NOT NULL,
  `tahun` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `id_kampus` int(11) UNSIGNED NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `alamat_kampus` text NOT NULL,
  `no_tlp_kampus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id_kampus`, `nama_kampus`, `alamat_kampus`, `no_tlp_kampus`) VALUES
(1, 'Politeknik Elektronika Negeri Surabaya', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pemenang`
--

CREATE TABLE `kategori_pemenang` (
  `id_kategori_pemenang` int(11) UNSIGNED NOT NULL,
  `nama_kategori_pemenang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pemenang_mahasiswa`
--

CREATE TABLE `kategori_pemenang_mahasiswa` (
  `nrp` int(15) UNSIGNED NOT NULL,
  `id_kategori_pemenang` int(11) UNSIGNED NOT NULL,
  `juara ke` int(11) UNSIGNED NOT NULL,
  `tahun` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pemenang_tim`
--

CREATE TABLE `kategori_pemenang_tim` (
  `id_tim` int(11) UNSIGNED NOT NULL,
  `id_kategori_pemenang` int(11) UNSIGNED NOT NULL,
  `juara_ke` int(11) UNSIGNED NOT NULL,
  `tahun` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_produk` int(11) UNSIGNED NOT NULL,
  `id_kategori` int(11) UNSIGNED NOT NULL,
  `tahun` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nrp` int(15) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `id_tim` int(11) UNSIGNED DEFAULT NULL,
  `tahun` int(11) UNSIGNED NOT NULL,
  `id_kampus` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nrp`, `nama_mahasiswa`, `kelas`, `jurusan`, `id_tim`, `tahun`, `id_kampus`) VALUES
(1, 'Andika Ahmad Ramadhan', NULL, NULL, NULL, 2021, 1),
(2, 'Silfiana Nur Hamida', NULL, NULL, NULL, 2021, 1),
(3, 'Luqmanul Hakim Iksan', NULL, NULL, NULL, 2021, 1),
(2110181038, 'Belinda Anindya KW', NULL, NULL, 1, 2021, 1),
(2110181039, 'Eka Dharma Widhyana', NULL, NULL, 1, 2021, 1),
(2110181044, 'Gilang Taufiq Arsyannur', NULL, NULL, 1, 2021, 1),
(2110181048, 'Ulima Inas Shabrina', NULL, NULL, 1, 2021, 1),
(2110181056, 'Zul Fauzi Oktavian', NULL, NULL, 1, 2021, 1),
(2110181059, 'I Gede Kresna Putra', NULL, NULL, 1, 2021, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `demo_produk` varchar(255) DEFAULT NULL,
  `video_display` varchar(255) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `demo_produk`, `video_display`, `poster`, `foto_produk`) VALUES
(1, 'DolanKuy', 'DolanKuy adalah aplikasi referensi wisata yang ada di Indonesia, berbasis 3 platform yaitu mobile, website, dan desktop. Dengan DolanKuy user bisa melihat list wisata dan akomodasi pada tempat wisata dengan membandingkan review dari user lain.', NULL, NULL, NULL, 'dd.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) UNSIGNED NOT NULL,
  `deskripsi_testimoni` text NOT NULL,
  `nrp` int(15) UNSIGNED DEFAULT NULL,
  `id_industri` int(11) UNSIGNED DEFAULT NULL,
  `peran` varchar(255) NOT NULL,
  `tahun` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `deskripsi_testimoni`, `nrp`, `id_industri`, `peran`, `tahun`) VALUES
(1, 'WPPL adalah salah satu mata kuliah yang bagus untuk belajar bagaimana berkomunikasi dan bekerja dengan tim. DTIK Fest adalah salah satu terobosan yang bagus dalam memamerkan hasil pekerjaan seluruh tim yang tergabung dalam WPPL di tahun ini.', 1, NULL, 'Mentor Software Expo', 2021),
(2, 'Acaranya berjalan dengan terstrukrur dan sangat bermanfaat, kita bisa mengetahui aplikasi lain yang dibuat oleh setiap tim dari mahasiswa pens, serta aplikasi yang di buat oleh maulidan games. Sehingga, kita bisa terinspirasi ide baru untuk membuat aplikasi yang lebih bagus. Dan selain mendapat pengalaman tim kami juga diberikan bonus sebagai di acara ini.', 2, NULL, 'Peserta Software Expo', 2021),
(3, 'Yang paling seru dari SE itu waktu ngerjain, pas belum pandemi kan kita punya waktu luang sedikit, karena banyak dokumentasi Jadi waktu buat developnya dikit, Jadi lembur terus di kosnya temen tiap hari tiap malem, belajar hal baru sama teman teman Lingkungannya mendukung dan akhirnya kita ya terpaksa belajar juga', 3, NULL, 'Peserta Software Expo', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `tim_exhibitor`
--

CREATE TABLE `tim_exhibitor` (
  `id_tim` int(11) UNSIGNED NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `id_produk` int(5) UNSIGNED NOT NULL,
  `tahun` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tim_exhibitor`
--

INSERT INTO `tim_exhibitor` (`id_tim`, `nama_tim`, `no_telp`, `email`, `alamat`, `id_produk`, `tahun`) VALUES
(1, 'Tim DolanKuy', '+62812-3456-7890', 'uishabrina@gmail.com', 'Surabaya', 1, 2021);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `hadiah`
--
ALTER TABLE `hadiah`
  ADD PRIMARY KEY (`id_hadiah`),
  ADD KEY `id_industri` (`id_industri`);

--
-- Indexes for table `hadiah_kategori_pemenang`
--
ALTER TABLE `hadiah_kategori_pemenang`
  ADD KEY `id_hadiah` (`id_hadiah`),
  ADD KEY `id_kategori_pemenang` (`id_kategori_pemenang`);

--
-- Indexes for table `industri`
--
ALTER TABLE `industri`
  ADD PRIMARY KEY (`id_industri`);

--
-- Indexes for table `juri`
--
ALTER TABLE `juri`
  ADD PRIMARY KEY (`id_juri`);

--
-- Indexes for table `juri_kategori_pemenang`
--
ALTER TABLE `juri_kategori_pemenang`
  ADD KEY `id_juri` (`id_juri`),
  ADD KEY `id_kategori_pemenang` (`id_kategori_pemenang`);

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id_kampus`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_pemenang`
--
ALTER TABLE `kategori_pemenang`
  ADD PRIMARY KEY (`id_kategori_pemenang`);

--
-- Indexes for table `kategori_pemenang_mahasiswa`
--
ALTER TABLE `kategori_pemenang_mahasiswa`
  ADD PRIMARY KEY (`nrp`,`id_kategori_pemenang`);

--
-- Indexes for table `kategori_pemenang_tim`
--
ALTER TABLE `kategori_pemenang_tim`
  ADD KEY `id_tim` (`id_tim`),
  ADD KEY `id_kategori_pemenang` (`id_kategori_pemenang`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nrp`),
  ADD KEY `id_kampus` (`id_kampus`),
  ADD KEY `id_tim` (`id_tim`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `nrp` (`nrp`),
  ADD KEY `id_industri` (`id_industri`);

--
-- Indexes for table `tim_exhibitor`
--
ALTER TABLE `tim_exhibitor`
  ADD PRIMARY KEY (`id_tim`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hadiah`
--
ALTER TABLE `hadiah`
  ADD CONSTRAINT `hadiah_ibfk_1` FOREIGN KEY (`id_industri`) REFERENCES `industri` (`id_industri`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `hadiah_kategori_pemenang`
--
ALTER TABLE `hadiah_kategori_pemenang`
  ADD CONSTRAINT `hadiah_kategori_pemenang_ibfk_1` FOREIGN KEY (`id_hadiah`) REFERENCES `hadiah` (`id_hadiah`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hadiah_kategori_pemenang_ibfk_2` FOREIGN KEY (`id_kategori_pemenang`) REFERENCES `kategori_pemenang` (`id_kategori_pemenang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `juri_kategori_pemenang`
--
ALTER TABLE `juri_kategori_pemenang`
  ADD CONSTRAINT `juri_kategori_pemenang_ibfk_1` FOREIGN KEY (`id_juri`) REFERENCES `juri` (`id_juri`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `juri_kategori_pemenang_ibfk_2` FOREIGN KEY (`id_kategori_pemenang`) REFERENCES `kategori_pemenang` (`id_kategori_pemenang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `kategori_pemenang_tim`
--
ALTER TABLE `kategori_pemenang_tim`
  ADD CONSTRAINT `kategori_pemenang_tim_ibfk_1` FOREIGN KEY (`id_tim`) REFERENCES `tim_exhibitor` (`id_tim`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_pemenang_tim_ibfk_2` FOREIGN KEY (`id_kategori_pemenang`) REFERENCES `kategori_pemenang` (`id_kategori_pemenang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD CONSTRAINT `kategori_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_kampus`) REFERENCES `kampus` (`id_kampus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_tim`) REFERENCES `tim_exhibitor` (`id_tim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`nrp`) REFERENCES `mahasiswa` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_2` FOREIGN KEY (`id_industri`) REFERENCES `industri` (`id_industri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tim_exhibitor`
--
ALTER TABLE `tim_exhibitor`
  ADD CONSTRAINT `tim_exhibitor_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
