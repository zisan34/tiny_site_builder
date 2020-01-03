/*
SQLyog Professional v13.1.1 (32 bit)
MySQL - 5.7.24 : Database - mawa_99cb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `food_category` */

DROP TABLE IF EXISTS `food_category`;

CREATE TABLE `food_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `food_category` */

insert  into `food_category`(`id`,`name`,`short_name`,`description`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Breakfast','breakfast','Breakfast related menus will go here',1,1,'2019-12-01 12:59:36',NULL,'2019-12-01 12:59:36',NULL,NULL),
(2,'Lunch','lunch','Lunch related menus',1,1,'2019-12-01 13:02:55',NULL,'2019-12-01 13:30:22',NULL,NULL),
(3,'Test','tst',NULL,1,1,'2019-12-01 13:50:18',NULL,'2019-12-01 13:50:21',1,'2019-12-01 13:50:21'),
(4,'Test Category','test',NULL,1,1,'2019-12-01 15:46:20',NULL,'2019-12-01 15:53:10',1,'2019-12-01 15:53:10'),
(5,'Test','tst',NULL,1,1,'2019-12-01 15:54:50',NULL,'2019-12-04 11:32:57',NULL,NULL);

/*Table structure for table `food_menu` */

DROP TABLE IF EXISTS `food_menu`;

CREATE TABLE `food_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `food_menu` */

