-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Fev-2021 às 23:53
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemalogin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

DROP TABLE IF EXISTS `niveis_acessos`;
CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Pesquisador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext CHARACTER SET utf8,
  `contatoUsers` tinytext,
  `birthday` date DEFAULT NULL,
  `telefone` tinytext CHARACTER SET utf8,
  `niveis_acesso_id` tinytext CHARACTER SET utf8,
  `pswUsers` longtext CHARACTER SET utf8,
  `perfil` longblob,
  PRIMARY KEY (`idUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `contatoUsers`, `birthday`, `telefone`, `niveis_acesso_id`, `pswUsers`, `perfil`) VALUES
(10, 'Felipe', 'felipe@hotmail.com', 'Rua: SuiÃ§a, 291, Independencia, Montes Claros MG', NULL, NULL, NULL, '$2y$10$624zWvjz8Iqjbx.t54zVlO/ISbfDEmfEWPjsLG6R68/5.w1dazJ0u', NULL),
(11, 'Felipe Warlison', 'felipewarlison@hotmail.com', 'Rua SuiÃ§a, 291, Independencia', '1992-03-02', '38988155753', '1', '$2y$10$sPi1kIUSxSz6ZmX9RK7eWeXIVnX8scjNC9OcSLArt6sAEU2FwhmT2', NULL),
(12, 'Marcelo', 'marcelo@gmail.com', 'Rua A, Ibituruna, Montes Claros MG', '2000-01-01', '38999999999', '2', '$2y$10$mZDGSScHW84J59ADieM7me/lUbzmRtReRga4dxIQ6vwHwxRGK7Bxm', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
