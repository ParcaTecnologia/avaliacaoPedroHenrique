-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Abr-2022 às 20:38
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_teste`
--

CREATE TABLE `tb_teste` (
  `id` int(11) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_teste`
--

INSERT INTO `tb_teste` (`id`, `cnpj`, `telefone`, `email`, `senha`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `status`) VALUES
(1, '99.999.999/0001-99', '17 991192933', 'teste@gmail.com', 'teste12345', 'exemplo bairro tal', '999', 'joão da silva', 'são josé do rio preto', 'sp', 0),
(9, '34269944889', '17991232688', 'rsmappli@gmail.com', '123456', 'AL. Norte', '150', 'JD. Primavera', 'SJ Rio PReto', 'SP', 0),
(10, '99.999.999/0001-21', '17991189344', 'anapaulacflores@hotmail.com', 'teste12345', 'rua teste', '150', 'Boa vista', 'SJ Rio PReto', 'SP', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_teste`
--
ALTER TABLE `tb_teste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_teste`
--
ALTER TABLE `tb_teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
