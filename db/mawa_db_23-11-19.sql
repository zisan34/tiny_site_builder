
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `note_user` */

DROP TABLE IF EXISTS `note_user`;

CREATE TABLE `note_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

/*Data for the table `note_user` */

insert  into `note_user`(`id`,`note_id`,`user_id`) values 
(9,5,5),
(11,5,4),
(13,6,4),
(14,6,7),
(16,7,4),
(17,7,6),
(18,8,4),
(19,8,6),
(20,8,8),
(21,9,1),
(22,9,4),
(23,5,1);

/*Table structure for table `notes` */

DROP TABLE IF EXISTS `notes`;

CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `notes` */

insert  into `notes`(`id`,`title`,`description`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Test note 01','Test Note\r\n	',1,1,'2019-11-21 12:59:38',NULL,'2019-11-21 14:12:37',1,'2019-11-21 14:12:37'),
(2,'Do the Task','dfasdf',1,1,'2019-11-21 13:29:46',NULL,'2019-11-21 14:14:48',1,'2019-11-21 14:14:48'),
(3,'Test 001','Test',1,1,'2019-11-21 14:15:25',NULL,'2019-11-21 14:17:31',1,'2019-11-21 14:17:31'),
(4,'Test 001','Test',1,1,'2019-11-21 14:15:31',NULL,'2019-11-21 14:17:34',1,'2019-11-21 14:17:34'),
(5,'Test 002','Test word limit. Word limit is currently set to 5 words. Let\'s see if that works',1,1,'2019-11-21 14:18:05',NULL,'2019-11-21 15:34:30',NULL,NULL),
(6,'Test 003','Test',1,1,'2019-11-21 16:34:14',NULL,'2019-11-21 16:34:14',NULL,NULL),
(7,'Test 005','asdfasdf',1,1,'2019-11-21 16:56:27',NULL,'2019-11-21 16:56:27',NULL,NULL),
(8,'Test 005','Test',1,1,'2019-11-21 17:09:22',NULL,'2019-11-21 17:09:22',NULL,NULL),
(9,'Outgoing Test','Test',1,5,'2019-11-21 17:39:32',NULL,'2019-11-21 17:39:32',NULL,NULL);

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
(22,'99 Composite Brigade','99-Composite-Brigade-1',1,'<?xml encoding=\"utf-8\" ?><p><span style=\"font-family: Verdana; font-size: 16px; text-align: justify;\">In the history of existing Composite Brigade of Bangladesh Army, 99 COMBDE came into being maintaining the numerical chronology of COMBDE after 98 COMBDE.&nbsp;</span></p><p style=\"text-align: center;\"><img src=\"\" data-filename=\"log_BIF.png\" style=\"width: 25%;\"><span style=\"font-family: Verdana; font-size: 16px; text-align: justify;\"><br></span></p><div class=\"chief-army-text\" style=\"display: inline-block; text-align: justify;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: 21px;\"><span style=\"font-family: Verdana; font-size: 16px;\">The holy number &lsquo;99&rsquo; was taken considering the 99 virtuous names of Almighty Allah. The long awaited demand and cherished dream of West &ndash; Southern people of Bangladesh was &ldquo;PADMA MULTIPURPOSE BRIDGE&rdquo;. After the liberation in 1971, the construction of Padma Bridge was a mass demand in the list of development works for the Nation. After that Bangladesh Government took all possible steps and planning for the construction of this Bridge. As a part of the planning process and to fulfill the following requirements, a Composite Brigade was included in &ldquo;Forces Goal 2030&rdquo;.</span><span style=\"font-family: Verdana;\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: 21px;\"><span style=\"font-family: Verdana;\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: 21px;\"><span style=\"font-family: Verdana;\">General Aziz Ahmed, BSP, BGBM, PBGM, BGBMS, psc, G was born on 01 January 1961 at Narayangonj. The General joined Bangladesh Military Academy on 07 August 1981 and was commissioned on 10 June 1983 with 8th BMA Long Course in the Regiment of Artillery. He has taken over the Command of Bangladesh Army as Chief of Army Staff on 25 June 2018.</span><br></p></div><p><span style=\"font-family: Verdana;\">&nbsp;</span><br></p><div class=\"chief-army-text\" style=\"display: inline-block; text-align: justify;\"><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">He has been honored as the Colonel Commandant of the Armored Corps, Regiment of Artillery, Colonel of the Regiment of The East Bengal and Bangladesh Infantry Regiment.</span></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">General Aziz completed his graduation in BA (pass) under Chittagong University in 1983. He is a graduate of Defense Services Command and Staff College, Mirpur. He completed his Masters in Defense Studies (MDS) and Masters of Science (M.Sc) (Technical) from National University and also earned Masters in Business Administration (Executive) from American International University-Bangladesh (AIUB). The General is now pursuing PhD in border management under Bangladesh University of Professionals (BUP).</span></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">General Aziz attended a number of professional courses, seminars and symposiums at home and abroad. Worth mentioning are Officers\' Gunnery Staff Course from Artillery Center &amp; School, Chittagong and Long Gunnery Staff Course from School of Artillery, Deolali, India. He attended Pacific Army Senior Officers Logistic Seminar (PASOLS) in Fiji, Pacific Area Special&nbsp; Operations Conference (PASOC) in Florida &amp; Hawaii, International Border Police Conference in Poland, Border Police Conference in Hungary, World Border police Congress in Netherlands. He led 08 bilateral Director General (DG) Level Border Guard Bangladesh (BGB) - Border Security Force (BSF) conferences. He also attended a Conference on Technical Cooperation &amp; Capacity building for Border Management in Thailand.</span><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">Within his colorful military career, he held a number of important staff, instructional and command appointments. He had been a GSO-3 (Operation) in Chittagong Hill Tracts (CHT), Brigade major in an infantry brigade, GSO-II of Military Training and GSO-I of Pay Pension &amp; Allowance Directorate in AHQ. General has a vast experience of command where he commanded one Artillery Regiment, one Bangladesh Rifles (BDR) Battalion, one BDR Sector, two Artillery brigades including an Independent Air Defense Artillery. The General also served as instructor for more than 07 years in Artillery Center &amp; School and School of Military Intelligence.</span><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">He was the GOC of 33 Infantry Division. As Lieutenant General, he was the GOC of Army Training and Doctrine Command (ARTDOC) and Quarter Master General (QMG) of Bangladesh Army. General is currently acting as the Chairman, Board of Directors of Bangladesh Machine Tools Factory limited, Bangladesh Diesel Plant limited &amp; Trust Bank Limited. He is the Chairman, Board of Trustees of Sena Kalyan Sangsta and President of Bangladesh Golf Federation, Kurmitola Golf Club and Bangladesh Olympic Association.</span></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><br></div><div style=\'font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\'><span style=\"font-family: Verdana;\">After the BDR Carnage, he was the 4th DG and commanded the force from 05 December 2012 to 16 November 2016 and played the key role to bring normalcy in the force and reinstated confidence of the nation upon it. Under his command, BGB raised four regional and sector headquarters each, 14 battalions and established 108 new border outposts covering 310 KM out of 539 KM unguarded border with India &amp; Myanmar in CHT. During his tenure, General Aziz made a significant record of exchange of enclaves with India without any hassle. He under took many welfare projects for BGB soldiers. Worth mentioning are the \"Shimanto Bank\" a commercial enterprise; three new 50 bedded modern Hospitals, etc. During his term, a total of 18,000 new soldiers were recruited in the force, including 100 female recruits for the first time. As DG BGB, General was the first overseas \"Chief Guest\" in the history of BSF to review a passing out Parade at BSF Academy, Tekanpur, India.</span></div><div><br></div></div><p>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<br></p>\n',NULL,0,0,NULL,1,0,NULL,'2019-10-21 00:00:00',1,'2019-10-21 17:44:56',NULL,'2019-10-28 12:57:36',NULL,NULL),
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
(2,'Private','private',NULL,1,1,NULL,1,'2019-10-15 16:08:48','2019-11-03 18:24:27',NULL,1,NULL,1),
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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

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
(56,'Contribution to UN Peacekeeping Operations',NULL,'contribution-to-un-peacekeeping-operations','/uploads/images/1574244929_1_courtesy-3-1543995653226.jpg',24,NULL,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>The Bangladesh is actively involved in a United Nations Peace Support Operations under Blue Helmets since 1988. By this time Bangladesh Army has completed 50 missions in 40 countries. At present 7,085 peacekeepers from Bangladesh Army are deployed in 10 Missions of 10 different countries. Besides establishing world peace, our peacekeepers are earning huge amount of foreign remittance that contributes towards maintaining and increasing the growth rate of our National economy. In search of world peace, our peacekeepers dive deep in fathomless darkness; and they sacrifice their valuable lives. Till now 124 Bangladeshi peacekeepers have embraced martyrdom and many of our peacekeepers were injured.</p><div><br></div></body></html>\n',1,1,0,0,NULL,'2019-11-20 00:00:00',1,1,'2019-11-20 16:06:31',1,'2019-11-20 16:15:29',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(14,9,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,NULL,NULL,'2019-11-04 19:00:19','2019-11-04 19:00:19',NULL);

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
  `status` smallint(2) DEFAULT '0' COMMENT '0=Active, 1=Done',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `todos` */

insert  into `todos`(`id`,`task`,`deadline`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Test 001','2019-11-23 13:41:00',1,1,'2019-11-21 18:39:58',NULL,'2019-11-21 19:45:55',1,'2019-11-21 19:45:55'),
(2,'Test 002','2019-11-21 18:40:42',1,1,'2019-11-21 18:40:31',NULL,'2019-11-23 10:00:42',NULL,NULL),
(3,'Test 003','2019-11-21 18:40:42',0,1,'2019-11-21 18:40:42',NULL,'2019-11-23 11:42:25',1,'2019-11-23 11:42:25'),
(4,'Test 004','2019-11-21 18:40:42',0,1,'2019-11-21 18:40:53',NULL,'2019-11-23 13:07:48',1,'2019-11-23 13:07:48'),
(5,'New Test Task','2019-11-23 13:41:00',0,1,'2019-11-21 19:48:20',NULL,'2019-11-23 11:44:03',1,'2019-11-23 11:44:03'),
(6,'New Test Task','2019-11-23 13:41:00',0,1,'2019-11-21 19:49:59',NULL,'2019-11-23 11:44:00',1,'2019-11-23 11:44:00'),
(7,'Tomorrows Task','2019-11-23 13:45:00',0,1,'2019-11-23 10:05:15',NULL,'2019-11-23 13:07:44',1,'2019-11-23 13:07:44'),
(8,'Date Time test','2019-11-22 13:41:00',0,1,'2019-11-23 11:42:00',NULL,'2019-11-23 12:55:10',NULL,NULL),
(9,'Test 001','2019-11-23 14:00:00',0,1,'2019-11-23 11:44:53',NULL,'2019-11-23 13:48:36',NULL,NULL),
(10,'10 minutes ago','2019-11-23 12:30:00',0,1,'2019-11-23 13:08:19',NULL,'2019-11-23 13:12:27',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `user_roles` */

insert  into `user_roles`(`id`,`name`,`short_name`,`creator`,`reviewer`,`approver`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Admin','admin',NULL,1,1,1,1,'2019-11-04 11:55:41',1,NULL,NULL,NULL),
(2,'Commander',NULL,NULL,NULL,1,1,1,'2019-11-04 11:56:01',1,NULL,NULL,NULL),
(3,'BM',NULL,NULL,1,1,1,1,'2019-11-04 11:57:03',1,NULL,NULL,NULL),
(4,'DQ',NULL,NULL,1,1,1,1,'2019-11-04 11:56:53',1,NULL,NULL,NULL),
(5,'GSO-3 Ops',NULL,NULL,1,NULL,1,1,'2019-11-04 11:57:13',1,NULL,NULL,NULL),
(6,'GSO-3 Edn',NULL,NULL,1,NULL,1,1,'2019-11-04 11:57:15',1,NULL,NULL,NULL),
(7,'Branch Clark',NULL,1,0,0,1,1,'2019-11-04 11:56:27',1,NULL,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`role_id`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(1,'Admin','admin@app.com','0000-00-00 00:00:00','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','6XQJ75zHo3A0dELYt3mLh76cqQsOyAuDQuIozp6zjDlla23wufEG6yQru9fz',1,1,NULL,'2019-11-04 16:56:09',NULL,NULL,NULL,NULL),
(2,'Admin2','admin2@app.com',NULL,'$2y$10$xXFz/L1hpnZ60HQ5ZHbwX.lnSsHqeVPvKw2ioK0CsGrJ9NF5Ehwhy',NULL,1,1,'2019-10-31 12:27:47','2019-11-04 18:56:26','2019-11-04 18:56:26',1,NULL,3),
(3,'Md. Faisal Rahman','clark@app.com',NULL,'$2y$10$oc.ga6qnUaNBH/i4OXjUtO4Dnpg7zaifoJsKcjTO.F1fmLm2byJ6K',NULL,7,1,'2019-11-04 12:27:42','2019-11-04 18:57:15','2019-11-04 18:57:15',1,NULL,1),
(4,'BM','bm@app.com',NULL,'$2y$10$Todf0c.bOIzAKqzyyAMJ7ehEIVY1JqpARXHuaCQ5h7yCWKo8r9jpa',NULL,3,1,'2019-11-04 12:31:27','2019-11-04 12:31:27',NULL,1,NULL,NULL),
(5,'Branch Clark','bc@app.com',NULL,'$2y$10$uwWexNPw557giXR7Hx7Tu.S72fZfBxfgqYVtaJIVmII7gPk1X.zh2',NULL,7,1,'2019-11-04 18:57:46','2019-11-04 18:57:46',NULL,1,NULL,NULL),
(6,'DQ','dq@app.com',NULL,'$2y$10$N2G3ukVOWmR1.baeM58ZU.V.yKarDlPnVS1CC3WLKpL52Z9SnPqd6',NULL,4,1,'2019-11-04 18:58:33','2019-11-04 18:58:33',NULL,1,NULL,NULL),
(7,'GSO-3 Ops','gso_3_ops@app.com',NULL,'$2y$10$ptbFMt2Lyz34XmAvbcDMuemOYqTMQVkyisA3zKFBuLiWYkKOdfP4i',NULL,5,1,'2019-11-04 18:59:10','2019-11-04 18:59:10',NULL,1,NULL,NULL),
(8,'GSO-3 Edn','gso_3_edn@app.com',NULL,'$2y$10$wyTRWFqPiEU9DQgSrT5TpeuS0Be1qdKpB2ayPsiLnx8kc37.Y48Zm',NULL,6,1,'2019-11-04 18:59:50','2019-11-04 18:59:50',NULL,1,NULL,NULL),
(9,'Commanders','commanders@app.com',NULL,'$2y$10$Aig7Shpzcrk01IrZZM/5Hu3wf9CCxn6x3TIUBeh6FPGZKFgah79K.',NULL,2,1,'2019-11-04 19:00:19','2019-11-04 19:00:19',NULL,1,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

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
(84,53,'Informative',NULL,NULL,NULL,NULL,1,'<p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANwAAAEICAIAAAC74A1bAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3RTAzOTc2QTVBMDAxMUU5QjQ0RThEMzRFMUQyQTA1MSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3RTAzOTc2QjVBMDAxMUU5QjQ0RThEMzRFMUQyQTA1MSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjdFMDM5NzY4NUEwMDExRTlCNDRFOEQzNEUxRDJBMDUxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjdFMDM5NzY5NUEwMDExRTlCNDRFOEQzNEUxRDJBMDUxIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+G5o6jwAAi4dJREFUeNrsXQdYFFfb3Q5L771KEVHEBjZUFGM3RWON+mnsMVVNLNEkajSxxV6ixt5b7L1gbwgCNkB6733Zvv+ZHRiWZXdZior5uQ+Pzs7ce6ede973vLcMPTUtjdaUmlJjSoymR9CUmkDZlJpSEyib0oeWWP/VG5NJZRKhRCqWScXSsnx+aU6ZWCDOiyug0+nlGWQyromuvpUek8UwdjRk6bCYOkwGk85kM2n0JmA0gbLhkqhMzC8U4C8jMjs3Jr8ks7QgpZgmq7kgk80wczM1sNKz8DS18DTjmurqGLIJgDald57o/w31DdorSCjKTyxMD89OD88CKOtZoZmrsWULc5tWlibORgaWenRmE3k2gVLrJCwVgRSzXuYm3kstK+A3eP3gTp9hzd16OTdhpcl815wkImnCnZSkh2mpTzM0STkWw9BGn8Vl6Rrr6BhwaFVsOZ2XWybkicpy+SBX0G314rDjukY6TUBpAmWN1poWezMRiMx4ngNBo+KudJjmHqYWHqbGDkZcUx0AC3s4+mxAsyomaYIioZgvFhQLwbgQQ/nxhblv8nNjC+ReJtNnmKdbkDP0UBNQmsy3ppT5POfFqZislzligaS6WLFtY+XU2d7EyYhrokOAqZauoEQk4RcIygoEEEmoxLqVRfU8fEmpLlO/CTpNoCxHTMSRqDfXEkBsSodgoD37NXPws9E14rD12G/vGnIESbez9xmyLLyNu9tzWzQB6P+1+YZVfbwtPC+uUNHzgyg2tNaHEHHws2Xrst5BfDGJF1kkysJfBj/GjGPfxrSvja4nk85qQtL/L6aUSWRQM092RsCwKulir4Funv1dGcyG7Jeiq4e2VCY9nfpngaiKrnLS82lvNtiEbdPQbrPs/y0oG3sTl0qkL07GRB6Lwga1k81l2XewaT+uFddMt8GBqAGUYpnAiG2Bf0vE+YrcmcF/08F0sIdh57dEmf/fANqomRK+46szb56fjFbcCf3R8jMP1+6OdSY8FZnptcicK0iOKr6XwntVIs5T3O9t3KOt6QAdhl7Dg1Im+3+F4MYLSn6R4PHf4TDcijsd/W3bjm1pZGdQIxw1glJGIlERlbW9vCx+fFTRvbiSEIlMTO1sZtC+s8Vwtbik0+uMymrbdM2g/KCh2UhBCWN9b93TxHupVajoEw/fkV5MDlMzC2pLe/QGkEUJpc/C8i7kC9MUcdnFciSHwX1rLrZMu1yyD5dKGykon+55DsNN/WSymW3HeDcf0IzOAJTUoklWDkl6JR1qgKNiNbI6viecrVCYeTf7YEZZ5dW6GXYg+LJaLFNW17OouFRNVdHLkSeT0dWaiUYNzcYIyoijryOPR0F0kz85BuxOU9s6d7an0bUgQi34j14njhRJ+XQ6g0XnVK+qTFL0JOdMdNF9ar+vaR8/i08bDJR18zI15lFXQ2MAa6NT37E3kp6fiK5EpB67y/R2Tp3sKCKUM4FMLSLxp/5l0BU5spYQSeW9fpx70lrXrZ35QCO2pWKFeizjrtYjJTJhbHEIuT+y4IYxx6q5cdcGVDCKrY5eY1lN90inVVShqnXS3zsu3zMolbzDnJj8yGOvpeLy6A+DyfAa6OYEjqSeZTnJ0WvGXI0cWTu+lKXzo4tFufhLKA33MenlYxqkaKBZdHYXqxE4CgFE+MQyMXBpxW1myrGtJ0PX3SGm02W1j07Q1Ts+7wysjPcNyso/CV/84lR0SRaPOtriY/c2o7yViVAD4Og1CCAy1eE6S8T56bzyyJRYKgjLu3gpdVO+MF3xDnSZhj1s/qfHMiKz5QvSnuffkBJcVZ5BXaqbL1tzWc0Zqj4usVicmZmZmgpvLj0tPb2osJBe9e3Q/6tMqaJ1VjwXiUjy8lysYgDIvq217/AWig9OMxFqT5N1wAERNudYlorzhVI+FRK6lLqxm/VoR/1WVDZTHZvOVsNvpO2U0Qiyjyq8727kZ6fXvGG921qUrQm1JPW9eP78/IXz586ezcnJQbVsNrtly5YBAQFBQb09PT0V7fq74U7mrFmz3iMiqV3CElHMtQQ9M66htT7+jOwM/Cf6cs2qBFboDIZm5qjBKDAYdX39ND22EeBlwDIXyQRFouzya5aWZZbF2nDd9VkmVGYjtkWhKFNOosRbE0h5roZtGHSmFmxVF7LU7FnWLAplsuvXr02ZMvn6tWuFhYWOjo729g48Hi88PPzWrVuXLl1kMpnW1tZGRkYqIS6//Ibn0Lelvqtfq4oHpLBHKpGJSoUMNpPMxmQxGGyG9o+Y/tZEt9K7gAaPyLv+NOc8yYVIVlzXvvbTKauNlM1PuJiyuUxcRLQEOuNT57mWuk4NEXyso1TSkCcuLm7IkM/S09I6d+ky8cuJLVu1srS0jI+PDwsNfRLy5NjRo8gzYcKXixYvBn2qu1Cl+utPn2+LKWsLSjqDTswnZDOYbCb+rT4nhl6Dv8jQTrPWV1Ew6Sw7PU8uyyCl9CX59EvFBbhcOz0P6hq4TKNScV4WP4F8QxyGrr2+V00B/7fqt6tFCWB35sxpHx+f3Xv2tm3b1tTUlMPhgBp927Tp37+/j09roUjYoX2Hdu3afXjqu1YQLCsR8oqFRBhc5augPD/5v2bW+tqBsgbM1cdKVt/Z0jRQICl7nH2K/PkiP7iZYRtQZgVwmc4GrWOKHgskhGh7UxzS0eqzGnlaKpXApSspKWHWxs2QacWmqh+IQCB8+vQptrt07aqrq5uUlFSl+TEZwKK1tRWXq5eenmZlZc1isdRHmDRdU225swHMt2ZnUXGnSCg5vysiJjyLGPJD19CyK5OlncHHE9tYORrJeUhWK+hUdSjraCLV1QyH8kbaroTi8PJAgUlAV5uRLDqbsvJXU7cnlTwnfw5y+t5Bv4YRwWVlZbNmzrx9+zblH1cZOarefVScya7h4pVqkzcDaUFBAc5ramqmr6+PVqEELfgebDYLwtzKymrHP//Y2dmrdgaUzbeKdlArXLLqD0TNdlkxW3J03pNr8bUCR2EO7+aJ1yN/6EhyIdAsEotwgyDa8gckgwOKVs1gMBk4KpaIyaeGHeVuEA2UIMA2fHYFWpKKRCLyTSM7g0GXVsz1kYsPYj95XyioUiHpMPV8zT9K58WQdBhT+Mjf6hM2q7y/h8PkgjgpUKbyXjsaeNfo9hUWFYEscWEVXEUkXAaun/xJXQl2Yht3IRQKFbitPAOO0eV3XZX5mKA68sbJPbg1iYQAYlFRYUlJsWLN2E9lIx8mno+69inTTJzVMtUI0HcaEooOyyQRwGIztWk6UrFMIpFmJBVJJDIWi7jZiIiIPbv3wsbhiRNLXHC5eHwWlhYW5uZt2rbBczx54iQeH4Tkp599Mu5/Y5Hn4YOHhw8dNTU1+WrGdGsba4LGRKId2/65fv0Gh83m6nHhRZWUlOrocFhEYpeV8WDXgHO8b1s727nz54AnVF6ela6Lk0GrmMLH8piRKLEkEnxJHbXmNuMyDcskxMtOK42u8WZxL3v37sUF/7V69dq1a4GA5StWjBo1CmT2/fffXzh//vSZM35+fgx5wl3n5uaGPHmycePGR48eEY1ER+fkv/+SGSCfIyMjlyxZ8vDBA7JyY2PjSZMnT506DRvr161buvT3iRMn/rxg4a+//LJv395ffv118uQpZM2467y8vODgm/v37Xv8mLi1jh07bt6yxcHBsXH5lDW4jHStRAkV3LZ2Muo5tAVMuTw+SSf7taQyCTlCls6QURH9l0/Snj9IEYskvCKhsTkxntfaxqpvvz4vX77c9c9uVNjat7Wnp8eJ4yddXF3wb6+gnvn5BWwWC++sg18HZIDpmT93ATz1iIjIP5b9uW7DWuzZvWvP3j37OnXuGPo0DLCzt7cPC3v27bdf6+jqRkdHX754JTs7u2NH/xcvXno29zQ0NFR3R2ymDoxybFGIVEYo8QzemxamAdSzMtO11WebkKAsEGZIaRJ1Q4ApVkabwL9z5s7F+Zb/+efmTZtkUmnI06cJ8fHkUZL74fzduH59w4YN8fL9UCdopQSsdXVBh2/evNmxY8f2bduox25jY4M2vHrVqpcvXsAK6+jqVFgSFmlwmJCX8ppR4fnz53bu3Jks9y/19PSAb9QAkq1V7EKm2Seryel8D92Mplb6rbs60DXHwMl+lAI+QKkYt7WTpzS5H9yzV2BMzBtY7U8++wR++tXLV9PT00GZONTLr33Llt55uXmo7qM+vRMTk+CwFxcTb+5NzJsTx0588+2ML8Z+cfbMuZXLVyGboYGhk7MTgHvr5i03dzcDA33vVt4AZSufViAwDfdiDmHNMi0W5WI7swyeiZReEZKEBudWxIkAuyJhlqmOnZaPaNasWbt37YqKigJHKtpQ3OCVy5c3bd78JiaG6F+wt2/brt3IESMWLFiQnJyclZ29a9cuEC2ej4GBQfcePcCUINoVK1cCXvPmzr1y5cqdO3cMDQyqt4qMjIzTp05t3LgBG9jj4uIaEBBga2u7atVKsUTyjhHC0MCOlX/Ve8Y0HaRr7lCTVXgnikdYLGb1uiUVUyAU869ZvRa+eZ++faZNnzpw4ID79x4YGRnevXMXNBnUO4ijw3F0doyMiETO4OBbWzZtWfDLz8bGRk9DQgEv7MzMzGrm5tY9sAdJITDlQK1AKDiw/9CmDZtBtPN+nhP0URBOjVclEYuVwvJV7pxGN2RbGLLNyUP5gnTFDGwGB35nBRNI+RKeUlmlMLhiAm81b070Azk4OHz/ww/NmjUj/FQOZ+uWLT/88AMQiXsZP378kaNHYfEHDBwI2w3jcP78+dmzZgGRRkZGixYvhmU3MzeHE2lubt6tW7c+ffogT0pKSrmrXXFf+JdXxtu27e8FC34GIoHmGV9/feTokTVr1/Yf0B8tAWyt+ALpdUo1AKbqY3kfAzKqUvmbopAsfryDYfPYglAnfR934w6aS8PjiYx4DlfP3cP98KEjErHkeeTz5KRkd3d3+EOgzFGjR40fOwHvxqe1z4Z1Gw0MDb757msPD48d2//h8/lgVniN+Xl5p0+dPnrkWI/A7hMmjr9w/uKEL/+H7VvBt+f+NF/A5wd076aNwdJhcmGX1R01YJmSYUI4J0XCbDs9Dy2fEJrKixcvcC8/zZkzduxYmO+4uDhSn5V72zIZbjY/P5/SbTDcsCHkT4AP1Chv/0T+QwcPwo8MDQ1FHk9PT9h3pdMBxGkVQRhUhdsHv8oForABh9vVxadUchy19xrptfAp5TAUMSvaHO1R9unn+TdFkjKBpPRN0eOEknCepACqVumSqAaG7R/nzJ75/eyFC36BL5WSnPLnij9827QOfRp67uz5U/+ehpcJKoXjiPfavLnn3Pk/Lf7t9/Bn4RkZmd4tvYm34uHJL+P/8P0sF2fnoUOHjP5ilEgoKiouwv7OnTsPGjTwwH68wg2tW7eGoyYUijQHvRk0Zmfrz3miArK1Mxksxfw6LH3SgZLIxHxJSY2eenh4OJzaAQMGrFnzF3RM27ZtRwwfIRaJSSxiA0oFHAkRA0N88ODBixcv9u/ff+WqVYAv0NMzMLCZqyt2njt3bs5PP8XGxpIK+u7du6T3OXfePCihZ2FhNGqECLkkIpc7adIkA319tITg4GC4pGfPnv1y4sQ2bdqAnuUur1L4uF6pRo/zPTClTFx+DXmCtOjCB2KpgMPUYzN04e2KpPyQnHM2es2suW40NeP9TExMVq5e/uRxSGpqaocO7YFCPFsY7i5duwz+eHBpaWlYaNjmvzc5OhJqEQYIxhrGHa8N9h2Wy9bWZsnSJdjTpWvnFi2I2CHA9/OC+aT7D3EKkQ4OBnn4tvGFQqopiskg+U9lO3Q2aMWhE/fFILJ51vhkILCgi9esWRMTE41LnTx5Muwyn19G0hX4z8nJaf78n0Fjz58/P3r0yKFDIMGD0TExwBzaG5vDGT5iRN9+/caMHfvD99+DHUkGnTlzpi6X6ylPqFAkFiudl1da6u3tDQ1ekJ//4OHD69eu7du3749ly5ydnQFr4PJdM6UCG9HV9gHWxIXakGWlG1XR7FJ4L8vExWQHsauhr1DKe1P0BLjM4MXa6LlTDYhOlqhwaPCvhYVF/wH9lOqHwQrq3QvtrH//forP0at5c6/mVcbpgEG9vCr3QF8PHz5MMUPfvn3wb+fOner5cK24LvjTPn/Lli2hMIKDb2J72rRpw4ePkJsHRsVQUjoZRNTX1z958gRoFV7j8ePHr1+/jqNodVKJFA/KxNikd1DvHTv+mTRpItQPNDvcUz9//0p2VxxORS8fP0k6spZWVoA5Wilq3rJlC4iTpjxMruY+HSqYoGGPBu6kv9/xlFJiHqCMDPg5GrRsY96XXKMnJOd8piC2zr2C775lN1SCU3j48OGLFy/du3fv99+XUsF/pQTLfuvWLRjxdevWffXVjC+//BJ3LamqkTt27Dhl6lQ8CsKTqUaN6lKUPOHsO/7558/lyzt16kRr0FkcWjMlBWGN5Fern2r7miu6qMsJT8eJw+QKJLxcQUpSSWSpuEAoLSPBmlwWacVpVr70RdUBrfkJhbnxBbSKDhhZ9QZLzohg0C3dzUydjDNfZRemlajKK6u8ePmmhbuZmYtJanhGcWYpQ+MqqUT1TIZVc3NjO8PaPnERX8zSYapjDvB9165VJlGA6rp1CyguLra0tCSv1t7e/saNm9999x3UDyzs0qXLAL6ioiIYEMUuxymTp+Rk56SlpVpZWin6ry1aeA8fPrx9u3aoGS4mHB5QKVnQy8vr7Llzc+fMKSwshFe9ZevWFcuXOzk746oUe7mUOqJUjGirlTtXtVqCttPTM94ZKM/viQg++drL13HSki7knkspmxOLI8jYKYeha8A2Lxblehj7d7YZosPQv3Lo5aUD4VYORl8t62VUMbby1l8Po67GaXO3fuN824/2OTXzcsbLbG3yB0z38/nU6/jXF7JjcrXJ3+vHrs17N6uFZRBLX1+NFRQLfT7xAi5r++aU9ggEAriM6sKoNdKbhh41VMvn86vXXL1OmeqRbDVcTI0/WRp8R3rt3EqaNhqc8Gl0JNShZobtUkpfiqWESBRK+QJpqbyDzhWIVBz/qhjY03IdcnCke3dnIgKq3eu39DB3D3SRiqRa5rfzsXbv7qJ9Pwcvryzs6PPwk6/sfW1aDvSk67JqBcTqJ4ITqaGIhgsrpze1fdQyuK1kRKkOniIp1ZUwqjQuRPO1Ea/s/XpRWfwEiazcGWLC1WbomuvYm3Lru1gUg8Xw6uNm4mhM0278LPK3HOTJNdEVloq0Gc4C497hi9bas11eYsHdzU9SwojouqBUWFbAl68p3JTU+5QV3plMM6KrHlWeIK+kzmQyte1VJiz3qOBNErZbVh4QNmSbBdlNMNWx1WHqlRsXemW7p1q2sFRY411ZNDP16uteHkkW1txLZuNt5RnUjFhakM0QlolqzO/ew8WxvW2tDDeJSPIJ0asZFnWj0mrw0dWbUdVPXpF6qcrp1VhWxQhJmXwvvZo3WaOLSVfiTiVYyVShjlVFH2hhfFU+oyr9cOofYnmIh1l+80wGq7V57+SSF5llceQAMHNde5ClauNSsaPdKB/PCk+OzFaUUfL0UCTsY3k702HBNaQWKg+Y4V+Wz1e81Kyo3JCDEdREXiaH6T/Ol8UhaI/FYfX8oXOZwsclkD/9eRbqp/awdVkdx7epVdNX1EOlOTxeAd/E0UiFz33+XHBwsJ6ePjlgh3xJkM8Sidjbu2VOTnZ+fsGoUaNsbGxWrFjOZhNcy2Qy4VxCa/fr1w/ChXxrkM9bt25BDZMnTwkICKgu3g8dOpSdncXh6JDhT5xFPq5PRkl47CEGA8oH+xE75aEo7FywYEHNXSTaQoWmrjhLS1dSiRoVjsrUs6lMdc8QU0aCiU3X8TXv3dykk0BSmlOWDPWNFklpYZmams1dTfGnWDkQIyippE+blpYega5ytSh3Ft3NlS4BpEUtdoDkFuBk72tNST+r5lWWlJZJZW9uJVSJJg7yNLKtneimGgDRMSMQS0Sqyfv169cXLlwwNTXNy8tLSUkhg/menp7A5cmTJ/Pz87Fx5crlefPmrV+/3sPDAz8TEhJsbW1RpG/ffuTzACLHjRtraGhYUFBw586dXbt29+jRQ1HELFu2dOfOnSiVlpYG2EG/IzPqEQqFzs4uZECNzWZBlUdFRWHb0dERhwoKCj09PRYuWKiSODVwpyKaVHmclSUo1tQ2TknXNFBc9bRgteOAqmzTuUxDE46Nu7EfAFo+gqEiXC4fq6q2SZH1p4RlPDv2grLRbC7bb6wvfEQarbKTXzElP02LOPWaMlW6xjqdJ7WvEuGv+gdERl2rFPt6Ztx2I1rVz+FVPSoaf9OnTwek9u3bR3IeyKm4uPjzzz9fsWIF6NDd3X3Pnj2pqak3btwAjP76a82gQYNwI4Dd9OnTOBw2WW16enp2dnbXrgHbt+9AJQCxovrZsGEDKlmwYOHdu/cOHToMUDZv3nzZsmUODg7u7h449alTp9atW9e2bbusrCz5CGjZzJmzJk6c5OzshBOpsP41v3FNE8dVlmBUC9kr/qRXf7XUoI5qmZX3UH4gvWodErG0DM5+qZDPE/FLy//kP8XE/hL5fvmfqJo7qDS4RCqWRV+PI9QJRXvdnOxaWSkBi0pQGKFHXijylnd/D0MrfXWjVnh5vNDDzxU/QNFlUru38bEI8nQGBvpGRobkZJ3+/fuDHX18fLZv3w6Mjh07FgB98uQJaVjBZ+A8gK9FixYAq74+boGG55WbmxMY2GPq1KkWFuaxsbGAsjkxlq8cFvHx8bt37+rTp++0adMsLS379u07YcKXly5dAu6jo6OtrKz4/LL169cNGjTw339PgiBHjhyFa0PlaAPwFiwsLGhV4yFVRjxVHQBU/ZVVbfZUF53iO6oYMkbXFBLSwI7VfQVVTUdV+0h4nbNp/nWJSFrehUaYSDn502kkNVb8pPOKBJpJN/FRStTVKn0/YEq4mEY2BipvJP5+UqXgIEPZPFFJdqmBpb5KNn91OS43Pl9xd0k2Dx6qnlntVvqjK1K+VFYxFkJFWrp0GairU6dOYWFh1tbWmzdv7tq1K3Azfvx4XV3dNWvW9OzZExjav3+/ublZy5YtDx8+nJiYYG1NjI0HiSIbQLx69epx48bBxMMddHFxpQzOq1cvk5OT//jjD3IeN7Du7u4GskSFkZHPgfWNGzcdOXIYh0aMGIlscXFxhw8fgpOABkAM5KvwOFXTpBbcqaVQYSn2KVc/rCirKemmNFOpajheWcHJqvW5gAJTY/M1T6RXWqaKom3FDFA2IQcilApGnn4ddy8paHYXx/Z2SjcFsIYciFTOfyYqLSKz99xulu5mSs+uIKXoyd5nSir04a6whEcpgd91VsyvRexbId6hy4KoUvd6Hj16tG3btmvXrhUVFYEmnz59Cqy8evVq4MCBwBO2ATvwlnyqjXDIkCFA3tWrV9u3bw+EAbXwAhcuXLh79+6JEycGBQXJu7A3f/rpJ+SYdiQDAwNjY2LphMePH7FY7K1bt/r7+8MTmDx5Ulpa+ogRI4RCwYsXL3bu/Ecg4MOIE8aUobwiDuVPqpTzFZGTqjurQkXBoyj3NRVRp8106SrUWoPUotW8x8iMO2h8mzGzuwyd1sHUkjCdg8e3xc9hX/nbuZiw2MyPhrcaM6vrmFldXL0tlQyconR4eSEmJzav+jVD3l5bcS83Lr+K1JDIwo69ACmq6EpOKLj6xx1QoFJn4N2tTyQKhp5KGS+zg9c9qP7ZFA2pOKNy3JqBhR7XWK0D8PPPP8Pmzp07F2QWHh4O9w4vbMKECfPnz4e1BXcOHz58+fLl8rFqNBcXF9ju69evk9MhcBTe5/nz53/88Uf4iAAlLK/i9DFkwE+AOCYmZunSpf369YWJ//rrr1FbWRkftnvAgAF79uw9ePDQ4sVLrly5Mnv2LFrFJI0qrjydps171zQYshrXKB5kUb3A1chJmauqdzDIFHiQTq3VSVO7p1wrGHA8WlsbmnBx6OGV2IIcnlc7Wz1DHXiQUWHp2WnFdq4mLi0sic+KvciKl/cQVl/iD6BJCkljc1kMJkPMFyuhByQafvJVr9ld6AprFUGycPTYdCadkOoy5eB2yMGIwO8qhwXx8svSX2SV56+GP+Ay4vQrvzG+2lgleW18xUA9qcNUd3UGBIDeAJRu3brp6OhAQWPbz88P+ho0FhIScuzYMRhooA3ECUJ98OABPEiySxCGeMyYMbm5uYsXL/73338BtczMzAULfpaP6ieenre3N1zV1atXwUZ/9FEfPz//Fi28Pv74Y7m4zkdBuK2gUvkYt+aBgYE//fTjw4cPRSIRny+A+iaHdVaf/qvhddMVFxasIFgNU4fJ66Rn5+SqiSfVsrNbi/UIzuwMu3HiJYNJ1zfUYXOY8FOK8/nAk6GJLiwayAwqRygQA7W6emxcXGmxQMgXWzkYfbeij1FVNw5Mmf0mD3CkMxlSkSQ/uejx3mf8okpWMHEwGrCop5mzCRXZSQ3PAILh3gHQQFXokUjFb5aZORl/9lc/PVMuFbjJjMolIhYMupAnynyV/ezES2xQ+a08zYdtGFgh82sA5bOTL29vfERuu3Zx7DO3G0dfU48OjPj9+/ehowHHfv36kZPXKh/jmTOvX7+GyT59+rSZmRksNXhRMcOdO3du374NFxPIHjx4sIF8Ug757hMSEg4ePJiXlzdp0iQvL6/yFiuR4HSlpbzu3bsrdnlDGEGPo4bS0tJnz8KgiqjuR7Vrrmox47vGvm96Tm5uRe9LlYU2ldZPqpwhT0apysf70JWcSMXmouStoioSlNjBNdAB7ERCcWmhAD40V59AIdAJFOJfbIM4AaOi/DL8pECpbj1o8hTx95OvrbhLBSxZOqyP5ga4dXNW105Cjz5/vDdcVNF/o2+u1/fn7g5tbNU9cXiTTw9FUl9OgRUe9HuQpYe5NqC8vvrei/Pls2xbDW7e8/vONXlNdM0vEqQFJPF4vPKlp1QVhKVWHMVX1Y1T8RhlMmU5QZ2LLE7G0sl6VJhNhf2K/qUiQso/EiAXteV7yIn3CqwpH5BRrT+maqhZFSPS1RMkXZMQIyuzdTEdP7cbyBKn//u3m6mxebPXD9DlsnHzp/8JffU07cv53W3lDHfxQPidc9FadruBgXQMOBQoQXXFmaUa4NKir/vzs1GFFaDkF/ILUotJUKos1aKPe8zN+ILUogp/QFpWwNdyQAbcg0rvxYRb/9VTyS4fY2NjDXmUxpWqOamsxmCLyrUYtJmMWtGnWrsR4hXdjOrdxxp9R9WehCq3g/Jqi/PLHlx+A5MN1inK44Ep712I1pf7lOmJBbxi4aOrsXArJWJZ8ps8pSeXEpZ+c+0Dykx7feTWfUZHteuZMOgw2Vf+uCPii8gLaDPE229suSMItQE2VeAeGYfLjn+QfG3lXZIOYeu7TGzfclD5GHUdQx0mh1ntgde8UrWwVEipLiabaepsrOL9q69BLE/gRQgOzThTfA4ieaIpzBbXsLoLBUo4lzgVOQqdwWAq4VWmpvNOHWuqczer63QlX5OlEt/K4FVBiHRtqFG1FC3g3zz5UnEPbLriz8fX45Q7BCpotiClqCSLR3XTpYRlUFHGzKgcRZ+PgJE+uySHV5JTSoH6zZ3E9qN8yMFvSSGpUDOKCIZsyksoUPyS/Zs7CV79PJhyxzH2bmJRerGSvNSmQzftRba4ohdA35xrrHUXJbD47NmzkydPPn/+HJKldevWgwYN6tKlCznaV12Cig4ODoYGf/nyJbBFiht/f3+VtFo5dDo//8aNG5cvX37z5g0cx3bt2g0ZMgROJ8RWHTmy+k6tWfM9DF3TN9JpE+CMf0GNITfjSgr4Xfp76hlyYBBfhqRmpRbhqKWdIXzK12HpSdFVxttCvgA6FChz4/PvbXvqO6QFMj/Y8VRR6EA4G9kZgaVYHBZMefmjTypE/ua9mwlLhHc2P1bEH4jT2M6QtMhUk00OTX/wz1P3bs6luWVPD0VAIVWGLXRYxnZG2txvSmga5Yka2RpS2ktzAjWuWrVq0aJF1J6IiIj9+/f7+Pj89ttvAwYMUFmqpKRk4cKFf//9N7UHimfr1q1BQUFr1qxxd3dXWSo6Ohoa/969e9Semzdvrl69esaMGfPmzTMxMXnHCFEXPKfXSllrOWCkHFgWekGfe8N849XHPs+E1ukzshUUt1gohbLJyyzt3Nfd1dsSOOOXiUhQUkxp52MN9CiCL/pGHP5UnMXByNLNDDCCIlFwBCXPTrzAX/X8RjYGxg7GaBh6ZtzSXB6l8UMPR+Kven5DK32couaouUyW+CSVomoTeyPVurvaswq+dYtCJLXoFBHtj4z88ssv9+zZ07dv3+o43rlzJ4VI0CS4lmxg169fB8ueOHGiZcuWyn0KRUXz58+nEIlS1NJWmzZtSklJWb9+vbyvUu1wuxpG4WiInFe141SG98CUmclFWxfeYMtHyGalFMGZ2zj3KkeHJRJJ8rNKQZ8H/rpvAMhKZKnx+UplYXmhXkFyNZ7FtTOhe/AHXny051mN+aF7YKYt3MzcApwjTr+qUR23HabVsIyMl9nFWaUUudr6WGvVASSTXbt2jYpcTpw4kYwT7d69G9a5sLDwu+++u3TpkouLixK8jhw5Ql7e5MmTe/ToAeKERYYDQJOvQPTLL7/s2rVLSbBjP7mQFeA4e/bsFi1a5OXlHT169P594rNAp0+f9vX1xf46L85dxyEr1ZfjUOp0VzHSQpvRGFU64CvbmVgk4fNEQGFZiVAsIuwagEj6bWK5XZaIpcTHIio/W1ul2bX9vGWLfjUsNeHew8V3aEvyrG2H+7gHumjO32ZYyxZ9PUjP0n9sG5dODprzB0zzI+dC1JheXYqhok5GtgZuXZy0WduGTqzlWR5GMDUzg1/o37HjmrVrl/3xBxmXSUxM3L5jh9KIJqih4uJyr9fGxgbw6tOnz/bt22GayZ235Ik6C8mIUqlULJ/uiJ1ubm6g0i+++ALY7dmzJ1lqx44dcDRVvWsVL1flhy/U/VSHNCaxxpd28XDtJndrGuP5OjQ9/mW2jZPx5N8Ce3zs5R/kFv0sQ8gXz1zTP2CgZ4eezQqyebkZJePndus7ujWOQh8kRuUYGOl26uOuy2VTp3DwtYFSzo7JrT6qHGzkN8YXwNIz4VLk6tjGjqXLSo3IUOHgmuv5j/H1+6INNbeBrcd2akusDpoVnaM4PqgcIk4mAVP8fD/z1qbFQ4Q93vusrLDcc3VoY0tCX12Kj4//8ccfITJAZgmJiZcuXiTC3fHxp06dEopEgYGBHTt2fPX6NRQMmX/AwIH6+vowzTDZwBCEdtizZ1BFOBQSEnL8+HEoFfAcVM7Fixezs7OBQisrq969e4P2Dh48COrt0KEDqBeki6Ow/nfu3IGJhzACOoHpK1eugH0BdJy3VatW74wpWZqxWH8gqnhVhfzIByn2zUwBQWzDakc+TDazNuAVCzOSCkCW0DdAKq4iMTqHuiDFs8AoA3lu3ZzTn2elvcgixt0w6DKJ1K61jW0rKygJpUvSNdHxH9fGLcAlPTIz82UOk82QSQFWhm1raxtvS2N7QyWfWc+C22Vy+xZ9POLvJRWlFYM+gU6A1bqFpa2PFQhPy4cbdz+psEKw6+hzvD5y05A5Nydn/rx5//77L2D0zTfffPrpp7t37QoLCxMKhZDeEN1kZOer6dOPHzuGjZycnIKCgtSUlB++/z42Nhb5O3fuPGnSpGNHjwJepaWlcATbtmuHB2diajp27FhIFtJYgxqB8p9++gnKesyYMQ4ODnAPZs6cSWpwPz8/Z2diwh1QCHkE55UkZmoErvrVgdX2a9A0DQGumuHdL3Clq8eWg1Jw8UA4m8OE7Sb7rM/sCmMyibViSfN96/Sre/L+D6FcNbPZTANVIxgAPvwRk1wpB1lH7e0AWBbuppYeZoIBgvLefjqterxD0XlFfrNmxiKhiMzPYDLUrQ6gJjwpigmOp8ZuGtkZunTStO5oeEREcHAwNtauWfPxxx8DGUePHdu8aROIcMjQoZTc9mrRgupowfWfPXMmRr4s4KLffrt0+TKwe+PmzW1//w2pTi3XhtS8okcRUAbKQaJwHPETQh4an+yo3Lt3L6ga4h3sS7qY1GqxYq2XM2gYptTGUteZHZWyefvZXT4UCeRJJTJBWeV9ApqKIypwVCipPApOZVIjGKqdhqXLVnfe9LR0aNVy/0ksZjFZaI5SYglJOlM+AQU/sZ/oDmfQxSIxi8WUdySQqylL5EWYLDabHFdLrLgsFMlXcGb4+fvVGCh5czshLTKz3HNnMnw/bcFkaZr9CCPbsVMnmOzU1NQNGzasWLHC0dHx96VLf/3tNw6HQ+kMkBbV0SIQCD4bMgQ+H8B09+7dHdu3T54yBaYWDgBgBMhSz58qZWdvz9XTGzZsGARQWVkZBM3w4cNx6sGDB/fr1w/3SM3chVknp2SQQz0UXUB1E3lVrk1QfQph9eJKlPlOmdLR3XzYV37Bp16rPCqtijryf3tX06HT/Op2ulevXi9dsiwxMcnQ0BCOPx4xOMDCkhg+DRcqVz4SxczcLC83D3B0d3dPTkkpLSkl1xI3MDSwtraGzs3JzimPARka2tnZohK81P0H9moGpaBY8PrqG4om9c253v1qWOAK9cOYBt+8CTRs3LDBu0WLLydOJJc9r2RfoXD9unXktpOTE+hNT08PtLpu3Trg6ddff4W9hpsoXye78s2mpaXt2rmzvIXb2+MGQb0QQCBmPAcIefiXrq6ubHmiSj19+hTAJbc9PDzo9Hf3ITyWBg9Su2BkLYL7aG8BA5vjr8ZYplbOaU3FewX1bNO2zeyZs+EYDBw04OCBQ1OnTQ7sGfjo4aNDB4/gX2Bu6bLfw8PDL56/9P3M77Zv+welhn4+5MD+g8DcwcP7z54599uviz7+ePDDh48sLSy2bt8ClBPC1lvTpx7AxhFnXieHVn52w39cWw3D1agEArtz+zYZaJwzZw745JNPPqH6b9LT07ds2XLo0CHyxjv4+ZFjdubOm3f/wYMnjx/DIo8aOXLr339369aN6pCMjo7+fckSWHOyy7FTx47k/r/WrOkdFIQiz549GzN2LJoB4YBWLO92//79GTNmkCaeFPLVO581M58GX1NDXJOkTObcufPeGShri6p6gpImX90erfyv1Wtu3gguKSkxNTNb99e6rVu2OTjYfzFm1LOwZ4MGDxw7buzWLX8fPnSksKAwMLBHn359IiMibgXfQnPF68nJzt64eQMI8sTxkxYWFhnpGVw9bpeuXTScNC+hIHj9A6rP08zFJGhmgObFiagEnoNqiYqKAileOH8eWhuXDSfk9q1by5cvP3jgQLkj5O2NnyRb4x59fHyuXb1aJE9HDh+G45iRno67gJf5y8KFt2/fJktBd3/9zTekywisA223bt2CDwC4nz59Gk00OSkJTRTECc+SWkZ19uzZaBvvlClrdBm1wWKtAKdyv4gvzorKYcuVEJiGa6yrchqrlo+GzMbj8UQiETH7hMlYt37tju3/FOTnk2snWVlb+bT20dPXh4k3MzdnMOhffzMjOTklLOzZ1StXzczMJkwYv2H9xubNPXm8srk/zTty+KiDo0NgYGBcbJzKPtxKJ0Qsfbg7VHGIe8BkfxZb27U0rKyst2zZiuuHQMbPixcu4E85tsxgLPzlF8XIOZxCmOO5c+eC9tCQtil0M1LJ09Nzye+/wyeh9nzxxRdsFgulAErgeMXy5dVLQYBPmDCh/EsoGr/Ko72vWV2eKxUkmLIxgFJYIry16dHLC9HQB29uJcTfT7Zqbq5vrlcfUIJjfl+8dN3a9ZCuMNwXzl/sEdh92vQp3i29r125dvgwQY2PHj6+fPGypZXV6jUrH9x/8Pp1FLF8mbmFk7PTmHFjDh08bGNj3SuoV3FxMa+UFx8f9zzyuZu7mwamDD3+POzYc+pn8yC3jmPb1oonYJQDe/Y0NzMDX1LB8Mo4f5s2sLxDhgxR7sFyde3RowfKPo+MVPy4Dpn69++/fsMGX19fpf0tW7Xy79hRIBSS0U2lNHXq1MWLF8MNfcd9fvTCwiItJTZd2w+L1QKLVKVSifT52ajgdQ+oI+aupiM2D2Zz2VpCsHoCZ1y6eBlKBQ4lhMuIz0eOHD1y1OiRdGKtuXTYdPDfqFEj7ezt+vbr4+XlNWH8RLzOgQP7796119HJ8Z+d23+evyA0NOzipfMgLPiX0LAA5ZSpkxcs/FnlGZPD0s7Mv0IZbhMH40/+6GPmVMcBDS9evHj+PPLRo0dJScSUMQsL8w4d/Hr27An8aVgzLVSeHj54gNZFfIPWxqZTp04gPMUJskoJ0I8IDw979iwkJASSHOfCKVAkICCgymA5rUeba79TaUc5pzYSUJKBoeC196kR2jRiErdz/4U9lUYx1s2m425TU1KNjI2QSOOLp3/t6vX2HdpDU5MZYNmZTAacLWhS6FAY8djYuIT4+KDeQXfv3P16xrf/Gz/Ox6eVra1ty1Ytq5+iILXo1JxL+cmFlbZvVkDrj1vUkzb48kSTD9qtnI1Q0zJcsBJi+actdHR0yCiPNmufAsdS+SIt8FNVrD37LkFZk76pGQS1FjFqDhWlF19edjv9eWaltRrasvuMjorzprX3uBvwU9TwTTMzMqCTDAz0VWbg5ZedmHUx+03lQDvAsdcPXcrXfdXUWhrS8Gn/CcSaF7DUkKE26KRpt7Cl4o73ubx09QRx0/F/bRSXoIg4/erh7jCJSPp+LwzECYOuDpGw11dX3FFEpFN7+84T2tWIyKakmk2Kioq17KSpL0Fqbdafn4+6tf4BNdUQr9Z/XBu/L3w1L5daZ16sZ6yjNJd3bfXd2LuJ1B5TR+M+c7rbt7ZpwPdU96/UNxB31oo460yZ5d0/jRCURHfCoYi7fz+pzMOgtxnSstOEdhrWGn0voIQHefnPW1R3IqGdTbmDl/RuWET+vwMl+cXCeoZ7agtEza5h+SKL2548ORCuuN8j0LXH153IGTm1heDbCP0Ci8EbHmS8rlxQnc1lf/RjN6/ebu/S2NUWr9rAVAMEa+trar1SukLgs9GCksDl9idP9lfBpZ2PDXw1Yp2g9w3K0OPPQefFCkFyHX1Or5ldW3zk/o49sP8yKGtU2bUw1rWKCqk/KpPKnh6OuL/jqbRyFDoxLLf1Jy38x7RRJyMaEH8qLxhAvPv341dX3ygOATa2M+o9K8DF36F+8JK9e6RqxmgdbXpdg0TlIaHGDEoyvb7y5vrqu4ozCcGSTu3sO4z2de5g/45BCRH25FC44uICSDYtLHvP6mbd3KLeSGoCZQUo6wBH1YvR1tVM1yhc0l9k3lhzL6vq520gelw7OXUa387MybhhuVBlSgpNe7QnNP1lVpXmQaN59XbvPt3f0MqA9vZTfVCrTdEaLXutzXqdDPqHAUqkskI+VEVMcJxSzBLawrOna8exbQ2t9JlsZoODkhgpEp3zYHdoani6uOqUIF0jHZy37dBWTPY7ikf+fwElubRhvSI+tYRjrbColCLOvAo5FF6YpjxMgaXDatbFqdUATytPC2ClurtZ25FXYoGYV8AHEJ/9+zJNoYeJTKjfoY1t92n+1l6WtPed6oDU+gNUVstOHZrWtvvDAyVN3qEHVR57N5GaJaiYAMpmnZ0c2toamOvpmXF1DXW0ByWES1kBvzSPlxOfDyBGB8dRn0FRTGbOJi16u3f6XzsandYYUhMo3z8oyRPG3Ut6eTk6MSRV8WMlignW3KaFlaWbmZGNgYGFPpPDMrCoPhCOWDyNV1BGrHyey4N8yYnLS3uRpe77UUY2hp6Bru2GtXo3HuT/a1DWbR6tOji+JSyqLA2+jL2XGP8gGfSmoSx8TbYuy8TBWKWZLs4sEdT0FTPoa+h9924udq2s3zukGrbOtwTQ+riYHzYoyZQakZEWmRn3IEnlcgP1SbD+rnAGfG2c2tubOhg3Ep7774OytLS0Qex1HbBYHyBWP0txVkl+SlFaREZiSEr6y6z6DCwCFl38HZz9HCzdzc2dTbQZaNw4FXdta6gxowZ01s6gaxTg/x1QUo8NSohfLChML05/kQl0QrtkxuRojnUAdlbu5mZOJsZ2hva+toYWelwTbiP50Oz/a1DWbLLfCRa1BKI2aloqkYoFEmhqiVAilcrgO5bklCqOF8YhM2dTrpEOdrI4TAabyWQx6IzGIarfGli1Kdjg6NRSAJX36PyHQdmwBZtA+U5B+QHBsQ6Q+s+gsMFhWn90Now1Vyl0mkDZBMrGBUoej9cgcR/1H1J+18b63aCwPmd5G2GgRgtQLcdTKtbeBMomUDZiUNY59POW4Pi+gNgYzH3DoraWsXTZu4GmBlPeeEFJ4/OlcQnSnBxaKe9dAqIWoJSI6WZmTE8PhpVlEygbGJTawLF2i2HQ6PUkSMmrKP6mv0WXrtAkUppETGucCZfKZgOX3KkTdb4YQdfTa/wMWptAet3RWS9oymSNEZSS6JjSr38ATRK/ORyGgwON3ggByZCBy5OSaPIVyTifDjZY/juNzW4CZQOAsqys7N0gUkuOlPEFpVO/Ft8jVrpide6o88VIhqNDQ/l89AadvyMTCMSPQ/j/7JbKFwU2+Gs5oPmhuJ5alq2zAKoPLhsdKMUhoSUjx2GD3bO73p+/083NGhBYb0PECK/d5P2yWJqewfbvYHhkXxMo6w9KhjJwqs3OUalsVH7oRPH7PBprVVFb5cKbRcU0iYSmo8P5ZLAiIqt/XEh7INa5rDaJ07snu1cgXVdH8ibunbsQdb8vLctqk011IFENHrRBVONbgYnPBygZ9nYMV2faB5JYXs1lEqm0uFgS84bWlOr/POtvtessa2paK5BeZ4P7jmONUDw0sZjGZMqKit+T6qLX2azX+B3wKh6/+m+Fq7PjtfoiPLmnaa26BgFFtY2mVF+mrEeQvG6yRhsmk7sk9PoQxv/fNqId+dWKC7XkS3Wl8TKrSx/Fz6Ao7vmQmDIzM5P8sguZRCKRQCCQSqU1arqMjAzFgmRVublV1tvIzcsjP6hdUlqalpZGVtuU3hNT1mNRtbdHk0opJSVlyrTpcXGxDDqjX79+y5b+fvTYsa1b/9bR1REKRUt/X3If6cFD4gOPEmkZr3Te/Pmnz5wJ7NHD29t76rRpmZlZDAbdr4Pfxo0bJGLxd9//8PjJE1xFG982O7Zvu3rt2uq/1vD5fKGAv2rlystXriL9+ccf/fv30/LiK78+TauFFn4HwzK0Ib+68WXdnEuVZEmr9gEUVuNvNyCwvfv2BwcH6+rqgh3/3rbN27vFr78tAvnp6OiALP/8c7mFpcWdO3dKiopMzc0lIlFcfPyNGze5Ojpr1q4LDQ3V09MTi8XHT5xgc9gd/fyxwWKxGAxGUtLZPXv3btq8JTY2lsvloqoVK1fhjAmJifkF+U2M9b4S413SpBYRLxVHYUmLi4qsrKxuBd9ctWIFwHT06LGCgoKBAwdkZ2b07Bn4Oipq04YNr148R5P7e+vWgoJ8Dzd3tL6i4uJnz575+XWIfv3qwb27FhYWly9dxlVLJZKTx48fPLDfwMCgqKgIzbR376CsjPRBAwcmJSeLxCIdDof6RKbKr6o3FI29vcpVnqgBvXPNFapdrpSm1cDwD4ApAcqEhPhOnTpZmJuDI42MjErk84rKeGXPnoUXFRXDQQSDisWER1haSiz4YWtnC9rLzc3T19f3be1rJk/2dnYZmZmGhoaWFubNmrkC1iDatLR0K0vLkuKSsLBnxDfaLS0VP7XZlN6f+q6l4q4zTda9ddIZsL+gNJhy+TcliX3wBa9euUxjsDgcttIVEDKFTgciAU3y+8A8Hi+/oAA2WkIkKSDMKysTCoXkUlh3bt/u2rULDnTu0lU+1oJe45eT36pqfkt+Z61czHqKcXXOpUrPUslP/SDjlLh4wK5jp47rN2zw9/cT8vkqs8Hig1Zv37kzdNiwz4YMTUxMdHJ0JL6cLFMwQDJio2fvIHifQb0/Ir+iyucL/ly+4n8TJqxYubKouLiJut4bU9aTJuvDkTXmkdMbwZEEWcJOSyBmRG1at546ZUpZGR/+ItVeZWQoR0YUAdvNmztn1uwfz507T5N/6nr+vHmJSYkk6ZJViSViwLRH9+5fTZ+GDKtWrRKLRGDQR/IE+pw8adIHF3HUnHDTp06dunr1akJCQmFhobW1tYeHR1BQUO/evdnVht7VX4xrT5Yfkk+JJzVnzk+4bXNz89atW+/fvw9WuCA/v23btsDTZ5992tK7BfAHUrxw4YKPjw+KODjY79i+zcXZ2cXFpVfPXgwGncliGejrgztTU5tB4jg4OGB739699g72JcXFpqamUDaBgT0szM1QVao8TgnIorixsfF/hoHwDE+ePLl48eLXr1+jVSse2rRpk6en548//jhkyBC9tz9auYamWCa3fbX4QndD06RSBuH5S6XTvmG08DJYs5zZ0rueAc4GjJVqSPwdu0uXLqcxmcZH9rHat30H2KpbwQMHDkyfPr2kpASt2t3dHQ0Y+MvNzY2KikpOTia/mNuhQ4clS5YEBAQoQbM+n81TuxABTfWcMtYH0b5hZfDIQGYSqRQCWVdXNzs7G8DS09MHC0KMS8QSa2sr0FtSUhKLxUYRfX09sGNxUTGLRQR3qO9cw3hlZmbp6HDAu8iWlZUF3SORiEG04EsY7sKiIqFAaGFhDm1OFklLS2MwmSbGxqmpqY6OjhwOBy+Sz+dX/+YwXc138hpDevPmDdAGRIL+Fy1aNHr0aPIr3qQuPHv27M6dO2/duhUSEjJ27Ng7d+6AOBuF+m6cCTDatn37mTNnBSJhWSlv1aqV2Llx4yauHtfUxFQqk+bnFwiFgolfftm5c+dhw4Yx2RwgZtiwzy3Mzffs2cNksrh6en4d2v/6yy+ZWVmLlyyJev3atVmztX/9VVrKm/bV9LzcvIKCgnHjxn4+dOimTZsTkhKBuXZt2y5bujQtLR1aKjQs1NzM7Ntvv501c+aRo0e9mjdfuXLV4yePb1y/rtR6hFeu61haMMzMGuFjvHTpUnR0NIvFgqXu37+/IrcBnZ/I0+nTp3ft2tW9e3c3N7f3eKksWr2HqL2tMJBCnDIiMhJeOcyN1NhYIBD8+tsiWBwjA4Pc/HzQp6WlZUZGRlZW9rLff3/69GlzrxauLs540NExMSlp6WO/+OLhw4er/1oDXx7/3rx5E2e1s7eHCQNGQ0PDcApvr+bgv12796xbv17fwIBfxn/yJAQv5s2b2B3//APNBM8VQI+IiHj86BFAmZicdPPGDeWnIJXy1m4U3r6r8+lg3S9Gvm31U1sjnplJrNzerVs3EpEq6yGhWVs1Uze5o1LxkJV8GIFiJoNpb2f39YwZYMc2vr4wtc2bNz986ODPC3+JiY7ese3vRUt+J74RLV8wbcaMr3x8WrVr137FihVurq7Llv5+5+7dYcNHFOQXALJeXs0P7NsHhCUlJ/N4ZVBRo0aNHDRwoG9rX+gkgPXg/v2lpSWjx467/+ABmNLWxmbnzn98WrUKCXnKYLKgW0Vi8ZMnT4Z+PkxlAxKHhIqfRUjT0vV++IamRRw+Li7uq6++UlyQ8S25QPHx8dh4+fJl165d0ZLVshSLRcaDR4wYgQtrROa78dAkmeBEvo6O/mHWLBS5duUy3EpjY6Pmnp421taFBfkurq6w1GCCjAyCDECHdJn01atXsNopKSmgups3g/Pz89PS0+C8Dx0y1Nvbe/2GjcePH4eo1wFB7tp1/tz5s2dOu7i6oOauXbsIhMLigoK4uPi8vNyRI0f26N4d5/Xw9NDlci9fvXbm3Hm81OHDhmtwOMq27sD/ejO/pTFr+IoKfGWQN3zZd/O+M+VJm5xt27Z9B2SpspIPgynhVlpYWHQLCMArhF3m8XhgOCp4iTdKbSBzs2bNbKwsyQlx2bm5a9etT0xM9G3dGopy+YoVjx49ggNgY2MdGxsrkX9dz9nJ2d3NTSyRlPHK8ERQP5PBkEol+np6OEvk8+cQOtA0zVxd9+7e/dPcufj5zTdf//jjbM0+R9nmbVDinF6Bmm8NNa9duxbMTQbzsbFu3br09HTILDQhtCXczqhRo+BLwI3Bc1Ca6AdiQ86ioiLI52vXrr148QI77ezsZs2apa+vjweFf1Enns+ZM2eCg4PhAqE21EyOzcPNosEjAwQfJA4ykM9w2rRpaI3vzad8S+MAGoomyVclEgpgsvFAdXU4cC7xYmTyhicmurzFxKZMKiK3aTQXF+fOnTpdvHgpLTX1k08+/nPZsqBeQWKR0MzUTFeXe+Hixd8WLcZrILp25K8ZarRHj+4wozEVM2zI5m5jYwNQHj12bOLkKX379Bk4oP/QoUPOnT9/+MiRcWPHmmrRD8lbuZbdpRNdV1dDHjS26dOnUz///vtvABEby5cvh9IfOnQoLgys36NHDzwBKysrV1dXJYc7LCwMTsWhQ4cALHKnmZkZfEfI7by8vA4dOqA1YieADsy5u7t/99138KepGqB+oIFu3LgBz5vaCeB26tSpDp5lrXGiKpD+YTClkZExBPLadevwRJYsWgR2EYlFDDrd2NjY1NQUbKHL1bO2srK1tXVwcLwVfOv69RtfTpjAYrNtrKyRwbtli7Bn4SKRcPmffyz85deNmzYZGhjAK2WzWMBEyNOn9+7e/WLsGFcXV2dnZ/LRu7t7ODk5DR48CIC4d+9eSXHxiBGEvQYn4V+Bmo5NpSR5HSUOfQZcanmbaFfnz59Hg+nYsSOgg5sFa4JHT8oTIci8vUF4pDTGUYDp4MGDBw4coIBibm6em5sLtpszZw4h6eQJRQYNGkQOYQaIcZQEJdAMub19+3bglUIzbBHVvBtRSKhBHMqGokmavEcH1mTwx8Q8f6lEAgXTunVrJosJLH41fVpBYSHexMyZP5SWlPq09gHT4LmjXMuWLcnQpq6Ozs8/L8jNyTEwMBg6ZIiHh0dSYhKDQcQ4W7f2WbVyZSmvVCQUIj/sYLt2bWG/ocS3bN1ibmYGv+rQwQMQ3VbW1jbySOe3337Tp08fJbrShLN7D2oFSlLx9OtHjC+GLAPbAXBBQUFwBJ8/fw6ZsnHjxjVr1ly9enXr1q0AJbkUFFgfnArhjCI4am1tjUcE/wS2G41q5cqVACVlBIDIjIyMv/7668SJE6T6QQKbDh8+HI8Idp+k6jo4jg3lVn4ATIknDjWNP2oPPEJyA8aI3GjpXd73U324OB5TOwWfvbUPoOtD/YThVswMi0kUYTB6BwVRp6DOQuTv3h1/2l+8JDFZm2x79+4F5lasWAEbjZ+ACyQaMJeamoqfYE1w2IQJEwCyVq1aAZeLFi3KyckhW+x4eYJvA0iRFhxwHD169J07d1DtwoULyUrIhPZ29uzZP//8E/Al93Tu3Pnrr78ODAyEnXn9+nVjmOf0wYwdJAacVfjmxHpDkvJvd4IL0TSpKTXkkAJYH0LEsVhEF7ZCTrIgdiqVwk+qe6OBk6hmWQ3eglsJF3bu3LmgYZjU5/JEXhguGG4ljDIuGB7F2LFjgTMSkUhwQoYNG9alSxfyJzQcTd4FNX/+/A0bNpBCmzpKhTJCQ0PJbRMTk88++2zEiBHk7b/tyJSWbuUHMHQNLyM0LKx7YE+uvgEs7Dfffrtm7VorG1sDI2P8/G3xkuEjR5lbWsG/NDYxhS/17NmzIZ9//uNPc2ANd+/ZA2r7fPjwXkG938TG3rl79+NPP0XmufPmf/v996AlMIeRiem69Rve1hPXYjwHvN6BAwcCeUuWLAE6QYSgPV9f3/Xr10+ePBkZSkpKQHt4Dh999BEuGKIHvi9YE4eAXZTt2bPnkydP0MbINkmGJqBgUBCo/emnnxQ9BFhq+KaAI4AITx0toUWLFvv374d81NWoyT4ApqxzhFJbh7LCkYXXvW/fvvDw8JEjRzo62Hft0gXSBJSAN9SmtQ/8QsgUiIPAHj3wDlatWu3i6spiMqGEyLI4JBDAuRcmJiZOnDQ5Iz3dz98fquji5UscHd2vZnxtYmzc/q2NomD5+tSYB01r9uzZIMjDhw937dr1K3nCftzy5s2bsQGTfffuXWCoTZs2+AkXEzoa9vfKlSvP5Ak/QYeLFy8GyJABIINnCQLGox4wYADantLMLLikMTExUEKoFh4ztseNG3f9+vXevXvX32LUX6F/AOYb2DQ0NMLDmvjll3AHdXV1Xrx8hRc5evSo7gEBDg4Oz56F33/w4OqVy4WFRRbW1mjxhIknF9ggG4/8GV26dLmouGjwoIH/7Nypx+Weu3AeemX6tKlcrp6RkeHb6Yli1hinLPd0W7eGF7h79+5JkyY9fPgQZAa1sWnTJjh5ZBzb0NCQ9DpIELvIE8QN1Pr9+/eBrdu3b8Nkm1V0u7dv3550T1VaHht56tatG+B4/PjxFy9eQMXv2bPnyJEjTCbzA2bKdyl0oK9LikuCevUyNjMb2K+vh6cnvMZx4/4nFYsePnoEekDr/GnO3OzsbIlYRLTUiiYLe8RksXV0dYhJ4nw+XudnQ4YYGxkREyHo9Lj4eIhxvG+gYciQIQ1+5TqDBzJsbbTsslqwYAFscUhIyGp5og7BPvj7+5PeXnJyFdmE/NAoHTp0+OGHH4DjZcuWUdPbtekiAu6BY2gjnKJv376w8lp29tSZC7UU4B8AKNF2p06Z7OBgjxezfMXKcxcudsrL19PTGz1qVAuv5l5eXgJ+GTC3csVy0qmHjbt2/Tqpcvbu229nbw//KTExCaZcJBSBG0igSyVSJ0fHYTN/ALuAqBr+sl2cuT98rX1+Nzc3kNbJkyfBWNAxuH7IYYgYUnTDC4yKigIjKhZ58OBBgjwBnStXrly7du3MmTMVtZ1SmJ3Ui4oCC6wMbR4WFjZjxoxDhw5NnDiRDBK9gznpmmhIe9/uPQqdpKTklNSU0pJSUxNT4E8oEOBfBpMplkhiY2NzcnLBdvHxCQAfuWYGikQ+jxwzbtyNGze4IEsmg81igW+AxbXr1k+eOvXM2XNMNqu4pITFZoN0c6uun9EALoeurt7c2Uwnx1qVgnwB512+fBlYuXfv3pkzZwAyyCAcAiPiX1hzQJDK//nnn8PgWllZpaSkwFh/9913oNg28lR9TiYqd3d3h7tJGehmzZqdPXu2X79+8MWhnwIDA//555/OnTtDG6kz/U3mu7KJh0eE//HHn3D+yng8PPEePbpHx8RcuHBBLBRKZTSJVArP0sbGGt46VGR6erqtje35CxdgwpycnKZNnQomSExIDAjoOnnSxG3bd+zbu8/I0Ah54Ixu27ZdX1+PQWd09Peve7MBCclXXSsndjdX/fk/sXt0q1tt1HhkxQTEwDoTUs/RUVG2Dx8+HCSam5sLBxF7vv/++ylTpjDk8X8lgwvxBIcVwpw6BGcGD/PYsWPwR8niOMu1a9fwwN+vDKfz5ZEtDeq4wccHaT5KTYcwXLOC2cqb8n7iExLwpGBc/P388NQy5VFisUgEAiAnHLo4O+fk5iJDM1fXUh4PRUAqXs2bgxuQGe5mc09PvBKIzZevX/cOCoKLif1khBJv2qQec3EEB4/ytu2klfEYlhac/n11x42mGxq+R8PyDoprzlbbqRHKoyo/CFDWLTDx7rg8M1OaX0jjlbLataW97/QfAGXN5hsF6E3rLmp2zK2tGapsbt0SpBh4vc4LdWgABCwMl8uF6VAy7o0tNS1R0rgSxM3cuXPJYaNvg0ThqBw9etTOzq4JlO/Hin1wa6hCC48fP17zIJ16JoE8cPG+PAQtyzUtL91YUnR09Jw5c4BIiOJx48adO3duwoQJpJ1t167d69evi4qg6Ip37CAmWtjb24eGhuZUJJTCIWjwuLi4I0eO9O3bl2yQbm5uUVFREH/YwJ6dO3e+evVKUb//15hSJlOrdTSzlJYcpnllj/9YAoEtW7YMiDE1Nd2yZcuIESOwc+DAgX5+fjNnzgT+rly5MmzYMB6Px5ePL4ZxNzMzMzc3J4tLJBJ4otevX9+6dSs5vIhMTCYTeYByMjZJjol+eyKpoSr5wMy3rKhYEh9PBFzgcqFVMBkyYs4KnWFtRTdRHdOR5ubJsnMIsQbWIb/tIhDKxCKmgz1dTYhYmpklzc2l6+gQ0xGJjhA6MQJNImU4O9H1uG/jvq5du7Znzx5dXd2VK1eSiCTTlClTHj16hEOrVq0CzyUkJBhWBJuocXf37t07dOjQrl27qG+/enp6ArVkv7lUnpSK/GeZ8l0nsVhw5ITw+k3xs/BKPDGZ0rR0mVDIdHHm9PtIZ/hQxdmDMoGAv++g6MYtaWoajc1iWFqSR6XZ2QA3q4UX+6NeuqOqTEqUFRbxjx4XXr4mS0unm5nSwSvyFynNypaVlrJatyLO8unHDXtncPL27t2LjT59+ihN1wLDDRky5OTJk0nyhD3kOCAy5vXkyRNY8wMHDlDjIP39/QcMGPD555/funVrxowZHwbRfKBzdACvsjUb+Nt2lr/FzCwa2YcLS8FmgwKlySmiu/clsXF6C+ZS8Y/SBYsEx/8tzyYSiSNflN8+i0XX4QgzMoU3b0kTk/Tmls9LlPF4pb/9Ljh1ttwIxScSZ6FXFOFwhOkZwuvBsvwC3XFf0BpuNA0s8sWLF1ksVv/+/clRkorJwcEBNhcuo7W19bp1606cOHHs2DHSgoM+IaXJbG3btp03b16nTp2QHz+Dg4M/4BCbNj6B+u/svV23g8omunKdv2M3tR+Gla6nR/zp69OpkJtMxt+5V3DkePmb3nOgHJFyVqFxOPL88j+dyihd2fZdwktXy4v8s6cckSQR6eoQmckTUWcRi3kr1ohCnzVsoACYMyfWKVbRWRAeHp6RkYGNP//8E5b9008/pQ6R09zIBB4NCwujVqWqg6V+L2HzD1V9y/h8Al6KT1ksAfOV/1UdESM8e0Em73UU7D1Q1fqrKSKV8g8cIv1I4bWbVR6hWKyyCHE9B4/KGnT5AHK+ORUwh3C5f/8+XjBkNdS0UCiEXVb0NUnYweP85JNPvLy84IxCev/xxx/NmzdfunQp8jeGYZF19ynfUjyvxmprPq+souVxOKK79xTehoRuZlL+xXcGQ1ZURHx8riLULEnPkGbn0AsKpcUllUUkZBF9slJZcYmspBjqiDyBJCFJxiuTvImD9Vds1HQLCzpXl9zGKXAiahkW0cNHxDckG6hfBFiENImKioqIiCDn0wCUkN6zZs2Csrl8+TL2zJ49m5wXS1ERNtzd3f/991+gE1pn+/btUN/p6ekLFy6Er1nb8HgDftT2vyx0ZBQ5gZPQ7kViwgpLJAwXJ/1ff2Y296BJZbDj4rDw0t//hGtIIEYiAdqgSAgaIxcpQBG+gOntBV+T6elO0q0ERVavlcbE0qCvpVI6hy3Ly5PxSmXyZasJfIvF0DR6OIuzo0woQiXikDC4mzKIDDn6oehpkgZTsmw2u1WrVgAlnMXRo0cbGRnBy4SUBrzIDIMGDYIGUmvsGIxu8hQTE7No0aILFy6cOXPmgw6QNV5QUjQKGqOVltHkjqBMJOIEdOUE9aSyQQ4L796HB0kMNwf7sjh0AwOwIF2PC+NHyPOSEr1PBnN6Vs6LZTo6CG/e5ke+III+dDrqJ06Bt6vHlYIOcWImk90tgN3RT7GIKPg2/9gJoohEwmzm2oBCB6AcPnw4FMyNGzfGjx9va2trYmKydu1a7IFR7tix42+//abNgsIeHh779+8Hd86dO5ccy/yfAmV126puWEadQ+g1M6W03FLQDQ1oMKOEEKZXWPWqVGFgQCc+8kDwHCFNYFXBZ0yGQlXVRmIDUrJy/4BYVkWPS8ceFlvBfCufh4HLKF9QXUZcUoP6PDDWI0eOPHz4MCBF7iktLYUTCZ9SaalIcp5DUVERuXxS9ao+++wz2G6AG9RLrG8jT+SGyhHp2lvkd7aYbyNmSmqYDOACWyy3m0Rc5uIVvrsbw9ys/EY5HPGr12QJuTDnyAqLpIWFlKMJMAnPnGeYmTJMTQlkE9ZZJElIpHF0Ks7EwKuW0RmywkLiXPKJJMKr1xl2tsTyp2RjEInEMW8qL6mho9D6+vpbt26FQ/ngwQO8FXLWIvn5H6WcnTt3hgyHVLe0tFRXG8h106ZNu3fvtpSvegyfFfiGhNd+YY/3/Orf75rn1Y8qrHm+gtmyBdF0CgoL/LtV6l+xmA6Xn7KesL8iIU3+ZSdgi9Wurd6iBQwb68JBQ2XUyAZgSEeHgBRB7PLmCUEtlscgYYs9PAy3rAMiiyZMlVGz8RWLkC2Y0uDwONv6Gh3YTfBlQyeyV0bzUvhachu5Phs5hlwgEKAUR/4ltUZOk408eF5xxTocdlBP0ZVrlFiVKQ1MJjsPy0EtAGQZtjZMJwcxBUqwI96KYinFIvK1MphenkxPD3HYM62KvLXUgF9mUFxarZGsMlC7OGUtWgxNVqu4aI2xVjJpYlMuV/fLcVXiL0CM4p8SVuS/dCdPqLJffREQLZ2rSzc01PnsYyVZq+ks77iBKqQGrPB90aR8JUeZuko+jKFrrDatud9/TaM+PSQSyeQ0RvzxBTRV/junf1/uV1MU3AKFIgKhSqdQd/Rw3f+NqXyWOAufKiKgvf3RDBEREWFhYdrkvHDhAjX8QkNKS0tTXHXyw1PfKhS3GvmsUonLZGqdS7IF1CuWzmbrTvmS6eEmvHRV/DiEYWJMMzAgL4WuxxW/eCnLyCw/NzXfnU7nzvqO6ekuun1PHBpGDODQ1ycOye2yJCaW8DgrQu4y+axcCHC9+T+y/TsITp+TxMTQDAzpRlDccj+awRC9eEXLy6s8S4MmsVi8f//+pUuXSqXSHTt29OzZUx0DxcTEINvRo0fHjBmzYcMG6rsq1dO+ffsgd1JSUvCv4vL6teJabTLXc0bOhxSnrK6J2L0C2QFdJEnJDDaHxmYRYGHQQYGl8xeKcnLlwoUuAyMKK0dWcwYP5PTrgyKEZCEjPgy6rKiI98cq0fWb5UZZIpGVlrMO1D1nQF+cRZqdDS1FJ7iZaIDSnJySeb9KcnNJz5IYL9egfRsMBgO65M0bYinhsWPHfvvttzNmzKg+OIMmn1YbHx/P5/OB3aSkpB9++KFv377qfMqnT59KJJKJEycGBwf/+OOPjXwWhLJPqc7PUNcI6jBEoz5+iYJV5jDd3ejOjnQ7W4a9LbEoCpslScsgbCu5bhBMuZKdZbOZbs0Yzk5EfrIIgyF+HVXeZ0j06HAYxkZVHFxDA0YzV6aLM8PejihiZ0s3MJTExlYyK7HQbQODctKkSadOnXJ0dExNTZ07dy656lp1G21hYfHvv/9OmzYNhuXKlSvDhw/v37//nTt3qo/A+Pzzz69fv+7m5paXl7du3Tp/f3/gMhuNreFoUoNjKpPVjiYV6/lwpkMABwCc4h98voKCso1bpUnJ5Q+AFObkHBSZTDm/vAg4r2zzNllmVrkJVtTy5CCMqkVkQqE0N4+3bAWNL6iMmxId6w1swdlsNozs7du3QZOGhoaxsbHfffddq1atdu7cqQRNMzMzGO6zZ8927ty5pKTk8uXLQUFBn3322ZMnT5Tq7N69O3zK3377DUXgX65evbply5b4lxqU2ajjlJrDh+/yq9+iC5erf5tRxucLDx5V+sicND1DcO6iNC6+ijvS1tdg8zqGtZUsv0AIA12VP6QpqaJbd8WRzxV3Mt2bGV85hw1JbJw49BnRqc0ov0gYfXAqXExZdk4VAAV2N9yyjl6/OIsGHoqMjAR0QJzkEutDhgzZsmVL9Wg52PHAgQMAaEhICGnZ//jjjylTplQ/UW5u7uLFiw8fPkyuthoQELB9+3YNH7qrp1nTPjCpsrYPxKfk80vn/0rclMLEUzp8RI7yp4BZvq2BSIJYY+NKZv5EDONQbBIowla+ZXa3gHIufvKUt+RPaVY2jcWknhbR2V2tm5vTtzf9LUT+kpOT4fxFRUXB5i5YsADOJew4/MKTJ09C0Ozdu5cKfYNQAVxAzc/P7/jx4zi0atWq/Px8mHU4ANQ3xZDh2rVrCQkJMPr/+9//YNAhkq5evXr37l3kPH36tOH7W8lDo9BR1XutpIXVyee6dYjTar98Bd3AANKbGAqk9EHqqi2MrqfHGTygfJvNpkMowOZq7lIyNdGdNL7clXF0oBsa0IuLNX8pjOnsxO4e0OCDuF6+fEkuTkn+dHZ23r17N8gSKvvWrVuHDh2aPHlyYGCgSCTaunUrLDI1E3f06NGgPdhlCBrYZTAiCUrIppkzZ547d47M9n/sXQd4FNXaPlO2b7KbRhISagKhd0QRRESRYgdBUZqoiMoFRAUL/L+glKvS7uWKIPwqWBBQVPCqFBUpAkpHSgIkpJC2Kdt3p5z/m5nNstnMtiRguDfnmQc2M2fO7M68837f+51zvtOkSROoBgieOHEioHzfvn2bNm164okn6lduR0qTMiPKMb4xfEq+1AS4DHG/KEoz6wUw356/MtoQitDjHbWvzfKmkCRISrp5wUCs02lfnxVm1snwi8ViATBJiJQWx83JyQFDrFQq33jjDakH/MCBA/Dv/v37X375ZUCkWq2WZjN++umnCxYsAJ9SGt4Gzqg0Un3ZsmUSIqUZjMXFxY899lheXt7777+v1+tZlt3lt+Bpw1LfOFwIRzRTIrgSD8Nrqa7IkpoEaZGIitK++T+qMaO9LYvmNdglyPg43dsLVA9dDeCB0BZmigW+CpmUqFv6d4XPwLn6KoCYLVu2IHH6InAYECR8BtUMlhdcSanvUdLXYI5dLheAFbzJQ4cOScPRz5w5A/9KTicIeagAmAZ+lfxREEBAisCUoIoyMzMB4lJqdFf13trwHgoOHpWsO03eMD4l2GVFr14EOJTe0WXiqrFcUTFpjAbZoRh8J5niH4RTjXqYz872dUN5qw3ZrGTz5oqbeyvuvEPyPn2dBGW/W7imSYiivVfBTgd2uUmjAeqD1SabJFyLHyit5IfE1ZmaN28ObCcGBmjA5caNG0E4S/YX+aTobdmyZatWraRYJtQ8ePCgxHzgfQLXgu2WMmFoNBpoENpxOByS17R48WJJfbdr166BPm+Hb3E6/Tany1Vzc7ndNTe3m5HdQha2enF8s720aeuyQcNcx0/67udqW/gboYAoHjBggPREwIjfJi7VA0bWm80CXMaSkhKoCe6gxHPgawJrSkcBhd5Bbq+88gr8aoCdtxcH/EjQTGKQVwmKR9oJWgoYFGqy4ZXgDzHQ04dNFi2yuPKirjFtS4MoACnwHYH5QCC3b9++TZs2SFypREpy3r9/fzDukgc5ZMgQkC8AVnAi09PTJfmcn58PXAhUCofefPNNJCxdEAXKHaAMWO/bt2/Xrl0llpVCQn369Fm+fHmPHj0aapyy+qqosmHGOo62DBm89G3QG6fULVksjaeMNNIZ8hINthw5cgSAlZqaCs7i9OnTAamtW7cG6IwYMcI3dgOP7MSJEz179qQo6tVXX92zZw+YcsAx4A/kuW+Dp0+fBignJSWdO3cOhDZQb9u2bTt06ACOpuQM1L1TB6Ha99wE2tkIygZaLl++DEAMmfoHZDgQqrTgbrDwBc+D7gbB5DXf9Th9sd5BKTfFtkaYUXYIj/xO8asECl4Gh2akt6kWCKt5iQYLU1An4Xz/GLGEDrKQpNRgvY6hDHyoDohEN0qcsrH8VxUayfay1KA1WX4K0tNzrfnSr2atCa/Bcmc99hjV7wDK4MfrxJFVrTc8psS4kSoamTKwjyhHa7ID1GvHl/KUqVAIDdI0Elc/DpO3ZFkTV1RghzPSLsGQVFEvVHqt859E2n6tBU0tOFL+Wj47G1yPDkHTsOGCK3xRMZnRpnaNcKdOO9d8yJsrkdNF6HXK++9R3jOskYFuGKb0ZSN5YSsnxmsSRiBR7PsCBZrZU40ydVqBIysr3d9up2/ujWusnBXyJzEHD9tf+1/+UrYnnZBSyf52GNvsqtEja1Z2f7nV/e2/UXSUolsX1dgxKIyFQnBDdTAaDjsGaTwkTQpP2WazESEDk2HHKYPjJpwoJi41WcdMECBF08r7hquem0z6hnmDgxIOutz2mbOYn/b4HzEaDDu3E9WjJ8yO3dbnpiEeS5N11E9O0Myc5ttXji0Wx9tLufNZVNt0zewXifqblN0IyhCgDASm6w9N6SLsnr32v73oSVZBknSnDogML5sUQWCOA0AL6dH8UkE4nIa9O8lWLX2/mG3aS67NXwrjibDwtahWLfXrVpE+q3w6V61xvLtCGr6umfac+m/P3rgQjPTEvwSODXeUEH1bP82iea6V73NnzwMg2KPHIztfyG5VA8QcS1SfHAgeAvfnGUKaoioClS8vl9KvXa3jdAoOrtMJbQoj0hvLX66+/X1HOc0c0JUM3O/ifcmCCHP67sF0r57Mdz/wuXnhcaTXJLPMj7t4cTlRf1HvchG+72t0NNkmjbt4SSBC2GhamL6YEF/t7nTr6jZEY7cb9ivuvuvGYsTatfCXEKRftQacdS0+TjluTLiVfaGv07reX+uPyYEDiPh4v52aWTNxRSV39hyh1RFRes1LM4i4alnOFLffpntvBXfuPNUmne7ZvZHDrtOj9/qUKPyBF9fLuYzgZ/iSd1m5Y94C97Z/e/LVkAR9Uy/t2wtqjgJG0lokVwrFxZJiyNSU/wD58h/AlITVaiXCGBYUJjRrh86QAI0Io4SQwcLJHT3GHj8JLiPVqQPVLoOIruu0vWvU/XiNAkyR9NaGUQdFvCJEmFiUrfmfCcprYlMaQXk9QRkBEBsAOlGt0kvdcCvaXlNYXyMgBvsyOIKJY42gbARlwwOlxWKtESO/Hta8XtBZa4zeuDC91mtt1w6LEcEx5BCNxkG+jaXhhYQsFmsgvgknzZU839Q3a14H4mwIbFqvA3vDrolqn6eljsa65s4bKRlBxI8EIYbDDI/tDO/keCeLHSz8ywPEWIw5MTkvLaRcFTCnVZAqilDTpEbclBShIAnUWBoCUwZimlq6mLWlzDD5yZc4AXAVTs7CcCYHC1u5i6t0shVurtLFwiEXi50cdrG8W1wtiuF5nsMEKVyEJoT/AY6AQhVNqimkV1Axajpeq9DQRIJGEaOmDCrPpqIaqKsTKb3WhRpD0Hl4hBqSMm9UUPI8KrKz2WZXVoXrYoXDzWIzwxfa3T0S9JjAf5Y6iuwMLTZEkQRFIAl2pNg4oIsDvoR6GLsFBsXAjm7MMyxSUWhgC2MTDV1oZ34rsFrcLGDUoKJT9Iq2sZrWBlUrgyoeAEs0gvJagtJstgTwIFHtsHjtAMryuNjOnDE5fy+yXSh3AQTBOt+TFvtwRqxOSZ0stmuVVJ7ZBYDrEKcBM/37Fdvmc6ZhaTFtjGqzm61wsW1jtYk6usTGHIPKNNk2Tr0723y82D6wpaFjnDpZpyywMi0N6nyLi0PIxXGHr9jyLe5CG0OTRLSShA8KikzQ0u1i1X2S9e3iNHFAs0RDRF5EEAzHo40UiziSGJBfSzeGT1nh4k6WOk4U248X2/KtDIGRRkEmaJQGI5luVIGZLneyaoG/sFZJmJ34rMkRpaLgLDvLnzE5WhlVUQrqRInDztgAr0CR0SraDTadw8CIZU4WHFCNggJbnl3pzK50uXi+b0qUhqaVJGFycGD3SaBbhI4V2eAUs5v5Jdey67IFLt0lQdspXtM1QQuOaaMvWF+FrolZiZxqjlOrORotyLxbGQoMMFvMP2WH3NGcStfbh64AU8JrD0QIlHZ/m1j4gyKI4yV2sOPpMaoyB3u8xKamSPAvuyfqdmWWD0szKi4SpQ7mbKkdmtGJ+mVndmX/ZlFamtiWVX53a6MOsIjQnyZ7c4MSoGlleS1NgRIC9CfrFHkWN7id4FA2N6j+nVXeyqhuolMA9D/7sxTAmlnmPF/m/CaLWDW4pVahvP4sWBdqrFMC6QiNOw4rVHn1M/XKK6+GigRdJzse5CyDmjptchRZWckrdHN8SpSyRbQKBDXDI3AKz5U5uibqAEOxKsX5CoeGpoAdL5YLtAeMeM7kBIZjMD5V6qh081aG219gLbWzNIlMTtbm5ksdLNAtiKSjxfbm0Sow0wVWcDIR8OieXMulCmebWJWomfhotcC4cDl4H8QlezBw6uCWBqpRsNej+q6sNIcJtXDQiSLtXQwboEeKHAsPFjgYYWkSoLQWBlXTKCXL8qkG1a7sShDRd7cynC8DCHI5ZreN4VUU4WQ5Uoj6CI0ASyopJCxnRyJeSAwitM3BJwIBaoGDWVGbQ/UoJWljhGSR0L6N5QGpsWrqlhT9n6VOs5t7sE3MjpzKXItbQQgLjJOY+J9+KTcl6a57zKsWXYt1zRuNcN0SDYQiSG+FGwaUgJl/HC3+/mKFxEmgvsGtHN85IVmr3JplAkUCKKEpAkxtnIZO0ikSdYoEDQ2uHigRDU3CWeAgChPKSU+jWGyEE9cVB0TaxeARwLHEwRTbWFBUQJ/gbvI8FoOaJDiaSproFKfJKnc5OR4gCdR7S9OoOTc3FV2ARlDWGyivTrEN5DL6/OmPpYh8yoDzdwNjVDoFUFFkB3vKtDaqo5QU2Fmv13u+3An2t0sTfYxaiCz2bKJJ0CqMakqvoJQUWTuLCj4ryyErw5fY2WLwR02OEifrZAThD9cC+06Iky8ITBg1dK9k/SmTo4mWBje3Hg04rtvKUfWWUQ3Xz5BeWYkdpE6DVt9gha/YmENXbHvyrLkW1/D02IEtDdsyy+O0Qli7WbQKoACiu8zBgdCmCermpvrwI52BCjiLNC1E1OM1dFtedQGEPY9ax6h7NdWbXVye2ZVrdpkZrtTO9E7WgyPx4s85IID6NY3qnxoFDK1rlOF19ykrKioD2+tw+r7rZL4DVQaQHSq07y2wZZU5KxmOECwsD07eox2aAFItDFdocZc43CC0gTit4EjyCHTxW/1Tmkcp6xiW9y1ZFa45e/JNTiFOGaWijEra4PENlC6OT9QqQMJfLHdQovmOVpGtDep+KVE3N9XFqq/H217/E71x/QxXC8CX4cbVGxZTwjeyM/wvedbdeZbzJicv7hLMIil4dUU2dmd2BXiNZ8scpTaGFfUKSXg6acoc7MUKV3BQRlpA0JS5GBBJoIcqnWy5neUqsJImk7WK9FgNwPGy2Sn5uPDamJ38UZf9WJF9R476rhaG/ql6vZJq1OS1YcpycaEAvzE4ITlSbk8EzBRof1Yl8+nZsuMldicjiGGht0RMEyA4WaTw4EEv8+IeITaEhaNgvoGxWhlUCVq6d7IWhEg9pvo9V+bcV2AtsjI5Fhc4EsJ7ICxChnjOszypoO6rXnXpGwqLNCNCryLbx2rGd4xvbVTV2tesy6ChsM7F9Tx0MkyCDMmsDQuUdhYX2VngvEI7c6rUebDIynJVFEqK0BQH+KhEIIINbWVQphuVrQ2qGDUNrETU2aGUm6WOXCxvdnPny1xnTI48q9DrWGJjHKzwVQgRiOKZoodOEj0TdV0SNKlRSrDgiTqFtg4jjv7bQVltlw9AazcaI3DUPAK3Erhy0aHiw4WeGcDSwp9gEG9K0t6SrE8zKuPUFB3hyJ26j49keQz+bmaFC+TX3jwreLckEsMXhPDCtI/TLOyfct2MdsSorUMvTgSzw8IDIgo8UKPhqm/BSgvDeZCoIai+ybpbmupaGpQGJfUXumrAhaDKYeudqH2kXWy+1b0vz7qvwGJxCW4FeBdEoxdZ95ssE570SasSTn93zYSlNSOagWqiwAmeL1W6T5ucgMKuCZpbknXtYlWSJQwS5gQEMxz2uHsyEb+weMU3LqumAwY7AZ2JWhq2LvGaQS2if823Hi2y5VldoI3AnfgLWDASRkR1GBMUPjuiyAeteRLtllUthipjhSO043U35d5Dbg5vz7aUOpiH0oxxGiqcE908Plbq/qPQKvmWuOoHA3d51hPEnlsXMDQt0ZwYHOcFziPuamlsYwC1HRYSSuzszhwzEObDGTF15/L/alCaysqkJ+1LXYTn6RDeFNFegHr2VNX36/WpudMvPZb3z6o+IRmoiaDkrQwfo6Jkj9b8eW4ebb1QGaVRbj1nyq50KYRvh8Vsr4RHvHtes2qrQWMCEdjPZZDEPuHi+P7NotvFaa0u5vH2seGDDGSQUUWr6drMAo4AWIGO+t1WWRkhdwP9jJjsUb+2/UZ9SX/W6AXEvjt9//SyHvak17mKN9L3wn5rlPoyCvYsUYr96tdEfc0+JdnFTYOteIoxWGovIkNfAqEdly3vHy8GUdw+XkN6bpOIR8Lzcz03QMJo1UYQfnEH8W9MgKhSUWSHeN2lStfGs2VZFa7woZWkU9QGkb53KvgKwOE0EoojcS2D5IHoUKYLWw4JMksg+2FM+kB6q8qAEgcGJQ4flDg8pGJpC3LLsE/x3X+81PnByVIFSf6YXZ6oVRpUlAeIpAd+nogN4fWUPQRJYIkWRawSHl+UEPVKgk4B8v/PEhv8ufxI8flIcFknPAXfwjDKsrcoojpVh3y34PwS5kPHPo3JgbKqPhnI9geiTNk9gb6E7KiQIG9bEO4MdAcvmt3rTprA2ipposjKgJ3tlqh3cLw0Go3lsDB9kRM2+NP7gRF3Mt460sYLlWEnXKpTgrbI5iqyuUHQ5JpdK/4ornBxDSAkEQGPhkRn8DpB3oUwoSkLpOBYkurTvpgMPD7IP/P+1eVIcHXBHmrpp4Drm/gPS8c1faeaZzk5/OGfZZnlTkGY88KgySOFtqFpxswyO00JfS1YdCiFlNW8EOmUCFJyJb3/CnNtkaem9IMMSgq8SXBPsSh9SIq4UOnceL5ifIdYNRWJ5xfUa7RYLAcPHrRaLCRJho3JEEtRBTJ0vjVZlr3rrrv0en0NVzLgL6txKNwn69npJ0hQdZAQPhW8fd+yY9qC+AFB/ow00BrJZHb/1kBuf/Rn+dFCu9AbKUIKqA4w0zJGPa1fM4SvIptHRLyCTFTLLalJoMs2xspyPkEkpKFJjuGFZe5FnAJ2KUR8db4sVkmObGsk6sJzPiUvN3fC+PEmk+n6E+6hQ4c6duwY/j0PR1kH2xkcM9h/D+29qh/H1RTjvo1UAzvCn2z4ZP369VBz7Nhx48aNlS4T3psUMHIUfME8sLE/59u2X6z0+IoiImPV9APt4g6XO8+YnZRIixL9cRj3i9e1MahlmzqSW5lpZSji6o2BL98jVjMiI+6DY+ARcLT4JoODuiWzvJVB2auJJnTEK4xnGx0VNXz48M8//9ztdqemprZr1857l0ihT53ghX50DJ9tNtvhw4cZhuncuXPTpk2B6nzJj+d5XzqEAqfQNL1///6KigqVStWyZUtoX61Wu4QpcTyc7rtQczg3XPZQwGVkq4tHGXb0w08Ns0z73qjgcqnan8TV673z9jtvvbXg3iHIzeCpUw/D7rFjx0b+PhFhvK9Xjx0tcX542gSPQxyZIfRJqmnymR7J5RgDIkniqrARTTLmg1lVH3nuuRBxotw5KFH/YEbsh6dKKEk1EcLI38WHCt+9PbWZXlHtS4fdR1VNpycnL1my5Oeff758+TLY08WLF0tw1Gg0VqvV6XTqdDqOAwoncnJyBg8eXF5ePnPmTMAxAEuhUCiVysrKSrgnUN8LU9gJ9bOzs6FladFsQPyVK1fgw+TJk0eNGgWVYQ+0HFG48WqMN0xexEHJUq6Gb1OknPmu5ncG/x5vi4icORV/s43fvg3fOxQvWLCwpLSkusQKS6eHp3iErdjBrT1dVuHkJERK/XuDWxnjDMpjFU5C6J70Ed2iu0gExWTVv1KMCAFrshgdMNkzEnW3pURzoncuSXUbi98/UVovogfwp9VqaXE5KeAzvVhgz9mzZ+fMmTNy5EgAK+wBAAGxSUTi/ZOiqJ07dz7zzDNTpkyBFvRVBaAM1Hvvvfd+/PHHwIvSfTabzefOnQNAP//884BIvR5aI4Pf4XCDcV6dFFhTB1HGNXBfLSSEa6LB96yaQQTp8+LFf1/w1oKXpuF3lmDkRpQSzXsdmUxX3ntv1dWzwtDp1ffLhyG8383K4DWnTd6pW0gQMfjW1Kg70oy/FtvcHKY8LO6LtlAKRPId0dUBP9BIJcOdszEj2sc1N6jA7EkNwf4/Cu2bMivdHPa7MyFLSPr/448/ZsyYMXDgwNWrV4O9njZtmpQ91NdeQ/1vvvlm9OjRDzzwwLdimT9/vnR0+/btDz30ECA1NzcXUJuSIqRwv/XWW998880hQ4bAiVu3bn311Ve9rQUIN+GaPyt0pAVhWaFdM4bop1h8ECVtuFqcMuhbIhNBXLxo8aKFi2bNwH9/R0Akgl9qR9364EdH4o8+/CgvLy+QV4tw5Fm80NWfuDvPerDARlR1vrhZnBqlHNkh/ozVbXJz0ghMXP3Vw6GhSfCeHkhB3PDiB5DvOVZ3jou9Lz02SkFxnCfMRhPENxfK9xbYgsT/wgnH+BYwzW+99daIESPef/99IDZp56+//gr489YBk33ixAmgxgkTJnz//ffe/cuXLz9w4MBzzz03fvx4+AB7WrVqBS7+nXcKa6ykp7eZPn36Rx99NHXqVPgT+DUvL7cWpBgk3BgoaFiTj+Qet0yYhZY7gfDVH7JtLVy4CFzJV2biBYsxAivhHfXIozkv4y1fm94Fp2bJu7UTa0EO7cy1fXTGVNVlA64k0oEibh9/heHPVLqkHnBUpW+En0dIHY2EEK3E1UfxYOQ7C5HztQxVhAmngD8wJFk/rlPCqqNFPPKE2aGZfxwtTtRSHWLV9dKFvWXLFi+BtW/fHiz76dOnwUGEz57nRNNQAYDrrda3b98jR46Ave7Wrds777zjhWnv3r3XrVsHuNy1azf8yTBu+Apara5Xr94S6VqttuCeYuiunapAYHBNLWu15VxYf1zSwcWib8+19/OCBQvefWfJay/iNxf5IFIqLpTWFT0xDq/9+ItnJk9uk9FGZpHQat3PyK9LPdB9gUMXzMz6M+VgN6UEU+KSivi+tnGxBuXPxbbWOkValKoq7iWcAernZKVToE8SFdrdhwqssWqKEcauC6k1hIneBNHaqIIL6Giih1GjpSkPTWJx3ByBnBx/osK5t8R+RxPdLalR+/MtCimqJsw9R+tOlU/rHpfqFT0EUQtQCjPMqww0eJaTJz8NVvv556cCKAcMGNCpUyffHmSpWrNmzV588cURI0Z27twJQHnfffc1adLEC0qQ57Gxsb5GH+gWtA5wJ3wGfzQhISHQHQ548z13VF4+B9tZXaFj7CUFIgjeaCSTsMXXoPufPGfO3H+t/BfQ4byFGDmrI1ICmRuBTf/sCxt4nB+sXSMNgoikg1V+P4iblcdNJgcLiBTZELQI3zNJ371p1P5yh53FTh53MqqA8HJtDCVmr+AwYVCQJkGU4HiNws3xhVa21Mka1XSFk41W0lIGIlJkXEJMYQWQ1dNEmyi1jeGy7W4XT8QrqUwrs89kBz4utDGZZQ4lRUr+wCmTY+WJ0jk3JWnp2scuAU8gaOADuIBAeKBR4LO05+abbwaChBsCYJWwC2XQoEGLFi0CBj1x4qS0sgdQYNeuXT/77DMgTjD9X3/9NcOwa9asUatV0jN98835Z86cERxiipo+fQZcMWKrVYMaAwjs8OfXYjmx76kb2cjt3bt/AkTOfgHPWySHyCqybNoGTXkSb9u27dix46g+iosDcVNWamfjNAqDmjaoKY1CGDDxSKeEk2ZXmYtVU8RlG3O6wnWw1L67yKZXAOehHYXWHBsDmAMrDHu6J+oAeqlRaoOKjlbTeiV1Vytja6MaboSLx78U2zZersyzM811AncqadLC8N8VWC/bWSVJFLu4XDf3SMf4ZL0CHAajCr4DDUC/bGa/ulDJ8LUfZvbee++lpaX169cPqE5CJMMwoFTggze+nZSUtGLFiri4OHAoAXySTQcihJotWrQENAP/bdy48dChw3Pnzo2Jifnuu+3Tpv3N65tmZGRAC926dV+/fsPjjz+OGnyhg7wfvkOYxM9o4+cb26aj+XNqWG3/7j80Yyr+8BM3iKHPPv9Uptkar5RnFFOAbjQ7T1AU2bGJ1jMPR1DcfK+kKAdB5Dnc0k4JfC20yvQodSu90s1Rv5scFjtLerxATAnjM/BlsyvNqEo3qIrsDDig3ik0SpIcmKhrH606Z3bFKKnLNne8ik7TK86Y3cDNFELHKxz947TD02IzK5xk1ZAj+MZuRDo5oZ3ajYAEhP3www/AiHFx8VWjvzyWV6FQVkWtyfvuux9QBZZXo9FU0wRCdyoSo5Va2F588aXbbhswZcozmzdvVopLpUPlDz5YC1Y+Ojo65ECNEExZy067YJkIZGPhkTElmJXePTGtE7V2kMIgYwqa8RzesWPHr7/urfurE00jHYUOFph/yxe2Q/mWI1dsv+VbQGUABVZ1sAr3rlOMJlFN/V5qy7czFQwviXFJLXI8itHQ6THqSjeXa3YDChM0Cq8tUZKoZ6zQVbOr0FrkEDzPKJpM0Sok7wd4N1FDg0Pwy2XzwQLLbwXmg/nmA3nmvXlmA03UxXxLRBjvs24kqJyEBGGJ84KCfN9qzZs3B0R6/wTMAZThiVy5Uuhb7aabblq9ek1iYqLb7ZYeM8h2QCS6cQrpG7wIGWkDi5AIXnI4i2870NNP4o7t+WVLl4GVCXIVv7CWX3xLqkMiPKGdsV+KXkhGhQWJ7eL4PwotmSX2DL2KrYpRWFnewXLf5JnznVyhg7UKEw49rx1UAa0NTYHlbSHOftQpruY7JcWJlJ9mV5Q42VEtDM10io4GTZKGLnNzqGrYaa8Y7bli++lSOw+A5YURHgyHR7aJubelnhTjFXXesNRhCJ5fv363Cq/Hrl0ArEDPonXr1gBlqHDixAk/sunRo8esWbOqhl8wUndlzTGKYT4IjOSfmmwLsg37/cyQp0TGlEajsbBIIMLQhUXaePTYKHzq1KkycXB7HQsI5FHphgSdQgpzi/IZ/XCxQk8QTTWCEwJ7TlY4f7hiOW8FhsA2jud9YkM8FtJckQRZaHOnRCkrXZzf0BwA6AWre0ue4FZqKfKQyf5FbuV5s5sSQpgoQU1VWNw7LlVoFWK3tGAx0a2pugfTouueyheA9fHHH4G/+PTTTy1YsGDTpk2S0Dl79qzUKyNb1Go1iB74kJ2d7dv9LZWJE5+46667wL80GmPQjVZofzkU0KEUPqc2S826KPbBhVfy8oV7B4bGb0C87FVC+p3JWvKF7nErjpmK7KyAS5LIt7izTY4uSVoQN1AbBPjRcpfCM2ZNcAT9nlWHeC1ocBDcTpbHNbqkVSQB3uFPRTYdRZS6uTOCiScwgZUEeXO8bvPx4jInqxAdAp5AaTHKxzNi4FWp+zojH3/88YwZ0/12du7cecmSpdIAs0Du2lNPPd2sWfPx48fL3tiVK/+VlZWZlJQse5PrZT3a2k30DvlnZEyZnpaeeQEVFoaamgvcEYW+/AStXU8MHjzYYDDU1zvUzqgYk2FUCoYYifDAO7IrHHY2WaPgxe7paAU5vKm+T6y2mVahIP1vPJyipkmKAHFN2BiuZsQMNI2Nw6crXSz2REMxJjoa1eVm97ESm5ShBU6LU1MTO8Sm6OphgjJoml27dkou47x581u2bCntB08p5H3r3r37K6+80rRp00DBpr59bwUrf8MxJRmW5a8qPXr2KK9AfxwFVgnaqh5t2oAemUjefvvQOXPneLuzwnNBcHC/5+ZE9cNtDRLDAW5yKl0H8y1djWoNJdhZg4JsqVXqaBJg2tGgFpNLypSbkqOaR8n/BhAt5y3ufDtLiXLeqCRTVfS/L5Tbq2QTYHVc+5hOsUpcHwWuCEZWEi59+vTxIiwnJ2fs2MdLS0uD9D6H7GcP4sEGv8lh7pftQ6/FHfDzQCNjSvCgQdbt2B3Ui9KgLz9Djz1BDh48fPWa1TpdPWe5pUk0pJluQKoOi0ZaTRFHrlgrLe62UULk/IqT21Fs+7nY9nW+pbVemaQmGblRa8CXcRq6Zgc/ujoEU+xuJoi2euVvuZVHi2005akwJiPm5kRNff0ckDX33HMvWNisrKy77x68f/9+YLjp06eD+37u3Llly5ai/75CvTBzZiALXLPA23zmzJlf9/456VGsUMvN7ocn50ZPTiGTU25ev2G9SqUK1SSSDUwGPwR2Oc2gvGRhiwQ+I2wsb3Vx/VKjrrhZJ8cXudg8OwvC2cII/r9VyEqFmmuVbaLlqfFEucPk5knC/ysCLkGGt9YoNp0xVYA3KeQNQjclacZnGHwTpIaZCiaI69lMLMXFxXB7e/fuvWDBQnATS0pKDx8+VFBQMGXKs2HGDmvR+R55npZa+prBpzP4DZeMOMPn8HuGg1v5/Q6EtPK3ilCixETkdDql4O01KnFqcmy76GSd0HMDRhyY7EiBpVuMBvQN0BtIFvg3184WOzk69KqOhOwgN5AHLTWKfTnmQotbRZNuHneIVT/dMVZV30lj4NUdN278V19t3bVr9/r1G/r37w87H3rooZSUlKFDh/43MuXMAEwZiDVTU1O/++7fWVllY0fLvavCDBeEnWjl6qL2Hdq3adMGRbp2RNgMGqsiU6OUx0odbk4YUml2cQNTDWYMBOnp9SerBlaCZxmcKcuqmPKq/sConUGtYPEXZ0pZsas7Wad4unNsqq4+sy/53kGApjDmV+Fp32A0DBs2bNTo0UFeqXpJIx3hEPTIUlUF3BO4vpj1MfLXesLECbt+QTt/JOTJ0okeegB36YSWLlnKuJlr+kp1jlUOaR7Ng1KmycsW94lCW5pOSXiGmnvm6BBhT1rAPoYb6LCNTnnsipBXjRCTrU3qGJNhUFyLXwGa5vXXXpPGTHgLALRN27aBXl2Xy5Wbm2uz2cJp/+jRo7PFUlEjw14DVd9BXuJAcmrEQw81a9Zi0VJCiKITMmFzVQya/zo+efLkin+sqIUeDdThIVt1eAvN/WnRPC+8XhvPlKhYlBalFAOpOFIr6zPSEmVEKS+W2PfmmkmRpcd3iO0er6qHXpsaEhiA9cKMGStXrnzwgQfmz5tnMpmC352zZ88+9+yzt/XvP2zo0IEDB456+OF9+/YFPwUexJrVoDlXm83mOt7wSKMlstcIfhjVbhH66OjoqVOn/vQL2vwFgfRyNezovpF40lgMZAly8pq+VRqKuKeFrnOcGqjRxvBHr1g7RmtIovYRbTgxRkm2UCsO5FvMbg7kzb2tou5upr1GqzeBvmEYBhixqKhoyZIlQ4cM2bZtW6DKP//00z3Dh3/66afnz5/Py8vLyszcuXMncMTGzz8Pbtw8DERek0UC6j1NJhnec/KH+ujRo7r36DH7f4mKAhDDNU7gBb585++4Qzvmb1P/dunSpXqJ6AXajEriuc7GVkJ6NOL7SxVZJfaOBjXHX+2pwuFhEVfZbjj9Qqn9ZIkwo7y9UT0iTa+hEL42pWXLll9/8817q1b16dMHrp6ZmTl+3LhZs2ZJMxV9S35+/owZM6R54uCsDx02LC0tDYm9lLD/559/Djk3qI6MWJdHFfxwbUBZE6MURc2dO/dyruKNtwgkOyPAhYxN0Pp1vNORN+mJSfXS/R2kJKjJie2jEzQ0cNsvORWdo1UxKorF3uRWYdluaYn6ZA2t4dH2rAqGx+3iVM93EfoSr7UXNWrUqPUbNsx88UVgNXhqYGqfevLJgoIC3zrr168H7xM+PP744xu/+GLt2rVfbNo0YcIEycVctWqVNCwoSPHGQ6DmH3/8Ybfb/xqmrLVPGRKXvXr3euqpp1a8R3y3RehUlHnIVtS5F9q0AefnnR4/fjzg0u/9rbf3UuSAdgbFYxmGKAUprONZZE/TqwgU2RpJvDCAjegRowF9k1PpilVRo9KjEzUkvi4lLi7ulVde+Xj9+ubNmyNxhtfkyZO9fAkfvvjiCyn6Mf/NN6EOIKxFixYLFy0Cz1JQM0eOgE2XmMdUasrPL6g5WbmkpBhEz9w5c/recvMD9983d+6cAF5mHXkRhfQarwkopTLjheldunZ97gWyOFuIBMng0oJuH4K/+hxfyDw8buy40tLS8B2LWrgo/ZJUD6YZ7Cz/8enSZIXQ04gjeM2ERRrbRatohv8lpxK0+9OdYrrFKdH1KhcuXID3dtCgQZs2b+4oTs3Zv2/f38UMBVAcDkf2pUvw4Y5Bg3zzWygUikfHjAHDBff2QtYF2LN7166RI0e+/NJLV3sBOE+n1qQnnhh8153vvfcvYFyn0/nRhx9+++0314AUIxj8Uf+g1Gq1b7/zdmmZftIUgnUHGKVRhctLF39/9JFHL128FNyRcTidYFYil3ie13BoM83QVtF5FtfZYnsno5rnw72FcK5BSSYq6a8zy4ocblD0PeKVOOK53bUpIKjHjn38kdGPPDJ69PLly1u3Tnv//dXNRL7csGHDqVOnqtwQqfunud9kba1WR1HCrbdYrbBny5dbTp488dNPP4HolupIfetQsrKyhAiowXD//fdL44XdLncg6xMmKUqzr/3dRxQZNdYnKKF06NBh/vx5274n5rxOCGRJyuPytsF46+d8ceGpMWPGHD58WJYpgSdmz549aOAdA28fCLTqJ9tDdYh5Ni2NHk3XpxlV32SVgWvYTEsz4VEy6KLuMRqz1f3DpYq+yfqHW+tpAkUydbuWBezylGee+W77dxcvXjhy5Mj8efOWL1+WkZExadIkkORWq3Xzps2+3Qc5Odl+VgKMMsexXrU2evQjQipkt2v5smXSngEDBixZsjQ+Pr53795Lly7b/dNP7y5ZGhsXJ5Aoz9VOIPvqQ79UlnVcWLIeQCk46aNHTXl2yqKlxHtLCaQLICssqN+d6MdtfJQ2+5FHHl2zZo0wLtXnJTOVlk6cMHHTxo/uvjPrsdGXcnN+HDli5AszXsjNzQ3HDfUltCgKv9Qtxs3yX50p7Rmr0ZAkF0riwFfRK4TRQD9crMyIVY1rG62lCIxR0LEw9bMBTUpDx4ECpSFCIMBhf9++/WJihJmyhUVF8KdeH9WtWzf4c8ePP4pDhzywYRjmqy+/4jiOJMnYmFj4toC8YcOGw6Eff/xh27ZvJRM/5rHH9vy6d+vX34CtT0lJLSoqyhezRURFRQeiSfm4qqymrhsvXhNQQpk9exZYhL+9TGxaHyByiQTd07U32vUDf99Q29y5/zNmzGPHjx+TjsBdnjhxYlbmoW1f8itXCdPJ9/3Mz32V2/btp8OGDlu5ciV4VDhoslA/QkvRkk90MJ4stbtdXJcYNY9DxYUw6hOn3XvZXO50T+8Sk6ghvDGiOqZ7DllKSz2pAIcOHbps2XJ4YxcsWAiXLS4ucjjsXjbSaNT3P/Ag/AF4eu7ZZ3NzQYZjQOSihQsP/HZAMlm9eveWopLTpk+Pjo6GmzbvjTfA+nt6ZWNjwfWUPv/zn/9AYmaiLl26yNOk/A+WIcV6QWFt+r5DQ5skB9w+4MTxkytX5XRKQ+16CrO/ZYob6aLRyJGoWQr6amvO2nWbM89nut3uN96YdzHr96828rffLXAqVNNo0e2D0chhOD/fsfK9PUAPiU0S09PTpZQdgXrHfQ+l6iiNgtqVYx3cwpDnZONVdNsAfd+/m+xRSqqtRrHhZPFjbaPbG+hwOt/rAlPfloDG1q1dCy/VpUuX+va99ZkpU3Q63blzZ2e9/LKULe3OO+/qf9ttSJwYvueXX+AFhprffffdl1u2rP1g7fbt23iOo2l6zty5PXv2lNpMTExUqVXgVlZUVICKT0pKbN26tRQ5BxyvWb165T//CZ+HDRv26KOPUv4RdULSz4R8KPcaezPSN8ivHgyrSwEHCF70M6ePfrqOf3CMCK9A9lKPii+j1WuJTz4nzp5HqSnosw95sO/+p6gFKv9hO5rzBnn4iMAls1+Z3bZt23BAg8QlI1aeNrdPiEptorGx+L7UaNkw0IaLZWl61dHL5jgFP6ipKjCSrkm0Eizv66+9tnbtB9K7nd6mjSE6+vz58+BrSvACMZ6R0U6qvPfXX+EOZJ4/79sCUODzz0999rnn/Fp+/fXXPlizRvrcq1evDh07wk84cfz40aNHkTgu/eOP13ft2jV8iX19EFnPoBQjYSVPPDHp1Mkjn6zlRz4umOyAP0QhYM5WiDIvoOQklNhCmAApj2AdcpnRmnXE4neICrN+/PjxU/821X+qgJQexGcFHamYGbzlkmNYRgJLoh6x2pq4Ast+2GQvNbuPF1RObKuniIC+QTgLTdcisCLNEV24YMH//d86v2ppaWnz33xLmh3mLUCfGzas//3wYZPJBATZqXOXh0eN6i0abr/bhnke2ly9enV2drbf0Y4dO86ZM2fAbQOQXPaV6wa+6wRKyUF8ctJTx48d/nA1/+gEhGw1pm/5FlpEJxtqhiQlDN8syEIL3yXeX0t07dpz/fr1RqMxmF30fh8X3lPCP9UjSREARoUO5t/nSm5PVGipSG5cPYHS827w/G+/HQBTW5BfIKwUTZG9b+oDqtk7ZaemUbKYzSRFAeEFj99evHjxwIH9R48es9mErIIajaZnz14DBw5MTk7+a+nwuoJSCnPMfGHm999/v3QRnvYyFiiQrY92wbQq0Q9fESMeJ6bPeO15f4NVlR+pBlyyrHyTGKODwDlWIQcB9sy0EQakpUUr7Q4WOW2gjcKN0dcvKKu3480Z5BUlXubz/Ro4ePLtamLFk3pEmoYrJa5uCHSIgjJV/Rewrf9c+c9Zs2ZPn7U5JxctXoAVmgDWOaLiEoB3993YEE0UFhbK5VjCSC4kla4jypx2SqM9VemycbyYt1/IyZaopjOilTTjaKIhIlUu9RbArN7OVdmBsXwnSfV84GF8PU8mT7Jqxd8Gjkh07VaxVavVy5cva9q06dLlKzIz0ar3cEqroC5mWKECgSlfn0VcKUK39L0l8BKL0lOoBs5YgqFJtqNRedjkpMUUwMAyvePUSSRrU+K6g6n28jvSy/nwXxD728Bhdz3ilIHKrFkvL1+x/JcD0bfdQX67WQxhKuuASDWaO5t4621i6tSpQ4bcHeSpyG6Mw3arQRmrpDgs9N+01NJtlVjI31y7qHcd2THSlC7++bdDDx9uBGXAMnLkiM2bN8XE9bzvYWLKk0RpkTikKNLL0sL26svE/L8T06ZPmzV7VkiXTjZXD+ew9jYCMWKaQH2NSt7l8OuGRzWiw3/hFt5o0v8oONZn8Dx4AYV4/wP30zT9wbpjn27kDFrUtSsidOHlJBKDR+D8Pz2ZXLEK9M30l19+qS4Kw0DiywzVQkN2ULj5cMZr/HXlPwNhDUV9ByonTpx4++13du/a3e8W9NosPGQoFuJBjqCpLhVCfrMnnyI++pR4AST9zBfqIZjKUyC1dXJXJRDRCMr/LlBKZevWrf9Y8Y+zZ8/dfht6fjIechfWJYi4dIkRTVwtBsSwaNIkYv3nxIsvzpzxwgzUWBpBeY2K0+kEaP7fug9PnTqV3ho9/BAecjfu1QVpDWIsvcrjtJajZyYTn2wiwGSDK9n4tBpBec2L2+3e88seQOevv+4tLS1t3gx16oDbtxWGa9BqZK5An31BnPwTzX5l9tSpzzc+qkZQXtdSXl6+b+++3//4I/P8+dzcvJKSEmFuGkn16NF94sSJdwy6o/E5NYKysTSWv7KQjbegsTSCsrE0lkZQNpYbrfy/AAMAljKPmNJpl/EAAAAASUVORK5CYII=\" data-filename=\"Hotline_BN.png\" style=\"width: 220px;\"><br></p>',1,'2019-10-28 17:39:22','2019-10-28 17:39:22',NULL,1,NULL,NULL),
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
