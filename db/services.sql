-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2022 at 10:45 AM
-- Server version: 10.5.17-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1642108_legiaindi`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(11) NOT NULL,
  `services_judul` varchar(220) NOT NULL,
  `services_judul_seo` varchar(220) NOT NULL,
  `services_judul_konten` varchar(200) NOT NULL,
  `services_desk` text NOT NULL,
  `services_keyword` varchar(220) NOT NULL,
  `services_meta_desk` varchar(200) NOT NULL,
  `services_gambar` text NOT NULL,
  `services_harga` int(100) NOT NULL,
  `services_post_oleh` varchar(200) NOT NULL,
  `services_post_hari` varchar(20) NOT NULL,
  `services_post_tanggal` date NOT NULL,
  `services_post_jam` time NOT NULL,
  `services_update_oleh` varchar(200) NOT NULL,
  `services_update_hari` varchar(20) NOT NULL,
  `services_update_tanggal` date NOT NULL,
  `services_update_jam` time NOT NULL,
  `services_dibaca` int(50) NOT NULL,
  `services_status` varchar(20) NOT NULL,
  `products_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `services_judul`, `services_judul_seo`, `services_judul_konten`, `services_desk`, `services_keyword`, `services_meta_desk`, `services_gambar`, `services_harga`, `services_post_oleh`, `services_post_hari`, `services_post_tanggal`, `services_post_jam`, `services_update_oleh`, `services_update_hari`, `services_update_tanggal`, `services_update_jam`, `services_dibaca`, `services_status`, `products_cat_id`) VALUES
