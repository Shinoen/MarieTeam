-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 12 Novembre 2018 à 09:43
-- Version du serveur: 5.5.62-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `delcroix_thomas`
--

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE IF NOT EXISTS `Client` (
  `IdClient` int(11) NOT NULL,
  `Nom` text CHARACTER SET utf8 NOT NULL,
  `Prenom` text CHARACTER SET utf8 NOT NULL,
  `Adresse` text CHARACTER SET utf8 NOT NULL,
  `CodePostal` int(11) NOT NULL,
  `Ville` text CHARACTER SET utf8 NOT NULL,
  `Fidelitee` float NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Hash` varchar(5) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Client`
--

INSERT INTO `Client` (`IdClient`, `Nom`, `Prenom`, `Adresse`, `CodePostal`, `Ville`, `Fidelitee`, `Email`, `Hash`, `Password`) VALUES
(1, 'g', 'f', 'f', 4, 'fg', 10, 'test@gmail.com', '1', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
