-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 05:11 PM
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
  `logo_industri` varchar(255) NOT NULL,
  `tahun` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industri`
--

INSERT INTO `industri` (`id_industri`, `nama_industri`, `logo_industri`, `tahun`) VALUES
(1, 'Virtuahive', 'sponsor-1.png', 2021),
(2, 'Trustmedis', 'sponsor-2.png', 2021),
(3, 'Alterra', 'sponsor-3.png', 2021),
(4, 'Hewlett Packarcd', 'sponsor-4.png', 2021),
(5, 'Rasyid Institute', 'sponsor-5.png', 2021),
(6, 'Maulidan Games', 'sponsor-6.png', 2021),
(7, 'PTI', 'sponsor-7.png', 2021),
(8, 'Sindika', 'sponsor-8.png', 2021),
(9, 'Rasyid Technologies', 'sponsor-9.png', 2021);

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
  `nama_kategori` varchar(255) NOT NULL,
  `tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `tahun`) VALUES
(1, 'Teknik Informatika', 2021),
(2, 'Teknik Komputer', 2021),
(3, 'Teknik Testing 2020', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pemenang`
--

CREATE TABLE `kategori_pemenang` (
  `id_kategori_pemenang` int(11) UNSIGNED NOT NULL,
  `nama_kategori_pemenang` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_pemenang`
--

INSERT INTO `kategori_pemenang` (`id_kategori_pemenang`, `nama_kategori_pemenang`, `tahun`) VALUES
(1, 'UI/UX', 2021),
(2, 'Back-End', 2021),
(3, 'Front-End', 2021),
(4, 'Mobile', 2021),
(5, 'Desktop', 2021),
(6, 'Favorite Industry', 2021),
(7, 'Top Soft Skill', 2021),
(8, 'Best Exhibitor IT', 2021),
(9, 'Best Exhibitor CE', 2021),
(10, 'Best Team CE', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pemenang_mahasiswa`
--

CREATE TABLE `kategori_pemenang_mahasiswa` (
  `id_kategori_pemenang` int(11) UNSIGNED NOT NULL,
  `nrp` int(15) UNSIGNED NOT NULL,
  `juara_ke` int(11) UNSIGNED DEFAULT NULL,
  `tahun` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_pemenang_mahasiswa`
--

INSERT INTO `kategori_pemenang_mahasiswa` (`id_kategori_pemenang`, `nrp`, `juara_ke`, `tahun`) VALUES
(7, 42, 8, 2021),
(7, 59, 4, 2021),
(7, 60, 6, 2021),
(7, 62, 1, 2021),
(7, 65, 5, 2021),
(7, 70, 9, 2021),
(7, 73, 2, 2021),
(7, 79, 7, 2021),
(7, 80, 3, 2021),
(7, 87, 10, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pemenang_tim`
--

CREATE TABLE `kategori_pemenang_tim` (
  `id_kategori_pemenang` int(11) UNSIGNED NOT NULL,
  `id_tim` int(11) UNSIGNED NOT NULL,
  `juara_ke` int(11) UNSIGNED DEFAULT NULL,
  `tahun` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_pemenang_tim`
--

INSERT INTO `kategori_pemenang_tim` (`id_kategori_pemenang`, `id_tim`, `juara_ke`, `tahun`) VALUES
(1, 2, 1, 2021),
(1, 10, 2, 2021),
(1, 11, 5, 2021),
(1, 16, 3, 2021),
(1, 20, 4, 2021),
(2, 1, 5, 2021),
(2, 10, 4, 2021),
(2, 12, 1, 2021),
(2, 16, 2, 2021),
(2, 20, 3, 2021),
(3, 10, 3, 2021),
(3, 12, 2, 2021),
(3, 16, 1, 2021),
(3, 17, 5, 2021),
(3, 20, 4, 2021),
(4, 11, 3, 2021),
(4, 12, 1, 2021),
(4, 16, 4, 2021),
(4, 17, 2, 2021),
(4, 20, 5, 2021),
(5, 11, 4, 2021),
(5, 12, 2, 2021),
(5, 17, 1, 2021),
(5, 18, 3, 2021),
(5, 21, 5, 2021),
(6, 1, 4, 2021),
(6, 11, 1, 2021),
(6, 16, 3, 2021),
(6, 17, 2, 2021),
(6, 20, 5, 2021),
(8, 10, 3, 2021),
(8, 17, 1, 2021),
(8, 20, 2, 2021),
(9, 7, 1, 2021),
(9, 8, 3, 2021),
(9, 14, 2, 2021),
(10, 2, 2, 2021),
(10, 5, 5, 2021),
(10, 6, 4, 2021),
(10, 7, 3, 2021),
(10, 13, 1, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk_unused`
--

CREATE TABLE `kategori_produk_unused` (
  `id_kategori` int(11) UNSIGNED NOT NULL,
  `id_produk` int(11) UNSIGNED NOT NULL,
  `tahun` int(11) UNSIGNED DEFAULT NULL
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
  `id_kampus` int(11) UNSIGNED NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nrp`, `nama_mahasiswa`, `kelas`, `jurusan`, `id_tim`, `tahun`, `id_kampus`, `foto`) VALUES
(1, 'Dary Winata Nugraha Djati', NULL, 'Teknik Informatika', 1, 2021, 1, NULL),
(2, 'Andro Aprila Adiputra', NULL, 'Teknik Informatika', 1, 2021, 1, NULL),
(3, 'Ekky Regita Laurentino', NULL, 'Teknik Informatika', 1, 2021, 1, NULL),
(4, 'Rissa Hanifah Ersanty', NULL, 'Teknik Informatika', 1, 2021, 1, NULL),
(5, 'I Putu Gede Verdhangga Mahandya', NULL, 'Teknik Informatika', 1, 2021, 1, NULL),
(6, 'Ilham Dwi Kurniawan', NULL, 'Teknik Informatika', 1, 2021, 1, NULL),
(7, 'Sulaiman', NULL, 'Teknik Komputer', 2, 2021, 1, NULL),
(8, 'Nur Cahyo', NULL, 'Teknik Komputer', 2, 2021, 1, NULL),
(9, 'Ekky Kharismadani', NULL, 'Teknik Komputer', 2, 2021, 1, NULL),
(10, 'Atharian Ramadhany', NULL, 'Teknik Komputer', 2, 2021, 1, NULL),
(11, 'Lusiana Diyan Ningrum', NULL, 'Teknik Komputer', 3, 2021, 1, NULL),
(12, 'Ahmad Torikul Huda', NULL, 'Teknik Komputer', 3, 2021, 1, NULL),
(13, 'M. Billit Shotta Purana', NULL, 'Teknik Komputer', 3, 2021, 1, NULL),
(14, 'Ahmad Faizin', NULL, 'Teknik Komputer', 3, 2021, 1, NULL),
(15, 'Dekasari Putri Suwandi', NULL, 'Teknik Komputer', 4, 2021, 1, NULL),
(16, 'Fadl Lul Hakim Ihsan', NULL, 'Teknik Komputer', 4, 2021, 1, NULL),
(17, 'Firja Hanif Maulana', NULL, 'Teknik Komputer', 4, 2021, 1, NULL),
(18, 'Aditia Yuliyanto', NULL, 'Teknik Komputer', 4, 2021, 1, NULL),
(19, 'Erna Alfi Nurrohmah', NULL, 'Teknik Komputer', 5, 2021, 1, NULL),
(20, 'Hendika Putra Madani', NULL, 'Teknik Komputer', 5, 2021, 1, NULL),
(21, 'Syarfina', NULL, 'Teknik Komputer', 5, 2021, 1, NULL),
(22, 'Rifqi Affan Maulana', NULL, 'Teknik Komputer', 5, 2021, 1, NULL),
(23, 'Ivana Yudith Walujo', NULL, 'Teknik Komputer', 6, 2021, 1, NULL),
(24, 'Tirta Farisaldi Ibrahim', NULL, 'Teknik Komputer', 6, 2021, 1, NULL),
(25, 'Muhammad Aufa', NULL, 'Teknik Komputer', 6, 2021, 1, NULL),
(26, 'Chofifah Widyah', NULL, 'Teknik Komputer', 7, 2021, 1, NULL),
(27, 'Muhammad Hafidz', NULL, 'Teknik Komputer', 7, 2021, 1, NULL),
(28, 'Muhammad Iqbal Alfarabi', NULL, 'Teknik Komputer', 7, 2021, 1, NULL),
(29, 'Mohammad Johan Arifin', NULL, 'Teknik Komputer', 7, 2021, 1, NULL),
(30, 'Muhammad Amin A', NULL, 'Teknik Komputer', 8, 2021, 1, NULL),
(31, 'Nur Rizky Romadhon', NULL, 'Teknik Komputer', 8, 2021, 1, NULL),
(32, 'Kirana Hanifati', NULL, 'Teknik Komputer', 8, 2021, 1, NULL),
(33, 'Alfis Syahry', NULL, 'Teknik Komputer', 9, 2021, 1, NULL),
(34, 'Nilam Winarti', NULL, 'Teknik Komputer', 9, 2021, 1, NULL),
(35, 'Ahmad Dlomiri', NULL, 'Teknik Komputer', 9, 2021, 1, NULL),
(36, 'Muhammad Izzat', NULL, 'Teknik Informatika', 11, 2021, 1, NULL),
(37, 'Milati Rohmatu Sakinah', NULL, 'Teknik Informatika', 11, 2021, 1, NULL),
(38, 'Alfian Haidar', NULL, 'Teknik Informatika', 11, 2021, 1, NULL),
(39, 'Hakim Akbaru Sulthony', NULL, 'Teknik Informatika', 11, 2021, 1, NULL),
(40, 'Rifqi Fajar Ramdani', NULL, 'Teknik Informatika', 11, 2021, 1, NULL),
(41, 'Muhammad Riza Bachtiar', NULL, 'Teknik Informatika', 12, 2021, 1, NULL),
(42, 'Muhammad Riza Nafis', NULL, 'Teknik Informatika', 12, 2021, 1, 'Nafis - 26.jpg'),
(43, 'Mohamad Akbar Fadlika Wibowo', NULL, 'Teknik Informatika', 12, 2021, 1, NULL),
(44, 'Muhammad Fahreza Ansori', NULL, 'Teknik Informatika', 12, 2021, 1, NULL),
(45, 'Agustina Anisa F', NULL, 'Teknik Informatika', 12, 2021, 1, NULL),
(46, 'M. Ivan Muntahir ', NULL, 'Teknik Komputer', 13, 2021, 1, NULL),
(47, 'M. Mukhtarul Lathief', NULL, 'Teknik Komputer', 13, 2021, 1, NULL),
(48, 'M. Wafiq K.', NULL, 'Teknik Komputer', 14, 2021, 1, NULL),
(49, 'M. Firdaus. M. ', NULL, 'Teknik Komputer', 14, 2021, 1, NULL),
(50, 'Awang Syahsiah A. ', NULL, 'Teknik Komputer', 14, 2021, 1, NULL),
(51, 'Churun In L. ', NULL, 'Teknik Komputer', 14, 2021, 1, NULL),
(52, 'Adnindiah Putri Imawati', NULL, 'Teknik Komputer', 15, 2021, 1, NULL),
(53, 'Moch. Ilham Wahyudi', NULL, 'Teknik Komputer', 15, 2021, 1, NULL),
(54, 'Wiratama Ashidiqi N', NULL, 'Teknik Komputer', 15, 2021, 1, NULL),
(55, 'Ghafariz Ainoor Rohan', NULL, 'Teknik Komputer', 15, 2021, 1, NULL),
(56, 'Sabillah Ferdiana Febrianti', NULL, 'Teknik Informatika', 16, 2021, 1, NULL),
(57, 'Muhammad Ghozy Al Ghifari', NULL, 'Teknik Informatika', 16, 2021, 1, NULL),
(58, 'Refano Pradana Yogatama', NULL, 'Teknik Informatika', 16, 2021, 1, NULL),
(59, 'Rochimatus Sa\'diyah', NULL, 'Teknik Informatika', 16, 2021, 1, 'rochimatus - 22.jpg'),
(60, 'Muhammad Satriyo Aji', NULL, 'Teknik Informatika', 16, 2021, 1, 'Muhammad Satriyo Aji - 27.jpeg'),
(61, 'Yanu Adi Nugraha', NULL, 'Teknik Informatika', 16, 2021, 1, NULL),
(62, 'I Made Akira Ivandio Agusta', NULL, 'Teknik Informatika', 17, 2021, 1, 'I made akira - 30.jpg'),
(63, 'Sylvi Indryana Safira', NULL, 'Teknik Informatika', 17, 2021, 1, NULL),
(64, 'Andi Abdul Salam Sabil', NULL, 'Teknik Informatika', 17, 2021, 1, NULL),
(65, 'Sabila Jamal', NULL, 'Teknik Informatika', 17, 2021, 1, '13 - Sabila Jamal D4 2018.jpg'),
(66, 'Lina Dwi Pratiwi', NULL, 'Teknik Informatika', 17, 2021, 1, NULL),
(67, 'Muhammad Fadhli Ubaidilah', NULL, 'Teknik Informatika', 18, 2021, 1, NULL),
(68, 'Ilyas Yudhistira Kurniawan', NULL, 'Teknik Informatika', 18, 2021, 1, NULL),
(69, 'Tiara Puspita Anggraeni', NULL, 'Teknik Informatika', 18, 2021, 1, NULL),
(70, 'Aditya Indra Pramana', NULL, 'Teknik Informatika', 18, 2021, 1, 'Aditya Indra Pramana - 27.jpg'),
(71, 'Gebriela Rifka Duanti ', NULL, 'Teknik Informatika', 18, 2021, 1, NULL),
(72, 'Fajar Septian Nugraha', NULL, 'Teknik Informatika', 18, 2021, 1, NULL),
(73, 'M. Nisar Yanuar U. ', NULL, 'Teknik Informatika', 19, 2021, 1, 'Nisar - 20.jpg'),
(74, 'Ardiansyah Dwi S. ', NULL, 'Teknik Informatika', 19, 2021, 1, NULL),
(75, 'Faidza Fariq A.', NULL, 'Teknik Informatika', 19, 2021, 1, NULL),
(76, 'Ahmad Maulana J. ', NULL, 'Teknik Informatika', 19, 2021, 1, NULL),
(77, 'Helmi Dharmawan', NULL, 'Teknik Informatika', 19, 2021, 1, NULL),
(78, 'Intan Fitri R. ', NULL, 'Teknik Informatika', 19, 2021, 1, NULL),
(79, 'Iqbal Nur Imansyah', NULL, 'Teknik Informatika', 20, 2021, 1, 'Iqbal Nur Imansyah - 22.jpeg'),
(80, 'Nawa Almahasin', NULL, 'Teknik Informatika', 20, 2021, 1, 'Nawa Almahasin - 11.jpeg'),
(81, 'Goldy Najima', NULL, 'Teknik Informatika', 20, 2021, 1, NULL),
(82, 'Chandra Kirana', NULL, 'Teknik Informatika', 20, 2021, 1, NULL),
(83, 'Febilenia Risma', NULL, 'Teknik Informatika', 20, 2021, 1, NULL),
(84, 'Danang Tribrata', NULL, 'Teknik Informatika', 20, 2021, 1, NULL),
(85, 'Rizky Adam Pambudi', NULL, 'Teknik Informatika', 21, 2021, 1, NULL),
(86, 'Muhammad Aziz Karebet', NULL, 'Teknik Informatika', 21, 2021, 1, NULL),
(87, 'Muhammad Mujir', NULL, 'Teknik Informatika', 21, 2021, 1, '19 - Muhammad Mujir D4B18.jpg'),
(88, 'Muhammad Irfan Shiddiq', NULL, 'Teknik Informatika', 21, 2021, 1, NULL),
(89, 'Sarah Ummul Afifah', NULL, 'Teknik Informatika', 21, 2021, 1, NULL),
(90, 'Marisna Nurul Fadhila', NULL, 'Teknik Informatika', 21, 2021, 1, NULL),
(91, 'Hafizh Irfansyah Putra', NULL, 'Teknik Komputer', 22, 2021, 1, NULL),
(92, 'Anisia Nabillah Hilwah', NULL, 'Teknik Komputer', 22, 2021, 1, NULL),
(93, 'Alvian Tedy Aditya', NULL, 'Teknik Komputer', 23, 2021, 1, NULL),
(94, 'Clifford Jason Taco', NULL, 'Teknik Komputer', 23, 2021, 1, NULL),
(95, 'Didi Alfandi', NULL, 'Teknik Komputer', 23, 2021, 1, NULL),
(96, 'Dinda Heni Ayundri', NULL, 'Teknik Komputer', 23, 2021, 1, NULL),
(97, 'Fachri Azril', NULL, 'Teknik Komputer', 23, 2021, 1, NULL),
(98, 'Silfiana Nur Hamida', NULL, '', NULL, 2021, 1, 'Silfiana Nur Hamida.jpg'),
(99, 'Putra Edi Tia', NULL, '', NULL, 2021, 1, 'Putra Edi Tia.jpg'),
(100, 'Ardian Kristya Pratama', NULL, '', NULL, 2021, 1, 'Ardian Kristya.jpg'),
(101, 'Andika Ahmad Ramadhan', NULL, '', NULL, 2021, 1, NULL),
(102, 'Andika Ahmad Ramadhan', NULL, '', NULL, 2021, 1, 'Andika Ramadhan.png'),
(103, 'Luqmanul Hakim Iksan', NULL, NULL, NULL, 2021, 1, 'Luqmanul Hakim Iksan.jpg'),
(2110181038, 'Belinda Anindya KW', NULL, 'Teknik Informatika', 10, 2021, 1, NULL),
(2110181039, 'Eka Dharma Widhyana', NULL, 'Teknik Informatika', 10, 2021, 1, NULL),
(2110181044, 'Gilang Taufiq Arsyannur', NULL, 'Teknik Informatika', 10, 2021, 1, NULL),
(2110181048, 'Ulima Inas Shabrina', NULL, 'Teknik Informatika', 10, 2021, 1, NULL),
(2110181056, 'Zul Fauzi Oktavian', NULL, 'Teknik Informatika', 10, 2021, 1, NULL),
(2110181059, 'I Gede Kresna Putra', NULL, 'Teknik Informatika', 10, 2021, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) UNSIGNED NOT NULL,
  `id_kategori` int(11) UNSIGNED DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `deskripsi_produk` text DEFAULT NULL,
  `demo_produk` varchar(255) DEFAULT NULL,
  `video_display` varchar(255) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `foto_produk1` varchar(255) DEFAULT NULL,
  `foto_produk2` varchar(255) DEFAULT NULL,
  `foto_produk3` varchar(255) DEFAULT NULL,
  `foto_produk4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `deskripsi_produk`, `demo_produk`, `video_display`, `poster`, `foto_produk1`, `foto_produk2`, `foto_produk3`, `foto_produk4`) VALUES
(1, 1, 'CUCI IN', 'Adalah aplikasi berbasis online yang memudahkan user untuk memenuhi kebutuhan sehari-hari. Dengan adanya fitur Nearby, user dapat mengetahui lokasi outlet laundry terdekat di sekitarnya. Selain itu, fitur antar jempur laundry memudahkan user yang tidak memiliki cukup waktu untuk mengantarkan atau mengambil laundry.', 'dtik-fest.com/cuci-in', 'https://youtu.be/a-gwRyshp4A', NULL, 'aset-2021/img/produk/1/produk.png', 'aset-2021/img/produk/1/deskripsi.png', 'aset-2021/img/produk/1/anggota.png', NULL),
(2, 2, 'Electromaid', 'Merupakan alat pengontrol piranti listrik, penghitung penggunaan listrik dan edukasi pengguna yang diintegrasikan menjadi satu alat. Electromaid dapat diakses melalui media aplikasi android dan website.', 'dtik-fest.com/electromaid', 'https://youtu.be/LYcsMDLoRUM', NULL, 'aset-2021/img/produk/2/produk.png', 'aset-2021/img/produk/2/deskripsi.png', 'aset-2021/img/produk/2/anggota.png', NULL),
(3, 2, 'Satgas', 'SATGAS (Smart Irigasi) merupakan platform untuk membantu petani dalam memantau kondisi lahan pertanian dan melakukan kontrol terhadap pompa air dan pintu air irigasi secara otomatis sesuai dengan kondisi lahan pertanian.', 'dtik-fest.com/satgas', 'https://youtu.be/M6-MANjx1Mc', NULL, 'aset-2021/img/produk/3/produk.png', 'aset-2021/img/produk/3/deskripsi.png', 'aset-2021/img/produk/3/anggota.png', NULL),
(4, 2, 'Panoptes Insight', 'Adalah Panoptes Insight adalah platform pemeriksaan katarak berbasis computer vision yang tersedia dalam mode online dan offline untuk membantu masyarakat dalam deteksi dan klasifikasi katarak dini.', 'dtik-fest.com/panoptes-insight', 'https://youtu.be/bp_f4xAzI_I', NULL, 'aset-2021/img/produk/4/produk.png', 'aset-2021/img/produk/4/deskripsi.png', 'aset-2021/img/produk/4/anggota.png', NULL),
(5, 2, 'GO - Operation', 'Meruapkan alat yang ditempatkan dalam lahan perkebunan/pertanian yang difungsikan untuk monitoring water level pada DAM pengairan serta mendeteksi kelembaban tanah pada lahan tersebut. GO - Operation juga disematkan mekanisme buka tutup gerbang menggunakan motor untuk mengatur debit air yang disalurkan.', 'playstore/go-operation', 'https://youtu.be/QgoD1uAn0x8', NULL, 'aset-2021/img/produk/5/produk.png', 'aset-2021/img/produk/5/deskripsi.png', 'aset-2021/img/produk/5/anggota.png', NULL),
(6, 2, 'Mamoi', 'MAMOI (Management and Monitoring Infus) adalah perangkat yang memiliki kemampuan melakukan manajemen dan pemantauan kondisi infus jarak jauh. Perangkat ini pada dasarnya menggunakan NoderMCU dan Load Cell.', 'playstore/mamoi', 'https://youtu.be/8JZ-oy1wgBg', NULL, 'aset-2021/img/produk/6/produk.png', 'aset-2021/img/produk/6/deskripsi.png', 'aset-2021/img/produk/6/anggota.png', NULL),
(7, 2, 'Hemo - Sys', 'Merupakan sebuah alat monitoring pendeteksi gejala awal penyakit. Pendeteksian menggunakan parameter tingkat saturasi oksigen, heart rate dan suhu tubuh.', 'playstore/hemosys', 'https://youtu.be/pJDlDlSUYc0', NULL, 'aset-2021/img/produk/7/produk.png', 'aset-2021/img/produk/7/deskripsi.png', 'aset-2021/img/produk/7/anggota.png', NULL),
(8, 2, 'Aced', 'ACED adalah alat berbasis IOT yang dapat melakukan pemberian pakan kucing secara remote hanya dengan menggunakan aplikasi sehingga dapat meminimalisir terjadinya kelalaian dalam pemberian pakan kucing yang disebabkan oleh kesibukan dari sang pemelihara kucing.', 'playstore/aced', 'https://youtu.be/6zBVjOS8bAo', NULL, 'aset-2021/img/produk/8/produk.png', 'aset-2021/img/produk/8/deskripsi.png', 'aset-2021/img/produk/8/anggota.png', NULL),
(9, 2, 'Water CIP', 'Merupakan sebuah alat yang dapat membantu Anda mengontrol penampungan air melalui ponsel pintar Anda. Water CIP dapat mengisi penampungan air ketika penampungan air hampir kosong, dan menghentikan pengisian ketika penuh.', 'playstore/watercip', 'https://youtu.be/_CShXzMekz4', NULL, 'aset-2021/img/produk/9/produk.png', 'aset-2021/img/produk/9/deskripsi.png', 'aset-2021/img/produk/9/anggota.png', NULL),
(10, 1, 'DolanKuy', 'Adalah Aplikasi referensi wisata yang ada di Indonesia, berbasis 3 platform yaitu mobile, website dan desktop. Dengan DolanKuy, user bisa melihat list wisata dan akomodasi pada tempat wisata dengan membandingkan review dari user lain.', 'dtik-fest.com/dolankuy', 'https://youtu.be/E6uuWRnTWoY', NULL, 'aset-2021/img/produk/10/produk.png', 'aset-2021/img/produk/10/deskripsi.png', 'aset-2021/img/produk/10/anggota.png', NULL),
(11, 1, 'Guwudang.in', 'Guwudang.in adalah aplikasi pemantauan stok barang di pergudangan. Aplikasi ini membantu para pemilik usaha yang memiliki Gudang dengan banyak barang untuk melakukan pencatatan stok barang keluar dan masuk lebih mudah. Aplikasi ini mampu memantau data stok barang, tanggal masuk barang, dan keluar barang, dan tersedia di semua device sehingga memudahkan pemilik usaha dan staffnya untuk melakukan pemantauan data barang dimanapun dan kapanpun.', 'dtik-fest.com/guwudang-in', 'https://youtu.be/UvneD6-ihfM', NULL, 'aset-2021/img/produk/11/produk.png', 'aset-2021/img/produk/11/deskripsi.png', 'aset-2021/img/produk/11/anggota.png', NULL),
(12, 1, 'Square Checks', 'Adalah aplikasi absensi online yang lebih mudah dan cepat. Menyediakan fitur One-Click dan reminder absensi ketika presensi kelas sudah dibuka, serta dilengkapi dengan rekap absensi.', 'dtik-fest.com/squarechecks', 'https://youtu.be/Em12wev20pQ', NULL, 'aset-2021/img/produk/12/produk.png', 'aset-2021/img/produk/12/deskripsi.png', 'aset-2021/img/produk/12/anggota.png', NULL),
(13, 2, 'Terminascor', 'Adalah sebuah perangkat yang digunakan sebagai terminal kendaraan umum mini dengan scan code QR pada tempat-tempat strategis dan favorit di masyarakat untuk daerah-daerah tidak memiliki akses fasilitas terminal. Terminascor memiliki beberapa fungsi yakni memperlihatkan posisi kendaraan umum serta estimasi waktu.', 'playstore/terminascor', 'https://youtu.be/5eD1OcqdwPA', NULL, 'aset-2021/img/produk/13/produk.png', 'aset-2021/img/produk/13/deskripsi.png', 'aset-2021/img/produk/13/anggota.png', NULL),
(14, 2, 'Scheeko', 'SCHEEKO atau School-Social Distancing Keeper merupakan alat yang dapat mendeteksi jarak antar penggunanya. Dengan menggunakan Scheeko diharapkan dapat menjaga jalannya social distancing di lingkungan sekolah. Scheeko menggunakkan modul bluetooth untuk membaca jarak posisi antar siswa/siswi yang sedang berada di sekolah dengan cara mengatur jarak minimal tiap bluetooth yang dapat memicu notifikasi jika melewati batas minimal jarak 1 meter tersebut.', 'playstore/scheeko', 'https://youtu.be/H79BhGDzDoQ', NULL, 'aset-2021/img/produk/14/produk.png', 'aset-2021/img/produk/14/deskripsi.png', 'aset-2021/img/produk/14/anggota.png', NULL),
(15, 2, 'Saaco', 'SAACO adalah sajdah yang dapat menghitung jumlah rakaat tiap shalat dan ditampilkan dalam sebuah layar agar pengguna dapat mengerti rakaat yang sudah dikerjakan.', 'playstore/saaco', 'https://youtu.be/DjhzWkHhy4I', NULL, 'aset-2021/img/produk/15/produk.png', 'aset-2021/img/produk/15/deskripsi.png', 'aset-2021/img/produk/15/anggota.png', NULL),
(16, 1, 'Antrian Sehat', 'Antrian Sehat adalah sebuah Aplikasi administrasi pendaftaran pasien puskesmas dengan cakupan ranah Kota Surabaya. Antrian Sehat bertujuan untuk membantu calon pasien atau user untuk mengetahui Jadwal Praktek dan mendaftar antrian pada suatu poli di Puskesmas.', 'dtik-fest.com/antriansehat', 'https://youtu.be/ITZur_UMaMM', NULL, 'aset-2021/img/produk/16/produk.png', 'aset-2021/img/produk/16/deskripsi.png', 'aset-2021/img/produk/16/anggota.png', NULL),
(17, 1, 'Benjol', 'BENJOL atau Bengkel Jadi Online adalah aplikasi untuk memudahkan Anda dalam mencari bengkel motor di sekitar Anda, booking jadwal service dengan fitur antar-jemput motor, serta mencari sparepart yang Anda butuhkan.', 'dtik-fest.com/benjol', 'https://youtu.be/uaGqxf80i7U', NULL, 'aset-2021/img/produk/17/produk.png', 'aset-2021/img/produk/17/deskripsi.png', 'aset-2021/img/produk/17/anggota.png', NULL),
(18, 1, 'Clara', 'Adalah aplikasi yang dapat memudahkan Anda dalam melakukan reservasi asset, hingga mendapatkan izin  atau opproval dari kampus Anda tanpa harus berinteraksi secara langsung dengan pihak yang terkait. ', 'dtik-fest.com/clara', 'https://youtu.be/KK2VJdNA7x8', NULL, 'aset-2021/img/produk/18/produk.png', 'aset-2021/img/produk/18/deskripsi.png', 'aset-2021/img/produk/18/anggota.png', NULL),
(19, 1, 'KA Trips', 'Adalah sebuah aplikasi pemesanan tiket kereta api yang memungkinkan para pengguna dapat memesan tiket kereta api sebelum hari H maupun saat hari H secara cepat. Selain itu, KATrips juga mempunyai 3 keunggulan yaitu Fast Booking, Easy for Refunds, dan Freedom Choice Schedule.', 'dtik-fest.com/katrips', NULL, NULL, 'aset-2021/img/produk/19/produk.png', 'aset-2021/img/produk/19/deskripsi.png', 'aset-2021/img/produk/19/anggota.png', NULL),
(20, 1, 'AssetNest', 'AssetNest adalah sistem manajemen aset untuk memudahkan pengguna dalam mengatur dan mengelola fixed asset perusahaannya. Melalui AssetNest, pengguna dapat melihat seluruh aset yang telah ditambahkan, menambah aset baru, melakukan pencarian aset, melihat detail aset serta melihat history aset pada perusahaan', 'dtik-fest.com/assetnest', 'https://youtu.be/J5WWmjUAluk', NULL, 'aset-2021/img/produk/20/produk.png', 'aset-2021/img/produk/20/deskripsi.png', 'aset-2021/img/produk/20/anggota.png', NULL),
(21, 1, 'Hotelin', 'Adalah aplikasi yang memudahkan user untuk mencari informasi hotel di sekitar dan mempermudah proses booking hotel. Aplikasi ini juga dapat membantu para pemilik hotel dalam memanajemen hotel.', 'dtik-fest.com/hotelin', 'https://youtu.be/BKBq0e20deo', NULL, 'aset-2021/img/produk/21/produk.png', 'aset-2021/img/produk/21/deskripsi.png', 'aset-2021/img/produk/21/anggota.png', NULL),
(22, 2, 'Auto Bookshelf', 'Adalah sarana untuk mempermudah pengambilan buku pada rak buku yang ada di Perpustakaan. Bertujuan untuk membantu para penyandang disabilitas yang tidak bisa mengambil buku secara mandiri.', 'playstore/autobookshelf', NULL, NULL, 'aset-2021/img/produk/22/produk.png', 'aset-2021/img/produk/22/deskripsi.png', 'aset-2021/img/produk/22/anggota.png', NULL),
(23, 2, 'Katara', 'Adalah platform untuk memudahkan para terdampak PHK saat Pandemi untuk melakukan Budidaya Lele dan Hidroponik Rumahan. Platform ini diharapkan mampu untuk membantu perekonomian para korban PHK di tengah sulitnya masa Pandemi COVID-19.', 'playstore/katara', 'https://youtu.be/JrqdVL_rjT0', NULL, 'aset-2021/img/produk/23/produk.png', 'aset-2021/img/produk/23/deskripsi.png', 'aset-2021/img/produk/23/anggota.png', NULL);

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
(1, 'Acaranya berjalan dengan terstrukrur dan sangat bermanfaat, kita bisa mengetahui aplikasi lain yang dibuat oleh setiap tim dari mahasiswa pens, serta aplikasi yang di buat oleh maulidan games. Sehingga, kita bisa terinspirasi ide baru untuk membuat aplikasi yang lebih bagus. Dan selain mendapat pengalaman tim kami juga diberikan bonus sebagai di acara ini.', 98, NULL, 'Peserta Software Expo', 2021),
(2, 'Software expo merupakan titik puncak dari perjuangan selama satu semester dalam menyelesaikan project yang sudah diberikan. Banyak banget pengalaman yang bisa kita dapatkan, mulai dari keseruan persiapan aplikasi, ketegangan saat presentasi di depan penguji, pengetahuan kriteria aplikasi yang siap diluncurkan, bagaimana menjalankan sebuah tim, bagaimana aplikasi yang kita bangun dari sudut pandang bisnis. Pokoknya seru!', 99, NULL, 'Peserta Software Expo', 2021),
(3, 'Untuk saya, Software Expo 2020 merupakan event yang menjadi motivasi awal untuk menemukan minat dalam bidang software development. Dari Software Expo saya mendapatkan banyak proses dan pengalaman untuk membuat aplikasi yang selain meningkatkan hard skill, juga meningkatkan rasa percaya diri untuk berkembang lebih lagi di bidang software development.', 100, NULL, 'Mentor Software Expo', 2021),
(4, 'WPPL adalah salah satu mata kuliah yang bagus untuk belajar bagaimana berkomunikasi dan bekerja dengan tim. DTIK Fest adalah salah satu terobosan yang bagus dalam memamerkan hasil pekerjaan seluruh tim yang tergabung dalam WPPL di tahun ini.', 102, NULL, 'Mentor Software Expo', 2021),
(5, 'Software Expo itu Acaranya sama kayak demo project dosen pada umumnya cuma dibuat lebih megah dan banyak dosen yang mengunjungi tiap tiap stan. Ilmu yang didapat jelas banyak ya tapi yang paling berkesan itu ilmu metode scrum dalam membagi task dan koordinasi antar anggota. Kalau pengalaman yang paling diingat adalah mampu menyelesaikan project nya dalam 3 hari', 103, NULL, 'Peserta Software Expo', 2021);

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
(1, 'CUCI IN', '081359561350', 'androaprila12@gmail.com', 'Surabaya', 1, 2021),
(2, 'Electromaid', '0895379019993', 'elekromaid@gmail.com', 'Surabaya', 2, 2021),
(3, 'Satgas', '083846846601', 'achmadthorik2@gmail.com', 'Surabaya', 3, 2021),
(4, 'Panoptes Insight', '0895366740711', 'f.hakim.ihsan@gmail.com', 'Surabaya', 4, 2021),
(5, 'GO - Operation', '082245493250', 'hendikaputra@ce.student.pens.ac.id', 'Surabaya', 5, 2021),
(6, 'Mamoi', '085339257079', 'ziudith131@gmail.com', 'Surabaya', 6, 2021),
(7, 'Hemo - Sys', '085954325464', 'chofifahperdana06.7d@gmail.com', 'Surabaya', 7, 2021),
(8, 'Aced', '081554146740', 'kiranahanifati@gmail.com', 'Surabaya', 8, 2021),
(9, 'Water CIP', '082336525257', 'alfissyahry@gmail.com', 'Surabaya', 9, 2021),
(10, 'DolanKuy', '089512128873', 'ekadwidyana@gmail.com', 'Surabaya', 10, 2021),
(11, 'G.IN', '085648851548', 'milaatysakinah@gmail.com', 'Surabaya', 11, 2021),
(12, 'Square Checks', '089685699762', 'agusteeenisaf@gmail.com', 'Surabaya', 12, 2021),
(13, 'Terminascor', '082131894237', 'ivanmuntahir26@gmail.com', 'Surabaya', 13, 2021),
(14, 'Sc', '085608005729', 'wafiqkamal16@gmail.com', 'Surabaya', 14, 2021),
(15, 'Saaco', '085649007471', 'milhamwhyd@gmail.com', 'Surabaya', 15, 2021),
(16, 'Antrean Sehat', '085785068842', 'rochimatus22@gmail.com', 'Surabaya', 16, 2021),
(17, 'Benjol', '082145492740', 'ivandioakira@gmail.com', 'Surabaya', 17, 2021),
(18, 'Clara', '089518805511', '', 'Surabaya', 18, 2021),
(19, 'KA Trips', '089691772323', 'nisar.reus34@gmail.com', 'Surabaya', 19, 2021),
(20, 'AssetNest', '085940870092', 'dragneel77@gmail.com', 'Surabaya', 20, 2021),
(21, 'Hotelin', '082230258077', 'azizkarebet@gmail.com', 'Surabaya', 21, 2021),
(22, 'Auto Bookshelf', '081216311026', 'havesirfan@ce.student.pens.ac.id', 'Surabaya', 22, 2021),
(23, 'Katara', '085606797582', 'tedaditya@gmail.com', 'Surabaya', 23, 2021);

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
  ADD PRIMARY KEY (`id_kategori_pemenang`,`nrp`),
  ADD KEY `nrp` (`nrp`);

--
-- Indexes for table `kategori_pemenang_tim`
--
ALTER TABLE `kategori_pemenang_tim`
  ADD PRIMARY KEY (`id_kategori_pemenang`,`id_tim`),
  ADD KEY `id_tim` (`id_tim`);

--
-- Indexes for table `kategori_produk_unused`
--
ALTER TABLE `kategori_produk_unused`
  ADD PRIMARY KEY (`id_kategori`,`id_produk`),
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
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hadiah`
--
ALTER TABLE `hadiah`
  MODIFY `id_hadiah` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industri`
--
ALTER TABLE `industri`
  MODIFY `id_industri` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `juri`
--
ALTER TABLE `juri`
  MODIFY `id_juri` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id_kampus` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_pemenang`
--
ALTER TABLE `kategori_pemenang`
  MODIFY `id_kategori_pemenang` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tim_exhibitor`
--
ALTER TABLE `tim_exhibitor`
  MODIFY `id_tim` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  ADD CONSTRAINT `hadiah_kategori_pemenang_ibfk_2` FOREIGN KEY (`id_kategori_pemenang`) REFERENCES `kategori_pemenang` (`id_kategori_pemenang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `hadiah_kategori_pemenang_ibfk_3` FOREIGN KEY (`id_hadiah`) REFERENCES `hadiah` (`id_hadiah`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `juri_kategori_pemenang`
--
ALTER TABLE `juri_kategori_pemenang`
  ADD CONSTRAINT `juri_kategori_pemenang_ibfk_1` FOREIGN KEY (`id_kategori_pemenang`) REFERENCES `kategori_pemenang` (`id_kategori_pemenang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `juri_kategori_pemenang_ibfk_2` FOREIGN KEY (`id_juri`) REFERENCES `juri` (`id_juri`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `kategori_pemenang_mahasiswa`
--
ALTER TABLE `kategori_pemenang_mahasiswa`
  ADD CONSTRAINT `kategori_pemenang_mahasiswa_ibfk_1` FOREIGN KEY (`id_kategori_pemenang`) REFERENCES `kategori_pemenang` (`id_kategori_pemenang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_pemenang_mahasiswa_ibfk_2` FOREIGN KEY (`nrp`) REFERENCES `mahasiswa` (`nrp`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `kategori_pemenang_tim`
--
ALTER TABLE `kategori_pemenang_tim`
  ADD CONSTRAINT `kategori_pemenang_tim_ibfk_1` FOREIGN KEY (`id_kategori_pemenang`) REFERENCES `kategori_pemenang` (`id_kategori_pemenang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_pemenang_tim_ibfk_2` FOREIGN KEY (`id_tim`) REFERENCES `tim_exhibitor` (`id_tim`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_tim`) REFERENCES `tim_exhibitor` (`id_tim`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_kampus`) REFERENCES `kampus` (`id_kampus`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`nrp`) REFERENCES `mahasiswa` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_2` FOREIGN KEY (`id_industri`) REFERENCES `industri` (`id_industri`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tim_exhibitor`
--
ALTER TABLE `tim_exhibitor`
  ADD CONSTRAINT `tim_exhibitor_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
