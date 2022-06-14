-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Dez-2021 às 22:49
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `NP3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_impressoras`
--

CREATE TABLE `cadastro_impressoras` (
  `ID` int(11) NOT NULL,
  `setor` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `driver` varchar(100) DEFAULT NULL,
  `toner` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_impressoras`
--

INSERT INTO `cadastro_impressoras` (`ID`, `setor`, `modelo`, `driver`, `toner`, `tipo`) VALUES
(21, 'CTW', 'CTW 6600', 'driver 6600', 'toner 6600', 'Colorido'),
(22, 'CTC', '4600', 'driver 4600', 'toner 4600', 'Preto e Branco'),
(24, 'CATOLICA', 'CATOLICA', 'driver catolica', 'toner CATOLICA', 'Preto e Branco'),
(25, 'Compras', '6605', 'driver 6605', 'toner 6605', 'Colorido'),
(26, 'edição unica', 'teste', 'teste', 'teste', 'Preto e Branco'),
(27, 'teste', 'teste', 'teste', 'test', 'Preto e Branco'),
(46, 'Pesquisa', '7010', 'driver 7010', 'toner 7010', 'Colorido'),
(47, 'tamanho1', 'tamanho1', 'tamanho1', 'tamanho1', 'Colorido'),
(57, 'TI', 'qweqwe', 'qweqweqwe', 'qweqwe', 'Colorido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_toner`
--

CREATE TABLE `estoque_toner` (
  `ID` int(100) NOT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `preto` int(100) DEFAULT NULL,
  `magenta` int(100) DEFAULT NULL,
  `ciano` int(100) DEFAULT NULL,
  `amarelo` int(100) DEFAULT NULL,
  `tipo` int(100) DEFAULT NULL,
  `data_entrada` varchar(100) DEFAULT NULL,
  `data_saida` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque_toner`
--

INSERT INTO `estoque_toner` (`ID`, `modelo`, `preto`, `magenta`, `ciano`, `amarelo`, `tipo`, `data_entrada`, `data_saida`) VALUES
(7, 'toner 6600', 24, 0, 2, 0, 1, '21:11:13 - 28/11/2021', NULL),
(8, 'toner 4600', 8, 0, 0, 0, 1, NULL, NULL),
(9, 'teste8', 24, 0, 0, 0, 1, '20:11:26 - 28/11/2021', '20:11:26 - 28/11/2021'),
(10, 'teste10', 10, 0, 0, 0, 1, '20:11:34 - 28/11/2021', NULL),
(11, 'teste11', 0, 0, 0, 0, 1, NULL, NULL),
(12, 'teste12', 0, 0, 0, 0, 1, NULL, NULL),
(13, 'teste13', 9, 0, 0, 0, 1, NULL, NULL),
(14, 'teste14', 0, 0, 0, 0, 1, NULL, NULL),
(15, 'teste15', 29, 0, 0, 0, 1, '20:11:29 - 28/11/2021', NULL),
(16, 'teste16', 0, 0, 0, 0, 1, NULL, NULL),
(17, 'teste17', 19, 54, 35, 30, 2, '21:11:44 - 28/11/2021', '21:11:10 - 28/11/2021'),
(18, 'toner 7010', 0, 0, 0, 0, 2, '22:11:43 - 28/11/2021', NULL),
(19, 'tamanho1', 0, 0, 0, 0, 2, NULL, NULL),
(20, 'tamanho2', 0, 0, 0, 0, 1, NULL, NULL),
(21, 'tamanho3', 0, 0, 0, 0, 1, NULL, NULL),
(22, 'tamanho4', 200, 0, 0, 0, 1, '11:12:49 - 02/12/2021', NULL),
(23, 'tamanho5', 0, 0, 0, 0, 1, NULL, NULL),
(24, 'tamanho6', 0, 0, 0, 0, 1, NULL, NULL),
(25, 'tamanho7', 0, 0, 0, 0, 1, NULL, NULL),
(26, 'tamanho8', 0, 0, 0, 0, 1, NULL, NULL),
(27, 'teste20', 0, 0, 0, 0, 1, NULL, NULL),
(28, 'teste30', 388, 378, 413, 441, 2, '11:12:03 - 03/12/2021', '19:11:07 - 29/11/2021'),
(29, 'qweqwe', 0, 0, 0, 0, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressoras`
--

CREATE TABLE `impressoras` (
  `ID` int(100) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `nivel` int(100) DEFAULT NULL,
  `modelo_impressora` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `impressoras`
--

INSERT INTO `impressoras` (`ID`, `usuario`, `senha`, `nivel`, `modelo_impressora`) VALUES
(2, 'teste1', 'Senha1', NULL, NULL),
(3, 'teste2', 'teste2', NULL, NULL),
(15, 'teste3', 'teste3', NULL, NULL),
(16, 'teste4', 'teste4', NULL, NULL),
(17, 'kaue', 'kaue', NULL, NULL),
(18, 'kloun', 'kloun', NULL, NULL),
(19, 'Wanderlei', '123', NULL, NULL),
(20, 'teste1', 'teste1', NULL, NULL),
(21, 'casa', '123', NULL, NULL),
(22, 'testenivel', '123', 1, NULL),
(23, 'testenivel', '123', 1, NULL),
(24, 'Bruno', '123', 2, NULL),
(25, 'Santer', 'Santer', 2, NULL),
(26, 'Teste cadastro', '123', 1, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_impressoras`
--
ALTER TABLE `cadastro_impressoras`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `estoque_toner`
--
ALTER TABLE `estoque_toner`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `impressoras`
--
ALTER TABLE `impressoras`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_impressoras`
--
ALTER TABLE `cadastro_impressoras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `estoque_toner`
--
ALTER TABLE `estoque_toner`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `impressoras`
--
ALTER TABLE `impressoras`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
