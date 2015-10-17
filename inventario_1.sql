/*
Navicat MySQL Data Transfer

Source Server         : inventario
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : inventario_1

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-10-08 20:14:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for computador
-- ----------------------------
DROP TABLE IF EXISTS `computador`;
CREATE TABLE `computador` (
  `id_computador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `serial_so` char(30) DEFAULT NULL,
  `num_serie` char(50) DEFAULT NULL,
  `num_patrimonio` char(30) DEFAULT NULL,
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
  CONSTRAINT `id_modelo_computador` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`) ON UPDATE CASCADE,
  CONSTRAINT `id_fabricante_computador` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE,
  CONSTRAINT `id_local_computador` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON UPDATE CASCADE,
  CONSTRAINT `id_so_computador` FOREIGN KEY (`id_so`) REFERENCES `sistema_operacional` (`id_so`) ON UPDATE CASCADE,
  CONSTRAINT `id_status_computador` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON UPDATE CASCADE,
  CONSTRAINT `id_user_computador` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for fabricante
-- ----------------------------
DROP TABLE IF EXISTS `fabricante`;
CREATE TABLE `fabricante` (
  `id_fabricante` int(11) NOT NULL AUTO_INCREMENT,
  `nome_fabricante` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fabricante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for impressora
-- ----------------------------
DROP TABLE IF EXISTS `impressora`;
CREATE TABLE `impressora` (
  `id_impressora` int(11) NOT NULL AUTO_INCREMENT,
  `id_local` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `memoria` char(5) DEFAULT NULL,
  `cont_ini` decimal(10,0) DEFAULT NULL,
  `con_atual` decimal(10,0) DEFAULT NULL,
  `port_serial` char(1) NOT NULL,
  `usb` char(1) NOT NULL,
  `paralela` char(1) NOT NULL,
  `wifi` char(1) NOT NULL,
  `lan` char(1) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_fabrincante` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `num_serie` char(50) DEFAULT NULL,
  `num_patrimonio` char(30) DEFAULT NULL,
  `comentario` text,
  PRIMARY KEY (`id_impressora`),
  KEY `id_fabricante_imp` (`id_fabrincante`),
  KEY `id_local_imp` (`id_local`),
  KEY `id_modelo_imp` (`id_modelo`),
  KEY `id_status_imp` (`id_status`),
  KEY `id_user_imp` (`id_user`),
  CONSTRAINT `id_fabricante_imp` FOREIGN KEY (`id_fabrincante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE,
  CONSTRAINT `id_local_imp` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON UPDATE CASCADE,
  CONSTRAINT `id_modelo_imp` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`) ON UPDATE CASCADE,
  CONSTRAINT `id_status_imp` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON UPDATE CASCADE,
  CONSTRAINT `id_user_imp` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for local
-- ----------------------------
DROP TABLE IF EXISTS `local`;
CREATE TABLE `local` (
  `id_local` int(11) NOT NULL AUTO_INCREMENT,
  `nome_local` varchar(255) NOT NULL,
  `sigla_local` char(10) DEFAULT NULL,
  PRIMARY KEY (`id_local`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for modelo
-- ----------------------------
DROP TABLE IF EXISTS `modelo`;
CREATE TABLE `modelo` (
  `id_modelo` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(255) DEFAULT NULL,
  `id_fabricante` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_modelo`),
  KEY `id_fabricante_modelo` (`id_fabricante`),
  CONSTRAINT `id_fabricante_modelo` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for monitor
-- ----------------------------
DROP TABLE IF EXISTS `monitor`;
CREATE TABLE `monitor` (
  `id_monitor` int(11) NOT NULL AUTO_INCREMENT,
  `id_local` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tamanho` char(2) NOT NULL,
  `hdmi` char(1) NOT NULL,
  `vga` char(1) NOT NULL DEFAULT '',
  `dvi` char(1) NOT NULL,
  `displayport` char(1) NOT NULL,
  `autofalante` char(1) NOT NULL,
  `microfone` char(1) NOT NULL,
  `webcam` char(1) NOT NULL,
  `id_fabricante` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `comentario` text,
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
-- Table structure for sistema_operacional
-- ----------------------------
DROP TABLE IF EXISTS `sistema_operacional`;
CREATE TABLE `sistema_operacional` (
  `id_so` int(11) NOT NULL,
  `nome_so` varchar(255) NOT NULL,
  `id_fabricante` int(11) NOT NULL,
  PRIMARY KEY (`id_so`),
  KEY `id_fabricante_so` (`id_fabricante`),
  CONSTRAINT `id_fabricante_so` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `nome_status` char(30) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(255) NOT NULL,
  `cpf_user` char(11) NOT NULL,
  `senha` text NOT NULL,
  PRIMARY KEY (`id_user`,`cpf_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
