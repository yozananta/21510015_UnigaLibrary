-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 03:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpusuniga`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_dosen`
--

CREATE TABLE `t_dosen` (
  `id_dosen` int(4) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_dosen`
--

INSERT INTO `t_dosen` (`id_dosen`, `nama_dosen`, `alamat`, `telepon`) VALUES
(1, 'Pak Gunduk', 'Didepan ', '085783920291'),
(2, 'Pak Slamet', 'Malang Melintang', '088163783945'),
(4, 'Bu Welehweleh', 'Jalanin Ajah', '089963819397'),
(14, 'Bu Anna', 'Adadeh', '089312390317'),
(15, 'Pak David', 'Malang', '087123913213');

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwalkuliah`
--

CREATE TABLE `t_jadwalkuliah` (
  `id_jadwal` int(4) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat') NOT NULL,
  `jam` time NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_jadwalkuliah`
--

INSERT INTO `t_jadwalkuliah` (`id_jadwal`, `hari`, `jam`, `id_matkul`, `id_dosen`) VALUES
(5, 'Senin', '12:00:00', 5, 4),
(10, 'Selasa', '12:00:00', 2, 15),
(11, 'Kamis', '08:00:00', 4, 14),
(12, 'Kamis', '08:00:00', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_jurusan`
--

CREATE TABLE `t_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_jurusan`
--

INSERT INTO `t_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'S1 - Sistem Informasi'),
(2, 'S1 - Informatika'),
(3, 'S1 - Akutansi'),
(4, 'S1 - Teknik Mesin'),
(5, 'S1 - Ilmu Komedi');

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nim` int(8) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `username` char(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`id_mahasiswa`, `nama`, `nim`, `alamat`, `username`, `password`, `id_jurusan`) VALUES
(1, 'Yozakha Kirnanta', 21510015, 'yozananta', 'yozananta', '1234', 4),
(3, 'Rudi Tabuti', 1931293, 'rudiii', 'rudiii', '42131', 3),
(4, 'Goni Gondrong G', 890123932, 'Goni12', 'Goni12', '312313', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_matakuliah`
--

CREATE TABLE `t_matakuliah` (
  `id_matkul` int(4) NOT NULL,
  `nama_matkul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_matakuliah`
--

INSERT INTO `t_matakuliah` (`id_matkul`, `nama_matkul`) VALUES
(2, 'Pemrograman Internet'),
(3, 'Algoritma'),
(4, 'Analisis Sistem Informasi'),
(5, 'Bahasa Inggris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `t_jadwalkuliah`
--
ALTER TABLE `t_jadwalkuliah`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_jurusan` (`id_matkul`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `t_matakuliah`
--
ALTER TABLE `t_matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_dosen`
--
ALTER TABLE `t_dosen`
  MODIFY `id_dosen` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_jadwalkuliah`
--
ALTER TABLE `t_jadwalkuliah`
  MODIFY `id_jadwal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_matakuliah`
--
ALTER TABLE `t_matakuliah`
  MODIFY `id_matkul` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_jadwalkuliah`
--
ALTER TABLE `t_jadwalkuliah`
  ADD CONSTRAINT `t_jadwalkuliah_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `t_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_jadwalkuliah_ibfk_3` FOREIGN KEY (`id_matkul`) REFERENCES `t_matakuliah` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD CONSTRAINT `t_mahasiswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `t_jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
