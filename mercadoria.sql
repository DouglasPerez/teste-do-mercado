-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `mercadorias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercadoria`
--

CREATE TABLE IF NOT EXISTS `mercadoria` (
  `Id_Mercadoria` int(100) NOT NULL AUTO_INCREMENT,
  `Codigo_Mercadoria` int(10) NOT NULL,
  `Tipo_Mercadoria` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nome_Mercadoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Qtd_Mercadoria` int(50) NOT NULL,
  `Preco_Mercadoria` float NOT NULL,
  `Tipo_Negocio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Mercadoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `mercadoria`
--

INSERT INTO `mercadoria` (`Id_Mercadoria`, `Codigo_Mercadoria`, `Tipo_Mercadoria`, `Nome_Mercadoria`, `Qtd_Mercadoria`, `Preco_Mercadoria`, `Tipo_Negocio`) VALUES
(12, 234412, 'Carro', 'Land Rover', 200, 61000, 'compra');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
