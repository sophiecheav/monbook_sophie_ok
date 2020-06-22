-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 22 juin 2020 à 13:37
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `monbook_sophie`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  `lien_image` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `lien` varchar(255) DEFAULT NULL,
  `en_ligne` tinyint(1) NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `titre`, `annee`, `lien_image`, `texte`, `client`, `lien`, `en_ligne`, `ordre`) VALUES
(1, 'ADA Hôtel', 2020, 'images/projets/adahotel.jpg', 'Site web statique réalisé en HTML / CSS', 'Descodeuses', 'Git sophiecheav', 1, 1),
(2, 'Syl\'s Cocktails Bar', 2020, 'images/projets/sylscocktail.jpg', 'Site de bar à cocktails', 'Descodeuses', 'https://github.com/sophiecheav', 1, 2),
(3, 'Medic Ada', 2020, 'images/projets/medicada.jpg', 'Site de services hospitaliers en ligne', 'Descodeuses', 'https://github.com/sophiecheav', 1, 3),
(4, 'Le Mini Musée', 2020, 'images/projets/minimusee.jpg', 'Site d\'un musée imaginaire réalisé en PHP', 'Descodeuses', 'https://github.com/sophiecheav', 1, 4),
(5, 'Codevores', 2020, 'images/projets/codevores.jpg', 'Site de mise en relation client - développeuse web', 'Descodeuses', 'https://github.com/sophiecheav', 1, 5),
(6, 'Resto\'ChezSoi', 2020, 'images/projets/restochezsoi.jpg', 'Site de restaurant administrable', 'Descodeuses', 'https://github.com/sophiecheav', 1, 6),
(8, 'youhou', 2020, 'images/projets/youhou.jpg', 'jklfjebkknjm', 'Descodeuses', NULL, 1, 9),
(9, 'Blabla', 2020, 'images/projets/blabla.jpg', 'belbfhilbfhl', 'Descodeuses', NULL, 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `projet_technologie`
--

CREATE TABLE `projet_technologie` (
  `projet_id` int(11) NOT NULL,
  `techno_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet_technologie`
--

INSERT INTO `projet_technologie` (`projet_id`, `techno_id`) VALUES
(0, 1),
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `simpledonnee`
--

CREATE TABLE `simpledonnee` (
  `id_simpledonnee` int(11) NOT NULL,
  `iduu` varchar(255) NOT NULL,
  `valeur` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `simpledonnee`
--

INSERT INTO `simpledonnee` (`id_simpledonnee`, `iduu`, `valeur`) VALUES
(1, 'TEXTE_ACCUEIL', 'Lorem Elsass ipsum libero, bredele pellentesque condimentum kuglopf schnaps purus Carola sit barapli ac bissame dignissim lacus eget ornare adipiscing rhoncus s\'guelt libero, knack dui hopla leo sed Richard Schirmeck placerat ac kougelhopf Mauris  aliquam Oberschaeffolsheim sagittis hopla Oberschaeffolsheim libero. Chulien Kabinetpapier sit Gal. geïz so Morbi eleifend gal amet, merci vielmols ante commodo kartoffelsalad vulputate mamsell consectetur flammekueche');

-- --------------------------------------------------------

--
-- Structure de la table `technologie`
--

CREATE TABLE `technologie` (
  `id_techno` int(11) NOT NULL,
  `nom_techno` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `technologie`
--

INSERT INTO `technologie` (`id_techno`, `nom_techno`) VALUES
(1, 'HTML - CSS'),
(2, 'JS'),
(3, 'PHP'),
(4, 'WordPress'),
(5, 'InDesign'),
(6, 'Photoshop'),
(7, 'Illustrator');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `identifiant`, `mot_de_passe`, `email`) VALUES
(1, 'admin', 'admin', 'sophie.cheavseang@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- Index pour la table `simpledonnee`
--
ALTER TABLE `simpledonnee`
  ADD PRIMARY KEY (`id_simpledonnee`),
  ADD UNIQUE KEY `iduu` (`iduu`);

--
-- Index pour la table `technologie`
--
ALTER TABLE `technologie`
  ADD PRIMARY KEY (`id_techno`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `simpledonnee`
--
ALTER TABLE `simpledonnee`
  MODIFY `id_simpledonnee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `technologie`
--
ALTER TABLE `technologie`
  MODIFY `id_techno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
