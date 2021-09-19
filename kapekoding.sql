-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2021 pada 15.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapekoding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `kuota_kelas` int(11) NOT NULL,
  `jam_kelas` varchar(50) NOT NULL,
  `mentor_kelas` varchar(100) NOT NULL,
  `link_wa` text NOT NULL,
  `status_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `kelas`, `kuota_kelas`, `jam_kelas`, `mentor_kelas`, `link_wa`, `status_kelas`) VALUES
(1, 'Bootstrap', 19, '10.00-12.10', 'Ilham Nopi Hendri', 'https://chat.whatsapp.com/KZo9uZ5szpFJt6lT6M3hIH', 'Buka'),
(2, 'HTML-CSS', 20, '10.00-12.10', 'Defghi Galiz<br>Syaifal Illahi<br>Mardiyah Rusanti', 'https://chat.whatsapp.com/JJ7jV19n3m98SqQvIFWPo3', 'Buka'),
(3, 'Basic Python', 19, '10.00-12.10', 'Kelvin Mulyawan<br>Dito Hermawan<br>Citra Febriawirti', 'https://chat.whatsapp.com/CEpePO3jd9S9eWUllHoU2O', 'Buka'),
(4, 'PHP Dasar', 24, '13.00-15.30', 'Azhari Saputra<br>Rian Firmansyah<br>Sri Rahayu Wulandari', '#', 'Buka'),
(5, 'Laravel', 0, '13.00-15.30', 'Yoga Tri Wahyudi', '#', 'Tutup'),
(6, 'Database - MySQL', 18, '08.00-10.00', 'Bagus Wiradinata<br>Mega Yulianti', 'https://chat.whatsapp.com/GKLtm3lIbN3373smFjGEtZ', 'Buka'),
(8, 'Design Grafis', 19, '13.00-15.30', 'Putri Lara Elitra<br>Fitra Yana<br>Hafizuzaki<br>Rila Triani', '#', 'Buka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_peserta`
--

CREATE TABLE `kelas_peserta` (
  `bp_peserta` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jam_kelas` varchar(50) NOT NULL,
  `link_wa` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nilai_akhir` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas_peserta`
--

INSERT INTO `kelas_peserta` (`bp_peserta`, `kelas`, `jam_kelas`, `link_wa`, `status`, `nilai_akhir`, `keterangan`) VALUES
(1234, 'Database - MySQL', '08.00-10.00', 'https://chat.whatsapp.com/GKLtm3lIbN3373smFjGEtZ', 'Valid', 0, 'Belum Lulus'),
(1234, 'Design Grafis', '13.00-15.30', '#', 'Valid', 0, 'Belum Lulus'),
(201100020, 'Database - MySQL', '08.00-10.00', 'https://chat.whatsapp.com/GKLtm3lIbN3373smFjGEtZ', 'Valid', 0, 'Belum Lulus'),
(201100020, 'Bootstrap', '10.00-12.10', 'https://chat.whatsapp.com/KZo9uZ5szpFJt6lT6M3hIH', 'Valid', 0, 'Belum Lulus'),
(201100020, 'PHP Dasar', '13.00-15.30', '#', 'Valid', 0, 'Belum Lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `password`, `status`, `nama`) VALUES
(1234, '1234', 'Peserta', 'Kushina Uzumaki'),
(181100014, 'kelvin123', 'Mentor', 'Kelvin Mulyawan'),
(181100030, 'rian123', 'Mentor', 'Rian Firmansyah'),
(181100081, 'defghi123', 'Mentor', 'Defghi Galiz'),
(181100083, 'lara123', 'Mentor', 'Putri Lara Elitra'),
(181100103, 'yoga123', 'Mentor', 'Yoga Tri Wahyudi'),
(181100150, 'syaifal123', 'Mentor', 'Syaifal Illahi'),
(181100199, 'bagus123', 'Mentor', 'Bagus Wiradinata'),
(191100104, 'azhari123', 'Mentor', 'Azhari Saputra'),
(201100009, 'fitra123', 'Mentor', 'Fitra Yana'),
(201100020, 'sari123', 'Peserta', 'Sari Anjely'),
(201100032, 'citra123', 'Mentor', 'Citra Febriawirti'),
(201100129, 'ilham123', 'Mentor', 'Ilham Nopi Hendri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` varchar(15) NOT NULL,
  `nama_mentor` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `nama_mentor`, `kelas`, `password`, `status`) VALUES
('181100014', 'Kelvin Mulyawan', 'Basic Python', 'kelvin123456', 'Mentor'),
('181100030', 'Rian Firmansyah', 'PHP Dasar', 'rian123', 'Mentor'),
('181100081', 'Defghi Galiz', 'HTML-CSS', 'defghi123', 'Mentor'),
('181100083', 'Putri Lara Elitra', 'Design Grafis', 'lara123', 'Mentor'),
('181100103', 'Yoga Tri Wahyudi', 'Laravel', 'yoga123', 'Mentor'),
('181100129', 'Ilham Nopi Hendri', 'Bootstrap', 'ilham123', 'Mentor'),
('181100150', 'Syaifal Illahi', 'HTML-CSS', 'syaifal123', 'Mentor'),
('181100199', 'Bagus Wiradinata', 'PHP Dasar', 'bagus123', 'Mentor Magang'),
('191100104', 'Azhari Saputra', 'PHP Dasar', 'azhari123', 'Mentor'),
('201100009', 'Fitra Yana', 'Design Grafis', 'fitra123', 'Mentor'),
('201100017', 'Mardiyah Rusanti', 'HTML-CSS', 'aya123', 'Mentor Magang'),
('201100018', 'Mega Yulianti', 'Database - MySQL', 'mega123', 'Mentor Magang'),
('201100026', 'Rila Triani', 'Design Grafis', 'rila123', 'Mentor Magang'),
('201100032', 'Citra Febriawirti', 'Basic Python', 'citra123', 'Mentor'),
('201100044', 'Hafizuzaki', 'Design Grafis', 'hafizu123', 'Mentor Magang'),
('201100050', 'Sri Rahayu Wulandari', 'PHP Dasar', 'ayu123', 'Mentor Magang'),
('201100077', 'Dito Hermawan', 'Basic Python', 'dito123', 'Mentor Magang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `bp_peserta` varchar(15) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `asal_kampus` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`bp_peserta`, `nama_peserta`, `asal_kampus`, `email`, `password`, `status`) VALUES
('1234', 'Kushina Uzumaki', 'Konoha', 'kushina@gmail.com', '1234', 'Peserta'),
('201100020', 'Sari Anjely', 'STMIK Indonesia Padang', 'sari@gmail.com', 'sari123', 'Peserta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `bp_peserta` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `pertemuan` varchar(2) NOT NULL,
  `tugas` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL,
  `holyshit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `kelas_peserta`
--
ALTER TABLE `kelas_peserta`
  ADD PRIMARY KEY (`bp_peserta`,`jam_kelas`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`bp_peserta`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`bp_peserta`,`kelas`,`pertemuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
