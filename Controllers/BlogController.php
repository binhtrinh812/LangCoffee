<?php
include_once './Core/Controller.php';

class BlogController extends Controller
{
    public $blogModel;

    public function __construct()
    {
        $this->blogModel = $this->model('Blog');
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
        $blogs = $this->blogModel->getAllBlog();
        $blog1 = $this->blogModel->get1Blog();
        $blog4s = $this->blogModel->getFourLatestBlogsExcludingOldest();
        include_once './Views/blog.php';
    }

    public function blogDetail()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $blogDetail = $this->blogModel->getBlog($id);
            $requests = $this->blogModel->getRequests();
            $otherblogs = $this->blogModel->getFourOtherBlog($id);
            if ($blogDetail) {
                include_once './Views/blog_detail.php';
            } else {
                echo "blog not found.";
            }
        } else {
            echo "blog id not specified.";
        }
    }
}
?>
