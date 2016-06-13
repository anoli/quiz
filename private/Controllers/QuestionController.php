<?php

include_once('phpMVC' . DIRECTORY_SEPARATOR . 'Controller.php');
include_once('/../Models/Question.php');

class QuestionController extends Controller {

	public function item() {
		$model = new Question();
		$item = isset($_REQUEST['id']) ? $model->getQuestion($_REQUEST['id']) : false;
		$this->viewBag['data'] = $item;
		return $this->view('Item');
	}

    public function getList() {
        $model = new Question();
        $data = $model->getQuestions();
        $this->viewBag['data'] = $data;

        return $this->view('List');
    }
}

?>
