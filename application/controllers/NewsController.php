<?php
	namespace application\controllers;

	use application\core\Controller;

	class NewsController extends Controller
	{
		public function showAllAction()
		{
			$arr = $this->model->showAll();
			$this->view->render('Новости', $arr);
		}

		public function showOneAction()
		{
			$arr = $this->model->showOne();
			if($arr){
				$this->view->render($arr['TITLE'], $arr);
			}
			else{
				$this->view->errorResponse(404, 'Страница не найдена');
			}
		}
	}
