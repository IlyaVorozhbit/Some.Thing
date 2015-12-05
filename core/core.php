<?php

    class Core {

        private $module;
        private $mode;
		/**
		 * @var MySQL_PDO Чтобы IDE понимала, что у нас тут
		 */
        private static $db;
        private static $f; // Core functions SubSystem 
		
        public function __construct(){
			self::$f = new CoreFunctionsSubSystem;
            $this->connectToDatabase();

            $this->module = $this->defineModule();
            $this->mode = $this->defineMode();
        }

        public function connectToDatabase(){
			$dbSettings = Initializator::settings()['db'];
            self::$db = new MySQL_PDO($dbSettings['server'], $dbSettings['user'], $dbSettings['password'], $dbSettings['db']);
        }

        public function defineModule(){
			if($_GET['module'] && preg_match("/^[a-z0-9]+$/", $_GET['module'])) return $_GET['module'];
            return "news";
        }

        public function defineMode(){
            if(isset($_GET['mode']))
			    if($_GET['mode'] && preg_match("/^[a-z0-9]+$/", $_GET['mode'])) return $_GET['mode'];

            return "index";
        }

        // функции ниже потому что доступ до них - приватный
        public function module(){
            return $this->module;
        }

        public function mode(){
            return $this->mode;
        }

        public static function f(){
            return self::$f;
        }
		
        public static function db(){
            return self::$db;
        }

    }