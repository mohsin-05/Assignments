/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - joins_assignment
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`joins_assignment` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `joins_assignment`;

/*Table structure for table `halls` */

DROP TABLE IF EXISTS `halls`;

CREATE TABLE `halls` (
  `hall_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `tier` int(11) NOT NULL,
  PRIMARY KEY (`hall_id`),
  KEY `movie_id` (`movie_id`),
  CONSTRAINT `halls_ibfk_1` FOREIGN KEY (`hall_id`) REFERENCES `movies` (`hall_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `halls` */

insert  into `halls`(`hall_id`,`movie_id`,`seats`,`tier`) values 
(1,1,50,1),
(2,2,70,2),
(3,3,85,3),
(4,4,100,4);

/*Table structure for table `movies` */

DROP TABLE IF EXISTS `movies`;

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_id` int(11) DEFAULT NULL,
  `person_id` int(11) DEFAULT NULL,
  `movie_name` varchar(25) NOT NULL,
  `time` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`movie_id`),
  KEY `hall_id` (`hall_id`),
  KEY `person_id` (`person_id`),
  CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `halls` (`movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `movies` */

insert  into `movies`(`movie_id`,`hall_id`,`person_id`,`movie_name`,`time`) values 
(1,1,1,'\'Knives Out\'','07:00 PM'),
(2,2,2,'\'Godzilla\'','11:00 PM'),
(3,3,3,'\'The Last Wish\'','02:00 AM'),
(4,4,4,'\'Knives Out\'','11:00 PM');

/*Table structure for table `persons` */

DROP TABLE IF EXISTS `persons`;

CREATE TABLE `persons` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  PRIMARY KEY (`person_id`),
  CONSTRAINT `persons_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `movies` (`person_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `persons` */

insert  into `persons`(`person_id`,`name`,`gender`) values 
(1,'Mohsin','Male'),
(2,'Waqas','Male'),
(3,'Rehman','Male'),
(4,'Faisal','Male');

/*Table structure for table `tickets` */

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_price` int(11) NOT NULL,
  `ticket_tier` int(11) DEFAULT NULL,
  PRIMARY KEY (`ticket_id`),
  CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `persons` (`person_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tickets` */

insert  into `tickets`(`ticket_id`,`ticket_price`,`ticket_tier`) values 
(1,500,1),
(2,600,2),
(3,700,3),
(4,800,4);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
