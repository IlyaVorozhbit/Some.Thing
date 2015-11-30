<?php

    define('debug', false); //if debug is on, write logs to page;
    define('root', __DIR__);

    require_once('core/init.php');

    $initializator = new Initializator();

    $motd = 'MOTD: Сегодня день матери, поздравьте своих мам<br>'; // может браться из базы
    $version = $initializator::settings()['version']; // может браться из базы
    $content = 'It is '.$initializator::settings()['app_name'];

    require_once('design/layout.php');