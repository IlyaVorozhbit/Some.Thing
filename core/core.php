<?php

    class Core {

        private $module;
        private $mode;
        private static $db;

        public function __construct(){

            if(debug)
                echo 'Core initializing';

            $this->connect_to_db();
            self::$db->Query('SET NAMES utf8');

            $this->module = $this->defineModule();
            $this->mode = $this->defineMode();

        }

        public function connect_to_db(){

            $db = Initializator::settings()['db'];

            self::$db = new \phpsql\connectors\mysql();
            self::$db->OpenConnection(
                $db['user'], $db['password'], $db['server'], $db['port'], $db['db'], []
            );

        }

        public function defineModule(){
            return isset($_GET['module'])? $_GET['module'] : 'news';
        }

        public function defineMode(){
            return isset($_GET['mode'])? $_GET['mode'] : 'index';
        }

        // функции ниже потому что доступ до них - приватный
        public function module(){
            return $this->module;
        }

        public function mode(){
            return $this->mode;
        }

        public static function db(){
            return self::$db;
        }

    }