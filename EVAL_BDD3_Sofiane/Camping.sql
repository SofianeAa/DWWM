#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Emplacement
#------------------------------------------------------------

CREATE TABLE Emplacement(
        idEmplacement    Int  Auto_increment  NOT NULL PRIMARY KEY,
        types            Varchar (50) NOT NULL ,
        parking          Bool NOT NULL ,
        numero           Int NOT NULL ,
        zone             Varchar (50) NOT NULL ,
        ombre            Bool NOT NULL ,
        raccordementElec Varchar (50) NOT NULL ,
        pointEmplacement Int NOT NULL
)ENGINE=InnoDB, charset = utf8;


#------------------------------------------------------------
# Table: Client
#------------------------------------------------------------

CREATE TABLE Client(
        idClient Int  Auto_increment  NOT NULL PRIMARY KEY,
        nom      Varchar (50) NOT NULL ,
        prenom   Varchar (50) NOT NULL ,
        adresse  Varchar (50) NOT NULL ,
        numPhone Int NOT NULL ,
        mail     Varchar (50) NOT NULL
)ENGINE=InnoDB, charset = utf8;


#------------------------------------------------------------
# Table: Activites
#------------------------------------------------------------

CREATE TABLE Activites(
        idActivites  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomActivite  Int NOT NULL ,
        prixActivite Int NOT NULL ,
        zone         Varchar (50) NOT NULL
)ENGINE=InnoDB, charset = utf8;


#------------------------------------------------------------
# Table: Reglement
#------------------------------------------------------------

CREATE TABLE Reglement(
        idReglement  Int  Auto_increment  NOT NULL PRIMARY KEY,
        valeurPoint  Int NOT NULL ,
        releveArrive Int NOT NULL ,
        releveDepart Int NOT NULL ,
        prixFinal    Int NOT NULL
)ENGINE=InnoDB, charset = utf8;


#------------------------------------------------------------
# Table: Reserve
#------------------------------------------------------------

CREATE TABLE Reserve(
        idClient        Int NOT NULL PRIMARY KEY,
        idEmplacement   Int NOT NULL ,
        dateReservation Date NOT NULL ,
        dateDebutSejour Date NOT NULL ,
        dateFinSejour   Date NOT NULL ,
        prixSejour      Int NOT NULL
)ENGINE=InnoDB, charset = utf8;


#------------------------------------------------------------
# Table: Regle
#------------------------------------------------------------

CREATE TABLE Regle(
        idClient    Int NOT NULL PRIMARY KEY,
        idReglement Int NOT NULL
)ENGINE=InnoDB, charset = utf8;


#------------------------------------------------------------
# Table: Organise
#------------------------------------------------------------

CREATE TABLE Organise(
        idEmplacement Int NOT NULL PRIMARY KEY,
        idActivites   Int NOT NULL
)ENGINE=InnoDB, charset = utf8;

ALTER TABLE Reserve
ADD CONSTRAINT Reserve_Client_FK
FOREIGN KEY (idClient)
REFERENCES Client(idClient);

ALTER TABLE Reserve
ADD CONSTRAINT Reserve_Emplacement0_FK
FOREIGN KEY (idEmplacement)
REFERENCES Emplacement(idEmplacement);

ALTER TABLE Regle
ADD CONSTRAINT Regle_Client_FK
FOREIGN KEY (idClient)
REFERENCES Client(idClient);

ALTER TABLE Regle
ADD CONSTRAINT Regle_Reglement0_FK
FOREIGN KEY (idReglement)
REFERENCES Reglement(idReglement);

ALTER TABLE Organise
ADD CONSTRAINT Organise_Emplacement_FK
FOREIGN KEY (idEmplacement)
REFERENCES Emplacement(idEmplacement);

ALTER TABLE Organise
ADD CONSTRAINT Organise_Activites0_FK
FOREIGN KEY (idActivites)
REFERENCES Activites(idActivites);


-- Table associative : 