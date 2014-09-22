/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50538
Source Host           : localhost:3306
Source Database       : xblog

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2014-09-22 16:21:54
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of Categorys
-- ----------------------------
INSERT INTO `Categorys` VALUES ('1', 'Linux');
INSERT INTO `Categorys` VALUES ('2', 'Python');

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
-- Records of Comments
-- ----------------------------
INSERT INTO `Comments` VALUES ('1', '4', 'hehe', 'hehe@hehe.com', 'test comment!', '0', '0', '0');
INSERT INTO `Comments` VALUES ('2', '0', '', '', '', '0', '0', '0');
INSERT INTO `Comments` VALUES ('3', '4', 'xx', 'xx', 'xx', '0', '127', '1409048297');
INSERT INTO `Comments` VALUES ('4', '4', 'xx', 'xx', 'xx', '0', '127.0.0.1', '1409048352');
INSERT INTO `Comments` VALUES ('5', '4', 'hehe', 'hehe', 'hehe', '0', '127.0.0.1', '1409051033');

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
-- Records of Posts
-- ----------------------------
INSERT INTO `Posts` VALUES ('1', '第一篇文章', '1', '呵呵sdd', '0', '0', '5', '1407812547', '1409706886');
INSERT INTO `Posts` VALUES ('2', 'test', '2', '<pre class=\"brush:python;toolbar:false\">#----coding:utf-8-----\r\n\r\nimport&nbsp;sys\r\nimport&nbsp;os\r\n\r\nprint&nbsp;os.path(.)</pre><p><br/></p>', '0', '0', '0', '1407828722', '0');
INSERT INTO `Posts` VALUES ('4', '测试文章', '1', '<p>这是一个很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长很长的文章</p>', '0', '4', '7', '1408443751', '1409051033');
INSERT INTO `Posts` VALUES ('6', 'test editor', '2', '<p>这渣渣的布局就跟一坨屎一样。。。。。。。。。。。简直无法忍受</p>', '0', '0', '1', '0', '1409643268');
INSERT INTO `Posts` VALUES ('7', '我又写了一篇文章阿', '1', '<p>test post ，:-)了阿</p>', '0', '0', '13', '0', '1409052549');
INSERT INTO `Posts` VALUES ('8', 'test', '1', '<p>我又test了 一次</p><p><br/></p>', '0', '0', '0', '1409204905', '0');
INSERT INTO `Posts` VALUES ('9', '标签', '1', '<p>一加入标签功能就无法提交文章，你这是闹哪样阿。。。</p>', '0', '0', '0', '1409214528', '0');
INSERT INTO `Posts` VALUES ('10', '标签问题还是没解决阿', '1', '<p>到底行不行阿。，标签问题还没解决呢</p>', '0', '0', '0', '1409215117', '0');
INSERT INTO `Posts` VALUES ('11', '标签问题还是没解决阿', '1', '<p>到底行不行阿。，标签问题还没解决呢</p>', '0', '0', '0', '1409215255', '0');
INSERT INTO `Posts` VALUES ('12', '标签问题还是没解决阿', '1', '<p>到底行不行阿。，标签问题还没解决呢</p>', '0', '0', '0', '1409216240', '0');
INSERT INTO `Posts` VALUES ('13', '标签问题还是没解决阿', '1', '<p>到底行不行阿。，标签问题还没解决呢</p>', '0', '0', '0', '1409216263', '0');
INSERT INTO `Posts` VALUES ('14', '标签问题还是没解决阿3333333', '1', '<p>到底行不行阿。，标签问题还没解决呢33333333</p>', '0', '0', '3', '1409216368', '1409707677');
INSERT INTO `Posts` VALUES ('15', '标签问题还是没解决阿', '1', '<p>dsadaf</p><pre class=\"brush:python;toolbar:false\">#import&nbsp;sys\r\n\r\nprint&nbsp;sys.argv[0]</pre><p><br/></p>', '0', '0', '16', '1409298198', '1410511119');

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
-- Records of Tags
-- ----------------------------
INSERT INTO `Tags` VALUES ('1', 'xss', '0');
INSERT INTO `Tags` VALUES ('2', 'csrf', '13');
INSERT INTO `Tags` VALUES ('3', 'csrf', '14');
INSERT INTO `Tags` VALUES ('4', '干净', '15');
INSERT INTO `Tags` VALUES ('5', '新鲜', '15');
INSERT INTO `Tags` VALUES ('6', '现代', '15');
INSERT INTO `Tags` VALUES ('7', '独特', '15');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='用户表';

-- ----------------------------
-- Records of Users
-- ----------------------------
INSERT INTO `Users` VALUES ('3', 'admin', 'XSS', '39f5a5bcf3d40c728b539a86e1de5daf', '541f7ba99c9f5', 'admin@xblog.com', 'hehe', '1410237686', '1411349417');
