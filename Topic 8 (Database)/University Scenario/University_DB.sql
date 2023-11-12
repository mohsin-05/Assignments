/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - university
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`university` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `university`;

/*Table structure for table `batch` */

DROP TABLE IF EXISTS `batch`;

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(11) NOT NULL,
  `batch_name` varchar(25) NOT NULL,
  PRIMARY KEY (`batch_id`),
  KEY `dept_id` (`dept_id`),
  CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `subjects` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `batch` */

insert  into `batch`(`batch_id`,`dept_id`,`batch_name`) values 
(1,4,'14SW'),
(2,3,'13TL'),
(3,2,'12CS'),
(4,1,'11IT');

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) DEFAULT NULL,
  `dept_name` varchar(25) NOT NULL,
  `description` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`dept_id`),
  UNIQUE KEY `teacher_id` (`teacher_id`),
  CONSTRAINT `department_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `student` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `department_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `batch` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `department` */

insert  into `department`(`dept_id`,`teacher_id`,`dept_name`,`description`) values 
(1,1,'Information Technology',NULL),
(2,2,'Computer Science',NULL),
(3,3,'Telecommunication',NULL),
(4,4,'Software',NULL);

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `email` (`email`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `student` */

insert  into `student`(`student_id`,`dept_id`,`first_name`,`middle_name`,`last_name`,`email`,`gender`) values 
(1,1,'Mohsin','Ali','Sahito','mohsin1@gmail.com','Male'),
(2,1,'Shahzaib','Ali','Arain','szb@gmail.com','Male'),
(3,1,'Ahmed',NULL,'Khan','Ahmed@yahoo.com','Male'),
(4,4,'Nadia',NULL,'Khan','nadia@yahoo.com','Female'),
(5,2,'Iqra',NULL,'Channa','iq@gmail.com','Female'),
(6,3,'Rehman','Ali','Sahito','rehman@gmail.com','Male'),
(7,2,'Abdullah',NULL,'Solangi','ab@gmail.com','Male'),
(8,4,'Faisal',NULL,'Shaikh','fs@gmail.com','Male'),
(9,3,'Khuram','Ali','Shah','kas@gmail.com','Male'),
(10,3,'Fatima',NULL,'Khan','fk@gamil.com','Female');

/*Table structure for table `subjects` */

DROP TABLE IF EXISTS `subjects`;

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` int(11) NOT NULL,
  `subject_name` varchar(25) NOT NULL,
  PRIMARY KEY (`subject_id`),
  KEY `batch_id` (`batch_id`),
  CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `teacher_subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `subjects` */

insert  into `subjects`(`subject_id`,`batch_id`,`subject_name`) values 
(1,2,'Java'),
(2,4,'PHP'),
(3,3,'SQL'),
(4,1,'JavaScript'),
(5,2,'CSS');

/*Table structure for table `teacher` */

DROP TABLE IF EXISTS `teacher`;

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  PRIMARY KEY (`teacher_id`),
  CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_subject` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `department` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `teacher` */

insert  into `teacher`(`teacher_id`,`first_name`,`middle_name`,`last_name`,`email`,`gender`) values 
(1,'Asad','Ali','Shaikh','asas1@gmail.com','Male'),
(2,'Ali','Ahmed','Shaikh','ali1@gmail.com','Male'),
(3,'Naveed','Ali','Jakhro','naveed@gmail.com','Male'),
(4,'Sanaullah',NULL,'Memon','sm@gmail.com','Male');

/*Table structure for table `teacher_subject` */

DROP TABLE IF EXISTS `teacher_subject`;

CREATE TABLE `teacher_subject` (
  `teacher_subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_subject_id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `teacher_subject` */

insert  into `teacher_subject`(`teacher_subject_id`,`teacher_id`,`subject_id`) values 
(1,2,1),
(2,3,1),
(3,1,3),
(4,2,3),
(5,3,2),
(6,1,4),
(7,4,5);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
