-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 12 Novembre 2018 à 10:24
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
-- Structure de la table `Bateau`
--

CREATE TABLE IF NOT EXISTS `Bateau` (
  `Id` int(11) NOT NULL,
  `Nom` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE IF NOT EXISTS `Categorie` (
  `Lettre` varchar(5) NOT NULL,
  `Libelle` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Lettre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Hash` varchar(32) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Client`
--

INSERT INTO `Client` (`IdClient`, `Nom`, `Prenom`, `Adresse`, `CodePostal`, `Ville`, `Fidelitee`, `Email`, `Hash`, `Password`) VALUES
(0, 'delcroix', 'thomas', '10 rue du capitaine Michel', 59000, 'Lille', 0, 'thomas.delcroix@gastonberger.fr', '577ef1154f3240ad5b9b413aa7346a1e', '$2y$10$EYKleoZSM6Ht.0X760Qiu.NQpyre1KkrBm5A41.bndyD7etGiuQE6');

-- --------------------------------------------------------

--
-- Structure de la table `Contenir`
--

CREATE TABLE IF NOT EXISTS `Contenir` (
  `Lettre` varchar(5) NOT NULL,
  `Id` int(11) NOT NULL,
  `CapaciteMax` int(11) NOT NULL,
  PRIMARY KEY (`Lettre`,`Id`),
  KEY `Contenir_Bateau1_FK` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Equipement`
--

CREATE TABLE IF NOT EXISTS `Equipement` (
  `IdEquipement` int(11) NOT NULL,
  `Libelle` text CHARACTER SET utf8 NOT NULL,
  `Id` int(11) NOT NULL,
  PRIMARY KEY (`IdEquipement`),
  KEY `Equipement_Bateau_FK` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Liaison`
--

CREATE TABLE IF NOT EXISTS `Liaison` (
  `Code` int(11) NOT NULL,
  `Distance` double NOT NULL,
  `id` int(11) NOT NULL,
  `Id_Port` int(11) NOT NULL,
  `Id_Port_Arrivee` int(11) NOT NULL,
  PRIMARY KEY (`Code`),
  KEY `Liaison_Secteur_FK` (`id`),
  KEY `Liaison_Port0_FK` (`Id_Port`),
  KEY `Liaison_Port1_FK` (`Id_Port_Arrivee`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Periode`
--

CREATE TABLE IF NOT EXISTS `Periode` (
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  PRIMARY KEY (`DateDebut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Port`
--

CREATE TABLE IF NOT EXISTS `Port` (
  `Id` int(11) NOT NULL,
  `Nom` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Reservation`
--

CREATE TABLE IF NOT EXISTS `Reservation` (
  `Num` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Num_Type` int(11) NOT NULL,
  `Num_Traversee` int(11) NOT NULL,
  `IdClient` int(11) NOT NULL,
  PRIMARY KEY (`Num`),
  KEY `Reservation_Type_FK` (`Num_Type`),
  KEY `Reservation_Traversee0_FK` (`Num_Traversee`),
  KEY `Reservation_Client1_FK` (`IdClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Secteur`
--

CREATE TABLE IF NOT EXISTS `Secteur` (
  `id` int(11) NOT NULL,
  `Nom` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Tarifer`
--

CREATE TABLE IF NOT EXISTS `Tarifer` (
  `Code` int(11) NOT NULL,
  `DateDebut` date NOT NULL,
  `Num` int(11) NOT NULL,
  `Tarif` decimal(15,3) NOT NULL,
  PRIMARY KEY (`Code`,`DateDebut`,`Num`),
  KEY `Tarifer_Periode0_FK` (`DateDebut`),
  KEY `Tarifer_Type1_FK` (`Num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Traversee`
--

CREATE TABLE IF NOT EXISTS `Traversee` (
  `Num` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Heure` int(11) NOT NULL,
  `Code` int(11) NOT NULL,
  `Id` int(11) NOT NULL,
  PRIMARY KEY (`Num`),
  KEY `Traversee_Liaison_FK` (`Code`),
  KEY `Traversee_Bateau0_FK` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Type`
--

CREATE TABLE IF NOT EXISTS `Type` (
  `Num` int(11) NOT NULL,
  `Libelle` text CHARACTER SET utf8 NOT NULL,
  `Lettre` varchar(5) NOT NULL,
  PRIMARY KEY (`Num`),
  KEY `Type_Categorie_FK` (`Lettre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Contenir`
--
ALTER TABLE `Contenir`
  ADD CONSTRAINT `Contenir_Bateau1_FK` FOREIGN KEY (`Id`) REFERENCES `Bateau` (`Id`),
  ADD CONSTRAINT `Contenir_Categorie1_FK` FOREIGN KEY (`Lettre`) REFERENCES `Categorie` (`Lettre`);

--
-- Contraintes pour la table `Equipement`
--
ALTER TABLE `Equipement`
  ADD CONSTRAINT `Equipement_Bateau_FK` FOREIGN KEY (`Id`) REFERENCES `Bateau` (`Id`);

--
-- Contraintes pour la table `Liaison`
--
ALTER TABLE `Liaison`
  ADD CONSTRAINT `Liaison_Port0_FK` FOREIGN KEY (`Id_Port`) REFERENCES `Port` (`Id`),
  ADD CONSTRAINT `Liaison_Port1_FK` FOREIGN KEY (`Id_Port_Arrivee`) REFERENCES `Port` (`Id`),
  ADD CONSTRAINT `Liaison_Secteur_FK` FOREIGN KEY (`id`) REFERENCES `Secteur` (`id`);

--
-- Contraintes pour la table `Reservation`
--
ALTER TABLE `Reservation`
  ADD CONSTRAINT `Reservation_Client1_FK` FOREIGN KEY (`IdClient`) REFERENCES `Client` (`IdClient`),
  ADD CONSTRAINT `Reservation_Traversee0_FK` FOREIGN KEY (`Num_Traversee`) REFERENCES `Traversee` (`Num`),
  ADD CONSTRAINT `Reservation_Type_FK` FOREIGN KEY (`Num_Type`) REFERENCES `Type` (`Num`);

--
-- Contraintes pour la table `Tarifer`
--
ALTER TABLE `Tarifer`
  ADD CONSTRAINT `Tarifer_Liaison_FK` FOREIGN KEY (`Code`) REFERENCES `Liaison` (`Code`),
  ADD CONSTRAINT `Tarifer_Periode0_FK` FOREIGN KEY (`DateDebut`) REFERENCES `Periode` (`DateDebut`),
  ADD CONSTRAINT `Tarifer_Type1_FK` FOREIGN KEY (`Num`) REFERENCES `Type` (`Num`);

--
-- Contraintes pour la table `Traversee`
--
ALTER TABLE `Traversee`
  ADD CONSTRAINT `Traversee_Bateau0_FK` FOREIGN KEY (`Id`) REFERENCES `Bateau` (`Id`),
  ADD CONSTRAINT `Traversee_Liaison_FK` FOREIGN KEY (`Code`) REFERENCES `Liaison` (`Code`);

--
-- Contraintes pour la table `Type`
--
ALTER TABLE `Type`
  ADD CONSTRAINT `Type_Categorie_FK` FOREIGN KEY (`Lettre`) REFERENCES `Categorie` (`Lettre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
