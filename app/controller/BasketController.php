<?php
namespace App\controller;
use App\core\Controller;
use App\model\Basket;
use App\helper\Url;
use App\helper\Authenticate;

class BasketController extends Controller {
    private $basket;
    private $user;

    public function __construct() {
        $this->user = Authenticate::user();
        $this->basket = new Basket;
    }

    public function index() {
        if($this->user) {
            $basket = $this->basket->get($this->user['id']);
            $basket['total'] = $this->total($basket);
            
            $this->view('basket/index', $basket);
        }
    }

    public function remove() {
        if($_SERVER["REQUEST_METHOD"] != "POST") return;

        $userId = $this->user['id'];
        $productId = $_POST['product'];

        $this->basket->remove($userId, $productId);
        Url::redirect('/basket');
    }

    private function total($basket) {
        $total = ['value' => 0, 'offer' => false];
        
        foreach($basket as $product)
            $total['value'] += (float) $product['price'];

        if($this->user['contract_length_months'] == 12) {
            $total['offer'] = true;
            $total['value'] = $total['value'] - $total['value']/10;
        }

        return $total;
    }
}