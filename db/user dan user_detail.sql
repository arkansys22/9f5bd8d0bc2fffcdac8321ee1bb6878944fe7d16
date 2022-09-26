-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 08:32 AM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `user_post_hari` varchar(20) NOT NULL,
  `user_post_tanggal` date NOT NULL,
  `user_post_jam` time NOT NULL,
  `user_update_hari` varchar(20) NOT NULL,
  `user_update_tanggal` date NOT NULL,
  `user_update_jam` time NOT NULL,
  `user_gambar` text NOT NULL,
  `user_status` varchar(20) NOT NULL,
  `user_login_tanggal` date NOT NULL,
  `user_login_jam` time NOT NULL,
  `user_login_status` varchar(20) NOT NULL,
  `user_stat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `password`, `level`, `id_session`, `user_post_hari`, `user_post_tanggal`, `user_post_jam`, `user_update_hari`, `user_update_tanggal`, `user_update_jam`, `user_gambar`, `user_status`, `user_login_tanggal`, `user_login_jam`, `user_login_status`, `user_stat`) VALUES
(6, 'dhawy', 'Dhawy Arkan', 'dhawy@gmail.com', '21d564edcc5b55c0af9b3684ef7df4d38b36c224', '1', '1d3ee28b20064eb055ea2315493770bf-20210128004501', 'Kamis', '2020-06-25', '15:14:48', 'Kamis', '2021-01-28', '00:45:01', 'avatar5.png', '1', '2022-09-22', '13:33:10', 'online', 'Publish'),
(44, 'admin', 'admin', 'adin@logaya.com', '9f5bd8d0bc2fffcdac8321ee1bb6878944fe7d16', '2', 'b85cfc4383ebeacf4df1dfd2188191b3-20220907163351', 'Jumat', '2021-01-22', '11:04:35', 'Rabu', '2022-09-07', '16:33:51', '', '1', '2022-08-08', '10:43:46', 'online', 'publish'),
(45, 'bayu', 'bayuway', 'bayu@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '1', '6d0f118a787005f93556c0233c5a90ac-20220920103915', 'Selasa', '2022-09-20', '10:39:15', '', '0000-00-00', '00:00:00', '', '1', '2022-09-26', '13:31:11', 'online', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_detail_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_detail_no_telp` varchar(20) NOT NULL,
  `user_detail_jekel` varchar(20) NOT NULL,
  `user_detail_agama` varchar(50) NOT NULL,
  `user_detail_tempatlahir` varchar(50) NOT NULL,
  `user_detail_tgllahir` date NOT NULL,
  `user_detail_perkawinan` varchar(100) NOT NULL,
  `user_detail_pendidikan` varchar(100) NOT NULL,
  `user_detail_divisi` int(3) NOT NULL,
  `user_detail_ktp` varchar(50) NOT NULL,
  `user_detail_tempattinggal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `id_user`, `user_detail_no_telp`, `user_detail_jekel`, `user_detail_agama`, `user_detail_tempatlahir`, `user_detail_tgllahir`, `user_detail_perkawinan`, `user_detail_pendidikan`, `user_detail_divisi`, `user_detail_ktp`, `user_detail_tempattinggal`) VALUES
(25, 6, '1231312313', 'Pria', 'Islam', 'jakarta', '2021-01-29', 'Lajang', 's1', 15, '12312313123', 'bogor'),
(37, 44, '088888888', 'Pria', 'Islam', 'Jakarta', '1993-03-03', 'Lajang', 'S1', 16, '12312312312', 'Alamat rumah adin'),
(38, 45, '1', 'Pria', 'Islam', 'jakarta', '2022-09-06', 'Lajang', 's1', 12, '1', 'jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
