-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 fév. 2023 à 16:37
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boite_a_juron`
--

-- --------------------------------------------------------

--
-- Structure de la table `balance`
--

CREATE TABLE `balance` (
  `id_balance` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `decla`
--

CREATE TABLE `decla` (
  `id_decla` int(11) NOT NULL,
  `id_Infraction` int(11) NOT NULL,
  `id_balance` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `dated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `detenir`
--

CREATE TABLE `detenir` (
  `id_user` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `id_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fait`
--

CREATE TABLE `fait` (
  `id_Infraction` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `privilege` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `type_infractions`
--

CREATE TABLE `type_infractions` (
  `id_Infraction` int(11) NOT NULL,
  `libelee` varchar(50) NOT NULL,
  `montant` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `solde` float DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `dateNaissance`, `solde`, `login`, `mdp`) VALUES
(4, 'lulu', 'lala', '2000-10-20', 0, 'LUCA59', '123456');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id_balance`);

--
-- Index pour la table `decla`
--
ALTER TABLE `decla`
  ADD PRIMARY KEY (`id_decla`),
  ADD KEY `declare_type_Infractions_FK` (`id_Infraction`),
  ADD KEY `declare_balance0_FK` (`id_balance`),
  ADD KEY `declare_users1_FK` (`id_user`);

--
-- Index pour la table `detenir`
--
ALTER TABLE `detenir`
  ADD PRIMARY KEY (`id_user`,`id_profile`,`id_balance`),
  ADD KEY `detenir_profile0_FK` (`id_profile`),
  ADD KEY `detenir_balance1_FK` (`id_balance`);

--
-- Index pour la table `fait`
--
ALTER TABLE `fait`
  ADD PRIMARY KEY (`id_Infraction`,`id_user`),
  ADD KEY `fait_users0_FK` (`id_user`);

--
-- Index pour la table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Index pour la table `type_infractions`
--
ALTER TABLE `type_infractions`
  ADD PRIMARY KEY (`id_Infraction`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `balance`
--
ALTER TABLE `balance`
  MODIFY `id_balance` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `decla`
--
ALTER TABLE `decla`
  MODIFY `id_decla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_infractions`
--
ALTER TABLE `type_infractions`
  MODIFY `id_Infraction` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `decla`
--
ALTER TABLE `decla`
  ADD CONSTRAINT `declare_balance0_FK` FOREIGN KEY (`id_balance`) REFERENCES `balance` (`id_balance`),
  ADD CONSTRAINT `declare_type_Infractions_FK` FOREIGN KEY (`id_Infraction`) REFERENCES `type_infractions` (`id_Infraction`),
  ADD CONSTRAINT `declare_users1_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `detenir`
--
ALTER TABLE `detenir`
  ADD CONSTRAINT `detenir_balance1_FK` FOREIGN KEY (`id_balance`) REFERENCES `balance` (`id_balance`),
  ADD CONSTRAINT `detenir_profile0_FK` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`),
  ADD CONSTRAINT `detenir_users_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `fait`
--
ALTER TABLE `fait`
  ADD CONSTRAINT `fait_type_Infractions_FK` FOREIGN KEY (`id_Infraction`) REFERENCES `type_infractions` (`id_Infraction`),
  ADD CONSTRAINT `fait_users0_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
