#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Communes
#------------------------------------------------------------

CREATE TABLE Communes(
        idCommune       Int  Auto_increment  NOT NULL ,
        Nom_commune     Varchar (50) NOT NULL ,
        Distance_agence Int NOT NULL ,
        Nombre_habitant Int NOT NULL
	,CONSTRAINT Communes_PK PRIMARY KEY (idCommune)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Individus
#------------------------------------------------------------

CREATE TABLE Individus(
        idIndividu        Int  Auto_increment  NOT NULL ,
        Nom               Varchar (50) NOT NULL ,
        Prenom            Varchar (50) NOT NULL ,
        Date_de_naissance Date NOT NULL ,
        N_telephone       Int NOT NULL
	,CONSTRAINT Individus_PK PRIMARY KEY (idIndividu)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Quartier
#------------------------------------------------------------

CREATE TABLE Quartier(
        idQuartier       Int  Auto_increment  NOT NULL ,
        Libelle_quartier Varchar (50) NOT NULL ,
        idCommune        Int NOT NULL
	,CONSTRAINT Quartier_PK PRIMARY KEY (idQuartier)

	,CONSTRAINT Quartier_Communes_FK FOREIGN KEY (idCommune) REFERENCES Communes(idCommune)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Types de logements
#------------------------------------------------------------

CREATE TABLE Types_de_logements(
        idLogement           Int  Auto_increment  NOT NULL ,
        Charges_forfaitaires Int NOT NULL
	,CONSTRAINT Types_de_logements_PK PRIMARY KEY (idLogement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Logements
#------------------------------------------------------------

CREATE TABLE Logements(
        idLogement                    Int  Auto_increment  NOT NULL ,
        Numero_logement               Int NOT NULL ,
        Rue                           Varchar (50) NOT NULL ,
        Superficie                    Int NOT NULL ,
        Loyer                         Int NOT NULL ,
        idQuartier                    Int NOT NULL ,
        idLogement_Types_de_logements Int NOT NULL
	,CONSTRAINT Logements_PK PRIMARY KEY (idLogement)

	,CONSTRAINT Logements_Quartier_FK FOREIGN KEY (idQuartier) REFERENCES Quartier(idQuartier)
	,CONSTRAINT Logements_Types_de_logements0_FK FOREIGN KEY (idLogement_Types_de_logements) REFERENCES Types_de_logements(idLogement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: habite
#------------------------------------------------------------

CREATE TABLE habite(
        idIndividu Int NOT NULL ,
        idLogement Int NOT NULL
	,CONSTRAINT habite_PK PRIMARY KEY (idIndividu,idLogement)

	,CONSTRAINT habite_Individus_FK FOREIGN KEY (idIndividu) REFERENCES Individus(idIndividu)
	,CONSTRAINT habite_Logements0_FK FOREIGN KEY (idLogement) REFERENCES Logements(idLogement)
)ENGINE=InnoDB;

