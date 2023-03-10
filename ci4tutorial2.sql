-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Mar 2023 pada 06.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4tutorial2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelpembeli`
--

CREATE TABLE `tabelpembeli` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomer` int(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `barang` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabelpembeli`
--

INSERT INTO `tabelpembeli` (`id`, `nama`, `nomer`, `email`, `barang`, `alamat`) VALUES
(1, 'yusril', 809123, 'ysril@co.id', 'gayunggg', 'sumobito'),
(2, 'dandi', 7312832, 'dndi@email.com', 'sepatu', 'ngantang'),
(3, 'anto', 9769882, 'ant@af', 'panci', 'pandean kulon');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabelpembeli`
--
ALTER TABLE `tabelpembeli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabelpembeli`
--
ALTER TABLE `tabelpembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
