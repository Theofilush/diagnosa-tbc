-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2019 pada 02.23
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

--
-- Dumping data untuk tabel `detail_konsultasi`
--

INSERT INTO `detail_konsultasi` (`id_konsultasi`, `id_gejala`) VALUES
('1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`) VALUES
('1', 'Paru - paru'),
('2', 'Getah Bening'),
('3', 'Payudara'),
('4', 'Tulang Belakang'),
('5', 'Kantung Kemih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(5) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `tgl_konsultasi` date NOT NULL,
  `hasil_konsultasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_pasien`, `tgl_konsultasi`, `hasil_konsultasi`) VALUES
(1, 1, '2019-12-13', 'TBC Getah Bening'),
(2, 1, '2019-12-13', 'TBC Getah Bening'),
(3, 1, '2019-12-13', 'TBC Getah Bening'),
(4, 1, '2019-12-13', 'TBC Getah Bening'),
(5, 1, '2019-12-13', 'TBC Getah Bening'),
(6, 1, '2019-12-13', 'TBC Getah Bening'),
(7, 1, '2019-12-13', 'TBC Getah Bening'),
(8, 1, '2019-12-13', 'TBC Tulang Belakang'),
(9, 1, '2019-12-13', 'TBC Tulang Belakang'),
(10, 1, '2019-12-13', 'TBC Tulang Belakang'),
(11, 7, '2019-12-13', 'TBC Tulang Belakang'),
(12, 7, '2019-12-13', 'TBC Tulang Belakang'),
(13, 1, '2019-12-13', 'TBC Tulang Belakang'),
(14, 1, '2019-12-13', 'TBC Tulang Belakang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_pertanyaan` varchar(5) NOT NULL,
  `jawaban` varchar(5) DEFAULT NULL,
  `iya` varchar(5) DEFAULT NULL,
  `tidak` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengetahuan`
--

INSERT INTO `pengetahuan` (`id_pertanyaan`, `jawaban`, `iya`, `tidak`) VALUES
('1', NULL, NULL, NULL),
('10', NULL, NULL, NULL),
('11', NULL, NULL, NULL),
('12', NULL, NULL, NULL),
('14', NULL, NULL, NULL),
('15', NULL, NULL, NULL),
('16', NULL, NULL, NULL),
('17', NULL, NULL, NULL),
('18', NULL, NULL, NULL),
('19', NULL, NULL, NULL),
('2', 'iya', NULL, NULL),
('20', NULL, NULL, NULL),
('21', NULL, NULL, NULL),
('22', NULL, NULL, NULL),
('23', NULL, NULL, NULL),
('24', NULL, NULL, NULL),
('25', NULL, NULL, NULL),
('26', NULL, NULL, NULL),
('27', NULL, NULL, NULL),
('28', NULL, NULL, NULL),
('29', NULL, NULL, NULL),
('3', 'iya', NULL, NULL),
('30', NULL, NULL, NULL),
('31', NULL, NULL, NULL),
('32', NULL, NULL, NULL),
('33', NULL, NULL, NULL),
('34', NULL, NULL, NULL),
('35', NULL, NULL, NULL),
('36', NULL, NULL, NULL),
('37', NULL, NULL, NULL),
('38', NULL, NULL, NULL),
('4', NULL, NULL, NULL),
('5', NULL, NULL, NULL),
('6', NULL, NULL, NULL),
('7', NULL, NULL, NULL),
('8', NULL, NULL, NULL),
('9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengetahuan2`
--

CREATE TABLE `pengetahuan2` (
  `id_konsultasi` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `r1` varchar(5) DEFAULT NULL,
  `r2` varchar(5) DEFAULT NULL,
  `r3` varchar(5) DEFAULT NULL,
  `r4` varchar(5) DEFAULT NULL,
  `r5` varchar(5) DEFAULT NULL,
  `r6` varchar(5) DEFAULT NULL,
  `r7` varchar(5) DEFAULT NULL,
  `r8` varchar(5) DEFAULT NULL,
  `r9` varchar(5) DEFAULT NULL,
  `r10` varchar(5) DEFAULT NULL,
  `r11` varchar(5) DEFAULT NULL,
  `r12` varchar(5) DEFAULT NULL,
  `r13` varchar(5) DEFAULT NULL,
  `r14` varchar(5) DEFAULT NULL,
  `r15` varchar(5) DEFAULT NULL,
  `r16` varchar(5) DEFAULT NULL,
  `r17` varchar(5) DEFAULT NULL,
  `r18` varchar(5) DEFAULT NULL,
  `r19` varchar(5) DEFAULT NULL,
  `r20` varchar(5) DEFAULT NULL,
  `r21` varchar(5) DEFAULT NULL,
  `r22` varchar(5) DEFAULT NULL,
  `r23` varchar(5) DEFAULT NULL,
  `r24` varchar(5) DEFAULT NULL,
  `r25` varchar(5) DEFAULT NULL,
  `r26` varchar(5) DEFAULT NULL,
  `r27` varchar(5) DEFAULT NULL,
  `r28` varchar(5) DEFAULT NULL,
  `r29` varchar(5) DEFAULT NULL,
  `r30` varchar(5) DEFAULT NULL,
  `r31` varchar(5) DEFAULT NULL,
  `r32` varchar(5) DEFAULT NULL,
  `r33` varchar(5) DEFAULT NULL,
  `r34` varchar(5) DEFAULT NULL,
  `r35` varchar(5) DEFAULT NULL,
  `r36` varchar(5) DEFAULT NULL,
  `r37` varchar(5) DEFAULT NULL,
  `r38` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengetahuan2`
--

INSERT INTO `pengetahuan2` (`id_konsultasi`, `id_user`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`, `r13`, `r14`, `r15`, `r16`, `r17`, `r18`, `r19`, `r20`, `r21`, `r22`, `r23`, `r24`, `r25`, `r26`, `r27`, `r28`, `r29`, `r30`, `r31`, `r32`, `r33`, `r34`, `r35`, `r36`, `r37`, `r38`) VALUES
(0, 7, NULL, 'iya', NULL, 'iya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'iya', NULL, NULL, NULL, 'iya', NULL, NULL, NULL, NULL, 'iya', 'iya', 'iya', NULL, NULL, 'iya', 'iya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'iya', NULL);

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
('1', '1', 'Apakah anda merasakan batuk terus-menerus selama tiga minggu/lebih?'),
('10', '1', 'Apakah anda merasakan rasa kurang enak badan / lemas?'),
('11', '1', 'Apakah anda mengalami berkeringat di malam hari walaupun tidak melakukan apa-apa?'),
('12', '2', 'Apakah Terdapat luka pada jaringan kulit atau kulit yang disebabkan pecahnya benjolan kelenjar getah bening?'),
('13', '2', 'Apakah benjolan pada kelenjar disekitar leher membesar?'),
('14', '2', 'Apakah Benjolan kelenjar mudah digerakkan?'),
('15', '2', 'Apakah Ada tanda-tanda radang di daerah sekitar benjolan kelenjar?'),
('16', '2', 'Apakah ada munculnya benjolan-benjolan yang terjadi pada bagian yang mengalami gangguan kelenjar seperti leher, sela paha, serta ketiak?'),
('17', '2', 'Apakah benjolan kelenjar pecah mengeluarkan cairan seperti nanah yang kotor?'),
('18', '2', 'Apakah Benjolan kelenjar timbul terasa kenyal?'),
('19', '3', 'Apakah ada tanda radang di sekitar benjolan yang timbul di payudara?'),
('2', '1', 'Apakah anda mengalami penurunan nafsu makan?'),
('20', '3', 'Apakah ada Rasa nyeri di bagian payudara?'),
('21', '3', 'Apakah ada benjolan di payudara?'),
('22', '4', 'Apakah terdapat timbulnya benjolan di bagian punggung/tulang belakang?'),
('23', '4', 'Apakah anda merasakan nyeri/sakit pada punggung berkurang bila anda beristirahat?'),
('24', '4', 'Apakah anda mengalami keterbatasan gerak?'),
('25', '4', 'Apakah Badan pegal-pegal desertai lelah pada sore hari?'),
('26', '4', 'Apakah ada Rasa nyeri/sakit pada bagian punggung atau mengalami kekakuan punggung?'),
('27', '4', 'Apakah anda  merasakan kesulitan menggerakkan punggung?'),
('28', '4', 'Apakah anda merasakan Tulang bengkak?'),
('29', '4', 'Apakah anda kesulitan untuk membungkuk atau mengangkat barang dari lantai?'),
('3', '1', 'Apakah anda merasakan nyeri dada?'),
('30', '4', 'Apakah anda merasakan nyeri pada persendian tulang?'),
('31', '4', 'Apakah terdapat kulit berwarna merah kebiruan?'),
('32', '4', 'Apakah kulit diatas daerah yang terkena terasa panas dan kadang dingin?'),
('33', '5', 'Apakah air kemih berubah warna?'),
('34', '5', 'Apakah air kemih anda berbau?'),
('35', '5', 'Apakah anda tidak dapat menahan kencing?'),
('36', '5', 'Apakah anda merasakan Nyeri perut / pinggang?'),
('37', '5', 'Apakah urin anda mengeluarkan darah?'),
('38', '5', 'Apakah anda merasakan nyeri sewaktu kencing?'),
('4', '1', 'Apakah anda mengalami sesak nafas?'),
('5', '1', 'Apakah demam yang anda rasakan tidak terlalu tinggi?'),
('6', '1', 'Apakah Demam yang anda rasakan berlangsung lama?'),
('7', '1', 'Apakah Dahak anda bercampur darah/batuk darah?'),
('8', '1', 'Apakah anda mengalami penurunan berat badan?'),
('9', '1', 'Apakah anda merasakan batuk berdahak tidak berhenti?');

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
(7, 'rio', 'rio a', 'd5ed38fdbf28bc4e58be142cf5a17cf5', 'pasien');

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
-- Indeks untuk tabel `pengetahuan2`
--
ALTER TABLE `pengetahuan2`
  ADD PRIMARY KEY (`id_konsultasi`);

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
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
