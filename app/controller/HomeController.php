<?php
namespace App\controller;
use App\core\Controller;
use App\helper\Authenticate;
use App\helper\Url;

class HomeController extends Controller {
    public function index() {
        $user = Authenticate::user();

        if($user)
            $this->view('home/index', $user);
    }

    public function login() {
        $user = Authenticate::user(false);

        if($user)
            Url::redirect('home');
        else
            $this->view('home/login');
    }
}