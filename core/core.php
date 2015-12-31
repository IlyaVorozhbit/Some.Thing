<?php

namespace Some;

use \Some\Core\Router;
use \Some\Core\Request;

class Core {

    private static $some_core;
    private static $some_register = [];

    /**
     * @var \MySQL_PDO
     */
    private static $db;

    /**
     * @var Router Роутер
     */
    private $router;

    /**
     * Core functions SubSystem
     *
     * @var \CoreFunctionsSubSystem
     */
    private static $f;
    private static $status = 0;

    public function __construct() {
        self::$some_core = $this;
        self::$some_register = [];

        self::$f = new \CoreFunctionsSubSystem;
        $this->connectToDatabase();

        $request = new Request();
        $this->router = new Router($request, 'news', 'index');
        $this->router->handleRequest();
    }

    public function connectToDatabase() {
        $dbSettings = \Initializator::settings()['db'];
        self::$db = new \MySQL_PDO($dbSettings['server'], $dbSettings['user'], $dbSettings['password'], $dbSettings['db']);
    }

    function getRouter() {
        return $this->router;
    }

    public function getModule() {
        return $this->router->getModule();
    }

    public function getAction() {
        return $this->router->getAction();
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
     * @return \MySQL_PDO
     */
    public static function db() {
        return self::$db;
    }

    /**
     * @return \CoreFunctionsSubSystem
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
