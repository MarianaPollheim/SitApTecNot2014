-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sitap`
--
CREATE DATABASE `sitap` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sitap`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nome`) VALUES
(1, 'ModaVerão'),
(2, 'Moda Outono'),
(3, 'Moda Inverno'),
(4, 'Moda Primavera');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_tem_noticia`
--

CREATE TABLE IF NOT EXISTS `categoria_tem_noticia` (
  `idcategoria` int(11) NOT NULL,
  `idnoticia` int(11) NOT NULL,
  PRIMARY KEY (`idcategoria`,`idnoticia`),
  KEY `fk_categoria_has_noticia_noticia1` (`idnoticia`),
  KEY `fk_categoria_has_noticia_categoria1` (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria_tem_noticia`
--

INSERT INTO `categoria_tem_noticia` (`idcategoria`, `idnoticia`) VALUES
(1, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` text,
  `dtCriacao` datetime DEFAULT NULL,
  `dtAtualizacao` datetime DEFAULT NULL,
  `idnoticia` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `positivo` int(11) DEFAULT NULL,
  `negativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `fk_usuario_has_noticia_noticia1` (`idnoticia`),
  KEY `fk_usuario_has_noticia_usuario1` (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`idcomentario`, `comentario`, `dtCriacao`, `dtAtualizacao`, `idnoticia`, `idusuario`, `positivo`, `negativo`) VALUES
(1, 'Olá isso é um comentário', '2014-11-06 20:23:00', NULL, 1, 0, 3, 0),
(2, 'Olá isso é outro comentário', '2014-11-07 10:00:00', NULL, 1, 3, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `idfoto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `idnoticia` int(11) NOT NULL,
  PRIMARY KEY (`idfoto`),
  KEY `fk_foto_noticia1` (`idnoticia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `idnoticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `texto` text,
  `dtCriacao` datetime DEFAULT NULL,
  `dtAtualizacao` datetime DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `positivo` int(11) DEFAULT NULL,
  `negativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idnoticia`),
  KEY `fk_noticia_usuario` (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`idnoticia`, `titulo`, `texto`, `dtCriacao`, `dtAtualizacao`, `idusuario`, `positivo`, `negativo`) VALUES
(1, 'OVerão está chegando', 'Alo Ha teste 12 3', '2014-11-06 19:59:00', NULL, 2, 5, 2),
(2, 'O inverno se foi', 'Alo ha teste 987', '2014-08-30 10:00:00', NULL, 3, 10, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `dtNascimento` date DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `dtCriacao` datetime DEFAULT NULL,
  `dtAtualizacao` datetime DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`, `dtNascimento`, `foto`, `cidade`, `estado`, `bairro`, `endereco`, `cep`, `telefone`, `celular`, `dtCriacao`, `dtAtualizacao`) VALUES
(0, 'Anônimo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1, 'admin', 'admin@teste.com.br', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Antônio da Silva Sauro', 'antonio@gmail.com', '1234', '1980-11-06', 'ele.png', 'Brusque', 'SC', 'Centro', 'Rua do Antônio', '88350-540', '(47) 3333-4444', NULL, '2014-11-06 19:29:00', NULL),
(3, 'Raimunda da Silva Sauro', 'raimunda@gmail.com', '1234', '1990-12-25', 'ela.png', 'Itajaí', 'SC', 'Porto', 'Rua da Raimunda', '88360-987', '(47) 4444-5555', NULL, '2014-11-06 19:30:00', NULL);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `categoria_tem_noticia`
--
ALTER TABLE `categoria_tem_noticia`
  ADD CONSTRAINT `fk_categoria_has_noticia_categoria1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_categoria_has_noticia_noticia1` FOREIGN KEY (`idnoticia`) REFERENCES `noticia` (`idnoticia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_usuario_has_noticia_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_noticia_noticia1` FOREIGN KEY (`idnoticia`) REFERENCES `noticia` (`idnoticia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_foto_noticia1` FOREIGN KEY (`idnoticia`) REFERENCES `noticia` (`idnoticia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_noticia_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
