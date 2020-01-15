-- MySQL dump 10.16  Distrib 10.2.17-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u779679936_quiz
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
-- Table structure for table `choice143368`
--

DROP TABLE IF EXISTS `choice143368`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice143368` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice143368`
--

/*!40000 ALTER TABLE `choice143368` DISABLE KEYS */;
INSERT INTO `choice143368` VALUES (21,2,0,'Hei'),(22,2,0,'Amboi'),(23,2,1,'Oh'),(24,2,0,'Wah'),(25,3,0,'Pasir'),(26,3,1,'Tanah'),(27,3,0,'Padang'),(28,3,0,'Tasik'),(29,4,0,'Mereka …beliau'),(30,4,0,'Beliau …patik'),(31,4,0,'Hamba …kita'),(32,4,1,'Saya … dia'),(33,5,0,'Memarik'),(34,5,1,' Menyentak'),(35,5,0,'Menghentak'),(36,5,0,'Mengheret'),(37,6,0,'Berlari … bergaduh'),(38,6,1,'Berjalan…bertengkar'),(39,6,0,'Bergayut …bermusuh'),(40,6,0,'Mengesot …bertengkar'),(41,7,0,'Membuang'),(42,7,0,'Melontar'),(43,7,0,'Membaling'),(44,7,1,'Melempar'),(61,1,1,'Helai'),(62,1,0,'Rumpun'),(63,1,0,'Cekak'),(64,1,0,'Batang');
/*!40000 ALTER TABLE `choice143368` ENABLE KEYS */;

--
-- Table structure for table `choice256371`
--

DROP TABLE IF EXISTS `choice256371`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice256371` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice256371`
--

/*!40000 ALTER TABLE `choice256371` DISABLE KEYS */;
/*!40000 ALTER TABLE `choice256371` ENABLE KEYS */;

--
-- Table structure for table `choice307645`
--

DROP TABLE IF EXISTS `choice307645`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice307645` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice307645`
--

/*!40000 ALTER TABLE `choice307645` DISABLE KEYS */;
/*!40000 ALTER TABLE `choice307645` ENABLE KEYS */;

--
-- Table structure for table `choice356307`
--

DROP TABLE IF EXISTS `choice356307`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice356307` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice356307`
--

/*!40000 ALTER TABLE `choice356307` DISABLE KEYS */;
/*!40000 ALTER TABLE `choice356307` ENABLE KEYS */;

--
-- Table structure for table `choice414100`
--

DROP TABLE IF EXISTS `choice414100`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice414100` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice414100`
--

/*!40000 ALTER TABLE `choice414100` DISABLE KEYS */;
INSERT INTO `choice414100` VALUES (5,1,1,'a'),(6,1,0,'bcc'),(7,1,0,'c'),(8,1,0,'d');
/*!40000 ALTER TABLE `choice414100` ENABLE KEYS */;

--
-- Table structure for table `choice459567`
--

DROP TABLE IF EXISTS `choice459567`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice459567` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice459567`
--

/*!40000 ALTER TABLE `choice459567` DISABLE KEYS */;
INSERT INTO `choice459567` VALUES (1,1,1,'2'),(2,1,0,'3'),(3,1,0,'4'),(4,1,0,'5');
/*!40000 ALTER TABLE `choice459567` ENABLE KEYS */;

--
-- Table structure for table `choice512772`
--

DROP TABLE IF EXISTS `choice512772`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice512772` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice512772`
--

/*!40000 ALTER TABLE `choice512772` DISABLE KEYS */;
/*!40000 ALTER TABLE `choice512772` ENABLE KEYS */;

--
-- Table structure for table `choice588788`
--

DROP TABLE IF EXISTS `choice588788`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice588788` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice588788`
--

/*!40000 ALTER TABLE `choice588788` DISABLE KEYS */;
/*!40000 ALTER TABLE `choice588788` ENABLE KEYS */;

--
-- Table structure for table `choice648868`
--

DROP TABLE IF EXISTS `choice648868`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice648868` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice648868`
--

/*!40000 ALTER TABLE `choice648868` DISABLE KEYS */;
INSERT INTO `choice648868` VALUES (1,1,1,'j'),(2,1,0,'k'),(3,1,0,'k'),(4,1,0,'k');
/*!40000 ALTER TABLE `choice648868` ENABLE KEYS */;

