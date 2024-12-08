-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 08:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bapakos`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `kos_id` int(11) NOT NULL,
  `wifi` varchar(128) NOT NULL,
  `ac` varchar(12) NOT NULL,
  `kasur` varchar(12) NOT NULL,
  `dapur` varchar(12) NOT NULL,
  `kipas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `kos_id`, `wifi`, `ac`, `kasur`, `dapur`, `kipas`) VALUES
(1, 0, 'Ada', 'Ada', 'Ada', 'Ada', 'Ada'),
(2, 0, '-', '-', '-', '-', '-'),
(3, 0, 'ada', 'ada', 'ada', '-', 'ada'),
(4, 0, 'ada', 'ada', 'ada', '-', 'ada'),
(5, 0, '-', '-', 'ada', '-', 'ada'),
(6, 10, 'ada', 'ada', 'ada', '-', '-'),
(7, 11, '-', '-', '-', '-', 'ada'),
(8, 23, '-', 'ada', 'ada', '-', '-'),
(9, 25, '-', '-', 'ada', 'ada', 'ada'),
(10, 26, 'ada', 'ada', 'ada', 'ada', 'ada'),
(11, 27, 'ada', 'ada', 'ada', 'ada', 'ada'),
(12, 29, 'ada', 'ada', 'ada', 'ada', 'ada'),
(13, 28, 'ada', 'ada', 'ada', 'ada', 'ada'),
(14, 30, 'ada', 'ada', 'ada', 'ada', 'ada'),
(15, 31, 'ada', 'ada', 'ada', 'ada', 'ada'),
(19, 32, 'ada', 'ada', 'ada', 'ada', 'ada');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Putra'),
(2, 'Putri'),
(3, 'Campur');

-- --------------------------------------------------------

--
-- Table structure for table `kos`
--

