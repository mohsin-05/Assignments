/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - shopping
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`shopping` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `shopping`;

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`item_id`),
  CONSTRAINT `item_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `order_item` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `item` */

insert  into `item`(`item_id`,`name`,`price`) values 
(11,'HP Laptop',45000),
(12,'Dell Laptop',50000),
(13,'Pen',10),
(14,'Remote',150),
(15,'Cycle',15000),
(16,'Bag',2000),
(17,'Shirt',1000),
(18,'Watch',2500);

/*Table structure for table `order_item` */

DROP TABLE IF EXISTS `order_item`;

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_item_id`),
  KEY `order_id` (`order_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `order_item` */

insert  into `order_item`(`order_item_id`,`order_id`,`item_id`,`quantity`) values 
(1,101,11,1),
(2,102,13,10),
(3,103,14,2),
(4,104,15,1),
(5,105,16,1),
(6,106,11,2),
(7,107,12,1),
(8,108,13,20),
(9,109,17,5),
(10,110,18,3),
(11,111,12,1),
(12,112,13,5),
(13,113,17,8),
(14,114,15,1),
(15,115,11,1);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_item` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `orders` */

insert  into `orders`(`order_id`,`customer_id`,`order_date`) values 
(101,1,'2023-03-15'),
(102,1,'2023-03-15'),
(103,1,'2023-03-15'),
(104,1,'2023-03-16'),
(105,1,'2023-03-22'),
(106,2,'2023-03-06'),
(107,2,'2023-03-06'),
(108,2,'2023-03-07'),
(109,2,'2023-03-18'),
(110,2,'2023-03-19'),
(111,3,'2023-03-01'),
(112,3,'2023-03-06'),
(113,3,'2023-03-10'),
(114,3,'2023-03-11'),
(115,3,'2023-03-30');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `orders` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`customer_id`,`name`,`gender`,`date_of_birth`,`address`) values 
(1,'Mohsin','Male','2000-03-01','Jamshoro'),
(2,'Ahsan','Male','2006-01-06','Karachi'),
(3,'Hassan','Male','1995-07-12','Nawabshah');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
