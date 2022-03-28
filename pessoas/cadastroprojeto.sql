-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Dez-2018 às 15:13
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cadastroprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
`id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `funcao` varchar(50) DEFAULT NULL,
  `descricao` varchar(5000) DEFAULT NULL,
  `end` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `telefone`, `cidade`, `funcao`, `descricao`, `end`) VALUES
(1, 'Luciano', 'luciano@gmail.com', '40028922', 'Imperatriz', 'Professor', 'Ã“timo professor!!', 'Casa dele'),
(2, 'Laila', 'laila@gmail.com', '123456789', 'Imperatriz', 'Aluna', 'Finge que estuda!!', 'Minha casa'),
(3, 'Laura', 'laura@gmail.com', '987654321', 'imperatriz', 'administradora', 'uma mulher responsÃ¡vel e de negÃ³cios', 'minha casa, no caso a dela'),
(4, 'Sara', 'sara@gmail.com', '569874123', 'imperatriz', 'diretora', 'ela Ã© diretora', 'casa dela tambÃ©m'),
(5, 'Yasmin', 'yasmin@gmail.com', '859742138', 'meu paÃ­s MaranhÃ£o', 'biÃ³loga - butatan', 'bisbilhota os animais', 'mein haus'),
(7, 'uu', 'u', '4556', 'Ã§Ã§', 'Ã§Ã§Ã§', 'Ã§Ã§Ã§', 'Ã§Ã§');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
