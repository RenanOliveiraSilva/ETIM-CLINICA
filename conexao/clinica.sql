-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Ago-2022 às 15:17
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
-- Banco de dados: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`id`, `nome`) VALUES
(9, 'Cardiologista'),
(10, 'Otorrinolaringologista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medesp`
--

CREATE TABLE `medesp` (
  `id` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `id_especialidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `medesp`
--

INSERT INTO `medesp` (`id`, `id_medico`, `id_especialidade`) VALUES
(1, 5, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Andre', 'andre@andre', 123),
(5, 'Jessica', 'Jessica@jessica', 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `endereco`, `cpf`) VALUES
(1, 'Vitória', 'Rua 5', '58746887765');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `medesp`
--
ALTER TABLE `medesp`
  ADD PRIMARY KEY (`id`,`id_medico`,`id_especialidade`),
  ADD KEY `fk_medico` (`id_medico`),
  ADD KEY `fk_especialidade` (`id_especialidade`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `medesp`
--
ALTER TABLE `medesp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `medesp`
--
ALTER TABLE `medesp`
  ADD CONSTRAINT `fk_especialidade` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidade` (`id`),
  ADD CONSTRAINT `fk_medico` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
