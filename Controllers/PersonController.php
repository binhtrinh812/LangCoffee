<?php
include_once './Core/Controller.php';

class PersonController extends Controller
{
    public $personModel;

    public function __construct()
    {
        $this->personModel = $this->model('Person');

        // Handle method routing
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
        $persons = $this->personModel->getAllNguoitamsu();
        include_once './Views/person.php';
    }

    public function personDetail()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $personDetail = $this->personModel->getPersonById($id);
            $requests = $this->personModel->getRequests();
            $otherPersons = $this->personModel->getFourOtherPersons($id);
            if ($personDetail) {
                include_once './Views/person_detail.php';
            } else {
                echo "Person not found.";
            }
        } else {
            echo "Person id not specified.";
        }
    }
}
?>
