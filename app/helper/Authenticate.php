<?php
namespace App\helper;
use App\helper\Url;

class Authenticate {
    public static function user(bool $redirect = true) {
        $user = Session::get('user');

        if(!$user) {
            if($redirect) Url::redirect('home/login');
            else return;
        } else {
            return $user;
        }
    }
}