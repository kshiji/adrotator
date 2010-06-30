-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: adrotator
-- ------------------------------------------------------
-- Server version	5.1.41-3ubuntu12.3

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
-- Table structure for table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_id` int(11) NOT NULL,
  `caption` varchar(45) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaigns`
--

LOCK TABLES `campaigns` WRITE;
/*!40000 ALTER TABLE `campaigns` DISABLE KEYS */;
INSERT INTO `campaigns` VALUES (12,1,'llamas are half off!','farms005650-0.jpg','http://llama.com','2010-06-26 20:49:32','2010-06-29 15:50:02'),(29,27,'','corporate_sponsorship_thanks_ad.jpg','#','2010-06-29 15:40:10','2010-06-29 15:40:10'),(28,26,'','WMET.gif','http://site.com','2010-06-29 15:38:52','2010-06-29 15:38:52'),(26,19,'','Paschal_Lamb_Ad.jpg','http://paschallamb.org','2010-06-29 15:37:01','2010-06-29 15:37:01'),(27,25,'','ICC_summer_program_220x240.gif','http://thomasmore.edu','2010-06-29 15:37:52','2010-06-29 15:37:52'),(20,16,'Breathe Catholic','BreatheCatholic_AD3.gif','http://christendom.edu/','2010-06-29 14:15:48','2010-06-29 14:15:48'),(21,17,'Children of Mary','Children_of_Mary_AD.jpg','http://childrenofmary.com','2010-06-29 14:17:06','2010-06-29 14:17:32'),(24,24,'In Tyler We Trust','intylerwetrust.jpg','http://www.urbandictionary.com/define.php?term=I%20am%20Jack\'s','2010-06-29 15:28:51','2010-06-29 15:28:51');
/*!40000 ALTER TABLE `campaigns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsors`
--

LOCK TABLES `sponsors` WRITE;
/*!40000 ALTER TABLE `sponsors` DISABLE KEYS */;
INSERT INTO `sponsors` VALUES (1,'Acme Corp','Bob Dobbs'),(2,'OMG Enterprises','Lolbob Smith'),(3,'Spacely Sprockets','Mister Spacely'),(4,'ASDF Corp','asdf asdf'),(5,'ZXCVZ inc.','asdf asdf'),(16,'Christendom College',''),(17,'Children of Mary',''),(18,'Thomas Aquinas College',''),(19,'The Paschal Lamb',''),(20,'Lighthouse Catholic Media',''),(23,'Test Sponsor',''),(24,'Paper Street Soap Company',''),(25,'Thomas More College',''),(26,'Guadelupe Radio Network',''),(27,'Catholic Culture Corporate Sponsors','');
/*!40000 ALTER TABLE `sponsors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-06-30 12:48:18
