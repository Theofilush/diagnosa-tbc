-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Des 2019 pada 13.38
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(5) NOT NULL,
  `id_gejala` varchar(5) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `id_gejala`, `pertanyaan`) VALUES
(1, '1', 'Apakah anda merasakan batuk terus-menerus selama tiga minggu/lebih?'),
(2, '1', 'Apakah anda merasakan batuk berdahak tidak berhenti?'),
(3, '1', 'Apakah Dahak anda bercampur darah/batuk darah?'),
(4, '1', 'Apakah Demam yang anda rasakan berlangsung lama?'),
(5, '1', 'Apakah demam yang anda rasakan tidak terlalu tinggi?'),
(6, '1', 'Apakah anda mengalami sesak nafas?'),
(7, '1', 'Apakah anda merasakan nyeri dada?'),
(8, '1', 'Apakah anda mengalami penurunan nafsu makan?'),
(9, '1', 'Apakah anda mengalami penurunan berat badan?'),
(10, '1', 'Apakah anda merasakan rasa kurang enak badan / lemas?'),
(11, '1', 'Apakah anda mengalami berkeringat di malam hari walaupun tidak melakukan apa-apa?'),
(12, '2', 'Apakah ada munculnya benjolan-benjolan yang terjadi pada bagian yang mengalami gangguan kelenjar seperti leher, sela paha, serta ketiak?'),
(13, '2', 'Apakah Ada tanda-tanda radang di daerah sekitar benjolan kelenjar?'),
(14, '2', 'Apakah Benjolan kelenjar mudah digerakkan?'),
(15, '2', 'Apakah Benjolan kelenjar timbul terasa kenyal?'),
(16, '2', 'Apakah benjolan pada kelenjar disekitar leher membesar?'),
(17, '2', 'Apakah benjolan kelenjar pecah mengeluarkan cairan seperti nanah yang kotor?'),
(18, '2', 'Apakah Terdapat luka pada jaringan kulit atau kulit yang disebabkan pecahnya benjolan kelenjar getah bening?'),
(19, '3', 'Apakah ada benjolan di payudara?'),
(20, '3', 'Apakah ada Rasa nyeri di bagian payudara?'),
(21, '3', 'Apakah ada tanda radang di sekitar benjolan yang timbul di payudara?'),
(22, '4', 'Apakah ada Rasa nyeri/sakit pada bagian punggung atau mengalami kekakuan punggung?'),
(23, '4', 'Apakah anda  merasakan kesulitan menggerakkan punggung?'),
(24, '4', 'Apakah anda merasakan Tulang bengkak?'),
(25, '4', 'Apakah anda kesulitan untuk membungkuk atau mengangkat barang dari lantai?'),
(26, '4', 'Apakah anda merasakan nyeri pada persendian tulang?'),
(27, '4', 'Apakah terdapat kulit berwarna merah kebiruan?'),
(28, '4', 'Apakah kulit diatas daerah yang terkena terasa panas dan kadang dingin?'),
(29, '4', 'Apakah Badan pegal-pegal desertai lelah pada sore hari?'),
(30, '4', 'Apakah anda mengalami keterbatasan gerak?'),
(31, '4', 'Apakah anda merasakan nyeri/sakit pada punggung berkurang bila anda beristirahat?'),
(32, '4', 'Apakah terdapat timbulnya benjolan di bagian punggung/tulang belakang?'),
(33, '5', 'Apakah urin anda mengeluarkan darah?'),
(34, '5', 'Apakah anda merasakan Nyeri perut / pinggang?'),
(35, '5', 'Apakah anda tidak dapat menahan kencing?'),
(36, '5', 'Apakah air kemih anda berbau?'),
(37, '5', 'Apakah air kemih berubah warna?'),
(38, '5', 'Apakah anda merasakan nyeri sewaktu kencing?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
