-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 03:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hukum`
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
(53, 'Penganiayaan & Pengeroyokan', 'penganiayaan--pengeroyokan', 'Penganiayaan & Pengeroyokan', '<p><span style=\"font-family: Roboto, -apple-system, \"apple color emoji\", BlinkMacSystemFont, \"Segoe UI\", Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; white-space: pre-wrap;\">penganiayaan & pengeroyokan</span><br></p>', '', '', 'icon001.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:55:43', 'dhawy', 'Kamis', '2022-09-29', '20:14:07', 0, 'publish', 24),
(54, 'Pembunuhan', 'pembunuhan', 'Pembunuhan', '<p>Pembunuhan<br></p>', '', '', 'icon002.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:56:23', 'dhawy', 'Kamis', '2022-09-29', '20:13:50', 0, 'publish', 24),
(55, 'Pencemaran Nama Baik', 'pencemaran-nama-baik', 'Pencemaran Nama Baik', '<p>Pencemaran Nama Baik<br></p>', '', 'Pencemaran Nama Baik', 'icon015.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:57:22', 'dhawy', 'Kamis', '2022-09-29', '20:13:33', 0, 'publish', 24),
(56, 'Pencabulan', 'pencabulan', 'Pencabulan', '<p>Pencabulan<br></p>', '', '', 'icon004.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:57:44', 'dhawy', 'Kamis', '2022-09-29', '20:13:15', 0, 'publish', 24),
(57, 'Pencurian & Rampok', 'pencurian--rampok', 'Pencurian & Rampok', '<p>Pencurian & Rampok<br></p>', '', 'Pencurian & Rampok', 'icon005.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:58:23', 'dhawy', 'Kamis', '2022-09-29', '20:12:55', 0, 'publish', 24),
(58, 'Kecelakaan', 'kecelakaan', 'Kecelakaan', '<p>Kecelakaan<br></p>', '', 'Kecelakaan', 'icon006.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:58:42', 'dhawy', 'Kamis', '2022-09-29', '20:12:32', 0, 'publish', 24),
(59, 'Perjudian', 'perjudian', 'Perjudian', '<p>Perjudian<br></p>', '', 'Perjudian', 'icon007.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:58:58', 'dhawy', 'Kamis', '2022-09-29', '20:12:14', 0, 'publish', 24),
(60, 'Pengrusakan', 'pengrusakan', 'Pengrusakan', '<p>Pengrusakan<br></p>', '', 'Pengrusakan', 'icon008.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:59:15', 'dhawy', 'Kamis', '2022-09-29', '20:11:53', 0, 'publish', 24),
(61, 'Perselingkuhan', 'perselingkuhan', 'Perselingkuhan', '<p>Perselingkuhan<br></p>', '', 'Perselingkuhan', 'icon009.png', 0, 'bayu', 'Selasa', '2022-09-20', '10:59:43', 'dhawy', 'Kamis', '2022-09-29', '20:11:28', 0, 'publish', 24),
(62, 'Warisan', 'warisan', 'Warisan', '<p>Warisan<br></p>', '', 'Warisan', 'icon0101.png', 0, 'bayu', 'Selasa', '2022-09-20', '11:00:30', 'dhawy', 'Kamis', '2022-09-29', '20:10:54', 0, 'publish', 25),
(63, 'Hutang', 'hutang', 'Hutang', '<p>Hutang<br></p>', '', 'Hutang', 'icon011.png', 0, 'bayu', 'Selasa', '2022-09-20', '11:00:52', 'dhawy', 'Kamis', '2022-09-29', '20:10:23', 0, 'publish', 25),
(64, 'Pencucian Uang', 'pencucian-uang', 'Pencucian Uang', '<p>Pencucian Uang<br></p>', '', 'Pencucian Uang', 'icon017.png', 0, 'bayu', 'Selasa', '2022-09-20', '11:01:14', 'dhawy', 'Kamis', '2022-09-29', '20:09:14', 0, 'publish', 26),
(65, 'Korupsi', 'korupsi', 'Korupsi', '<p>Korupsi<br></p>', '', 'Korupsi', 'icon018.png', 0, 'bayu', 'Selasa', '2022-09-20', '11:01:30', 'dhawy', 'Kamis', '2022-09-29', '20:09:01', 0, 'publish', 26),
(66, 'Perkawinan', 'perkawinan', 'Perkawinan', '<p>Perkawinan<br></p>', '', 'Perkawinan', 'icon022.png', 0, 'bayu', 'Selasa', '2022-09-20', '11:01:53', 'dhawy', 'Kamis', '2022-09-29', '20:08:37', 0, 'publish', 27),
(67, 'Waris', 'waris', 'Waris', '<p>Waris<br></p>', '', 'Waris', 'icon010.png', 0, 'bayu', 'Selasa', '2022-09-20', '11:02:16', 'dhawy', 'Kamis', '2022-09-29', '20:08:23', 0, 'publish', 27),
(68, 'PPAT', 'ppat', 'PPAT', '<p>PPAT<br></p>', '', 'PPAT', 'icon027.png', 0, 'bayu', 'Selasa', '2022-09-20', '11:02:48', 'dhawy', 'Kamis', '2022-09-29', '20:07:54', 0, 'publish', 28),
(69, 'Notaris Dokumen', 'notaris-dokumen', 'Notaris Dokumen', '<p>Notaris Dokumen<br></p>', '', 'Notaris Dokumen', 'icon028.png', 0, 'bayu', 'Selasa', '2022-09-20', '11:03:19', 'dhawy', 'Kamis', '2022-09-29', '20:07:26', 0, 'publish', 28),
(70, 'PMDN', 'pmdn', 'PMDN', '<p><span style=\"font-family: Roboto, -apple-system, \"apple color emoji\", BlinkMacSystemFont, \"Segoe UI\", Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; white-space: pre-wrap;\">PMDN</span><br></p>', '', 'PMDN', 'icon029.png', 0, 'bayu', 'Selasa', '2022-09-20', '11:03:35', 'dhawy', 'Kamis', '2022-09-29', '20:03:53', 0, 'publish', 29),
(71, 'PMA', 'pma', 'PMA', '<p><span style=\"font-family: Roboto, -apple-system, \"apple color emoji\", BlinkMacSystemFont, \"Segoe UI\", Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; white-space: pre-wrap;\">PMA</span><br></p>', '', 'PMA', 'icon0301.png', 0, 'bayu', 'Selasa', '2022-09-20', '11:03:50', 'dhawy', 'Kamis', '2022-09-29', '20:02:53', 0, 'publish', 29),
(72, 'Wanprestasi', 'wanprestasi', 'Wanprestasi', '', '', '', 'icon012.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:10:50', 'dhawy', 'Kamis', '2022-09-29', '20:17:41', 0, 'publish', 25),
(73, 'Sengketa Kepemilikan', 'sengketa-kepemilikan', 'Sengketa Kepemilikan', '<p>Sengketa Kepemilikan<br></p>', '', '', 'icon013.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:11:14', 'dhawy', 'Kamis', '2022-09-29', '20:17:26', 0, 'publish', 25),
(74, 'Hak Paten', 'hak-paten', 'Hak Paten', '<p>Hak Paten<br></p>', '', 'Hak Paten', 'icon014.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:11:32', 'dhawy', 'Kamis', '2022-09-29', '20:17:10', 0, 'publish', 25),
(75, 'Pencemaran Nama', 'pencemaran-nama', 'Pencemaran Nama', '<p>Pencemaran Nama<br></p>', '', 'Pencemaran Nama', 'icon0151.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:12:03', 'dhawy', 'Kamis', '2022-09-29', '20:16:50', 0, 'publish', 25),
(76, 'Hak Asuh Anak', 'hak-asuh-anak', 'Hak Asuh Anak', '<p>Hak Asuh Anak<br></p>', '', '', 'icon016.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:12:21', 'dhawy', 'Kamis', '2022-09-29', '20:16:29', 0, 'publish', 25),
(77, 'Teroris', 'teroris', 'Teroris', '<p>Teroris<br></p>', '', 'Teroris', 'icon019.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:12:57', 'dhawy', 'Kamis', '2022-09-29', '20:16:06', 0, 'publish', 26),
(78, 'Narkotika', 'narkotika', 'Narkotika', '<p>Narkotika<br></p>', '', 'Narkotika', 'icon020.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:13:23', 'dhawy', 'Kamis', '2022-09-29', '20:15:52', 0, 'publish', 26),
(79, 'Pornografi', 'pornografi', 'Pornografi', '<p>Pornografi<br></p>', '', 'Pornografi', 'icon021.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:13:41', 'dhawy', 'Kamis', '2022-09-29', '20:15:35', 0, 'publish', 26),
(80, 'Wasiat', 'wasiat', 'Wasiat', '<p>Wasiat<br></p>', '', 'Wasiat', 'icon024.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:14:38', 'dhawy', 'Kamis', '2022-09-29', '20:15:13', 0, 'publish', 27),
(81, 'Wakaf', 'wakaf', 'Wakaf', '<p>Wakaf<br></p>', '', 'Wakaf', 'icon025.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:14:56', 'dhawy', 'Kamis', '2022-09-29', '20:14:51', 0, 'publish', 27),
(82, 'Infak', 'infak', 'Infak', '<p>Infak<br></p>', '', '', 'icon026.png', 0, 'dhawy', 'Jumat', '2022-09-23', '21:15:11', 'dhawy', 'Kamis', '2022-09-29', '20:14:33', 0, 'publish', 27);

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
