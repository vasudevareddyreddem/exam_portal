/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - sarada
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sarada` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sarada`;

/*Table structure for table `exam_list` */

DROP TABLE IF EXISTS `exam_list`;

CREATE TABLE `exam_list` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `total_questions` varchar(250) DEFAULT NULL,
  `right_answers` varchar(250) DEFAULT NULL,
  `wrong_minus_answer` varchar(250) DEFAULT NULL,
  `time_limit` varchar(250) DEFAULT NULL,
  `desc` text,
  `completed` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1' COMMENT '0=deactive;1=active;2=delete',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `exam_list` */

insert  into `exam_list`(`e_id`,`title`,`total_questions`,`right_answers`,`wrong_minus_answer`,`time_limit`,`desc`,`completed`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'title','2','1','1','00:40:00','test',0,1,'2018-10-05 11:04:51','2018-10-08 18:21:39',1),(2,'exam1','10','1','12','00:30:00','test',0,1,'2018-10-05 12:49:50','2018-10-05 13:58:34',1),(3,'social exam','2','2','1','00:50:00','tesing ',0,1,'2018-10-08 11:08:56','2018-10-08 11:08:56',1),(4,'','','','','','',0,2,'2018-10-09 17:59:10','2018-10-09 18:01:46',1),(5,'vasu','2','1','1','12:10:10','testing',0,1,'2018-10-09 18:01:05','2018-10-09 18:01:05',1);

/*Table structure for table `exam_questions` */

DROP TABLE IF EXISTS `exam_questions`;

CREATE TABLE `exam_questions` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `examm_id` int(11) DEFAULT NULL,
  `question` text,
  `option_1` varchar(250) DEFAULT NULL,
  `option_2` varchar(250) DEFAULT NULL,
  `option_3` varchar(250) DEFAULT NULL,
  `option_4` varchar(250) DEFAULT NULL,
  `correct_answer` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `exam_questions` */

insert  into `exam_questions`(`q_id`,`question_id`,`examm_id`,`question`,`option_1`,`option_2`,`option_3`,`option_4`,`correct_answer`,`created_at`,`updated_at`,`created_by`) values (1,1,1,'(a+b)^2','a^2+b^2+2ab','a^2+b^2-2ab','a^2+b^2','a^2-b^2','a','2018-10-05 12:30:01','2018-10-05 15:24:44',1),(2,2,1,'(a-b)^2','a^2+b^2+2ab','a^2+b^2-2ab','a^2+b^2','a^2-b^2','b','2018-10-05 12:30:01','2018-10-05 15:24:44',1),(3,1,2,'hgfh 1','ghfgh','fgh','fgh','ghdfg','b','2018-10-05 12:52:58','2018-10-05 12:52:58',1),(4,2,2,'question2','a1','a2','3','4','b','2018-10-05 12:52:58','2018-10-05 12:52:58',1),(5,3,2,'q3','an1','an2','an3','an4','a','2018-10-05 12:52:58','2018-10-05 12:52:58',1),(6,4,2,'qes4','ans1','ans2','ans3','ans4','c','2018-10-05 12:52:58','2018-10-05 12:52:58',1),(7,5,2,'question5','a1','a^2+b^2-2ab','a^2+b^2','a^2-b^2','d','2018-10-05 12:52:58','2018-10-05 12:52:58',1),(8,6,2,'Question 6','option1','option2','option3','option4','b','2018-10-05 12:52:58','2018-10-05 12:52:58',1),(9,7,2,'Question 7','none','test','2','3','a','2018-10-05 12:52:58','2018-10-05 12:52:58',1),(10,8,2,'Question 8','a^2+b^2+2ab','fasd','fasdf','a-b','c','2018-10-05 12:52:58','2018-10-05 12:52:58',1),(11,9,2,'Question 9','a^2+b^2+2ab','a^2+b^2+2ab','a^2+b^2+2ab','a^2+b^2+2abcaa','d','2018-10-05 12:52:58','2018-10-05 12:52:58',1),(12,10,2,'Question 10','dsfasd','fasd','fasdf','xcxcZXC','d','2018-10-05 12:52:58','2018-10-05 12:52:58',1),(13,1,3,'testing ','likethis','xcZXC','fasdf','numbar','b','2018-10-08 11:10:01','2018-10-08 11:10:01',1),(14,2,3,'a^2+b^2+2ab','a^2+b^2+2ab','a2','a^2+b^2','a^2-b^2','c','2018-10-08 11:10:01','2018-10-08 11:10:01',1),(15,1,5,'hello','vasu','deva','reddy','chiina','a','2018-10-09 18:01:41','2018-10-09 18:01:41',1),(16,2,5,'how are you','test','fine','not  bad','gud','b','2018-10-09 18:01:41','2018-10-09 18:01:41',1);

