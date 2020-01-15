-- MySQL dump 10.16  Distrib 10.2.17-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u779679936_forum
-- ------------------------------------------------------
-- Server version	10.2.17-MariaDB

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
-- Table structure for table `attendance199455`
--

DROP TABLE IF EXISTS `attendance199455`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance199455` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance199455`
--

/*!40000 ALTER TABLE `attendance199455` DISABLE KEYS */;
INSERT INTO `attendance199455` VALUES (1,'jay','10:36:32','2018-10-10'),(2,'jay','10:36:48','2018-10-10');
/*!40000 ALTER TABLE `attendance199455` ENABLE KEYS */;

--
-- Table structure for table `attendance211643`
--

DROP TABLE IF EXISTS `attendance211643`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance211643` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance211643`
--

/*!40000 ALTER TABLE `attendance211643` DISABLE KEYS */;
INSERT INTO `attendance211643` VALUES (1,'joe','17:41:48','2018-10-01'),(10,'testing','21:35:20','2018-10-01'),(11,'jay','03:24:14','2018-10-02');
/*!40000 ALTER TABLE `attendance211643` ENABLE KEYS */;

--
-- Table structure for table `attendance574842`
--

DROP TABLE IF EXISTS `attendance574842`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance574842` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance574842`
--

/*!40000 ALTER TABLE `attendance574842` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendance574842` ENABLE KEYS */;

--
-- Table structure for table `attendance854020`
--

DROP TABLE IF EXISTS `attendance854020`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance854020` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance854020`
--

/*!40000 ALTER TABLE `attendance854020` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendance854020` ENABLE KEYS */;

--
-- Table structure for table `attendance940502`
--

DROP TABLE IF EXISTS `attendance940502`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance940502` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance940502`
--

/*!40000 ALTER TABLE `attendance940502` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendance940502` ENABLE KEYS */;

--
-- Table structure for table `chat199455`
--

DROP TABLE IF EXISTS `chat199455`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat199455` (
  `chat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chat_person_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_color` text COLLATE utf8_unicode_ci NOT NULL,
  `chat_time` time DEFAULT NULL,
  `chat_date` date DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat199455`
--

/*!40000 ALTER TABLE `chat199455` DISABLE KEYS */;
INSERT INTO `chat199455` VALUES (1,'joe','testing\n','#4286f4','22:22:47','2018-10-02'),(2,'jay','Hi \n','#800000','10:34:21','2018-10-10');
/*!40000 ALTER TABLE `chat199455` ENABLE KEYS */;

--
-- Table structure for table `chat211643`
--

DROP TABLE IF EXISTS `chat211643`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat211643` (
  `chat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chat_person_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_color` text COLLATE utf8_unicode_ci NOT NULL,
  `chat_time` time DEFAULT NULL,
  `chat_date` date DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat211643`
--

/*!40000 ALTER TABLE `chat211643` DISABLE KEYS */;
INSERT INTO `chat211643` VALUES (13,'joe','Test','#4286f4','08:13:20','2018-10-03');
/*!40000 ALTER TABLE `chat211643` ENABLE KEYS */;

--
-- Table structure for table `chat574842`
--

DROP TABLE IF EXISTS `chat574842`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat574842` (
  `chat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chat_person_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_color` text COLLATE utf8_unicode_ci NOT NULL,
  `chat_time` time DEFAULT NULL,
  `chat_date` date DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat574842`
--

/*!40000 ALTER TABLE `chat574842` DISABLE KEYS */;
INSERT INTO `chat574842` VALUES (1,'joe','hello','#4286f4','03:27:42','2018-10-02');
/*!40000 ALTER TABLE `chat574842` ENABLE KEYS */;

--
-- Table structure for table `chat854020`
--

DROP TABLE IF EXISTS `chat854020`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat854020` (
  `chat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chat_person_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_color` text COLLATE utf8_unicode_ci NOT NULL,
  `chat_time` time DEFAULT NULL,
  `chat_date` date DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat854020`
--

/*!40000 ALTER TABLE `chat854020` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat854020` ENABLE KEYS */;

--
-- Table structure for table `chat940502`
--

DROP TABLE IF EXISTS `chat940502`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat940502` (
  `chat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chat_person_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_color` text COLLATE utf8_unicode_ci NOT NULL,
  `chat_time` time DEFAULT NULL,
  `chat_date` date DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat940502`
--

/*!40000 ALTER TABLE `chat940502` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat940502` ENABLE KEYS */;

--
-- Table structure for table `list`
--

DROP TABLE IF EXISTS `list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `list` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `sub_id` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `chat` text COLLATE utf8_unicode_ci NOT NULL,
  `attendance` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `list`
--

/*!40000 ALTER TABLE `list` DISABLE KEYS */;
INSERT INTO `list` VALUES (9,'75353','Test','attendance211643','chat211643','Test211643.html','Bahasa Melayu'),(10,'75353','forum discussion','attendance574842','chat574842','forum discussion574842.html','forum discussion'),(11,'75353','chap 1','attendance199455','chat199455','chap 1199455.html','Test'),(12,'21415','hanat','attendance940502','chat940502','hanat940502.html',''),(13,'75353','ll','attendance854020','chat854020','ll854020.html','');
/*!40000 ALTER TABLE `list` ENABLE KEYS */;

--
-- Dumping routines for database 'u779679936_forum'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-16 13:45:07
