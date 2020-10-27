drop database if exists Hotels;
create database Hotels;

use Hotels;




-- Table: Stations
CREATE TABLE Stations(
        idStation       Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomStation      Varchar (50) NOT NULL ,
        altitudeStation Int NOT NULL ,
        hotelsPossede   Int NOT NULL
)ENGINE=InnoDB, charset = utf8;



-- Table: Hotels


CREATE TABLE Hotels(
        idHotel        Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomHotel       Varchar (50) NOT NULL ,
        categorieHotel Varchar (50) NOT NULL ,
        adresseHotel   Varchar (50) NOT NULL ,
        villeHotel     Varchar (50) NOT NULL ,
        idStation      Int NOT NULL 
)ENGINE=InnoDB, charset = utf8;



-- Table: Chambres


CREATE TABLE Chambres(
        numeroChambre   Int  Auto_increment  NOT NULL PRIMARY KEY,
        typeChambre     Varchar (50) NOT NULL ,
        capaciteChambre Int NOT NULL ,
        idHotel         Int NOT NULL
)ENGINE=InnoDB, charset = utf8;



-- Table: Clients


CREATE TABLE Clients(
        idClient      Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomClient     Varchar (50) NOT NULL ,
        prenomClient  Varchar (50) NOT NULL ,
        adresseClient Varchar (50) NOT NULL ,
        villeClient   Varchar (50) NOT NULL
)ENGINE=InnoDB, charset = utf8;



-- Table: relation0


CREATE TABLE relation0(
        idClient          Int NOT NULL PRIMARY KEY,
        numeroChambre     Int NOT NULL ,
        numeroReservation Int NOT NULL ,
        dateReservation   Date NOT NULL ,
        dateFinSejour     Date NOT NULL ,
        prixSejour        Int NOT NULL ,
        reservationArrhes Int NOT NULL 
)ENGINE=InnoDB, charset = utf8;



ALTER TABLE Hotels
ADD CONSTRAINT Hotels_Stations_FK
FOREIGN KEY (idStation)
REFERENCES Stations(idStation);

ALTER TABLE Chambres
ADD CONSTRAINT Chambres_Hotels_FK
FOREIGN KEY (idHotel) 
REFERENCES Hotels(idHotel);

ALTER TABLE relation0
ADD CONSTRAINT relation0_Clients_FK
FOREIGN KEY (idClient)
REFERENCES Clients(idClient);

ALTER TABLE relation0
ADD CONSTRAINT relation0_Chambres0_FK
FOREIGN KEY (numeroChambre)
REFERENCES Chambres(numeroChambre);