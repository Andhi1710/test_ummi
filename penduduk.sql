-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Sep 2020 pada 12.34
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id_penduduk` int(10) NOT NULL,
  `no_kk` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_stat_hbkel` int(5) NOT NULL,
  `no_rt` int(5) NOT NULL,
  `tanggal_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`id_penduduk`, `no_kk`, `nik`, `nama_lengkap`, `jk`, `tgl_lahir`, `id_stat_hbkel`, `no_rt`, `tanggal_create`, `tanggal_update`) VALUES
(56, '6403061702', '6403060709150001', 'ABDIAN SYAH PRATAMA', 'Laki-Laki', '2015-09-07', 4, 1, '2020-09-20 16:39:58', '0000-00-00 00:00:00'),
(57, '6403060211', '6403060902140001', 'ABDUL HABIB MAULANA', 'Laki-Laki', '2014-02-09', 4, 1, '2020-09-20 16:41:06', '0000-00-00 00:00:00'),
(58, '6403062407', '6403060101670001', 'ABDUL MAJID', 'Laki-Laki', '1967-01-01', 1, 1, '2020-09-20 16:42:30', '0000-00-00 00:00:00'),
(59, '6403062407', '6403061503770001', 'ABDUL MUIS', 'Laki-Laki', '1977-03-15', 1, 1, '2020-09-20 16:44:20', '0000-00-00 00:00:00'),
(60, '6403062407', '6403061801610001', 'ABDUL RAHMAN', 'Laki-Laki', '1961-01-16', 9, 1, '2020-09-20 16:46:09', '0000-00-00 00:00:00'),
(61, '6403062407', '6403062007040001', 'ABDUL RAHMAN', 'Laki-Laki', '2004-07-20', 4, 1, '2020-09-20 16:48:18', '0000-00-00 00:00:00'),
(62, '6403060211', '6403060702100001', 'ABDUL WAHID SAPARUDDIN', 'Laki-Laki', '2010-02-07', 4, 1, '2020-09-20 16:49:48', '0000-00-00 00:00:00'),
(63, '6403062407', '6403061406620001', 'ABDUR RASYID', 'Laki-Laki', '1962-06-14', 1, 1, '2020-09-20 16:51:03', '0000-00-00 00:00:00'),
(64, '6403062407', '6403060107510003', 'ADAM', 'Laki-Laki', '1951-07-01', 1, 1, '2020-09-20 16:52:50', '0000-00-00 00:00:00'),
(65, '6403062407', '6403060101700005', 'ADDUL', 'Laki-Laki', '1970-01-01', 4, 1, '2020-09-20 16:54:54', '2020-09-20 17:29:45'),
(66, '6403061211', '6403064209980001', 'ADE MARPINA', 'Perempuan', '1998-09-02', 3, 1, '2020-09-20 16:57:09', '0000-00-00 00:00:00'),
(67, '6403061909', '6403062802030002', 'ADI INRA FEBRIADI', 'Laki-Laki', '2003-02-08', 4, 1, '2020-09-20 16:58:42', '0000-00-00 00:00:00'),
(68, '6403062407', '6403061907080001', 'AFGHAN AL-BANNA', 'Laki-Laki', '2008-07-19', 4, 1, '2020-09-20 16:59:38', '0000-00-00 00:00:00'),
(69, '6403062407', '6403062102810001', 'AGUS', 'Laki-Laki', '1981-02-21', 4, 1, '2020-09-20 17:00:51', '0000-00-00 00:00:00'),
(70, '6403062307', '6403061307850001', 'AGUS RIADI', 'Laki-Laki', '1985-07-13', 9, 1, '2020-09-20 17:03:47', '0000-00-00 00:00:00'),
(71, '6403062307', '6403060107670002', 'AHMAD', 'Laki-Laki', '1967-07-01', 1, 1, '2020-09-20 17:04:50', '0000-00-00 00:00:00'),
(72, '6403062609', '6403062804140001', 'AHMAD IMAM AL HAFIZH', 'Laki-Laki', '2014-04-28', 4, 1, '2020-09-20 17:05:56', '0000-00-00 00:00:00'),
(73, '6403062407', '6403064107710003', 'AINUN ZARIAH', 'Perempuan', '1971-07-01', 3, 1, '2020-09-20 17:07:51', '2020-09-20 17:33:57'),
(74, '6403062111', '6403064902130001', 'AISYAH MUMTAZAH', 'Perempuan', '2013-02-09', 4, 1, '2020-09-20 17:08:36', '2020-09-20 17:33:02');

--
-- Trigger `data_penduduk`
--
DELIMITER $$
CREATE TRIGGER `tanggal` BEFORE INSERT ON `data_penduduk` FOR EACH ROW BEGIN
    IF NEW. tanggal_create = '0000-00-00 00:00:00' THEN
        SET NEW.tanggal_create = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungan_keluarga`
--

CREATE TABLE `hubungan_keluarga` (
  `id_stat_hbkel` int(5) NOT NULL,
  `stat_hbkel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hubungan_keluarga`
--

INSERT INTO `hubungan_keluarga` (`id_stat_hbkel`, `stat_hbkel`) VALUES
(1, 'Kepala Keluarga'),
(2, 'Suami'),
(3, 'Istri'),
(4, 'Anak'),
(5, 'Menantu'),
(6, 'Cucu'),
(7, 'Orang Tua'),
(8, 'Mertua'),
(9, 'Family Lain'),
(10, 'Pembantu'),
(11, 'Lainnya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `hubungan_keluarga`
--
ALTER TABLE `hubungan_keluarga`
  ADD PRIMARY KEY (`id_stat_hbkel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id_penduduk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
