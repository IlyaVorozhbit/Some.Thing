<?php

    class Initializator {

        private static $settings;
        public $core; // доступ к ядру

        public function __construct(){

            self::$settings = require_once(root.'/settings/main.php');
            require_once(root.'/core/db.php');
            require_once(root.'/models/servers.php');
            require_once(root.'/models/news.php');

            require_once(root.'/core/core.php');

            $this->core = new Core();

        }

        public static function settings()
        {
            return self::$settings;
        }

    }