-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 mars 2020 à 20:34
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `NumUser` int(4) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `img_or_video` tinyint(1) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `NumUser` (`NumUser`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `NumUser`, `name`, `description`, `type`, `year`, `img_or_video`, `link`) VALUES
(1, 0, 'Portfolio Valentin²', 'Ceci est une description', 'test', 2020, 0, 'https://i.imgur.com/4AiXzf8.jpg'),
(17, 0, 'Projet', 'Desc', 'video', 2020, 1, '395755581'),
(19, 0, 'Projet de la mort', 'Arghhhh - Doom le retour', 'Létal', 2020, 0, 'https://store-images.s-microsoft.com/image/apps.16534.14361385044335696.d9d52dee-3885-40bf-b48d-1934a8ba4324.1b0be969-789b-4981-89bc-5831383d7286?w=672&h=378&q=80&mode=letterbox&background=%23FFE4E4E4&format=jpg'),
(20, 1, 'L\'awwwards de Valentin Sld', 'Tesla, rolex, 56 awwwards, si si', 'Site web', 2045, 0, 'https://static.actu.fr/uploads/2018/12/argent-hausse-du-smic-854x567.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `NumUser` int(4) NOT NULL AUTO_INCREMENT,
  `NameUser` varchar(32) NOT NULL,
  `PasswordUser` varchar(32) NOT NULL,
  `DescUser` text NOT NULL,
  `ImgUser` varchar(256) NOT NULL,
  PRIMARY KEY (`NumUser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`NumUser`, `NameUser`, `PasswordUser`, `DescUser`, `ImgUser`) VALUES
(0, 'Valentin Magry', '1234', 'Bonjour je suis Valentin Magry', 'https://jeu.video/wp-content/uploads/2018/11/battlefield-5-le-trailer-du-mode-solo-est-enfin-disponible_87a5230eaf3e6da9143c21cb4730d781b6883c7b.jpg'),
(1, 'Valentin Salaud', 'azerty', 'Bonjour je suis Valentin Salaud', 'https://img.youtube.com/vi/24pUKRQt7fk/maxresdefault.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
