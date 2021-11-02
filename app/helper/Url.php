<?php
namespace App\helper;

class Url {
    public static function get($url = '') {
        return APP_URL . trim($url, '/');
    }

    public static function redirect($url = '') {
        if ($url) {
            header("location: " . self::get($url));
            die();
        }
    }
}