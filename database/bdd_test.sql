-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 14 Juin 2015 à 21:20
-- Version du serveur: 10.0.10-MariaDB
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bdd_test`
--
CREATE DATABASE IF NOT EXISTS `bdd_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdd_test`;

-- --------------------------------------------------------

--
-- Structure de la table `tb_fruits`
--

CREATE TABLE IF NOT EXISTS `tb_fruits` (
  `fruit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_fruits`
--

INSERT INTO `tb_fruits` (`fruit`) VALUES
('Coco'),
('Kiwi'),
('Fraise'),
('Litchi'),
('Cacao'),
('Datte'),
('Orange');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
