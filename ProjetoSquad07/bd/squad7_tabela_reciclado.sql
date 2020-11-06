-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: squad7
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tabela_reciclado`
--

DROP TABLE IF EXISTS `tabela_reciclado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tabela_reciclado` (
  `id_reciclado` int NOT NULL AUTO_INCREMENT,
  `nome_material` varchar(100) COLLATE utf8_bin NOT NULL,
  `preco_kg` decimal(5,2) NOT NULL,
  `total_kg` decimal(6,2) NOT NULL,
  `valor_final` decimal(6,2) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id_reciclado`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabela_reciclado`
--

LOCK TABLES `tabela_reciclado` WRITE;
/*!40000 ALTER TABLE `tabela_reciclado` DISABLE KEYS */;
INSERT INTO `tabela_reciclado` VALUES (1,'papelão',0.58,24.00,13.92,'2020-11-03 00:00:00'),(2,'papel branco',0.80,14.00,11.20,'2020-11-03 00:00:00'),(3,'latas aço',0.55,26.00,13.30,'2020-11-03 00:00:00'),(4,'latas alumínio',5.30,21.00,111.30,'2020-11-03 00:00:00'),(5,'vidros',0.18,14.00,2.52,'2020-11-03 00:00:00'),(6,'plásticos rígido',1.85,18.00,33.30,'2020-11-03 00:00:00'),(7,'plástico firme',0.06,13.00,0.78,'2020-11-03 00:00:00'),(8,'pet',0.28,18.00,5.04,'2020-11-03 00:00:00');
/*!40000 ALTER TABLE `tabela_reciclado` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-05  5:42:23
