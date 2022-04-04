-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 avr. 2022 à 07:00
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
(51, 'Petit chat', 'Jumeaucourt Flo', '2022-03-30 06:16:41', 'Pour les amoureux des chats, ils reprÃ©sentent l\'incarnation mÃªme de la beautÃ© et de la grÃ¢ce. Pour d\'autres, les chats sont sournois et un peu trop indÃ©pendants.\r\n\r\nL\'amitiÃ© harmonieuse entre le chat et l\'homme remonte jusqu\'Ã  l\'an 3000 avant J.-C., dans l\'Egypte ancienne. Des Ã©tudes archÃ©ologiques ont mis au jour des Ã©lÃ©ments prouvant que le chat sauvage africain (Felis sylvestris lybica) est le premier ancÃªtre du chat domestique.\r\n\r\nC\'est pourquoi, on trouve souvent aujourd\'hui des chats sauvages africains comme animaux de compagnie chez certaines populations traditionnelles. Des Ã©tudes fondÃ©es sur l\'ADN menÃ©es en Afrique du Sud n\'ont pas rÃ©ussi Ã  Ã©tablir de distinction entre le chat domestique et le chat sauvage africain. Alors que le chat sauvage europÃ©en (Felis sylvestris sylvestris), souvent considÃ©rÃ© comme ayant contribuÃ© au dÃ©veloppement du chat de compagnie, se distingue clairement des deux autres.\r\n\r\nSelon les scientifiques et les historiens, les chats sauvages africains ont commencÃ© Ã  s\'approcher des entrepÃ´ts de grains Ã©gyptiens le long de la rive du Nil, attirÃ©s par les souris et les rats qui s\'y trouvaient. Les chats Ã©liminant les rongeurs, les populations ont commencÃ© Ã  les apprÃ©cier, les jugeant trÃ¨s utiles. Comme il y avait peu de prÃ©dateurs dans ces rÃ©gions, ces chats ont commencÃ© Ã  se reproduire et se multiplier, Ã  cÃ´tÃ© des hommes. Les portÃ©es de nombreux petits chatons attachants ont attendri les populations.\r\n\r\nTrÃ¨s vite, les hommes ont emmenÃ© chez eux ces petits chatons pour en prendre soin et ils n\'ont pas tardÃ© Ã  les adopter. La relation trÃ¨s affectueuse entre l\'homme et le chat a commencÃ© alors Ã  se renforcer, surtout en les nourrissant trÃ¨s tÃ´t, entre l\'Ã¢ge de 2 Ã  8 semaines. Il y avait donc toutes les chances que ces chatons une fois l\'Ã¢ge adulte atteint restent.\r\n\r\nC\'est sans doute sa fonction de protection des entrepÃ´ts d\'aliments contre les rongeurs qui explique pourquoi les habitants de l\'Egypte ancienne aient fait du chat une divinitÃ© sacrÃ©e. Ces chats Ã©taient appelÃ©s Â« miw Â» (de l\'onomatopÃ©e miou). Les maÃ®tres Ã©taient en deuil lorsqu\'un Â« miw Â» mourait : les chats morts Ã©taient embaumÃ©s et placÃ©s dans des cercueils en bois. Les chattes et les lionnes Ã©taient associÃ©es Ã  Sekhmet, la trÃ¨s vÃ©nÃ©rÃ©e dÃ©esse Ã©gyptienne de la guerre, tandis que les chats mÃ¢les Ã©taient consacrÃ©s au dieu du soleil, Ra.\r\n\r\nLes chats Ã©taient si protÃ©gÃ©s, que si quelqu\'un passait prÃ¨s d\'un chat blessÃ© gravement, il quittait rapidement les lieux de crainte d\'Ãªtre incriminÃ©. AprÃ¨s sa mort, le chat Ã©tait alors momifiÃ© avant d\'Ãªtre inhumÃ© â€“ souvent dans des tombeaux Ã©normes, avec des dizaines de milliers d\'autres chats.', '2022-04-04 10:42:09'),
(52, 'Je fais du php', 'Tronquoy Damien', '2022-04-01 08:09:04', 'PHP a Ã©tÃ© inventÃ© Ã  l\'origine pour le dÃ©veloppement d\'applications web dynamiques qui constituent encore le cas d\'utilisation le plus courant et son point fort. Cependant, les Ã©volutions qui lui ont Ã©tÃ© apportÃ©es jusqu\'Ã  aujourd\'hui assurent Ã  PHP une polyvalence non nÃ©gligeagle. PHP est par exemple capable d\'interragir avec Java, de gÃ©nÃ©rer des fichiers PDF, d\'exÃ©cuter des commandes Shell, de gÃ©rer des objets (au sens programmation orientÃ©e objet), de crÃ©er des images ou bien de fournir des interfaces graphiques au moyen de PHP GTK.\r\n\r\nDans cette prÃ©sentation du langage, nous introduirons tout d\'abord les caractÃ©ristiques de PHP, puis nous verrons en quoi il est particuliÃ¨rement adaptÃ© aux dÃ©veloppements d\'applications web. Nous synthÃ©tiserons ensuite les autres types d\'applications possibles aec PHP avant de terminer sur les limites que l\'on peut lui reprocher.', '2022-04-04 10:41:03'),
(53, 'Je teste les  alertes', 'Jumeaucourt Flo', '2022-04-01 09:03:53', 'Essai 1', NULL);

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
-- Structure de la table `commentaries`
--

