-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dblatihan1
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `mst_blog`
--

DROP TABLE IF EXISTS `mst_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_blog` (
  `id_blog` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `date_input` date NOT NULL,
  PRIMARY KEY (`id_blog`),
  KEY `fk_id_kategori` (`id_kategori`),
  CONSTRAINT `fk_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `mst_kategoriblog` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_blog`
--

LOCK TABLES `mst_blog` WRITE;
/*!40000 ALTER TABLE `mst_blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_kategoriblog`
--

DROP TABLE IF EXISTS `mst_kategoriblog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_kategoriblog` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nm_kategori` varchar(50) NOT NULL,
  `is_active` int(2) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_kategoriblog`
--

LOCK TABLES `mst_kategoriblog` WRITE;
/*!40000 ALTER TABLE `mst_kategoriblog` DISABLE KEYS */;
INSERT INTO `mst_kategoriblog` VALUES (9,'dewasa',1),(10,'anak-anak',1),(11,'anak',1),(12,'sport',1),(13,'entertainment',0);
/*!40000 ALTER TABLE `mst_kategoriblog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_menu`
--

DROP TABLE IF EXISTS `mst_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_menu` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `nmmenu` varchar(20) NOT NULL,
  `link` varchar(30) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_menu`
--

LOCK TABLES `mst_menu` WRITE;
/*!40000 ALTER TABLE `mst_menu` DISABLE KEYS */;
INSERT INTO `mst_menu` VALUES (1,'Dashboard','#',1),(2,'Berita','mod_berita',1),(3,'SettingMenu','mod_menu',3),(4,'Blog','blog',1),(8,'kategori berita','kategori',1);
/*!40000 ALTER TABLE `mst_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_user`
--

DROP TABLE IF EXISTS `mst_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_user`
--

LOCK TABLES `mst_user` WRITE;
/*!40000 ALTER TABLE `mst_user` DISABLE KEYS */;
INSERT INTO `mst_user` VALUES (1,'aninur','202cb962ac59075b964b07152d234b70',1),(2,'hida','202cb962ac59075b964b07152d234b70',1),(3,'aditya','202cb962ac59075b964b07152d234b70',1);
/*!40000 ALTER TABLE `mst_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-30 10:26:13
