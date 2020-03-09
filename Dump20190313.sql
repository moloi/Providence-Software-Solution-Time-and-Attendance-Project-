CREATE DATABASE  IF NOT EXISTS `providencetms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `providencetms`;
-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: sql41.jnb2.host-h.net    Database: providencetms
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB-1~jessie

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
-- Table structure for table `TestDemo`
--

DROP TABLE IF EXISTS `TestDemo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TestDemo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TestDemo`
--

LOCK TABLES `TestDemo` WRITE;
/*!40000 ALTER TABLE `TestDemo` DISABLE KEYS */;
INSERT INTO `TestDemo` VALUES (4,'eric','eric@gami.com'),(5,'eric','eric@gami.com'),(6,'eric','eric@gami.com'),(7,'kiran','kiran.challagali@providencesoft.com');
/*!40000 ALTER TABLE `TestDemo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `business_trip`
--

DROP TABLE IF EXISTS `business_trip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business_trip` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `userId` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slocation` varchar(200) NOT NULL,
  `sgps` varchar(50) DEFAULT NULL,
  `start_time` varchar(50) NOT NULL,
  `dlocation` varchar(200) NOT NULL,
  `dgps` varchar(50) DEFAULT NULL,
  `end_time` varchar(50) NOT NULL,
  `travel_time` varchar(50) DEFAULT NULL,
  `distance` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  `approver` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_on` datetime NOT NULL,
  `dep_pic` longblob,
  `dest_pic` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `business_trip`
--