CREATE TABLE `kos` (
  `id_kos` int(11) NOT NULL,
  `kategori` varchar(32) NOT NULL,
  `user_id` int(11) NOT NULL,
  `headline` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `tersedia` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kos`
--

INSERT INTO `kos` (`id_kos`, `kategori`, `user_id`, `headline`, `kota`, `alamat`, `harga`, `deskripsi`, `tersedia`, `gambar`) VALUES
(23, 'Putri', 16, 'Kost Murah | Terjangkau', 'Bekasi', 'Jalan nin aja duluuuuu', 500000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate totam esse voluptatum, consequatur quidem id quia sapiente quae unde ab dignissimos labore, vitae tenetur itaque fuga repellendus, ea eos porro?', 4, 'img1718375176.png'),
(25, 'Putri', 16, 'Kost Asikk Nihh | Mantapp', 'Brebes', 'jalan imam bonjol', 500000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nemo ex alias quae. Natus maiores non alias assumenda. Earum alias eligendi quasi vero, aperiam porro inventore minima expedita maiores quos?', 10, 'img1718809244.png'),
(26, 'Putri', 17, 'Kost Kost Apa Yang Kost', 'Brebes', 'bojong genteng', 300000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nemo ex alias quae. Natus maiores non alias assumenda. Earum alias eligendi quasi vero, aperiam porro inventore minima expedita maiores quos?', 3, 'img1718809435.png'),
(27, 'Putra', 16, 'Kost-Kosan Seribu Pintu', 'Brebes', 'dimana aja', 500000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nemo ex alias quae. Natus maiores non alias assumenda. Earum alias eligendi quasi vero, aperiam porro inventore minima expedita maiores quos?', 10, 'img1718809700.png'),
(28, 'Putra', 17, 'Ini Kost Apa Bukan Tebak', 'Brebes', 'bekasi', 300000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nemo ex alias quae. Natus maiores non alias assumenda. Earum alias eligendi quasi vero, aperiam porro inventore minima expedita maiores quos?', 10, 'img1718809988.png'),
(29, 'Putra', 16, 'Kost Yang Ke Berapa Inii', 'Brebes', 'dimana aja', 300000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aut sequi atque obcaecati cupiditate odit corrupti nemo aperiam ipsa porro soluta nihil fugiat repudiandae, delectus assumenda vero inventore, minima, laborum rerum vel? Deleniti sapiente enim', 3, 'img1718811969.png'),
(31, 'Campur', 16, 'Coba Kos Padil', 'Cibubur', 'bojong genteng', 300000, 'ljsdbfldfdjfblsdfbsljfbsdlfjdabflajldfbadjfjbabdfkjajdbfadjkjfbadfjabdfljdbfladfbadlfjjadbfladbfj', 10, 'img1719679999.png'),
(32, 'Putri', 16, 'Kos nyoba nihhh', 'Cilegon', 'tanggerang', 100000, 'asdnfnoqwfqwoucbwlicbweedicqend', 3, 'img1719734693.png'),
(33, 'Putri', 17, 'coba lagiiii', 'Brebes', 'brebes', 500000, 'xdfxzcxzssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 2, 'img1719738464.png');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'pemilik'),
(3, 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `harga` int(11) NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_user`, `id_kos`, `nama`, `email`, `alamat`, `no_hp`, `harga`, `lama_sewa`, `total_harga`) VALUES
(32, 13, 23, 'afillah ajie pratama', 'aji@gmail.com', 'bekasi', '085329843959', 500000, 2, 1000000),
(33, 13, 27, 'afillah ajie pratama', 'aji@gmail.com', 'tambun', '085329843959', 500000, 2, 1000000),
(34, 13, 27, 'afillah ajie pratama', 'aji@gmail.com', 'tambun', '085329843959', 500000, 2, 1000000),
(35, 13, 28, 'afillah ajie pratama', 'aji@gmail.com', 'Brebes', '08123456789', 300000, 2, 600000),
(36, 13, 25, 'afillah ajie pratama', 'aji@gmail.com', 'Cikarang', '085329843959', 500000, 3, 1500000),
(37, 14, 25, 'beni sujowo', 'benni@gmail.com', 'bojong genteng', '08123456789', 500000, 3, 1500000),
(38, 13, 26, 'afillah ajie pratama', 'aji@gmail.com', 'bekasi', '08123456789', 300000, 1, 300000),
(39, 13, 28, 'afillah ajie pratama', 'aji@gmail.com', 'bojong genteng', '08123456789', 300000, -1, -300000),
(40, 13, 28, 'afillah ajie pratama', 'aji@gmail.com', 'bojong genteng', '08123456789', 300000, 1, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `id_role` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `kota`, `jenis_kelamin`, `email`, `password`, `no_hp`, `id_role`, `is_active`, `gambar`, `tanggal_input`) VALUES
(13, 'afillah ajie pratama', '', 'Laki-Laki', 'aji@gmail.com', '$2y$10$cHd8qx6EeDoe.nIax3itOugc.h6oiHd8cGzPFFlIWfjPYgFbKuRJ2', '', 3, 1, 'default.jpg', 1719143231),
(14, 'beni sujowo', '', 'Laki-Laki', 'benni@gmail.com', '$2y$10$67ZJYjEqHC5xPwZvxjcYtuSDcxP7xrRgZvdHDRXqRUyHhbOVPt3/W', '', 1, 1, 'default.jpg', 1719593719),
(15, 'afillah ajie pratama', '', 'Laki-Laki', 'prtm@gmail.com', '$2y$10$MYhSAwkpaN0w5QhNn2Fdt..1fgI4GH7kbGhRdGK1ERP./HXtikskS', '', 3, 1, 'default.jpg', 1719679076),
(16, 'padil', '', 'Laki-Laki', 'padil@gmail.com', '$2y$10$n6pE2jYw7kXrNLcuWh4Eve7/qK7PLORP0P4edu2xMrAcIcICtVB.O', '', 2, 1, 'default.jpg', 1719679191),
(17, 'lana', '', 'Laki-Laki', 'lana@gmail.com', '$2y$10$O7Kx53MrW3sshePy25UZNeWrsfZ4eWaXM693K5coWSwIfgbcERdCC', '', 2, 1, 'default.jpg', 1719741191);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kos`
--
ALTER TABLE `kos`
  ADD PRIMARY KEY (`id_kos`),
  ADD KEY `id_user` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kos`
--
ALTER TABLE `kos`
  MODIFY `id_kos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
