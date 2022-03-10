-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 08 déc. 2021 à 21:44
-- Version du serveur :  10.3.28-MariaDB
-- Version de PHP :  7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p2006964`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id` int(12) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id`, `nom`, `prenom`) VALUES
(3, 'Thurman', 'Uma'),
(4, 'Travolta', 'John'),
(1, 'DiCaprio', 'Leonardo'),
(2, 'Winslet', 'Kate'),
(5, 'Ridley', 'Daisy'),
(6, 'Fischer', 'Carrie');

-- --------------------------------------------------------

--
-- Structure de la table `casting`
--

CREATE TABLE `casting` (
  `id_film` int(12) NOT NULL,
  `id_acteur` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `casting`
--

INSERT INTO `casting` (`id_film`, `id_acteur`) VALUES
(4, 1),
(4, 2),
(2, 3),
(2, 4),
(1, 5),
(1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` int(13) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `annee` year(4) NOT NULL,
  `score` float NOT NULL,
  `nbVotants` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `nom`, `annee`, `score`, `nbVotants`) VALUES
(1, 'Star Wars', 1977, 8.9, 14182),
(2, 'Pulp Fiction', 1994, 8.4, 11693),
(3, 'Blade Runner', 1982, 8.6, 8665),
(4, 'Titanic', 1997, 9.2, 8129),
(5, 'Braveheart', 1995, 8.4, 8074),
(6, 'Empire Strikes Back, The', 1980, 8.5, 8050),
(7, 'Shawshank Redemption, The', 1994, 8.8, 7850),
(8, 'Independence Day', 1996, 7, 7138),
(9, 'Usual Suspects, The', 1995, 8.7, 6981),
(10, 'Raiders of the Lost Ark', 1981, 8.4, 6488),
(11, '2001: A Space Odyssey', 1968, 8.4, 6413),
(12, 'Forrest Gump', 1994, 7.8, 6269),
(14, 'Silence of the Lambs, The', 1991, 8.3, 5715),
(15, 'Princess Bride, The', 1987, 8.4, 5522),
(16, 'Terminator 2: Judgment Day', 1991, 8, 5513),
(17, 'Casablanca', 1942, 8.7, 5489),
(18, 'Monty Python and the Holy Grail', 1974, 8.4, 5319),
(19, 'Star Trek: First Contact', 1996, 8.2, 5298),
(20, 'Fargo', 1996, 8.2, 5293),
(21, 'Twelve Monkeys', 1995, 8, 5287),
(22, 'Trainspotting', 1996, 8.1, 5233),
(23, 'Godfather, The', 1972, 8.7, 5211),
(24, 'Se7en', 1995, 8.1, 5107),
(25, 'Back to the Future', 1985, 7.8, 5103),
(26, 'Rock, The', 1996, 8, 4938),
(27, 'Reservoir Dogs', 1992, 8.3, 4861),
(28, 'Apocalypse Now', 1979, 8.3, 4860),
(30, 'Apollo 13', 1995, 7.8, 4778),
(31, 'Clockwork Orange, A', 1971, 8.4, 4767),
(32, 'Jurassic Park', 1993, 7.4, 4707),
(33, 'English Patient, The', 1996, 8.1, 4689),
(34, 'One Flew Over the Cuckoo\'s Nest', 1975, 8.5, 4545),
(35, 'Dr. Strangelove or: How I Learned to Stop Worrying', 1963, 8.6, 4451),
(39, 'Terminator, The', 1984, 7.8, 4225),
(48, 'True Lies', 1994, 7.3, 3601),
(94, 'Total Recall', 1990, 7.1, 2305),
(180, 'Predator', 1987, 7.2, 1604),
(263, 'Conan the Barbarian', 1981, 6.9, 1271),
(321, 'Twins', 1988, 6.3, 1126),
(334, 'Last Action Hero', 1993, 5.9, 1107),
(410, 'Dave', 1993, 7.4, 962),
(440, 'Kindergarten Cop', 1990, 6.2, 894),
(471, 'Running Man, The', 1987, 6.3, 856),
(629, 'Commando', 1985, 6.1, 673),
(746, 'Conan the Destroyer', 1984, 5.4, 542),
(932, 'Red Heat', 1988, 5.8, 402),
(960, 'Terminator 2: 3-D', 1996, 8.7, 384),
(1106, 'Junior', 1994, 5.9, 329),
(1339, 'Jingle All the Way', 1996, 6, 262),
(1551, 'Raw Deal', 1986, 5, 215),
(1622, 'Batman and Robin', 1997, 3.9, 1925),
(1644, 'Red Sonja', 1985, 4.6, 404),
(1353, 'Outrageous Fortune', 1987, 6.1, 258),
(975, 'Night Shift', 1982, 6.6, 377),
(910, 'Brady Bunch Movie, The', 1995, 6.3, 412),
(793, 'Money Pit, The', 1986, 5.8, 482),
(13, 'Alien', 1981, 8.3, 10),
(13, 'Alien', 1981, 8.3, 10);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `pwd`, `email`) VALUES
(1, 'Manaar', 'manar123', 'manar@manar.com'),
(2, 'Anne-So', 'anneso15', 'as@as.com'),
(3, 'Quentin V.', 'profphp', 'quentin.vergara@example.com'),
(4, 'oke', 'oui', 'stp@marche.com'),
(5, 'oke', 'oui', 'stp@marche.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD KEY `id` (`id`);

--
-- Index pour la table `casting`
--
ALTER TABLE `casting`
  ADD KEY `étrangere_film` (`id_film`),
  ADD KEY `étrangere_acteur` (`id_acteur`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD KEY `id` (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1645;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `casting`
--
ALTER TABLE `casting`
  ADD CONSTRAINT `étrangere_acteur` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `étrangere_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
