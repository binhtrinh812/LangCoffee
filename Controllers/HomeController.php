<?php
include_once './Core/Controller.php';
class HomeController extends Controller
{
    public $homeModel;
    public function __construct()
    {
        $this->homeModel = parent::model('Home');
        $this->index();
    }

    public function index()
    {
        $homeModel = new Home();
        $comboSP = $homeModel->getSanphambyCombo(11);

        include_once './Views/home.php';
    }
}