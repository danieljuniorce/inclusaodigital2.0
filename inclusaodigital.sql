-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jan-2019 às 05:08
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inclusaodigital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE `avisos` (
  `id` int(11) NOT NULL,
  `envio_email` varchar(10) NOT NULL DEFAULT 'nao',
  `titulo_aviso` varchar(120) NOT NULL,
  `corpo_aviso` varchar(600) NOT NULL,
  `data_envio` date NOT NULL,
  `hora_envio` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banco_de_questao`
--

CREATE TABLE `banco_de_questao` (
  `id` int(11) NOT NULL,
  `modulo` varchar(15) NOT NULL,
  `questao` varchar(500) NOT NULL,
  `primeira_alt` varchar(300) NOT NULL,
  `segunda_alt` varchar(300) NOT NULL,
  `terceira_alt` varchar(300) NOT NULL,
  `quarta_alt` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banco_de_questao`
--

INSERT INTO `banco_de_questao` (`id`, `modulo`, `questao`, `primeira_alt`, `segunda_alt`, `terceira_alt`, `quarta_alt`) VALUES
(1, 'word', 'Dá', 'dá', 'dá', 'dá', 'dá'),
(2, 'word', 'dá', 'dá', 'dá', 'dá', 'dá');

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencias`
--

CREATE TABLE `frequencias` (
  `id` int(11) NOT NULL,
  `matricula` varchar(25) NOT NULL,
  `presenca` int(2) DEFAULT '0',
  `falta` int(2) DEFAULT '0',
  `data_frequencia` varchar(550) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `frequencias`
--

INSERT INTO `frequencias` (`id`, `matricula`, `presenca`, `falta`, `data_frequencia`) VALUES
(1, '2019826767581', 3, 4, '2019-01-04(falta)</br>2019-01-04 (falta)</br>2019-01-05 (presenca)</br>2019-01-04 (falta)</br>'),
(9, '2019698007707', 18, 10, NULL),
(10, '2019228', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `matricula_participante` varchar(20) DEFAULT NULL,
  `modulo_um` varchar(2) DEFAULT '0',
  `modulo_dois` varchar(2) DEFAULT '0',
  `modulo_tres` varchar(2) DEFAULT '0',
  `modulo_quatro` varchar(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`id`, `matricula_participante`, `modulo_um`, `modulo_dois`, `modulo_tres`, `modulo_quatro`) VALUES
(1, '2019826767581', '1', '2', '2', '2'),
(9, '2019698007707', '10', '0', '0', '0'),
(10, '2019228', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(120) DEFAULT NULL,
  `data_nascimento` varchar(10) DEFAULT NULL,
  `estado_participante` varchar(15) DEFAULT NULL,
  `rg` varchar(12) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `matricula` varchar(20) DEFAULT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `turma` varchar(25) DEFAULT NULL,
  `acesso` varchar(10) DEFAULT 'user',
  `senha` varchar(70) DEFAULT NULL,
  `tipo` varchar(12) DEFAULT NULL,
  `numeracao_tipo` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `participantes`
--

INSERT INTO `participantes` (`id`, `nome_completo`, `data_nascimento`, `estado_participante`, `rg`, `cpf`, `matricula`, `celular`, `telefone`, `email`, `sexo`, `turma`, `acesso`, `senha`, `tipo`, `numeracao_tipo`) VALUES
(4, 'Daniel Junior de Souza Lima', '1998-05-22', 'ativo', '4545454', '45454545455', '2019826767581', '85988637165', '85988637165', 'danieljuniorce@hotmail.com', 'masculino', '2019160', 'adm', '$i$d$l$f$ccf795cbc72ed7a28406ae4908ea93ecf3ab0d8d1', NULL, NULL),
(12, 'Souza Lima', '2000-12-11', 'ativo', '4889489489', '48484984', '2019698007707', '4884894894', '84449849', 'danieljunior@gmail.com', 'masculino', NULL, 'user', '$i$d$l$f$c5895717e6f93c09419dfda8f5da2879fb6a05efe', NULL, NULL),
(13, 'Jane Carla', '1998-01-11', 'ativo', '0111415411', '5454564564', '2019228', '8598854784', '84844455', 'janecarla2018@hotmail.com', 'feminina', NULL, 'user', '$i$d$l$f$c5895717e6f93c09419dfda8f5da2879fb6a05efe', 'avulso', '12.200');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` int(11) NOT NULL,
  `inicio` date DEFAULT NULL,
  `final` date DEFAULT NULL,
  `criacao` date DEFAULT NULL,
  `turma` varchar(25) DEFAULT NULL,
  `curso` varchar(25) DEFAULT NULL,
  `turno` varchar(15) DEFAULT NULL,
  `horario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `inicio`, `final`, `criacao`, `turma`, `curso`, `turno`, `horario`) VALUES
(1, '2019-01-07', '2019-01-11', '2019-01-02', '2019160', 'informatica_basica', 'manha', 'primeiro_horario'),
(2, '1998-02-01', '1988-05-20', '2019-01-04', '2019189', 'informatica_basica', 'tarde', 'terceiro_horario');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banco_de_questao`
--
ALTER TABLE `banco_de_questao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frequencias`
--
ALTER TABLE `frequencias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banco_de_questao`
--
ALTER TABLE `banco_de_questao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `frequencias`
--
ALTER TABLE `frequencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
