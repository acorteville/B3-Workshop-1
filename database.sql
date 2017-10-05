-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Octobre 2017 à 14:42
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet-gfi`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `corporatename` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `corporatename`) VALUES
(1, 'SNCF'),
(2, 'CROQUE GEL'),
(3, 'ATOS'),
(4, 'AIRBUS'),
(5, 'TRANSPOLE');

-- --------------------------------------------------------

--
-- Structure de la table `consultants`
--

CREATE TABLE `consultants` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `lastname`, `email`, `id_client`) VALUES
(1, 'BANANA', 'Sonya', 'banana.sonya@sncf.com', 1),
(2, 'Michael', 'Delvoye', 'michael.delvoye@croquegel.com', 2),
(3, 'TELLIER', 'Emmaanuel', 'tellier.emmanuel@atos.com', 3),
(4, 'POIRE', 'Chocola', 'poire.chocola@airbus.com', 4),
(5, 'TEST', 'Landers', 'test.landers@transpole.com', 5);

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `id_requirement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `isconsulof`
--

CREATE TABLE `isconsulof` (
  `id_consultant` int(11) NOT NULL,
  `id_requirement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `keys`
--

CREATE TABLE `keys` (
  `id_requirement` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `successfactors` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `keys`
--

INSERT INTO `keys` (`id_requirement`, `id`, `successfactors`) VALUES
(1, 9, 'azertyu'),
(7, 10, 'efficacité'),
(8, 11, 'efficacité'),
(9, 12, 'efficacité'),
(10, 13, 'Bon prix'),
(13, 14, 'efficacité');

-- --------------------------------------------------------

--
-- Structure de la table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `creationdate` datetime NOT NULL,
  `startlastdate` date NOT NULL,
  `duration` int(11) NOT NULL,
  `frequency` int(11) NOT NULL,
  `manualcoord` varchar(512) NOT NULL,
  `geocoord` varchar(128) NOT NULL,
  `rate` float NOT NULL,
  `status` set('Open','Win','Lost') NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `requirements`
--

INSERT INTO `requirements` (`id`, `title`, `description`, `creationdate`, `startlastdate`, `duration`, `frequency`, `manualcoord`, `geocoord`, `rate`, `status`, `id_user`, `id_client`, `id_contact`) VALUES
(1, 'Création de Croque Express', 'AZERTY', '2017-10-03 00:00:00', '2017-10-27', 5, 3, '12 Rue du Pont, 59000 Lille, FRANCE', 'NULL', 965, 'Open', 1, 2, 2),
(7, 'Révision du service métro', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 5, 5, 5),
(8, 'Création ERP / CRM', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 3, 3, 3),
(9, 'Création de Croque Express', 'AZERTY', '2017-10-03 00:00:00', '2017-10-27', 5, 3, '12 Rue du Pont, 59000 Lille, FRANCE', 'NULL', 965, 'Open', 1, 2, 2),
(10, 'Aménagement des trains', 'Description', '2017-10-05 09:00:00', '2017-10-12', 4, 2, '1234567', 'NULL', 754, 'Win', 4, 1, 4),
(13, 'Révision du service métro', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 5, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`) VALUES
(1, 'BAUDUIN', 'Lucas', 'lucas.bauduin@gfi.com', ''),
(2, 'BARTHOLOME', 'Pierre-Henry', 'pierre-henry.bartholome@gfi.com', ''),
(3, 'RIVET', 'Arnaud', 'arnaud.rivet@gfi.com', ''),
(4, 'DUBUS', 'Alexis', 'alexis.dubus@gfi.com', ''),
(5, 'GHERISSI', 'Vianney', 'vianney.gherissi@gfi.com', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consultants`
--
ALTER TABLE `consultants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_requirement` (`id_requirement`),
  ADD KEY `id_requirement_2` (`id_requirement`);

--
-- Index pour la table `isconsulof`
--
ALTER TABLE `isconsulof`
  ADD PRIMARY KEY (`id_consultant`,`id_requirement`),
  ADD KEY `id_requirement` (`id_requirement`);

--
-- Index pour la table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_requirement` (`id_requirement`);

--
-- Index pour la table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `consultants`
--
ALTER TABLE `consultants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`);

--
-- Contraintes pour la table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`id_requirement`) REFERENCES `requirements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `isconsulof`
--
ALTER TABLE `isconsulof`
  ADD CONSTRAINT `isconsulof_ibfk_1` FOREIGN KEY (`id_consultant`) REFERENCES `consultants` (`id`),
  ADD CONSTRAINT `isconsulof_ibfk_2` FOREIGN KEY (`id_requirement`) REFERENCES `requirements` (`id`);

--
-- Contraintes pour la table `keys`
--
ALTER TABLE `keys`
  ADD CONSTRAINT `fk_req` FOREIGN KEY (`id_requirement`) REFERENCES `requirements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `requirements_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
