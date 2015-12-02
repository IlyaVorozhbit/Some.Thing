<?php

    define('IN_DEV', true); //if debug is on, write logs to page;
    define('ROOT_DIR', __DIR__);

	@ini_set("display_errors", IN_DEV); // Вывод ошибок в релизе стоит отключить из соображений безопасности. Они будут писаться в лог.

    require_once('core/init.php');

    $initializator = new Initializator();

    $motd = 'MOTD: Сегодня день матери, поздравьте своих мам<br>'; // может браться из базы
    $version = $initializator::settings()['version']; // может браться из базы
    $content = 'It is '.$initializator::settings()['app_name'];

    require_once('design/oldschool.php');