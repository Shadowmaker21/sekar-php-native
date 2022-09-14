-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 12:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server_email`
--

-- --------------------------------------------------------

--
-- Table structure for table `outbox_mail`
--

CREATE TABLE `outbox_mail` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `to` text DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `body` longtext DEFAULT NULL,
  `web_from` text DEFAULT 'KlikWM' COMMENT 'ganti sesuai domain / nama asplikasi nya',
  `lampiran` text DEFAULT NULL COMMENT 'gunakan tanda | untuk pemisah lampiran',
  `stt_lampiran` varchar(10) DEFAULT NULL COMMENT 'jika lampiran di hapus isi "hapus", jika tidak isi "tetap"',
  `create_date` datetime DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `flag` varchar(2) DEFAULT '*' COMMENT 'detail flag lihat di db automailer',
  `insert_from` text DEFAULT NULL,
  `update_from` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outbox_mail`
--
ALTER TABLE `outbox_mail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outbox_mail`
--
ALTER TABLE `outbox_mail`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
