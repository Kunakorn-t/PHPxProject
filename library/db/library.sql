-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 09:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `btitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bcate` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `btitle`, `bcate`) VALUES
('b1', 'btdhjtyjty', 'brthjtm'),
('b2', 'bgfmiuo8', 'vfgnghmy');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mdep` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mid`, `mname`, `mdep`) VALUES
('123', 'พ้ื่ัะ่ัะะทาสเดกทอำ', 'เกด้ะพ่'),
('456', 'าัีีัส่ห้กา้สภถ่', 'อกดเัพ่ะั่');

-- --------------------------------------------------------

--
-- Table structure for table `transections`
--

CREATE TABLE `transections` (
  `mid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tlend` date NOT NULL,
  `trest` date NOT NULL,
  `tstat` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transections`
--

INSERT INTO `transections` (`mid`, `bid`, `tlend`, `trest`, `tstat`) VALUES
('123', 'b1', '2020-05-17', '2020-05-17', 0),
('123', 'b1', '2020-05-17', '2020-05-17', 0),
('123', 'b2', '2020-05-17', '2020-05-17', 0),
('123', 'b1', '2020-05-17', '2020-05-17', 0),
('123', 'b1', '2020-05-17', '2020-05-17', 0),
('123', 'b1', '2020-05-17', '2020-05-17', 0),
('123', 'b1', '2020-05-17', '2020-05-18', 0),
('456', 'b1', '2020-05-18', '2020-05-18', 0),
('123', 'b2', '2020-05-18', '2020-05-18', 0),
('123', 'b1', '2020-05-18', '2020-05-18', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
