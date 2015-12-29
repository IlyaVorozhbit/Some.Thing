<?php

namespace MCTop\Core;

class Request {

    private $get = [];
    private $post = [];

    public function __construct() {
        $this->get = $_GET;
        $this->post = $_POST;
    }

    /**
     * Получить значение из GET запроса
     * 
     * @param string $key Ключ
     * @param mixed $default Значение, если ключ не задан
     * @return mixed
     */
    public function get($key, $default = null) {
        return isset($this->get[$key]) ? $this->get[$key] : $default;
    }

    /**
     * Получить значение из POST запроса
     * 
     * @param string $key Ключ
     * @param mixed $default Значение, если ключ не задан
     * @return mixed
     */
    public function post($key, $default = null) {
        return isset($this->post[$key]) ? $this->post[$key] : $default;
    }

}
