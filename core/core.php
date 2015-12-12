<?php

class Core {

    private static $some_core;
    private static $some_register = [];
    private static $module;
    private static $mode;

    /**
     * @var MySQL_PDO
     */
    private static $db;

    /**
     * Core functions SubSystem
     *
     * @var CoreFunctionsSubSystem
     */
    private static $f;
    private static $status = 0;

    public function __construct() {
        self::$some_core = $this;
        self::$some_register = [];

        self::$f = new CoreFunctionsSubSystem;
        $this->connectToDatabase();

        self::$module = $this->defineModule();
        self::$mode = $this->defineMode();
    }

    public function connectToDatabase() {
        $dbSettings = Initializator::settings()['db'];
        self::$db = new MySQL_PDO($dbSettings['server'], $dbSettings['user'], $dbSettings['password'], $dbSettings['db']);
    }

    public function defineModule() {
        if (isset($_GET['module']) && preg_match("/^[a-z0-9]+$/", $_GET['module'])) {
            return $_GET['module'];
        }
        return 'news';
    }

    public function defineMode() {
        if (isset($_GET['mode']) && preg_match("/^[a-z0-9]+$/", $_GET['mode'])) {
            return $_GET['mode'];
        }

        return 'index';
    }

    // функции ниже потому что доступ до них - приватный
    public function module() {
        return self::$module;
    }

    public function mode() {
        return self::$mode;
    }

    public static function status() {
        return self::$status;
    }

    public static function statusIsOkey() {
        if (self::$status == 0) {
            Core::set('html_title', 'Главная страница');
            return true;
        }

        return false;
    }

    public static function statusChange($value) {
        //todo log: warning, status is changing
        self::$status = $value;
    }

    /**
     * @return MySQL_PDO
     */
    public static function db() {
        return self::$db;
    }

    /**
     * @return CoreFunctionsSubSystem
     */
    public static function f() {
        return self::$f;
    }

    public static function set($key, $value) {
        // Использование данной статической функции в контексте:
        // Core::set('html_title', 'Новости Minecraft'); // Записать значение в Some.Регистр
        // Core::get('html_title');
        // Получить значения из Some.Регистра по ключу

        self::$some_register[$key] = $value;
    }

    public static function get($name = '') {
        // Использование данной статической функции в контексте:
        // Core::get('html_title');

        return self::$some_register[$name];
    }

}
