-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jul-2022 às 21:14
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pelcom`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `armeiro`
--

CREATE TABLE `armeiro` (
  `grad` varchar(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `companhia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `armeiro`
--

INSERT INTO `armeiro` (`grad`, `nome`, `companhia`) VALUES
('0', '0', '0'),
('SD', 'Ponjjar', 'Pelcom');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cautela`
--

CREATE TABLE `cautela` (
  `data` varchar(50) NOT NULL,
  `grad` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `quantidade` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `assinatura` varchar(255) NOT NULL,
  `dataDescautela` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cautela`
--

INSERT INTO `cautela` (`data`, `grad`, `nome`, `quantidade`, `item`, `serie`, `obs`, `assinatura`, `dataDescautela`, `id`) VALUES
('05/07/2022', 'SD', 'Ponjjar', 1, 'Rádio falcon 3', '12345', '-', 'Ponjjar', '2022-07-05', 26),
('11/07/2022', 'SD', 'Gonçalves', 5, 'Colete bálisto', 'e123123', 'um deles ta quebrado', 'Gonçalves', '2022-07-11', 27),
('11/07/2022', 'SD', 'teste', 1, 'teste', 'teste', '-', 'CEARA', '2022-07-11', 28),
('11/07/2022', 'SD', 'teste', 1, 'teste', 'teste', '-', '', '', 29),
('11/07/2022', 'SD', 'Ponjjar', 1, 'Falcon 3', '123123', '-', '', '', 30),
('11/07/2022', 'SD', 'Ponjjar', 6, 'Falcon 3', '123123', '-', '', '', 31),
('11/07/2022', 'SD', 'Ponjjar', 1, '0', '123123', '-', '', '', 32),
('11/07/2022', 'SD', 'Ponjjar', 1, '0', '123123', '-', '', '', 33),
('11/07/2022', '0', '0', 1, '0', '123123', '-', '', '', 34),
('11/07/2022', '0', '0', 1, '0', '123123', '-', '', '', 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `nome` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`nome`) VALUES
('0'),
('Falcon 3'),
(''),
('xts'),
('Yaesu'),
('teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `serie`
--

CREATE TABLE `serie` (
  `categoria` varchar(11) NOT NULL,
  `nserie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `serie`
--

INSERT INTO `serie` (`categoria`, `nserie`) VALUES
('xts', '123123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cautela`
--
ALTER TABLE `cautela`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cautela`
--
ALTER TABLE `cautela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
