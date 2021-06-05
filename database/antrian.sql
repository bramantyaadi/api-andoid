-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2021 at 04:16 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `nomor_antrian`
--

CREATE TABLE `nomor_antrian` (
  `id` int(11) NOT NULL,
  `nomor_antrian` varchar(255) NOT NULL,
  `jam_dibuat` time NOT NULL,
  `jam_dipanggil` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nomor_antrian`
--

INSERT INTO `nomor_antrian` (`id`, `nomor_antrian`, `jam_dibuat`, `jam_dipanggil`, `created_at`, `updated_at`) VALUES
(1, 'A001', '07:06:07', '07:06:07', '2021-06-05 00:00:00', '2021-06-05 00:00:00'),
(2, 'A002', '06:00:00', '06:00:00', '2021-06-05 06:00:00', '2021-06-05 04:00:00'),
(3, 'A003', '07:06:07', '07:06:07', '2021-06-05 00:00:00', '2021-06-05 00:00:00'),
(4, 'A004', '06:00:00', '06:00:00', '2021-06-05 06:00:00', '2021-06-05 04:00:00'),
(5, 'A005', '19:00:00', '19:00:00', '2021-06-05 04:00:00', '2021-06-05 03:00:00'),
(6, 'A006', '19:00:00', '19:00:00', '2021-06-05 04:00:00', '2021-06-05 03:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nomor_antrian`
--
ALTER TABLE `nomor_antrian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nomor_antrian`
--
ALTER TABLE `nomor_antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
