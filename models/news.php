<?php

    class News { //в идеале, конечно, наследуемся от ActiveRecord какого нибудь

        public static function get_last_news(){
            return Core::db()->select("SELECT * FROM `mctop_news` ORDER BY `id` DESC LIMIT 1");
        }

        public static function get_news_post_by_id($id){
            $id = (int)$id;
            return Core::db()->selectOne("SELECT * FROM `mctop_news` WHERE `id` = ?", [$id]);
        }

        public static function get_posts($count = 10){
			$count = intval($count);
            return Core::db()->select("SELECT * FROM `mctop_news` ORDER BY `id` DESC LIMIT {$count}");
        }

    }