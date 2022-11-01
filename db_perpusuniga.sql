-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2022 at 05:07 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpusuniga`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

DROP TABLE IF EXISTS `t_mahasiswa`;
CREATE TABLE IF NOT EXISTS `t_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `nim` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `username` char(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `alamat`, `username`, `password`) VALUES
(1, 'jose', 21510090, '', '', ''),
(2, 'lino', 21510091, '', '', ''),
(5, 'madiim', 21510094, '', '', ''),
(4, 'dimas', 21510092, '', '', ''),
(6, 'Budi', 21510097, 'CIkidang', 'budiono', 'inipassword');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
