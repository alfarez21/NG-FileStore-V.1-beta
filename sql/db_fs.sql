-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 04:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fs`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `upload` varchar(50) NOT NULL,
  `label` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `type`, `size`, `upload`, `label`) VALUES
(1, 'ihhh.jpg', 'JPG File', '142042', '21 Feb, 2019', 'gfgf,fgfg,fgfgf,gfgf'),
(2, 'LEMBAR PENGESAHAN.docx', 'Microsoft Word Document', '12413', '02 Mar, 2019', ''),
(3, 'Latar belakang.docx', 'Microsoft Word Document', '15335', '02 Mar, 2019', ''),
(4, 'Laporan-pkl-Rano-makalah 2.docx', 'Microsoft Word Document', '716314', '02 Mar, 2019', ''),
(5, 'Laporan-pkl-Rano-makalah 1.docx', 'Microsoft Word Document', '716292', '02 Mar, 2019', ''),
(6, 'LAPORAN.docx', 'Microsoft Word Document', '84889', '02 Mar, 2019', ''),
(7, 'KATA PENGANTAR.docx', 'Microsoft Word Document', '14804', '02 Mar, 2019', ''),
(8, 'DAFTAR ISI.docx', 'Microsoft Word Document', '12740', '02 Mar, 2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
