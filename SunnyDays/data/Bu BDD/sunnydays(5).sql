-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 avr. 2022 à 14:10
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
  `date_publi` datetime NOT NULL,
  `article` text NOT NULL,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `title`, `autor`, `date_publi`, `article`, `date_update`) VALUES
(53, 'Je teste les  alertes', 'Jumeaucourt Flo', '2022-04-01 11:03:53', 'Essai 1', NULL),
(56, 'Mon voyage Ã  Bali', 'Howart Rachel', '2022-04-04 02:47:13', 'TANADEWA RESORT &amp; SPArnrnAprÃ¨s un long voyage de 18h d\'avion, nous n\'avions qu\'une hÃ¢te : arriver au Tanadewa HÃ´tel. L\'hÃ´tel est situÃ© Ã  environ une heure de route de l\'aÃ©roport de Bali.rnrnL\'hÃ´tel est trÃ¨s jolie et il est dÃ©corÃ© Ã  la Balinaise.rnrnNous avons eu une grande chambre, avec une terrasse qui donnait vue sur la forÃªt. Le cadre est paisible et reposant, c\'est vraiment apprÃ©ciable. Il y avait un distributeur d\'eau potable juste Ã  cÃ´tÃ© de notre chambre, ce qui est Ã©galement trÃ¨s pratique. Car un Conseil : Ã©viter de boire l\'eau du robinet...rnrnIl y a tout le confort nÃ©cessaire dans la chambre : coffre fort, wifi, serviette, chausson, peignoir, peigne, kit de couture, produit de douche.rnrnLa salle de restaurant dispose d\'une belle terrasse qui donne sur la forÃªt. L\'hÃ´tel dispose Ã©galement d\'une salle de sport et d\'une piscine. Petit bÃ©mol : le nombre de transats Ã  disposition, qui est bien infÃ©rieur au nombre de chambres. Donc si l\'hÃ´tel est plein, il y a de fortes probabilitÃ©s pour qu\'il n\'y ait plus de transats de disponibles. La piscine est Ã©galement une bonne partie de la journÃ©e Ã  l\'ombre.rnrnLâ€™hÃ´tel est un peu loin du centre ville d\'Ubud, mais il propose des navettes gratuite (aller/retour) pour se rendre au centre ville.rnrnDescription de la restaurationrnrn* Restaurant ATMANrnrnRestaurant situÃ© dans le centre d\'Ubud, avec ses tables en bois tropical et en Ã©poxy, et assis sur des coussins en tissus multicolores. Nous sommes dans un restaurant Ã  la dÃ©coration typique. Les plats sont variÃ©s et pour tous les gouts (avec ou sans viande, poissons...). Nous avons bien mangÃ© et câ€™Ã©tait copieux.rn* Boulangerie FranÃ§aisernrnSituÃ©e dans le centre-ville d\'Ubud, dans la mÃªme rue que le palais. Nous avons pris Ã  emporter pour manger dans notre chambre dâ€™hÃ´tel le soir. Ces petites fougasses nous ont rappelÃ© la France ?.rn* Restaurant AmorarnrnLa terrasse possÃ¨de une vue sublime sur le mont Batur. C\'est un restaurant avec un buffet.rn* Restaurant Pacung IndarnrnIl se trouve sur la route pour se rendre aux riziÃ¨res de Jatiluwih. Il propose un buffet typique. Nous avons mangÃ© sur leur terrasse face aux champs de lÃ©gumes des locaux.rnrnDescription des activitÃ©srnrnCentre-ville dâ€™Ubudrn* Palais dâ€™UbudrnrnConnu aussi sous le nom de Puri Saren Agung.rnrnCe palais est composÃ© de plusieurs bÃ¢timents historiques et royaux, respectant lâ€™architecture traditionnelle balinaise. Il est situÃ© au centre-ville dâ€™Ubud, et lâ€™entrÃ©e est gratuite.rnrnNous avons pris plaisir a le visiter et commencer nos dÃ©couvertes tant sur lâ€™architecture, que les statues et les couleurs.rn* ForÃªt des singes ou &quot; Sacred Monkey Forest &quot;rnrnElle se trouve juste avant le centre ville dâ€™Ubud.rnrnVous ne pouvez pas le louper car il y a des statues Ã  lâ€™entrÃ©e du site. Câ€™est un vÃ©ritable havre de paix pour les singes, et nâ€™oubliez pas que vous Ãªtes chez eux ðŸ˜‰ Câ€™est un lieu sacrÃ© oÃ¹ vous trouverez 3 temples.rnrnVous ne pouvez pas louper les singes, car ils sont un peu plus de 600 macaques. A peine assise, AlizÃ© câ€™Ã©tait fait un nouvel ami qui voulait ouvrir son sac a dosâ€¦ un &quot;tirage&quot; de cheveux plus tard, le macaque a abandonnÃ©â€¦ Nous avons quand mÃªme eu la chance dâ€™avoir notre selfie avec un singe (plus intÃ©ressÃ©e par un grain de maÃ¯s) grÃ¢ce Ã  un employÃ© du sanctuaire.rn* SupermarchÃ© pour quelques courses, et shopping dans les petites boutiques.rnAutour dâ€™UBUDrn* Tegenungan cascadesrnrnAllez-y tÃ´t le matin vers 9h/9h30 car il y a peu de touristes.rnrnNous nous sommes sentis privilÃ©giÃ©s de pouvoir profiter de lâ€™instant prÃ©sent avec les bruits environnants : la chute dâ€™eau, les oiseaux, les clapotisâ€¦ presque seul au monde.rnrnUne bouffÃ©e dâ€™oxygÃ¨ne, entourÃ© par la vÃ©gÃ©tation, nous a fait du bien ?rnrnLe site est bien amÃ©nagÃ©, mais si vous avez du mal Ã  marcher, je vous le dÃ©conseille (beaucoup beaucoup de marches). Avant les cascades, vous trouverez une source ou vous pouvez vous baigner. Les cascades sont dangereuses, elles sont dÃ©conseillÃ©es de sâ€™y baigner car trop profondes et un courant important.rn* Tirta Empul templernrnIl est situÃ© prÃ¨s de Tampaksiring.rnrnIl est composÃ© de sources sacrÃ©es aux propriÃ©tÃ©s curatives, crÃ©Ã©es par le dieu Indra. La tradition veut que lâ€™on vienne se baigner dans les eaux rafraichissantes et bÃ©nies Ã  cet endroit.rnrnNous avons admirÃ© la beautÃ© des lieux avec notre sarong (obligatoire, il est distribuÃ© Ã  lâ€™entrÃ©e) et Ã©coutÃ© lâ€™histoire racontÃ© par notre guide Â«Patni Â» . Vous trouverez aussi un bassin avec des carpes coÃ¯ avant de sortir.rn* DÃ©gustation de thÃ©s et cafÃ©s chez OKArnrnFace Ã  la jungle, sur une terrasse en bois, nous avons pu dÃ©guster 14 cafÃ©s et thÃ©s typiques de Bali.rnrnAlizÃ© a eu un rÃ©el coup de cÅ“ur pour le thÃ© au Mangoustan. Nous sommes reparti avec un sachet de ce fameux thÃ©, et quand on l\'a ouvert, c\'est de la poudre dÃ©jÃ  sucrÃ©e : pas besoin de filtre, et pas de rÃ©sidu ?.rn* RiziÃ¨res de TegallalangrnrnVous arrivez sur le parking, vous marchez un peuâ€¦ et la face a vous : surprise ! Un paysage que nous nâ€™avons pas lâ€™habitudeâ€¦.rnrnCes riziÃ¨res en terrasses forment des escaliers, ombragÃ©es par des cocotiers. Nous avons apprÃ©ciÃ©s nous balader au travers de celles-cies, le cadre est profond et composÃ© de nuances de verts sublimes. Ces riziÃ¨res existent depuis des lustres, et toujours composÃ©es de leur systÃ¨me dâ€™irrigation dâ€™origine, câ€™est impressionnant. Il y a vraiment un savoir faire qui se transmet de gÃ©nÃ©ration en gÃ©nÃ©ration.rn* Taman Ayun TemplernrnCe temple nous a impressionnÃ©. Lorsque nous sommes entrÃ©s dans la cour, nous nous sommes retrouvÃ©s face aux pagodes. La plus haute pagode ( 11 toits) est dÃ©diÃ©e Ã  Sanghyang Widi, soit bija le dieu suprÃªme balinais. Tandis que la plus petite, avec 3 toits, vÃ©nÃ¨re la montagne sacrÃ©e Gunung Agung.rnrnNous avons aimÃ© nous balader et flÃ¢ner dans les jardins du temple. Ce temple protÃ¨ge Bali des mauvais esprits, il est donc dâ€™une grande importance aux yeux des balinais. Il est classÃ© au patrimoine de l\'UNESCO, du fait de son importance et sa majestueuse architecture.rn* Ulun Danu Temple et le Lac BratanrnrnSur le lac a Ã©tÃ© bÃ¢ti le temple Ulun Danu Beratan. Le lac Bratan est le deuxiÃ¨me plus grand lac de Bali. Nous avions lâ€™impression que le temple flottait sur lâ€™eau. Le lac est pratiquement immobile, seules les pagaies des barques bougent lâ€™eau. Nous aurions cru que le temps sâ€™Ã©tait arrÃªtÃ©.rnrnSi vous visitez ce temple, vous verrez des locaux se prendre en photo Ã   cotÃ© du temple en brandissant fiÃ¨rement un billet de 50,000 rp. : le temple est dessinÃ© sur ce billet.rn* RiziÃ¨res de JatiluwithrnrnCes riziÃ¨res en terrasses sont Ã©poustouflantes. Une vÃ©ritable marque de fabrique du paysage balinais. Au cÅ“ur de Bali, Jatiluwih est le site qui est sur la liste du patrimoine mondial de lâ€™Unesco. Ces riziÃ¨res forment un amphithÃ©Ã¢tre naturel constituÃ© des subak balinais. Ce sont leurs systÃ¨mes dâ€™irrigation. Elles sont immenses, et lorsque vous marchez Ã  travers les riziÃ¨res, vous vous sentez minuscules.rn* Tanah lot TemplernrnPrÃ¨s de la ville de Tabanan, vous dÃ©couvrirez ce temple, un des plus connus de lâ€™Ã®le des Dieux. Ce temple dÃ©diÃ© aux dieux de la mer, est plutÃ´t atypique car il est Ã©parpillÃ©.rnrnQuand nous sommes arrivÃ©s, nous avons dÃ©jÃ  descendu les marches pour aller prÃ¨s de la mer et marcher sur le sable. Nous nous sommes fait purifier avec lâ€™eau bÃ©nite et le riz sacrÃ©, pour monter sur le rocher et avoir une vue dÃ©gagÃ©e. Le site est superbe, nous avons choisit de le visiter en fin de journÃ©e pour profiter du coucher du soleil.rn* Quad avec &quot;Bali Quad&quot;rnrnIls sont venus nous chercher Ã  l\'hÃ´tel le matin vers 8h, le temps de faire la route vers la jungle.rnrnNous Ã©tions dans les hauteurs d\'Ubud. Nous avons Ã©tÃ© bien accueilli en arrivant. Nous avons eu un rappel des rÃ¨gles de sÃ©curitÃ©, et un petit cours pour se faire au quad dans un terrain adaptÃ©.rnrnPuis nous sommes partis 2h dans la foret, les champs et quelques villages. Nous avons apprÃ©ciÃ© de dÃ©couvrir la nature autrement. Câ€™Ã©tait un bon moment ?.rnrnDescriptionrnrn* ForÃªt des singes ou &quot; Sacred Monkey Forest &quot;rn* Tegenungan cascadesrn* Quad avec &quot; Bali Quad &quot;', NULL),
(57, 'Voyage Ã  Bali, une pure merveille !', 'Sandoval Gilberto', '2022-04-04 02:56:44', 'Suite Ã  notre voyage Ã  Bali voici quelques infos :rnQue faire sur l\'Ã®le de Bali ?rnFlÃ¢ner dans les villagesrnS\'imprÃ©gner de la culture locale passe notamment par une immersion dans les campagnes balinaises. Dans la vallÃ©e de Sidemen, la spiritualitÃ© Ã©pouse la randonnÃ©e lors de l\'ascension du mont sacrÃ© Agung. En campagne, Ã  Undisan, les habitants partagent des instants de leur quotidien et de leur savoir-faire avec les voyageurs. La riziculture n\'aura plus de secret pour vous. Si vous prÃ©fÃ©rez les disciplines artistiques, vous pourrez vous initier Ã  la danse. Et pour un condensÃ© des plus beaux paysages de Bali, rendez vous Ã  Munduk. rnDes panoramas saisissants et de belles cascades n\'attendent que vous.rnAlors si Ã§a vous tente d\'en savoir davantage, n\'hÃ©sitez pas Ã  nous laisser des commentaires on vous aiguilleras avec joie !rnÃ€ BientÃ´t !', NULL),
(58, 'SÃ©jour en Irlande !', 'McReary Patrick', '2022-04-04 03:03:44', 'On la surnomme l\'Ile Verte, et elle ne laisse aucun touriste indiffÃ©rent. Des lacs du Connemara aux falaises de Moher, de la ChaussÃ©e des GÃ©ants au Ring of Kerry, l\'Irlande offre des paysages sauvages Ã  couper le souffle. rnrnLes pubs irlandais sont bien plus que des usines Ã  vendre des biÃ¨res. ConvivialitÃ©, relations transgÃ©nÃ©rationnelles, musique : ce sont des lieux oÃ¹ toute la gÃ©nÃ©rositÃ© de l\'Ã¢me irlandaise s\'exprime. rnrnIci on vous propose de vivre ces experiences, et de vous accompagner dans votre projet de voyage alors n\'hÃ©sitez pas Ã  nous contacter sur les coms on vous guidera abvec la team SUNNY DAYS.rnÃ€ bientÃ´t ;)', NULL),
(59, 'Voyage en Laponie !', 'Saindon France', '2022-04-04 03:21:19', 'La Laponie câ€™est un peu notre seconde maison. Depuis novembre 2016, nous passons tous nos hivers en Laponie finlandaise. Et en 2018, nous y sommes restÃ©s quasiment toute lâ€™annÃ©e afin de dÃ©couvrir leÂ printemps et lâ€™Ã©tÃ© dans le grand nord.\r\nJe vous propose de dÃ©couvrir tous nos conseils pour prÃ©parer votre voyage en Laponie : Quand partir ? OÃ¹ aller en Laponie ? Quelles activitÃ©s faire et Ã  quels prix, etc. Il est tout a fait possible dâ€™organiser soi mÃªme un sÃ©jour lâ€™hiver mÃªme si on peut vous dire le contraire. Il suffit dâ€™un peu dâ€™organisation !\r\nOn vous donnera aussi des idÃ©es dâ€™itinÃ©raires pour rÃ©aliser un roadtrip en Laponie. Câ€™est un mode de voyage que nous adorons qui nous a permit de sillonner cette rÃ©gion ces derniÃ¨res annÃ©es.\r\nEst ce que Ã§a vous tente ?\r\nSi oui n\'hÃ©sitez pas Ã  nous laisser des commentaires ;)', '2022-04-04 03:23:36');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaries`
--

INSERT INTO `commentaries` (`id`, `commentary`, `blog_id`, `autor_id`, `datepubli`) VALUES
(11, 'a supprimer', 53, 4, '2022-04-04 02:43:22'),
(12, 'Bonjour merci pour votre rÃ©cit Ã§a donne envie de voyager. avec mon mari Roger on regarde actuellement pour rÃ©server un sÃ©jour !!!', 56, 25, '2022-04-04 02:51:15'),
(14, 'J\'y ai Ã©tÃ© rÃ©cemment avec mon chien,  il a adorÃ© malgrÃ© l\'intoxication alimentaire qui nous a fait passer une nuit aux urgences Ã  l\'hÃ´pital DÃ©-Chiens . Je ne sais pas s\'il a plus compris la langue que moi, et en plus il avait peur des dragons !', 56, 30, '2022-04-04 02:59:24'),
(15, 'PS : Et la biÃ¨re coule par tonneaux !', 58, 31, '2022-04-04 03:04:50'),
(16, 'Cher monsieur McReary, il existe une fonction Ã©diter pour rajouter du contenu Ã  votre article, sans Ãªtre obligÃ© de passer par les  commentaires ;)', 58, 4, '2022-04-04 03:05:57'),
(17, 'Et pour  mon verre y a une fonction remplir ?', 58, 31, '2022-04-04 03:06:53'),
(19, 'Trop lon, g pas lu lol', 56, 31, '2022-04-04 03:09:07'),
(20, 'Pardon, c\'est mon petit frÃ¨re qui a Ã©crit avec mon compte !  Mais je peux pas supprimer le commentaire, faudrait peut-Ãªtre que les admin se bougent le  ...', 56, 31, '2022-04-04 03:09:56'),
(22, 'Be alors on t\'a oubliÃ© !!!', 57, 26, '2022-04-04 03:24:41');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date_inscription`) VALUES
(10, 'fjum@test.lol', '2022-04-01 08:54:46'),
(11, 'fjum@gmail.com', '2022-04-01 08:55:27'),
(12, 'macpatoche@irlandais.com', '2022-04-04 03:19:02');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sejours`
--

INSERT INTO `sejours` (`id`, `country`, `destination`, `chapo`, `description`, `price`, `checkin`, `checkout`, `picture`, `date_publi`, `date_update`) VALUES
(1, 'Maldives', 'MalÃ©', 'Les Maldives sont des pays tropicaux de l\'ocÃ©an Indien composÃ© de 26 atolls en forme d\'anneaux comprenant  plus de 1000 iles coralliennes. Le sable, si blanc et si fin, s\'avÃ¨re aussi incroyablement doux. rnLa mer, turquoise en bordure de plage et d\'un bleu profond au large, laisse apercevoir les poissons tant elle est cristalline. Les cocotiers ajoutent une nuance de vert Ã  cette palette de bleus et une lÃ©gÃ¨re brise marine rend supportable la tempÃ©rature de l\'air â€“ et de l\'eau ! â€“, de 30 Â°C environ.', 'Les Maldives sont des pays tropicaux de l\'ocÃ©an Indien composÃ© de 26 atolls en forme d\'anneaux comprenant  plus de 1000 iles coralliennes. Le sable, si blanc et si fin, s\'avÃ¨re aussi incroyablement doux. La mer, turquoise en bordure de plage et d\'un bleu profond au large, laisse apercevoir les poissons tant elle est cristalline. Les cocotiers ajoutent une nuance de vert Ã  cette palette de bleus et une lÃ©gÃ¨re brise marine rend supportable la tempÃ©rature de l\'air â€“ et de l\'eau ! â€“, de 30 Â°C environ.rnrnCes Ã®les paradisiaques de l\'ocÃ©an Indien, qui font rÃªver les amoureux du monde entier, tiennent largement leurs promesses. D\'ailleurs, en les dÃ©couvrant, l\'Italien George Corbin, un voyageur amateur de plongÃ©e, a racontÃ© avoir eu le souffle coupÃ©. C\'est lui qui, en 1972, s\'est associÃ© Ã  un Maldivien pour monter le premier hÃ´tel sur l\'un des 1190 Ã®lots formant une longue guirlande de 26 atolls de corail. Le concept Â« une Ã®le, un hÃ´tel Â» Ã©tait nÃ©.rnrnUne fois arrivÃ© sur votre Ã®le-hÃ´tel, abandonnez bagages, chaussures et portefeuille pour une semaine de voluptÃ© totale. La grande majoritÃ© d\'entre elles se parcourent facilement Ã  pied. Des voiturettes circulent aussi toute la journÃ©e. Les Ã©tablissements sont souvent grand luxe : vastes halls ouverts sur l\'extÃ©rieur, petites maisons habilement isolÃ©es ou, comble du confort, villas sur pilotis, sans autre vis-Ã -vis que le lagon, Ã  contempler depuis une piscine privÃ©e Ã  dÃ©bordement. Autant d\'ingrÃ©dients qui invitent Ã  dÃ©connecterâ€¦ MÃªme si le wi-fi et la tÃ©lÃ©vision sont proposÃ©s. Entre 17h30 et 18 heures, on s\'installe sur un banc de sable fin et on tourne son regard vers l\'ouest afin d\'admirer le coucher du soleil. C\'est le moment, pour les couples, de sacrifier avec tendresse au rituel du selfie.rnrnVous avez envie de plus d\'intimitÃ© ? Partez faire une virÃ©e en bateau juste avant que la nuit ne tombe. Enfin, pour couronner un sÃ©jour axÃ© sur le bien-Ãªtre, tous les hÃ´tels sont dotÃ©s d\'un spa oÃ¹ des masseuses balinaises et thaÃ¯landaises font des merveilles. Incontournable, mÃªme si les tarifs sont les mÃªmes qu\'Ã  Paris (comptez environ 90 â‚¬ le massage d\'une heure).', '3459.99', '2022-09-02', '2022-09-30', 'maldives', '2022-03-31 12:51:59', '2022-04-04 00:42:37'),
(2, 'France', 'Les Vosges', 'La Bresse est une ville du nord-est de la France, prÃ©s de la frontiÃ¨re allemande.', 'La Bresse est une ville du nord-est de la France, prÃ©s de la frontiÃ¨re allemande. SituÃ©e au coeur du parc naturel rÃ©gional des Ballons des Vosges, la station de ski de La Bresse-Hohneck propose des pistes de ski au milieu de lacs, crÃªtes montagneuses et forÃªts.', '1459.95', '2022-07-04', '2022-07-24', 'wildcamping', '2022-03-31 12:53:21', '2022-04-04 10:57:10'),
(4, 'PolynÃ©sie FranÃ§aise', 'Bora-Bora', 'Ce territoire se compose de plages de sable blanc', 'Ce territoire se compose de plages de sable blanc et de sable noir, de montagnes, d\'un arriÃ¨re-pays sauvage et d\'immenses cascades', '4310.00', '2022-08-01', '2022-08-28', 'polynesia', '2022-03-31 12:55:30', '2022-04-04 08:49:56'),
(8, 'France', 'Nice', 'La mer mÃ©diterranÃ©e s&quot;offre Ã  vous', 'La mer mÃ©diterranÃ©e pour vous baigner et vous relaxer', '359.00', '2022-04-15', '2022-04-30', 'campingvillageenfant', '2022-04-01 09:17:11', '2022-04-01 09:42:37'),
(9, 'PolynÃ©sie FranÃ§aise', 'Tahiti', '\'Ia Ora Na E ManavarnLe besoin dâ€™amour et de se connecter Ã  nos proches nâ€™a jamais Ã©tÃ© aussi fort. Alors quâ€™une pandÃ©mie mondiale nous a sÃ©parÃ©s, nous vous avons invitÃ© Ã  renouer avec lâ€™essentiel. Maintenant, il est temps de penser Ã  vous Ã  Tahiti Et Ses ÃŽles.rnVous vous sentirez choyÃ© par un accueil chaleureux et des traditions ancestrales. Des merveilles intactes et des rencontres Ã  couper le souffle. Le luxe exotique et des sanctuaires cachÃ©s. Bienvenue dans un lieu oÃ¹ vous nâ€™Ãªtes probablement jamais allÃ©, mais auquel vous avez toujours appartenu. Il est temps de penser Ã  vous Ã  Tahiti Et Ses ÃŽles.', 'Ã€ quand remonte la derniÃ¨re fois oÃ¹ vous avez pris le temps de penser Ã  vous ?rnSâ€™il est Ã©vident que nous voulons tous nous sentir choyÃ©s, le sentiment peut parfois sembler appartenir davantage Ã  un rÃªve quâ€™Ã  une rÃ©alitÃ©. Câ€™est dans ce sens que Tahiti Et Ses ÃŽles vous proposent une expÃ©rience unique. Que vous soyez Ã  la recherche dâ€™aventure, de romance ou de dÃ©tente, lâ€™esprit du Mana prÃ©sent Ã  travers notre terre, mer, culture et notre peuple vous accueillera comme nulle part ailleurs.rn Le sentiment que chaque jour est plus magique que le prÃ©cÃ©dent.rnrnIl y a tant de faÃ§ons de penser Ã  soi Ã  Tahiti Et Ses ÃŽles. Vous pouvez vous sentir seul au monde, Ãªtre accueilli et exaltÃ© partout, que ce soit lors dâ€™une promenade sur la plage, dâ€™une randonnÃ©e en montagne ou dâ€™une plongÃ©e envoutante dans les rÃ©cifs. Quelle que soit la raison de votre venue, vous vous sentirez comme vous avez toujours rÃªvÃ© de vous sentir.rn Il est temps de penser Ã  vous et de ressentir le ManarnrnLe Mana est le cÅ“ur de lâ€™univers polynÃ©sien. Câ€™est lâ€™Ã©nergie vitale et la force spirituelle qui circule Ã  travers tout, il dÃ©coule de la vie, de lâ€™amour, du partage, de la beautÃ©, de la bontÃ© et des choses qui se fondent harmonieusement dans notre univers. Câ€™est la raison pour laquelle vous vous sentirez choyÃ© Ã  Tahiti Et Ses ÃŽles.', '1579.00', '2022-06-04', '2022-06-19', 'tahiti', '2022-04-04 08:48:36', '2022-04-04 08:52:12'),
(10, 'Mexique', 'CancÃ¹n', 'La mer, le soleil et les shots de tequila sont typiques de CancÃºn, mais vous y trouverez aussi un cÃ´tÃ© plus doux.', 'Â« Vacances de printemps infinies Â» Ã©tait la devise non officielle de CancÃºn Ã  une Ã©poque, mais la ville festive la plus connue du Mexique ne se rÃ©sume pas Ã  ses magnifiques plages et Ã  ses discothÃ¨ques branchÃ©es. Les stations balnÃ©aires Ã©lÃ©gantes comme Nizuc et Atelier Playa Mujeres rÃ©pondent aux besoins des visiteurs en quÃªte de luxe, tandis que les familles trouveront leur bonheur au parc Xoximilco conÃ§u par Xcaret et aux pyramides de Chichen Itza. Mais pas d\'inquiÃ©tude. Si vous Ãªtes ici pour faire la fÃªte, CancÃºn ne vous dÃ©cevra pas. Les clubs comme Coco Bongo, The City et Hard Rock Cafe restent ouverts trÃ¨s tard. Et si vous avez besoin de vous reposer, le sable blanc et les eaux Ã©tincelantes de la mer des CaraÃ¯bes ne sont jamais trÃ¨s loin.', '1499.95', '2022-04-07', '2022-04-21', 'cancunfamily', '2022-04-04 09:06:03', '2022-04-04 09:08:27'),
(11, 'IndonÃ©sie', 'Bali', 'Ã‰den posÃ© au milieu de lâ€™archipel indonÃ©sien, Bali, lâ€™Ã®le des Dieux, nâ€™en a pas fini avec le rÃªve. Son seul nom Ã©voque libertÃ©, spiritualitÃ© et art de vivre. Hier destination secrÃ¨te des globe-trotters et beatniks en quÃªte dâ€™inspiration, aujourdâ€™hui Mecque des happy few du village global, Bali incarne toujours une idÃ©e dâ€™absolu. GrÃ¢ce Ã  nos circuits et sÃ©jours Ã©tudiÃ©s, laissez-vous porter par le magnÃ©tisme de cette terre dâ€™hindouisme qui continue dâ€™exercer son mystÃ¨re, et savourez-en la dÃ©licieuse quiÃ©tude.', 'Ã‰den posÃ© au milieu de lâ€™archipel indonÃ©sien, Bali, lâ€™Ã®le des Dieux, nâ€™en a pas fini avec le rÃªve. Son seul nom Ã©voque libertÃ©, spiritualitÃ© et art de vivre. Hier destination secrÃ¨te des globe-trotters et beatniks en quÃªte dâ€™inspiration, aujourdâ€™hui Mecque des happy few du village global, Bali incarne toujours une idÃ©e dâ€™absolu. GrÃ¢ce Ã  nos circuits et sÃ©jours Ã©tudiÃ©s, laissez-vous porter par le magnÃ©tisme de cette terre dâ€™hindouisme qui continue dâ€™exercer son mystÃ¨re, et savourez-en la dÃ©licieuse quiÃ©tude. Des plages de l\'ocÃ©an Indien aux damiers miroitants de riziÃ¨res en terrasses, des plantations de girofliers, cacaoyers et cafÃ©iers aux temples empreints de poÃ©sie, de rituels sÃ©culaires en treks sur la crÃªte des volcans, un voyage Ã  Bali, perle de lâ€™IndonÃ©sie, est le meilleur moyen pour retrouver paix et sÃ©rÃ©nitÃ© intÃ©rieures, Ã  la rencontre d\'une spiritualitÃ© prÃ©sente en toute chose et d\'un peuple d\'une gentillesse rare.rnrnLâ€™arriÃ¨re-pays est idÃ©al pour vous balader dans les riziÃ¨res magnÃ©tiques, tester les meilleures tables, savourer la dÃ©tente parfaite d\'un sÃ©jour ayurvÃ©dique, complÃ©tÃ©e dâ€™excursions Ã  Tanah Lot, au mont Batur, Ã  Jimbaran ou Kuta... Des moments idylliques, un tour complet des hauts lieux de lâ€™Ã®le, des extensions Ã  Java, aux CÃ©lÃ¨bes, Ã  Lombokâ€¦ goÃ»tez avec nos voyages Ã  la plus parfaite expression du paradis balinais. Et laissez-vous tenter par nos balades en terres australes : 2h30 de vol et vous voilÃ  en Australie, dans le Top End, fief aborigÃ¨ne. Enfin, nâ€™hÃ©sitez pas Ã  nous communiquer vos envies, si vous souhaitez faÃ§onner votre voyage Ã  Bali sur mesure et Ã©crire vos propres chroniques indonÃ©siennes, ou vivre un voyage de noces au paradisâ€¦', '8679.00', '2022-06-15', '2022-06-30', 'surfbali', '2022-04-04 09:51:56', '2022-04-04 09:57:48'),
(12, 'Etats Unis', 'Grand Canyon', 'Le Parc National du Grand Canyon est lâ€™un des plus anciens des Etats-Unis, il a Ã©tÃ© crÃ©Ã© en 1908 et est inscrit au Patrimoine Mondial de lâ€™HumanitÃ© depuis 1979.', 'Le Parc National du Grand Canyon est lâ€™un des plus anciens des Etats-Unis, il a Ã©tÃ© crÃ©Ã© en 1908 et est inscrit au Patrimoine Mondial de lâ€™HumanitÃ© depuis 1979.rnrnCe parc se situe au nord de lâ€™Arizona et fait partie des incontournables dâ€™un circuit dans lâ€™Ouest amÃ©ricain. Ses roches creusÃ©es par le fleuve Colorado, dont les plus anciennes datent dâ€™il y a 1,7 milliard dâ€™annÃ©es, se sont faÃ§onnÃ©es au fil du temps, pour aboutir Ã  cette configuration du site et Ã  ces paysages vertigineux absolument uniques.rnrnVoilÃ  un gigantesque musÃ©e gÃ©ologique Ã  ciel ouvert qui raconte presque la moitiÃ© de lâ€™histoire de la terre. Lâ€™arrivÃ©e se fait traditionnellement par le chemin qui borde le canyon, puis le spectacle commence lorsquâ€™apparaissent les falaises et les gorges profondes et que se rÃ©vÃ¨le toute lâ€™immensitÃ© du lieu : des falaises de 1,6 km de profondeur et un canyon qui sâ€™Ã©tend sur 446 km de long et 29 km de large. Le lieu surprend par son gigantisme, mais aussi par le calme qui y rÃ¨gne.rnrnUn phÃ©nomÃ¨ne gÃ©ologiquernrnVÃ©ritable phÃ©nomÃ¨ne gÃ©ologique, le Grand Canyon est composÃ© dâ€™une multitude de strates, de roches sÃ©dimentaires et de roches volcaniques de couleurs chatoyantes dont la palette Ã©volue selon la position du soleil. Câ€™est dâ€™ailleurs au lever et au coucher de lâ€™astre quâ€™il faut Ãªtre Ã  pied dâ€™Å“uvre pour admirer des nuances sensationnelles et des contrastes saisissants, dâ€™une beautÃ© Ã  couper le souffle. Mais il nâ€™est pas rare que les visiteurs reviennent Ã  plusieurs moments de la journÃ©e pour se repaÃ®tre encore du spectacle.rnrnLa rive Sud (South Rim) est Ã  privilÃ©gier car elle offre de splendides vues sur la rive Nord, plus dÃ©coupÃ©e. Mather Point est le point dâ€™observation le plus frÃ©quentÃ© du site. Au Sud, voir les nombreux points de vue sur la Highway 64, au Nord, ne pas manquer le Bright Angel Point et le Point Imperial. Quand on est en bonne forme, emprunter le chemin qui descend jusquâ€™au fond canyon est le meilleur moyen dâ€™apprÃ©cier sa taille. Il est Ã©galement possible de faire des petites marches sur les sentiers sur de courtes distances. Des randonnÃ©es accompagnÃ©es dâ€™un ranger et des survols du site en hÃ©licoptÃ¨re sont notamment organisÃ©s pour ceux qui veulent un point de vue diffÃ©rent sur le site. Le Grand Canyon Railway est un train historique qui relie la ville de Williams (100km au Sud) au Grand Canyon Village. Enfin, il est possible dâ€™organiser une sortie en rafting sur le Colorado.', '1.00', '2022-12-25', '2022-12-26', 'grandcanyon', '2022-04-04 01:50:40', '2022-04-04 01:51:16');

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `forename`, `email`, `password`, `user_type`) VALUES
(4, 'Jumeaucourt', 'Flo', 'fjum@test.lol', '$2y$10$5Utm0M/QfEHmIXNMXU2xkez5zHP26A3Q5tXkmSLjdZtahox32DZ7u', '[\"admin\"]'),
(24, 'Tronquoy', 'Damien', 'd.tronquoy@gmail.com', '$2y$10$Ktvl10iFBJpx2GbixYnWLejz8i5yd1U.O.oM1YpxVyzjKEaxHLZVO', '[\"admin\"]'),
(25, 'BossÃ©', 'Monique', 'MoniqueBosse@jourrapide.com', '$2y$10$qaj3.VF5qksoLlycT2xU8usd4lRNEm5zQ2Ra5M7B5WKZicVnaa2n2', '[\"membre\"]'),
(26, 'Saindon', 'France', 'FranceSaindon@armyspy.com', '$2y$10$c4PBz8tVW5wmsR1W0/V8.eN.Y2GIp5yON47WdOg2h8yqTk13u9Sly', '[\"membre\"]'),
(27, 'Blondlot', 'AndrÃ©', 'AndreBlondlot@jourrapide.com', '$2y$10$q.g0tWTk5JYB8.2..au8vu6ogRTODgOdMNXP4YZwHsGDdDdeAm3se', '[\"membre\"]'),
(28, 'Howart', 'Rachel', 'RachelHowarth@armyspy.com', '$2y$10$EfPtRfAqeXpaISSQwIH/uuoBn2cPEoOd/ym4kx8zCiow.WX7dzaIq', '[\"admin\"]'),
(29, 'Bitar', 'Nada', 'NidaZahraBitar@teleworm.us', '$2y$10$9Br9PQx/8qC.LXWIBRi0aea8W4ev5iLoYNpDsp4Sj11wUq82RBche', '[\"membre\"]'),
(30, 'Sandoval', 'Gilberto', 'GisbertoEspinozaSandoval@dayrep.com', '$2y$10$B0t.NXhVulVH9MdZIN/euu1TZO.s3rqki32dczi/hYKNEdcs4.zXm', '[\"membre\"]'),
(31, 'McReary', 'Patrick', 'macpatoche@irlandais.com', '$2y$10$vSAFoScktSxP700go2LgLODmSCzE75qn30msPe79kVD7gDQr/2H1.', '[\"membre\"]'),
(32, 'laguitooo', 'hello', 'laguitooo@afci.com', '$2y$10$jOv03Flv9BAoRiPifaaAfeouXcJvfJtBWQYVvCwIWFncFMbLgCxJW', '[\"admin\"]');

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
