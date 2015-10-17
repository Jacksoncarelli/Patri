
--FABRICANTE
--INSERT INTO FABRICANTE VALUES(100, 'MICROSOFT CORPORATION', 'MICROSOFT', 'AV. NAÇÕES UNIDAS, 1000', 'SOFTWARE');
CREATE TABLE IF NOT EXISTS `Fabricante` (
  `id_fab` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_fab` varchar(50) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `tipo_produto` varchar(20) NOT NULL,
  PRIMARY KEY (`id_fab`),
  UNIQUE KEY `Fabricante` (`Fabricante`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;	


--DEPARTAMENTO
-- INSERT INTO DEPARTAMENTO VALUES(001,'RECURSOS HUMANOS','1301','SALA 12 - 1º ANDAR');
CREATE TABLE IF NOT EXISTS `departamento` (
  `id_depto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_depto` varchar(50) NOT NULL,
  `ramal_depto` char(5) ,
  `sala_depto` varchar(10) NOT NULL,
  `andar_depto` varchar(10) NOT NULL,
  PRIMARY KEY (`id_depto`),
  UNIQUE KEY `departamento` (`departamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;	


--SOFTWARE
--INSERT INTO SOFTWARE VALUES(100, 'WINDOWS 7', 100, '7.0', 'SISTEMA OPERACIONAL');
CREATE TABLE IF NOT EXISTS `software` (
  `id_soft` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_soft` varchar(50) NOT NULL,
  `id_fab` integer REFERENCES Fabricante(id_fab),
  `versao` varchar(10),
  `tipo_soft` varchar(50) ,
  PRIMARY KEY (`id_soft`),
  UNIQUE KEY `software` (`software`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;	

--EQUIPAMENTO
CREATE TABLE IF NOT EXISTS `equipamento` (
  `id_patri` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) NOT NULL,
  `num_serie` varchar(40),
  `data_aquisicao` date,
  `valor` number(11,2) ,
  `tempo_garantia` number(3) ,
  `tipo_eq` varchar(15) ,
  `id_depto` varchar(50) REFERENCES departamento(id_depto),
  `id_fab` integer  REFERENCES Fabricante(id_fab),
  PRIMARY KEY (`id_patri`),
  UNIQUE KEY `equipamento` (`equipamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;	

--COMPUTADOR
--INSERT INTO EQUIPAMENTO VALUES(NUM_PATRI_SEQ.NEXTVAL,'SERVIDOR','ABC40042012',TO_DATE('01/02/2011','DD/MM/YYYY'),'RC2011DEF5004',8500.00, 36, 006, 500,'ATIVO');
CREATE TABLE IF NOT EXISTS `computador` (
  `id_patri` int(10) REFERENCES equipamento(id_patri),
  `tipo_cpu` varchar(50) NOT NULL,
  `velocidade_cpu` number(5,2) NOT NULL,  -- VELOCIDADE EM GIGA Hz
  `capacidade_hd` number(6,2) NOT NULL,          -- CAPACIDADE EM GIGABYTES
  `memoria` number(4) NOT NULL,	 	 -- CAPACIADE EM GIGABYTES
  `tipo_computador` number(3) ,
  PRIMARY KEY (`id_patri`),
  UNIQUE KEY `computador` (`computador`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;	

--REDE
--INSERT INTO EQUIPAMENTO VALUES(NUM_PATRI_SEQ.NEXTVAL,'2801RX','FGH20012011',TO_DATE('01/04/2011','DD/MM/YYYY'),'RC2011FGH5006',4000.00, 24 ,006, 504,'ATIVO');
CREATE TABLE IF NOT EXISTS `rede` (
  `id_patri` int(10) REFERENCES equipamento(id_patri),
  `tipo_rede` varchar(50) NOT NULL,
  `tipo_conexao` varchar(20) NOT NULL, 
  `num_portas` number(3) NOT NULL,        
  PRIMARY KEY (`id_patri`),
  UNIQUE KEY `rede` (`rede`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;	

--PERIFERICO
--INSERT INTO EQUIPAMENTO VALUES(NUM_PATRI_SEQ.NEXTVAL,'MONITOR','FGH20012011',TO_DATE('01/04/2011','DD/MM/YYYY'),'RC2011FGH5006',500.00, 24 ,006, 505,'ATIVO');
CREATE TABLE IF NOT EXISTS `rede` (
  `id_patri` int(10) REFERENCES equipamento(id_patri),
  `tipo_periferico` varchar(20) NOT NULL,
  `caracteristica` varchar(50) NOT NULL, 	     
  PRIMARY KEY (`id_patri`),
  UNIQUE KEY `rede` (`rede`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;	