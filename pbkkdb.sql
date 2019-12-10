-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 06:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbkkdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `activity`, `timestamp`) VALUES
(1, 'Create User', '2019-11-01 07:12:51'),
(2, 'Create User', '2019-11-07 01:53:04'),
(3, 'Create User', '2019-11-07 04:52:55'),
(4, 'Create User', '2019-12-02 06:07:29'),
(5, 'Create User', '2019-12-02 07:57:03'),
(6, 'Create User', '2019-12-02 08:21:42'),
(7, 'Create User', '2019-12-02 08:35:47'),
(8, 'Create User', '2019-12-02 12:54:09'),
(9, 'Create User', '2019-12-02 12:56:24'),
(10, 'Create User', '2019-12-02 13:15:34'),
(11, 'Create User', '2019-12-04 04:26:23'),
(12, 'Create User', '2019-12-04 04:52:20'),
(13, 'Create User', '2019-12-04 06:07:44'),
(14, 'Create User', '2019-12-04 06:08:20'),
(15, 'Create User', '2019-12-04 06:18:42'),
(16, 'Create User', '2019-12-04 07:01:38'),
(17, 'Create User', '2019-12-04 08:46:55'),
(18, 'Create User', '2019-12-05 11:30:16'),
(19, 'Create User', '2019-12-05 11:32:41'),
(20, 'Create User', '2019-12-05 11:35:15'),
(21, 'Create User', '2019-12-06 08:53:07'),
(22, 'Create User', '2019-12-06 09:06:31'),
(23, 'Create User', '2019-12-06 09:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `sekolah` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `skhun` varchar(30) NOT NULL,
  `nun` varchar(6) NOT NULL,
  `ipa` varchar(6) NOT NULL,
  `ind` varchar(6) NOT NULL,
  `mtk` varchar(6) NOT NULL,
  `eng` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nisn`, `username`, `email`, `password`, `sekolah`, `kota`, `hp`, `skhun`, `nun`, `ipa`, `ind`, `mtk`, `eng`) VALUES
(7, '9984711482', 'Ghannie Wijaya', 'ganiwijaya@live.com', '1234', 'SMP Negeri 8 Surakarta', 'Karanganyar', '087836284699', '123456789', '400', '100', '100', '100', '100'),
(8, '99847111481', 'Bayu', 'bayu@gmail.com', '1234', 'SMP Negeri 8 Surakarta', 'Surabaya', '087836284699', '123456789', '400', '100', '100', '100', '100'),
(9, '9984711483', 'Wahyu', 'wahyu@gmail.com', '1234', 'SMP Negeri 2 Karanganyar', 'Karanganyar', '087836284699', '123456789', '400', '100', '100', '100', '100'),
(10, '9984711484', 'Irfan Aliansyah', 'irfan@gmail.com', '1234', 'SMP Negeri 3 Surakarta', 'Surakarta', '087812341234', '123456789', '400', '100', '100', '100', '100'),
(11, '9984711485', 'Ghannie Wijaya', 'ganiwijaya@gmail.com', '1234', 'SMP Negeri 8 Surakarta', 'Karanganyar', '087836281199', '123123123', '400', '100', '100', '100', '100'),
(12, '119191', 'Abdul Aziz', 'abdulaziz@123.com', '123', 'smp 12 pku', 'karangayang', '1', 'sgdy', '300', '100', '100', '50', '50'),
(13, '19921', 'Aisyah Muswar', 'aisyahmuswar6@gmail.com', '123456', 'SMPN 1 Baubau', 'Baubau', '08123456789', '12131415', '400', '100', '100', '100', '100'),
(14, '8588373743', 'Irfan', 'irfan@live.com', '1234', 'SMP Negeri 1 Karanganyar', 'Karanganyar', '087836284699', '734737479', '400', '100', '100', '100', '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `perusahaan` (
  `id_per` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `pekerjaan` (
  `id_pek` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `id_per` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nrp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_per`),
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT COMMENT '';

ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pek`),
  MODIFY `id_pek` int(11) NOT NULL AUTO_INCREMENT COMMENT '',
  ADD KEY `id_per` (`id_per`),
  ADD KEY `id_mhs` (`id_mhs`),
  ADD CONSTRAINT `id_per` FOREIGN KEY (`id_per`) REFERENCES `perusahaan` (`id_per`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_mhs` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT COMMENT '';