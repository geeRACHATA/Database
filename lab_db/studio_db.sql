# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;


# Host: localhost    Database: Studio_db
# ------------------------------------------------------
# Server version 5.5.5-10.1.36-MariaDB

DROP DATABASE IF EXISTS `Studio_db`;
CREATE DATABASE `Studio_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Studio_db`;

#
# Source for table department
#

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEPT_NAME` varchar(45) DEFAULT NULL,
  `DEPT_TEL` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`DEPT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Dumping data for table department
#

INSERT INTO `department` VALUES (1,'ฝ่ายเทคนิค','001');
INSERT INTO `department` VALUES (2,'ฝ่ายงานพร็อพ ','002');
INSERT INTO `department` VALUES (3,'ฝ่ายตัดต่อ','003');
INSERT INTO `department` VALUES (4,'ฝ่ายถ่ายทำ','004');
INSERT INTO `department` VALUES (5,'นักแสดง','005');
INSERT INTO `department` VALUES (6,'ผู้กำกับ','006');
INSERT INTO `department` VALUES (7,'คนเขียนบท','007');
INSERT INTO `department` VALUES (8,'ฝ่ายเสริมสวย','008');

#
# Source for table employee
#

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `EMP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMP_FNAME` varchar(45) DEFAULT NULL,
  `EMP_LNAME` varchar(45) DEFAULT NULL,
  `EMP_SEX` varchar(5) DEFAULT NULL,
  `EMP_TEL` varchar(45) DEFAULT NULL,
  `DEPT_ID` int(11) NOT NULL,
  PRIMARY KEY (`EMP_ID`),
  KEY `fk_employee_departmant_idx` (`DEPT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=53211219 DEFAULT CHARSET=utf8;

#
# Dumping data for table employee
#

INSERT INTO `employee` VALUES (53211201,'สมชาย','เข็มกลัด','ชาย','0893221443',1);
INSERT INTO `employee` VALUES (53211202,'บานเย็น','รากแก่น','หญิง','0842441442',5);
INSERT INTO `employee` VALUES (53211203,'สมพงษ์','เลิศทหาร','ชาย','0838881438',2);
INSERT INTO `employee` VALUES (53211204,'ประภาศ','ก้อนทอง','ชาย','0864661434',4);
INSERT INTO `employee` VALUES (53211205,'ธนากร','พิชัยวรรณ','ชาย','0858212259',3);
INSERT INTO `employee` VALUES (53211206,'โภคิน','คำวิไลศักดิ์','ชาย','0893311333',3);
INSERT INTO `employee` VALUES (53211207,'กนก','ปัญญากุล','หญิง','0892231122',6);
INSERT INTO `employee` VALUES (53211208,'สุกฤษฎิ์','วิเศษแก้ว','ชาย','0909966425',5);
INSERT INTO `employee` VALUES (53211209,'พรชัย','ไม้จันทร์','ชาย','0893343222',5);
INSERT INTO `employee` VALUES (53211210,'นภัทร','อินทร์ใจเอื้อ','ชาย','0808811304',4);
INSERT INTO `employee` VALUES (53211212,'ไพบูลย์','สมนึก','ชาย','0955369796',7);


#
#  Foreign keys for table employee
#

ALTER TABLE `employee`
ADD CONSTRAINT `fk_employee_departmant` FOREIGN KEY (`DEPT_ID`) REFERENCES `department` (`DEPT_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
