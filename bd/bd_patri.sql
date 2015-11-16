/*
Navicat MySQL Data Transfer

Source Server         : inventario_1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : inventario_1

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-11-12 20:13:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for computador
-- ----------------------------
DROP TABLE IF EXISTS `computador`;
CREATE TABLE `computador` (
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
  KEY `id_user_computador` (`id_user`),
  KEY `id_fabricante_computador` (`id_fabricante`),
  KEY `id_local_computador` (`id_local`),
  KEY `id_so_computador` (`id_so`),
  KEY `id_status_computador` (`id_status`),
  KEY `id_modelo_computador` (`id_modelo`),
  CONSTRAINT `id_fabricante_computador` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE,
  CONSTRAINT `id_local_computador` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON UPDATE CASCADE,
  CONSTRAINT `id_modelo_computador` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`) ON UPDATE CASCADE,
  CONSTRAINT `id_so_computador` FOREIGN KEY (`id_so`) REFERENCES `sistema_operacional` (`id_so`) ON UPDATE NO ACTION,
  CONSTRAINT `id_status_computador` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON UPDATE CASCADE,
  CONSTRAINT `id_user_computador` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of computador
-- ----------------------------

-- ----------------------------
-- Table structure for fabricante
-- ----------------------------
DROP TABLE IF EXISTS `fabricante`;
CREATE TABLE `fabricante` (
  `id_fabricante` int(11) NOT NULL AUTO_INCREMENT,
  `nome_fabricante` varchar(50) NOT NULL,
  PRIMARY KEY (`id_fabricante`,`nome_fabricante`),
  KEY `id_fabricante` (`id_fabricante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fabricante
-- ----------------------------

-- ----------------------------
-- Table structure for impressora
-- ----------------------------
DROP TABLE IF EXISTS `impressora`;
CREATE TABLE `impressora` (
  `id_impressora` int(11) NOT NULL AUTO_INCREMENT,
  `id_local` int(11) NOT NULL,
  `con_atual` int(10) DEFAULT NULL,
  `port_serial` tinyint(1) DEFAULT FALSE,
  `usb` tinyint(1) DEFAULT FALSE,
  `paralela` tinyint(1) DEFAULT FALSE,
  `wifi` tinyint(1) DEFAULT FALSE,
  `lan` tinyint(1) DEFAULT FALSE,
  `id_status` int(11) NOT NULL,
  `id_fabricante` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `num_serie` varchar(50) DEFAULT NULL,
  `num_patrimonio` varchar(30) DEFAULT NULL,
  `comentario` text,
  `nome_impressora` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_impressora`),
  KEY `id_fabricante_imp` (`id_fabricante`),
  KEY `id_local_imp` (`id_local`),
  KEY `id_modelo_imp` (`id_modelo`),
  KEY `id_status_imp` (`id_status`),
  CONSTRAINT `id_fabricante_imp` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE,
  CONSTRAINT `id_local_imp` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON UPDATE CASCADE,
  CONSTRAINT `id_modelo_imp` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`) ON UPDATE CASCADE,
  CONSTRAINT `id_status_imp` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of impressora
-- ----------------------------

-- ----------------------------
-- Table structure for local
-- ----------------------------
DROP TABLE IF EXISTS `local`;
CREATE TABLE `local` (
  `id_local` int(11) NOT NULL AUTO_INCREMENT,
  `nome_local` varchar(50) NOT NULL,
  `sigla_local` char(10) DEFAULT NULL,
  `num_sala` char(10) NOT NULL,
  PRIMARY KEY (`id_local`,`nome_local`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of local
-- ----------------------------

-- ----------------------------
-- Table structure for modelo
-- ----------------------------
DROP TABLE IF EXISTS `modelo`;
CREATE TABLE `modelo` (
  `id_modelo` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) NOT NULL,
  `id_fabricante` int(11) NOT NULL,
  PRIMARY KEY (`id_modelo`,`modelo`),
  KEY `id_fabricante_modelo` (`id_fabricante`),
  CONSTRAINT `id_fabricante_modelo` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo
-- ----------------------------

-- ----------------------------
-- Table structure for monitor
-- ----------------------------
DROP TABLE IF EXISTS `monitor`;
CREATE TABLE `monitor` (
  `id_monitor` int(11) NOT NULL AUTO_INCREMENT,
  `id_local` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tamanho` char(2) NOT NULL,
  `hdmi` tinyint(1) DEFAULT FALSE,
  `vga` tinyint(1) DEFAULT FALSE,
  `dvi` tinyint(1) DEFAULT FALSE,
  `displayport` tinyint(1) DEFAULT FALSE,
  `autofalante` tinyint(1) DEFAULT FALSE,
  `microfone` tinyint(1) DEFAULT FALSE,
  `webcam` tinyint(1) DEFAULT FALSE,
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
  KEY `id_status_monitor` (`id_status`),
  CONSTRAINT `id_fabricante_monitor` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE,
  CONSTRAINT `id_local_monito` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON UPDATE CASCADE,
  CONSTRAINT `id_modelo_monitor` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`) ON UPDATE CASCADE,
  CONSTRAINT `id_status_monitor` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON UPDATE CASCADE,
  CONSTRAINT `id_user_monitor` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of monitor
-- ----------------------------

-- ----------------------------
-- Table structure for sistema_operacional
-- ----------------------------
DROP TABLE IF EXISTS `sistema_operacional`;
CREATE TABLE `sistema_operacional` (
  `id_so` int(11) NOT NULL AUTO_INCREMENT,
  `nome_so` varchar(255) NOT NULL,
  `id_fabricante` int(11) NOT NULL,
  PRIMARY KEY (`id_so`,`nome_so`),
  KEY `id_fabricante_so` (`id_fabricante`),
  KEY `id_so` (`id_so`),
  CONSTRAINT `id_fabricante_so` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistema_operacional
-- ----------------------------

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `nome_status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_status`,`nome_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of status
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`,`usuario`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
