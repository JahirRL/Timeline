-- MySQL dump 10.13  Distrib 8.0.12, for macos10.13 (x86_64)
--
-- Host: localhost    Database: Timeline
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Comentario`
--

DROP TABLE IF EXISTS `Comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Comentario` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(280) NOT NULL,
  `idPost` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idComentario`),
  UNIQUE KEY `idComentario_UNIQUE` (`idComentario`),
  KEY `fk_Comentario_Usuario1_idx` (`idUsuario`),
  KEY `fk_Comentario_Post1_idx` (`idPost`),
  CONSTRAINT `fk_Comentario_Post1` FOREIGN KEY (`idPost`) REFERENCES `post` (`idpost`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Comentario_Usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comentario`
--

LOCK TABLES `Comentario` WRITE;
/*!40000 ALTER TABLE `Comentario` DISABLE KEYS */;
INSERT INTO `Comentario` VALUES (1,'tincidunt eget tempus vel pede morbi porttitor lorem id ligula',4,1),(2,'nulla justo aliquam quis turpis eget elit sodales scelerisque',4,9),(3,'erat id mauris vulputate elementum nullam varius nulla facilisi',5,4),(4,'odio odio elementum eu interdum eu tincidunt in leo maecenas',3,4),(5,'ut massa quis augue luctus tincidunt nulla mollis',7,6),(6,'lacus curabitur at ipsum ac tellus semper interdum mauris',9,9),(7,'non mattis pulvinar nulla pede ullamcorper augue a',2,9),(8,'orci pede venenatis non sodales sed tincidunt eu felis',8,3),(9,'duis faucibus accumsan odio curabitur convallis duis consequat dui nec',2,8),(10,'duis bibendum morbi non quam nec dui luctus rutrum',7,4);
/*!40000 ALTER TABLE `Comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Post`
--

DROP TABLE IF EXISTS `Post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Post` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(280) NOT NULL,
  `fecha` datetime NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idPost`),
  UNIQUE KEY `idPost_UNIQUE` (`idPost`),
  KEY `fk_Post_Usuario_idx` (`idUsuario`),
  CONSTRAINT `fk_Post_Usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Post`
--

LOCK TABLES `Post` WRITE;
/*!40000 ALTER TABLE `Post` DISABLE KEYS */;
INSERT INTO `Post` VALUES (1,'vel sem sed sagittis nam congue risus semper','2018-05-31 02:58:34',10),(2,'ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel','2018-08-09 12:34:12',4),(3,'maecenas rhoncus aliquam lacus morbi quis tortor id nulla','2018-01-14 05:06:16',9),(4,'orci vehicula condimentum curabitur in libero ut massa volutpat convallis','2017-12-27 15:06:41',3),(5,'suscipit ligula in lacus curabitur at ipsum ac','2018-06-13 07:26:17',4),(6,'sapien arcu sed augue aliquam erat volutpat in congue etiam','2018-11-29 10:28:52',10),(7,'interdum mauris non ligula pellentesque ultrices phasellus id','2018-03-12 01:38:44',9),(8,'nisi volutpat eleifend donec ut dolor morbi vel','2018-08-03 15:28:47',10),(9,'ante nulla justo aliquam quis turpis eget elit','2018-06-12 06:49:53',2),(10,'sollicitudin ut suscipit a feugiat et eros vestibulum ac est','2018-04-03 18:54:31',5);
/*!40000 ALTER TABLE `Post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'root','root@example.com','toor'),(2,'Pavia','poglethorpe0@usnews.com','7BvmjjFg'),(3,'Dom','dbrevitt1@example.com','2Zocz4l'),(4,'Egor','edacks2@reuters.com','yfA3fiFQX'),(5,'Charlotta','ccockshutt3@addtoany.com','J9nfo3Qb'),(6,'Seana','shinckley4@woothemes.com','6N4JBsjxUtQ'),(7,'Mareah','mbraunds5@aol.com','92oSbhDZpb'),(8,'Audi','alemmers6@ucoz.ru','a9YVcSTSxT2'),(9,'Eduino','edobbson7@issuu.com','gqK2mXCCtRx'),(10,'Patricia','piwanicki8@xing.com','ewUPh9kS');
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-13  8:03:39
