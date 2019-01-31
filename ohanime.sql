-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 20 Mars 2018 à 15:26
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ohanime`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id` int(10) NOT NULL,
  `nomart` varchar(50) CHARACTER SET latin1 NOT NULL,
  `categorie` varchar(50) CHARACTER SET latin1 NOT NULL,
  `prix` varchar(10) CHARACTER SET latin1 NOT NULL,
  `description` varchar(500) CHARACTER SET latin1 NOT NULL,
  `image` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `nomart`, `categorie`, `prix`, `description`, `image`) VALUES
(1, 'Figurine Ken Kaneki Kakuja', 'Tokyo Ghoul', '45', 'Figurine à l''effigie de Ken Kaneki\r\n\r\nDimensions : 28 cm\r\nMatière : PVC\r\n', 'kaneki-ken-fig.jpg'),
(2, 'Figurine Misogi Kumagawa', 'Medaka Box', '75', 'Figurine à l''effigie de Misogi Kumagawa\r\n\r\nDimensions : 17 cm\r\nMatière : PVC', 'misogi-kumagawa-fig.jpg'),
(3, 'Figurine Akame fait main', 'Akame Ga Kill', '150', 'Figurine faite main à l''effigie d''Akame\r\n\r\nDimensions : 18cm\r\nMatières : argile très légère', 'akame-fig.jpg'),
(4, 'Porte-clefs Mogana Kikaijima', 'Medaka Box', '5', 'Porte-clefs à l''effigie de Mogana Kikaijima\r\n\r\nDimensions : 3,5cm\r\nMatière : PVC', 'mogana-kikaijima-keyring.jpg'),
(5, 'T-Shirt Kaneki Ken', 'Tokyo Ghoul', '20', 'Motif Kaneki Ken sur fond blanc\r\n\r\nTaille disponible : S~XXL\r\nMatière : Coton', 't-shirt-kaneki-ken.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `pseudo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mot_de_passe` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(50) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rue` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ville` varchar(50) CHARACTER SET latin1 NOT NULL,
  `postal` int(10) NOT NULL,
  `mail` varchar(100) CHARACTER SET latin1 NOT NULL,
  `sexe` varchar(1) CHARACTER SET latin1 NOT NULL,
  `pdp` varchar(100) CHARACTER SET latin1 NOT NULL,
`id` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`pseudo`, `mot_de_passe`, `nom`, `prenom`, `rue`, `ville`, `postal`, `mail`, `sexe`, `pdp`, `id`) VALUES
('Fadgiras', 'Gato', 'Mayeux Gudina', 'Florian', '12 rue random', 'paris', 75018, 'gato@gato.fr', 'M', '', 1),
('c', 'c', 'c', 'c', 'g', 'g', 44444, 'g@g.fr', 'M', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `montant_total` int(10) NOT NULL,
  `id_client` int(255) NOT NULL,
  `articles` varchar(100) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(200) COLLATE utf8_bin NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `discussion`
--

CREATE TABLE IF NOT EXISTS `discussion` (
`id_discussion` int(100) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `categorie` varchar(30) NOT NULL,
  `pseudo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `lignecom`
--

CREATE TABLE IF NOT EXISTS `lignecom` (
  `numLigne` int(10) NOT NULL,
  `Qtte` int(100) NOT NULL,
  `idCom` int(10) NOT NULL,
  `idArt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`id_message` int(10) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `date` varchar(15) NOT NULL,
  `contenu` varchar(5000) NOT NULL,
  `id_discussion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `pseudo` (`pseudo`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
 ADD PRIMARY KEY (`id`), ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `discussion`
--
ALTER TABLE `discussion`
 ADD PRIMARY KEY (`id_discussion`), ADD KEY `pseudo` (`pseudo`);

--
-- Index pour la table `lignecom`
--
ALTER TABLE `lignecom`
 ADD PRIMARY KEY (`numLigne`), ADD KEY `idCom` (`idCom`), ADD KEY `idArt` (`idArt`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id_message`), ADD KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `discussion`
--
ALTER TABLE `discussion`
MODIFY `id_discussion` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
MODIFY `id_message` int(10) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `lignecom`
--
ALTER TABLE `lignecom`
ADD CONSTRAINT `lignecom_ibfk_1` FOREIGN KEY (`idCom`) REFERENCES `commande` (`id`),
ADD CONSTRAINT `lignecom_ibfk_2` FOREIGN KEY (`idArt`) REFERENCES `article` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
