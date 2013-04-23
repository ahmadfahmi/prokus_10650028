-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2013 at 10:40 PM
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
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `ranking` int(55) NOT NULL,
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
  PRIMARY KEY (`nomor_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ranking`, `nomor_pendaftaran`, `nama_siswa`, `tempat_siswa`, `tanggal`, `bulan`, `tahun`, `alamat_siswa`, `asal_siswa`, `kecamatan_siswa`, `kabupaten_siswa`, `kelamin_siswa`, `agama_siswa`, `nama_ortu`, `alamat_ortu`, `pekerjaan_ortu`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `nomor_ijazah`, `tahun_ijazah`, `bahasa_indonesia`, `matematika`, `ipa`, `prestasi`, `jumlah`) VALUES
(0, 1, '', 'a', 0, '0000-00-00', 1999, 'a', 'a', 'a', 'a', 'perempuan', 'islam', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 0000, 0, 0, 0, NULL, NULL),
(0, 5, 'bismillah', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, 0, NULL),
(0, 11, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, NULL),
(0, 12, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, NULL),
(0, 14, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 7, 7, 7, NULL, NULL),
(0, 15, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 7, 7, 7, NULL, NULL),
(0, 16, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 7, 7, 7, NULL, NULL),
(0, 17, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 7, 7, 7, NULL, NULL),
(0, 18, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 7, 7, 7, NULL, NULL),
(0, 19, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 7, 7, 7, NULL, NULL),
(0, 20, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 7, 7, 7, NULL, 21),
(0, 22, 'boboa', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 0, 0, 0, NULL, NULL),
(0, 23, '', 'a', 1, 'April', 1999, 'a', 'a', 'a', 'a', 'perempuan', 'islam', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '1', 0000, 12, 12, 12, NULL, 36),
(0, 24, '', 'a', 1, 'April', 1999, 'a', 'a', 'a', 'a', 'perempuan', 'islam', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '1', 0000, 12, 12, 12, NULL, 36),
(0, 25, '', '', 1, 'Januari', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0000, 12, 12, 12, NULL, 36),
(0, 26, 'a', 'a', 3, 'April', 1999, 'a', 'a', 'a', 'a', 'laki', 'islam', 'q', 'q', 'q', '', '', '', 'q', 'q', 'q', '1234', 1998, 12, 12, 12, NULL, 36);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
