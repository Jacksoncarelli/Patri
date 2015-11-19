-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Nov 18, 2015 as 04:05 
-- Versão do Servidor: 5.1.41
-- Versão do PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `inventario_1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `computador`
--

CREATE TABLE IF NOT EXISTS `computador` (
  `id_computador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `serial_so` varchar(29) DEFAULT NULL,
  `num_serie` varchar(50) DEFAULT NULL,
  `num_patrimonio` varchar(30) DEFAULT NULL,
  `comentario` text,
  `id_fabricante` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `id_so` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_modelo` int(11) NOT NULL,
  PRIMARY KEY (`id_computador`),
  UNIQUE KEY `nome` (`nome`),
  UNIQUE KEY `id_computador` (`id_computador`),
  KEY `id_user_computador` (`id_user`),
  KEY `id_fabricante_computador` (`id_fabricante`),
  KEY `id_local_computador` (`id_local`),
  KEY `id_so_computador` (`id_so`),
  KEY `id_status_computador` (`id_status`),
  KEY `id_modelo_computador` (`id_modelo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `computador`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante`
--

CREATE TABLE IF NOT EXISTS `fabricante` (
  `id_fabricante` int(11) NOT NULL AUTO_INCREMENT,
  `nome_fabricante` varchar(50) NOT NULL,
  PRIMARY KEY (`id_fabricante`,`nome_fabricante`),
  UNIQUE KEY `nome_fabricante` (`nome_fabricante`),
  KEY `id_fabricante` (`id_fabricante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `fabricante`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `impressora`
--

CREATE TABLE IF NOT EXISTS `impressora` (
  `id_impressora` int(11) NOT NULL AUTO_INCREMENT,
  `id_local` int(11) NOT NULL,
  `con_atual` int(10) DEFAULT NULL,
  `port_serial` tinyint(1) DEFAULT '0',
  `usb` tinyint(1) DEFAULT '0',
  `paralela` tinyint(1) DEFAULT '0',
  `wifi` tinyint(1) DEFAULT '0',
  `lan` tinyint(1) DEFAULT '0',
  `id_status` int(11) NOT NULL,
  `id_fabricante` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `num_serie` varchar(50) DEFAULT NULL,
  `num_patrimonio` varchar(30) DEFAULT NULL,
  `comentario` text,
  `nome_impressora` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_impressora`),
  UNIQUE KEY `nome_impressora` (`nome_impressora`),
  KEY `id_fabricante_imp` (`id_fabricante`),
  KEY `id_local_imp` (`id_local`),
  KEY `id_modelo_imp` (`id_modelo`),
  KEY `id_status_imp` (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `impressora`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE IF NOT EXISTS `local` (
  `id_local` int(11) NOT NULL AUTO_INCREMENT,
  `nome_local` varchar(50) NOT NULL,
  `sigla_local` char(10) DEFAULT NULL,
  `num_sala` char(10) NOT NULL,
  PRIMARY KEY (`id_local`,`nome_local`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `local`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE IF NOT EXISTS `modelo` (
  `id_modelo` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) NOT NULL,
  `id_fabricante` int(11) NOT NULL,
  PRIMARY KEY (`id_modelo`,`modelo`),
  UNIQUE KEY `modelo` (`modelo`),
  KEY `id_fabricante_modelo` (`id_fabricante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `modelo`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `monitor`
--

CREATE TABLE IF NOT EXISTS `monitor` (
  `id_monitor` int(11) NOT NULL AUTO_INCREMENT,
  `id_local` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tamanho` char(2) NOT NULL,
  `hdmi` tinyint(1) DEFAULT '0',
  `vga` tinyint(1) DEFAULT '0',
  `dvi` tinyint(1) DEFAULT '0',
  `displayport` tinyint(1) DEFAULT '0',
  `autofalante` tinyint(1) DEFAULT '0',
  `microfone` tinyint(1) DEFAULT '0',
  `webcam` tinyint(1) DEFAULT '0',
  `id_fabricante` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `comentario` text,
  `num_patrimonio` char(50) DEFAULT NULL,
  `num_serie` char(30) DEFAULT NULL,
  PRIMARY KEY (`id_monitor`),
  KEY `id_local_monito` (`id_local`),
  KEY `id_user_monitor` (`id_user`),
  KEY `id_fabricante_monitor` (`id_fabricante`),
  KEY `id_modelo_monitor` (`id_modelo`),
  KEY `id_status_monitor` (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `monitor`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `sistema_operacional`
--

CREATE TABLE IF NOT EXISTS `sistema_operacional` (
  `id_so` int(11) NOT NULL AUTO_INCREMENT,
  `nome_so` varchar(255) NOT NULL,
  `id_fabricante` int(11) NOT NULL,
  PRIMARY KEY (`id_so`,`nome_so`),
  UNIQUE KEY `nome_so` (`nome_so`),
  KEY `id_fabricante_so` (`id_fabricante`),
  KEY `id_so` (`id_so`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `sistema_operacional`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `nome_status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_status`,`nome_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `status`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`,`usuario`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `usuarios`
--


--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `computador`
--
ALTER TABLE `computador`
  ADD CONSTRAINT `id_fabricante_computador` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_local_computador` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_modelo_computador` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_so_computador` FOREIGN KEY (`id_so`) REFERENCES `sistema_operacional` (`id_so`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_status_computador` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_computador` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON UPDATE CASCADE;

--
-- Restrições para a tabela `impressora`
--
ALTER TABLE `impressora`
  ADD CONSTRAINT `id_fabricante_imp` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_local_imp` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_modelo_imp` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_status_imp` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON UPDATE CASCADE;

--
-- Restrições para a tabela `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `id_fabricante_modelo` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE;

--
-- Restrições para a tabela `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `id_fabricante_monitor` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_local_monito` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_modelo_monitor` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_status_monitor` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_monitor` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON UPDATE CASCADE;

--
-- Restrições para a tabela `sistema_operacional`
--
ALTER TABLE `sistema_operacional`
  ADD CONSTRAINT `id_fabricante_so` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
