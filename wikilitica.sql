-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2017 às 04:51
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wikilitica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_usuario`
--

CREATE TABLE `t_usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `cpf` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_usuario`
--

INSERT INTO `t_usuario` (`id`, `email`, `senha`, `cpf`, `nome`, `telefone`, `data_nasc`, `sexo`, `endereco`, `estado`, `cidade`) VALUES
(1, 'arthurfalcao77@gmail.com', '12345', 0, 'Arthur JosÃ© Vasconcelos FalcÃ£o', 2147483647, '0000-00-00', 'masculino', 'Rua SebastiÃ£o Correia da Rocha, 296', 'AL', 'MaceiÃ³');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_usuario`
--
ALTER TABLE `t_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Estrutura da tabela `t_politico`
--

CREATE TABLE `t_politico` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `profissao` varchar(150) NOT NULL,
  `funcao` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `p_atual` varchar(50) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
