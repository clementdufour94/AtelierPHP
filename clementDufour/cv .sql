-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 mai 2020 à 15:38
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id_about` int(3) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `expt1` varchar(255) DEFAULT NULL,
  `experience1` varchar(255) DEFAULT NULL,
  `date1` varchar(255) DEFAULT NULL,
  `expt2` varchar(255) DEFAULT NULL,
  `experience2` varchar(255) DEFAULT NULL,
  `date2` varchar(255) DEFAULT NULL,
  `expt3` varchar(255) DEFAULT NULL,
  `experience3` varchar(255) DEFAULT NULL,
  `date3` varchar(255) DEFAULT NULL,
  `expt4` varchar(255) DEFAULT NULL,
  `experience4` varchar(255) DEFAULT NULL,
  `date4` varchar(255) DEFAULT NULL,
  `ecole1` varchar(255) DEFAULT NULL,
  `diplome1` varchar(255) DEFAULT NULL,
  `ecole_date1` varchar(255) DEFAULT NULL,
  `ecole2` varchar(255) DEFAULT NULL,
  `diplome2` varchar(255) DEFAULT NULL,
  `ecole_date2` varchar(255) DEFAULT NULL,
  `ecole3` varchar(255) DEFAULT NULL,
  `diplome3` varchar(255) DEFAULT NULL,
  `ecole_date3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id_about`, `prenom`, `nom`, `adresse`, `telephone`, `email`, `description`, `expt1`, `experience1`, `date1`, `expt2`, `experience2`, `date2`, `expt3`, `experience3`, `date3`, `expt4`, `experience4`, `date4`, `ecole1`, `diplome1`, `ecole_date1`, `ecole2`, `diplome2`, `ecole_date2`, `ecole3`, `diplome3`, `ecole_date3`) VALUES
(1, 'Clement', '', '38 rue de fontenay Vincennes 94300', 770015105, 'clement.dufourl@gmail.com', 'Je m’appelle Clément j’ai 21ans et je suis en première année d’informatique', 'Senior Web Developer', 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in r', 'March 2013-Present', 'Web Developer', 'Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely ', 'December 2011-March 2013', NULL, NULL, NULL, NULL, NULL, NULL, 'EBTP VINCENNES', 'Bac Scientifique spécialité Maths', '2018-2019', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(3) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `profile`
--

INSERT INTO `profile` (`id_profile`, `url`) VALUES
(1, 'https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs2/112692698/original/31a5d2469689575beee06ffcf4e9e76abab3abe2/logo-design-for-profile-picture-dessin-pour-photo-de-profil.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Index pour la table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
