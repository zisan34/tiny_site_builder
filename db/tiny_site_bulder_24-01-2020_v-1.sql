/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - tiny_site_bulder
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tiny_site_bulder` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `tiny_site_bulder`;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `album_images` */

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `albums` */

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=active 0=inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

/*Data for the table `events` */

insert  into `events`(`id`,`user_id`,`title`,`start`,`end`,`description`,`color`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(22,1,'Test Event','2020-01-05 00:00:00','2020-01-18 00:00:00','Test Purpose','#8a0060',1,1,'2020-01-10 02:17:24',NULL,'2020-01-10 02:47:16',1,'2020-01-10 02:47:16'),
(23,1,'Up n run TSB','2020-01-10 00:00:00','2020-01-11 00:00:00','Make the Tiny site builder up and running. Add this to your CV','#ff0000',1,1,'2020-01-10 11:41:21',NULL,'2020-01-10 11:41:21',NULL,NULL),
(24,1,'Test TSB','2020-01-10 00:00:00','2020-01-11 00:00:00',NULL,'#c40023',1,1,'2020-01-10 22:37:35',NULL,'2020-01-10 22:37:35',NULL,NULL);

/*Table structure for table `footers` */

DROP TABLE IF EXISTS `footers`;

CREATE TABLE `footers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `developer` varchar(221) DEFAULT NULL,
  `credit` varchar(221) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `footers` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `general_settings` */

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `header_footers` */

