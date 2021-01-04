DROP DATABASE IF EXISTS gestionNotes;

CREATE DATABASE gestionNotes;

USE gestionNotes;

CREATE TABLE eleve
(
    idEleve Int auto_increment NOT NULL PRIMARY KEY,
    nomEleve Varchar (50) NOT NULL,
    prenomEleve Varchar (50) NOT NULL,
    classe VarChar (50) NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;


CREATE TABLE matiere
( 
    idMatiere Int auto_increment NOT NULL PRIMARY KEY,
    libelleMatiere Varchar (50) NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE suivi
(
    idSuivi Int auto_increment NOT NULL PRIMARY KEY,
    idMatiere Int NOT NULL,
    idEleve Int NOT NULL,
    note Int NOT NULL,
    coefficient Int NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE utilisateur
(
        idUtilisateur     Int Auto_increment  NOT NULL PRIMARY KEY,
        nomUtilisateur         Varchar (50) NOT NULL,
        prenomUtilisateur      Varchar (50) NOT NULL,
        roleUtilisateur    Int NOT NULL,
        idMatiere      Int NOT NULL,
        loginUtiliseur VarChar (50) NOT NULL,
        MotDePasse VarChar (50) NOT NULL
       
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;

ALTER TABLE gestionNotes.suivi ADD CONSTRAINT suivi_matiere_FK FOREIGN KEY (idMatiere) REFERENCES matiere(idMatiere);
ALTER TABLE gestionNotes.suivi ADD CONSTRAINT suivi_matiere_FK FOREIGN KEY (idEleve) REFERENCES matiere(idEleve);