/*Table structure for table `exam_time_timerid` */

DROP TABLE IF EXISTS `exam_time_timerid`;

CREATE TABLE `exam_time_timerid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `exam_id` int(11) DEFAULT NULL,
  `start_time` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `exam_time_timerid` */

insert  into `exam_time_timerid`(`id`,`user_id`,`exam_id`,`start_time`) values (20,3,1,'00:31:59'),(21,3,1,'00:40:00'),(22,3,1,'00:40:00'),(23,3,1,'00:40:00'),(24,3,1,'00:40:00'),(25,2,1,'00:40:00');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `message` text,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`id`,`user_id`,`message`,`created_at`,`created_by`,`date`) values (2,3,'xcZXCZXC','2018-10-08 12:08:42',3,'2018-10-08');

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `n_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` text,
  `message` text,
  `read` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `notifications` */

insert  into `notifications`(`n_id`,`user_id`,`title`,`message`,`read`,`status`,`created_at`,`created_by`) values (NULL,1,'Welcome to exam','this  is  test  message',1,1,'2018-10-09 17:00:47',1),(NULL,2,'Welcome to exam','this  is  test  message',1,1,'2018-10-09 17:00:47',1),(NULL,3,'Welcome to exam','this  is  test  message',1,1,'2018-10-09 17:00:47',1),(NULL,4,'Welcome to exam','this  is  test  message',1,1,'2018-10-09 17:00:47',1),(NULL,5,'Welcome to exam','this  is  test  message',1,1,'2018-10-09 17:00:47',1),(NULL,6,'Welcome to exam','this  is  test  message',1,1,'2018-10-09 17:00:47',1),(NULL,1,'social exam','like  this',1,1,'2018-10-09 17:01:41',1),(NULL,2,'social exam','like  this',1,1,'2018-10-09 17:01:41',1),(NULL,3,'social exam','like  this',1,1,'2018-10-09 17:01:41',1),(NULL,4,'social exam','like  this',1,1,'2018-10-09 17:01:41',1),(NULL,5,'social exam','like  this',1,1,'2018-10-09 17:01:41',1),(NULL,6,'social exam','like  this',1,1,'2018-10-09 17:01:41',1),(NULL,1,'dfdsf','dsfasd',1,1,'2018-10-09 17:17:29',1),(NULL,2,'dfdsf','dsfasd',1,1,'2018-10-09 17:17:29',1),(NULL,3,'dfdsf','dsfasd',1,1,'2018-10-09 17:17:29',1),(NULL,4,'dfdsf','dsfasd',1,1,'2018-10-09 17:17:29',1),(NULL,5,'dfdsf','dsfasd',1,1,'2018-10-09 17:17:29',1),(NULL,6,'dfdsf','dsfasd',1,1,'2018-10-09 17:17:29',1);

/*Table structure for table `user_exams` */

DROP TABLE IF EXISTS `user_exams`;

CREATE TABLE `user_exams` (
  `u_e_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `exam_id` int(11) DEFAULT NULL,
  `q_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `correct_answer` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`u_e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

/*Data for the table `user_exams` */

