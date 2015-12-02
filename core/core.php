<?php

    class Core {

        private $module;
        private $mode;
        private static $db;

        public function __construct(){
            $this->connect_to_db();
            self::$db->Query('SET NAMES utf8');

            $this->module = $this->defineModule();
            $this->mode = $this->defineMode();
        }

        public function connect_to_db(){
            self::$db = new db;
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