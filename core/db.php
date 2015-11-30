<?php
    class db {

        //todo http://habrahabr.ru/post/148701/

        private static $connection;
        private static $con; //alias to self::$connection

        public function __construct(){

            $db = Initializator::settings()['db'];

            self::$connection = self::$con = new mysqli($db['server'], $db['user'], $db['password'], $db['db']);

            if (self::$connection ->connect_errno) {
                if(debug)
                    echo "Не удалось подключиться к MySQL: " . self::$connection ->connect_error;
                else
                    echo 'Имеются некоторые проблемы с Базой Данных. Подождите, пожалуйста.';
            }

        }

        public static function query($query){
        }

        public static function selectOne($query){
            $res = mysqli_query(self::$connection, $query);
            return mysqli_fetch_assoc($res);
        }

        public static function selectAll($query){
            $res = mysqli_query(self::$connection, $query);
            return mysqli_fetch_all($res, MYSQLI_ASSOC);
        }

    }