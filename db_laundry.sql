-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2023 pada 09.36
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `backset`
--

CREATE TABLE `backset` (
  `url` varchar(100) NOT NULL,
  `sessiontime` varchar(4) DEFAULT NULL,
  `footer` varchar(50) DEFAULT NULL,
  `themesback` varchar(2) DEFAULT NULL,
  `responsive` varchar(2) DEFAULT NULL,
  `haha` datetime DEFAULT NULL,
  `namabisnis1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `backset`
--

INSERT INTO `backset` (`url`, `sessiontime`, `footer`, `themesback`, `responsive`, `haha`, `namabisnis1`) VALUES
('', '', 'Aplikasi Laundry', '2', '0', '2017-01-20 07:30:02', 'Nama Bisnis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar`
--

CREATE TABLE `bayar` (
  `nota` varchar(20) NOT NULL,
  `tglmasuk` date DEFAULT NULL,
  `jammasuk` time DEFAULT NULL,
  `pelanggan` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tgldeadline` date DEFAULT NULL,
  `jamdeadline` time DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `kasir` varchar(100) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bayar`
--

INSERT INTO `bayar` (`nota`, `tglmasuk`, `jammasuk`, `pelanggan`, `total`, `tgldeadline`, `jamdeadline`, `status`, `kasir`, `catatan`, `no`) VALUES
('0003', '2017-01-15', '19:19:41', '1', 10000, '0000-00-00', '00:00:00', 'lunas', 'admin', '', 16),
('0004', '2017-01-15', '19:19:42', '0001', 14000, '0000-00-00', '00:00:00', 'lunas', 'admin', '', 17),
('0005', '2017-01-15', '19:19:42', '1', 21000, '0000-00-00', '00:00:00', 'proses', 'admin', '', 18),
('0006', '2017-01-15', '19:19:46', '0001', 14000, '0000-00-00', '00:00:00', 'lunas', 'admin', '', 19),
('0007', '2019-11-25', '11:11:42', '0003', 10000, '2019-11-26', '00:00:11', 'Diterima', 'admin', 'yang bersih', 20),
('0008', '2019-11-25', '11:11:42', '0003', 7000, '2019-11-26', '00:00:11', 'lunas', 'admin', 'yang bersih', 21),
('0009', '2023-02-06', '16:16:55', '0003', 35000, '2023-02-08', '12:00:00', 'Diterima', 'kasir', 'karpet bludru', 22),
('0010', '2023-02-12', '18:18:02', '0001', 14000, '2023-02-13', '20:26:00', 'Diterima', 'kasir', 'karpet bludru', 23),
('0011', '2023-02-13', '15:15:48', '1', 20000, '2023-02-13', '12:00:00', 'Diterima', 'kasir', '', 24),
('0012', '2023-02-14', '10:10:50', '0003', 14000, '2023-02-16', '12:00:00', 'Diterima', 'kasir', 'boneka pink', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `chmenu`
--

CREATE TABLE `chmenu` (
  `userjabatan` varchar(20) NOT NULL,
  `menu1` varchar(1) DEFAULT '0',
  `menu2` varchar(1) DEFAULT '0',
  `menu3` varchar(1) DEFAULT '0',
  `menu4` varchar(1) DEFAULT '0',
  `menu5` varchar(1) DEFAULT '0',
  `menu6` varchar(1) DEFAULT '0',
  `menu7` varchar(1) DEFAULT '0',
  `menu8` varchar(1) DEFAULT '0',
  `menu9` varchar(1) DEFAULT '0',
  `menu10` varchar(1) DEFAULT '0',
  `menu11` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chmenu`
--

INSERT INTO `chmenu` (`userjabatan`, `menu1`, `menu2`, `menu3`, `menu4`, `menu5`, `menu6`, `menu7`, `menu8`, `menu9`, `menu10`, `menu11`) VALUES
('admin', '5', '5', '5', '5', '5', '5', '5', '5', '5', '0', '0'),
('demo', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
('kasir', '0', '5', '0', '0', '5', '0', '5', '5', '0', '', ''),
('owner', '1', '1', '0', '0', '1', '0', '1', '5', '0', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nama` varchar(100) DEFAULT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `notelp` varchar(20) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `avatar` varchar(150) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nama`, `tagline`, `alamat`, `notelp`, `signature`, `avatar`, `no`) VALUES
('Aplikasi Laundry', 'Laundry Bersih Pakai Aplikasi', 'Jl Pakuan Tajam', '0210809899999', 'Thank you for using our services', 'dist/upload/index.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `nama` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`nama`, `avatar`, `tanggal`, `isi`, `id`) VALUES
('admin', 'dist/img/avatar5.png', '2019-11-25', '<h1>\r\n\r\n<b>Beli hanya di tokopedia ya\r\n</b>\r\n<br></h1>', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`kode`, `nama`, `no`) VALUES
('0001', 'admin', 28),
('0002', 'demo', 29),
('0003', 'kasir', 30),
('0004', 'owner', 31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`kode`, `nama`, `satuan`, `biaya`, `no`) VALUES
('0004', 'cuci boneka', '0003', 8000, 5),
('0001', 'Cuci Kering', '0001', 5000, 2),
('0003', 'Cuci Setrika', '0001', 7000, 4),
('0002', 'Karpet', '0002', 7000, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operasional`
--

CREATE TABLE `operasional` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `kasir` varchar(20) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `operasional`
--

INSERT INTO `operasional` (`kode`, `nama`, `tanggal`, `biaya`, `keterangan`, `kasir`, `no`) VALUES
('0001', 'Beli Deterjen', '2019-11-25', 50000, 'dibeli si asep', 'admin', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kode` varchar(20) NOT NULL,
  `tgldaftar` date DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`kode`, `tgldaftar`, `nama`, `alamat`, `nohp`, `no`) VALUES
('0001', '2017-01-15', 'Alit Rahma Estu', 'Jl Merpati 3', '081232164724', 6),
('0002', '2017-01-15', 'Puspa', 'Jl Gajah Putih III no 8', '081232164429', 7),
('0003', '2019-11-25', 'Pak Japri', 'jalan marunda no 2', '08726282', 8),
('1', '0000-00-00', 'Non Member', '-', '-', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`kode`, `nama`, `no`) VALUES
('0001', 'Kg', 1),
('0002', 'M', 2),
('0003', 'bijian', 3),
('0004', 'per-pasang', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksimasuk`
--

CREATE TABLE `transaksimasuk` (
  `nota` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `hargaakhir` int(11) DEFAULT NULL,
  `biayaakhir` int(11) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksimasuk`
--

INSERT INTO `transaksimasuk` (`nota`, `kode`, `nama`, `biaya`, `satuan`, `jumlah`, `hargaakhir`, `biayaakhir`, `no`) VALUES
('0007', '0001', 'Cuci Kering', 5000, 'Kg', 2, 10000, 10000, 51),
('0008', '0002', 'Karpet', 7000, 'M', 1, 7000, 7000, 52),
('0009', '0003', 'Cuci Setrika', 7000, 'Kg', 5, 35000, 35000, 53),
('0010', '0002', 'Karpet', 7000, 'M', 2, 14000, 14000, 54),
('0011', '0001', 'Cuci Kering', 5000, 'Kg', 4, 20000, 20000, 55),
('0012', '0002', 'Karpet', 7000, 'M', 2, 14000, 14000, 62);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userna_me` varchar(20) NOT NULL,
  `pa_ssword` varchar(70) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `tglaktif` date DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userna_me`, `pa_ssword`, `nama`, `alamat`, `nohp`, `tgllahir`, `tglaktif`, `jabatan`, `avatar`, `no`) VALUES
('admin', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'rifa sehat', 'jl jalan', '0875757777', '2005-06-15', '2023-02-04', 'admin', 'dist/upload/avatar2.png', 1),
('demo', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'demo', 'demo', '088888', '2016-12-22', '2016-12-26', 'demo', 'dist/upload/index.jpg', 3),
('demo22', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Demo', '', '', '0000-00-00', '2016-12-27', 'admin', 'dist/upload/91f644a1932c252d4a158f13f1936aab.jpg', 4),
('kasir', '22a44e2ff721590111588f73cbb865dd8079d9ab', 'septia astrid kurniasari', 'DS.MARGOMULYO', '082330936155', '2005-09-13', '2023-02-04', 'kasir', 'dist/upload/avatar3.png', 8),
('owner', 'aa8c5367d43cd85ebf9685d5d65703771fe0c0df', 'Desy Zahwa Almaghfiroh', 'SUKOSEWU', '082330936155', '2000-12-22', '2023-02-04', 'owner', 'dist/upload/avatar3.png', 9),
('username', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Username', '', '', '0000-00-00', '2016-12-27', 'demo', 'dist/upload/index.jpg', 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `backset`
--
ALTER TABLE `backset`
  ADD PRIMARY KEY (`url`);

--
-- Indeks untuk tabel `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`nota`),
  ADD KEY `no` (`no`),
  ADD KEY `pelanggan` (`pelanggan`),
  ADD KEY `kasir` (`kasir`);

--
-- Indeks untuk tabel `chmenu`
--
ALTER TABLE `chmenu`
  ADD PRIMARY KEY (`userjabatan`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no` (`no`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`nama`),
  ADD KEY `no` (`no`),
  ADD KEY `satuan` (`satuan`);

--
-- Indeks untuk tabel `operasional`
--
ALTER TABLE `operasional`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no` (`no`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no3` (`no`);

--
-- Indeks untuk tabel `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no` (`no`);

--
-- Indeks untuk tabel `transaksimasuk`
--
ALTER TABLE `transaksimasuk`
  ADD PRIMARY KEY (`nota`) USING BTREE,
  ADD KEY `barang` (`nama`),
  ADD KEY `no5_2` (`no`),
  ADD KEY `kode` (`kode`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userna_me`),
  ADD KEY `no` (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bayar`
--
ALTER TABLE `bayar`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `operasional`
--
ALTER TABLE `operasional`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `satuan`
--
ALTER TABLE `satuan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaksimasuk`
--
ALTER TABLE `transaksimasuk`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bayar`
--
ALTER TABLE `bayar`
  ADD CONSTRAINT `bayar_ibfk_1` FOREIGN KEY (`pelanggan`) REFERENCES `pelanggan` (`kode`),
  ADD CONSTRAINT `bayar_ibfk_2` FOREIGN KEY (`kasir`) REFERENCES `user` (`userna_me`);

--
-- Ketidakleluasaan untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD CONSTRAINT `jenis_ibfk_1` FOREIGN KEY (`satuan`) REFERENCES `satuan` (`kode`);

--
-- Ketidakleluasaan untuk tabel `transaksimasuk`
--
ALTER TABLE `transaksimasuk`
  ADD CONSTRAINT `transaksimasuk_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `satuan` (`kode`),
  ADD CONSTRAINT `transaksimasuk_ibfk_2` FOREIGN KEY (`nama`) REFERENCES `jenis` (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
