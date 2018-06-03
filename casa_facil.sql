-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2018 at 12:11 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.1.17-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casa_facil`
--

-- --------------------------------------------------------

--
-- Table structure for table `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `area` double NOT NULL,
  `tipo` enum('casa','apartamento','terreno') DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `titulo` varchar(40) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `alugar_ou_vender` enum('alugar','vender') DEFAULT NULL,
  `numero_de_quartos` int(10) UNSIGNED DEFAULT '0',
  `numero_de_banheiros` int(10) UNSIGNED DEFAULT '0',
  `garagem` tinyint(3) UNSIGNED DEFAULT '0',
  `sistema_de_seguranca` tinyint(3) UNSIGNED DEFAULT '0',
  `ar_condicionado` tinyint(3) UNSIGNED DEFAULT '0',
  `laje` tinyint(3) UNSIGNED DEFAULT '0',
  `varanda` tinyint(3) UNSIGNED DEFAULT '0',
  `poco_artesiano` tinyint(3) UNSIGNED DEFAULT '0',
  `internet` tinyint(3) UNSIGNED DEFAULT '0',
  `piscina` tinyint(3) UNSIGNED DEFAULT '0',
  `tv_a_cabo` tinyint(3) UNSIGNED DEFAULT '0',
  `jardim` tinyint(3) UNSIGNED DEFAULT '0',
  `cerca_eletrica` tinyint(3) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imoveis`
--

INSERT INTO `imoveis` (`id`, `usuario_id`, `endereco`, `bairro`, `area`, `tipo`, `valor`, `imagem`, `titulo`, `descricao`, `alugar_ou_vender`, `numero_de_quartos`, `numero_de_banheiros`, `garagem`, `sistema_de_seguranca`, `ar_condicionado`, `laje`, `varanda`, `poco_artesiano`, `internet`, `piscina`, `tv_a_cabo`, `jardim`, `cerca_eletrica`) VALUES
(1, 1, 'Rua Claudomiro de Moraes', 'Buritizal', 150, 'casa', 150000, 'img01.jpg', 'Casa para vender no bairro buritizal', 'Casa com 2 quartos, 1 suíte e garagem.', 'vender', 3, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 'Avenida Fab', 'Centro', 150, 'casa', 400000, 'img02.jpg', 'Casa para vender no Centro', 'Casa com 2 quartos, 1 suíte e garagem.', 'vender', 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 2, 'Rua Santos Dumont', 'Santa Rita', 100, 'apartamento', 15000, 'img03.jpg', 'Apartamento para alugar no Santa Rita', 'Apartamento com 2 quartos, sem garagem', 'alugar', 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 1, 'Rua Professor Tostes', 'Buritizal', 180, 'casa', 200000, 'img04.jpg', 'Casa no buritizal', 'Casa no Buritizal, excelente localização, vizinhança tranquila, 1 suíte, 2 quartos e garagem para 2 carros.', NULL, 3, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 1, 'Avenida Vereador Orlando Pinto, 15', 'Santa Rita', 160, 'casa', 2500, 'img05.jpg', 'CAsa para alugar', 'Casa para alugar no Santa Rita, excelente localização, próximo ao hospital São Camilo.', 'alugar', 2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 3, 'Rua Vinte e Seis de Julho', 'Buritizal', 80, 'apartamento', 850, 'img06.jpg', 'Apartamento para alugar', 'Apartamento para alugar em conjunto residencial tranquilo.', 'alugar', 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 2, 'Rua Santos Dumont', 'universidade', 100, 'apartamento', 1500, 'img03.jpg', 'Apartamento para alugar no Universidade', 'Apartamento com 2 quartos, sem garagem', 'alugar', 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 1, '', 'Centro', 150, 'apartamento', 500000, 'predio-residencial.jpg', 'Apartamento no centro', 'Apartamento em excelente condomÃ­nio residencial. 3 quartos, 2 banheiros e garagem para 2 carros.', 'vender', 3, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Natan', 'natan@email.com', 'casafacil'),
(2, 'Matheus', 'matheus@email.com', 'casafacil'),
(3, 'Andre', 'andre@email.com', 'casafacil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `imoveis`
--
ALTER TABLE `imoveis`
  ADD CONSTRAINT `imoveis_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