(53, 'Penganiayaan & Pengeroyokan', 'penganiayaan--pengeroyokan', 'Penganiayaan & Pengeroyokan', '<p><span style=\"font-family: Roboto, -apple-system, \"apple color emoji\", BlinkMacSystemFont, \"Segoe UI\", Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; white-space: pre-wrap;\">penganiayaan & pengeroyokan</span><br></p>', '', '', 'penganiayaan_pengeroyokan-01-011.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:55:43', 'bayu', 'Kamis', '2022-09-22', '13:37:58', 0, 'publish', 24),
(54, 'Pembunuhan', 'pembunuhan', 'Pembunuhan', '<p>Pembunuhan<br></p>', '', '', 'pembunuhan-01-01.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:56:23', 'bayu', 'Kamis', '2022-09-22', '13:38:38', 0, 'publish', 24),
(55, 'Pencemaran Nama Baik', 'pencemaran-nama-baik', 'Pencemaran Nama Baik', '<p>Pencemaran Nama Baik<br></p>', '', 'Pencemaran Nama Baik', 'pencemaran_nama_baik-01-01.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:57:22', 'bayu', 'Kamis', '2022-09-22', '13:39:07', 0, 'publish', 24),
(56, 'Pencabulan', 'pencabulan', 'Pencabulan', '<p>Pencabulan<br></p>', '', '', 'pencabulan-01-01.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:57:44', 'bayu', 'Kamis', '2022-09-22', '13:38:51', 0, 'publish', 24),
(57, 'Pencurian & Rampok', 'pencurian--rampok', 'Pencurian & Rampok', '<p>Pencurian & Rampok<br></p>', '', 'Pencurian & Rampok', 'pencurian-01-01.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:58:23', 'bayu', 'Kamis', '2022-09-22', '13:39:17', 0, 'publish', 24),
(58, 'Kecelakaan', 'kecelakaan', 'Kecelakaan', '<p>Kecelakaan<br></p>', '', 'Kecelakaan', 'kecelakaan-01-01.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:58:42', 'bayu', 'Kamis', '2022-09-22', '13:38:20', 0, 'publish', 24),
(59, 'Perjudian', 'perjudian', 'Perjudian', '<p>Perjudian<br></p>', '', 'Perjudian', 'perjudian-01-01.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:58:58', 'bayu', 'Kamis', '2022-09-22', '13:39:41', 0, 'publish', 24),
(60, 'Pengrusakan', 'pengrusakan', 'Pengrusakan', '<p>Pengrusakan<br></p>', '', 'Pengrusakan', 'pengrusakan-01-01.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:59:15', 'bayu', 'Kamis', '2022-09-22', '13:39:31', 0, 'publish', 24),
(61, 'Perselingkuhan', 'perselingkuhan', 'Perselingkuhan', '<p>Perselingkuhan<br></p>', '', 'Perselingkuhan', 'perselingkuhan-01-01.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:59:43', 'bayu', 'Kamis', '2022-09-22', '13:39:51', 0, 'publish', 24),
(62, 'Warisan', 'warisan', 'Warisan', '<p>Warisan<br></p>', '', 'Warisan', '', 0, 'bayu', 'Selasa', '2022-09-20', '11:00:30', '', '', '0000-00-00', '00:00:00', 0, 'publish', 25),
(63, 'Hutang', 'hutang', 'Hutang', '<p>Hutang<br></p>', '', 'Hutang', '', 0, 'bayu', 'Selasa', '2022-09-20', '11:00:52', '', '', '0000-00-00', '00:00:00', 0, 'publish', 25),
(64, 'Pencucian Uang', 'pencucian-uang', 'Pencucian Uang', '<p>Pencucian Uang<br></p>', '', 'Pencucian Uang', '', 0, 'bayu', 'Selasa', '2022-09-20', '11:01:14', '', '', '0000-00-00', '00:00:00', 0, 'publish', 26),
(65, 'Korupsi', 'korupsi', 'Korupsi', '<p>Korupsi<br></p>', '', 'Korupsi', '', 0, 'bayu', 'Selasa', '2022-09-20', '11:01:30', '', '', '0000-00-00', '00:00:00', 0, 'publish', 26),
(66, 'Perkawinan', 'perkawinan', 'Perkawinan', '<p>Perkawinan<br></p>', '', 'Perkawinan', '', 0, 'bayu', 'Selasa', '2022-09-20', '11:01:53', '', '', '0000-00-00', '00:00:00', 0, 'publish', 27),
(67, 'Waris', 'waris', 'Waris', '<p>Waris<br></p>', '', 'Waris', '', 0, 'bayu', 'Selasa', '2022-09-20', '11:02:16', '', '', '0000-00-00', '00:00:00', 0, 'publish', 27),
(68, 'PPAT', 'ppat', 'PPAT', '<p>PPAT<br></p>', '', 'PPAT', '', 0, 'bayu', 'Selasa', '2022-09-20', '11:02:48', '', '', '0000-00-00', '00:00:00', 0, 'publish', 28),
(69, 'Notaris Dokumen', 'notaris-dokumen', 'Notaris Dokumen', '<p>Notaris Dokumen<br></p>', '', 'Notaris Dokumen', '', 0, 'bayu', 'Selasa', '2022-09-20', '11:03:19', '', '', '0000-00-00', '00:00:00', 0, 'publish', 28),
(70, 'PMDN', 'pmdn', 'PMDN', '<p><span style=\"font-family: Roboto, -apple-system, &quot;apple color emoji&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif; white-space: pre-wrap;\">PMDN</span><br></p>', '', 'PMDN', '', 0, 'bayu', 'Selasa', '2022-09-20', '11:03:35', '', '', '0000-00-00', '00:00:00', 0, 'publish', 29),
(71, 'PMA', 'pma', 'PMA', '<p><span style=\"font-family: Roboto, -apple-system, &quot;apple color emoji&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif; white-space: pre-wrap;\">PMA</span><br></p>', '', 'PMA', '', 0, 'bayu', 'Selasa', '2022-09-20', '11:03:50', '', '', '0000-00-00', '00:00:00', 0, 'publish', 29),
(72, 'Wanprestasi', 'wanprestasi', 'Wanprestasi', '', '', '', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:10:50', '', '', '0000-00-00', '00:00:00', 0, 'publish', 25),
(73, 'Sengketa Kepemilikan', 'sengketa-kepemilikan', 'Sengketa Kepemilikan', '<p>Sengketa Kepemilikan<br></p>', '', '', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:11:14', '', '', '0000-00-00', '00:00:00', 0, 'publish', 25),
(74, 'Hak Paten', 'hak-paten', 'Hak Paten', '<p>Hak Paten<br></p>', '', 'Hak Paten', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:11:32', '', '', '0000-00-00', '00:00:00', 0, 'publish', 25),
(75, 'Pencemaran Nama', 'pencemaran-nama', 'Pencemaran Nama', '<p>Pencemaran Nama<br></p>', '', 'Pencemaran Nama', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:12:03', '', '', '0000-00-00', '00:00:00', 0, 'publish', 25),
(76, 'Hak Asuh Anak', 'hak-asuh-anak', 'Hak Asuh Anak', '<p>Hak Asuh Anak<br></p>', '', '', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:12:21', 'dhawy', 'Jumat', '2022-09-23', '21:16:01', 0, 'publish', 25),
(77, 'Teroris', 'teroris', 'Teroris', '<p>Teroris<br></p>', '', 'Teroris', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:12:57', '', '', '0000-00-00', '00:00:00', 0, 'publish', 26),
(78, 'Narkotika', 'narkotika', 'Narkotika', '<p>Narkotika<br></p>', '', 'Narkotika', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:13:23', '', '', '0000-00-00', '00:00:00', 0, 'publish', 26),
(79, 'Pornografi', 'pornografi', 'Pornografi', '<p>Pornografi<br></p>', '', 'Pornografi', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:13:41', '', '', '0000-00-00', '00:00:00', 0, 'publish', 26),
(80, 'Wasiat', 'wasiat', 'Wasiat', '<p>Wasiat<br></p>', '', 'Wasiat', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:14:38', '', '', '0000-00-00', '00:00:00', 0, 'publish', 27),
(81, 'Wakaf', 'wakaf', 'Wakaf', '<p>Wakaf<br></p>', '', 'Wakaf', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:14:56', '', '', '0000-00-00', '00:00:00', 0, 'publish', 27),
(82, 'Infak', 'infak', 'Infak', '<p>Infak<br></p>', '', '', '', 0, 'dhawy', 'Jumat', '2022-09-23', '21:15:11', '', '', '0000-00-00', '00:00:00', 0, 'publish', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
