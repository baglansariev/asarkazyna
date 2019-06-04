<?php
	namespace application\controllers;

	use application\core\Controller;

	class QuestionareController extends Controller
	{
	    public function indexAction()
	    {
	    	$arr = $this->model->index();
	    	$this->view->render('Вопрос-Ответ', $arr);
	    }
	}
