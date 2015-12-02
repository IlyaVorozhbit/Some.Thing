<?php

    class Servers {

        public static function get($count = 10, $offset = false){
			$count = intval($count);
            $servers = Core::db()->select("SELECT * FROM `mctop_servers` ORDER BY `id` DESC LIMIT {$count}");

            foreach ($servers as $key => $server){
                $servers[$key] = (object) $server;
            }

            return $servers;
        }

        public static function get_last_server(){
            return (object) Core::db()->selectOne("SELECT * FROM `mctop_servers` ORDER BY `id` DESC LIMIT 1");
        }

        public static function get_servers_by_id($id){
            $id = (int)$id;
            return (object) Core::db()->selectOne("SELECT * FROM `mctop_servers` WHERE `id` = ?", [$id]);
        }

    }