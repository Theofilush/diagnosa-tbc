-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2019 pada 11.05
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siditu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_konsultasi`
--

CREATE TABLE `detail_konsultasi` (
  `id_konsultasi` varchar(5) NOT NULL,
  `id_gejala` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(5) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `tgl_konsultasi` date NOT NULL,
  `hasil_konsultasi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_pertanyaan` varchar(5) NOT NULL,
  `iya` varchar(5) NOT NULL,
  `tidak` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` varchar(5) NOT NULL,
  `id_gejala` varchar(5) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `id_gejala`, `pertanyaan`) VALUES
('', '1', 'Apakah anda mengalami batuk terus-menerus selama tiga minggu/lebih ?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_users`
--

CREATE TABLE `t_users` (
  `id_user` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `author` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_users`
--

INSERT INTO `t_users` (`id_user`, `username`, `nama_lengkap`, `password`, `author`) VALUES
(1, 'admin', 'admin rio', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'ade', 'adeko', 'a562cfa07c2b1213b3a5c99b756fc206', 'pasien'),
(5, 'abi', 'abi', '19a9228dbbbe3b613190002e54dc3429', 'pasien'),
(6, 'abidi', 'abidi', '05702dac9abff5b13b767eef8e139792', 'pasien'),
(7, 'rio', 'rio', 'd5ed38fdbf28bc4e58be142cf5a17cf5', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_konsultasi`
--
ALTER TABLE `detail_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indeks untuk tabel `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indeks untuk tabel `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
