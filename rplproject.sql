-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 09:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rplproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `package` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `transfer_proof` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `name`, `email`, `datetime`, `package`, `message`, `transfer_proof`, `created_at`) VALUES
(1, 'Jamilatul Muyasaroh', 'jamilatulmuyasarohh@student.uns.ac.id', '0000-00-00 00:00:00', 0, '-', 'uploads/carbon (7).png', '2024-06-18 15:54:21'),
(3, 'meyl', 'jamilatulmuyasaroh@gmail.com', '0000-00-00 00:00:00', 0, '-', 'uploads/carbon (5).png', '2024-06-18 16:19:14'),
(7, 'Lucyana Devvi', 'lucydev@gmail.com', '0000-00-00 00:00:00', 0, '-', 'uploads/carbon (7).png', '2024-06-18 16:37:17'),
(8, 'holly', 'lucydev@gmail.com', '0000-00-00 00:00:00', 0, 'hi', 'uploads/carbon (7).png', '2024-06-18 17:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`) VALUES
(9, 'Milz', 'Milz', 'loveRR@gmail.com', '$2y$10$fXQeAunWLw//LLllDuMIjuEh.Z.W6KGQrolbBwp9LiVkJG2FLoW4e'),
(11, 'Jamilatul Muyasaroh', 'JamilatulMzy', 'jamilatulmuyasaroh@gmail.com', '$2y$10$DMVuYmYWza2krD.ubh0lteqcb7PKhaASP2z/EUuHo8q6.dVogIs2K'),
(12, 'Jamilatul Muyasaroh', 'Mils', 'jams@gmail.com', '$2y$10$MAqVIjNsu9/z3Yrho71PRu8Ih6S.3y/YDdq3.IKR4pYcMio9XorT2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
