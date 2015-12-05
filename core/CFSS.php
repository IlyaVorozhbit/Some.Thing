<?php

	class CoreFunctionsSubSystem {
		
		public static function cookieWrite($name, $value, $expire = '', $path = ''){
			setcookie($name, $value, time()+$expire);
		}
		
		public static function cookieRead($name){
			if(isset($_COOKIE[$name]))
				return $_COOKIE[$name]; // todo potential security breach
		}
		
	}