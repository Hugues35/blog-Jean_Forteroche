-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 30 mai 2019 à 18:53
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogwriter`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'forteroche', 'openclassrooms');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sentence` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Chapitre 1 – Grande terre'),
(2, 'Chapitre 2 – Kodiak la sauvage'),
(3, 'Chapitre 3 – Les filles de l’air'),
(4, 'Chapitre 4 – La dernière frontière');

-- --------------------------------------------------------

--
-- Structure de la table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(65) NOT NULL,
  `story` text NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapters`
--

INSERT INTO `chapters` (`id`, `date`, `author`, `story`, `category`) VALUES
(1, '2019-05-23 21:04:54', 'Cyril', 'Il était une fois', 'Chapitre 1 – Grande terre'),
(2, '2019-05-23 21:04:54', 'Cyril 2', 'Il était une fois 2', 'Chapitre 2 – Grande terre 2'),
(3, '2019-05-23 21:04:54', 'Cyril 3', 'Il était une fois 3', 'Chapitre 3 – Grande terre 3'),
(4, '2019-05-23 21:04:54', 'Cyril 4', 'Il était une fois 4', 'Chapitre 4 – Grande terre 4');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `pseudo` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `chapter_number` int(255) DEFAULT NULL,
  `signalements` int(255) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `date`, `pseudo`, `message`, `chapter_number`, `signalements`) VALUES
(11, '2019-05-30 20:27:58', 'BlackSador', 'Test', 1, 0),
(12, '2019-05-30 20:28:07', 'BlackSador', 'Test', 1, 0),
(13, '2019-05-30 20:28:38', 'Test', 'test', 1, 0),
(14, '2019-05-30 20:28:58', 'Test', 'test', 1, 0),
(15, '2019-05-30 20:30:55', 'Test', 'test', 1, 0),
(16, '2019-05-30 20:31:17', 'Test', 'test message chapitre 2', 2, 0),
(17, '2019-05-30 20:31:22', 'Test', 'test message chapitre 2', 2, 0),
(18, '2019-05-30 20:31:25', 'Test', 'test message chapitre 2', 2, 0),
(19, '2019-05-30 20:31:27', 'Test', 'test message chapitre 2', 2, 0),
(20, '2019-05-30 20:32:51', 'Test', 'test message chapitre 2', 2, 0),
(21, '2019-05-30 20:37:55', 'Cyril', 'Ce chapitre est énorme !', 3, 0),
(22, '2019-05-30 20:38:01', 'Cyril', 'Ce chapitre est énorme !', 3, 0),
(23, '2019-05-30 20:51:08', 'Cyril', 'test message chapitre 4', 4, 0),
(24, '2019-05-30 20:51:16', 'Cyril', 'test message chapitre 4', 4, 0),
(25, '2019-05-30 20:51:57', 'Cyril', 'Test', 4, 0),
(26, '2019-05-30 20:52:11', 'Cyril', 'Test', 4, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
