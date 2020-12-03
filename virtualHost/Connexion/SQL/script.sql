
--
-- Base de données :  gestionUtilisateurs
--

CREATE DATABASE IF NOT EXISTS GestionUtilisateurs;
USE GestionUtilisateurs;

CREATE TABLE IF NOT EXISTS Utilisateurs (
  idUtilisateur int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nomUtilisateur varchar(50) NOT NULL,
  prenomUtilisateur varchar(50) NOT NULL,
  motDePasse varchar(50) NOT NULL,
  adresseMail varchar(100) NOT NULL,
  roleUtilisateur varchar(50) NOT NULL,
  pseudo varchar(50) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8;



INSERT INTO utilisateurs (idUtilisateur, nomUtilisateur, prenomUtilisateur, motDePasse, adresseMail, roleUtilisateur, pseudo) VALUES (1, 'Soso', 'Aa', 'test1', 'Soso@gmail.com', 'Client', 'Top1');
INSERT INTO utilisateurs (idUtilisateur, nomUtilisateur, prenomUtilisateur, motDePasse, adresseMail, roleUtilisateur, pseudo) VALUES (2, 'Cedric', 'Bb', 'test2', 'Cedric@gmail.com', 'Client', 'PauseClope');
INSERT INTO utilisateurs (idUtilisateur, nomUtilisateur, prenomUtilisateur, motDePasse, adresseMail, roleUtilisateur, pseudo) VALUES (3, 'Antoine', 'Cc', 'test3', 'Antoine@gmail.com', 'Client', 'Secouchetrotard');
INSERT INTO utilisateurs (idUtilisateur, nomUtilisateur, prenomUtilisateur, motDePasse, adresseMail, roleUtilisateur, pseudo) VALUES (4, 'Bryan', 'Dd', 'test4', 'Bryan@gmail.com', 'Client', 'BilingueAnglais');
INSERT INTO utilisateurs (idUtilisateur, nomUtilisateur, prenomUtilisateur, motDePasse, adresseMail, roleUtilisateur, pseudo) VALUES (5, 'Amanda', 'Ff', 'test5', 'Amanda@gmail.com', 'Client', 'Fandevachedu59');