LOCK TABLES `business_trip` WRITE;
/*!40000 ALTER TABLE `business_trip` DISABLE KEYS */;
INSERT INTO `business_trip` VALUES (81,'20','Emmanuel Mulea','Wendywood, Sandton, 2090, South Africa',NULL,'7/31/2017, 3:59:49 PM','Jones Rd, Bartlett AH, Boksburg, 1451, South Africa',NULL,'7/31/2017, 3:59:49 PM','26 mins','57.4 Km','Site Visit','Rajesh@providencesoftware.co.za','In Progress','2017-07-31 15:59:49',NULL,NULL),(82,'20','Emmanuel Mulea','Wendywood, Sandton, 2090, South Africa',NULL,'8/1/2017, 12:28:39 PM','Rtt Group (Pty) Ltd, Jones Road, Boksburg, South Africa',NULL,'8/1/2017, 12:28:39 PM','26 mins','57.4 Km','Client Visit','Trishini.Naicker@Providencesoft.com','In Progress','2017-08-01 12:28:39',NULL,NULL),(83,'35','Edmore Ngoni','O.R. Tambo International Airport (JNB), 1 Jones Rd, Kempton Park, Johannesburg, 1632, South Africa',NULL,'2/9/2018, 11:11:11 AM','35 Western Service Rd, Wendywood, Sandton, 2148, South Africa',NULL,'2/9/2018, 11:11:11 AM','24 mins','53.4 Km','Client Visit','rajesh@providencesoftware.co.za','In Progress','2018-02-09 11:11:12',NULL,NULL),(84,'35','Edmore Ngoni','O.R. Tambo International Airport (JNB), 1 Jones Rd, Kempton Park, Johannesburg, 1632, South Africa',NULL,'2/9/2018, 11:14:23 AM','Kempton Park, South Africa',NULL,'2/9/2018, 11:14:23 AM','11 mins','13.6 Km','Site Visit','rajesh@providencesoftware.co.za','In Progress','2018-02-09 11:14:24',NULL,NULL);
/*!40000 ALTER TABLE `business_trip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_login_details`
--

DROP TABLE IF EXISTS `employee_login_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_login_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_no` int(11) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `work_location` varchar(100) NOT NULL,
  `GPS_location` varchar(100) NOT NULL,
  `reported_to` varchar(50) NOT NULL,
  `working_hours` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2588 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_login_details`
--

LOCK TABLES `employee_login_details` WRITE;
/*!40000 ALTER TABLE `employee_login_details` DISABLE KEYS */;
INSERT INTO `employee_login_details` VALUES (2575,19,'2017-07-28 17:05:40','2017-07-28 17:05:55','Office 35','lat:-26.08132000 lon:28.08645000','prabhakar.manikonda@providence.email','00:00:15'),(2576,19,'2017-07-28 17:06:05','2017-08-26 21:48:06','Office 35','lat:-26.08132000 lon:28.08645000','prabhakar.manikonda@providence.email','700:42:01'),(2577,7,'2017-07-31 14:47:35','2017-09-07 12:15:57','Office 35','lat:-26.08132000 lon:28.08645000','test@gmail.com','838:59:59'),(2578,20,'2017-08-08 10:22:37','0000-00-00 00:00:00','Office 35','lat:-26.08132000 lon:28.08645000','Rajesh@providencesoftware.co.za','00:00:00'),(2579,41,'2017-08-16 10:38:22','2017-08-16 10:39:42','Office 35','lat:-26.08132000 lon:28.08645000','edmore@Providencesoft.com','00:01:20'),(2580,41,'2017-08-16 10:41:31','0000-00-00 00:00:00','Office 35','lat:-26.08132000 lon:28.08645000','edmore@Providencesoft.com','00:00:00'),(2581,41,'2017-08-16 10:44:41','2017-08-17 08:53:18','Office 35','lat:-26.08132000 lon:28.08645000','edmore@Providencesoft.com','22:08:37'),(2582,41,'2017-08-17 08:53:49','0000-00-00 00:00:00','Office 35','lat:-26.08132000 lon:28.08645000','edmore@Providencesoft.com','00:00:00'),(2583,19,'2017-09-06 17:20:56','0000-00-00 00:00:00','Office 35','lat:-26.08132000 lon:28.08645000','prabhakar.manikonda@providence.email','00:00:00'),(2584,7,'2017-10-16 09:37:43','0000-00-00 00:00:00','Office 35','lat:-26.08132000 lon:28.08645000','test@gmail.com','00:00:00'),(2585,77,'2017-10-16 14:13:30','0000-00-00 00:00:00','RTT','lat:-26.16483830 lon:28.23365320','rajesh@providencesoftware.co.za','00:00:00'),(2586,35,'2018-02-09 11:11:57','2018-04-21 09:06:35','RTT','lat:-26.16483830 lon:28.23365320','rajesh@providencesoftware.co.za','838:59:59'),(2587,35,'2018-06-21 11:06:54','2018-09-02 22:13:24','RTT','lat:-26.16483830 lon:28.23365320','rajesh@providencesoftware.co.za','838:59:59');
/*!40000 ALTER TABLE `employee_login_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mcicontactus`
--

DROP TABLE IF EXISTS `mcicontactus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mcicontactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `msg` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mcicontactus`
--

LOCK TABLES `mcicontactus` WRITE;
/*!40000 ALTER TABLE `mcicontactus` DISABLE KEYS */;
INSERT INTO `mcicontactus` VALUES (3,'eddyngoni@gmail.com','Eddy Chauraya','This is a test for mci message queries.'),(4,'eddyngoni@gmail.com','Eddy Chauraya','Djdhdhdjdbdjbdjd'),(5,'rajguruwill@gmail.com','Rajendra Prasad Garryepelly','Gghhhj'),(6,'hildaangel.mci@gmail.com','hilda angel','Hi test message'),(7,'hildaangel.mci@gmail.com','hilda angel','Hi test message'),(8,'hildaangel.mci@gmail.com','hilda angel','Hi test message'),(9,'riyazkapsi@gmail.com','Riyaz K','Testing mesg'),(10,'maqubelat@yahoo.com','Mbuyi Mukuna Thando','Testing'),(11,'doctianenricuso@gmail.com','Christian Enricuso','Greetings! I just would like to ask where in Dubai will the congress be?'),(12,'rolandpm@hotmail.com','Roland Pizarro','Buenos dias... les escribo desde PerÃº.. soy el Dr. Roland Pizarro.. me pueden dar informacion de cuando me puedo inscribir.. los costos y formas de pago... muchas gracias espero su respuesta'),(13,'rolandpm@hotmail.com','Roland Pizarro','Cuando puedo inscribirme y los costos..'),(14,'rolandpm@hotmail.com','Roland Pizarro','Como me puedo inscribir..costos y forma de pago'),(15,'moreirasavio72@gmail.com','SÃ¡vio Moreira','Wich hotels will be available by the Congress?Kind regards,SÃ¡vio PicanÃ§o, MD Bariatric Surgeon BRAZIL'),(16,'drvillalobosalva@msn.com','Alfonso Villalobos Alva','Please send information about the Venue or Conference  Center and the hotels for participants. We need a lot of time for planning this trip. Tank you'),(17,'rolandpm@hotmail.com','Roland Pizarro','Buenas tardes... como puedo hacer para inscribirme al congreso..'),(18,'rolandpm@hotmail.com','Roland Pizarro','Para poder inscribirme por favor'),(19,'rolandpm@hotmail.com','Roland Pizarro','Buenos dias como hago para inscribirme... me podrian dar mas inforne?... gracias'),(20,'rolandpm@hotmail.com','Roland Pizarro','Para la inscripcion por favor'),(21,'rolandpm@hotmail.com','Roland Pizarro','Para inscribirme...'),(22,'acevesma1@gmail.com','Manuel Aceves','I am from Mexico. Could you tell me if I need some visa to go to emirates? And if the answer is yes please give me some directions to obtain itThank you in advance.'),(23,'faroja@hadassah.org.il','Mohammad Faroja','Halo,when the registration startet?'),(24,'lvkatz@hotmail.com','Leon Katz','Do American Citizens require a visa to come to Dubai?'),(25,'arnaldo.lacombe@gmail.com','Arnaldo Lacombe','Iâ€™d like to know how can I do my subscriptionTks'),(26,'heperco@hotmail.com','Hector Perez','Hi cant find info on where the co grass hall will be and what are the host hotels??'),(27,'heperco@hotmail.com','Hector Perez','Hi cant find info on where the co grass hall will be and what are the host hotels??'),(28,'touficata@gmail.com','Ata Toufic','Good morning. I would like to know how to get my cme points. Sorry being late. Thank for your help');
/*!40000 ALTER TABLE `mcicontactus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mciregister`
--

DROP TABLE IF EXISTS `mciregister`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mciregister` (
  `idmciregister` int(11) NOT NULL AUTO_INCREMENT,
  `mci_title` varchar(45) DEFAULT NULL,
  `mci_fname` varchar(100) DEFAULT NULL,
  `mci_lname` varchar(45) DEFAULT NULL,
  `mci_email` varchar(45) NOT NULL,
  `mci_regtype` varchar(45) DEFAULT NULL,
  `mci_address` varchar(100) DEFAULT NULL,
  `mci_country` varchar(100) DEFAULT NULL,
  `mci_mobile_num` int(12) DEFAULT NULL,
  `mci_pwd` varchar(255) DEFAULT NULL,
  `social_id` varchar(255) DEFAULT NULL,
  `mci_login_type` varchar(45) DEFAULT NULL,
  `pro_url` varchar(191) DEFAULT NULL,
  `mci_token` longtext,
  `allow_pushnotifications` enum('0','1') DEFAULT '0',
  `allow_playsounds` enum('0','1') DEFAULT '0',
  `allow_vibrate` enum('0','1') DEFAULT '0',
  `allow_popupnotifications` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`idmciregister`),
  UNIQUE KEY `mci_email_UNIQUE` (`mci_email`)
) ENGINE=InnoDB AUTO_INCREMENT=398 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mciregister`
--

LOCK TABLES `mciregister` WRITE;
/*!40000 ALTER TABLE `mciregister` DISABLE KEYS */;
INSERT INTO `mciregister` VALUES (102,'Mrs','Tina','Panjiwa','tina@mail.com','Residents','16 ephraim road','Saudi Arabi (KSA)',784561324,'6512bd43d9caa6e02c990b0a82652dca',NULL,'input',NULL,'7af8165a-4406-4d5d-81e1-cd6dbc00d33a',NULL,'0','0','0'),(107,'Dr','Phil','Phil','phil@mail.com','Residents','12  djdhdjd dkdjdjdj','UAE',2147483647,'6512bd43d9caa6e02c990b0a82652dca',NULL,'input',NULL,'7af8165a-4406-4d5d-81e1-cd6dbc00d33a',NULL,'0','0','0'),(110,'Dr','Faruq','Badiuddin','faruq1@gmail.com','Member of Society','Dubai','UAE',509216369,'c5363151254b40033de8506a1f64dbff',NULL,'input','uploads_profile_pics/2018-09-13-11-09-36_5b9a29508ad4b110.jpg','98162125-e802-42bd-8dee-c7771517ebc0',NULL,'0','0','0'),(112,'Ms','Nida','Nafid','nida.nafis@mci-group.com','Non Member','Dubai','UAE',551406284,'92c07f1095d7b700066873b63f6466ab',NULL,'input',NULL,'293a77e9-21a0-41be-885c-1e50e6825cc5',NULL,'0','0','0'),(115,'Mr','Muhammad','Aamir','muhammed.aamir@mci-group.com','Non Member','Dubai','United Arab Emirates',2147483647,'ed5ae79544be9b8736a2882cb56f1184',NULL,'input',NULL,'293a77e9-21a0-41be-885c-1e50e6825cc5',NULL,'0','0','0'),(122,'Mr','Nazir','Neji','nazirneji@gmail.com','Non Member','Qatar','Qatar',2147483647,'e10adc3949ba59abbe56e057f20f883e',NULL,'input',NULL,'5e4ff9f2-e935-425b-a800-2a2a10e2d4a9',NULL,'0','0','0'),(123,'Mrs','Hilda','Angel','hilda.angel@mci-group.com','Non Member','DUBAI','United Arab Emirates',501087910,'9e3d40187f26e25a1215a2ecf88701a8',NULL,'input',NULL,'706ac907-3c15-4d94-b26c-c2d185d8d6b9',NULL,'0','0','0'),(124,NULL,'IFSO','Dubai','ifso2018@gmail.com',NULL,NULL,NULL,NULL,'6512bd43d9caa6e02c990b0a82652dca','112458438191516757792','google',NULL,'cbd5e9d8-ea6b-45dc-b1bf-a7380b68834d',NULL,'0','0','0'),(126,NULL,'Zaid','Attawala','z.prankster85@gmail.com',NULL,NULL,NULL,NULL,NULL,'Jo7aQ4jhhe',NULL,NULL,'706ac907-3c15-4d94-b26c-c2d185d8d6b9',NULL,'0','0','0'),(127,NULL,'Test hilda','Angel','hildz_02@yahoo.com',NULL,NULL,NULL,NULL,'9e3d40187f26e25a1215a2ecf88701a8','10211590434171056','facebook',NULL,'706ac907-3c15-4d94-b26c-c2d185d8d6b9',NULL,'0','0','0'),(129,'null','Razin','Kapsi','kapsirazin@gmail.com','Non Member','null','UAE',5555,'a498e94b2da259973e69dc9004397eac','112200147615034160202','google',NULL,'5e4ff9f2-e935-425b-a800-2a2a10e2d4a9',NULL,'0','0','0'),(130,'null','Riyaz','Mohmmed K','kapsiriyaz@yahoo.co.in','null','null','null',0,'5e543256c480ac577d30f76f9120eb74','n95h9rQWGz','linkedin',NULL,'5e4ff9f2-e935-425b-a800-2a2a10e2d4a9',NULL,'0','0','0'),(131,NULL,'Mohammed','Riyaz','riyazweb2007@yahoo.com',NULL,NULL,NULL,NULL,'740c20cbae9715b21047c8d19abcb6a9','10213396923294734','facebook',NULL,'5e4ff9f2-e935-425b-a800-2a2a10e2d4a9',NULL,'0','0','0'),(132,NULL,'Rajendra Prasad','Garryepelly','rajguruwill@gmail.com',NULL,NULL,NULL,NULL,'5e543256c480ac577d30f76f9120eb74','QJUU34B58p','linkedin',NULL,'cbd5e9d8-ea6b-45dc-b1bf-a7380b68834d',NULL,'0','0','0'),(133,NULL,'Jesse123','Test','jesepen.eben@gmail.com',NULL,NULL,NULL,NULL,'16d7a4fca7442dda3ad93c9a726597e4','104503994905190105329','google',NULL,'ef4b39fa-632a-4966-bca2-e518dc5f4e7a',NULL,'0','0','0'),(140,'Mr','Nocks','mulea','nocksmulea@gmail.com','null','null','null',0,'6512bd43d9caa6e02c990b0a82652dca','114051455132123240803','linkedin',NULL,'cbd5e9d8-ea6b-45dc-b1bf-a7380b68834d',NULL,'0','0','0'),(143,'Dr','Nick','Malin','nick@mail.com','Residents','Hdjj','Qatar',78495645,'6512bd43d9caa6e02c990b0a82652dca',NULL,'input',NULL,'7af8165a-4406-4d5d-81e1-cd6dbc00d33a',NULL,'0','0','0'),(144,'Dr','Kkk','Jj','kk@mail.com','Non Member','Gdh','Albania',9476388,'6512bd43d9caa6e02c990b0a82652dca',NULL,'input',NULL,'fee1aede-9415-4db2-bebd-d44f400904fe',NULL,'0','0','0'),(147,'Mr','Richard','Mtshweni','mshiseni@gmail.com','null','null','South Africa',786653265,'962e53aa6584bd30c59555fef14af5c2','10203567019291530','facebook',NULL,'6018415c-d331-4301-ad4d-97b616d7d954',NULL,'0','0','0'),(148,'Ms','Nida','Nafis','nida.nafis@hotmail.com','Others','Dubai','United Arab Emirates',551406284,'92c07f1095d7b700066873b63f6466ab',NULL,'input',NULL,'7554a1a8-5e96-43bb-8358-80bdcfd983ca',NULL,'0','0','0'),(149,'Ms','Anouk','Ven','anoukvanderven@live.nl','Non Member','Reem Island','United Arab Emirates',509954351,'0aff8ce7c20ed04d3e366da9a8ea0ed4',NULL,'input',NULL,'2dc8fc4c-7f55-4d60-8616-98778769f184',NULL,'0','0','0'),(150,'Mr','Joe Man Kekae','Ramokgadi','johan@gmail.com','Non Member','Sandton','South Africa',737077285,'6512bd43d9caa6e02c990b0a82652dca','1854414361241121','facebook',NULL,'7af8165a-4406-4d5d-81e1-cd6dbc00d33a',NULL,'0','0','0'),(154,'null','Mulea','Emmanuel','mulea@mail','Nurses and Technicians','null','null',0,'6512bd43d9caa6e02c990b0a82652dca','942075885932807','facebook',NULL,'cbd5e9d8-ea6b-45dc-b1bf-a7380b68834d',NULL,'0','0','0'),(168,'Mr','Eddy','Chauraya','noc@mail.com','Non Member','Hdj','Algeria',784956,'6512bd43d9caa6e02c990b0a82652dca','10213174977754608','facebook','uploads_profile_pics/2017-09-14-12-00-24_59ba533825365168.jpg','cbd5e9d8-ea6b-45dc-b1bf-a7380b68834d','','0','0',''),(170,NULL,'Zaid','undefined','zaid.attawala@gmail.com',NULL,NULL,NULL,NULL,'5e543256c480ac577d30f76f9120eb74','103459442940113536656','google',NULL,'rtytyytty',NULL,'0','0','0'),(171,NULL,'hilda','angel','hildaangel.mci@gmail.com',NULL,NULL,NULL,NULL,'9e3d40187f26e25a1215a2ecf88701a8','101785497765666955885','google',NULL,'706ac907-3c15-4d94-b26c-c2d185d8d6b9',NULL,'0','0','0'),(172,NULL,'Khammas','Ali','ali.khammas@gmail.com',NULL,NULL,NULL,NULL,'73f699bfc80c48dcf1eb506365c1f226','659674657570099','facebook',NULL,'7cda2fc9-9382-4b61-925b-d2c9cd9c430d',NULL,'0','0','0'),(173,'Dr','Pravish Rai','Sookha','sookha@yahoo.com','Member of Society','Plaine des roches','Mauritius',2147483647,'8af8378876490a95fcd9c9ab0d476878',NULL,'input',NULL,'6b7ed2a3-9d5d-497e-84cc-03ce3258fc96',NULL,'0','0','0'),(174,'Dr','Cristiano','Finco','cristiano.finco@libero.it','Member of Society','Via trevisan 8','Italy',2147483647,'61616144d7ffbdbd3188e588b2f62b08',NULL,'input',NULL,'91bcc3c7-48f8-4185-8be7-2395cc9b2e4f',NULL,'0','0','0'),(175,'Dr','Matias','Sosa','drmatiasfsosa@gmail.com','Member of Society','54 colon street, ParanÃ¡ city','Argentina',2147483647,'928283d6c2a75739c6e102c197a4175f',NULL,'input',NULL,'b3eaaf6a-8475-4ef9-b14d-79f3776752e9',NULL,'0','0','0'),(176,'Mr','Saanid','Adamu','asaanid@gmail.com','Others','University of Cape Coast','Ghana',208184824,'ea418b8401f56db4301cda6df95f206d',NULL,'input',NULL,'15629d61-ea91-4d42-94d9-025fa7868917',NULL,'0','0','0'),(177,NULL,'enrique','arias','balsamo1@gmail.com',NULL,NULL,NULL,NULL,'70428814c7ce08e82e25fad5f61de6e2','103236236926786695196','google',NULL,'7564bc09-ddd1-4762-966e-9358c3fb49ad',NULL,'0','0','0'),(178,'Dr','Jose Alfredo','Jimenez','dr.alfredjim@gmail.com','Non Member','Fernando solos 1100','Mexico',2147483647,'4b42881e59518ac289ea872bc8901f1e',NULL,'input','uploads_profile_pics/2018-07-10-22-31-11_5b45178f8ebb3178.jpg','b59ff977-77a0-4060-be38-159f1a1c7927',NULL,'0','0','0'),(179,'Dr','Nestor','Apaez Araujo','dr_apaez@hotmail.com','Member of Society','Luis G monzon 158 colonial iztapalapa ciudad de mexico , Mexico','Mexico',2147483647,'d6f3cca8529ef9d2d05f7b03fdbd5d79',NULL,'input',NULL,'584a1349-47df-4925-8943-3b5a2cadf898',NULL,'0','0','0'),(180,'Dr','Christian Omar','RamÃ­rez Serrano Torres','corasetomd@gmail.com','Member of Society','Galicia 442 int 5 postal','Mexico',2147483647,'e1d6967aaa1ae6c447ab5952abee57b5',NULL,'input',NULL,'63f1de48-c1f8-4dfb-8cb5-e40f7e84ea4a',NULL,'0','0','0'),(181,'Dr','Aram','Sedrakyan','aramsedrakyan@gnail.com','Member of Society','Yerevan','Armenia',2147483647,'825e564bb704fd638c288d75c8071d18',NULL,'input',NULL,'efc53221-204f-47de-b549-5be1f574e33b',NULL,'0','0','0'),(182,'Dr','Cristiano','Finco','cfinco@libero.it','Member of Society','Via trevisan 8','Italy',2147483647,'61616144d7ffbdbd3188e588b2f62b08',NULL,'input',NULL,'91bcc3c7-48f8-4185-8be7-2395cc9b2e4f',NULL,'0','0','0'),(183,'Dr','Karin Ericka','Vargas Bazan','kevb_81@hotmail.com','Non Member','Mariano Condorcanqui Avenue 217','Peru',2147483647,'6b8cbf86c80fb84bed58f773f4893a5f',NULL,'input',NULL,'0e940058-b4d9-4e7b-aea0-c85246772c00',NULL,'0','0','0'),(184,'Dr','Camila','Onetto','camilaonetto@gmail.com','Non Member','Avenida Chamisero 13178 house 38','Chile',2147483647,'f02785fcff40169e1b1bbd9d27a5e01e',NULL,'input',NULL,'b5683808-7821-4c6d-8cc4-d1533f441a7b',NULL,'0','0','0'),(185,'Dr','Ignacio','GonzÃ¡lez','drignaciogonzalez@gmail.com','Non Member','Martin Alonso Pinzon 4845','Chile',2147483647,'4c54c62229fc13b95dc93185c1421f54',NULL,'input',NULL,'b962c327-c99b-499f-a243-93df1d835e54',NULL,'0','0','0'),(186,'Dr','Henry','Shion','henryshion@gmail.com','Non Member','Av saenz peÃ±a 886 callao','Peru',2147483647,'51b40cd96d8456c1574f31d717983c8d',NULL,'input',NULL,'92f723b6-3642-4b5a-bd62-75f9a66d2efb',NULL,'0','0','0'),(187,'Dr','Fatima','Sabench','fsabench@gmail.com','Member of Society','Sant llorenÃ§ 22','Spain',653661545,'8c8a58fa97c205ff222de3685497742c',NULL,'input',NULL,'7cfa1795-890d-4497-9a30-9cf755dbab6b',NULL,'0','0','0'),(188,'Dr','Alicia','Molina','alicia.molina@urv.cat','Member of Society','Reus','Spain',2147483647,'77e48da55b59bb1c32b9fd8af8533f50',NULL,'input',NULL,'c593ab62-16d0-4e5c-a94b-46be0e199ecb',NULL,'0','0','0'),(189,'Dr','Margarida','Vives','mvivese@gmail.com','Member of Society','Sant LlorenÃ§ 21','Spain',2147483647,'30bfe44101d0274e0e8720b425f05582',NULL,'input',NULL,'5b436e71-2bcd-46ab-b18c-88fb85365f29',NULL,'0','0','0'),(190,'Mr','Steve','Goodman','steve@meetibgadvice.com','Member of Society','5520 mount vernon parkway','United States',2147483647,'57cc2271e5496094cbfd4d8136eff9e5',NULL,'input',NULL,'92f286bd-ce32-4626-acf3-1b35896ab864',NULL,'0','0','0'),(191,'Dr','Eduardo','Sima','esima@hotmail.com','Member of Society','Solhemsgatan 11','Sweden',2147483647,'21bc55a1a71abe81d1f141e80a745587',NULL,'input',NULL,'cb30a751-8999-447c-908e-97a05f5827a4',NULL,'0','0','0'),(192,'Dr','Roberto','Martinez Ayala','robertomartineza@hotmail.com','Member of Society','Tlacotalpan 59-105 colonia roma sur   06770','Mexico',2147483647,'493be3806cad0ef100cf774e5e779ce1',NULL,'input',NULL,'266bce55-ed8f-4668-93d0-82971caee905',NULL,'0','0','0'),(193,'Dr','Fawaz','Amran','dr.fawaz@familycare.com.sa','Member of Society','Riyadh','Saudi Arabia',2147483647,'c62c81ba67d18263e3df253f7116301d',NULL,'input',NULL,'7cb1ea25-fd99-452d-a6a6-d43a1754e67c',NULL,'0','0','0'),(194,'Dr','Osama','Elzaidi','oelzaidi88w@yahoo.com','Non Member','Westerholtet weg 100','Germany',2147483647,'7c4ab2635bc11858c6c26ccbadba065b',NULL,'input',NULL,'863c4277-bdd0-42d4-8397-b05a55f90684',NULL,'0','0','0'),(195,'Dr','Athanasios','Pantelis','ath.pantelis@gmail.com','Residents','Athens','Greece',2147483647,'6dae4cc7451fb699a088b09bd81dd95f',NULL,'input',NULL,'f38b1701-b53d-48a0-ada9-d90d83842027',NULL,'0','0','0'),(196,'Dr','Ioannis-Petros','Katralis','drpetran@yahoo.gr','Residents','Pytheou 29 Athens','Greece',2147483647,'f1ef76a429e938a1e1dbd5b69ae64f61',NULL,'input',NULL,'046f7898-04c9-477b-b6d0-b25eb379add3',NULL,'0','0','0'),(197,'Dr','JEAN MARIE','MOLASOKO','jmmolas@wanadoo.fr','Member of Society','13 bis rue aristide Briand Les Mureaux','France',609655172,'7de83b14d8bb050bdfb35ff82d7618fc',NULL,'input',NULL,'7d6c4a4a-2555-4f6b-919f-2a2f2ba3f952',NULL,'0','0','0'),(198,'Mr','eddy','Ngoni','eddyngoni@gmail.com','Residents','Pretoria','Zimbabwe',74546513,'6512bd43d9caa6e02c990b0a82652dca','115618630283761545118','google','uploads_profile_pics/2017-08-31-08-56-42_59a7b32a789d2198.jpg','cbd5e9d8-ea6b-45dc-b1bf-a7380b68834d','1','0','1','1'),(199,'Dr','Karl','Rheinwalt','k.rheinwalt@gmail.com','Member of Society','Cologne','Germany',2147483647,'aa69af1ec569b9ea1d33782268e6dcf9',NULL,'input',NULL,'097571f3-0ab6-4e00-8051-ebc4180e3da6',NULL,'0','0','0'),(200,'Dr','JÃ¼rgen','Hain','dr.hain@arcor.de','Member of Society','Offenbach','Germany',2147483647,'1f4f40ae883842c03ab61f554f3b5477',NULL,'input',NULL,'2d54eac5-1bb3-42b5-83d9-89fb37fac2cf',NULL,'0','0','0'),(201,'Dr','Hector','Perez','heperco@hotmail.com','Member of Society','Plaha del carmw','Mexico',2147483647,'83996a198cb57329b0c8bd619a0eb996',NULL,'input',NULL,'be01d426-c7f9-4994-978a-bd8d1bb4e1ea',NULL,'0','0','0'),(202,'Dr','Dang Tuan','Pham','dngtuanpham@msn.com','Member of Society','Buffalo','United States',2147483647,'5d743178f8b7513b3732442a2856864f',NULL,'input',NULL,'a987721b-547e-490a-acd5-66343c0675d4',NULL,'0','0','0'),(203,'Dr','Luis Gustavo','Guides Cortiano','lgcortiano@hotmail.com','Member of Society','Rua desembargador Motta 1635 ap 901','Brazil',2147483647,'a8698009bce6d1b8c2128eddefc25aad',NULL,'input',NULL,'c5cd1440-9ae5-47cc-840b-a4d85ee5d36b',NULL,'0','0','0'),(204,'Dr','Sergio','Verboonen','sverboonen@gmail.com','Member of Society','Tijusna','Mexico',2147483647,'8cdaaaffccd69f4136f8f9cc2ae47c0a',NULL,'input',NULL,'863d0f19-8de1-4b60-812a-9f1029103c9e',NULL,'0','0','0'),(205,'Dr','Manuel','Aceves','acevesma1@gmsil.com','Member of Society','Lopez mateos sur 1401-93A','Mexico',2147483647,'2ce2baace2c6d31209dc0f92dca7dc44',NULL,'input',NULL,'93a1f9ea-7910-4669-b235-84c7016746e9',NULL,'0','0','0'),(206,'Mr','mohammad','dallasheh','msd1983@hotmail.com','Non Member','haifa','Israel',524498012,'3f193f3e2c31dfddb70e8cf8f2a31ffc',NULL,'input',NULL,'53dbd7a1-bd0f-4d66-87a9-3867eb18c2ef',NULL,'0','0','0'),(207,'Mr','Ali','Alzitawi','aloshco@gmail.co','Non Member','Amman queen rania st.','Jordan',2147483647,'d5fffd9c9405b422a83cbecb0f5ff93f',NULL,'input',NULL,'ac709703-148d-4642-9ddf-3f0ad0848d91',NULL,'0','0','0'),(208,'Mr','Siddharth','Singh','singhsid.03@gmail.com','Others','305, sevanam crown dubai','United Arab Emirates',564995785,'89d142fdaca448c2ba9d3cd24e215d8f',NULL,'input',NULL,'35c9d3a5-6709-4219-b410-cf71a2c0bb0a',NULL,'0','0','0'),(209,'Mr','David','Fawzy Yassa','david.fawzy@gmail.com','Member of Society','Duabi','United Arab Emirates',2147483647,'38ad33e2fc083c2843f12f8c6bb6b092',NULL,'input',NULL,'432e1a14-a2e5-4600-a34d-6138cf7e7bdc',NULL,'0','0','0'),(210,'Dr','Suthep','Udomsawaengsup','suthep.u@gmail.com','Member of Society','Bangkok','Thailand',2147483647,'66c1b086b2fd8e541a998393180b1955',NULL,'input',NULL,'f39c5dd8-7b6d-4bdb-b829-f08facca2995',NULL,'0','0','0'),(211,'Dr','Zafar iqbal','Gondal','ziqbalgondal@gmail.com','Member of Society','Dubai','United Arab Emirates',2147483647,'33addcade3fc18a3037fb577b06c598a',NULL,'input',NULL,'1b8ee057-75b2-45a0-8812-419db75aa8b8',NULL,'0','0','0'),(212,'Mr','Iskander','Fnaiech','fnaiech.iskander@gmail.com','Residents','58 rue marcel lestat 77500 chelles','France',2147483647,'7c6b66e68d95b3ebe66fbcd739c2fca7',NULL,'input',NULL,'24f20821-60e7-4448-a445-3f56278933b7',NULL,'0','0','0'),(213,'Mr','Iskander','Fnaiech','ifnaiech@laposte.ner','Residents','58 rue marcel lestat , 77500 chelles','France',2147483647,'7c6b66e68d95b3ebe66fbcd739c2fca7',NULL,'input',NULL,'24f20821-60e7-4448-a445-3f56278933b7',NULL,'0','0','0'),(214,'Dr','Alfred','Blaser','ablaser@me.com','Member of Society','Vy creuse 4 1260 Nyon','Switzerland',792025667,'e10adc3949ba59abbe56e057f20f883e',NULL,'input',NULL,'22914eed-f4fe-4460-88b4-44dd6cf7938e',NULL,'0','0','0'),(215,'Dr','Miguel','Lamota','miguel_lamotta@hotmail.com','Member of Society','Omnihospital guayaquil','Ecuador',2147483647,'4e343e52a96c44b5097c609ce792cc93',NULL,'input',NULL,'3f8c8ee2-9c88-4a96-8c73-e3b2e0a440ea',NULL,'0','0','0'),(217,NULL,'faroja','Mohammad','faroja@gmail.com',NULL,NULL,NULL,NULL,'11933b66298e800c8fbecab5d99dda4a','102983358755574294233','google',NULL,'rtytyytty',NULL,'0','0','0'),(218,'Dr','Dita','Å imeÄkovÃ¡','dita.simeckova@gmail.com','Member of Society','Å irokÃ¡ 13, Jablonec nad Nisou','Czech Republic',723000482,'cc181feb9b44acf4b15c459efec4119a',NULL,'input',NULL,'040af8bd-fb37-450d-b16c-66eef424e514',NULL,'0','0','0'),(219,'Mr','Roberto','Zilio','rzilio@hotmail.com','Member of Society','Rua Paulo Stuart Wright 58','Brazil',2147483647,'c1c627468721b37fc33a4b44759ab452',NULL,'input',NULL,'cdb7db8e-11b3-41f0-be6d-b7f0cf8153e1',NULL,'0','0','0'),(220,'Dr','Tiago','Onzi','tiagoonzi@hotmail.com','Member of Society','Florianopolis','Brazil',2147483647,'d79cd5391302db9482b338e344ee1460',NULL,'input',NULL,'ed8b154f-525c-428d-bda2-92c36a4d4d99',NULL,'0','0','0'),(221,'Mr','Willy','Theel','w.theel@franciscus.nl','Students and Interns','Kleiweg 500, 3045pm Rotterdam','Netherlands',2147483647,'926223b0c71107e314cd3954209e855a',NULL,'input',NULL,'cf64d6db-55a2-4121-8daf-9a0b343f6015',NULL,'0','0','0'),(222,'Dr','Carlos','Casalnuovo','cac149@hotmail.com','Member of Society','Buenos Aires','Argentina',2147483647,'ba2af87a5692228508437cc5b59a5bc4',NULL,'input',NULL,'089e5218-fe35-40a4-8eef-172875dd4fd9',NULL,'0','0','0'),(223,'Dr','Halit Eren','Taskin','eren_taskin@hotmail.com','Member of Society','Yalniz selvi cad no:6 d6-6 cengelkoy-istanbul 34680','Turkey',2147483647,'fd7aa8fe3e149941d7ea17d643a4af15',NULL,'input',NULL,'d9320aac-138a-4bba-9ca9-e46b66d68be8',NULL,'0','0','0'),(224,'Mr','Anil','Francis','anilfrancis194@gmail.com','Nurses and Technicians','Al-Garhoud pvt Hospital,Dubai','United Arab Emirates',2147483647,'68cffeab15504fb27551e4487d07cbfc',NULL,'input',NULL,'6adb4d05-955d-464c-9fca-fb3105d71908',NULL,'0','0','0'),(225,'Mrs','Willy','Burger-Adema','willyburgeradema@gmail.com','Others','Menno Simonsstraat 10','Netherlands',2147483647,'772890cef9fe0e23d03d8669e8f68a17',NULL,'input',NULL,'502e36ff-68e8-4b7b-8c83-83248cdc5fe9',NULL,'0','0','0'),(226,'Ms','Irene','Friskes','i.friskes@franciscus.nl','Others','Klimroos 12','Netherlands',2147483647,'757505473d9e3191bb4e943b01290caf',NULL,'input',NULL,'a3e1a674-e0a8-49e1-954a-1babfabc19c2',NULL,'0','0','0'),(227,'Dr','Paul','Davidson','pdavidson@bwh.harvard.edu','Member of Society','75 Francis Street, ASB-II, 3rd Floor','United States',2147483647,'47c73d1502bd28345ed66c8f54067ac6',NULL,'input',NULL,'b1bb49a6-36c2-43c5-bb54-2c43d093f88b',NULL,'0','0','0'),(228,NULL,'Benda','Ueckermann','bueckermann@gmail.com',NULL,NULL,NULL,NULL,'388a91714d20bfe6f3795afee40d4cd7','4017qSp_n9','linkedin',NULL,'0d34eba7-187e-426d-a038-d00d1e52665c',NULL,'0','0','0'),(250,NULL,'Ueckermann','Benda','bendaueckermann@gmail.com',NULL,NULL,NULL,NULL,'388a91714d20bfe6f3795afee40d4cd7','1613146898710195','facebook',NULL,'5094457d-4b81-4385-9d5a-ea6a63a6003c',NULL,'0','0','0'),(251,'Dr','Bekkhan','Khatsiev','bkhatsiev@yandex.ru','Member of Society','Lenina street 397/1, ap. 63, Stavropol','Russian Federation',2147483647,'dbdb8701d7c071b77e32ca5fa525a568',NULL,'input',NULL,'afd67b85-0b7b-4261-baf3-a211808a352a',NULL,'0','0','0'),(253,'Dr','Leon','Katz','lvkatz@hotmail.com','Member of Society','805 primrose lane, wynnewood pa 19096','United States',2147483647,'97ecc71748b48cdc1ff190599f848041',NULL,'input',NULL,'97774b03-0ba2-4a78-8742-cb329eba3a55',NULL,'0','0','0'),(254,'Dr','Hasan','Husien','jalaminah@gmail.com','Member of Society','Amman','Jordan',2147483647,'59b8ff0403037af77fb1ae9c8a53b69b',NULL,'input',NULL,'f99d24ca-d87a-4752-99c9-3e5afdd6bc94',NULL,'0','0','0'),(255,'Dr','AntÃ³nio','Albuquerque','amralbuquerque@gmail.com','Member of Society','Lisbon','Portugal',2147483647,'90765383c3d08a8c5821e3765fa5b2db',NULL,'input',NULL,'9b772892-bd4e-4cab-a249-36e50a582729',NULL,'0','0','0'),(256,'Dr','Stephen','Angamuthu','steefe00@yahoo.com','Residents','Manama','Bahrain',39471501,'99320d9b92ceefe0aabcaf850754afb5',NULL,'input',NULL,'4b22df69-fade-4fb9-9e26-cb7acd3e1ab2',NULL,'0','0','0'),(257,'Dr','Francisco','Campod','loboluna28@gmail.com','Member of Society','Guanajuato 229','Mexico',2147483647,'25e05e5ac9d1fd8af095a8352b490e57',NULL,'input',NULL,'ca44da3d-dd67-48e5-8f8f-549843b62ce5',NULL,'0','0','0'),(258,'Dr','Thiago','Sivieri','thiagosivi@hotmail.com','Member of Society','Sao Jose do Rio Preto','Brazil',2147483647,'8bd2b1699e7fa5557888b6fa3406b738',NULL,'input',NULL,'0f89e1e9-9092-4160-91a3-bc0e9f156279',NULL,'0','0','0'),(259,'Dr','Rashid','Askerkhanov','askerkhanov@gmail.com','Member of Society','Moscow','Russian Federation',2147483647,'81dc4407e12a6c3b2a51f27e998e81c9',NULL,'input',NULL,'e86b7a63-9489-4538-943a-13ef8fb28279',NULL,'0','0','0'),(260,'Mr','Omar','Quiroz','quiroz.omar@live.com','Residents','Avenue toluca 727','Mexico',2147483647,'5ebe2294ecd0e0f08eab7690d2a6ee69',NULL,'input',NULL,'64bab0da-a6c1-43a5-a288-ae3b48854889',NULL,'0','0','0'),(261,'Dr','Fabio Cesare','Campanile','campanile@surgical.net','Member of Society','Vocabolo Chiorano Magliano Sabina','Italy',2147483647,'dc5e8869e48e32a36f526bd3cbf7df00',NULL,'input',NULL,'c4e65a39-21c5-4d00-b91e-99cf6d188e23',NULL,'0','0','0'),(262,'Dr','Gustavo','Czwiklitzer','gustavoczw@gmail.com','Member of Society','Santiago','Chile',2147483647,'2d58b0ac72f929ca9ad3238ade9eab69',NULL,'input',NULL,'98225482-fd86-44c8-aef0-e4467619d496',NULL,'0','0','0'),(263,'Dr','Yasser','Tohme','dr.tohme@hotmail.com','Member of Society','IMC, Jeddah','Saudi Arabia',2147483647,'f6c27898205442bc3fe5a818137897d7',NULL,'input',NULL,'30317986-2ad6-485a-b09c-abc4aa492280',NULL,'0','0','0'),(264,NULL,'Ricardo','Baratieri','rbaratieri.rb@gmail.com',NULL,NULL,NULL,NULL,'b79402c19a788eb2a5852c94770da9f2','102970958710508863179','google','uploads_profile_pics/2017-09-21-15-06-52_59c3b96c9b7c0264.jpg','8ca19ed1-91b7-4a06-9585-603e1e28a66c',NULL,'0','0','0'),(265,'Dr','Milton','Ogawa','miltonogawa@sercomtel.com.br','Member of Society','Londrina','Brazil',2147483647,'c32edaa87d03104253164745d691fe75',NULL,'input',NULL,'a3ce5b86-82da-48e3-91c0-7da8079c6ff5',NULL,'0','0','0'),(266,'Dr','AATIF','INAM','aatifshami@yahoo.com','Member of Society','House 215,street 18,F-10/2,ISLAMABAD','Pakistan',2147483647,'a42ccd3195d6fe9fe6a0d8252488b81a',NULL,'input',NULL,'c0faf9a3-5d75-4b5b-b92e-d94aec02377e',NULL,'0','0','0'),(267,NULL,'Inam','Aatif','aatifshami@gmail.com',NULL,NULL,NULL,NULL,'a42ccd3195d6fe9fe6a0d8252488b81a','10154926509249632','facebook',NULL,'c0faf9a3-5d75-4b5b-b92e-d94aec02377e',NULL,'0','0','0'),(268,'Dr','Muthanna','Al-Sharbaty','muthanna_asaad@yahoo.com','Member of Society','Erbil/Mosul','Iraq',2147483647,'4a843c9fecde2f2462478571e72497f2',NULL,'input',NULL,'a611b810-b9c1-4aac-8fa5-44b783634fe5',NULL,'0','0','0'),(269,'Dr','Juan carlos','Ramirez','ramirezz01@hotmail.com','Non Member','Sinaloa','Mexico',2147483647,'98f5c03e4dc993aa26068a153dc340fa',NULL,'input',NULL,'f061ff2f-68c3-4b84-899d-1fe790c29e5a',NULL,'0','0','0'),(270,'Dr','Jorge','Moscardi','drmoscardi@hotmail.com','Member of Society','Olavarria','Argentina',2147483647,'5f1495c6a96f29c7c72b18b879dc40b9',NULL,'input',NULL,'08c2ed85-e054-411c-9909-e07a9e8d29bd',NULL,'0','0','0'),(271,'Dr','SÃ¡vio','Moreira','moreirasavio72@gmail.com','Member of Society','Rua Argentina, 463 Casa04 Nova Friburgo-RJ','Brazil',2147483647,'a600dd4c52d3913c05d73aaf5c77bbd8',NULL,'input',NULL,'5a50bb84-bdc9-4300-9914-25f41e7060e7',NULL,'0','0','0'),(272,'Dr','Wah','Yang','yangwah@qq.com','Member of Society','613 Huangpu Avenue, Guangzhou','China',2147483647,'57e7f266bb0dc62f2cb0f25976c14e93',NULL,'input',NULL,'6ea69268-21b4-4b45-847c-9cee32e82c42',NULL,'0','0','0'),(273,'Dr','RafaÅ‚','Mulek','rachfal.rm@gmail.com','Non Member','Oliwkowa 5 55-002','Poland',2147483647,'297d8404a3ce379fab86f5ab0d125382',NULL,'input',NULL,'83997489-ae49-46c0-a779-3416ac6e6fa3',NULL,'0','0','0'),(274,'Dr','Strutzmann','Johannes','strutzmann@gmx.net','Non Member','HÃ¶lderlinweg 2','Austria',2147483647,'a42ccd3195d6fe9fe6a0d8252488b81a',NULL,'input',NULL,'5753e7b2-51f9-4365-ae82-f16ec4272f9e',NULL,'0','0','0'),(275,'Dr','Jingge','Yang','dukeyjg@126.com','Member of Society','613 Huangpu Ave West, Guangzhou','China',2147483647,'5d7ee752332ef010bf785057a35a6898',NULL,'input',NULL,'be597785-b184-446e-9b81-49b2c46a9e3f',NULL,'0','0','0'),(276,'Dr','OBAID','ALHARBI','dralharbi@hotmail.com','Member of Society','P.O.BOX 43512 HAWALI CENTRAL','Kuwait',2147483647,'55f55cb70c1c9e9f841992337c0a2a16',NULL,'input',NULL,'b52b9afb-5de5-441e-a20a-ff4dd17fa7bf',NULL,'0','0','0'),(278,'Ms','Maria','Lough','marialough01@gmail.com','Member of Society','London','United Kingdom',2147483647,'532174083faecba37391f7cdd7a3e5bc',NULL,'input',NULL,'78b48cb2-aa6e-446f-8322-ee01ffa16b66',NULL,'0','0','0'),(279,'Dr','Manuel','Aceves','acevesma1@gmail.com','Member of Society','Lopez Mateos 1401 Guadalajara 45645','Mexico',2147483647,'2ce2baace2c6d31209dc0f92dca7dc44',NULL,'input',NULL,'93a1f9ea-7910-4669-b235-84c7016746e9',NULL,'0','0','0'),(280,'Ms','Andreia','Kataiama','andreiakataiama@gmail.xcom','Non Member','Rua Frei Caneca, 558 - conj 107','Brazil',961109927,'66018c8bca8ca7484b1159fe48130874',NULL,'input',NULL,'8b1afc14-1acc-45ed-8bf1-3dc38c26d1be',NULL,'0','0','0'),(281,'Dr','Salim Ali','Al Maashani','drmashani@yahoo.com','Non Member','P.o box  409. Cide 215 .salalah','Oman',2147483647,'c07169c494afcbb9b1f74859327c61c9',NULL,'input',NULL,'3843a6e2-9104-41ec-a096-082ffba9de25',NULL,'0','0','0'),(282,NULL,'Ruelas EnrÃ­quez','Edgar','eruelase@yahoo.com',NULL,NULL,NULL,NULL,'d340657058c21ae8e5d97802ded66dd4','10155434782795250','facebook',NULL,'1550b42e-63f7-4b7c-9bee-9826539d30e4',NULL,'0','0','0'),(283,'Mr','Charles','Mohlaka','ck.mohlaka@gmail.com','Nurses and Technicians','Sosha','South Africa',727628707,'2f660053fbcca40f85de7e0e5086bff0',NULL,'input',NULL,'851e56f5-26df-43c9-845b-5ea042f76665',NULL,'0','0','0'),(284,'Dr','Francisco','Barrera','fbarrera@mg-bg.com','Member of Society','Ecuador 2331 int 730 Col Balcones de Galeris Monterrey','Mexico',2147483647,'59adaab6022e448f94b9a0c330620d3f',NULL,'input',NULL,'c702478e-bc6f-4a09-a020-af2547d8e1c2',NULL,'0','0','0'),(285,'Ms','Mushal','Naqvi','mushal_naqvi@hotmail.com','Non Member','146 Beaumont Road, Bournville, Birmingham. B30 1NY','United Kingdom',2147483647,'b9ad3ba2ff630f8ab61134eadc8e1654',NULL,'input',NULL,'e95ad29f-27a9-4222-b090-f57d3fbe172c',NULL,'0','0','0'),(286,NULL,'Camara','Alhassane','calhassane329@gmail.com',NULL,NULL,NULL,NULL,'df55f702e1a6c855de2acb950b2823c6','172666636635160','facebook',NULL,'83317ebf-b814-4efe-89c5-d9dc7e684542',NULL,'0','0','0'),(287,'Mr','Riyaz','K','riyazkapsi@gmail.com','Non Member','Dubai','United Arab Emirates',509216369,'4bc30a36fb297b3ca3ea181848353ca3',NULL,'input',NULL,'41aeb88e-9e7a-4be5-a7cd-898bda5f5e01',NULL,'0','0','0'),(288,'Mr','Sameer','Sha','kapsiriyaz@gmail.com','Non Member','Dubai','United Arab Emirates',509216369,'e10adc3949ba59abbe56e057f20f883e',NULL,'input',NULL,'41aeb88e-9e7a-4be5-a7cd-898bda5f5e01',NULL,'0','0','0'),(290,'Dr','Bzbd','Nznz','dheryvalentino@gmail.com','Non Member','Jakarta','Indonesia',2147483647,'65a77549d2a9d259de32bba6103b6a49',NULL,'input',NULL,'5095f3b0-a4ee-47be-9e55-bc08de7a32d4',NULL,'0','0','0'),(291,'Mr','Johnson','Relwinn','relwinnjohnson@gmail.com','Member of Society','null','South Africa',0,'cc03e747a6afbbcbf8be7668acfebee5','10203904526770888','facebook',NULL,'fdc47e5a-0533-4f6e-83e8-826c241541c1',NULL,'0','0','0'),(292,'null','Mbuyi Mukuna','Thando','maqubelat@yahoo.com','null','null','South Africa',0,'64819701475edd0af36248c925a2c961','1472141746166709','facebook',NULL,'no token',NULL,'0','0','0'),(293,NULL,'Johannes','kekae','johanneskekae@gmail.com',NULL,NULL,NULL,NULL,'2ec565821d9b0aee7c83d8c0c00bccec','JrmkLNUPId',NULL,NULL,'cbd5e9d8-ea6b-45dc-b1bf-a7380b68834d',NULL,'0','0','0'),(294,NULL,'Lamarca','Fernando','flamarca5@hotmail.com',NULL,NULL,NULL,NULL,'c48c478d58a793242df15946e2d9a628','1734987246572078','facebook',NULL,'d891275f-1107-42ce-ad0c-71ccc3dbce1a',NULL,'0','0','0'),(295,NULL,'Edmore','Chauraya','enchauraya@gmail.com',NULL,NULL,NULL,NULL,'6512bd43d9caa6e02c990b0a82652dca','988uaEv46g','linkedin',NULL,'cbd5e9d8-ea6b-45dc-b1bf-a7380b68834d',NULL,'0','0','0'),(296,'Dr','Abdelrahman','Nimeri','nimeri@gmail.com','Member of Society','Sheikh Khalifa Medical City Abu Dhabi','United Arab Emirates',2147483647,'9020ca11ac906d5a4810fb5ef753c486',NULL,'input',NULL,'bbec8b88-37ac-4ebe-adeb-f3325658d0e7',NULL,'0','0','0'),(297,NULL,'Cardozo','Marcelo','cardozorochamarcelo@gmail.com',NULL,NULL,NULL,NULL,'74d3a10d30765a5cc477bbccb956c0dd','1611867832205402','facebook',NULL,'2c33312c-851b-4c24-8442-f3ad04cc7863',NULL,'0','0','0'),(299,'Dr','Marco Antonio','Campos Garrido','drbricklayer@hotmail.com','Member of Society','Tlacotalpan 59 Colonia Roma CP 06760','Mexico',32246913,'f6e8463a2b83bdc47d89f5cdafa58f19',NULL,'input',NULL,'704d5c44-f808-4247-a55f-01bba476755c',NULL,'0','0','0'),(300,'Dr','Abdul Kader','Weiss','weissak73@hotmail.com','Member of Society','Dubai','United Arab Emirates',557828275,'b3404b90434b063089123e777e2fcf5d',NULL,'input',NULL,'d30b0d89-cc28-4f94-b478-355b9ccaaa2e',NULL,'0','0','0'),(301,'Dr','Alexander','Palacios','alexdoc31@hotmail.com','Non Member','Ambato','Ecuador',979053205,'577bf9b2781ba2cf8e2218b30a2c5cef',NULL,'input',NULL,'65aa9df5-beb9-48e9-a72c-6909d5fab853',NULL,'0','0','0'),(302,'Dr','Jason','Arellano','jjarellano74@gmail.com','Member of Society','1914 Avalon Pines Drive Coram, NY 11727','United States',2147483647,'f8cca639f9ee392da4df9da26328e380',NULL,'input',NULL,'83cef178-7f84-4540-9c93-961f24ae6599',NULL,'0','0','0'),(303,'Dr','Roland','Pizarro','rolandpm@hotmail.com','Non Member','Av paso de los andes 1123','Peru',996663595,'1496386a51941b273d6c9d51fd583ecc',NULL,'input',NULL,'1919298c-60b1-4df1-bb63-1f50abbbc11e',NULL,'0','0','0'),(304,'Mr','Ngonidzashe','Chauraya','chaurayapento@gmail.com','Non Member','35 Western Service Road Sandton','Zimbabwe',813731515,'6512bd43d9caa6e02c990b0a82652dca',NULL,'input',NULL,'no token',NULL,'0','0','0'),(305,'Mr','Roman','Karukes','karukes@yandex.ru','Non Member','Rostov-na-Donu, schtakhanovskogo str. 21/2, app.32','Russian Federation',2147483647,'c26459106dfeebb2e3dc150b5e24e538',NULL,'input',NULL,'92b617c8-5e76-4e5d-97b2-5401cfd30b5d',NULL,'0','0','0'),(306,'Dr','Ahmed','Alsagban','drahmedalsagban@yahoo.com','Non Member','Al_Diwanyia teaching hospital','Iraq',2147483647,'07a45f92aa216a958280176e6c27d080',NULL,'input',NULL,'48b9d8d3-a795-4713-9c80-8466a910e577',NULL,'0','0','0'),(307,NULL,'Julio','Areas','jareasd@gmail.com',NULL,NULL,NULL,NULL,'5a966107f7d957b99961713e483cfe61','101224660922673837613','google',NULL,'a7438f12-75ba-45fa-9945-484bfb08154c',NULL,'0','0','0'),(308,'Dr','Solange','Cravo Bettini','cravobettini@gmail.com','Member of Society','Rua da paz 195 sala109 Centro. CEP80060160','Brazil',2147483647,'b1c0e07459260eb9a12633dd91c813d4',NULL,'input',NULL,'d521de6d-ad41-4b5a-8ce0-884a4aa2ee50',NULL,'0','0','0'),(309,'Dr','Raj','Palaniappan','docraj@me.com','Member of Society','Apillo Hospitals, Chennai','India',2147483647,'3117d2c31c15d46b31c7706950107d82',NULL,'input',NULL,'269c4c27-99e4-4617-8178-c2db575128b6',NULL,'0','0','0'),(310,'Dr','Mohamed','Shaker','shakersurg82@yahoo.com','Member of Society','Elqusyia Assiut','Egypt',1006904446,'6e2afa095c23d821d25dbf0ba0c7819c',NULL,'input',NULL,'dc7817ad-4d53-4a92-92e6-d080a2b2677e',NULL,'0','0','0'),(311,'Dr','Christian','Enricuso','doctianenricuso@gmail.com','Non Member','149-C Sikatuna Street, Cebu City','Philippines',2147483647,'95264629fddc79bc70ebd495af435279',NULL,'input',NULL,'undefined',NULL,'0','0','0'),(312,'Mr','Anggy','Firman','firmansah.sbboppo@gmail.com','Others','Jakarta','Indonesia',2147483647,'549d66227b9b7d17f3ec54db11c12b3b',NULL,'input',NULL,'1f91454b-198b-4a88-9c52-c753a76e868b',NULL,'0','0','0'),(314,'Mrs','Stefania','Acanfora','acanfora@mcmcongressi.it','Others','Rione sirignano 5','Italy',2147483647,'860ee327b3da353d45c5b159339282d6',NULL,'input',NULL,'e5463e9a-69b4-420c-a1f7-ba6e7b0db4df',NULL,'0','0','0'),(315,NULL,'BEYAZIT','Enes','drenesbeyazit@gmail.com',NULL,NULL,NULL,NULL,'718d4c3dcf1d0a11bab4320b6ae816d3','1718227418241244','facebook',NULL,'c44b1395-7c55-4ba2-b3c4-52fe2d797644',NULL,'0','0','0'),(316,'Dr','Ali','Almontashery','almontashery1@yahoo.com','Member of Society','KingAbdullah medical city','Saudi Arabia',2147483647,'40a4c17038d48fc80ff96f6e10ba1f51',NULL,'input',NULL,'d4c3af18-9a2e-460b-92b8-4c9a137a8227',NULL,'0','0','0'),(317,'Dr','Tsun Miu','Tsui','surgeonmiu@hotmail.com','Member of Society','Yan Chai Hospital, Tseun Wan','Hong Kong',2147483647,'e8b498b1057e63e6ada92a0d3fee18b9',NULL,'input',NULL,'9f695169-cc0f-4086-810f-d7129005f25f',NULL,'0','0','0'),(318,'Dr','Natascha','Potoczna','natascha.potoczna@gmail.com','Member of Society','Zentralstrasse 1','Switzerland',2147483647,'936a65afd733568ff46dc1084dd9fed4',NULL,'input',NULL,'485fdeeb-02a2-4050-8198-69860407961e',NULL,'0','0','0'),(319,'Dr','Valeriu','Andrei','v.andrei@me.com','Member of Society','200 South Orange Ave','United States',2147483647,'a5fcc9b8793badf56fc706a53d3b5ef9',NULL,'input',NULL,'bed3a003-6158-434b-9dc2-d1a636c19789',NULL,'0','0','0'),(320,'Dr','Nestor','Suguitani','nestorbertin@gmail.com','Member of Society','Rua Pirapora 70, apt 71','Brazil',2147483647,'f4c4a289450022c13e66394e318aa218',NULL,'input',NULL,'7fbe8311-6d31-443e-b4d1-7e805c07ac20',NULL,'0','0','0'),(321,'Dr','Luis L','Diaz Morfa','luisdiazm@me.com','Member of Society','Republica de ecuador 4, santo domingo 10112','Dominican Republic',2147483647,'6bddfbb573a79132d9f37f61a5fdcb8e',NULL,'input',NULL,'90e8779d-3a8f-48bc-b504-bf23e5d23ddc',NULL,'0','0','0'),(322,'Mr','Mubariz','Mammadli','mamedlim@gmail.com','Member of Society','H.Aliyev 196','Azerbaijan',2147483647,'fea0268994d5764e138d77168075dd6f',NULL,'input',NULL,'d6d29100-20d7-4a81-b2e8-30b3d9e83bdf',NULL,'0','0','0'),(323,'Dr','Ata','Toufic','touficata@gmail.com','Member of Society','null','United Arab Emirates',505162854,'9c3d9e3268b3498ca43fc59d8b552cbc','10159593957170068','facebook',NULL,'15ade8df-b8a7-4212-b711-9c2ddb5344f0',NULL,'0','0','0'),(324,'Dr','Robert','Barnett','rob_barnett@me.com','Non Member','Brisbane','Australia',2147483647,'bdff0afa2c68f59a771ed994842551fb',NULL,'input',NULL,'cb930da6-ce23-4b7b-87f1-166bab466913',NULL,'0','0','0'),(325,'Dr','Patricio','Lamoza','dr.lamoza@gmail.com','Member of Society','Santiago','Chile',2147483647,'c90701707e3a9d99792ae1b2b18c91d3',NULL,'input',NULL,'a638e9b0-c8b8-4aa7-bd82-056a8b2a363d',NULL,'0','0','0'),(326,'Dr','Amilcar','Herrera','herreramilcar@yahoo.com','Non Member','Hospital Metropolitano','Ecuador',2147483647,'d28f3bdfd1455e7b6e47382e6e5aedd0',NULL,'input',NULL,'538ddcdc-2144-46f8-831f-97e87a7c65a7',NULL,'0','0','0'),(327,'Mr','Hayder','Shabana','haydershabana@gmail.com','Member of Society','1 Wolfe Avenue, Lehenaghmore, Cork','Ireland',861954096,'2fc2f9e7924e5668a1cc276a4b11d0d6',NULL,'input',NULL,'fe39017e-cbb4-4ac2-8c4e-947294d36088',NULL,'0','0','0'),(328,'Dr','Seyed Ali','Jazaeri','alijazayer@gmail.com','Residents','Tehran','Iran, Islamic Republic Of',2147483647,'ffc2caf2b1573b32d7d47c00afd947f0',NULL,'input','uploads_profile_pics/2018-03-08-22-34-08_5aa19e40ec749328.jpg','271cadcd-3583-42a7-947f-ddbe7b8587e8',NULL,'0','0','0'),(329,NULL,'Contreras','Juan','juaneduardocontreras@gmail.com',NULL,NULL,NULL,NULL,'51a7a81e1cc007ec680012b2ce632b1b','10155165871666169','facebook',NULL,'f1b169ab-602d-44e9-a301-6aa3d5403fd1',NULL,'0','0','0'),(330,'Mr','Solomon','Jacob','solomon.jacob@mci-group.com','Others','Dubai','United Arab Emirates',2147483647,'612530ce2371c5171415701679dd87c4',NULL,'input',NULL,'d8df9b14-5a52-4550-a31d-bf020035297d',NULL,'0','0','0'),(331,'Dr','Naser','Javadi Parvaneh','Javadin@yahoo.com','Member of Society','Unit 9.No:9,West Mirdamad Cross Jordan ,Tehran','Iran, Islamic Republic Of',2147483647,'bfd925fa86084bd0300fde7fd05ddd97',NULL,'input',NULL,'374a1de3-8dc7-4fa0-9e74-fc3c1a7feaf7',NULL,'0','0','0'),(332,'Dr','Alfonso','Villalobos Alva','drvillalobosalva@msn.com','Member of Society','Tarascos 3473-440C. Rinconada Santa Rita. Guadalajara, Jal.','Mexico',2147483647,'e2bd2afa8f8915eff12e95b8318a09e8',NULL,'input',NULL,'5a3ec5a3-bd75-436a-bf57-05edbcc8c110',NULL,'0','0','0'),(333,'Mr','Babak','Yousefian','babakyousefian@icloud.com','Others','Unit 25, No4, Parvaneh Ave,Jalale Ale Ahmad Higway Tehran','Iran, Islamic Republic Of',2147483647,'8e6304764bd146ad3b36a351b6c34615',NULL,'input',NULL,'362e8c16-b765-4ca9-8c62-fd97423de727',NULL,'0','0','0'),(334,NULL,'Arnaldo','Lacombe','arnaldo.lacombe@gmail.com',NULL,NULL,NULL,NULL,'44941d988078c7c0373a1e24d868730e','110915097570819286986','google',NULL,'c3c91151-8b92-45d0-a4a9-0ef0eecf341d',NULL,'0','0','0'),(335,'Dr','JoÃ£o','Carneiro','endoregis.carneiro@gmail.com','Member of Society','rua sao clemente 250 casa 4 botafogo rio de janeiro','Brazil',2147483647,'cd4c98c59e1edbd64be91948fbc78e90',NULL,'input',NULL,'f465b5c0-8954-4b32-9b66-77971f45c931',NULL,'0','0','0'),(336,'Dr','Bruno','Ottani','brunomo@terra.com.br','Member of Society','Shis qi 19 conjunto 11 casa 06 Brasilia DF','Brazil',2147483647,'30bdfa7c57340a43a6390d8807ee3014',NULL,'input','uploads_profile_pics/2018-06-08-22-31-44_5b1ae7b10125c336.jpg','4070077b-a962-49c1-900b-44339ed22804',NULL,'0','0','0'),(337,'Dr','Waqas','Aziz','docwaqasaziz@hotmail.com','Non Member','House no. 759 sector I-8/2 Islamabad','Pakistan',2147483647,'68ce7288b1b036f73a1ff951c6524eba',NULL,'input',NULL,'33b4754d-61ee-4745-8821-974e1208b727',NULL,'0','0','0'),(338,'Mr','Rajashekhar','Anumalla','shekaranumalla@gmail.com','Others','Cedar roc','South Africa',2147483647,'e10adc3949ba59abbe56e057f20f883e',NULL,'input',NULL,'b87249e9-9274-42c3-94ed-ee5dcbf48c86','1','1','1','1'),(339,'Dr','Gabriel','Martinez de Aragon','gabrielaragon@yahoo.com','Member of Society','Calle Juanito Oiarzabal 8','Spain',2147483647,'a8c6dd982010fce8701ce1aef8a2d40a',NULL,'input',NULL,'1d2d903c-ea1b-4375-8404-9262fd0f3788',NULL,'0','0','0'),(340,'Dr','Taco','Klem','t.klem@planet.nl','Non Member','Berglustlaan','Netherlands',642524547,'ea4af38b5fa9f75f52e2d737006113f3',NULL,'input',NULL,'65bd9b61-a04f-438a-94d7-9f860879eaf9',NULL,'0','0','0'),(341,'Dr','Raj','Palaniappan','raj@apollobariatrics.com','Member of Society','Apollo Hospitals','India',2147483647,'3117d2c31c15d46b31c7706950107d82',NULL,'input',NULL,'269c4c27-99e4-4617-8178-c2db575128b6',NULL,'0','0','0'),(342,'Dr','Enas','Al Alawi','enasal@yahoo.com','Member of Society','Dubai','UAE',528452918,'ecae1694fb5ca8932cb7fa9af6d4f6a5',NULL,'input',NULL,'abf844e5-c6df-4f57-a101-35f0a7034be5',NULL,'0','0','0'),(343,'Ms','Cristina','Aquino','cris.aquino@me.com','Member of Society','221, Joao Batista Dallarmi street','Brazil',2147483647,'340dd07280edc467dd20ba727b18bb78',NULL,'input',NULL,'a01433db-a285-4cfb-95aa-b9496d3a97c3',NULL,'0','0','0'),(344,'Mr','Osama','Nasr','osanasr@gmail.com','Others','Mirdif','UAE',505506081,'115bf88269c6dccef218afd36976e1c5',NULL,'input',NULL,'1f7618d7-81a2-449c-81a8-6e85e9d2c4e7',NULL,'0','0','0'),(345,'Dr','Eduardo','Grecco','dreduardogrecco@gmail.com','Member of Society','Rua Vicente Leporace,371','Brazil',2147483647,'7eda944f61f3b7e1059cafeac8aed025',NULL,'input',NULL,'301c0002-54b7-4705-9f76-3e9accefed29',NULL,'0','0','0'),(346,'Ms','Ä°dil','TaÅŸkÄ±n','idltaskin@gmail.com','Students and Interns','Edirne Turkey','Edirne',2147483647,'0b203239df56e874689dde80bc44700c',NULL,'input',NULL,'9ebe91b0-1203-4a0b-b508-7cb56f6e8f9b',NULL,'0','0','0'),(347,'Dr','Ali','Almontashery','almuntashery1@yahoo.com','Member of Society','King Abdullah medical city','Saudi',504535918,'40a4c17038d48fc80ff96f6e10ba1f51',NULL,'input',NULL,'d4c3af18-9a2e-460b-92b8-4c9a137a8227',NULL,'0','0','0'),(348,'Dr','Zafer','Sabuncuoglu','drmehmetzafer@yahoo.com','Non Member','Suleyman demirel university faculty of medicine general surgery','Ä°sparta',2147483647,'baa15e4220630e0cac3f406910ed6064',NULL,'input',NULL,'f9ce2af3-33e4-40d4-a1de-35ee07cab207',NULL,'0','0','0'),(349,'Dr','NIKOLAOS','GEORGOPOULOS','nlgeorgopoulos150860@gmail.com','Member of Society','Archimidous 9A Palini Atiki','Greece',2147483647,'f2f337f8157778226038d67c016869ff',NULL,'input',NULL,'eaeb08e6-3ee2-4344-ba62-fe45a546e423',NULL,'0','0','0'),(350,'Mrs','Aleksandra','Ivanova','silomikel@hotmail.com','Others','Wiesbaden','Germany',2147483647,'0f39620b5027875062cb0e8aa71e321f',NULL,'input',NULL,'7fc6a7eb-1cf3-40f0-b9d7-0ba0a143deed',NULL,'0','0','0'),(351,'Dr','Philippe','Topart','ptopart@gmail.com','Member of Society','142 avenue de Lattre de Tassigny','France',603548850,'9a6663f1bf0c56043bff6efc2b6a2599',NULL,'input',NULL,'076d22b4-633e-4d51-9f61-cf990a40d049',NULL,'0','0','0'),(352,'Mrs','Nevine','Shalaby','nevishalaby@yahoo.com','Nurses and Technicians','Dubai','Dubai',556620711,'d7c1c4dfef42ea6f145fb402a52d08c4',NULL,'input',NULL,'83d1464b-320a-4329-a006-66ebe330b2e5',NULL,'0','0','0'),(353,'Mr','Ilya','Elagin','il.elagin@gmail.com','Member of Society','Fakultetskiy pereulok 8-12','Moscow',2147483647,'a91349e320221cd08ef684469757b8dd',NULL,'input',NULL,'cdb13bc6-aa7a-433c-9bb8-b14d4b85f2b5',NULL,'0','0','0'),(354,'Mr','Farhan','Rashid','farhan.rashid@ldh.nhs.uk','Member of Society','20 wells close, Harpenden, AL53LQ','United Kingdom',2147483647,'751b6dd1bce38113c5ac3806af7f9ad1',NULL,'input',NULL,'f142fc05-47ad-443e-bfe0-47f4be11aa37',NULL,'0','0','0'),(355,'Dr','Mohammad','Faroja','faroja@hadassah.org.il','Member of Society','Jerusalem','Israel',2147483647,'1cbda465abcdeab3391daf33b8958d53',NULL,'input',NULL,'68561eb8-657a-408e-9425-6e6b76bd5b8c',NULL,'0','0','0'),(356,'Dr','Sabry','Mahmoud','sabrybadr@yahoo.com','Non Member','Mansoura','Egypt',2147483647,'f1627227e10cd2d0e9b8c924ae797766',NULL,'input',NULL,'925bab5b-f2ee-43ed-b6ab-a1503785dda0',NULL,'0','0','0'),(357,'Dr','Hakan','Karatas','h3301@hotmail.com','Non Member','Adana city hospital','Adana',2147483647,'9494111112868a3d9056cebafa146654',NULL,'input',NULL,'7b954e7c-afcf-444a-9dd6-5e1e66cc0fe0',NULL,'0','0','0'),(358,'Dr','Zelemkhan','Geriev','izo@list.ru','Non Member','Stavropol','Stavropol',2147483647,'20d28c52d2404bd434eddd7f1231825f',NULL,'input',NULL,'130d8da1-ea26-4500-b852-72966073b200',NULL,'0','0','0'),(359,'Dr','Enrico','Fonseca','enricofonseca@yahoo.com.br','Member of Society','Rua Benedita dos Santos de Oliveira 60','Brazil',2147483647,'35e504d4148f272a6669ef31cc3c82f6',NULL,'input',NULL,'b96a1de6-ffdc-42e6-a9f1-70498c4e67c3',NULL,'0','0','0'),(360,'Dr','Oscar','Orozco','mangagastrica@live.com.mx','Non Member','Av mariano otero 3518','Jalisco',2147483647,'03ddcf0def8455f50854958a6f122821',NULL,'input',NULL,'c8a440d4-eb90-4100-8b5d-7bfb244b2b89',NULL,'0','0','0'),(361,'Dr','Ana','Fernandes','anacarollyna@hotmail.com','Member of Society','Rua 24 norte lote 2 bloco B','Brazil',2147483647,'07695c7e976fdedd62f2c3c6a27e523a',NULL,'input',NULL,'1a610db7-59fe-49e9-9532-c8bcd16e8672',NULL,'0','0','0'),(362,'Dr','Ali','Mohammad','dralidashti@yahoo.com','Member of Society','State of Kuwait','Kuwait',96611155,'ea4be00746b7033943058b5ea8465b1c',NULL,'input',NULL,'3e0a0cf4-d348-4444-8a96-bde8713b08fa',NULL,'0','0','0'),(363,'Dr','Jarib','Alvarez','jarib69@yahoo.com','Non Member','Dra 64 99-100','Colombia',2147483647,'78cdf3870bd1f5843f44aa722c97cd64',NULL,'input',NULL,'80e711f2-f6c8-4a74-9e9e-6145c1cf941a','0','0','0','0'),(364,'Dr','Claudio','Canales','drclaudiocanales@gmail.com','Member of Society','3 poniente 420 depto 7','Chile',2147483647,'c985c08bb9fab67f3868f69a68624a79',NULL,'input',NULL,'eee1b7ef-3275-4b22-bc49-ce7dd457ed1e',NULL,'0','0','0'),(365,'Dr','Ali','Alahmary','al-ahmary@hotmail.com','Member of Society','2164','Saudi arabia',2147483647,'ebcf552eec3a6e90a613de563a2b0eb3',NULL,'input',NULL,'b63ed85b-5347-4d56-9f41-d3ec6eb4cf0a',NULL,'0','0','0'),(366,'Dr','Zainab','Alqaidoom','zai-uni@hotmail.com','Students and Interns','Dubai','Bahrain',503130693,'30829a7cb691ca34848e88c58dab0b5c',NULL,'input',NULL,'bf54107a-80e3-4c4a-b9c5-d3f7206721bc',NULL,'0','0','0'),(367,'Dr','Saud','Al-Subaie','dr_saud_@hotmail.com','Member of Society','Kuwait','Kuwait',99993823,'9aada68d96682e9283aa8c5d28c2df24',NULL,'input',NULL,'82fea0b5-6dff-4168-812b-9807c264f5bd',NULL,'0','0','0'),(368,'Ms','Anahita','Kameli','anahita.kameli@mci-group.com','Others','Dubai','Dubai',505997032,'319f4d26e3c536b5dd871bb2c52e3178',NULL,'input',NULL,'undefined',NULL,'0','0','0'),(369,'Dr','Ali','Solmaz','solmazali@hotmail.com','Non Member','Kartaltepe mh. Nazif efendi sok. No:1','Turkey',2147483647,'ad7ba700c331d7dd8a74fe3a64342172',NULL,'input',NULL,'d063675a-5266-42a1-b675-3a961bc988fc','0','0','0','0'),(370,'Ms','Christine','Bauer','cmbauer17@gmail.com','Nurses and Technicians','35194 Bauer Lane Frankford,DE 19945','United States',2147483647,'4c21350281eec8e91a126b24f03238a5',NULL,'input',NULL,'1536e0fa-a7ed-43ee-be23-d427e4c036a7','0','0','0','0'),(372,'Dr','Dfhh','Ghhj','sd@dfg.com','Residents','Ffg','Aland Islands',56688444,'e10adc3949ba59abbe56e057f20f883e',NULL,'input',NULL,'8fa4e6f5-2e6f-41f9-a69c-41a5e9b34e31','0','0','0','0'),(373,'Dr','Piotr','Ziajka','drziajka@gmail.com','Member of Society','81-717 Sopot, Haffnera str. no: 10/2','Poland',2147483647,'bca73a1e0d18de3a4e27fd2a029fdbe6',NULL,'input',NULL,'bac313cf-cb09-4a16-a230-217b37730eac','0','0','0','0'),(374,'Ms','Payal','Belani','payal.belani12@gmail.com','Non Member','P o box 9022 dubai uae','Dubai',2147483647,'bd65210b5c962a57934fa05dea506a84',NULL,'input',NULL,'c2258f04-720f-434c-aaaf-6ba97bda8a33','0','0','0','0'),(375,'Dr','Khalid','Bakier','dr.bakier@gmail.com','Member of Society','Jeddah','Saudi Arabia',2147483647,'28fbdd41b2a06115d83fa3d743570f39',NULL,'input',NULL,'d0845fd7-1aed-46b3-9146-0954b674d444','0','0','0','0'),(376,NULL,'Anumalla','Rajashekar','laxmiraj.oracle@gmail.com',NULL,NULL,NULL,NULL,'6512bd43d9caa6e02c990b0a82652dca','1842197099159022','facebook',NULL,'undefined','0','0','0','0'),(377,NULL,'Sekhar Dineorder',NULL,'',NULL,NULL,NULL,NULL,'947185d9239f52c788c58708ce2762b6','1678427672233426',NULL,NULL,'undefined','0','0','0','0'),(378,'Mr','Majid','Ali','abdulmajidali@hotmail.com','Non Member','33 Craig Drive Ayr','United Kingdom',2147483647,'d4a6437c8a7fd0aad5ee43c8b623b9b0',NULL,'input',NULL,'1c69a006-b8a2-4464-979a-1239a67145f1','0','0','0','0'),(379,'Mr','Sri Krishna','Nunna','s@yopmail.com','Member of Society','C/o Providence Ltd','India',2147483647,'3e6c7d141e32189c917761138b026b74',NULL,'input',NULL,'no token','0','0','0','0'),(380,'Dr','Said','Hassan','saeedih2@gmail.com','Non Member','Rak','Rak',564999106,'f9842333e55f339c962c73debac31f94',NULL,'input',NULL,'baf7c78d-2b78-426e-b947-8015b9de90f1','0','0','0','0'),(381,'Mr','Steve','Toon','stevetoon@conmed.com','Others','3 Ashfield Gardens','United Kingdom',2147483647,'eaac08a3fdc2676ba4d532c7b9cb3aad',NULL,'input',NULL,'d162ff55-35ed-4f0c-9a99-e5656064e016','0','0','0','0'),(382,'Dr','Sarah','Almadani','sarah_almadani80@yahoo.com','Member of Society','131','Jeddah',542666027,'8f730fc39d524a97b111d8d7d38a9857',NULL,'input',NULL,'21a4f8b2-0716-4784-955d-04516adedcf4','0','0','0','0'),(383,'Mr','Maciej','WalÄ™dziak','maciej.waledziak@gmail.com','Member of Society','Ul. Jana Nowaka-JezioraÅ„skiego 48/103, Warszawa 03-982','Poland',606387636,'916eab0fbba16187bf4c20ce85c725e0',NULL,'input',NULL,'68ae6a4e-eb36-48ea-9c59-30808970c23d','0','0','0','0'),(384,'Ms','Lavanya','Varatharajan','lavanya@hotmail.co.uk','Non Member','12 Fir Tree Close','United Kingdom',2147483647,'7ee4e1291c40dfa3fadc6ca0fb1fcb55',NULL,'input',NULL,'2f7cc80a-62da-4053-8360-cb8b87357d10','0','0','0','0'),(385,'Dr','Alireza','Maleki','ali.r.maleki@gmail.com','Residents','Shariati Hospital, Tehran, Iran','Iran',2147483647,'9adf9949b11aea0d5021193e2232dfa1',NULL,'input',NULL,'72b6ba82-9da2-4bf2-bd12-d29ab39f9b26','0','0','0','0'),(386,'Dr','Caio','Aquino','caioaquino@hotmail.com','Member of Society','R Cayowaa, 1575 ap 142 SP Sao Paulo','Brazil',2147483647,'76b841b9fc99b5a89558d9f8edd1aff8',NULL,'input',NULL,'undefined','0','0','0','0'),(387,'Dr','Firas','Fayyadh','firas_fadhil78@yahoo.com','Member of Society','Iraq Baghdad','Baghdad',2147483647,'e8e93db5fe6e8217768e2310dad6fe99',NULL,'input',NULL,'79dc4db9-d539-4a5f-94b0-c49f94c06dc1','0','0','0','0'),(388,'Mrs','Sharmila','Vyas','sharmiladhagat@gmail.com','Non Member','Mumbai','India',2147483647,'8953995961c52714214feba565566819',NULL,'input',NULL,'4eb1c506-52ac-4eea-99e8-b05efef414aa','0','0','0','0'),(389,'Dr','Abdulkadir','Bedirli','bedirlia@gazi.edu.tr','Member of Society','Gazi University, Ankara','Turkey',2147483647,'3c594b28af1df4b1ff420e29bb4c8707',NULL,'input',NULL,'23d05b71-ac2a-44ce-a4fc-360589acd811','0','0','0','0'),(390,'Mr','Edmore','Chauraya','undefined','Non Member','196 madiba street','Zimbabwe',813731515,NULL,'988uaEv46g',NULL,NULL,'AQUKT5R13P3O9S2hj2rEG6OrqEVKFSRR4I5_vLL8dguur1CsPH_3SFeyuUel6fiA4yxztD5uO4oZmsRgMy1B47TO2rgNOn2x1HKuwxtOgmOZ7M6x_LzQXKTQWkuylyo4Xp51XmprtsliF3bRgtTAh67dhHcG5yDvQXXbdVgduvhrQB50WR2z3ftJoqcMo4JKJbfxjsshpBwpiaBxQfxy9Z9JZ6AfroORhj_p_gH2lCsYKipqrKqtwXzEfacPKRbatu7RaexN7I9EFefjPMo_acAPZXpDpc03gNKZWqZ0jIkm-U4ib6AxDrMYI2t8MqjbmDKnm7b5qbJfG6mE5D8sB6LYpt-Dfg','','1','0',''),(391,NULL,'Edmore','Chauraya','null',NULL,NULL,NULL,NULL,NULL,'988uaEv46g',NULL,NULL,'AQXlb8gOkNiUSO8AA8NEOdBv889PPJdi-eFFJlG2yNo4V5ey76j7SF7MamZgGAC--jQS4UpdAcma7B0IT1M8rsl3hymCuzYWFf6qoiMKeHqhH6m7yp8bzaKCiZwGjm9N-1tbi8ae72PmugUtk9kAdVekTkuVpKuZY69RUqortjSEMbxQQHFZtD-J-jj7nqgm88E7pL7RmHarafZq0_Aljse76Q2iKzC-k-zcVaDfcTNo8OiJrSWyuOWYaANcK3mWOiofSf6aJT8M95ofKif1KeVHiscfpNiv_A7_R7F-Ho7AHyDftPK-o-4EGlUQuwLslsJL4XDDwEwRXa4zu511L2PZcEkrmw','0','0','0','0'),(392,'Mr','Edmore','Chauraya','Email','Non Member','206 swiss road','Zimbabwe',813731515,NULL,'988uaEv46g',NULL,NULL,'AQUk-O95D1FvC9BNrlWbhyM1egRzCdlqDQlBw9DhbLl8g1D6EESD3sP9nbJdl9uZzD78H1NR72IVngX_jcoYovr12nHHKTMqpA-n1j31Jlb-Ogrcv6xAx4ehsrIgxQXXcP4UmBOQ8XQPKPgXdzyWnZOh2ihEd4EskZ4ZM06Rx3MbLld30VWBis4XlYgusoPa7-4jzksSkKxyU5MRH1GBlnnCwkGO1Itq6bG_rFuHxBeNKwoB6nEAUHfIwU6lRyjVAccGcNmHf6xeWGPfV3YI41CelhwjSvmLrXs57XZIi3JYpsmXnH_6ny6I2ZBPzvdzlwreQ--LNCUaPKdO3x4_bsaWCyP8Pw','','1','0',''),(393,'Dr','Andreas','Plamper','absolutes@web.de','Member of Society','Kardinal-Schulte-Str. 3, 51429 Bergisch Gladbach','Germany',2147483647,'1cf9058d155e9601b7ff2bbbde9b895b',NULL,'input',NULL,'49edc634-ba4d-45a8-a4ae-343d539ec8ae','0','0','0','0'),(394,'Dr','Fabrizio','Bellini','bellinifabrizio11@gmail.com','Member of Society','Via Pietra 18, Viadanica','Italy',2147483647,'5e79d6181e5b39d3dc964cdcee65086e',NULL,'input',NULL,'b78d8204-a2cb-4bc5-b638-54f13b18c7b0','0','0','0','0'),(395,'Dr','Ahmed','Osman','ahmedosman21@aol.com','Member of Society','2 El Fayoum st.,El korba,Heliopolis, Cairo','Egypt',2147483647,'c731897a512284386f756b3532e5b8b4',NULL,'input',NULL,'35f70db4-7033-43e1-bb01-2fd784d7ecf0','0','0','0','0'),(396,'Dr','Marcos','Rodriguez','marcosdoc@gmail.com','Member of Society','William ward 3055','Chile',2147483647,'d7ca250c56dea028c37168b2827bf7aa',NULL,'input',NULL,'ce876e5d-7577-40fc-9fd4-7fd8eeeca563','0','0','0','0'),(397,'Mr','Alfonso','Antequera','alfant@gmail.com','Member of Society','St Bernardâ€™s Hospital','Gibraltar',2147483647,'415526367714ecf2b33b05e4db4fd7d5',NULL,'input',NULL,'129d7f44-7886-49df-8ea1-3b3b782c6543','0','0','0','0');
/*!40000 ALTER TABLE `mciregister` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblLeave`
--

DROP TABLE IF EXISTS `tblLeave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblLeave` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `UserId` int(100) NOT NULL,
  `EmpName` varchar(50) NOT NULL,
  `LeaveType` varchar(50) NOT NULL,
  `StartDate` varchar(50) NOT NULL,
  `EndDate` varchar(50) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `Approver` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Created_on` date NOT NULL,
  `escalated_to` varchar(45) DEFAULT NULL,
  `paidtype` varchar(45) DEFAULT NULL,
  `other` longtext,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblLeave`
--

LOCK TABLES `tblLeave` WRITE;
/*!40000 ALTER TABLE `tblLeave` DISABLE KEYS */;
INSERT INTO `tblLeave` VALUES (41,67,'hh','kj','','','','','','0000-00-00',NULL,NULL,NULL),(42,20,'Emmanuel Mulea','Annual Leave','13 Jul 2017','28 Jul 2017','sick','Rajesh@providencesoftware.co.za','Declined','2017-07-31',NULL,'unpaid','undefined'),(43,21,'Emm nick','Sick Leave','4 Jan 2017','11 May 2017','Im sick','Rajesh@providencesoftware.co.za','Declined','2017-08-03','prabhakar.manikonda@providence.email',NULL,'undefined'),(44,33,'Trishini Trish','Other','16 Jul 2017','17 Jul 2017','Gdgdfttg','rajesh@providencesoftware.co.za','In Progress','2017-08-16',NULL,NULL,'Fdggsf'),(45,33,'Trishini Trish','Other','16 Aug 2017','17 Aug 2017','Gdgdfttg','rajesh@providencesoftware.co.za','In Progress','2017-08-16',NULL,NULL,'Fdggsf'),(46,77,'Andre S','Annual Leave','16 Oct 2017','16 Oct 2017','Just a test application','rajesh@providencesoftware.co.za','In Progress','2017-10-16',NULL,NULL,'undefined');
/*!40000 ALTER TABLE `tblLeave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblTimesheet`
--

DROP TABLE IF EXISTS `tblTimesheet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblTimesheet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `EmpName` varchar(50) NOT NULL,
  `MorningSession` varchar(500) NOT NULL,
  `AfternoonSession` varchar(500) NOT NULL,
  `TimesheetDate` varchar(50) NOT NULL,
  `Created_On` date NOT NULL,
  `approve` enum('Y','N') DEFAULT NULL,
  `approver` varchar(45) DEFAULT NULL,
  `report_to` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `userId_fk_idx` (`UserId`),
  CONSTRAINT `userId_fk` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblTimesheet`
--

LOCK TABLES `tblTimesheet` WRITE;
/*!40000 ALTER TABLE `tblTimesheet` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblTimesheet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblmeeting`
--

DROP TABLE IF EXISTS `tblmeeting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblmeeting` (
  `idtblmeeting` int(11) NOT NULL AUTO_INCREMENT,
  `tblminutes` longtext,
  `tbldate` varchar(45) DEFAULT NULL,
  `tblcreated_on` date NOT NULL,
  `tblname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtblmeeting`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmeeting`
--

LOCK TABLES `tblmeeting` WRITE;
/*!40000 ALTER TABLE `tblmeeting` DISABLE KEYS */;
INSERT INTO `tblmeeting` VALUES (1,'tblminutes','0000-00-00','0000-00-00',NULL),(2,'tblminutes','0000-00-00','2017-06-21',NULL),(3,'tblminutes','2017-06-21','2017-06-21',NULL),(4,'helo','0000-00-00','2017-06-21',NULL),(5,'helloo','0000-00-00','2017-06-21',NULL),(6,'hhjs','0000-00-00','2017-06-21',NULL),(7,'tblminutes','0000-00-00','2017-06-21',NULL),(8,'tblminutes','0000-00-00','2017-06-21',NULL),(9,'tblminutes','22 jun 2017','2017-06-21',NULL),(10,'gh','21 Jun 2017','2017-06-21',NULL),(11,'hello','21 Jun 2017','2017-06-21','test'),(12,'Hello term','4 Jul 2017','2017-07-04','sobhan'),(13,'Good term','13 Jul 2017','2017-07-13','nocksmulea@gmail.com'),(14,'hello PSS','13 Jul 2017','2017-07-13','nocksmulea@gmail.com'),(15,'PSS Awesome','13 Jul 2017','2017-07-13','nocksmulea@gmail.com'),(16,'PSS','14 Jul 2017','2017-07-13','emmanuel.mulea@providencesoftl.com');
/*!40000 ALTER TABLE `tblmeeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userroles`
--

DROP TABLE IF EXISTS `userroles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userroles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) DEFAULT '0',
  `status` enum('1','2') DEFAULT '1' COMMENT '1 => active, 2=> inactive',
  `is_deleted` enum('Y','N') DEFAULT 'N' COMMENT 'Y => deleted , N=> not deleted',
  `created_on` datetime DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='To store the user roles ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userroles`
--

LOCK TABLES `userroles` WRITE;
/*!40000 ALTER TABLE `userroles` DISABLE KEYS */;
INSERT INTO `userroles` VALUES (1,'Admin','1','N','2017-01-04 00:00:00',1,'2017-01-31 15:34:05',1,'can access all users'),(2,'Manager','1','N','2017-01-31 15:34:22',1,'0000-00-00 00:00:00',NULL,'can access only the employees who is reporting to him/her.'),(3,'user','1','N','2017-02-20 12:08:58',NULL,'2017-02-20 12:08:58',NULL,'can not access');
/*!40000 ALTER TABLE `userroles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) DEFAULT '0',
  `lastName` varchar(50) DEFAULT '0',
  `surName` varchar(255) NOT NULL,
  `gender` enum('M','F') NOT NULL COMMENT 'M=>Male,F=>Female',
  `email` varchar(128) DEFAULT '0',
  `date_of_birth` date DEFAULT '0000-00-00',
  `reported_to` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `work_location` text NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL,
  `status` enum('1','2') DEFAULT '1' COMMENT '1 => active, 2 => inactive',
  `is_deleted` enum('Y','N') DEFAULT 'N' COMMENT 'Y => deleted , N => not deleted',
  `created_on` datetime DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) DEFAULT NULL,
  `new_user` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT '''Y=> Newly Registered, N => No''',
  `department` varchar(45) DEFAULT NULL,
  `count_attempts` int(11) DEFAULT '0',
  `job_type` varchar(45) DEFAULT NULL,
  `id_num` varchar(45) DEFAULT NULL,
  `emp_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'Prabhakar','Manikonda','M','M','prabhakar.manikonda@providence.email','1970-01-01','prabhakar.manikonda@providence.email','89712892','980129821','South Africa','11','prabhakar.manikonda@providence.email','053b6ae96e3f328e8a9f00ee2f2b4ba7',1,'1','N','2017-02-20 12:11:54',1,'2017-08-16 08:51:03',11,'N','Excutive Director',0,'permanent','6873978',''),(26,'Prinasen','Chetty','C','M','Prinasen@providencesoftware.co.za','2017-02-08','prabhakar.manikonda@providence.email','0835830290','0835830290','','17','Prinasen@providencesoftware.co.za','5ce73fc5aede9c307468328b6458253e',2,'1','N','2017-08-14 14:07:20',11,'2017-08-16 08:50:53',11,'N','Chief Excutive Offer',0,'permanent','Not provided','Not Provided'),(27,'Shiny','Shiny','P','F','shiny@providencesoftware.co.za','2017-07-08','Prinasen@providencesoftware.co.za','0611992792','0611992792','','15','shiny@providencesoftware.co.za','1953f37abae4edd9a0607048168ab8cd',2,'1','N','2017-08-16 08:20:28',11,'2017-08-16 08:51:36',11,'N','Finance & Accounts Admin',0,'permanent','2017','Not Provided'),(28,'Sabelo','Sabelo','K','F','sabelo@providencesoftware.co.za','2017-07-08','shiny@providencesoftware.co.za','0842959671','0842959671','','15','sabelo@providencesoftware.co.za','c1e817c99c038b8de9d4a21deabcaf2a',2,'1','N','2017-08-16 08:28:03',11,'2017-08-16 08:52:02',11,'N','HR Manager',0,'permanent','2018','Not Provided'),(29,'Defin','Defin','D','F','defin.dube@providencesoftware.co.za','2017-07-08','sabelo@providencesoftware.co.za','0743762002','0743762002','','15','defin.dube@providencesoftware.co.za','45cea1594c7da630d42314dfb859fb25',3,'1','N','2017-08-16 08:37:17',11,'2017-08-16 08:52:22',11,'N','Finance & Accounts Admin',0,'permanent','Not provided','Not Provided'),(30,'Rajashekar','Hipparage','H','M','rajesh@providencesoftware.co.za','1970-01-01','prabhakar.manikonda@providence.email','0748329222','0748329222','','11','rajesh@providencesoftware.co.za','3dff3c720035dac117d0a2abafaf1a98',2,'1','N','2017-08-16 08:40:52',11,'2017-08-16 08:52:32',11,'N','SharePoint Administrator',0,'permanent','Not provided','Not Provided'),(31,'Levert','Lesley ','D','M','levert.daniels@providencesoft.com','1970-01-01','prabhakar.manikonda@providence.email','0847825654','0847825654','','11','levert.daniels@providencesoft.com','eb4cb370a00d58c3ac8443356d749ddc',2,'1','N','2017-08-16 08:44:40',11,'2017-08-16 08:52:41',11,'N','IT Administrator',0,'permanent','Not provided','Not Provided'),(32,'Berlina','Johanna ','B','F','berlina.ueckermann@providencegroup.co.za','1970-01-01','rajesh@providencesoftware.co.za','0836484049','0836484049','','11','berlina.ueckermann@providencegroup.co.za','a1b581830c67dfd2d9ad40e6ac39ed3f',2,'1','N','2017-08-16 08:47:52',11,'0000-00-00 00:00:00',NULL,'N','Marketing and Graphic Designer Specialist',0,'permanent','Not provided','Not Provided'),(33,'Trishini','Trish','N','F','trishini.naicker@providencesoftware.co.za','1970-01-01','rajesh@providencesoftware.co.za','0719430171','0719430171','','11','trishini.naicker@providencesoftware.co.za','ac0bbfc06880ca62ba66d95ea69a9f99',2,'1','N','2017-08-16 08:50:34',11,'0000-00-00 00:00:00',NULL,'N','Operations Manager',0,'permanent','Not provided','Not Provided'),(34,'TLHOMPHO','TETSOANE','T','M','mpho.tetsoane@providencesoft.com','1970-01-01','rajesh@providencesoftware.co.za','072 957 5619','072 957 5619','','11','mpho.tetsoane@providencesoft.com','d16df921f6b658c8755abaf16e262adc',3,'1','N','2017-08-16 08:59:55',11,'0000-00-00 00:00:00',NULL,'N','0',0,'permanent','Not provided','Not Provided'),(35,'Edmore','Ngoni','Chauraya','M','edmore@Providencesoft.com','2017-07-08','rajesh@providencesoftware.co.za','0813731515','0813731515','','11','edmore@Providencesoft.com','30b835bf0d74dd9523954718590b3ce2',1,'1','N','2017-08-16 09:04:41',11,'2019-03-11 13:22:17',76,'N','Senior Developer',0,'Fixed term contractor','Not provided','Not Provided'),(36,'Neelima','Neelima','M','F','neelima@providencesoftware.co.za','1970-01-01','rajesh@providencesoftware.co.za','0643562429','0643562429','','11','neelima@providencesoftware.co.za','00873eefb8b05c693a48b9351e205d00',2,'1','N','2017-08-16 09:24:10',11,'0000-00-00 00:00:00',NULL,'N','Software Engineer : IT Project Manager',0,'permanent','Not provided','Not Provided'),(37,'Emmanuel','Emma','M','M','emmanuel.mulea@providencesoft.com','1970-01-01','edmore@Providencesoft.com','0629332370','0629332370','','11','emmanuel.mulea@providencesoft.com','0734388bcdc35373c05e6412225bb141',3,'1','N','2017-08-16 09:26:07',11,'2017-09-07 12:14:12',76,'N','Junior Mobile App Developer',0,'Fixed term contractor','Not provided','Not Provided'),(38,'Rama','Rama','K','M','rama.kata@gmail.com','1970-01-01','Prinasen@providencesoftware.co.za','0760547550','0760547550','','11','rama.kata@gmail.com','7ed54a4b1b6ac0328ca8ad4a242d4df1',2,'1','N','2017-08-16 09:38:00',11,'0000-00-00 00:00:00',NULL,'N','SharePoint Developer',0,'permanent','Not provided','Not Provided'),(39,'Alisha','Alisha','M','F','Alisha.munilall@providencesoft.com','1970-01-01','rama.kata@gmail.com','0832897132','0832897132','','11','Alisha.munilall@providencesoft.com','e5574237bbddd2153081a1f9b25a819a',3,'1','N','2017-08-16 09:42:16',11,'0000-00-00 00:00:00',NULL,'N','Junior Developer',0,'permanent','Not provided','Not Provided'),(40,'Rashmika','Rashmika','S','M','rashmika.singh@providencesoftware.co.za','1970-01-01','sabelo@providencesoftware.co.za','0798009801','0798009801','','11','rashmika.singh@providencesoftware.co.za','cc6ee9784c64d3ad5a0887e6214d9722',3,'1','N','2017-08-16 09:45:13',11,'0000-00-00 00:00:00',NULL,'N','HR',0,'permanent','Not provided','Not Provided'),(41,'Richard','Mtshweni','M','M','richard.mtshweni@providencesoftware.co.za','2017-07-08','edmore@Providencesoft.com','0786653265','0786653265','','11','richard.mtshweni@providencesoftware.co.za','962e53aa6584bd30c59555fef14af5c2',3,'1','N','2017-08-16 09:47:26',11,'2017-09-29 14:14:46',76,'N','Junior Mobile App Developer',0,'permanent','Not provided','Not Provided'),(42,'Ralwinn','George ','J','M','ralwinn.johnson@providencesoft.com','1970-01-01','edmore@Providencesoft.com','0638597497','0638597497','','11','ralwinn.johnson@providencesoft.com','9a6f92f24a573f63b01052002fa4fbbc',3,'1','N','2017-08-16 09:49:18',11,'0000-00-00 00:00:00',NULL,'N','Junior Mobile App Developer',0,'permanent','Not provided','Not Provided'),(43,'Caitlin','Cecily','J','M','caitlin.jacobs@providencesoft.com','1970-01-01','rajesh@providencesoftware.co.za','0616288365','0616288365','','11','caitlin.jacobs@providencesoft.com','f2f44731a1de0b7e5e1e4fec9946981f',3,'1','N','2017-08-16 09:53:45',11,'0000-00-00 00:00:00',NULL,'N','IT Administrator',0,'permanent','Not provided','Not Provided'),(45,'Johan','Johan','H','M','johan.hattingh@providencesoft.com','2017-02-08','Prinasen@providencesoftware.co.za','0832870739','0832870739','','12','johan.hattingh@providencesoft.com','0a80bc4fa729f042bf403b5a200568a5',2,'1','N','2017-08-16 14:30:08',11,'0000-00-00 00:00:00',NULL,'N','Project manager',0,'Fixed term contractor','Not provided','Not Provided'),(46,'Ranjith','Ranjith','I','M','ranjith.srivastav@providencesoft.com','1970-01-01','johan.hattingh@providencesoft.com','06732878','09383887827','','12','ranjith.srivastav@providencesoft.com','202a94a81ae1049d458aedbcc2940125',2,'1','N','2017-08-16 14:33:41',11,'0000-00-00 00:00:00',NULL,'N','SharePoint Developer',0,'permanent','Not provided','Not Provided'),(47,'Limeshan','Limeshan','G','M','limeshan.govender@providencesoft.com','2017-01-08','ranjith.srivastav@providencesoft.com','0603897221','0603897221','','12','limeshan.govender@providencesoft.com','b2815c20a1a899cf3759cdfba1aaebd7',3,'1','N','2017-08-16 14:36:38',11,'0000-00-00 00:00:00',NULL,'N','Sales Excutive',0,'permanent','Not provided','Not Provided'),(48,'Malekapele','Malekapele','M','M','malk@providencesoft.com','2017-06-08','andre.swanepoel@providencesoft.com','0832089636','0832089636','','11','malk@providencesoft.com','4c0a79e130e35935e0f317f08d0835a6',3,'1','N','2017-08-16 14:41:53',11,'2017-08-16 15:25:53',11,'N','Web Designer',0,'permanent','Not provided','Not Provided'),(49,'Rajesh','Rajesh','P','M','rajeshp@providence.email','1970-01-01','johan.hattingh@providencesoft.com','0714147808','0714147808','','12','rajeshp@providence.email','c9c2d2926d65db6794e98783e5fe755b',2,'1','N','2017-08-16 14:44:37',11,'2017-08-16 14:48:38',11,'N','SharePoint Developer',0,'permanent','Not provided','Not Provided'),(50,'Venkata','Narayana  ','R','M','venkat.narayana@providencesoft.com','2017-07-08','johan.hattingh@providencesoft.com','0845802607','0845802607','','12','venkat.narayana@providencesoft.com','5e0bfa65061ecc205798f5583da2b2fd',3,'1','N','2017-08-16 14:47:13',11,'0000-00-00 00:00:00',NULL,'N','Mobile Application Developer',0,'permanent','Not provided','Not Provided'),(51,'Sobhan','Tulasi ','M','M','sobhan@providencesoftware.co.za','2017-07-08','rajeshp@providence.email','0842800328','0842800328','','12','sobhan@providencesoftware.co.za','344aeb080172eac3cf1059b7d3bbf60e',3,'1','N','2017-08-16 14:51:03',11,'0000-00-00 00:00:00',NULL,'N','Software Engineer : IT Project Manager',0,'permanent','Not provided','Not Provided'),(52,'Kumbirai','Kumbirai','M','M','kumbirai.mtshakazi@providencesoft.com','1970-01-01','andre.swanepoel@providencesoft.com','078 525 6232','078 525 6232','','11','kumbirai.mtshakazi@providencesoft.com','e28edfcc05373c797837bac870a4f268',3,'1','N','2017-08-16 14:56:51',11,'2017-08-16 15:25:27',11,'N','Web Designer',0,'permanent','Not provided','Not Provided'),(53,'Desmond','Van ','D','M','desmond.vandeventer@providencesoft.com','2017-08-08','timothy.foreman@providencesoft.com','076 890 8107','076 890 8107','','12','desmond.vandeventer@providencesoft.com','0c604ea3aefc639b61f6c094695a8e55',3,'1','N','2017-08-16 15:00:35',11,'2017-08-16 15:11:40',11,'N','Business Development Executive',0,'permanent','Not provided','Not Provided'),(54,'Donovan','Richard ','B','M','donovan.burgess@providencesoft.com','1970-01-01','timothy.foreman@providencesoft.com','','','','11','donovan.burgess@providencesoft.com','0addfddfe3bec9eeb26c7b9929f684ca',3,'1','N','2017-08-16 15:06:47',11,'2017-08-16 15:11:57',11,'N','Project manager',0,'permanent','Not provided','Not Provided'),(55,'Gavin','Gavin','H','M','Gavin.horne@providencesoft.com','1970-01-01','johan.hattingh@providencesoft.com','0832122429','0832122429','','12','Gavin.horne@providencesoft.com','7bd312cd6677c333789a2e969ee54bf9',3,'1','N','2017-08-16 15:09:00',11,'0000-00-00 00:00:00',NULL,'N','System Engineer',0,'permanent','Not provided','Not Provided'),(56,'Timothy','Tim','F','M','timothy.foreman@providencesoft.com','1970-01-01','Prinasen@providencesoftware.co.za','0824555592','0824555592','','11','timothy.foreman@providencesoft.com','531b7dab37ea4df3d454bc9978f23ed9',2,'1','N','2017-08-16 15:11:23',11,'0000-00-00 00:00:00',NULL,'N','Project manager',0,'permanent','Not provided','Not Provided'),(57,'Madonna','Sebenzile ','D','M','madonna.dlamini@providencesoft.com','2017-02-08','prabhakar.manikonda@providence.email','0721268735','0721268735','','12','madonna.dlamini@providencesoft.com','e4fbf70410bd9e132a062680c8f1b9cf',3,'1','N','2017-08-16 15:14:25',11,'0000-00-00 00:00:00',NULL,'N','Microsoft SQL Database Admin',0,'permanent','Not provided','Not Provided'),(58,'Kobus','Van','V','M','kobus.vanderwalt@providencesoft.com','2017-08-08','timothy.foreman@providencesoft.com','0716036924','0716036924','','12','kobus.vanderwalt@providencesoft.com','3fbbe91af0868cf3804bdd92c458387c',2,'1','N','2017-08-16 15:16:58',11,'0000-00-00 00:00:00',NULL,'N','Microsoft SQL Database Admin',0,'permanent','Not provided','Not Provided'),(59,'Kulani','Kulani','N','M','kulani.ngamba@providencesoftware.co.za','1970-01-01','rama.kata@gmail.com','0788594702','0788594702','','11','kulani.ngamba@providencesoftware.co.za','0ae20c8cd4075fafaf39c99c7962fb2f',3,'1','N','2017-08-16 15:19:23',11,'0000-00-00 00:00:00',NULL,'N','C# Developer',0,'Fixed term contractor','Not provided','Not Provided'),(61,'Emile','Emile','C','M','emile@providencesoftware.co.za','2017-07-08','prabhakar.manikonda@providence.email','0824669284','0824669284','','16','emile@providencesoftware.co.za','096dda2a073476277506430b7c0ad608',2,'1','N','2017-08-16 15:34:39',11,'0000-00-00 00:00:00',NULL,'N','Senior Developer',0,'permanent','Not provided','Not Provided'),(62,'Vamsi','Bandaru','B','M','vamsib@providencesoftware.co.za','1970-01-01','emile@providencesoftware.co.za','0837552035','0837552035','','11','vamsib@providencesoftware.co.za','da8fe3b5c9e102c5953a937cb75a28aa',3,'1','N','2017-08-16 15:38:08',11,'0000-00-00 00:00:00',NULL,'N','HR',0,'permanent','Not provided','Not Provided'),(63,'Jesse','Jesse','P','M','jesse@providencesoftware.co.za','2017-09-08','emile@providencesoftware.co.za','0611993166','0611993166','','16','jesse@providencesoftware.co.za','f2a079521fd9dcc0b65d93e7fe42f0a5',3,'1','N','2017-08-16 15:40:48',11,'0000-00-00 00:00:00',NULL,'N','Project manager',0,'permanent','Not provided','Not Provided'),(64,'Mpho','Mpho','T','M','mphothekisho@hotmail.com','1970-01-01','emile@providencesoftware.co.za','0832091531','0832091531','','16','mphothekisho@hotmail.com','0c9b987d38615c3ecac3597f4e681cf3',3,'1','N','2017-08-16 15:42:46',11,'0000-00-00 00:00:00',NULL,'N','Project manager',0,'permanent','Not provided','Not Provided'),(65,'Sthembiso','Sthe','M','M','sthembisomngadi@gmail.com','1970-01-01','emile@providencesoftware.co.za','0739497498','0739497498','','16','sthembisomngadi@gmail.com','35c4d8631e9f3cd12216966e20c033b0',3,'1','N','2017-08-16 15:44:29',11,'0000-00-00 00:00:00',NULL,'N','Web Designer',0,'permanent','Not provided','Not Provided'),(66,'Thabang','Thabang','M','M','maphosatc@gmail.com','2017-07-08','emile@providencesoftware.co.za','0848677567','0848677567','','11','maphosatc@gmail.com','3d3dedc8518683f13306bfbdea8f457b',1,'1','N','2017-08-16 15:46:25',11,'0000-00-00 00:00:00',NULL,'N','HR',0,'permanent','Not provided','Not Provided'),(67,'Emmanuels','Ema','M','M','emagaya@gmail.com','1970-01-01','emile@providencesoftware.co.za','0744774985','0744774985','','16','emagaya@gmail.com','53c7374674fbe8723051aedf8f4ef864',3,'1','N','2017-08-16 15:48:49',11,'0000-00-00 00:00:00',NULL,'N','Project manager',0,'permanent','Not provided','Not Provided'),(68,'Aobakwe','Ontlametse ','K','M','kg.aobakwe@gmail.com','2017-08-08','emile@providencesoftware.co.za','0714715809','0714715809','','16','kg.aobakwe@gmail.com','84bd39a1afb027af5eb913e1e985fc4c',3,'1','N','2017-08-16 15:51:36',11,'0000-00-00 00:00:00',NULL,'N','SharePoint Developer',0,'permanent','Not provided','Not Provided'),(69,'Trever','Trever','P','M','trever.pestana@providencesoft.com','1970-01-01','emile@providencesoftware.co.za','081 049 6204','081 049 6204','','16','trever.pestana@providencesoft.com','dd0c908afe587b016f5715dcc631c74e',3,'1','N','2017-08-16 15:53:09',11,'0000-00-00 00:00:00',NULL,'N','Project manager',0,'permanent','Not provided','Not Provided'),(70,'Darren','D','V','M','Darren@RavenSystems.co.za','1970-01-01','emile@providencesoftware.co.za','072 8779316','072 8779316','','16','Darren@RavenSystems.co.za','cf3965555c0a9e1e4573c116443b2eaf',3,'1','N','2017-08-16 15:55:13',11,'2017-08-16 15:55:38',11,'N','Project manager',0,'permanent','Not provided','Not Provided'),(71,'David','David','M','M','david@providencesoftware.co.za','1970-01-01','rajeshp@providence.email','0832225500','0832225500','','11','david@providencesoftware.co.za','28478a5456c8d0047031bd6d37d03311',3,'1','N','2017-08-16 15:59:52',11,'0000-00-00 00:00:00',NULL,'N','SharePoint Developer',0,'permanent','Not provided','Not Provided'),(72,'Mohd','Sartaj ','HK','M','sartaj.khan@providencesoftware.co.za','2017-08-08','rajeshp@providence.email','0782571857','0782571857','','16','sartaj.khan@providencesoftware.co.za','19afae8331f70740a34bd88f3d6b1a6c',3,'1','N','2017-08-16 16:02:20',11,'0000-00-00 00:00:00',NULL,'N','Junior Business Analyst',0,'permanent','Not provided','Not Provided'),(73,'Mitchael','Mitch','M','F','mitchael.mahlatji@providencesoft.com','2017-02-08','ranjith.srivastav@providencesoft.com','0827039741','0827039741','','17','mitchael.mahlatji@providencesoft.com','d7867bba6000770c45ec9e310a87aaf2',3,'1','N','2017-08-16 16:04:44',11,'2017-08-16 16:07:32',11,'N','BA',0,'permanent','Not provided','Not Provided'),(74,'Khotso','Beauty ','M','M','khotso.mogase@providencesoft.com','1970-01-01','ranjith.srivastav@providencesoft.com','0768739321','0768739321','','17','khotso.mogase@providencesoft.com','6a5e09708c864f60301120cb26f81f45',3,'1','N','2017-08-16 16:06:52',11,'2017-08-16 16:07:13',11,'N','Junior Business Analyst',0,'permanent','Not provided','Not Provided'),(75,'Katlego','Robert','R','M','katlego.ramalekane@providencesoft.com','2017-08-08','kobus.vanderwalt@providencesoft.com','0715521864 ','0715521864 ','','17','katlego.ramalekane@providencesoft.com','2df50e86d200927d973d4719eaf8a692',3,'1','N','2017-08-16 16:10:25',11,'0000-00-00 00:00:00',NULL,'N','Microsoft SQL Database Admin',0,'permanent','Not provided','Not Provided'),(76,'Providence','Software','Solutions','M','pss@providencesoft.com','1970-01-01','prabhakar.manikonda@providence.email','832980932','982798372','','11','pss@providencesoft.com','a897b4119b746561ede6de8defc43373',1,'1','N','2017-08-16 16:20:53',11,'0000-00-00 00:00:00',NULL,'N','HR',0,'permanent','Not provided','Not Provided'),(77,'Andre','S','S','M','andre.swanepoel@providencesoftware.co.za','1970-01-01','rajesh@providencesoftware.co.za','8988329','8932832','','11','andre.swanepoel@providencesoftware.co.za','faea85c14f5ab5fad41a3bf9882c55b9',2,'1','N','2017-09-05 10:12:18',76,'0000-00-00 00:00:00',NULL,'N','Web Designer',0,'permanent','Not provided','Not Provided'),(78,'nkosimphile','mandla','m','M','mandla.mpangane@providencesoft.com','1970-01-01','rajesh@providencesoftware.co.za','8985','898','','11','mandla.mpangane@providencesoft.com','b3ab238c9391d157c7b0ff5a901ea33b',3,'1','N','2017-09-07 12:11:47',76,'0000-00-00 00:00:00',NULL,'N','IT support',0,'Fixed term contractor','not provided','standton');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_locations`
--

DROP TABLE IF EXISTS `work_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_locations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `latitude` decimal(11,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `status` enum('1','2') NOT NULL,
  `mobile` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_locations`
--

LOCK TABLES `work_locations` WRITE;
/*!40000 ALTER TABLE `work_locations` DISABLE KEYS */;
INSERT INTO `work_locations` VALUES (11,'ZA','Office 35','35 Western Service Road, Woodmead, Sandton.',-26.08132000,28.08645000,'2017-02-02 14:24:18',1,'0000-00-00 00:00:00',0,'1','+27 0116562033'),(12,'ZA','RTT','RTT 1459, 39 Taljaard Rd, Boksburg, 1459, South Africa.',-26.16483830,28.23365320,'2017-02-02 14:39:01',1,'0000-00-00 00:00:00',0,'1',''),(13,'IN','PSS India','Flat No: 101, PS Residency, Madhapur, Hyderabad, Telangana 500081',17.44884700,78.38750900,'2017-02-02 14:43:18',1,'2017-02-02 14:43:39',1,'1','+91 040 6586 0123'),(14,'','Other','',0.00000000,0.00000000,'2017-02-10 00:00:00',0,'0000-00-00 00:00:00',0,'1',NULL),(15,'ZA','19 Office','9 honeysuckle Gallo manor sandton 2052',-26.06988000,28.08605130,'2017-08-08 10:06:00',11,'2017-08-08 10:12:06',11,'1','+27 0116562033'),(16,'ZA','MTN','MTN Group Limited Innovation Centre \n216 14th Avenue, Fairlands',-26.15036780,27.92985910,'2017-08-08 10:08:49',11,'0000-00-00 00:00:00',0,'1','011 912 3000'),(17,'ZA','Tshwane','320 Madiba St, Pretoria Central, Pretoria, 0002',-25.74400060,28.19181620,'2017-08-08 10:11:45',11,'0000-00-00 00:00:00',0,'1','');
/*!40000 ALTER TABLE `work_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'providencetms'
--

--
-- Dumping routines for database 'providencetms'
--
/*!50003 DROP PROCEDURE IF EXISTS `escalate` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `escalate`(request_id INT(11))
BEGIN
declare datetoecalate INT;
declare escl VARCHAR(45);
SELECT DATEDIFF(now(),Created_on) AS DiffDate INTO datetoecalate
From tblLeave
Where Id = request_id;

IF(datetoecalate>4)THEN
SELECT username INTO escl
from users
where user_role=1;
update tblLeave set escalated_to=escl where Id=request_id;
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_attendanceReports` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_attendanceReports`(id INT, m VARCHAR(45),y INT)
BEGIN
IF(m='Jan')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=01 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='Feb')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=02 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='Mar')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=03 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='Apr')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=04 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='May')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=05 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='Jun')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=06 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='Jul')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=07 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='Aug')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=08 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='Sep')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=09 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='Oct')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=10 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='Nov')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=11 AND SUBSTRING(checkin,1,4)=y;
ELSEIF(m='Dec')THEN
SELECT * FROM employee_login_details WHERE emp_no=id AND SUBSTRING(checkin,6,2)=12 AND SUBSTRING(checkin,1,4)=y;
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_checkout` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_checkout`(checkIn_id INT(100), emp_id INT(12))
BEGIN
DECLARE timediff TIME;
UPDATE employee_login_details SET checkout = now() where id=checkIn_id and emp_no=emp_id;
SELECT TIMEDIFF(now(),checkin) AS Difftime INTO timediff
FROM employee_login_details
WHERE id=checkIn_id and emp_no=emp_id;
UPDATE employee_login_details SET working_hours = timediff where id=checkIn_id and emp_no=emp_id;
SELECT timediff;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_getAllEmp` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_getAllEmp`()
BEGIN
SELECT * FROM users WHERE user_role !=1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_getallTripsreports` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_getallTripsreports`(m VARCHAR(45),y INT)
BEGIN
IF(m='Jan')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=01 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Feb')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=02 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Mar')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=03 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Apr')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=04 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='May')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=05 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Jun')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=06 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Jul')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=07 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Aug')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=08 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Sep')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=09 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Oct')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=10 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Nov')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=11 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Dec')THEN
SELECT * FROM business_trip WHERE  SUBSTRING(created_on,6,2)=12 AND SUBSTRING(created_on,1,4)=y;
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_getpasswordmd5` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_getpasswordmd5`(email VARCHAR(50))
BEGIN
SELECT password FROM users
WHERE username = email;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_getTimesheetReports` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_getTimesheetReports`(id INT,m VARCHAR(45),y INT)
BEGIN
SELECT * FROM tblTimesheet WHERE UserId=id AND SUBSTRING(TimesheetDate,4,3)=m AND SUBSTRING(TimesheetDate,7,5)=y;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_getTripsreports` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_getTripsreports`(id INT, m VARCHAR(45),y INT)
BEGIN
IF(m='Jan')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=01 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Feb')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=02 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Mar')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=03 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Apr')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=04 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='May')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=05 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Jun')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=06 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Jul')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=07 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Aug')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=08 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Sep')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=09 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Oct')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=10 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Nov')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=11 AND SUBSTRING(created_on,1,4)=y;
ELSEIF(m='Dec')THEN
SELECT * FROM business_trip WHERE UserId=id AND SUBSTRING(created_on,6,2)=12 AND SUBSTRING(created_on,1,4)=y;
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_getupdates` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_getupdates`()
BEGIN
SELECT * FROM tblmeeting ORDER BY idtblmeeting DESC LIMIT 1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_Isuserpresent` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_Isuserpresent`()
BEGIN
SELECT u.id,u.firstName ,u.surName, u.email,login.checkin,login.checkout,login.work_location,login.reported_to FROM users u,employee_login_details login
WHERE u.id IN(
SELECT emp_no
From employee_login_details
WHERE Date(checkin) = CURDATE()) AND Date(login.checkin) = CURDATE() AND u.user_role !=1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_leaveReports` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_leaveReports`(id INT, m VARCHAR(45),y INT)
BEGIN
IF(m='Jan')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=01 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='Feb')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=02 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='Mar')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=03 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='Apr')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=04 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='May')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=05 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='Jun')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=06 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='Jul')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=07 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='Aug')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=08 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='Sep')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=09 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='Oct')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=10 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='Nov')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=11 AND SUBSTRING(l.Created_on,1,4)=y;
ELSEIF(m='Dec')THEN
SELECT * FROM tblLeave l,users u WHERE u.id=l.UserId AND l.UserId=id AND SUBSTRING(l.Created_on,6,2)=12 AND SUBSTRING(l.Created_on,1,4)=y;
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_login_pss` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_login_pss`(_email VARCHAR(45),pwd VARCHAR(100))
BEGIN
DECLARE count INT;
DECLARE counted INT;
DECLARE count_ampts INT;
DECLARE isblocked INT;
SELECT count(*) INTO count
FROM users 
WHERE email = _email;

IF(count=1)THEN
SELECT count(*) INTO counted
FROM users
WHERE email = _email AND password = pwd;
SELECT status INTO isblocked
FROM users
WHERE email = _email;
IF(isblocked=1)THEN
IF(counted=1)THEN
UPDATE users SET count_attempts =0 WHERE email = _email;
SELECT *
FROM users
WHERE email = _email AND password = pwd;
ELSE
UPDATE users SET count_attempts =count_attempts+1 WHERE email = _email;
SELECT count_attempts INTO count_ampts
FROM users
WHERE email = _email;
IF(count_ampts>=3)THEN
UPDATE users SET status =2 WHERE email = _email;
UPDATE users SET count_attempts =0 WHERE email = _email;
SELECT status
FROM users
WHERE email = _email;
ELSE
SELECT count_attempts
FROM users
WHERE email = _email;
END IF;
END IF;
ELSE 
SELECT status
FROM users
WHERE email = _email;
END IF;
ELSE
SELECT count;
END IF;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_mciContactUs` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_mciContactUs`(email VARCHAR(45),name VARCHAR(45),msg LONGTEXT)
BEGIN
INSERT INTO mcicontactus(email,name,msg) VALUES(email,name,msg);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_mcigetpasswordmd5` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_mcigetpasswordmd5`(email VARCHAR(50))
BEGIN
DECLARE count INT;
DECLARE tmppwd INT(12);
SET tmppwd = FLOOR(RAND()*999999);
SELECT COUNT(*) INTO count FROM mciregister
WHERE mci_email = email;
IF(count=1)THEN
UPDATE mciregister SET mci_pwd = MD5(tmppwd) WHERE mci_email=email;
SELECT count,tmppwd;
ELSE
SELECT count;
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_mcilogin` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_mcilogin`(IN `_email` varchar(100), IN `pwd` varchar(255))
BEGIN
SELECT * 
FROM mciregister
WHERE mci_email=_email AND mci_pwd = pwd;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_mcireg` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_mcireg`(title VARCHAR(20),f_name VARCHAR(100),l_name VARCHAR(100),mobile_num INT(12),
_email VARCHAR(100),reg_type VARCHAR(100),address VARCHAR(100),country VARCHAR(100),pwd VARCHAR(255),logintype VARCHAR(100),token LONGTEXT)
BEGIN
DECLARE existvar INT;
SELECT COUNT(*) INTO existvar
FROM mciregister
WHERE mci_email=_email;

IF(existvar=0)THEN

INSERT INTO mciregister(mci_title,mci_fname,mci_lname,mci_email,mci_regtype,mci_address,mci_country,mci_pwd,mci_mobile_num,mci_login_type,mci_token) 
VALUES(title,f_name,l_name,_email,reg_type,address,country,pwd,mobile_num,logintype,token);
SELECT existvar;
ELSE

SELECT existvar;

END IF;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_mci_allContacts` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_mci_allContacts`()
BEGIN
SELECT * FROM mciregister ORDER BY mci_fname ASC;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_newtimesheet` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_newtimesheet`(_report_to VARCHAR(45))
BEGIN
SELECT * FROM tblTimesheet where Created_on BETWEEN DATE_SUB(NOW(), INTERVAL 10 DAY) AND NOW() AND report_to =_report_to AND  ISNULL(approve)  order by Created_on desc;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_registersocialF` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_registersocialF`(fname VARCHAR(100),userid VARCHAR(255),token LONGTEXT)
BEGIN
DECLARE existvar INT;

SELECT COUNT(*) INTO existvar
FROM mciregister
WHERE social_id =userid;

IF(existvar=0)THEN
DELETE FROM mciregister WHERE mci_email="";
INSERT INTO mciregister(mci_fname,social_id,mci_token) 
VALUES(fname,userid,token);
SELECT *
FROM mciregister
WHERE social_id = userid;
ELSE
SELECT *
FROM mciregister
WHERE social_id = userid;
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_registersocialG` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_registersocialG`(givenName VARCHAR(100),familyName VARCHAR(100),userId VARCHAR(255),email VARCHAR(100),token LONGTEXT)
BEGIN

DECLARE existvar INT;
SELECT COUNT(*) INTO existvar
FROM mciregister
WHERE mci_email = email;

IF(existvar=0)THEN
INSERT INTO mciregister(mci_fname,mci_lname,social_id,mci_email,mci_token) 
VALUES(givenName,familyName,userId,email,token);
SELECT * 
FROM mciregister
WHERE mci_email = email AND social_id = userId;
ELSE
SELECT * 
FROM mciregister
WHERE mci_email = email;
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_updateminutes` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_updateminutes`(_tblminutes LONGTEXT,_tbldate VARCHAR(25),name VARCHAR(45))
BEGIN
INSERT INTO tblmeeting(tblminutes,tbldate,tblcreated_on,tblname) VALUES(_tblminutes,_tbldate,now(),name);
SELECT * FROM tblmeeting ORDER BY idtblmeeting DESC LIMIT 1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_update_allow_pushnotifications` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_update_allow_pushnotifications`(IN `uID` bigint(11), IN `pushNotificationFlog` enum('0','1'), IN `playSoundsFlog` enum('0','1'), IN `vibrateFlog` enum('0','1'), IN `popupFlog` enum('0','1'))
BEGIN
UPDATE mciregister SET 
allow_playsounds = playSoundsFlog, allow_pushnotifications = pushNotificationFlog, allow_vibrate = vibrateFlog, allow_popupnotifications = popupFlog
WHERE idmciregister = uID;
SELECT * FROM mciregister
WHERE  idmciregister = uID;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_update_profile` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_update_profile`( Title VARCHAR(45),f_name VARCHAR(100),l_name VARCHAR(100),RegistrationType VARCHAR(100),_email VARCHAR(100),Address VARCHAR(100),Country VARCHAR(100),MobileNumber VARCHAR(255))
BEGIN
UPDATE mciregister SET mci_fname = f_name WHERE mci_email=_email;
UPDATE mciregister SET mci_lname = l_name WHERE mci_email=_email;
UPDATE mciregister SET mci_email = _email WHERE mci_email=_email;
UPDATE mciregister SET mci_mobile_num = MobileNumber WHERE mci_email=_email;
UPDATE mciregister SET mci_Address = Address WHERE mci_email=_email;
UPDATE mciregister SET mci_Country = Country WHERE mci_email=_email;
UPDATE mciregister SET mci_regtype = RegistrationType WHERE mci_email=_email;
UPDATE mciregister SET mci_title = Title WHERE mci_email=_email;
SELECT * FROM mciregister
WHERE  mci_email=_email;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_update_registersocial` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_update_registersocial`(socialid VARCHAR(255),f_name VARCHAR(100),l_name VARCHAR(100),_email VARCHAR(100),pwd VARCHAR(255),logintype VARCHAR(100))
BEGIN
DECLARE isuser INT(12);
DECLARE isuser_exist INT(12);
SELECT COUNT(*) INTO isuser FROM mciregister WHERE mci_email=_email;
IF(isuser=0)THEN
UPDATE mciregister SET mci_fname = f_name WHERE social_id=socialid;
UPDATE mciregister SET mci_lname = l_name WHERE social_id=socialid;
UPDATE mciregister SET mci_email = _email WHERE social_id=socialid;
UPDATE mciregister SET mci_pwd = pwd WHERE social_id=socialid;
UPDATE mciregister SET mci_login_type = logintype WHERE social_id=socialid;
SELECT * FROM mciregister
WHERE social_id = socialid;
ELSE
IF(isuser=1)THEN
SELECT COUNT(*) INTO isuser_exist FROM mciregister WHERE mci_email=_email AND social_id=socialid;
IF(isuser_exist=1)THEN
UPDATE mciregister SET mci_fname = f_name WHERE social_id=socialid;
UPDATE mciregister SET mci_lname = l_name WHERE social_id=socialid;
UPDATE mciregister SET mci_email = _email WHERE social_id=socialid;
UPDATE mciregister SET mci_pwd = pwd WHERE social_id=socialid;
UPDATE mciregister SET mci_login_type = logintype WHERE social_id=socialid;
SELECT * FROM mciregister
WHERE social_id = socialid;
ELSE
SELECT * FROM mciregister
WHERE mci_email=_email AND social_id = socialid;
END IF;
END IF;
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_upload` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_upload`(_id INT(12), base64 LONGBLOB)
BEGIN
UPDATE business_trip SET dep_pic = base64 WHERE id=_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_uploadend` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_uploadend`(_id INT(12), base64 LONGBLOB)
BEGIN
UPDATE business_trip SET dest_pic = base64 WHERE id=_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `prc_uploadproPc` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `prc_uploadproPc`(_id INT(12), base64 VARCHAR(191))
BEGIN
DECLARE url VARCHAR(191);
SELECT pro_url INTO url FROM mciregister WHERE idmciregister=_id;
UPDATE mciregister SET pro_url = base64 WHERE idmciregister=_id;
SELECT url;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `test` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `test`(userid INT(12),getmonth VARCHAR(45),getyear VARCHAR(45))
BEGIN
SELECT * FROM tblTimesheet WHERE userId= 7 AND (Created_on >= TRIM(CONCAT(CONCAT(getyear,'-'),getmonth,'-01')) );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `test12345` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `test12345`()
BEGIN
UPDATE mciregister SET allow_pushnotifications = flog WHERE idmciregister = uID;
SELECT * FROM mciregister
WHERE  idmciregister = uID;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `updateRestPassword` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`providwusertms`@`%` PROCEDURE `updateRestPassword`(restChunk VARCHAR(500),pwd VARCHAR(100),ky VARCHAR(45))
BEGIN
DECLARE tmp_email VARCHAR(50);
DECLARE countRow INT(12);
SELECT username INTO tmp_email
FROM users
WHERE password = restChunk AND email = ky;

SELECT count(*) INTO countRow
FROM users
WHERE password = restChunk AND email = ky;
IF(countRow=1)THEN
UPDATE users SET password=pwd WHERE username=tmp_email;
SELECT countRow ,tmp_email;
ELSE
SELECT countRow;
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-13 12:51:30
