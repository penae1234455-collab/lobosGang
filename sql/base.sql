-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql112.infinityfree.com
-- Generation Time: Nov 19, 2025 at 09:31 PM
-- Server version: 11.4.7-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_40461258_lobos`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `email`, `contrasena`, `created_at`) VALUES
(1, 'Jonathan Sierra', 'jonathan@gmail.com', '1234567', '2025-11-20 00:24:20'),
(2, 'lobos', 'lobos@gmail.com', '$2y$10$yc8SCJgE9fLhA0LAV.8Uk.0zIBz3nCFzyGKK13qAA94/R40oEeyXy', '2025-11-20 00:27:17'),
(3, 'erick_fer', 'erick@mail.com', '$2y$10$S1PF3M0srDKfku9LSHI8l.Veub00.NfLxnOJvSZn6AXHo.6pOi7Zu', '2025-11-20 02:12:44'),
(4, 'Areli Reyes', 'areli@gmail.com', '$2y$10$Hi4VBb1f6nqyUUisf01CO.I1DTTUFogPRsOdD/EP/c0WrRH7ghRbS', '2025-11-20 02:22:47'),
(5, 'Jonathan sierra', 'Jonathansierra.2016@hotmail.com', '$2y$10$A1Qxe9NEl5h3fXLrwSPmb./OvzGHHID/sqcPLm9kMQCjuvY.fvLe2', '2025-11-20 02:29:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_usuarios_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
