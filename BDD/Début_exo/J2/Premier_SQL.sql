drop database if exists Logement;
create database Logement;

use Logement;



-- Table : Types de communes
CREATE TABLE Communes(
        idCommune       Int  Auto_increment  NOT NULL PRIMARY KEY ,
        Nom_commune     Varchar (50) NOT NULL ,
        Distance_agence Int NOT NULL ,
        Nombre_habitant Int NOT NULL
) ENGINE = InnoDB , charset = utf8;


-- Table : Individus
CREATE TABLE Individus(
        idIndividu        Int  Auto_increment  NOT NULL PRIMARY KEY ,
        Nom               Varchar (50) NOT NULL ,
        Prenom            Varchar (50) NOT NULL ,
        Date_de_naissance Date NOT NULL ,
        N_telephone       Int NOT NULL
) ENGINE = InnoDB , charset = utf8;


-- Table : Quartier
CREATE TABLE Quartier(
        idQuartier       Int  Auto_increment  NOT NULL  PRIMARY KEY ,
        Libelle_quartier Varchar (50) NOT NULL ,
        idCommune        Int NOT NULL
) ENGINE = InnoDB , charset = utf8;


-- Table : Types de logements
CREATE TABLE Typesdelogements(
        idTypeDeLogement           Int  Auto_increment  NOT NULL PRIMARY KEY ,
        Charges_forfaitaires Int NOT NULL
) ENGINE = InnoDB , charset = utf8;


-- Table : Logements
CREATE TABLE Logements(
        idLogement                    Int  Auto_increment  NOT NULL PRIMARY KEY ,
        Numero_logement               Int NOT NULL ,
        Rue                           Varchar (50) NOT NULL ,
        Superficie                    Int NOT NULL ,
        Loyer                         Int NOT NULL ,
        idQuartier                    Int NOT NULL ,
        idTypeDeLogement              Int NOT NULL
) ENGINE = InnoDB , charset = utf8;


-- Table : Habite
CREATE TABLE Habitation(
        idIndividu Int NOT NULL ,
        idLogement Int NOT NULL
) ENGINE = InnoDB , charset = utf8;


ALTER TABLE Quartier
ADD CONSTRAINT Quartier_Communes_FK
FOREIGN KEY (idCommune)
REFERENCES Communes(idCommune);

ALTER TABLE Logements
ADD CONSTRAINT Logements_Quartier_FK
FOREIGN KEY (idQuartier)
REFERENCES Quartier(idQuartier);

ALTER TABLE Logements
ADD CONSTRAINT Logements_TypeDeLogement_FK
FOREIGN KEY (idTypeDeLogement)
REFERENCES Typesdelogements(idTypeDeLogement);

ALTER TABLE Habitation
ADD CONSTRAINT Habitation_Logements_FK
FOREIGN KEY (idLogement)
REFERENCES logements(idLogement);

ALTER TABLE Habitation
ADD CONSTRAINT Habitation_Individus_FK
FOREIGN KEY (idIndividu)
REFERENCES Individus(idIndividu);