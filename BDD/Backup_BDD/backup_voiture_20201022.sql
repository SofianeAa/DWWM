-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: voiture
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
-- Current Database: `voiture`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `voiture` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `voiture`;

--
-- Table structure for table `marques`
--

DROP TABLE IF EXISTS `marques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marques` (
  `idMarque` int(11) NOT NULL AUTO_INCREMENT,
  `libelleMarque` varchar(50) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marques`
--

LOCK TABLES `marques` WRITE;
/*!40000 ALTER TABLE `marques` DISABLE KEYS */;
INSERT INTO `marques` VALUES (1,' Pontiac '),(2,' Kia '),(3,' Mazda '),(4,' Mercury '),(5,' Jaguar '),(6,'Nissan'),(7,' Suzuki '),(8,' Volkswagen '),(9,' Oldsmobile '),(10,' Audi '),(11,' BMW '),(12,' GMC '),(13,' Toyota '),(14,' Dodge '),(15,' Saturn '),(16,' Infiniti '),(17,' Cadillac '),(18,' Ford '),(19,' Chevrolet '),(20,' Subaru '),(21,' Geo '),(22,' Chrysler '),(23,' Porsche '),(24,' Mitsubishi '),(25,' Lotus '),(26,' Panoz '),(27,' Buick '),(28,' MINI '),(29,' Lexus '),(30,' Volvo '),(31,' Maserati '),(32,' Lamborghini '),(33,' Plymouth '),(34,' Maybach '),(35,' Lincoln '),(36,' Honda '),(37,' Mercedes-Benz '),(38,' Fiat ');
/*!40000 ALTER TABLE `marques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modeles`
--

DROP TABLE IF EXISTS `modeles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modeles` (
  `idModele` int(11) NOT NULL AUTO_INCREMENT,
  `libelleModele` varchar(50) NOT NULL,
  `idMarque` int(11) NOT NULL,
  PRIMARY KEY (`idModele`),
  KEY `FK_Modeles_Marques` (`idMarque`),
  CONSTRAINT `FK_Modeles_Marques` FOREIGN KEY (`idMarque`) REFERENCES `marques` (`idMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modeles`
--

LOCK TABLES `modeles` WRITE;
/*!40000 ALTER TABLE `modeles` DISABLE KEYS */;
INSERT INTO `modeles` VALUES (1,' Firebird ',1),(2,' Amanti ',2),(3,' MX-5 ',3),(4,' Villager ',4),(5,' X-Type ',5),(6,' Frontier ',6),(7,' Samurai ',7),(8,' Golf ',8),(9,' Achieva ',9),(10,' A4 ',10),(11,' NV3500 ',6),(12,' MPV ',3),(13,' 5 Series ',11),(14,' Mazdaspeed 3 ',3),(15,' Suburban 2500 ',12),(16,' Matrix ',13),(17,' A3 ',10),(18,' Intrepid ',14),(19,' S-Series ',15),(20,' G37 ',16),(21,' XLR-V ',17),(22,' Probe ',18),(23,' TT ',10),(24,' STS ',17),(25,' Caprice ',19),(26,' Impreza ',20),(27,' Storm ',21),(28,' Town & Country ',22),(29,' Cayman ',23),(30,' E150 ',18),(31,' Yukon ',12),(32,' Montero Sport ',24),(33,' QX ',16),(34,' Esprit ',25),(35,' Esperante ',26),(36,' Bonneville ',1),(37,' LaCrosse ',27),(38,' Cooper ',28),(39,' Metro ',19),(40,' GTO ',1),(41,' Rogue ',6),(42,' B-Series ',3),(43,' Cougar ',4),(44,' Aveo ',19),(45,' Maxima ',6),(46,' Corolla ',13),(47,' CTS-V ',17),(48,' Avalanche ',19),(49,' Explorer ',18),(50,' Titan ',6),(51,' Legacy ',20),(52,' GS ',29),(53,' Truck Xtracab SR5 ',13),(54,' Hearse ',27),(55,' Escape ',18),(56,' RS 6 ',10),(57,' Mountaineer ',4),(58,' Cressida ',13),(59,' S60 ',30),(60,' Eurovan ',8),(61,' GranTurismo ',31),(62,' QX56 ',16),(63,' 928 ',23),(64,' Karif ',31),(65,' MurciÃ©lago ',32),(66,' Marquis ',4),(67,' Sable ',4),(68,' Silverado 2500 ',19),(69,' Camry ',13),(70,' Five Hundred ',18),(71,' LS ',29),(72,' Laser ',33),(73,' 62 ',34),(74,' Corvette ',19),(75,' Mystique ',4),(76,' LeMans ',1),(77,' Mark VII ',35),(78,' Sequoia ',13),(79,' Spectra ',2),(80,' Crossfire ',22),(81,' Ram 1500 Club ',14),(82,' Passport ',36),(83,' Monterey ',4),(84,' M-Class ',37),(85,' Caravan ',14),(86,' Durango ',14),(87,' A8 ',10),(88,' Suburban 2500 ',19),(89,' 500 ',38);
/*!40000 ALTER TABLE `modeles` ENABLE KEYS */;
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
