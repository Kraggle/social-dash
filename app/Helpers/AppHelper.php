<?php

namespace App\Helpers;

class AppHelper {
    /**
     * Change an elements name e.g. `name[value]` to
     * dot notation e.g. `name.value`.
     *
     * @param string $var
     * @return string
     */
    public static function toDot($var) {
        return preg_replace(['/\[/', '/\]/'], ['.', ''], $var);
    }

    public static function isTrue($value) {
        return in_array($value, ['on', 'true', true, 1, '1'], true);
    }

    public static function checked($value) {
        return AppHelper::isTrue($value) ? ' checked' : '';
    }

    public static function selected($value, $other) {
        return $value == $other ? ' selected' : '';
    }

    public static function print(...$values) {
        foreach ($values as $value) {
            if (in_array(gettype($value), ['array', 'object', 'boolean']))
                error_log(json_encode($value, JSON_PRETTY_PRINT));
            else
                error_log($value);
        }
    }

    public static function makeId($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < $length; $i++) {
            $randstring .= $characters[rand(0, strlen($characters) - 1)];
        }
        return "_$randstring";
    }

    public static function truncate($string, $length = 75) {
        return strlen($string) > $length ? trim(substr($string, 0, $length)) . "..." : $string;
    }

    public static function makeAttrs(array $attrs) {
        $return = '';
        foreach ($attrs as $attr => $value) {
            $type = gettype($value);
            if ($type == 'array' || $type == 'object')
                $value = json_encode($value);
            $return .= " $attr=$value";
        }
        return $return;
    }
}
