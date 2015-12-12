<?php

class CoreFunctionsSubSystem {

    public static function abort($errorCode = 404, $title = 'Ресурс не найден', $text = 'Простите, мы правда старались') {
        Core::statusChange(404);
        require_once(ROOT_DIR . '/design/core/error.php');
    }

}
