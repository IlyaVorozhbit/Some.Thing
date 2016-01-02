<?php

namespace Some\Core;

class Router {

    /**
     * @var Request
     */
    private $request;

    /**
     * @var String Модуль
     */
    private $module = '';

    /**
     * @var String Действие модуля
     */
    private $action = '';

    public function __construct(Request $request, $module, $action) {
        $this->request = $request;
        $this->module = $module;
        $this->action = $action;
    }

    public function handleRequest() {
        $this->defineModule();
        $this->defineAction();
    }

    public function defineModule() {
        $module = $this->request->get('module', $this->module);
        if (preg_match("/^[a-z0-9]+$/", $module) === 1) {
            $this->module = $module;
        }
    }

    public function defineAction() {
        $action = $this->request->get('mode', $this->action);
        if (preg_match("/^[a-z0-9]+$/", $action) === 1) {
            $this->action = $action;
        }
    }

    /**
     * @return Request
     */
    function getRequest() {
        return $this->request;
    }

    function getModule() {
        return $this->module;
    }

    function getAction() {
        return $this->action;
    }

}
