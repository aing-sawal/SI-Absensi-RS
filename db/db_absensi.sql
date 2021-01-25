-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2021 pada 10.12
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `divisi` enum('Dokter','Perawat','Administrasi','Tenaga Pendukung') NOT NULL,
  `tgl_absen` date NOT NULL,
  `waktu_masuk` time NOT NULL,
  `waktu_keluar` time NOT NULL,
  `ket` enum('Hadir','Tidak Hadir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`id`, `nama`, `divisi`, `tgl_absen`, `waktu_masuk`, `waktu_keluar`, `ket`) VALUES
(7, 'Vicky Rizki Ray', 'Administrasi', '2021-01-11', '08:00:00', '17:00:00', 'Hadir'),
(8, 'Ayu Sri Wahyuni', 'Tenaga Pendukung', '2021-01-01', '08:00:00', '17:00:00', 'Hadir'),
(9, 'Jenny Ardinda', 'Tenaga Pendukung', '2021-01-01', '08:00:00', '17:00:00', 'Hadir'),
(10, 'Senja Pratiwi', 'Tenaga Pendukung', '2021-01-01', '08:00:00', '17:00:00', 'Hadir'),
(11, 'Hendra Prasmana', 'Tenaga Pendukung', '2021-01-01', '08:00:00', '17:00:00', 'Hadir'),
(12, 'Vivi Ardiani', 'Tenaga Pendukung', '2021-01-01', '08:00:00', '17:00:00', 'Hadir'),
(13, 'Yati Purwasih', 'Tenaga Pendukung', '2021-01-01', '08:00:00', '17:00:00', 'Hadir'),
(14, 'Syaiful Zuhri Sihombing, AMK', 'Perawat', '2021-01-01', '08:00:00', '17:00:00', 'Hadir'),
(15, 'M.Amri Samosir, AMK', 'Perawat', '2021-01-01', '08:00:00', '17:00:00', 'Hadir'),
(16, 'Muslim, AMK', 'Perawat', '2021-01-01', '14:00:00', '20:00:00', 'Hadir'),
(17, 'Mhd.Safrizal, AMK', 'Perawat', '2021-01-01', '20:00:00', '08:00:00', 'Hadir'),
(18, 'Nurhidayah Sinaga, AMK', 'Perawat', '2021-01-01', '08:00:00', '14:00:00', 'Hadir'),
(19, 'Syahreza Pahlevi, AMK', 'Perawat', '2021-01-01', '14:00:00', '20:00:00', 'Hadir'),
(20, 'Kamaluddin, AMK', 'Perawat', '2021-01-01', '20:00:00', '08:00:00', 'Hadir'),
(21, 'Rosintan Pandiangan, Am.Keb', 'Perawat', '2021-01-01', '08:00:00', '17:00:00', 'Hadir'),
(22, 'Utami Amalia Hasibuan, Am.Keb', 'Perawat', '2021-01-01', '08:00:00', '14:00:00', 'Hadir'),
(23, 'Rizky Syahputri Damanik, Am.Ke', 'Perawat', '2021-01-01', '14:00:00', '20:00:00', 'Hadir'),
(24, 'Masdewani Hasibuan, Am.Keb', 'Perawat', '2021-01-01', '20:00:00', '08:00:00', 'Hadir'),
(25, 'dr. Faizal Muslim', 'Dokter', '2021-01-01', '08:00:00', '14:00:00', 'Hadir'),
(26, 'dr. Siti Hartifah', 'Dokter', '2021-01-01', '14:00:00', '20:00:00', 'Hadir'),
(27, 'dr. Insyirah Muhammad', 'Dokter', '2021-01-01', '20:00:00', '08:00:00', 'Hadir'),
(28, 'Rahmayani, Am.Keb', 'Perawat', '2021-01-01', '20:00:00', '08:00:00', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_shift`
--

CREATE TABLE `tb_shift` (
  `id` int(4) NOT NULL,
  `nm_dokter` varchar(30) NOT NULL,
  `spesialis` enum('Penyakit Dalam','Anak','Gigi dan Mulut','THT','Mata','Kulit dan Kelamin','Kandungan','Tulang','Saraf','Psikiater') NOT NULL,
  `tgl_kerja` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_shift`
--

INSERT INTO `tb_shift` (`id`, `nm_dokter`, `spesialis`, `tgl_kerja`, `jam_masuk`, `jam_keluar`) VALUES
(4, 'Febri', 'Anak', '2020-12-31', '17:30:00', '17:00:00'),
(6, 'dr. Ansaruddin Nasution, Sp.A', 'Anak', '2021-01-01', '09:00:00', '14:00:00'),
(7, 'dr. Otto Harris, Sp.PD', 'Penyakit Dalam', '2021-01-01', '14:00:00', '20:00:00'),
(8, 'dr. M.Ikram, Sp.OG', 'Kandungan', '2021-01-01', '20:00:00', '22:00:00'),
(9, 'dr. Franz Julius, Sp.S', 'Saraf', '2021-01-01', '08:00:00', '14:00:00'),
(10, 'dr. Wira Sundoko, M.Kes,Sp.OT', 'Tulang', '2021-01-01', '14:00:00', '20:00:00'),
(11, 'drg. Ryan Hanafi Pane', 'Gigi dan Mulut', '2021-01-01', '20:00:00', '22:00:00'),
(12, 'dr. Riris Maria, Sp.OG', 'Kandungan', '2021-01-01', '20:00:00', '22:00:00'),
(13, 'dr. Olivia Anggraini, Sp.KK', 'Kulit dan Kelamin', '2021-01-01', '08:00:00', '14:00:00'),
(14, 'dr. Ardyansyah Nasution, Sp.TH', 'THT', '2021-01-01', '14:00:00', '20:00:00'),
(15, 'dr. Idwar Dalil, Sp.PD', 'Penyakit Dalam', '2021-01-01', '08:00:00', '14:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'cuyek_euy@gmail.com', 'Developer Kambeng', 1, 'Staff RS Wira Husada'),
('guest', '084e0343a0486ff05530df6c705c8bb4', 'kambeng@gmail.com', 'Tamu Rs Wira Husada', 2, 'Akun Tamu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_shift`
--
ALTER TABLE `tb_shift`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_shift`
--
ALTER TABLE `tb_shift`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
