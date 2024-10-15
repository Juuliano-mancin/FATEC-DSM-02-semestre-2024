-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 09:30 AM
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
-- Database: `shopsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `nome`, `descricao`, `preco`, `quantidade`, `imagem`) VALUES
(11, 'Produto 01 ', 'Descrição do Produto 01', 10.00, 200, '670dfadb4d34c-Produto01.jpg'),
(12, 'Produto 02', 'Descrição do Produto 02', 10.00, 100, '670dfaf615ed8-Produto02.jpg'),
(13, 'Produto 03', 'Descrição do Produto 03', 10.00, 100, '670dfb0669ab6-Produto03.jpg'),
(14, 'produto 04', 'Descrição do Produto 04', 10.00, 100, '670dfb17aa9d9-Produto04.jpg'),
(15, 'Produto 05', 'Descrição do Produto 05', 10.00, 100, '670dfb3e69421-Produto05.jpg'),
(16, 'Produto 06', 'Descrição do Produto 06', 10.00, 100, '670dfb4e93728-Produto06.jpg'),
(17, 'Produto 07', 'Descrição do Produto 07', 10.00, 100, '670dfb5e50083-Produto07.jpg'),
(18, 'Produto 08', 'Descrição do Produto 08', 10.00, 100, '670dfb74daed2-Produto08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivelacesso` enum('Visitante','Comum','Administrador') NOT NULL DEFAULT 'Visitante'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `email`, `senha`, `nivelacesso`) VALUES
(26, 'Juliano Mancini', 'Juliano@adm', '$2y$10$XpW6wDK.rk79QAaBDxYvQOQgwSAiX/quEHM7PRxRktHJEyhN2miPm', 'Administrador'),
(27, 'Monise', 'Monise@email', '$2y$10$HVouPMMpNOSVgl1B5cKynO/5g07RaRCpEeK9FKvx2mLAQCIbHxcdS', 'Comum'),
(28, 'Daniel', 'Daniel@email', '$2y$10$I0pc09K.HWzjJRw39EKgjO10NDnQdBSg/MTX9DtqsubcQ2eOeRTF.', 'Comum'),
(29, 'Moises', 'Moises@email', '$2y$10$PHi4bwJOX/GPIK.PglkVk.anpYuz5/tqW/M.IuMafpRLIipsX7LTK', 'Comum'),
(30, 'David', 'David@email', '$2y$10$KzNus/PhVp56lIoG8zdI7OUHpiCmay4gYWK7tCZd.DAIo22fPWf/G', 'Comum'),
(31, 'William', 'William@email', '$2y$10$L3XUi/6C3qbimtVbuCYyVuANqogz9ZLZtdijSfKKv/d8kJngxtQuC', 'Comum'),
(32, 'Visitante 01', 'Visitante01@email', '$2y$10$fhreEvpM7jT110pjOUCl7O6s49/P9z/Rv0vM9oiY8IQisaW.cwdku', 'Visitante'),
(33, 'Visitante 02', 'visitante02@email', '$2y$10$rjzqyNUYbaZIQyTArRdQvumf7JZqQnjgacduoJi5qboKWgqgBOTo2', 'Visitante'),
(34, 'visitante 03', 'visitante03@email', '$2y$10$Z/bk2TMGXd0UFH53lPkkMu4GNiy0MqIAavt9GNuAJL.RpK7z1brfi', 'Visitante');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
