/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - error_handling
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`error_handling` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `error_handling`;

/*Table structure for table `error_logs` */

DROP TABLE IF EXISTS `error_logs`;

CREATE TABLE `error_logs` (
  `error_id` int(11) NOT NULL AUTO_INCREMENT,
  `error_time` varchar(100) NOT NULL,
  `error_level` varchar(100) NOT NULL,
  `error_message` varchar(300) NOT NULL,
  `error_file` varchar(100) NOT NULL,
  `error_line` varchar(100) NOT NULL,
  PRIMARY KEY (`error_id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `error_logs` */

insert  into `error_logs`(`error_id`,`error_time`,`error_level`,`error_message`,`error_file`,`error_line`) values 
(1,'18-April-2023 08:29:24 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','28'),
(2,'18-April-2023 08:38:38 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','34'),
(3,'18-April-2023 08:39:22 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','34'),
(4,'18-April-2023 08:39:37 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','34'),
(5,'18-April-2023 08:40:28 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','34'),
(6,'18-April-2023 08:41:01 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','34'),
(7,'18-April-2023 08:41:23 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','34'),
(8,'18-April-2023 08:43:19 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','36'),
(9,'18-April-2023 08:43:19 PM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','39'),
(10,'18-April-2023 08:46:16 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','36'),
(11,'18-April-2023 08:46:16 PM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','39'),
(12,'18-April-2023 08:46:44 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','36'),
(13,'18-April-2023 08:46:45 PM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','39'),
(14,'18-April-2023 08:57:03 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','32'),
(15,'18-April-2023 08:57:03 PM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','35'),
(16,'18-April-2023 08:57:03 PM','2','Undefined variable $fname','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','37'),
(17,'18-April-2023 08:57:34 PM','256','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','32'),
(18,'18-April-2023 08:57:34 PM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','35'),
(19,'18-April-2023 08:58:25 PM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','32'),
(20,'18-April-2023 08:58:26 PM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','35'),
(21,'18-April-2023 08:58:27 PM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','32'),
(22,'18-April-2023 08:58:27 PM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','35'),
(23,'18-April-2023 08:59:32 PM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','32'),
(24,'18-April-2023 08:59:32 PM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','35'),
(25,'18-April-2023 09:00:45 PM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','32'),
(26,'18-April-2023 09:00:45 PM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','35'),
(27,'18-April-2023 09:02:35 PM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','32'),
(28,'18-April-2023 09:02:35 PM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','35'),
(29,'19-April-2023 12:12:38 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','34'),
(30,'19-April-2023 12:12:38 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','37'),
(31,'19-April-2023 12:13:53 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','44'),
(32,'19-April-2023 12:13:53 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','47'),
(33,'19-April-2023 12:14:39 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','48'),
(34,'19-April-2023 12:14:39 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','51'),
(35,'19-April-2023 12:15:33 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','62'),
(36,'19-April-2023 12:15:33 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','65'),
(37,'19-April-2023 12:15:43 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','61'),
(38,'19-April-2023 12:15:43 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(39,'19-April-2023 12:16:02 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','61'),
(40,'19-April-2023 12:16:03 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(41,'19-April-2023 12:16:30 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','61'),
(42,'19-April-2023 12:16:30 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(43,'19-April-2023 12:16:47 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','61'),
(44,'19-April-2023 12:16:47 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(45,'19-April-2023 12:17:39 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','60'),
(46,'19-April-2023 12:17:39 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','63'),
(47,'19-April-2023 12:19:02 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','63'),
(48,'19-April-2023 12:19:02 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','66'),
(49,'19-April-2023 12:19:19 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(50,'19-April-2023 12:19:19 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(51,'19-April-2023 12:20:50 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','63'),
(52,'19-April-2023 12:20:50 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','66'),
(53,'19-April-2023 12:21:01 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','63'),
(54,'19-April-2023 12:21:01 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','66'),
(55,'19-April-2023 12:24:45 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(56,'19-April-2023 12:24:45 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(57,'19-April-2023 12:25:25 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(58,'19-April-2023 12:25:25 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(59,'19-April-2023 12:25:27 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(60,'19-April-2023 12:25:27 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(61,'19-April-2023 12:25:59 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(62,'19-April-2023 12:25:59 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(63,'19-April-2023 12:27:43 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(64,'19-April-2023 12:27:43 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(65,'19-April-2023 12:28:09 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(66,'19-April-2023 12:28:09 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(67,'19-April-2023 12:28:32 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(68,'19-April-2023 12:28:32 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(69,'19-April-2023 12:28:56 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(70,'19-April-2023 12:28:57 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(71,'19-April-2023 12:30:46 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(72,'19-April-2023 12:30:46 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(73,'19-April-2023 12:31:03 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(74,'19-April-2023 12:31:03 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(75,'19-April-2023 12:31:05 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(76,'19-April-2023 12:31:05 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(77,'19-April-2023 12:31:12 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(78,'19-April-2023 12:31:13 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(79,'19-April-2023 12:31:31 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(80,'19-April-2023 12:31:31 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(81,'19-April-2023 12:31:47 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','65'),
(82,'19-April-2023 12:31:47 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','68'),
(83,'19-April-2023 12:31:54 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','65'),
(84,'19-April-2023 12:31:54 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','68'),
(85,'19-April-2023 12:32:28 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(86,'19-April-2023 12:32:29 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(87,'19-April-2023 12:32:39 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(88,'19-April-2023 12:32:39 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(89,'19-April-2023 12:32:53 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(90,'19-April-2023 12:32:53 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(91,'19-April-2023 12:33:10 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(92,'19-April-2023 12:33:10 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(93,'19-April-2023 12:33:26 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(94,'19-April-2023 12:33:26 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67'),
(95,'19-April-2023 12:33:33 AM','512','Error: Notice','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','64'),
(96,'19-April-2023 12:33:33 AM','2','Undefined variable $a','C:xamppEveninghtdocs19696Topic 2257Assignment 119696_MOHSIN_ALI_SAHITO.php','67');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