insert  into `header_footers`(`id`,`title`,`subtitle`,`developer`,`credit`,`welcome_message`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(1,'Tiny Site Builder','TSB','Fazlul Kabir','Fazlul Kabir',NULL,1,'2020-01-10 22:46:45','2020-01-10 22:46:45',NULL,1,NULL,NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `logos` */

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
  `relational_slug` text COLLATE utf8_unicode_ci,
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
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menus` */

insert  into `menus`(`id`,`parent_id`,`level`,`name`,`title_attribute`,`location`,`relational_type`,`relational_id`,`relational_slug`,`link`,`order`,`icon`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(1,NULL,1,'Test','Test','primary_menu','pages',2,NULL,NULL,1,NULL,1,'2020-01-10 21:39:38','2020-01-10 22:25:08','2020-01-10 22:25:08',1,1,1),
(2,1,2,'Test dfsd','Test dfsd','primary_menu','pages',2,NULL,NULL,1,NULL,1,'2020-01-10 22:05:27','2020-01-10 22:25:04','2020-01-10 22:25:04',1,1,1),
(3,NULL,0,'Blogs','Blogs','primary_menu','post_category',NULL,NULL,NULL,1,NULL,1,'2020-01-14 22:08:37','2020-01-14 22:08:37',NULL,1,NULL,NULL),
(4,3,1,'Personal','Personal','primary_menu','post_category',3,NULL,NULL,1,NULL,1,'2020-01-14 22:08:55','2020-01-14 22:08:55',NULL,1,NULL,NULL),
(5,NULL,0,'sav',NULL,'primary_menu','custom',NULL,NULL,'https://www.youtube.com/watch?v=8kqrDGQqtmU',1,NULL,1,'2020-01-21 00:13:58','2020-01-21 00:31:30','2020-01-21 00:31:30',1,NULL,1),
(6,5,1,'afs',NULL,'primary_menu','custom',NULL,NULL,'window.location.href = \'...\';',1,NULL,1,'2020-01-21 00:30:40','2020-01-21 00:31:24','2020-01-21 00:31:24',1,NULL,1);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

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
(74,'App\\User',1),
(75,'App\\User',1),
(76,'App\\User',1),
(77,'App\\User',1),
(80,'App\\User',1),
(81,'App\\User',1);

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
(10,'App\\User',1),
(11,'App\\User',1),
(12,'App\\User',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pages` */

insert  into `pages`(`id`,`title`,`slug`,`content_type`,`content`,`parent_page_id`,`order`,`template_id`,`featured_image`,`publish_status`,`visibility`,`visibility_pass`,`publish_datetime`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Welcome','welcome',1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"text-align: justify; color: rgb(28, 30, 41); background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">I\'m&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Fazlul Kabir</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">. Completed&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">BSC engineering</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">&nbsp;in&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Computer Science and Telecommunication Engineering</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">&nbsp;from&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Noakhali Science and Technology University</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">. I want to be a successful software engineer. I\'m a quick and self-learner, also love to work as a team. I\'m always keen to dig and explore knowledge and learn and adopt new things in this area along with my collaborators and the scholars. I\'m good at web development. I know technologies like&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">HTML, CSS, JavaScript, PHP, AJAX</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">&nbsp;and also some frameworks like&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Laravel, Vuejs, Bootstrap, JQuery</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">. I\'m good at Laravel. I\'ve completed several projects using the Laravel framework. I also completed projects using raw PHP.</span><br></p><p style=\"text-align: justify; color: rgb(28, 30, 41); background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">I completed my&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">SSC</strong><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">&nbsp;from&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Comilla Zilla School, Comilla</strong><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">&nbsp;and&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">HSC</strong><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">&nbsp;from&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Comilla Victoria Govt. College, Comilla</strong><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">. From the early age of my life, I was always in the first row of the executive committee of any program of my Institution. I was involved in CSTE club activities from 1st year and also served as&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">General Secretary</strong><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">&nbsp;of CSTE Club during the 2018-19 period.</span></p><p style=\"text-align: justify; background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\"><font color=\"#1c1e29\">I wan a contest programmer during my university life. I\'ve participated in national level contests as part of a team. Also solved a good number of problems at various online judges. And I am very very interested in learning new technologies.&nbsp;</font><br></span></p></body></html>\n',NULL,1,0,NULL,1,0,NULL,'2020-01-04 00:00:00',1,'2020-01-04 00:04:31',NULL,'2020-01-04 00:04:31',NULL,NULL),
(2,'Test fsd sdf','test-fsd-sdf',1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>dfasdfasdf&nbsp; &nbsp; &nbsp;dfasdf &#2438;&#2488;&#2470;&#2475;&#2494;&#2488;&#2470;&#2475;&#2494;\\</p><p><img data-filename=\"246x0w.jpg\" style=\"width: 246px;\" src=\"http://127.0.0.1:8000/uploads/page/5e1898d404292.jpeg\"><br></p></body></html>\n',NULL,1,NULL,NULL,1,1,NULL,'2020-01-11 20:45:00',1,'2020-01-10 21:12:35',1,'2020-01-10 22:25:18',1,'2020-01-10 22:25:18');

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
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(74,'add users','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(75,'edit users','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(76,'delete users','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(77,'view all users','web','2019-12-05 10:24:26','2019-12-05 10:24:26'),
(80,'give permissions to user','web',NULL,NULL),
(81,'give permissions to user','web',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `post_categories` */

insert  into `post_categories`(`id`,`title`,`slug`,`parent_id`,`level`,`order`,`description`,`created_by`,`created_at`,`updated_at`,`deleted_at`,`status`,`deleted_by`,`updated_by`) values 
(2,'Blog','blog',NULL,1,1,NULL,1,'2020-01-11 00:01:44','2020-01-24 11:12:40',NULL,1,NULL,NULL),
(3,'Personal','personal',2,2,1,NULL,1,'2020-01-11 00:02:00','2020-01-11 00:02:00',NULL,1,NULL,NULL),
(4,'Tech','tech',2,2,1,NULL,1,'2020-01-11 00:03:12','2020-01-11 00:03:12',NULL,1,NULL,NULL),
(5,'Travel','travel',2,2,1,NULL,1,'2020-01-11 00:03:25','2020-01-11 00:03:25',NULL,1,NULL,NULL),
(6,'News','news',NULL,1,1,NULL,1,'2020-01-11 00:03:39','2020-01-11 00:03:39',NULL,1,NULL,NULL),
(7,'Field of Interest','field-of-interest',NULL,1,1,NULL,1,'2020-01-11 00:03:58','2020-01-11 00:03:58',NULL,1,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`subtitle`,`slug`,`featured_image`,`post_category_id`,`post_sub_category_id`,`content`,`content_type`,`order`,`template_id`,`visibility`,`visibility_pass`,`publish_datetime`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'https://www.youtube.com/watch?v=V_z-LLktKus&list=PLTydW-y9HsbQE7DtQ_O6R5LJzAd2GNpRA&index=2',NULL,'https://www.youtube.com/watch?v=v_z-llktkus&list=pltydw-y9hsbqe7dtq_o6r5ljzad2gnpra&index=2',NULL,2,3,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>dfasd</p><p><a href=\"https://www.youtube.com/watch?v=V_z-LLktKus&amp;list=PLTydW-y9HsbQE7DtQ_O6R5LJzAd2GNpRA&amp;index=2\">https://www.youtube.com/watch?v=V_z-LLktKus&amp;list=PLTydW-y9HsbQE7DtQ_O6R5LJzAd2GNpRA&amp;index=2</a></p><p><br><br></p></body></html>\n',1,1,NULL,1,NULL,'2020-01-21 01:08:00',1,1,'2020-01-21 01:09:40',NULL,'2020-01-21 01:09:56',1,'2020-01-21 01:09:56'),
(2,'১০ লাখ মানুষ যাবে মঙ্গলে!',NULL,'১০-লাখ-মানুষ-যাবে-মঙ্গলে!','/uploads/images/1579842760_1_1579492895_1_Mars-rocket-missions-in-mon.jpg',2,4,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"margin-bottom: 0px; padding-bottom: 10px; font-family: SolaimanLipi; font-size: 18px; text-align: justify;\">&#2536;&#2534;&#2539;&#2534; &#2488;&#2494;&#2482;&#2503;&#2480; &#2478;&#2471;&#2509;&#2479;&#2503; &#2535;&#2534; &#2482;&#2494;&#2454; &#2478;&#2494;&#2472;&#2497;&#2487;&#2453;&#2503; &#2478;&#2457;&#2509;&#2455;&#2482; &#2455;&#2509;&#2480;&#2489;&#2503; &#2474;&#2494;&#2464;&#2494;&#2472;&#2507;&#2480; &#2474;&#2480;&#2495;&#2453;&#2482;&#2509;&#2474;&#2472;&#2494;&#2480; &#2453;&#2469;&#2494; &#2460;&#2494;&#2472;&#2495;&#2527;&#2503;&#2459;&#2503;&#2472; &#2439;&#2482;&#2472; &#2478;&#2494;&#2488;&#2509;&#2453;&#2404; &#2488;&#2509;&#2474;&#2503;&#2488; &#2447;&#2453;&#2509;&#2488;&#2503;&#2480; &#2488;&#2495;&#2439;&#2451; &#2439;&#2482;&#2472; &#2478;&#2494;&#2488;&#2509;&#2453; &#2476;&#2503;&#2486; &#2453;&#2495;&#2459;&#2497; &#2463;&#2497;&#2439;&#2463; &#2476;&#2494;&#2480;&#2509;&#2468;&#2494;&#2527; &#2482;&#2494;&#2482; &#2455;&#2509;&#2480;&#2489;&#2463;&#2495;&#2468;&#2503; &#2478;&#2494;&#2472;&#2476; &#2476;&#2488;&#2468;&#2495; &#2488;&#2509;&#2469;&#2494;&#2474;&#2472;&#2503;&#2480; &#2482;&#2453;&#2509;&#2487;&#2509;&#2479;&#2503;&#2480; &#2453;&#2469;&#2494; &#2476;&#2482;&#2503;&#2472;&#2404; &#2488;&#2509;&#2463;&#2494;&#2480;&#2486;&#2495;&#2474; &#2474;&#2509;&#2480;&#2453;&#2482;&#2509;&#2474; &#2472;&#2495;&#2527;&#2503;&#2451; &#2476;&#2495;&#2488;&#2509;&#2468;&#2494;&#2480;&#2495;&#2468; &#2460;&#2494;&#2472;&#2495;&#2527;&#2503;&#2459;&#2503;&#2472; &#2468;&#2495;&#2472;&#2495;&#2404; &#2474;&#2509;&#2480;&#2468;&#2495; &#2476;&#2459;&#2480; &#2453;&#2527;&#2503;&#2453; &#2478;&#2503;&#2455;&#2494;&#2463;&#2472; &#2453;&#2494;&#2480;&#2509;&#2455;&#2503;&#2494; &#2478;&#2457;&#2509;&#2455;&#2482; &#2455;&#2509;&#2480;&#2489;&#2503; &#2472;&#2503;&#2476;&#2503; &#2488;&#2509;&#2474;&#2503;&#2488;&#2447;&#2453;&#2509;&#2488;&#2503;&#2480; &#2480;&#2453;&#2503;&#2463;&#2404; &#2475;&#2482;&#2503; &#2447; &#2486;&#2468;&#2453;&#2503;&#2480; &#2478;&#2494;&#2461;&#2494;&#2478;&#2494;&#2461;&#2495; &#2478;&#2494;&#2472;&#2476; &#2476;&#2488;&#2468;&#2495;&#2480; &#2460;&#2472;&#2509;&#2479; &#2474;&#2509;&#2480;&#2488;&#2509;&#2468;&#2497;&#2468; &#2489;&#2476;&#2503; &#2455;&#2509;&#2480;&#2489;&#2463;&#2495;&#2404; &#2463;&#2497;&#2439;&#2463; &#2476;&#2494;&#2480;&#2509;&#2468;&#2494;&#2527; &#2478;&#2494;&#2488;&#2509;&#2453; &#2476;&#2482;&#2503;&#2472;, &lsquo;&#2488;&#2509;&#2463;&#2494;&#2480;&#2486;&#2495;&#2474;&#2503;&#2480; &#2482;&#2453;&#2509;&#2487;&#2509;&#2479; &#2474;&#2509;&#2480;&#2468;&#2495;&#2470;&#2495;&#2472; &#2455;&#2524;&#2503; &#2468;&#2495;&#2472;&#2463;&#2495; &#2475;&#2509;&#2482;&#2494;&#2439;&#2463; &#2474;&#2480;&#2495;&#2458;&#2494;&#2482;&#2472;&#2494; &#2453;&#2480;&#2494;, &#2447;&#2468;&#2503; &#2474;&#2509;&#2480;&#2468;&#2495; &#2476;&#2459;&#2480; &#2447;&#2453; &#2489;&#2494;&#2460;&#2494;&#2480;&#2503;&#2480; &#2476;&#2503;&#2486;&#2495; &#2475;&#2509;&#2482;&#2494;&#2439;&#2463; &#2474;&#2494;&#2464;&#2494;&#2472; &#2489;&#2476;&#2503;, &#2474;&#2509;&#2480;&#2468;&#2495; &#2475;&#2509;&#2482;&#2494;&#2439;&#2463;&#2503; &#2535;&#2534;&#2534; &#2463;&#2472;&#2503;&#2480; &#2476;&#2503;&#2486;&#2495;&#2480; &#2453;&#2494;&#2480;&#2509;&#2455;&#2503;&#2494; &#2479;&#2494;&#2476;&#2503;&#2404; &#2475;&#2482;&#2503; &#2474;&#2509;&#2480;&#2468;&#2495; &#2476;&#2459;&#2480; &#2447;&#2453; &#2478;&#2503;&#2455;&#2494;&#2463;&#2472; &#2453;&#2494;&#2480;&#2509;&#2455;&#2503;&#2494; &#2474;&#2494;&#2464;&#2494;&#2472; &#2489;&#2476;&#2503;&#2404;&rsquo; &lsquo;&#2447;&#2488;&#2447;&#2472;&#2535;&rsquo; &#2472;&#2494;&#2478;&#2503;&#2480; &#2488;&#2509;&#2463;&#2494;&#2480;&#2486;&#2495;&#2474; &#2474;&#2509;&#2480;&#2507;&#2463;&#2507;&#2463;&#2494;&#2439;&#2474; &#2480;&#2453;&#2503;&#2463;&#2463;&#2495; &#2447;&#2454;&#2472; &#2488;&#2509;&#2474;&#2503;&#2488;&#2447;&#2453;&#2509;&#2488;&#2503;&#2480; &#2463;&#2503;&#2453;&#2509;&#2488;&#2494;&#2488; &#2453;&#2494;&#2480;&#2454;&#2494;&#2472;&#2494;&#2527; &#2472;&#2495;&#2480;&#2509;&#2478;&#2494;&#2467;&#2494;&#2471;&#2496;&#2472; &#2480;&#2527;&#2503;&#2459;&#2503;&#2404; &#2478;&#2457;&#2509;&#2455;&#2482; &#2455;&#2509;&#2480;&#2489;&#2503; &#2476;&#2488;&#2468;&#2495; &#2488;&#2509;&#2469;&#2494;&#2474;&#2472;&#2503; &#2453;&#2496; &#2453;&#2496; &#2453;&#2480;&#2494; &#2489;&#2476;&#2503; &#2468;&#2494; &#2472;&#2495;&#2527;&#2503; &#2439;&#2482;&#2472; &#2478;&#2494;&#2488;&#2509;&#2453; &#2476;&#2503;&#2486; &#2488;&#2480;&#2476;&#2404; &#2468;&#2476;&#2503; &#2488;&#2503;&#2454;&#2494;&#2472;&#2503; &#2478;&#2494;&#2472;&#2497;&#2487; &#2453;&#2496;&#2477;&#2494;&#2476;&#2503; &#2476;&#2503;&#2433;&#2458;&#2503; &#2469;&#2494;&#2453;&#2476;&#2503; &#2468;&#2494; &#2472;&#2495;&#2527;&#2503; &#2480;&#2527;&#2503;&#2459;&#2503; &#2470;&#2509;&#2476;&#2495;&#2471;&#2494;&#2470;&#2509;&#2476;&#2472;&#2509;&#2470;&#2509;&#2476;&#2404; &#2453;&#2494;&#2480;&#2467; &#2437;&#2453;&#2509;&#2488;&#2495;&#2460;&#2503;&#2472; &#2476;&#2494; &#2474;&#2494;&#2472;&#2495; (&#2476;&#2480;&#2475; &#2438;&#2459;&#2503;) &#2453;&#2507;&#2472;&#2507;&#2463;&#2494;&#2439; &#2472;&#2503;&#2439; &#2478;&#2457;&#2509;&#2455;&#2482;&#2503;&#2404;</p><p style=\"margin-bottom: 0px; padding-bottom: 10px; font-family: SolaimanLipi; font-size: 18px; text-align: justify;\"><br></p><div class=\"advertisement_inner\" style=\"overflow: hidden; padding: 7px 0px 7px 7px; float: right; font-family: SolaimanLipi; font-size: 18px; text-align: justify;\"><div id=\"jg_desktop_content_square\" class=\"pg-ad\"></div></div><p style=\"margin-bottom: 0px; padding-bottom: 10px; font-family: SolaimanLipi; font-size: 18px; text-align: justify;\">&#2482;&#2494;&#2482; &#2455;&#2509;&#2480;&#2489;&#2463;&#2495;&#2468;&#2503; &#2488;&#2509;&#2476;&#2472;&#2495;&#2480;&#2509;&#2477;&#2480; &#2476;&#2488;&#2468;&#2495; &#2488;&#2509;&#2469;&#2494;&#2474;&#2472;&#2503; &#2454;&#2480;&#2458; &#2535;&#2534;&#2534; &#2476;&#2495;&#2482;&#2495;&#2527;&#2472; &#2469;&#2503;&#2453;&#2503; &#2535;&#2534; &#2463;&#2509;&#2480;&#2495;&#2482;&#2495;&#2527;&#2472; &#2478;&#2494;&#2480;&#2509;&#2453;&#2495;&#2472; &#2465;&#2482;&#2494;&#2480;&#2503;&#2480; &#2478;&#2471;&#2509;&#2479;&#2503; &#2469;&#2494;&#2453;&#2476;&#2503; &#2476;&#2482;&#2503; &#2471;&#2494;&#2480;&#2467;&#2494; &#2474;&#2509;&#2480;&#2453;&#2494;&#2486; &#2453;&#2480;&#2503;&#2459;&#2503;&#2472; &#2478;&#2494;&#2488;&#2509;&#2453;&#2404;</p><p style=\"margin-bottom: 0px; padding-bottom: 10px; font-family: SolaimanLipi; font-size: 18px; text-align: justify;\">--credit :&nbsp;<a href=\"https://techshohor.com/\" target=\"_blank\">techshohor</a></p></body></html>\n',1,1,NULL,1,NULL,'2020-01-24 11:10:00',1,1,'2020-01-24 11:12:40',NULL,'2020-01-24 11:12:40',NULL,NULL);

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
  `facebook` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `profiles` */

insert  into `profiles`(`id`,`user_id`,`address`,`gender`,`image`,`phone`,`dob`,`facebook`,`twitter`,`instagram`,`youtube`,`bio`,`city`,`country`,`created_at`,`updated_at`,`deleted_at`) values 
(6,1,NULL,'Male','/uploads/profile/1578064568_1_avatar.jpg',NULL,'2019-10-23 00:00:00',NULL,NULL,NULL,'https://www.youtube.com/channel/UCLAUKrwBGvGRi_8nu5io5QA?view_as=subscriber','I\'m Fazlul Kabir. Completed BSC engineering in Computer Science and Telecommunication Engineering from Noakhali Science and Technology University. I want to be a successful software engineer. I\'m a quick and self-learner, also love to work as a team. I\'m always keen to dig and explore knowledge and learn and adopt new things in this area along with my collaborators and the scholars. I\'m good at web development. I know technologies like HTML, CSS, JavaScript, PHP, AJAX and also some frameworks like Laravel, Vuejs, Bootstrap, JQuery. I\'m good at Laravel. I\'ve completed several projects using the Laravel framework. I also completed projects using raw PHP.\r\n\r\nI completed my SSC from Comilla Zilla School, Comilla and HSC from Comilla Victoria Govt. College, Comilla. From the early age of my life, I was always in the first row of the executive committee of any program of my Institution. I was involved in CSTE club activities from 1st year and also served as General Secretary of CSTE Club during the 2018-19 period.\r\n\r\nI wan a contest programmer during my university life. I\'ve participated in national level contests as part of a team. Also solved a good number of problems at various online judges. And I am very very interested in learning new technologies.',NULL,NULL,'2019-10-31 12:59:15','2020-01-10 01:43:07',NULL),
(7,2,NULL,NULL,'/uploads/profile/1572509705_2_commander.jpg',NULL,'2019-10-31 00:00:00','','','','','',NULL,NULL,'2019-10-31 12:59:18','2019-10-31 14:15:26',NULL),
(8,3,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-11-04 12:27:42','2019-11-04 12:27:42',NULL),
(9,4,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-11-04 12:31:27','2019-11-04 12:31:27',NULL),
(10,5,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-11-04 18:57:46','2019-11-04 18:57:46',NULL),
(11,6,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-11-04 18:58:33','2019-11-04 18:58:33',NULL),
(12,7,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-11-04 18:59:10','2019-11-04 18:59:10',NULL),
(13,8,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-11-04 18:59:50','2019-11-04 18:59:50',NULL),
(14,9,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-11-04 19:00:19','2019-11-04 19:00:19',NULL),
(15,10,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-12-04 16:58:57','2019-12-04 16:58:57',NULL),
(16,11,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-12-05 16:49:27','2019-12-05 16:49:27',NULL),
(17,13,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-12-07 12:49:40','2019-12-07 12:49:40',NULL),
(18,14,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-12-07 12:52:32','2019-12-07 12:52:32',NULL),
(19,15,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-12-07 13:28:24','2019-12-07 13:28:24',NULL),
(20,16,NULL,NULL,'http://127.0.0.1:8000/uploads/profile/avatar.jpg',NULL,NULL,'','','','','',NULL,NULL,'2019-12-07 15:16:07','2019-12-07 15:16:07',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `quotes` */

insert  into `quotes`(`id`,`quote`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'!!!Welcome To Tiny Site Builder!!!',1,1,'2020-01-10 22:39:45',NULL,'2020-01-10 22:39:45',NULL,NULL);

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
(74,1),
(75,1),
(76,1),
(77,1),
(80,1),
(81,1);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'Admin','web','2019-12-07 11:43:52','2019-12-07 11:43:52'),
(10,'Publisher','web','2020-01-03 23:55:15','2020-01-03 23:55:15'),
(11,'Editor','web','2020-01-03 23:56:31','2020-01-03 23:56:31'),
(12,'Super Admin','web','2020-01-10 22:34:09','2020-01-10 22:34:09');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `sliders` */

insert  into `sliders`(`id`,`user_id`,`image`,`caption`,`position`,`order`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(1,1,'/uploads/images/1579021484_1_pexels-photo-1031265.jpeg',NULL,0,1,1,'2020-01-14 23:04:44','2020-01-14 23:04:44',NULL,1,NULL,NULL),
(2,1,'/uploads/images/1579021970_1_37107897_n.jpg',NULL,0,1,1,'2020-01-14 23:12:50','2020-01-14 23:12:50',NULL,1,NULL,NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `social_medias` */

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `todos` */

insert  into `todos`(`id`,`task`,`deadline`,`important`,`public`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'ABCdfasdfrwer','2020-01-11 02:55:00',0,0,0,1,'2020-01-10 02:55:34',NULL,'2020-01-10 03:05:15',1,'2020-01-10 03:05:15'),
(2,'sdfasdfasdf','2020-01-10 03:30:00',0,0,0,1,'2020-01-10 03:00:49',NULL,'2020-01-10 03:05:12',1,'2020-01-10 03:05:12'),
(3,'Complete the site builder within today','2020-01-11 00:00:00',0,0,1,1,'2020-01-10 11:39:41',NULL,'2020-01-14 01:48:51',NULL,NULL);

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

/*Table structure for table `user_visit_log` */

DROP TABLE IF EXISTS `user_visit_log`;

CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_ip` varchar(200) DEFAULT NULL,
  `request_url` text,
  `city` varchar(200) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `postal` varchar(200) DEFAULT NULL,
  `timezone` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

/*Data for the table `user_visit_log` */

insert  into `user_visit_log`(`id`,`visitor_ip`,`request_url`,`city`,`region`,`country`,`postal`,`timezone`,`created_at`) values 
(2,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 01:32:01'),
(3,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 01:32:10'),
(4,'127.0.0.1','http://127.0.0.1:8000/page/eyJpdiI6IjBCTDZRMGZzRE5panpmRE93azRjZ2c9PSIsInZhbHVlIjoiZVV1MDVuaDlQV3grdjFUQUhDZVdBZz09IiwibWFjIjoiYTQ0NmQ1YmU0ZDhkNWQwOWU0ZTJhM2Y0NTZkMzJjMDgzNmIzNjkzNzY4ODkzMjYwMmViODk1NTBjNDRhYjg5YSJ9','','','','','','2020-01-14 01:32:22'),
(5,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 01:32:42'),
(6,'127.0.0.11','http://127.0.0.1:8000/','','','','','','2019-11-27 01:32:42'),
(7,'127.0.0.12','http://127.0.0.1:8000/','','','','','','2020-01-14 01:32:42'),
(8,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-16 01:32:42'),
(9,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:06:50'),
(10,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:07:05'),
(11,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:09:01'),
(12,'127.0.0.1','http://127.0.0.1:8000/post-category/eyJpdiI6ImhBeitOZFJyaXdKcmM2dkJ2RmQxdXc9PSIsInZhbHVlIjoiWU01NVdHcFNIWU1pam9EZ0NXWGdSQT09IiwibWFjIjoiZjI3OTY2NzMwY2NmYzNkODk5MjcxNjk3ZDUyOGZmZWE1ZWI2OTY5YjFjODNiNGJjYTY5YTA3ODJkNGYxZjEyOSJ9/personal','','','','','','2020-01-14 22:13:04'),
(13,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:13:21'),
(14,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:14:21'),
(15,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:14:44'),
(16,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:15:41'),
(17,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:17:20'),
(18,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:18:29'),
(19,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:18:53'),
(20,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:24:36'),
(21,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:25:28'),
(22,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:26:07'),
(23,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:29:14'),
(24,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:42:50'),
(25,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:46:30'),
(26,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:47:59'),
(27,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:49:38'),
(28,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:50:13'),
(29,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:50:54'),
(30,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:51:16'),
(31,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:53:24'),
(32,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:54:02'),
(33,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:55:48'),
(34,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 22:59:54'),
(35,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 23:01:13'),
(36,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 23:01:26'),
(37,'127.0.0.1','http://127.0.0.1:8000/page/eyJpdiI6IjgrMnBGOVdZZGJ3NnBFQm9KRVdXc3c9PSIsInZhbHVlIjoidlNTQ0VUNXhBbExRbWdNeDJ3elpQdz09IiwibWFjIjoiYTZiZmZmNWYyOTA3MTFmN2NiOGY1OGNjZWUyNTQ3YWZhMzkwNzAzNThlYzRiODRkNTIyMWM2NDM2MjMxMzhlMCJ9','','','','','','2020-01-14 23:01:40'),
(38,'127.0.0.1','http://127.0.0.1:8000/post-category/eyJpdiI6IkpwZE1najgrN3NZKzV5SDg0bmZSK0E9PSIsInZhbHVlIjoiUGJvb21SY003czkyWXJ2b0hFVGVhUT09IiwibWFjIjoiNmJjNmEyMDRlYTMzNDNhMzFmOGQ0M2YwMGU4YWEwNGJlYjcwNDhhM2JhOTBkNTQ5YjE0NmJmNjBiODlhMTdkMSJ9/personal','','','','','','2020-01-14 23:01:58'),
(39,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 23:03:00'),
(40,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 23:04:55'),
(41,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 23:12:13'),
(42,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 23:12:56'),
(43,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 23:13:51'),
(44,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 23:37:02'),
(45,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-14 23:37:10'),
(46,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:14:10'),
(47,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:14:15'),
(48,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:20:13'),
(49,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:20:56'),
(50,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:21:12'),
(51,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:21:52'),
(52,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:23:23'),
(53,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:25:39'),
(54,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:26:25'),
(55,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:27:29'),
(56,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:28:18'),
(57,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:28:28'),
(58,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:30:48'),
(59,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:30:58'),
(60,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:31:05'),
(61,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-21 00:46:02'),
(62,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-24 10:50:43'),
(63,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-24 11:12:58'),
(64,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-24 11:13:01'),
(65,'127.0.0.1','http://127.0.0.1:8000/','','','','','','2020-01-24 11:14:20'),
(66,'127.0.0.1','http://127.0.0.1:8000/page/1','','','','','','2020-01-24 11:14:26'),
(67,'127.0.0.1','http://127.0.0.1:8000/post/2','','','','','','2020-01-24 11:15:00'),
(68,'127.0.0.1','http://127.0.0.1:8000/post/2','','','','','','2020-01-24 11:17:28'),
(69,'127.0.0.1','http://127.0.0.1:8000/post/2','','','','','','2020-01-24 11:18:22'),
(70,'127.0.0.1','http://127.0.0.1:8000/post/2','','','','','','2020-01-24 11:18:44'),
(71,'127.0.0.1','http://127.0.0.1:8000/post/2','','','','','','2020-01-24 11:22:34'),
(72,'127.0.0.1','http://127.0.0.1:8000/post/2','','','','','','2020-01-24 11:22:50');

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
(1,'Admin','admin@app.com','0000-00-00 00:00:00','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','teHVPNjELzDtespgupajzz20RVGXbWfK4811kOOdaE2Cx0nFeseRh5yakhmF',NULL,1,1,NULL,'2020-01-03 21:16:07',NULL,NULL,1,NULL),
(2,'Admin2','admin2@app.com',NULL,'$2y$10$xXFz/L1hpnZ60HQ5ZHbwX.lnSsHqeVPvKw2ioK0CsGrJ9NF5Ehwhy',NULL,NULL,1,1,'2019-10-31 12:27:47','2019-11-04 18:56:26','2019-12-07 12:59:18',1,NULL,3),
(3,'Md. Tuhin','clark@app.com',NULL,'$2y$10$oc.ga6qnUaNBH/i4OXjUtO4Dnpg7zaifoJsKcjTO.F1fmLm2byJ6K',NULL,NULL,7,1,'2019-11-04 12:27:42','2020-01-03 21:22:18','2020-01-03 21:22:18',1,NULL,1),
(4,'BM','bm@app.com',NULL,'$2y$10$Todf0c.bOIzAKqzyyAMJ7ehEIVY1JqpARXHuaCQ5h7yCWKo8r9jpa',NULL,NULL,3,1,'2019-11-04 12:31:27','2020-01-03 21:22:23','2020-01-03 21:22:23',1,NULL,1),
(5,'Branch Clark','bc@app.com',NULL,'$2y$10$uwWexNPw557giXR7Hx7Tu.S72fZfBxfgqYVtaJIVmII7gPk1X.zh2',NULL,NULL,7,1,'2019-11-04 18:57:46','2020-01-03 21:22:13','2020-01-03 21:22:13',1,NULL,1),
(6,'DQ','dq@app.com',NULL,'$2y$10$N2G3ukVOWmR1.baeM58ZU.V.yKarDlPnVS1CC3WLKpL52Z9SnPqd6',NULL,NULL,4,1,'2019-11-04 18:58:33','2020-01-03 21:23:02','2020-01-03 21:23:02',1,NULL,1),
(7,'GSO-3 Ops','gso_3_ops@app.com',NULL,'$2y$10$ptbFMt2Lyz34XmAvbcDMuemOYqTMQVkyisA3zKFBuLiWYkKOdfP4i',NULL,NULL,5,1,'2019-11-04 18:59:10','2020-01-03 21:22:28','2020-01-03 21:22:28',1,NULL,1),
(8,'GSO-3 Edn','gso_3_edn@app.com',NULL,'$2y$10$wyTRWFqPiEU9DQgSrT5TpeuS0Be1qdKpB2ayPsiLnx8kc37.Y48Zm',NULL,NULL,6,1,'2019-11-04 18:59:50','2020-01-03 21:22:56','2020-01-03 21:22:56',1,NULL,1),
(9,'Commander','commander@app.com',NULL,'$2y$10$Aig7Shpzcrk01IrZZM/5Hu3wf9CCxn6x3TIUBeh6FPGZKFgah79K.',NULL,'Commander',2,1,'2019-11-04 19:00:19','2020-01-03 21:22:38','2020-01-03 21:22:38',1,1,1),
(10,'Mess Manager','mm@app.com',NULL,'$2y$10$IL9mcP5WfEoQUVeyZvYx6./BzS6I0ETSGCuParbAmDaK4iQGNFRrS',NULL,NULL,8,1,'2019-12-04 16:58:57','2020-01-03 21:22:51','2020-01-03 21:22:51',1,NULL,1),
(11,'Imran Ahmed','messmember@app.com',NULL,'$2y$10$/Urjo0xIIfpTedq607hX7u/ORO7xbxc5wEMHtkb4wR1GJuDM.usIu',NULL,NULL,9,1,'2019-12-05 16:49:27','2020-01-03 21:22:47','2020-01-03 21:22:47',1,NULL,1),
(14,'Md. Faisal Rahman','faisal@app.com',NULL,'$2y$10$cA2GvYxKiljqTFeOJSa4se03MyLH7piy2iR20/Al.CYZo2t7Gzvx6',NULL,NULL,8,1,'2019-12-07 12:52:32','2020-01-03 21:22:42','2020-01-03 21:22:42',1,NULL,1),
(15,'Rakib ul karim','rakib@app.com',NULL,'$2y$10$LK..Wbx3ROnB10zfsiLIxu8Jq5zpL17wTs/TWVv8TWD9P1qBxntji',NULL,'N/A',NULL,1,'2019-12-07 13:28:24','2020-01-03 21:22:33','2020-01-03 21:22:33',1,1,1),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `users_acc_transaction` */

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `videos` */

/*Table structure for table `welcome_page_settings` */

DROP TABLE IF EXISTS `welcome_page_settings`;

CREATE TABLE `welcome_page_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `welcome_page_id` int(11) DEFAULT NULL,
  `welcome_cats` varchar(200) DEFAULT NULL,
  `enable_top_sliders` tinyint(1) DEFAULT NULL,
  `enable_middle_sliders` tinyint(1) DEFAULT NULL,
  `enable_recent_video` tinyint(1) DEFAULT NULL,
  `enable_recent_images` tinyint(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `welcome_page_settings` */

insert  into `welcome_page_settings`(`id`,`welcome_page_id`,`welcome_cats`,`enable_top_sliders`,`enable_middle_sliders`,`enable_recent_video`,`enable_recent_images`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,1,'3',NULL,0,0,0,1,'2020-01-11 00:22:21',NULL,'2020-01-11 00:22:21',NULL,NULL),
(2,1,'3,5,6',NULL,1,1,1,1,'2020-01-11 00:22:54',NULL,'2020-01-11 00:22:54',NULL,NULL),
(3,1,'3,5,6',1,1,1,1,1,'2020-01-14 23:34:55',NULL,'2020-01-14 23:34:55',NULL,NULL),
(4,1,'3,5,6',0,1,1,1,1,'2020-01-14 23:37:05',NULL,'2020-01-14 23:37:05',NULL,NULL),
(5,1,'3,5,6',1,1,1,1,1,'2020-01-14 23:37:14',NULL,'2020-01-14 23:37:14',NULL,NULL),
(6,1,'3,5,6',0,1,1,1,1,'2020-01-24 10:36:34',NULL,'2020-01-24 10:36:34',NULL,NULL),
(7,1,'3,5,6',1,1,1,1,1,'2020-01-24 10:36:49',NULL,'2020-01-24 10:36:49',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `widget_data` */

insert  into `widget_data`(`id`,`widget_id`,`model`,`model_id`,`link_type`,`link_title`,`link`,`order`,`info_data`,`status`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`) values 
(3,1,'Informative',NULL,NULL,NULL,NULL,1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><img data-filename=\"colorful-collection-with-great-variety-avatars_23-2147668362.jpg\" style=\"width: 50%;\" src=\"###/uploads/widget_data/5e181882827a8.jpeg\"><br></p></body></html>\n',1,'2020-01-10 12:24:02','2020-01-10 22:29:27','2020-01-10 22:29:27',1,NULL,1),
(4,2,'Informative',NULL,NULL,NULL,NULL,1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><img data-filename=\"home-bg.jpg\" style=\"width: 50%;\" src=\"http://127.0.0.1:8000/uploads/page/5e1895d40d2fb.jpeg\"><br></p></body></html>\n',1,'2020-01-10 21:18:44','2020-01-10 22:29:23','2020-01-10 22:29:23',1,NULL,1),
(5,4,'Informative',NULL,NULL,NULL,NULL,1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><img data-filename=\"767ed4f1f412f0830d91b4498bd14865 (1) copy.jpg\" style=\"width: 301px;\" src=\"http://127.0.0.1:8000/uploads/page/5e1de8d836878.jpeg\"><br></p></body></html>\n',1,'2020-01-14 22:14:16','2020-01-14 22:24:02','2020-01-14 22:24:02',1,NULL,1),
(6,4,'Informative',NULL,NULL,NULL,NULL,1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><img data-filename=\"767ed4f1f412f0830d91b4498bd14865 (1) copy.jpg\" style=\"width: 301px;\" src=\"http://127.0.0.1:8000/uploads/page/5e1deb36a028a.jpeg\"><br></p></body></html>\n',1,'2020-01-14 22:24:22','2020-01-14 22:25:04','2020-01-14 22:25:04',1,NULL,1),
(7,4,'Informative',NULL,NULL,NULL,NULL,1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><img data-filename=\"767ed4f1f412f0830d91b4498bd14865 (1) copy.jpg\" style=\"width: 301px;\" src=\"http://127.0.0.1:8000/uploads/page/5e1deb710ab5d.jpeg\"><br></p></body></html>\n',1,'2020-01-14 22:25:21','2020-01-14 22:27:12','2020-01-14 22:27:12',1,NULL,1),
(8,4,'Informative',NULL,NULL,NULL,NULL,1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><img data-filename=\"767ed4f1f412f0830d91b4498bd14865 (1) copy.jpg\" style=\"width: 301px;\" src=\"http://127.0.0.1:8000/uploads/page/5e1debf6d3887.jpeg\"><br></p></body></html>\n',1,'2020-01-14 22:27:34','2020-01-14 22:27:51','2020-01-14 22:27:51',1,NULL,1),
(9,4,'Informative',NULL,NULL,NULL,NULL,1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><img data-filename=\"767ed4f1f412f0830d91b4498bd14865 (1) copy.jpg\" style=\"width: 301px;\" src=\"http://127.0.0.1:8000/uploads/page/5e1dec521581e.jpeg\"><br></p></body></html>\n',1,'2020-01-14 22:29:06','2020-01-14 22:46:02','2020-01-14 22:46:02',1,NULL,1),
(10,4,'Informative',NULL,NULL,NULL,NULL,1,'<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><img data-filename=\"767ed4f1f412f0830d91b4498bd14865 (1) copy.jpg\" style=\"width:100%;\" src=\"http://127.0.0.1:8000/uploads/page/5e1df05b2b3ea.jpeg\"><br></p></body></html>\n',1,'2020-01-14 22:46:19','2020-01-14 22:46:19',NULL,1,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `widgets` */

insert  into `widgets`(`id`,`title`,`type`,`popup`,`short_desc`,`parent_page_id`,`order`,`status`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_by`,`deleted_at`) values 
(1,'Test Widget',3,0,0,'0',1,1,1,'2020-01-10 11:54:03',NULL,'2020-01-10 22:29:27',1,'2020-01-10 22:29:27'),
(2,'Test Widget 2',3,0,0,'0',1,1,1,'2020-01-10 21:17:52',NULL,'2020-01-10 22:29:23',1,'2020-01-10 22:29:23'),
(3,'Page Link',2,0,0,'0',1,1,1,'2020-01-10 21:54:35',NULL,'2020-01-10 22:29:19',1,'2020-01-10 22:29:19'),
(4,'habijabi',3,0,0,'0',1,1,1,'2020-01-14 22:13:43',NULL,'2020-01-14 22:13:43',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
