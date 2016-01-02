<?php

use \Some\Core;

class News {

    public static function get_last_news() {
        return Core::db()->select("SELECT * FROM `mctop_news` ORDER BY `id` DESC LIMIT 1");
    }

    public static function get_news_post_by_id($id) {
        $id = (int) $id;
        $post = Core::db()->selectOne("SELECT * FROM `mctop_news` WHERE `id` = ?", [$id]);

        if (!$post) { // поста не нашлось
            return ['error' => 404];
        } else {
            $c = Cookie::read('post_' . $id . '_viewed', 0);
            if ($c == 0) {
                Cookie::set('post_' . $id . '_viewed', 1, time() + 24 * 60 * 60, '/');
                Core::db()->runQuery("UPDATE `mctop_news` set views = views+1 where `id` = ?", [$id]);
            }
            return $post;
        }
    }

    public static function get_posts($count = 10) {
        $count = intval($count);
        return Core::db()->select("SELECT * FROM `mctop_news` ORDER BY `id` DESC LIMIT {$count}");
    }

}
