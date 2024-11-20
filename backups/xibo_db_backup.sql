/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.8-MariaDB, for debian-linux-gnu (aarch64)
--
-- Host: localhost    Database: SMCS
-- ------------------------------------------------------
-- Server version	10.11.8-MariaDB-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `action`
--

DROP TABLE IF EXISTS `action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action` (
  `actionId` int(11) NOT NULL AUTO_INCREMENT,
  `ownerId` int(11) NOT NULL,
  `triggerType` varchar(50) DEFAULT NULL,
  `triggerCode` varchar(50) DEFAULT NULL,
  `actionType` varchar(50) DEFAULT NULL,
  `source` varchar(50) DEFAULT NULL,
  `sourceId` int(11) DEFAULT NULL,
  `target` varchar(50) DEFAULT NULL,
  `targetId` int(11) DEFAULT NULL,
  `widgetId` int(11) DEFAULT NULL,
  `layoutCode` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`actionId`),
  KEY `ownerId` (`ownerId`),
  CONSTRAINT `action_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action`
--

LOCK TABLES `action` WRITE;
/*!40000 ALTER TABLE `action` DISABLE KEYS */;
/*!40000 ALTER TABLE `action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditlog`
--

DROP TABLE IF EXISTS `auditlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditlog` (
  `logId` int(11) NOT NULL AUTO_INCREMENT,
  `logDate` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `entity` varchar(50) NOT NULL,
  `entityId` int(11) NOT NULL,
  `objectAfter` text DEFAULT NULL,
  `ipAddress` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`logId`)
) ENGINE=InnoDB AUTO_INCREMENT=685 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditlog`
--

LOCK TABLES `auditlog` WRITE;
/*!40000 ALTER TABLE `auditlog` DISABLE KEYS */;
INSERT INTO `auditlog` VALUES
(1,1731531842,0,'Added','Media',1,'{\"mediaId\":1,\"name\":\"jquery.min.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\",\"folderId\":null}',NULL),
(2,1731531842,0,'Added','Media',2,'{\"mediaId\":2,\"name\":\"xibo-layout-scaler.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\",\"folderId\":null}',NULL),
(3,1731531842,0,'Added','Media',3,'{\"mediaId\":3,\"name\":\"xibo-interactive-control.min.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\",\"folderId\":null}',NULL),
(4,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(5,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(6,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(7,1731531842,0,'Added','Media',4,'{\"mediaId\":4,\"name\":\"moment.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\",\"folderId\":null}',NULL),
(8,1731531842,0,'Added','Media',5,'{\"mediaId\":5,\"name\":\"xibo-text-render.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\",\"folderId\":null}',NULL),
(9,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(10,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(11,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(12,1731531842,0,'Added','Media',6,'{\"mediaId\":6,\"name\":\"xibo-calendar-render.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/xibo-calendar-render.js\",\"folderId\":null}',NULL),
(13,1731531842,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(14,1731531842,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(15,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(16,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(17,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(18,1731531842,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(19,1731531842,0,'Added','Media',7,'{\"mediaId\":7,\"name\":\"Chart.min.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/vendor\\/Chart.min.js\",\"folderId\":null}',NULL),
(20,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(21,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(22,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(23,1731531842,0,'Added','Media',8,'{\"mediaId\":8,\"name\":\"jquery-cycle-2.1.6.min.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\",\"folderId\":null}',NULL),
(24,1731531842,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(25,1731531842,0,'Added','Media',9,'{\"mediaId\":9,\"name\":\"flipclock.min.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/vendor\\/flipclock.min.js\",\"folderId\":null}',NULL),
(26,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(27,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(28,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(29,1731531842,0,'Added','Media',10,'{\"mediaId\":10,\"name\":\"xibo-countdown-render.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/xibo-countdown-render.js\",\"folderId\":null}',NULL),
(30,1731531842,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(31,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(32,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(33,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(34,1731531842,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(35,1731531842,0,'Added','Media',11,'{\"mediaId\":11,\"name\":\"jquery.marquee.min.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\",\"folderId\":null}',NULL),
(36,1731531842,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(37,1731531842,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(38,1731531842,0,'Added','Media',12,'{\"mediaId\":12,\"name\":\"xibo-image-render.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\",\"folderId\":null}',NULL),
(39,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(40,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(41,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(42,1731531842,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(43,1731531842,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(44,1731531842,0,'Added','Media',13,'{\"mediaId\":13,\"name\":\"xibo-dataset-render.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/xibo-dataset-render.js\",\"folderId\":null}',NULL),
(45,1731531842,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(46,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(47,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(48,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(49,1731531842,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(50,1731531842,0,'Added','Media',14,'{\"mediaId\":14,\"name\":\"Aileron Heavy Regular\",\"mediaType\":\"font\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/fonts\\/Aileron-Heavy.otf\",\"folderId\":null}',NULL),
(51,1731531842,0,'Added','Media',15,'{\"mediaId\":15,\"name\":\"Aileron Regular\",\"mediaType\":\"font\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/fonts\\/Aileron-Regular.otf\",\"folderId\":null}',NULL),
(52,1731531842,0,'Added','Media',16,'{\"mediaId\":16,\"name\":\"Dancing Script Regular\",\"mediaType\":\"font\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/fonts\\/DancingScript-Regular.ttf\",\"folderId\":null}',NULL),
(53,1731531842,0,'Added','Media',17,'{\"mediaId\":17,\"name\":\"Railway Regular\",\"mediaType\":\"font\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/fonts\\/Railway.ttf\",\"folderId\":null}',NULL),
(54,1731531842,0,'Added','Media',18,'{\"mediaId\":18,\"name\":\"Linear Regular\",\"mediaType\":\"font\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/fonts\\/linear-by-braydon-fuller.otf\",\"folderId\":null}',NULL),
(55,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(56,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(57,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(58,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(59,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(60,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(61,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(62,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(63,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(64,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(65,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(66,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(67,1731531842,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(68,1731531842,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(69,1731531842,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(70,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(71,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(72,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(73,1731531843,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(74,1731531843,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(75,1731531843,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(76,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(77,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(78,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(79,1731531843,0,'Added','Media',19,'{\"mediaId\":19,\"name\":\"pdf.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/vendor\\/pdfjs\\/pdf.js\",\"folderId\":null}',NULL),
(80,1731531843,0,'Added','Media',20,'{\"mediaId\":20,\"name\":\"pdf.worker.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/vendor\\/pdfjs\\/pdf.worker.js\",\"folderId\":null}',NULL),
(81,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(82,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(83,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(84,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(85,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(86,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(87,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(88,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(89,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(90,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(91,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(92,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(93,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(94,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(95,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(96,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(97,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(98,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(99,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(100,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(101,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(102,1731531843,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(103,1731531843,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(104,1731531843,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(105,1731531843,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(106,1731531843,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(107,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(108,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(109,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(110,1731531843,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(111,1731531843,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(112,1731531843,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(113,1731531843,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(114,1731531843,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(115,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(116,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(117,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(118,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(119,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(120,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(121,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(122,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(123,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(124,1731531843,0,'Added','Media',21,'{\"mediaId\":21,\"name\":\"xibo-webpage-render.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/xibo-webpage-render.js\",\"folderId\":null}',NULL),
(125,1731531843,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(126,1731531843,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(127,1731531843,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(128,1731531843,0,'Added','Media',22,'{\"mediaId\":22,\"name\":\"xibo-worldclock-render.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/xibo-worldclock-render.js\",\"folderId\":null}',NULL),
(129,1731531843,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(130,1731531843,0,'Added','Media',23,'{\"mediaId\":23,\"name\":\"moment-timezone.js\",\"mediaType\":\"module\",\"fileName\":\"\\/srv\\/xibo-cms\\/modules\\/vendor\\/moment-timezone.js\",\"folderId\":null}',NULL),
(131,1731532010,0,'User updated password','User',1,'false',NULL),
(132,1731532010,1,'Login Granted','User',1,'{\"UserAgent\":[\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10.15; rv:132.0) Gecko\\/20100101 Firefox\\/132.0\"]}','192.168.0.99'),
(133,1731532011,1,'User Group edited','UserGroup',3,'[]','192.168.0.99'),
(134,1731532011,1,'User updated','User',1,'{\"newUserWizard\":\"0 > 1\"}','192.168.0.99'),
(135,1731532888,1,'Added','Layout',1,'{\"layoutId\":1,\"layout\":\"SMCS - main\",\"campaignId\":1}','192.168.0.99'),
(136,1731532888,1,'Saved','Playlist',1,'{\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}','192.168.0.99'),
(137,1731532888,1,'Added','Region',1,'{\"regionId\":1,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-0 - 1536 x 864 (0, 0). RegionId = 1, LayoutId = 1. OwnerId = 1. Duration = 0\"}','192.168.0.99'),
(138,1731532888,1,'Saved','Playlist',2,'{\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}','192.168.0.99'),
(139,1731532888,1,'Added','Region',2,'{\"regionId\":2,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-1 - 1920 x 216 (864, 0). RegionId = 2, LayoutId = 1. OwnerId = 1. Duration = 0\"}','192.168.0.99'),
(140,1731532888,1,'Saved','Playlist',3,'{\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}','192.168.0.99'),
(141,1731532888,1,'Added','Region',3,'{\"regionId\":3,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-2 - 384 x 864 (0, 1536). RegionId = 3, LayoutId = 1. OwnerId = 1. Duration = 0\"}','192.168.0.99'),
(142,1731532888,1,'Saved','Playlist',1,'{\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}','192.168.0.99'),
(143,1731532888,1,'Saved','Playlist',2,'{\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}','192.168.0.99'),
(144,1731532888,1,'Saved','Playlist',3,'{\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}','192.168.0.99'),
(145,1731532888,1,'Checked out','Layout',2,'{\"layoutId\":1,\"layout\":\"SMCS - main\",\"campaignId\":1}','192.168.0.99'),
(146,1731532888,1,'Saved','Playlist',4,'{\"playlistId\":\"1 > 4\",\"regionId\":\"1 > 4\",\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(147,1731532888,1,'Added','Region',4,'{\"regionId\":4,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-0 - 1536 x 864 (0, 0). RegionId = 4, LayoutId = 2. OwnerId = 1. Duration = 0\"}','192.168.0.99'),
(148,1731532888,1,'Saved','Playlist',5,'{\"playlistId\":\"2 > 5\",\"regionId\":\"2 > 5\",\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(149,1731532888,1,'Added','Region',5,'{\"regionId\":5,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-1 - 1920 x 216 (864, 0). RegionId = 5, LayoutId = 2. OwnerId = 1. Duration = 0\"}','192.168.0.99'),
(150,1731532888,1,'Saved','Playlist',6,'{\"playlistId\":\"3 > 6\",\"regionId\":\"3 > 6\",\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(151,1731532888,1,'Added','Region',6,'{\"regionId\":6,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-2 - 384 x 864 (0, 1536). RegionId = 6, LayoutId = 2. OwnerId = 1. Duration = 0\"}','192.168.0.99'),
(152,1731533083,1,'Added','Media',24,'{\"mediaId\":24,\"name\":\"MatLab\",\"mediaType\":\"image\",\"fileName\":\"MatLab.png\",\"folderId\":3}','192.168.0.99'),
(153,1731533083,1,'Added','Media',25,'{\"mediaId\":25,\"name\":\"Office265\",\"mediaType\":\"image\",\"fileName\":\"Office.png\",\"folderId\":3}','192.168.0.99'),
(154,1731533102,0,'Saved','Playlist',1,'{\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}',NULL),
(155,1731533102,0,'Saved','Playlist',4,'{\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}',NULL),
(156,1731533102,0,'Saved','Playlist',2,'{\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}',NULL),
(157,1731533102,0,'Saved','Playlist',5,'{\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}',NULL),
(158,1731533102,0,'Saved','Playlist',3,'{\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}',NULL),
(159,1731533102,0,'Saved','Playlist',6,'{\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}',NULL),
(160,1731533130,1,'Added','Media',28,'{\"mediaId\":28,\"name\":\"SMCS-Deck2\",\"mediaType\":\"image\",\"fileName\":\"SMCS_Deck.014.jpeg\",\"folderId\":4}','192.168.0.99'),
(161,1731533130,1,'Added','Media',27,'{\"mediaId\":27,\"name\":\"SCMS-Deck1\",\"mediaType\":\"image\",\"fileName\":\"SMCS_Deck.013.jpeg\",\"folderId\":4}','192.168.0.99'),
(162,1731533130,1,'Added','Media',26,'{\"mediaId\":26,\"name\":\"SMCS-Deck3\",\"mediaType\":\"image\",\"fileName\":\"SMCS_Deck.003.jpeg\",\"folderId\":4}','192.168.0.99'),
(163,1731533130,1,'Added','Media',29,'{\"mediaId\":29,\"name\":\"SMCS-Deck4\",\"mediaType\":\"image\",\"fileName\":\"SMCS_Deck.001.jpeg\",\"folderId\":4}','192.168.0.99'),
(164,1731533402,0,'Saved','Playlist',7,'{\"duration\":\"0 > 10\",\"requiresDurationUpdate\":\"1 > 0\"}',NULL),
(165,1731533622,1,'Added','Widget',2,'{\"widgetId\":2,\"type\":\"ticker\",\"layoutId\":\"2\",\"campaignId\":\"1\"}','192.168.0.99'),
(166,1731533622,1,'Saved','Playlist',5,'{\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(167,1731533701,0,'Saved','Playlist',5,'{\"duration\":\"0 > 5\",\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}',NULL),
(168,1731533794,1,'Saved','Widget',2,'{\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(169,1731533829,1,'Added','Widget',3,'{\"widgetId\":3,\"type\":\"image\",\"layoutId\":\"2\",\"campaignId\":\"1\"}','192.168.0.99'),
(170,1731533830,1,'Saved','Playlist',4,'{\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(171,1731533858,1,'Saved','Widget',3,'{\"duration\":\"10 > 30\",\"useDuration\":\"0 > 1\",\"calculatedDuration\":\"10 > 30\",\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(172,1731533859,1,'Saved','Playlist',4,'{\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(173,1731533867,1,'Saved','Widget',3,'{\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(174,1731533867,1,'Added','Widget',4,'{\"widgetId\":4,\"type\":\"image\",\"layoutId\":\"2\",\"campaignId\":\"1\"}','192.168.0.99'),
(175,1731533868,1,'Saved','Playlist',4,'{\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(176,1731533920,1,'Added','Widget',5,'{\"widgetId\":5,\"type\":\"subplaylist\",\"layoutId\":\"2\",\"campaignId\":\"1\"}','192.168.0.99'),
(177,1731533957,1,'Saved','Widget',5,'{\"calculatedDuration\":\"0 > 30\",\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(178,1731533957,1,'Saved','Playlist',4,'{\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}','192.168.0.99'),
(179,1731533973,1,'Updated Draft','Layout',2,'{\"backgroundColor\":\"#000 > #000000\",\"status\":\"4 > 3\",\"campaignId\":[1]}','192.168.0.99'),
(180,1731533988,1,'Deleted','Playlist',1,'{\"playlistId\":1,\"regionId\":1}','192.168.0.99'),
(181,1731533988,1,'Region Deleted','Region',1,'{\"regionId\":1,\"layoutId\":1}','192.168.0.99'),
(182,1731533988,1,'Deleted','Playlist',2,'{\"playlistId\":2,\"regionId\":2}','192.168.0.99'),
(183,1731533988,1,'Region Deleted','Region',2,'{\"regionId\":2,\"layoutId\":1}','192.168.0.99'),
(184,1731533988,1,'Deleted','Playlist',3,'{\"playlistId\":3,\"regionId\":3}','192.168.0.99'),
(185,1731533988,1,'Region Deleted','Region',3,'{\"regionId\":3,\"layoutId\":1}','192.168.0.99'),
(186,1731533988,1,'Layout Deleted','Layout',1,'{\"layoutId\":1}','192.168.0.99'),
(187,1731533988,1,'Deleted draft for 2','Layout',1,'{\"parentId\":\" > 2\"}','192.168.0.99'),
(188,1731533988,1,'Updated Draft','Layout',2,'{\"publishedStatusId\":\"2 > 1\",\"campaignId\":[1]}','192.168.0.99'),
(189,1731534002,0,'Saved','Playlist',4,'{\"duration\":\"0 > 70\",\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"2\"]}',NULL),
(190,1731534049,1,'Checked out','Layout',3,'{\"layoutId\":2,\"layout\":\"SMCS - main\",\"campaignId\":1}','192.168.0.99'),
(191,1731534049,1,'Added','Widget',6,'{\"widgetId\":6,\"type\":\"image\",\"layoutId\":\"3\",\"campaignId\":\"1\"}','192.168.0.99'),
(192,1731534049,1,'Added','Widget',7,'{\"widgetId\":7,\"type\":\"image\",\"layoutId\":\"3\",\"campaignId\":\"1\"}','192.168.0.99'),
(193,1731534049,1,'Added','Widget',8,'{\"widgetId\":8,\"type\":\"subplaylist\",\"layoutId\":\"3\",\"campaignId\":\"1\"}','192.168.0.99'),
(194,1731534049,1,'Saved','Playlist',8,'{\"playlistId\":\"4 > 8\",\"regionId\":\"4 > 7\",\"campaignId\":[\"1\"],\"layoutId\":[\"3\"]}','192.168.0.99'),
(195,1731534049,1,'Added','Region',7,'{\"regionId\":7,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-0 - 1536 x 864 (0, 0). RegionId = 7, LayoutId = 3. OwnerId = 1. Duration = 70\"}','192.168.0.99'),
(196,1731534049,1,'Added','Widget',9,'{\"widgetId\":9,\"type\":\"ticker\",\"layoutId\":\"3\",\"campaignId\":\"1\"}','192.168.0.99'),
(197,1731534049,1,'Saved','Playlist',9,'{\"playlistId\":\"5 > 9\",\"regionId\":\"5 > 8\",\"campaignId\":[\"1\"],\"layoutId\":[\"3\"]}','192.168.0.99'),
(198,1731534049,1,'Added','Region',8,'{\"regionId\":8,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-1 - 1920 x 216 (864, 0). RegionId = 8, LayoutId = 3. OwnerId = 1. Duration = 5\"}','192.168.0.99'),
(199,1731534049,1,'Saved','Playlist',10,'{\"playlistId\":\"6 > 10\",\"regionId\":\"6 > 9\",\"campaignId\":[\"1\"],\"layoutId\":[\"3\"]}','192.168.0.99'),
(200,1731534049,1,'Added','Region',9,'{\"regionId\":9,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-2 - 384 x 864 (0, 1536). RegionId = 9, LayoutId = 3. OwnerId = 1. Duration = 0\"}','192.168.0.99'),
(201,1731534049,1,'Updated','Layout',2,'{\"publishedStatusId\":\"1 > 2\",\"publishedStatus\":\"Published > Draft\",\"campaignId\":[1]}','192.168.0.99'),
(202,1731534050,1,'Saved','Playlist',8,'{\"campaignId\":[\"1\"],\"layoutId\":[\"3\"]}','192.168.0.99'),
(203,1731534050,1,'Saved','Playlist',9,'{\"campaignId\":[\"1\"],\"layoutId\":[\"3\"]}','192.168.0.99'),
(204,1731534238,1,'Added','Media',30,'{\"mediaId\":30,\"name\":\"Background\",\"mediaType\":\"image\",\"fileName\":\"bg_smcs.png\",\"folderId\":1}','192.168.0.99'),
(205,1731534249,1,'Updated Draft','Layout',3,'{\"backgroundImageId\":\" > 30\",\"status\":\"4 > 3\",\"autoApplyTransitions\":\"0 > 1\",\"campaignId\":[1]}','192.168.0.99'),
(206,1731534271,1,'Saved','Widget',9,'{\"widgetOptions\":\"[\\n    {\\n        \\\"backgroundColor\\\": \\\"#25942f > rgba(37,148,47,0)\\\"\\n    }\\n]\",\"campaignId\":[\"1\"],\"layoutId\":[\"3\"]}','192.168.0.99'),
(207,1731534287,1,'Updated Draft','Layout',3,'{\"status\":\"4 > 3\",\"campaignId\":[1]}','192.168.0.99'),
(208,1731534357,1,'Saved','Widget',9,'{\"campaignId\":[\"1\"],\"layoutId\":[\"3\"]}','192.168.0.99'),
(209,1731534372,1,'Deleted','Widget',3,'{\"widgetId\":3,\"playlistId\":4}','192.168.0.99'),
(210,1731534372,1,'Deleted','Widget',4,'{\"widgetId\":4,\"playlistId\":4}','192.168.0.99'),
(211,1731534372,1,'Deleted','Widget',5,'{\"widgetId\":5,\"playlistId\":4}','192.168.0.99'),
(212,1731534372,1,'Deleted','Playlist',4,'{\"playlistId\":4,\"regionId\":4}','192.168.0.99'),
(213,1731534372,1,'Region Deleted','Region',4,'{\"regionId\":4,\"layoutId\":2}','192.168.0.99'),
(214,1731534372,1,'Deleted','Widget',2,'{\"widgetId\":2,\"playlistId\":5}','192.168.0.99'),
(215,1731534372,1,'Deleted','Playlist',5,'{\"playlistId\":5,\"regionId\":5}','192.168.0.99'),
(216,1731534372,1,'Region Deleted','Region',5,'{\"regionId\":5,\"layoutId\":2}','192.168.0.99'),
(217,1731534372,1,'Deleted','Playlist',6,'{\"playlistId\":6,\"regionId\":6}','192.168.0.99'),
(218,1731534372,1,'Region Deleted','Region',6,'{\"regionId\":6,\"layoutId\":2}','192.168.0.99'),
(219,1731534372,1,'Layout Deleted','Layout',2,'{\"layoutId\":2}','192.168.0.99'),
(220,1731534372,1,'Deleted draft for 3','Layout',2,'{\"parentId\":\" > 3\"}','192.168.0.99'),
(221,1731534372,1,'Updated Draft','Layout',3,'{\"publishedStatusId\":\"2 > 1\",\"campaignId\":[1]}','192.168.0.99'),
(222,1731534465,1,'Added','Media',31,'{\"mediaId\":31,\"name\":\"SMCSS-Logo\",\"mediaType\":\"image\",\"fileName\":\"smcss-logo.png\",\"folderId\":4}','192.168.0.99'),
(223,1731534491,1,'Added','Media',32,'{\"mediaId\":32,\"name\":\"SMCSS-Signup\",\"mediaType\":\"image\",\"fileName\":\"SMCSS-Signup.png\",\"folderId\":4}','192.168.0.99'),
(224,1731534604,1,'Checked out','Layout',4,'{\"layoutId\":3,\"layout\":\"SMCS - main\",\"campaignId\":1}','192.168.0.99'),
(225,1731534604,1,'Added','Widget',10,'{\"widgetId\":10,\"type\":\"image\",\"layoutId\":\"4\",\"campaignId\":\"1\"}','192.168.0.99'),
(226,1731534604,1,'Added','Widget',11,'{\"widgetId\":11,\"type\":\"image\",\"layoutId\":\"4\",\"campaignId\":\"1\"}','192.168.0.99'),
(227,1731534604,1,'Added','Widget',12,'{\"widgetId\":12,\"type\":\"subplaylist\",\"layoutId\":\"4\",\"campaignId\":\"1\"}','192.168.0.99'),
(228,1731534604,1,'Saved','Playlist',11,'{\"playlistId\":\"8 > 11\",\"regionId\":\"7 > 10\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(229,1731534604,1,'Added','Region',10,'{\"regionId\":10,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-0 - 1536 x 864 (0, 0). RegionId = 10, LayoutId = 4. OwnerId = 1. Duration = 70\"}','192.168.0.99'),
(230,1731534604,1,'Added','Widget',13,'{\"widgetId\":13,\"type\":\"ticker\",\"layoutId\":\"4\",\"campaignId\":\"1\"}','192.168.0.99'),
(231,1731534604,1,'Saved','Playlist',12,'{\"playlistId\":\"9 > 12\",\"regionId\":\"8 > 11\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(232,1731534604,1,'Added','Region',11,'{\"regionId\":11,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-1 - 1920 x 216 (864, 0). RegionId = 11, LayoutId = 4. OwnerId = 1. Duration = 5\"}','192.168.0.99'),
(233,1731534604,1,'Saved','Playlist',13,'{\"playlistId\":\"10 > 13\",\"regionId\":\"9 > 12\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(234,1731534604,1,'Added','Region',12,'{\"regionId\":12,\"campaignId\":\"1\",\"details\":\"Region SMCS - main-2 - 384 x 864 (0, 1536). RegionId = 12, LayoutId = 4. OwnerId = 1. Duration = 0\"}','192.168.0.99'),
(235,1731534604,1,'Updated','Layout',3,'{\"publishedStatusId\":\"1 > 2\",\"publishedStatus\":\"Published > Draft\",\"campaignId\":[1]}','192.168.0.99'),
(236,1731534605,1,'Saved','Playlist',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(237,1731534605,1,'Saved','Playlist',12,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(238,1731534789,1,'Saved','Widget',10,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(239,1731534789,1,'Saved','Widget',12,'{\"displayOrder\":\"3 > 2\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(240,1731534789,1,'Saved','Widget',11,'{\"displayOrder\":\"2 > 3\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(241,1731534792,1,'Saved','Widget',12,'{\"displayOrder\":\"2 > 1\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(242,1731534792,1,'Saved','Widget',10,'{\"displayOrder\":\"1 > 2\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(243,1731534792,1,'Saved','Widget',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(244,1731534810,1,'Deleted','Widget',12,'{\"widgetId\":12,\"playlistId\":11}','192.168.0.99'),
(245,1731534811,1,'Saved','Playlist',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(246,1731534825,1,'Saved','Widget',10,'{\"displayOrder\":\"2 > 1\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(247,1731534825,1,'Saved','Widget',11,'{\"displayOrder\":\"3 > 2\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(248,1731534825,1,'Added','Widget',14,'{\"widgetId\":14,\"type\":\"image\",\"layoutId\":\"4\",\"campaignId\":\"1\"}','192.168.0.99'),
(249,1731534826,1,'Saved','Playlist',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(250,1731534831,1,'Saved','Widget',10,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(251,1731534831,1,'Saved','Widget',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(252,1731534831,1,'Saved','Widget',14,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(253,1731534831,1,'Added','Widget',15,'{\"widgetId\":15,\"type\":\"image\",\"layoutId\":\"4\",\"campaignId\":\"1\"}','192.168.0.99'),
(254,1731534832,1,'Saved','Playlist',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(255,1731534838,1,'Saved','Widget',10,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(256,1731534838,1,'Saved','Widget',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(257,1731534838,1,'Saved','Widget',14,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(258,1731534838,1,'Saved','Widget',15,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(259,1731534838,1,'Added','Widget',16,'{\"widgetId\":16,\"type\":\"image\",\"layoutId\":\"4\",\"campaignId\":\"1\"}','192.168.0.99'),
(260,1731534838,1,'Saved','Playlist',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(261,1731534842,1,'Saved','Widget',10,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(262,1731534842,1,'Saved','Widget',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(263,1731534842,1,'Saved','Widget',14,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(264,1731534842,1,'Saved','Widget',15,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(265,1731534842,1,'Saved','Widget',16,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(266,1731534842,1,'Added','Widget',17,'{\"widgetId\":17,\"type\":\"image\",\"layoutId\":\"4\",\"campaignId\":\"1\"}','192.168.0.99'),
(267,1731534842,1,'Saved','Playlist',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(268,1731534847,1,'Saved','Widget',10,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(269,1731534847,1,'Saved','Widget',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(270,1731534847,1,'Saved','Widget',14,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(271,1731534847,1,'Saved','Widget',15,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(272,1731534847,1,'Saved','Widget',16,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(273,1731534847,1,'Saved','Widget',17,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(274,1731534847,1,'Added','Widget',18,'{\"widgetId\":18,\"type\":\"image\",\"layoutId\":\"4\",\"campaignId\":\"1\"}','192.168.0.99'),
(275,1731534848,1,'Saved','Playlist',11,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(276,1731534901,0,'Saved','Playlist',11,'{\"duration\":\"0 > 90\",\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}',NULL),
(277,1731535021,1,'Saved','Widget',13,'{\"useDuration\":\"0 > 1\",\"calculatedDuration\":\"5 > 20\",\"widgetOptions\":\"[\\n    {\\n        \\\"dateFormat\\\": \\\"YYYY-MM-DD > \\\"\\n    },\\n    {\\n        \\\"durationIsPerItem\\\": \\\"0 > 1\\\"\\n    },\\n    {\\n        \\\"itemsSideBySide\\\": \\\"1 > 0\\\"\\n    }\\n]\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(278,1731535022,1,'Saved','Playlist',12,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(279,1731535065,1,'Saved','Widget',13,'{\"widgetOptions\":\"[\\n    {\\n        \\\"uri\\\": \\\"https%3A%2F%2Fwww.wired.com%2Ffeed%2Fcategory%2Ftech%2Flatest%2Frss > https%3A%2F%2Fwww.wired.com%2Ffeed%2Frss\\\"\\n    }\\n]\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(280,1731535095,1,'Saved','Widget',13,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(281,1731535201,0,'Saved','Playlist',12,'{\"duration\":\"0 > 20\",\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}',NULL),
(282,1731535242,1,'Saved','Widget',13,'{\"calculatedDuration\":\"20 > 5\",\"widgetOptions\":\"[\\n    {\\n        \\\"font-size\\\": \\\"16 > 36\\\"\\n    },\\n    {\\n        \\\"numItems\\\": \\\"4 > 1\\\"\\n    }\\n]\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(283,1731535243,1,'Saved','Playlist',12,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(284,1731535501,0,'Saved','Playlist',12,'{\"duration\":\"20 > 5\",\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}',NULL),
(285,1731535788,1,'Deleted','Media',30,'{\"mediaId\":30,\"name\":\"Background\",\"mediaType\":\"image\",\"fileName\":\"bg_smcs.png\"}','192.168.0.99'),
(286,1731535813,1,'Added','Media',33,'{\"mediaId\":33,\"name\":\"Background\",\"mediaType\":\"image\",\"fileName\":\"bg_smcs.png\",\"folderId\":1}','192.168.0.99'),
(287,1731535840,1,'Updated Draft','Layout',4,'{\"backgroundImageId\":\" > 33\",\"status\":\"4 > 3\",\"campaignId\":[1]}','192.168.0.99'),
(288,1731535921,1,'Added','Widget',19,'{\"widgetId\":19,\"type\":\"ticker\",\"layoutId\":\"4\",\"campaignId\":\"1\"}','192.168.0.99'),
(289,1731535921,1,'Saved','Playlist',13,'{\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(290,1731536027,1,'Saved','Widget',19,'{\"useDuration\":\"0 > 1\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}','192.168.0.99'),
(291,1731536070,1,'Deleted','Widget',6,'{\"widgetId\":6,\"playlistId\":8}','192.168.0.99'),
(292,1731536070,1,'Deleted','Widget',7,'{\"widgetId\":7,\"playlistId\":8}','192.168.0.99'),
(293,1731536070,1,'Deleted','Widget',8,'{\"widgetId\":8,\"playlistId\":8}','192.168.0.99'),
(294,1731536070,1,'Deleted','Playlist',8,'{\"playlistId\":8,\"regionId\":7}','192.168.0.99'),
(295,1731536070,1,'Region Deleted','Region',7,'{\"regionId\":7,\"layoutId\":3}','192.168.0.99'),
(296,1731536070,1,'Deleted','Widget',9,'{\"widgetId\":9,\"playlistId\":9}','192.168.0.99'),
(297,1731536070,1,'Deleted','Playlist',9,'{\"playlistId\":9,\"regionId\":8}','192.168.0.99'),
(298,1731536070,1,'Region Deleted','Region',8,'{\"regionId\":8,\"layoutId\":3}','192.168.0.99'),
(299,1731536070,1,'Deleted','Playlist',10,'{\"playlistId\":10,\"regionId\":9}','192.168.0.99'),
(300,1731536070,1,'Region Deleted','Region',9,'{\"regionId\":9,\"layoutId\":3}','192.168.0.99'),
(301,1731536070,1,'Layout Deleted','Layout',3,'{\"layoutId\":3}','192.168.0.99'),
(302,1731536070,1,'Deleted draft for 4','Layout',3,'{\"parentId\":\" > 4\"}','192.168.0.99'),
(303,1731536070,1,'Updated Draft','Layout',4,'{\"publishedStatusId\":\"2 > 1\",\"campaignId\":[1]}','192.168.0.99'),
(304,1731536101,0,'Saved','Playlist',13,'{\"duration\":\"0 > 5\",\"requiresDurationUpdate\":\"1 > 0\",\"campaignId\":[\"1\"],\"layoutId\":[\"4\"]}',NULL),
(305,1731536215,1,'Updated','DisplayProfile',6,'{\"forceHttps\":\"1 > 0\"}','192.168.0.99'),
(306,1731536654,1,'Updated','DisplayProfile',6,'{\"embeddedServerAllowWan\":\"0 > 1\"}','192.168.0.99'),
(307,1731541788,1,'Login Granted','User',1,'{\"UserAgent\":[\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10.15; rv:132.0) Gecko\\/20100101 Firefox\\/132.0\"]}','192.168.0.99'),
(308,1731541901,1,'Updated','Settings',0,'{\"SCHEDULE_SHOW_LAYOUT_NAME\":\"0 > 1\",\"RESTING_LOG_LEVEL\":\"Error > emergency\",\"audit\":\"Error > emergency\"}','192.168.0.99'),
(309,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(310,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(311,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(312,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(313,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(314,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(315,1731542402,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(316,1731542402,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(317,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(318,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(319,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(320,1731542402,0,'Updated','Media',6,'{\"fileName\":\"xibo-calendar-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-calendar-render.js\"}',NULL),
(321,1731542402,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(322,1731542402,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(323,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(324,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(325,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(326,1731542402,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(327,1731542402,0,'Updated','Media',7,'{\"fileName\":\"Chart.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/Chart.min.js\"}',NULL),
(328,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(329,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(330,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(331,1731542402,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(332,1731542402,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(333,1731542402,0,'Updated','Media',9,'{\"fileName\":\"flipclock.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/flipclock.min.js\"}',NULL),
(334,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(335,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(336,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(337,1731542402,0,'Updated','Media',10,'{\"fileName\":\"xibo-countdown-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-countdown-render.js\"}',NULL),
(338,1731542402,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(339,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(340,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(341,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(342,1731542402,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(343,1731542402,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(344,1731542402,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(345,1731542402,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(346,1731542402,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(347,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(348,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(349,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(350,1731542402,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(351,1731542402,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(352,1731542402,0,'Updated','Media',13,'{\"fileName\":\"xibo-dataset-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-dataset-render.js\"}',NULL),
(353,1731542402,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(354,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(355,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(356,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(357,1731542402,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(358,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(359,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(360,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(361,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(362,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(363,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(364,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(365,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(366,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(367,1731542402,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(368,1731542402,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(369,1731542402,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(370,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(371,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(372,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(373,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(374,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(375,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(376,1731542403,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(377,1731542403,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(378,1731542403,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(379,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(380,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(381,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(382,1731542403,0,'Updated','Media',19,'{\"fileName\":\"pdf.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/pdfjs\\/pdf.js\"}',NULL),
(383,1731542403,0,'Updated','Media',20,'{\"fileName\":\"pdf.worker.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/pdfjs\\/pdf.worker.js\"}',NULL),
(384,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(385,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(386,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(387,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(388,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(389,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(390,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(391,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(392,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(393,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(394,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(395,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(396,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(397,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(398,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(399,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(400,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(401,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(402,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(403,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(404,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(405,1731542403,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(406,1731542403,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(407,1731542403,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(408,1731542403,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(409,1731542403,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(410,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(411,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(412,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(413,1731542403,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(414,1731542403,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(415,1731542403,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(416,1731542403,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(417,1731542403,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(418,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(419,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(420,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(421,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(422,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(423,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(424,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(425,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(426,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(427,1731542403,0,'Updated','Media',21,'{\"fileName\":\"xibo-webpage-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-webpage-render.js\"}',NULL),
(428,1731542403,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(429,1731542403,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(430,1731542403,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(431,1731542403,0,'Updated','Media',22,'{\"fileName\":\"xibo-worldclock-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-worldclock-render.js\"}',NULL),
(432,1731542403,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(433,1731542403,0,'Updated','Media',23,'{\"fileName\":\"moment-timezone.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment-timezone.js\"}',NULL),
(434,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(435,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(436,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(437,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(438,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(439,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(440,1731628802,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(441,1731628802,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(442,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(443,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(444,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(445,1731628802,0,'Updated','Media',6,'{\"fileName\":\"xibo-calendar-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-calendar-render.js\"}',NULL),
(446,1731628802,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(447,1731628802,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(448,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(449,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(450,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(451,1731628802,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(452,1731628802,0,'Updated','Media',7,'{\"fileName\":\"Chart.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/Chart.min.js\"}',NULL),
(453,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(454,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(455,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(456,1731628802,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(457,1731628802,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(458,1731628802,0,'Updated','Media',9,'{\"fileName\":\"flipclock.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/flipclock.min.js\"}',NULL),
(459,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(460,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(461,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(462,1731628802,0,'Updated','Media',10,'{\"fileName\":\"xibo-countdown-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-countdown-render.js\"}',NULL),
(463,1731628802,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(464,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(465,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(466,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(467,1731628802,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(468,1731628802,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(469,1731628802,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(470,1731628802,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(471,1731628802,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(472,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(473,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(474,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(475,1731628802,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(476,1731628802,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(477,1731628802,0,'Updated','Media',13,'{\"fileName\":\"xibo-dataset-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-dataset-render.js\"}',NULL),
(478,1731628802,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(479,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(480,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(481,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(482,1731628802,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(483,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(484,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(485,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(486,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(487,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(488,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(489,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(490,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(491,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(492,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(493,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(494,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(495,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(496,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(497,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(498,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(499,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(500,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(501,1731628802,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(502,1731628802,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(503,1731628802,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(504,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(505,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(506,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(507,1731628802,0,'Updated','Media',19,'{\"fileName\":\"pdf.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/pdfjs\\/pdf.js\"}',NULL),
(508,1731628802,0,'Updated','Media',20,'{\"fileName\":\"pdf.worker.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/pdfjs\\/pdf.worker.js\"}',NULL),
(509,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(510,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(511,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(512,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(513,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(514,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(515,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(516,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(517,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(518,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(519,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(520,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(521,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(522,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(523,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(524,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(525,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(526,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(527,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(528,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(529,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(530,1731628802,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(531,1731628802,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(532,1731628802,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(533,1731628802,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(534,1731628802,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(535,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(536,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(537,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(538,1731628802,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(539,1731628802,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(540,1731628802,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(541,1731628802,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(542,1731628802,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(543,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(544,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(545,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(546,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(547,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(548,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(549,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(550,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(551,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(552,1731628802,0,'Updated','Media',21,'{\"fileName\":\"xibo-webpage-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-webpage-render.js\"}',NULL),
(553,1731628802,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(554,1731628802,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(555,1731628802,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(556,1731628802,0,'Updated','Media',22,'{\"fileName\":\"xibo-worldclock-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-worldclock-render.js\"}',NULL),
(557,1731628802,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(558,1731628802,0,'Updated','Media',23,'{\"fileName\":\"moment-timezone.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment-timezone.js\"}',NULL),
(559,1732065786,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(560,1732065786,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(561,1732065786,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(562,1732065786,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(563,1732065786,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(564,1732065786,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(565,1732065786,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(566,1732065786,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(567,1732065786,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(568,1732065786,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(569,1732065786,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(570,1732065786,0,'Updated','Media',6,'{\"fileName\":\"xibo-calendar-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-calendar-render.js\"}',NULL),
(571,1732065786,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(572,1732065786,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(573,1732065786,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(574,1732065786,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(575,1732065786,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(576,1732065786,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(577,1732065786,0,'Updated','Media',7,'{\"fileName\":\"Chart.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/Chart.min.js\"}',NULL),
(578,1732065786,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(579,1732065786,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(580,1732065786,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(581,1732065786,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(582,1732065786,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(583,1732065786,0,'Updated','Media',9,'{\"fileName\":\"flipclock.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/flipclock.min.js\"}',NULL),
(584,1732065786,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(585,1732065786,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(586,1732065786,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(587,1732065786,0,'Updated','Media',10,'{\"fileName\":\"xibo-countdown-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-countdown-render.js\"}',NULL),
(588,1732065786,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(589,1732065786,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(590,1732065786,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(591,1732065786,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(592,1732065786,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(593,1732065786,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(594,1732065786,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(595,1732065786,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(596,1732065786,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(597,1732065786,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(598,1732065786,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(599,1732065786,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(600,1732065786,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(601,1732065786,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(602,1732065786,0,'Updated','Media',13,'{\"fileName\":\"xibo-dataset-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-dataset-render.js\"}',NULL),
(603,1732065786,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(604,1732065786,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(605,1732065786,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(606,1732065786,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(607,1732065786,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(608,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(609,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(610,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(611,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(612,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(613,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(614,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(615,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(616,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(617,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(618,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(619,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(620,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(621,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(622,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(623,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(624,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(625,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(626,1732065787,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(627,1732065787,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(628,1732065787,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(629,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(630,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(631,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(632,1732065787,0,'Updated','Media',19,'{\"fileName\":\"pdf.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/pdfjs\\/pdf.js\"}',NULL),
(633,1732065787,0,'Updated','Media',20,'{\"fileName\":\"pdf.worker.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/pdfjs\\/pdf.worker.js\"}',NULL),
(634,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(635,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(636,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(637,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(638,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(639,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(640,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(641,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(642,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(643,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(644,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(645,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(646,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(647,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(648,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(649,1732065787,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(650,1732065787,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(651,1732065787,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(652,1732065788,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(653,1732065788,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(654,1732065788,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(655,1732065788,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(656,1732065788,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(657,1732065788,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(658,1732065788,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(659,1732065788,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(660,1732065788,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(661,1732065788,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(662,1732065788,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(663,1732065788,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(664,1732065788,0,'Updated','Media',11,'{\"fileName\":\"jquery.marquee.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.marquee.min.js\"}',NULL),
(665,1732065788,0,'Updated','Media',8,'{\"fileName\":\"jquery-cycle-2.1.6.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}',NULL),
(666,1732065788,0,'Updated','Media',5,'{\"fileName\":\"xibo-text-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-text-render.js\"}',NULL),
(667,1732065788,0,'Updated','Media',12,'{\"fileName\":\"xibo-image-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-image-render.js\"}',NULL),
(668,1732065788,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(669,1732065788,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(670,1732065788,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(671,1732065788,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(672,1732065788,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(673,1732065788,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(674,1732065788,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(675,1732065788,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(676,1732065788,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(677,1732065788,0,'Updated','Media',21,'{\"fileName\":\"xibo-webpage-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-webpage-render.js\"}',NULL),
(678,1732065788,0,'Updated','Media',1,'{\"fileName\":\"jquery.min.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/jquery.min.js\"}',NULL),
(679,1732065788,0,'Updated','Media',2,'{\"fileName\":\"xibo-layout-scaler.js > \\/srv\\/xibo-cms\\/modules\\/xibo-layout-scaler.js\"}',NULL),
(680,1732065788,0,'Updated','Media',3,'{\"fileName\":\"xibo-interactive-control.min.js > \\/srv\\/xibo-cms\\/modules\\/xibo-interactive-control.min.js\"}',NULL),
(681,1732065788,0,'Updated','Media',22,'{\"fileName\":\"xibo-worldclock-render.js > \\/srv\\/xibo-cms\\/modules\\/xibo-worldclock-render.js\"}',NULL),
(682,1732065788,0,'Updated','Media',4,'{\"fileName\":\"moment.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment.js\"}',NULL),
(683,1732065788,0,'Updated','Media',23,'{\"fileName\":\"moment-timezone.js > \\/srv\\/xibo-cms\\/modules\\/vendor\\/moment-timezone.js\"}',NULL),
(684,1732104717,1,'Login Granted','User',1,'{\"UserAgent\":[\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10.15; rv:132.0) Gecko\\/20100101 Firefox\\/132.0\"]}','192.168.0.99');
/*!40000 ALTER TABLE `auditlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bandwidth`
--

DROP TABLE IF EXISTS `bandwidth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bandwidth` (
  `displayId` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `size` bigint(20) NOT NULL,
  PRIMARY KEY (`displayId`,`type`,`month`),
  KEY `type` (`type`),
  CONSTRAINT `bandwidth_ibfk_1` FOREIGN KEY (`type`) REFERENCES `bandwidthtype` (`bandwidthTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bandwidth`
--

LOCK TABLES `bandwidth` WRITE;
/*!40000 ALTER TABLE `bandwidth` DISABLE KEYS */;
/*!40000 ALTER TABLE `bandwidth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bandwidthtype`
--

DROP TABLE IF EXISTS `bandwidthtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bandwidthtype` (
  `bandwidthTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`bandwidthTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bandwidthtype`
--

LOCK TABLES `bandwidthtype` WRITE;
/*!40000 ALTER TABLE `bandwidthtype` DISABLE KEYS */;
INSERT INTO `bandwidthtype` VALUES
(1,'Register'),
(2,'Required Files'),
(3,'Schedule'),
(4,'Get File'),
(5,'Get Resource'),
(6,'Media Inventory'),
(7,'Notify Status'),
(8,'Submit Stats'),
(9,'Submit Log'),
(10,'Report Fault'),
(11,'Screen Shot');
/*!40000 ALTER TABLE `bandwidthtype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaign`
--

DROP TABLE IF EXISTS `campaign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaign` (
  `campaignId` int(11) NOT NULL AUTO_INCREMENT,
  `campaign` varchar(254) NOT NULL,
  `isLayoutSpecific` tinyint(4) NOT NULL,
  `userId` int(11) NOT NULL,
  `folderId` int(11) NOT NULL DEFAULT 1,
  `permissionsFolderId` int(11) NOT NULL DEFAULT 1,
  `cyclePlaybackEnabled` tinyint(4) NOT NULL DEFAULT 0,
  `playCount` int(11) DEFAULT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'list',
  `startDt` int(11) DEFAULT NULL,
  `endDt` int(11) DEFAULT NULL,
  `targetType` varchar(6) DEFAULT NULL,
  `target` int(11) DEFAULT NULL,
  `plays` int(11) NOT NULL DEFAULT 0,
  `spend` decimal(30,4) NOT NULL DEFAULT 0.0000,
  `impressions` decimal(30,4) NOT NULL DEFAULT 0.0000,
  `lastPopId` varchar(50) DEFAULT NULL,
  `listPlayOrder` varchar(6) NOT NULL DEFAULT 'round',
  `ref1` varchar(254) DEFAULT NULL,
  `ref2` varchar(254) DEFAULT NULL,
  `ref3` varchar(254) DEFAULT NULL,
  `ref4` varchar(254) DEFAULT NULL,
  `ref5` varchar(254) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifiedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `modifiedBy` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`campaignId`),
  KEY `userId` (`userId`),
  KEY `folderId` (`folderId`),
  CONSTRAINT `campaign_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `campaign_ibfk_2` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign`
--

LOCK TABLES `campaign` WRITE;
/*!40000 ALTER TABLE `campaign` DISABLE KEYS */;
INSERT INTO `campaign` VALUES
(1,'SMCS - main',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-11-13 21:21:28','2024-11-13 21:21:28',0);
/*!40000 ALTER TABLE `campaign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `command`
--

DROP TABLE IF EXISTS `command`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `command` (
  `commandId` int(11) NOT NULL AUTO_INCREMENT,
  `command` varchar(254) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `availableOn` varchar(50) DEFAULT NULL,
  `commandString` varchar(1000) DEFAULT NULL,
  `validationString` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`commandId`),
  KEY `userId` (`userId`),
  CONSTRAINT `command_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `command`
--

LOCK TABLES `command` WRITE;
/*!40000 ALTER TABLE `command` DISABLE KEYS */;
/*!40000 ALTER TABLE `command` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connectors`
--

DROP TABLE IF EXISTS `connectors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `connectors` (
  `connectorId` int(11) NOT NULL AUTO_INCREMENT,
  `className` varchar(254) NOT NULL,
  `settings` text DEFAULT NULL,
  `isEnabled` tinyint(4) NOT NULL DEFAULT 0,
  `isVisible` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`connectorId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connectors`
--

LOCK TABLES `connectors` WRITE;
/*!40000 ALTER TABLE `connectors` DISABLE KEYS */;
INSERT INTO `connectors` VALUES
(1,'\\Xibo\\Connector\\PixabayConnector',NULL,0,1),
(2,'\\Xibo\\Connector\\XiboExchangeConnector',NULL,0,1),
(3,'\\Xibo\\Connector\\XiboDashboardConnector',NULL,0,1),
(4,'\\Xibo\\Connector\\XiboSspConnector',NULL,0,1),
(5,'\\Xibo\\Connector\\XiboAudienceReportingConnector',NULL,0,1);
/*!40000 ALTER TABLE `connectors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dataset`
--

DROP TABLE IF EXISTS `dataset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dataset` (
  `dataSetId` int(11) NOT NULL AUTO_INCREMENT,
  `dataSet` varchar(50) NOT NULL,
  `description` varchar(254) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `lastDataEdit` int(11) NOT NULL DEFAULT 0,
  `code` varchar(50) DEFAULT NULL,
  `isLookup` tinyint(4) NOT NULL,
  `isRemote` tinyint(4) NOT NULL DEFAULT 0,
  `method` enum('GET','POST') DEFAULT NULL,
  `uri` varchar(250) DEFAULT NULL,
  `postData` text DEFAULT NULL,
  `authentication` varchar(10) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `customHeaders` text DEFAULT NULL,
  `userAgent` text DEFAULT NULL,
  `refreshRate` int(11) NOT NULL DEFAULT 86400,
  `clearRate` int(11) NOT NULL DEFAULT 0,
  `truncateOnEmpty` tinyint(4) NOT NULL DEFAULT 0,
  `runsAfter` int(11) DEFAULT NULL,
  `dataRoot` varchar(250) DEFAULT NULL,
  `lastSync` int(11) NOT NULL DEFAULT 0,
  `summarize` varchar(10) DEFAULT NULL,
  `summarizeField` varchar(250) DEFAULT NULL,
  `lastClear` int(11) NOT NULL DEFAULT 0,
  `ignoreFirstRow` tinyint(4) DEFAULT NULL,
  `sourceId` tinyint(4) DEFAULT NULL,
  `rowLimit` int(11) DEFAULT NULL,
  `limitPolicy` varchar(50) DEFAULT NULL,
  `csvSeparator` varchar(5) DEFAULT NULL,
  `folderId` int(11) NOT NULL DEFAULT 1,
  `permissionsFolderId` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`dataSetId`),
  KEY `userId` (`userId`),
  KEY `folderId` (`folderId`),
  CONSTRAINT `dataset_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `dataset_ibfk_2` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dataset`
--

LOCK TABLES `dataset` WRITE;
/*!40000 ALTER TABLE `dataset` DISABLE KEYS */;
/*!40000 ALTER TABLE `dataset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datasetcolumn`
--

DROP TABLE IF EXISTS `datasetcolumn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datasetcolumn` (
  `dataSetColumnId` int(11) NOT NULL AUTO_INCREMENT,
  `dataSetId` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `dataTypeId` int(11) NOT NULL,
  `dataSetColumnTypeId` int(11) NOT NULL,
  `listContent` varchar(1000) DEFAULT NULL,
  `columnOrder` smallint(6) NOT NULL,
  `formula` varchar(1000) DEFAULT NULL,
  `remoteField` varchar(250) DEFAULT NULL,
  `showFilter` tinyint(4) NOT NULL DEFAULT 1,
  `showSort` tinyint(4) NOT NULL DEFAULT 1,
  `tooltip` varchar(100) DEFAULT NULL,
  `isRequired` tinyint(4) NOT NULL DEFAULT 0,
  `dateFormat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`dataSetColumnId`),
  KEY `dataSetId` (`dataSetId`),
  KEY `dataTypeId` (`dataTypeId`),
  KEY `dataSetColumnTypeId` (`dataSetColumnTypeId`),
  CONSTRAINT `datasetcolumn_ibfk_1` FOREIGN KEY (`dataSetId`) REFERENCES `dataset` (`dataSetId`),
  CONSTRAINT `datasetcolumn_ibfk_2` FOREIGN KEY (`dataTypeId`) REFERENCES `datatype` (`dataTypeId`),
  CONSTRAINT `datasetcolumn_ibfk_3` FOREIGN KEY (`dataSetColumnTypeId`) REFERENCES `datasetcolumntype` (`dataSetColumnTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datasetcolumn`
--

LOCK TABLES `datasetcolumn` WRITE;
/*!40000 ALTER TABLE `datasetcolumn` DISABLE KEYS */;
/*!40000 ALTER TABLE `datasetcolumn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datasetcolumntype`
--

DROP TABLE IF EXISTS `datasetcolumntype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datasetcolumntype` (
  `dataSetColumnTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `dataSetColumnType` varchar(100) NOT NULL,
  PRIMARY KEY (`dataSetColumnTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datasetcolumntype`
--

LOCK TABLES `datasetcolumntype` WRITE;
/*!40000 ALTER TABLE `datasetcolumntype` DISABLE KEYS */;
INSERT INTO `datasetcolumntype` VALUES
(1,'Value'),
(2,'Formula'),
(3,'Remote');
/*!40000 ALTER TABLE `datasetcolumntype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datasetrss`
--

DROP TABLE IF EXISTS `datasetrss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datasetrss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dataSetId` int(11) NOT NULL,
  `psk` varchar(254) NOT NULL,
  `title` varchar(254) NOT NULL,
  `author` varchar(254) NOT NULL,
  `titleColumnId` int(11) DEFAULT NULL,
  `summaryColumnId` int(11) DEFAULT NULL,
  `contentColumnId` int(11) DEFAULT NULL,
  `publishedDateColumnId` int(11) DEFAULT NULL,
  `sort` text DEFAULT NULL,
  `filter` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dataSetId` (`dataSetId`),
  CONSTRAINT `datasetrss_ibfk_1` FOREIGN KEY (`dataSetId`) REFERENCES `dataset` (`dataSetId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datasetrss`
--

LOCK TABLES `datasetrss` WRITE;
/*!40000 ALTER TABLE `datasetrss` DISABLE KEYS */;
/*!40000 ALTER TABLE `datasetrss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datatype`
--

DROP TABLE IF EXISTS `datatype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datatype` (
  `dataTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `dataType` varchar(100) NOT NULL,
  PRIMARY KEY (`dataTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datatype`
--

LOCK TABLES `datatype` WRITE;
/*!40000 ALTER TABLE `datatype` DISABLE KEYS */;
INSERT INTO `datatype` VALUES
(1,'String'),
(2,'Number'),
(3,'Date'),
(4,'External Image'),
(5,'Library Image'),
(6,'HTML');
/*!40000 ALTER TABLE `datatype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daypart`
--

DROP TABLE IF EXISTS `daypart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daypart` (
  `dayPartId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `isRetired` tinyint(4) NOT NULL DEFAULT 0,
  `userId` int(11) NOT NULL,
  `startTime` varchar(8) NOT NULL DEFAULT '00:00:00',
  `endTime` varchar(8) NOT NULL DEFAULT '00:00:00',
  `exceptions` text DEFAULT NULL,
  `isAlways` tinyint(4) NOT NULL DEFAULT 0,
  `isCustom` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`dayPartId`),
  KEY `userId` (`userId`),
  CONSTRAINT `daypart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daypart`
--

LOCK TABLES `daypart` WRITE;
/*!40000 ALTER TABLE `daypart` DISABLE KEYS */;
INSERT INTO `daypart` VALUES
(1,'Custom','User specifies the from/to date',0,1,'','','',0,1),
(2,'Always','Event runs always',0,1,'','','',1,0);
/*!40000 ALTER TABLE `daypart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `display`
--

DROP TABLE IF EXISTS `display`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `display` (
  `displayId` int(11) NOT NULL AUTO_INCREMENT,
  `display` varchar(50) NOT NULL,
  `displayTypeId` int(11) DEFAULT NULL,
  `screenSize` int(11) DEFAULT NULL,
  `languages` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `isMobile` tinyint(4) NOT NULL DEFAULT 0,
  `venueId` int(11) DEFAULT NULL,
  `auditingUntil` int(11) NOT NULL DEFAULT 0,
  `defaultLayoutId` int(11) NOT NULL,
  `license` varchar(40) DEFAULT NULL,
  `licensed` tinyint(4) NOT NULL DEFAULT 0,
  `loggedIn` tinyint(4) NOT NULL DEFAULT 0,
  `lastaccessed` int(11) DEFAULT NULL,
  `inc_schedule` tinyint(4) NOT NULL DEFAULT 0,
  `email_alert` int(11) DEFAULT 0,
  `alert_timeout` int(11) DEFAULT 0,
  `clientAddress` varchar(50) DEFAULT NULL,
  `mediaInventoryStatus` tinyint(4) NOT NULL DEFAULT 0,
  `macAddress` varchar(254) DEFAULT NULL,
  `lastChanged` int(11) DEFAULT NULL,
  `numberOfMacAddressChanges` int(11) DEFAULT 0,
  `lastWakeOnLanCommandSent` int(11) DEFAULT NULL,
  `wakeOnLan` tinyint(4) NOT NULL DEFAULT 0,
  `wakeOnLanTime` varchar(5) DEFAULT NULL,
  `broadCastAddress` varchar(100) DEFAULT NULL,
  `secureOn` varchar(17) DEFAULT NULL,
  `cidr` varchar(6) DEFAULT NULL,
  `geoLocation` point DEFAULT NULL,
  `client_type` varchar(20) DEFAULT NULL,
  `client_version` varchar(15) DEFAULT NULL,
  `client_code` smallint(6) DEFAULT NULL,
  `displayProfileId` int(11) DEFAULT NULL,
  `screenShotRequested` tinyint(4) NOT NULL DEFAULT 0,
  `storageAvailableSpace` bigint(20) DEFAULT NULL,
  `storageTotalSpace` bigint(20) DEFAULT NULL,
  `xmrChannel` varchar(254) DEFAULT NULL,
  `xmrPubKey` text DEFAULT NULL,
  `lastCommandSuccess` tinyint(4) NOT NULL DEFAULT 2,
  `deviceName` varchar(254) DEFAULT NULL,
  `timeZone` varchar(254) DEFAULT NULL,
  `overrideConfig` text DEFAULT NULL,
  `newCmsAddress` varchar(1000) DEFAULT NULL,
  `newCmsKey` varchar(40) DEFAULT NULL,
  `orientation` varchar(10) DEFAULT NULL,
  `resolution` varchar(10) DEFAULT NULL,
  `commercialLicence` tinyint(4) DEFAULT NULL,
  `teamViewerSerial` varchar(255) DEFAULT NULL,
  `webkeySerial` varchar(255) DEFAULT NULL,
  `lanIpAddress` varchar(50) DEFAULT NULL,
  `customId` varchar(254) DEFAULT NULL,
  `isOutdoor` tinyint(4) NOT NULL DEFAULT 0,
  `costPerPlay` decimal(10,4) DEFAULT NULL,
  `impressionsPerPlay` decimal(10,4) DEFAULT NULL,
  PRIMARY KEY (`displayId`),
  UNIQUE KEY `license` (`license`),
  KEY `defaultLayoutId` (`defaultLayoutId`),
  KEY `displayProfileId` (`displayProfileId`),
  KEY `displayTypeId` (`displayTypeId`),
  CONSTRAINT `display_ibfk_1` FOREIGN KEY (`displayProfileId`) REFERENCES `displayprofile` (`displayProfileId`),
  CONSTRAINT `display_ibfk_2` FOREIGN KEY (`displayTypeId`) REFERENCES `display_types` (`displayTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `display`
--

LOCK TABLES `display` WRITE;
/*!40000 ALTER TABLE `display` DISABLE KEYS */;
/*!40000 ALTER TABLE `display` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `display_types`
--

DROP TABLE IF EXISTS `display_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `display_types` (
  `displayTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `displayType` varchar(100) NOT NULL,
  PRIMARY KEY (`displayTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `display_types`
--

LOCK TABLES `display_types` WRITE;
/*!40000 ALTER TABLE `display_types` DISABLE KEYS */;
INSERT INTO `display_types` VALUES
(1,'Billboard'),
(2,'Kiosk'),
(3,'LED Matrix / LED Video Wall'),
(4,'Monitor / Other'),
(5,'Projector'),
(6,'Shelf-edge Display'),
(7,'Smart Mirror'),
(8,'TV / Panel'),
(9,'Tablet'),
(10,'Totem');
/*!40000 ALTER TABLE `display_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `displayevent`
--

DROP TABLE IF EXISTS `displayevent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `displayevent` (
  `displayEventId` int(11) NOT NULL AUTO_INCREMENT,
  `eventDate` int(11) NOT NULL,
  `displayId` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) DEFAULT NULL,
  PRIMARY KEY (`displayEventId`),
  KEY `eventDate` (`eventDate`),
  KEY `displayId` (`displayId`,`end`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `displayevent`
--

LOCK TABLES `displayevent` WRITE;
/*!40000 ALTER TABLE `displayevent` DISABLE KEYS */;
/*!40000 ALTER TABLE `displayevent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `displaygroup`
--

DROP TABLE IF EXISTS `displaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `displaygroup` (
  `displayGroupId` int(11) NOT NULL AUTO_INCREMENT,
  `displayGroup` varchar(50) NOT NULL,
  `description` varchar(254) DEFAULT NULL,
  `isDisplaySpecific` tinyint(4) NOT NULL DEFAULT 0,
  `isDynamic` tinyint(4) NOT NULL DEFAULT 0,
  `dynamicCriteria` text DEFAULT NULL,
  `dynamicCriteriaLogicalOperator` varchar(3) NOT NULL DEFAULT 'OR',
  `userId` int(11) NOT NULL,
  `dynamicCriteriaTags` varchar(254) DEFAULT NULL,
  `dynamicCriteriaExactTags` tinyint(4) NOT NULL DEFAULT 0,
  `dynamicCriteriaTagsLogicalOperator` varchar(3) NOT NULL DEFAULT 'OR',
  `bandwidthLimit` int(11) NOT NULL DEFAULT 0,
  `ref1` text DEFAULT NULL,
  `ref2` text DEFAULT NULL,
  `ref3` text DEFAULT NULL,
  `ref4` text DEFAULT NULL,
  `ref5` text DEFAULT NULL,
  `createdDt` datetime DEFAULT NULL,
  `modifiedDt` datetime DEFAULT NULL,
  `folderId` int(11) NOT NULL DEFAULT 1,
  `permissionsFolderId` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`displayGroupId`),
  KEY `userId` (`userId`),
  KEY `folderId` (`folderId`),
  CONSTRAINT `displaygroup_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `displaygroup_ibfk_2` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `displaygroup`
--

LOCK TABLES `displaygroup` WRITE;
/*!40000 ALTER TABLE `displaygroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `displaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `displayprofile`
--

DROP TABLE IF EXISTS `displayprofile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `displayprofile` (
  `displayProfileId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL,
  `config` text DEFAULT NULL,
  `isDefault` tinyint(4) NOT NULL DEFAULT 0,
  `userId` int(11) NOT NULL,
  `isCustom` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`displayProfileId`),
  KEY `userId` (`userId`),
  CONSTRAINT `displayprofile_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `displayprofile`
--

LOCK TABLES `displayprofile` WRITE;
/*!40000 ALTER TABLE `displayprofile` DISABLE KEYS */;
INSERT INTO `displayprofile` VALUES
(1,'Windows','windows','[]',1,1,0),
(2,'Android','android','[]',1,1,0),
(3,'webOS','lg','[]',1,1,0),
(4,'Tizen','sssp','[]',1,1,0),
(5,'Linux','linux','[]',1,1,0),
(6,'Web','lg','[{\"name\":\"forceHttps\",\"value\":0},{\"name\":\"embeddedServerAllowWan\",\"value\":1}]',0,1,0);
/*!40000 ALTER TABLE `displayprofile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folder`
--

DROP TABLE IF EXISTS `folder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `folder` (
  `folderId` int(11) NOT NULL AUTO_INCREMENT,
  `folderName` varchar(255) NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `isRoot` int(11) NOT NULL DEFAULT 0,
  `children` text DEFAULT NULL,
  `permissionsFolderId` int(11) DEFAULT 1,
  PRIMARY KEY (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folder`
--

LOCK TABLES `folder` WRITE;
/*!40000 ALTER TABLE `folder` DISABLE KEYS */;
INSERT INTO `folder` VALUES
(1,'/',NULL,1,'2',NULL),
(2,'SMCS-Main',1,0,'3,4',1),
(3,'Free-Software-Info',2,0,NULL,1),
(4,'SMCS-Deck',2,0,NULL,1);
/*!40000 ALTER TABLE `folder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group` (
  `groupId` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(50) NOT NULL,
  `isUserSpecific` tinyint(4) NOT NULL DEFAULT 0,
  `isEveryone` tinyint(4) NOT NULL DEFAULT 0,
  `libraryQuota` int(11) DEFAULT NULL,
  `isSystemNotification` tinyint(4) NOT NULL DEFAULT 0,
  `isDisplayNotification` tinyint(4) NOT NULL DEFAULT 0,
  `features` longtext DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `isShownForAddUser` tinyint(4) NOT NULL DEFAULT 0,
  `defaultHomepageId` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`groupId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group`
--

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` VALUES
(1,'Users',0,0,NULL,0,0,'[\"icondashboard.view\",\"icondashboard.add\",\"icondashboard.modify\",\"schedule.now\",\"users.view\",\"users.add\",\"users.modify\",\"statusdashboard.view\",\"statusdashboard.add\",\"statusdashboard.modify\",\"schedule.view\",\"schedule.add\",\"schedule.modify\",\"region.view\",\"region.add\",\"region.modify\",\"preview.view\",\"preview.add\",\"preview.modify\",\"playlist.view\",\"playlist.add\",\"playlist.modify\",\"mediamanager.view\",\"mediamanager.add\",\"mediamanager.modify\",\"library.view\",\"library.add\",\"library.modify\",\"layout.view\",\"layout.add\",\"layout.modify\",\"user.sharing\"]',NULL,0,NULL),
(2,'Everyone',0,1,NULL,0,0,NULL,NULL,0,NULL),
(3,'offbyone',1,0,0,1,0,'[\"schedule.now\"]',NULL,0,''),
(4,'System Notifications',0,0,NULL,1,0,'[\"schedule.now\"]',NULL,0,NULL),
(5,'Content Manager',0,0,NULL,0,0,'[\"folder.view\",\"folder.add\",\"folder.modify\",\"library.view\",\"library.add\",\"library.modify\",\"dataset.view\",\"dataset.add\",\"dataset.modify\",\"dataset.data\",\"playlist.view\",\"playlist.add\",\"playlist.modify\",\"layout.view\",\"layout.add\",\"layout.modify\",\"layout.export\",\"template.view\",\"template.add\",\"template.modify\",\"resolution.view\",\"resolution.add\",\"resolution.modify\",\"campaign.view\",\"campaign.add\",\"campaign.modify\",\"tag.view\",\"tag.tagging\",\"user.profile\"]','Management of all features related to Content Creation only.',1,'icondashboard.view'),
(6,'Playlist Manager',0,0,NULL,0,0,'[\"user.profile\",\"dashboard.playlist\"]','Management of specific Playlists to edit / replace Media only.',1,'playlistdashboard.view'),
(7,'Schedule Manager',0,0,NULL,0,0,'[\"folder.view\",\"schedule.view\",\"schedule.agenda\",\"schedule.add\",\"schedule.modify\",\"schedule.now\",\"daypart.view\",\"daypart.add\",\"daypart.modify\",\"user.profile\"]','Management of all features for the purpose of Event Scheduling only.',1,'icondashboard.view'),
(8,'Display Manager',0,0,NULL,0,1,'[\"report.view\",\"displays.reporting\",\"proof-of-play\",\"folder.view\",\"folder.add\",\"folder.modify\",\"tag.tagging\",\"schedule.view\",\"schedule.agenda\",\"displays.view\",\"displays.add\",\"displays.modify\",\"displaygroup.view\",\"displaygroup.add\",\"displaygroup.modify\",\"displayprofile.view\",\"displayprofile.add\",\"displayprofile.modify\",\"playersoftware.view\",\"command.view\",\"user.profile\",\"notification.centre\",\"notification.add\",\"notification.modify\",\"dashboard.status\",\"log.view\"]','Management of all features for the purpose of Display Administration only.',1,'statusdashboard.view');
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `help`
--

DROP TABLE IF EXISTS `help`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `help` (
  `helpId` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(254) NOT NULL,
  `category` varchar(254) NOT NULL DEFAULT 'General',
  `link` varchar(254) NOT NULL,
  PRIMARY KEY (`helpId`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `help`
--

LOCK TABLES `help` WRITE;
/*!40000 ALTER TABLE `help` DISABLE KEYS */;
INSERT INTO `help` VALUES
(1,'Layout','General','layouts.html'),
(2,'Content','General','media.html'),
(4,'Schedule','General','scheduling.html'),
(5,'Group','General','users_groups.html'),
(6,'Admin','General','cms_settings.html'),
(7,'Report','General','troubleshooting.html'),
(8,'Dashboard','General','tour.html'),
(9,'User','General','users.html'),
(10,'Display','General','displays.html'),
(11,'DisplayGroup','General','displays_groups.html'),
(12,'Layout','Add','layouts.html#Add_Layout'),
(13,'Layout','Background','layouts_designer.html#Background'),
(14,'Content','Assign','layouts_playlists.html#Assigning_Content'),
(15,'Layout','RegionOptions','layouts_regions.html'),
(16,'Content','AddtoLibrary','media_library.html'),
(17,'Display','Edit','displays.html#Display_Edit'),
(18,'Display','Delete','displays.html#Display_Delete'),
(19,'Displays','Groups','displays_groups.html#Group_Members'),
(20,'UserGroup','Add','users_groups.html#Adding_Group'),
(21,'User','Add','users_administration.html#Add_User'),
(22,'User','Delete','users_administration.html#Delete_User'),
(23,'Content','Config','cms_settings.html#Content'),
(24,'LayoutMedia','Permissions','users_permissions.html'),
(25,'Region','Permissions','users_permissions.html'),
(26,'Library','Assign','layouts_playlists.html#Add_From_Library'),
(27,'Media','Delete','media_library.html#Delete'),
(28,'DisplayGroup','Add','displays_groups.html#Add_Group'),
(29,'DisplayGroup','Edit','displays_groups.html#Edit_Group'),
(30,'DisplayGroup','Delete','displays_groups.html#Delete_Group'),
(31,'DisplayGroup','Members','displays_groups.html#Group_Members'),
(32,'DisplayGroup','Permissions','users_permissions.html'),
(34,'Schedule','ScheduleNow','scheduling_now.html'),
(35,'Layout','Delete','layouts.html#Delete_Layout'),
(36,'Layout','Copy','layouts.html#Copy_Layout'),
(37,'Schedule','Edit','scheduling_events.html#Edit'),
(38,'Schedule','Add','scheduling_events.html#Add'),
(39,'Layout','Permissions','users_permissions.html'),
(40,'Display','MediaInventory','displays.html#Media_Inventory'),
(41,'User','ChangePassword','users.html#Change_Password'),
(42,'Schedule','Delete','scheduling_events.html'),
(43,'Layout','Edit','layouts_designer.html#Edit_Layout'),
(44,'Media','Permissions','users_permissions.html'),
(45,'Display','DefaultLayout','displays.html#DefaultLayout'),
(46,'UserGroup','Edit','users_groups.html#Edit_Group'),
(47,'UserGroup','Members','users_groups.html#Group_Member'),
(48,'User','PageSecurity','users_permissions.html#Page_Security'),
(49,'User','MenuSecurity','users_permissions.html#Menu_Security'),
(50,'UserGroup','Delete','users_groups.html#Delete_Group'),
(51,'User','Edit','users_administration.html#Edit_User'),
(52,'User','Applications','users_administration.html#Users_MyApplications'),
(53,'User','SetHomepage','users_administration.html#Media_Dashboard'),
(54,'DataSet','General','media_datasets.html'),
(55,'DataSet','Add','media_datasets.html#Create_Dataset'),
(56,'DataSet','Edit','media_datasets.html#Edit_Dataset'),
(57,'DataSet','Delete','media_datasets.html#Delete_Dataset'),
(58,'DataSet','AddColumn','media_datasets.html#Dataset_Column'),
(59,'DataSet','EditColumn','media_datasets.html#Dataset_Column'),
(60,'DataSet','DeleteColumn','media_datasets.html#Dataset_Column'),
(61,'DataSet','Data','media_datasets.html#Dataset_Row'),
(62,'DataSet','Permissions','users_permissions.html'),
(63,'Fault','General','troubleshooting.html#Report_Fault'),
(65,'Stats','General','displays_metrics.html'),
(66,'Resolution','General','layouts_resolutions.html'),
(67,'Template','General','layouts_templates.html'),
(68,'Services','Register','#Registered_Applications'),
(69,'OAuth','General','api_oauth.html'),
(70,'Services','Log','api_oauth.html#oAuthLog'),
(71,'Module','Edit','media_modules.html'),
(72,'Module','General','media_modules.html'),
(73,'Campaign','General','layouts_campaigns.html'),
(74,'License','General','licence_information.html'),
(75,'DataSet','ViewColumns','media_datasets.html#Dataset_Column'),
(76,'Campaign','Permissions','users_permissions.html'),
(77,'Transition','Edit','layouts_transitions.html'),
(78,'User','SetPassword','users_administration.html#Set_Password'),
(79,'DataSet','ImportCSV','media_datasets.htmlmedia_datasets.html#Import_CSV'),
(80,'DisplayGroup','FileAssociations','displays_fileassociations.html'),
(81,'Statusdashboard','General','tour_status_dashboard.html'),
(82,'Displayprofile','General','displays_settings.html'),
(83,'DisplayProfile','Edit','displays_settings.html#edit'),
(84,'DisplayProfile','Delete','displays_settings.html#delete');
/*!40000 ALTER TABLE `help` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `layout`
--

DROP TABLE IF EXISTS `layout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `layout` (
  `layoutId` int(11) NOT NULL AUTO_INCREMENT,
  `layout` varchar(254) NOT NULL,
  `userId` int(11) NOT NULL,
  `createdDt` datetime DEFAULT NULL,
  `modifiedDt` datetime DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL,
  `retired` tinyint(4) NOT NULL DEFAULT 0,
  `duration` int(11) NOT NULL,
  `backgroundImageId` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `width` decimal(10,0) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `backgroundColor` varchar(25) DEFAULT NULL,
  `backgroundzIndex` int(11) NOT NULL DEFAULT 1,
  `schemaVersion` tinyint(4) NOT NULL DEFAULT 2,
  `statusMessage` text DEFAULT NULL,
  `parentId` int(11) DEFAULT NULL,
  `publishedStatusId` int(11) NOT NULL DEFAULT 1,
  `enableStat` int(11) DEFAULT NULL,
  `publishedDate` datetime DEFAULT NULL,
  `autoApplyTransitions` tinyint(4) NOT NULL DEFAULT 0,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`layoutId`),
  KEY `userId` (`userId`),
  KEY `backgroundImageId` (`backgroundImageId`),
  KEY `publishedStatusId` (`publishedStatusId`),
  CONSTRAINT `layout_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `layout_ibfk_2` FOREIGN KEY (`backgroundImageId`) REFERENCES `media` (`mediaId`),
  CONSTRAINT `layout_ibfk_3` FOREIGN KEY (`publishedStatusId`) REFERENCES `status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `layout`
--

LOCK TABLES `layout` WRITE;
/*!40000 ALTER TABLE `layout` DISABLE KEYS */;
INSERT INTO `layout` VALUES
(4,'SMCS - main',1,'2024-11-13 17:50:04','2024-11-13 18:14:30','Main Playlist template - 3 sections',0,90,33,2,1920,1080,'#000000',0,3,'[\"SMCSS-Signup is too large. Please ensure that none of the images in your layout are larger than 6000 pixels on their longest edge. Please check the allowed Resize Limit in Administration -> Settings\"]',NULL,1,0,NULL,1,'');
/*!40000 ALTER TABLE `layout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `layouthistory`
--

DROP TABLE IF EXISTS `layouthistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `layouthistory` (
  `layoutHistoryId` int(11) NOT NULL AUTO_INCREMENT,
  `campaignId` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  `publishedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`layoutHistoryId`),
  KEY `campaignId` (`campaignId`),
  CONSTRAINT `layouthistory_ibfk_1` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `layouthistory`
--

LOCK TABLES `layouthistory` WRITE;
/*!40000 ALTER TABLE `layouthistory` DISABLE KEYS */;
INSERT INTO `layouthistory` VALUES
(1,1,1,'2024-11-13 17:21:28'),
(2,1,2,'2024-11-13 17:39:48'),
(3,1,3,'2024-11-13 17:46:12'),
(4,1,4,'2024-11-13 18:14:30');
/*!40000 ALTER TABLE `layouthistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkcampaigndisplaygroup`
--

DROP TABLE IF EXISTS `lkcampaigndisplaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkcampaigndisplaygroup` (
  `campaignId` int(11) NOT NULL,
  `displayGroupId` int(11) NOT NULL,
  PRIMARY KEY (`campaignId`,`displayGroupId`),
  KEY `displayGroupId` (`displayGroupId`),
  CONSTRAINT `lkcampaigndisplaygroup_ibfk_1` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`),
  CONSTRAINT `lkcampaigndisplaygroup_ibfk_2` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkcampaigndisplaygroup`
--

LOCK TABLES `lkcampaigndisplaygroup` WRITE;
/*!40000 ALTER TABLE `lkcampaigndisplaygroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkcampaigndisplaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkcampaignlayout`
--

DROP TABLE IF EXISTS `lkcampaignlayout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkcampaignlayout` (
  `lkCampaignLayoutId` int(11) NOT NULL AUTO_INCREMENT,
  `campaignId` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  `displayOrder` int(11) NOT NULL,
  `dayPartId` int(11) DEFAULT NULL,
  `daysOfWeek` varchar(50) DEFAULT NULL,
  `geoFence` mediumtext DEFAULT NULL,
  PRIMARY KEY (`lkCampaignLayoutId`),
  UNIQUE KEY `campaignId` (`campaignId`,`layoutId`,`displayOrder`),
  KEY `layoutId` (`layoutId`),
  CONSTRAINT `lkcampaignlayout_ibfk_1` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`),
  CONSTRAINT `lkcampaignlayout_ibfk_2` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkcampaignlayout`
--

LOCK TABLES `lkcampaignlayout` WRITE;
/*!40000 ALTER TABLE `lkcampaignlayout` DISABLE KEYS */;
INSERT INTO `lkcampaignlayout` VALUES
(7,1,4,2,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lkcampaignlayout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkcommanddisplayprofile`
--

DROP TABLE IF EXISTS `lkcommanddisplayprofile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkcommanddisplayprofile` (
  `commandId` int(11) NOT NULL,
  `displayProfileId` int(11) NOT NULL,
  `commandString` varchar(1000) NOT NULL,
  `validationString` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`commandId`,`displayProfileId`),
  KEY `displayProfileId` (`displayProfileId`),
  CONSTRAINT `lkcommanddisplayprofile_ibfk_1` FOREIGN KEY (`commandId`) REFERENCES `command` (`commandId`),
  CONSTRAINT `lkcommanddisplayprofile_ibfk_2` FOREIGN KEY (`displayProfileId`) REFERENCES `displayprofile` (`displayProfileId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkcommanddisplayprofile`
--

LOCK TABLES `lkcommanddisplayprofile` WRITE;
/*!40000 ALTER TABLE `lkcommanddisplayprofile` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkcommanddisplayprofile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkdgdg`
--

DROP TABLE IF EXISTS `lkdgdg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkdgdg` (
  `parentId` int(11) NOT NULL,
  `childId` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  KEY `parentId` (`parentId`,`childId`,`depth`),
  KEY `childId` (`childId`,`parentId`,`depth`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkdgdg`
--

LOCK TABLES `lkdgdg` WRITE;
/*!40000 ALTER TABLE `lkdgdg` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkdgdg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkdisplaydg`
--

DROP TABLE IF EXISTS `lkdisplaydg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkdisplaydg` (
  `LkDisplayDGID` int(11) NOT NULL AUTO_INCREMENT,
  `displayGroupId` int(11) NOT NULL,
  `displayId` int(11) NOT NULL,
  PRIMARY KEY (`LkDisplayDGID`),
  UNIQUE KEY `displayGroupId` (`displayGroupId`,`displayId`),
  KEY `displayId` (`displayId`),
  CONSTRAINT `lkdisplaydg_ibfk_1` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`),
  CONSTRAINT `lkdisplaydg_ibfk_2` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkdisplaydg`
--

LOCK TABLES `lkdisplaydg` WRITE;
/*!40000 ALTER TABLE `lkdisplaydg` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkdisplaydg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lklayoutdisplaygroup`
--

DROP TABLE IF EXISTS `lklayoutdisplaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lklayoutdisplaygroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `displayGroupId` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `displayGroupId` (`displayGroupId`,`layoutId`),
  KEY `layoutId` (`layoutId`),
  CONSTRAINT `lklayoutdisplaygroup_ibfk_1` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`),
  CONSTRAINT `lklayoutdisplaygroup_ibfk_2` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lklayoutdisplaygroup`
--

LOCK TABLES `lklayoutdisplaygroup` WRITE;
/*!40000 ALTER TABLE `lklayoutdisplaygroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lklayoutdisplaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkmediadisplaygroup`
--

DROP TABLE IF EXISTS `lkmediadisplaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkmediadisplaygroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `displayGroupId` int(11) NOT NULL,
  `mediaId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `displayGroupId` (`displayGroupId`,`mediaId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `lkmediadisplaygroup_ibfk_1` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`),
  CONSTRAINT `lkmediadisplaygroup_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkmediadisplaygroup`
--

LOCK TABLES `lkmediadisplaygroup` WRITE;
/*!40000 ALTER TABLE `lkmediadisplaygroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkmediadisplaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lknotificationdg`
--

DROP TABLE IF EXISTS `lknotificationdg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lknotificationdg` (
  `lkNotificationDgId` int(11) NOT NULL AUTO_INCREMENT,
  `notificationId` int(11) NOT NULL,
  `displayGroupId` int(11) NOT NULL,
  PRIMARY KEY (`lkNotificationDgId`),
  UNIQUE KEY `notificationId` (`notificationId`,`displayGroupId`),
  CONSTRAINT `lknotificationdg_ibfk_1` FOREIGN KEY (`notificationId`) REFERENCES `notification` (`notificationId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lknotificationdg`
--

LOCK TABLES `lknotificationdg` WRITE;
/*!40000 ALTER TABLE `lknotificationdg` DISABLE KEYS */;
/*!40000 ALTER TABLE `lknotificationdg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lknotificationgroup`
--

DROP TABLE IF EXISTS `lknotificationgroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lknotificationgroup` (
  `lkNotificationGroupId` int(11) NOT NULL AUTO_INCREMENT,
  `notificationId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  PRIMARY KEY (`lkNotificationGroupId`),
  UNIQUE KEY `notificationId` (`notificationId`,`groupId`),
  KEY `groupId` (`groupId`),
  CONSTRAINT `lknotificationgroup_ibfk_1` FOREIGN KEY (`notificationId`) REFERENCES `notification` (`notificationId`),
  CONSTRAINT `lknotificationgroup_ibfk_2` FOREIGN KEY (`groupId`) REFERENCES `group` (`groupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lknotificationgroup`
--

LOCK TABLES `lknotificationgroup` WRITE;
/*!40000 ALTER TABLE `lknotificationgroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lknotificationgroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lknotificationuser`
--

DROP TABLE IF EXISTS `lknotificationuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lknotificationuser` (
  `lkNotificationUserId` int(11) NOT NULL AUTO_INCREMENT,
  `notificationId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `read` tinyint(4) NOT NULL,
  `readDt` int(11) NOT NULL,
  `emailDt` int(11) NOT NULL,
  PRIMARY KEY (`lkNotificationUserId`),
  UNIQUE KEY `notificationId` (`notificationId`,`userId`),
  KEY `userId` (`userId`),
  CONSTRAINT `lknotificationuser_ibfk_1` FOREIGN KEY (`notificationId`) REFERENCES `notification` (`notificationId`),
  CONSTRAINT `lknotificationuser_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lknotificationuser`
--

LOCK TABLES `lknotificationuser` WRITE;
/*!40000 ALTER TABLE `lknotificationuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `lknotificationuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkplaylistplaylist`
--

DROP TABLE IF EXISTS `lkplaylistplaylist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkplaylistplaylist` (
  `parentId` int(11) NOT NULL,
  `childId` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  PRIMARY KEY (`parentId`,`childId`,`depth`),
  UNIQUE KEY `childId` (`childId`,`parentId`,`depth`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkplaylistplaylist`
--

LOCK TABLES `lkplaylistplaylist` WRITE;
/*!40000 ALTER TABLE `lkplaylistplaylist` DISABLE KEYS */;
INSERT INTO `lkplaylistplaylist` VALUES
(7,7,0),
(11,11,0),
(12,12,0),
(13,13,0);
/*!40000 ALTER TABLE `lkplaylistplaylist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkscheduledisplaygroup`
--

DROP TABLE IF EXISTS `lkscheduledisplaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkscheduledisplaygroup` (
  `eventId` int(11) NOT NULL,
  `displayGroupId` int(11) NOT NULL,
  PRIMARY KEY (`eventId`,`displayGroupId`),
  KEY `displayGroupId` (`displayGroupId`),
  CONSTRAINT `lkscheduledisplaygroup_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`),
  CONSTRAINT `lkscheduledisplaygroup_ibfk_2` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkscheduledisplaygroup`
--

LOCK TABLES `lkscheduledisplaygroup` WRITE;
/*!40000 ALTER TABLE `lkscheduledisplaygroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkscheduledisplaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lktagcampaign`
--

DROP TABLE IF EXISTS `lktagcampaign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lktagcampaign` (
  `lkTagCampaignId` int(11) NOT NULL AUTO_INCREMENT,
  `tagId` int(11) NOT NULL,
  `campaignId` int(11) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`lkTagCampaignId`),
  UNIQUE KEY `tagId` (`tagId`,`campaignId`),
  KEY `campaignId` (`campaignId`),
  CONSTRAINT `lktagcampaign_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  CONSTRAINT `lktagcampaign_ibfk_2` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lktagcampaign`
--

LOCK TABLES `lktagcampaign` WRITE;
/*!40000 ALTER TABLE `lktagcampaign` DISABLE KEYS */;
/*!40000 ALTER TABLE `lktagcampaign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lktagdisplaygroup`
--

DROP TABLE IF EXISTS `lktagdisplaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lktagdisplaygroup` (
  `lkTagDisplayGroupId` int(11) NOT NULL AUTO_INCREMENT,
  `tagId` int(11) NOT NULL,
  `displayGroupId` int(11) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`lkTagDisplayGroupId`),
  UNIQUE KEY `tagId` (`tagId`,`displayGroupId`),
  KEY `displayGroupId` (`displayGroupId`),
  CONSTRAINT `lktagdisplaygroup_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  CONSTRAINT `lktagdisplaygroup_ibfk_2` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lktagdisplaygroup`
--

LOCK TABLES `lktagdisplaygroup` WRITE;
/*!40000 ALTER TABLE `lktagdisplaygroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lktagdisplaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lktaglayout`
--

DROP TABLE IF EXISTS `lktaglayout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lktaglayout` (
  `lkTagLayoutId` int(11) NOT NULL AUTO_INCREMENT,
  `tagId` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`lkTagLayoutId`),
  UNIQUE KEY `tagId` (`tagId`,`layoutId`),
  KEY `layoutId` (`layoutId`),
  CONSTRAINT `lktaglayout_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  CONSTRAINT `lktaglayout_ibfk_2` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lktaglayout`
--

LOCK TABLES `lktaglayout` WRITE;
/*!40000 ALTER TABLE `lktaglayout` DISABLE KEYS */;
/*!40000 ALTER TABLE `lktaglayout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lktagmedia`
--

DROP TABLE IF EXISTS `lktagmedia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lktagmedia` (
  `lkTagMediaId` int(11) NOT NULL AUTO_INCREMENT,
  `tagId` int(11) NOT NULL,
  `mediaId` int(11) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`lkTagMediaId`),
  UNIQUE KEY `tagId` (`tagId`,`mediaId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `lktagmedia_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  CONSTRAINT `lktagmedia_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lktagmedia`
--

LOCK TABLES `lktagmedia` WRITE;
/*!40000 ALTER TABLE `lktagmedia` DISABLE KEYS */;
/*!40000 ALTER TABLE `lktagmedia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lktagplaylist`
--

DROP TABLE IF EXISTS `lktagplaylist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lktagplaylist` (
  `lkTagPlaylistId` int(11) NOT NULL AUTO_INCREMENT,
  `tagId` int(11) NOT NULL,
  `playlistId` int(11) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`lkTagPlaylistId`),
  UNIQUE KEY `tagId` (`tagId`,`playlistId`),
  KEY `lktagplaylist_ibfk_2` (`playlistId`),
  CONSTRAINT `lktagplaylist_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  CONSTRAINT `lktagplaylist_ibfk_2` FOREIGN KEY (`playlistId`) REFERENCES `playlist` (`playlistId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lktagplaylist`
--

LOCK TABLES `lktagplaylist` WRITE;
/*!40000 ALTER TABLE `lktagplaylist` DISABLE KEYS */;
/*!40000 ALTER TABLE `lktagplaylist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkusergroup`
--

DROP TABLE IF EXISTS `lkusergroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkusergroup` (
  `lkUserGroupID` int(11) NOT NULL AUTO_INCREMENT,
  `groupId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`lkUserGroupID`),
  UNIQUE KEY `groupId` (`groupId`,`userId`),
  KEY `userId` (`userId`),
  CONSTRAINT `lkusergroup_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `group` (`groupId`),
  CONSTRAINT `lkusergroup_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkusergroup`
--

LOCK TABLES `lkusergroup` WRITE;
/*!40000 ALTER TABLE `lkusergroup` DISABLE KEYS */;
INSERT INTO `lkusergroup` VALUES
(1,3,1);
/*!40000 ALTER TABLE `lkusergroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkwidgetaudio`
--

DROP TABLE IF EXISTS `lkwidgetaudio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkwidgetaudio` (
  `widgetId` int(11) NOT NULL,
  `mediaId` int(11) NOT NULL,
  `volume` tinyint(4) NOT NULL,
  `loop` tinyint(4) NOT NULL,
  PRIMARY KEY (`widgetId`,`mediaId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `lkwidgetaudio_ibfk_1` FOREIGN KEY (`widgetId`) REFERENCES `widget` (`widgetId`),
  CONSTRAINT `lkwidgetaudio_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkwidgetaudio`
--

LOCK TABLES `lkwidgetaudio` WRITE;
/*!40000 ALTER TABLE `lkwidgetaudio` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkwidgetaudio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkwidgetmedia`
--

DROP TABLE IF EXISTS `lkwidgetmedia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkwidgetmedia` (
  `widgetId` int(11) NOT NULL,
  `mediaId` int(11) NOT NULL,
  PRIMARY KEY (`widgetId`,`mediaId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `lkwidgetmedia_ibfk_1` FOREIGN KEY (`widgetId`) REFERENCES `widget` (`widgetId`),
  CONSTRAINT `lkwidgetmedia_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkwidgetmedia`
--

LOCK TABLES `lkwidgetmedia` WRITE;
/*!40000 ALTER TABLE `lkwidgetmedia` DISABLE KEYS */;
INSERT INTO `lkwidgetmedia` VALUES
(1,24),
(10,24),
(11,25),
(14,27),
(15,31),
(16,26),
(17,29),
(18,32);
/*!40000 ALTER TABLE `lkwidgetmedia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `logId` int(11) NOT NULL AUTO_INCREMENT,
  `runNo` varchar(10) NOT NULL,
  `logDate` datetime DEFAULT NULL,
  `channel` varchar(20) NOT NULL,
  `type` varchar(254) NOT NULL,
  `page` varchar(50) NOT NULL,
  `function` varchar(50) DEFAULT NULL,
  `message` longtext NOT NULL,
  `userId` int(11) NOT NULL DEFAULT 0,
  `displayId` int(11) DEFAULT NULL,
  PRIMARY KEY (`logId`),
  KEY `logDate` (`logDate`)
) ENGINE=InnoDB AUTO_INCREMENT=1296 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES
(1,'17561f6','2024-11-13 21:04:02','CONSOLE','ERROR','','GET','Unable to import layout: default-layout.zip. E = Cannot save media file from ZIP file',0,0),
(2,'17561f6','2024-11-13 21:04:03','CONSOLE','ERROR','','GET','Library not writable Exception Type: Xibo\\Support\\Exception\\ConfigurationException',0,0),
(3,'e0d98c4','2024-11-13 21:05:02','CONSOLE','ERROR','','GET','Library not writable Exception Type: Xibo\\Support\\Exception\\ConfigurationException',0,0),
(4,'a71fd3a','2024-11-13 17:05:13','WEB','ERROR','/login.rsp','GET','Not found.',0,0),
(5,'a5d2dd9','2024-11-13 17:08:34','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(6,'4ef9f7a','2024-11-13 17:08:51','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(7,'26ed92e','2024-11-13 17:08:56','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(8,'5d56087','2024-11-13 17:21:30','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(9,'ac77e95','2024-11-13 17:21:30','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(10,'30b2517','2024-11-13 17:21:30','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(11,'97d2aaa','2024-11-13 17:23:07','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(12,'444971c','2024-11-13 17:25:58','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(13,'626d212','2024-11-13 17:26:30','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(14,'b946e67','2024-11-13 17:27:08','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(15,'c476b20','2024-11-13 17:33:27','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(16,'847a4d5','2024-11-13 17:33:28','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(17,'bdd2842','2024-11-13 17:33:43','WEB','ERROR','/playlist/widget/resource/5/2','GET','Unable to get feed: cURL error 3: URL rejected: Malformed input to a URL function (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)',0,0),
(18,'5e9753a','2024-11-13 17:36:35','WEB','ERROR','/playlist/widget/resource/5/2','GET','Unable to get feed: Client error: `GET https://www.wired.com/feed/category/tech/latest/rss` resulted in a `404 Not Found` response:\n{\"message\":\"Not Found (tsugu-service-wired-content.gp-prod-na-0.conde.digital/identifiers/lookup?itemFormat=embedded&uri (truncated...)\n',0,0),
(19,'816c264','2024-11-13 17:36:36','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(20,'6f86e22','2024-11-13 17:36:36','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(21,'c57f35e','2024-11-13 17:36:36','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(22,'a3dc73c','2024-11-13 17:36:36','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(23,'987fc80','2024-11-13 17:36:36','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(24,'dec8d0c','2024-11-13 17:36:36','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(25,'958244c','2024-11-13 17:36:36','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(26,'94451d8','2024-11-13 17:36:36','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(27,'44ed0dd','2024-11-13 17:36:36','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(28,'cf7edca','2024-11-13 17:36:37','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(29,'efedcd9','2024-11-13 17:36:37','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(30,'e14be86','2024-11-13 17:37:02','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(31,'807965b','2024-11-13 17:37:02','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(32,'cceb9dc','2024-11-13 17:37:02','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(33,'c031594','2024-11-13 17:37:02','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(34,'67f539f','2024-11-13 17:37:02','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(35,'50ab9ff','2024-11-13 17:37:02','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(36,'9d835c2','2024-11-13 17:37:02','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(37,'4d1b368','2024-11-13 17:37:02','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(38,'1dddaaa','2024-11-13 17:37:02','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(39,'e4002bb','2024-11-13 17:37:03','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(40,'80757e6','2024-11-13 17:37:03','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(41,'4696ee9','2024-11-13 17:37:04','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(42,'37d56ba','2024-11-13 17:37:04','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(43,'d479bb7','2024-11-13 17:37:04','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(44,'bc096f9','2024-11-13 17:37:04','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(45,'916e8a2','2024-11-13 17:37:04','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(46,'028b889','2024-11-13 17:37:04','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(47,'9d2cdaf','2024-11-13 17:37:04','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(48,'1045de5','2024-11-13 17:37:04','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(49,'82852e7','2024-11-13 17:37:05','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(50,'b49b603','2024-11-13 17:37:06','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(51,'807612e','2024-11-13 17:37:06','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(52,'e26fb5d','2024-11-13 17:37:07','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(53,'9150d0d','2024-11-13 17:37:07','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(54,'1bae315','2024-11-13 17:37:07','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(55,'69f89f4','2024-11-13 17:37:07','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(56,'aba8faf','2024-11-13 17:37:07','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(57,'a0de404','2024-11-13 17:37:07','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(58,'c9be688','2024-11-13 17:37:07','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(59,'b49c36b','2024-11-13 17:37:07','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(60,'12276d8','2024-11-13 17:37:08','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(61,'02f975d','2024-11-13 17:39:24','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(62,'dae1d6e','2024-11-13 17:39:24','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(63,'d9f9b17','2024-11-13 17:39:24','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(64,'53330ad','2024-11-13 17:39:24','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(65,'7336bd3','2024-11-13 17:39:24','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(66,'5e2c003','2024-11-13 17:39:24','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(67,'5c6099a','2024-11-13 17:39:24','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(68,'a36157b','2024-11-13 17:39:25','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(69,'0ef5ce2','2024-11-13 17:39:25','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(70,'48f97e2','2024-11-13 17:39:25','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(71,'d203bdd','2024-11-13 17:39:34','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(72,'1a0efd0','2024-11-13 17:39:34','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(73,'d78eb99','2024-11-13 17:39:34','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(74,'ea74821','2024-11-13 17:39:34','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(75,'b5e6b19','2024-11-13 17:39:34','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(76,'624d3cb','2024-11-13 17:39:34','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(77,'0d3a99a','2024-11-13 17:39:34','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(78,'9e6468f','2024-11-13 17:39:34','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(79,'1e4086e','2024-11-13 17:39:34','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(80,'3ceaad6','2024-11-13 17:39:47','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(81,'ee932f4','2024-11-13 17:39:47','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(82,'8ffb12e','2024-11-13 17:39:47','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(83,'a2f8beb','2024-11-13 17:39:47','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(84,'359e652','2024-11-13 17:39:47','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(85,'874b862','2024-11-13 17:39:47','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(86,'b3d0d4b','2024-11-13 17:39:47','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(87,'942d4d5','2024-11-13 17:39:47','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(88,'38d22cf','2024-11-13 17:39:47','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(89,'ea8a065','2024-11-13 17:39:48','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(90,'1d2b58d','2024-11-13 17:39:50','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(91,'0e36395','2024-11-13 17:39:50','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(92,'8a49af5','2024-11-13 17:39:51','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(93,'f9fba1c','2024-11-13 17:39:51','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(94,'e389a0a','2024-11-13 17:39:51','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(95,'2c52b17','2024-11-13 17:39:51','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(96,'1bf3d54','2024-11-13 17:39:51','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(97,'cb4cc80','2024-11-13 17:39:51','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(98,'c522b44','2024-11-13 17:39:51','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(99,'c335fd6','2024-11-13 17:39:51','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(100,'3e5d79c','2024-11-13 17:39:51','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(101,'ef9abd3','2024-11-13 17:39:52','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(102,'4a1b6ff','2024-11-13 17:39:52','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(103,'5107f95','2024-11-13 17:40:43','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(104,'a5bce21','2024-11-13 17:40:43','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(105,'efde5ef','2024-11-13 17:40:44','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(106,'39a9dce','2024-11-13 17:40:44','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(107,'19059ba','2024-11-13 17:40:44','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(108,'597c214','2024-11-13 17:40:44','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(109,'6647712','2024-11-13 17:40:44','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(110,'607eeda','2024-11-13 17:40:44','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(111,'c00dcd5','2024-11-13 17:40:44','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(112,'b1b2df1','2024-11-13 17:40:44','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(113,'a59764c','2024-11-13 17:40:44','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(114,'ba03e23','2024-11-13 17:40:45','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(115,'3593d2d','2024-11-13 17:40:49','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(116,'c465864','2024-11-13 17:40:49','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(117,'3a1e23f','2024-11-13 17:40:49','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(118,'4a4cc7a','2024-11-13 17:40:49','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(119,'b7bc298','2024-11-13 17:40:49','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(120,'c1fea6e','2024-11-13 17:40:49','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(121,'42e98c5','2024-11-13 17:40:50','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(122,'37972a5','2024-11-13 17:40:55','WEB','ERROR','/playlist/widget/resource/8/9','GET','Unable to get feed: Client error: `GET https://www.wired.com/feed/category/tech/latest/rss` resulted in a `404 Not Found` response:\n{\"message\":\"Not Found (tsugu-service-wired-content.gp-prod-na-0.conde.digital/identifiers/lookup?itemFormat=embedded&uri (truncated...)\n',0,0),
(123,'bd619d3','2024-11-13 17:40:55','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(124,'1d97a28','2024-11-13 17:40:55','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(125,'ba5e1f7','2024-11-13 17:40:55','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(126,'c5ff312','2024-11-13 17:40:55','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(127,'9284801','2024-11-13 17:40:55','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(128,'26f745e','2024-11-13 17:40:55','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(129,'ca948e9','2024-11-13 17:40:55','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(130,'73cbd79','2024-11-13 17:40:55','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(131,'aa25dce','2024-11-13 17:40:56','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(132,'1212115','2024-11-13 17:40:56','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(133,'ba8558c','2024-11-13 17:40:56','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(134,'5db70d2','2024-11-13 17:40:59','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(135,'c3e3f3e','2024-11-13 17:40:59','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(136,'b9993cb','2024-11-13 17:40:59','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(137,'f1e26a6','2024-11-13 17:40:59','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(138,'f74d88a','2024-11-13 17:40:59','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(139,'dd5e446','2024-11-13 17:40:59','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(140,'0063022','2024-11-13 17:40:59','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(141,'d8cd91d','2024-11-13 17:40:59','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(142,'3153712','2024-11-13 17:41:00','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(143,'0192d8c','2024-11-13 17:41:00','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(144,'42e5a62','2024-11-13 17:44:10','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(145,'668766a','2024-11-13 17:44:10','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(146,'1655817','2024-11-13 17:44:10','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(147,'c6763d6','2024-11-13 17:44:10','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(148,'9f8815b','2024-11-13 17:44:10','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(149,'bdfae5d','2024-11-13 17:44:10','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(150,'1ba92a4','2024-11-13 17:44:10','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(151,'0d58aa3','2024-11-13 17:44:10','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(152,'0258c7d','2024-11-13 17:44:11','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(153,'403725d','2024-11-13 17:44:11','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(154,'081c14c','2024-11-13 17:44:17','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(155,'2b88d1e','2024-11-13 17:44:17','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(156,'e535a7f','2024-11-13 17:44:17','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(157,'6900687','2024-11-13 17:44:17','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(158,'c5a9289','2024-11-13 17:44:17','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(159,'1c23c21','2024-11-13 17:44:17','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(160,'384b39d','2024-11-13 17:44:17','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(161,'e91b429','2024-11-13 17:44:17','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(162,'53aa5be','2024-11-13 17:44:17','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(163,'38439f6','2024-11-13 17:44:18','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(164,'eb31c2d','2024-11-13 17:44:18','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(165,'1a07166','2024-11-13 17:44:32','WEB','ERROR','/playlist/widget/resource/8/9','GET','Unable to get feed: Client error: `GET https://www.wired.com/feed/category/tech/latest/rss` resulted in a `404 Not Found` response:\n{\"message\":\"Not Found (tsugu-service-wired-content.gp-prod-na-0.conde.digital/identifiers/lookup?itemFormat=embedded&uri (truncated...)\n',0,0),
(166,'c67f004','2024-11-13 17:44:32','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(167,'ddf8d59','2024-11-13 17:44:32','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(168,'8ff470f','2024-11-13 17:44:32','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(169,'697a3bf','2024-11-13 17:44:32','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(170,'8c67855','2024-11-13 17:44:32','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(171,'910094f','2024-11-13 17:44:32','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(172,'6f1f541','2024-11-13 17:44:32','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(173,'60d8e30','2024-11-13 17:44:32','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(174,'ffdc24d','2024-11-13 17:44:35','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(175,'d2dd115','2024-11-13 17:44:35','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(176,'b5037ad','2024-11-13 17:44:35','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(177,'d3a7435','2024-11-13 17:44:35','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(178,'47d7e5d','2024-11-13 17:44:35','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(179,'8e153c5','2024-11-13 17:44:35','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(180,'34c5819','2024-11-13 17:44:35','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(181,'48ce02f','2024-11-13 17:44:35','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(182,'6c044cc','2024-11-13 17:44:36','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(183,'79ab63f','2024-11-13 17:44:36','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(184,'5bb8055','2024-11-13 17:44:48','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(185,'7ac9761','2024-11-13 17:44:48','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(186,'55eac22','2024-11-13 17:44:48','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(187,'e194e4d','2024-11-13 17:44:48','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(188,'0c38826','2024-11-13 17:44:48','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(189,'548b75f','2024-11-13 17:44:48','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(190,'bad766e','2024-11-13 17:44:48','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(191,'dc7e3e1','2024-11-13 17:44:48','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(192,'e32308f','2024-11-13 17:44:49','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(193,'36b1556','2024-11-13 17:45:12','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(194,'7c90d16','2024-11-13 17:45:12','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(195,'10c41e1','2024-11-13 17:45:12','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(196,'a7a0016','2024-11-13 17:45:12','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(197,'1062943','2024-11-13 17:45:12','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(198,'c34f35a','2024-11-13 17:45:12','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(199,'b50988f','2024-11-13 17:45:12','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(200,'16cd84d','2024-11-13 17:45:12','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(201,'6d4830b','2024-11-13 17:45:13','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(202,'c2b2151','2024-11-13 17:45:13','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(203,'ca55c84','2024-11-13 17:45:13','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(204,'71e35f3','2024-11-13 17:45:20','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(205,'c2eea04','2024-11-13 17:45:20','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(206,'90e22c6','2024-11-13 17:45:20','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(207,'c92b3a0','2024-11-13 17:45:20','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(208,'f1fc095','2024-11-13 17:45:20','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(209,'bfcad4e','2024-11-13 17:45:20','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(210,'b3bdce5','2024-11-13 17:45:20','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(211,'6730b75','2024-11-13 17:45:20','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(212,'fccfbf5','2024-11-13 17:45:20','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(213,'c1cb774','2024-11-13 17:45:21','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(214,'ca435ff','2024-11-13 17:45:24','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(215,'8fe619b','2024-11-13 17:45:24','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(216,'ce6e002','2024-11-13 17:45:24','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(217,'4f6405c','2024-11-13 17:45:24','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(218,'96a769f','2024-11-13 17:45:24','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(219,'ca98f0f','2024-11-13 17:45:24','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(220,'66a1c44','2024-11-13 17:45:24','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(221,'e7421e8','2024-11-13 17:45:25','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(222,'5f20aef','2024-11-13 17:45:58','WEB','ERROR','/playlist/widget/resource/8/9','GET','Unable to get feed: Client error: `GET https://www.wired.com/feed/category/tech/latest/rss` resulted in a `404 Not Found` response:\n{\"message\":\"Not Found (tsugu-service-wired-content.gp-prod-na-0.conde.digital/identifiers/lookup?itemFormat=embedded&uri (truncated...)\n',0,0),
(223,'877a565','2024-11-13 17:45:58','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(224,'48fabe8','2024-11-13 17:45:58','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(225,'0ab3f0b','2024-11-13 17:45:58','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(226,'acbd77c','2024-11-13 17:45:58','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(227,'d1c0f34','2024-11-13 17:45:58','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(228,'83637b7','2024-11-13 17:45:58','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(229,'d142db7','2024-11-13 17:45:59','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(230,'3f55efa','2024-11-13 17:45:59','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(231,'35d26bf','2024-11-13 17:45:59','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(232,'599a898','2024-11-13 17:45:59','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(233,'8a2f6f0','2024-11-13 17:45:59','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(234,'fc60ea2','2024-11-13 17:46:10','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(235,'3244b0b','2024-11-13 17:46:10','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(236,'a1743c0','2024-11-13 17:46:10','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(237,'61aa4fa','2024-11-13 17:46:10','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(238,'fe7cf56','2024-11-13 17:46:11','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(239,'d8f2544','2024-11-13 17:46:11','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(240,'07d6310','2024-11-13 17:46:11','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(241,'9b5071e','2024-11-13 17:46:11','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(242,'6bb17c3','2024-11-13 17:46:11','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(243,'a8f9209','2024-11-13 17:46:11','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(244,'646f7c5','2024-11-13 17:46:11','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(245,'f2eb06f','2024-11-13 17:46:14','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(246,'d0dbd78','2024-11-13 17:46:14','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(247,'ccf817e','2024-11-13 17:46:15','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(248,'3e1df57','2024-11-13 17:46:15','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(249,'fcb6c37','2024-11-13 17:46:15','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(250,'998fa7b','2024-11-13 17:46:15','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(251,'9d9da82','2024-11-13 17:46:15','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(252,'81446e5','2024-11-13 17:46:15','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(253,'76aa57c','2024-11-13 17:46:24','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(254,'0e082ed','2024-11-13 17:46:24','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(255,'5d0fe77','2024-11-13 17:46:24','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(256,'90b5df7','2024-11-13 17:46:24','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(257,'bf4daf1','2024-11-13 17:46:24','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(258,'ad1856a','2024-11-13 17:46:24','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(259,'40aa208','2024-11-13 17:46:24','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(260,'bd8e2d1','2024-11-13 17:46:24','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(261,'91df370','2024-11-13 17:46:24','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(262,'41d8244','2024-11-13 17:46:25','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(263,'aab13f5','2024-11-13 17:46:25','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(264,'a6be928','2024-11-13 17:46:25','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(265,'8d30f6f','2024-11-13 17:46:25','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(266,'8240355','2024-11-13 17:46:26','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(267,'c3858d5','2024-11-13 17:46:26','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(268,'c046c02','2024-11-13 17:46:26','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(269,'2b5c4ce','2024-11-13 17:46:26','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(270,'06802bb','2024-11-13 17:46:26','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(271,'acf9ac9','2024-11-13 17:46:26','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(272,'a4e696c','2024-11-13 17:46:26','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(273,'5e46e0e','2024-11-13 17:46:26','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(274,'de7912b','2024-11-13 17:50:02','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(275,'4626b7c','2024-11-13 17:50:02','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(276,'c86506d','2024-11-13 17:50:04','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(277,'7cc7a48','2024-11-13 17:50:04','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(278,'c940208','2024-11-13 17:50:04','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(279,'2c7aaed','2024-11-13 17:50:04','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(280,'7a482da','2024-11-13 17:50:04','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(281,'bbe02fa','2024-11-13 17:50:04','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(282,'bdcb2b1','2024-11-13 17:50:05','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(283,'847054c','2024-11-13 17:50:06','WEB','ERROR','/playlist/widget/resource/11/13','GET','Unable to get feed: Client error: `GET https://www.wired.com/feed/category/tech/latest/rss` resulted in a `404 Not Found` response:\n{\"message\":\"Not Found (tsugu-service-wired-content.gp-prod-na-0.conde.digital/identifiers/lookup?itemFormat=embedded&uri (truncated...)\n',0,0),
(284,'3b1ff25','2024-11-13 17:50:14','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(285,'cf2d754','2024-11-13 17:50:14','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(286,'135bd8a','2024-11-13 17:50:14','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(287,'9d45cc0','2024-11-13 17:50:14','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(288,'be0e544','2024-11-13 17:50:14','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(289,'20c1476','2024-11-13 17:50:14','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(290,'9d861c1','2024-11-13 17:50:14','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(291,'50a0320','2024-11-13 17:50:15','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(292,'95f16dc','2024-11-13 17:50:15','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(293,'9967d00','2024-11-13 17:50:15','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(294,'32dda37','2024-11-13 17:50:58','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(295,'3b50e5a','2024-11-13 17:50:58','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(296,'a37114f','2024-11-13 17:50:59','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(297,'ee13214','2024-11-13 17:50:59','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(298,'145ce59','2024-11-13 17:50:59','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(299,'e8e61e2','2024-11-13 17:50:59','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(300,'24b8c0b','2024-11-13 17:50:59','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(301,'38bd6ea','2024-11-13 17:51:22','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(302,'ccbb1c5','2024-11-13 17:51:22','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(303,'bb8faa5','2024-11-13 17:51:22','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(304,'a104af5','2024-11-13 17:51:22','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(305,'2afc00d','2024-11-13 17:51:22','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(306,'f1aba42','2024-11-13 17:51:22','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(307,'54b4af8','2024-11-13 17:51:22','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(308,'bf274d8','2024-11-13 17:51:22','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(309,'9ac98ba','2024-11-13 17:51:22','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(310,'0418764','2024-11-13 17:51:22','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(311,'9561e3a','2024-11-13 17:51:23','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(312,'4e76eb9','2024-11-13 17:51:48','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(313,'e7ee545','2024-11-13 17:51:48','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(314,'e83d54a','2024-11-13 17:51:48','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(315,'0fc09a1','2024-11-13 17:51:48','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(316,'017d626','2024-11-13 17:51:48','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(317,'80c162c','2024-11-13 17:51:48','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(318,'ad7cac4','2024-11-13 17:51:48','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(319,'1ee65fc','2024-11-13 17:51:48','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(320,'5ec7613','2024-11-13 17:51:49','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(321,'e1329a1','2024-11-13 17:51:49','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(322,'b40625e','2024-11-13 17:51:49','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(323,'cf25fd5','2024-11-13 17:51:49','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(324,'b522d25','2024-11-13 17:51:49','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(325,'69541b2','2024-11-13 17:51:50','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(326,'246cce8','2024-11-13 17:51:50','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(327,'33fd501','2024-11-13 17:51:50','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(328,'c4935eb','2024-11-13 17:51:50','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(329,'37b29be','2024-11-13 17:51:50','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(330,'f184418','2024-11-13 17:51:50','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(331,'193316f','2024-11-13 17:51:50','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(332,'f0385c4','2024-11-13 17:51:50','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(333,'44afdf3','2024-11-13 17:53:22','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(334,'0db7aac','2024-11-13 17:53:22','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(335,'3d7d1f9','2024-11-13 17:53:22','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(336,'3a44463','2024-11-13 17:53:22','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(337,'60744a3','2024-11-13 17:53:22','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(338,'ec19fec','2024-11-13 17:53:22','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(339,'8744296','2024-11-13 17:53:22','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(340,'5f54a8b','2024-11-13 17:53:22','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(341,'69bbf45','2024-11-13 17:53:22','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(342,'6c0ad92','2024-11-13 17:53:22','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(343,'55ddb02','2024-11-13 17:53:23','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(344,'abf74df','2024-11-13 17:53:24','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(345,'5a08747','2024-11-13 17:53:24','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(346,'92534a6','2024-11-13 17:53:24','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(347,'54c71f9','2024-11-13 17:53:24','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(348,'4a3eec5','2024-11-13 17:53:24','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(349,'5eecef3','2024-11-13 17:53:24','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(350,'c50d8fa','2024-11-13 17:53:25','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(351,'52a442f','2024-11-13 17:53:25','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(352,'83a27e2','2024-11-13 17:53:25','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(353,'70c44a3','2024-11-13 17:53:25','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(354,'f402e7c','2024-11-13 17:53:25','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(355,'05315e2','2024-11-13 17:53:25','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(356,'3eee6f0','2024-11-13 17:53:25','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(357,'4256213','2024-11-13 17:53:26','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(358,'31abc75','2024-11-13 17:53:26','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(359,'64cae95','2024-11-13 17:53:26','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(360,'a8bc262','2024-11-13 17:53:30','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(361,'aa79ca9','2024-11-13 17:53:30','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(362,'89b3db4','2024-11-13 17:53:30','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(363,'cf87218','2024-11-13 17:53:31','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(364,'f1ae02f','2024-11-13 17:53:31','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(365,'3d4d15f','2024-11-13 17:53:31','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(366,'d2036d0','2024-11-13 17:53:31','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(367,'8c9a3f1','2024-11-13 17:53:31','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(368,'a400a01','2024-11-13 17:53:31','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(369,'58abbb8','2024-11-13 17:53:31','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(370,'a4fe31e','2024-11-13 17:53:31','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(371,'64f69d6','2024-11-13 17:53:31','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(372,'63d4e24','2024-11-13 17:53:31','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(373,'c3f3152','2024-11-13 17:53:32','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(374,'5f2354f','2024-11-13 17:53:32','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(375,'2826672','2024-11-13 17:53:32','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(376,'7e183a1','2024-11-13 17:53:32','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(377,'7d0c622','2024-11-13 17:54:12','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(378,'f30873d','2024-11-13 17:54:12','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(379,'f598fae','2024-11-13 17:54:12','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(380,'ea16165','2024-11-13 17:54:12','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(381,'58a0942','2024-11-13 17:54:12','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(382,'ccef9f2','2024-11-13 17:54:12','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(383,'4ef039c','2024-11-13 17:54:12','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(384,'552fbec','2024-11-13 17:54:12','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(385,'b0d0616','2024-11-13 17:54:12','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(386,'e4ca16b','2024-11-13 17:54:12','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(387,'c3e2a08','2024-11-13 17:54:13','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(388,'aac1a70','2024-11-13 17:54:26','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(389,'02c733c','2024-11-13 17:54:26','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(390,'0148e6d','2024-11-13 17:54:26','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(391,'251fb95','2024-11-13 17:54:26','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(392,'45e540a','2024-11-13 17:54:26','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(393,'d9f1405','2024-11-13 17:54:26','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(394,'70ca409','2024-11-13 17:54:26','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(395,'e3ebf7a','2024-11-13 17:54:27','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(396,'47d3613','2024-11-13 17:54:27','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(397,'663574f','2024-11-13 17:54:27','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(398,'72e7eea','2024-11-13 17:54:29','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(399,'7d08fb2','2024-11-13 17:54:29','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(400,'afb1b3b','2024-11-13 17:54:29','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(401,'a7b59b9','2024-11-13 17:54:29','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(402,'cbda790','2024-11-13 17:54:29','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(403,'e8218c6','2024-11-13 17:54:29','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(404,'c24387d','2024-11-13 17:54:29','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(405,'24bb933','2024-11-13 17:54:29','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(406,'e79e5a4','2024-11-13 17:54:29','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(407,'6898d90','2024-11-13 17:54:30','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(408,'c43e5ea','2024-11-13 17:55:23','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(409,'6891309','2024-11-13 17:55:23','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(410,'e19f2b2','2024-11-13 17:55:23','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(411,'803a2ef','2024-11-13 17:55:23','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(412,'7ca9f4e','2024-11-13 17:55:24','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(413,'bc8d82f','2024-11-13 17:55:24','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(414,'7b83e72','2024-11-13 17:55:24','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(415,'9f0ee81','2024-11-13 17:55:24','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(416,'71af384','2024-11-13 17:55:24','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(417,'7ccdfeb','2024-11-13 17:55:24','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(418,'94146c6','2024-11-13 17:55:25','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(419,'270f06d','2024-11-13 17:55:33','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(420,'a5c5dbb','2024-11-13 17:55:33','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(421,'6464f2c','2024-11-13 17:55:34','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(422,'eb228f2','2024-11-13 17:55:34','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(423,'db2a6cd','2024-11-13 17:55:34','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(424,'0eaf3ce','2024-11-13 17:55:34','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(425,'bdb8eba','2024-11-13 17:55:34','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(426,'e792912','2024-11-13 17:55:34','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(427,'cdfbc2e','2024-11-13 17:55:34','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(428,'45d8c5d','2024-11-13 17:55:34','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(429,'0106b1a','2024-11-13 17:55:46','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(430,'cac4127','2024-11-13 17:55:46','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(431,'638a777','2024-11-13 17:55:46','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(432,'3db5a4f','2024-11-13 17:55:46','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(433,'2e626ae','2024-11-13 17:55:46','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(434,'0ac5bc2','2024-11-13 17:55:46','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(435,'eb25810','2024-11-13 17:55:46','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(436,'4ffc5e8','2024-11-13 17:55:46','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(437,'67f2f25','2024-11-13 17:55:46','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(438,'a61181c','2024-11-13 17:55:47','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(439,'d572908','2024-11-13 17:55:47','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(440,'207b15d','2024-11-13 17:56:30','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(441,'11a1385','2024-11-13 17:56:30','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(442,'2839a88','2024-11-13 17:56:30','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(443,'435e8d8','2024-11-13 17:56:30','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(444,'a76032e','2024-11-13 17:56:30','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(445,'36e99f2','2024-11-13 17:56:30','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(446,'5081594','2024-11-13 17:56:30','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(447,'4b35b30','2024-11-13 17:56:30','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(448,'1d8178c','2024-11-13 17:56:31','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(449,'60562b8','2024-11-13 17:56:31','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(450,'a634fdd','2024-11-13 17:56:31','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(451,'1a365f3','2024-11-13 17:57:02','WEB','ERROR','/playlist/widget/resource/11/13','GET','Unable to get feed: Client error: `GET https://www.wired.com/feed/category/tech/latest/rss` resulted in a `404 Not Found` response:\n{\"message\":\"Not Found (tsugu-service-wired-content.gp-prod-na-0.conde.digital/identifiers/lookup?itemFormat=embedded&uri (truncated...)\n',0,0),
(452,'67fe04d','2024-11-13 17:57:03','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(453,'c7e0bbc','2024-11-13 17:57:03','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(454,'2bce0ea','2024-11-13 17:57:03','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(455,'905c113','2024-11-13 17:57:03','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(456,'1817539','2024-11-13 17:57:03','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(457,'944b9e3','2024-11-13 17:57:03','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(458,'93c19cb','2024-11-13 17:57:03','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(459,'9211d1f','2024-11-13 17:57:03','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(460,'8bfe5db','2024-11-13 17:57:04','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(461,'868cbc8','2024-11-13 17:57:04','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(462,'0516865','2024-11-13 17:57:04','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(463,'88df081','2024-11-13 17:57:46','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(464,'2f9cc61','2024-11-13 17:57:46','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(465,'f921351','2024-11-13 17:57:46','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(466,'065f934','2024-11-13 17:57:46','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(467,'21c7a7a','2024-11-13 17:57:46','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(468,'e4b31f0','2024-11-13 17:57:46','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(469,'137b850','2024-11-13 17:57:46','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(470,'31a9626','2024-11-13 17:57:47','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(471,'65d6cb3','2024-11-13 17:58:16','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(472,'bbbb929','2024-11-13 17:58:16','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(473,'1503d32','2024-11-13 17:58:16','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(474,'a933d57','2024-11-13 17:58:16','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(475,'2a75d07','2024-11-13 17:58:16','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(476,'b2c9f6b','2024-11-13 17:58:16','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(477,'5f305c9','2024-11-13 17:58:16','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(478,'41ce310','2024-11-13 17:58:16','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(479,'f9b1759','2024-11-13 17:58:16','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(480,'24524d9','2024-11-13 17:58:20','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(481,'690bf94','2024-11-13 17:58:20','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(482,'13c48ee','2024-11-13 17:58:20','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(483,'30ed520','2024-11-13 17:58:20','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(484,'098f088','2024-11-13 17:58:20','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(485,'4ba052c','2024-11-13 17:58:20','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(486,'dc031fe','2024-11-13 17:58:20','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(487,'1acd1ec','2024-11-13 17:58:21','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(488,'bc2b95e','2024-11-13 17:58:21','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(489,'50be67e','2024-11-13 17:58:21','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(490,'b92f647','2024-11-13 17:58:24','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(491,'ca050d1','2024-11-13 17:58:24','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(492,'1f98004','2024-11-13 17:58:24','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(493,'03c1195','2024-11-13 17:58:25','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(494,'d6b2899','2024-11-13 17:58:25','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(495,'6511e65','2024-11-13 17:58:25','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(496,'1c7a90a','2024-11-13 17:58:31','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(497,'9571fe7','2024-11-13 17:58:31','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(498,'93fc3c1','2024-11-13 17:58:31','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(499,'a85dcce','2024-11-13 17:58:31','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(500,'323edcb','2024-11-13 17:58:31','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(501,'d50f286','2024-11-13 17:58:31','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(502,'da27648','2024-11-13 17:58:31','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(503,'68b9dbb','2024-11-13 17:58:31','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(504,'da668e2','2024-11-13 17:58:32','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(505,'25fbffc','2024-11-13 17:58:32','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(506,'d173a10','2024-11-13 17:58:32','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(507,'7b6ce95','2024-11-13 17:59:01','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(508,'700fe04','2024-11-13 18:00:02','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(509,'0827996','2024-11-13 18:00:02','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(510,'f0f0bcb','2024-11-13 18:00:02','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(511,'f1c1d73','2024-11-13 18:00:02','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(512,'6e81b31','2024-11-13 18:00:02','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(513,'c18d807','2024-11-13 18:00:02','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(514,'6021044','2024-11-13 18:00:02','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(515,'1ddb529','2024-11-13 18:00:03','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(516,'d36bbd8','2024-11-13 18:00:03','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(517,'588013c','2024-11-13 18:00:03','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(518,'6bff995','2024-11-13 18:00:03','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(519,'af00a11','2024-11-13 18:00:04','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(520,'01ab1bd','2024-11-13 18:00:04','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(521,'a26c421','2024-11-13 18:00:04','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(522,'897b8bb','2024-11-13 18:00:04','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(523,'de512f2','2024-11-13 18:00:04','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(524,'7465e4c','2024-11-13 18:00:04','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(525,'29ee023','2024-11-13 18:00:04','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(526,'cf3eccb','2024-11-13 18:00:04','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(527,'a15edfb','2024-11-13 18:00:05','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(528,'8de8ee0','2024-11-13 18:00:05','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(529,'c93f809','2024-11-13 18:00:05','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(530,'e7ecfca','2024-11-13 18:00:44','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(531,'9439d94','2024-11-13 18:00:44','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(532,'eeb3593','2024-11-13 18:00:44','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(533,'04d5896','2024-11-13 18:00:44','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(534,'bf9ebc2','2024-11-13 18:00:44','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(535,'d9151bc','2024-11-13 18:00:44','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(536,'f129f4f','2024-11-13 18:00:44','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(537,'dac9a18','2024-11-13 18:00:44','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(538,'4e370b4','2024-11-13 18:00:44','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(539,'77de908','2024-11-13 18:00:44','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(540,'86c8044','2024-11-13 18:00:45','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(541,'6a3e7f0','2024-11-13 18:00:52','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(542,'194caa7','2024-11-13 18:00:52','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(543,'582085a','2024-11-13 18:00:52','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(544,'5e99b48','2024-11-13 18:00:52','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(545,'570c99f','2024-11-13 18:00:52','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(546,'bd6afea','2024-11-13 18:00:52','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(547,'9b3f7a9','2024-11-13 18:02:02','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(548,'ad4009f','2024-11-13 18:03:00','WEB','ERROR','/hello.world','POST','Not found.',0,0),
(549,'83759a2','2024-11-13 18:03:01','WEB','ERROR','/vendor/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(550,'b527283','2024-11-13 18:03:01','WEB','ERROR','/vendor/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(551,'884755b','2024-11-13 18:03:01','WEB','ERROR','/vendor/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(552,'dfbd68a','2024-11-13 18:03:02','WEB','ERROR','/vendor/phpunit/phpunit/LICENSE/eval-stdin.php','GET','Not found.',0,0),
(553,'bf65646','2024-11-13 18:03:03','WEB','ERROR','/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(554,'5bf6887','2024-11-13 18:03:03','WEB','ERROR','/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(555,'2609399','2024-11-13 18:03:03','WEB','ERROR','/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(556,'379712b','2024-11-13 18:03:04','WEB','ERROR','/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(557,'30072ad','2024-11-13 18:03:04','WEB','ERROR','/lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(558,'9a2ae74','2024-11-13 18:03:04','WEB','ERROR','/lib/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(559,'31de267','2024-11-13 18:03:05','WEB','ERROR','/lib/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(560,'0ec08fa','2024-11-13 18:03:05','WEB','ERROR','/lib/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(561,'2916d5b','2024-11-13 18:03:15','WEB','ERROR','/index.php','GET','Not found.',0,0),
(562,'c0b41f8','2024-11-13 18:03:15','WEB','ERROR','/public/index.php','GET','Not found.',0,0),
(563,'8e07d73','2024-11-13 18:03:15','WEB','ERROR','/index.php','GET','Not found.',0,0),
(564,'a490727','2024-11-13 18:03:16','WEB','ERROR','/index.php','GET','Not found.',0,0),
(565,'ff53adc','2024-11-13 18:03:16','WEB','ERROR','/containers/json','GET','Not found.',0,0),
(566,'64a177b','2024-11-13 18:09:19','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(567,'1585f64','2024-11-13 18:09:19','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(568,'0b282e2','2024-11-13 18:09:19','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(569,'639a989','2024-11-13 18:09:19','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(570,'5d34cd1','2024-11-13 18:09:19','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(571,'a6693a8','2024-11-13 18:09:19','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(572,'ade5365','2024-11-13 18:09:19','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(573,'ead0984','2024-11-13 18:09:19','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(574,'4f44ded','2024-11-13 18:09:19','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(575,'7e99bf3','2024-11-13 18:09:20','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(576,'0dc95c9','2024-11-13 18:09:21','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(577,'40078e7','2024-11-13 18:09:21','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(578,'ee03931','2024-11-13 18:09:21','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(579,'68060ab','2024-11-13 18:09:21','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(580,'0a93f74','2024-11-13 18:09:21','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(581,'4e94d91','2024-11-13 18:09:21','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(582,'e74432d','2024-11-13 18:09:21','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(583,'d80ea8f','2024-11-13 18:09:21','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(584,'c43dd87','2024-11-13 18:09:22','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(585,'b681451','2024-11-13 18:09:22','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(586,'2d9f502','2024-11-13 18:09:22','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(587,'bac70ae','2024-11-13 18:09:57','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(588,'9782ce5','2024-11-13 18:09:59','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(589,'cc277af','2024-11-13 18:09:59','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(590,'1346e0e','2024-11-13 18:09:59','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(591,'b7af1ec','2024-11-13 18:09:59','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(592,'010bb52','2024-11-13 18:09:59','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(593,'c9824c8','2024-11-13 18:09:59','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(594,'0ee05bc','2024-11-13 18:10:06','WEB','ERROR','/boaform/admin/formLogin','POST','Not found.',0,0),
(595,'0e7283c','2024-11-13 18:10:25','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(596,'00bde82','2024-11-13 18:10:25','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(597,'9ea0bf7','2024-11-13 18:10:25','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(598,'85eff4c','2024-11-13 18:10:25','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(599,'01e1f14','2024-11-13 18:10:26','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(600,'98f89a0','2024-11-13 18:10:26','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(601,'fa15af4','2024-11-13 18:10:26','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(602,'b970d90','2024-11-13 18:10:26','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(603,'fc912a4','2024-11-13 18:10:26','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(604,'dadeaf9','2024-11-13 18:10:26','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(605,'b144340','2024-11-13 18:10:26','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(606,'6183652','2024-11-13 18:10:32','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(607,'d04d090','2024-11-13 18:10:32','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(608,'9c76d88','2024-11-13 18:10:32','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(609,'eb1d60a','2024-11-13 18:10:32','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(610,'9334137','2024-11-13 18:10:32','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(611,'b19aba4','2024-11-13 18:10:32','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(612,'fff097f','2024-11-13 18:10:32','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(613,'0589ac6','2024-11-13 18:10:32','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(614,'7c3de27','2024-11-13 18:10:33','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(615,'b352607','2024-11-13 18:10:41','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(616,'906f5e6','2024-11-13 18:10:41','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(617,'7466cdd','2024-11-13 18:10:41','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(618,'b971e1f','2024-11-13 18:10:42','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(619,'ef656e2','2024-11-13 18:10:42','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(620,'f52ba91','2024-11-13 18:10:42','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(621,'2e95bb7','2024-11-13 18:10:42','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(622,'71a5a2a','2024-11-13 18:10:42','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(623,'729429e','2024-11-13 18:10:42','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(624,'88021dc','2024-11-13 18:10:42','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(625,'7739e13','2024-11-13 18:10:43','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(626,'a289977','2024-11-13 18:11:12','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(627,'8a46d96','2024-11-13 18:11:12','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(628,'1ec7071','2024-11-13 18:11:12','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(629,'9be39e2','2024-11-13 18:11:12','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(630,'a4b9279','2024-11-13 18:11:12','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(631,'f9add1d','2024-11-13 18:11:12','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(632,'d4aba02','2024-11-13 18:11:39','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(633,'4ac8aa3','2024-11-13 18:11:39','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(634,'f313bc5','2024-11-13 18:11:39','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(635,'54f90c1','2024-11-13 18:11:39','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(636,'9baa3f6','2024-11-13 18:11:39','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(637,'8b0c095','2024-11-13 18:11:39','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(638,'cd6eaa0','2024-11-13 18:12:01','WEB','ERROR','/playlist/widget/resource/12/19','GET','Unable to get feed: cURL error 3: URL rejected: Malformed input to a URL function (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)',0,0),
(639,'90f0046','2024-11-13 18:13:02','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(640,'fd694a9','2024-11-13 18:13:44','WEB','ERROR','/login.rsp','GET','Not found.',0,0),
(641,'ad2c9a5','2024-11-13 18:13:48','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(642,'4423450','2024-11-13 18:13:48','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(643,'4be6e8e','2024-11-13 18:13:48','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(644,'2deb994','2024-11-13 18:13:48','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(645,'4891dd0','2024-11-13 18:13:48','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(646,'cf42c33','2024-11-13 18:13:48','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(647,'d7b8588','2024-11-13 18:13:48','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(648,'fb693ba','2024-11-13 18:13:48','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(649,'28382b7','2024-11-13 18:13:49','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(650,'52a3552','2024-11-13 18:13:49','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(651,'d50aaf0','2024-11-13 18:13:49','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(652,'d53795f','2024-11-13 18:13:54','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(653,'8bbef5e','2024-11-13 18:13:55','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(654,'c548cd6','2024-11-13 18:13:55','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(655,'2dcea99','2024-11-13 18:13:55','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(656,'d31353f','2024-11-13 18:13:55','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(657,'de8f1c7','2024-11-13 18:13:55','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(658,'9fec5ca','2024-11-13 18:13:55','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(659,'e0b67e3','2024-11-13 18:13:55','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(660,'ca0147b','2024-11-13 18:13:55','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(661,'e4b26b7','2024-11-13 18:13:55','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(662,'c525189','2024-11-13 18:13:56','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(663,'40424bb','2024-11-13 18:13:58','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(664,'60a6582','2024-11-13 18:13:58','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(665,'bf9886a','2024-11-13 18:13:58','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(666,'db412a3','2024-11-13 18:13:58','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(667,'8061acb','2024-11-13 18:13:58','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(668,'2b815e3','2024-11-13 18:13:58','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(669,'e7a76de','2024-11-13 18:13:58','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(670,'0c58a20','2024-11-13 18:13:58','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(671,'703005f','2024-11-13 18:13:58','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(672,'b1e8980','2024-11-13 18:13:58','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(673,'ed06890','2024-11-13 18:13:58','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(674,'bcc9b0f','2024-11-13 18:13:59','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(675,'db13e2a','2024-11-13 18:13:59','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(676,'836c17b','2024-11-13 18:13:59','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(677,'66d3fe0','2024-11-13 18:13:59','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(678,'581f80c','2024-11-13 18:13:59','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(679,'8f1fc5f','2024-11-13 18:13:59','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(680,'5b05009','2024-11-13 18:13:59','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(681,'267ce67','2024-11-13 18:13:59','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(682,'4c1a2ae','2024-11-13 18:13:59','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(683,'af62b81','2024-11-13 18:14:05','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(684,'279c082','2024-11-13 18:14:05','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(685,'c0ab417','2024-11-13 18:14:05','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(686,'5c357ef','2024-11-13 18:14:05','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(687,'58281cf','2024-11-13 18:14:05','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(688,'ff85116','2024-11-13 18:14:05','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(689,'04772c3','2024-11-13 18:14:06','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(690,'0598933','2024-11-13 18:14:06','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(691,'06a2c85','2024-11-13 18:14:06','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(692,'33cba7c','2024-11-13 18:14:06','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(693,'1fd76b1','2024-11-13 18:14:06','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(694,'c8899d2','2024-11-13 18:14:06','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(695,'32c3469','2024-11-13 18:14:06','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(696,'7be800c','2024-11-13 18:14:06','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(697,'459fe59','2024-11-13 18:14:06','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(698,'c700e45','2024-11-13 18:14:06','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(699,'be97956','2024-11-13 18:14:06','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(700,'38b721a','2024-11-13 18:14:07','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(701,'578643f','2024-11-13 18:14:07','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(702,'28345d1','2024-11-13 18:14:07','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(703,'fe75001','2024-11-13 18:14:07','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(704,'0e58a7a','2024-11-13 18:14:07','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(705,'c765322','2024-11-13 18:14:12','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(706,'90b7731','2024-11-13 18:14:12','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(707,'ad8a9af','2024-11-13 18:14:12','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(708,'31b4d69','2024-11-13 18:14:12','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(709,'14a8642','2024-11-13 18:14:12','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(710,'0fe33de','2024-11-13 18:14:12','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(711,'91d755e','2024-11-13 18:14:12','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(712,'83e232f','2024-11-13 18:14:12','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(713,'8d3f124','2024-11-13 18:14:12','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(714,'4d02b49','2024-11-13 18:14:12','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(715,'c25dadd','2024-11-13 18:14:12','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(716,'4800e1f','2024-11-13 18:14:12','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(717,'035febe','2024-11-13 18:14:12','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(718,'5f256ed','2024-11-13 18:14:13','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(719,'42d9f17','2024-11-13 18:14:13','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(720,'a55579f','2024-11-13 18:14:13','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(721,'9b0ca5d','2024-11-13 18:14:13','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(722,'2efe0a2','2024-11-13 18:14:13','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(723,'d161d2b','2024-11-13 18:14:21','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(724,'829e985','2024-11-13 18:14:21','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(725,'f7234b3','2024-11-13 18:14:21','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(726,'6e7f33f','2024-11-13 18:14:21','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(727,'99efc1e','2024-11-13 18:14:21','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(728,'45314b9','2024-11-13 18:14:21','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(729,'246b6af','2024-11-13 18:14:21','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(730,'bb76956','2024-11-13 18:14:21','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(731,'0c01f0b','2024-11-13 18:14:21','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(732,'570c724','2024-11-13 18:14:21','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(733,'081d0b7','2024-11-13 18:14:21','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(734,'5ab3e56','2024-11-13 18:14:21','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(735,'0d32226','2024-11-13 18:14:21','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(736,'1c29758','2024-11-13 18:14:21','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(737,'f4694b4','2024-11-13 18:14:22','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(738,'8c9f5e5','2024-11-13 18:14:22','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(739,'80a5c04','2024-11-13 18:14:22','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(740,'04397c9','2024-11-13 18:14:22','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(741,'fb7c601','2024-11-13 18:14:26','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(742,'7ee6b0f','2024-11-13 18:14:26','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(743,'eaadf29','2024-11-13 18:14:26','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(744,'6ec2670','2024-11-13 18:14:26','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(745,'ccdfae6','2024-11-13 18:14:26','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(746,'19cddfd','2024-11-13 18:14:26','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(747,'acad39c','2024-11-13 18:14:26','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(748,'d0acefe','2024-11-13 18:14:26','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(749,'f1480f0','2024-11-13 18:14:26','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(750,'ad5064a','2024-11-13 18:14:26','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(751,'8f5a036','2024-11-13 18:14:26','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(752,'5cf0f4d','2024-11-13 18:14:26','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(753,'166e9ef','2024-11-13 18:14:32','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(754,'ac1aa9d','2024-11-13 18:14:33','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(755,'88740d0','2024-11-13 18:14:33','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(756,'8970f62','2024-11-13 18:14:33','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(757,'64683e6','2024-11-13 18:14:33','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(758,'687b8ea','2024-11-13 18:14:34','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(759,'991b45b','2024-11-13 18:14:34','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(760,'b6c298f','2024-11-13 18:14:34','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(761,'5686f63','2024-11-13 18:14:34','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(762,'a34d79d','2024-11-13 18:14:34','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(763,'0f4ee8c','2024-11-13 18:14:34','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(764,'24f1b32','2024-11-13 18:14:34','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(765,'2922ae3','2024-11-13 18:14:34','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(766,'107cde5','2024-11-13 18:14:34','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(767,'dac6645','2024-11-13 18:14:34','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(768,'2e326d9','2024-11-13 18:14:34','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(769,'2b5e033','2024-11-13 18:14:34','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(770,'dd4512b','2024-11-13 18:14:34','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(771,'c757f7a','2024-11-13 18:14:34','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(772,'9251461','2024-11-13 18:14:35','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(773,'4bd6c59','2024-11-13 18:14:44','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(774,'dffb1b0','2024-11-13 18:14:46','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(775,'df214b2','2024-11-13 18:14:46','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(776,'3686f1c','2024-11-13 18:14:46','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(777,'42b1508','2024-11-13 18:14:46','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(778,'aaaa8e5','2024-11-13 18:14:46','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(779,'cf21085','2024-11-13 18:14:46','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(780,'a05ab63','2024-11-13 18:14:46','WEB','ERROR','/library/download/8','GET','Header values must be RFC 7230 compatible strings.',0,0),
(781,'2105956','2024-11-13 18:14:46','WEB','ERROR','/library/download/1','GET','Header values must be RFC 7230 compatible strings.',0,0),
(782,'326c286','2024-11-13 18:14:46','WEB','ERROR','/library/download/2','GET','Header values must be RFC 7230 compatible strings.',0,0),
(783,'d83dd08','2024-11-13 18:14:47','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(784,'d748a8e','2024-11-13 18:14:47','WEB','ERROR','/library/download/5','GET','Header values must be RFC 7230 compatible strings.',0,0),
(785,'5f780f9','2024-11-13 18:14:47','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(786,'be06f9a','2024-11-13 18:14:47','WEB','ERROR','/library/download/12','GET','Header values must be RFC 7230 compatible strings.',0,0),
(787,'ba2f59d','2024-11-13 18:14:47','WEB','ERROR','/library/download/3','GET','Header values must be RFC 7230 compatible strings.',0,0),
(788,'534006c','2024-11-13 18:16:59','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(789,'72e3b1e','2024-11-13 18:18:03','WEB','ERROR','/.env','GET','Not found.',0,0),
(790,'9f9e588','2024-11-13 18:19:51','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(791,'030a966','2024-11-13 18:25:34','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(792,'62d1d8b','2024-11-13 19:44:54','WEB','ERROR','/hello.world','POST','Not found.',0,0),
(793,'f082bc6','2024-11-13 19:44:55','WEB','ERROR','/vendor/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(794,'343afdd','2024-11-13 19:44:55','WEB','ERROR','/vendor/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(795,'b3f5478','2024-11-13 19:44:56','WEB','ERROR','/vendor/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(796,'58ac5c8','2024-11-13 19:44:56','WEB','ERROR','/vendor/phpunit/phpunit/LICENSE/eval-stdin.php','GET','Not found.',0,0),
(797,'197df1e','2024-11-13 19:44:57','WEB','ERROR','/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(798,'cdab1ef','2024-11-13 19:44:57','WEB','ERROR','/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(799,'db9d93f','2024-11-13 19:44:58','WEB','ERROR','/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(800,'dbe5dfe','2024-11-13 19:44:58','WEB','ERROR','/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(801,'82e5dfb','2024-11-13 19:44:58','WEB','ERROR','/lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(802,'ba140b1','2024-11-13 19:44:59','WEB','ERROR','/lib/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(803,'d4f8ff1','2024-11-13 19:44:59','WEB','ERROR','/lib/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(804,'c561d87','2024-11-13 19:44:59','WEB','ERROR','/lib/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(805,'edb1140','2024-11-13 19:45:08','WEB','ERROR','/index.php','GET','Not found.',0,0),
(806,'771ce59','2024-11-13 19:45:09','WEB','ERROR','/public/index.php','GET','Not found.',0,0),
(807,'b895873','2024-11-13 19:45:09','WEB','ERROR','/index.php','GET','Not found.',0,0),
(808,'526ef07','2024-11-13 19:45:10','WEB','ERROR','/index.php','GET','Not found.',0,0),
(809,'a37c400','2024-11-13 19:45:11','WEB','ERROR','/containers/json','GET','Not found.',0,0),
(810,'f4df8b5','2024-11-13 19:50:04','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(811,'b7b0f1e','2024-11-13 19:50:11','WEB','ERROR','/user/pref','GET','User Option not found',0,0),
(812,'6d4c89a','2024-11-13 20:01:11','WEB','ERROR','/vendor/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(813,'fd34f34','2024-11-13 20:01:12','WEB','ERROR','/vendor/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(814,'e837579','2024-11-13 20:01:12','WEB','ERROR','/vendor/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(815,'087bae5','2024-11-13 20:01:13','WEB','ERROR','/vendor/phpunit/phpunit/LICENSE/eval-stdin.php','GET','Not found.',0,0),
(816,'a832fd9','2024-11-13 20:01:15','WEB','ERROR','/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(817,'aa13984','2024-11-13 20:01:16','WEB','ERROR','/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(818,'da6f8b9','2024-11-13 20:01:17','WEB','ERROR','/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(819,'c77b1d4','2024-11-13 20:01:18','WEB','ERROR','/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(820,'d5b71ef','2024-11-13 20:01:18','WEB','ERROR','/lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(821,'7c06c19','2024-11-13 20:01:19','WEB','ERROR','/lib/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(822,'5c5c516','2024-11-13 20:01:20','WEB','ERROR','/lib/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(823,'0fa2030','2024-11-13 20:01:21','WEB','ERROR','/lib/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(824,'193733b','2024-11-13 20:01:43','WEB','ERROR','/index.php','GET','Not found.',0,0),
(825,'974cb1a','2024-11-13 20:01:44','WEB','ERROR','/public/index.php','GET','Not found.',0,0),
(826,'0ea609e','2024-11-13 20:01:44','WEB','ERROR','/index.php','GET','Not found.',0,0),
(827,'8d07eb3','2024-11-13 20:01:45','WEB','ERROR','/index.php','GET','Not found.',0,0),
(828,'760b33a','2024-11-13 20:15:57','WEB','ERROR','/xibo/web','GET','Not found.',0,0),
(829,'70f0652','2024-11-13 20:16:02','WEB','ERROR','/xibo/web','GET','Not found.',0,0),
(830,'a1b8674','2024-11-13 20:16:06','WEB','ERROR','/xibo/','GET','Not found.',0,0),
(831,'85d0383','2024-11-13 20:40:35','WEB','ERROR','/HNAP1/','POST','Not found.',0,0),
(832,'eac1359','2024-11-13 20:48:11','WEB','ERROR','/cgi-bin/index.cgi','GET','Not found.',0,0),
(833,'0d877f6','2024-11-13 21:04:38','WEB','ERROR','/login.rsp','GET','Not found.',0,0),
(834,'a246e32','2024-11-13 21:21:21','WEB','ERROR','/cgi-bin/index.html','GET','Not found.',0,0),
(835,'73d5230','2024-11-13 22:45:53','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(836,'2e4ef27','2024-11-13 23:01:42','WEB','ERROR','/login.rsp','GET','Not found.',0,0),
(837,'a386cc2','2024-11-13 23:24:27','WEB','ERROR','example.com:80','CONNECT','Not found.',0,0),
(838,'0da62ca','2024-11-13 23:51:59','WEB','ERROR','/apply.cgi','POST','Not found.',0,0),
(839,'36468e1','2024-11-14 00:08:25','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(840,'c738caf','2024-11-14 00:51:21','WEB','ERROR','/.env','GET','Not found.',0,0),
(841,'7e4115d','2024-11-14 01:21:44','WEB','ERROR','/Public/home/js/check.js','GET','Not found.',0,0),
(842,'2aee9fd','2024-11-14 01:21:46','WEB','ERROR','/static/admin/javascript/hetong.js','GET','Not found.',0,0),
(843,'91f2dab','2024-11-14 01:30:52','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(844,'635e6d5','2024-11-14 02:24:52','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(845,'dc3735c','2024-11-14 02:24:54','WEB','ERROR','/.well-known/security.txt','GET','Not found.',0,0),
(846,'de36432','2024-11-14 02:31:10','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(847,'5a7157b','2024-11-14 03:00:10','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(848,'b6ab7b1','2024-11-14 03:05:59','WEB','ERROR','/ReportServer','GET','Not found.',0,0),
(849,'ce2f651','2024-11-14 03:09:03','WEB','ERROR','/boaform/admin/formLogin','POST','Not found.',0,0),
(850,'eadacf9','2024-11-14 03:47:29','WEB','ERROR','/hello.world','POST','Not found.',0,0),
(851,'8edc6ee','2024-11-14 03:47:31','WEB','ERROR','/vendor/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(852,'28e288f','2024-11-14 03:47:31','WEB','ERROR','/vendor/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(853,'fcd57d5','2024-11-14 03:47:32','WEB','ERROR','/vendor/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(854,'786cf2a','2024-11-14 03:47:32','WEB','ERROR','/vendor/phpunit/phpunit/LICENSE/eval-stdin.php','GET','Not found.',0,0),
(855,'d7fc1d8','2024-11-14 03:47:33','WEB','ERROR','/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(856,'a23c399','2024-11-14 03:47:33','WEB','ERROR','/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(857,'b11fcb7','2024-11-14 03:47:33','WEB','ERROR','/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(858,'6404719','2024-11-14 03:47:34','WEB','ERROR','/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(859,'f32be63','2024-11-14 03:47:34','WEB','ERROR','/lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(860,'df56df5','2024-11-14 03:47:34','WEB','ERROR','/lib/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(861,'99d29d7','2024-11-14 03:47:34','WEB','ERROR','/lib/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(862,'004f176','2024-11-14 03:47:35','WEB','ERROR','/lib/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(863,'f72d32f','2024-11-14 03:47:44','WEB','ERROR','/index.php','GET','Not found.',0,0),
(864,'29fe7b3','2024-11-14 03:47:44','WEB','ERROR','/public/index.php','GET','Not found.',0,0),
(865,'fa3ca63','2024-11-14 03:47:44','WEB','ERROR','/index.php','GET','Not found.',0,0),
(866,'8e6dfa1','2024-11-14 03:47:45','WEB','ERROR','/index.php','GET','Not found.',0,0),
(867,'a8e656c','2024-11-14 03:47:45','WEB','ERROR','/containers/json','GET','Not found.',0,0),
(868,'6841d9f','2024-11-14 04:07:12','WEB','ERROR','/actuator/gateway/routes','GET','Not found.',0,0),
(869,'06d7c0c','2024-11-14 04:15:30','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(870,'05fa06a','2024-11-14 05:07:43','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(871,'1fad47d','2024-11-14 05:07:44','WEB','ERROR','/login/robots.txt','GET','Not found.',0,0),
(872,'db44675','2024-11-14 05:07:44','WEB','ERROR','/login/sitemap.xml','GET','Not found.',0,0),
(873,'6382e2d','2024-11-14 05:07:48','WEB','ERROR','/login/sitemap.xml','GET','Not found.',0,0),
(874,'e9c3853','2024-11-14 05:07:48','WEB','ERROR','/login/robots.txt','GET','Not found.',0,0),
(875,'fffcfa4','2024-11-14 05:32:47','WEB','ERROR','/cgi-bin/index.cgi','GET','Not found.',0,0),
(876,'c24a7f9','2024-11-14 05:59:41','WEB','ERROR','/cgi-bin/index.html','GET','Not found.',0,0),
(877,'698805b','2024-11-14 06:22:18','WEB','ERROR','/.env','GET','Not found.',0,0),
(878,'4df320c','2024-11-14 06:31:20','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(879,'0125cd6','2024-11-14 06:34:58','WEB','ERROR','/vpn/index.html','GET','Not found.',0,0),
(880,'8474e72','2024-11-14 06:36:14','WEB','ERROR','/geoserver/web/','GET','Not found.',0,0),
(881,'ea2f8ba','2024-11-14 06:37:55','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(882,'970627b','2024-11-14 07:15:08','WEB','ERROR','/php-info.php','GET','Not found.',0,0),
(883,'7b569f2','2024-11-14 07:15:09','WEB','ERROR','/.env.bak','GET','Not found.',0,0),
(884,'380a6b9','2024-11-14 07:15:09','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(885,'be51427','2024-11-14 07:15:10','WEB','ERROR','/dashboard/phpinfo.php','GET','Not found.',0,0),
(886,'7160293','2024-11-14 07:15:11','WEB','ERROR','/.gitlab-ci.yml','GET','Not found.',0,0),
(887,'380f7d9','2024-11-14 07:15:12','WEB','ERROR','/.env.backup','GET','Not found.',0,0),
(888,'eb931c3','2024-11-14 07:15:12','WEB','ERROR','/.env.local','GET','Not found.',0,0),
(889,'78e55f6','2024-11-14 07:15:13','WEB','ERROR','/.env.save','GET','Not found.',0,0),
(890,'f36d1c0','2024-11-14 07:15:14','WEB','ERROR','/.env.stage','GET','Not found.',0,0),
(891,'87a36fa','2024-11-14 07:15:14','WEB','ERROR','/.aws/credentials','GET','Not found.',0,0),
(892,'5bba813','2024-11-14 07:15:15','WEB','ERROR','/media/.git/config','GET','Not found.',0,0),
(893,'126ca3a','2024-11-14 07:15:16','WEB','ERROR','/.envrc','GET','Not found.',0,0),
(894,'f6e9dc3','2024-11-14 07:15:16','WEB','ERROR','/linusadmin-phpinfo.php','GET','Not found.',0,0),
(895,'a55e984','2024-11-14 07:15:17','API','ERROR','/api/.env','GET','Not found.',0,0),
(896,'a172125','2024-11-14 07:15:17','WEB','ERROR','/config/.env','GET','Not found.',0,0),
(897,'b476465','2024-11-14 07:15:18','WEB','ERROR','/config/environment.rb','GET','Not found.',0,0),
(898,'63eb7bf','2024-11-14 07:15:18','WEB','ERROR','/docker-compose.prod.yml','GET','Not found.',0,0),
(899,'ce139de','2024-11-14 07:15:19','WEB','ERROR','/js/.git/config','GET','Not found.',0,0),
(900,'e54c3fb','2024-11-14 07:15:20','WEB','ERROR','/config.yml','GET','Not found.',0,0),
(901,'18cb22a','2024-11-14 07:15:20','WEB','ERROR','/.env.dev','GET','Not found.',0,0),
(902,'c4463ed','2024-11-14 07:15:21','WEB','ERROR','/.env.development.local','GET','Not found.',0,0),
(903,'8913e8e','2024-11-14 07:15:22','WEB','ERROR','/.env.old','GET','Not found.',0,0),
(904,'a646f38','2024-11-14 07:15:22','WEB','ERROR','/.env.production','GET','Not found.',0,0),
(905,'cfc7c0b','2024-11-14 07:15:23','WEB','ERROR','/media../.git/config','GET','Not found.',0,0),
(906,'67e5a87','2024-11-14 07:15:24','WEB','ERROR','/static../.git/config','GET','Not found.',0,0),
(907,'9421cf0','2024-11-14 07:15:24','WEB','ERROR','/.env.production.local','GET','Not found.',0,0),
(908,'c149b3a','2024-11-14 07:15:25','WEB','ERROR','/pinfo.php','GET','Not found.',0,0),
(909,'2631e8a','2024-11-14 07:15:25','WEB','ERROR','/_profiler/phpinfo.php','GET','Not found.',0,0),
(910,'40a2485','2024-11-14 07:15:26','WEB','ERROR','/server/.git/config','GET','Not found.',0,0),
(911,'a163ab0','2024-11-14 07:15:27','WEB','ERROR','/.env.dev.local','GET','Not found.',0,0),
(912,'2897e9a','2024-11-14 07:15:27','WEB','ERROR','/.env.prod.local','GET','Not found.',0,0),
(913,'fecc7fc','2024-11-14 07:15:28','WEB','ERROR','/dev/.git/config','GET','Not found.',0,0),
(914,'098f63c','2024-11-14 07:15:28','WEB','ERROR','/www/.git/config','GET','Not found.',0,0),
(915,'f02c472','2024-11-14 07:15:29','WEB','ERROR','/.env','GET','Not found.',0,0),
(916,'7ab8c55','2024-11-14 07:15:30','WEB','ERROR','/.env.live','GET','Not found.',0,0),
(917,'aac87aa','2024-11-14 07:15:30','WEB','ERROR','/.env.prod','GET','Not found.',0,0),
(918,'fd7e881','2024-11-14 07:15:31','WEB','ERROR','/.env_sample','GET','Not found.',0,0),
(919,'9ff47eb','2024-11-14 07:15:32','WEB','ERROR','/bootstrap.yml','GET','Not found.',0,0),
(920,'6a6f3f2','2024-11-14 07:15:32','WEB','ERROR','/config.json','GET','Not found.',0,0),
(921,'5004218','2024-11-14 07:15:33','WEB','ERROR','/old_phpinfo.php','GET','Not found.',0,0),
(922,'ec9f424','2024-11-14 07:15:33','WEB','ERROR','/public/.git/config','GET','Not found.',0,0),
(923,'960d1e5','2024-11-14 07:15:34','WEB','ERROR','/src/.git/config','GET','Not found.',0,0),
(924,'c8c028d','2024-11-14 07:15:35','WEB','ERROR','/php_info.php','GET','Not found.',0,0),
(925,'cdf4317','2024-11-14 07:15:35','WEB','ERROR','/data/.git/config','GET','Not found.',0,0),
(926,'23fca8c','2024-11-14 07:15:36','WEB','ERROR','/.env.example','GET','Not found.',0,0),
(927,'180e393','2024-11-14 07:15:37','WEB','ERROR','/.travis.yml','GET','Not found.',0,0),
(928,'4b15849','2024-11-14 07:15:37','WEB','ERROR','/assets../.git/config','GET','Not found.',0,0),
(929,'cd240d0','2024-11-14 07:15:38','API','ERROR','/api/.git/config','GET','Not found.',0,0),
(930,'7e2a91f','2024-11-14 07:45:02','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(931,'ba9c219','2024-11-14 07:46:00','WEB','ERROR','/hello.world','POST','Not found.',0,0),
(932,'26b4a7c','2024-11-14 07:46:04','WEB','ERROR','/vendor/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(933,'b0593b2','2024-11-14 07:46:07','WEB','ERROR','/vendor/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(934,'13bc29e','2024-11-14 07:46:09','WEB','ERROR','/vendor/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(935,'a221e51','2024-11-14 07:46:12','WEB','ERROR','/vendor/phpunit/phpunit/LICENSE/eval-stdin.php','GET','Not found.',0,0),
(936,'c7507c0','2024-11-14 07:46:16','WEB','ERROR','/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(937,'ac9cb4a','2024-11-14 07:46:19','WEB','ERROR','/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(938,'a35d44e','2024-11-14 07:46:21','WEB','ERROR','/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(939,'e46990b','2024-11-14 07:46:23','WEB','ERROR','/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(940,'dea8ada','2024-11-14 07:46:26','WEB','ERROR','/lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(941,'6efd3c4','2024-11-14 07:46:28','WEB','ERROR','/lib/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(942,'bc1957e','2024-11-14 07:46:30','WEB','ERROR','/lib/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(943,'fe0548d','2024-11-14 07:46:32','WEB','ERROR','/lib/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(944,'5028b9e','2024-11-14 07:47:28','WEB','ERROR','/index.php','GET','Not found.',0,0),
(945,'7f96d55','2024-11-14 07:47:30','WEB','ERROR','/public/index.php','GET','Not found.',0,0),
(946,'c951c9f','2024-11-14 07:47:33','WEB','ERROR','/index.php','GET','Not found.',0,0),
(947,'9c9a2fd','2024-11-14 07:47:35','WEB','ERROR','/index.php','GET','Not found.',0,0),
(948,'995d062','2024-11-14 07:47:38','WEB','ERROR','/containers/json','GET','Not found.',0,0),
(949,'989d9ed','2024-11-14 08:38:21','WEB','ERROR','/apply.cgi','POST','Not found.',0,0),
(950,'bd3b2f9','2024-11-14 08:39:22','WEB','ERROR','/autodiscover/autodiscover.json','GET','Not found.',0,0),
(951,'b4e7d54','2024-11-14 09:03:47','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(952,'0b2aec8','2024-11-14 09:04:24','WEB','ERROR','/geoserver/web/','GET','Not found.',0,0),
(953,'4083796','2024-11-14 09:10:10','WEB','ERROR','/hello.world','POST','Not found.',0,0),
(954,'5f5c308','2024-11-14 09:10:12','WEB','ERROR','/vendor/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(955,'2f91bb9','2024-11-14 09:10:13','WEB','ERROR','/vendor/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(956,'de813b6','2024-11-14 09:10:13','WEB','ERROR','/vendor/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(957,'fb497a5','2024-11-14 09:10:14','WEB','ERROR','/vendor/phpunit/phpunit/LICENSE/eval-stdin.php','GET','Not found.',0,0),
(958,'41262bc','2024-11-14 09:10:16','WEB','ERROR','/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(959,'8307fc9','2024-11-14 09:10:17','WEB','ERROR','/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(960,'45fa044','2024-11-14 09:10:17','WEB','ERROR','/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(961,'1df6a1d','2024-11-14 09:10:18','WEB','ERROR','/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(962,'aade149','2024-11-14 09:10:19','WEB','ERROR','/lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(963,'61f1219','2024-11-14 09:10:19','WEB','ERROR','/lib/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(964,'ea385b2','2024-11-14 09:10:20','WEB','ERROR','/lib/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(965,'8272f9b','2024-11-14 09:10:21','WEB','ERROR','/lib/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(966,'11d3046','2024-11-14 09:55:27','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(967,'4cb2a37','2024-11-14 10:03:29','WEB','ERROR','/login.rsp','GET','Not found.',0,0),
(968,'eddaef2','2024-11-14 11:00:02','WEB','ERROR','/login.rsp','GET','Not found.',0,0),
(969,'1d09bf0','2024-11-14 11:05:48','WEB','ERROR','/version','GET','Not found.',0,0),
(970,'7352692','2024-11-14 11:40:04','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(971,'eadcb3e','2024-11-14 11:44:18','WEB','ERROR','/remote/login','GET','Not found.',0,0),
(972,'54687a8','2024-11-14 11:45:12','WEB','ERROR','/ZCxG','GET','Not found.',0,0),
(973,'7293160','2024-11-14 12:02:11','WEB','ERROR','/.env','GET','Not found.',0,0),
(974,'9ecf744','2024-11-14 12:02:12','WEB','ERROR','/','POST','Method not allowed. Must be one of: GET',0,0),
(975,'d8d6870','2024-11-14 12:02:13','WEB','ERROR','/.env','GET','Not found.',0,0),
(976,'fb0bdfe','2024-11-14 12:02:14','WEB','ERROR','/','POST','Method not allowed. Must be one of: GET',0,0),
(977,'0e73c70','2024-11-14 12:06:35','WEB','ERROR','/boaform/admin/formLogin','POST','Not found.',0,0),
(978,'211be97','2024-11-14 12:08:08','WEB','ERROR','/boaform/admin/formLogin','POST','Not found.',0,0),
(979,'93b8f96','2024-11-14 12:09:49','WEB','ERROR','/actuator/gateway/routes','GET','Not found.',0,0),
(980,'5866054','2024-11-14 13:24:41','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(981,'19eda0b','2024-11-14 13:50:59','WEB','ERROR','/.env','GET','Not found.',0,0),
(982,'3a55b72','2024-11-14 14:07:26','WEB','ERROR','/hello.world','POST','Not found.',0,0),
(983,'0c22cc5','2024-11-14 14:07:27','WEB','ERROR','/vendor/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(984,'28ebd01','2024-11-14 14:07:27','WEB','ERROR','/vendor/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(985,'6b5a23b','2024-11-14 14:07:28','WEB','ERROR','/vendor/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(986,'8852735','2024-11-14 14:07:28','WEB','ERROR','/vendor/phpunit/phpunit/LICENSE/eval-stdin.php','GET','Not found.',0,0),
(987,'7ef96ef','2024-11-14 14:07:29','WEB','ERROR','/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(988,'87c6e96','2024-11-14 14:07:29','WEB','ERROR','/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(989,'5461343','2024-11-14 14:07:29','WEB','ERROR','/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(990,'7d09ed6','2024-11-14 14:07:30','WEB','ERROR','/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(991,'80d5251','2024-11-14 14:07:30','WEB','ERROR','/lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(992,'847eadb','2024-11-14 14:07:30','WEB','ERROR','/lib/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(993,'6b11f61','2024-11-14 14:07:31','WEB','ERROR','/lib/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(994,'ac5bd65','2024-11-14 14:07:31','WEB','ERROR','/lib/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(995,'9f349b2','2024-11-14 14:07:42','WEB','ERROR','/index.php','GET','Not found.',0,0),
(996,'7cd35fb','2024-11-14 14:07:42','WEB','ERROR','/public/index.php','GET','Not found.',0,0),
(997,'868ac85','2024-11-14 14:07:42','WEB','ERROR','/index.php','GET','Not found.',0,0),
(998,'88b0a57','2024-11-14 14:07:43','WEB','ERROR','/index.php','GET','Not found.',0,0),
(999,'76f57c7','2024-11-14 14:07:43','WEB','ERROR','/containers/json','GET','Not found.',0,0),
(1000,'041985b','2024-11-14 14:19:53','WEB','ERROR','/_profiler/phpinfo','GET','Not found.',0,0),
(1001,'06f7cbf','2024-11-14 14:23:41','WEB','ERROR','/keybox.xml','GET','Not found.',0,0),
(1002,'3ab9ee7','2024-11-14 14:39:08','WEB','ERROR','/cgi-bin/index.cgi','GET','Not found.',0,0),
(1003,'9beefbb','2024-11-14 14:59:47','WEB','ERROR','/cgi-bin/index.html','GET','Not found.',0,0),
(1004,'54a520c','2024-11-14 15:08:40','WEB','ERROR','/hello.world','POST','Not found.',0,0),
(1005,'845111b','2024-11-14 15:08:41','WEB','ERROR','/vendor/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1006,'642fa08','2024-11-14 15:08:42','WEB','ERROR','/vendor/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1007,'803b1e3','2024-11-14 15:08:42','WEB','ERROR','/vendor/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1008,'01cbab1','2024-11-14 15:08:42','WEB','ERROR','/vendor/phpunit/phpunit/LICENSE/eval-stdin.php','GET','Not found.',0,0),
(1009,'0058782','2024-11-14 15:08:43','WEB','ERROR','/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1010,'a5a2f94','2024-11-14 15:08:43','WEB','ERROR','/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1011,'9e647fe','2024-11-14 15:08:43','WEB','ERROR','/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1012,'afa6899','2024-11-14 15:08:44','WEB','ERROR','/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1013,'3bc87dd','2024-11-14 15:08:44','WEB','ERROR','/lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1014,'f156187','2024-11-14 15:08:44','WEB','ERROR','/lib/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1015,'b1ecc78','2024-11-14 15:08:45','WEB','ERROR','/lib/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1016,'7894892','2024-11-14 15:08:45','WEB','ERROR','/lib/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1017,'fc901a4','2024-11-14 15:08:54','WEB','ERROR','/index.php','GET','Not found.',0,0),
(1018,'9723f3f','2024-11-14 15:08:54','WEB','ERROR','/public/index.php','GET','Not found.',0,0),
(1019,'47215e9','2024-11-14 15:08:54','WEB','ERROR','/index.php','GET','Not found.',0,0),
(1020,'3ef845c','2024-11-14 15:08:55','WEB','ERROR','/index.php','GET','Not found.',0,0),
(1021,'40b71a9','2024-11-14 15:08:55','WEB','ERROR','/containers/json','GET','Not found.',0,0),
(1022,'5567c24','2024-11-14 15:13:54','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1023,'2db7078','2024-11-14 15:44:14','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1024,'68c8e61','2024-11-14 16:01:42','WEB','ERROR','/hello.world','POST','Not found.',0,0),
(1025,'0f1e0d4','2024-11-14 16:01:48','WEB','ERROR','/vendor/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1026,'e07bdd6','2024-11-14 16:01:51','WEB','ERROR','/vendor/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1027,'d75cd4b','2024-11-14 16:01:53','WEB','ERROR','/vendor/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1028,'ddbecb5','2024-11-14 16:01:56','WEB','ERROR','/vendor/phpunit/phpunit/LICENSE/eval-stdin.php','GET','Not found.',0,0),
(1029,'43dddb6','2024-11-14 16:02:02','WEB','ERROR','/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1030,'63c70b3','2024-11-14 16:02:04','WEB','ERROR','/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1031,'ada64cc','2024-11-14 16:02:08','WEB','ERROR','/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1032,'78c9244','2024-11-14 16:02:11','WEB','ERROR','/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1033,'347be3c','2024-11-14 16:02:14','WEB','ERROR','/lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1034,'f786f5a','2024-11-14 16:02:17','WEB','ERROR','/lib/phpunit/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1035,'469f02e','2024-11-14 16:02:20','WEB','ERROR','/lib/phpunit/src/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1036,'d94611d','2024-11-14 16:02:23','WEB','ERROR','/lib/phpunit/Util/PHP/eval-stdin.php','GET','Not found.',0,0),
(1037,'3a30536','2024-11-14 16:03:37','WEB','ERROR','/index.php','GET','Not found.',0,0),
(1038,'98bc217','2024-11-14 16:03:40','WEB','ERROR','/public/index.php','GET','Not found.',0,0),
(1039,'ec6a93c','2024-11-14 16:03:42','WEB','ERROR','/index.php','GET','Not found.',0,0),
(1040,'2fdc099','2024-11-14 16:03:45','WEB','ERROR','/index.php','GET','Not found.',0,0),
(1041,'7887d2c','2024-11-14 16:03:48','WEB','ERROR','/containers/json','GET','Not found.',0,0),
(1042,'4b0d3d2','2024-11-14 16:28:14','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(1043,'f104593','2024-11-14 17:06:16','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1044,'cb8fec9','2024-11-14 17:25:27','WEB','ERROR','/apply.cgi','POST','Not found.',0,0),
(1045,'85d2c9c','2024-11-14 17:28:29','WEB','ERROR','/mWFR','GET','Not found.',0,0),
(1046,'2c38c1d','2024-11-14 17:28:30','WEB','ERROR','/TAdd','GET','Not found.',0,0),
(1047,'5d14451','2024-11-14 17:44:44','WEB','ERROR','/ab2g','GET','Not found.',0,0),
(1048,'b5d8805','2024-11-14 17:44:45','WEB','ERROR','/ab2h','GET','Not found.',0,0),
(1049,'d676201','2024-11-14 17:44:45','WEB','ERROR','/alive.php','GET','Not found.',0,0),
(1050,'95ef76d','2024-11-14 17:44:50','WEB','ERROR','/t4','GET','Not found.',0,0),
(1051,'bafe132','2024-11-14 17:44:50','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1052,'80a497b','2024-11-14 17:44:50','WEB','ERROR','/teorema505','GET','Not found.',0,0),
(1053,'0c3f2a7','2024-11-14 17:48:14','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1054,'ccde7df','2024-11-14 18:06:51','WEB','ERROR','/boaform/admin/formLogin','POST','Not found.',0,0),
(1055,'a1c104f','2024-11-14 18:30:41','WEB','ERROR','/manager/html','GET','Not found.',0,0),
(1056,'b5a20b2','2024-11-14 18:55:12','WEB','ERROR','/aws.yml','GET','Not found.',0,0),
(1057,'5a1eece','2024-11-14 18:55:15','WEB','ERROR','/config/aws.yml','GET','Not found.',0,0),
(1058,'a0c1996','2024-11-14 18:55:16','WEB','ERROR','/containers/json','GET','Not found.',0,0),
(1059,'af1a9c8','2024-11-14 18:55:16','WEB','ERROR','/.env.bak','GET','Not found.',0,0),
(1060,'4703b28','2024-11-14 18:55:16','WEB','ERROR','/.env','GET','Not found.',0,0),
(1061,'6d12340','2024-11-14 18:55:17','WEB','ERROR','/version','GET','Not found.',0,0),
(1062,'5a714b8','2024-11-14 18:55:17','WEB','ERROR','/openapi/v2','GET','Not found.',0,0),
(1063,'8757316','2024-11-14 18:55:18','WEB','ERROR','/aws.yml','GET','Not found.',0,0),
(1064,'ac0d2f6','2024-11-14 19:06:33','WEB','ERROR','/actuator/health','GET','Not found.',0,0),
(1065,'247ed7c','2024-11-14 19:20:38','WEB','ERROR','/.env','GET','Not found.',0,0),
(1066,'64d0f21','2024-11-14 19:24:55','WEB','ERROR','/keybox.xml','GET','Not found.',0,0),
(1067,'f07e7ba','2024-11-14 19:27:33','WEB','ERROR','/.env','GET','Not found.',0,0),
(1068,'a00e689','2024-11-14 20:05:56','WEB','ERROR','/dev/.git/config','GET','Not found.',0,0),
(1069,'e9bef2a','2024-11-14 20:05:56','WEB','ERROR','/dashboard/phpinfo.php','GET','Not found.',0,0),
(1070,'4ada1a1','2024-11-14 20:05:57','WEB','ERROR','/.gitlab-ci.yml','GET','Not found.',0,0),
(1071,'8f24b24','2024-11-14 20:05:58','WEB','ERROR','/.env.example','GET','Not found.',0,0),
(1072,'0721280','2024-11-14 20:05:58','WEB','ERROR','/.env.prod.local','GET','Not found.',0,0),
(1073,'d6ac795','2024-11-14 20:05:59','WEB','ERROR','/server/.git/config','GET','Not found.',0,0),
(1074,'a790d8a','2024-11-14 20:06:00','WEB','ERROR','/config/environment.rb','GET','Not found.',0,0),
(1075,'8b8719e','2024-11-14 20:06:00','WEB','ERROR','/assets../.git/config','GET','Not found.',0,0),
(1076,'ed652c1','2024-11-14 20:06:01','WEB','ERROR','/config.json','GET','Not found.',0,0),
(1077,'9438ec8','2024-11-14 20:06:02','WEB','ERROR','/docker-compose.prod.yml','GET','Not found.',0,0),
(1078,'566c745','2024-11-14 20:06:02','WEB','ERROR','/.env','GET','Not found.',0,0),
(1079,'ad05367','2024-11-14 20:06:03','WEB','ERROR','/.env.dev.local','GET','Not found.',0,0),
(1080,'9369035','2024-11-14 20:06:04','WEB','ERROR','/.env.local','GET','Not found.',0,0),
(1081,'a112682','2024-11-14 20:06:04','WEB','ERROR','/old_phpinfo.php','GET','Not found.',0,0),
(1082,'132429c','2024-11-14 20:06:05','WEB','ERROR','/.aws/credentials','GET','Not found.',0,0),
(1083,'9de6620','2024-11-14 20:06:06','WEB','ERROR','/config/.env','GET','Not found.',0,0),
(1084,'3a42955','2024-11-14 20:06:07','WEB','ERROR','/config.yml','GET','Not found.',0,0),
(1085,'9c21afa','2024-11-14 20:06:08','WEB','ERROR','/.env.stage','GET','Not found.',0,0),
(1086,'859646f','2024-11-14 20:06:08','WEB','ERROR','/pinfo.php','GET','Not found.',0,0),
(1087,'19b17b2','2024-11-14 20:06:09','WEB','ERROR','/public/.git/config','GET','Not found.',0,0),
(1088,'8c931c5','2024-11-14 20:06:10','WEB','ERROR','/php-info.php','GET','Not found.',0,0),
(1089,'41507d8','2024-11-14 20:06:10','WEB','ERROR','/bootstrap.yml','GET','Not found.',0,0),
(1090,'a6ed352','2024-11-14 20:06:11','WEB','ERROR','/.env.backup','GET','Not found.',0,0),
(1091,'46e62e3','2024-11-14 20:06:12','WEB','ERROR','/.env.live','GET','Not found.',0,0),
(1092,'661bdce','2024-11-14 20:06:13','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(1093,'888326b','2024-11-14 20:06:13','WEB','ERROR','/php_info.php','GET','Not found.',0,0),
(1094,'5459e89','2024-11-14 20:06:14','API','ERROR','/api/.git/config','GET','Not found.',0,0),
(1095,'575b25a','2024-11-14 20:06:14','WEB','ERROR','/.env.prod','GET','Not found.',0,0),
(1096,'00ec29d','2024-11-14 20:06:15','WEB','ERROR','/.env_sample','GET','Not found.',0,0),
(1097,'4e19f20','2024-11-14 20:06:16','WEB','ERROR','/.env.dev','GET','Not found.',0,0),
(1098,'3509d04','2024-11-14 20:06:16','WEB','ERROR','/www/.git/config','GET','Not found.',0,0),
(1099,'b7361ea','2024-11-14 20:06:17','WEB','ERROR','/.env.old','GET','Not found.',0,0),
(1100,'543d7e1','2024-11-14 20:06:19','WEB','ERROR','/linusadmin-phpinfo.php','GET','Not found.',0,0),
(1101,'468664a','2024-11-14 20:06:19','WEB','ERROR','/src/.git/config','GET','Not found.',0,0),
(1102,'8753a30','2024-11-14 20:06:20','WEB','ERROR','/media/.git/config','GET','Not found.',0,0),
(1103,'27687fd','2024-11-14 20:06:21','WEB','ERROR','/data/.git/config','GET','Not found.',0,0),
(1104,'f74ab0d','2024-11-14 20:06:21','WEB','ERROR','/.envrc','GET','Not found.',0,0),
(1105,'1199740','2024-11-14 20:06:22','WEB','ERROR','/_profiler/phpinfo.php','GET','Not found.',0,0),
(1106,'289f5c7','2024-11-14 20:06:23','WEB','ERROR','/.travis.yml','GET','Not found.',0,0),
(1107,'87c394f','2024-11-14 20:06:23','WEB','ERROR','/media../.git/config','GET','Not found.',0,0),
(1108,'9017663','2024-11-14 20:06:24','WEB','ERROR','/js/.git/config','GET','Not found.',0,0),
(1109,'533caaa','2024-11-14 20:06:25','WEB','ERROR','/.env.bak','GET','Not found.',0,0),
(1110,'4a37a0b','2024-11-14 20:06:26','WEB','ERROR','/.env.development.local','GET','Not found.',0,0),
(1111,'602924d','2024-11-14 20:06:26','WEB','ERROR','/.env.production','GET','Not found.',0,0),
(1112,'5892701','2024-11-14 20:06:27','WEB','ERROR','/.env.production.local','GET','Not found.',0,0),
(1113,'26f1704','2024-11-14 20:06:27','WEB','ERROR','/.env.save','GET','Not found.',0,0),
(1114,'3e6a0b9','2024-11-14 20:06:28','API','ERROR','/api/.env','GET','Not found.',0,0),
(1115,'2abab64','2024-11-14 20:06:29','WEB','ERROR','/static../.git/config','GET','Not found.',0,0),
(1116,'3400700','2024-11-14 20:07:40','WEB','ERROR','/boaform/admin/formLogin','POST','Not found.',0,0),
(1117,'0fe06da','2024-11-14 20:08:03','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(1118,'861907c','2024-11-14 20:10:51','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1119,'4e5675d','2024-11-14 20:32:08','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1120,'e9b79bb','2024-11-14 20:36:41','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1121,'622178e','2024-11-14 20:38:16','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1122,'2b20187','2024-11-14 20:54:18','WEB','ERROR','/boaform/admin/formLogin','POST','Not found.',0,0),
(1123,'95bf75c','2024-11-14 20:57:14','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(1124,'cc4043d','2024-11-14 21:08:19','WEB','ERROR','/.env','GET','Not found.',0,0),
(1125,'c27033c','2024-11-14 21:11:11','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1126,'acefb83','2024-11-14 21:11:48','WEB','ERROR','/cgi-bin/luci/;stok=/locale','GET','Not found.',0,0),
(1127,'732caf6','2024-11-14 21:17:43','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1128,'82cc17a','2024-11-14 21:47:34','WEB','ERROR','/.env','GET','Not found.',0,0),
(1129,'1f4cc81','2024-11-14 22:21:41','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(1130,'3dcfcfd','2024-11-14 22:22:41','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(1131,'10dbc68','2024-11-14 22:38:18','WEB','ERROR','/cgi-bin/luci/;stok=/locale','GET','Not found.',0,0),
(1132,'c1035d0','2024-11-14 22:57:14','WEB','ERROR','/cgi-bin/index.cgi','GET','Not found.',0,0),
(1133,'f9025a7','2024-11-14 22:58:04','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1134,'5825c33','2024-11-15 00:27:00','WEB','ERROR','/.env','GET','Not found.',0,0),
(1135,'5bc5745','2024-11-15 00:27:01','WEB','ERROR','/default/.env','GET','Not found.',0,0),
(1136,'5cb7ca4','2024-11-15 00:27:01','WEB','ERROR','/delivery/.env','GET','Not found.',0,0),
(1137,'b270882','2024-11-15 00:27:02','WEB','ERROR','/dependencies/.env','GET','Not found.',0,0),
(1138,'5255f9b','2024-11-15 00:27:03','WEB','ERROR','/deploy/.env','GET','Not found.',0,0),
(1139,'5b3a13d','2024-11-15 00:27:03','WEB','ERROR','/deployment/.env','GET','Not found.',0,0),
(1140,'5d8fe14','2024-11-15 00:27:04','WEB','ERROR','/developerslv/.env','GET','Not found.',0,0),
(1141,'556984f','2024-11-15 00:27:04','WEB','ERROR','/directories/.env','GET','Not found.',0,0),
(1142,'9aca1be','2024-11-15 00:27:05','WEB','ERROR','/django/.env','GET','Not found.',0,0),
(1143,'927cb19','2024-11-15 00:27:05','WEB','ERROR','/downloads/.env','GET','Not found.',0,0),
(1144,'c16bc4f','2024-11-15 00:27:05','WEB','ERROR','/nginx/.env','GET','Not found.',0,0),
(1145,'f060563','2024-11-15 00:27:06','WEB','ERROR','/sample.env','GET','Not found.',0,0),
(1146,'b670e67','2024-11-15 00:27:07','WEB','ERROR','/search/.env','GET','Not found.',0,0),
(1147,'fec5fe6','2024-11-15 00:27:07','WEB','ERROR','/sources/.env','GET','Not found.',0,0),
(1148,'19a15ab','2024-11-15 00:27:07','WEB','ERROR','/twilio.env','GET','Not found.',0,0),
(1149,'6f22368','2024-11-15 00:27:08','WEB','ERROR','/user/.env','GET','Method not allowed. Must be one of: PUT, DELETE',0,0),
(1150,'8446f2e','2024-11-15 00:27:09','WEB','ERROR','/phpinfo/.env','GET','Not found.',0,0),
(1151,'920daf1','2024-11-15 00:27:09','WEB','ERROR','/pictures/.env','GET','Not found.',0,0),
(1152,'26437b1','2024-11-15 00:27:10','WEB','ERROR','/option/.env','GET','Not found.',0,0),
(1153,'21f8532','2024-11-15 00:27:10','WEB','ERROR','/options/.env','GET','Not found.',0,0),
(1154,'744e11c','2024-11-15 00:27:11','WEB','ERROR','/portal/.env','GET','Not found.',0,0),
(1155,'adc512e','2024-11-15 00:27:11','WEB','ERROR','/route/.env','GET','Not found.',0,0),
(1156,'b67b1dc','2024-11-15 00:27:11','WEB','ERROR','/routes/.env','GET','Not found.',0,0),
(1157,'98bc013','2024-11-15 00:27:12','WEB','ERROR','/office/.env','GET','Not found.',0,0),
(1158,'c0bb8a8','2024-11-15 00:27:12','WEB','ERROR','/wp-admin/.env','GET','Not found.',0,0),
(1159,'e29cc6c','2024-11-15 00:27:13','WEB','ERROR','/upfiles/.env','GET','Not found.',0,0),
(1160,'90a67b6','2024-11-15 00:27:13','WEB','ERROR','/view/.env','GET','Not found.',0,0),
(1161,'0a67544','2024-11-15 00:27:14','WEB','ERROR','/views/.env','GET','Not found.',0,0),
(1162,'74909f0','2024-11-15 00:27:15','WEB','ERROR','/security/.env','GET','Not found.',0,0),
(1163,'389256e','2024-11-15 00:27:15','WEB','ERROR','/samples/.env','GET','Not found.',0,0),
(1164,'97f697c','2024-11-15 00:27:15','WEB','ERROR','/sandbox/.env','GET','Not found.',0,0),
(1165,'aa715eb','2024-11-15 00:27:16','WEB','ERROR','/results/.env','GET','Not found.',0,0),
(1166,'916ae21','2024-11-15 00:27:16','WEB','ERROR','/process/.env','GET','Not found.',0,0),
(1167,'b2102cc','2024-11-15 00:27:17','WEB','ERROR','/products/.env','GET','Not found.',0,0),
(1168,'23dbc45','2024-11-15 00:27:17','WEB','ERROR','/project/.env','GET','Not found.',0,0),
(1169,'e9be7d6','2024-11-15 00:27:18','WEB','ERROR','/import/.env','GET','Not found.',0,0),
(1170,'e742268','2024-11-15 00:27:18','WEB','ERROR','/include/.env','GET','Not found.',0,0),
(1171,'3b184d8','2024-11-15 00:27:19','WEB','ERROR','/resources/.env','GET','Not found.',0,0),
(1172,'5b128ba','2024-11-15 01:27:46','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(1173,'6f38e06','2024-11-15 01:34:00','WEB','ERROR','/HNAP1/','POST','Not found.',0,0),
(1174,'69d2f35','2024-11-15 01:53:02','WEB','ERROR','/Q6fo','GET','Not found.',0,0),
(1175,'a55f254','2024-11-15 01:57:41','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1176,'d85c09c','2024-11-15 02:05:51','WEB','ERROR','/app/','GET','Not found.',0,0),
(1177,'783007e','2024-11-15 02:05:51','WEB','ERROR','/login/','GET','Not found.',0,0),
(1178,'49a9bfc','2024-11-15 02:31:59','WEB','ERROR','/.env','GET','Not found.',0,0),
(1179,'9bf20a6','2024-11-15 02:33:08','WEB','ERROR','/apply.cgi','POST','Not found.',0,0),
(1180,'fec39d0','2024-11-15 03:36:20','WEB','ERROR','/stalker_portal/server/tools/auth_simple.php','GET','Not found.',0,0),
(1181,'ba5d755','2024-11-15 04:24:11','WEB','ERROR','/actuator/gateway/routes','GET','Not found.',0,0),
(1182,'5578eb8','2024-11-15 04:48:50','WEB','ERROR','/owa/auth/errorFE.aspx','GET','Not found.',0,0),
(1183,'1d4c93d','2024-11-15 04:48:51','WEB','ERROR','/owa/auth/logon.aspx','GET','Not found.',0,0),
(1184,'1225213','2024-11-15 04:49:01','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(1185,'c4ba6b7','2024-11-15 05:06:44','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(1186,'d87d1b9','2024-11-15 05:36:36','WEB','ERROR','/c/','GET','Not found.',0,0),
(1187,'03bd7cc','2024-11-15 05:53:25','WEB','ERROR','/boaform/admin/formLogin','POST','Not found.',0,0),
(1188,'be2d62f','2024-11-15 06:17:02','WEB','ERROR','/.well-known/security.txt','GET','Not found.',0,0),
(1189,'2118adf','2024-11-15 06:43:30','WEB','ERROR','www.google.com:443','CONNECT','Not found.',0,0),
(1190,'ec54dd1','2024-11-15 07:04:32','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1191,'5e4f71f','2024-11-15 07:05:17','WEB','ERROR','/geoserver/web/','GET','Not found.',0,0),
(1192,'d515f82','2024-11-15 07:11:22','WEB','ERROR','api.ip.pn:443','CONNECT','Not found.',0,0),
(1193,'d173898','2024-11-15 07:40:40','WEB','ERROR','/cgi-bin/luci/;stok=/locale','GET','Not found.',0,0),
(1194,'7ce0950','2024-11-15 07:42:34','WEB','ERROR','/cgi-bin/index.cgi','GET','Not found.',0,0),
(1195,'79cc586','2024-11-15 08:01:22','WEB','ERROR','/cgi-bin/index.html','GET','Not found.',0,0),
(1196,'b590845','2024-11-15 08:40:19','WEB','ERROR','/.env','GET','Not found.',0,0),
(1197,'1b1ce19','2024-11-15 09:13:50','WEB','ERROR','/vpn/index.html','GET','Not found.',0,0),
(1198,'d803f56','2024-11-15 09:14:28','WEB','ERROR','/geoserver/web/','GET','Not found.',0,0),
(1199,'b2b3c97','2024-11-15 09:16:31','WEB','ERROR','/.git/config','GET','Not found.',0,0),
(1200,'69c5656','2024-11-15 09:19:28','WEB','ERROR','/.env','GET','Not found.',0,0),
(1201,'ad35c1c','2024-11-15 09:19:28','WEB','ERROR','/cms/.env','GET','Not found.',0,0),
(1202,'1fa8bd5','2024-11-15 09:19:29','WEB','ERROR','/console/.env','GET','Not found.',0,0),
(1203,'7679f9a','2024-11-15 09:19:29','WEB','ERROR','/pos/.env','GET','Not found.',0,0),
(1204,'e3f2ac4','2024-11-15 09:19:31','WEB','ERROR','/stg/.env','GET','Not found.',0,0),
(1205,'504566b','2024-11-15 09:19:31','WEB','ERROR','/~admin/.env','GET','Not found.',0,0),
(1206,'47ff113','2024-11-15 09:19:31','WEB','ERROR','/~dev/.env','GET','Not found.',0,0),
(1207,'0358c0a','2024-11-15 09:19:32','WEB','ERROR','/.git/.env','GET','Not found.',0,0),
(1208,'f966e21','2024-11-15 09:19:32','WEB','ERROR','/.twilio.env','GET','Not found.',0,0),
(1209,'2bc78f7','2024-11-15 09:19:33','WEB','ERROR','/ADMIN/.env','GET','Not found.',0,0),
(1210,'2513f5e','2024-11-15 09:19:33','WEB','ERROR','/ADMINISTRATOR/.env','GET','Not found.',0,0),
(1211,'831e9c7','2024-11-15 09:19:34','WEB','ERROR','/Admin/.env','GET','Not found.',0,0),
(1212,'e230247','2024-11-15 09:19:34','WEB','ERROR','/Administrator/.env','GET','Not found.',0,0),
(1213,'19b36e9','2024-11-15 09:19:36','WEB','ERROR','/Archipel/.env','GET','Not found.',0,0),
(1214,'8b348a3','2024-11-15 09:19:36','WEB','ERROR','/BACKUP/.env','GET','Not found.',0,0),
(1215,'6e5dc30','2024-11-15 09:19:36','WEB','ERROR','/BU/.env','GET','Not found.',0,0),
(1216,'b5a92aa','2024-11-15 09:19:37','WEB','ERROR','/CORE/.env','GET','Not found.',0,0),
(1217,'484d3ff','2024-11-15 09:19:37','WEB','ERROR','/Chai/.env','GET','Not found.',0,0),
(1218,'79d92c4','2024-11-15 09:19:38','WEB','ERROR','/Core/.env','GET','Not found.',0,0),
(1219,'439874b','2024-11-15 09:19:38','WEB','ERROR','/LARAVEL/.env','GET','Not found.',0,0),
(1220,'1f6a97d','2024-11-15 09:19:39','WEB','ERROR','/Laravel/.env','GET','Not found.',0,0),
(1221,'9504381','2024-11-15 09:19:39','WEB','ERROR','/Library/.env','GET','Not found.',0,0),
(1222,'fbeb549','2024-11-15 09:19:40','WEB','ERROR','/Local/.env','GET','Not found.',0,0),
(1223,'d45dea7','2024-11-15 09:19:40','WEB','ERROR','/PORTAL/.env','GET','Not found.',0,0),
(1224,'1617c5a','2024-11-15 09:19:41','WEB','ERROR','/Passportjs/.env','GET','Not found.',0,0),
(1225,'ed59bd5','2024-11-15 09:19:41','WEB','ERROR','/Platform/.env','GET','Not found.',0,0),
(1226,'1235032','2024-11-15 09:19:42','WEB','ERROR','/Prod/.env','GET','Not found.',0,0),
(1227,'1d1f4bb','2024-11-15 09:19:42','WEB','ERROR','/Production/.env','GET','Not found.',0,0),
(1228,'98e01a6','2024-11-15 09:19:43','WEB','ERROR','/Public/.env','GET','Not found.',0,0),
(1229,'8203a4d','2024-11-15 09:19:43','WEB','ERROR','/Site/.env','GET','Not found.',0,0),
(1230,'f851f4f','2024-11-15 09:19:43','WEB','ERROR','/Socketio/.env','GET','Not found.',0,0),
(1231,'03cbc88','2024-11-15 09:19:44','WEB','ERROR','/Stag/.env','GET','Not found.',0,0),
(1232,'1934574','2024-11-15 09:19:45','WEB','ERROR','/Staging/.env','GET','Not found.',0,0),
(1233,'cf581ab','2024-11-15 09:19:46','WEB','ERROR','/User_info/.env','GET','Not found.',0,0),
(1234,'933a5b7','2024-11-15 09:19:46','WEB','ERROR','/V1/.env','GET','Not found.',0,0),
(1235,'d488a15','2024-11-15 09:19:46','WEB','ERROR','/V2/.env','GET','Not found.',0,0),
(1236,'3a425c7','2024-11-15 09:19:47','WEB','ERROR','/Web/.env','GET','Not found.',0,0),
(1237,'13b1f1b','2024-11-15 09:19:47','WEB','ERROR','/_.env','GET','Not found.',0,0),
(1238,'5165e8f','2024-11-15 09:19:48','WEB','ERROR','/acme/.env','GET','Not found.',0,0),
(1239,'3934f40','2024-11-15 09:19:48','WEB','ERROR','/acp/.env','GET','Not found.',0,0),
(1240,'28cf747','2024-11-15 09:38:15','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(1241,'3160049','2024-11-15 09:44:52','WEB','ERROR','/.env','GET','Not found.',0,0),
(1242,'30a77dd','2024-11-15 09:44:53','WEB','ERROR','/default/.env','GET','Not found.',0,0),
(1243,'d7a39c3','2024-11-15 09:44:54','WEB','ERROR','/delivery/.env','GET','Not found.',0,0),
(1244,'f563b1e','2024-11-15 09:44:54','WEB','ERROR','/dependencies/.env','GET','Not found.',0,0),
(1245,'e2552c1','2024-11-15 09:44:55','WEB','ERROR','/deploy/.env','GET','Not found.',0,0),
(1246,'5598e91','2024-11-15 09:44:56','WEB','ERROR','/deployment/.env','GET','Not found.',0,0),
(1247,'c893ea4','2024-11-15 09:44:57','WEB','ERROR','/developerslv/.env','GET','Not found.',0,0),
(1248,'690d60d','2024-11-15 09:44:57','WEB','ERROR','/directories/.env','GET','Not found.',0,0),
(1249,'ca85e47','2024-11-15 09:44:58','WEB','ERROR','/django/.env','GET','Not found.',0,0),
(1250,'e7ce8e0','2024-11-15 09:44:59','WEB','ERROR','/downloads/.env','GET','Not found.',0,0),
(1251,'e15cb05','2024-11-15 09:45:00','WEB','ERROR','/nginx/.env','GET','Not found.',0,0),
(1252,'b4fc421','2024-11-15 09:45:01','WEB','ERROR','/sample.env','GET','Not found.',0,0),
(1253,'656710f','2024-11-15 09:45:02','WEB','ERROR','/search/.env','GET','Not found.',0,0),
(1254,'48a0bbb','2024-11-15 09:45:02','WEB','ERROR','/sources/.env','GET','Not found.',0,0),
(1255,'4815461','2024-11-15 09:45:03','WEB','ERROR','/twilio.env','GET','Not found.',0,0),
(1256,'e584d4b','2024-11-15 09:45:04','WEB','ERROR','/user/.env','GET','Method not allowed. Must be one of: PUT, DELETE',0,0),
(1257,'9281ce5','2024-11-15 09:45:05','WEB','ERROR','/phpinfo/.env','GET','Not found.',0,0),
(1258,'138e659','2024-11-15 09:45:06','WEB','ERROR','/pictures/.env','GET','Not found.',0,0),
(1259,'57a2810','2024-11-15 09:45:06','WEB','ERROR','/option/.env','GET','Not found.',0,0),
(1260,'5181276','2024-11-15 09:45:07','WEB','ERROR','/options/.env','GET','Not found.',0,0),
(1261,'51f2ff8','2024-11-15 09:45:08','WEB','ERROR','/portal/.env','GET','Not found.',0,0),
(1262,'8c4b387','2024-11-15 09:45:08','WEB','ERROR','/route/.env','GET','Not found.',0,0),
(1263,'c268861','2024-11-15 09:45:09','WEB','ERROR','/routes/.env','GET','Not found.',0,0),
(1264,'b428365','2024-11-15 09:45:10','WEB','ERROR','/office/.env','GET','Not found.',0,0),
(1265,'6670771','2024-11-15 09:45:11','WEB','ERROR','/wp-admin/.env','GET','Not found.',0,0),
(1266,'111eab3','2024-11-15 09:45:11','WEB','ERROR','/upfiles/.env','GET','Not found.',0,0),
(1267,'fe8c013','2024-11-15 09:45:12','WEB','ERROR','/view/.env','GET','Not found.',0,0),
(1268,'7dc3640','2024-11-15 09:45:13','WEB','ERROR','/views/.env','GET','Not found.',0,0),
(1269,'f7dadda','2024-11-15 09:45:14','WEB','ERROR','/security/.env','GET','Not found.',0,0),
(1270,'167fc53','2024-11-15 09:45:14','WEB','ERROR','/samples/.env','GET','Not found.',0,0),
(1271,'3acb4e5','2024-11-15 09:45:15','WEB','ERROR','/sandbox/.env','GET','Not found.',0,0),
(1272,'59fc61b','2024-11-15 09:45:16','WEB','ERROR','/results/.env','GET','Not found.',0,0),
(1273,'5dee3a3','2024-11-15 09:45:17','WEB','ERROR','/process/.env','GET','Not found.',0,0),
(1274,'7d7100f','2024-11-15 09:45:17','WEB','ERROR','/products/.env','GET','Not found.',0,0),
(1275,'4ffdc99','2024-11-15 09:45:18','WEB','ERROR','/project/.env','GET','Not found.',0,0),
(1276,'e576335','2024-11-15 09:45:19','WEB','ERROR','/import/.env','GET','Not found.',0,0),
(1277,'0432bf3','2024-11-15 09:45:20','WEB','ERROR','/include/.env','GET','Not found.',0,0),
(1278,'83f9bc4','2024-11-15 09:45:21','WEB','ERROR','/resources/.env','GET','Not found.',0,0),
(1279,'40e9c1e','2024-11-15 10:46:42','WEB','ERROR','/cgi-bin/luci/;stok=/locale','GET','Not found.',0,0),
(1280,'972ac55','2024-11-15 10:53:15','WEB','ERROR','/apply.cgi','POST','Not found.',0,0),
(1281,'e899831','2024-11-15 13:03:48','WEB','ERROR','/actuator/gateway/routes','GET','Not found.',0,0),
(1282,'f68915e','2024-11-15 13:07:14','WEB','ERROR','/cgi-bin/luci/;stok=/locale','GET','Not found.',0,0),
(1283,'cca2efb','2024-11-15 13:09:36','WEB','ERROR','/DlJb','GET','Not found.',0,0),
(1284,'40da260','2024-11-15 13:47:42','WEB','ERROR','/login.asp','GET','Not found.',0,0),
(1285,'3f217c5','2024-11-15 14:14:12','WEB','ERROR','/boaform/admin/formLogin','POST','Not found.',0,0),
(1286,'c92dd07','2024-11-15 14:16:07','WEB','ERROR','/ab2g','GET','Not found.',0,0),
(1287,'f8b0439','2024-11-15 14:16:07','WEB','ERROR','/ab2h','GET','Not found.',0,0),
(1288,'f54fea1','2024-11-15 14:16:07','WEB','ERROR','/alive.php','GET','Not found.',0,0),
(1289,'cacb04d','2024-11-15 14:16:12','WEB','ERROR','/t4','GET','Not found.',0,0),
(1290,'f1ea904','2024-11-15 14:16:12','WEB','ERROR','/favicon.ico','GET','Not found.',0,0),
(1291,'c5ac9d9','2024-11-15 14:16:13','WEB','ERROR','/teorema505','GET','Not found.',0,0),
(1292,'fd2d9da','2024-11-20 08:11:38','WEB','ERROR','/admin','GET','Method not allowed. Must be one of: PUT',0,0),
(1293,'52109d6','2024-11-20 08:41:37','WEB','ERROR','/boaform/admin/formLogin','POST','Not found.',0,0),
(1294,'ffbcf58','2024-11-20 08:50:08','WEB','ERROR','/.env','GET','Not found.',0,0),
(1295,'48a80f3','2024-11-20 08:51:24','WEB','ERROR','/favicon.ico','GET','Not found.',0,0);
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `mediaId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(15) NOT NULL,
  `duration` int(11) NOT NULL,
  `originalFileName` varchar(254) DEFAULT NULL,
  `storedAs` varchar(254) DEFAULT NULL,
  `md5` varchar(32) DEFAULT NULL,
  `fileSize` bigint(20) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `retired` tinyint(4) NOT NULL DEFAULT 0,
  `isEdited` tinyint(4) NOT NULL DEFAULT 0,
  `editedMediaId` int(11) DEFAULT NULL,
  `moduleSystemFile` tinyint(4) NOT NULL DEFAULT 0,
  `valid` tinyint(4) NOT NULL DEFAULT 1,
  `expires` int(11) DEFAULT NULL,
  `released` tinyint(4) NOT NULL DEFAULT 1,
  `apiRef` varchar(254) DEFAULT NULL,
  `createdDt` datetime DEFAULT NULL,
  `modifiedDt` datetime DEFAULT NULL,
  `enableStat` varchar(255) DEFAULT NULL,
  `folderId` int(11) NOT NULL DEFAULT 1,
  `permissionsFolderId` int(11) NOT NULL DEFAULT 1,
  `orientation` varchar(10) DEFAULT NULL,
  `width` mediumint(9) DEFAULT NULL,
  `height` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`mediaId`),
  KEY `userId` (`userId`),
  KEY `editedMediaId` (`editedMediaId`),
  KEY `folderId` (`folderId`),
  CONSTRAINT `media_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `media_ibfk_2` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES
(1,'jquery.min.js','module',0,'jquery.min.js','jquery.min.js','12b69d0ae6c6f0c42942ae6da2896e84',89475,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(2,'xibo-layout-scaler.js','module',0,'xibo-layout-scaler.js','xibo-layout-scaler.js','89c01844f224241b0f5ad7b7b2d1a856',6245,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(3,'xibo-interactive-control.min.js','module',0,'xibo-interactive-control.min.js','xibo-interactive-control.min.js','d2e448d751d8180c0ed4f70d583227f8',5270,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(4,'moment.js','module',0,'moment.js','moment.js','373de90432311a7e68d41b264fcb8d8e',369309,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(5,'xibo-text-render.js','module',0,'xibo-text-render.js','xibo-text-render.js','45bc3100d39425badc06a49aad1261b6',14559,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(6,'xibo-calendar-render.js','module',0,'xibo-calendar-render.js','xibo-calendar-render.js','566d2ee06c532cee1da036bd7ac8bb0e',41208,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:06',NULL,1,1,NULL,0,0),
(7,'Chart.min.js','module',0,'Chart.min.js','Chart.min.js','f6c8efa65711e0cbbc99ba72997ecd0e',159638,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:06',NULL,1,1,NULL,0,0),
(8,'jquery-cycle-2.1.6.min.js','module',0,'jquery-cycle-2.1.6.min.js','jquery-cycle-2.1.6.min.js','212480cf1292db459557814e2d7a571d',28876,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(9,'flipclock.min.js','module',0,'flipclock.min.js','flipclock.min.js','b9d7742384bdf912c51b6a1b5d674f7a',21107,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:06',NULL,1,1,NULL,0,0),
(10,'xibo-countdown-render.js','module',0,'xibo-countdown-render.js','xibo-countdown-render.js','9b001984b29274f0c347330311345e3d',5846,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:06',NULL,1,1,NULL,0,0),
(11,'jquery.marquee.min.js','module',0,'jquery.marquee.min.js','jquery.marquee.min.js','15f24e1fda583562dbfeabf2ee6a3d26',11795,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(12,'xibo-image-render.js','module',0,'xibo-image-render.js','xibo-image-render.js','6152d3e99b2c61bb3db365d108337483',2988,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(13,'xibo-dataset-render.js','module',0,'xibo-dataset-render.js','xibo-dataset-render.js','e04ad2bff2a293cc7c7e162a9ef1a4c8',1687,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-19 21:23:06',NULL,1,1,NULL,0,0),
(14,'Aileron Heavy Regular','font',0,'Aileron-Heavy.otf','14.otf','621ba5aaf66e52f3def0cf69807104b9',30060,1,0,0,NULL,0,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-13 21:04:02',NULL,1,1,NULL,0,0),
(15,'Aileron Regular','font',0,'Aileron-Regular.otf','15.otf','d321fa78bb7190a8ca7e14213ef63203',27644,1,0,0,NULL,0,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-13 21:04:02',NULL,1,1,NULL,0,0),
(16,'Dancing Script Regular','font',0,'DancingScript-Regular.ttf','16.ttf','86aadd0451f9e7dafa957e1e61dd2ed7',116580,1,0,0,NULL,0,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-13 21:04:02',NULL,1,1,NULL,0,0),
(17,'Railway Regular','font',0,'Railway.ttf','17.ttf','58963d3a57da7a70ac36d331416746c5',45884,1,0,0,NULL,0,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-13 21:04:02',NULL,1,1,NULL,0,0),
(18,'Linear Regular','font',0,'linear-by-braydon-fuller.otf','18.otf','afb33470c582079834acd8b9f979ce1a',19684,1,0,0,NULL,0,1,0,1,NULL,'2024-11-13 21:04:02','2024-11-13 21:04:02',NULL,1,1,NULL,0,0),
(19,'pdf.js','module',0,'pdf.js','pdf.js','bef617263de936f84ac22131cf2144af',767405,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:03','2024-11-19 21:23:07',NULL,1,1,NULL,0,0),
(20,'pdf.worker.js','module',0,'pdf.worker.js','pdf.worker.js','5c3e932eaab386051de8d60d9a9ae45c',1692977,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:03','2024-11-19 21:23:07',NULL,1,1,NULL,0,0),
(21,'xibo-webpage-render.js','module',0,'xibo-webpage-render.js','xibo-webpage-render.js','d59f5fc84ef7747f27baddc07fe81487',4832,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:03','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(22,'xibo-worldclock-render.js','module',0,'xibo-worldclock-render.js','xibo-worldclock-render.js','83b3026fbc8ebd81d281bbd64b903e19',4019,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:03','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(23,'moment-timezone.js','module',0,'moment-timezone.js','moment-timezone.js','fdc029099ff760ace501b4b92799ac74',185127,1,0,0,0,1,1,0,1,NULL,'2024-11-13 21:04:03','2024-11-19 21:23:08',NULL,1,1,NULL,0,0),
(24,'MatLab','image',10,'MatLab.png','24.png','e3d606b6fab886d238a1113d36078327',117517,1,0,0,NULL,0,1,NULL,1,NULL,'2024-11-13 17:24:43','2024-11-13 17:24:43','Inherit',3,1,'landscape',1024,768),
(25,'Office265','image',10,'Office.png','25.png','52268e1c505867009f02c2cea0e92e5e',96940,1,0,0,NULL,0,1,NULL,1,NULL,'2024-11-13 17:24:43','2024-11-13 17:24:43','Inherit',3,1,'landscape',1024,768),
(26,'SMCS-Deck3','image',10,'SMCS_Deck.003.jpeg','26.jpeg','e7ff74c3d3a105d5f4a2879471d9f32c',141576,1,0,0,NULL,0,1,NULL,1,NULL,'2024-11-13 17:25:30','2024-11-13 17:25:30','Inherit',4,1,'landscape',720,540),
(27,'SCMS-Deck1','image',10,'SMCS_Deck.013.jpeg','27.jpeg','a1241618c98364ec41b51d443fed287f',321886,1,0,0,NULL,0,1,NULL,1,NULL,'2024-11-13 17:25:30','2024-11-13 17:25:30','Inherit',4,1,'landscape',720,540),
(28,'SMCS-Deck2','image',10,'SMCS_Deck.014.jpeg','28.jpeg','f8aef1fb4f6fb60c7387cefbdf85bcd6',275432,1,0,0,NULL,0,1,NULL,1,NULL,'2024-11-13 17:25:30','2024-11-13 17:25:30','Inherit',4,1,'landscape',720,540),
(29,'SMCS-Deck4','image',10,'SMCS_Deck.001.jpeg','29.jpeg','393ed41bc9b98bcf24435c46c60b5ea7',169411,1,0,0,NULL,0,1,NULL,1,NULL,'2024-11-13 17:25:30','2024-11-13 17:25:30','Inherit',4,1,'landscape',720,540),
(31,'SMCSS-Logo','image',10,'smcss-logo.png','31.png','386cfd8c774accc467bc83f2a15c0d64',35785,1,0,0,NULL,0,1,NULL,1,NULL,'2024-11-13 17:47:45','2024-11-13 17:47:45','Inherit',4,1,'landscape',500,500),
(32,'SMCSS-Signup','image',10,'SMCSS-Signup.png','32.png','7b6ffe6e39034230d2baaaa5c8e267c0',933415,1,0,0,NULL,0,1,NULL,2,NULL,'2024-11-13 17:48:11','2024-11-13 17:48:11','Inherit',4,1,'portrait',4419,6250),
(33,'Background','image',10,'bg_smcs.png','33.png','e64dde9e067ab2b550d99587990b8cf1',1539828,1,0,0,NULL,0,1,NULL,1,NULL,'2024-11-13 18:10:13','2024-11-13 18:10:13','Inherit',1,1,'landscape',1024,1024);
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_board`
--

DROP TABLE IF EXISTS `menu_board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_board` (
  `menuId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(254) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `modifiedDt` int(11) NOT NULL DEFAULT 0,
  `folderId` int(11) NOT NULL DEFAULT 1,
  `permissionsFolderId` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`menuId`),
  KEY `folderId` (`folderId`),
  KEY `userId` (`userId`),
  CONSTRAINT `menu_board_ibfk_1` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`),
  CONSTRAINT `menu_board_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_board`
--

LOCK TABLES `menu_board` WRITE;
/*!40000 ALTER TABLE `menu_board` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_category`
--

DROP TABLE IF EXISTS `menu_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_category` (
  `menuCategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `menuId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mediaId` int(11) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`menuCategoryId`),
  KEY `menuId` (`menuId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `menu_category_ibfk_1` FOREIGN KEY (`menuId`) REFERENCES `menu_board` (`menuId`),
  CONSTRAINT `menu_category_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_category`
--

LOCK TABLES `menu_category` WRITE;
/*!40000 ALTER TABLE `menu_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_product`
--

DROP TABLE IF EXISTS `menu_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_product` (
  `menuProductId` int(11) NOT NULL AUTO_INCREMENT,
  `menuCategoryId` int(11) NOT NULL,
  `menuId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(254) DEFAULT NULL,
  `mediaId` int(11) DEFAULT NULL,
  `availability` tinyint(4) NOT NULL,
  `allergyInfo` varchar(254) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`menuProductId`),
  KEY `menuId` (`menuId`),
  KEY `menuCategoryId` (`menuCategoryId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `menu_product_ibfk_1` FOREIGN KEY (`menuId`) REFERENCES `menu_board` (`menuId`),
  CONSTRAINT `menu_product_ibfk_2` FOREIGN KEY (`menuCategoryId`) REFERENCES `menu_category` (`menuCategoryId`),
  CONSTRAINT `menu_product_ibfk_3` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_product`
--

LOCK TABLES `menu_product` WRITE;
/*!40000 ALTER TABLE `menu_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_product_options`
--

DROP TABLE IF EXISTS `menu_product_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_product_options` (
  `menuProductId` int(11) NOT NULL,
  `option` varchar(254) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`menuProductId`,`option`),
  CONSTRAINT `menu_product_options_ibfk_1` FOREIGN KEY (`menuProductId`) REFERENCES `menu_product` (`menuProductId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_product_options`
--

LOCK TABLES `menu_product_options` WRITE;
/*!40000 ALTER TABLE `menu_product_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_product_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `module` (
  `moduleId` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `enabled` tinyint(4) NOT NULL DEFAULT 0,
  `regionSpecific` tinyint(4) NOT NULL DEFAULT 1,
  `description` varchar(254) DEFAULT NULL,
  `schemaVersion` int(11) NOT NULL DEFAULT 1,
  `validExtensions` varchar(254) DEFAULT NULL,
  `previewEnabled` tinyint(4) NOT NULL DEFAULT 1,
  `assignable` tinyint(4) NOT NULL DEFAULT 1,
  `render_as` varchar(10) DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `viewPath` varchar(254) NOT NULL DEFAULT '../modules',
  `class` varchar(254) NOT NULL,
  `defaultDuration` int(11) NOT NULL,
  `installName` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`moduleId`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module`
--

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
INSERT INTO `module` VALUES
(1,'Image','Image',1,0,'Upload Image files to assign to Layouts',1,'jpg,jpeg,png,bmp,gif',1,1,NULL,NULL,'../modules','Xibo\\Widget\\Image',10,NULL),
(2,'Video','Video',1,0,'Upload Video files to assign to Layouts',1,'wmv,avi,mpg,mpeg,webm,mp4,m4v',1,1,NULL,NULL,'../modules','Xibo\\Widget\\Video',0,NULL),
(4,'PowerPoint','PowerPoint',1,0,'Upload a PowerPoint file to assign to Layouts',1,'ppt,pps,pptx',1,1,NULL,NULL,'../modules','Xibo\\Widget\\PowerPoint',10,NULL),
(5,'Webpage','Webpage',1,1,'Embed a Webpage',1,NULL,1,1,NULL,NULL,'../modules','Xibo\\Widget\\WebPage',60,NULL),
(6,'Ticker','Ticker',1,1,'Display dynamic feed content',1,NULL,1,1,NULL,'[]','../modules','Xibo\\Widget\\Ticker',5,NULL),
(7,'Text','Text',1,1,'Add Text directly to a Layout',1,NULL,1,1,NULL,NULL,'../modules','Xibo\\Widget\\Text',5,NULL),
(8,'Embedded','Embedded',1,1,'Embed HTML and JavaScript',1,NULL,1,1,NULL,NULL,'../modules','Xibo\\Widget\\Embedded',60,NULL),
(11,'datasetview','DataSet View',1,1,'Organise and display DataSet data in a tabular format',1,NULL,1,1,NULL,NULL,'../modules','Xibo\\Widget\\DataSetView',60,NULL),
(12,'shellcommand','Shell Command',1,1,'Instruct a Display to execute a command using the operating system shell',1,NULL,1,1,NULL,NULL,'../modules','Xibo\\Widget\\ShellCommand',3,NULL),
(13,'localvideo','Local Video',1,1,'Display Video that only exists on the Display by providing a local file path or URL',1,NULL,0,1,NULL,NULL,'../modules','Xibo\\Widget\\LocalVideo',60,NULL),
(14,'genericfile','Generic File',1,0,'A generic file to be stored in the library',1,',js,html,htm',0,0,NULL,NULL,'../modules','Xibo\\Widget\\GenericFile',10,NULL),
(15,'clock','Clock',1,1,'Assign a type of Clock or a Countdown',1,NULL,1,1,'html','[]','../modules','Xibo\\Widget\\Clock',5,NULL),
(16,'font','Font',1,0,'A font to use in other Modules',1,'ttf,otf,eot,svg,woff',0,0,NULL,NULL,'../modules','Xibo\\Widget\\Font',10,NULL),
(17,'audio','Audio',1,0,'Upload Audio files to assign to Layouts',1,'mp3,wav',0,1,NULL,NULL,'../modules','Xibo\\Widget\\Audio',0,NULL),
(18,'pdf','PDF',1,0,'Upload PDF files to assign to Layouts',1,'pdf',1,1,'html',NULL,'../modules','Xibo\\Widget\\Pdf',60,NULL),
(19,'notificationview','Notification',1,1,'Display messages created in the Notification Drawer of the CMS',1,NULL,1,1,'html',NULL,'../modules','Xibo\\Widget\\NotificationView',10,NULL),
(20,'subplaylist','Sub-Playlist',1,1,'Embed a Sub-Playlist',1,NULL,1,1,'native',NULL,'../modules','Xibo\\Widget\\SubPlaylist',10,NULL),
(21,'datasetticker','DataSet Ticker',1,1,'Ticker with a DataSet providing the items',1,NULL,1,1,'html',NULL,'../modules','Xibo\\Widget\\DataSetTicker',10,NULL),
(22,'playersoftware','Player Software',1,0,'A module for managing Player Versions',1,'apk,ipk,wgt',0,0,NULL,NULL,'../modules','Xibo\\Widget\\PlayerSoftware',10,NULL),
(23,'htmlpackage','HTML Package',1,0,'Upload a complete package to distribute to Players',1,'htz',0,1,'native',NULL,'../modules','Xibo\\Widget\\HtmlPackage',60,NULL),
(24,'videoin','Video In',1,1,'Display input from an external source',1,NULL,0,1,'native',NULL,'../modules','Xibo\\Widget\\VideoIn',60,NULL),
(25,'hls','HLS',1,1,'Display live streamed content',1,NULL,1,1,'html',NULL,'../modules','Xibo\\Widget\\Hls',60,NULL),
(26,'calendaradvanced','Calendar',1,1,'Display events from an iCAL feed',1,NULL,1,1,'html',NULL,'../modules','Xibo\\Widget\\Calendar',60,'calendaradvanced'),
(27,'chart','Chart',1,1,'Display information held in a DataSet as a type of Chart',1,NULL,1,1,'html',NULL,'../modules','Xibo\\Widget\\Chart',240,NULL),
(28,'savedreport','Saved Reports',1,0,'A saved report to be stored in the library',1,'json',0,0,NULL,NULL,'../modules','Xibo\\Widget\\SavedReport',10,'savedreport'),
(29,'spacer','Spacer',1,1,'Make a Region empty for a specified duration',1,NULL,0,1,'html',NULL,'../modules','Xibo\\Widget\\Spacer',60,'spacer'),
(30,'countdown','Countdown',1,1,'Countdown Module',1,NULL,1,1,'html',NULL,'../modules','Xibo\\Widget\\Countdown',60,'countdown'),
(31,'menuboard','Menu Board',0,1,'Module for displaying Menu Boards',1,'',1,1,'html',NULL,'../modules','Xibo\\Widget\\MenuBoard',60,'menuboard'),
(32,'calendar','Agenda',1,1,'A module for displaying an agenda based on an iCal feed',1,'',1,1,'html',NULL,'../modules','Xibo\\Widget\\Agenda',60,'calendar'),
(33,'worldclock','World Clock',1,1,'WorldClock Module',1,NULL,1,1,'html',NULL,'../modules','Xibo\\Widget\\WorldClock',60,'worldclock');
/*!40000 ALTER TABLE `module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification` (
  `notificationId` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `createDt` int(11) NOT NULL,
  `releaseDt` int(11) NOT NULL,
  `isEmail` tinyint(4) NOT NULL,
  `isInterrupt` tinyint(4) NOT NULL,
  `isSystem` tinyint(4) NOT NULL,
  `userId` int(11) NOT NULL,
  `filename` varchar(1000) DEFAULT NULL,
  `nonusers` varchar(1000) DEFAULT NULL,
  `originalFileName` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`notificationId`),
  KEY `userId` (`userId`),
  CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification`
--

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_client_redirect_uris`
--

DROP TABLE IF EXISTS `oauth_client_redirect_uris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_client_redirect_uris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(254) NOT NULL,
  `redirect_uri` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_client_redirect_uris`
--

LOCK TABLES `oauth_client_redirect_uris` WRITE;
/*!40000 ALTER TABLE `oauth_client_redirect_uris` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_client_redirect_uris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_client_scopes`
--

DROP TABLE IF EXISTS `oauth_client_scopes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_client_scopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientId` varchar(254) NOT NULL,
  `scopeId` varchar(254) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clientId` (`clientId`,`scopeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_client_scopes`
--

LOCK TABLES `oauth_client_scopes` WRITE;
/*!40000 ALTER TABLE `oauth_client_scopes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_client_scopes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` varchar(254) NOT NULL,
  `secret` varchar(254) NOT NULL,
  `name` varchar(254) NOT NULL,
  `userId` int(11) NOT NULL,
  `authCode` tinyint(4) NOT NULL,
  `clientCredentials` tinyint(4) NOT NULL,
  `isConfidential` tinyint(4) NOT NULL DEFAULT 1,
  `description` varchar(254) DEFAULT NULL,
  `logo` varchar(254) DEFAULT NULL,
  `coverImage` varchar(254) DEFAULT NULL,
  `companyName` varchar(254) DEFAULT NULL,
  `termsUrl` varchar(254) DEFAULT NULL,
  `privacyUrl` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `oauth_clients_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_lkclientuser`
--

DROP TABLE IF EXISTS `oauth_lkclientuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_lkclientuser` (
  `lkClientUserId` int(11) NOT NULL AUTO_INCREMENT,
  `clientId` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `approvedDate` datetime DEFAULT NULL,
  `approvedIp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`lkClientUserId`),
  UNIQUE KEY `clientId` (`clientId`,`userId`),
  KEY `userId` (`userId`),
  CONSTRAINT `oauth_lkclientuser_ibfk_1` FOREIGN KEY (`clientId`) REFERENCES `oauth_clients` (`id`),
  CONSTRAINT `oauth_lkclientuser_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_lkclientuser`
--

LOCK TABLES `oauth_lkclientuser` WRITE;
/*!40000 ALTER TABLE `oauth_lkclientuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_lkclientuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_scope_routes`
--

DROP TABLE IF EXISTS `oauth_scope_routes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_scope_routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scopeId` varchar(254) NOT NULL,
  `route` varchar(1000) NOT NULL,
  `method` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_scope_routes`
--

LOCK TABLES `oauth_scope_routes` WRITE;
/*!40000 ALTER TABLE `oauth_scope_routes` DISABLE KEYS */;
INSERT INTO `oauth_scope_routes` VALUES
(1,'mcaas','/','GET'),
(2,'mcaas','/library/download/{id}[/{type}]','GET'),
(3,'mcaas','/library/mcaas/{id}','POST'),
(4,'design','/library','GET,POST,PUT'),
(5,'design','/layout','GET,POST,PUT'),
(6,'design','/playlist','GET,POST,PUT'),
(7,'designDelete','/library','DELETE'),
(8,'designDelete','/layout','DELETE'),
(9,'designDelete','/playlist','DELETE'),
(10,'displays','/display','GET,POST,PUT'),
(11,'displays','/displaygroup','GET,POST,PUT'),
(12,'displaysDelete','/display/{id}','DELETE'),
(13,'displaysDelete','/displaygroup/{id}','DELETE'),
(14,'schedule','/schedule','GET,POST,PUT'),
(15,'scheduleDelete','/schedule','DELETE'),
(16,'datasets','/dataset','GET,POST,PUT'),
(17,'datasetsDelete','/dataset','DELETE'),
(18,'design','/resolution','GET,POST,PUT'),
(19,'designDelete','/resolution','DELETE');
/*!40000 ALTER TABLE `oauth_scope_routes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_scopes`
--

DROP TABLE IF EXISTS `oauth_scopes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_scopes` (
  `id` varchar(254) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `useRegex` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_scopes`
--

LOCK TABLES `oauth_scopes` WRITE;
/*!40000 ALTER TABLE `oauth_scopes` DISABLE KEYS */;
INSERT INTO `oauth_scopes` VALUES
('all','Full account access',0),
('datasets','Access to DataSets',1),
('datasetsDelete','Access to deleting DataSets',1),
('design','Access to Library, Layouts, Playlists, Widgets and Resolutions',1),
('designDelete','Access to deleting content from Library, Layouts, Playlists, Widgets and Resolutions',1),
('displays','Access to Displays and Display Groups',1),
('displaysDelete','Access to deleting Displays and Display Groups',0),
('mcaas','Media Conversion as a Service',0),
('schedule','Access to Scheduling',1),
('scheduleDelete','Access to deleting Scheduled Events',1);
/*!40000 ALTER TABLE `oauth_scopes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission` (
  `permissionId` int(11) NOT NULL AUTO_INCREMENT,
  `entityId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `objectId` int(11) NOT NULL,
  `view` tinyint(4) NOT NULL,
  `edit` tinyint(4) NOT NULL,
  `delete` tinyint(4) NOT NULL,
  PRIMARY KEY (`permissionId`),
  KEY `permission_ibfk_1` (`groupId`),
  KEY `permission_ibfk_2` (`entityId`),
  KEY `permission_objectId_index` (`objectId`),
  CONSTRAINT `permission_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `group` (`groupId`),
  CONSTRAINT `permission_ibfk_2` FOREIGN KEY (`entityId`) REFERENCES `permissionentity` (`entityId`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission`
--

LOCK TABLES `permission` WRITE;
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` VALUES
(12,11,2,1,1,0,0),
(13,11,2,2,1,0,0),
(18,3,2,14,1,0,0),
(19,3,2,15,1,0,0),
(20,3,2,16,1,0,0),
(21,3,2,17,1,0,0),
(22,3,2,18,1,0,0);
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissionentity`
--

DROP TABLE IF EXISTS `permissionentity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissionentity` (
  `entityId` int(11) NOT NULL AUTO_INCREMENT,
  `entity` varchar(50) NOT NULL,
  PRIMARY KEY (`entityId`),
  UNIQUE KEY `entity` (`entity`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissionentity`
--

LOCK TABLES `permissionentity` WRITE;
/*!40000 ALTER TABLE `permissionentity` DISABLE KEYS */;
INSERT INTO `permissionentity` VALUES
(4,'Xibo\\Entity\\Campaign'),
(12,'Xibo\\Entity\\Command'),
(9,'Xibo\\Entity\\DataSet'),
(11,'Xibo\\Entity\\DayPart'),
(2,'Xibo\\Entity\\DisplayGroup'),
(13,'Xibo\\Entity\\Folder'),
(3,'Xibo\\Entity\\Media'),
(14,'Xibo\\Entity\\MenuBoard'),
(10,'Xibo\\Entity\\Notification'),
(8,'Xibo\\Entity\\Playlist'),
(7,'Xibo\\Entity\\Region'),
(5,'Xibo\\Entity\\Widget');
/*!40000 ALTER TABLE `permissionentity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phinxlog`
--

LOCK TABLES `phinxlog` WRITE;
/*!40000 ALTER TABLE `phinxlog` DISABLE KEYS */;
INSERT INTO `phinxlog` VALUES
(20180130073838,'InstallMigration','2024-11-13 21:03:06','2024-11-13 21:03:07',0),
(20180131113100,'OldUpgradeStep85Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131113853,'OldUpgradeStep86Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131113941,'OldUpgradeStep87Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131113948,'OldUpgradeStep88Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131113952,'OldUpgradeStep92Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131113957,'OldUpgradeStep120Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114002,'OldUpgradeStep121Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114007,'OldUpgradeStep122Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114013,'OldUpgradeStep123Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114017,'OldUpgradeStep124Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114021,'OldUpgradeStep125Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114025,'OldUpgradeStep126Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114030,'OldUpgradeStep127Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114050,'OldUpgradeStep128Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114058,'OldUpgradeStep129Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114103,'OldUpgradeStep130Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114107,'OldUpgradeStep131Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114110,'OldUpgradeStep132Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114114,'OldUpgradeStep133Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114118,'OldUpgradeStep134Migration','2024-11-13 21:03:07','2024-11-13 21:03:07',0),
(20180131114123,'OldUpgradeStep135Migration','2024-11-13 21:03:07','2024-11-13 21:03:08',0),
(20180131122645,'OneRegionPerPlaylistMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180131123038,'PlaylistTagsMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180131123248,'WidgetFromToDtMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180212143336,'DaypartSystemEntriesAsRecords','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180213173846,'MailFromNameSettingMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180219141257,'DisplayGroupClosureIndexToNonUnique','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180223180534,'DataSetColumnFilterAndSortOptionsMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180302182421,'WidgetCreatedAndModifiedDtMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180313085749,'MediaTableEditedIdIndexMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180320154652,'PlaylistAddDynamicFilterMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180327153325,'RemoveUserLoggedInMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180514114415,'FixCaseOnHelpTextFieldMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180515123835,'LayoutPublishDraftMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180529065816,'DataSetTruncateFixMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180529073531,'DisplayAsVncLinkMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180621134013,'AddWidgetSyncTaskMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180621134250,'EventLayoutPermissionSettingMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180906115552,'AddForeignKeysToTagsMigration','2024-11-13 21:03:08','2024-11-13 21:03:08',0),
(20180906115606,'AddForeignKeysToPermissionsMigration','2024-11-13 21:03:08','2024-11-13 21:03:09',0),
(20180906115712,'AddForeignKeysToWidgetMediaMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20180906131643,'ForgottenPasswordReminderMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20180906131716,'DataSetRssMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20181011160130,'SimpleSettingsMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20181113173310,'RemoveFinanceModuleMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20181113180337,'SplitTickerModuleMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20181126113231,'Release1812Migration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20181210092443,'RemoveImageUriModuleMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20181212114400,'CreatePlayerVersionsTableMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20181217135044,'EventSyncMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190121092556,'PlayerUpgradeAndOverrideConfigMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190125170130,'PlayerSoftwareVersionFieldMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190129103831,'AddLinuxDisplayProfileMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190212112534,'AddProofOfPlayStatsDurationAndCountMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190212115432,'AddDefaultTransitionDurationSettingMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190213160914,'AddGlobalStatSettingMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190213162212,'AddHorizontalMenuSettingMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190214102508,'AddLayoutEnableStat','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190214102516,'AddMediaEnableStat','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190220165703,'AddScheduleRecurrenceMonthlyRepeatsOnMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190227101705,'MakeDisplayLicenseColumnUniqueMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190228120603,'AddDynamicCriteriaTagsMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190301115046,'AdjustGenericfileValidExtensionsMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190315134628,'AddBandwidthLimitColumnToDisplaygroupMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190322162052,'AddPublishedDateColumnMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190326163016,'CreateLayoutHistoryTableMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190328111718,'AddCampaignStatMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190401150256,'AddScheduleNowPageMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190509101525,'CreateReportScheduleTableMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190509102648,'CreateSavedReportTableMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190509113001,'AddReportPageMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190510140126,'TwoFactorAuthMigration','2024-11-13 21:03:09','2024-11-13 21:03:09',0),
(20190514134430,'NullableTextFieldsMigration','2024-11-13 21:03:09','2024-11-13 21:03:10',0),
(20190515094133,'AddHtmlDatatypeMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190515105624,'InstallAdditionalStandardModulesMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190517080033,'AddForeignKeysToLktagTablesMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190521092700,'AddReportScheduleTaskMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190521092930,'AddPreviousRunDateReportScheduleMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190521102635,'PlaylistDurationUpdateAtTimestamp','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190603083836,'ChangeStatTableStartEndColumnMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190610150331,'TagsWithValuesMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190611145607,'RemoveOldVersionTableMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190612140955,'DisplayTableDatabaseSchemaAdjustmentsMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190620112611,'MoveTidyStatsToStatsArchiveTaskMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190620142655,'AddPlaylistEnableStatMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190626091331,'WidgetHistoryMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190626110359,'CreateStatTableMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190628083649,'AddStatsMigrationTaskMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190710213414,'AddIsActiveReportScheduleMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190717101342,'NullableCommandValidationStringMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190719074601,'MissingDefaultValueMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190725115532,'AddScheduleReminderTaskMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190801102042,'DisplayProfileCommandLinkFixMigration','2024-11-13 21:03:10','2024-11-13 21:03:10',0),
(20190801141737,'DatasetAddCustomHeadersColumnMigration','2024-11-13 21:03:10','2024-11-13 21:03:11',0),
(20190801142302,'AddDoohUserTypeMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190802145636,'CreateScheduleReminderTableMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190806144729,'AddShowContentFromMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190823081448,'AddImageProcessingTaskMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190828123735,'AddDefaultSettingResizeLimitResizeThresholdMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190903083314,'AddGlobalSettingForCascadePermissionsMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190905084201,'AddSettingForDefaultTransitionTypeMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190905084642,'AddSettingForAutoLayoutPublishMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190910132520,'DisplayMoveCmsMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190917093141,'InterruptLayoutMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190918090608,'AddDefaultSettingQuickChartMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190919154513,'AddNotificationAttachmentFilenameNonUsersMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190926135518,'AddSettingForTransitionAutoApplyToLayoutMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20190926140809,'InstallSavedReportsAndSpacerModulesMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20191001092651,'AddNotificationOriginalFilenameMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20191022101141,'AddCommandEntityToPermissionEntityMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20191024152519,'AddScheduleExclusionsTableMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20191122114104,'FixDuplicateModuleFilesMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20191126103120,'GeoScheduleMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20191126141140,'RemoteDataSetCsvSourceMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20191205180116,'AddPlaylistDashboardPageUserMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200107082625,'DisplayAddResolutionMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200115115935,'AddReportScheduleMessageMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200122143630,'AddReleasedRequiredFileMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200122191232,'AddCommercialLicenceColumnMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200129104944,'AddEngagementsStatsMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200130165443,'CountdownModuleAddMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200311110512,'AddIsDrawerColumnMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200311110535,'CreateActionTableMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200319093235,'ChangeInterruptLayoutMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200401121544,'AddSystemUserSettingMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200407143200,'AddCodeColumnToLayoutMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200422101006,'AddDataSetRowLimitMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200427085958,'AddReportScheduleStartEndMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200530103029,'DisplayRemoteLinksMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200604103141,'CommandImprovementsMigration','2024-11-13 21:03:11','2024-11-13 21:03:11',0),
(20200612141755,'OauthUpgradeMigration','2024-11-13 21:03:11','2024-11-13 21:03:12',0),
(20200720092246,'AddSavedReportSchemaVersionMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20200916134817,'RemoveOldScreenshotsMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20200917140227,'DisplayGroupCreatedModifiedDates','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20201007080829,'AddFoldersMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20201007093511,'FeaturesMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20201025153753,'RemoveOldPermissionSettingsMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20210105105646,'AddMcaasScopeAndRouteMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20210113134628,'EnableUserSharingFeatureOnUsersGroupMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20210128143602,'MenuBoardsMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20210201150259,'UserOnboardingMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20210305131937,'FixDuplicateTagsMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20210407111756,'RemoveReportNameColumnFromSavedReportMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20210421142731,'RemoveMaintenanceKeyMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20210601104441,'AddUserAgentToDataSetMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20210603114231,'NewCalendarTypeMigration','2024-11-13 21:03:12','2024-11-13 21:03:12',0),
(20210608142925,'AddOrientationToResolutionAndMediaMigration','2024-11-13 21:03:12','2024-11-13 21:03:13',0),
(20210611122809,'AddPurgeListTableMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20210806122814,'AddNumberOfItemsToPlaylistMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20210813094723,'AddCycleBasedPlaybackOptionToCampaignMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20210817105702,'AddCustomSeparatorToDatasetMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20210820100520,'AddActionEventTypeMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20210901134913,'AddIpAddressColumnToAuditLogMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20210901150615,'AddTooltipAndIsRequiredColumnsMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20211109130951,'FixOrphanedDisplayGroupsMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20211109134929,'FixPlaylistManagerUserGroupMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20211109141925,'DatasetAddOptionToTruncateOnNoNewDataMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20211116153103,'ConnectorsMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20211231141457,'AddMoreTagFilteringOptionsMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20211231153355,'AddIsCustomToDisplayProfileMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220117150212,'AddLayoutExchangeConnectorMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220119124436,'AddCodeColumnToMenuBoardsMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220131151346,'AddDateFormatToDataSetColumnMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220201163832,'ReportLogoMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220203145712,'ApplicationsTweaksMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220207160047,'TidyCalendarModuleTypes','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220224130122,'AddResolutionRoutesToDesignScopeMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220225105237,'MergeWeatherWidgets','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220302152503,'LayoutRemoveOrientationMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220307134554,'AddWorldClockMigration','2024-11-13 21:03:13','2024-11-13 21:03:13',0),
(20220906085300,'ThreeTwoZeroMigration','2024-11-13 21:03:13','2024-11-13 21:03:14',0),
(20220907135653,'AddLogicalOperatorNameMigration','2024-11-13 21:03:14','2024-11-13 21:03:14',0),
(20220907143500,'UserHomeFolderMigration','2024-11-13 21:03:14','2024-11-13 21:03:14',0),
(20221013103000,'AdvertisingConnectorsMigration','2024-11-13 21:03:14','2024-11-13 21:03:14',0),
(20221024082400,'AdCampaignMigration','2024-11-13 21:03:14','2024-11-13 21:03:14',0),
(20221101090337,'CreateDisplayTypeTableMigration','2024-11-13 21:03:14','2024-11-13 21:03:14',0),
(20221101130018,'AddDisplayMetaDataMigration','2024-11-13 21:03:14','2024-11-13 21:03:15',0),
(20221104095722,'CreateDisplayLocationTypeTableMigration','2024-11-13 21:03:15','2024-11-13 21:03:15',0);
/*!40000 ALTER TABLE `phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_faults`
--

DROP TABLE IF EXISTS `player_faults`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player_faults` (
  `playerFaultId` int(11) NOT NULL AUTO_INCREMENT,
  `displayId` int(11) NOT NULL,
  `incidentDt` datetime DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `scheduleId` int(11) DEFAULT NULL,
  `layoutId` int(11) DEFAULT NULL,
  `regionId` int(11) DEFAULT NULL,
  `mediaId` int(11) DEFAULT NULL,
  `widgetId` int(11) DEFAULT NULL,
  PRIMARY KEY (`playerFaultId`),
  KEY `displayId` (`displayId`),
  CONSTRAINT `player_faults_ibfk_1` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player_faults`
--

LOCK TABLES `player_faults` WRITE;
/*!40000 ALTER TABLE `player_faults` DISABLE KEYS */;
/*!40000 ALTER TABLE `player_faults` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_software`
--

DROP TABLE IF EXISTS `player_software`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player_software` (
  `versionId` int(11) NOT NULL AUTO_INCREMENT,
  `player_type` varchar(20) DEFAULT NULL,
  `player_version` varchar(15) DEFAULT NULL,
  `player_code` smallint(6) DEFAULT NULL,
  `mediaId` int(11) NOT NULL,
  `playerShowVersion` varchar(50) NOT NULL,
  PRIMARY KEY (`versionId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `player_software_ibfk_1` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player_software`
--

LOCK TABLES `player_software` WRITE;
/*!40000 ALTER TABLE `player_software` DISABLE KEYS */;
/*!40000 ALTER TABLE `player_software` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `playlist` (
  `playlistId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `regionId` int(11) DEFAULT NULL,
  `createdDt` datetime DEFAULT NULL,
  `modifiedDt` datetime DEFAULT NULL,
  `duration` int(11) NOT NULL DEFAULT 0,
  `requiresDurationUpdate` int(11) NOT NULL DEFAULT 0,
  `isDynamic` tinyint(4) NOT NULL DEFAULT 0,
  `filterMediaName` text DEFAULT NULL,
  `filterMediaNameLogicalOperator` varchar(3) NOT NULL DEFAULT 'OR',
  `filterMediaTags` text DEFAULT NULL,
  `filterExactTags` tinyint(4) NOT NULL DEFAULT 0,
  `filterMediaTagsLogicalOperator` varchar(3) NOT NULL DEFAULT 'OR',
  `maxNumberOfItems` int(11) DEFAULT NULL,
  `enableStat` varchar(255) DEFAULT NULL,
  `folderId` int(11) NOT NULL DEFAULT 1,
  `permissionsFolderId` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`playlistId`),
  KEY `ownerId` (`ownerId`),
  KEY `folderId` (`folderId`),
  CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`),
  CONSTRAINT `playlist_ibfk_2` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist`
--

LOCK TABLES `playlist` WRITE;
/*!40000 ALTER TABLE `playlist` DISABLE KEYS */;
INSERT INTO `playlist` VALUES
(7,'SMCS-Deck',1,NULL,'2024-11-13 17:26:30','2024-11-13 17:49:56',10,0,0,NULL,'OR',NULL,0,'OR',0,'Inherit',1,1),
(11,'SMCS - main-0',1,10,'2024-11-13 17:50:04','2024-11-13 17:55:01',90,0,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),
(12,'SMCS - main-1',1,11,'2024-11-13 17:50:04','2024-11-13 18:05:01',5,0,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),
(13,'SMCS - main-2',1,12,'2024-11-13 17:50:04','2024-11-13 18:15:01',5,0,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1);
/*!40000 ALTER TABLE `playlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purge_list`
--

DROP TABLE IF EXISTS `purge_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purge_list` (
  `purgeListId` int(11) NOT NULL AUTO_INCREMENT,
  `mediaId` int(11) NOT NULL,
  `storedAs` varchar(255) NOT NULL,
  `expiryDate` datetime DEFAULT NULL,
  PRIMARY KEY (`purgeListId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purge_list`
--

LOCK TABLES `purge_list` WRITE;
/*!40000 ALTER TABLE `purge_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `purge_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `regionId` int(11) NOT NULL AUTO_INCREMENT,
  `layoutId` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `name` varchar(254) DEFAULT NULL,
  `width` decimal(10,0) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `top` decimal(10,0) NOT NULL,
  `left` decimal(10,0) NOT NULL,
  `zIndex` smallint(6) NOT NULL,
  `duration` int(11) NOT NULL DEFAULT 0,
  `isDrawer` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`regionId`),
  KEY `ownerId` (`ownerId`),
  CONSTRAINT `region_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES
(10,4,1,'SMCS - main-0',1536,864,0,0,0,90,0),
(11,4,1,'SMCS - main-1',1920,216,864,0,0,5,0),
(12,4,1,'SMCS - main-2',384,864,0,1536,0,5,0);
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regionoption`
--

DROP TABLE IF EXISTS `regionoption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regionoption` (
  `regionId` int(11) NOT NULL,
  `option` varchar(50) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`regionId`,`option`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regionoption`
--

LOCK TABLES `regionoption` WRITE;
/*!40000 ALTER TABLE `regionoption` DISABLE KEYS */;
INSERT INTO `regionoption` VALUES
(11,'loop','0'),
(11,'transitionDirection','N'),
(11,'transitionDuration',NULL),
(11,'transitionType','');
/*!40000 ALTER TABLE `regionoption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reportschedule`
--

DROP TABLE IF EXISTS `reportschedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reportschedule` (
  `reportScheduleId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `reportName` varchar(255) NOT NULL,
  `filterCriteria` text DEFAULT NULL,
  `schedule` varchar(255) NOT NULL,
  `lastSavedReportId` int(11) NOT NULL DEFAULT 0,
  `lastRunDt` int(11) NOT NULL DEFAULT 0,
  `previousRunDt` int(11) NOT NULL DEFAULT 0,
  `userId` int(11) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `fromDt` int(11) NOT NULL DEFAULT 0,
  `toDt` int(11) NOT NULL DEFAULT 0,
  `createdDt` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`reportScheduleId`),
  KEY `userId` (`userId`),
  CONSTRAINT `reportschedule_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportschedule`
--

LOCK TABLES `reportschedule` WRITE;
/*!40000 ALTER TABLE `reportschedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `reportschedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requiredfile`
--

DROP TABLE IF EXISTS `requiredfile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requiredfile` (
  `rfId` int(11) NOT NULL AUTO_INCREMENT,
  `displayId` int(11) NOT NULL,
  `type` varchar(1) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `bytesRequested` bigint(20) NOT NULL,
  `complete` tinyint(4) NOT NULL DEFAULT 0,
  `path` varchar(255) DEFAULT NULL,
  `size` bigint(20) NOT NULL DEFAULT 0,
  `released` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`rfId`),
  KEY `displayId` (`displayId`,`type`),
  CONSTRAINT `requiredfile_ibfk_1` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requiredfile`
--

LOCK TABLES `requiredfile` WRITE;
/*!40000 ALTER TABLE `requiredfile` DISABLE KEYS */;
/*!40000 ALTER TABLE `requiredfile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resolution`
--

DROP TABLE IF EXISTS `resolution`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resolution` (
  `resolutionId` int(11) NOT NULL AUTO_INCREMENT,
  `resolution` varchar(254) NOT NULL,
  `width` smallint(6) NOT NULL,
  `height` smallint(6) NOT NULL,
  `intended_width` smallint(6) NOT NULL,
  `intended_height` smallint(6) NOT NULL,
  `version` tinyint(4) NOT NULL DEFAULT 1,
  `enabled` tinyint(4) NOT NULL DEFAULT 1,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`resolutionId`),
  KEY `userId` (`userId`),
  CONSTRAINT `resolution_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resolution`
--

LOCK TABLES `resolution` WRITE;
/*!40000 ALTER TABLE `resolution` DISABLE KEYS */;
INSERT INTO `resolution` VALUES
(1,'1080p HD Landscape',800,450,1920,1080,2,1,1),
(2,'720p HD Landscape',800,450,1280,720,2,1,1),
(3,'1080p HD Portrait',450,800,1080,1920,2,1,1),
(4,'720p HD Portrait',450,800,720,1280,2,1,1),
(5,'4k cinema',800,450,4096,2304,2,1,1),
(6,'Common PC Monitor 4:3',800,600,1024,768,2,1,1),
(7,'4k UHD Landscape',450,800,3840,2160,2,1,1),
(8,'4k UHD Portrait',800,450,2160,3840,2,1,1);
/*!40000 ALTER TABLE `resolution` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saved_report`
--

DROP TABLE IF EXISTS `saved_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saved_report` (
  `savedReportId` int(11) NOT NULL AUTO_INCREMENT,
  `saveAs` varchar(255) NOT NULL,
  `mediaId` int(11) NOT NULL,
  `reportScheduleId` int(11) NOT NULL,
  `generatedOn` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `schemaVersion` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`savedReportId`),
  KEY `userId` (`userId`),
  KEY `mediaId` (`mediaId`),
  KEY `reportScheduleId` (`reportScheduleId`),
  CONSTRAINT `saved_report_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `saved_report_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`),
  CONSTRAINT `saved_report_ibfk_3` FOREIGN KEY (`reportScheduleId`) REFERENCES `reportschedule` (`reportScheduleId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saved_report`
--

LOCK TABLES `saved_report` WRITE;
/*!40000 ALTER TABLE `saved_report` DISABLE KEYS */;
/*!40000 ALTER TABLE `saved_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule` (
  `eventId` int(11) NOT NULL AUTO_INCREMENT,
  `eventTypeId` int(11) NOT NULL,
  `campaignId` int(11) DEFAULT NULL,
  `commandId` int(11) DEFAULT NULL,
  `dayPartId` int(11) NOT NULL DEFAULT 0,
  `userId` int(11) NOT NULL,
  `fromDt` bigint(20) DEFAULT NULL,
  `toDt` bigint(20) DEFAULT NULL,
  `is_priority` tinyint(4) NOT NULL,
  `displayOrder` int(11) NOT NULL DEFAULT 0,
  `lastRecurrenceWatermark` bigint(20) DEFAULT NULL,
  `syncTimezone` tinyint(4) NOT NULL DEFAULT 0,
  `recurrence_type` enum('Minute','Hour','Day','Week','Month','Year') DEFAULT NULL,
  `recurrence_detail` int(11) DEFAULT NULL,
  `recurrence_range` bigint(20) DEFAULT NULL,
  `recurrenceRepeatsOn` varchar(14) DEFAULT NULL,
  `syncEvent` int(11) NOT NULL DEFAULT 0,
  `recurrenceMonthlyRepeatsOn` tinyint(4) NOT NULL DEFAULT 0,
  `shareOfVoice` smallint(6) DEFAULT NULL,
  `isGeoAware` tinyint(4) NOT NULL DEFAULT 0,
  `geoLocation` text DEFAULT NULL,
  `actionTriggerCode` varchar(50) DEFAULT NULL,
  `actionType` varchar(50) DEFAULT NULL,
  `actionLayoutCode` varchar(50) DEFAULT NULL,
  `maxPlaysPerHour` smallint(6) NOT NULL DEFAULT 0,
  `parentCampaignId` int(11) DEFAULT NULL,
  PRIMARY KEY (`eventId`),
  KEY `campaignId` (`campaignId`),
  KEY `userId` (`userId`),
  CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scheduleexclusions`
--

DROP TABLE IF EXISTS `scheduleexclusions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scheduleexclusions` (
  `scheduleExclusionId` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) NOT NULL,
  `fromDt` int(11) NOT NULL,
  `toDt` int(11) NOT NULL,
  PRIMARY KEY (`scheduleExclusionId`),
  KEY `eventId` (`eventId`),
  CONSTRAINT `scheduleexclusions_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scheduleexclusions`
--

LOCK TABLES `scheduleexclusions` WRITE;
/*!40000 ALTER TABLE `scheduleexclusions` DISABLE KEYS */;
/*!40000 ALTER TABLE `scheduleexclusions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedulereminder`
--

DROP TABLE IF EXISTS `schedulereminder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedulereminder` (
  `scheduleReminderId` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `option` int(11) NOT NULL,
  `reminderDt` int(11) NOT NULL,
  `lastReminderDt` int(11) NOT NULL,
  `isEmail` tinyint(4) NOT NULL,
  PRIMARY KEY (`scheduleReminderId`),
  KEY `eventId` (`eventId`),
  CONSTRAINT `schedulereminder_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedulereminder`
--

LOCK TABLES `schedulereminder` WRITE;
/*!40000 ALTER TABLE `schedulereminder` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedulereminder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `session_id` varchar(160) NOT NULL,
  `session_data` longtext NOT NULL,
  `session_expiration` int(10) unsigned NOT NULL DEFAULT 0,
  `lastAccessed` datetime DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `isExpired` tinyint(4) NOT NULL DEFAULT 1,
  `userAgent` varchar(255) DEFAULT NULL,
  `remoteAddr` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`session_id`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES
('035c49b2590f78209ef5006c61074be9','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"66c6ae5ece0a9a31e5226ed5be82e520610642e8\";',1731668905,'2024-11-15 06:44:25',0,0,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36','172.105.102.57'),
('0bca956f6c88b04ecc53a1a5738bce9b','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731650987,'2024-11-15 01:45:47',0,1,'','185.191.126.248'),
('0e97c38c6c7ad1bc51deec90d15aa460','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"ce63e972c52dc36b1719d976106c24e560563e15\";',1731670661,'2024-11-15 07:13:41',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36','45.156.130.4'),
('0f41749db466275234e78dbdf93a106f','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731651662,'2024-11-15 01:57:02',0,1,'','206.168.34.117'),
('11ae84abe436f96e1ee44072f5bdb975','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"40ca5ebf5752b2242e33ca4f5ef0c90366faf151\";',1731656949,'2024-11-15 03:25:09',0,0,'Mozilla/5.0 (Windows NT 5.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36','180.149.125.171'),
('11fed61490b2e9fd42fe2abbed9f6db1','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1732108525,'2024-11-20 08:51:25',0,0,'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)','162.142.125.199'),
('15e996c4f943bbd1244a5a89c0891784','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731686272,'2024-11-15 11:33:52',0,0,'','154.213.184.43'),
('1630c6a3f4fb787d25eb906207ccb4b9','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1732108505,'2024-11-20 08:51:05',0,0,'','162.142.125.199'),
('195639af305202076ba871c754366573','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731640730,'2024-11-14 22:54:50',0,1,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','95.214.55.43'),
('1b3dfb64179a33aaa238c436bdbe22c0','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731649093,'2024-11-15 01:14:13',0,1,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36','52.187.54.3'),
('1c458890586b2cd96f15f573dc044aff','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731640918,'2024-11-14 22:57:58',0,1,'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)','167.94.138.33'),
('1c84b7da09a7b1429393fe232be010f7','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731696011,'2024-11-15 14:16:11',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36','162.243.88.204'),
('1e1fb1027c4880b312742251c1cadc7b','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731661115,'2024-11-15 04:34:35',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','95.214.55.43'),
('21db93f9fd7ad22d8fbc12692e51102d','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731670057,'2024-11-15 07:03:37',0,0,'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36','64.62.156.23'),
('2a7e7655ec2b9ec957256460a3990c93','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1732107227,'2024-11-20 08:29:47',0,0,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36','5.8.11.202'),
('2ada740a634c66af38f6036622c5c8a6','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731677695,'2024-11-15 09:10:55',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/115.0','74.82.47.2'),
('2c27abf89ad9933c1f0222fa2f1a870f','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731675939,'2024-11-15 08:41:39',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','141.98.11.178'),
('2f8d6ce8b34dd21178325dd556e636dd','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731650636,'2024-11-15 01:39:56',0,1,'Mozilla/5.0 (SymbianOS 9.4; Series60/5.0 NokiaN97-1/10.0.012; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) WicKed/7.1.12344','87.120.117.244'),
('313b97387164b0f016b7791f4205139d','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"d2a114d9e56d1ffbd861604817eb02c5af2ef151\";',1731667404,'2024-11-15 06:19:24',0,0,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36','142.93.150.12'),
('32a6ca3bfea7e398eecc2b0b57f9ae7b','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731667403,'2024-11-15 06:19:23',0,0,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36','142.93.150.12'),
('36e9ae6ddbaf50a664740f5b22092132','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731667330,'2024-11-15 06:18:10',0,0,'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:8.0) Gecko/20100101 Firefox/8.0','85.159.208.142'),
('3d58339877b025e538ce25f8e8a039f9','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731641838,'2024-11-14 23:13:18',0,1,'GCore Labs Cyberthreat Research','191.102.29.11'),
('3db470d5da16272c968155aa7a8be3c5','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"49e7d63edd74e8e22821e94dbbbd2a2da619a4d6\";',1731651696,'2024-11-15 01:57:36',0,1,'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)','206.168.34.117'),
('3f667c9a3da71b8ec912c6dfd8d85eef','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731670314,'2024-11-15 07:07:54',0,0,'Linux Gnu (cow)','194.50.16.198'),
('48dfb0849c00d07b072b82f02ab6925c','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731684865,'2024-11-15 11:10:25',0,0,'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36','59.89.106.195'),
('4d47ac22abfe1653c0b0c37a7b7173bf','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"86b47b6ddb57f918ecdf37dcf3a21145d3874ca1\";',1731677773,'2024-11-15 09:12:13',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','74.82.47.2'),
('4d82428c626691bf46a0c9de5c9494ac','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"a20666d1b4cf44afe867fc323dff7a674498a07d\";',1731696012,'2024-11-15 14:16:12',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36','162.243.88.204'),
('518f39479a606e1b601215d426e605b6','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731669944,'2024-11-15 07:01:44',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36 Edg/110.0.1587.56','64.62.156.20'),
('55f79a13f8701af1eef4f707e0e5dabf','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731684735,'2024-11-15 11:08:15',0,0,'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko','46.174.191.32'),
('5630ee0db473df48a25faae6e7a0bb3e','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731653276,'2024-11-15 02:23:56',0,1,'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@palo','35.203.211.14'),
('57d496008f98bb8a1ada780c4935d757','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731641313,'2024-11-14 23:04:33',0,1,'','138.197.137.176'),
('5b536b986e1221861908392aa531387c','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"6fded2694b14642de271a56745ef02150e63d267\";',1731674843,'2024-11-15 08:23:23',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36','45.156.129.48'),
('5b825e0364cfff540e8fc74f2195cc7a','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"99dde174319f9f0f0e2958f590e3ce8e95e65243\";',1731668650,'2024-11-15 06:40:10',0,0,'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:8.0) Gecko/20100101 Firefox/8.0','139.162.250.228'),
('5cefb62f918ed1a19ffdb05d561a115c','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731680962,'2024-11-15 10:05:22',0,0,'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@palo','147.185.132.93'),
('5edd26d5db435f22a9e8ef83d8dffe1f','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731692887,'2024-11-15 13:24:07',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','109.205.213.198'),
('61b74530bda667de00c2132814ee7e9d','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731656948,'2024-11-15 03:25:08',0,0,'Mozilla/5.0 (Windows NT 5.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36','180.149.125.171'),
('630ccf36825bf93bbccad5898a46abcf','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731652345,'2024-11-15 02:08:25',0,1,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','46.19.138.234'),
('63269f802a876dc16b6b214002ca7e66','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1732106269,'2024-11-20 08:13:49',0,0,'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko','46.174.191.32'),
('63c5ce8006e2dc96fbde5ca0717a29c6','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731642351,'2024-11-14 23:21:51',0,1,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','109.205.213.198'),
('64329975e845f417d62b58b9eb2743f7','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731683029,'2024-11-15 10:39:49',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','109.205.213.198'),
('64f102a5853534a61c6e5849775e7d14','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731647031,'2024-11-15 00:39:51',0,1,'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@palo','162.216.150.13'),
('64f74bcb00cf3ef5009812d85e848616','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731684904,'2024-11-15 11:11:04',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','95.214.53.91'),
('6787205b2d977a37d52caffe17ca48a9','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"d16b58edbb6e8ac9143a25f747bba090b2b76aaa\";',1731670057,'2024-11-15 07:03:37',0,0,'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36','64.62.156.23'),
('7310610b734c0f07c900620082a6c581','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731668650,'2024-11-15 06:40:10',0,0,'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:8.0) Gecko/20100101 Firefox/8.0','139.162.250.228'),
('75043e06747b27b05d782cb52a655d1a','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731658186,'2024-11-15 03:45:46',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36','92.255.57.58'),
('76f6c9177ce5f031b9e1db076e5a6d85','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1732108514,'2024-11-20 08:51:14',0,0,'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)','162.142.125.199'),
('77ba9ed18271ddd42c58e544e51f0d0e','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"f4f5bf955182acc94821729a2b89e75c789e9606\";',1731648190,'2024-11-15 00:59:10',0,1,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36','185.242.226.116'),
('7c8b77927347cdfb04ebaccd47bc7f34','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731649517,'2024-11-15 01:21:17',0,1,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36','168.227.182.66'),
('7e15a91645e2c6e0696abaa20837debe','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731696013,'2024-11-15 14:16:13',0,0,'Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 10.0; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 3.0.30729; .NET CLR 3.5.30729)','162.243.88.204'),
('7f494c9167c067a90a03eb3a5118b7e4','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731645242,'2024-11-15 00:10:02',0,1,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','109.205.213.198'),
('81a4c9aa18d793a93d8fee14e4b71cb5','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"d83667b4ff4919134a19a4e5659eb5ce0fa40398\";userid|i:1;displayGroupIds|a:0:{}',1732107620,'2024-11-20 08:36:20',1,1,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:132.0) Gecko/20100101 Firefox/132.0','192.168.0.99'),
('83557182d2dc4498bfa5e0a386c6f271','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731689708,'2024-11-15 12:31:08',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','95.214.55.43'),
('844d67db608db78b78f88c856bf76833','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"67929ec4a9f9440dbf9a0d66578d570a9d058dfc\";',1731640923,'2024-11-14 22:58:03',0,1,'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)','167.94.138.33'),
('8bb44b99f00a142485b4402c819db99d','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731640904,'2024-11-14 22:57:44',0,1,'','167.94.138.33'),
('8f842ffd19eba14db97b73c9b41da8ab','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731651675,'2024-11-15 01:57:15',0,1,'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)','206.168.34.117'),
('9b180f3e8e3371020d72f3ef710bbfe6','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731693180,'2024-11-15 13:29:00',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36','45.156.128.45'),
('9e3458b1bbb8e6ab4de7dc4bb7650510','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731694987,'2024-11-15 13:59:07',0,0,'python-requests/2.32.3','34.77.3.228'),
('9f65a855e8d0dfc4fbf01bcec3bde5bc','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"6c84a285cc654e39751c28fe300afdbf1b76b875\";',1731667251,'2024-11-15 06:16:51',0,0,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4 240.111 Safari/537.36','118.123.105.89'),
('9f867ea8c67a7736ce76d0585a5d8776','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731683346,'2024-11-15 10:45:06',0,0,'','185.191.126.248'),
('a11df35ba41a796f9e72ac432b1b4542','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731670800,'2024-11-15 07:16:00',0,0,'Mozilla/5.0 zgrab/0.x','172.206.143.4'),
('a4111aead30ae437d4503370fffe222b','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731655336,'2024-11-15 02:58:16',0,1,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','95.214.55.79'),
('a6ec10c153c9477fd67120289e0830e5','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731676023,'2024-11-15 08:43:03',0,0,'python-requests/2.32.3','35.241.129.65'),
('a83d2d7eb75ff2aa5baefe1a62d7befc','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"86d195746e23da393e4a0c59d668306755cbc92e\";',1731653277,'2024-11-15 02:23:57',0,1,'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@palo','35.203.211.14'),
('b03682376323e06ff9052abe4c191510','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731658900,'2024-11-15 03:57:40',0,0,'Mozilla/6.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Inspici (www.inspici.com)','45.84.89.2'),
('b1aa78a7492fa4a474f0b44dcc59df12','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731640926,'2024-11-14 22:58:06',0,1,'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)','167.94.138.33'),
('b2f813e0ddca445af899301e5f8519f1','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"c6b6991e47ef945ecf41586e6a2b47616ada5692\";',1731647032,'2024-11-15 00:39:52',0,1,'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@palo','162.216.150.13'),
('b321dc8544967cde8e77581895ebf38d','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731648190,'2024-11-15 00:59:10',0,1,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36','185.242.226.116'),
('b5d124d662e1033adfaa143078e5d710','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731677772,'2024-11-15 09:12:12',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','74.82.47.2'),
('b820c140ddd170089afff45e1286f2bd','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731676666,'2024-11-15 08:53:46',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','46.19.138.234'),
('b8a26a4c5dc5dcc03beb7217966a9b9a','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"a83422c9250e51098e7c76d6f1079a51835214f0\";',1731693181,'2024-11-15 13:29:01',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36','45.156.128.45'),
('bb64e151666cab2cf8492de93eb9b6b4','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731651705,'2024-11-15 01:57:45',0,1,'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)','206.168.34.117'),
('c99771f9ed6f1f288b9eabc6eaaf4656','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"fa0f4f72cdfc84025752110aa6ad76f361fce8cf\";',1731658187,'2024-11-15 03:45:47',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36','92.255.57.58'),
('c9fde22c9de9ae9a47cc880894eb208d','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"c6e37029f96f75cc3f65333060b8b6ecbfa89bfe\";',1731667330,'2024-11-15 06:18:10',0,0,'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:8.0) Gecko/20100101 Firefox/8.0','85.159.208.142'),
('ca29042bb534d9c4a92801e05dbfa92f','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731667249,'2024-11-15 06:16:49',0,0,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4 240.111 Safari/537.36','118.123.105.89'),
('cb1f116cda2289f6af120c2f9df62ecb','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731648549,'2024-11-15 01:05:09',0,1,'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36','45.249.253.222'),
('cdd7e75b19a96499c01ed2303e4eca28','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"5ddd0fff2a75983711d7e4ebb10bfc85ea78698b\";',1732108524,'2024-11-20 08:51:24',0,0,'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)','162.142.125.199'),
('d2f594bf20618af932cb11c2bd9edac7','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731668905,'2024-11-15 06:44:25',0,0,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36','172.105.102.57'),
('e01d918fc6ad745322a97bebcb1e5127','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731677091,'2024-11-15 09:00:51',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/115.0','74.82.47.2'),
('e6a3e58b8fdb08983c1951168c0f0343','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731671007,'2024-11-15 07:19:27',0,0,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36','5.8.11.202'),
('f1f62e9ee9a25a0e27bcc92fdc5eaa25','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731652190,'2024-11-15 02:05:50',0,1,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','34.57.250.207'),
('f2855321c9199f5407df02b1feba1c85','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731670661,'2024-11-15 07:13:41',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36','45.156.130.4'),
('f2d7a5da2cd9c5eed7e3b9a6f0b95edc','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731659194,'2024-11-15 04:02:34',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','149.50.106.25'),
('f53b320c061af3b71afafbea4e600f82','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731662374,'2024-11-15 04:55:34',0,0,'','185.191.126.248'),
('f9bee477bd66e4098c495dfc7842fbea','init|s:1:\"1\";slimFlash|a:1:{s:10:\"priorRoute\";a:1:{i:0;s:1:\"/\";}}',1731674843,'2024-11-15 08:23:23',0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36','45.156.129.48'),
('fdd772ae595f2b4d0226f2117bf7a61f','init|s:1:\"1\";slimFlash|a:0:{}csrfToken|s:40:\"87b866a8407a4d58cfc58e684b284d0c2b86007e\";',1731652190,'2024-11-15 02:05:50',0,1,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','34.57.250.207');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting` (
  `settingId` int(11) NOT NULL AUTO_INCREMENT,
  `setting` varchar(50) NOT NULL,
  `value` varchar(1000) NOT NULL,
  `userSee` tinyint(4) NOT NULL DEFAULT 1,
  `userChange` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`settingId`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` VALUES
(3,'defaultUsertype','User',1,1),
(7,'userModule','module_user_general.php',0,0),
(11,'defaultTimezone','America/Anguilla',1,1),
(18,'mail_to','mail@yoursite.com',1,1),
(19,'mail_from','mail@yoursite.com',1,1),
(30,'audit','emergency',1,1),
(33,'LIBRARY_LOCATION','/srv/xibo-library/',1,1),
(34,'SERVER_KEY','CcKc2F',1,1),
(35,'HELP_BASE','http://www.xibo.org.uk/manual/en/',1,1),
(36,'PHONE_HOME','0',1,1),
(37,'PHONE_HOME_KEY','',0,0),
(38,'PHONE_HOME_URL','https://xibo.org.uk/api/stats/track',0,0),
(39,'PHONE_HOME_DATE','0',0,0),
(40,'SERVER_MODE','Production',1,1),
(41,'MAINTENANCE_ENABLED','Off',1,1),
(42,'MAINTENANCE_EMAIL_ALERTS','1',1,1),
(44,'MAINTENANCE_LOG_MAXAGE','30',1,1),
(45,'MAINTENANCE_STAT_MAXAGE','30',1,1),
(46,'MAINTENANCE_ALERT_TOUT','12',1,1),
(47,'SHOW_DISPLAY_AS_VNCLINK','',1,1),
(48,'SHOW_DISPLAY_AS_VNC_TGT','_top',1,1),
(49,'MAINTENANCE_ALWAYS_ALERT','0',1,1),
(50,'SCHEDULE_LOOKAHEAD','1',1,0),
(51,'REQUIRED_FILES_LOOKAHEAD','172800',1,1),
(52,'REGION_OPTIONS_COLOURING','Media Colouring',1,1),
(53,'LAYOUT_COPY_MEDIA_CHECKB','0',1,1),
(54,'MAX_LICENSED_DISPLAYS','0',0,0),
(55,'LIBRARY_MEDIA_UPDATEINALL_CHECKB','1',1,1),
(56,'USER_PASSWORD_POLICY','',1,1),
(57,'USER_PASSWORD_ERROR','',1,1),
(58,'MODULE_CONFIG_LOCKED_CHECKB','0',0,0),
(59,'LIBRARY_SIZE_LIMIT_KB','0',1,0),
(60,'MONTHLY_XMDS_TRANSFER_LIMIT_KB','0',1,0),
(61,'DEFAULT_LANGUAGE','en_GB',1,1),
(62,'TRANSITION_CONFIG_LOCKED_CHECKB','0',1,0),
(63,'GLOBAL_THEME_NAME','default',1,1),
(64,'DEFAULT_LAT','51.504',1,1),
(65,'DEFAULT_LONG','-0.104',1,1),
(66,'SCHEDULE_WITH_VIEW_PERMISSION','0',1,1),
(67,'SETTING_IMPORT_ENABLED','1',1,1),
(68,'SETTING_LIBRARY_TIDY_ENABLED','1',1,1),
(69,'SENDFILE_MODE','Off',1,1),
(70,'EMBEDDED_STATUS_WIDGET','',1,0),
(71,'PROXY_HOST','',1,1),
(72,'PROXY_PORT','0',1,1),
(73,'PROXY_AUTH','',1,1),
(74,'DATE_FORMAT','Y-m-d H:i',1,1),
(75,'DETECT_LANGUAGE','1',1,1),
(76,'DEFAULTS_IMPORTED','1',0,0),
(77,'FORCE_HTTPS','0',1,1),
(78,'ISSUE_STS','0',1,1),
(79,'STS_TTL','600',1,1),
(81,'CALENDAR_TYPE','Gregorian',1,1),
(82,'DASHBOARD_LATEST_NEWS_ENABLED','1',1,1),
(83,'LIBRARY_MEDIA_DELETEOLDVER_CHECKB','1',1,1),
(84,'PROXY_EXCEPTIONS','',1,1),
(85,'INSTANCE_SUSPENDED','0',0,0),
(87,'XMR_ADDRESS','tcp://localhost:5555',1,1),
(88,'XMR_PUB_ADDRESS','',1,1),
(89,'CDN_URL','',0,0),
(90,'ELEVATE_LOG_UNTIL','1731545501',1,1),
(91,'RESTING_LOG_LEVEL','emergency',1,1),
(92,'TASK_CONFIG_LOCKED_CHECKB','0',0,0),
(93,'WHITELIST_LOAD_BALANCERS','',1,1),
(94,'DEFAULT_LAYOUT','4',1,1),
(95,'DISPLAY_PROFILE_STATS_DEFAULT','0',1,1),
(96,'DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED','1',1,1),
(97,'DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED','1',1,1),
(98,'DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT','200',1,1),
(99,'LATEST_NEWS_URL','http://xibo.org.uk/feed',0,0),
(100,'DISPLAY_LOCK_NAME_TO_DEVICENAME','0',1,1),
(101,'mail_from_name','',1,1),
(102,'SCHEDULE_SHOW_LAYOUT_NAME','1',1,1),
(103,'DEFAULT_USERGROUP','1',1,1),
(104,'PASSWORD_REMINDER_ENABLED','Off',1,1),
(105,'DISPLAY_AUTO_AUTH','0',0,0),
(106,'EVENT_SYNC','0',0,0),
(107,'DEFAULT_TRANSITION_DURATION','1000',1,1),
(108,'LAYOUT_STATS_ENABLED_DEFAULT','0',1,1),
(109,'DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT','Individual',1,1),
(110,'MEDIA_STATS_ENABLED_DEFAULT','Inherit',1,1),
(111,'WIDGET_STATS_ENABLED_DEFAULT','Inherit',1,1),
(112,'NAVIGATION_MENU_POSITION','vertical',1,1),
(113,'TWOFACTOR_ISSUER','',1,1),
(114,'PLAYLIST_STATS_ENABLED_DEFAULT','Inherit',1,1),
(115,'DEFAULT_RESIZE_LIMIT','6000',1,1),
(116,'DEFAULT_RESIZE_THRESHOLD','1920',1,1),
(118,'DEFAULT_TRANSITION_IN','fadeIn',1,1),
(119,'DEFAULT_TRANSITION_OUT','fadeOut',1,1),
(120,'DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB','0',1,1),
(121,'QUICK_CHART_URL','https://quickchart.io',1,1),
(122,'DEFAULT_TRANSITION_AUTO_APPLY','0',1,1),
(123,'SYSTEM_USER','1',1,1),
(124,'DATASET_HARD_ROW_LIMIT','10000',1,1),
(125,'DISPLAY_SCREENSHOT_TTL','0',1,1),
(126,'DEFAULT_PURGE_LIST_TTL','7',1,1),
(127,'DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER','30',1,1),
(128,'DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT','100',1,1),
(129,'REPORTS_EXPORT_SHOW_LOGO','1',1,1),
(130,'FOLDERS_ALLOW_SAVE_IN_ROOT','1',1,1);
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stat`
--

DROP TABLE IF EXISTS `stat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stat` (
  `statId` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `statDate` int(11) NOT NULL,
  `scheduleId` int(11) NOT NULL,
  `displayId` int(11) NOT NULL,
  `campaignId` int(11) DEFAULT NULL,
  `layoutId` int(11) DEFAULT NULL,
  `mediaId` int(11) DEFAULT NULL,
  `widgetId` int(11) DEFAULT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `tag` varchar(254) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `engagements` text DEFAULT NULL,
  `parentCampaignId` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`statId`),
  KEY `statDate` (`statDate`),
  KEY `displayId` (`displayId`,`end`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stat`
--

LOCK TABLES `stat` WRITE;
/*!40000 ALTER TABLE `stat` DISABLE KEYS */;
/*!40000 ALTER TABLE `stat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES
(1,'Published'),
(2,'Draft'),
(3,'Pending Approval');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag` (
  `tagId` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  `isSystem` int(11) NOT NULL DEFAULT 0,
  `options` text DEFAULT NULL,
  `isRequired` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`tagId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES
(1,'template',1,NULL,0),
(2,'background',1,NULL,0),
(3,'thumbnail',1,NULL,0),
(4,'imported',1,NULL,0);
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `taskId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `class` varchar(254) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 2,
  `pid` int(11) DEFAULT NULL,
  `options` text DEFAULT NULL,
  `schedule` varchar(254) NOT NULL,
  `lastRunDt` int(11) NOT NULL DEFAULT 0,
  `lastRunStartDt` int(11) DEFAULT NULL,
  `lastRunMessage` varchar(255) DEFAULT NULL,
  `lastRunStatus` tinyint(4) NOT NULL DEFAULT 0,
  `lastRunDuration` smallint(6) NOT NULL DEFAULT 0,
  `lastRunExitCode` smallint(6) NOT NULL DEFAULT 0,
  `isActive` tinyint(4) NOT NULL,
  `runNow` tinyint(4) NOT NULL DEFAULT 0,
  `configFile` varchar(254) NOT NULL,
  PRIMARY KEY (`taskId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` VALUES
(1,'Daily Maintenance','\\Xibo\\XTR\\MaintenanceDailyTask',2,1335,'[]','0 0 * * * *',1732065788,1732065785,'# Daily Maintenance\n\n## Import Layouts\n - Not Required.\n\n## Tidy Logs\n - Done\n\n## Tidy Cache\n - Done.\n\n',4,3,0,1,0,'/tasks/maintenance-daily.task'),
(2,'Regular Maintenance','\\Xibo\\XTR\\MaintenanceRegularTask',2,5245,'[]','*/5 * * * * *',1732107301,1732107301,'# Wake On LAN\n - Done\n\n## Playlist Duration Updates\n - Done\n\n## Build Layouts\n - Done\n\n## Tidy Library\n - Done\n\n## Publishing layouts with set publish dates\n - Done\n\n## Assess Dynamic Display Groups\n - Done (not required)\n\n## Tidy Ad Campaign Schedu(...)',4,0,0,1,0,'/tasks/maintenance-regular.task'),
(3,'Email Notifications','\\Xibo\\XTR\\EmailNotificationsTask',2,5245,'[]','*/5 * * * * *',1732107301,1732107301,'# Email Notifications\n\n## Email Notifications\n - Done\n',4,0,0,1,0,'/tasks/email-notifications.task'),
(4,'Stats Archive','\\Xibo\\XTR\\StatsArchiveTask',2,1335,'{\"periodSizeInDays\":\"7\",\"maxPeriods\":\"4\",\"archiveStats\":\"On\"}','0 0 * * Mon',1732065785,1732065785,'Nothing to archive## Tidy Stats\n - Done - 0 deleted.\n\n',4,0,0,1,0,'/tasks/stats-archiver.task'),
(5,'Remove old Notifications','\\Xibo\\XTR\\NotificationTidyTask',2,1335,'{\"maxAgeDays\":\"7\",\"systemOnly\":\"1\",\"readOnly\":\"0\"}','15 0 * * *',1732065785,1732065785,'# Notification Tidy\n\nDone\n\n',4,0,0,1,0,'/tasks/notification-tidy.task'),
(6,'Fetch Remote DataSets','\\Xibo\\XTR\\RemoteDataSetFetchTask',2,2580,'[]','30 * * * * *',1732105802,1732105802,'# Fetching Remote-DataSets\n\nDone\n',4,0,0,1,0,'/tasks/remote-dataset.task'),
(7,'Drop Player Cache','\\Xibo\\XTR\\DropPlayerCacheTask',2,NULL,'[]','0 0 1 1 *',0,NULL,NULL,0,0,0,0,0,'/tasks/drop-player-cache.task'),
(8,'Sync Dynamic Playlists','\\Xibo\\XTR\\DynamicPlaylistSyncTask',2,5939,'[]','* * * * * *',1732107362,1732107362,'No library media/playlist updates since we last ran\n',4,0,0,1,0,'/tasks/dynamic-playlist-sync.task'),
(9,'Widget Sync','\\Xibo\\XTR\\WidgetSyncTask',2,4668,'{}','*/3 * * * *',1732107242,1732107242,'Synced 0 widgets across 0 layouts.\n',4,0,0,1,0,'/tasks/widget-sync.task'),
(10,'Report Schedule','\\Xibo\\XTR\\ReportScheduleTask',2,5245,'[]','*/5 * * * * *',1732107301,1732107301,'# Report schedule\n\n',4,0,0,1,0,'/tasks/report-schedule.task'),
(11,'Statistics Migration','\\Xibo\\XTR\\StatsMigrationTask',2,1754,'{\"killSwitch\":\"0\",\"numberOfRecords\":\"5000\",\"numberOfLoops\":\"10\",\"pauseBetweenLoops\":\"1\",\"optimiseOnComplete\":\"1\"}','*/10 * * * * *',1731531843,1731531843,'## Moving from stat_archive to stat (MySQL)\nDisabling Stats Archive Task.\n- Initial watermark is 1\n\n# End of records.\n- Dropping stat_archive.\nDone.\n\n# Disabling task.\nDone.\n\nEnabling Stats Archive Task.\n',4,0,0,0,0,'/tasks/stats-migration.task'),
(12,'Schedule Reminder','\\Xibo\\XTR\\ScheduleReminderTask',2,5245,'[]','*/5 * * * * *',1732107301,1732107301,'# Schedule reminder\n\n',4,0,0,1,0,'/tasks/schedule-reminder.task'),
(13,'Image Processing','\\Xibo\\XTR\\ImageProcessingTask',2,5245,'[]','*/5 * * * * *',1732107301,1732107301,'# Image Processing\n\nReleased and modified image count. 0\n',4,0,0,1,0,'/tasks/image-processing.task'),
(14,'Remove Old Screenshots','\\Xibo\\XTR\\RemoveOldScreenshotsTask',2,1335,'[]','0 0 * * * *',1732065785,1732065785,'# Remove Old Screenshots\n\nDisplay Screenshot Time to keep set to 0, nothing to remove.\n',4,0,0,1,0,'/tasks/remove-old-screenshots.task'),
(15,'Media Orientation','\\Xibo\\XTR\\MediaOrientationTask',2,1754,'[]','*/5 * * * * *',1731531843,1731531843,'# Media Orientation\n\n# Setting Media Orientation on Library Media files.\nUpdated 0 items\n# Disabling task.\nDone.\n\n',4,0,0,0,0,'/tasks/media-orientation.task'),
(16,'Purge List Cleanup','\\Xibo\\XTR\\PurgeListCleanupTask',2,1335,'[]','0 0 * * *',1732065785,1732065785,'# Purge List Cleanup Start\n\n# Nothing to remove\n\n\n',4,0,0,1,0,'/tasks/purge-list-cleanup.task'),
(17,'Campaign Scheduler','\\Xibo\\XTR\\CampaignSchedulerTask',2,3622,'[]','45 * * * *',1732106701,1732106701,'0 campaigns processed, of which 0 were scheduled. Skipped 0 for various reasons\n',4,0,0,1,0,'/tasks/campaign-scheduler.task');
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transition`
--

DROP TABLE IF EXISTS `transition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transition` (
  `transitionId` int(11) NOT NULL AUTO_INCREMENT,
  `transition` varchar(254) NOT NULL,
  `code` varchar(254) NOT NULL,
  `hasDuration` tinyint(4) NOT NULL,
  `hasDirection` tinyint(4) NOT NULL,
  `availableAsIn` tinyint(4) NOT NULL,
  `availableAsOut` tinyint(4) NOT NULL,
  PRIMARY KEY (`transitionId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transition`
--

LOCK TABLES `transition` WRITE;
/*!40000 ALTER TABLE `transition` DISABLE KEYS */;
INSERT INTO `transition` VALUES
(1,'Fade In','fadeIn',1,0,1,0),
(2,'Fade Out','fadeOut',1,0,0,1),
(3,'Fly','fly',1,1,1,1);
/*!40000 ALTER TABLE `transition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userTypeId` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `lastAccessed` datetime DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `homePageId` varchar(255) DEFAULT 'null',
  `retired` tinyint(4) NOT NULL DEFAULT 0,
  `csprng` tinyint(4) NOT NULL DEFAULT 0,
  `newUserWizard` tinyint(4) NOT NULL DEFAULT 0,
  `firstName` varchar(254) DEFAULT NULL,
  `lastName` varchar(254) DEFAULT NULL,
  `phone` varchar(254) DEFAULT NULL,
  `ref1` varchar(254) DEFAULT NULL,
  `ref2` varchar(254) DEFAULT NULL,
  `ref3` varchar(254) DEFAULT NULL,
  `ref4` varchar(254) DEFAULT NULL,
  `ref5` varchar(254) DEFAULT NULL,
  `isPasswordChangeRequired` tinyint(4) NOT NULL DEFAULT 0,
  `twoFactorTypeId` int(11) NOT NULL DEFAULT 0,
  `twoFactorSecret` text DEFAULT NULL,
  `twoFactorRecoveryCodes` text DEFAULT NULL,
  `showContentFrom` tinyint(4) NOT NULL DEFAULT 1,
  `homeFolderId` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`userId`),
  KEY `userTypeId` (`userTypeId`),
  KEY `homeFolderId` (`homeFolderId`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userTypeId`) REFERENCES `usertype` (`userTypeId`),
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`homeFolderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES
(1,1,'offbyone','$2y$10$ps8yy8EYpA5V7B0XOa//SOxaHkkOg5TLvVexTyyew2aZ8pwSDPWha','2024-11-20 08:36:20',NULL,'statusdashboard.view',0,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,NULL,1,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `useroption`
--

DROP TABLE IF EXISTS `useroption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `useroption` (
  `userId` int(11) NOT NULL,
  `option` varchar(50) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`userId`,`option`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useroption`
--

LOCK TABLES `useroption` WRITE;
/*!40000 ALTER TABLE `useroption` DISABLE KEYS */;
INSERT INTO `useroption` VALUES
(1,'commandGrid','{\"time\":1732104736291,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),
(1,'daypartGrid','{\"time\":1731536391188,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),
(1,'displayGrid','{\"time\":1731538758656,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),
(1,'displayProfileGrid','{\"time\":1731538803978,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),
(1,'displaysGrid','{\"time\":1732104720569,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),
(1,'editor','{\"timelineStatus\":true,\"propertiesPanelStatus\":true}'),
(1,'layoutGrid','{\"time\":1732104726371,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[\"#undefined\"]}'),
(1,'libraryGrid','{\"time\":1731535788734,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),
(1,'moduleGrid','{\"time\":1731536269085,\"start\":10,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),
(1,'playerSoftwareGrid','{\"time\":1731541810154,\"start\":0,\"length\":10,\"order\":[[2,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),
(1,'playlistGrid','{\"time\":1731534597059,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[\"#undefined\"]}'),
(1,'resolutionGrid','{\"time\":1732104735206,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),
(1,'templateGrid','{\"time\":1731533228254,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),
(1,'toolbar','{\"filters\":[{},{},{},{},{}],\"openedMenu\":0,\"displayTooltips\":1,\"favouriteModules\":[]}');
/*!40000 ALTER TABLE `useroption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usertype` (
  `userTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `userType` varchar(16) NOT NULL,
  PRIMARY KEY (`userTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertype`
--

LOCK TABLES `usertype` WRITE;
/*!40000 ALTER TABLE `usertype` DISABLE KEYS */;
INSERT INTO `usertype` VALUES
(1,'Super Admin'),
(2,'Group Admin'),
(3,'User'),
(4,'DOOH');
/*!40000 ALTER TABLE `usertype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widget`
--

DROP TABLE IF EXISTS `widget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `widget` (
  `widgetId` int(11) NOT NULL AUTO_INCREMENT,
  `playlistId` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL,
  `displayOrder` int(11) NOT NULL,
  `calculatedDuration` int(11) NOT NULL,
  `useDuration` tinyint(4) NOT NULL DEFAULT 1,
  `fromDt` int(11) NOT NULL,
  `toDt` int(11) NOT NULL,
  `createdDt` int(11) NOT NULL DEFAULT 0,
  `modifiedDt` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`widgetId`),
  KEY `playlistId` (`playlistId`),
  KEY `ownerId` (`ownerId`),
  CONSTRAINT `widget_ibfk_1` FOREIGN KEY (`playlistId`) REFERENCES `playlist` (`playlistId`),
  CONSTRAINT `widget_ibfk_2` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widget`
--

LOCK TABLES `widget` WRITE;
/*!40000 ALTER TABLE `widget` DISABLE KEYS */;
INSERT INTO `widget` VALUES
(1,7,1,'image',10,1,10,0,0,2147483647,1731533203,1731533203),
(10,11,1,'image',30,1,30,1,0,2147483647,1731533829,1731534825),
(11,11,1,'image',10,2,10,0,0,2147483647,1731533867,1731534825),
(13,12,1,'ticker',5,1,5,1,0,2147483647,1731533622,1731535242),
(14,11,1,'image',10,3,10,0,0,2147483647,1731534825,1731534825),
(15,11,1,'image',10,4,10,0,0,2147483647,1731534831,1731534831),
(16,11,1,'image',10,5,10,0,0,2147483647,1731534838,1731534838),
(17,11,1,'image',10,6,10,0,0,2147483647,1731534842,1731534842),
(18,11,1,'image',10,7,10,0,0,2147483647,1731534847,1731534847),
(19,13,1,'ticker',5,1,5,1,0,2147483647,1731535920,1731536027);
/*!40000 ALTER TABLE `widget` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgethistory`
--

DROP TABLE IF EXISTS `widgethistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `widgethistory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `layoutHistoryId` int(11) NOT NULL,
  `widgetId` int(11) NOT NULL,
  `mediaId` int(11) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `layoutHistoryId` (`layoutHistoryId`),
  CONSTRAINT `widgethistory_ibfk_1` FOREIGN KEY (`layoutHistoryId`) REFERENCES `layouthistory` (`layoutHistoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgethistory`
--

LOCK TABLES `widgethistory` WRITE;
/*!40000 ALTER TABLE `widgethistory` DISABLE KEYS */;
INSERT INTO `widgethistory` VALUES
(1,2,2,NULL,'ticker','Wired'),
(2,2,3,24,'image','Main Screen'),
(3,2,4,25,'image',NULL),
(4,2,5,NULL,'subplaylist','Picture Feed'),
(5,3,9,NULL,'ticker','Wired'),
(6,3,6,24,'image','Main Screen'),
(7,3,7,25,'image',NULL),
(8,3,8,NULL,'subplaylist','Picture Feed');
/*!40000 ALTER TABLE `widgethistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgetoption`
--

DROP TABLE IF EXISTS `widgetoption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `widgetoption` (
  `widgetId` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `option` varchar(254) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`widgetId`,`type`,`option`),
  CONSTRAINT `widgetoption_ibfk_1` FOREIGN KEY (`widgetId`) REFERENCES `widget` (`widgetId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgetoption`
--

LOCK TABLES `widgetoption` WRITE;
/*!40000 ALTER TABLE `widgetoption` DISABLE KEYS */;
INSERT INTO `widgetoption` VALUES
(1,'attrib','enableStat','Inherit'),
(1,'attrib','scaleType','center'),
(10,'attrib','align','center'),
(10,'attrib','enableStat','Inherit'),
(10,'attrib','name','Main Screen'),
(10,'attrib','scaleType','center'),
(10,'attrib','valign','middle'),
(11,'attrib','enableStat','Inherit'),
(11,'attrib','scaleType','center'),
(13,'attrib','allowedAttributes',''),
(13,'attrib','backgroundColor','rgba(37,148,47,0)'),
(13,'attrib','copyright',''),
(13,'attrib','dateFormat',NULL),
(13,'attrib','decodeHtml','0'),
(13,'attrib','disableDateSort','0'),
(13,'attrib','durationIsPerItem','1'),
(13,'attrib','effect','scrollVert'),
(13,'attrib','enableStat','Inherit'),
(13,'attrib','font-size','36'),
(13,'attrib','itemsPerPage',NULL),
(13,'attrib','itemsSideBySide','0'),
(13,'attrib','lowerLimit','0'),
(13,'attrib','name','Wired'),
(13,'attrib','noDataMessage_advanced','0'),
(13,'attrib','numItems','1'),
(13,'attrib','overrideTemplate','0'),
(13,'attrib','randomiseItems','0'),
(13,'attrib','reverseOrder','0'),
(13,'attrib','speed','1000'),
(13,'attrib','stripTags',''),
(13,'attrib','takeItemsFrom','start'),
(13,'attrib','templateId','title-only'),
(13,'attrib','textDirection','ltr'),
(13,'attrib','title-color',''),
(13,'attrib','updateInterval','60'),
(13,'attrib','updateIntervalImages','240'),
(13,'attrib','upperLimit','0'),
(13,'attrib','uri','https%3A%2F%2Fwww.wired.com%2Ffeed%2Frss'),
(13,'attrib','xmds','1'),
(13,'cdata','javaScript',''),
(13,'cdata','noDataMessage','<span style=\"font-size: 48px; color:#ffffff;\">No Data returned from the source</span>'),
(14,'attrib','enableStat','Inherit'),
(14,'attrib','scaleType','center'),
(15,'attrib','enableStat','Inherit'),
(15,'attrib','scaleType','center'),
(16,'attrib','enableStat','Inherit'),
(16,'attrib','scaleType','center'),
(17,'attrib','enableStat','Inherit'),
(17,'attrib','scaleType','center'),
(18,'attrib','enableStat','Inherit'),
(18,'attrib','scaleType','center'),
(19,'attrib','allowedAttributes',''),
(19,'attrib','backgroundColor',''),
(19,'attrib','copyright',''),
(19,'attrib','dateFormat',NULL),
(19,'attrib','decodeHtml','0'),
(19,'attrib','disableDateSort','0'),
(19,'attrib','durationIsPerItem','1'),
(19,'attrib','effect','scrollVert'),
(19,'attrib','enableStat','Inherit'),
(19,'attrib','font-size',NULL),
(19,'attrib','itemsPerPage','6'),
(19,'attrib','itemsSideBySide','0'),
(19,'attrib','lowerLimit','0'),
(19,'attrib','name','MIT-RSS'),
(19,'attrib','noDataMessage_advanced','0'),
(19,'attrib','numItems','6'),
(19,'attrib','overrideTemplate','0'),
(19,'attrib','randomiseItems','0'),
(19,'attrib','reverseOrder','0'),
(19,'attrib','speed','1000'),
(19,'attrib','stripTags',''),
(19,'attrib','takeItemsFrom','start'),
(19,'attrib','templateId','title-only'),
(19,'attrib','textDirection','ltr'),
(19,'attrib','title-color',''),
(19,'attrib','updateInterval','60'),
(19,'attrib','updateIntervalImages','240'),
(19,'attrib','upperLimit','0'),
(19,'attrib','uri','https%3A%2F%2Fcdn.technologyreview.com%2Fc%2Fcomputing%2Frss%2F'),
(19,'attrib','xmds','1'),
(19,'cdata','javaScript',''),
(19,'cdata','noDataMessage','<span style=\"font-size: 48px; color:#ffffff;\">No Data returned from the source</span>');
/*!40000 ALTER TABLE `widgetoption` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-20  8:56:53
