SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mctop_servers`
-- ----------------------------
DROP TABLE IF EXISTS `mctop_servers`;
CREATE TABLE `mctop_servers` (
  `id` bigint(15) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(32) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `short_url` varchar(255) DEFAULT '',
  `title` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT '',
  `av_online` int(11) DEFAULT NULL,
  `serv_version` varchar(20) NOT NULL,
  `serv_ip` varchar(45) NOT NULL,
  `serv_port` varchar(10) NOT NULL DEFAULT '80',
  `banner_url` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `join_date` date DEFAULT '0000-00-00',
  `active` tinyint(1) DEFAULT '1',
  `openid` tinyint(1) DEFAULT '0',
  `user_ip` varchar(255) DEFAULT '',
  `whitelist` tinyint(1) DEFAULT '3',
  `clienttype` tinyint(1) DEFAULT '0',
  `det_description` varchar(600) DEFAULT NULL,
  `status_er` tinyint(1) DEFAULT '0',
  `ban_reason` varchar(255) DEFAULT NULL,
  `news` varchar(255) DEFAULT NULL,
  `vip` tinyint(1) DEFAULT '0',
  `time` int(20) DEFAULT '0',
  `status` tinyint(20) DEFAULT '1',
  `attemps` int(20) DEFAULT '1',
  `success` int(20) DEFAULT '1',
  `advertiser` tinyint(1) DEFAULT '0',
  `paid_to` varchar(5) DEFAULT NULL,
  `uptime` varchar(3) DEFAULT '100',
  `copy_descr` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10007 DEFAULT CHARSET=cp1251;