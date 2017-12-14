CREATE DATABASE  IF NOT EXISTS `EduFit_Data_Source` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `EduFit_Data_Source`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: edufitdb.ccfkgwtrrucm.us-east-1.rds.amazonaws.com    Database: EduFit_Data_Source
-- ------------------------------------------------------
-- Server version	5.6.35-log

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
-- Table structure for table `Activites`
--

DROP TABLE IF EXISTS `Activites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Activites` (
  `SID` varchar(45) NOT NULL,
  `Cardio` int(11) DEFAULT NULL,
  `Endurance` int(11) DEFAULT NULL,
  `Flexibility` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Activites`
--

LOCK TABLES `Activites` WRITE;
/*!40000 ALTER TABLE `Activites` DISABLE KEYS */;
INSERT INTO `Activites` VALUES ('123',400,300,150,850),('124',400,300,0,700),('125',0,0,150,150);
/*!40000 ALTER TABLE `Activites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Admin`
--

DROP TABLE IF EXISTS `Admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin` (
  `EmailAddress` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `SchoolName` varchar(255) DEFAULT NULL,
  `SchoolID` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admin`
--

LOCK TABLES `Admin` WRITE;
/*!40000 ALTER TABLE `Admin` DISABLE KEYS */;
INSERT INTO `Admin` VALUES ('admin@gmail.com','Admin','Towson University',1);
/*!40000 ALTER TABLE `Admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Coach`
--

DROP TABLE IF EXISTS `Coach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Coach` (
  `CoachID` int(11) NOT NULL,
  `FirstName` longtext NOT NULL,
  `LastName` longtext NOT NULL,
  `EmailAddress` longtext,
  `TeamName` longtext,
  `Password` longtext NOT NULL,
  PRIMARY KEY (`CoachID`),
  UNIQUE KEY `sqlite_autoindex_Coach_1` (`CoachID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Coach`
--

LOCK TABLES `Coach` WRITE;
/*!40000 ALTER TABLE `Coach` DISABLE KEYS */;
INSERT INTO `Coach` VALUES (0,'John','Harbaugh','ravens@gmail.com','Baltimore Ravens','ravens'),(2133,'Joe','Gibbs','joegibbs@yahoo.com','Towson Tigers','redskins'),(43321,'Landon','Donovan','email@email.com','Towson Tigers','soccer');
/*!40000 ALTER TABLE `Coach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FitnessGoals`
--

DROP TABLE IF EXISTS `FitnessGoals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FitnessGoals` (
  `StudentID` longtext NOT NULL,
  `ExerciseName` longtext,
  `ExerciseType` longtext,
  `DesiredReps` int(11) DEFAULT NULL,
  `RepsProgress` int(11) DEFAULT NULL,
  `DesiredTime` longtext,
  `TimeProgress` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FitnessGoals`
--

LOCK TABLES `FitnessGoals` WRITE;
/*!40000 ALTER TABLE `FitnessGoals` DISABLE KEYS */;
/*!40000 ALTER TABLE `FitnessGoals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Sponsors`
--

DROP TABLE IF EXISTS `Sponsors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Sponsors` (
  `SchoolID` smallint(6) NOT NULL,
  `sponsor1` varchar(50) DEFAULT NULL,
  `sponsor2` varchar(50) DEFAULT NULL,
  `sponsor3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`SchoolID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Sponsors`
--

LOCK TABLES `Sponsors` WRITE;
/*!40000 ALTER TABLE `Sponsors` DISABLE KEYS */;
INSERT INTO `Sponsors` VALUES (1,'McDonalds','Burger King','Arbys');
/*!40000 ALTER TABLE `Sponsors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Student`
--

DROP TABLE IF EXISTS `Student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Student` (
  `StudentID` longtext NOT NULL,
  `FirstName` longtext NOT NULL,
  `LastName` longtext NOT NULL,
  `EmailAddress` longtext,
  `TeamName` longtext,
  `Sport` longtext,
  `ParentAccessCode` longtext NOT NULL,
  `Password` longtext NOT NULL,
  `SubscriptionType` longtext,
  `PaymentEmailAddress` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Student`
--

LOCK TABLES `Student` WRITE;
/*!40000 ALTER TABLE `Student` DISABLE KEYS */;
INSERT INTO `Student` VALUES ('123','Joe','Schmoe','joeschmoe@email.com','Towson Tigers','Football','GWFK23SE2','RIQ24WD',NULL,NULL),('124','Ann','Schmann','annschmann@gmail.com','Towson Tigers','Soccer','WJ42WKD2','password',NULL,NULL),('125','Ox','Bellows','oxbellows@yahoo.com','Towson Tigers','Football','WIE24SIW','fewoiiuew',NULL,NULL),('0578460','Austin','Farr','47amfarr@gmail.com',NULL,NULL,'Farr0578460','Admin',NULL,NULL);
/*!40000 ALTER TABLE `Student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Team`
--

DROP TABLE IF EXISTS `Team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Team` (
  `TeamName` longtext NOT NULL,
  `Sport` longtext,
  `CoachID` longtext NOT NULL,
  `CoachFirstName` longtext,
  `CoachLastName` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Team`
--

LOCK TABLES `Team` WRITE;
/*!40000 ALTER TABLE `Team` DISABLE KEYS */;
INSERT INTO `Team` VALUES ('Towson Tigers','Football','2133','Joe','Gibbs'),('Towson Tigers','Soccer','43321','Landon','Donovan');
/*!40000 ALTER TABLE `Team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Test`
--

DROP TABLE IF EXISTS `Test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Test` (
  `S_ID` int(11) NOT NULL,
  PRIMARY KEY (`S_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Test`
--

LOCK TABLES `Test` WRITE;
/*!40000 ALTER TABLE `Test` DISABLE KEYS */;
INSERT INTO `Test` VALUES (123);
/*!40000 ALTER TABLE `Test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Trainer`
--

DROP TABLE IF EXISTS `Trainer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Trainer` (
  `FirstName` longtext NOT NULL,
  `LastName` longtext NOT NULL,
  `EmailAddress` longtext NOT NULL,
  `TrainingFacilityID` longtext NOT NULL,
  `Password` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Trainer`
--

LOCK TABLES `Trainer` WRITE;
/*!40000 ALTER TABLE `Trainer` DISABLE KEYS */;
INSERT INTO `Trainer` VALUES ('Amber','Smith','trainer@gmail.com','1','IAmATrainer'),('Joey','Fatone','joey@gmail.com','','password');
/*!40000 ALTER TABLE `Trainer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TrainingFacility`
--

DROP TABLE IF EXISTS `TrainingFacility`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TrainingFacility` (
  `TrainingFacilityID` int(11) NOT NULL,
  `FacilityName` longtext,
  `Address1` longtext,
  `Address2` longtext,
  `Address3` longtext,
  `City` longtext,
  `State` longtext,
  `ZipCode` longtext,
  PRIMARY KEY (`TrainingFacilityID`),
  UNIQUE KEY `sqlite_autoindex_TrainingFacility_1` (`TrainingFacilityID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TrainingFacility`
--

LOCK TABLES `TrainingFacility` WRITE;
/*!40000 ALTER TABLE `TrainingFacility` DISABLE KEYS */;
INSERT INTO `TrainingFacility` VALUES (1,'Amber\'s Personal Training','123 Test Dr.','Suite #1705',NULL,'Towson','MD','21286');
/*!40000 ALTER TABLE `TrainingFacility` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-14 13:38:10