--
-- Table structure for table `choice756998`
--

DROP TABLE IF EXISTS `choice756998`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice756998` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice756998`
--

/*!40000 ALTER TABLE `choice756998` DISABLE KEYS */;
INSERT INTO `choice756998` VALUES (1,1,0,'Daripada'),(2,1,1,'Ke'),(3,1,0,'Oleh'),(4,1,0,'Sejak');
/*!40000 ALTER TABLE `choice756998` ENABLE KEYS */;

--
-- Table structure for table `choice762749`
--

DROP TABLE IF EXISTS `choice762749`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice762749` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice762749`
--

/*!40000 ALTER TABLE `choice762749` DISABLE KEYS */;
INSERT INTO `choice762749` VALUES (1,1,1,'Berapa'),(2,1,0,'Apa'),(3,1,0,'Siapa');
/*!40000 ALTER TABLE `choice762749` ENABLE KEYS */;

--
-- Table structure for table `choice779107`
--

DROP TABLE IF EXISTS `choice779107`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice779107` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice779107`
--

/*!40000 ALTER TABLE `choice779107` DISABLE KEYS */;
/*!40000 ALTER TABLE `choice779107` ENABLE KEYS */;

--
-- Table structure for table `choice829165`
--

DROP TABLE IF EXISTS `choice829165`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice829165` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice829165`
--

/*!40000 ALTER TABLE `choice829165` DISABLE KEYS */;
INSERT INTO `choice829165` VALUES (9,1,0,'Helai'),(10,1,0,'Rumpun'),(11,1,1,'Cekak'),(12,1,0,'Batang');
/*!40000 ALTER TABLE `choice829165` ENABLE KEYS */;

--
-- Table structure for table `choice832181`
--

DROP TABLE IF EXISTS `choice832181`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice832181` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice832181`
--

/*!40000 ALTER TABLE `choice832181` DISABLE KEYS */;
/*!40000 ALTER TABLE `choice832181` ENABLE KEYS */;

--
-- Table structure for table `choice841737`
--

DROP TABLE IF EXISTS `choice841737`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice841737` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice841737`
--

/*!40000 ALTER TABLE `choice841737` DISABLE KEYS */;
/*!40000 ALTER TABLE `choice841737` ENABLE KEYS */;

--
-- Table structure for table `choice933841`
--

DROP TABLE IF EXISTS `choice933841`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice933841` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice933841`
--

/*!40000 ALTER TABLE `choice933841` DISABLE KEYS */;
INSERT INTO `choice933841` VALUES (1,1,1,'2'),(2,1,0,'11'),(3,1,0,'22'),(4,1,0,'0');
/*!40000 ALTER TABLE `choice933841` ENABLE KEYS */;

--
-- Table structure for table `list`
--

