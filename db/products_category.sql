-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2022 at 10:59 AM
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
-- Table structure for table `products_category`
--

CREATE TABLE `products_category` (
  `products_cat_id` int(11) NOT NULL,
  `products_cat_judul` varchar(220) NOT NULL,
  `products_cat_judul_seo` varchar(220) NOT NULL,
  `products_cat_desk` text NOT NULL,
  `products_cat_keyword` varchar(220) NOT NULL,
  `products_cat_meta_desk` varchar(200) NOT NULL,
  `products_cat_gambar` text NOT NULL,
  `products_cat_post_oleh` varchar(200) NOT NULL,
  `products_cat_post_hari` varchar(20) NOT NULL,
  `products_cat_post_tanggal` date NOT NULL,
  `products_cat_post_jam` time NOT NULL,
  `products_cat_update_oleh` varchar(200) NOT NULL,
  `products_cat_update_hari` varchar(20) NOT NULL,
  `products_cat_update_tanggal` date NOT NULL,
  `products_cat_update_jam` time NOT NULL,
  `products_cat_dibaca` int(50) NOT NULL,
  `products_cat_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_category`
--

INSERT INTO `products_category` (`products_cat_id`, `products_cat_judul`, `products_cat_judul_seo`, `products_cat_desk`, `products_cat_keyword`, `products_cat_meta_desk`, `products_cat_gambar`, `products_cat_post_oleh`, `products_cat_post_hari`, `products_cat_post_tanggal`, `products_cat_post_jam`, `products_cat_update_oleh`, `products_cat_update_hari`, `products_cat_update_tanggal`, `products_cat_update_jam`, `products_cat_dibaca`, `products_cat_status`) VALUES
(24, 'Pidana', 'pidana', '<p><span style=\"font-family: Roboto, -apple-system, \"apple color emoji\", BlinkMacSystemFont, \"Segoe UI\", Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; white-space: pre-wrap;\">Pidana</span><br></p>', '', 'Pidana', 'pidana1.jpg', 'dhawy', 'Selasa', '2022-09-20', '09:19:44', 'bayu', 'Selasa', '2022-09-20', '16:59:29', 0, 'publish'),
(25, 'Perdata', 'perdata', '<p><span style=\"font-family: Roboto, -apple-system, \"apple color emoji\", BlinkMacSystemFont, \"Segoe UI\", Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; white-space: pre-wrap;\">Perdata</span><br></p>', '', 'Perdata', 'perdata.jpg', 'dhawy', 'Selasa', '2022-09-20', '09:20:35', 'bayu', 'Selasa', '2022-09-20', '16:59:38', 0, 'publish'),
(26, 'Tindak pidana khusus', 'tindak-pidana-khusus', '<p><span style=\"font-family: Roboto, -apple-system, \"apple color emoji\", BlinkMacSystemFont, \"Segoe UI\", Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; white-space: pre-wrap;\">Tindak pidana khusus</span><br></p>', '', 'Tindak pidana khusus', 'hukum-pidana-khusus.jpg', 'dhawy', 'Selasa', '2022-09-20', '09:21:15', 'bayu', 'Selasa', '2022-09-20', '16:59:53', 0, 'publish'),
(27, 'Agama', 'agama', '<p><span style=\"font-family: Roboto, -apple-system, \"apple color emoji\", BlinkMacSystemFont, \"Segoe UI\", Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; white-space: pre-wrap;\">Agama</span><br></p>', '', 'Agama', 'agama.jpg', 'dhawy', 'Selasa', '2022-09-20', '09:21:29', 'bayu', 'Selasa', '2022-09-20', '17:00:01', 0, 'publish'),
(28, 'Notaris', 'notaris', '<p><span style=\"font-family: Roboto, -apple-system, \"apple color emoji\", BlinkMacSystemFont, \"Segoe UI\", Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; white-space: pre-wrap;\">Notaris</span><br></p>', '', 'Notaris', 'notaris.jpg', 'dhawy', 'Selasa', '2022-09-20', '09:21:48', 'bayu', 'Selasa', '2022-09-20', '17:00:10', 0, 'publish'),
(29, 'Perizinan', 'perizinan', '<p>Perizinan<br></p>', '', 'Perizinan', 'perizinan.jpg', 'dhawy', 'Selasa', '2022-09-20', '09:22:36', 'bayu', 'Selasa', '2022-09-20', '17:00:27', 0, 'publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_category`
--
ALTER TABLE `products_category`
  ADD PRIMARY KEY (`products_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_category`
--
ALTER TABLE `products_category`
  MODIFY `products_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
