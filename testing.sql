-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2022 pada 14.11
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bilangan_acak`
--

CREATE TABLE `bilangan_acak` (
  `id_bilangan_acak` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bilangan_acak`
--

INSERT INTO `bilangan_acak` (`id_bilangan_acak`, `nilai`) VALUES
(1, 17),
(2, 91),
(3, 39),
(4, 14),
(5, 61),
(6, 36),
(7, 83),
(8, 58),
(9, 6),
(10, 80),
(11, 28),
(12, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penjualan`
--

CREATE TABLE `data_penjualan` (
  `id_dp` int(11) NOT NULL,
  `jenis_pupuk_id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `bulan` varchar(25) NOT NULL,
  `terjual` int(11) NOT NULL,
  `interval_awal` int(11) NOT NULL,
  `interval_akhir` int(11) NOT NULL,
  `bilangan_acak_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penjualan`
--

INSERT INTO `data_penjualan` (`id_dp`, `jenis_pupuk_id`, `tahun`, `bulan`, `terjual`, `interval_awal`, `interval_akhir`, `bilangan_acak_id`) VALUES
(1, 1, 2021, 'Januari', 151, 0, 12, 1),
(2, 1, 2021, 'Febuari', 123, 13, 22, 2),
(3, 1, 2021, 'Maret', 226, 23, 41, 3),
(4, 1, 2021, 'April', 185, 42, 56, 4),
(5, 1, 2021, 'Mei', 105, 57, 65, 5),
(6, 1, 2021, 'Juni', 205, 66, 82, 6),
(7, 1, 2021, 'Juli', 24, 83, 84, 7),
(8, 1, 2021, 'Agustus', 102, 85, 92, 8),
(9, 1, 2021, 'September', 100, 93, 100, 9),
(10, 2, 2021, 'Januari', 17, 0, 9, 1),
(11, 2, 2021, 'Febuari', 19, 10, 18, 2),
(12, 2, 2021, 'Maret', 26, 19, 31, 3),
(13, 2, 2021, 'April', 28, 32, 45, 4),
(14, 2, 2021, 'Mei', 20, 46, 56, 5),
(15, 2, 2021, 'Juni', 19, 57, 65, 6),
(16, 2, 2021, 'Juli', 43, 66, 87, 7),
(17, 2, 2021, 'Agustus', 12, 88, 93, 8),
(18, 2, 2021, 'September', 14, 94, 99, 9),
(19, 3, 2021, 'Januari', 50, 0, 18, 1),
(20, 3, 2021, 'Febuari', 44, 19, 34, 2),
(21, 3, 2021, 'Maret', 28, 35, 44, 3),
(22, 3, 2021, 'April', 32, 45, 55, 4),
(23, 3, 2021, 'Mei', 20, 56, 63, 5),
(24, 3, 2021, 'Juni', 30, 64, 73, 6),
(25, 3, 2021, 'Juli', 16, 74, 79, 7),
(26, 3, 2021, 'Agustus', 18, 80, 86, 8),
(27, 3, 2021, 'September', 40, 87, 99, 9),
(28, 4, 2021, 'Januari', 100, 0, 16, 1),
(29, 4, 2021, 'Febuari', 32, 17, 22, 2),
(30, 4, 2021, 'Maret', 96, 23, 37, 3),
(31, 4, 2021, 'April', 80, 38, 50, 4),
(32, 4, 2021, 'Mei', 78, 51, 63, 5),
(33, 4, 2021, 'Juni', 81, 64, 76, 6),
(34, 4, 2021, 'Juli', 32, 77, 82, 7),
(35, 4, 2021, 'Agustus', 50, 83, 90, 8),
(36, 4, 2021, 'September', 62, 91, 99, 9),
(37, 5, 2021, 'Januari', 23, 0, 8, 1),
(38, 5, 2021, 'Febuari', 32, 9, 18, 2),
(39, 5, 2021, 'Maret', 27, 19, 27, 3),
(40, 5, 2021, 'April', 16, 28, 32, 4),
(41, 5, 2021, 'Mei', 43, 33, 46, 5),
(42, 5, 2021, 'Juni', 37, 47, 58, 6),
(43, 5, 2021, 'Juli', 64, 59, 79, 7),
(44, 5, 2021, 'Agustus', 48, 80, 95, 8),
(45, 5, 2021, 'September', 15, 95, 99, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pupuk`
--

CREATE TABLE `jenis_pupuk` (
  `id_jenis_pupuk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_pupuk`
--

INSERT INTO `jenis_pupuk` (`id_jenis_pupuk`, `nama`, `satuan`, `harga`) VALUES
(1, 'UREA', 'Ton', 'Rp 1.800.000'),
(2, 'ZA', 'Ton', 'Rp 1.400.000'),
(3, 'SP-36', 'Ton', 'Rp 2.000.000'),
(4, 'PHONSKA', 'Ton', 'Rp 2.300.000'),
(5, 'PETROGANIK', 'Ton', 'Rp 500.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$BG0sJ1T2dE26m4xU.U51ruo.RTU4.IUGWoE8E0gKSFr9LTLP/LoFm', '2021-12-13 10:48:25', '2021-12-13 10:48:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bilangan_acak`
--
ALTER TABLE `bilangan_acak`
  ADD PRIMARY KEY (`id_bilangan_acak`);

--
-- Indeks untuk tabel `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD PRIMARY KEY (`id_dp`),
  ADD KEY `fk_data_penjualan` (`jenis_pupuk_id`),
  ADD KEY `fk_bilangan_acak` (`bilangan_acak_id`);

--
-- Indeks untuk tabel `jenis_pupuk`
--
ALTER TABLE `jenis_pupuk`
  ADD PRIMARY KEY (`id_jenis_pupuk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bilangan_acak`
--
ALTER TABLE `bilangan_acak`
  MODIFY `id_bilangan_acak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `data_penjualan`
--
ALTER TABLE `data_penjualan`
  MODIFY `id_dp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `jenis_pupuk`
--
ALTER TABLE `jenis_pupuk`
  MODIFY `id_jenis_pupuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD CONSTRAINT `fk_bilangan_acak` FOREIGN KEY (`bilangan_acak_id`) REFERENCES `bilangan_acak` (`id_bilangan_acak`),
  ADD CONSTRAINT `fk_data_penjualan` FOREIGN KEY (`jenis_pupuk_id`) REFERENCES `jenis_pupuk` (`id_jenis_pupuk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
