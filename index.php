<?php

    define('debug', false); //if debug is on, write logs to page;
    define('root', __DIR__);

    require_once('core/init.php');

    $initializator = new Initializator();

    echo 'MOTD: Сегодня день матери, поздравьте своих мам<br>';
    echo 'It is '.$initializator::settings()['app_name'];

    // как бы выводить дизайн...