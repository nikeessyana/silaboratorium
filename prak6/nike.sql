-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2015 at 06:11 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nike`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `ID_SISWA` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(25) NOT NULL,
  `TELEPON` varchar(15) NOT NULL,
  `ALAMAT` varchar(50) NOT NULL,
  `HOBI` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_SISWA`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`ID_SISWA`, `NAMA`, `TELEPON`, `ALAMAT`, `HOBI`) VALUES
(18, 'ana', '02147483647', 'jakarta', 'makan'),
(16, 'Nike', '02147483647', 'surabaya', 'lari'),
(19, 'tulus', '088776655', 'jonggol', 'makan'),
(20, 'essy', '087654321', 'diponegoro', 'travelling');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
