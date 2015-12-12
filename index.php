<?php

define('IS_LOCAL', true); // if is true - don't redirect us to mctop.me
define('IN_DEV', false); //if debug is on, write logs to page;
define('ROOT_DIR', __DIR__);

@ini_set("display_errors", IN_DEV); // Вывод ошибок в релизе стоит отключить из соображений безопасности. Они будут писаться в лог.

if (!IS_LOCAL && $_SERVER['HTTP_HOST'] != 'mctop.me') {
    header('Location: http://mctop.me');
    exit('<a href="http://mctop.me">http://mctop.me</a>');
}

require_once('core/init.php');
$initializator = new Initializator();

$version = $initializator::settings()['version'];

if (Core::statusIsOkey()) {
    require_once('design/themes/default/oldschool.php');
}
	
