<?php
include_once './Core/Controller.php';
class StoryController extends Controller
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

        include_once './Views/story.php';
    }
}