<?php
include_once './Core/Controller.php';

class MenuController extends Controller
{
    public $menuModel;

    public function __construct()
    {

        $this->menuModel = $this->model('Menu');
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
            if (method_exists($this, $method)) {
                $this->$method();
            } else {
                echo "Method $method not found.";
            }
        } else {
            $this->index();
        }
    }

    public function index()
    {
        $danhmuc = [];
        for ($i = 1; $i <= 5; $i++) {
            $danhmuc[$i] = $this->menuModel->getDanhmuc($i);
        }
        include_once './Views/menu.php';
    }

    public function menudetail()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $productDetail = $this->menuModel->getProductDetail($id);
            if ($productDetail) {
                $newestProducts = $this->menuModel->getNewestProductsInSameCategory($id);
                include './Views/menu_detail.php';
            } else {
                echo "Product not found.";
            }
        } else {
            echo "Product id not specified.";
        }
    }    
}
