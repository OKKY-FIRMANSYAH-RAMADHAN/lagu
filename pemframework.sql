-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2023 at 08:44 AM
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
-- Table structure for table `okky_lagu`
--

CREATE TABLE `okky_lagu` (
  `idLagu` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penyanyi` varchar(255) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `okky_lagu`
--

INSERT INTO `okky_lagu` (`idLagu`, `judul`, `penyanyi`, `tahun`, `genre`, `album`, `durasi`) VALUES
(1, 'Dumes', 'Wawes feat Guyon Waton', '2023', 'Dangdut', 'Dumes', '313'),
(2, 'Semua Tentang Kita', 'Peterpan', '2003', 'Pop', 'Taman Langit', '269'),
(3, 'Asal Kau Bahagia', 'Armada', '2017', 'Pop', 'Maju Terus Pantang Mundur', '258'),
(4, 'Film Favorit', 'Sheila On 7', '2018', 'Pop', 'Film Favorit', '226'),
(5, 'Sesuatu Yang Indah', 'Padi Asik Banget', '2010', 'Pop', 'Sesuatu yang Tertunda', '400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `okky_lagu`
--
ALTER TABLE `okky_lagu`
  ADD PRIMARY KEY (`idLagu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `okky_lagu`
--
ALTER TABLE `okky_lagu`
  MODIFY `idLagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
