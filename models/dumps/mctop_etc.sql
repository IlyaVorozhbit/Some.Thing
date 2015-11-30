/*
Navicat MySQL Data Transfer

Source Server         : localvay
Source Server Version : 50545
Source Host           : localhost:3306
Source Database       : mctop

Target Server Type    : MYSQL
Target Server Version : 50545
File Encoding         : 65001

Date: 2015-11-30 14:01:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `rtt_etc`
-- ----------------------------
DROP TABLE IF EXISTS `mctop_etc`;
CREATE TABLE `mctop_etc` (
  `admin_password` varchar(32) DEFAULT '',
  `last_new_day` tinyint(4) DEFAULT '0',
  `last_new_week` tinyint(4) DEFAULT '0',
  `last_new_month` tinyint(4) DEFAULT '0',
  `version` varchar(255) DEFAULT '0',
  `original_version` varchar(255) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Records of rtt_etc
-- ----------------------------
INSERT INTO `mctop_etc` VALUES ('NLO', '22', '47', '11', '5.2.0', '5.2.0');
