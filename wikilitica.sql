-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Dez-2017 às 04:03
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
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USER` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`ID`, `USER`, `PASSWORD`) VALUES
(1, 'admin', 'admin');

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
(1, 'Acre'),
(2, 'Alagoas'),
(3, 'Amapa'),
(4, 'Amazonas'),
(5, 'Bahia'),
(6, 'Ceará'),
(7, 'Distrito Federal'),
(8, 'Espírito Santo'),
(9, 'Goiás'),
(10, 'Maranhão'),
(11, 'Mato Grosso'),
(12, 'Mato Grosso do Sul'),
(13, 'Minas Gerais'),
(14, 'Pará'),
(15, 'Paraíba'),
(16, 'Paraná'),
(17, 'Pernambuco'),
(18, 'Piauí'),
(19, 'Rio de Janeiro'),
(20, 'Rio Grande do Norte'),
(21, 'Rio Grande do Sul'),
(22, 'Rôndonia'),
(23, 'Roraima'),
(24, 'Santa Catarina'),
(25, 'São Paulo'),
(26, 'Sergipe'),
(27, 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `ID_HISTORICO` int(11) NOT NULL,
  `ID_POLITICO` int(11) NOT NULL,
  `PARTIDOS` varchar(10) NOT NULL,
  `CARGOS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`ID_HISTORICO`, `ID_POLITICO`, `PARTIDOS`, `CARGOS`) VALUES
(5, 11, 'IFAL', 'Senador'),
(6, 11, 'FLOW', 'Presidente'),
(7, 11, 'IFAL', 'Vereador');

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
(1, 'direita', 'FLOW', 'FLOW'),
(2, 'direita', 'Instituto Federal de Alagoas', 'IFAL');

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
  `PARTIDO` int(11) NOT NULL,
  `PROPOSTAS` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `politico`
--

INSERT INTO `politico` (`ID_POLITICO`, `NOME`, `DATA_NASC`, `SEXO`, `PROFISSAO`, `FUNCAO`, `ESTADO`, `PARTIDO`, `PROPOSTAS`) VALUES
(1, 'Arthur José Vasconcelos Falcão', '1998-11-17', 'masculino', 'Desenvolvedor Full-Stack', 'Presidente', 2, 1, ''),
(3, 'Franklin', '1995-07-29', 'Selecione', 'ladÃ£o classe a', 'Senador', 2, 1, ''),
(4, 'jao', '2000-06-06', 'Masculino', 'asd', 'Vereador', 1, 1, ''),
(6, 'Arthu', '1998-11-17', 'masculino', 'Desenvolvedor Back-End', 'Presidente', 2, 1, ''),
(7, 'Zatopek', '1998-11-17', 'masculino', 'Desenvolvedor', 'Vereador', 19, 1, ''),
(8, 'Zatopek', '1998-11-17', 'masculino', 'Desenvolvedor', 'Vereador', 19, 1, ''),
(9, 'Zatopek', '1998-11-17', 'masculino', 'Desenvolvedor', 'Vereador', 19, 1, ''),
(10, 'Arthur FalcÃ£o', '1998-11-17', 'Masculino', 'Desenvolvedor', 'Senador', 2, 1, 'TEsrasdasdas'),
(11, 'Zatopek12', '1998-11-17', 'Selecione', 'Corredor', 'Presidente', 1, 1, 'aadad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `CPF` bigint(11) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `SENHA` varchar(30) NOT NULL,
  `NOME` varchar(80) NOT NULL,
  `TELEFONE` bigint(15) NOT NULL,
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
(1, 'root@app.com', 'admin', 'ADMIN', 0, '', '0000-00-00', '', '', ''),
(11486687482, 'arthurfalcao77@gmail.com', '12345', 'Arthur JosÃ© Vasconcelos FalcÃ£o', 82996463248, 'Rua SebastiÃ£o Correia da Rocha, 296, BL 10 APT 204', '1998-11-17', 'AL', 'MaceiÃ³', 'Masculino'),
(1234567891011, 'asd@asd.com', '123', 'asd', 999999999, 'asd', '1999-06-06', 'Alagoas', 'MaceiÃ³', 'Masculino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`ID_ESTADO`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`ID_HISTORICO`),
  ADD KEY `FK_HISTORICO_POLITICO` (`ID_POLITICO`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `ID_ESTADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `historico`
--
ALTER TABLE `historico`
  MODIFY `ID_HISTORICO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `municipio`
--
ALTER TABLE `municipio`
  MODIFY `ID_MUNICIPIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partido`
--
ALTER TABLE `partido`
  MODIFY `ID_PARTIDO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `politico`
--
ALTER TABLE `politico`
  MODIFY `ID_POLITICO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `FK_HISTORICO_POLITICO` FOREIGN KEY (`ID_POLITICO`) REFERENCES `politico` (`ID_POLITICO`);

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
