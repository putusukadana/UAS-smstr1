-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2022 pada 06.11
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `KodeDosen` int(11) NOT NULL,
  `NamaDosen` varchar(100) NOT NULL,
  `JK` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`KodeDosen`, `NamaDosen`, `JK`, `Jurusan`) VALUES
(4124412, 'wawan', 'L', 'SK'),
(55585655, 'ajeng', 'P', 'MTI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `iduser` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`iduser`, `username`, `Password`) VALUES
(1, 'asep', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `KodeMatakuliah` int(20) NOT NULL,
  `NamaMatakuliah` varchar(100) NOT NULL,
  `Jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`KodeMatakuliah`, `NamaMatakuliah`, `Jurusan`) VALUES
(898, 'ooad', 'MTI'),
(78738, 'BISNIS', 'MTI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `NIM` int(10) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `JURUSAN` varchar(50) NOT NULL,
  `JK` varchar(100) NOT NULL,
  `TGLLAHIR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`NIM`, `NAMA`, `JURUSAN`, `JK`, `TGLLAHIR`) VALUES
(745464, 'angun', 'MTI', 'P', '2022-06-03'),
(3213123, 'fandi', 'SK', 'L', '2022-06-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk`
--

CREATE TABLE `mk` (
  `KODE_MK` int(10) NOT NULL,
  `MATAKULIAH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mk`
--

INSERT INTO `mk` (`KODE_MK`, `MATAKULIAH`) VALUES
(124, 'ebisnis');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `mk`
--
ALTER TABLE `mk`
  ADD PRIMARY KEY (`KODE_MK`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
