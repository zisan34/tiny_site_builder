-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 07:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiny_site_bulder`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
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
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `deleted_by` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `album_images`
--

CREATE TABLE `album_images` (
  `id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `image` varchar(251) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `archived` tinyint(1) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(11) NOT NULL,
  `developer` varchar(221) DEFAULT NULL,
  `credit` varchar(221) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `site_title` varchar(221) DEFAULT NULL,
  `tagline` varchar(221) DEFAULT NULL,
  `phy_address` varchar(221) DEFAULT NULL,
  `site_address` varchar(221) DEFAULT NULL,
  `email_address` varchar(221) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `header_footers`
--

CREATE TABLE `header_footers` (
  `id` int(11) NOT NULL,
  `title` varchar(221) CHARACTER SET latin1 NOT NULL,
  `subtitle` varchar(221) CHARACTER SET latin1 DEFAULT NULL,
  `developer` varchar(221) CHARACTER SET latin1 DEFAULT NULL,
  `credit` varchar(221) CHARACTER SET latin1 DEFAULT NULL,
  `welcome_message` varchar(221) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `primary` varchar(221) NOT NULL,
  `secondary` varchar(221) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) UNSIGNED NOT NULL,
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
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 1),
(3, 'App\\User', 1),
(4, 'App\\User', 1),
(5, 'App\\User', 1),
(6, 'App\\User', 1),
(7, 'App\\User', 1),
(8, 'App\\User', 1),
(9, 'App\\User', 1),
(10, 'App\\User', 1),
(11, 'App\\User', 1),
(12, 'App\\User', 1),
(13, 'App\\User', 1),
(14, 'App\\User', 1),
(15, 'App\\User', 1),
(16, 'App\\User', 1),
(17, 'App\\User', 1),
(18, 'App\\User', 1),
(19, 'App\\User', 1),
(20, 'App\\User', 1),
(21, 'App\\User', 1),
(22, 'App\\User', 1),
(23, 'App\\User', 1),
(24, 'App\\User', 1),
(25, 'App\\User', 1),
(26, 'App\\User', 1),
(27, 'App\\User', 1),
(28, 'App\\User', 1),
(29, 'App\\User', 1),
(30, 'App\\User', 1),
(31, 'App\\User', 1),
(32, 'App\\User', 1),
(33, 'App\\User', 1),
(34, 'App\\User', 1),
(35, 'App\\User', 1),
(36, 'App\\User', 1),
(37, 'App\\User', 1),
(38, 'App\\User', 1),
(39, 'App\\User', 1),
(40, 'App\\User', 1),
(41, 'App\\User', 1),
(42, 'App\\User', 1),
(43, 'App\\User', 1),
(44, 'App\\User', 1),
(45, 'App\\User', 1),
(46, 'App\\User', 1),
(47, 'App\\User', 1),
(74, 'App\\User', 1),
(75, 'App\\User', 1),
(76, 'App\\User', 1),
(77, 'App\\User', 1),
(80, 'App\\User', 1),
(81, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(10, 'App\\User', 1),
(11, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) UNSIGNED NOT NULL,
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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content_type`, `content`, `parent_page_id`, `order`, `template_id`, `featured_image`, `publish_status`, `visibility`, `visibility_pass`, `publish_datetime`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Welcome', 'welcome', 1, '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"text-align: justify; color: rgb(28, 30, 41); background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">I\'m&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Fazlul Kabir</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">. Completed&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">BSC engineering</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">&nbsp;in&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Computer Science and Telecommunication Engineering</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">&nbsp;from&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Noakhali Science and Technology University</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">. I want to be a successful software engineer. I\'m a quick and self-learner, also love to work as a team. I\'m always keen to dig and explore knowledge and learn and adopt new things in this area along with my collaborators and the scholars. I\'m good at web development. I know technologies like&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">HTML, CSS, JavaScript, PHP, AJAX</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">&nbsp;and also some frameworks like&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Laravel, Vuejs, Bootstrap, JQuery</strong><span data-preserver-spaces=\"true\" style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">. I\'m good at Laravel. I\'ve completed several projects using the Laravel framework. I also completed projects using raw PHP.</span><br></p><p style=\"text-align: justify; color: rgb(28, 30, 41); background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">I completed my&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">SSC</strong><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">&nbsp;from&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Comilla Zilla School, Comilla</strong><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">&nbsp;and&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">HSC</strong><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">&nbsp;from&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">Comilla Victoria Govt. College, Comilla</strong><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">. From the early age of my life, I was always in the first row of the executive committee of any program of my Institution. I was involved in CSTE club activities from 1st year and also served as&nbsp;</span><strong style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\">General Secretary</strong><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">&nbsp;of CSTE Club during the 2018-19 period.</span></p><p style=\"text-align: justify; background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\"><font color=\"#1c1e29\">I wan a contest programmer during my university life. I\'ve participated in national level contests as part of a team. Also solved a good number of problems at various online judges. And I am very very interested in learning new technologies.&nbsp;</font><br></span></p></body></html>\n', NULL, 1, 0, NULL, 1, 0, NULL, '2020-01-03 18:00:00', 1, '2020-01-03 18:04:31', NULL, '2020-01-03 18:04:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit posts', 'web', '2019-12-04 10:12:05', '2019-12-04 10:12:05'),
(2, 'add posts', 'web', '2019-12-04 10:13:05', '2019-12-04 10:13:05'),
(3, 'view all posts', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(4, 'delete posts', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(5, 'add post categories', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(6, 'edit post categories', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(7, 'delete post categories', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(8, 'view all post categories', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(9, 'add pages', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(10, 'edit pages', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(11, 'delete pages', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(12, 'view all pages', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(13, 'add sliders', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(14, 'edit sliders', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(15, 'delete sliders', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(16, 'view all sliders', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(17, 'add photo albums', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(18, 'edit photo albums', 'web', '2019-12-04 10:46:04', '2019-12-04 10:46:04'),
(19, 'delete photo albums', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(20, 'view all photo albums', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(21, 'add videos', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(22, 'edit videos', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(23, 'delete videos', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(24, 'view all videos', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(25, 'edit logos', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(26, 'edit header footers', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(27, 'edit general site settings', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(28, 'add social links', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(29, 'edit social links', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(30, 'delete social links', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(31, 'view all social links', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(32, 'add members', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(33, 'edit members', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(34, 'delete members', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(35, 'view all members', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(36, 'add menus', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(37, 'edit menus', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(38, 'delete menus', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(39, 'view all menus', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(40, 'add widgets', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(41, 'edit widgets', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(42, 'delete widgets', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(43, 'view all widgets', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(44, 'add widget data', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(45, 'edit widget data', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(46, 'delete widget data', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(47, 'view all widget data', 'web', '2019-12-04 10:46:05', '2019-12-04 10:46:05'),
(74, 'add users', 'web', '2019-12-05 04:24:26', '2019-12-05 04:24:26'),
(75, 'edit users', 'web', '2019-12-05 04:24:26', '2019-12-05 04:24:26'),
(76, 'delete users', 'web', '2019-12-05 04:24:26', '2019-12-05 04:24:26'),
(77, 'view all users', 'web', '2019-12-05 04:24:26', '2019-12-05 04:24:26'),
(80, 'give permissions to user', 'web', NULL, NULL),
(81, 'give permissions to user', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(221) NOT NULL,
  `slug` varchar(221) DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `level` int(11) DEFAULT '1',
  `order` int(11) DEFAULT '1',
  `description` varchar(221) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1' COMMENT '0=off 1=on',
  `deleted_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_sub_categoies`
--

CREATE TABLE `post_sub_categoies` (
  `id` int(11) NOT NULL,
  `post_category_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(221) DEFAULT NULL,
  `slug` varchar(221) DEFAULT NULL,
  `description` varchar(221) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1' COMMENT '0=inactive 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `address`, `gender`, `image`, `phone`, `dob`, `city`, `country`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 1, NULL, 'Male', '/uploads/profile/1578064568_1_avatar.jpg', NULL, '2019-10-23 00:00:00', NULL, NULL, '2019-10-31 06:59:15', '2020-01-03 15:16:08', NULL),
