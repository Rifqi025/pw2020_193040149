-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 15.05
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040149`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Sandhika Galih', '043040023', 'sandhikagalih@unpas.ac.id', 'Teknik Informatika', 'sandhika.jpg'),
(2, 'Rifqi Muliawan', '193040149', '193040149@unpas.ac.id', 'Teknik Informatika', 'rifqi.jpg'),
(3, 'Kevin Fredrian Syach', '193040163', '193040163@unpas.ac.id', 'Teknik Informatika', 'kevin.jpg'),
(4, 'Aditia Gumelar', '191010120', 'gumelar01@gmail.com', 'Ekonomi', 'aditia.jpg'),
(5, 'Banu Reza', '192012134', 'banu122@gmail.com', 'Teknik Mesin', 'banu.jpg'),
(6, 'Nendi Rusyana', '192030123', 'nendi23@gmail.com', 'Akuntansi', 'nendi.jpg'),
(7, 'Dinar Megananda', '172342157', 'dinar97@gmail.com', 'Ekonomi', 'dinar.jpg'),
(8, 'Didin Wachyudin', '173845329', 'didinwach12@gmail.com', 'Teknik Pangan', 'didin.jpg'),
(9, 'Bayu Trisna', '193021897', 'bayu677@gmail.com', 'Teknik Industri', 'bayu.jpg'),
(10, 'Sugito Alejandro', '173996154', 'alejandro25@gmail.com', 'Teknik Sipil', 'sugito.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
