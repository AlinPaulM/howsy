<?php
namespace App\helper;

class Session {
    public static function get(string $key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public static function set(string $key, $val) {
        $_SESSION[$key] = $val;
    }

    public static function unset(string $key) {
        unset($_SESSION[$key]);
    }
}