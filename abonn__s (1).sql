-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 23 avr. 2022 à 17:17
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `auf_data`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnés`
--

CREATE TABLE `abonnés` (
  `id` int(11) NOT NULL,
  `nom` varchar(56) NOT NULL,
  `prenom` varchar(56) NOT NULL,
  `age` date NOT NULL,
  `numero` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `debut` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonnés`
--

INSERT INTO `abonnés` (`id`, `nom`, `prenom`, `age`, `numero`, `email`, `debut`) VALUES
(19, 'SAWADOGO', 'Wendbe Norbert', '1998-06-06', '70806091', 'wendbenorbertsawadogo@gmail.co', '2022-04-01'),
(22, 'FOFANA', 'Neimata', '2000-04-23', '51887245', 'fofananeimata@gmail.com', '2022-04-23');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnés`
--
ALTER TABLE `abonnés`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnés`
--
ALTER TABLE `abonnés`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
