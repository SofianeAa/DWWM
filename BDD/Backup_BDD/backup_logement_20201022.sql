-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: logement
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `logement`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `logement` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `logement`;

--
-- Table structure for table `communes`
--

DROP TABLE IF EXISTS `communes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `communes` (
  `idCommune` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_commune` varchar(50) NOT NULL,
  `Distance_agence` int(11) NOT NULL,
  `Nombre_habitant` int(11) NOT NULL,
  PRIMARY KEY (`idCommune`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `communes`
--

LOCK TABLES `communes` WRITE;
/*!40000 ALTER TABLE `communes` DISABLE KEYS */;
/*!40000 ALTER TABLE `communes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `habitation`
--

DROP TABLE IF EXISTS `habitation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `habitation` (
  `idIndividu` int(11) NOT NULL,
  `idLogement` int(11) NOT NULL,
  KEY `Habitation_Logements_FK` (`idLogement`),
  KEY `Habitation_Individus_FK` (`idIndividu`),
  CONSTRAINT `Habitation_Individus_FK` FOREIGN KEY (`idIndividu`) REFERENCES `individus` (`idIndividu`),
  CONSTRAINT `Habitation_Logements_FK` FOREIGN KEY (`idLogement`) REFERENCES `logements` (`idLogement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habitation`
--

LOCK TABLES `habitation` WRITE;
/*!40000 ALTER TABLE `habitation` DISABLE KEYS */;
/*!40000 ALTER TABLE `habitation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `individus`
--

DROP TABLE IF EXISTS `individus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `individus` (
  `idIndividu` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Date_de_naissance` date NOT NULL,
  `N_telephone` int(11) NOT NULL,
  PRIMARY KEY (`idIndividu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `individus`
--

LOCK TABLES `individus` WRITE;
/*!40000 ALTER TABLE `individus` DISABLE KEYS */;
/*!40000 ALTER TABLE `individus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logements`
--

DROP TABLE IF EXISTS `logements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logements` (
  `idLogement` int(11) NOT NULL AUTO_INCREMENT,
  `Numero_logement` int(11) NOT NULL,
  `Rue` varchar(50) NOT NULL,
  `Superficie` int(11) NOT NULL,
  `Loyer` int(11) NOT NULL,
  `idQuartier` int(11) NOT NULL,
  `idTypeDeLogement` int(11) NOT NULL,
  PRIMARY KEY (`idLogement`),
  KEY `Logements_Quartier_FK` (`idQuartier`),
  KEY `Logements_TypeDeLogement_FK` (`idTypeDeLogement`),
  CONSTRAINT `Logements_Quartier_FK` FOREIGN KEY (`idQuartier`) REFERENCES `quartier` (`idQuartier`),
  CONSTRAINT `Logements_TypeDeLogement_FK` FOREIGN KEY (`idTypeDeLogement`) REFERENCES `typesdelogements` (`idTypeDeLogement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logements`
--

LOCK TABLES `logements` WRITE;
/*!40000 ALTER TABLE `logements` DISABLE KEYS */;
/*!40000 ALTER TABLE `logements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quartier`
--

DROP TABLE IF EXISTS `quartier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quartier` (
  `idQuartier` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle_quartier` varchar(50) NOT NULL,
  `idCommune` int(11) NOT NULL,
  PRIMARY KEY (`idQuartier`),
  KEY `Quartier_Communes_FK` (`idCommune`),
  CONSTRAINT `Quartier_Communes_FK` FOREIGN KEY (`idCommune`) REFERENCES `communes` (`idCommune`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quartier`
--

LOCK TABLES `quartier` WRITE;
/*!40000 ALTER TABLE `quartier` DISABLE KEYS */;
/*!40000 ALTER TABLE `quartier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typesdelogements`
--

DROP TABLE IF EXISTS `typesdelogements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typesdelogements` (
  `idTypeDeLogement` int(11) NOT NULL AUTO_INCREMENT,
  `Charges_forfaitaires` int(11) NOT NULL,
  PRIMARY KEY (`idTypeDeLogement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typesdelogements`
--

LOCK TABLES `typesdelogements` WRITE;
/*!40000 ALTER TABLE `typesdelogements` DISABLE KEYS */;
/*!40000 ALTER TABLE `typesdelogements` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-22 11:41:57
