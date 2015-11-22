-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 04:37 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_menu` varchar(50) CHARACTER SET latin1 NOT NULL,
  `link` varchar(50) CHARACTER SET latin1 NOT NULL,
  `icon` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` tinyint(1) NOT NULL,
  `urutan` int(1) NOT NULL,
  PRIMARY KEY (`menu_id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `kelas`, `nama_menu`, `link`, `icon`, `status`, `urutan`) VALUES
(1, 'dashboard', 'Dashboard', 'dashboard', 'fa fa-laptop', 0, 1),
(2, 'ref_data', 'Referensi Data', '#', 'fa fa-database', 1, 2),
(3, 'tools', 'Tools', '#', 'fa fa-cogs', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submenu`
--

CREATE TABLE IF NOT EXISTS `tbl_submenu` (
  `smenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(5) NOT NULL,
  `nama_smenu` varchar(100) CHARACTER SET latin1 NOT NULL,
  `slink` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sicon` varchar(50) CHARACTER SET latin1 NOT NULL,
  `anak` int(1) NOT NULL,
  `sstatus` tinyint(1) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`smenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `tbl_submenu`
--

INSERT INTO `tbl_submenu` (`smenu_id`, `parent`, `nama_smenu`, `slink`, `sicon`, `anak`, `sstatus`, `level`) VALUES
(1, 2, 'Data Umum', 'umum', '#', 1, 1, 1),
(3, 3, 'Hak Akses', 'hak_akses', '#', 0, 0, 1),
(4, 2, 'Ref. Akademik', 'javascript:;', '#', 1, 1, 1),
(5, 3, 'Set Menu', 'set_menu', '#', 0, 0, 1),
(69, 3, 'User', 'user', '#', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submenux`
--

CREATE TABLE IF NOT EXISTS `tbl_submenux` (
  `smenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `parentx` int(5) NOT NULL,
  `nama_smenux` varchar(100) CHARACTER SET latin1 NOT NULL,
  `slinkx` varchar(50) CHARACTER SET latin1 NOT NULL,
  `siconx` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sstatusx` tinyint(1) NOT NULL,
  `levelx` int(11) NOT NULL,
  `urut` int(11) NOT NULL,
  PRIMARY KEY (`smenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_submenux`
--

INSERT INTO `tbl_submenux` (`smenu_id`, `parentx`, `nama_smenux`, `slinkx`, `siconx`, `sstatusx`, `levelx`, `urut`) VALUES
(1, 4, 'Data Kelas', 'kelas', '#', 1, 1, 1),
(2, 1, 'Data Agama', 'agama', '#', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usermenu`
--

CREATE TABLE IF NOT EXISTS `tbl_usermenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(30) CHARACTER SET latin1 NOT NULL,
  `menu` text CHARACTER SET latin1 NOT NULL,
  `menux` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_usermenu`
--

INSERT INTO `tbl_usermenu` (`id`, `kode`, `menu`, `menux`) VALUES
(5, 'U-0002', '1|4|', '2|1|');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_username`
--

CREATE TABLE IF NOT EXISTS `tbl_username` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `level` char(1) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`,`username`),
  KEY `ID` (`id`),
  KEY `USERNAME` (`username`),
  KEY `RFID` (`kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_username`
--

INSERT INTO `tbl_username` (`id`, `kode`, `nama`, `username`, `password`, `level`) VALUES
(23, 'U-0001', 'HENDY ANDRIANTO', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0'),
(27, 'U-0002', 'Admin Dua', 'U-0002', 'b0baee9d279d34fa1dfd71aadb908c3f', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
