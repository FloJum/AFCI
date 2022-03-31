-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 31 mars 2022 à 13:17
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sunnydays`
--

-- --------------------------------------------------------

--
-- Structure de la table `sejours`
--

DROP TABLE IF EXISTS `sejours`;
CREATE TABLE IF NOT EXISTS `sejours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(30) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `chapo` text NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `picture` varchar(50) NOT NULL,
  `date_publi` timestamp NOT NULL,
  `date_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sejours`
--

INSERT INTO `sejours` (`id`, `country`, `destination`, `chapo`, `description`, `price`, `checkin`, `checkout`, `picture`, `date_publi`, `date_update`) VALUES
(1, 'Maldives', 'Malé', 'Les Maldives sont un pays tropical de l\'océan Indien composé de 26 atolls en forme d\'anneaux comprenant plus de 1 000 îles coralliennes. \r\n', 'Les Maldives sont un pays tropical de l\'océan Indien composé de 26 atolls en forme d\'anneaux comprenant plus de 1 000 îles coralliennes. \r\nElles sont réputées pour leurs plages, leurs lagons bleus et leurs vastes récifs.', '3459.99', '2022-09-02', '2022-09-30', 'maldives', '2022-03-31 12:51:59', NULL),
(2, 'France', 'Les Vosges', 'La Bresse est une ville du nord-est de la France, près de la frontière allemande.', 'La Bresse est une ville du nord-est de la France, près de la frontière allemande. Située au cœur du parc naturel régional des Ballons des Vosges, la station de ski de La Bresse–Hohneck propose des pistes de ski au milieu de lacs, crêtes montagneuses et forêts.', '1459.95', '2022-07-04', '2022-07-24', 'wildcamping', '2022-03-31 12:53:21', '2022-03-31 12:55:54'),
(4, 'France', 'Polynésie', 'Ce territoire se compose de plages de sable blanc', 'Ce territoire se compose de plages de sable blanc et de sable noir, de montagnes, d\'un arrière-pays sauvage et d\'immenses cascades', '4310.00', '2022-08-01', '2022-08-28', 'polynesia', '2022-03-31 12:55:30', '2022-03-31 06:15:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
