-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2013 at 04:19 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `diterima`
--

CREATE TABLE IF NOT EXISTS `diterima` (
  `id_siswa` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelasa`
--

CREATE TABLE IF NOT EXISTS `kelasa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelasb`
--

CREATE TABLE IF NOT EXISTS `kelasb` (
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelasc`
--

CREATE TABLE IF NOT EXISTS `kelasc` (
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE IF NOT EXISTS `komen` (
  `id_komen` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(99) NOT NULL,
  `komen` varchar(999) NOT NULL,
  PRIMARY KEY (`id_komen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id_komen`, `nama`, `komen`) VALUES
(2, 'aaaaa', 'aaaa'),
(3, 'sfs', 'sdhsdh'),
(4, 'eee', 'eeeeeeee'),
(5, 'eee', 'eeeeeeee'),
(6, 'sdgs', 'dhsdsh'),
(7, 'dfhg', 'dfj');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `rank` int(55) NOT NULL,
  `nomor_pendaftaran` int(55) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(55) NOT NULL,
  `tempat_siswa` varchar(55) NOT NULL,
  `tanggal` int(55) NOT NULL,
  `bulan` varchar(55) NOT NULL,
  `tahun` year(4) NOT NULL,
  `alamat_siswa` varchar(55) NOT NULL,
  `asal_siswa` varchar(55) DEFAULT NULL,
  `kecamatan_siswa` varchar(55) NOT NULL,
  `kabupaten_siswa` varchar(55) NOT NULL,
  `kelamin_siswa` varchar(55) NOT NULL,
  `agama_siswa` varchar(55) NOT NULL,
  `nama_ortu` varchar(55) NOT NULL,
  `alamat_ortu` varchar(55) NOT NULL,
  `pekerjaan_ortu` varchar(55) NOT NULL,
  `nama_wali` varchar(55) DEFAULT NULL,
  `alamat_wali` varchar(55) DEFAULT NULL,
  `pekerjaan_wali` varchar(55) DEFAULT NULL,
  `nama_sekolah` varchar(55) NOT NULL,
  `status_sekolah` varchar(55) NOT NULL,
  `alamat_sekolah` varchar(55) NOT NULL,
  `nomor_ijazah` varchar(55) NOT NULL,
  `tahun_ijazah` year(4) NOT NULL,
  `bahasa_indonesia` int(55) NOT NULL,
  `matematika` int(55) NOT NULL,
  `ipa` int(55) NOT NULL,
  `prestasi` int(55) DEFAULT NULL,
  `jumlah` int(55) DEFAULT NULL,
  `rank_kelamin` int(55) NOT NULL,
  `kelas` varchar(1) NOT NULL,
  PRIMARY KEY (`nomor_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`rank`, `nomor_pendaftaran`, `nama_siswa`, `tempat_siswa`, `tanggal`, `bulan`, `tahun`, `alamat_siswa`, `asal_siswa`, `kecamatan_siswa`, `kabupaten_siswa`, `kelamin_siswa`, `agama_siswa`, `nama_ortu`, `alamat_ortu`, `pekerjaan_ortu`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `nomor_ijazah`, `tahun_ijazah`, `bahasa_indonesia`, `matematika`, `ipa`, `prestasi`, `jumlah`, `rank_kelamin`, `kelas`) VALUES
(4, 2, '', '', 1, 'Januari', 1999, '', '', '', '', 'perempuan', '', '', '', '', '', '', '', '', '', '', '', 0000, 9, 9, 9, NULL, 27, 29, 'B'),
(6, 3, '232', '', 1, 'Januari', 1999, '', '', '', '', 'perempuan', '', '', '', '', '', '', '', '', '', '', '', 0000, 5, 5, 5, NULL, 15, 30, 'C'),
(9, 4, '', '', 1, 'Januari', 1999, '', '', '', '', 'perempuan', '', '', '', '', '', '', '', '', '', '', '', 0000, 2, 2, 2, NULL, 6, 32, 'B'),
(3, 5, 'boboa', '', 1, 'Januari', 1999, '', '', '', '', 'perempuan', '', '', '', '', '', '', '', '', '', '', '', 0000, 9, 9, 35, 0, 53, 28, 'A'),
(8, 6, '123', '', 1, 'Januari', 1999, '', '', '', '', 'perempuan', '', '', '', '', '', '', '', '', '', '', '', 0000, 2, 2, 2, NULL, 6, 31, 'A'),
(7, 7, 'qwer', '', 1, 'Januari', 1999, '', '', '', '', 'laki', '', '', '', '', '', '', '', '', '', '', '', 0000, 4, 4, 4, NULL, 12, 26, 'B'),
(5, 8, 'qweqweqwe', '', 1, 'Januari', 1999, '', '', '', '', 'laki', '', '', '', '', '', '', '', '', '', '', '', 0000, 7, 7, 3, 0, 17, 25, 'A'),
(1, 9, 'df', '', 2, 'Januari', 1999, '', '', '', '', 'laki', '', '', 'aweraewr', '', '', '', '', '', '', '', '', 0000, 42, 23, 32, 0, 97, 24, 'C'),
(2, 10, 'sfd', '', 1, 'Januari', 1999, '', '', '', '', 'perempuan', '', '', '', '', '', '', '', '', '', '', '', 0000, 21, 32, 25, NULL, 78, 27, 'C'),
(23, 11, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 20, 'B'),
(24, 12, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 21, 'C'),
(25, 13, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 22, 'A'),
(26, 14, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 23, 'B'),
(27, 15, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 15, 'C'),
(28, 16, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 14, 'B'),
(29, 17, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 2, 'B'),
(30, 18, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 1, 'A'),
(31, 19, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 4, 'A'),
(32, 20, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 5, 'B'),
(22, 21, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 6, 'C'),
(21, 22, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 7, 'A'),
(20, 23, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 8, 'B'),
(13, 24, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 9, 'C'),
(12, 25, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 10, 'A'),
(11, 26, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 11, 'B'),
(10, 27, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 12, 'C'),
(14, 28, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 13, 'A'),
(15, 29, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 19, 'A'),
(16, 30, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 3, 'C'),
(17, 31, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 18, 'C'),
(18, 32, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 17, 'B'),
(19, 33, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 16, 'A'),
(33, 34, 'unya', '', 1, 'Januari', 1999, '', '', '', '', 'perempuan', 'islam', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, 0, 33, 'C');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
