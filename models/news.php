<?php

    class News { //в идеале, конечно, наследуемся от ActiveRecord какого нибудь

        public static function get_last_news(){
            return Core::db()->selectOne('select * from mctop_news order by id desc limit 1');
        }

        public static function get_news_post_by_id($id){
            $id = (int)$id;
            return Core::db()->selectOne("select * from mctop_news where id = $id");
        }

        public static function get_posts($count = 10){
            return Core::db()->selectAll("select * from mctop_news order by id desc limit 10");
        }

    }