insert  into `food_menu`(`id`,`name`,`category_id`,`price`,`picture`,`description`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Egg with vegetable',2,35,'/uploads/images/food_menu/1575191326_1_images.jfif','This menu includes free & unlimited dal & rice.',1,NULL,'2019-12-01 15:08:46',NULL,'2019-12-01 15:40:16',NULL,NULL),
(2,'Test Menu',4,10,'/uploads/images/food_menu/1575193624_1_website_logo.png','Test Food Menu',1,NULL,'2019-12-01 15:47:04',NULL,'2019-12-01 15:53:10',1,'2019-12-01 15:53:10'),
(3,'Test',5,20,NULL,NULL,1,NULL,'2019-12-01 15:55:15',NULL,'2019-12-01 15:56:43',1,'2019-12-01 15:56:43'),
(4,'Test',5,10,NULL,NULL,1,NULL,'2019-12-01 15:57:27',NULL,'2019-12-01 15:57:30',1,'2019-12-01 15:57:30'),
(5,'Test',5,10,NULL,NULL,1,NULL,'2019-12-01 15:57:57',NULL,'2019-12-01 15:58:00',1,'2019-12-01 15:58:00'),
(6,'Chicken with Vegetable',2,50,NULL,NULL,1,NULL,'2019-12-01 19:22:13',NULL,'2019-12-01 19:22:13',NULL,NULL),
(7,'Noodles',5,20,NULL,NULL,1,NULL,'2019-12-02 19:56:02',NULL,'2019-12-04 11:32:57',NULL,NULL),
(8,'Fried Egg',5,15,NULL,NULL,1,NULL,'2019-12-02 19:56:19',NULL,'2019-12-04 11:32:57',NULL,NULL),
(9,'Fried Chicken',2,60,NULL,NULL,1,NULL,'2019-12-02 19:56:40',NULL,'2019-12-02 19:56:40',NULL,NULL),
(10,'Chicken Fried Rice',2,120,NULL,NULL,1,NULL,'2019-12-04 14:58:37',NULL,'2019-12-04 14:58:37',NULL,NULL);

/*Table structure for table `meal_child` */

DROP TABLE IF EXISTS `meal_child`;

CREATE TABLE `meal_child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meal_id` int(11) DEFAULT NULL,
  `food_menu_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

/*Data for the table `meal_child` */

insert  into `meal_child`(`id`,`meal_id`,`food_menu_id`,`quantity`,`note`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(8,8,6,1,NULL,1,1,'2019-12-02 18:07:55',NULL,'2019-12-02 18:07:55',NULL,NULL),
(9,8,1,2,NULL,1,1,'2019-12-02 18:07:55',NULL,'2019-12-02 18:07:55',NULL,NULL),
(10,9,6,1,NULL,1,1,'2019-12-02 18:08:08',NULL,'2019-12-02 18:08:08',NULL,NULL),
(11,9,1,1,NULL,1,1,'2019-12-02 18:08:08',NULL,'2019-12-02 18:08:08',NULL,NULL),
(12,10,6,1,NULL,1,1,'2019-12-02 18:50:57',NULL,'2019-12-02 18:50:57',NULL,NULL),
(13,11,6,2,NULL,1,1,'2019-12-02 19:55:42',NULL,'2019-12-02 19:55:42',NULL,NULL),
(14,11,1,1,NULL,1,1,'2019-12-02 19:55:42',NULL,'2019-12-02 19:55:42',NULL,NULL),
(15,12,8,1,NULL,1,1,'2019-12-02 19:56:59',NULL,'2019-12-02 19:56:59',NULL,NULL),
(16,12,9,1,NULL,1,1,'2019-12-02 19:56:59',NULL,'2019-12-02 19:56:59',NULL,NULL),
(17,12,7,1,NULL,1,1,'2019-12-02 19:56:59',NULL,'2019-12-02 19:56:59',NULL,NULL),
(18,13,9,1,NULL,1,1,'2019-12-02 19:59:24',NULL,'2019-12-02 19:59:24',NULL,NULL),
(19,13,1,2,NULL,1,1,'2019-12-02 19:59:24',NULL,'2019-12-02 19:59:24',NULL,NULL),
(20,13,6,1,NULL,1,1,'2019-12-02 19:59:24',NULL,'2019-12-02 19:59:24',NULL,NULL),
(21,14,1,2,NULL,1,1,'2019-12-02 19:59:52',NULL,'2019-12-02 19:59:52',NULL,NULL),
(22,14,7,1,NULL,1,1,'2019-12-02 19:59:52',NULL,'2019-12-02 19:59:52',NULL,NULL),
(23,15,7,1,NULL,1,1,'2019-12-03 10:25:54',NULL,'2019-12-03 10:25:54',NULL,NULL),
(24,16,7,3,NULL,1,1,'2019-12-04 12:28:29',NULL,'2019-12-04 12:28:29',NULL,NULL),
(25,16,9,2,NULL,1,1,'2019-12-04 12:28:29',NULL,'2019-12-04 12:28:29',NULL,NULL),
(26,17,9,1,NULL,1,1,'2019-12-04 12:30:12',NULL,'2019-12-04 12:30:12',NULL,NULL),
(27,17,8,1,NULL,1,1,'2019-12-04 12:30:12',NULL,'2019-12-04 12:30:12',NULL,NULL);

/*Table structure for table `meal_master` */

DROP TABLE IF EXISTS `meal_master`;

CREATE TABLE `meal_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meal_id` varchar(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `meal_date` date DEFAULT NULL,
  `meal_type` varchar(50) DEFAULT NULL,
  `total_menus` int(11) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `paid_amount` float DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `meal_master` */

insert  into `meal_master`(`id`,`meal_id`,`user_id`,`meal_date`,`meal_type`,`total_menus`,`total_price`,`paid_amount`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(8,'ML-1',4,'2019-12-02','Lunch',2,120,NULL,1,1,'2019-12-02 18:07:55',NULL,'2019-12-02 18:07:55',NULL,NULL),
(9,'ML-9',1,'2019-12-02','Supper',2,85,NULL,1,1,'2019-12-02 18:08:08',NULL,'2019-12-02 18:08:08',NULL,NULL),
(10,'ML-10',1,'2019-12-03','Snacks',1,50,NULL,1,1,'2019-12-02 18:50:57',NULL,'2019-12-02 18:50:57',NULL,NULL),
(11,'ML-11',5,'2019-12-02','Lunch',2,135,NULL,1,1,'2019-12-02 19:55:42',NULL,'2019-12-02 19:55:42',NULL,NULL),
(12,'ML-12',5,'2019-12-03','Supper',3,95,NULL,1,1,'2019-12-02 19:56:59',NULL,'2019-12-02 19:56:59',NULL,NULL),
(13,'ML-13',5,'2019-12-04','Lunch',3,180,NULL,1,1,'2019-12-02 19:59:24',NULL,'2019-12-02 19:59:24',NULL,NULL),
(14,'ML-14',5,'2019-12-02','Snacks',2,90,NULL,1,1,'2019-12-02 19:59:52',NULL,'2019-12-02 19:59:52',NULL,NULL),
(15,'ML-15',5,'2019-12-03','Breakfast',1,20,NULL,1,1,'2019-12-03 10:25:54',NULL,'2019-12-03 10:25:54',NULL,NULL),
(16,'ML-16',1,'2019-12-04','Lunch',2,180,NULL,1,1,'2019-12-04 12:28:29',NULL,'2019-12-04 12:28:29',NULL,NULL),
(17,'ML-17',6,'2019-12-04','Breakfast',2,75,NULL,1,1,'2019-12-04 12:30:12',NULL,'2019-12-04 12:30:12',NULL,NULL);

/*Table structure for table `users_acc_transaction` */

DROP TABLE IF EXISTS `users_acc_transaction`;

CREATE TABLE `users_acc_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `transaction_type` int(11) DEFAULT NULL COMMENT '1=In 2=Exp',
  `amount` float DEFAULT NULL,
  `transaction_date` date DEFAULT NULL,
  `reference` varchar(200) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  `confimation` int(11) DEFAULT NULL COMMENT '1=Confirmed, 0=Pending',
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `users_acc_transaction` */

insert  into `users_acc_transaction`(`id`,`user_id`,`transaction_type`,`amount`,`transaction_date`,`reference`,`note`,`confimation`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(6,1,1,450,'2019-12-02','Cash','Payment',1,1,1,'2019-12-02 17:59:42',1,'2019-12-04 11:15:55',NULL,NULL),
(7,4,2,-120,'2019-12-02','ML-1','Meal Cost',1,1,1,'2019-12-02 18:07:55',NULL,'2019-12-02 18:07:55',NULL,NULL),
(8,1,2,-85,'2019-12-02','ML-9','Meal Cost',1,1,1,'2019-12-02 18:08:08',NULL,'2019-12-02 18:08:08',NULL,NULL),
(9,1,2,-50,'2019-12-02','ML-10','Meal Cost',1,1,1,'2019-12-02 18:50:57',NULL,'2019-12-02 18:50:57',NULL,NULL),
(10,5,2,-135,'2019-12-02','ML-11','Meal Cost',1,1,1,'2019-12-02 19:55:42',NULL,'2019-12-02 19:55:42',NULL,NULL),
(11,5,2,-95,'2019-12-02','ML-12','Meal Cost',1,1,1,'2019-12-02 19:56:59',NULL,'2019-12-02 19:56:59',NULL,NULL),
(12,5,2,-180,'2019-12-02','ML-13','Meal Cost',1,1,1,'2019-12-02 19:59:24',NULL,'2019-12-02 19:59:24',NULL,NULL),
(13,5,2,-100,'2019-12-03','ML-14 - Edited','Payment',1,1,1,'2019-12-02 19:59:52',1,'2019-12-04 11:39:35',NULL,NULL),
(14,5,2,-20,'2019-12-03','ML-15','Meal Cost',1,1,1,'2019-12-03 10:25:54',NULL,'2019-12-03 10:25:54',NULL,NULL),
(15,5,1,500,'2019-12-03','Cash','Meal Cost',1,1,1,'2019-12-03 16:45:41',NULL,'2019-12-03 16:45:41',NULL,NULL),
(16,4,1,200,'2019-12-03','Cash','Meal Cost',1,1,1,'2019-12-03 18:57:25',NULL,'2019-12-03 18:57:25',NULL,NULL),
(17,5,1,20,'2019-12-03','Cash','Meal Cost',1,1,1,'2019-12-03 19:05:54',NULL,'2019-12-03 19:05:54',NULL,NULL),
(18,6,1,50,'2019-12-03','Cash','Payment',1,1,1,'2019-12-03 19:07:21',NULL,'2019-12-03 19:07:21',NULL,NULL),
(19,9,1,20,'2019-12-05','Cash','Payment',1,1,1,'2019-12-03 19:08:13',NULL,'2019-12-03 19:08:13',NULL,NULL),
(20,6,1,100,'2019-12-03','Cash','Payment',1,1,6,'2019-12-03 19:38:37',1,'2019-12-04 10:15:41',NULL,NULL),
(21,6,1,200,'2019-12-03',NULL,'Payment',1,1,6,'2019-12-03 19:39:45',1,'2019-12-04 11:16:46',NULL,NULL),
(22,6,1,200,'2019-12-04',NULL,'Payment',0,1,1,'2019-12-04 11:45:10',1,'2019-12-04 14:36:22',NULL,NULL),
(23,1,2,-180,'2019-12-04','ML-16','Meal Cost',1,1,1,'2019-12-04 12:28:29',NULL,'2019-12-04 12:28:29',NULL,NULL),
(24,1,1,100,'2019-12-04','ML-16','Meal Payment',1,1,1,'2019-12-04 12:28:29',NULL,'2019-12-04 12:28:29',NULL,NULL),
(25,6,2,-75,'2019-12-04','ML-17','Meal Cost',1,1,1,'2019-12-04 12:30:12',NULL,'2019-12-04 12:30:12',NULL,NULL),
(26,6,1,75,'2019-12-04','ML-17','Meal Payment',1,1,1,'2019-12-04 12:30:12',NULL,'2019-12-04 12:30:12',NULL,NULL);

/*Table structure for table `user_account_vw` */

DROP TABLE IF EXISTS `user_account_vw`;

/*!50001 DROP VIEW IF EXISTS `user_account_vw` */;
/*!50001 DROP TABLE IF EXISTS `user_account_vw` */;

/*!50001 CREATE TABLE  `user_account_vw`(
 `user_id` int(11) ,
 `user_name` varchar(191) ,
 `acc_balance` double ,
 `in_amount` double ,
 `out_amount` double 
)*/;

/*View structure for view user_account_vw */

/*!50001 DROP TABLE IF EXISTS `user_account_vw` */;
/*!50001 DROP VIEW IF EXISTS `user_account_vw` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_account_vw` AS select `ua`.`user_id` AS `user_id`,`u`.`name` AS `user_name`,sum(if((`ua`.`confimation` = 1),`ua`.`amount`,0)) AS `acc_balance`,sum(if(((`ua`.`transaction_type` = 1) and (`ua`.`confimation` = 1)),`ua`.`amount`,0)) AS `in_amount`,sum(if(((`ua`.`transaction_type` = 2) and (`ua`.`confimation` = 1)),`ua`.`amount`,0)) AS `out_amount` from (`users_acc_transaction` `ua` join `users` `u`) where (`u`.`id` = `ua`.`user_id`) group by `ua`.`user_id`,`u`.`name` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
