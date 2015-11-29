<?php

    class Core {

        private $module;
        private $mode;
        private $db;

        public function __construct(){

            if(debug)
                echo 'Core initializing';

            $this->connect_to_db();
            $this->module = $this->defineModule();
            $this->mode = $this->defineMode();

        }

        public function connect_to_db(){
            $this->db = new \phpsql\connectors\mysql();
            $this->db->OpenConnection('root', '', '127.0.0.1', '3306', 'testing', []);
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

    }