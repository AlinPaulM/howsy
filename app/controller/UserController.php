<?php
namespace App\controller;
use App\core\Controller;
use App\model\User;
use App\helper\Session;
use App\helper\Url;

class UserController extends Controller {
    private $user;

    public function __construct() {
        $this->user = new User;
    }

    public function login() {
        if($_SERVER["REQUEST_METHOD"] != "POST") return;
            
        $username = trim($_POST['username']);
        $password = md5(trim($_POST['password']));
        if($userData = $this->user->get($username, $password)) {
            // user logged in
            Session::set('user', $userData);
            Url::redirect('home');
        } else {
            Url::redirect('home/login');
        }
    }

    public function logout() {
        Session::unset('user');
        Url::redirect('home/login');
    }
}