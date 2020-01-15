-- MySQL dump 10.16  Distrib 10.2.17-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u779679936_chat
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
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_person_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `chat_value` varchar(100) CHARACTER SET latin1 NOT NULL,
  `chat_color` text CHARACTER SET latin1 NOT NULL,
  `chat_time` time DEFAULT NULL,
  `chat_date` date NOT NULL,
  `chat_from` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat_to` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (241,'joe','test','#4286f4','01:11:19','2018-10-09','joe','admin','0'),(242,'admin','test','','01:33:48','2018-10-09','admin','joe','0'),(243,'admin','s','','01:40:41','2018-10-09','admin','joe','0'),(244,'joe','test','#4286f4','03:05:51','2018-10-09','joe','jay','0'),(245,'joe','aasdasd','#4286f4','03:09:28','2018-10-09','joe','jay','0'),(246,'joe','rrrr','#4286f4','03:12:43','2018-10-09','joe','jay','0'),(247,'jay','test','#800000','03:20:03','2018-10-09','jay','joe','0'),(248,'jay','test','#800000','03:21:19','2018-10-09','jay','admin','1'),(249,'jay','test','#800000','03:21:24','2018-10-09','jay','admin','1'),(250,'joe','hi','#4286f4','00:32:16','2018-10-10','joe','Gabbrel','1'),(251,'jay','hello','#800000','10:40:32','2018-10-10','jay','joe','0');
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;

--
-- Dumping routines for database 'u779679936_chat'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-16 13:45:00
