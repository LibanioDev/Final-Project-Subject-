-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: isabelle
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cadastro_aluno`
--

DROP TABLE IF EXISTS `cadastro_aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `matricula` int(16) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `criado_em` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_aluno`
--

LOCK TABLES `cadastro_aluno` WRITE;
/*!40000 ALTER TABLE `cadastro_aluno` DISABLE KEYS */;
INSERT INTO `cadastro_aluno` VALUES (17,'Joao da Silva','joaosilva',953077,'8cb2237d0679ca88db6464eac60da96345513964','Analise e Desenv. de Sistemas','2024-05-02'),(18,'Isabelle Libânio','isabellelibanio',310836,'2e6f9b0d5885b6010f9167787445617f553a735f','Analise e Desenv. de Sistemas','2024-05-02'),(19,'Lucas Silva','lucassilva',962464,'2e6f9b0d5885b6010f9167787445617f553a735f','Analise e Desenv. de Sistemas','2024-05-08'),(22,'Pedro Ribeiro','pedroribeiro',784280,'e0f68134d29dc326d115de4c8fab8700a3c4b002','Ciencias Contabeis','2024-05-12'),(23,'Enzo Roberto','enzoroberto',433911,'601f1889667efaebb33b8c12572835da3f027f78','Odontologia','2024-05-12'),(24,'Admin','admin',628287,'d033e22ae348aeb5660fc2140aec35850c4da997','Admin','2024-05-12');
/*!40000 ALTER TABLE `cadastro_aluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'isabelle'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-15 22:27:19
