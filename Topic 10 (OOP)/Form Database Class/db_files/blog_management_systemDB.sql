/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - blog_management_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog_management_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `blog_management_system`;

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `added_by_user_role_id` int(11) DEFAULT NULL,
  `post_title` text DEFAULT NULL,
  `post_description` longtext DEFAULT NULL,
  `is_active` enum('Active','Inactive') DEFAULT 'Active',
  PRIMARY KEY (`post_id`),
  KEY `author_user_role_id` (`added_by_user_role_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`added_by_user_role_id`) REFERENCES `user_role` (`user_role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `posts` */

insert  into `posts`(`post_id`,`added_by_user_role_id`,`post_title`,`post_description`,`is_active`) values 
(1,2,'Post 1111','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','Active'),
(2,2,'Post 2',' It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','Active'),
(5,1,'post 3','Hidaya TrustZXZXZXZXZXZXZ','Active'),
(9,1,'post 4','qwertyuiopas','Active'),
(10,5,'post 5','asdfghkll','Active'),
(11,5,'Post 6','fskjghakshaskfjslfjaslfa;','Active'),
(13,1,'Post 7','1234567890qwertyuiopasdfghjklzxcvbnm,.','Active'),
(14,6,'Post 8','fljkfljaslfja;fkslfjsla;fjkmvneirwjfajflafjlfjasklfjafas;fjalkf','Active'),
(15,2,'Post 9','fljkfljaslfja;fkslfjsla;fjkmvneirwjfajflafjlfjasklfjafas;fjalkf ','Active'),
(16,2,'Post 10 ','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','Active'),
(17,2,'Post 11','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','Active'),
(18,2,'Post 12','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','Active'),
(19,2,'Post 13','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','Active'),
(20,2,'Post 14','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','Active'),
(21,2,'Post 15','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','Active'),
(22,2,'Post 16','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','Active'),
(23,5,'Post 17','fskjghakshaskfjslfjaslfa;','Active'),
(24,5,'Post 18','fskjghakshaskfjslfjaslfa;','Active'),
(25,5,'Post 19','fskjghakshaskfjslfjaslfa;','Active'),
(26,5,'Post 20','fskjghakshaskfjslfjaslfa;','Active');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `roles` */

insert  into `roles`(`role_id`,`role_type`) values 
(1,'Admin'),
(2,'Author'),
(3,'User');

/*Table structure for table `user_logs` */

DROP TABLE IF EXISTS `user_logs`;

CREATE TABLE `user_logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `logged_in` varchar(100) NOT NULL,
  `logged_out` varchar(100) DEFAULT 'User not logged out',
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user_logs` */

insert  into `user_logs`(`log_id`,`user_id`,`logged_in`,`logged_out`) values 
(8,5,'29 March 2023 05:26:26 AM','User not logged out'),
(10,5,'30 March 2023 12:24:45 AM','30 March 2023 12:35:37 AM'),
(11,1,'30 March 2023 12:36:14 AM','30 March 2023 12:36:17 AM'),
(12,1,'30 March 2023 12:36:57 AM','30 March 2023 01:59:33 AM'),
(13,5,'30 March 2023 02:07:07 AM','30 March 2023 02:07:09 AM'),
(14,5,'30 March 2023 02:08:32 AM','30 March 2023 02:08:34 AM'),
(15,5,'30 March 2023 02:10:02 AM','30 March 2023 02:10:03 AM'),
(16,5,'30 March 2023 02:12:35 AM','30 March 2023 02:12:36 AM'),
(17,5,'30 March 2023 02:13:39 AM','30 March 2023 02:13:41 AM'),
(18,1,'30 March 2023 02:17:17 AM','30 March 2023 02:17:29 AM'),
(19,1,'30 March 2023 02:19:56 AM','30 March 2023 02:19:58 AM'),
(20,1,'30 March 2023 02:24:11 AM','30 March 2023 02:24:14 AM'),
(21,2,'30 March 2023 04:20:18 AM','30 March 2023 04:20:21 AM'),
(22,2,'30 March 2023 04:20:42 AM','30 March 2023 04:20:59 AM'),
(23,5,'30 March 2023 04:33:10 AM','30 March 2023 04:33:19 AM'),
(24,5,'30 March 2023 04:35:21 AM','30 March 2023 04:35:28 AM'),
(25,5,'30 March 2023 04:41:33 AM','30 March 2023 04:41:36 AM'),
(26,5,'30 March 2023 04:50:17 AM','30 March 2023 04:50:18 AM'),
(27,5,'30 March 2023 05:01:06 AM','30 March 2023 05:01:13 AM'),
(28,5,'30 March 2023 05:01:31 AM','30 March 2023 05:01:36 AM'),
(29,5,'30 March 2023 05:07:10 AM','30 March 2023 05:29:54 AM'),
(30,5,'30 March 2023 05:30:01 AM','30 March 2023 05:32:45 AM'),
(31,1,'30 March 2023 05:38:03 AM','User not logged out');

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` enum('Active','Inactive') DEFAULT NULL,
  PRIMARY KEY (`user_role_id`),
  KEY `user_id` (`user_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user_role` */

insert  into `user_role`(`user_role_id`,`user_id`,`role_id`,`is_active`) values 
(1,2,2,'Active'),
(2,1,1,'Active'),
(3,3,3,NULL),
(4,4,2,NULL),
(5,5,2,NULL),
(6,6,2,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) DEFAULT NULL,
  `gender` enum('Female','Male') DEFAULT 'Male',
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` text DEFAULT NULL,
  `is_active` enum('Active','Inactive') DEFAULT 'Active',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`user_id`,`full_name`,`gender`,`user_email`,`user_password`,`is_active`) values 
(1,'Admin Hidaya','Male','admin@gmail.com','12345','Active'),
(2,'Author Nazir','Male','author_nazir@gmail.com','12345','Active'),
(3,'Saba','Female','saba_user@gmail.com','12345','Active'),
(4,'Ali','Male','ali@gmai.com','12345','Active'),
(5,'Mohsin Ali Sahito','Male','m@gmail.com','12345','Active'),
(6,'Example','Male','ex@gmail.com','12345','Active');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
