-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Fev-2021 às 23:54
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
-- Banco de dados: `sistema_questionarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE IF NOT EXISTS `pessoas` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`pid`, `nome`) VALUES
(1, 'Maria dos Santos de Jesus'),
(2, 'Felipe Warlison Oliveira Andrade'),
(5, 'Julia '),
(8, 'Marta'),
(9, 'JoÃ£o'),
(10, 'Teodoro'),
(11, 'Douglas'),
(12, 'Julim'),
(13, 'Jonh'),
(14, 'geraldo'),
(15, 'Lara'),
(16, 'Tomaz'),
(17, 'Marcelo'),
(18, 'Gisele'),
(19, 'Zeu'),
(20, 'zaqueu'),
(21, 'Bruna'),
(22, 'Bianca'),
(23, 'Jussara'),
(24, 'Joseph'),
(25, 'Daniel'),
(26, 'Raquel'),
(27, 'Josimar'),
(28, 'Gelsin'),
(29, 'Gil'),
(30, 'Warlison'),
(31, 'Andrade'),
(32, 'Jesus'),
(33, 'JosÃ©'),
(34, 'JosuÃ©'),
(35, 'TomÃ©'),
(36, 'Mikaely'),
(37, 'ZÃ©'),
(38, 'TiÃ£o'),
(39, 'NatÃ¡lia'),
(40, 'Timo'),
(41, 'Ney');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionarios`
--

