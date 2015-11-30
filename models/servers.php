<?php

    class Servers {

        public static function get($count = 10, $offset = false){
            $servers = Core::db()->selectAll("select * from mctop_servers order by id desc limit 10");

            foreach ($servers as $key => $server){
                $servers[$key] = (object) $server;
            }

            return $servers;
        }

        public static function get_last_server(){
            return (object) Core::db()->selectOne('select * from mctop_servers order by id desc limit 1');
        }

        public static function get_servert_by_id($id){
            $id = (int)$id;
            return (object) Core::db()->selectOne("select * from mctop_servers where id = $id");
        }

    }