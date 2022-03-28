-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 28 mars 2022 à 14:14
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
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `forename` varchar(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `user_type` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `forename`, `email`, `password`, `user_type`) VALUES
(1, 'Jumeau', 'Flo', '', '$2y$10$7VfqHNzngYZOm307H4nhoO4HA.FdvUQxsbtkfgWrZC5l9h0qM2Da2', '[\"membre\"]'),
(2, 'Jumeau', 'Flo', '', '$2y$10$XGPSrAmHcIKIAGjntXdFl.gjhZueNJnaxRLZfJk8xiofk6Xo0krGm', '[\"membre\"]'),
(3, 'Jumeau', 'Flo', 'fjum@gmail.com', '$2y$10$AlG8i.BQ3SOskd5QM8iNs.6HJI7t/BeXytvItl68HKb4PzJJphOl2', '[\"membre\"]'),
(4, 'Jumeaucourt', 'Flo', 'fjum@test.lol', '$2y$10$5Utm0M/QfEHmIXNMXU2xkez5zHP26A3Q5tXkmSLjdZtahox32DZ7u', '[\"membre\"]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
