-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 08 avr. 2021 à 14:13
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip2021`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `id_Type` int(11) NOT NULL,
  `id_Company` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_Company`),
  KEY `id_Type` (`id_Type`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`name`, `country`, `vat`, `id_Type`, `id_Company`) VALUES
('Raviga', 'United States', 'US456 654 342', 1, 1),
('Dunder Mifflin', 'United States', 'US678 765 765', 1, 4),
('Jouets Jean-Michel', 'France', 'FR 677 544 000', 1, 5),
('Bob Vance Refrig.', 'United States', 'US456 654 687', 1, 6),
('ElectricPower', 'Italie', 'IT 256 852 542', 2, 10),
('Belgalol', 'Belgique', 'BE0876 654 665', 2, 11),
('Pierre Cailloux', 'France', 'FR 678 908 654', 2, 12),
('Proximdr', 'Belgique', 'BE0876 985 665', 2, 13),
('Mutiny', 'Italie', 'IT 123 456 789', 1, 14),
('Hooli', 'France', 'FR 369 852 147', 1, 15),
('Phoque Off', 'Belgique', 'BE0321 478 258', 2, 16),
('Pied Piper', 'France', 'FR 951 387 279', 1, 17);

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `number` varchar(128) NOT NULL,
  `invoice_date` date DEFAULT NULL,
  `id_People` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_invoice`),
  KEY `id_People` (`id_People`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`number`, `invoice_date`, `id_People`, `id_invoice`) VALUES
('F2019044-001', '2019-04-04', 1, 1),
('F20201205-057', '2020-12-05', 2, 2),
('F20210113-874', '2021-01-13', 3, 3),
('F20210205-099', '2021-02-05', 4, 4),
('F20210228-001', '2021-02-28', 5, 5),
('F20210301-025', '2021-03-01', 6, 6),
('20210305-558', '2021-03-05', 7, 7),
('20210310-021', '2021-03-10', 8, 8),
('20210318-011', '2021-03-18', 9, 9),
('20210323-258', '2021-03-23', 10, 10),
('20210402-987', '2021-04-02', 11, 11),
('20210407-214', '2021-04-07', 12, 12);

-- --------------------------------------------------------

--
-- Structure de la table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `pswd` varchar(128) DEFAULT NULL,
  `id_Company` int(11) NOT NULL,
  `id_People` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_People`),
  KEY `id_Company` (`id_Company`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `people`
--

INSERT INTO `people` (`first_name`, `last_name`, `email`, `pswd`, `id_Company`, `id_People`) VALUES
('Peter', 'Gregory', 'peter.gregory@raviga.com', '1234', 1, 1),
('Dwight', 'Schrute', 'dwight.schrute@ddmfl.com', '4321', 4, 2),
('Cameron', 'Howe', 'cam.howe@mutiny', '7539', 14, 3),
('Jean', 'Talu', 'jt@jjm.fr', '7619', 5, 4),
('Jessica', 'Potempoche', 'jpo@bvref.com', '4562', 6, 5),
('Jin', 'Tonik', 'jt@ep.it', '7885', 10, 6),
('keveen', 'Toocourt', 'keveen.toocourt@belgalol.be', '9156', 11, 7),
('Cie', 'Zo', 'cz@pc.fr', '4825', 12, 8),
('Lou', 'Rdeau', 'lou.rdeau@proimdr.be', '9758', 13, 9),
('Edward', 'Silverhand', 'ed.silverhand@hooli.fr', '1567', 15, 10),
('Yummi', 'Toh', 'YT@po.net', '5223', 16, 11),
('Youri', 'Brocolli', 'youri.brocolli@pied.piper.fr', '7964', 17, 12);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id_Type` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  PRIMARY KEY (`id_Type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_Type`, `label`) VALUES
(1, 'Client'),
(2, 'Provider');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
