<?php

class CoreFunctionsSubSystem {

    public function abort($errorCode = 404, $title = 'Ресурс не найден', $text = 'Простите, мы правда старались') {
        \Some\Core::statusChange($errorCode);
        require_once(ROOT_DIR . '/design/core/error.php');
    }

}
