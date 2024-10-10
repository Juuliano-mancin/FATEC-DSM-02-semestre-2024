-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 08:46 PM
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
-- Database: `sistema_clientes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `arquivo_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nome`, `email`, `arquivo_pdf`) VALUES
(1, 'Joao', 'Joao@email.com', '67081fcf3a97f-Documento.pdf'),
(2, 'Marcos', 'Marcos@email', '67081fef546ed-Documento.pdf'),
(3, 'Beatriz', 'Bia@email', '670820073a917-Documento.pdf'),
(4, 'Julia', 'Julia@email', '6708201d05cb8-Documento.pdf'),
(5, 'Thiago', 'Thiago@email', '67082040e0c35-Documento.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel_acesso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel_acesso`) VALUES
(1, 'Juliano', 'Juliano@email.com', '$2y$10$IpBR5CEJ3b54OLXYShKYbODpDvRbvkXd1YmT3CfzC1Y4BbIdy3F4e', 'COMUM'),
(3, 'Monise', 'Monise@email', '$2y$10$yUTIJ5VzN9cZRTC/bihas.fWdjIRQHpSBkIlhi0.iqVWKwthLXzfm', 'COMUM'),
(4, 'Daniel', 'Daniel@email', '$2y$10$.V6LBSiyBt79FTeXvNtAO.NXtAA8d2O/QIIXyGmFp4VGsXrP4AoPC', 'COMUM'),
(5, 'Moises', 'Moises@email', '$2y$10$PNGESrx91Q9Jqs447flSHuliT6JeRURoiX5vS2CsKDE4nfb9EUya.', 'COMUM'),
(6, 'David', 'David@email', '$2y$10$PxohBANOquZtLV5uNJqkgeS9DqK6MwMyGgJFWfFKctehVz.yTnkV6', 'COMUM'),
(7, 'william', 'william@email', '$2y$10$bPuCSFkNrt7hZ9W9NfAqZ.4TWJxJmX//vYK9EMdjmfPWFvw7ESVMy', 'COMUM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
