<?php

    class Core {

        private $module;
        private $mode;
		/**
		 * @var MySQL_PDO Чтобы IDE понимала, что у нас тут
		 */
        private static $db;

        public function __construct(){
            $this->connectToDatabase();

            $this->module = $this->defineModule();
            $this->mode = $this->defineMode();
        }

        public function connectToDatabase(){
			$dbSettings = Initializator::settings()['db'];
            self::$db = new MySQL_PDO($dbSettings['server'], $dbSettings['user'], $dbSettings['password'], $dbSettings['db']);
        }

        public function defineModule(){
			if($_REQUEST['module'] && preg_match("/^[a-z0-9]+$/", $_REQUEST['module'])) return $_REQUEST['module'];
            return "news";
        }

        public function defineMode(){
			if($_REQUEST['mode'] && preg_match("/^[a-z0-9]+$/", $_REQUEST['mode'])) return $_REQUEST['mode'];
            return "index";
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