<?php

    class Servers {

        const whitelist_enabled = 1;
        const whitelist_disabled = 2;
        const whitelist_undefined = 3;
        const whitelist_enabled_for_a_while = 4;

        public static $whitelist_options = [
            self::whitelist_enabled  => 'Включен',
            self::whitelist_disabled  => 'Выключен',
            self::whitelist_undefined  => 'Необходимо уточнить наличие',
            self::whitelist_enabled_for_a_while  => 'Включен на некоторое время',
        ];

        const client_undefined = 0;
        const client_license = 1;
        const client_pirate = 2;
        const client_own_launcher = 3;
        const client_mctop_launcher = 4;

        public static $client_options = [
            self::client_undefined  => 'Необходимо уточнить у администрации',
            self::client_license  => 'Только с лицензионной копией',
            self::client_pirate  => 'Свободный вход, с любой копией игры',
            self::client_own_launcher  => 'У сервера свой лаунчер',
            self::client_mctop_launcher  => 'Coming Soon',
        ];

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

        public static function e($str){
            echo $str;
        }

        public static function pure($str){
            echo htmlspecialchars($str,ENT_QUOTES);
        }

        public static function version($obj){
            Servers::pure($obj->serv_version);
        }

        public static function client($obj){
            Servers::pure(self::$client_options[$obj->clienttype]);
        }

        public static function whitelist($obj){
            Servers::pure(self::$whitelist_options[$obj->whitelist]);
        }

        public static function uptime($obj){
            if($obj->attemps > 0)
               Servers::pure(round(($obj->success/$obj->attemps*100),3).' %');
            else
                echo 'Not checking yet';
        }

        public static function getServersFromMCSV($page){

            $url = 'http://minecraft-servers.su/api/index.php?page='.$page;

            if( $curl = curl_init() ) {
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
                $out = curl_exec($curl);
                curl_close($curl);
            }

            return json_decode($out);

        }


    }