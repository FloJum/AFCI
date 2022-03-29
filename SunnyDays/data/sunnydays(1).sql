-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 29 mars 2022 à 14:16
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
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `date_publi` timestamp NOT NULL,
  `article` text NOT NULL,
  `date_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `title`, `autor`, `date_publi`, `article`, `date_update`) VALUES
(44, 'Ã‡a marche !', 'totoy', '2022-03-29 00:09:02', 'ergeregergeerger', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `forename` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `user_type` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `forename`, `email`, `password`, `user_type`) VALUES
(4, 'Jumeaucourt', 'Flo', 'fjum@test.lol', '$2y$10$5Utm0M/QfEHmIXNMXU2xkez5zHP26A3Q5tXkmSLjdZtahox32DZ7u', '[\"admin\"]'),
(5, 'Jum', 'flo', 'tutu@danse.fr', '$2y$10$u.rSuQzZ4zIRDD/fpQlYVeXF93218P.Fs3x9Lya9nantQbAh3LO42', '[\"membre\"]'),
(8, 'Jum', 'flo', 'fjum@gmail.com', '$2y$10$xDAbHJcOcV9c9oWHLhAL0.YNZtNcQqlQ.1uNk9pTQfoGeuFvoWN6e', '[\"membre\"]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
