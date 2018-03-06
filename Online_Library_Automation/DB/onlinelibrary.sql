/*
SQLyog Ultimate v8.82 
MySQL - 5.1.45-community : Database - onlinelibrary
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `login` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pswd` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `admin` */

insert  into `admin`(`login`,`pswd`) values ('admin','admin');

/*Table structure for table `book_mstr` */

DROP TABLE IF EXISTS `book_mstr`;

CREATE TABLE `book_mstr` (
  `bname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `author_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_no` int(4) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `no_copy` int(2) DEFAULT NULL,
  `issue_copy` int(2) DEFAULT '0',
  PRIMARY KEY (`bname`),
  KEY `FK_book_mstr` (`pname`),
  CONSTRAINT `FK_book_mstr` FOREIGN KEY (`pname`) REFERENCES `publisher_mstr` (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `book_mstr` */

insert  into `book_mstr`(`bname`,`author_name`,`pname`,`page_no`,`price`,`no_copy`,`issue_copy`) values ('3','3','new prints',5,'5.00',5,0),('C in Depth','Deepali Srivastava','TechGuru',350,'430.00',10,0),('C sharp Programming','Vivek Pandey','ram publication',440,'376.00',4,2),('CBNST','P. Mishra','ram publication',3000,'350.00',20,0),('HTML','William Jhonson','Hindustan Press',2000,'200.00',30,0),('Java','James','TechGuru',300,'200.00',20,1),('Java Core','1','Hindustan Press',1,'1.00',1,0),('Let us C','Pankaj Misra','Hindustan Press',310,'215.00',10,6),('PHP','P. Mishra','Hindustan Press',400,'270.00',20,0);

/*Table structure for table `isuue_mstr` */

DROP TABLE IF EXISTS `isuue_mstr`;

CREATE TABLE `isuue_mstr` (
  `issue_no` int(11) NOT NULL AUTO_INCREMENT,
  `enroll_no` int(11) DEFAULT NULL,
  `bname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `fine` decimal(6,2) DEFAULT '0.00',
  `book_returned` int(1) DEFAULT '0',
  PRIMARY KEY (`issue_no`),
  KEY `FK_isuue_mstr1` (`enroll_no`),
  KEY `FK_isuue_mstr` (`bname`),
  CONSTRAINT `FK_isuue_mstr` FOREIGN KEY (`bname`) REFERENCES `book_mstr` (`bname`) ON UPDATE CASCADE,
  CONSTRAINT `FK_isuue_mstr1` FOREIGN KEY (`enroll_no`) REFERENCES `stu_mstr` (`enroll_no`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `isuue_mstr` */

insert  into `isuue_mstr`(`issue_no`,`enroll_no`,`bname`,`issue_date`,`return_date`,`fine`,`book_returned`) values (100,1000,'C sharp Programming','2013-04-12','2013-04-12','0.00',1),(102,1001,'C sharp Programming','2013-04-12','2014-05-03','568.50',1),(103,1002,'C sharp Programming','2013-04-02','2013-04-12','4.50',1),(104,1003,'Let us C','2013-04-12','2013-04-12','0.00',1),(105,1000,'Let us C','2014-05-02','2014-05-09','0.00',1),(106,1003,'Java','2014-05-09',NULL,'0.00',0),(107,1002,'C sharp Programming','2014-05-09',NULL,'0.00',0),(108,1003,'Let us C','2014-05-09',NULL,'0.00',0);

/*Table structure for table `publisher_mstr` */

DROP TABLE IF EXISTS `publisher_mstr`;

CREATE TABLE `publisher_mstr` (
  `pname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `publisher_mstr` */

insert  into `publisher_mstr`(`pname`,`address`,`city`,`state`,`country`,`pin`,`phone`,`email`) values ('Analyze InfoTech','Lucknow','Lucknow','up','India','20012','9839434821','pratham.anilyadav@gmail.com'),('Hindustan Press','HazratGanj','Lucknow','Uttar Pradesh','india','123','0522789','hindustan@gmail.com'),('new prints','aliganj','Lucknow','up','india','123','0522789','dffg@dfff.com'),('ram publication','kaisarbagh','lko','up','india','123','0522789','ram@dashrath.com'),('TechGuru','LalBagh','Lucknow','up','india','123','0522789','techguru@gmail.com'),('Tom Cat','Lucknow','Lucknow','UP','India','20012','9839434821','ashbhandari44@gmail.com');

/*Table structure for table `stu_mstr` */

DROP TABLE IF EXISTS `stu_mstr`;

CREATE TABLE `stu_mstr` (
  `enroll_no` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sclass` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stream` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `semester` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pswd` varchar(20) COLLATE utf8_unicode_ci DEFAULT '123456',
  `photo` longblob,
  PRIMARY KEY (`enroll_no`)
) ENGINE=InnoDB AUTO_INCREMENT=1020 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;