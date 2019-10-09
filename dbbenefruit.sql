-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2019 pada 16.25
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbenefruit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `role`) VALUES
('admin', 'admin', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `menu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id`, `role`, `menu`) VALUES
(1, 'administrator', '1'),
(2, 'administrator', '3'),
(3, 'petani', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buah`
--

CREATE TABLE `buah` (
  `idBuah` varchar(20) NOT NULL,
  `namaBuah` varchar(50) NOT NULL,
  `stokBuah` int(128) NOT NULL,
  `hargaBuah` int(128) NOT NULL,
  `deskBuah` text NOT NULL,
  `fotoBuah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `investasi`
--

CREATE TABLE `investasi` (
  `idInvestasi` varchar(20) NOT NULL,
  `tglInvestasi` int(11) NOT NULL,
  `jumlahInvestasi` int(11) NOT NULL,
  `laba` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `investor`
--

CREATE TABLE `investor` (
  `invUsername` varchar(20) NOT NULL,
  `invPassword` varchar(20) NOT NULL,
  `invNama` varchar(50) NOT NULL,
  `invAlamat` text NOT NULL,
  `invTelp` varchar(15) NOT NULL,
  `invJK` enum('Laki-Laki','Perempuan') NOT NULL,
  `invKTP` int(100) NOT NULL,
  `invNorek` int(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `investor`
--

INSERT INTO `investor` (`invUsername`, `invPassword`, `invNama`, `invAlamat`, `invTelp`, `invJK`, `invKTP`, `invNorek`, `role`) VALUES
('investor', 'b4f18f5b05307bd1e3cc', 'investor', 'alamat', '098', 'Laki-Laki', 0, 35, 'investor'),
('o', '$2y$10$M8BKZD/dfIMQG', 'o', 'k', '0', 'Laki-Laki', 9, 8676, 'investor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'petani'),
(3, 'mitra'),
(4, 'investor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Produk'),
(3, 'Mitra'),
(4, 'Investor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `mtrUsername` varchar(20) NOT NULL,
  `mtrPassword` varchar(100) NOT NULL,
  `mtrNama` varchar(50) NOT NULL,
  `mtrAlamat` text NOT NULL,
  `mtrTelp` varchar(15) NOT NULL,
  `mtrJK` enum('Laki-Laki','Perempuan') NOT NULL,
  `mtrKTP` int(100) NOT NULL,
  `mtrNorek` int(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`mtrUsername`, `mtrPassword`, `mtrNama`, `mtrAlamat`, `mtrTelp`, `mtrJK`, `mtrKTP`, `mtrNorek`, `role`) VALUES
('l', '2db95e8e1a9267b7a1188556b2013b33', 'l', 'i', '0', 'Laki-Laki', 7, 12, 'mitra'),
('m', '$2y$10$nyOMpUwUhmccfxPjSmHWZeLSmAidnReYEBY15vsgcX8wSfTJ9zcbu', 'm', 'jash', '989', 'Laki-Laki', 898, 898, 'mitra'),
('mitra', '92706ba4fd3022cede6d1610b17a0d2d', 'mitra', 'rumah', '98', 'Laki-Laki', 9, 153, 'mitra'),
('q', '7694f4a66316e53c8cdd9d9954bd611d', 'q', 'q', '7', 'Laki-Laki', 7, 7, 'mitra'),
('rifacantik', '4797a79a801d05ef1bc5345edaa69cd6', 'Rifa', 'Pranti', '49583908', 'Perempuan', 3890284, 934893485, 'mitra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petani`
--

CREATE TABLE `petani` (
  `ptnUsername` varchar(20) NOT NULL,
  `ptnPassword` varchar(20) NOT NULL,
  `ptnNama` varchar(50) NOT NULL,
  `ptnAlamat` text NOT NULL,
  `ptnTelp` varchar(15) NOT NULL,
  `ptnJK` enum('Laki-Laki','Perempuan') NOT NULL,
  `ptnKTP` int(50) NOT NULL,
  `ptnNorek` int(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petani`
--

INSERT INTO `petani` (`ptnUsername`, `ptnPassword`, `ptnNama`, `ptnAlamat`, `ptnTelp`, `ptnJK`, `ptnKTP`, `ptnNorek`, `role`) VALUES
('asd', '7815696ecbf1c96e6894', 'asd', 'asd', '7687', 'Laki-Laki', 787, 7687, 'petani'),
('i', '$2y$10$YA1HdpnRIryeh', 'i', 'yipju', '788', 'Laki-Laki', 89, 979, 'petani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idProduk` varchar(20) NOT NULL,
  `namaProduk` varchar(255) NOT NULL,
  `hargaProduk` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'polos.jpg',
  `deskProduk` text NOT NULL,
  `jenisProduk` enum('Makanan','Kerajinan') NOT NULL,
  `stokProduk` int(11) NOT NULL,
  `docProduk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idProduk`, `namaProduk`, `hargaProduk`, `gambar`, `deskProduk`, `jenisProduk`, `stokProduk`, `docProduk`) VALUES
('5d8fe19266798', 'mie ayam jumbo', 12000, 'polos.jpg', 'porsi tingkat dewa', 'Makanan', 0, ''),
('5d90a6b50a18b', 'asd', 234, '5d90a6b50a18b.jpg', 'asd', 'Makanan', 0, ''),
('5d90aa159f2d6', 'coba', 78, '5d90aa159f2d6.jpg', 'mewah', 'Makanan', 0, ''),
('5d982693d2a1b', 'anu', 325, '5d982693d2a1b.png', 'ini jeruk', 'Makanan', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `idStatus` varchar(3) NOT NULL,
  `namaStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` varchar(20) NOT NULL,
  `tglTransaksi` int(11) NOT NULL,
  `kuantitasBuah` int(11) NOT NULL,
  `totalTransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('petani','mitra','investor','administrator') NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `telepon`, `username`, `password`, `role`, `created_on`) VALUES
('5d8f5e4ad91d9', 'asd', 'asd', '89', 'asd', '$2y$10$OSk2v3XhPE2VGcl/zhQc.ecgHMUtFkCMAh.DmBQmDtNx6eBY2N6v.', 'administrator', '0000-00-00 00:00:00'),
('5d934bf906af2', 'petani', 'rumah', '00', 'petani', '$2y$10$/gSkVHalcAB56VKvTX5q9Ovz7.yIQ3zDLRDgL4DwxakS/Hfy.NuD2', 'petani', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buah`
--
ALTER TABLE `buah`
  ADD PRIMARY KEY (`idBuah`);

--
-- Indeks untuk tabel `investasi`
--
ALTER TABLE `investasi`
  ADD PRIMARY KEY (`idInvestasi`);

--
-- Indeks untuk tabel `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`invUsername`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`mtrUsername`);

--
-- Indeks untuk tabel `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`ptnUsername`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indeks untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akses`
--
ALTER TABLE `akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
