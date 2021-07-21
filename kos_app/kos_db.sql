-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 05:01 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `nama_admin` varchar(200) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(200) NOT NULL,
  `nohp` varchar(200) NOT NULL,
  `alamat_admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `status`, `nohp`, `alamat_admin`) VALUES
(1, 'Rochmatiningsih', 'Rochma', '12345', 'Mahasiswa', '087757124581', 'Jl. Mastrip Sumbersari'),
(3, 'Pemilik', 'Pemilik', '12345', 'Karyawan', '081234567890', 'Jl. Mastrip Sumbersari');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(5) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `gambar_fasilitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `gambar_fasilitas`) VALUES
(1, 'Kamar Mandi Luar', '1626876324.jpg'),
(2, 'Kamar Mandi Dalam', '1626876365.jpg'),
(3, 'Wi-Fi', '1626876391.jpg'),
(4, 'Dapur', '1626876416.jpg'),
(5, 'Kulkas ', '1626876451.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hunian`
--

CREATE TABLE `hunian` (
  `id_hunian` int(15) NOT NULL,
  `nama_hunian` varchar(100) NOT NULL,
  `jenis_hunian` varchar(100) NOT NULL,
  `deskripsi_hunian` text NOT NULL,
  `status_hunian` varchar(100) NOT NULL,
  `harga_hunian` int(15) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hunian`
--

INSERT INTO `hunian` (`id_hunian`, `nama_hunian`, `jenis_hunian`, `deskripsi_hunian`, `status_hunian`, `harga_hunian`, `alamat`, `gambar`) VALUES
(14, 'Kamar A01', 'Ukuran 3x3', '1 ranjang tidur, 1 meja belajar, 1 lemari, kamar mandi', 'Tersedia', 400000, 'Perumahan Mastrip Blok S 14', '1626877171.jpeg'),
(16, 'Kamar A02', 'Ukuran 3x4', '1 ranjang tidur, 1 meja belajar, 1 lemari, kamar mandi', 'Tidak Tersedia', 400000, 'Perumahan Mastrip Blok S 14', '1626877246.jpeg'),
(17, 'Kamar B01', 'Ukuran 3x3', '1 ranjang tidur, 1 meja belajar, 1 lemari', 'Tidak Tersedia', 350000, 'Perumahan Mastrip Blok S 14', '1612246739.jpg'),
(18, 'Kamar B02', 'Ukuran 3x3', '1 ranjang tidur, 1 meja belajar, 1 lemari', 'Tersedia', 350000, 'Perumahan Mastrip Blok S 14', '1612246755.jpg'),
(19, 'Kamar C01', 'Ukuran 3x3', '1 ranjang tidur, 1 lemari', 'Tidak Tersedia', 300000, 'Perumahan Mastrip Blok S 14', '1626877418.jpeg'),
(20, 'Kamar C02', 'Ukuran 3x3', '1 ranjang tidur,  1 lemari', 'Tersedia', 300000, 'Perumahan Mastrip Blok S 14', '1626877457.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `no_rekening` int(11) NOT NULL,
  `gambar_pemilik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_kontak`, `alamat`, `email`, `no_telepon`, `no_rekening`, `gambar_pemilik`) VALUES
(2, 'Rochma', 'Jember', 'Rochma@gmail.com', 82337890, 289800900, 'pemilik.png');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(15) NOT NULL,
  `nama_member` varchar(200) NOT NULL,
  `pass_member` varchar(200) NOT NULL,
  `email_member` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `nohp` varchar(200) NOT NULL,
  `alamat_member` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `pass_member`, `email_member`, `status`, `nohp`, `alamat_member`) VALUES
(13, 'Rochmatiningsih', '12345', 'rochma@gmail.com', 'mahasiswa', '092878930', 'Probolinggo'),
(16, 'Ravita Agustia', '12345', 'ravitaagustia@gmail.com', 'mahasiswa', '087757124581', 'Candipuro, Lumajang'),
(18, 'Agus Ardiansyah', '12345', 'agus@gmail.com', 'mahasiswa', '08978987', 'Tuban'),
(19, 'Cantika Dewi', '12345', 'cantika@gmail.com', 'mahasiswa', '089789000', 'Madura'),
(20, 'Cantika Dewi M', '12345', 'cantika@gmail.com', 'mahasiswa', '0892768999', 'madura'),
(21, 'Aini ', '12345', 'aini@gmail.com', 'mahasiswa', '09897389999', 'lumajang');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(15) NOT NULL,
  `id_hunian` int(15) NOT NULL,
  `id_member` int(15) NOT NULL,
  `tanggal_mulai` varchar(100) NOT NULL,
  `durasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_hunian`, `id_member`, `tanggal_mulai`, `durasi`) VALUES
(18, 16, 13, '2020-12-11', '3 Bulan'),
(19, 17, 13, '2020-12-02', '1 Bulan'),
(20, 16, 13, '2020-12-02', '3 Bulan'),
(21, 14, 19, '2021-02-06', '3 Bulan'),
(22, 20, 13, '2021-07-19', '6 Bulan'),
(23, 20, 21, '2021-07-21', '1 Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(15) NOT NULL,
  `id_member` int(15) NOT NULL,
  `id_hunian` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_member`, `id_hunian`, `tanggal`, `nominal`, `gambar`, `status`, `bulan`) VALUES
(2, 13, 16, '2020-12-05', '400000', '1612247403.jpg', 'LUNAS', 'desember'),
(3, 13, 16, '2020-12-03', '400000', '1612247403.jpg', 'LUNAS', 'desember'),
(6, 21, 20, '2021-07-21', '300000', '1626878229.jpg', 'LUNAS', 'Juli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `hunian`
--
ALTER TABLE `hunian`
  ADD PRIMARY KEY (`id_hunian`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_hunian` (`id_hunian`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_hunian_2` (`id_hunian`,`id_member`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_member` (`id_member`,`id_hunian`),
  ADD KEY `id_hunian` (`id_hunian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hunian`
--
ALTER TABLE `hunian`
  MODIFY `id_hunian` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_hunian`) REFERENCES `hunian` (`id_hunian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`id_hunian`) REFERENCES `hunian` (`id_hunian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
