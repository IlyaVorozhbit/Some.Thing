<?php

    class Initializator {

        private static $settings;

        public function __construct(){

            if(debug)
                echo 'Start initializing...<br>';

            self::$settings = require_once(root.'/settings/main.php');

        }

        public static function settings()
        {
            return self::$settings;
        }

    }