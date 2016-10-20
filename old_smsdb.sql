/*
Navicat MySQL Data Transfer

Source Server         : Local Connection
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : delightsmsdb

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-10-20 09:03:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dlsms123_category`
-- ----------------------------
DROP TABLE IF EXISTS `dlsms123_category`;
CREATE TABLE `dlsms123_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `dlsms123_comment`
-- ----------------------------
DROP TABLE IF EXISTS `dlsms123_comment`;
CREATE TABLE `dlsms123_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `content` text,
  `status` varchar(10) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `dlsms123_media`
-- ----------------------------
DROP TABLE IF EXISTS `dlsms123_media`;
CREATE TABLE `dlsms123_media` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `media_type` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `content` text,
  `embed_code` text,
  `media_img` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `dlsms123_member`
-- ----------------------------
DROP TABLE IF EXISTS `dlsms123_member`;
CREATE TABLE `dlsms123_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `dlsms123_message`
-- ----------------------------
DROP TABLE IF EXISTS `dlsms123_message`;
CREATE TABLE `dlsms123_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `content` text,
  `views` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `dlsms123_subscriber`
-- ----------------------------
DROP TABLE IF EXISTS `dlsms123_subscriber`;
CREATE TABLE `dlsms123_subscriber` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `dlsms123_webmaster`
-- ----------------------------
DROP TABLE IF EXISTS `dlsms123_webmaster`;
CREATE TABLE `dlsms123_webmaster` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook_id` varchar(100) DEFAULT NULL,
  `twitter_id` varchar(100) DEFAULT NULL,
  `linkedin_id` varchar(100) DEFAULT NULL,
  `content` text,
  `webmaster_img` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
