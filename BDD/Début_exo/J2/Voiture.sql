drop database if exists Voiture;
create database Voiture;
use Voiture;

create Table Marques(
    idMarque int (11) NOT NULL auto_increment PRIMARY KEY ,
    libelleMarque Varchar (50) NOT NULL
) ENGINE = InnoDB , charset = utf8;

create Table Modeles(
    idModele int (11) NOT NULL auto_increment PRIMARY KEY ,
    libelleModele Varchar (50) NOT NULL ,
    idMarque int (11) NOT NULL
) ENGINE = InnoDB , charset = utf8;

ALTER TABLE Modeles
ADD CONSTRAINT FK_Modeles_Marques
FOREIGN KEY (idMarque)
REFERENCES Marques(idMarque);
