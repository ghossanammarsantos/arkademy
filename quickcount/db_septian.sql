/*
SQLyog Community v10.51 
MySQL - 5.5.5-10.1.36-MariaDB : Database - db_septian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_septian` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_septian`;

/*Table structure for table `caleg` */

DROP TABLE IF EXISTS `caleg`;

CREATE TABLE `caleg` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `earned_vote` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `earned_vote` (`earned_vote`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `caleg` */

insert  into `caleg`(`id`,`name`,`earned_vote`) values (1,'Nurhadi Aldo',1001),(2,'Calon 2',5),(3,'Calon 3',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
