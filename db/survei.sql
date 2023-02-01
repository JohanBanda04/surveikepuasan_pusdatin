-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Feb 2020 pada 07.29
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survei`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `respon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `tanggal`, `respon`) VALUES
(1, '2016-07-02', 1),
(2, '2016-07-02', 2),
(3, '2016-07-02', 3),
(4, '2016-07-02', 2),
(5, '2016-07-02', 2),
(6, '2016-07-03', 1),
(7, '2016-07-03', 1),
(8, '2016-07-03', 2),
(9, '2016-07-03', 2),
(10, '2016-07-03', 3),
(11, '2016-07-03', 1),
(12, '2016-07-03', 2),
(13, '2016-07-03', 3),
(14, '2016-07-04', 2),
(15, '2016-07-04', 3),
(16, '2016-07-04', 1),
(17, '2016-07-04', 2),
(18, '2016-07-04', 3),
(19, '2016-07-04', 2),
(20, '2016-07-04', 1),
(21, '2016-07-04', 2),
(22, '2016-07-05', 1),
(23, '2016-07-05', 2),
(24, '2016-07-05', 3),
(25, '2016-07-05', 1),
(26, '2016-07-05', 3),
(27, '2016-07-05', 1),
(28, '2016-07-05', 1),
(29, '2016-07-05', 1),
(30, '2016-07-05', 1),
(31, '2016-07-05', 2),
(32, '2016-07-05', 2),
(33, '2016-07-05', 3),
(34, '2016-07-05', 1),
(35, '2016-07-05', 1),
(36, '2016-07-05', 2),
(37, '2016-07-05', 3),
(38, '2016-07-05', 3),
(39, '2016-07-05', 3),
(40, '2016-07-05', 1),
(41, '2016-07-05', 1),
(42, '2020-02-07', 1),
(43, '2020-02-07', 2),
(44, '2020-02-07', 3),
(45, '2020-02-07', 2),
(46, '2020-02-07', 1),
(47, '2020-02-07', 3),
(48, '2020-02-07', 2),
(49, '2020-02-07', 2),
(50, '2020-02-07', 1),
(51, '2020-02-07', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
