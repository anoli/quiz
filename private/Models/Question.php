<?php
include_once('/../Models/Model.php');

class Question extends Model {

    public function getQuestions($active = null) {
    	if (is_null($active)) {
	    	$q = $this->prepare('SELECT * FROM question');
    	} else {
	    	$q = $this->prepare('SELECT * FROM question where active = ' . $active);
    	}
    	$q->execute();
		return $q->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getQuestion($id) {
	    $q = $this->prepare('SELECT * FROM question where id = ' . $id);
    	$q->execute();
		return $q->fetch(PDO::FETCH_ASSOC);
    }
}