DROP TABLE IF EXISTS `questionarios`;
CREATE TABLE IF NOT EXISTS `questionarios` (
  `questId` int(100) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `tipo` int(10) NOT NULL,
  `data` date DEFAULT NULL,
  `visita` int(11) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `nasc` date DEFAULT NULL,
  `idade` int(3) DEFAULT NULL,
  `essbr1` varchar(40) DEFAULT NULL,
  `essbr2` varchar(40) DEFAULT NULL,
  `essbr3` varchar(40) DEFAULT NULL,
  `essbr4` varchar(40) DEFAULT NULL,
  `essbr5` varchar(40) DEFAULT NULL,
  `essbr6` varchar(40) DEFAULT NULL,
  `essbr7` varchar(40) DEFAULT NULL,
  `essbr8` varchar(40) DEFAULT NULL,
  `ectoscopia` varchar(100) DEFAULT NULL,
  `inspTorax` varchar(100) DEFAULT NULL,
  `ictuscordis1` varchar(100) DEFAULT NULL,
  `pulsosA` varchar(100) DEFAULT NULL,
  `pulsosP` varchar(100) DEFAULT NULL,
  `ictuscordis2` varchar(100) DEFAULT NULL,
  `fc` varchar(100) DEFAULT NULL,
  `SO2` varchar(100) DEFAULT NULL,
  `rCardiaco` varchar(100) DEFAULT NULL,
  `bulhas` varchar(100) DEFAULT NULL,
  `sopro1` varchar(100) DEFAULT NULL,
  `foco` varchar(100) DEFAULT NULL,
  `irradiacao` varchar(100) DEFAULT NULL,
  `intensidade` varchar(100) DEFAULT NULL,
  `sopros` varchar(100) DEFAULT NULL,
  `soproArteria` varchar(100) DEFAULT NULL,
  `auscultaP` varchar(100) DEFAULT NULL,
  `visc` varchar(100) DEFAULT NULL,
  `grupoRisco` varchar(50) DEFAULT NULL,
  `peso3` varchar(6) DEFAULT NULL,
  `estatura3` varchar(10) DEFAULT NULL,
  `circAbd` varchar(10) DEFAULT NULL,
  `gordCorp` varchar(6) DEFAULT NULL,
  `muscEsq` varchar(6) DEFAULT NULL,
  `matabolismo` varchar(6) DEFAULT NULL,
  `idadeC` varchar(50) DEFAULT NULL,
  `gordVisc` varchar(6) DEFAULT NULL,
  `pas1` varchar(6) DEFAULT NULL,
  `pad1` varchar(6) DEFAULT NULL,
  `fc1` varchar(50) DEFAULT NULL,
  `pas2` varchar(50) DEFAULT NULL,
  `pad2` varchar(50) DEFAULT NULL,
  `fc2` varchar(6) DEFAULT NULL,
  `pas3` varchar(6) DEFAULT NULL,
  `pad3` varchar(6) DEFAULT NULL,
  `fc3` varchar(6) DEFAULT NULL,
  `bracoDom` varchar(8) DEFAULT NULL,
  `m1d` varchar(6) DEFAULT NULL,
  `m2d` varchar(6) DEFAULT NULL,
  `m1e` varchar(6) DEFAULT NULL,
  `m2e` varchar(6) DEFAULT NULL,
  `ecgR` varchar(6) DEFAULT NULL,
  `ecg10` varchar(6) DEFAULT NULL,
  `eco` varchar(6) DEFAULT NULL,
  `holter` varchar(6) DEFAULT NULL,
  `pasB` varchar(9) DEFAULT NULL,
  `padB` varchar(9) DEFAULT NULL,
  `fcB` varchar(9) DEFAULT NULL,
  `pas30` varchar(9) DEFAULT NULL,
  `pad30` varchar(9) DEFAULT NULL,
  `fc30` varchar(9) DEFAULT NULL,
  `pas60` varchar(9) DEFAULT NULL,
  `pad60` varchar(9) DEFAULT NULL,
  `fc60` varchar(9) DEFAULT NULL,
  `pas120` varchar(9) DEFAULT NULL,
  `pad120` varchar(9) DEFAULT NULL,
  `fc120` varchar(9) DEFAULT NULL,
  `medicamentos` varchar(1000) DEFAULT NULL,
  `resultados` varchar(1000) DEFAULT NULL,
  `dataCol` date DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `meio` varchar(255) DEFAULT NULL,
  `estCivil` varchar(255) DEFAULT NULL,
  `renda` varchar(255) DEFAULT NULL,
  `cor` varchar(255) DEFAULT NULL,
  `grau` varchar(255) DEFAULT NULL,
  `fuma` varchar(255) DEFAULT NULL,
  `fuma1` varchar(255) DEFAULT NULL,
  `fuma2` varchar(255) DEFAULT NULL,
  `fuma3` varchar(255) DEFAULT NULL,
  `fuma4` varchar(255) DEFAULT NULL,
  `bebe` varchar(255) DEFAULT NULL,
  `bebe1` varchar(255) DEFAULT NULL,
  `bebe2` varchar(255) DEFAULT NULL,
  `hipertensa` varchar(255) DEFAULT NULL,
  `diabetica` varchar(255) DEFAULT NULL,
  `colesterol` varchar(255) DEFAULT NULL,
  `arritmia` varchar(255) DEFAULT NULL,
  `coracao` varchar(255) DEFAULT NULL,
  `cirurgia` varchar(255) DEFAULT NULL,
  `avc` varchar(255) DEFAULT NULL,
  `paisCoracao` varchar(255) DEFAULT NULL,
  `paisAvc` varchar(255) DEFAULT NULL,
  `mPrimeira` varchar(255) DEFAULT NULL,
  `mUltima` varchar(255) DEFAULT NULL,
  `anticon` varchar(255) DEFAULT NULL,
  `gestacoes` varchar(255) DEFAULT NULL,
  `nascidosV` varchar(255) DEFAULT NULL,
  `nascidosM` varchar(255) DEFAULT NULL,
  `partoP` varchar(255) DEFAULT NULL,
  `partoN` varchar(255) DEFAULT NULL,
  `partoC` varchar(255) DEFAULT NULL,
  `aborto` varchar(255) DEFAULT NULL,
  `tovr1` varchar(25) DEFAULT NULL,
  `tovr2` varchar(25) DEFAULT NULL,
  `tovr3` varchar(25) DEFAULT NULL,
  `tovr4` varchar(25) DEFAULT NULL,
  `tovr5` varchar(25) DEFAULT NULL,
  `tovr6` varchar(25) DEFAULT NULL,
  `tovr7` varchar(25) DEFAULT NULL,
  `tovr8` varchar(25) DEFAULT NULL,
  `tovr9` varchar(25) DEFAULT NULL,
  `tovr10` varchar(25) DEFAULT NULL,
  `whoqol1` varchar(25) DEFAULT NULL,
  `whoqol2` varchar(25) DEFAULT NULL,
  `whoqol3` varchar(20) DEFAULT NULL,
  `whoqol4` varchar(20) DEFAULT NULL,
  `whoqol5` varchar(20) DEFAULT NULL,
  `whoqol6` varchar(20) DEFAULT NULL,
  `whoqol7` varchar(20) DEFAULT NULL,
  `whoqol8` varchar(20) DEFAULT NULL,
  `whoqol9` varchar(20) DEFAULT NULL,
  `whoqol10` varchar(20) DEFAULT NULL,
  `whoqol11` varchar(20) DEFAULT NULL,
  `whoqol12` varchar(20) DEFAULT NULL,
  `whoqol13` varchar(20) DEFAULT NULL,
  `whoqol14` varchar(20) DEFAULT NULL,
  `whoqol15` varchar(20) DEFAULT NULL,
  `whoqol16` varchar(20) DEFAULT NULL,
  `whoqol17` varchar(20) DEFAULT NULL,
  `whoqol18` varchar(20) DEFAULT NULL,
  `whoqol19` varchar(20) DEFAULT NULL,
  `whoqol20` varchar(20) DEFAULT NULL,
  `whoqol21` varchar(20) DEFAULT NULL,
  `whoqol22` varchar(20) DEFAULT NULL,
  `whoqol23` varchar(20) DEFAULT NULL,
  `whoqol24` varchar(20) DEFAULT NULL,
  `whoqol25` varchar(20) DEFAULT NULL,
  `whoqol26` varchar(20) DEFAULT NULL,
  `ajuda` varchar(20) DEFAULT NULL,
  `tempo` varchar(20) DEFAULT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`questId`),
  KEY `fk_pessoa` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `questionarios`
