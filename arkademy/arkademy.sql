-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Sep 2019 pada 14.37
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkademy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Kategori`
--

CREATE TABLE `Kategori` (
  `id_salary` int(3) NOT NULL,
  `salary` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `Kategori`
--

INSERT INTO `Kategori` (`id_salary`, `salary`) VALUES
(1, 10000000),
(2, 12000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `Name`
--

CREATE TABLE `Name` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_work` int(3) NOT NULL,
  `id_salary` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `Name`
--

INSERT INTO `Name` (`id`, `name`, `id_work`, `id_salary`) VALUES
(1, 'Rebecca', 1, 1),
(2, 'Vita', 2, 2),
(4, 'ss', 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `Work`
--

CREATE TABLE `Work` (
  `id_work` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_salary` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `Work`
--

INSERT INTO `Work` (`id_work`, `name`, `id_salary`) VALUES
(1, 'Frontend Dev', 1),
(2, 'Backend Dev', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Kategori`
--
ALTER TABLE `Kategori`
  ADD PRIMARY KEY (`id_salary`);

--
-- Indeks untuk tabel `Name`
--
ALTER TABLE `Name`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Work`
--
ALTER TABLE `Work`
  ADD PRIMARY KEY (`id_work`),
  ADD KEY `id_salary` (`id_salary`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Kategori`
--
ALTER TABLE `Kategori`
  MODIFY `id_salary` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `Name`
--
ALTER TABLE `Name`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `Work`
--
ALTER TABLE `Work`
  MODIFY `id_work` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
