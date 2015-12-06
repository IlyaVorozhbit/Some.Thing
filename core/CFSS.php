<?php

	class CoreFunctionsSubSystem {
		
		public static function cookieWrite($name, $value, $expire = '', $path = ''){
			setcookie($name, $value, time()+$expire);
		}
		
		public static function cookieRead($name){
			if(isset($_COOKIE[$name]))
				return $_COOKIE[$name]; // todo potential security breach
		}
		
		public static function abort($errorCode = 404, $title = 'Ресурс не найден', $text = 'Простите, мы правда старались'){
			Core::statusChange(404);
			require_once(ROOT_DIR.'/design/core/error.php');
		}
		
	}