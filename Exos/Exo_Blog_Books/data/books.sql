-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 15 mars 2022 à 15:06
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
-- Base de données : `books`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(32) NOT NULL,
  `auteur` varchar(32) NOT NULL,
  `datepub` date NOT NULL,
  `isarchived` tinyint(1) NOT NULL DEFAULT '0',
  `prix` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `titre`, `auteur`, `datepub`, `isarchived`, `prix`) VALUES
(1, 'Le mirage', 'Martine Delaporte', '2010-12-10', 0, '19.90'),
(2, 'Les oiseaux', 'Alex Laon', '2010-05-26', 0, '14.99'),
(3, 'Les chiens', 'Marie Dupont', '2020-01-01', 1, '24.90'),
(5, 'Les poissons', 'Alex Lepetit', '1999-12-12', 0, '39.99'),
(12, 'les lapins', 'Alex Lepetit', '1969-05-13', 1, '6.85'),
(26, 'Allo', 'Nabilla', '2020-05-05', 0, '799.99'),
(27, 'On a perdu Tintin', 'Milou', '2022-03-08', 0, '23.49'),
(28, 'Rex', 'Toto', '2022-03-09', 0, '16.90');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `role` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `mail`, `password`, `pseudo`, `role`) VALUES
(1, 'admin@dwwm.fr', 'SecretX', 'Admin', 'admin'),
(2, 'fjum@gmail.com', 'lol', 'Wolf', 'membre'),
(3, 'fjum@test.lol', 'troll', 'Jean Mich', 'membre'),
(5, 'demo@dwwm.fr', 'laon', 'Demo', 'membre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
