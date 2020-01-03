
/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `album_images` */

DROP TABLE IF EXISTS `album_images`;

CREATE TABLE `album_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) DEFAULT NULL,
  `image` varchar(251) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `archived` tinyint(1) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

/*Data for the table `album_images` */

insert  into `album_images`(`id`,`album_id`,`image`,`order`,`archived`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(30,1,'/uploads/images/1572094289_1_1.jpeg',NULL,NULL,1,'2019-10-26 18:51:29','2019-10-26 18:51:29',NULL,NULL,NULL,NULL),
(31,1,'/uploads/images/1572094289_1_2.jpeg',NULL,NULL,1,'2019-10-26 18:51:29','2019-10-26 18:51:29',NULL,NULL,NULL,NULL),
(32,1,'/uploads/images/1572094289_1_3.jpeg',NULL,NULL,1,'2019-10-26 18:51:29','2019-10-26 18:51:29',NULL,NULL,NULL,NULL),
(33,1,'/uploads/images/1572094289_1_4.jpeg',NULL,NULL,1,'2019-10-26 18:51:29','2019-10-26 18:51:29',NULL,NULL,NULL,NULL),
(34,1,'/uploads/images/1572094289_1_4.jpg',NULL,NULL,1,'2019-10-26 18:51:29','2019-10-26 18:51:29',NULL,NULL,NULL,NULL),
(35,1,'/uploads/images/1572094289_1_4_picture-raising Day1.JPG',NULL,NULL,1,'2019-10-26 18:51:29','2019-10-26 18:51:29',NULL,NULL,NULL,NULL),
(36,2,'/uploads/images/1572094314_1_99_COMBDE_Raising_Flag3.jpg',NULL,NULL,1,'2019-10-26 18:51:54','2019-10-26 18:51:54',NULL,NULL,NULL,NULL),
(37,2,'/uploads/images/1572094314_1_99_COMBDE_Raising_Flag4.JPG',NULL,NULL,1,'2019-10-26 18:51:54','2019-10-26 18:51:54',NULL,NULL,NULL,NULL),
(38,2,'/uploads/images/1572094314_1_AfzalHossain.jpeg',NULL,NULL,1,'2019-10-26 18:51:54','2019-10-26 18:51:54',NULL,NULL,NULL,NULL),
(39,2,'/uploads/images/1572094314_1_Archive1.jpg',NULL,NULL,1,'2019-10-26 18:51:54','2019-10-26 18:51:54',NULL,NULL,NULL,NULL),
(40,2,'/uploads/images/1572094314_1_Archive2.jpg',NULL,NULL,1,'2019-10-26 18:51:54','2019-10-26 18:51:54',NULL,NULL,NULL,NULL),
(41,2,'/uploads/images/1572094314_1_Archive3.jpg',NULL,NULL,1,'2019-10-26 18:51:54','2019-10-26 18:51:54',NULL,NULL,NULL,NULL),
(42,3,'/uploads/images/1572241374_1_Archive1.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(43,3,'/uploads/images/1572241374_1_Archive2.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(44,3,'/uploads/images/1572241374_1_Archive3.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(45,3,'/uploads/images/1572241374_1_Archive4.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(46,3,'/uploads/images/1572241374_1_Archive5.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(47,3,'/uploads/images/1572241374_1_Archive6.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(48,3,'/uploads/images/1572241374_1_Archive7.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(49,3,'/uploads/images/1572241374_1_Archive8.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(50,3,'/uploads/images/1572241374_1_Archive9.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(51,3,'/uploads/images/1572241374_1_Archive10.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(52,3,'/uploads/images/1572241374_1_Archive11.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(53,3,'/uploads/images/1572241374_1_Archive12.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(54,3,'/uploads/images/1572241374_1_Archive13.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(55,3,'/uploads/images/1572241374_1_Archive14.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(56,3,'/uploads/images/1572241374_1_Archive15.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(57,3,'/uploads/images/1572241374_1_Archive16.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(58,3,'/uploads/images/1572241374_1_Archive17.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(59,3,'/uploads/images/1572241374_1_Archive18.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(60,3,'/uploads/images/1572241374_1_Archive19.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(61,3,'/uploads/images/1572241374_1_Archive20.jpg',NULL,NULL,1,'2019-10-28 11:42:54','2019-10-28 11:42:54',NULL,NULL,NULL,NULL),
(62,3,'/uploads/images/1572242202_1_4_picture-raising Day2.JPG',NULL,NULL,1,'2019-10-28 11:56:42','2019-10-28 11:56:42',NULL,NULL,NULL,NULL),
(63,3,'/uploads/images/1572242202_1_4_picture-raising Day3.JPG',NULL,NULL,1,'2019-10-28 11:56:42','2019-10-28 11:56:42',NULL,NULL,NULL,NULL),
(64,3,'/uploads/images/1572242202_1_4_picture-raising Day4.JPG',NULL,NULL,1,'2019-10-28 11:56:42','2019-10-28 11:56:42',NULL,NULL,NULL,NULL),
(65,4,'/uploads/images/1574251591_1_1000px-thumbnail.jpg',NULL,NULL,1,'2019-11-20 18:06:31','2019-11-20 18:06:31',NULL,NULL,NULL,NULL),
(66,4,'/uploads/images/1574251591_1_release-copy-02-1549884426997.jpg',NULL,NULL,1,'2019-11-20 18:06:31','2019-11-20 18:06:31',NULL,NULL,NULL,NULL),
(67,4,'/uploads/images/1574251591_1_web-khagrachhari-army-man-injured-pic-25-09-19-1569434145801.jpg',NULL,NULL,1,'2019-11-20 18:06:31','2019-11-20 18:06:31',NULL,NULL,NULL,NULL),
(68,4,'/uploads/images/1574251591_1_courtesy-3-1543995653226.jpg',NULL,NULL,1,'2019-11-20 18:06:31','2019-11-20 18:06:31',NULL,NULL,NULL,NULL);

/*Table structure for table `albums` */

DROP TABLE IF EXISTS `albums`;

CREATE TABLE `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1,
  `description` text,
  `caption` varchar(251) DEFAULT NULL,
  `cover_image` varchar(251) DEFAULT NULL,
  `slug` varchar(251) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `visibility` tinyint(2) DEFAULT '0' COMMENT '0=Public,1=PassProtected,2=Private',
  `visibility_pass` varchar(100) DEFAULT NULL,
  `archived` tinyint(1) DEFAULT '0' COMMENT '0=not,1=archived',
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(11) unsigned DEFAULT NULL,
  `deleted_by` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `albums` */

