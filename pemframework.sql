-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2023 at 02:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemframework`
--

-- --------------------------------------------------------

--
-- Table structure for table `okky_genre_lagu`
--

CREATE TABLE `okky_genre_lagu` (
  `idGenre` int(11) NOT NULL,
  `namaGenre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `okky_genre_lagu`
--

INSERT INTO `okky_genre_lagu` (`idGenre`, `namaGenre`) VALUES
(1, 'Pop'),
(3, 'Pop Punk'),
(4, 'Rock');

-- --------------------------------------------------------

--
-- Table structure for table `okky_lagu`
--

CREATE TABLE `okky_lagu` (
  `idLagu` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penyanyi` varchar(255) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `genre` int(11) NOT NULL,
  `album` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `okky_lagu`
--

INSERT INTO `okky_lagu` (`idLagu`, `judul`, `penyanyi`, `tahun`, `genre`, `album`, `durasi`) VALUES
(1, 'Semua Tentang Kita', 'Peterpan', '2003', 1, 'Taman Langit', '269'),
(2, 'Film Favorit', 'Sheila On 7', '2001', 1, 'Film Favorit', '226'),
(4, 'Kita Lawan Mereka', 'Stand Here Alone', '2015', 3, 'Melodichildish', '300'),
(5, 'Dari Mata Sang Garuda', 'Pee Wee Gaskins', '2010', 3, 'Ad Astra Per Aspera', '299'),
(6, 'Beraksi', 'Kotak', '2008', 4, 'Kotak Kedua', '350');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `okky_genre_lagu`
--
ALTER TABLE `okky_genre_lagu`
  ADD PRIMARY KEY (`idGenre`),
  ADD UNIQUE KEY `idGenre` (`idGenre`);

--
-- Indexes for table `okky_lagu`
--
ALTER TABLE `okky_lagu`
  ADD PRIMARY KEY (`idLagu`),
  ADD KEY `genre` (`genre`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `okky_genre_lagu`
--
ALTER TABLE `okky_genre_lagu`
  MODIFY `idGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `okky_lagu`
--
ALTER TABLE `okky_lagu`
  MODIFY `idLagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `okky_lagu`
--
ALTER TABLE `okky_lagu`
  ADD CONSTRAINT `genreToid` FOREIGN KEY (`genre`) REFERENCES `okky_genre_lagu` (`idGenre`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
