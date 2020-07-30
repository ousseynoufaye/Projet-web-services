-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 31 juil. 2020 à 01:03
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phpcrud`
--

-- --------------------------------------------------------

--
-- Structure de la table `phpcrud`
--

CREATE TABLE `phpcrud` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `phpcrud`
--

INSERT INTO `phpcrud` (`id`, `nom`, `email`, `phone`, `photo`) VALUES
(6, 'Ronnie Ashley', 'Ashie@gmail.com', '1665181513', 'uploads/pic 3.webp'),
(7, 'Dustine', 'dustin@gmail.com', '83037694', 'uploads/pic 3.jpg'),
(8, 'Johny Deep', 'Carribean48@gmail.com', '333196060', 'uploads/pic5.jpg'),
(9, 'Trisha Mccallister', 'Trisht-T@hotmail.uk', '4715565841', 'uploads/pic 1.jpg'),
(10, 'Alexia Carmel', 'Alexia84@gmail.com', '1665181513', 'uploads/pic 2.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `phpcrud`
--
ALTER TABLE `phpcrud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `phpcrud`
--
ALTER TABLE `phpcrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
