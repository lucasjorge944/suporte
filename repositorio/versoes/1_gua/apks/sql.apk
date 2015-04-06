-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.21 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para db_timobsup
CREATE DATABASE IF NOT EXISTS `db_timobsup` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_timobsup`;


-- Copiando estrutura para tabela db_timobsup.tbl_ambiente
CREATE TABLE IF NOT EXISTS `tbl_ambiente` (
  `id_ambiente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `url_master` varchar(80) NOT NULL,
  `url_cliente` varchar(80) NOT NULL,
  `url_distribuidor` varchar(80) NOT NULL,
  `login_master` varchar(60) DEFAULT NULL,
  `senha_master` varchar(60) DEFAULT NULL,
  `login_gestor` varchar(60) DEFAULT NULL,
  `senha_gestor` varchar(60) DEFAULT NULL,
  `login_distribuidor` varchar(60) DEFAULT NULL,
  `senha_distribuidor` varchar(60) DEFAULT NULL,
  `senha_pdv` varchar(60) DEFAULT NULL,
  `login_coletor` varchar(60) DEFAULT NULL,
  `senha_coletor` varchar(60) DEFAULT NULL,
  `login_fiscal` varchar(60) DEFAULT NULL,
  `senha_fiscal` varchar(60) DEFAULT NULL,
  `login_monitor` varchar(60) DEFAULT NULL,
  `senha_monitor` varchar(60) DEFAULT NULL,
  `path_apks` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_ambiente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela db_timobsup.tbl_usuario
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `acesso` char(1) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
