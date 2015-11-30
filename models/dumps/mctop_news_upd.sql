ALTER TABLE `mctop_news`
MODIFY COLUMN `author_id`  int(10) UNSIGNED NULL DEFAULT NULL AFTER `title`,
ADD COLUMN `active`  tinyint NOT NULL DEFAULT 1 AFTER `full`;

