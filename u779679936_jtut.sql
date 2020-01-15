-- MySQL dump 10.16  Distrib 10.2.17-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u779679936_jtut
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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'upsr','primary school'),(2,'pt3','secondary school'),(3,'spm','secondary school');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

--
-- Table structure for table `confim_tutor`
--

DROP TABLE IF EXISTS `confim_tutor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confim_tutor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `edu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eduimg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12286 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confim_tutor`
--

/*!40000 ALTER TABLE `confim_tutor` DISABLE KEYS */;
INSERT INTO `confim_tutor` VALUES (12282,'proxy.duckduckgo.com.jpg','Lood1969','teacher','Awang Puteh','Mohd Suib','aipheex6u_2018@g-mailix.com','1981-12-31','Male','04787-7915','Kampung Tengah Mukim Tualang, Langgar Kedah, 06500','math110','sej120','Diploma','Lood1969.png','Lood1969432125484','69cb3ea317a32c4e6143e665fdb20b14');
/*!40000 ALTER TABLE `confim_tutor` ENABLE KEYS */;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (7,'joe','admin'),(8,'joe','lim');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `code` text COLLATE utf8_unicode_ci NOT NULL,
  `teacher` text COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

/*!40000 ALTER TABLE `file` DISABLE KEYS */;
/*!40000 ALTER TABLE `file` ENABLE KEYS */;

--
-- Table structure for table `platform`
--

DROP TABLE IF EXISTS `platform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `platform` (
  `no` int(100) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `code` text COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platform`
--

/*!40000 ALTER TABLE `platform` DISABLE KEYS */;
/*!40000 ALTER TABLE `platform` ENABLE KEYS */;

--
-- Table structure for table `reset_password`
--

DROP TABLE IF EXISTS `reset_password`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reset_password` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `hash` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reset_password`
--

/*!40000 ALTER TABLE `reset_password` DISABLE KEYS */;
INSERT INTO `reset_password` VALUES (6,'666@gmail.com','afda332245e2af431fb7b672a68b659d'),(7,'666@gmail.com','621bf66ddb7c962aa0d22ac97d69b793'),(8,'666@gmail.com','1905aedab9bf2477edc068a355bba31a'),(9,'666@gmail.com','185c29dc24325934ee377cfda20e414c'),(10,'666@gmail.com','f1b6f2857fb6d44dd73c7041e0aa0f19'),(11,'666@gmail.com','a0a080f42e6f13b3a2df133f073095dd'),(12,'666@gmail.com','7cbbc409ec990f19c78c75bd1e06f215'),(13,'666@gmail.com','d6baf65e0b240ce177cf70da146c8dc8'),(14,'666@gmail.com','289dff07669d7a23de0ef88d2f7129e7'),(15,'666@gmail.com','b1a59b315fc9a3002ce38bbe070ec3f5'),(16,'666@gmail.com','2b24d495052a8ce66358eb576b8912c8'),(17,'jkspui@gmail.com','67f7fb873eaf29526a11a9b7ac33bfac'),(18,'jkspui@gmail.com','84117275be999ff55a987b9381e01f96'),(19,'jkspui@gmail.com','3c59dc048e8850243be8079a5c74d079'),(20,'jkspui@gmail.com','8c235f89a8143a28a1d6067e959dd858'),(21,'jkspui@gmail.com','3295c76acbf4caaed33c36b1b5fc2cb1'),(22,'jkspui@gmail.com','217eedd1ba8c592db97d0dbe54c7adfc'),(23,'pewane@nyrmusic.com','cedebb6e872f539bef8c3f919874e9d7');
/*!40000 ALTER TABLE `reset_password` ENABLE KEYS */;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES (1,'bm110','SPM','BAHASA MELAYU','Guides for SPM students to create quality essays and gain excellence in their exam'),(2,'eng110','SPM','ENGLISH','Help the student improve their writing skills and scoring in SPM English Paper.<br>\r\n'),(3,'sej110','SPM','SEJARAH','Help student to understands the history of Malaysia and score well in SPM sejarah Paper'),(4,'sci110','SPM','SCIENCE','An effective support for the student to understand, analysing the science process skills'),(5,'math110','SPM','MATHEMATICS','Help SPM student to understand and answer math questions better with the correct format'),(6,'pi110','SPM','ISLAMIC EDUCATION','Teach knowledge about Islam and give tips to get excellent results in this subject'),(7,'pm110','SPM','MORAL EDUCATION','Teach moral values ​​and help students answer questions in the right format.<br>'),(8,'bm120','PT3','BAHASA MELAYU','Train students to answer actual exam questions<br>'),(9,'eng120','PT3','ENGLISH','Help PT3 Student about english knowledge and also format for the PT3 exam'),(10,'sej120','PT3','SEJARAH','A Guide that help student to understands the history of Malysia and easily answer tricky question in PT3'),(11,'sci120','PT3','SCIENCE','Help to easily understand how to applying, analyzing and evaluating the science subject(PT3)'),(12,'math120','PT3','MATHEMATICS','Train Student to easily learn and guide them to use a proper format in Mathematics'),(13,'pi120','PT3','ISLAMIC EDUCATION','Teach knowledge about Islam and give tips to get excellent results in this subject'),(14,'kh120','PT3','KEMAHIRAN HIDUP','Help UPSR student with Kemahiran Hidup subject and applying it in real life.<br>'),(15,'geo120','PT3','GEOGRAFI','Help PT3 students with geografi subject so that they can score well in exam'),(16,'bm130','UPSR','BAHASA MELAYU','Guides for UPSR students to create quality essays and gain excellence in their exam'),(17,'eng130','UPSR','ENGLISH','Help UPSR Student to score their english paper and also format for the exam'),(18,'sci130','UPSR','SCIENCE','Help to easily understand how to applying, analyzing and evaluating the science subject'),(19,'math130','UPSR','MATHEMATICS','Train student to easily learn and guide them to use a proper format in Mathematics');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(25) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor`
--

/*!40000 ALTER TABLE `tutor` DISABLE KEYS */;
INSERT INTO `tutor` VALUES (1,'bm130','joe',75353,'joe'),(94,'eng130','joe',75358,'joe'),(106,'eng110','Wacky Jacky',39919,'WackyJacky'),(107,'sci110','Wacky Jacky',94025,'WackyJacky'),(114,'bm130','Nisuneyu Nisuneyo',21415,'nisuneyu'),(115,'eng130','Nisuneyu Nisuneyo',69903,'nisuneyu'),(122,'sej110','Nul Azrie',32413,'Artmizz'),(123,'pi110','Nul Azrie',71560,'Artmizz'),(124,'bm110','Murni Khamis',28474,'murnie'),(125,'eng110','Murni Khamis',75997,'murnie'),(126,'sej110','Dian Yaacob',30214,'dian1997'),(127,'sci110','Dian Yaacob',86888,'dian1997'),(128,'math110','Latipah Elyas',50865,'latipah1312'),(129,'pi110','Latipah Elyas',73399,'latipah1312'),(130,'pm110','Biru Zamrud',18858,'Earat1980'),(131,'bm120','Biru Zamrud',78830,'Earat1980'),(132,'eng120','Haryati Izzati',38720,'stittair'),(133,'sej120','Haryati Izzati',68437,'stittair'),(134,'sci120','Nur Meerah Ishak Alie',20514,'meerah1987'),(135,'math120','Nur Meerah Ishak Alie',72531,'meerah1987'),(136,'pi120','Munah Awang',47799,'awgude10v3'),(137,'kh120','Munah Awang',89248,'awgude10v3'),(138,'geo120','Adi Putri Jenab',18981,'adieprice'),(139,'bm130','Adi Putri Jenab',98058,'adieprice'),(140,'sci130','Kuning Jaya',30754,'aiB1ootheg'),(141,'eng130','Kuning Jaya',74377,'aiB1ootheg'),(142,'sci130','Esah Deris',22398,'3sahssg12'),(143,'math130','Esah Deris',91842,'3sahssg12'),(144,'pi110','Siti Nurhaliza',18858,'Siti'),(145,'sci110','Siti Nurhaliza',97629,'Siti'),(146,'sej120','Mariam Adi',45970,'weeptybae'),(147,'geo120','Mariam Adi',67685,'weeptybae');
/*!40000 ALTER TABLE `tutor` ENABLE KEYS */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fistname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat_color` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `online_status` int(11) NOT NULL,
  `dp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('3sahssg12','d38901788c533e8286cb6400b40b386d','teacher','aisce1994_qwert@xgmailoo.com','Esah','Deris','1994-12-22','Female','04468-0523','Jus 50 Kampung Sungai Lentang, Gurun Kedah, 08800 ','#f55f33',0,'user.png','3sahssg121167245918'),('adieprice','c37a21223db1cda645af1264df751f7f','teacher','adieprice2020@g-mailix.com','Adi Putri','Jenab','1989-02-22','Male','(603) 56313053','28 Pangsapuri Aman Jalan PJS 10/11 Taman Sri Subang, Subang Jaya, 46000','#f5965e',0,'35985150_1955808364709239_2571351032684609536_n.jpg','adieprice581826333'),('admin','21232f297a57a5a743894a0e4a801fc3','admin','jwan@jtutor.ml','Admin','JTutor','','Male','','Admin','',0,'Admin.png',''),('aiB1ootheg','927e838a450e2fe6225edfc3d12e2463','teacher','aib1ootheg_sting@g-mailix.com','Kuning','Jaya','1990-04-04','Female','07351-3287','A 4 Jln Cemperai Kampung Baru Pandan, Johor, 81100 ','#6fe643',0,'Liga-Super-Kesatuan-Ragbi-Malaysia-2015-Keris-Conlay-vs-Politeknik-Malaysia-001.jpg','aiB1ootheg2003551715'),('Amira','ecbb7a118a125d439dd8324fe3e211d1','student','nnnamira93@gmail.com','Nur','Amirah','1998-11-23','Female','0138238220','Matang, Kuching, 93050','#e885ef',0,'ryan.jpg','Amira1377412579'),('Artmizz','358c850b3836ae02b1d8b319d86d435f','teacher','garethazry@gmail.com','Nul','Azrie','1997-11-21','Male','011140660669','Asrama 805, Kuching, 93050','#b55496',0,'user.png','Artmizz1725317349'),('awgude10v3','8b6a80c3cf2cbd5f967063618dc54f39','teacher','munah_awgude10v3@g-mailix.com','Munah','Awang','1983-05-14','Female','(603) 41433516','62 Jalan 8/22E Danau Kota, Kuala Lumpur, 53300','#8acb7b',0,'01dd1d63b2bf92723a50e225d7834f19.JPG','awgude10v31987580003'),('Belle96','ee92f46de541624138d2c59926911539','student','asabelle.kkss@gmail.com','Asabelle','Jubang','1996-06-13','Female','01125119280','hutan, monkey, 95980','#a7c4a8',0,'user.png','Belle96362076908'),('dian1997','4dbf29d90d5780cab50897fb955e4373','teacher','dian_yacob@polyswarms.com','Dian','Yaacob','1997-01-24','Female','036185-4933','4703 Jln Sungai Tua Kampung Mahkota 68100 Batu Caves Batu Caves 68100 Malaysia Batu Caves, Selangor, 68100','#b95211',0,'user.png','dian19971218841555'),('Earat1980','80b618ebcac7aa97a6dac2ba65cb7e36','teacher','earat1980_biru@spindl-e.com','Biru','Zamrud','1980-02-16','Male','09790-3903','No. 19 Mini Stadium Jln Pasir Pekan, Pasir Mas, 17000','#545ea0',0,'user.png','Earat19801961571279'),('Emerlyn','bd045a8545edc08d51cadf38cb168f80','student','emerlyntrisha@gmail.com','Emerlyn','Trisha','1998-10-19','Female','0123456789','1029, lorong c, Kuching , 93350','#0dc6ce',0,'Koala.jpg','Emerlyn36675685'),('Gabbrel','827ccb0eea8a706c4c34a16891f84e7b','student','gabbrelneh@gmail.com','Gab','Neh','1953-01-09','Female','999','Poli, Kuching, 93250','#7eb8dc',0,'images.jpg','Gabbrel1082498858'),('gangangan','e807f1fcf82d132f9bb018ca6738a19f','student','ganliting98@gmail.com','Gan','Li Ting','1998-05-05','Female','0109610811','KAMPUNG MOLOSON, TAMBUNAN, 89650','#ebf519',0,'user.png','gangangan2096582453'),('jamespui','202cb962ac59075b964b07152d234b70','student','jkspui@gmail.com','james','pui','1997-06-02','Male','0123456789','Jalan Semariang, Petra Jaya, 93050 Kuching, Sarawak, Kuching, 93250','#6e0b41',0,'user.png','jamespui600109136'),('jay ','baba327d241746ee0829e7e88117d4d5','student','jay@jtutor.ml','Jay','Win Juin','2007-06-12','Male','14849188694','abcdefghijklmnopqrstuvwxyz, Kuching, 93050','#800000',0,'default_256_256.png','jay530208002'),('joe','8ff32489f92f33416694be8fdc2d4c22','teacher','joe@jtutor.ml','Joerizal','Pilip','1998-02-01','Male','01084633621','75 Kg Sg Ramal Luar, 43000 Kajang, Selangor, Malaysia ','#4286f4',1,'How_to_become_a_teacher_612px.jpg',''),('latipah1312','5cf68969fb67aa6082363a6d4e6468e2','teacher','latipah_elyas@g-mailix.com','Latipah','Elyas','1983-07-11','Female','06658-1654','1 1464 Jln Melor 1 Taman Jimah Jaya, Labu, 71960','#db30a8',0,'user.png','latipah1312956902661'),('Liewchiew','25d55ad283aa400af464c76d713c07ad','student','liewchiew1234@gmail.com','Liew','King chiew','1998-03-02','Male','0165766010','Lot3153 skim penempatan baru, jalan Batu kawa,desa wira, Kuching, 93250','#c879a6',0,'user.png','Liewchiew901889874'),('lim','202cb962ac59075b964b07152d234b70','student','666@gmail.com','max','lim','1997-10-01','Male','012-3456789','abcdefghijklmnopqrstuvwxyz, Kuching, 93050','#786392',0,'user.png','lim415789803'),('meerah1987','7a02741932bb4c9d3920fbc2f4b6080f','teacher','meerah_ahyae@xgmailoo.com','Nur Meerah','Ishak Alie','1987-02-23','Female','09790-2175','W2/203 Jln Hospital, Pasir Mas, 17000','#11ca8b',0,'cikgu-meera.jpg','meerah19871520857917'),('Mia','e807f1fcf82d132f9bb018ca6738a19f','student','Jowismynickname98@gmail.com','mia','sara','1999-03-04','Female','+601112088068','KAMPUNG MOLOSON, TAMBUNAN, 89650','#e86aa3',0,'user.png','Mia335067145'),('murnie','67c08c98984cc2bc4b9d1f0d2fe6726a','teacher','murni_khamis@xgmailoo.com','Murni','Khamis','1996-09-20','Female','036185-4933','4703 Jln Sungai Tua Kampung Mahkota 68100 Batu Caves Batu Caves, Selangor, 68100','#f7206c',0,'user.png','murnie1977845272'),('N.sfina','772010e98dbfe76c82388f9adec222a5','student','sufinajamir4@gmail.com','Sufina','Jamir','1998-08-26','Female','01114047216','Kampung Melayu, Kota Samarahan, 94300','#7ece3f',0,'user.png','N.sfina807036264'),('Nadzirah','24ee4147ef1cda053a75b5c8700a72aa','student','nurfatiabdillah@gmail.com','Nadzirah','Abdillah','1998-01-04','Female','0169070298','Taman Sepakat Jaya, Kuching, 93050','#a73ca3',0,'user.png','Nadzirah1927450971'),('nisuneyu','4cfe94fcc9db2f0a16ba44fa5b71d8ec','teacher','nagosu@dim-coin.com','nisuneyu','nisuneyo','1998-01-04','Female','0102345321','asdasdasd, asd, 9809','#8ea94f',0,'user.png','nisuneyu1687033291'),('Samson','202cb962ac59075b964b07152d234b70','student','mizantuah@gmail.com','Hamizan','Tuah','1998-12-07','Male','0138216901','halopulis, Bintulu, 98000','#2bc8d5',0,'user.png','Samson483887636'),('Siti','17f98ddf040204eda0af36a108cbdea4','teacher','rafuvalazi@xgmailoo.com','Siti','Nurhaliza','1992-11-29','Female','+601112088068','KAMPUNG MOLOSON, TAMBUNAN, 89650','#36fd73',0,'siti-nurhaliza.jpg','Siti1425890654'),('stittair','2f4059ce1227f021edc5d9c6f0f17dc1','teacher','stittair_zabeadah@spindl-e.com','Haryati','Izzati','1993-03-24','Male','07433-1711','16 Jln Zabedah, Batu Pahat, 83000','#2ce8dc',0,'d9313ce5104091fd92cb155adf43a29f_400x400.jpeg','stittair433408919'),('Typhoon168','535a13f89b2c896cab22349780bccd4d','student','Funnymax97@yahoo.com','Max','Typhoon','1997-06-04','Male','0178161068','Kuching jalan landeh, Kuching, 93250','#5c10af',0,'user.png','Typhoon168567064438'),('WackyJacky','766e428d1e232bbdd58664b41346196c','teacher','jaywinjuin@gmail.com','Wacky','Jacky','2004-02-09','Male','01622679455','23000, sabah, 89008','#e0c7ce',0,'user.png','WackyJacky534289394'),('weeptybae','ddf9029977a61241841edeae15e9b53f','teacher','pewane@nyrmusic.com','Mariam','Adi','0198-01-23','Female','09712-9079','75F Jln Cabang 3 Peringat, Kelantan, 16010','#7608ea',0,'user.png','weeptybae722538773');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

--
-- Table structure for table `user_course`
--

DROP TABLE IF EXISTS `user_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_course` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(25) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_course`
--

/*!40000 ALTER TABLE `user_course` DISABLE KEYS */;
INSERT INTO `user_course` VALUES (1,'jay','bm130',75353),(37,'Emerlyn','bm130',75353),(39,'jay','bm130',98058);
/*!40000 ALTER TABLE `user_course` ENABLE KEYS */;

--
-- Dumping routines for database 'u779679936_jtut'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-16 13:45:14
