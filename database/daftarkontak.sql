-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2023 pada 11.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftarkontak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftarkontak`
--

CREATE TABLE `tb_daftarkontak` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_daftarkontak`
--

INSERT INTO `tb_daftarkontak` (`id`, `nama`, `nohp`, `jenis`, `status`) VALUES
(8, 'jon', '112635364572', 'Luar Negeri', 'Tidak Aktif'),
(14, 'aksay', '086574363423', 'Telkomsel', 'Aktif'),
(15, 'william', '1157736354', 'Luar Negeri', 'Tidak Aktif'),
(16, 'rana', '08574634233', 'XL', 'Aktif'),
(17, 'Hendri', '085637243253', 'Tri', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Admin','Operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Hendri', 'Hendri', '1234', 'Admin'),
(2, 'Aksay', 'Aksay', '1234', 'Operator'),
(4, 'Rana', 'Rana', '1235', 'Admin'),
(6, 'Fajar', 'Fajar', '12345', 'Operator'),
(7, 'william', 'will', '1234', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_daftarkontak`
--
ALTER TABLE `tb_daftarkontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_daftarkontak`
--
ALTER TABLE `tb_daftarkontak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