--

INSERT INTO `questionarios` (`questId`, `pid`, `tipo`, `data`, `visita`, `cidade`, `nasc`, `idade`, `essbr1`, `essbr2`, `essbr3`, `essbr4`, `essbr5`, `essbr6`, `essbr7`, `essbr8`, `ectoscopia`, `inspTorax`, `ictuscordis1`, `pulsosA`, `pulsosP`, `ictuscordis2`, `fc`, `SO2`, `rCardiaco`, `bulhas`, `sopro1`, `foco`, `irradiacao`, `intensidade`, `sopros`, `soproArteria`, `auscultaP`, `visc`, `grupoRisco`, `peso3`, `estatura3`, `circAbd`, `gordCorp`, `muscEsq`, `matabolismo`, `idadeC`, `gordVisc`, `pas1`, `pad1`, `fc1`, `pas2`, `pad2`, `fc2`, `pas3`, `pad3`, `fc3`, `bracoDom`, `m1d`, `m2d`, `m1e`, `m2e`, `ecgR`, `ecg10`, `eco`, `holter`, `pasB`, `padB`, `fcB`, `pas30`, `pad30`, `fc30`, `pas60`, `pad60`, `fc60`, `pas120`, `pad120`, `fc120`, `medicamentos`, `resultados`, `dataCol`, `endereco`, `telefone`, `meio`, `estCivil`, `renda`, `cor`, `grau`, `fuma`, `fuma1`, `fuma2`, `fuma3`, `fuma4`, `bebe`, `bebe1`, `bebe2`, `hipertensa`, `diabetica`, `colesterol`, `arritmia`, `coracao`, `cirurgia`, `avc`, `paisCoracao`, `paisAvc`, `mPrimeira`, `mUltima`, `anticon`, `gestacoes`, `nascidosV`, `nascidosM`, `partoP`, `partoN`, `partoC`, `aborto`, `tovr1`, `tovr2`, `tovr3`, `tovr4`, `tovr5`, `tovr6`, `tovr7`, `tovr8`, `tovr9`, `tovr10`, `whoqol1`, `whoqol2`, `whoqol3`, `whoqol4`, `whoqol5`, `whoqol6`, `whoqol7`, `whoqol8`, `whoqol9`, `whoqol10`, `whoqol11`, `whoqol12`, `whoqol13`, `whoqol14`, `whoqol15`, `whoqol16`, `whoqol17`, `whoqol18`, `whoqol19`, `whoqol20`, `whoqol21`, `whoqol22`, `whoqol23`, `whoqol24`, `whoqol25`, `whoqol26`, `ajuda`, `tempo`, `comentario`) VALUES
(44, 1, 2, '2020-07-27', 12, NULL, '2020-07-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sem alteraÃ§Ãµes, ', 'Ok', 'VisÃ­vel', '1223', '11', '332', '123', '24', 'Regular', 'NormofonÃ©ticas', 'Presentes', '-', '-', '-', 'Estalidos', 'Aorta', 'MVR', 'NÃ£o', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 2, 5, '2021-01-28', NULL, NULL, NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 - Concordo totalmente', '2 - Discordo', '3 - Neutro', '4 - Concordo', '5 - Concordo totalmente', '4 - Concordo', '1 - Discordo totalmente', '1 - Discordo totalmente', '1 - Discordo totalmente', '5 - Concordo totalmente', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 1, 5, '2021-01-28', NULL, NULL, NULL, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Discordo totalmente', 'Discordo', 'Neutro', 'Concordo', 'Discordo totalmente', 'Concordo totalmente', 'Concordo', 'Discordo', 'Concordo', 'Concordo totalmente', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 1, 6, '2021-01-29', NULL, NULL, NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nem ruim nem boa', 'Boa', 'Muito pouco', 'Extremamente', 'Muito pouco', 'Nada', 'Muito pouco', 'Mais ou menos', 'Nada', 'Nada', 'Muito pouco', 'Bastante', 'Muito pouco', 'Muito pouco', 'Muito ruim', 'Muito ruim', 'Ruim', 'Ruim', 'Muito bom', 'Ruim', 'Muito ruim', 'Ruim', 'Nem ruim nem bom', 'Nem ruim nem bom', 'Ruim', 'Nunca', 'Sim', '1 minuto', 'Nenhum, obrigado!!'),
(53, 2, 3, '2021-02-03', 1, NULL, NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sim', '70', '34', '67', '78', '89', '78', '30', 'baixo', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Esquerdo', '-', '-', '-', '-', 'a', 'a', 'a', 'a', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'Nada', 'Nada', '2021-02-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 1, 1, '2021-02-03', NULL, NULL, NULL, 70, 'Nunca cochilaria', 'Nunca cochilaria', 'Nunca cochilaria', 'Pequena probabilidade de cochilar', 'Grande probabilidade de cochilar', 'Probabilidade mÃ©dia de cochilar', 'Nunca cochilaria', 'Pequena probabilidade de cochilar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 2, 1, '2021-02-05', NULL, NULL, NULL, 28, 'Nunca cochilaria', 'Pequena probabilidade de cochilar', 'Probabilidade mÃ©dia de cochilar', 'Nunca cochilaria', 'Pequena probabilidade de cochilar', 'Nunca cochilaria', 'Pequena probabilidade de cochilar', 'Pequena probabilidade de cochilar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 2, 2, '2021-02-05', 1, NULL, '1992-03-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sem alteraÃ§Ãµes, NA', 'Sim', 'VisÃ­vel', 'CarÃ³tica', 'Radial', '20', '30', '27', 'Regular', 'NormofonÃ©ticas', 'Ausentes', '-', '-', '-', 'Estalidos', 'CarÃ³tida', 'MVR', 'NÃ£o', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 2, 4, '2021-02-05', NULL, NULL, '1992-03-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rua SuiÃ§a, nÂº291, Bairro IndepÃªndencia', '38 988155753', 'Urbano', 'Solteira', 'AtÃ© 1 SM', 'Preta', 'Ensino mÃ©dio completo e superior incompleto', 'NÃ£o', '-', '-', '-', '-', 'NÃ£o', '- -', '--', 'NÃ£o sei', 'NÃ£o sei', 'NÃ£o', 'Sim', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 2, 6, '2021-02-05', NULL, NULL, NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nem ruim nem boa', 'Boa', 'Muito pouco', 'Muito pouco', 'Bastante', 'Mais ou menos', 'Bastante', 'Mais ou menos', 'Muito pouco', 'Muito pouco', 'Bastante', 'Muito pouco', 'Nada', 'Bastante', 'Ruim', 'Nem ruim nem bom', 'Ruim', 'Nem ruim nem bom', 'Bom', 'Ruim', 'Bom', 'Nem ruim nem bom', 'Ruim', 'Muito ruim', 'Bom', 'Algumas vezes', 'NÃ£o', '1min', 'Nenhum.'),
(60, 5, 1, '2021-02-16', NULL, NULL, NULL, 27, 'Nunca cochilaria', 'Nunca cochilaria', 'Nunca cochilaria', 'Nunca cochilaria', 'Nunca cochilaria', 'Nunca cochilaria', 'Nunca cochilaria', 'Nunca cochilaria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 2, 5, '2021-02-17', NULL, NULL, NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Discordo', 'Discordo totalmente', 'Concordo totalmente', 'Concordo totalmente', 'Neutro', 'Discordo totalmente', 'Discordo totalmente', 'Concordo', 'Discordo totalmente', 'Discordo totalmente', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 2, 1, '2021-02-17', NULL, NULL, NULL, 28, 'Nunca cochilaria', 'Pequena probabilidade de cochilar', 'Pequena probabilidade de cochilar', 'Nunca cochilaria', 'Nunca cochilaria', 'Grande probabilidade de cochilar', 'Grande probabilidade de cochilar', 'Grande probabilidade de cochilar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 5, 5, '2021-02-17', NULL, NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Discordo', 'Discordo', 'Discordo totalmente', 'Neutro', 'Discordo', 'Discordo totalmente', 'Discordo totalmente', 'Neutro', 'Discordo totalmente', 'Concordo totalmente', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `questionarios`
--
ALTER TABLE `questionarios`
  ADD CONSTRAINT `fk_pessoa` FOREIGN KEY (`pid`) REFERENCES `pessoas` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
