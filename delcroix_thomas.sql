-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 10 Décembre 2018 à 11:05
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

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`delcroix.thomas`@`%` PROCEDURE `Myproc2`(nom varchar(50), OUT  longueur int)
begin
set  longueur=length(nom) ;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `Bateau`
--

CREATE TABLE IF NOT EXISTS `Bateau` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE IF NOT EXISTS `Categorie` (
  `Lettre` varchar(5) NOT NULL,
  `Libelle` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Lettre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Categorie`
--

INSERT INTO `Categorie` (`Lettre`, `Libelle`) VALUES
('A', 'Passager'),
('B', 'Véh.inf.2m'),
('C', 'Véh.sup.2m');

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE IF NOT EXISTS `Client` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text CHARACTER SET utf8 NOT NULL,
  `Prenom` text CHARACTER SET utf8 NOT NULL,
  `Adresse` text CHARACTER SET utf8 NOT NULL,
  `CodePostal` int(11) NOT NULL,
  `Ville` text CHARACTER SET utf8 NOT NULL,
  `Fidelitee` float NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Hash` varchar(32) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `Client`
--

INSERT INTO `Client` (`IdClient`, `Nom`, `Prenom`, `Adresse`, `CodePostal`, `Ville`, `Fidelitee`, `Email`, `Hash`, `Password`) VALUES
(1, 'test', 'test', '10ze', 59000, 'lille', 0, 'test@test', '0ff8033cf9437c213ee13937b1c4c455', '$2y$10$EG3Heesh7rWu.qxgnrRwMOBrrDMkyyLI.NcSZ.bwf1t/rRQcUe5Fy'),
(2, 'Delcroix', 'Thomas', '10 rue du capitaine Michel', 59000, 'lille', 0, 'Thomas.delcroix@gastonberger.fr', '24b16fede9a67c9251d3e7c7161c83ac', '$2y$10$jqe.VLzf7HUKQI8l5vFkfOuYSpotyLxvU0gyRYQzuqCXB.RI5bbRK'),
(8, 'sdqd', 'tÃ©mÃ ', 'dfgdg', 59000, 'aze', 0, 'azdazd@adad', '26408ffa703a72e8ac0117e74ad46f33', '$2y$10$5bU4jwAoKMufLmVRU7is8u5WtF2N3mS3LAYMqfEp49yM7gDikqvpG'),
(9, 'fsdf', 'th', '10 rue du capitaine Michel', 8440, 'df', 0, 'rengi.abarai@hotmail.fr', 'a597e50502f5ff68e3e25b9114205d4a', '$2y$10$zmWdQVqrA4QAZYss3yiibOrls3MZe9psyHC1NidaqAsZZ1CToCbbq'),
(10, 'ddfgdfg', 'fgdfg', 'gdfg', 59000, 'dfgdg', 0, 'fgd@dfgdgf', 'd1c38a09acc34845c6be3a127a5aacaf', '$2y$10$TDESybkSSz1Cdod5WGhlM.09muRgmk778xBZ/DUr./lYRfG0SF8cu'),
(11, 'efzef', 'efzef', 'zefzefzefze', 59000, 'efz', 0, 'pute@pute', '8dd48d6a2e2cad213179a3992c0be53c', '$2y$10$3sGxUS.oPGIPAOKv8.88e.yXOXXjI8zi5aQ.hXmVnumJGYh64TJ1y');

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
  `IdEquipement` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` text CHARACTER SET utf8 NOT NULL,
  `Id` int(11) NOT NULL,
  PRIMARY KEY (`IdEquipement`),
  KEY `Equipement_Bateau_FK` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Liaison`
--

CREATE TABLE IF NOT EXISTS `Liaison` (
  `Code` int(11) NOT NULL AUTO_INCREMENT,
  `Distance` double NOT NULL,
  `id` int(11) NOT NULL,
  `Id_Port` int(11) NOT NULL,
  `Id_Port_Arrivee` int(11) NOT NULL,
  PRIMARY KEY (`Code`),
  KEY `Liaison_Secteur_FK` (`id`),
  KEY `Liaison_Port0_FK` (`Id_Port`),
  KEY `Liaison_Port1_FK` (`Id_Port_Arrivee`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `Liaison`
--

INSERT INTO `Liaison` (`Code`, `Distance`, `id`, `Id_Port`, `Id_Port_Arrivee`) VALUES
(1, 8.3, 3, 1, 2),
(2, 9, 3, 2, 1),
(3, 8, 3, 1, 3),
(4, 7.9, 3, 3, 1),
(5, 23.7, 3, 4, 2),
(6, 25.1, 3, 2, 4),
(7, 8.8, 5, 1, 5),
(8, 8.8, 5, 5, 1),
(9, 7.7, 6, 6, 7),
(10, 7.4, 6, 7, 6);

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
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `Port`
--

INSERT INTO `Port` (`Id`, `Nom`) VALUES
(1, 'Quiberon'),
(2, 'Le Palais'),
(3, 'Sauzon'),
(4, 'Vannes'),
(5, 'Port St Gildas'),
(6, 'Lorient'),
(7, 'Port-Tudy');

-- --------------------------------------------------------

--
-- Structure de la table `Reservation`
--

CREATE TABLE IF NOT EXISTS `Reservation` (
  `Num` int(11) NOT NULL AUTO_INCREMENT,
  `Quantite` int(11) NOT NULL,
  `Num_Type` int(11) NOT NULL,
  `Num_Traversee` int(11) NOT NULL,
  `IdClient` int(11) NOT NULL,
  PRIMARY KEY (`Num`),
  KEY `Reservation_Type_FK` (`Num_Type`),
  KEY `Reservation_Traversee0_FK` (`Num_Traversee`),
  KEY `Reservation_Client1_FK` (`IdClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Secteur`
--

CREATE TABLE IF NOT EXISTS `Secteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `Secteur`
--

INSERT INTO `Secteur` (`id`, `Nom`) VALUES
(1, 'Aix'),
(2, 'Batz'),
(3, 'Belle-Ile-en-Mer'),
(4, 'Bréhat'),
(5, 'Houat'),
(6, 'Ile de Groix'),
(7, 'Molène'),
(8, 'Ouessant'),
(9, 'Sein'),
(10, 'Yeu');

-- --------------------------------------------------------

--
-- Structure de la table `Tarifer`
--

CREATE TABLE IF NOT EXISTS `Tarifer` (
  `Code` int(11) NOT NULL AUTO_INCREMENT,
  `DateDebut` date NOT NULL,
  `Num` int(11) NOT NULL,
  `Tarif` decimal(15,3) NOT NULL,
  PRIMARY KEY (`Code`,`DateDebut`,`Num`),
  KEY `Tarifer_Periode0_FK` (`DateDebut`),
  KEY `Tarifer_Type1_FK` (`Num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Traversee`
--

CREATE TABLE IF NOT EXISTS `Traversee` (
  `Num` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Heure` int(11) NOT NULL,
  `Code` int(11) NOT NULL,
  `Id` int(11) NOT NULL,
  PRIMARY KEY (`Num`),
  KEY `Traversee_Liaison_FK` (`Code`),
  KEY `Traversee_Bateau0_FK` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Type`
--

CREATE TABLE IF NOT EXISTS `Type` (
  `Num` int(11) NOT NULL AUTO_INCREMENT,
  `Ref` varchar(2) NOT NULL,
  `Libelle` text CHARACTER SET utf8 NOT NULL,
  `Lettre` varchar(5) NOT NULL,
  PRIMARY KEY (`Num`),
  KEY `Type_Categorie_FK` (`Lettre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `Type`
--

INSERT INTO `Type` (`Num`, `Ref`, `Libelle`, `Lettre`) VALUES
(1, 'A1', 'Adulte', 'A'),
(2, 'A2', 'Junior 8 à 18 ans', 'A'),
(3, 'A3', 'Enfant 0 à 7 ans', 'A'),
(4, 'B1', 'Voiture long.inf.4m', 'B'),
(5, 'B2', 'Voiture long.inf.5m', 'B'),
(6, 'C1', 'Fourgon', 'C'),
(7, 'C2', 'Camping Car', 'C'),
(8, 'C3', 'Camion', 'C');

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
