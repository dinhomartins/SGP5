-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jul-2019 às 19:34
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_curs`
--

CREATE TABLE `aluno_curs` (
  `ID` int(11) NOT NULL,
  `ID_ALUNO` varchar(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `CURSE` varchar(50) NOT NULL,
  `horario` varchar(20) NOT NULL,
  `dia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno_curs`
--

INSERT INTO `aluno_curs` (`ID`, `ID_ALUNO`, `NAME`, `CURSE`, `horario`, `dia`) VALUES
(14, ' 47 ', ' Junior Henrique Ximenes Reis ', 'Informix', '14:00 - 18:00', 'Sexta'),
(15, ' 47 ', ' Junior Henrique Ximenes Reis ', '', '14:00 - 17:00', 'Sexta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_nasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `endereco`, `bairro`, `cidade`, `estado`, `data_nasc`) VALUES
(47, 'Junior Henrique Ximenes Reis', '', '', '', 'GO', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_aluno`
--

CREATE TABLE `cad_aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cad_aluno`
--

INSERT INTO `cad_aluno` (`id`, `nome`, `endereco`) VALUES
(1, 'ubiraci martins souto', 'rua 21 quadra 27 lote 7, 1'),
(2, 'Pedro', ''),
(3, 'Maria', ''),
(4, 'Maria', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `ID_CURSO` int(11) NOT NULL,
  `NOME_CURSO` varchar(50) NOT NULL,
  `FK_ALUNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE `modulos` (
  `ID` int(11) NOT NULL,
  `ID_MODULO` int(11) NOT NULL,
  `MODULO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`ID`, `ID_MODULO`, `MODULO`) VALUES
(1, 1, 'IPD'),
(2, 2, 'WINDOWS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` int(11) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `dia` varchar(50) NOT NULL,
  `semana` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `curso`, `dia`, `semana`) VALUES
(8, 'Interativo', 'Sexta', '14:00 - 18:00'),
(9, 'Interativo', 'Sexta', '08:00 - 11:00'),
(10, 'Eletricista', 'Quarta', '18:00 - 20:00'),
(11, 'Interativo', 'Sexta', '08:00 - 10:00'),
(12, 'Cabelereiro', 'TerÃ§a', '08:00 - 11:00'),
(13, 'Interativo InforMix', 'Quarta', '08:00 - 09:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno_curs`
--
ALTER TABLE `aluno_curs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_aluno`
--
ALTER TABLE `cad_aluno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`ID_CURSO`),
  ADD KEY `FK_ALUNO` (`FK_ALUNO`);

--
-- Indexes for table `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno_curs`
--
ALTER TABLE `aluno_curs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cad_aluno`
--
ALTER TABLE `cad_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modulos`
--
ALTER TABLE `modulos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`FK_ALUNO`) REFERENCES `cadastro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
