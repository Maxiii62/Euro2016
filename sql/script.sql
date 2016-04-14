CREATE DATABASE Beteclic;
USE Beteclic;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `beteclic`
--

-- --------------------------------------------------------

--
-- Structure de la table `affronte`
--

CREATE TABLE IF NOT EXISTS `affronte` (
  `IDRencontre` int(11) NOT NULL DEFAULT '0',
  `IDEquipe` int(11) NOT NULL DEFAULT '0',
  `Buts` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDRencontre`,`IDEquipe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`ID`, `Nom`) VALUES
(1, 'FRANCE'),
(2, 'ANGLETERRE'),
(3, 'REPUBLIQUE TCHEQUE'),
(4, 'ISLANDE'),
(5, 'AUTRICHE'),
(6, 'IRLANDE DU NORD'),
(7, 'PORTUGAL'),
(8, 'ESPAGNE'),
(9, 'SUISSE'),
(10, 'BELGIQUE'),
(11, 'PAYS DE GALLES'),
(12, 'ALBANIE'),
(13, 'ROUMANIE'),
(14, 'POLOGNE'),
(15, 'ALLEMAGNE'),
(16, 'ITALIE'),
(17, 'RUSSIE'),
(18, 'SLOVAQUIE'),
(19, 'CROATIE'),
(20, 'TURQUIE'),
(21, 'HONGRIE'),
(22, 'IRLANDE'),
(23, 'SUEDE'),
(24, 'UKRAINE');

-- --------------------------------------------------------

--
-- Structure de la table `pari`
--

CREATE TABLE IF NOT EXISTS `pari` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDRencontre` int(11) DEFAULT NULL,
  `IDUser` int(11) DEFAULT NULL,
  `IDGagnant` int(11) DEFAULT NULL,
  `Score1` int(11) DEFAULT NULL,
  `Score2` int(11) DEFAULT NULL,
  `Points` int(11) DEFAULT NULL,
  `DatePari` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rencontre`
--

CREATE TABLE IF NOT EXISTS `rencontre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Equipe1` varchar(30) DEFAULT NULL,
  `Equipe2` varchar(30) DEFAULT NULL,
  `idTour` INT DEFAULT NULL,
  `DateMatch` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) DEFAULT NULL,
  `Prenom` varchar(30) DEFAULT NULL,
  `MotDePasse` varchar(30) DEFAULT NULL,
  `Mail` varchar(30) DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL,
  `Pseudo` varchar(30) DEFAULT NULL,
  `EstAdmin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`ID`, `Nom`, `Prenom`, `MotDePasse`, `Mail`, `DateNaissance`, `Pseudo`, `EstAdmin`) VALUES
(1, 'Eduardo', 'Cavalcanti', '0000', 'eduardo.caval@gmail.com', '0000-00-00', 'Edu', 0),
(2, 'Raija', 'Peltomaa', '0000', 'toto@gmail.com', '0000-00-00', 'RaiPel', 1),
(3, 'Phan', 'Thi', '0000', 'phan.thi@gmail.com', '0000-00-00', 'Phaaan', 0);

CREATE TABLE IF NOT EXISTS `tour` (
  `Idtour` int(11) NOT NULL AUTO_INCREMENT,
  `Nomtour` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Idtour`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

INSERT INTO `tour` (`idtour`, `nomtour`) VALUES
(1, 'POULE A'),
(2, 'POULE B'),
(3, 'POULE C'),
(4, 'POULE D'),
(5, 'POULE E'),
(6, 'POULE F'),
(7, '1/8 finale'),
(8, '1/4 finale'),
(9, '1/2 finale'),
(10, 'finale');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
