-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 03:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ngilmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mapel`
--

CREATE TABLE `tabel_mapel` (
  `id_mapel` int(11) NOT NULL,
  `mata_pelajaran` varchar(30) NOT NULL,
  `jenjang` enum('SD','SMP','SMA/SMK/MA','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_mapel`
--

INSERT INTO `tabel_mapel` (`id_mapel`, `mata_pelajaran`, `jenjang`) VALUES
(1, 'Matematika', 'SMA/SMK/MA');

-- --------------------------------------------------------

--
-- Table structure for table `trans_pemesanan`
--

CREATE TABLE `trans_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tutor` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_pemesanan`
--

INSERT INTO `trans_pemesanan` (`id_pemesanan`, `id_user`, `id_tutor`, `id_mapel`, `tgl_pemesanan`) VALUES
(1, 1, 1, 1, '2021-12-01'),
(8, 3, 1, 1, '2021-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id_admin` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `email`, `password`, `nama_lengkap`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin satu'),
(2, 'veda@gmail.com', '123', 'veda'),
(3, 'nadira@gmail.com', '123', 'nadira'),
(19, 'luki12@gmail.com', '12345', 'lukidp'),
(20, 'veda@gmail.com', 'veda', 'Veda Nadira');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `gender` enum('Perempuan','Laki-Laki','','') NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user`, `email`, `password`, `fullname`, `grade`, `gender`, `alamat`) VALUES
(1, 'veda@gmail.com', '123', 'veda', 'XII', 'Perempuan', 'Jember'),
(3, 'sifka@gmail.com', '123', 'sifka', 'X', 'Perempuan', 'Jember'),
(6, 'naufal@gmail.com', '213', 'naufal', 'XI', 'Laki-Laki', 'Jember'),
(7, 'lukidp@gmail.com', '112', 'luki', 'X', 'Perempuan', 'Banyuwangi'),
(11, 'daffa@gmail.com', '321', 'daffa', 'XII', 'Laki-Laki', 'Lumajang');

-- --------------------------------------------------------

--
-- Table structure for table `user_tutor`
--

CREATE TABLE `user_tutor` (
  `id_tutor` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname_tutor` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gender` enum('Perempuan','Laki-Laki','','') NOT NULL,
  `no_telp` int(30) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tutor`
--

INSERT INTO `user_tutor` (`id_tutor`, `email`, `password`, `fullname_tutor`, `instansi`, `alamat`, `gender`, `no_telp`, `tgl_lahir`) VALUES
(1, 'alex@gmail.com', '123', 'Alex', 'Politeknik Negeri Jember', 'Jember', 'Laki-Laki', 891233344, '2001-08-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `trans_pemesanan`
--
ALTER TABLE `trans_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_tutor` (`id_tutor`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_tutor`
--
ALTER TABLE `user_tutor`
  ADD PRIMARY KEY (`id_tutor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trans_pemesanan`
--
ALTER TABLE `trans_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_admin` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_tutor`
--
ALTER TABLE `user_tutor`
  MODIFY `id_tutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trans_pemesanan`
--
ALTER TABLE `trans_pemesanan`
  ADD CONSTRAINT `trans_pemesanan_ibfk_1` FOREIGN KEY (`id_tutor`) REFERENCES `user_tutor` (`id_tutor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trans_pemesanan_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `tabel_mapel` (`id_mapel`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `trans_pemesanan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
