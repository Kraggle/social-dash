<?php

namespace App\Helpers;

use DateTime;

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

    public static function oneTrue($array) {
        foreach ($array as $value)
            if (AppHelper::isTrue($value)) return true;
        return false;
    }

    public static function checked($value) {
        return AppHelper::isTrue($value) ? ' checked' : '';
    }

    public static function selected($value, $other) {
        return $value == $other ? ' selected' : '';
    }

    public static function log(...$values) {
        AppHelper::print($values);
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

    public static function makeClass($classes) {
        try {
            return implode(' ', $classes);
        } catch (\Throwable $th) {
            //throw $th;
        }
        return $classes ?? '';
    }

    public static function generateToken() {
        //Generate a random string.
        $token = openssl_random_pseudo_bytes(16);

        //Convert the binary data into hexadecimal representation.
        $token = bin2hex($token);

        return $token;
    }

    public static function timestamp($modify = '') {
        $date = new DateTime();
        if ($modify) $date->modify($modify);
        return $date;
    }

    public static function expired($stamp) {
        return new DateTime() > $stamp;
    }

    public static function valid($stamp) {
        return !AppHelper::expired($stamp);
    }

    public static function getPageCookie($page) {
        $cookie = $_COOKIE[$page] ?? (object) [];
        if (is_string($cookie)) $cookie = json_decode($cookie);
        return $cookie;
    }

    /**
     * @param array $arrays
     * @return array Merged array
     */
    public static function arrayMerge(...$arrays) {
        $target = array_shift($arrays);

        foreach ($arrays as $array) {
            foreach ($array as $key => &$value) {
                if (is_array($value) && isset($target[$key]) && is_array($target[$key])) {
                    if (AppHelper::isAssoc($value)) {
                        $target[$key] = AppHelper::arrayMerge($target[$key], $value);
                    } else {
                        $target[$key] = array_merge($target[$key], $value);
                    }
                } else {
                    $target[$key] = $value;
                }
            }
        }

        return $target;
    }

    /**
     * @return array 
     */
    public static function formDefaults() {
        return [
            'id' => AppHelper::makeId(),
            'name' => '',
            'label' => '',
            'placeholder' => '',
            'value' => '',
            'type' => 'text',
            'disabled' => false,
            'readonly' => false,
            'required' => false,
            'prepend' => false,
            'append' => false,
            'class' => '',
            'attrs' => [],
            'group' => [
                'class' => [],
                'attrs' => [],
                'size' => '',
            ],
            'cookie' => false
        ];
    }

    public static function isAssoc($array) {
        return array_keys($array) !== range(0, count($array) - 1);
    }
}
