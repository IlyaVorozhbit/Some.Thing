DROP TABLE IF EXISTS `mctop_users`;
CREATE TABLE `mctop_users` (
  `id` int(25) NOT NULL DEFAULT '0',
  `vk_id` int(25) DEFAULT NULL,
  `name` varchar(90) DEFAULT NULL,
  `server` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;