-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 01 avr. 2022 à 10:09
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `title`, `autor`, `date_publi`, `article`, `date_update`) VALUES
(51, 'Petit chat', 'Jumeaucourt Flo', '2022-03-30 06:16:41', 'miaou miaooouuuh', '2022-04-01 08:54:17'),
(52, 'Je fais du php', 'Tronquoy Damien', '2022-04-01 08:09:04', 'Mais pas  que Ã§a hein , je fais autre chose \'\'\'\'reijjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjgoijrgjerjgoerjgeporgjpeogjkepogjperojgerojgpoerjgpoerjgpoegjeprogjerpogjerpogjeporgjpoegjeoprjgeporjgeporgjepogjeporgjerpogjeporgjeprogjeprogjpger', '2022-04-01 09:05:40'),
(53, 'Je teste les  alertes', 'Jumeaucourt Flo', '2022-04-01 09:03:53', 'Essai 1', NULL),
(54, 'efe', 'Jumeaucourt Flo', '2022-04-01 09:08:49', 'ezfezf', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `date_inscription` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date_inscription`) VALUES
(10, 'fjum@test.lol', '2022-04-01 08:54:46'),
(11, 'fjum@gmail.com', '2022-04-01 08:55:27');

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
  `description` longtext NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `picture` varchar(50) NOT NULL,
  `date_publi` timestamp NOT NULL,
  `date_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sejours`
--

INSERT INTO `sejours` (`id`, `country`, `destination`, `chapo`, `description`, `price`, `checkin`, `checkout`, `picture`, `date_publi`, `date_update`) VALUES
(1, 'Maldives', 'MalÃ©', 'Les Maldives sont des pays tropical de l\'ocÃ©an Indies.', 'Les Maldives sont des pays tropical de l\'ocÃ©an Indien composÃ© de 26 atolls en forme d\'anneaux comprenant  plus de 1000 iles coralliennes.', '3459.99', '2022-09-02', '2022-09-30', 'maldives', '2022-03-31 12:51:59', '2022-04-01 09:50:10'),
(2, 'France', 'Les Vosge', 'La Bresse est une ville du nord-est de la France, prÃ©s de la frontiÃ¨re allemande.', 'La Bresse est une ville du nord-est de la France, prÃ©s de la frontiÃ¨re allemande. SituÃ©e au coeur du parc naturel rÃ©gional des Ballons des Vosges, la station de ski de La Bresse-Hohneck propose des pistes de ski au milieu de lacs, crï¿½tes montagneuses et forï¿½ts.', '1459.95', '2022-07-04', '2022-07-24', 'wildcamping', '2022-03-31 12:53:21', '2022-04-01 09:33:14'),
(4, 'France', 'Polynésie', 'Ce territoire se compose de plages de sable blanc', 'Ce territoire se compose de plages de sable blanc et de sable noir, de montagnes, d\'un arrière-pays sauvage et d\'immenses cascades', '4310.00', '2022-08-01', '2022-08-28', 'polynesia', '2022-03-31 12:55:30', '2022-03-31 06:15:21'),
(8, 'France', 'Nice', 'La mer mÃ©diterranÃ©e s&quot;offre Ã  vous', 'La mer mÃ©diterranÃ©e pour vous baigner et vous relaxer', '359.00', '2022-04-15', '2022-04-30', 'nice', '2022-04-01 09:17:11', '2022-04-01 09:42:37');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `forename`, `email`, `password`, `user_type`) VALUES
(4, 'Jumeaucourt', 'Flo', 'fjum@test.lol', '$2y$10$5Utm0M/QfEHmIXNMXU2xkez5zHP26A3Q5tXkmSLjdZtahox32DZ7u', '[\"admin\"]'),
(5, 'Jum', 'flo', 'tutu@danse.fr', '$2y$10$u.rSuQzZ4zIRDD/fpQlYVeXF93218P.Fs3x9Lya9nantQbAh3LO42', '[\"membre\"]'),
(8, 'Tumeau', 'Tlo', 'fjum@gmail.com', '$2y$10$xDAbHJcOcV9c9oWHLhAL0.YNZtNcQqlQ.1uNk9pTQfoGeuFvoWN6e', '[\"membre\"]'),
(9, 'Dupond', 'Maurice', 'dmau@exemple.fr', 'osef', '[\"membre\"]'),
(10, 'Durand', 'Michel', 'dmich@exemple.fr', 'osef', '[\"admin\"]'),
(24, 'Tronquoy', 'Damien', 'd.tronquoy@gmail.com', '$2y$10$Ktvl10iFBJpx2GbixYnWLejz8i5yd1U.O.oM1YpxVyzjKEaxHLZVO', '[\"admin\"]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
