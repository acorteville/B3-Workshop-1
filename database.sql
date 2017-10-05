-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 05 oct. 2017 à 15:44
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
-- Déchargement des données de la table `clients`
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
-- Déchargement des données de la table `contacts`
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

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `name`, `id_requirement`) VALUES
(3, 'image.jpg', 1),
(4, 'calendrier.cls', 1);

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
-- Déchargement des données de la table `keys`
--

INSERT INTO `keys` (`id_requirement`, `id`, `successfactors`) VALUES
(1, 1, 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo.'),
(1, 2, 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'),
(6, 3, 'test 2'),
(4, 4, 'je test bananananana'),
(5, 5, 'je test poirreeeeee'),
(0, 6, 'Jdkdjdkkdkf'),
(0, 7, 'Jdkdjdkkdkf'),
(37, 8, 'Jskdj');

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
-- Déchargement des données de la table `requirements`
--

INSERT INTO `requirements` (`id`, `title`, `description`, `creationdate`, `startlastdate`, `duration`, `frequency`, `manualcoord`, `geocoord`, `rate`, `status`, `id_user`, `id_client`, `id_contact`) VALUES
(1, 'Création de Croque Express', 'AZERTY', '2017-10-03 00:00:00', '2017-10-27', 5, 3, '12 Rue du Pont, 59000 Lille, FRANCE', 'NULL', 965, 'Open', 1, 2, 0),
(4, 'Aménagement des trains', 'Description', '2017-10-05 09:00:00', '2017-10-12', 4, 2, '1234567', 'NULL', 754, 'Win', 4, 1, 0),
(5, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(6, 'Réparation A380', 'Nouvelle description', '2017-09-12 00:00:00', '2017-10-24', 6, 5, '6 Rue de la Gare, 59000 Lille, FRANCE', 'NULL', 3000, 'Open', 2, 4, 0),
(7, 'Révision du service métro', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 5, 5, 0),
(8, 'Création ERP / CRM', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 3, 3, 0),
(9, 'Création de Croque Express', 'AZERTY', '2017-10-03 00:00:00', '2017-10-27', 5, 3, '12 Rue du Pont, 59000 Lille, FRANCE', 'NULL', 965, 'Open', 1, 2, 0),
(10, 'Aménagement des trains', 'Description', '2017-10-05 09:00:00', '2017-10-12', 4, 2, '1234567', 'NULL', 754, 'Win', 4, 1, 0),
(11, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(12, 'Réparation A380', 'Nouvelle description', '2017-09-12 00:00:00', '2017-10-24', 6, 5, '6 Rue de la Gare, 59000 Lille, FRANCE', 'NULL', 3000, 'Open', 2, 4, 0),
(13, 'Révision du service métro', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 5, 5, 0),
(14, 'Création ERP / CRM', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 3, 3, 0),
(15, 'Création de Croque Express', 'AZERTY', '2017-10-03 00:00:00', '2017-10-27', 5, 3, '12 Rue du Pont, 59000 Lille, FRANCE', 'NULL', 965, 'Open', 1, 2, 0),
(16, 'Aménagement des trains', 'Description', '2017-10-05 09:00:00', '2017-10-12', 4, 2, '1234567', 'NULL', 754, 'Win', 4, 1, 0),
(17, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(18, 'Réparation A380', 'Nouvelle description', '2017-09-12 00:00:00', '2017-10-24', 6, 5, '6 Rue de la Gare, 59000 Lille, FRANCE', 'NULL', 3000, 'Open', 2, 4, 0),
(19, 'Révision du service métro', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 5, 5, 0),
(20, 'Création ERP / CRM', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 3, 3, 0),
(21, 'Création de Croque Express', 'AZERTY', '2017-10-03 00:00:00', '2017-10-27', 5, 3, '12 Rue du Pont, 59000 Lille, FRANCE', 'NULL', 965, 'Open', 1, 2, 0),
(22, 'Aménagement des trains', 'Description', '2017-10-05 09:00:00', '2017-10-12', 4, 2, '1234567', 'NULL', 754, 'Win', 4, 1, 0),
(23, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(24, 'Réparation A380', 'Nouvelle description', '2017-09-12 00:00:00', '2017-10-24', 6, 5, '6 Rue de la Gare, 59000 Lille, FRANCE', 'NULL', 3000, 'Open', 2, 4, 0),
(25, 'Révision du service métro', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 5, 5, 0),
(26, 'Création ERP / CRM', 'Description', '2017-10-03 13:58:28', '2017-10-31', 4, 2, '1234567', 'NULL', 1234.9, 'Win', 3, 3, 0),
(27, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(28, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(29, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(30, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(31, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(32, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(33, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0),
(34, 'Rénovation des trains', 'Description', '2017-10-02 00:00:00', '2017-10-18', 4, 2, '1234567', 'NULL', 234, 'Lost', 4, 1, 0);

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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`) VALUES
(1, 'BAUDUIN', 'Lucas', 'lucas.bauduin@gfi.com', ''),
(2, 'BARTHOLOME', 'Pierre-Henry', 'pierre-henry.bartholome@gfi.com', ''),
(3, 'RIVET', 'Arnaud', 'arnaud.rivet@gfi.com', ''),
(4, 'DUBUS', 'Alexis', 'alexis.dubus@gfi.com', ''),
(5, 'GHERISSI', 'Vianney', 'vianney.gherissi@gfi.com', '');

--
-- Index pour les tables déchargées
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
  ADD KEY `id_requirement` (`id_requirement`);

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
  ADD PRIMARY KEY (`id`) USING BTREE;

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
-- AUTO_INCREMENT pour les tables déchargées
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
-- Contraintes pour les tables déchargées
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
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`id_requirement`) REFERENCES `requirements` (`id`);

--
-- Contraintes pour la table `isconsulof`
--
ALTER TABLE `isconsulof`
  ADD CONSTRAINT `isconsulof_ibfk_1` FOREIGN KEY (`id_consultant`) REFERENCES `consultants` (`id`),
  ADD CONSTRAINT `isconsulof_ibfk_2` FOREIGN KEY (`id_requirement`) REFERENCES `requirements` (`id`);

--
-- Contraintes pour la table `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `requirements_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
