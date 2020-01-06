/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.16-MariaDB : Database - bunga
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bunga` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bunga`;

/*Table structure for table `macam` */

DROP TABLE IF EXISTS `macam`;

CREATE TABLE `macam` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `macam` */

LOCK TABLES `macam` WRITE;

insert  into `macam`(`id`,`nama`,`warna`) values (123111,'Mawar','Merah'),(123112,'Melati','Putih'),(123113,'Tulip','Kuning'),(123114,'Lili','Abu-Abu'),(123117,'Rose','Pink'),(123118,'Kembang 7 Rupa','Pelangi');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
