<?php
namespace App\core;

class Controller {
    public function view($view, $data = []) {
        require_once '../app/view/layout/header.php';
        require_once '../app/view/' . $view . '.php';
        require_once '../app/view/layout/footer.php';
    }
}