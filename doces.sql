-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Out-2022 às 15:20
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
-- Banco de dados: `doces`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doces`
--

CREATE TABLE `doces` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `doces`
--

INSERT INTO `doces` (`id`, `nome_produto`, `preco_produto`, `peso`, `descricao`, `data`) VALUES
(3, 'Bolo de fubá', '45.00', '200g', 'bolo de fubá com cobertura de chocolate', '2022-10-28'),
(27, 'brigadeiro', '10.00', '50g', 'pote de brigadeiro', '2022-12-12'),
(28, 'brigadeiro', '10.00', '50g', 'pote de brigadeiro', '2022-12-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doces`
--
ALTER TABLE `doces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doces`
--
ALTER TABLE `doces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
