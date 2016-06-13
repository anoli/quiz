<?php

include_once('phpMVC' . DIRECTORY_SEPARATOR . 'Controller.php');
include_once('/../Models/Question.php');

class HomeController extends Controller {

    private $name;
    
    public function __construct() {
        parent::__construct();
        $this->name = 'ŁĄŚŻŹĆŻZ';
    }
    
    public function HelloWorld() {
        return $this->view('HelloWorld');
    }

    public function Hello() {
        $this->name = isset($_REQUEST['name']) ? $_REQUEST['name'] : $this->name;
        $this->viewBag['name'] = $this->name;
        
        return $this->view('Hello');
    }

}

?>
