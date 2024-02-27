-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 05:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `junglebikebd`
--

-- --------------------------------------------------------

--
-- Table structure for table `taches_maintenance`
--

CREATE TABLE `taches_maintenance` (
  `id_tache` int(11) NOT NULL,
  `descriptions` varchar(100) NOT NULL,
  `statut` varchar(20) NOT NULL,
  `id_velo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taches_maintenance`
--

INSERT INTO `taches_maintenance` (`id_tache`, `descriptions`, `statut`, `id_velo`) VALUES
(7, 'test', 'en cours', 4),
(8, 'this is a test', 'EN COURS', 1),
(9, 'tses', 'TERMINÉ', 7);

-- --------------------------------------------------------

--
-- Table structure for table `velos`
--

CREATE TABLE `velos` (
  `id_velo` int(11) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL,
  `types` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `velos`
--

INSERT INTO `velos` (`id_velo`, `marque`, `modele`, `types`) VALUES
(1, 'Brand1', 'Model1', 'Type1'),
(2, 'Brand2', 'Model2', 'Type2'),
(3, 'Brand3', 'Model3', 'Type3'),
(4, 'Brand4', 'Model4', 'Type4'),
(5, 'Brand5', 'Model5', 'Type5'),
(6, 'Brand6', 'Model6', 'Type6'),
(7, 'Brand7', 'Model7', 'Type7'),
(8, 'Brand8', 'Model8', 'Type8'),
(9, 'Brand9', 'Model9', 'Type9'),
(10, 'Brand10', 'Model10', 'Type10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taches_maintenance`
--
ALTER TABLE `taches_maintenance`
  ADD PRIMARY KEY (`id_tache`);

--
-- Indexes for table `velos`
--
ALTER TABLE `velos`
  ADD PRIMARY KEY (`id_velo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taches_maintenance`
--
ALTER TABLE `taches_maintenance`
  MODIFY `id_tache` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `velos`
--
ALTER TABLE `velos`
  MODIFY `id_velo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
