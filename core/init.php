<?php

    class Initializator {

        private static $settings;
        public $core; // доступ к ядру

        public function __construct(){
            self::$settings = require_once(ROOT_DIR.'/settings/main.php');
            require_once(ROOT_DIR.'/settings/constants.php');
            require_once(ROOT_DIR.'/core/MySQL_PDO.php');
            require_once(ROOT_DIR.'/core/CFSS.php');
            require_once(ROOT_DIR.'/models/servers.php');
            require_once(ROOT_DIR.'/models/news.php');

            require_once(ROOT_DIR.'/core/core.php');

            $this->core = new Core();

        }

        public static function settings()
        {
            return self::$settings;
        }

    }