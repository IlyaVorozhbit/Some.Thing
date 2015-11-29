CREATE TABLE `mctop_news` (
`id`  int UNSIGNED NOT NULL AUTO_INCREMENT ,
`title`  varchar(255) NOT NULL ,
`preview`  varchar(255) NOT NULL ,
`full`  text NOT NULL ,
`author_id`  int UNSIGNED NULL ,
`created_at`  timestamp NULL ,
PRIMARY KEY (`id`)
)
;