insert  into `user_exams`(`u_e_id`,`user_id`,`exam_id`,`q_id`,`question_id`,`answer`,`correct_answer`,`created_at`,`created_by`,`date`) values (16,2,1,1,1,'a','a','2018-10-05 18:52:52',2,'2018-10-05'),(17,2,1,2,2,'b','c','2018-10-05 18:52:55',2,'2018-10-05'),(30,4,3,14,2,'c','','2018-10-08 12:31:24',4,'2018-10-08'),(48,5,3,13,1,'a','','2018-10-08 12:53:34',5,'2018-10-08'),(49,5,2,3,1,'a','a','2018-10-08 14:35:53',5,'2018-10-08'),(50,5,1,1,1,'a','a','2018-10-08 14:39:52',5,'2018-10-08'),(61,3,2,3,1,'a','a','2018-10-08 15:06:36',3,'2018-10-08'),(62,3,2,4,2,'a','c','2018-10-08 15:06:40',3,'2018-10-08'),(63,3,3,13,1,'a','a','2018-10-08 15:30:04',3,'2018-10-08'),(65,3,1,1,1,'a','a','2018-10-08 15:58:04',3,'2018-10-08'),(66,3,1,2,2,'b','b','2018-10-08 15:58:07',3,'2018-10-08'),(67,4,1,1,1,'a','a','2018-10-08 16:19:02',4,'2018-10-08'),(68,4,1,2,2,'b','b','2018-10-08 16:19:06',4,'2018-10-08'),(69,6,1,1,1,'a','a','2018-10-09 12:30:06',6,'2018-10-09'),(70,6,1,2,2,'b','b','2018-10-09 12:30:09',6,'2018-10-09'),(73,2,5,15,1,'a','a','2018-10-09 18:07:24',2,'2018-10-09'),(74,2,5,16,2,'b','b','2018-10-09 18:07:30',2,'2018-10-09'),(75,2,2,3,1,'a','b','2018-10-09 18:08:40',2,'2018-10-09'),(76,2,2,4,2,'a','b','2018-10-09 18:08:44',2,'2018-10-09'),(77,2,2,5,3,'a','a','2018-10-09 18:08:47',2,'2018-10-09'),(78,2,2,6,4,'a','c','2018-10-09 18:08:52',2,'2018-10-09'),(79,2,2,7,5,'a','d','2018-10-09 18:08:54',2,'2018-10-09'),(80,2,2,8,6,'a','b','2018-10-09 18:08:56',2,'2018-10-09'),(81,2,2,9,7,'a','a','2018-10-09 18:08:59',2,'2018-10-09'),(82,2,2,10,8,'a','c','2018-10-09 18:09:02',2,'2018-10-09'),(83,2,2,11,9,'a','d','2018-10-09 18:09:04',2,'2018-10-09'),(84,2,2,12,10,'a','d','2018-10-09 18:09:07',2,'2018-10-09');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT '2',
  `email_id` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `dob` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`u_id`,`role`,`email_id`,`mobile`,`password`,`org_password`,`name`,`gender`,`dob`,`country`,`state`,`address`,`profile_pic`,`status`,`created_at`,`updated_at`) values (1,1,'admin@gmail.com','8500050944','e10adc3949ba59abbe56e057f20f883e','123456','Admin','Female','2018-10-18','Azerbaijan','Arunachal Pradesh','kadapa',NULL,1,'2018-10-04 19:08:29','2018-10-04 19:08:27'),(2,2,'inventory@gmail.com','8500050944','e10adc3949ba59abbe56e057f20f883e','123456','vasudevareddy','Male','2018-10-05','India','Andhra Pradesh',NULL,NULL,1,'2018-10-05 15:27:10','2018-10-05 15:27:10'),(3,2,'chinna@gmail.com','8500050944','e10adc3949ba59abbe56e057f20f883e','123456','vasudevareddy chinna','Male','2018-10-02','Australia','Karnataka','kadapa','1539003321.jpg',1,'2018-10-07 19:20:03','2018-10-07 19:20:03'),(4,2,'reddem@gmail.com','8019345212','e10adc3949ba59abbe56e057f20f883e','123456','reddem','Male','2018-10-30','Austria','Madhya Pradesh',NULL,NULL,1,'2018-10-08 12:31:14','2018-10-08 12:31:14'),(5,2,'ksiva@gmail.com','3214569870','e10adc3949ba59abbe56e057f20f883e','123456','ksiva','Male','2018-10-08','Armenia','Madhya Pradesh',NULL,NULL,1,'2018-10-08 12:45:00','2018-10-08 12:45:00'),(6,2,'vasudevareddy549@gmail.com','8500050944','e10adc3949ba59abbe56e057f20f883e','123456','vasu','Male','2018-10-30','Aruba','Madhya Pradesh',NULL,NULL,1,'2018-10-09 11:53:23','2018-10-09 11:53:23');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
