<?php

    class Core {

        private $module;
        private $mode;

        public function __construct(){

            if(debug)
                echo 'Core initializing';

            $this->module = $this->defineModule();
            $this->mode = $this->defineMode();

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