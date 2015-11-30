/*
Navicat MySQL Data Transfer

Source Server         : localvay
Source Server Version : 50545
Source Host           : localhost:3306
Source Database       : mctop

Target Server Type    : MYSQL
Target Server Version : 50545
File Encoding         : 65001

Date: 2015-11-30 14:11:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mctop_admins`
-- ----------------------------
DROP TABLE IF EXISTS `mctop_admins`;
CREATE TABLE `mctop_admins` (
  `admin` varchar(25) NOT NULL DEFAULT '',
  `password` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `level` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mctop_admins
-- ----------------------------
INSERT INTO `mctop_admins` VALUES ('Medvedkoo', 'НЛО_СКРЫЛО_ПАРОЛЬ', 'Илья Ворожбит', '3');
INSERT INTO `mctop_admins` VALUES ('Rocotos', 'НЛО_СКРЫЛО_ПАРОЛЬ', 'Владимир Чолокян', '3');
INSERT INTO `mctop_admins` VALUES ('Dmitry', 'НЛО_СКРЫЛО_ПАРОЛЬ', null, '1');
INSERT INTO `mctop_admins` VALUES ('Screamo', 'НЛО_СКРЫЛО_ПАРОЛЬ', null, '1');
INSERT INTO `mctop_admins` VALUES ('kDas', 'НЛО_СКРЫЛО_ПАРОЛЬ', null, '3');
