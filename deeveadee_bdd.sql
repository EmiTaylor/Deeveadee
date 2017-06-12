-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 12 Juin 2017 à 10:39
-- Version du serveur :  5.7.18-0ubuntu0.17.04.1
-- Version de PHP :  7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `deeveadee_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `Acteur`
--

CREATE TABLE `Acteur` (
  `id` int(10) UNSIGNED NOT NULL,
  `numA` int(10) UNSIGNED NOT NULL,
  `nomA` varchar(255) NOT NULL,
  `prenomA` varchar(255) NOT NULL,
  `ageA` smallint(5) UNSIGNED NOT NULL,
  `sexeA` tinyint(1) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Acteur`
--

INSERT INTO `Acteur` (`id`, `numA`, `nomA`, `prenomA`, `ageA`, `sexeA`, `photo`) VALUES
(22, 1, 'Bae', 'Doona', 27, 2, NULL),
(23, 2, 'Shahi', 'Sarah', 28, 2, NULL),
(24, 24, 'Tutu', 'Xavier', 30, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Casting`
--

CREATE TABLE `Casting` (
  `id` int(10) UNSIGNED NOT NULL,
  `dvdC` int(10) UNSIGNED NOT NULL,
  `acteurC` int(10) UNSIGNED NOT NULL,
  `roleC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Casting`
--

INSERT INTO `Casting` (`id`, `dvdC`, `acteurC`, `roleC`) VALUES
(1, 10, 22, 'Acteur principal'),
(2, 11, 23, 'Acteur principal');

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `id` int(10) UNSIGNED NOT NULL,
  `NomC` varchar(255) NOT NULL,
  `PrenomC` varchar(255) NOT NULL,
  `Abonnement` tinyint(1) NOT NULL,
  `dateAbo` datetime NOT NULL,
  `mail` varchar(255) NOT NULL,
  `CB` int(11) NOT NULL,
  `AboSoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Client`
--

INSERT INTO `Client` (`id`, `NomC`, `PrenomC`, `Abonnement`, `dateAbo`, `mail`, `CB`, `AboSoc`) VALUES
(1, 'C', 'Cédric', 1, '2017-06-06 00:00:00', 'c@c', 123456789, 'Deeveadee');

-- --------------------------------------------------------

--
-- Structure de la table `Dvd`
--

CREATE TABLE `Dvd` (
  `id` int(10) UNSIGNED NOT NULL,
  `numD` int(10) UNSIGNED NOT NULL,
  `titreD` varchar(255) NOT NULL,
  `auteurD` varchar(255) NOT NULL,
  `anneeD` year(4) NOT NULL,
  `categorieD` varchar(255) NOT NULL,
  `dateAchatD` int(10) UNSIGNED NOT NULL,
  `nombreD` int(10) UNSIGNED NOT NULL,
  `societeD` int(10) UNSIGNED NOT NULL,
  `resume` text,
  `cover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Dvd`
--

INSERT INTO `Dvd` (`id`, `numD`, `titreD`, `auteurD`, `anneeD`, `categorieD`, `dateAchatD`, `nombreD`, `societeD`, `resume`, `cover`) VALUES
(10, 1, 'Sense8', 'Lana et Lilly Wachowski', 2015, 'Fantastique', 2015, 200, 2, NULL, ''),
(11, 2, 'The L word', 'Ilene Chaiken', 2004, 'Dramatique', 2004, 1000, 2, NULL, ''),
(12, 3, '#OITNB', 'Jenji Kohan', 2013, 'Comédie dramatique', 2013, 200, 2, NULL, ''),
(13, 4, '#AHS', 'Ryan Murphy et Brad Falchuk', 2011, 'Fantastique', 2011, 500, 2, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `Employe`
--

CREATE TABLE `Employe` (
  `id` int(10) UNSIGNED NOT NULL,
  `numSecuE` int(13) UNSIGNED NOT NULL,
  `nomE` varchar(255) NOT NULL,
  `prenomE` varchar(255) NOT NULL,
  `adresseE` varchar(255) NOT NULL,
  `numS` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Employe`
--

INSERT INTO `Employe` (`id`, `numSecuE`, `nomE`, `prenomE`, `adresseE`, `numS`) VALUES
(1, 2901291777, 'Taylor', 'Emi', 'rue du web', 666),
(2, 2900325034, 'Tao', 'Dalelt', 'dans une autre vie', 666),
(3, 1900126069, 'Frere', 'Antho', 'somewhere only we know', 666);

-- --------------------------------------------------------

--
-- Structure de la table `Emprunt`
--

CREATE TABLE `Emprunt` (
  `id` int(10) UNSIGNED NOT NULL,
  `dvdE` int(10) UNSIGNED NOT NULL,
  `dateE` datetime NOT NULL,
  `clientE` int(10) UNSIGNED DEFAULT NULL,
  `dureeE` datetime NOT NULL,
  `Soc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Emprunt`
--

INSERT INTO `Emprunt` (`id`, `dvdE`, `dateE`, `clientE`, `dureeE`, `Soc`) VALUES
(6, 10, '2017-06-06 00:00:00', 1, '2017-06-06 00:00:00', 'Deeveadee'),
(7, 10, '2017-06-06 00:00:00', 1, '2017-06-06 00:00:00', 'Des Védé');

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `id` int(10) UNSIGNED NOT NULL,
  `numS` int(10) UNSIGNED NOT NULL,
  `nomS` varchar(255) NOT NULL,
  `rueS` varchar(255) NOT NULL,
  `villeS` varchar(255) NOT NULL,
  `directeurS` varchar(255) NOT NULL,
  `numRueS` int(10) UNSIGNED DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `presentation` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `societe`
--

INSERT INTO `societe` (`id`, `numS`, `nomS`, `rueS`, `villeS`, `directeurS`, `numRueS`, `cover`, `presentation`) VALUES
(2, 666, 'Deeveadee', 'cale grande', 'Mexico', 'Pablo Escobar', 666, '', 'You hate me; you want to kill me! Well, go on! Kill me! KILL ME! I\'m the Doctor, I\'m worse than everyone\'s aunt. *catches himself* '),
(3, 928, 'Des Védé', 'Ah Llé', 'Shanghai', 'Pénélope Fillon', 928, '', 'Sorry, checking all the water in this area; there\'s an escaped fish. Aw, you\'re all Mr. Grumpy Face today. Father Christmas. Santa Claus.'),
(4, 777, 'DéVédé', 'Au Croisement des Mondes', 'Ile de Paques ', 'MB14', 777, '', 'I\'m worse than everyone\'s aunt. *catches himself* And that is not how I\'m introducing myself. I wear a fez now. Fezes are cool.'),
(5, 444, 'Dés vey dés', 'Des dés', 'London', 'Voldemort', 444, '', 'I am the Doctor, and you are the Daleks! I\'m the Doctor. Well, they call me the Doctor.And that is not how I\'m introducing myself.');

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `bio` text,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`id`, `username`, `email`, `password`, `gender`, `created_date`, `phone`, `bio`, `picture`) VALUES
(1, 'EmiTaylor', 'emi@e', '1234', 'Female', '2017-06-11', '0606060606', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Acteur`
--
ALTER TABLE `Acteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Casting`
--
ALTER TABLE `Casting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dvd` (`dvdC`),
  ADD KEY `acteur` (`acteurC`);

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AboSoc` (`AboSoc`),
  ADD KEY `NomC` (`NomC`);

--
-- Index pour la table `Dvd`
--
ALTER TABLE `Dvd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `societe` (`societeD`);

--
-- Index pour la table `Employe`
--
ALTER TABLE `Employe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numS` (`numS`);

--
-- Index pour la table `Emprunt`
--
ALTER TABLE `Emprunt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Soc` (`Soc`),
  ADD KEY `dvd` (`dvdE`),
  ADD KEY `clientE` (`clientE`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numS` (`numS`),
  ADD KEY `nomS` (`nomS`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Acteur`
--
ALTER TABLE `Acteur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Casting`
--
ALTER TABLE `Casting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Client`
--
ALTER TABLE `Client`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Dvd`
--
ALTER TABLE `Dvd`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `Employe`
--
ALTER TABLE `Employe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Emprunt`
--
ALTER TABLE `Emprunt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `societe`
--
ALTER TABLE `societe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Casting`
--
ALTER TABLE `Casting`
  ADD CONSTRAINT `Casting_ibfk_1` FOREIGN KEY (`dvdC`) REFERENCES `Dvd` (`id`),
  ADD CONSTRAINT `Casting_ibfk_2` FOREIGN KEY (`acteurC`) REFERENCES `Acteur` (`id`);

--
-- Contraintes pour la table `Dvd`
--
ALTER TABLE `Dvd`
  ADD CONSTRAINT `Dvd_ibfk_1` FOREIGN KEY (`societeD`) REFERENCES `societe` (`id`);

--
-- Contraintes pour la table `Employe`
--
ALTER TABLE `Employe`
  ADD CONSTRAINT `Employe_ibfk_1` FOREIGN KEY (`numS`) REFERENCES `societe` (`numS`);

--
-- Contraintes pour la table `Emprunt`
--
ALTER TABLE `Emprunt`
  ADD CONSTRAINT `Emprunt_ibfk_1` FOREIGN KEY (`dvdE`) REFERENCES `Dvd` (`id`),
  ADD CONSTRAINT `Emprunt_ibfk_2` FOREIGN KEY (`Soc`) REFERENCES `societe` (`nomS`),
  ADD CONSTRAINT `Emprunt_ibfk_3` FOREIGN KEY (`clientE`) REFERENCES `Client` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
