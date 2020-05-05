-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2020 pada 16.50
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
-- Database: `tubes_193040149`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_musik`
--

CREATE TABLE `alat_musik` (
  `kode_barang` int(11) NOT NULL,
  `foto` char(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `merk_barang` char(15) COLLATE utf8mb4_swedish_ci NOT NULL,
  `jns_barang` char(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `bhn_dsr_barang` char(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `harga_barang` char(20) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data untuk tabel `alat_musik`
--

INSERT INTO `alat_musik` (`kode_barang`, `foto`, `merk_barang`, `jns_barang`, `bhn_dsr_barang`, `harga_barang`) VALUES
(1, 'gitar.jpg', 'Epiphore', 'Semi-Akustik', 'Kayu Maple', 'Rp.7.800.000'),
(2, 'bass.jpg', 'Fender', 'Bass Electric', 'Kayu Alder', 'Rp.12.000.000'),
(3, 'drum.jpg', 'Tama', 'Rockstar', 'Plywood', 'Rp.8.500.000'),
(4, 'piano.jpg', 'Roland', 'Piano Electric', 'Kayu cemara sitka', 'Rp.8.000.000'),
(5, 'electric.jpg', 'Ibanez', 'Gitar Electric', 'Kayu Alder', 'Rp.14.500.000'),
(6, 'biola.jpg', 'Skylark', 'Cello', 'Kayu Maple', 'Rp.2.000.000'),
(7, 'terompet.jpg', 'Stagg', 'C', 'Logam', 'Rp.3.000.000'),
(8, 'saxophone.jpg', 'Yamaha', 'Tenor', 'Logam', 'Rp.3.500.000'),
(9, 'harmonika.jpg', 'Fender', 'Tremblo', 'Alumunium', 'Rp.1.700.000'),
(10, 'clarinet.jpg', 'Moresky', 'Suprano A', 'Logam', 'Rp.1.700.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'rifqi', '$2y$10$GONXnWMR1rvWmerskAISLe9THvWFHkmrSADtGtH0o/S2BSe/2lo0.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