insert  into `albums`(`id`,`title`,`description`,`caption`,`cover_image`,`slug`,`order`,`visibility`,`visibility_pass`,`archived`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(1,'28 East Bangle Regiment','28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment','28 East Bangle Regiment','/uploads/images/1571813714_1_70509684_811624949235049_3930205528961056768_n.jpg',NULL,1,0,NULL,0,1,'2019-10-26 16:48:28','2019-10-27 13:08:24',NULL,1,1,NULL),
(2,'28 East Bangle Regiment','<span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">28 East Bangle Regiment</span><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">28 East Bangle Regiment</span><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">28 East Bangle Regiment</span><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">28 East Bangle Regiment</span><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">28 East Bangle Regiment</span><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">28 East Bangle Regiment</span>','28 East Bangle Regiment','/uploads/images/1572088022_1_99_COMBDE_Raising_Flag4.JPG',NULL,1,0,NULL,0,1,'2019-10-26 17:07:02','2019-11-20 17:29:06',NULL,1,NULL,NULL),
(3,'Archive Gallery',NULL,'Archive Gallery',NULL,NULL,1,1,'1234',0,1,'2019-10-28 11:42:05','2019-11-21 10:51:01',NULL,1,1,NULL),
(4,'Photo Archives',NULL,NULL,NULL,NULL,1,1,'1234',0,1,'2019-11-20 17:55:23','2019-11-20 17:55:23',NULL,1,NULL,NULL);

/*Table structure for table `branches` */

DROP TABLE IF EXISTS `branches`;

CREATE TABLE `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  `branch_code` varchar(10) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `branches` */

insert  into `branches`(`id`,`name`,`short_name`,`branch_code`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'General Staff Branch','GS','01',1,1,'2019-11-03 11:56:50',NULL,'2019-11-03 11:56:50',NULL,NULL),
(2,'Quartering Branch','QB','02',1,1,'2019-11-03 11:57:29',NULL,'2019-11-03 11:57:40',NULL,NULL),
(3,'Ord Branch','OB','03',1,1,'2019-11-03 11:59:11',NULL,'2019-11-03 11:59:11',NULL,NULL),
(4,'Establishment Branch','EB','04',1,1,'2019-11-03 11:59:35',NULL,'2019-11-03 11:59:35',NULL,NULL);

/*Table structure for table `draft_categories` */

DROP TABLE IF EXISTS `draft_categories`;

CREATE TABLE `draft_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `order` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `draft_categories` */

insert  into `draft_categories`(`id`,`name`,`short_name`,`parent_id`,`status`,`order`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(1,'Admin','A',NULL,1,1,'2019-11-03 11:08:51','2019-11-04 16:51:13',NULL,1,NULL,NULL),
(2,'General','G',NULL,1,1,'2019-11-03 11:09:20','2019-11-05 10:19:34',NULL,1,1,NULL),
(3,'Operations','Ops',NULL,1,1,'2019-11-03 11:26:35','2019-11-03 11:26:35',NULL,1,NULL,NULL),
(4,'Quatering','Q',NULL,1,1,'2019-11-05 10:49:37','2019-11-05 10:49:37',NULL,6,NULL,NULL),
(5,'Accounts','Acct',NULL,1,1,'2019-11-05 10:49:58','2019-11-05 10:49:58',NULL,6,NULL,NULL),
(6,'Ordnance','Ord',NULL,1,1,'2019-11-05 10:50:16','2019-11-05 10:50:16',NULL,6,NULL,NULL),
(7,'Staff',NULL,NULL,1,1,'2019-11-05 10:51:01','2019-11-05 10:51:01',NULL,6,NULL,NULL),
(9,'Demi Official Letter','DO',7,1,1,'2019-11-05 10:52:03','2019-11-05 10:52:03',NULL,6,NULL,NULL),
(10,'Singal Message','Singal Msg',7,1,1,'2019-11-05 10:52:21','2019-11-05 10:52:21',NULL,6,NULL,NULL),
(11,'Personal File',NULL,7,1,1,'2019-11-05 10:52:33','2019-11-05 10:52:33',NULL,6,NULL,NULL),
(12,'Part-1',NULL,7,1,1,'2019-11-05 10:52:49','2019-11-05 10:52:49',NULL,6,NULL,NULL),
(13,'DO-Part-2',NULL,7,1,1,'2019-11-05 10:52:58','2019-11-05 10:52:58',NULL,6,NULL,NULL);

/*Table structure for table `draft_user` */

DROP TABLE IF EXISTS `draft_user`;

CREATE TABLE `draft_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `draft_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `draft_user` */

insert  into `draft_user`(`id`,`draft_id`,`user_id`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(16,17,4,1,NULL,'2019-11-04 19:18:33',NULL,NULL,NULL,NULL),
(17,17,6,1,NULL,'2019-11-04 19:18:33',NULL,NULL,NULL,NULL),
(18,17,7,1,NULL,'2019-11-04 19:18:33',NULL,NULL,NULL,NULL),
(19,17,8,1,NULL,'2019-11-04 19:18:33',NULL,NULL,NULL,NULL);

/*Table structure for table `drafts` */

DROP TABLE IF EXISTS `drafts`;

CREATE TABLE `drafts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `volume_no` bigint(20) DEFAULT NULL,
  `version_number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `draft_type_id` bigint(20) unsigned NOT NULL,
  `assigned_to` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `draft_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `draft_details` longtext COLLATE utf8mb4_unicode_ci,
  `date` timestamp NULL DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `process_status` int(11) DEFAULT '0' COMMENT '0=New, 1=Review, 2=Approved, 3=ReviewAfterApproved, 4=ApprovalAfterRe-review',
  `status` int(11) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `drafts_draft_type_id_foreign` (`draft_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `drafts` */

insert  into `drafts`(`id`,`volume_no`,`version_number`,`draft_type_id`,`assigned_to`,`draft_title`,`file_type`,`draft_details`,`date`,`reference`,`branch_id`,`process_status`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(17,101,'0.101',1,'4, 6, 7, 8','Reviewer Testing','1','<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Reviewer Testing</p></body></html>\n','2004-11-19 00:00:00','23.01.908.140.1.1.101.04.11.19',1,0,1,5,'2019-11-04 19:18:33',NULL,'2019-11-04 19:18:33',NULL,NULL),
(18,101,'1.101',1,'4','Reviewer Testing','1','<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Reviewer Testing</p></body></html>\n','2004-11-19 00:00:00','23.01.908.140.1.1.101.04.11.19',1,0,1,5,'2019-11-04 19:18:33',NULL,'2019-11-04 19:18:33',NULL,NULL),
(19,101,'1.101',1,'6','Reviewer Testing','1','<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Reviewer Testing</p></body></html>\n','2004-11-19 00:00:00','23.01.908.140.1.1.101.04.11.19',1,1,1,5,'2019-11-04 19:18:33',NULL,'2019-11-05 13:00:02',NULL,NULL),
(20,101,'1.101',1,'7','Reviewer Testing','1','<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Reviewer Testing</p></body></html>\n','2004-11-19 00:00:00','23.01.908.140.1.1.101.04.11.19',1,0,1,5,'2019-11-04 19:18:33',NULL,'2019-11-04 19:18:33',NULL,NULL),
(21,101,'1.101',1,'8','Reviewer Testing','1','<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Reviewer Testing</p></body></html>\n','2004-11-19 00:00:00','23.01.908.140.1.1.101.04.11.19',1,0,1,5,'2019-11-04 19:18:33',NULL,'2019-11-04 19:18:33',NULL,NULL),
(22,101,'2.101',1,'9','Reviewer Testing','1','<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Reviewer Testing</p></body></html>\n','2004-11-19 00:00:00','23.01.908.140.1.1.101.04.11.19',1,2,1,5,'2019-11-05 13:00:02',NULL,'2019-11-05 14:02:18',NULL,NULL),
(23,101,'3.101',1,'5','Reviewer Testing','1','<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Reviewer Testing</p></body></html>\n','2004-11-19 00:00:00','23.01.908.140.1.1.101.04.11.19',1,2,1,5,'2019-11-05 14:02:18',NULL,'2019-11-05 14:02:18',NULL,NULL);

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `events` */

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `food_category` */

insert  into `food_category`(`id`,`name`,`short_name`,`description`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Breakfast','breakfast','Breakfast related menus will go here',1,1,'2019-12-01 12:59:36',NULL,'2019-12-01 12:59:36',NULL,NULL),
(2,'Lunch','lunch','Lunch related menus',1,1,'2019-12-01 13:02:55',NULL,'2019-12-01 13:30:22',NULL,NULL),
(3,'Supper','supper',NULL,1,1,'2019-12-09 18:22:30',NULL,'2019-12-09 18:22:30',NULL,NULL),
(4,'Snacks','snacks',NULL,1,1,'2019-12-09 18:22:45',NULL,'2019-12-09 18:22:45',NULL,NULL),
(5,'Extra','extra',NULL,1,1,'2019-12-09 18:23:01',NULL,'2019-12-10 14:35:32',NULL,NULL);

/*Table structure for table `food_menu` */

DROP TABLE IF EXISTS `food_menu`;

CREATE TABLE `food_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `menu_date` date DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `food_menu` */

insert  into `food_menu`(`id`,`name`,`menu_date`,`category_id`,`price`,`picture`,`description`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Egg with vegetable','2019-12-09',2,35,'/uploads/images/food_menu/1575191326_1_images.jfif','This menu includes free & unlimited dal & rice.',1,NULL,'2019-12-01 15:08:46',NULL,'2019-12-09 18:46:54',NULL,NULL),
(6,'Chicken with Vegetable','2019-12-08',2,50,NULL,NULL,1,NULL,'2019-12-01 19:22:13',NULL,'2019-12-09 18:47:02',NULL,NULL),
(7,'Noodles','2019-12-08',4,20,NULL,NULL,1,NULL,'2019-12-02 19:56:02',NULL,'2019-12-09 18:47:25',NULL,NULL),
(8,'Fried Egg','2019-12-07',1,15,NULL,NULL,1,NULL,'2019-12-02 19:56:19',NULL,'2019-12-09 18:50:31',NULL,NULL),
(9,'Fried Chicken','2019-12-07',2,60,NULL,NULL,1,NULL,'2019-12-02 19:56:40',NULL,'2019-12-09 18:50:46',NULL,NULL),
(10,'Chicken Fried Rice','2019-12-07',3,120,NULL,NULL,1,NULL,'2019-12-04 14:58:37',NULL,'2019-12-09 18:50:52',NULL,NULL),
(11,'Ruti with vegetable','2019-12-09',1,25,NULL,NULL,1,NULL,'2019-12-09 18:40:43',NULL,'2019-12-09 18:40:43',NULL,NULL),
(12,'Chicken Fried Rice','2019-12-09',3,85,NULL,NULL,1,NULL,'2019-12-09 18:42:51',NULL,'2019-12-09 18:42:51',NULL,NULL),
(13,'Noodles','2019-12-09',4,20,NULL,NULL,1,NULL,'2019-12-09 18:51:40',NULL,'2019-12-09 18:51:40',NULL,NULL),
(14,'Samucha','2019-12-09',5,5,NULL,NULL,1,NULL,'2019-12-09 18:51:57',NULL,'2019-12-09 18:51:57',NULL,NULL),
(15,'Alu Paratha','2019-12-07',1,25,NULL,NULL,1,NULL,'2019-12-10 16:25:30',NULL,'2019-12-10 16:25:30',NULL,NULL),
(16,'Fried egg','2019-12-10',1,15,NULL,NULL,1,NULL,'2019-12-10 17:50:18',NULL,'2019-12-10 17:50:18',NULL,NULL),
(17,'Paratha','2019-12-10',1,10,NULL,NULL,1,NULL,'2019-12-10 17:50:38',NULL,'2019-12-10 17:50:38',NULL,NULL),
(18,'Ruti','2019-12-10',1,10,NULL,NULL,1,NULL,'2019-12-10 17:50:48',NULL,'2019-12-10 17:50:48',NULL,NULL),
(19,'Beef','2019-12-10',2,120,NULL,NULL,1,NULL,'2019-12-10 17:51:40',NULL,'2019-12-10 17:51:40',NULL,NULL),
(20,'Plain Rice','2019-12-10',2,10,NULL,NULL,1,NULL,'2019-12-10 17:51:57',NULL,'2019-12-10 17:51:57',NULL,NULL),
(21,'Potato wedges','2019-12-10',4,40,NULL,NULL,1,NULL,'2019-12-10 17:52:17',NULL,'2019-12-10 17:52:17',NULL,NULL),
(22,'Khichuri','2019-12-11',1,80,NULL,NULL,1,NULL,'2019-12-11 10:22:48',NULL,'2019-12-11 10:22:48',NULL,NULL),
(23,'Kacchi Biriani','2019-12-11',2,150,NULL,NULL,1,NULL,'2019-12-11 10:23:20',NULL,'2019-12-11 10:23:20',NULL,NULL),
(24,'Paratha','2019-12-11',1,10,NULL,NULL,1,NULL,'2019-12-11 10:38:37',NULL,'2019-12-11 10:38:37',NULL,NULL),
(25,'Vegetable','2019-12-11',1,15,NULL,NULL,1,NULL,'2019-12-11 10:38:52',NULL,'2019-12-11 10:38:52',NULL,NULL),
(26,'Jali Kabab','2019-12-11',2,20,NULL,NULL,1,NULL,'2019-12-11 13:23:23',NULL,'2019-12-11 13:23:23',NULL,NULL);

/*Table structure for table `general_settings` */

DROP TABLE IF EXISTS `general_settings`;

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(221) DEFAULT NULL,
  `tagline` varchar(221) DEFAULT NULL,
  `phy_address` varchar(221) DEFAULT NULL,
  `site_address` varchar(221) DEFAULT NULL,
  `email_address` varchar(221) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `general_settings` */

insert  into `general_settings`(`id`,`site_title`,`tagline`,`phy_address`,`site_address`,`email_address`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(2,'XACTiDEA LTD','Snap Your Mind','R/A, Summit Villa, Apartment A-1 (1st floor), House# 17, Road#, 17/A Block # E, Dhaka 1213','www.xactidea.com','info@xactidea.com',1,'2019-10-26 13:04:20','2019-10-26 13:04:20',NULL,1,NULL,NULL);

/*Table structure for table `header_footers` */

DROP TABLE IF EXISTS `header_footers`;

CREATE TABLE `header_footers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(221) CHARACTER SET latin1 NOT NULL,
  `subtitle` varchar(221) CHARACTER SET latin1 DEFAULT NULL,
  `developer` varchar(221) CHARACTER SET latin1 DEFAULT NULL,
  `credit` varchar(221) CHARACTER SET latin1 DEFAULT NULL,
  `welcome_message` varchar(221) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `header_footers` */

insert  into `header_footers`(`id`,`title`,`subtitle`,`developer`,`credit`,`welcome_message`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(2,'99 COMPOSITE BRIGADE','Bangladesh Army','XactIdea Ltd','Copyright © 2019 XactIdea Ltd. All rights reserved.','\"পরিষ্কার থাকবো, পরিষ্কার রাখবো \"',1,'2019-10-20 10:51:22','2019-10-27 15:56:46',NULL,1,1,NULL);

/*Table structure for table `logos` */

DROP TABLE IF EXISTS `logos`;

CREATE TABLE `logos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `primary` varchar(221) NOT NULL,
  `secondary` varchar(221) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `logos` */

insert  into `logos`(`id`,`primary`,`secondary`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(2,'/uploads/logos/1572083733_1_log_BIF.png','/uploads/logos/1571485231_1_army_logo_3.png',1,'2019-10-17 15:59:04','2019-10-26 15:55:33',NULL,1,1,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

/*Data for the table `meal_child` */

insert  into `meal_child`(`id`,`meal_id`,`food_menu_id`,`quantity`,`note`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,1,14,2,NULL,1,1,'2019-12-09 19:31:22',NULL,'2019-12-09 19:31:22',NULL,NULL),
(2,1,11,3,NULL,1,1,'2019-12-09 19:31:22',NULL,'2019-12-09 19:31:22',NULL,NULL),
(3,2,10,1,NULL,1,1,'2019-12-09 19:31:34',NULL,'2019-12-09 19:31:34',NULL,NULL),
(4,3,13,2,NULL,1,1,'2019-12-09 19:32:12',NULL,'2019-12-09 19:32:12',NULL,NULL),
(5,4,14,3,NULL,1,1,'2019-12-09 19:44:21',NULL,'2019-12-09 19:44:21',NULL,NULL),
(6,5,13,2,NULL,1,1,'2019-12-09 19:44:36',NULL,'2019-12-09 19:44:36',NULL,NULL),
(7,6,14,4,NULL,1,1,'2019-12-09 19:44:53',NULL,'2019-12-09 19:44:53',NULL,NULL),
(8,7,11,2,NULL,1,1,'2019-12-09 19:45:40',NULL,'2019-12-09 19:45:40',NULL,NULL),
(9,8,12,1,NULL,1,1,'2019-12-09 19:45:51',NULL,'2019-12-11 13:42:14',1,'2019-12-11 13:42:14'),
(10,9,10,1,NULL,1,1,'2019-12-09 19:46:23',NULL,'2019-12-09 19:46:23',NULL,NULL),
(11,10,1,1,NULL,1,1,'2019-12-09 19:46:45',NULL,'2019-12-09 19:46:45',NULL,NULL),
(12,34,8,10,NULL,1,1,'2019-12-10 17:10:25',NULL,'2019-12-11 15:32:26',NULL,NULL),
(13,34,15,1,NULL,1,1,'2019-12-10 17:10:25',NULL,'2019-12-11 15:32:26',NULL,NULL),
(14,12,9,2,NULL,1,1,'2019-12-10 17:19:11',NULL,'2019-12-10 17:19:11',NULL,NULL),
(15,13,10,2,NULL,1,1,'2019-12-10 17:46:31',NULL,'2019-12-10 17:46:31',NULL,NULL),
(16,22,16,5,NULL,1,1,'2019-12-10 18:46:03',NULL,'2019-12-11 13:12:48',NULL,NULL),
(17,14,17,3,NULL,1,1,'2019-12-10 18:46:03',NULL,'2019-12-11 13:12:48',1,'2019-12-11 13:12:48'),
(18,14,18,4,NULL,1,1,'2019-12-10 18:46:03',NULL,'2019-12-11 13:01:29',1,'2019-12-11 13:01:29'),
(19,15,19,1,NULL,1,1,'2019-12-10 18:47:14',NULL,'2019-12-11 13:42:33',NULL,NULL),
(26,21,22,1,NULL,1,1,'2019-12-11 12:27:34',NULL,'2019-12-11 13:42:43',1,'2019-12-11 13:42:43'),
(27,21,24,1,NULL,1,1,'2019-12-11 13:18:32',NULL,'2019-12-11 13:18:39',1,'2019-12-11 13:18:39'),
(28,8,23,1,NULL,1,1,'2019-12-11 13:19:26',NULL,'2019-12-11 13:20:57',1,'2019-12-11 13:20:57'),
(30,21,24,1,NULL,1,1,'2019-12-11 13:42:43',NULL,'2019-12-11 13:42:43',NULL,NULL),
(31,21,25,1,NULL,1,1,'2019-12-11 13:42:43',NULL,'2019-12-11 13:42:43',NULL,NULL),
(32,33,26,2,NULL,1,1,'2019-12-11 14:36:52',NULL,'2019-12-11 14:37:09',1,'2019-12-11 14:37:09'),
(33,33,23,1,NULL,1,1,'2019-12-11 14:37:01',NULL,'2019-12-11 14:37:14',1,'2019-12-11 14:37:14');

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `meal_master` */

insert  into `meal_master`(`id`,`meal_id`,`user_id`,`meal_date`,`meal_type`,`total_menus`,`total_price`,`paid_amount`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'ML-1',1,'2019-12-09','1',2,85,0,1,1,'2019-12-09 19:31:22',NULL,'2019-12-09 19:31:22',NULL,NULL),
(2,'ML-2',1,'2019-12-09','2',1,120,0,1,1,'2019-12-09 19:31:34',NULL,'2019-12-09 19:31:34',NULL,NULL),
(3,'ML-3',1,'2019-12-09','4',1,40,0,1,1,'2019-12-09 19:32:12',NULL,'2019-12-09 19:32:12',NULL,NULL),
(4,'ML-4',1,'2019-12-08','4',1,15,0,1,1,'2019-12-09 19:44:21',NULL,'2019-12-09 19:44:21',NULL,NULL),
(5,'ML-5',1,'2019-12-08','4',1,40,0,1,1,'2019-12-09 19:44:36',NULL,'2019-12-09 19:44:36',NULL,NULL),
(6,'ML-6',1,'2019-12-09','5',1,20,0,1,1,'2019-12-09 19:44:53',NULL,'2019-12-09 19:44:53',NULL,NULL),
(7,'ML-7',1,'2019-12-09','1',1,50,0,1,1,'2019-12-09 19:45:40',NULL,'2019-12-09 19:45:40',NULL,NULL),
(8,'ML-8',1,'2019-12-09','3',0,0,0,1,1,'2019-12-09 19:45:51',NULL,'2019-12-11 13:42:14',1,'2019-12-11 13:42:14'),
(9,'ML-9',1,'2019-12-08','3',1,120,0,1,1,'2019-12-09 19:46:23',NULL,'2019-12-09 19:46:23',NULL,NULL),
(10,'ML-10',1,'2019-12-08','2',1,35,0,1,1,'2019-12-09 19:46:45',NULL,'2019-12-09 19:46:45',NULL,NULL),
(11,'ML-11',1,'2019-12-07','1',2,175,0,1,1,'2019-12-10 17:10:25',NULL,'2019-12-10 17:10:25',NULL,NULL),
(12,'ML-12',1,'2019-12-07','2',1,120,0,1,1,'2019-12-10 17:19:11',NULL,'2019-12-10 17:19:11',NULL,NULL),
(13,'ML-13',1,'2019-12-07','3',1,240,0,1,1,'2019-12-10 17:46:31',NULL,'2019-12-10 17:46:31',NULL,NULL),
(14,'ML-14',1,'2019-12-10','1',2,105,0,1,1,'2019-12-10 18:46:03',NULL,'2019-12-11 13:01:29',NULL,NULL),
(15,'ML-15',1,'2019-12-10','2',1,120,0,1,1,'2019-12-10 18:47:14',NULL,'2019-12-11 13:42:33',NULL,NULL),
(21,'ML-21',1,'2019-12-11','1',2,25,0,1,1,'2019-12-11 13:01:59',NULL,'2019-12-11 13:42:43',NULL,NULL),
(22,'ML-22',1,'2019-12-10','1',1,75,0,1,1,'2019-12-11 13:12:48',NULL,'2019-12-11 13:12:48',NULL,NULL),
(33,'ML-23',1,'2019-12-11','2',1,150,0,1,1,'2019-12-11 14:36:52',NULL,'2019-12-11 14:37:14',1,'2019-12-11 14:37:14'),
(34,'ML-34',3,'2019-12-07','1',2,175,0,1,1,'2019-12-11 15:32:26',NULL,'2019-12-11 15:32:26',NULL,NULL);

/*Table structure for table `member_categories` */

DROP TABLE IF EXISTS `member_categories`;

CREATE TABLE `member_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(221) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(221) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `description` varchar(221) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `member_categories` */

insert  into `member_categories`(`id`,`title`,`slug`,`parent_id`,`status`,`description`,`level`,`order`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(1,'Commander','commander',NULL,1,'Commander',NULL,1,'2019-10-23 16:04:09','2019-10-23 16:04:09',NULL,1,NULL,NULL),
(4,'Brigade Major (BM)','brigade-major-bm',NULL,1,NULL,1,1,'2019-10-23 16:07:21','2019-11-04 17:33:45',NULL,1,1,NULL),
(5,'DAA&QMG','daaqmg',NULL,1,NULL,NULL,1,'2019-10-23 16:07:38','2019-10-23 16:12:15',NULL,1,1,NULL),
(6,'GSO (3) Edn','gso-3-edn',NULL,1,NULL,NULL,1,'2019-10-23 16:08:15','2019-10-23 16:08:15',NULL,1,NULL,NULL),
(7,'psc','psc',1,1,NULL,1,1,'2019-10-23 16:08:29','2019-11-11 16:20:15',NULL,1,NULL,NULL),
(8,'Major','major',NULL,1,NULL,NULL,1,'2019-10-28 14:41:03','2019-10-28 14:41:03',NULL,1,NULL,NULL),
(10,'psc','psc',8,1,NULL,1,1,'2019-10-28 14:42:37','2019-10-28 14:42:37',NULL,1,NULL,NULL),
(11,'Lieutenant','lieutenant',NULL,1,NULL,NULL,1,'2019-10-28 14:44:07','2019-10-28 14:44:07',NULL,1,NULL,NULL),
(12,'Lieutenant Colonel','lieutenant-colonel',NULL,1,NULL,NULL,1,'2019-10-28 14:44:33','2019-10-28 14:44:33',NULL,1,NULL,NULL),
(13,'psc','psc',12,1,NULL,1,1,'2019-10-28 14:44:56','2019-10-28 14:44:56',NULL,1,NULL,NULL),
(14,'Captain/Lieutenant','captainlieutenant',NULL,1,NULL,NULL,1,'2019-10-28 14:45:29','2019-10-28 14:45:29',NULL,1,NULL,NULL),
(15,'Master Warrant Officer','master-warrant-officer',NULL,1,NULL,NULL,1,'2019-10-28 14:45:48','2019-10-28 14:45:48',NULL,1,NULL,NULL),
(16,'Captain','captain',NULL,1,NULL,NULL,1,'2019-10-28 14:46:24','2019-10-28 14:46:24',NULL,1,NULL,NULL),
(17,'Major/ Captain','major-captain',NULL,1,NULL,NULL,1,'2019-10-28 14:47:54','2019-10-28 14:47:54',NULL,1,NULL,NULL),
(18,'ndc','ndc',17,1,NULL,1,1,'2019-10-28 14:48:27','2019-10-28 14:48:27',NULL,1,NULL,NULL),
(20,'psc','psc',17,1,NULL,1,1,'2019-10-28 14:50:59','2019-10-28 14:50:59',NULL,1,NULL,NULL),
(21,'Brigadier General','brigadier-general',NULL,1,NULL,NULL,1,'2019-10-28 15:51:37','2019-10-28 15:51:37',NULL,1,NULL,NULL),
(22,'psc','psc',21,1,NULL,1,1,'2019-10-28 15:51:58','2019-10-28 15:51:58',NULL,1,NULL,NULL);

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `designation` varchar(221) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `members` */

insert  into `members`(`id`,`designation`,`image`,`name`,`info`,`category_id`,`subcategory_id`,`order`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(4,'Brigadier General','/uploads/images/1571829942_1_commander.jpg','Md. Mizanur Rahman','<?xml encoding=\"utf-8\" ?><font color=\"#212529\" face=\"-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"font-size: 16px;\">Brigadier General Md. Mizanur Rahman, ndc was born 16th December, 1970 at Thakurgaon. The General was commissioned on 09th June, 1992 with 26th BMA Long Course in Regiment of Infantry. He was taken over the Command of 99 Composite Brigade as commander on 14th January, 2019.</span></font><br><p></p>\n',21,22,1,1,'2019-10-23 16:33:15','2019-11-04 17:17:41',NULL,1,1,NULL),
(8,'Brigade Major (BM)','/uploads/images/1572252038_1_brigade_major.jpg','Abu Md Tuhin-ul Alam','<?xml encoding=\"utf-8\" ?><p>\"</p>\n',8,10,1,1,'2019-10-28 14:40:38','2019-10-28 15:00:45',NULL,1,1,NULL),
(9,'Officer Commanding (OC)','/uploads/images/1572253543_1_commander.jpg','Md. Mizanur Rahman','<?xml encoding=\"utf-8\" ?><p>\"</p>\n',17,18,1,1,'2019-10-28 15:05:43','2019-10-28 15:09:07',NULL,1,1,NULL),
(10,'Surgical Specialist','/uploads/images/1572253593_1_brigade_major.jpg','Abu Md Tuhin-ul Alam','<?xml encoding=\"utf-8\" ?><p>\"</p>\n',17,20,1,1,'2019-10-28 15:06:33','2019-10-28 15:09:22',NULL,1,1,NULL),
(11,'Medicine Specialist','/uploads/images/1572253828_1_major_afique_hasan.jpg','Afique Hasan','<?xml encoding=\"utf-8\" ?>\n',14,NULL,1,1,'2019-10-28 15:10:01','2019-10-28 15:10:28',NULL,1,1,NULL),
(12,'Gynocologist','/uploads/images/1572253914_1_lt_foysal.jpg','Md. Faisal Rahman','<?xml encoding=\"utf-8\" ?>\n',14,NULL,1,1,'2019-10-28 15:11:54','2019-10-28 15:11:54',NULL,1,NULL,NULL),
(13,'Medical Officer (MO)','/uploads/images/1572253960_1_lt_foysal.jpg','Md. Faisal Rahman','<?xml encoding=\"utf-8\" ?>\n',15,NULL,1,1,'2019-10-28 15:12:40','2019-10-28 15:12:40',NULL,1,NULL,NULL),
(14,'Commanding Officer (CO)','/uploads/images/1572254123_1_KhandakerMustafizurRahman.jpeg','Khandaker Mustafizur Rahman','<?xml encoding=\"utf-8\" ?>\n',12,13,1,1,'2019-10-28 15:15:23','2019-11-20 12:01:28',NULL,1,NULL,NULL),
(15,'Second in Command (2IC)','/uploads/images/1572254160_1_QuaizMD.RahatKoreshi.jpeg','Quaiz MD. Rahat Koreshi,','<?xml encoding=\"utf-8\" ?>\n',8,NULL,1,1,'2019-10-28 15:16:00','2019-10-28 15:16:00',NULL,1,NULL,NULL),
(16,'Adjutent (Adjt)','/uploads/images/1572254255_1_MohammadMahidHossain.jpeg','Abdullah AL Mahin','<?xml encoding=\"utf-8\" ?>\n',14,NULL,1,1,'2019-10-28 15:17:35','2019-10-28 15:17:35',NULL,1,NULL,NULL),
(17,'Quarter Master (QM)','/uploads/images/1572254308_1_ASMSazid.jpeg','A S M Sazid','<?xml encoding=\"utf-8\" ?>\n',11,NULL,1,1,'2019-10-28 15:18:28','2019-10-28 15:18:28',NULL,1,NULL,NULL),
(18,'SM','/uploads/images/1572254338_1_avatar.jpg','Md. Faisal Rahman','<?xml encoding=\"utf-8\" ?>\n',15,NULL,1,1,'2019-10-28 15:18:58','2019-10-28 15:18:58',NULL,1,NULL,NULL),
(19,'Commanding Officer (CO)','/uploads/images/1572254382_1_SamiUdDowlaChowdhury.jpeg','Sami ud Dowla Chowdhury','<?xml encoding=\"utf-8\" ?>\n',8,10,1,1,'2019-10-28 15:19:42','2019-10-28 15:19:42',NULL,1,NULL,NULL),
(20,'Second in Command (2IC)','/uploads/images/1572254419_1_avatar.jpg','Quaiz MD. Rahat Koreshi','<?xml encoding=\"utf-8\" ?>\n',8,NULL,1,1,'2019-10-28 15:20:19','2019-10-28 15:20:19',NULL,1,NULL,NULL),
(21,'Adjutent (Adjt)','/uploads/images/1572254471_1_MohammadMahidHossain.jpeg','Mohammad Mahid Hossain','<?xml encoding=\"utf-8\" ?>\n',16,NULL,1,1,'2019-10-28 15:21:11','2019-10-28 15:21:11',NULL,1,NULL,NULL),
(22,'Quarter Master (QM)','/uploads/images/1572254509_1_AsifAhmed.jpeg','Asif Ahmed','<?xml encoding=\"utf-8\" ?>\n',16,NULL,1,1,'2019-10-28 15:21:49','2019-10-28 15:21:49',NULL,1,NULL,NULL),
(23,'SM','/uploads/images/1572254558_1_avatar.jpg','Md. Faisal Rahman','<?xml encoding=\"utf-8\" ?>\n',15,NULL,1,1,'2019-10-28 15:22:38','2019-10-28 15:22:38',NULL,1,NULL,NULL),
(24,'Commanding Officer (CO)','/uploads/images/1572254603_1_SarderAbdullahAl-Mamun.jpeg','Sarder Abdullah Al-Mamun','<?xml encoding=\"utf-8\" ?>\n',12,NULL,1,1,'2019-10-28 15:23:23','2019-10-28 15:23:23',NULL,1,NULL,NULL),
(25,'Second in Command (2IC)','/uploads/images/1572254637_1_AfzalHossain.jpeg','Afzal Hossain','<?xml encoding=\"utf-8\" ?>\n',8,10,1,1,'2019-10-28 15:23:57','2019-10-28 15:23:57',NULL,1,NULL,NULL),
(26,'Adjutent (Adjt)','/uploads/images/1572254670_1_avatar.jpg','Abdullah AL Mahin','<?xml encoding=\"utf-8\" ?>\n',14,NULL,1,1,'2019-10-28 15:24:30','2019-10-28 15:24:30',NULL,1,NULL,NULL),
(27,'Quarter Master (QM)','/uploads/images/1572254706_1_avatar.jpg','A S M Sazid','<?xml encoding=\"utf-8\" ?>\n',14,NULL,1,1,'2019-10-28 15:25:06','2019-10-28 15:25:06',NULL,1,NULL,NULL),
(28,'SM','/uploads/images/1572254742_1_avatar.jpg','Md. Faisal Rahman','<?xml encoding=\"utf-8\" ?>\n',15,NULL,1,1,'2019-10-28 15:25:42','2019-10-28 15:25:42',NULL,1,NULL,NULL),
(29,'Quarter Master (QM)','/uploads/images/1572254881_1_AsifAhmed.jpeg','A S M Sazid','<?xml encoding=\"utf-8\" ?>\n',14,NULL,1,1,'2019-10-28 15:28:01','2019-10-28 15:28:01',NULL,1,NULL,NULL),
(30,'SM','/uploads/images/1572254934_1_lt_foysal.jpg','Md. Faisal Rahman','<?xml encoding=\"utf-8\" ?>\n',15,NULL,1,1,'2019-10-28 15:28:54','2019-10-28 15:28:54',NULL,1,NULL,NULL),
(31,'DAA&QMG','/uploads/images/1572255607_1_major_afique_hasan.jpg','Afique Hasan','<?xml encoding=\"utf-8\" ?>\n',8,NULL,1,1,'2019-10-28 15:40:07','2019-10-28 15:40:07',NULL,1,NULL,NULL),
(32,'GSO (3) Edn','/uploads/images/1572255713_1_lt_foysal.jpg','Md. Faisal Rahman','<?xml encoding=\"utf-8\" ?>\n',11,NULL,1,1,'2019-10-28 15:41:53','2019-10-28 15:41:53',NULL,1,NULL,NULL);

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT '0',
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_attribute` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relational_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relational_id` int(11) DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT '1',
  `icon` text COLLATE utf8_unicode_ci,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menus` */

insert  into `menus`(`id`,`parent_id`,`level`,`name`,`title_attribute`,`location`,`relational_type`,`relational_id`,`link`,`order`,`icon`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(17,NULL,0,'About Us','About Us','primary_menu','custom',NULL,'#',1,NULL,1,'2019-10-21 17:30:55','2019-10-21 17:30:55',NULL,1,NULL,NULL),
(18,NULL,0,'Units','Units','primary_menu','custom',NULL,'#',1,NULL,1,'2019-10-21 17:31:40','2019-10-21 17:31:40',NULL,1,NULL,NULL),
(19,NULL,0,'War Heroes','War Heroes','primary_menu','custom',NULL,'#',1,NULL,1,'2019-10-21 17:31:59','2019-10-21 17:31:59',NULL,1,NULL,NULL),
(20,NULL,0,'Padma Bridge','Padma Bridge','primary_menu','custom',NULL,'#',1,NULL,1,'2019-10-21 17:32:31','2019-10-21 17:32:31',NULL,1,NULL,NULL),
(21,NULL,0,'Nation Building','Nation Building','primary_menu','custom',NULL,'#',1,NULL,1,'2019-10-21 17:33:02','2019-10-21 17:33:02',NULL,1,NULL,NULL),
(22,NULL,0,'Media','Media','primary_menu','custom',NULL,'#',1,NULL,1,'2019-10-21 17:33:38','2019-10-21 17:33:38',NULL,1,NULL,NULL),
(23,NULL,0,'Branch Activities','Branch Activities','primary_menu','custom',NULL,'#',1,NULL,1,'2019-10-21 17:33:58','2019-11-11 14:09:14',NULL,1,NULL,NULL),
(24,17,1,'99 Composite Brigade','99 Composite Brigade','primary_menu','pages',22,NULL,1,NULL,1,'2019-10-21 17:56:22','2019-10-22 11:17:57',NULL,1,1,NULL),
(25,17,1,'History','History','primary_menu','pages',7,NULL,1,NULL,1,'2019-10-21 17:56:42','2019-10-22 11:18:10',NULL,1,1,NULL),
(26,17,1,'List of Commanders','List of Commanders','primary_menu','pages',8,NULL,1,NULL,1,'2019-10-21 17:57:07','2019-10-22 11:23:20',NULL,1,1,NULL),
(27,17,1,'List of Brigade Staffs','List of Brigade Staffs','primary_menu','pages',9,NULL,1,NULL,1,'2019-10-21 17:57:52','2019-10-22 11:21:40',NULL,1,1,NULL),
(29,17,1,'Citation/Awards','Citation/Awards','primary_menu','pages',12,NULL,1,NULL,1,'2019-10-21 17:58:27','2019-10-22 11:21:50',NULL,1,1,NULL),
(30,17,1,'List of Veteran','List of Veteran','primary_menu','pages',13,NULL,1,NULL,1,'2019-10-21 17:58:38','2019-10-22 11:21:54',NULL,1,1,NULL),
(31,18,1,'27 Riverine Engineering Battalion (RE)','27 Riverine Engineering Battalion (RE)','primary_menu','pages',14,NULL,1,NULL,1,'2019-10-21 17:59:54','2019-10-22 11:22:13',NULL,1,1,NULL),
(32,18,1,'28 East Bangle Regiments (EB)','28 East Bangle Regiments (EB)','primary_menu','pages',15,NULL,1,NULL,1,'2019-10-21 18:00:06','2019-10-22 11:22:15',NULL,1,1,NULL),
(33,18,1,'19 Bangladesh Infantry Regiment (BIR)','19 Bangladesh Infantry Regiment (BIR)','primary_menu','pages',16,NULL,1,NULL,1,'2019-10-21 18:00:19','2019-10-22 11:22:18',NULL,1,1,NULL),
(34,18,1,'43 Short Range Air Defence (SHORAD)','43 Short Range Air Defence (SHORAD)','primary_menu','pages',17,NULL,1,NULL,1,'2019-10-21 18:00:45','2019-10-22 11:22:22',NULL,1,1,NULL),
(35,18,1,'ADS','ADS','primary_menu','pages',18,NULL,1,NULL,1,'2019-10-21 18:01:04','2019-10-22 11:22:24',NULL,1,1,NULL),
(36,18,1,'Adhoc SSD','Adhoc SSD','primary_menu','pages',19,NULL,1,NULL,1,'2019-10-21 18:01:21','2019-10-22 11:22:26',NULL,1,1,NULL),
(37,18,1,'Adhoc SSD','Adhoc SSD','primary_menu','pages',19,NULL,1,NULL,1,'2019-10-21 18:01:50','2019-10-22 11:22:28',NULL,1,1,NULL),
(38,18,1,'Adhoc Workshop','Adhoc Workshop','primary_menu','pages',20,NULL,1,NULL,1,'2019-10-21 18:02:08','2019-10-22 11:22:31',NULL,1,1,NULL),
(39,18,1,'Garrison Engineers (GE)','Garrison Engineers (GE)','primary_menu','pages',21,NULL,1,NULL,1,'2019-10-21 18:02:26','2019-10-22 11:22:36',NULL,1,1,NULL),
(40,19,1,'Munshiganj','Munshiganj War Heroes','primary_menu','post_category',20,NULL,1,NULL,1,'2019-10-21 18:13:42','2019-10-28 12:02:30',NULL,1,1,NULL),
(41,19,1,'Faridpur','Faridpur War Heroes','primary_menu','post_category',21,NULL,1,NULL,1,'2019-10-21 18:13:56','2019-10-28 12:02:41',NULL,1,1,NULL),
(42,19,1,'Madaripur','Madaripur War Heroes','primary_menu','post_category',22,NULL,1,NULL,1,'2019-10-21 18:14:10','2019-10-28 12:02:55',NULL,1,1,NULL),
(43,20,1,'Project Cost','Project Cost','primary_menu','pages',26,NULL,1,NULL,1,'2019-10-21 18:18:49','2019-10-22 11:25:30',NULL,1,1,NULL),
(44,20,1,'Original Funding Arrangement','Original Funding Arrangement','primary_menu','pages',27,NULL,1,NULL,1,'2019-10-21 18:19:01','2019-10-22 11:25:34',NULL,1,1,NULL),
(45,20,1,'Contract Details','Contract Details','primary_menu','pages',28,NULL,1,NULL,1,'2019-10-21 18:19:31','2019-10-22 11:25:36',NULL,1,1,NULL),
(46,21,1,'Development Work','Development Work','primary_menu','pages',29,NULL,1,NULL,1,'2019-10-21 18:19:55','2019-10-22 11:25:38',NULL,1,1,NULL),
(47,21,1,'Construction Work','Construction Work','primary_menu','pages',30,NULL,1,NULL,1,'2019-10-21 18:20:08','2019-10-22 11:25:40',NULL,1,1,NULL),
(48,21,1,'In Aid to Civil Administration','In Aid to Civil Administration','primary_menu','pages',31,NULL,1,NULL,1,'2019-10-21 18:20:20','2019-10-22 11:25:42',NULL,1,1,NULL),
(49,22,1,'Spotlight','Spotlight','primary_menu','pages',32,NULL,1,NULL,1,'2019-10-21 18:20:34','2019-10-22 11:25:45',NULL,1,1,NULL),
(50,23,1,'General Staff Branch (GS)','General Staff Branch (GS)','primary_menu','pages',36,NULL,1,NULL,1,'2019-10-21 18:28:31','2019-10-22 11:26:01',NULL,1,1,NULL),
(51,23,1,'Admin & Quartering Branch','Admin & Quartering Branch','primary_menu','pages',37,NULL,1,NULL,1,'2019-10-21 18:29:09','2019-10-22 11:26:03',NULL,1,1,NULL),
(52,23,1,'Establishment Branch','Establishment Branch','primary_menu','pages',38,NULL,1,NULL,1,'2019-10-21 18:29:33','2019-10-22 11:26:05',NULL,1,1,NULL),
(53,23,1,'Ord Branch','Ord Branch','primary_menu','pages',39,NULL,1,NULL,1,'2019-10-21 18:29:48','2019-11-11 14:28:30',NULL,1,1,NULL),
(54,22,1,'Publications','Publications','primary_menu','pages',33,NULL,1,NULL,1,'2019-10-21 18:30:48','2019-10-22 11:25:48',NULL,1,1,NULL),
(55,22,1,'Photo Gallery','Photo Gallery','primary_menu','photo_gallery',NULL,'/photo-gallery',1,NULL,1,'2019-10-21 18:31:16','2019-10-27 11:23:22',NULL,1,1,NULL),
(56,22,1,'Video Gallery','Video Gallery','primary_menu','video_gallery',NULL,'/video-gallery',1,NULL,1,'2019-10-21 18:31:49','2019-10-27 11:23:35',NULL,1,1,NULL),
(57,22,1,'RAB arrests man with arms','RAB arrests man with arms','primary_menu','pages',41,NULL,1,NULL,1,'2019-10-21 19:14:42','2019-10-22 11:25:59',NULL,1,1,NULL),
(58,17,1,'Archive','Archive','primary_menu','photo_album',3,NULL,1,NULL,1,'2019-10-28 12:24:36','2019-10-28 12:24:36',NULL,1,NULL,NULL),
(59,20,1,'Resettlement Details','Resettlement Details','primary_menu','pages',52,NULL,1,NULL,1,'2019-10-28 13:20:38','2019-10-28 13:20:38',NULL,1,NULL,NULL),
(60,20,1,'Environment Details','Environment Details','primary_menu','pages',53,NULL,1,NULL,1,'2019-10-28 13:21:08','2019-10-28 13:21:08',NULL,1,NULL,NULL),
(61,20,1,'Land Acquisition Details','Land Acquisition Details','primary_menu','pages',54,NULL,1,NULL,1,'2019-10-28 13:22:54','2019-10-28 13:22:54',NULL,1,NULL,NULL),
(62,20,1,'Project Cost Summary','Project Cost Summary','primary_menu','pages',55,NULL,1,NULL,1,'2019-10-28 13:23:12','2019-10-28 13:23:12',NULL,1,NULL,NULL),
(63,20,1,'Main Bridge Details (Technical)','Main Bridge Details (Technical)','primary_menu','pages',56,NULL,1,NULL,1,'2019-10-28 13:26:11','2019-10-28 13:26:11',NULL,1,NULL,NULL),
(64,20,1,'River Training Work (Technical)','River Training Work (Technical)','primary_menu','pages',57,NULL,1,NULL,1,'2019-10-28 13:26:30','2019-10-28 13:26:30',NULL,1,NULL,NULL),
(65,20,1,'Approach Road and Service Areas Details','Approach Road and Service Areas Details','primary_menu','pages',58,NULL,1,NULL,1,'2019-10-28 13:26:49','2019-10-28 13:26:49',NULL,1,NULL,NULL),
(66,19,1,'Comilla War Heroes','Comilla War Heroes','primary_menu','post_category',23,NULL,1,NULL,1,'2019-10-30 17:25:57','2019-10-30 17:27:23','2019-10-30 18:54:56',1,1,NULL),
(67,17,1,'Achievements','Achievements','primary_menu','post_category',24,NULL,1,NULL,1,'2019-11-20 16:08:32','2019-11-20 16:08:32',NULL,1,NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(3,'2019_12_04_095232_create_permission_tables',1);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

insert  into `model_has_permissions`(`permission_id`,`model_type`,`model_id`) values 
(1,'App\\User',1),
(2,'App\\User',1),
(3,'App\\User',1),
(4,'App\\User',1),
(5,'App\\User',1),
(6,'App\\User',1),
(7,'App\\User',1),
(8,'App\\User',1),
(9,'App\\User',1),
(10,'App\\User',1),
(11,'App\\User',1),
(12,'App\\User',1),
(13,'App\\User',1),
(14,'App\\User',1),
(15,'App\\User',1),
(16,'App\\User',1),
(17,'App\\User',1),
(18,'App\\User',1),
(19,'App\\User',1),
(20,'App\\User',1),
(21,'App\\User',1),
(22,'App\\User',1),
(23,'App\\User',1),
(24,'App\\User',1),
(25,'App\\User',1),
(26,'App\\User',1),
(27,'App\\User',1),
(28,'App\\User',1),
(29,'App\\User',1),
(30,'App\\User',1),
(31,'App\\User',1),
(32,'App\\User',1),
(33,'App\\User',1),
(34,'App\\User',1),
(35,'App\\User',1),
(36,'App\\User',1),
(37,'App\\User',1),
(38,'App\\User',1),
(39,'App\\User',1),
(40,'App\\User',1),
(41,'App\\User',1),
(42,'App\\User',1),
(43,'App\\User',1),
(44,'App\\User',1),
(45,'App\\User',1),
(46,'App\\User',1),
(47,'App\\User',1),
(48,'App\\User',1),
(49,'App\\User',1),
(50,'App\\User',1),
(51,'App\\User',1),
(52,'App\\User',1),
(53,'App\\User',1),
(54,'App\\User',1),
(55,'App\\User',1),
(56,'App\\User',1),
(57,'App\\User',1),
(58,'App\\User',1),
(59,'App\\User',1),
(60,'App\\User',1),
(61,'App\\User',1),
(62,'App\\User',1),
(63,'App\\User',1),
(64,'App\\User',1),
(65,'App\\User',1),
(66,'App\\User',1),
(67,'App\\User',1),
(68,'App\\User',1),
(69,'App\\User',1),
(70,'App\\User',1),
(71,'App\\User',1),
(72,'App\\User',1),
(73,'App\\User',1),
(74,'App\\User',1),
(75,'App\\User',1),
(76,'App\\User',1),
(77,'App\\User',1),
(78,'App\\User',1),
(79,'App\\User',1),
(1,'App\\User',4),
(11,'App\\User',4),
(35,'App\\User',4),
(54,'App\\User',4),
(58,'App\\User',4),
(59,'App\\User',4),
(54,'App\\User',6),
(55,'App\\User',6),
(58,'App\\User',6),
(59,'App\\User',6),
(51,'App\\User',7),
(52,'App\\User',7),
(53,'App\\User',7),
(54,'App\\User',7),
(55,'App\\User',7),
(56,'App\\User',7),
(57,'App\\User',7),
(58,'App\\User',7),
(59,'App\\User',7),
(60,'App\\User',7),
(51,'App\\User',8),
(52,'App\\User',8),
(53,'App\\User',8),
(54,'App\\User',8),
(55,'App\\User',8),
(56,'App\\User',8),
(57,'App\\User',8),
(58,'App\\User',8),
(59,'App\\User',8),
(60,'App\\User',8),
(1,'App\\User',9),
(2,'App\\User',9),
(3,'App\\User',9),
(4,'App\\User',9),
(5,'App\\User',9),
(6,'App\\User',9),
(7,'App\\User',9),
(8,'App\\User',9),
(9,'App\\User',9),
(10,'App\\User',9),
(11,'App\\User',9),
(12,'App\\User',9),
(13,'App\\User',9),
(14,'App\\User',9),
(15,'App\\User',9),
(16,'App\\User',9),
(17,'App\\User',9),
(18,'App\\User',9),
(19,'App\\User',9),
(20,'App\\User',9),
(21,'App\\User',9),
(22,'App\\User',9),
(23,'App\\User',9),
(24,'App\\User',9),
(25,'App\\User',9),
(26,'App\\User',9),
(27,'App\\User',9),
(28,'App\\User',9),
(29,'App\\User',9),
(30,'App\\User',9),
(31,'App\\User',9),
(32,'App\\User',9),
(33,'App\\User',9),
(34,'App\\User',9),
(35,'App\\User',9),
(36,'App\\User',9),
(37,'App\\User',9),
(38,'App\\User',9),
(39,'App\\User',9),
(40,'App\\User',9),
(41,'App\\User',9),
(42,'App\\User',9),
(43,'App\\User',9),
(44,'App\\User',9),
(45,'App\\User',9),
(46,'App\\User',9),
(47,'App\\User',9),
(48,'App\\User',9),
(49,'App\\User',9),
(50,'App\\User',9),
(51,'App\\User',9),
(52,'App\\User',9),
(53,'App\\User',9),
(54,'App\\User',9),
(55,'App\\User',9),
(56,'App\\User',9),
(57,'App\\User',9),
(58,'App\\User',9),
(59,'App\\User',9),
(60,'App\\User',9),
(61,'App\\User',9),
(62,'App\\User',9),
(63,'App\\User',9),
(64,'App\\User',9),
(65,'App\\User',9),
(66,'App\\User',9),
(67,'App\\User',9),
(68,'App\\User',9),
(69,'App\\User',9),
(70,'App\\User',9),
(71,'App\\User',9),
(72,'App\\User',9),
(73,'App\\User',9),
(74,'App\\User',9),
(75,'App\\User',9),
(76,'App\\User',9),
(77,'App\\User',9),
(78,'App\\User',9),
(79,'App\\User',9),
(61,'App\\User',10),
(62,'App\\User',10),
(63,'App\\User',10),
(64,'App\\User',10),
(65,'App\\User',10),
(66,'App\\User',10),
(67,'App\\User',10),
(68,'App\\User',10),
(69,'App\\User',10),
(70,'App\\User',10),
(71,'App\\User',10),
(72,'App\\User',10),
(73,'App\\User',10),
(79,'App\\User',10);

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(1,'App\\User',1),
(4,'App\\User',3),
(8,'App\\User',4),
(4,'App\\User',5),
(9,'App\\User',6),
(6,'App\\User',7),
(7,'App\\User',8),
(5,'App\\User',9),
(2,'App\\User',10),
(3,'App\\User',11),
(2,'App\\User',13),
(2,'App\\User',14),
(3,'App\\User',15),
(1,'App\\User',16);

/*Table structure for table `note_user` */

DROP TABLE IF EXISTS `note_user`;

CREATE TABLE `note_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

/*Data for the table `note_user` */

insert  into `note_user`(`id`,`note_id`,`user_id`) values 
(13,6,4),
(14,6,7),
(16,7,4),
(17,7,6),
(18,8,4),
(19,8,6),
(20,8,8),
(21,9,1),
(22,9,4),
(24,10,5),
(25,10,6),
(26,11,4),
(27,11,8),
(28,12,4),
(29,12,6),
(30,12,14),
(31,12,8),
(32,11,1),
(33,11,5),
(34,5,8),
(37,5,7),
(38,5,14);

/*Table structure for table `notes` */

DROP TABLE IF EXISTS `notes`;

CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text,
  `important` tinyint(1) DEFAULT NULL,
  `public` tinyint(1) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `notes` */

insert  into `notes`(`id`,`title`,`description`,`important`,`public`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Test note 01','Test Note\r\n	',NULL,NULL,1,1,'2019-11-21 12:59:38',NULL,'2019-11-21 14:12:37',1,'2019-11-21 14:12:37'),
(2,'Do the Task','dfasdf',NULL,NULL,1,1,'2019-11-21 13:29:46',NULL,'2019-11-21 14:14:48',1,'2019-11-21 14:14:48'),
(3,'Test 001','Test',NULL,NULL,1,1,'2019-11-21 14:15:25',NULL,'2019-11-21 14:17:31',1,'2019-11-21 14:17:31'),
(4,'Test 001','Test',NULL,NULL,1,1,'2019-11-21 14:15:31',NULL,'2019-11-21 14:17:34',1,'2019-11-21 14:17:34'),
(5,'Test 002','Test word limit. Word limit is currently set to 5 words. Let\'s see if that works',1,1,1,1,'2019-11-21 14:18:05',NULL,'2019-12-09 16:38:15',NULL,NULL),
(6,'Test 003','Test',NULL,NULL,1,1,'2019-11-21 16:34:14',NULL,'2019-11-21 16:34:14',NULL,NULL),
(7,'Test 005','asdfasdf',NULL,NULL,1,1,'2019-11-21 16:56:27',NULL,'2019-11-21 16:56:27',NULL,NULL),
(8,'Test 005','Test',NULL,NULL,1,1,'2019-11-21 17:09:22',NULL,'2019-11-21 17:09:22',NULL,NULL),
(9,'Outgoing Test','Test',NULL,NULL,1,5,'2019-11-21 17:39:32',NULL,'2019-11-21 17:39:32',NULL,NULL),
(10,'Important','Important',0,1,1,1,'2019-12-09 15:52:46',NULL,'2019-12-09 15:55:20',NULL,NULL),
(11,'Important 002','Test',1,1,1,1,'2019-12-09 16:06:34',NULL,'2019-12-09 16:34:47',NULL,NULL),
(12,'Do the Task 002','Test',1,1,1,1,'2019-12-09 16:07:29',NULL,'2019-12-09 16:08:59',NULL,NULL);

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8,
  `content_type` tinyint(2) DEFAULT '1' COMMENT '1=html 2=file/pdf',
  `content` longtext CHARACTER SET utf8,
  `parent_page_id` int(11) DEFAULT NULL,
  `order` tinyint(2) DEFAULT '0',
  `template_id` int(11) DEFAULT NULL,
  `featured_image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish_status` tinyint(2) DEFAULT '1' COMMENT '0=Draft,1=Published',
  `visibility` tinyint(2) DEFAULT '1' COMMENT '0=Public,1=PassProtected,2=Private',
  `visibility_pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pages` */

insert  into `pages`(`id`,`title`,`slug`,`content_type`,`content`,`parent_page_id`,`order`,`template_id`,`featured_image`,`publish_status`,`visibility`,`visibility_pass`,`publish_datetime`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(4,'Faridpur War Heros',NULL,1,'<?xml encoding=\"utf-8\" ?><h3 style=\'font-weight: 600; line-height: normal; color: red; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; padding: 17px 0px 0px; background-color: rgb(204, 236, 211); font-family: \"Kelly Slab\", cursive !important; font-size: 18px !important;\'><span style=\"font-family: georgia, serif; font-size: x-large;\">SECTOR 2</span></h3><p style=\"color: rgb(97, 97, 97); font-family: georgia, serif; background-color: rgb(204, 236, 211);\"><font size=\"4\"><span style=\"color: rgb(7, 55, 99);\">Commander: Major Khaled Mosharraf, Major ATM Haider</span></font></p><div style=\"color: rgb(97, 97, 97); font-family: georgia, serif; background-color: rgb(204, 236, 211); display: inline; float: right; margin: 5px 10px;\"><font size=\"4\"><a href=\"https://sites.google.com/site/bdliberationwar1971/sectors-and-sector-commanders/sector%202.jpg?attredirects=0\" imageanchor=\"1\" style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(131, 94, 165); border-bottom: none;\"><img border=\"0\" height=\"168\" src=\"https://sites.google.com/site/bdliberationwar1971/_/rsrc/1417933259418/sectors-and-sector-commanders/sector%202.jpg?height=168&amp;width=200\" width=\"200\" style=\"border-width: initial; border-style: none; padding: 0px; border-radius: 2px; margin: 7px;\"></a></font></div><p style=\"color: rgb(97, 97, 97); font-family: georgia, serif; background-color: rgb(204, 236, 211);\"><span style=\"color: rgb(39, 78, 19);\"><font size=\"3\">Sector 2 comprised of the districts of Dhaka, Comilla, and Faridpur, and part of Noakhali district. This sector was raised from the nucleus of 4 East Bengal and the EPR troops of Comilla and Noakhali. The sector was located at Melaghar about 20 miles south of Agartala. The sector commander was Major Khaled Mosharraf, later replaced by Major ATM Haider. About thirty five thousand guerilla fighters fought in this sector. Nearly six thousand of them were members of regular armed forces. The six sub-sectors of this sector (and their commanders) were: Gangasagar, Akhaura and Kasba (Mahbub, later replaced by Lieutenant Farooq, and Lieutenant Humayun Kabir); Mandabhav (Captain Gaffar); Shalda-nadi (Abdus Saleq Chowdhury); Matinagar (Lieutenant Didarul Alam); Nirbhoypur (Captain Akbar, later replaced by Lieutant Mahbub); and Rajnagar (Captain Jafar Imam, later replaced by Captain Shahid, and Lieutenant Imamuzzaman). Due to the operations of this sector the Dhaka-Chittagong highway in between Comilla and Feni was denied to the Pakistanis throughout the nine months of war of liberation. One of the most successful operations of this sector was the defence of the Belonia Bulge. The entries Belonia Bulge was kept liberated by the combined forces of 1 and 2 sectors till 21 June. In this sector, a number of regular companies operated deep inside Bangladesh. These were the Noakhali Company under subeder Lutfar Rahman operating around Begumganj, the Chandpur Company under subeder Zahirul Alam Khan operating in Chandpur Matlab area, a large force under Captain Abdul Halim Chowdhury operating in Manikganj-Munshiganj area in Dhaka and a force under Captain Shawkat at Faridpur. The urban guerrillas carried out a number of successful operations in Dhaka city itself.</font></span></p>\n',0,0,0,NULL,1,0,NULL,'2019-10-20 00:00:00',1,'2019-10-20 15:23:16',NULL,'2019-10-21 17:35:36',1,NULL),
(7,'History','History-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,1,'123','2019-10-21 00:00:00',1,'2019-10-21 17:38:15',NULL,'2019-10-28 13:04:41',NULL,NULL),
(8,'List of Commanders','List-of-Commanders-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:38:47',NULL,'2019-10-28 12:59:22',NULL,NULL),
(9,'List of Brigade Staffs','List-of-Brigade-Staffs-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:39:16',NULL,'2019-10-28 12:59:43',NULL,NULL),
(12,'Citation/Awards','Citation/Awards-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:41:15',NULL,'2019-10-28 13:00:28',NULL,NULL),
(13,'List of Veteran','List-of-Veteran-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:41:29',NULL,'2019-10-28 13:00:44',NULL,NULL),
(14,'27 Riverine Engineering Battalion (RE)','27-Riverine-Engineering-Battalion-(RE)-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:41:49',NULL,'2019-10-28 13:02:29',NULL,NULL),
(15,'28 East Bangle Regiments (EB)','28-East-Bangle-Regiments-(EB)-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:42:02',NULL,'2019-10-28 13:02:41',NULL,NULL),
(16,'19 Bangladesh Infantry Regiment (BIR)','19-Bangladesh-Infantry-Regiment-(BIR)-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:42:28',NULL,'2019-10-28 13:02:54',NULL,NULL),
(17,'43 Short Range Air Defence (SHORAD)','43-Short-Range-Air-Defence-(SHORAD)-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:43:07',NULL,'2019-10-28 13:03:12',NULL,NULL),
(18,'ADS','ADS-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:43:17',NULL,'2019-10-28 13:03:29',NULL,NULL),
(19,'Adhoc SSD','Adhoc-SSD-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:43:29',NULL,'2019-10-28 13:03:40',NULL,NULL),
(20,'Adhoc Workshop','Adhoc-Workshop-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:43:42',NULL,'2019-10-28 13:03:52',NULL,NULL),
(21,'Garrison Engineers (GE)','Garrison-Engineers-(GE)-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:43:51',NULL,'2019-10-28 13:04:06',NULL,NULL),
(22,'99 Composite Brigade','99-composite-brigade',1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<!--?xml encoding=\"utf-8\" ?--><html><body><p><span style=\"font-family: Verdana; font-size: 16px; text-align: justify;\">In the history of existing Composite Brigade of Bangladesh Army, 99 COMBDE came into being maintaining the numerical chronology of COMBDE after 98 COMBDE.&nbsp;</span></p><p style=\"text-align: center;\"><img src=\"\" data-filename=\"log_BIF.png\" style=\"width: 25%;\"><img data-filename=\"log_BIF.png\" style=\"width: 25%;\" src=\"http://127.0.0.1:8000/uploads/page/5df0cdfa3e16b.png\"><span style=\"font-family: Verdana; font-size: 16px; text-align: justify;\"><br></span></p><div class=\"chief-army-text\" style=\"display: inline-block; text-align: justify;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: 21px;\"><span style=\"font-family: Verdana; font-size: 16px;\">The holy number &lsquo;99&rsquo; was taken considering the 99 virtuous names of Almighty Allah. The long awaited demand and cherished dream of West &ndash; Southern people of Bangladesh was &ldquo;PADMA MULTIPURPOSE BRIDGE&rdquo;. After the liberation in 1971, the construction of Padma Bridge was a mass demand in the list of development works for the Nation. After that Bangladesh Government took all possible steps and planning for the construction of this Bridge. As a part of the planning process and to fulfill the following requirements, a Composite Brigade was included in &ldquo;Forces Goal 2030&rdquo;.</span><span style=\"font-family: Verdana;\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: 21px;\"><span style=\"font-family: Verdana;\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: 21px;\"><span style=\"font-family: Verdana;\">General Aziz Ahmed, BSP, BGBM, PBGM, BGBMS, psc, G was born on 01 January 1961 at Narayangonj. The General joined Bangladesh Military Academy on 07 August 1981 and was commissioned on 10 June 1983 with 8th BMA Long Course in the Regiment of Artillery. He has taken over the Command of Bangladesh Army as Chief of Army Staff on 25 June 2018.</span><br></p></div><p><span style=\"font-family: Verdana;\">&nbsp;</span><br></p><div class=\"chief-army-text\" style=\"display: inline-block; text-align: justify;\"><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">He has been honored as the Colonel Commandant of the Armored Corps, Regiment of Artillery, Colonel of the Regiment of The East Bengal and Bangladesh Infantry Regiment.</span></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">General Aziz completed his graduation in BA (pass) under Chittagong University in 1983. He is a graduate of Defense Services Command and Staff College, Mirpur. He completed his Masters in Defense Studies (MDS) and Masters of Science (M.Sc) (Technical) from National University and also earned Masters in Business Administration (Executive) from American International University-Bangladesh (AIUB). The General is now pursuing PhD in border management under Bangladesh University of Professionals (BUP).</span></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">General Aziz attended a number of professional courses, seminars and symposiums at home and abroad. Worth mentioning are Officers\' Gunnery Staff Course from Artillery Center &amp; School, Chittagong and Long Gunnery Staff Course from School of Artillery, Deolali, India. He attended Pacific Army Senior Officers Logistic Seminar (PASOLS) in Fiji, Pacific Area Special&nbsp; Operations Conference (PASOC) in Florida &amp; Hawaii, International Border Police Conference in Poland, Border Police Conference in Hungary, World Border police Congress in Netherlands. He led 08 bilateral Director General (DG) Level Border Guard Bangladesh (BGB) - Border Security Force (BSF) conferences. He also attended a Conference on Technical Cooperation &amp; Capacity building for Border Management in Thailand.</span><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">Within his colorful military career, he held a number of important staff, instructional and command appointments. He had been a GSO-3 (Operation) in Chittagong Hill Tracts (CHT), Brigade major in an infantry brigade, GSO-II of Military Training and GSO-I of Pay Pension &amp; Allowance Directorate in AHQ. General has a vast experience of command where he commanded one Artillery Regiment, one Bangladesh Rifles (BDR) Battalion, one BDR Sector, two Artillery brigades including an Independent Air Defense Artillery. The General also served as instructor for more than 07 years in Artillery Center &amp; School and School of Military Intelligence.</span><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">He was the GOC of 33 Infantry Division. As Lieutenant General, he was the GOC of Army Training and Doctrine Command (ARTDOC) and Quarter Master General (QMG) of Bangladesh Army. General is currently acting as the Chairman, Board of Directors of Bangladesh Machine Tools Factory limited, Bangladesh Diesel Plant limited &amp; Trust Bank Limited. He is the Chairman, Board of Trustees of Sena Kalyan Sangsta and President of Bangladesh Golf Federation, Kurmitola Golf Club and Bangladesh Olympic Association.</span></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">After the BDR Carnage, he was the 4th DG and commanded the force from 05 December 2012 to 16 November 2016 and played the key role to bring normalcy in the force and reinstated confidence of the nation upon it. Under his command, BGB raised four regional and sector headquarters each, 14 battalions and established 108 new border outposts covering 310 KM out of 539 KM unguarded border with India &amp; Myanmar in CHT. During his tenure, General Aziz made a significant record of exchange of enclaves with India without any hassle. He under took many welfare projects for BGB soldiers. Worth mentioning are the \"Shimanto Bank\" a commercial enterprise; three new 50 bedded modern Hospitals, etc. During his term, a total of 18,000 new soldiers were recruited in the force, including 100 female recruits for the first time. As DG BGB, General was the first overseas \"Chief Guest\" in the history of BSF to review a passing out Parade at BSF Academy, Tekanpur, India.</span></div><div><br></div></div><p>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<br></p></body></html>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:44:56',NULL,'2019-12-11 17:07:39',NULL,NULL),
(23,'Munshiganj',NULL,1,'<?xml encoding=\"utf-8\" ?><p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p>\r\n<p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p><p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p><p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p>',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:12:42',NULL,'2019-10-21 18:12:42',NULL,NULL),
(24,'Faridpur',NULL,1,'<?xml encoding=\"utf-8\" ?><p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p>\r\n<p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p><p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p><p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p>',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:12:49',NULL,'2019-10-21 18:12:49',NULL,NULL),
(25,'Madaripur',NULL,1,'<?xml encoding=\"utf-8\" ?><p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p>\r\n<p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p><p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p><p>List of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of CommandersList of Commanders<br></p>',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:12:57',NULL,'2019-10-21 18:12:57',NULL,NULL),
(26,'Project Cost','Project-Cost-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:15:16',NULL,'2019-10-28 13:04:57',NULL,NULL),
(27,'Original Funding Arrangement','Original-Funding-Arrangement',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:15:29',NULL,'2019-10-28 13:05:11',NULL,NULL),
(28,'Contract Details','contract-details',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.</p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:15:38',NULL,'2019-10-28 13:15:14',NULL,NULL),
(29,'Development Work','development-work',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:15:54',NULL,'2019-10-28 13:28:09',1,NULL),
(30,'Construction Work','construction-work',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:16:03',NULL,'2019-10-28 13:28:38',1,NULL),
(31,'In Aid to Civil Administration','in-aid-to-civil-administration',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:16:13',NULL,'2019-10-28 13:28:50',1,NULL),
(32,'Spotlight','spotlight',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:16:23',NULL,'2019-10-28 13:29:09',1,NULL),
(33,'Publications','publications',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:16:29',NULL,'2019-10-28 13:29:49',1,NULL),
(36,'General Staff Branch (GS)','general-staff-branch-(gs)',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:17:12',NULL,'2019-10-28 13:30:05',1,NULL),
(37,'Admin & Quartering Branch','admin-&-quartering-branch',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:17:23',NULL,'2019-11-04 16:15:39',1,NULL),
(38,'Establishment Branch','establishment-branch',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:17:33',NULL,'2019-10-28 13:33:33',1,NULL),
(39,'Ord Branch','ord-branch',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,'/uploads/images/1571812071_1_log_BIF.png',1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 18:17:45',NULL,'2019-10-28 13:33:48',1,NULL),
(40,'Major general Shafiuddin promoted to lieutenant general',NULL,1,'<?xml encoding=\"utf-8\" ?>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 19:09:48',NULL,'2019-10-28 11:21:48',1,NULL),
(41,'RAB arrests man with arms','rab-arrests-man-with-arms',2,'/uploads/files/1572856942_1_119_Defence_English.pdf',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 19:13:39',NULL,'2019-11-04 16:12:20',1,NULL),
(42,'Welcome to 99 Composite Brigade','welcome',1,'<?xml encoding=\"utf-8\" ?><p style=\'margin-bottom: 0px; padding: 0px; outline: 0px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px; text-align: justify; background-color: rgb(241, 241, 241);\'>In the history of existing Composite Brigade of Bangladesh Army, 99 COMBDE came into being maintaining the numerical chronology of COMBDE after 98 COMBDE. The holy number &lsquo;99&rsquo; was taken considering the 99 virtuous names of Almighty Allah. The long awaited demand and cherished dream of West &ndash; Southern people of Bangladesh was &ldquo;PADMA MULTIPURPOSE BRIDGE&rdquo;. After the liberation in 1971, the construction of Padma Bridge was a mass demand in the list of development works for the Nation. After that Bangladesh Government took all possible steps and planning for the construction of this Bridge. As a part of the planning process and to fulfill the following requirements, a Composite Brigade was included in &ldquo;Forces Goal 2030&rdquo;.</p><ul style=\'margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; outline: 0px; list-style: none; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px; text-align: justify; background-color: rgb(241, 241, 241);\'><li style=\"margin: 0px; padding: 0px; outline: 0px;\">To ensure the security of Padma Multipurpose Bridge.</li><li style=\"margin: 0px; padding: 0px; outline: 0px;\">To ensure the security of the internationals involved during construction phase of the Bridge.</li><li style=\"margin: 0px; padding: 0px; outline: 0px;\">To provide supervision and consultancy during construction phase of the Bridge.</li></ul><p style=\'margin-bottom: 0px; padding: 0px; outline: 0px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px; text-align: justify; background-color: rgb(241, 241, 241);\'>Accordingly, 99 COMBDE was raised on 18 September 2013 under 46 Independent Infantry Brigade at Dhaka Cantonment. The flag raising ceremony of this Brigade was held on 19 September 2018 at Army Aviation Belman Hanger by Honourable Prime Minister of Bangladesh. Initially this Brigade started its journey with 20 Engineer Construction Battalion, 58 East Bengal and 34 Bangladesh Infantry Regiment. The Pioneer Commander of this Brigade was Brigadier General Shah &ndash; Noor Jilani, BSP, ndc, psc. On 11 March 2014, this Brigade established its foothold in a school complex of RS-3, north Kumarbhog, Mawa at Padma Multipurpose Bridge Project site. Later on, the Bridge shifted its location to Service Area-1, Dogachi, Srinagor, Munshigonj on 16 June 2015.</p>\n',NULL,1,0,NULL,1,0,NULL,'2019-10-22 00:00:00',1,'2019-10-22 20:01:08',NULL,'2019-10-22 20:01:08',NULL,NULL),
(52,'Resettlement Details','Resettlement-Details-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here.</p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-28 00:00:00',1,'2019-10-28 13:05:56',NULL,'2019-10-28 13:05:56',NULL,NULL),
(53,'Environment Details','environment-details',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-28 00:00:00',1,'2019-10-28 13:16:26',NULL,'2019-10-28 13:16:26',NULL,NULL),
(54,'Land Acquisition Details','land-acquisition-details-1',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-28 00:00:00',1,'2019-10-28 13:17:43',NULL,'2019-10-28 13:18:36',NULL,NULL),
(55,'Project Cost Summary','project-cost-summary',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-28 00:00:00',1,'2019-10-28 13:18:26',NULL,'2019-10-28 13:18:26',NULL,NULL),
(56,'Main Bridge Details (Technical)','main-bridge-details-(technical)',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-28 00:00:00',1,'2019-10-28 13:19:16',NULL,'2019-10-28 13:19:16',NULL,NULL),
(57,'River Training Work (Technical)','river-training-work-(technical)',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-28 00:00:00',1,'2019-10-28 13:19:32',NULL,'2019-10-28 13:19:32',NULL,NULL),
(58,'Approach Road and Service Areas Details','approach-road-and-service-areas-details',1,'<?xml encoding=\"utf-8\" ?><p>Content goes here...</p><div><br></div>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-28 00:00:00',1,'2019-10-28 13:19:52',NULL,'2019-10-28 13:19:52',NULL,NULL),
(59,'বাংলা এবং ইমেজ টেস্টিং','বাংলা-এবং-ইমেজ-টেস্টিং',1,'<p>&#2476;&#2494;&#2434;&#2482;&#2494; &#2447;&#2476;&#2434; &#2439;&#2478;&#2503;&#2460; &#2463;&#2503;&#2488;&#2509;&#2463;&#2495;&#2434;<p><br></p><p><img data-filename=\"website_logo.png\" style=\"width: 160px;\" src=\"http://127.0.0.1:8000/uploads/page/5dbd149b73446.png\"></p><p><br></p><p>&#2476;&#2494;&#2434;&#2482;&#2494; &#2447;&#2476;&#2434; &#2439;&#2478;&#2503;&#2460; &#2463;&#2503;&#2488;&#2509;&#2463;&#2495;&#2434;</p><p><br></p><p>\r\n\r\n</p></p>\n',NULL,1,0,NULL,1,0,NULL,'2019-10-31 00:00:00',1,'2019-10-31 19:06:50',NULL,'2019-11-02 11:31:07',NULL,NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'edit posts','web','2019-12-04 16:12:05','2019-12-04 16:12:05'),
(2,'add posts','web','2019-12-04 16:13:05','2019-12-04 16:13:05'),
(3,'view all posts','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(4,'delete posts','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(5,'add post categories','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(6,'edit post categories','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(7,'delete post categories','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(8,'view all post categories','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(9,'add pages','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(10,'edit pages','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(11,'delete pages','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(12,'view all pages','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(13,'add sliders','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(14,'edit sliders','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(15,'delete sliders','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(16,'view all sliders','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(17,'add photo albums','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(18,'edit photo albums','web','2019-12-04 16:46:04','2019-12-04 16:46:04'),
(19,'delete photo albums','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(20,'view all photo albums','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(21,'add videos','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(22,'edit videos','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(23,'delete videos','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(24,'view all videos','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(25,'edit logos','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(26,'edit header footers','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(27,'edit general site settings','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(28,'add social links','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(29,'edit social links','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(30,'delete social links','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(31,'view all social links','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(32,'add members','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(33,'edit members','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(34,'delete members','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(35,'view all members','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(36,'add menus','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(37,'edit menus','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(38,'delete menus','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(39,'view all menus','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(40,'add widgets','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(41,'edit widgets','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(42,'delete widgets','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(43,'view all widgets','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(44,'add widget data','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(45,'edit widget data','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(46,'delete widget data','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(47,'view all widget data','web','2019-12-04 16:46:05','2019-12-04 16:46:05'),
(48,'view all notes','web','2019-12-05 10:24:25','2019-12-05 10:24:25'),
(49,'delete notes','web','2019-12-05 10:24:25','2019-12-05 10:24:25'),
(50,'edit notes','web','2019-12-05 10:24:25','2019-12-05 10:24:25'),
(51,'add draft categories','web','2019-12-05 10:24:25','2019-12-05 10:24:25'),
(52,'edit draft categories','web','2019-12-05 10:24:25','2019-12-05 10:24:25'),
(53,'delete draft categories','web','2019-12-05 10:24:25','2019-12-05 10:24:25'),
(54,'view all draft categories','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(55,'add drafts','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(56,'edit drafts','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(57,'delete drafts','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(58,'view all drafts','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(59,'review drafts','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(60,'approve drafts','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(61,'add food menu category','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(62,'edit food menu category','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(63,'delete food menu category','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(64,'view all food menu category','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(65,'add food menu','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(66,'edit food menu','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(67,'delete food menu','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(68,'view all food menu','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(69,'view all meals','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(70,'view own meals','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(71,'meal entry','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(72,'confirm payment','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(73,'view meal reports','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(74,'add users','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(75,'edit users','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(76,'delete users','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(77,'view all users','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(78,'give permissions to user','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(79,'view all payments','web','2019-12-05 10:24:26','2019-12-05 10:24:26');

/*Table structure for table `post_categories` */

DROP TABLE IF EXISTS `post_categories`;

CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(221) NOT NULL,
  `slug` varchar(221) DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `level` int(11) DEFAULT '1',
  `order` int(11) DEFAULT '1',
  `description` varchar(221) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1' COMMENT '0=off 1=on',
  `deleted_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `post_categories` */

insert  into `post_categories`(`id`,`title`,`slug`,`parent_id`,`level`,`order`,`description`,`created_by`,`created_at`,`updated_at`,`deleted_at`,`status`,`deleted_by`,`updated_by`) values 
(1,'General','general',NULL,1,1,'general posts goes here',1,'2019-10-15 16:07:11','2019-11-03 10:22:31',NULL,1,NULL,1),
(2,'Private','private',NULL,1,1,NULL,1,'2019-10-15 16:08:48','2019-12-07 17:50:47',NULL,1,NULL,1),
(6,'Public','public',NULL,1,1,NULL,1,'2019-10-15 16:15:28','2019-10-22 17:23:15',NULL,1,NULL,1),
(9,'Important News','news-and-events',NULL,1,1,NULL,1,'2019-10-21 19:33:29','2019-11-20 17:10:03',NULL,1,1,1),
(10,'Breaking News','breaking-news',9,2,1,NULL,1,'2019-10-22 14:02:29','2019-10-23 10:28:46',NULL,1,1,1),
(11,'Job circular','job-circular',9,2,1,NULL,1,'2019-10-22 14:42:45','2019-10-23 10:28:46',NULL,1,1,NULL),
(12,'Public Posts','public-posts',6,2,1,NULL,1,'2019-10-22 14:43:41','2019-11-04 18:00:04',NULL,1,NULL,NULL),
(13,'Private Posts','private-posts',2,2,1,NULL,1,'2019-10-22 14:44:09','2019-10-22 14:46:17',NULL,1,NULL,1),
(14,'Private Posts for admin','private-posts-for-admin',2,2,1,NULL,1,'2019-10-22 14:45:57','2019-10-22 14:45:57',NULL,1,NULL,NULL),
(15,'PUBLICATIONS','publications',NULL,1,1,NULL,1,'2019-10-22 17:22:03','2019-11-04 17:46:29',NULL,1,NULL,NULL),
(16,'BRANCH INFORMATIONS','branch-informations',NULL,1,1,NULL,1,'2019-10-22 17:24:17','2019-11-02 13:02:23',NULL,1,NULL,NULL),
(17,'UNIT INFORMATIONS','unit-informations',NULL,1,1,NULL,1,'2019-10-22 17:24:27','2019-11-02 12:55:21',NULL,1,NULL,1),
(18,'Welcome','welcome',NULL,1,1,'Welcome Post will be stored Here. Only the latest post will be shown in Home page.',1,'2019-10-23 10:53:07','2019-11-04 17:46:18',NULL,1,NULL,1),
(19,'War Heroes','war-heroes',NULL,1,1,NULL,1,'2019-10-27 19:11:50','2019-11-02 12:54:09',NULL,1,NULL,NULL),
(20,'Munshiganj War Heroes','munshiganj-war-heroes',19,2,1,NULL,1,'2019-10-27 19:12:10','2019-10-27 19:12:10',NULL,1,NULL,NULL),
(21,'Faridpur War Heroes','faridpur-war-heroes',19,2,1,NULL,1,'2019-10-27 19:12:29','2019-10-27 19:12:29',NULL,1,NULL,NULL),
(22,'Madaripur War Heroes','madaripur-war-heroes',19,2,1,NULL,1,'2019-10-27 19:12:48','2019-10-27 19:12:48',NULL,1,NULL,NULL),
(23,'Comilla War Heroes','comilla-war-heroes-1',19,2,1,NULL,1,'2019-10-30 17:21:47','2019-10-30 17:23:27','2019-10-30 18:54:22',1,NULL,1),
(24,'Achievements','achievements',NULL,1,1,NULL,1,'2019-11-20 16:04:05','2019-11-20 16:06:31',NULL,1,NULL,NULL);

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` text CHARACTER SET utf8,
  `slug` varchar(221) CHARACTER SET utf8 DEFAULT NULL,
  `featured_image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_category_id` int(11) DEFAULT NULL,
  `post_sub_category_id` int(11) DEFAULT NULL,
  `content` longtext CHARACTER SET utf8,
  `content_type` tinyint(2) DEFAULT '1' COMMENT '1=html 2=file/pdf',
  `order` tinyint(2) DEFAULT '0',
  `template_id` int(11) DEFAULT NULL,
  `visibility` tinyint(2) DEFAULT '1' COMMENT '0=Public,1=PassProtected,2=Private',
  `visibility_pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(2) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`subtitle`,`slug`,`featured_image`,`post_category_id`,`post_sub_category_id`,`content`,`content_type`,`order`,`template_id`,`visibility`,`visibility_pass`,`publish_datetime`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(39,'9th Infantry Division (Bangladesh)',NULL,'9th-infantry-division-(bangladesh)','/uploads/images/1572677450_1_1.jpeg',17,NULL,'<p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(34, 34, 34); font-family: sans-serif;\">The&nbsp;<span style=\"font-weight: 700;\">9th Infantry Division</span>&nbsp;(\"The Lightning Division\") is a formation of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bangladesh_Army\" title=\"Bangladesh Army\" style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(11, 0, 128);\">Bangladesh Army</a>, located at&nbsp;<a href=\"https://en.wikipedia.org/wiki/Savar_Upazila\" title=\"Savar Upazila\" style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(11, 0, 128);\">Savar</a>. It is the first infantry division of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bangladesh_Army\" title=\"Bangladesh Army\" style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(11, 0, 128);\">Bangladesh Army</a>&nbsp;that was raised post-<a href=\"https://en.wikipedia.org/wiki/Independence_of_Bangladesh\" class=\"mw-redirect\" title=\"Independence of Bangladesh\" style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(11, 0, 128);\">Independence</a>.<p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(34, 34, 34); font-family: sans-serif;\">The division is considered the most strategic and important formation of the Bangladesh Army as it is entrusted with the of security of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dhaka\" title=\"Dhaka\" style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(11, 0, 128);\">Dhaka</a>, the capital of Bangladesh.</p></p>\n',1,1,0,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 12:50:50',NULL,'2019-11-20 12:10:08',NULL,NULL),
(40,'East Bengal Regiment',NULL,'east-bengal-regiment','/uploads/images/1572677474_1_4.jpeg',17,NULL,'<p>East Bengal Regiment. Content goes here.<br></p>\n',1,1,0,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 12:51:14',NULL,'2019-11-02 12:51:14',NULL,NULL),
(41,'Abul Kalam','Brigadier General','abul-kalam','/uploads/images/1572677536_1_avatar.jpg',19,21,'<p>Content Goes Here</p>\n',1,1,1,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 12:52:16',NULL,'2019-11-02 12:52:16',NULL,NULL),
(42,'Abul kalam','Brigadier General','abul-kalam-1','/uploads/images/1572677571_1_avatar.jpg',19,20,'<p>Content goes here<br></p>\n',1,1,1,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 12:52:51',NULL,'2019-11-02 12:52:51',NULL,NULL),
(43,'Abul kalam','Brigadier General','abul-kalam-1','/uploads/images/1572677649_1_avatar.jpg',19,22,'<p>Brigadier General<br></p>\n',1,1,1,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 12:54:09',NULL,'2019-11-02 12:54:09',NULL,NULL),
(44,'27 Riverine Engineers',NULL,'27-riverine-engineers','/uploads/images/1572677673_1_3.jpeg',17,NULL,'<p>27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;27 Riverine Engineers&nbsp;<br></p>\n',1,1,0,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 12:54:33',NULL,'2019-11-02 12:54:33',NULL,NULL),
(45,'Dipto 19 Headquarter',NULL,'dipto-19-headquarter','/uploads/images/1572677699_1_Archive13.jpg',17,NULL,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Dipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 HeadquarterDipto 19 Headquarter<br></p></body></html>\n',1,1,0,2,'1234','2019-11-02 00:00:00',1,1,'2019-11-02 12:54:59',1,'2019-11-04 16:27:27',NULL,NULL),
(46,'28 East Bangle Regiment',NULL,'28-east-bangle-regiment','/uploads/images/1572677721_1_Archive8.jpg',17,NULL,'<p>28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment28 East Bangle Regiment<br></p>\n',1,1,0,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 12:55:21',NULL,'2019-11-02 12:55:21',NULL,NULL),
(47,'Results of preliminary medical and viva-voce of 53rd BMA Special Course - (Engineers/Signals/EME/AEC) and 46th DSSC (RV&FC).',NULL,'results-of-preliminary-medical-and-viva-voce-of-53rd-bma-special-course---(engineers/signals/eme/aec)-and-46th-dssc-(rv&fc).',NULL,9,11,'/uploads/files/1572677806_1_119_Defence_English.pdf',2,1,0,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 12:56:46',NULL,'2019-11-02 12:56:46',NULL,NULL),
(48,'Written Examination Result of 39th DSSC (AFNS)',NULL,'written-examination-result-of-39th-dssc-(afns)',NULL,9,11,'<p><img src=\"https://joinbangladesharmy.army.mil.bd/Content/UploadMedia/NewsAndUpdate/Result_Written_Exam.jpg\" alt=\"Written Examination Result of 39th DSSC (AFNS)\" style=\"border-style: none; margin: 0px; padding: 0px; height: auto; max-width: 100%; color: rgb(112, 112, 112); font-family: Dosis, sans-serif; font-size: 16px;\"><br></p>\n',1,1,0,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 12:57:15',NULL,'2019-11-02 12:57:15',NULL,NULL),
(49,'New Officer Recruitment : Circular for 53rd BMA Special Course and 46th DSSC (RV&FC)',NULL,'new-officer-recruitment-:-circular-for-53rd-bma-special-course-and-46th-dssc-(rv&fc)',NULL,9,11,'/uploads/files/1572677934_1_join-bangladesh-army-as-warrant-officer-education-jco-in-army-education-corpsbr.pdf',2,1,0,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 12:58:54',NULL,'2019-11-02 12:58:54',NULL,NULL),
(50,'Supply and Installation of 7xlift including ancillary works for CMH at Sheikh Hasina Cantonment Barishal',NULL,'supply-and-installation-of-7xlift-including-ancillary-works-for-cmh-at-sheikh-hasina-cantonment-barishal',NULL,16,NULL,'<p>Supply and Installation of 7xlift including ancillary works for CMH at Sheikh Hasina Cantonment Barishal<br></p>\n',1,1,0,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 13:01:57',NULL,'2019-11-02 13:01:57',NULL,NULL),
(51,'PROFESSIONAL NOVELTY- GENERAL AZIZ AHMED, BSP, BGBM, PBGM, BGBMS, PSC, G',NULL,'professional-novelty--general-aziz-ahmed,-bsp,-bgbm,-pbgm,-bgbms,-psc,-g',NULL,16,NULL,'<p>PROFESSIONAL NOVELTY- GENERAL AZIZ AHMED, BSP, BGBM, PBGM, BGBMS, PSC, G<br></p>\n',1,1,0,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 13:02:23',NULL,'2019-11-02 13:02:23',NULL,NULL),
(52,'Bangladesh Army Journal 64th Issue',NULL,'bangladesh-army-journal-64th-issue',NULL,15,NULL,'<p>Bangladesh Army Journal 64th Issue<br></p>\n',1,1,0,0,NULL,'2019-11-02 00:00:00',1,1,'2019-11-02 13:02:45',NULL,'2019-11-02 13:02:45',NULL,NULL),
(53,'Password Protected Post Check',NULL,'password-protected-post-check',NULL,2,NULL,'/uploads/files/1572849470_1_supply-and-installation-of-7xlift-including-ancillary-works-for-cmh-at-sheikh-hasina-cantonment-ba.pdf',2,1,0,1,'1234','2019-11-03 00:00:00',1,1,'2019-11-03 18:24:27',1,'2019-11-04 12:37:50',NULL,NULL),
(54,'Nation Building Activities and In Aid of Civil Power',NULL,'nation-building-activities-and-in-aid-of-civil-power','/uploads/images/1574244811_1_1000px-thumbnail.jpg',24,NULL,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Bangladesh Army has made commendable contributions in number of nation building activities assigned by government and could earn trust and confidence of common mass. It includes preparation of voter list with picture and National ID cards, Machine Readable Passport, construction of roads, flyover, underpass etc. So far, Bangladesh Army carried out good number of internal security operations in aid to the civil administration to bring back normalcy in life. Besides, in the wake of any disaster like flood, cyclone, earth-quake, building collapse and accidental fire incidents etc, Bangladesh Army provides the quickest support to the affected people.<br></p></body></html>\n',1,1,0,0,NULL,'2019-11-20 00:00:00',1,1,'2019-11-20 16:05:39',1,'2019-11-20 16:13:31',NULL,NULL),
(55,'Chittagong Hill Tracts Conflict',NULL,'chittagong-hill-tracts-conflict',NULL,24,NULL,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>At the outbreak of the insurgency in CHT, the Government of Bangladesh deployed the army to fight CIO. In the process of fighting, many officers and men sacrificed their valuable lives for their utmost dedication and patriotism which led to exemplary counter insurgency conflict termination in South Asia. Due to remarkable contribution of Bangladesh Army in the field of maintenance of security and socio-economic development of CHT, long conflict of more than two decade ended with the signing of CHT Peace Accord in 1997 between the government and the Parbatya Chattagram Jana Sanghati Samiti (PCJSS). At present army is performing the role of post-CIO in order to support government machinery to perform its normal activities.</p><p><br></p></body></html>\n',1,1,0,0,NULL,'2019-11-20 00:00:00',1,1,'2019-11-20 16:06:08',NULL,'2019-11-20 16:06:08',NULL,NULL),
(56,'Contribution to UN Peacekeeping Operations',NULL,'contribution-to-un-peacekeeping-operations','/uploads/images/1574244929_1_courtesy-3-1543995653226.jpg',24,NULL,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>The Bangladesh is actively involved in a United Nations Peace Support Operations under Blue Helmets since 1988. By this time Bangladesh Army has completed 50 missions in 40 countries. At present 7,085 peacekeepers from Bangladesh Army are deployed in 10 Missions of 10 different countries. Besides establishing world peace, our peacekeepers are earning huge amount of foreign remittance that contributes towards maintaining and increasing the growth rate of our National economy. In search of world peace, our peacekeepers dive deep in fathomless darkness; and they sacrifice their valuable lives. Till now 124 Bangladeshi peacekeepers have embraced martyrdom and many of our peacekeepers were injured.</p><div><br></div></body></html>\n',1,1,0,0,NULL,'2019-11-20 00:00:00',1,1,'2019-11-20 16:06:31',1,'2019-11-20 16:15:29',NULL,NULL),
(57,'test',NULL,'test',NULL,2,13,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><img data-filename=\"website_logo.png\" style=\"width: 160px;\" src=\"http://127.0.0.1:8000/uploads/post/5deb9217b1ef7.png\"><br></p></body></html>\n',1,1,0,0,NULL,'2019-12-07 00:00:00',1,1,'2019-12-07 17:50:47',NULL,'2019-12-07 17:50:47',NULL,NULL);

/*Table structure for table `profiles` */

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `profiles` */

insert  into `profiles`(`id`,`user_id`,`address`,`gender`,`image`,`phone`,`dob`,`city`,`country`,`created_at`,`updated_at`,`deleted_at`) values 
(6,1,NULL,'Male','/uploads/profile/1572509191_1_brigade_major.jpg',NULL,'2019-10-23 00:00:00',NULL,NULL,'2019-10-31 12:59:15','2019-10-31 14:12:32',NULL),
(7,2,NULL,NULL,'/uploads/profile/1572509705_2_commander.jpg',NULL,'2019-10-31 00:00:00',NULL,NULL,'2019-10-31 12:59:18','2019-10-31 14:15:26',NULL),
(8,3,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-11-04 12:27:42','2019-11-04 12:27:42',NULL),
(9,4,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-11-04 12:31:27','2019-11-04 12:31:27',NULL),
(10,5,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-11-04 18:57:46','2019-11-04 18:57:46',NULL),
(11,6,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-11-04 18:58:33','2019-11-04 18:58:33',NULL),
(12,7,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-11-04 18:59:10','2019-11-04 18:59:10',NULL),
(13,8,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-11-04 18:59:50','2019-11-04 18:59:50',NULL),
(14,9,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-11-04 19:00:19','2019-11-04 19:00:19',NULL),
(15,10,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-12-04 16:58:57','2019-12-04 16:58:57',NULL),
(16,11,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-12-05 16:49:27','2019-12-05 16:49:27',NULL),
(17,13,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-12-07 12:49:40','2019-12-07 12:49:40',NULL),
(18,14,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-12-07 12:52:32','2019-12-07 12:52:32',NULL),
(19,15,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-12-07 13:28:24','2019-12-07 13:28:24',NULL),
(20,16,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-12-07 15:16:07','2019-12-07 15:16:07',NULL);

/*Table structure for table `quotes` */

DROP TABLE IF EXISTS `quotes`;

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quote` varchar(500) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `quotes` */

insert  into `quotes`(`id`,`quote`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'পরিষ্কার থাকবো, পরিষ্কার রাখবো ',1,NULL,'2019-11-20 14:26:12',NULL,NULL,NULL,NULL),
(2,'A cavalryman\'s horse should be smarter than he is. But the horse must never be allowed to know this.',1,1,'2019-11-20 14:44:52',NULL,'2019-11-20 14:44:52',NULL,NULL),
(3,'You have no respect for excessive authority or obsolete traditions. You\'re dangerous and depraved, and you ought to be taken outside and shot!',1,1,'2019-11-20 14:55:35',NULL,'2019-11-20 14:55:35',NULL,NULL),
(4,'The only easy day was yesterday.',1,1,'2019-11-20 14:58:00',NULL,'2019-11-20 14:58:00',NULL,NULL),
(5,'\"পরিষ্কার থাকবো, পরিষ্কার রাখবো\"',1,1,'2019-11-20 15:03:19',NULL,'2019-11-20 15:03:19',NULL,NULL);

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values 
(1,1),
(2,1),
(3,1),
(4,1),
(5,1),
(6,1),
(7,1),
(8,1),
(9,1),
(10,1),
(11,1),
(12,1),
(13,1),
(14,1),
(15,1),
(16,1),
(17,1),
(18,1),
(19,1),
(20,1),
(21,1),
(22,1),
(23,1),
(24,1),
(25,1),
(26,1),
(27,1),
(28,1),
(29,1),
(30,1),
(31,1),
(32,1),
(33,1),
(34,1),
(35,1),
(36,1),
(37,1),
(38,1),
(39,1),
(40,1),
(41,1),
(42,1),
(43,1),
(44,1),
(45,1),
(46,1),
(47,1),
(48,1),
(49,1),
(50,1),
(51,1),
(52,1),
(53,1),
(54,1),
(55,1),
(56,1),
(57,1),
(58,1),
(59,1),
(60,1),
(61,1),
(62,1),
(63,1),
(64,1),
(65,1),
(66,1),
(67,1),
(68,1),
(69,1),
(70,1),
(71,1),
(72,1),
(73,1),
(74,1),
(75,1),
(76,1),
(77,1),
(78,1),
(79,1),
(61,2),
(62,2),
(63,2),
(64,2),
(65,2),
(66,2),
(67,2),
(68,2),
(69,2),
(70,2),
(71,2),
(72,2),
(73,2),
(74,2),
(75,2),
(76,2),
(77,2),
(79,2),
(68,3),
(70,3),
(55,4),
(56,4),
(1,5),
(2,5),
(3,5),
(4,5),
(5,5),
(6,5),
(7,5),
(8,5),
(9,5),
(10,5),
(11,5),
(12,5),
(13,5),
(14,5),
(15,5),
(16,5),
(17,5),
(18,5),
(19,5),
(20,5),
(21,5),
(22,5),
(23,5),
(24,5),
(25,5),
(26,5),
(27,5),
(28,5),
(29,5),
(30,5),
(31,5),
(32,5),
(33,5),
(34,5),
(35,5),
(36,5),
(37,5),
(38,5),
(39,5),
(40,5),
(41,5),
(42,5),
(43,5),
(44,5),
(45,5),
(46,5),
(47,5),
(48,5),
(49,5),
(50,5),
(51,5),
(52,5),
(53,5),
(54,5),
(55,5),
(56,5),
(57,5),
(58,5),
(59,5),
(60,5),
(61,5),
(62,5),
(63,5),
(64,5),
(65,5),
(66,5),
(67,5),
(68,5),
(69,5),
(70,5),
(71,5),
(72,5),
(73,5),
(74,5),
(75,5),
(76,5),
(77,5),
(78,5),
(79,5),
(51,6),
(52,6),
(53,6),
(54,6),
(55,6),
(56,6),
(57,6),
(58,6),
(59,6),
(60,6),
(51,7),
(52,7),
(53,7),
(54,7),
(55,7),
(56,7),
(57,7),
(58,7),
(59,7),
(60,7),
(51,8),
(52,8),
(53,8),
(54,8),
(55,8),
(56,8),
(57,8),
(58,8),
(59,8),
(60,8),
(51,9),
(52,9),
(53,9),
(54,9),
(55,9),
(56,9),
(57,9),
(58,9),
(59,9),
(60,9);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'Admin','web','2019-12-07 11:43:52','2019-12-07 11:43:52'),
(2,'Mess Manager','web','2019-12-07 11:53:50','2019-12-07 11:53:50'),
(3,'Mess Member','web','2019-12-07 12:00:58','2019-12-07 12:00:58'),
(4,'Branch Clark','web','2019-12-07 13:12:40','2019-12-07 13:12:40'),
(5,'Commander','web','2019-12-07 13:13:17','2019-12-07 13:13:17'),
(6,'GSO-3 Ops','web','2019-12-07 13:20:11','2019-12-07 13:20:11'),
(7,'GSO-3 Edn','web','2019-12-07 13:20:27','2019-12-07 13:20:27'),
(8,'BM','web','2019-12-07 13:21:34','2019-12-07 13:21:34'),
(9,'DQ','web','2019-12-07 13:21:45','2019-12-07 13:21:45');

/*Table structure for table `sliders` */

DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `image` varchar(221) NOT NULL,
  `caption` varchar(221) DEFAULT NULL,
  `position` tinyint(2) DEFAULT NULL COMMENT '0=top, 1=middle',
  `order` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1' COMMENT '0=inactive 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `sliders` */

insert  into `sliders`(`id`,`user_id`,`image`,`caption`,`position`,`order`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(10,1,'/uploads/images/1572241093_1_banner1.jpg',NULL,0,1,1,'2019-10-28 11:28:41','2019-10-28 11:39:18',NULL,1,1,NULL),
(11,1,'/uploads/images/1572240552_1_RisingDay2.JPG',NULL,0,1,1,'2019-10-28 11:29:12','2019-11-20 12:04:57',NULL,1,NULL,NULL),
(12,1,'/uploads/images/1572240568_1_4_picture-raising Day3.JPG',NULL,0,1,1,'2019-10-28 11:29:28','2019-10-28 11:29:28',NULL,1,NULL,NULL),
(13,1,'/uploads/images/1572240591_1_4_picture-raising Day4.JPG',NULL,0,1,1,'2019-10-28 11:29:51','2019-10-28 11:29:51',NULL,1,NULL,NULL),
(14,1,'/uploads/images/1572240616_1_banner5.jpg',NULL,0,1,1,'2019-10-28 11:30:16','2019-10-28 11:30:16',NULL,1,NULL,NULL),
(15,1,'/uploads/images/1572240646_1_banner6.jpg',NULL,0,1,1,'2019-10-28 11:30:46','2019-10-28 11:30:46',NULL,1,NULL,NULL),
(16,1,'/uploads/images/1572240671_1_banner7.jpg',NULL,0,1,1,'2019-10-28 11:31:11','2019-11-04 18:10:05',NULL,1,NULL,NULL),
(17,1,'/uploads/images/1572240702_1_banner8.jpg',NULL,0,1,1,'2019-10-28 11:31:42','2019-10-28 11:31:42',NULL,1,NULL,NULL),
(18,1,'/uploads/images/1572240723_1_banner9.jpg',NULL,0,1,1,'2019-10-28 11:32:03','2019-10-28 11:32:03',NULL,1,NULL,NULL),
(19,1,'/uploads/images/1572240735_1_banner10.jpg',NULL,0,1,1,'2019-10-28 11:32:15','2019-10-28 11:32:15',NULL,1,NULL,NULL),
(20,1,'/uploads/images/1572244539_1_spot1.jpg',NULL,1,1,1,'2019-10-28 12:35:39','2019-10-28 12:35:58',NULL,1,1,NULL),
(21,1,'/uploads/images/1572244576_1_spot2.jpg',NULL,1,1,1,'2019-10-28 12:36:16','2019-10-28 12:36:16',NULL,1,NULL,NULL),
(22,1,'/uploads/images/1572244636_1_spot3.jpg',NULL,1,1,1,'2019-10-28 12:37:16','2019-10-28 12:38:14',NULL,1,1,NULL),
(23,1,'/uploads/images/1572244649_1_spot4.jpg',NULL,1,1,1,'2019-10-28 12:37:29','2019-10-28 12:38:21',NULL,1,1,NULL),
(24,1,'/uploads/images/1572244672_1_spot6.jpg',NULL,1,1,1,'2019-10-28 12:37:52','2019-10-28 12:38:29',NULL,1,1,NULL);

/*Table structure for table `social_medias` */

DROP TABLE IF EXISTS `social_medias`;

CREATE TABLE `social_medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` tinyint(2) DEFAULT '0',
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `social_medias` */

insert  into `social_medias`(`id`,`name`,`link`,`icon`,`order`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(1,'Facebook','http://facebook.com','fa fa-facebook-f',1,1,'2019-10-02 14:22:27','2019-11-11 12:37:27',NULL,1,NULL,NULL),
(2,'Twitter','#','fa fa-twitter',3,1,'2019-10-02 14:24:12','2019-10-02 14:24:12',NULL,1,NULL,NULL),
(3,'Google','#','fa fa-google',2,1,'2019-10-02 14:24:41','2019-11-11 12:37:14',NULL,1,NULL,NULL),
(5,'LinkedIn','http://linkedin.com','fa fa-linkedin',5,1,'2019-10-02 14:25:23','2019-11-20 12:02:25',NULL,1,NULL,NULL),
(13,'Youtube','https://youtube.com','fa fa-youtube-play',4,1,'2019-10-23 10:22:11','2019-10-23 10:22:11',NULL,1,NULL,NULL);

/*Table structure for table `table_template` */

DROP TABLE IF EXISTS `table_template`;

CREATE TABLE `table_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `table_template` */

/*Table structure for table `todo_user` */

DROP TABLE IF EXISTS `todo_user`;

CREATE TABLE `todo_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `todo_user` */

/*Table structure for table `todos` */

DROP TABLE IF EXISTS `todos`;

CREATE TABLE `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(200) NOT NULL,
  `deadline` timestamp NULL DEFAULT NULL,
  `important` tinyint(1) DEFAULT NULL,
  `public` tinyint(1) DEFAULT NULL,
  `status` smallint(2) DEFAULT '0' COMMENT '0=Active, 1=Done',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `todos` */

insert  into `todos`(`id`,`task`,`deadline`,`important`,`public`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Test 001','2019-11-23 13:41:00',NULL,NULL,1,1,'2019-11-21 18:39:58',NULL,'2019-11-21 19:45:55',1,'2019-11-21 19:45:55'),
(2,'Test 002','2019-11-21 18:40:42',NULL,NULL,0,1,'2019-11-21 18:40:31',NULL,'2019-12-01 11:24:01',NULL,NULL),
(3,'Test 003','2019-11-21 18:40:42',NULL,NULL,0,1,'2019-11-21 18:40:42',NULL,'2019-11-23 11:42:25',1,'2019-11-23 11:42:25'),
(4,'Test 004','2019-11-21 18:40:42',NULL,NULL,0,1,'2019-11-21 18:40:53',NULL,'2019-11-23 13:07:48',1,'2019-11-23 13:07:48'),
(5,'New Test Task','2019-11-23 13:41:00',NULL,NULL,0,1,'2019-11-21 19:48:20',NULL,'2019-11-23 11:44:03',1,'2019-11-23 11:44:03'),
(6,'New Test Task','2019-11-23 13:41:00',NULL,NULL,0,1,'2019-11-21 19:49:59',NULL,'2019-11-23 11:44:00',1,'2019-11-23 11:44:00'),
(7,'Tomorrows Task','2019-11-23 13:45:00',NULL,NULL,0,1,'2019-11-23 10:05:15',NULL,'2019-11-23 13:07:44',1,'2019-11-23 13:07:44'),
(8,'Date Time test','2019-11-22 13:41:00',NULL,NULL,0,1,'2019-11-23 11:42:00',NULL,'2019-12-01 11:24:02',NULL,NULL),
(9,'Test 001','2019-11-23 14:00:00',NULL,NULL,0,1,'2019-11-23 11:44:53',NULL,'2019-11-23 13:48:36',NULL,NULL),
(10,'10 minutes ago','2019-11-23 12:30:00',NULL,NULL,0,1,'2019-11-23 13:08:19',NULL,'2019-12-01 11:24:03',NULL,NULL),
(11,'Test 004','2019-12-09 11:18:00',NULL,NULL,0,1,'2019-12-09 11:18:48',NULL,'2019-12-09 11:18:48',NULL,NULL),
(12,'Test 005','2019-12-09 11:18:00',NULL,NULL,0,1,'2019-12-09 11:18:55',NULL,'2019-12-09 11:18:55',NULL,NULL),
(13,'Test 006','2019-12-09 11:18:00',NULL,NULL,0,1,'2019-12-09 11:19:01',NULL,'2019-12-09 11:19:01',NULL,NULL),
(14,'Test 007','2019-12-09 11:18:00',NULL,NULL,0,1,'2019-12-09 11:19:08',NULL,'2019-12-09 11:19:08',NULL,NULL),
(15,'Important Task','2019-12-09 16:18:00',1,1,0,1,'2019-12-09 15:18:45',NULL,'2019-12-09 15:21:18',NULL,NULL);

/*Table structure for table `user_roles` */

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  `creator` tinyint(1) DEFAULT NULL,
  `reviewer` tinyint(1) DEFAULT NULL,
  `approver` tinyint(1) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `user_roles` */

insert  into `user_roles`(`id`,`name`,`short_name`,`creator`,`reviewer`,`approver`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Admin','admin',NULL,1,1,1,1,'2019-11-04 11:55:41',1,NULL,NULL,'2019-12-07 15:15:02'),
(2,'Commander',NULL,NULL,NULL,1,1,1,'2019-11-04 11:56:01',1,NULL,NULL,'2019-12-07 15:15:02'),
(3,'BM',NULL,NULL,1,1,1,1,'2019-11-04 11:57:03',1,NULL,NULL,'2019-12-07 15:15:02'),
(4,'DQ',NULL,NULL,1,1,1,1,'2019-11-04 11:56:53',1,NULL,NULL,'2019-12-07 15:15:02'),
(5,'GSO-3 Ops',NULL,NULL,1,NULL,1,1,'2019-11-04 11:57:13',1,NULL,NULL,'2019-12-07 15:15:02'),
(6,'GSO-3 Edn',NULL,NULL,1,NULL,1,1,'2019-11-04 11:57:15',1,NULL,NULL,'2019-12-07 15:15:02'),
(7,'Branch Clark',NULL,1,0,0,1,1,'2019-11-04 11:56:27',1,NULL,NULL,'2019-12-07 15:15:02'),
(8,'Mess Manager',NULL,NULL,NULL,NULL,1,NULL,'2019-12-04 16:57:56',NULL,NULL,NULL,'2019-12-07 15:15:02'),
(9,'Mess Member',NULL,NULL,NULL,NULL,1,NULL,'2019-12-04 16:57:56',NULL,NULL,NULL,'2019-12-07 15:15:02');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(100) DEFAULT NULL,
  `updated_by` int(100) DEFAULT NULL,
  `deleted_by` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`rank`,`role_id`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(1,'Admin','admin@app.com','0000-00-00 00:00:00','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','ZsafFchdkiIrf5GGPt6vpxfGAVE1jzpbids81Ek2ZOxkx6vl8uWBdv35nYhi',NULL,1,1,NULL,'2019-11-04 16:56:09',NULL,NULL,NULL,NULL),
(2,'Admin2','admin2@app.com',NULL,'$2y$10$xXFz/L1hpnZ60HQ5ZHbwX.lnSsHqeVPvKw2ioK0CsGrJ9NF5Ehwhy',NULL,NULL,1,1,'2019-10-31 12:27:47','2019-11-04 18:56:26','2019-12-07 12:59:18',1,NULL,3),
(3,'Md. Tuhin','clark@app.com',NULL,'$2y$10$oc.ga6qnUaNBH/i4OXjUtO4Dnpg7zaifoJsKcjTO.F1fmLm2byJ6K',NULL,NULL,7,1,'2019-11-04 12:27:42','2019-11-04 18:57:15',NULL,1,NULL,1),
(4,'BM','bm@app.com',NULL,'$2y$10$Todf0c.bOIzAKqzyyAMJ7ehEIVY1JqpARXHuaCQ5h7yCWKo8r9jpa',NULL,NULL,3,1,'2019-11-04 12:31:27','2019-11-04 12:31:27',NULL,1,NULL,NULL),
(5,'Branch Clark','bc@app.com',NULL,'$2y$10$uwWexNPw557giXR7Hx7Tu.S72fZfBxfgqYVtaJIVmII7gPk1X.zh2',NULL,NULL,7,1,'2019-11-04 18:57:46','2019-11-04 18:57:46',NULL,1,NULL,NULL),
(6,'DQ','dq@app.com',NULL,'$2y$10$N2G3ukVOWmR1.baeM58ZU.V.yKarDlPnVS1CC3WLKpL52Z9SnPqd6',NULL,NULL,4,1,'2019-11-04 18:58:33','2019-11-04 18:58:33',NULL,1,NULL,NULL),
(7,'GSO-3 Ops','gso_3_ops@app.com',NULL,'$2y$10$ptbFMt2Lyz34XmAvbcDMuemOYqTMQVkyisA3zKFBuLiWYkKOdfP4i',NULL,NULL,5,1,'2019-11-04 18:59:10','2019-11-04 18:59:10',NULL,1,NULL,NULL),
(8,'GSO-3 Edn','gso_3_edn@app.com',NULL,'$2y$10$wyTRWFqPiEU9DQgSrT5TpeuS0Be1qdKpB2ayPsiLnx8kc37.Y48Zm',NULL,NULL,6,1,'2019-11-04 18:59:50','2019-11-04 18:59:50',NULL,1,NULL,NULL),
(9,'Commander','commander@app.com',NULL,'$2y$10$Aig7Shpzcrk01IrZZM/5Hu3wf9CCxn6x3TIUBeh6FPGZKFgah79K.',NULL,'Commander',2,1,'2019-11-04 19:00:19','2019-12-07 15:05:49',NULL,1,1,NULL),
(10,'Mess Manager','mm@app.com',NULL,'$2y$10$IL9mcP5WfEoQUVeyZvYx6./BzS6I0ETSGCuParbAmDaK4iQGNFRrS',NULL,NULL,8,1,'2019-12-04 16:58:57','2019-12-04 16:58:57',NULL,1,NULL,NULL),
(11,'Imran Ahmed','messmember@app.com',NULL,'$2y$10$/Urjo0xIIfpTedq607hX7u/ORO7xbxc5wEMHtkb4wR1GJuDM.usIu',NULL,NULL,9,1,'2019-12-05 16:49:27','2019-12-05 16:49:27',NULL,1,NULL,NULL),
(14,'Md. Faisal Rahman','faisal@app.com',NULL,'$2y$10$cA2GvYxKiljqTFeOJSa4se03MyLH7piy2iR20/Al.CYZo2t7Gzvx6',NULL,NULL,8,1,'2019-12-07 12:52:32','2019-12-07 12:52:32',NULL,1,NULL,NULL),
(15,'Rakib ul karim','rakib@app.com',NULL,'$2y$10$LK..Wbx3ROnB10zfsiLIxu8Jq5zpL17wTs/TWVv8TWD9P1qBxntji',NULL,'N/A',NULL,1,'2019-12-07 13:28:24','2019-12-07 15:07:35',NULL,1,1,NULL),
(16,'Testadmin','testadmin@app.com',NULL,'$2y$10$XfOiP0YA2/uFyva3Il05quQSU8K0Rnm9ywKOGh08mqlKxvd03KWv.',NULL,'Admin',NULL,1,'2019-12-07 15:16:07','2019-12-07 15:45:09','2019-12-07 15:45:09',1,NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

/*Data for the table `users_acc_transaction` */

insert  into `users_acc_transaction`(`id`,`user_id`,`transaction_type`,`amount`,`transaction_date`,`reference`,`note`,`confimation`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,1,2,-85,'2019-12-09','ML-1','Meal Cost',1,1,1,'2019-12-09 19:31:22',NULL,'2019-12-09 19:31:22',NULL,NULL),
(2,1,2,-120,'2019-12-09','ML-2','Meal Cost',1,1,1,'2019-12-09 19:31:34',NULL,'2019-12-09 19:31:34',NULL,NULL),
(3,1,2,-40,'2019-12-09','ML-3','Meal Cost',1,1,1,'2019-12-09 19:32:12',NULL,'2019-12-09 19:32:12',NULL,NULL),
(4,1,2,-15,'2019-12-10','ML-4','Meal Cost',1,1,1,'2019-12-09 19:44:21',NULL,'2019-12-09 19:44:21',NULL,NULL),
(5,1,2,-40,'2019-12-10','ML-5','Meal Cost',1,1,1,'2019-12-09 19:44:36',NULL,'2019-12-09 19:44:36',NULL,NULL),
(6,1,2,-20,'2019-12-09','ML-6','Meal Cost',1,1,1,'2019-12-09 19:44:54',NULL,'2019-12-09 19:44:54',NULL,NULL),
(7,1,2,-50,'2019-12-09','ML-7','Meal Cost',1,1,1,'2019-12-09 19:45:40',NULL,'2019-12-09 19:45:40',NULL,NULL),
(8,1,2,-0,'2019-12-09','ML-8','Meal Cost',1,1,1,'2019-12-09 19:45:51',NULL,'2019-12-11 13:42:14',1,'2019-12-11 13:42:14'),
(9,1,2,-120,'2019-12-10','ML-9','Meal Cost',1,1,1,'2019-12-09 19:46:23',NULL,'2019-12-09 19:46:23',NULL,NULL),
(10,1,2,-35,'2019-12-10','ML-10','Meal Cost',1,1,1,'2019-12-09 19:46:45',NULL,'2019-12-09 19:46:45',NULL,NULL),
(11,1,2,-175,'2019-12-07','ML-11','Meal Cost',1,1,1,'2019-12-10 17:10:25',NULL,'2019-12-10 17:10:25',NULL,NULL),
(12,1,2,-120,'2019-12-07','ML-12','Meal Cost',1,1,1,'2019-12-10 17:19:11',NULL,'2019-12-10 17:19:11',NULL,NULL),
(13,1,2,-240,'2019-12-07','ML-13','Meal Cost',1,1,1,'2019-12-10 17:46:31',NULL,'2019-12-10 17:46:31',NULL,NULL),
(14,1,2,-105,'2019-12-10','ML-14','Meal Cost',1,1,1,'2019-12-10 18:46:03',NULL,'2019-12-11 13:01:29',NULL,NULL),
(15,1,2,-120,'2019-12-10','ML-15','Meal Cost',1,1,1,'2019-12-10 18:47:14',NULL,'2019-12-11 13:42:33',NULL,NULL),
(17,1,2,-25,'2019-12-11','ML-16','Meal Cost',1,1,1,'2019-12-11 12:26:59',NULL,'2019-12-11 12:26:59',NULL,NULL),
(21,1,2,-25,'2019-12-11','ML-21','Meal Cost',1,1,1,'2019-12-11 13:01:59',NULL,'2019-12-11 13:42:43',NULL,NULL),
(22,1,2,-75,'2019-12-10','ML-22','Meal Cost',1,1,1,'2019-12-11 13:12:48',NULL,'2019-12-11 13:12:48',NULL,NULL),
(32,1,2,-0,'2019-12-11','ML-23','Meal Cost',1,1,1,'2019-12-11 14:33:51',NULL,'2019-12-11 14:37:14',NULL,NULL),
(33,1,2,0,'2019-12-11','ML-23','Meal Cost',1,1,1,'2019-12-11 14:35:37',NULL,'2019-12-11 14:35:37',NULL,NULL),
(34,1,2,-20,'2019-12-11','ML-23','Meal Cost',1,1,1,'2019-12-11 14:36:52',NULL,'2019-12-11 14:36:52',NULL,NULL),
(35,1,2,0,'2019-12-11','ML-34','Meal Cost',1,1,1,'2019-12-11 15:14:31',NULL,'2019-12-11 15:14:31',NULL,NULL),
(36,3,2,-175,'2019-12-07','ML-34','Meal Cost',1,1,1,'2019-12-11 15:32:26',NULL,'2019-12-11 15:32:26',NULL,NULL);

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1,
  `caption` varchar(251) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL COMMENT '0=link, 1=video',
  `video` varchar(251) DEFAULT NULL,
  `slug` varchar(251) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `archived` tinyint(1) DEFAULT '0' COMMENT '0=not,1=archived',
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(11) unsigned DEFAULT NULL,
  `deleted_by` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `videos` */

insert  into `videos`(`id`,`title`,`caption`,`type`,`video`,`slug`,`order`,`archived`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(3,'Join BD Army','Join BD ArmyJoin BD ArmyJoin BD ArmyJoin BD ArmyJoin BD Army',1,'https://www.army.mil.bd/UserFile/VideoGallery/Bangladesh_Army__TVC__215sec__English0Join_Bangladesh_Army_TVC_English.mp4','Join-BD-Army',1,0,1,'2019-10-27 12:52:29','2019-10-29 11:16:32',NULL,1,NULL,NULL),
(4,'Bangladesh Army TV Commercial',NULL,1,'https://www.youtube.com/watch?v=3BJsF7pbXEY','Bangladesh-Army-TV-Commercial',1,0,1,'2019-10-29 10:59:34','2019-10-29 11:16:36',NULL,1,NULL,NULL),
(5,'Bangladesh Army Action In UN Mission',NULL,2,'/uploads/videos/1572326468_1_army shooting.mp4','Bangladesh-Army-Action-In-UN-Mission',1,0,0,'2019-10-29 11:21:08','2019-11-04 17:00:05',NULL,1,NULL,NULL);

/*Table structure for table `widget_data` */

DROP TABLE IF EXISTS `widget_data`;

CREATE TABLE `widget_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `widget_id` int(10) unsigned DEFAULT NULL,
  `model` varchar(221) CHARACTER SET latin1 DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `link_type` int(11) DEFAULT NULL COMMENT '1=model 2=custom',
  `link_title` varchar(200) DEFAULT NULL,
  `link` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `info_data` longtext,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

/*Data for the table `widget_data` */

insert  into `widget_data`(`id`,`widget_id`,`model`,`model_id`,`link_type`,`link_title`,`link`,`order`,`info_data`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(2,1,'Member',4,NULL,NULL,NULL,1,NULL,1,'2019-10-24 15:14:21','2019-10-24 15:14:21',NULL,1,NULL,NULL),
(4,2,'Member',6,NULL,NULL,NULL,1,NULL,1,'2019-10-24 16:13:09','2019-10-24 16:13:09',NULL,1,NULL,NULL),
(13,11,'Page',36,1,NULL,NULL,1,NULL,1,'2019-10-24 19:44:25','2019-10-24 19:44:25',NULL,1,NULL,NULL),
(26,15,'Member',8,NULL,NULL,NULL,1,NULL,1,'2019-10-28 15:38:50','2019-10-28 15:38:50',NULL,1,NULL,NULL),
(27,16,'Member',31,NULL,NULL,NULL,1,NULL,1,'2019-10-28 15:42:36','2019-10-28 15:42:36',NULL,1,NULL,NULL),
(28,17,'Member',32,NULL,NULL,NULL,1,NULL,1,'2019-10-28 15:43:26','2019-10-28 15:43:26',NULL,1,NULL,NULL),
(29,18,'Member',24,NULL,NULL,NULL,1,NULL,1,'2019-10-28 15:45:21','2019-10-28 15:45:21',NULL,1,NULL,NULL),
(30,19,'Member',25,NULL,NULL,NULL,1,NULL,1,'2019-10-28 15:45:42','2019-10-28 15:45:42',NULL,1,NULL,NULL),
(31,20,'Member',26,NULL,NULL,NULL,1,NULL,1,'2019-10-28 15:46:02','2019-10-28 15:46:02',NULL,1,NULL,NULL),
(34,21,'Member',27,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:02:46','2019-10-28 16:02:46',NULL,1,NULL,NULL),
(36,22,'Member',30,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:03:50','2019-10-28 16:03:50',NULL,1,NULL,NULL),
(37,28,'Member',14,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:14:51','2019-10-28 16:14:51',NULL,1,NULL,NULL),
(38,29,'Member',15,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:15:22','2019-10-28 16:15:22',NULL,1,NULL,NULL),
(40,30,'Member',16,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:16:25','2019-10-28 16:16:25',NULL,1,NULL,NULL),
(41,31,'Member',17,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:16:50','2019-10-28 16:16:50',NULL,1,NULL,NULL),
(42,32,'Member',30,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:24:25','2019-10-28 16:24:25',NULL,1,NULL,NULL),
(43,33,'Member',14,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:26:57','2019-10-28 16:26:57',NULL,1,NULL,NULL),
(44,34,'Member',15,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:27:22','2019-10-28 16:27:22',NULL,1,NULL,NULL),
(46,35,'Member',16,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:28:02','2019-10-28 16:28:02',NULL,1,NULL,NULL),
(48,36,'Member',29,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:28:44','2019-10-28 16:28:44',NULL,1,NULL,NULL),
(49,37,'Member',30,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:29:09','2019-10-28 16:29:09',NULL,1,NULL,NULL),
(50,38,'Member',9,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:33:16','2019-10-28 16:33:16',NULL,1,NULL,NULL),
(51,39,'Member',10,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:33:51','2019-10-28 16:33:51',NULL,1,NULL,NULL),
(52,40,'Member',11,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:34:12','2019-10-28 16:34:12',NULL,1,NULL,NULL),
(53,41,'Member',12,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:34:35','2019-10-28 16:34:35',NULL,1,NULL,NULL),
(54,42,'Member',30,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:35:06','2019-10-28 16:35:06',NULL,1,NULL,NULL),
(55,43,'Member',9,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:54:24','2019-10-28 16:54:24',NULL,1,NULL,NULL),
(57,44,'Member',10,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:55:47','2019-10-28 16:55:47',NULL,1,NULL,NULL),
(58,45,'Member',11,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:56:17','2019-10-28 16:56:17',NULL,1,NULL,NULL),
(59,46,'Member',12,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:56:48','2019-10-28 16:56:48',NULL,1,NULL,NULL),
(60,47,'Member',13,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:57:10','2019-10-28 16:57:10',NULL,1,NULL,NULL),
(61,48,'Member',9,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:59:07','2019-10-28 16:59:07',NULL,1,NULL,NULL),
(62,49,'Member',10,NULL,NULL,NULL,1,NULL,1,'2019-10-28 16:59:25','2019-10-28 16:59:25',NULL,1,NULL,NULL),
(64,50,'Member',11,NULL,NULL,NULL,1,NULL,1,'2019-10-28 17:00:09','2019-10-28 17:00:09',NULL,1,NULL,NULL),
(65,51,'CustomLink',NULL,3,'Armed Forces Division','http://www.afd.gov.bd/',1,NULL,1,'2019-10-28 17:02:06','2019-10-28 17:02:06',NULL,1,NULL,NULL),
(66,51,'CustomLink',NULL,3,'Join Bangladesh Army','http://joinbangladesharmy.army.mil.bd/',1,NULL,1,'2019-10-28 17:02:52','2019-10-28 17:02:52',NULL,1,NULL,NULL),
(67,51,'CustomLink',NULL,3,'Offrs Pay Link','http://offrspay.army.mil.bd/offrspay/',1,NULL,1,'2019-10-28 17:03:28','2019-10-28 17:03:28',NULL,1,NULL,NULL),
(68,51,'CustomLink',NULL,3,'ISPR','http://www.ispr.gov.bd/',1,NULL,1,'2019-10-28 17:04:58','2019-10-28 17:04:58',NULL,1,NULL,NULL),
(69,51,'CustomLink',NULL,3,'Swapnochura Website','https://swapnochura.army.mil.bd/Defaults.aspx',1,NULL,1,'2019-10-28 17:05:21','2019-10-28 17:05:21',NULL,1,NULL,NULL),
(70,51,'CustomLink',NULL,3,'Jolshiri Abason','http://www.jolshiriabashon.com/',1,NULL,1,'2019-10-28 17:05:40','2019-10-28 17:05:40',NULL,1,NULL,NULL),
(71,51,'CustomLink',NULL,3,'Army Golf Club','http://agc.com.bd/',1,NULL,1,'2019-10-28 17:06:02','2019-10-28 17:06:02',NULL,1,NULL,NULL),
(72,51,'CustomLink',NULL,3,'Cadet College','https://cadetcollege.army.mil.bd/#/',1,NULL,1,'2019-10-28 17:06:36','2019-10-28 17:06:36',NULL,1,NULL,NULL),
(73,51,'CustomLink',NULL,3,'Bangladesh Navy','http://www.navy.mil.bd/',1,NULL,1,'2019-10-28 17:06:57','2019-10-28 17:06:57',NULL,1,NULL,NULL),
(74,51,'CustomLink',NULL,3,'Inter Services Selection Board','https://www.issb-bd.org/',1,NULL,1,'2019-10-28 17:06:57','2019-10-28 17:06:57',NULL,1,NULL,NULL),
(75,51,'CustomLink',NULL,3,'Bangladesh Air Force','https://www.baf.mil.bd/',1,NULL,1,'2019-10-28 17:06:57','2019-10-28 17:06:57',NULL,1,NULL,NULL),
(76,51,'CustomLink',NULL,3,'Ministry Of Defense','https://mod.gov.bd/',1,NULL,1,'2019-10-28 17:06:57','2019-10-28 17:06:57',NULL,1,NULL,NULL),
(77,51,'CustomLink',NULL,3,'Directorate General Defense Purchase (DGDP)','http://dgdp.gov.bd/dgdp/index.php',1,NULL,1,'2019-10-28 17:06:57','2019-10-28 17:06:57',NULL,1,NULL,NULL),
(79,51,'CustomLink',NULL,3,'Sena Kalyan Sangstha (SKS)','http://www.senakalyan.org/',1,NULL,1,'2019-10-28 17:06:57','2019-10-28 17:06:57',NULL,1,NULL,NULL),
(80,11,'Page',37,1,NULL,NULL,1,NULL,1,'2019-10-28 17:27:10','2019-10-28 17:27:10',NULL,1,NULL,NULL),
(81,11,'Page',38,1,NULL,NULL,1,NULL,1,'2019-10-28 17:27:29','2019-10-28 17:27:29',NULL,1,NULL,NULL),
(82,11,'Page',39,1,NULL,NULL,1,NULL,1,'2019-10-28 17:27:46','2019-10-28 17:27:46',NULL,1,NULL,NULL),
(83,52,'CustomLink',NULL,3,'Bangladesh Army','https://www.army.mil.bd/',1,NULL,1,'2019-10-28 17:35:18','2019-10-28 17:35:18',NULL,1,NULL,NULL),
(84,53,'Informative',NULL,NULL,NULL,NULL,1,'<p><br></p>',1,'2019-10-28 17:39:22','2019-12-11 17:10:00','2019-12-11 17:10:00',1,NULL,1),
(85,54,'CustomLink',NULL,3,'Dashboard','http://www.mmcr.gov.bd/admin',1,NULL,1,'2019-10-28 18:39:54','2019-10-28 18:39:54',NULL,1,NULL,NULL),
(86,7,'CustomLink',NULL,3,'English to Bengali','https://accessibledictionary.gov.bd/english-to-bengali/',1,NULL,1,'2019-10-28 18:47:46','2019-10-28 18:47:46',NULL,1,NULL,NULL),
(87,7,'CustomLink',NULL,3,'Bengali to English','https://accessibledictionary.gov.bd/bengali-to-english/',1,NULL,1,'2019-10-28 18:48:31','2019-10-28 18:48:31',NULL,1,NULL,NULL),
(88,7,'CustomLink',NULL,3,'Bengali to Bengali','https://accessibledictionary.gov.bd/bengali-to-bengali/',1,NULL,1,'2019-10-28 18:49:12','2019-10-28 18:49:12',NULL,1,NULL,NULL),
(89,7,'CustomLink',NULL,3,'English to English','https://accessibledictionary.gov.bd/english-to-english/',1,NULL,1,'2019-10-28 18:49:43','2019-10-28 18:49:43',NULL,1,NULL,NULL);

/*Table structure for table `widgets` */

DROP TABLE IF EXISTS `widgets`;

CREATE TABLE `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(221) CHARACTER SET latin1 DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1=member_info, 2=multiple_links, 3=informative',
  `popup` tinyint(1) DEFAULT NULL,
  `short_desc` tinyint(1) DEFAULT NULL COMMENT '0=short_description, 1=no_description',
  `parent_page_id` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

/*Data for the table `widgets` */

insert  into `widgets`(`id`,`title`,`type`,`popup`,`short_desc`,`parent_page_id`,`order`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Commander',1,1,1,'42',1,1,1,'2019-10-24 11:50:53',1,'2019-10-27 16:17:12',NULL,NULL),
(5,'Web Links',2,0,0,'42',1,1,1,'2019-10-24 12:46:17',NULL,'2019-10-24 12:46:17',NULL,NULL),
(7,'Accessible Dictionary',2,0,0,'0',1,1,1,'2019-10-24 13:03:32',NULL,'2019-10-24 13:03:32',NULL,NULL),
(11,'Policies',2,0,0,'0',1,1,1,'2019-10-24 19:43:46',1,'2019-10-28 14:27:04',NULL,NULL),
(15,'Brigade Major (BM)',1,1,0,'42',1,1,1,'2019-10-28 14:33:24',1,'2019-11-11 11:41:33',NULL,NULL),
(16,'DAA&QMG',1,1,0,'42',1,1,1,'2019-10-28 14:33:55',NULL,'2019-10-28 14:33:55',NULL,NULL),
(17,'GSO (3) Edn',1,0,0,'42',1,1,1,'2019-10-28 14:34:23',NULL,'2019-10-28 14:34:23',NULL,NULL),
(18,'Commanding Officer (CO)',1,1,1,'14',1,1,1,'2019-10-28 14:35:05',1,'2019-10-28 14:35:16',NULL,NULL),
(19,'Second in Command (2IC)',1,1,0,'14',1,1,1,'2019-10-28 14:35:41',NULL,'2019-10-28 14:35:41',NULL,NULL),
(20,'Adjutent (Adjt)',1,0,0,'14',1,1,1,'2019-10-28 14:36:00',NULL,'2019-10-28 14:36:00',NULL,NULL),
(21,'Quarter Master (QM)',1,0,0,'14',1,1,1,'2019-10-28 14:36:15',NULL,'2019-10-28 14:36:15',NULL,NULL),
(22,'SM',1,0,0,'14',1,1,1,'2019-10-28 14:36:33',NULL,'2019-10-28 14:36:33',NULL,NULL),
(23,'Commanding Officer (CO)',1,1,1,'15',1,1,1,'2019-10-28 16:04:39',NULL,'2019-10-28 16:04:39',NULL,NULL),
(24,'Second in Command (2IC)',1,1,0,'15',1,1,1,'2019-10-28 16:05:10',NULL,'2019-10-28 16:05:10',NULL,NULL),
(25,'Adjutent (Adjt)',1,1,0,'15',1,1,1,'2019-10-28 16:05:32',NULL,'2019-10-28 16:05:32',NULL,NULL),
(26,'Quarter Master (QM)',1,1,0,'15',1,1,1,'2019-10-28 16:05:52',NULL,'2019-10-28 16:05:52',NULL,NULL),
(27,'SM',1,1,0,'15',1,1,1,'2019-10-28 16:06:17',NULL,'2019-10-28 16:06:17',NULL,NULL),
(28,'Commanding Officer (CO)',1,1,1,'16',1,1,1,'2019-10-28 16:06:49',NULL,'2019-10-28 16:06:49',NULL,NULL),
(29,'Second in Command (2IC)',1,1,0,'16',1,1,1,'2019-10-28 16:07:06',NULL,'2019-10-28 16:07:06',NULL,NULL),
(30,'Adjutent (Adjt)',1,1,0,'16',1,1,1,'2019-10-28 16:07:19',NULL,'2019-10-28 16:07:19',NULL,NULL),
(31,'Quarter Master (QM)',1,1,0,'16',1,1,1,'2019-10-28 16:07:33',NULL,'2019-10-28 16:07:33',NULL,NULL),
(32,'SM',1,1,0,'15,16',1,1,1,'2019-10-28 16:17:28',1,'2019-11-20 11:24:54',NULL,NULL),
(33,'Commanding Officer (CO)',1,1,1,'17',1,1,1,'2019-10-28 16:25:08',NULL,'2019-10-28 16:25:08',NULL,NULL),
(34,'Second in Command (2IC)',1,1,0,'17',1,1,1,'2019-10-28 16:25:24',NULL,'2019-10-28 16:25:24',NULL,NULL),
(35,'Adjutent (Adjt)',1,1,0,'17',1,1,1,'2019-10-28 16:25:47',NULL,'2019-10-28 16:25:47',NULL,NULL),
(36,'Quarter Master (QM)',1,0,0,'17',1,1,1,'2019-10-28 16:26:01',NULL,'2019-10-28 16:26:01',NULL,NULL),
(37,'SM',1,0,0,'17',1,1,1,'2019-10-28 16:26:15',NULL,'2019-10-28 16:26:15',NULL,NULL),
(38,'Officer Commanding (OC)',1,1,0,'18',1,1,1,'2019-10-28 16:30:01',NULL,'2019-10-28 16:30:01',NULL,NULL),
(39,'Surgical Specialist',1,1,0,'18',1,1,1,'2019-10-28 16:31:48',NULL,'2019-10-28 16:31:48',NULL,NULL),
(40,'Medicine Specialist',1,0,0,'18',1,1,1,'2019-10-28 16:32:02',NULL,'2019-10-28 16:32:02',NULL,NULL),
(41,'Gynocologist',1,0,0,'18',1,1,1,'2019-10-28 16:32:16',NULL,'2019-10-28 16:32:16',NULL,NULL),
(42,'Medical Officer (MO)',1,0,0,'18',1,1,1,'2019-10-28 16:32:37',NULL,'2019-10-28 16:32:37',NULL,NULL),
(43,'Officer Commanding (OC)',1,1,0,'19',1,1,1,'2019-10-28 16:52:51',NULL,'2019-10-28 16:52:51',NULL,NULL),
(44,'Surgical Specialist',1,1,0,'19',1,1,1,'2019-10-28 16:53:05',NULL,'2019-10-28 16:53:05',NULL,NULL),
(45,'Medicine Specialist',1,0,0,'19',1,1,1,'2019-10-28 16:53:21',NULL,'2019-10-28 16:53:21',NULL,NULL),
(46,'Gynocologist',1,0,0,'19',1,1,1,'2019-10-28 16:53:34',NULL,'2019-10-28 16:53:34',NULL,NULL),
(47,'Medical Officer (MO)',1,0,0,'19',1,1,1,'2019-10-28 16:53:48',NULL,'2019-10-28 16:53:48',NULL,NULL),
(48,'Officer Commanding (OC)',1,1,1,'20',1,1,1,'2019-10-28 16:58:09',NULL,'2019-10-28 16:58:09',NULL,NULL),
(49,'Surgical Specialist',1,1,0,'20',1,1,1,'2019-10-28 16:58:29',NULL,'2019-10-28 16:58:29',NULL,NULL),
(50,'Medicine Specialist',1,1,0,'20',1,1,1,'2019-10-28 16:58:46',NULL,'2019-10-28 16:58:46',NULL,NULL),
(51,'Useful Links',2,0,0,'0',2,1,1,'2019-10-28 17:01:18',1,'2019-10-28 17:37:45',NULL,NULL),
(52,'Bangladesh Army',2,0,0,'0',1,1,1,'2019-10-28 17:34:54',NULL,'2019-10-28 17:34:54',NULL,NULL),
(53,'Hotline',3,0,0,'0',1,1,1,'2019-10-28 17:38:58',NULL,'2019-11-20 11:24:53',NULL,NULL),
(54,'Dashboard',2,0,0,'0',0,1,1,'2019-10-28 18:39:24',1,'2019-11-11 14:41:51',NULL,NULL);

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

/*Table structure for table `user_meal_type_vw` */

DROP TABLE IF EXISTS `user_meal_type_vw`;

/*!50001 DROP VIEW IF EXISTS `user_meal_type_vw` */;
/*!50001 DROP TABLE IF EXISTS `user_meal_type_vw` */;

/*!50001 CREATE TABLE  `user_meal_type_vw`(
 `name` varchar(191) ,
 `meal_date` date ,
 `user_id` bigint(20) unsigned ,
 `meal_type` varchar(50) ,
 `menu_count` decimal(32,0) ,
 `total_price` double ,
 `total_paid` double 
)*/;

/*View structure for view user_account_vw */

/*!50001 DROP TABLE IF EXISTS `user_account_vw` */;
/*!50001 DROP VIEW IF EXISTS `user_account_vw` */;

/*!50001 CREATE VIEW `user_account_vw` AS select `ua`.`user_id` AS `user_id`,`u`.`name` AS `user_name`,sum(if((`ua`.`confimation` = 1),`ua`.`amount`,0)) AS `acc_balance`,sum(if(((`ua`.`transaction_type` = 1) and (`ua`.`confimation` = 1)),`ua`.`amount`,0)) AS `in_amount`,sum(if(((`ua`.`transaction_type` = 2) and (`ua`.`confimation` = 1)),`ua`.`amount`,0)) AS `out_amount` from (`users_acc_transaction` `ua` join `users` `u`) where (`u`.`id` = `ua`.`user_id`) group by `ua`.`user_id`,`u`.`name` */;

/*View structure for view user_meal_type_vw */

/*!50001 DROP TABLE IF EXISTS `user_meal_type_vw` */;
/*!50001 DROP VIEW IF EXISTS `user_meal_type_vw` */;

/*!50001 CREATE VIEW `user_meal_type_vw` AS select `u`.`name` AS `name`,`mm`.`meal_date` AS `meal_date`,`u`.`id` AS `user_id`,`mm`.`meal_type` AS `meal_type`,sum(`mm`.`total_menus`) AS `menu_count`,sum(`mm`.`total_price`) AS `total_price`,sum(`mm`.`paid_amount`) AS `total_paid` from (`meal_master` `mm` join `users` `u`) where ((`u`.`id` = `mm`.`user_id`) and isnull(`mm`.`deleted_at`)) group by `mm`.`user_id`,`mm`.`meal_date`,`mm`.`meal_type` */;
