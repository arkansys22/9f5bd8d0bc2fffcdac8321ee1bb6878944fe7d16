-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 11:50 AM
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
-- Table structure for table `user_lawyer`
--

CREATE TABLE `user_lawyer` (
  `user_lawyer_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_lawyer_kategori` varchar(220) NOT NULL,
  `user_lawyer_pengalaman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_lawyer`
--

INSERT INTO `user_lawyer` (`user_lawyer_id`, `id_user`, `user_lawyer_kategori`, `user_lawyer_pengalaman`) VALUES
(1, 46, 'Pidana umum - Ketenaga kerjaan - Pertambangan - Perjanjian Perusahaan', '8 tahun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_lawyer`
--
ALTER TABLE `user_lawyer`
  ADD PRIMARY KEY (`user_lawyer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_lawyer`
--
ALTER TABLE `user_lawyer`
  MODIFY `user_lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
