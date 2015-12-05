ALTER TABLE `mctop_users`
MODIFY COLUMN `name`  varchar(90) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `id`,
MODIFY COLUMN `server`  text CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `name`,
MODIFY COLUMN `vk_id`  varchar(255) NULL DEFAULT NULL AFTER `server`,
ADD COLUMN `email`  varchar(255) NOT NULL AFTER `id`,
ADD COLUMN `login`  varchar(255) NOT NULL AFTER `email`,
ADD COLUMN `password`  varchar(255) NOT NULL AFTER `login`,
ADD COLUMN `facebook_id`  varchar(255) NULL AFTER `vk_id`,
ADD COLUMN `twitter_id`  varchar(255) NULL AFTER `facebook_id`,
ADD COLUMN `email_approved`  tinyint(1) NOT NULL AFTER `twitter_id`,
ADD COLUMN `registered`  time NOT NULL AFTER `email_approved`;

