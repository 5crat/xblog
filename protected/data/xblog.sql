/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50538
Source Host           : localhost:3306
Source Database       : xblog

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2014-08-29 18:53:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for Categorys
-- ----------------------------
DROP TABLE IF EXISTS `Categorys`;
CREATE TABLE `Categorys` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for Comments
-- ----------------------------
DROP TABLE IF EXISTS `Comments`;
CREATE TABLE `Comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论ID',
  `pid` int(11) unsigned NOT NULL COMMENT '评论父ID',
  `create_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '评论人',
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '评论人Email',
  `content` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '评论内容',
  `read_status` int(1) unsigned NOT NULL DEFAULT '0' COMMENT '评论是否查看',
  `user_ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '评论用户ip',
  `create_time` int(11) unsigned NOT NULL COMMENT '评论时间',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for Posts
-- ----------------------------
DROP TABLE IF EXISTS `Posts`;
CREATE TABLE `Posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '文章标题',
  `category_id` int(11) unsigned NOT NULL COMMENT '文章分类ID',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '文章内容',
  `status` int(1) NOT NULL COMMENT '文章标签',
  `comment_count` int(11) NOT NULL DEFAULT '0' COMMENT '评论次数',
  `visitor` int(11) unsigned NOT NULL COMMENT '访客数',
  `create_time` int(11) unsigned NOT NULL COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for Tags
-- ----------------------------
DROP TABLE IF EXISTS `Tags`;
CREATE TABLE `Tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '标签ID',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '标签名字',
  `belong_post_id` int(10) unsigned NOT NULL COMMENT '所属文章id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for Users
-- ----------------------------
DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '登录名',
  `nickname` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户昵称',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '登录密码',
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '加密盐',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '电子邮箱',
  `info` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '个性签名',
  `create_time` int(10) unsigned NOT NULL COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='用户表';
