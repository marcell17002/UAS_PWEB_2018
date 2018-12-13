-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2018 at 11:47 PM
-- Server version: 10.1.29-MariaDB-6
-- PHP Version: 7.2.9-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mediakita`
--

-- --------------------------------------------------------

--
-- Table structure for table `Delegator`
--

CREATE TABLE `Delegator` (
  `npm` varchar(12) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL,
  `nama_univ` varchar(30) DEFAULT NULL,
  `kd_univ` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Delegator`
--

INSERT INTO `Delegator` (`npm`, `nama`, `email`, `no_telpon`, `nama_univ`, `kd_univ`, `username`, `password`) VALUES
('', 'baby', 'asdads', '123131', 'Universitas Padjadjaran', '140APD', 'bab', 'bab'),
('123123', 'alfin B', 'alfin@gmail.con', '12123123123', 'Universitas Padjadjaran', '140APD', 'alfin', 'alfin'),
('14081017001', 'Hanif Kontol', 'hanifkontol@gmail.com', '+62214045', 'Universitas Padjadjaran', '140APD', 'Hanif10', 'd489a3289ecdc847cb67'),
('140810170010', 'Sarah Hasna', 'sarah.hasna10@gmail.com', '+62896500199182', 'Universitas Indonesia', '140APD', 'sarah170010', 'sarlitbau'),
('140810170031', 'as', 'asd', 'qw', 'wqe', '140APD', 'asd', 'qw'),
('140810170034', 'Marcell Antonius', 'marcellantonius18@gmail.com', '0895401011469', 'Universitas Padjadjaran', '140APD', 'marc', 'marcell98');

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE `Event` (
  `id_event` varchar(10) NOT NULL,
  `npm_Delegator` varchar(12) DEFAULT NULL,
  `kategori_event` varchar(20) DEFAULT NULL,
  `judul_event` varchar(20) DEFAULT NULL,
  `Deskripsi_event` longtext,
  `image_event` varchar(60) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `no_rek` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Event`
--

INSERT INTO `Event` (`id_event`, `npm_Delegator`, `kategori_event`, `judul_event`, `Deskripsi_event`, `image_event`, `harga`, `stok`, `no_rek`) VALUES
('Blazt22835', '140810170034', 'Concert', 'Blazture x IFest 201', 'An Blazture Present with colaboration with Ifest 2019', 'blazture.jpg', 200000, 500, '1234 2323 12213'),
('I-Tal18866', '140810170034', 'Seminar', 'I-Talks Seminar 2018', 'Italks Seminar ', 'italks.jpg', 85000, 24, '12323 12323 123 '),
('Lomba54835', '140810170034', 'Concert', 'Lomba Intention', 'Lomba Kejurnas IT 2018 bergengsi ', 'technopreneur.jpg', 125000, 90, '111 2355 2112'),
('Mobil76079', '140810170034', 'Concert', 'Mobile Legend Cup ', 'Mobile legend cup olimpiade sebandung rya ', 'mluc.jpg', 89000, 50, '12333 232 1122'),
('Mural98803', '140810170034', 'Workshop', 'Mural FKG ', 'A Best perfomance of Mural FKG 2018 Presentassiojn', 'mural.jpg', 150000, 200, '1122 68923 121'),
('test75814', '', 'Concert', 'test', 'ytwtgeihwi', 'uns.jpg', 50000, 20, '1231312');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE `News` (
  `id_news` varchar(10) NOT NULL,
  `kd_npm_Delegator` varchar(12) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `judul` varchar(20) DEFAULT NULL,
  `Deskripsi` longtext,
  `image` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`id_news`, `kd_npm_Delegator`, `kategori`, `judul`, `Deskripsi`, `image`) VALUES
('Krisi57549', '123123', 'Ekonomi', 'Krisis Kekurangan SU', 'asdasdassd', 'satu.jpg'),
('Maba 15364', '140810170034', 'Sport', 'Maba Cup Se Indonesi', 'menang beruntun mebantai tetangga sebelah UPI', 'image1.jpeg'),
('Mahas77177', NULL, 'Sains and Social', 'Mahasiswa Lomba ITS', 'Mahasiswa Meraih juaara di lomba nasional ITS', 'uns.jpg'),
('Tidak94238', '140810170034', 'Sains and Social', 'Tidak Pantang mundur', 'Mahasiswa UIN unjuk rasa tidak kenal lelah untuk menunjukan rasa solidarirtas ', 'new1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Transaksi`
--

CREATE TABLE `Transaksi` (
  `kd_Transaksi` varchar(10) NOT NULL,
  `ID_Event` varchar(10) DEFAULT NULL,
  `nama_pembeli` varchar(20) DEFAULT NULL,
  `no_identitas` varchar(20) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email_pembeli` varchar(20) DEFAULT NULL,
  `jumlah_tiket` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Transaksi`
--

INSERT INTO `Transaksi` (`kd_Transaksi`, `ID_Event`, `nama_pembeli`, `no_identitas`, `telp`, `email_pembeli`, `jumlah_tiket`) VALUES
('325825', 'Blazt22835', '1', '1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Universitas`
--

CREATE TABLE `Universitas` (
  `kode_univ` varchar(10) NOT NULL,
  `nama_univ` varchar(30) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat_univ` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Universitas`
--

INSERT INTO `Universitas` (`kode_univ`, `nama_univ`, `no_telp`, `alamat_univ`) VALUES
('140APD', 'Universitas Padjadjaran', '60757523', 'Jl. Raya Jatinangor . Sumedang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Delegator`
--
ALTER TABLE `Delegator`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `kd_univ` (`kd_univ`);

--
-- Indexes for table `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `npm_Delegator` (`npm_Delegator`);

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `kd_npm_Delegator` (`kd_npm_Delegator`);

--
-- Indexes for table `Transaksi`
--
ALTER TABLE `Transaksi`
  ADD PRIMARY KEY (`kd_Transaksi`),
  ADD KEY `ID_Event` (`ID_Event`);

--
-- Indexes for table `Universitas`
--
ALTER TABLE `Universitas`
  ADD PRIMARY KEY (`kode_univ`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Delegator`
--
ALTER TABLE `Delegator`
  ADD CONSTRAINT `Delegator_ibfk_1` FOREIGN KEY (`kd_univ`) REFERENCES `Universitas` (`kode_univ`);

--
-- Constraints for table `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `Event_ibfk_1` FOREIGN KEY (`npm_Delegator`) REFERENCES `Delegator` (`npm`);

--
-- Constraints for table `News`
--
ALTER TABLE `News`
  ADD CONSTRAINT `News_ibfk_1` FOREIGN KEY (`kd_npm_Delegator`) REFERENCES `Delegator` (`npm`);

--
-- Constraints for table `Transaksi`
--
ALTER TABLE `Transaksi`
  ADD CONSTRAINT `Transaksi_ibfk_1` FOREIGN KEY (`ID_Event`) REFERENCES `Event` (`id_event`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
