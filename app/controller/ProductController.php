<?php
namespace App\controller;
use App\core\Controller;
use App\model\Product;
use App\helper\Url;
use App\helper\Authenticate;

class ProductController extends Controller {
    private $product;
    private $user;

    public function __construct() {
        $this->user = Authenticate::user();
        $this->product = new Product;
    }

    public function index() {
        if($this->user) {
            $availableProducts = $this->product->getAvailableProducts($this->user['id']);
            
            $this->view('product/index', $availableProducts);
        }
    }

    public function add() {
        if($_SERVER["REQUEST_METHOD"] != "POST") return;

        $userId = $this->user['id'];
        $productId = $_POST['product'];

        $this->product->add($userId, $productId);
        Url::redirect('/product');
    }
}