/*
Navicat MySQL Data Transfer

Source Server         : LocalhostDhani
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : db_gundar

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-06-23 13:57:39
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `admin_tbl`;
CREATE TABLE `admin_tbl` (
  `admin_username` varchar(50) NOT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL,
  `admin_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`admin_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin_tbl
-- ----------------------------
INSERT INTO `admin_tbl` VALUES ('admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- ----------------------------
-- Table structure for `application_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `application_tbl`;
CREATE TABLE `application_tbl` (
  `application_id` int(11) NOT NULL AUTO_INCREMENT,
  `application_description` text,
  `user_email` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `vacancy_id` int(11) DEFAULT NULL,
  `application_cv` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`application_id`),
  KEY `user_email` (`user_email`),
  KEY `vacancy_id` (`vacancy_id`),
  CONSTRAINT `user_email` FOREIGN KEY (`user_email`) REFERENCES `user_tbl` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `vacancy_id` FOREIGN KEY (`vacancy_id`) REFERENCES `vacancy_tbl` (`vacancy_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of application_tbl
-- ----------------------------
INSERT INTO `application_tbl` VALUES ('2', 'sdasd', 'yutriharis@gmail.com', '2016-06-22 22:54:11', '1', 'file_1466610851.pdf');
INSERT INTO `application_tbl` VALUES ('4', 'sdasd', 'yutriharis@gmail.com', '2016-06-22 22:56:11', '1', 'file_1466610971.pdf');

-- ----------------------------
-- Table structure for `gallery_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `gallery_tbl`;
CREATE TABLE `gallery_tbl` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_name` varchar(50) DEFAULT NULL,
  `gallery_title` varchar(50) DEFAULT NULL,
  `gallery_description` text,
  `admin_username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`gallery_id`),
  KEY `admin` (`admin_username`),
  CONSTRAINT `admin` FOREIGN KEY (`admin_username`) REFERENCES `admin_tbl` (`admin_username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gallery_tbl
-- ----------------------------
INSERT INTO `gallery_tbl` VALUES ('6', 'file_1466541999.jpg', 'jhjkhk', 'jhjhjhjkjj', 'admin');
INSERT INTO `gallery_tbl` VALUES ('7', 'file_1466542054.jpg', 'Gambar 2', 'kdsjfklds', 'admin');
INSERT INTO `gallery_tbl` VALUES ('8', 'file_1466542080.jpg', 'jkj', 'hjkhjk', 'admin');
INSERT INTO `gallery_tbl` VALUES ('9', 'file_1466542089.jpg', 'jhkjh', 'jhjkhk', 'admin');

-- ----------------------------
-- Table structure for `job_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `job_tbl`;
CREATE TABLE `job_tbl` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(100) DEFAULT NULL,
  `job_description` text,
  `job_salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of job_tbl
-- ----------------------------
INSERT INTO `job_tbl` VALUES ('2', 'Front End Programmer', 'Design Web', '5000000');
INSERT INTO `job_tbl` VALUES ('3', 'Back End Programer Java', 'Good skill in java program', '8000000');
INSERT INTO `job_tbl` VALUES ('4', 'Web Developer', 'Good in PHP', '5000000');

-- ----------------------------
-- Table structure for `message_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `message_tbl`;
CREATE TABLE `message_tbl` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_name` varchar(50) DEFAULT NULL,
  `message_subject` varchar(50) DEFAULT NULL,
  `message_email` varchar(50) DEFAULT NULL,
  `message_phone` varchar(15) DEFAULT NULL,
  `message_description` text,
  `message_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of message_tbl
-- ----------------------------

-- ----------------------------
-- Table structure for `user_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `user_tbl`;
CREATE TABLE `user_tbl` (
  `user_email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_phone` varchar(15) DEFAULT NULL,
  `user_address` text,
  `user_gender` varchar(10) DEFAULT NULL,
  `user_full_name` varchar(50) DEFAULT NULL,
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_tbl
-- ----------------------------
INSERT INTO `user_tbl` VALUES ('yutriharis@gmail.com', 'yutriharis', '20ffaaa60e9cce8d1f93ff8b08c25641', '08999805056', 'Sempur 22', 'male', 'Haris Yutri');
INSERT INTO `user_tbl` VALUES ('dhanis@gmail.com', 'dhani', '827ccb0eea8a706c4c34a16891f84e7b', '08912345678', 'Jl. Suramadu 3', 'male', 'Dhani Sulistiyo Wibowo');

-- ----------------------------
-- Table structure for `vacancy_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `vacancy_tbl`;
CREATE TABLE `vacancy_tbl` (
  `vacancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `vacancy_description` text,
  `vacancy_from` date DEFAULT NULL,
  `vacancy_to` date DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `admin_username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`vacancy_id`),
  KEY `job_id` (`job_id`),
  KEY `admin_username` (`admin_username`),
  CONSTRAINT `admin_username` FOREIGN KEY (`admin_username`) REFERENCES `admin_tbl` (`admin_username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `job_id` FOREIGN KEY (`job_id`) REFERENCES `job_tbl` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vacancy_tbl
-- ----------------------------
INSERT INTO `vacancy_tbl` VALUES ('1', '<p>Applicant must see</p>\r\n\r\n<ol>\r\n	<li>HTML</li>\r\n	<li>CSS</li>\r\n	<li>Boostrap</li>\r\n</ol>\r\n', '2016-06-01', '2016-06-15', '2', 'admin');
INSERT INTO `vacancy_tbl` VALUES ('2', '<p>Applicant must see</p>\r\n\r\n<ol>\r\n	<li>Java</li> </ol>', '2016-06-21', '2016-06-23', '3', 'admin');