(7, 2, NULL, NULL, '/uploads/profile/1572509705_2_commander.jpg', NULL, '2019-10-31 00:00:00', NULL, NULL, '2019-10-31 06:59:18', '2019-10-31 08:15:26', NULL),
(8, 3, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-11-04 06:27:42', '2019-11-04 06:27:42', NULL),
(9, 4, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-11-04 06:31:27', '2019-11-04 06:31:27', NULL),
(10, 5, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-11-04 12:57:46', '2019-11-04 12:57:46', NULL),
(11, 6, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-11-04 12:58:33', '2019-11-04 12:58:33', NULL),
(12, 7, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-11-04 12:59:10', '2019-11-04 12:59:10', NULL),
(13, 8, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-11-04 12:59:50', '2019-11-04 12:59:50', NULL),
(14, 9, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-11-04 13:00:19', '2019-11-04 13:00:19', NULL),
(15, 10, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-12-04 10:58:57', '2019-12-04 10:58:57', NULL),
(16, 11, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-12-05 10:49:27', '2019-12-05 10:49:27', NULL),
(17, 13, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-12-07 06:49:40', '2019-12-07 06:49:40', NULL),
(18, 14, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-12-07 06:52:32', '2019-12-07 06:52:32', NULL),
(19, 15, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-12-07 07:28:24', '2019-12-07 07:28:24', NULL),
(20, 16, NULL, NULL, 'http://127.0.0.1:8000/uploads/profile/avatar.jpg', NULL, NULL, NULL, NULL, '2019-12-07 09:16:07', '2019-12-07 09:16:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `quote` varchar(500) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2019-12-07 05:43:52', '2019-12-07 05:43:52'),
(10, 'Publisher', 'web', '2020-01-03 17:55:15', '2020-01-03 17:55:15'),
(11, 'Editor', 'web', '2020-01-03 17:56:31', '2020-01-03 17:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(80, 1),
(81, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(221) NOT NULL,
  `caption` varchar(221) DEFAULT NULL,
  `position` tinyint(2) DEFAULT NULL COMMENT '0=top, 1=middle',
  `order` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1' COMMENT '0=inactive 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `social_medias`
--

CREATE TABLE `social_medias` (
  `id` int(11) NOT NULL,
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
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_template`
--

CREATE TABLE `table_template` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `todo_user`
--

CREATE TABLE `todo_user` (
  `id` int(11) NOT NULL,
  `todo_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `deleted_by` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `rank`, `role_id`, `status`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Admin', 'admin@app.com', '0000-00-00 00:00:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZsafFchdkiIrf5GGPt6vpxfGAVE1jzpbids81Ek2ZOxkx6vl8uWBdv35nYhi', NULL, 1, 1, NULL, '2020-01-03 15:16:07', NULL, NULL, 1, NULL),
(2, 'Admin2', 'admin2@app.com', NULL, '$2y$10$xXFz/L1hpnZ60HQ5ZHbwX.lnSsHqeVPvKw2ioK0CsGrJ9NF5Ehwhy', NULL, NULL, 1, 1, '2019-10-31 06:27:47', '2019-11-04 12:56:26', '2019-12-07 06:59:18', 1, NULL, 3),
(3, 'Md. Tuhin', 'clark@app.com', NULL, '$2y$10$oc.ga6qnUaNBH/i4OXjUtO4Dnpg7zaifoJsKcjTO.F1fmLm2byJ6K', NULL, NULL, 7, 1, '2019-11-04 06:27:42', '2020-01-03 15:22:18', '2020-01-03 15:22:18', 1, NULL, 1),
(4, 'BM', 'bm@app.com', NULL, '$2y$10$Todf0c.bOIzAKqzyyAMJ7ehEIVY1JqpARXHuaCQ5h7yCWKo8r9jpa', NULL, NULL, 3, 1, '2019-11-04 06:31:27', '2020-01-03 15:22:23', '2020-01-03 15:22:23', 1, NULL, 1),
(5, 'Branch Clark', 'bc@app.com', NULL, '$2y$10$uwWexNPw557giXR7Hx7Tu.S72fZfBxfgqYVtaJIVmII7gPk1X.zh2', NULL, NULL, 7, 1, '2019-11-04 12:57:46', '2020-01-03 15:22:13', '2020-01-03 15:22:13', 1, NULL, 1),
(6, 'DQ', 'dq@app.com', NULL, '$2y$10$N2G3ukVOWmR1.baeM58ZU.V.yKarDlPnVS1CC3WLKpL52Z9SnPqd6', NULL, NULL, 4, 1, '2019-11-04 12:58:33', '2020-01-03 15:23:02', '2020-01-03 15:23:02', 1, NULL, 1),
(7, 'GSO-3 Ops', 'gso_3_ops@app.com', NULL, '$2y$10$ptbFMt2Lyz34XmAvbcDMuemOYqTMQVkyisA3zKFBuLiWYkKOdfP4i', NULL, NULL, 5, 1, '2019-11-04 12:59:10', '2020-01-03 15:22:28', '2020-01-03 15:22:28', 1, NULL, 1),
(8, 'GSO-3 Edn', 'gso_3_edn@app.com', NULL, '$2y$10$wyTRWFqPiEU9DQgSrT5TpeuS0Be1qdKpB2ayPsiLnx8kc37.Y48Zm', NULL, NULL, 6, 1, '2019-11-04 12:59:50', '2020-01-03 15:22:56', '2020-01-03 15:22:56', 1, NULL, 1),
(9, 'Commander', 'commander@app.com', NULL, '$2y$10$Aig7Shpzcrk01IrZZM/5Hu3wf9CCxn6x3TIUBeh6FPGZKFgah79K.', NULL, 'Commander', 2, 1, '2019-11-04 13:00:19', '2020-01-03 15:22:38', '2020-01-03 15:22:38', 1, 1, 1),
(10, 'Mess Manager', 'mm@app.com', NULL, '$2y$10$IL9mcP5WfEoQUVeyZvYx6./BzS6I0ETSGCuParbAmDaK4iQGNFRrS', NULL, NULL, 8, 1, '2019-12-04 10:58:57', '2020-01-03 15:22:51', '2020-01-03 15:22:51', 1, NULL, 1),
(11, 'Imran Ahmed', 'messmember@app.com', NULL, '$2y$10$/Urjo0xIIfpTedq607hX7u/ORO7xbxc5wEMHtkb4wR1GJuDM.usIu', NULL, NULL, 9, 1, '2019-12-05 10:49:27', '2020-01-03 15:22:47', '2020-01-03 15:22:47', 1, NULL, 1),
(14, 'Md. Faisal Rahman', 'faisal@app.com', NULL, '$2y$10$cA2GvYxKiljqTFeOJSa4se03MyLH7piy2iR20/Al.CYZo2t7Gzvx6', NULL, NULL, 8, 1, '2019-12-07 06:52:32', '2020-01-03 15:22:42', '2020-01-03 15:22:42', 1, NULL, 1),
(15, 'Rakib ul karim', 'rakib@app.com', NULL, '$2y$10$LK..Wbx3ROnB10zfsiLIxu8Jq5zpL17wTs/TWVv8TWD9P1qBxntji', NULL, 'N/A', NULL, 1, '2019-12-07 07:28:24', '2020-01-03 15:22:33', '2020-01-03 15:22:33', 1, 1, 1),
(16, 'Testadmin', 'testadmin@app.com', NULL, '$2y$10$XfOiP0YA2/uFyva3Il05quQSU8K0Rnm9ywKOGh08mqlKxvd03KWv.', NULL, 'Admin', NULL, 1, '2019-12-07 09:16:07', '2019-12-07 09:45:09', '2019-12-07 09:45:09', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_acc_transaction`
--

CREATE TABLE `users_acc_transaction` (
  `id` int(11) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `short_name`, `creator`, `reviewer`, `approver`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Admin', 'admin', NULL, 1, 1, 1, 1, '2019-11-04 11:55:41', 1, NULL, NULL, '2019-12-07 15:15:02'),
(2, 'Commander', NULL, NULL, NULL, 1, 1, 1, '2019-11-04 11:56:01', 1, NULL, NULL, '2019-12-07 15:15:02'),
(3, 'BM', NULL, NULL, 1, 1, 1, 1, '2019-11-04 11:57:03', 1, NULL, NULL, '2019-12-07 15:15:02'),
(4, 'DQ', NULL, NULL, 1, 1, 1, 1, '2019-11-04 11:56:53', 1, NULL, NULL, '2019-12-07 15:15:02'),
(5, 'GSO-3 Ops', NULL, NULL, 1, NULL, 1, 1, '2019-11-04 11:57:13', 1, NULL, NULL, '2019-12-07 15:15:02'),
(6, 'GSO-3 Edn', NULL, NULL, 1, NULL, 1, 1, '2019-11-04 11:57:15', 1, NULL, NULL, '2019-12-07 15:15:02'),
(7, 'Branch Clark', NULL, 1, 0, 0, 1, 1, '2019-11-04 11:56:27', 1, NULL, NULL, '2019-12-07 15:15:02'),
(8, 'Mess Manager', NULL, NULL, NULL, NULL, 1, NULL, '2019-12-04 16:57:56', NULL, NULL, NULL, '2019-12-07 15:15:02'),
(9, 'Mess Member', NULL, NULL, NULL, NULL, 1, NULL, '2019-12-04 16:57:56', NULL, NULL, NULL, '2019-12-07 15:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
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
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `deleted_by` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` int(11) NOT NULL,
  `title` varchar(221) CHARACTER SET latin1 DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1=member_info, 2=multiple_links, 3=informative',
  `popup` tinyint(1) DEFAULT NULL,
  `short_desc` tinyint(1) DEFAULT NULL COMMENT '0=short_description, 1=no_description',
  `parent_page_id` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `widget_data`
--

CREATE TABLE `widget_data` (
  `id` int(11) NOT NULL,
  `widget_id` int(10) UNSIGNED DEFAULT NULL,
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
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album_images`
--
ALTER TABLE `album_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_footers`
--
ALTER TABLE `header_footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_sub_categoies`
--
ALTER TABLE `post_sub_categoies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_medias`
--
ALTER TABLE `social_medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_template`
--
ALTER TABLE `table_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo_user`
--
ALTER TABLE `todo_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_acc_transaction`
--
ALTER TABLE `users_acc_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_data`
--
ALTER TABLE `widget_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `album_images`
--
ALTER TABLE `album_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_footers`
--
ALTER TABLE `header_footers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_sub_categoies`
--
ALTER TABLE `post_sub_categoies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_medias`
--
ALTER TABLE `social_medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_template`
--
ALTER TABLE `table_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todo_user`
--
ALTER TABLE `todo_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_acc_transaction`
--
ALTER TABLE `users_acc_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widget_data`
--
ALTER TABLE `widget_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
