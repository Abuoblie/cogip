-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 22 avr. 2021 à 12:15
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
  `phone` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_Company`),
  KEY `id_Type` (`id_Type`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`name`, `country`, `vat`, `id_Type`, `id_Company`, `phone`) VALUES
('Raviga', 'United States', 'US456 654 342', 1, 1, NULL),
('Dunder Mifflin', 'United States', 'US678 765 765', 1, 4, NULL),
('Jouets Jean-Michel', 'France', 'FR 677 544 000', 1, 5, NULL),
('Bob Vance Refrig.', 'United States', 'US456 654 687', 1, 6, NULL),
('ElectricPower', 'Italie', 'IT 256 852 542', 2, 10, NULL),
('Belgalol', 'Belgique', 'BE0876 654 665', 2, 11, NULL),
('Pierre Cailloux', 'France', 'FR 678 908 654', 2, 12, NULL),
('Proximdr', 'Belgique', 'BE0876 985 665', 2, 13, NULL),
('Mutiny', 'Italie', 'IT 123 456 789', 1, 14, NULL),
('Hooli', 'France', 'FR 369 852 147', 1, 15, NULL),
('Phoque Off', 'Belgique', 'BE0321 478 258', 2, 16, NULL),
('Pied Piper', 'France', 'FR 951 387 279', 1, 17, NULL),
('COGIP', 'Belgium', 'BE123954555', 2, 18, NULL);

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
  `id_Company` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_invoice`),
  KEY `id_People` (`id_People`),
  KEY `id_Company` (`id_Company`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`number`, `invoice_date`, `id_People`, `id_invoice`, `id_Company`) VALUES
('F2019044-001', '2019-04-04', 1, 1, NULL),
('F20201205-057', '2020-12-05', 2, 2, NULL),
('F20210113-874', '2021-01-13', 3, 3, NULL),
('F20210205-099', '2021-02-05', 4, 4, NULL),
('F20210228-001', '2021-02-28', 5, 5, NULL),
('F20210301-025', '2021-03-01', 6, 6, NULL),
('20210305-558', '2021-03-05', 7, 7, NULL),
('20210310-021', '2021-03-10', 8, 8, NULL),
('20210318-011', '2021-03-18', 9, 9, NULL),
('20210323-258', '2021-03-23', 10, 10, NULL),
('20210402-987', '2021-04-02', 11, 11, NULL),
('20210407-214', '2021-04-07', 12, 12, NULL);

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
  `Telephone` varchar(25) NOT NULL,
  PRIMARY KEY (`id_People`),
  KEY `id_Company` (`id_Company`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `people`
--

INSERT INTO `people` (`first_name`, `last_name`, `email`, `pswd`, `id_Company`, `id_People`, `Telephone`) VALUES
('Peter', 'Gregory', 'peter.gregory@raviga.com', NULL, 1, 1, '555-12345'),
('Dwight', 'Schrute', 'dwight.schrute@ddmfl.com', NULL, 4, 2, '555-9874'),
('Cameron', 'Howe', 'cam.howe@mutiny', NULL, 14, 3, '555-8527'),
('Jean', 'Talu', 'jt@jjm.fr', NULL, 5, 4, '555-9876'),
('Jessica', 'Potempoche', 'jpo@bvref.com', NULL, 6, 5, '555-1679'),
('Jin', 'Tonik', 'jt@ep.it', NULL, 10, 6, '555-3578'),
('keveen', 'Toocourt', 'keveen.toocourt@belgalol.be', NULL, 11, 7, '555-6731'),
('Cie', 'Zo', 'cz@pc.fr', NULL, 12, 8, '555-0286'),
('Lou', 'Rdeau', 'lou.rdeau@proimdr.be', NULL, 13, 9, '555-9037'),
('Edward', 'Silverhand', 'ed.silverhand@hooli.fr', NULL, 15, 10, '555-7833'),
('Yummi', 'Toh', 'YT@po.net', NULL, 16, 11, '555-9987'),
('Youri', 'Brocolli', 'youri.brocolli@pied.piper.fr', NULL, 17, 12, '555-1155'),
('Jean-Christian', 'Ranu', 'jcr@cogip.be', '9770d1c99cd356280d7bb78b97bdbe4bf25ff1da', 18, 13, '555-8888'),
('Muriel', 'Perrache', 'mp@cogip.be', 'f2ff241eac83db641cadb1c8af3b0d8ca9fa7160', 18, 14, '555-8887');

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

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_Company`) REFERENCES `company` (`id_Company`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
