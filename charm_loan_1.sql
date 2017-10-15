/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : charm_loan_1

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-15 21:50:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `common`
-- ----------------------------
DROP TABLE IF EXISTS `common`;
CREATE TABLE `common` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` int(3) NOT NULL,
  `val` varchar(36) NOT NULL,
  `type` varchar(8) NOT NULL,
  `order` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of common
-- ----------------------------
INSERT INTO `common` VALUES ('1', '1', '中国建设银行', 'bank', '1');
INSERT INTO `common` VALUES ('2', '2', '中国农业银行', 'bank', '1');
INSERT INTO `common` VALUES ('3', '3', '中国银行', 'bank', '1');
INSERT INTO `common` VALUES ('4', '4', '中国工商银行', 'bank', '1');
INSERT INTO `common` VALUES ('5', '5', '中国交通银行', 'bank', '2');
INSERT INTO `common` VALUES ('6', '5', '5万', 'quato', '5');
INSERT INTO `common` VALUES ('7', '10', '10万', 'quato', '10');
INSERT INTO `common` VALUES ('8', '15', '15万', 'quato', '15');
INSERT INTO `common` VALUES ('9', '20', '20万', 'quato', '20');
INSERT INTO `common` VALUES ('10', '6', '中国邮政银行', 'bank', '1');
INSERT INTO `common` VALUES ('11', '7', '中国银行', 'bank', '1');
INSERT INTO `common` VALUES ('12', '8', '平安银行', 'bank', '1');
INSERT INTO `common` VALUES ('13', '9', '光大银行', 'bank', '1');
INSERT INTO `common` VALUES ('14', '10', '浦发银行', 'bank', '1');
INSERT INTO `common` VALUES ('15', '11', '中兴银行', 'bank', '1');
INSERT INTO `common` VALUES ('16', '12', '华夏银行', 'bank', '1');
INSERT INTO `common` VALUES ('17', '13', '中国兴业银行', 'bank', '1');
INSERT INTO `common` VALUES ('18', '14', '中国招商银行', 'bank', '1');
INSERT INTO `common` VALUES ('19', '25', '25万', 'quato', '25');
INSERT INTO `common` VALUES ('20', '30', '30万', 'quato', '30');
INSERT INTO `common` VALUES ('21', '35', '35万', 'quato', '35');
INSERT INTO `common` VALUES ('22', '40', '40万', 'quato', '40');
INSERT INTO `common` VALUES ('23', '45', '45万', 'quato', '45');
INSERT INTO `common` VALUES ('24', '50', '50万', 'quato', '50');
INSERT INTO `common` VALUES ('25', '100', '100万', 'quato', '100');
INSERT INTO `common` VALUES ('26', '3', '3万', 'quato', '3');

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(36) DEFAULT NULL,
  `phone` varchar(24) DEFAULT NULL,
  `cardid` varchar(36) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `bank` tinyint(1) NOT NULL,
  `quato` tinyint(1) NOT NULL,
  `time` int(10) NOT NULL,
  `ip` varchar(16) DEFAULT NULL,
  `c` varchar(48) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('32', '陈二大', '18357416863', '441423199311124749', '山东', '11', '5', '1505549390', '127.0.0.1', null);
INSERT INTO `order` VALUES ('33', 'chen', '13678787656', '441423199311124749', 'shenzhen', '1', '5', '1507726174', '127.0.0.1', 'origin');
INSERT INTO `order` VALUES ('34', 'chen', '18357416863', '441423199311124749', 'sz', '5', '5', '1508073565', '127.0.0.1', '123');
INSERT INTO `order` VALUES ('35', 'chen', '18357416863', '441423199311124749', '12', '5', '3', '1508074665', '127.0.0.1', '123');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) DEFAULT NULL,
  `login_time` int(10) DEFAULT NULL,
  `ip` varchar(48) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '$2y$10$BMX/JDTSpXLSHZ/kjUjSmu3JyepTKS4UrTQIGD8NG0Qur.MaZQakC', '1500190776', '1505488344', '1508073703', '127.0.0.1', '1');
