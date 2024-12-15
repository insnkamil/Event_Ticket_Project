-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Agu 2023 pada 15.22
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiket_kereta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan_tiket`
--

CREATE TABLE `tb_pemesanan_tiket` (
  `id_pemesan` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomer_identitas` bigint(16) DEFAULT NULL,
  `no_hp` bigint(13) DEFAULT NULL,
  `tempat_tujuan` varchar(50) DEFAULT NULL,
  `tanggal_kunjungan` date DEFAULT NULL,
  `pengunjung_dewasa` int(4) DEFAULT NULL,
  `pengunjung_anakanak` int(4) DEFAULT NULL,
  `harga_tiket` int(16) DEFAULT NULL,
  `total_bayar` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