DROP TABLE IF EXISTS `commentaries`;
CREATE TABLE IF NOT EXISTS `commentaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentary` text NOT NULL,
  `blog_id` int(11) NOT NULL,
  `autor_id` int(11) NOT NULL,
  `datepubli` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `autor_id` (`autor_id`),
  KEY `blog_id` (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaries`
--

INSERT INTO `commentaries` (`id`, `commentary`, `blog_id`, `autor_id`, `datepubli`) VALUES
(1, ' Le php y a pas mieux !', 52, 4, '2022-04-03 11:55:43'),
(2, 'Je suis bien d\'accord avec toi !', 52, 8, '2022-04-03 12:33:43'),
(6, 'Haha yes !', 52, 4, '2022-04-03 01:05:56'),
(7, 'Miaou !', 51, 4, '2022-04-03 01:10:17'),
(8, 'alerte !', 53, 4, '2022-04-03 01:10:35');

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
(1, 'Maldives', 'MalÃ©', 'Les Maldives sont des pays tropicaux de l\'ocÃ©an Indien composÃ© de 26 atolls en forme d\'anneaux comprenant  plus de 1000 iles coralliennes. Le sable, si blanc et si fin, s\'avÃ¨re aussi incroyablement doux. rnLa mer, turquoise en bordure de plage et d\'un bleu profond au large, laisse apercevoir les poissons tant elle est cristalline. Les cocotiers ajoutent une nuance de vert Ã  cette palette de bleus et une lÃ©gÃ¨re brise marine rend supportable la tempÃ©rature de l\'air â€“ et de l\'eau ! â€“, de 30 Â°C environ.', 'Les Maldives sont des pays tropicaux de l\'ocÃ©an Indien composÃ© de 26 atolls en forme d\'anneaux comprenant  plus de 1000 iles coralliennes. Le sable, si blanc et si fin, s\'avÃ¨re aussi incroyablement doux. La mer, turquoise en bordure de plage et d\'un bleu profond au large, laisse apercevoir les poissons tant elle est cristalline. Les cocotiers ajoutent une nuance de vert Ã  cette palette de bleus et une lÃ©gÃ¨re brise marine rend supportable la tempÃ©rature de l\'air â€“ et de l\'eau ! â€“, de 30 Â°C environ.rnrnCes Ã®les paradisiaques de l\'ocÃ©an Indien, qui font rÃªver les amoureux du monde entier, tiennent largement leurs promesses. D\'ailleurs, en les dÃ©couvrant, l\'Italien George Corbin, un voyageur amateur de plongÃ©e, a racontÃ© avoir eu le souffle coupÃ©. C\'est lui qui, en 1972, s\'est associÃ© Ã  un Maldivien pour monter le premier hÃ´tel sur l\'un des 1190 Ã®lots formant une longue guirlande de 26 atolls de corail. Le concept Â« une Ã®le, un hÃ´tel Â» Ã©tait nÃ©.rnrnUne fois arrivÃ© sur votre Ã®le-hÃ´tel, abandonnez bagages, chaussures et portefeuille pour une semaine de voluptÃ© totale. La grande majoritÃ© d\'entre elles se parcourent facilement Ã  pied. Des voiturettes circulent aussi toute la journÃ©e. Les Ã©tablissements sont souvent grand luxe : vastes halls ouverts sur l\'extÃ©rieur, petites maisons habilement isolÃ©es ou, comble du confort, villas sur pilotis, sans autre vis-Ã -vis que le lagon, Ã  contempler depuis une piscine privÃ©e Ã  dÃ©bordement. Autant d\'ingrÃ©dients qui invitent Ã  dÃ©connecterâ€¦ MÃªme si le wi-fi et la tÃ©lÃ©vision sont proposÃ©s. Entre 17h30 et 18 heures, on s\'installe sur un banc de sable fin et on tourne son regard vers l\'ouest afin d\'admirer le coucher du soleil. C\'est le moment, pour les couples, de sacrifier avec tendresse au rituel du selfie.rnrnVous avez envie de plus d\'intimitÃ© ? Partez faire une virÃ©e en bateau juste avant que la nuit ne tombe. Enfin, pour couronner un sÃ©jour axÃ© sur le bien-Ãªtre, tous les hÃ´tels sont dotÃ©s d\'un spa oÃ¹ des masseuses balinaises et thaÃ¯landaises font des merveilles. Incontournable, mÃªme si les tarifs sont les mÃªmes qu\'Ã  Paris (comptez environ 90 â‚¬ le massage d\'une heure).', '3459.99', '2022-09-02', '2022-09-30', 'maldives', '2022-03-31 12:51:59', '2022-04-04 07:00:01'),
(2, 'France', 'Les Vosges', 'La Bresse est une ville du nord-est de la France, prÃ©s de la frontiÃ¨re allemande.', 'La Bresse est une ville du nord-est de la France, prÃ©s de la frontiÃ¨re allemande. SituÃ©e au coeur du parc naturel rÃ©gional des Ballons des Vosges, la station de ski de La Bresse-Hohneck propose des pistes de ski au milieu de lacs, crï¿½tes montagneuses et forï¿½ts.', '1459.95', '2022-07-04', '2022-07-24', 'wildcamping', '2022-03-31 12:53:21', '2022-04-02 08:05:24'),
(4, 'PolynÃ©sie', 'Bora-Bora', 'Ce territoire se compose de plages de sable blanc', 'Ce territoire se compose de plages de sable blanc et de sable noir, de montagnes, d\'un arriÃ¨re-pays sauvage et d\'immenses cascades', '4310.00', '2022-08-01', '2022-08-28', 'polynesia', '2022-03-31 12:55:30', '2022-04-04 06:33:11'),
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

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaries`
--
ALTER TABLE `commentaries`
  ADD CONSTRAINT `commentaries_ibfk_1` FOREIGN KEY (`autor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentaries_ibfk_2` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
