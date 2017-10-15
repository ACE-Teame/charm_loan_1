/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : charm_wb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-15 21:05:48
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of common
-- ----------------------------
INSERT INTO `common` VALUES ('1', '1', '中国建设银行', 'bank');
INSERT INTO `common` VALUES ('2', '2', '中国农业银行', 'bank');
INSERT INTO `common` VALUES ('3', '3', '中国银行', 'bank');
INSERT INTO `common` VALUES ('4', '4', '中国工商银行', 'bank');
INSERT INTO `common` VALUES ('5', '5', '中国交通银行', 'bank');
INSERT INTO `common` VALUES ('6', '5', '5万', 'quato');
INSERT INTO `common` VALUES ('7', '10', '10万', 'quato');
INSERT INTO `common` VALUES ('8', '15', '15万', 'quato');
INSERT INTO `common` VALUES ('9', '20', '20万', 'quato');
INSERT INTO `common` VALUES ('10', '6', '中国邮政银行', 'bank');
INSERT INTO `common` VALUES ('11', '7', '中国银行', 'bank');
INSERT INTO `common` VALUES ('12', '8', '平安银行', 'bank');
INSERT INTO `common` VALUES ('13', '9', '光大银行', 'bank');
INSERT INTO `common` VALUES ('14', '10', '浦发银行', 'bank');
INSERT INTO `common` VALUES ('15', '11', '中兴银行', 'bank');
INSERT INTO `common` VALUES ('16', '12', '华夏银行', 'bank');
INSERT INTO `common` VALUES ('17', '13', '中国兴业银行', 'bank');
INSERT INTO `common` VALUES ('18', '14', '中国招商银行', 'bank');
INSERT INTO `common` VALUES ('19', '25', '25万', 'quato');
INSERT INTO `common` VALUES ('20', '30', '30万', 'quato');
INSERT INTO `common` VALUES ('21', '35', '35万', 'quato');
INSERT INTO `common` VALUES ('22', '40', '40万', 'quato');
INSERT INTO `common` VALUES ('23', '45', '45万', 'quato');
INSERT INTO `common` VALUES ('24', '50', '50万', 'quato');
INSERT INTO `common` VALUES ('25', '100', '100万', 'quato');

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('7', '黄文龙', '2147483647', '330821197105050519', '三衢路1119号', '1', '5', '1505543789', '101.65.232.181', null);
INSERT INTO `order` VALUES ('8', '严春丽', '2147483647', '142621197403061529', '山西省运城市万荣县解店镇新城村', '1', '5', '1505543825', '60.222.107.23', null);
INSERT INTO `order` VALUES ('9', '朱光桓', '2147483647', '440902199312012970', '茂名市茂南区官山一路299号', '1', '5', '1505544112', '120.239.44.22', null);
INSERT INTO `order` VALUES ('10', '朱光桓', '2147483647', '440902199312012970', '茂名市茂南区官山一路299号', '1', '5', '1505544143', '120.239.44.22', null);
INSERT INTO `order` VALUES ('11', '韩艳鹏', '2147483647', '372301197605170345', '黄七渤五路西。', '1', '5', '1505544266', '27.209.86.236', null);
INSERT INTO `order` VALUES ('12', '宗珂', '2147483647', '34040219961116122x', '安徽省淮南市大通区洛河镇淮南十一中斜对面聚盛酒家', '1', '5', '1505544517', '60.175.75.199', null);
INSERT INTO `order` VALUES ('13', '郭飒妮', '2147483647', '610124199302121846', '雁塔区高新六路126号', '1', '5', '1505544666', '113.143.166.233', null);
INSERT INTO `order` VALUES ('14', '测试', '2147483647', '130522199306100326', '123', '1', '5', '1505545000', '119.248.27.248', null);
INSERT INTO `order` VALUES ('15', '李珈慧', '2147483647', '37062319690303442X', '山东省龙口市怡园南区2013楼西户', '9', '5', '1505545065', '222.135.135.71', null);
INSERT INTO `order` VALUES ('16', '王腾飞', '2147483647', '370283198909163111', '青岛市平度市兰底镇姚丘村523号', '1', '5', '1505545552', '27.193.13.84', null);
INSERT INTO `order` VALUES ('17', '卢洁强', '2147483647', '310228197006152614', '上海市金山区枫泾镇泖桥村四组5010号', '1', '5', '1505545619', '114.89.137.184', null);
INSERT INTO `order` VALUES ('18', '王子凡', '2147483647', '320324198411151574', '无锡市江阴市澄江街道锦江花园10栋902室', '2', '5', '1505545729', '223.64.129.203', null);
INSERT INTO `order` VALUES ('19', '卢洁强', '2147483647', '310228197006152614', '上海市金山区枫泾镇泖桥村四组5010号', '6', '5', '1505545770', '114.89.137.184', null);
INSERT INTO `order` VALUES ('20', '张继祥', '2147483647', '15210119810301031X', '内蒙古呼和浩特市赛罕区金桥千家和泰小区', '1', '5', '1505545868', '120.193.158.213', null);
INSERT INTO `order` VALUES ('21', '李少平', '2147483647', '410526198603181511', '郑州市惠济区西黄刘村', '1', '5', '1505545984', '61.52.71.150', null);
INSERT INTO `order` VALUES ('22', '符金龙', '2147483647', '21140219880929501X', '辽宁省葫芦岛市南票区高桥镇', '1', '5', '1505546137', '123.244.225.161', null);
INSERT INTO `order` VALUES ('23', 'test', '13498736234', '441423199311124749', '翻天', '1', '5', '1505546968', '119.123.127.23', null);
INSERT INTO `order` VALUES ('24', '万凌洁', '15872355211', '420114198509042819', '湖北省武汉市黄陂区武湖农场梅教街水货鲜鱼村', '14', '5', '1505547103', '27.18.199.67', null);
INSERT INTO `order` VALUES ('25', '曹虎', '18792590280', '610115198407303776', '西安市临潼区', '14', '5', '1505547206', '36.47.157.160', null);
INSERT INTO `order` VALUES ('26', '王兆丰', '18357416863', '34102219820205073X', '浙江省宁波市江北区庄桥街道外环东路216号', '1', '5', '1505547320', '39.180.61.25', null);
INSERT INTO `order` VALUES ('27', '王兆丰', '18357416863', '34102219820205073X', '宁波市江北区庄桥街道外环东路216号', '1', '5', '1505547714', '39.180.61.25', null);
INSERT INTO `order` VALUES ('28', 'test', '13723748279', '441423199311124749', '福田', '1', '5', '1505547727', '119.123.127.23', null);
INSERT INTO `order` VALUES ('29', '邱昭福', '15969819923', '370785198711158114', '青岛市李沧区', '4', '5', '1505547974', '183.131.67.204', null);
INSERT INTO `order` VALUES ('30', '邱昭福', '15969819923', '370785198711158114', '青岛市李沧区', '1', '5', '1505548047', '183.131.67.247', null);
INSERT INTO `order` VALUES ('31', '张弟会', '15120279800', '522130197510151220', '贵州省仁怀市新一中茅台小区', '1', '5', '1505548992', '111.124.71.106', null);
INSERT INTO `order` VALUES ('32', '陈二大', '18357416863', '441423199311124749', '山东', '11', '5', '1505549390', '127.0.0.1', null);
INSERT INTO `order` VALUES ('33', 'chen', '13678787656', '410182199306203714', 'shenzhen', '1', '5', '1507726174', '127.0.0.1', 'origin');

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
INSERT INTO `user` VALUES ('1', 'admin', '$2y$10$BMX/JDTSpXLSHZ/kjUjSmu3JyepTKS4UrTQIGD8NG0Qur.MaZQakC', '1500190776', '1505488344', '1507726200', '127.0.0.1', '1');
