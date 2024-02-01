-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 jan. 2024 à 14:08
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `easyformers`
--

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_requests`
--

CREATE TABLE `reset_password_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expire_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `adresseMail` varchar(255) DEFAULT NULL,
  `motDePasse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `adresseMail`, `motDePasse`) VALUES
(1, 'Douzi', 'Abdel-karim', 'abdeldouzi95110@gmail.com', 'Ak47'),
(2, 'DOUZI', 'dfeuue', 'uegfege@gmail.com', '1df5b2eeb15e78c0ec8a17ded8db0717'),
(3, 'Sylla', 'Oumar', 'Oumar@gmail.com', '26bcdf7c3dc4a79d155a4aa9e043c45b'),
(4, 'douzi', 'vyyy', 'bududdu@gmail.com', '880c6cd235956be7d7118ec0be1a1c12'),
(5, 'Douzi', 'Nawel', 'hcezdfhefe@gmail.com', '98e5e20d1e992fede17bde4467b54f2b'),
(6, 'mohellebi', 'amine', 'Amine@gmail.com', 'e5b8010b8f89ca5992e8423d85face2e'),
(7, 'guuugui', 'Oumar', 'uggygy@gmail.com', '26bcdf7c3dc4a79d155a4aa9e043c45b'),
(8, 'izhfequie', 'BDESBSDSU<', 'Oumarr@gmail.com', '26bcdf7c3dc4a79d155a4aa9e043c45b');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reset_password_requests`
--
ALTER TABLE `reset_password_requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adresseMail` (`adresseMail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reset_password_requests`
--
ALTER TABLE `reset_password_requests`
  ADD CONSTRAINT `reset_password_requests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
