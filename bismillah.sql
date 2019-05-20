-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Apr 2019 pada 14.40
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bismillah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `email`, `admin`, `password`, `nohp`, `jk`, `ttl`, `alamat`, `username`) VALUES
(1, 'aliffiaklm@gmail.com', 1, '150798', '0895354240914', 'Perempuan', '2000-07-15', 'palimanan cirebon jl.arjuna no 15', 'aliffiakm'),
(2, 'amelia.isnanda17049@student.un', 0, '12345', '2142', 'Perempuan', '1996-08-10', 'perumnas-karawang jl.nakula rt/rw : 03/01', 'ameldinda'),
(3, 'babangsaepul@gmail.com', 0, '999666', '089535892', 'Laki-laki', '1999-01-02', 'jalan cagak purwakarta no153', 'babangoey'),
(4, 'edwardcullen@gmail.com', 0, '884422', '0821123452', 'Laki-laki', '1998-04-05', 'grand taruma karawang blok L no n11', 'erwardcullen'),
(5, 'hotmanparis@gmail.com', 0, '321321', '08211122211', 'Laki-laki', '1989-07-22', 'resinda karawang blok A no.1', 'hotmanparis'),
(7, 'ameldinda31@gmail.com', 0, '112233', '0895354240914', '', '2019-04-18', 'perumnas', 'amel'),
(8, 'samsul@gmail.com', 0, '54321', '082134567', 'Laki-laki', '1999-01-21', 'kemiri,karawang', 'sumsalll'),
(9, 'indahs096@gmail.com', 0, '123456789', '0899999999999', 'Perempuan', '1999-06-09', 'Bekasi', 'dheaindah'),
(10, 'dheaindah@gmail.com', 0, '123456', '08213465462363', 'Perempuan', '1999-06-09', 'bekasi', 'dheaindah9'),
(11, 'hambaallah@gmail.com', 0, '12345', '0812121221', 'Perempuan', '1998-07-09', 'karaba', 'bintang123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `shipping_from` varchar(15) NOT NULL,
  `initial_price` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sepatu`
--

INSERT INTO `sepatu` (`id`, `nama`, `color`, `size`, `kondisi`, `price`, `gambar`, `shipping_from`, `initial_price`) VALUES
(34, 'Nike LeBorn 16 \"Born Trainer\"', 'white', '41', 'new', '7299000', './uploads/6286e5cedec71550940bae9a90ca959342e51e4d.jpg', 'Jakarta', 0),
(35, 'Sankuanz X Converse', 'white-leopard', '39', 'Second', '9999000', './uploads/17678655879984889b833dd8ce3f049c7c0b9eae.jpg', 'Jakarta', 12099000),
(36, 'Adidas NMD Human Race', 'yellow', '42', 'Second', '16499000', './uploads/4067f4fea6ea213ced6bfbf0c66526fa90d2dac3.jpg', 'Jakarta', 22000000),
(37, 'Air Jordan 1 Union LA', 'Storm Blue', '43', 'Second', '13999000', './uploads/dd01ac1b590a0e8c9af0cfcf4f944f7602c9ba4f.jpg', 'Jakarta', 20000000),
(38, 'Balenciaga Triple S Brad ', 'BnW', '40', 'Second', '10299000', './uploads/73ede4d8a028f9174ac7410c8d8f87dd4027b751.jpg', 'Jakarta', 14000000),
(39, 'Adidas NMD Human Race Scarlet', 'red', '42', 'Second', '5999000', './uploads/681227603b3e0fea4a5aa3e35f0f99aa0e9041dd.jpg', 'Jakarta', 7000000),
(40, 'Gucci High- Top Crystal Studs', 'Magenta', '43', 'Second', '11499000', './uploads/3356fea1df93f1540b51bd8cc41f92c008dfde2f.jpg', 'Jakarta', 21000000),
(42, 'Adidas NMD Human Race red', 'red', '37', 'new', '70000000', './uploads/681227603b3e0fea4a5aa3e35f0f99aa0e9041dd.jpg', 'jkt', 0),
(43, 'nike jogger black', 'black', '39', 'Second', '2999000', './uploads/3cf1406ccd1461f33ef7bda566cf9c1fcd553184.jpg', 'jkt', 6899000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
