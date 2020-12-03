DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `idTexte` int(11) NOT NULL AUTO_INCREMENT,
  `codeTexte` varchar(20) NOT NULL,
  `codeLangue` varchar(2) NOT NULL,
  `Texte` varchar(200) NOT NULL,
  PRIMARY KEY (`idTexte`),
  KEY `Code Texte` (`codeTexte`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `texte`
--

INSERT INTO `texte` (`idTexte`, `codeTexte`, `codeLangue`, `Texte`) VALUES
(null, 'Accueil', 'FR', 'Accueil'),
(null, 'titrePage', 'FR', 'Gestion des articles'),
(null, 'accueil', 'EN', 'Home'),
(null, 'titrePage', 'EN', 'Article Management'),
(null, 'Connexion', 'EN', 'Log in'),
(null, 'Inscription', 'EN', 'Register'),
(null, 'Deconnexion', 'EN', 'Log out'),
(null, 'Connexion', 'FR', 'Connexion'),
(null, 'Inscription', 'FR', 'Inscription'),
(null, 'Deconnexion', 'FR', 'Se déconnecter'),
(null, 'Pseudo', 'FR', 'Pseudo'),
(null, 'Pseudo', 'EN', 'Username'),
(null, 'mdp', 'FR', 'Mot de passe'),
(null, 'mdp', 'EN', 'Password'),
(null, 'Nom', 'FR', 'Nom'),
(null, 'Nom', 'EN', 'Name'),
(null, 'Prenom', 'FR', 'Prénom'),
(null, 'Prenom', 'FR', 'First name'),
(null, 'ConfirmationMdp', 'FR', 'Confirmation du MDP'),
(null, 'ConfirmationMdp', 'EN', 'Confirm password'),
(null, 'Mail', 'FR', 'Adresse mail'),
(null, 'mail', 'EN', 'Mail'),
(null, 'Valider', 'FR', 'Valider'),
(null, 'Valider', 'EN', 'Confirm'),
(null, 'Retour', 'FR', 'Retour'),
(null, 'Retour', 'EN', 'Back'),
(null, 'art1', 'FR', 'c\'est un article '),
(null, 'art1', 'EN', 'this is an article');
