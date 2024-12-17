-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2024 pada 15.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_peserta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_peserta_bc`
--

CREATE TABLE `calon_peserta_bc` (
  `id` int(200) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `no_telepon` varchar(16) NOT NULL,
  `bootcamp` varchar(64) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `calon_peserta_bc`
--

INSERT INTO `calon_peserta_bc` (`id`, `nama`, `email`, `no_telepon`, `bootcamp`, `foto`) VALUES
(3, 'ardy', '5053231025@student.its.ac.id', '+6282155288491', 'Web Development', '16122024154142_Gambar WhatsApp 2024-10-25 pukul 18.32.54_6ebcfa15.jpg'),
(4, 'Vestia Zeta ', 'zetameow31@gmail.com', '+6281934656363', 'UI/UX Design', '16122024114747_person.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `pwd` varchar(64) NOT NULL,
  `level` int(1) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `pwd`, `level`, `nama`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Admin', 'rusdi98@gmail.com'),
(2, 'member', 'aa08769cdcb26674c6706093503ff0a3', 2, 'Member ', 'rehan90@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_peserta_bc`
--
ALTER TABLE `calon_peserta_bc`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_peserta_bc`
--
ALTER TABLE `calon_peserta_bc`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
