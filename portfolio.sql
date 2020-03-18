-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 mars 2020 à 13:06
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NumUser` int(4) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `img_or_video` tinyint(1) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `NumUser` (`NumUser`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `NumUser`, `name`, `description`, `type`, `year`, `img_or_video`, `link`) VALUES
(1, 0, 'Portfolio Valentin SLD', 'Ceci est une description', 'test', 2020, 0, 'https://i.imgur.com/4AiXzf8.jpg'),
(15, 0, 'testets', ' descrrr', 'grze', 1980, 0, 'dzaza'),
(12, 0, 'fezfezfez', ' gtregergre', 'tregreger', 2050, 0, 'yhtrgez'),
(13, 0, 'fezfezfez', ' gtregergre', 'tregreger', 2050, 0, 'yhtrgez'),
(14, 0, 'ex machina', ' kutjytr', 'rett', 2010, 1, 'URLLLLL'),
(11, 0, 'azaezae', ' ,uyntbgrvfed', ' efzfezfez', 2019, 0, 'btrbtrbtr');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`NumUser`, `NameUser`, `PasswordUser`, `DescUser`, `ImgUser`) VALUES
(0, 'Valentin Magry', '1234', 'Bonjour je suis Valentin Magry', 'https://jeu.video/wp-content/uploads/2018/11/battlefield-5-le-trailer-du-mode-solo-est-enfin-disponible_87a5230eaf3e6da9143c21cb4730d781b6883c7b.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
