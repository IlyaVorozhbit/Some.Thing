<?php

class Cookie {

    /**
     * Установить cookie.
     * 
     * @param type $name Имя cookie.
     * @param type $value Значение cookie.
     * @param type $expire Время, когда срок действия cookie истекает.
     * @param type $path Путь к директории на сервере, из которой будут доступны
     *  cookie. Если задать '/', cookie будут доступны во всем домене.
     */
    public static function set($name, $value, $expire, $path = '') {
        setcookie($name, $value, $expire, $path);
    }

    /**
     * Получить значение cookie.
     * 
     * @param type $name Имя cookie.
     * @param type $default Значение, которое будет возврашено по умолчанию,
     * если cookie с заданныи именем не существует.
     * @return string Значение cookie.
     */
    public static function read($name, $default = '') {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : $default;
    }

    /**
     * Удалить cookie.
     * 
     * @param type $name Имя cookie.
     * @param type $path Путь к директории на сервере, из которой cookie были
     * изначально доступны.
     */
    public static function delete($name, $path = '') {
        setcookie($name, '', time() - 3600, $path);
    }

}
