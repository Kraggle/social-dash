<?php

namespace App\Helpers;

class AppHelper {
    public static function toDotNotation($var) {
        return preg_replace(['/\[/', '/\]/'], ['.', ''], $var);
    }
}
