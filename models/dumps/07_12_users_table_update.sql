ALTER TABLE `mctop_users`
DROP COLUMN `server`,
CHANGE COLUMN `vk_id` `email`  varchar(255) NULL DEFAULT NULL AFTER `id`,
CHANGE COLUMN `name` `password`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `email`,
ADD COLUMN `login`  varchar(255) NULL AFTER `id`,
ADD COLUMN `registered`  timestamp NULL AFTER `password`,
ADD COLUMN `name`  varchar(255) NULL AFTER `registered`,
ADD COLUMN `lastname`  varchar(255) NULL AFTER `name`,
ADD COLUMN `gender`  tinyint NULL AFTER `lastname`,
ADD COLUMN `birthday`  timestamp NULL AFTER `gender`,
ADD COLUMN `avatar`  varchar(255) NULL AFTER `birthday`;