DROP TABLE IF EXISTS `list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `list` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sub_id` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` text COLLATE utf8_unicode_ci NOT NULL,
  `student_answer` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `list`
--

/*!40000 ALTER TABLE `list` DISABLE KEYS */;
INSERT INTO `list` VALUES (20,'75353','Chapter 1','question143368','choice143368','Chapter 1143368.php','student143368','mark143368'),(21,'75353','hello','question588788','choice588788','hello588788.php','student588788','mark588788'),(22,'75353','Chapter 5','question841737','choice841737','Chapter 5841737.php','student841737','mark841737'),(23,'75353','Chapter 4','question256371','choice256371','Chapter 4256371.php','student256371','mark256371'),(24,'75353','Chapter 6','question356307','choice356307','Chapter 6356307.php','student356307','mark356307'),(25,'75353','test','question512772','choice512772','test512772.php','student512772','mark512772'),(26,'75353','2nd test','question829165','choice829165','2nd test829165.php','student829165','mark829165'),(27,'75353','try','question648868','choice648868','try648868.php','student648868','mark648868'),(28,'75353','chap 1','question779107','choice779107','chap 1779107.php','student779107','mark779107'),(29,'75353','chapp','question832181','choice832181','chapp832181.php','student832181','mark832181'),(30,'75353','tesstt','question414100','choice414100','tesstt414100.php','student414100','mark414100'),(31,'75353','chhh','question933841','choice933841','chhh933841.php','student933841','mark933841'),(32,'75353','jj','question307645','choice307645','jj307645.php','student307645','mark307645'),(33,'18858','bab 1','question459567','choice459567','bab 1459567.php','student459567','mark459567'),(34,'75353','1','question762749','choice762749','1762749.php','student762749','mark762749'),(35,'75353','2','question756998','choice756998','2756998.php','student756998','mark756998');
/*!40000 ALTER TABLE `list` ENABLE KEYS */;

--
-- Table structure for table `mark143368`
--

DROP TABLE IF EXISTS `mark143368`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark143368` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark143368`
--

/*!40000 ALTER TABLE `mark143368` DISABLE KEYS */;
INSERT INTO `mark143368` VALUES ('jay','7','100');
/*!40000 ALTER TABLE `mark143368` ENABLE KEYS */;

--
-- Table structure for table `mark256371`
--

DROP TABLE IF EXISTS `mark256371`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark256371` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark256371`
--

/*!40000 ALTER TABLE `mark256371` DISABLE KEYS */;
/*!40000 ALTER TABLE `mark256371` ENABLE KEYS */;

--
-- Table structure for table `mark307645`
--

DROP TABLE IF EXISTS `mark307645`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark307645` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark307645`
--

/*!40000 ALTER TABLE `mark307645` DISABLE KEYS */;
/*!40000 ALTER TABLE `mark307645` ENABLE KEYS */;

--
-- Table structure for table `mark356307`
--

DROP TABLE IF EXISTS `mark356307`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark356307` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark356307`
--

/*!40000 ALTER TABLE `mark356307` DISABLE KEYS */;
/*!40000 ALTER TABLE `mark356307` ENABLE KEYS */;

--
-- Table structure for table `mark414100`
--

DROP TABLE IF EXISTS `mark414100`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark414100` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark414100`
--

/*!40000 ALTER TABLE `mark414100` DISABLE KEYS */;
INSERT INTO `mark414100` VALUES ('joe','1','100'),('jay','0','0');
/*!40000 ALTER TABLE `mark414100` ENABLE KEYS */;

--
-- Table structure for table `mark459567`
--

DROP TABLE IF EXISTS `mark459567`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark459567` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark459567`
--

/*!40000 ALTER TABLE `mark459567` DISABLE KEYS */;
/*!40000 ALTER TABLE `mark459567` ENABLE KEYS */;

--
-- Table structure for table `mark512772`
--

DROP TABLE IF EXISTS `mark512772`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark512772` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark512772`
--

/*!40000 ALTER TABLE `mark512772` DISABLE KEYS */;
/*!40000 ALTER TABLE `mark512772` ENABLE KEYS */;

--
-- Table structure for table `mark588788`
--

DROP TABLE IF EXISTS `mark588788`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark588788` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark588788`
--

/*!40000 ALTER TABLE `mark588788` DISABLE KEYS */;
/*!40000 ALTER TABLE `mark588788` ENABLE KEYS */;

--
-- Table structure for table `mark648868`
--

DROP TABLE IF EXISTS `mark648868`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark648868` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark648868`
--

/*!40000 ALTER TABLE `mark648868` DISABLE KEYS */;
INSERT INTO `mark648868` VALUES ('jay','1','100');
/*!40000 ALTER TABLE `mark648868` ENABLE KEYS */;

--
-- Table structure for table `mark756998`
--

DROP TABLE IF EXISTS `mark756998`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark756998` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark756998`
--

/*!40000 ALTER TABLE `mark756998` DISABLE KEYS */;
/*!40000 ALTER TABLE `mark756998` ENABLE KEYS */;

--
-- Table structure for table `mark762749`
--

DROP TABLE IF EXISTS `mark762749`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark762749` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark762749`
--

/*!40000 ALTER TABLE `mark762749` DISABLE KEYS */;
INSERT INTO `mark762749` VALUES ('jay','1','100');
/*!40000 ALTER TABLE `mark762749` ENABLE KEYS */;

--
-- Table structure for table `mark779107`
--

DROP TABLE IF EXISTS `mark779107`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark779107` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark779107`
--

/*!40000 ALTER TABLE `mark779107` DISABLE KEYS */;
/*!40000 ALTER TABLE `mark779107` ENABLE KEYS */;

--
-- Table structure for table `mark829165`
--

DROP TABLE IF EXISTS `mark829165`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark829165` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark829165`
--

/*!40000 ALTER TABLE `mark829165` DISABLE KEYS */;
INSERT INTO `mark829165` VALUES ('joe','0','0'),('jay','0','0');
/*!40000 ALTER TABLE `mark829165` ENABLE KEYS */;

--
-- Table structure for table `mark832181`
--

DROP TABLE IF EXISTS `mark832181`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark832181` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark832181`
--

/*!40000 ALTER TABLE `mark832181` DISABLE KEYS */;
/*!40000 ALTER TABLE `mark832181` ENABLE KEYS */;

--
-- Table structure for table `mark841737`
--

DROP TABLE IF EXISTS `mark841737`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark841737` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark841737`
--

/*!40000 ALTER TABLE `mark841737` DISABLE KEYS */;
/*!40000 ALTER TABLE `mark841737` ENABLE KEYS */;

--
-- Table structure for table `mark933841`
--

DROP TABLE IF EXISTS `mark933841`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark933841` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark933841`
--

/*!40000 ALTER TABLE `mark933841` DISABLE KEYS */;
INSERT INTO `mark933841` VALUES ('jay','1','100');
/*!40000 ALTER TABLE `mark933841` ENABLE KEYS */;

--
-- Table structure for table `question143368`
--

DROP TABLE IF EXISTS `question143368`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question143368` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question143368`
--

/*!40000 ALTER TABLE `question143368` DISABLE KEYS */;
INSERT INTO `question143368` VALUES (2,'_____________, ya! Kamu jangan lupa menjemput Nani esok,” '),(3,'Berbekalkan _____________sekangkang kera, Ahmad bercucuk tanam untuk menampung keluarganya.'),(4,'Borhan telah berjanji kepada ____________ bahawa _______________ tidak akan mengulangi kesalahan itu lagi.'),(5,'Budak itu tiba-tiba saja __________ kain itu hingga terkoyak separuh.'),(6,'Selva terpaksa ________________ kaki untuk pulang ke rumah setelah dia __________ dengan Aliah.'),(7,'Dia tidak berjaya ___________ cakera itu melepasi garisan kelayakan.'),(1,'Wak Lamin meminta se____________ daun sirih sebagai pengeras untuk mengubati penyakit Pak Dol.');
/*!40000 ALTER TABLE `question143368` ENABLE KEYS */;

--
-- Table structure for table `question256371`
--

DROP TABLE IF EXISTS `question256371`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question256371` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question256371`
--

/*!40000 ALTER TABLE `question256371` DISABLE KEYS */;
/*!40000 ALTER TABLE `question256371` ENABLE KEYS */;

--
-- Table structure for table `question307645`
--

DROP TABLE IF EXISTS `question307645`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question307645` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question307645`
--

/*!40000 ALTER TABLE `question307645` DISABLE KEYS */;
/*!40000 ALTER TABLE `question307645` ENABLE KEYS */;

--
-- Table structure for table `question356307`
--

DROP TABLE IF EXISTS `question356307`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question356307` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question356307`
--

/*!40000 ALTER TABLE `question356307` DISABLE KEYS */;
/*!40000 ALTER TABLE `question356307` ENABLE KEYS */;

--
-- Table structure for table `question414100`
--

DROP TABLE IF EXISTS `question414100`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question414100` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question414100`
--

/*!40000 ALTER TABLE `question414100` DISABLE KEYS */;
INSERT INTO `question414100` VALUES (1,'Test');
/*!40000 ALTER TABLE `question414100` ENABLE KEYS */;

--
-- Table structure for table `question459567`
--

DROP TABLE IF EXISTS `question459567`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question459567` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question459567`
--

/*!40000 ALTER TABLE `question459567` DISABLE KEYS */;
INSERT INTO `question459567` VALUES (1,'1+1');
/*!40000 ALTER TABLE `question459567` ENABLE KEYS */;

--
-- Table structure for table `question512772`
--

DROP TABLE IF EXISTS `question512772`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question512772` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question512772`
--

/*!40000 ALTER TABLE `question512772` DISABLE KEYS */;
/*!40000 ALTER TABLE `question512772` ENABLE KEYS */;

--
-- Table structure for table `question588788`
--

DROP TABLE IF EXISTS `question588788`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question588788` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question588788`
--

/*!40000 ALTER TABLE `question588788` DISABLE KEYS */;
/*!40000 ALTER TABLE `question588788` ENABLE KEYS */;

--
-- Table structure for table `question648868`
--

DROP TABLE IF EXISTS `question648868`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question648868` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question648868`
--

/*!40000 ALTER TABLE `question648868` DISABLE KEYS */;
INSERT INTO `question648868` VALUES (1,'gg');
/*!40000 ALTER TABLE `question648868` ENABLE KEYS */;

--
-- Table structure for table `question756998`
--

DROP TABLE IF EXISTS `question756998`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question756998` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question756998`
--

/*!40000 ALTER TABLE `question756998` DISABLE KEYS */;
INSERT INTO `question756998` VALUES (1,'Polis melepaskan dua das tembakan___________arah perompak itu.');
/*!40000 ALTER TABLE `question756998` ENABLE KEYS */;

--
-- Table structure for table `question762749`
--

DROP TABLE IF EXISTS `question762749`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question762749` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question762749`
--

/*!40000 ALTER TABLE `question762749` DISABLE KEYS */;
INSERT INTO `question762749` VALUES (1,'_____________kah harga beg sekolah itu?');
/*!40000 ALTER TABLE `question762749` ENABLE KEYS */;

--
-- Table structure for table `question779107`
--

DROP TABLE IF EXISTS `question779107`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question779107` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question779107`
--

/*!40000 ALTER TABLE `question779107` DISABLE KEYS */;
/*!40000 ALTER TABLE `question779107` ENABLE KEYS */;

--
-- Table structure for table `question829165`
--

DROP TABLE IF EXISTS `question829165`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question829165` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question829165`
--

/*!40000 ALTER TABLE `question829165` DISABLE KEYS */;
INSERT INTO `question829165` VALUES (1,'d');
/*!40000 ALTER TABLE `question829165` ENABLE KEYS */;

--
-- Table structure for table `question832181`
--

DROP TABLE IF EXISTS `question832181`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question832181` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question832181`
--

/*!40000 ALTER TABLE `question832181` DISABLE KEYS */;
/*!40000 ALTER TABLE `question832181` ENABLE KEYS */;

--
-- Table structure for table `question841737`
--

DROP TABLE IF EXISTS `question841737`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question841737` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question841737`
--

/*!40000 ALTER TABLE `question841737` DISABLE KEYS */;
/*!40000 ALTER TABLE `question841737` ENABLE KEYS */;

--
-- Table structure for table `question933841`
--

DROP TABLE IF EXISTS `question933841`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question933841` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question933841`
--

/*!40000 ALTER TABLE `question933841` DISABLE KEYS */;
INSERT INTO `question933841` VALUES (1,'1 plus 1');
/*!40000 ALTER TABLE `question933841` ENABLE KEYS */;

--
-- Table structure for table `student143368`
--

DROP TABLE IF EXISTS `student143368`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student143368` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student143368`
--

/*!40000 ALTER TABLE `student143368` DISABLE KEYS */;
INSERT INTO `student143368` VALUES ('jay','1',61,'1'),('jay','2',23,'1'),('jay','3',26,'1'),('jay','4',32,'1'),('joe','1',64,'0'),('joe','2',24,'0'),('joe','3',28,'0'),('joe','4',29,'0'),('joe','5',35,'0'),('joe','6',38,'1'),('joe','7',43,'0'),('testing','1',61,'1'),('testing','2',23,'1'),('testing','3',26,'1'),('testing','4',32,'1'),('testing','5',34,'1'),('testing','6',38,'1'),('testing','7',42,'0'),('jay','5',34,'1'),('jay','6',38,'1'),('jay','7',44,'1');
/*!40000 ALTER TABLE `student143368` ENABLE KEYS */;

--
-- Table structure for table `student256371`
--

DROP TABLE IF EXISTS `student256371`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student256371` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student256371`
--

/*!40000 ALTER TABLE `student256371` DISABLE KEYS */;
/*!40000 ALTER TABLE `student256371` ENABLE KEYS */;

--
-- Table structure for table `student307645`
--

DROP TABLE IF EXISTS `student307645`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student307645` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student307645`
--

/*!40000 ALTER TABLE `student307645` DISABLE KEYS */;
/*!40000 ALTER TABLE `student307645` ENABLE KEYS */;

--
-- Table structure for table `student356307`
--

DROP TABLE IF EXISTS `student356307`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student356307` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student356307`
--

/*!40000 ALTER TABLE `student356307` DISABLE KEYS */;
/*!40000 ALTER TABLE `student356307` ENABLE KEYS */;

--
-- Table structure for table `student414100`
--

DROP TABLE IF EXISTS `student414100`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student414100` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student414100`
--

/*!40000 ALTER TABLE `student414100` DISABLE KEYS */;
INSERT INTO `student414100` VALUES ('joe','1',5,'1'),('jay','1',0,'0');
/*!40000 ALTER TABLE `student414100` ENABLE KEYS */;

--
-- Table structure for table `student459567`
--

DROP TABLE IF EXISTS `student459567`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student459567` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student459567`
--

/*!40000 ALTER TABLE `student459567` DISABLE KEYS */;
/*!40000 ALTER TABLE `student459567` ENABLE KEYS */;

--
-- Table structure for table `student512772`
--

DROP TABLE IF EXISTS `student512772`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student512772` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student512772`
--

/*!40000 ALTER TABLE `student512772` DISABLE KEYS */;
/*!40000 ALTER TABLE `student512772` ENABLE KEYS */;

--
-- Table structure for table `student588788`
--

DROP TABLE IF EXISTS `student588788`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student588788` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student588788`
--

/*!40000 ALTER TABLE `student588788` DISABLE KEYS */;
INSERT INTO `student588788` VALUES ('joe','1',0,'1'),('joe','2',0,'1');
/*!40000 ALTER TABLE `student588788` ENABLE KEYS */;

--
-- Table structure for table `student648868`
--

DROP TABLE IF EXISTS `student648868`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student648868` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student648868`
--

/*!40000 ALTER TABLE `student648868` DISABLE KEYS */;
INSERT INTO `student648868` VALUES ('joe','1',0,'1'),('jay','1',1,'1');
/*!40000 ALTER TABLE `student648868` ENABLE KEYS */;

--
-- Table structure for table `student756998`
--

DROP TABLE IF EXISTS `student756998`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student756998` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student756998`
--

/*!40000 ALTER TABLE `student756998` DISABLE KEYS */;
/*!40000 ALTER TABLE `student756998` ENABLE KEYS */;

--
-- Table structure for table `student762749`
--

DROP TABLE IF EXISTS `student762749`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student762749` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student762749`
--

/*!40000 ALTER TABLE `student762749` DISABLE KEYS */;
INSERT INTO `student762749` VALUES ('jay','1',1,'1');
/*!40000 ALTER TABLE `student762749` ENABLE KEYS */;

--
-- Table structure for table `student779107`
--

DROP TABLE IF EXISTS `student779107`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student779107` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student779107`
--

/*!40000 ALTER TABLE `student779107` DISABLE KEYS */;
/*!40000 ALTER TABLE `student779107` ENABLE KEYS */;

--
-- Table structure for table `student829165`
--

DROP TABLE IF EXISTS `student829165`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student829165` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student829165`
--

/*!40000 ALTER TABLE `student829165` DISABLE KEYS */;
INSERT INTO `student829165` VALUES ('joe','1',0,'0'),('jay','1',9,'0');
/*!40000 ALTER TABLE `student829165` ENABLE KEYS */;

--
-- Table structure for table `student832181`
--

DROP TABLE IF EXISTS `student832181`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student832181` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student832181`
--

/*!40000 ALTER TABLE `student832181` DISABLE KEYS */;
/*!40000 ALTER TABLE `student832181` ENABLE KEYS */;

--
-- Table structure for table `student841737`
--

DROP TABLE IF EXISTS `student841737`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student841737` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student841737`
--

/*!40000 ALTER TABLE `student841737` DISABLE KEYS */;
/*!40000 ALTER TABLE `student841737` ENABLE KEYS */;

--
-- Table structure for table `student933841`
--

DROP TABLE IF EXISTS `student933841`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student933841` (
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `is_true` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student933841`
--

/*!40000 ALTER TABLE `student933841` DISABLE KEYS */;
INSERT INTO `student933841` VALUES ('jay','1',1,'1');
/*!40000 ALTER TABLE `student933841` ENABLE KEYS */;

--
-- Dumping routines for database 'u779679936_quiz'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-16 13:45:21
