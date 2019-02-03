-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 fév. 2019 à 20:39
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_jason`
--

-- --------------------------------------------------------

--
-- Structure de la table `monster_bdd`
--

DROP TABLE IF EXISTS `monster_bdd`;
CREATE TABLE IF NOT EXISTS `monster_bdd` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `age` varchar(3) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `bio` varchar(10) NOT NULL,
  `filename` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `monster_bdd`
--

INSERT INTO `monster_bdd` (`id`, `name`, `age`, `weight`, `bio`, `filename`) VALUES
(NULL, 'Infernaltree', '10', '53', 'Toxinscre', ''),
(NULL, 'Infernaltree', '19', '39', 'Hi! c', 'zouzou'),
(NULL, 'Acidpaw', '30', '24', 'Acidpaw', 'barblg.png'),
(NULL, 'Barbling', '80', '66', 'babing', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
