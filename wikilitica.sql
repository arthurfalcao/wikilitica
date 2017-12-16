-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Dez-2017 às 07:00
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
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `ID_ESTADO` int(11) NOT NULL,
  `NOME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`ID_ESTADO`, `NOME`) VALUES
(1, 'ACRE'),
(2, 'ALAGOAS'),
(3, 'AMAPA'),
(4, 'AMAZONAS'),
(5, 'BAHIA'),
(6, 'CEARÁ'),
(7, 'DISTRITO FEDERAL'),
(8, 'ESPÍRITO SANTO'),
(9, 'GOIÁS'),
(10, 'MARANHÃO'),
(11, 'MATO GROSSO'),
(12, 'MATO GROSSO DO SUL'),
(13, 'MINAS GERAIS'),
(14, 'PARÁ'),
(15, 'PARAÍBA'),
(16, 'PARANÁ'),
(17, 'PERNAMBUCO'),
(18, 'PIAUÍ'),
(19, 'RIO DE JANEIRO'),
(20, 'RIO GRANDE DO NORTE'),
(21, 'RIO GRANDE DO SUL'),
(22, 'RÔNDONIA'),
(23, 'RORAIMA'),
(24, 'SANTA CATARINA'),
(25, 'SÃO PAULO'),
(26, 'SERGIPE'),
(27, 'TOCANTINS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `municipio`
--

CREATE TABLE `municipio` (
  `ID_MUNICIPIO` int(11) NOT NULL,
  `NOME` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `ESTADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `municipio`
--

INSERT INTO `municipio` (`ID_MUNICIPIO`, `NOME`, `ESTADO`) VALUES
(1, 'MACEIÓ', 2),
(2, 'ARAPIRACA', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `partido`
--

CREATE TABLE `partido` (
  `ID_PARTIDO` int(11) NOT NULL,
  `ESPECTRO` varchar(10) NOT NULL,
  `NOME` varchar(30) NOT NULL,
  `SIGLA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `partido`
--

INSERT INTO `partido` (`ID_PARTIDO`, `ESPECTRO`, `NOME`, `SIGLA`) VALUES
(1, 'direita', 'FLOW', 'FLOW');

-- --------------------------------------------------------

--
-- Estrutura da tabela `politico`
--

CREATE TABLE `politico` (
  `ID_POLITICO` int(11) NOT NULL,
  `NOME` varchar(30) NOT NULL,
  `DATA_NASC` date NOT NULL,
  `SEXO` varchar(10) NOT NULL,
  `PROFISSAO` varchar(30) NOT NULL,
  `FUNCAO` varchar(30) NOT NULL,
  `ESTADO` int(11) NOT NULL,
  `PARTIDO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `politico`
--

INSERT INTO `politico` (`ID_POLITICO`, `NOME`, `DATA_NASC`, `SEXO`, `PROFISSAO`, `FUNCAO`, `ESTADO`, `PARTIDO`) VALUES
(1, 'Arthur FalcÃ£o', '1998-11-17', 'Masculino', 'Desenvolvedor FullStack', 'Presidente', 2, 1),
(2, 'Joab Leite', '1993-12-24', 'masculino', 'Viado', 'Presidente', 10, 1),
(3, 'Rodrigo Ã© burro vum', '1998-12-24', 'Selecione', 'Faz nada', 'D.Federal', 17, 1),
(4, 'Joab Leite', '1991-12-14', 'Masculino', 'Teste123', 'Presidente', 1, 1),
(5, 'Arthur', '0000-00-00', 'masculino', 'Empresario', 'Senador', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `CPF` varchar(11) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `SENHA` varchar(30) NOT NULL,
  `NOME` varchar(80) NOT NULL,
  `TELEFONE` varchar(15) NOT NULL,
  `ENDERECO` varchar(100) NOT NULL,
  `DATA_NASC` date NOT NULL,
  `ESTADO` varchar(20) NOT NULL,
  `CIDADE` varchar(20) NOT NULL,
  `SEXO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`CPF`, `EMAIL`, `SENHA`, `NOME`, `TELEFONE`, `ENDERECO`, `DATA_NASC`, `ESTADO`, `CIDADE`, `SEXO`) VALUES
('0', 'arthurfalcao77@gmail.com', '12345', 'Arthur JosÃ© Vasconcelos FalcÃ£o', '2147483647', 'Rua SebastiÃ£o Correia da Rocha, 296', '1998-11-17', 'AL', 'MaceiÃ³', 'masculino'),
('11486687482', 'arthurfalcao7@hotmail.com', '12345', 'Arthur', '82996463248', 'Teste', '1998-11-17', 'Alagoas', 'Maceio', 'Masculino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`ID_ESTADO`);

--
-- Indexes for table `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`ID_MUNICIPIO`),
  ADD KEY `FK_MUNICIO_ESTADO` (`ESTADO`);

--
-- Indexes for table `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`ID_PARTIDO`);

--
-- Indexes for table `politico`
--
ALTER TABLE `politico`
  ADD PRIMARY KEY (`ID_POLITICO`),
  ADD KEY `FK_POLITICO_ESTADO` (`ESTADO`),
  ADD KEY `FK_POLITICO_PARTIDO` (`PARTIDO`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CPF`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `ID_ESTADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `municipio`
--
ALTER TABLE `municipio`
  MODIFY `ID_MUNICIPIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partido`
--
ALTER TABLE `partido`
  MODIFY `ID_PARTIDO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `politico`
--
ALTER TABLE `politico`
  MODIFY `ID_POLITICO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `FK_MUNICIO_ESTADO` FOREIGN KEY (`ESTADO`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Limitadores para a tabela `politico`
--
ALTER TABLE `politico`
  ADD CONSTRAINT `FK_POLITICO_ESTADO` FOREIGN KEY (`ESTADO`) REFERENCES `estado` (`ID_ESTADO`),
  ADD CONSTRAINT `FK_POLITICO_PARTIDO` FOREIGN KEY (`PARTIDO`) REFERENCES `partido` (`ID_PARTIDO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
