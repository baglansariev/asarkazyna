<?php
	namespace application\controllers;

	use application\core\Controller;

	class AccountController extends Controller
	{
		// Личный Кабинет
	    public function indexAction()
	    {
	    	if(!$this->checkSession()){
	    		header('Location: /account/login');
	    	}
	    	$arr = $this->model->index();
	    	$this->view->render('Личный кабинет', $arr);
	    }

	    // Страница входа
	    public function loginAction()
	    {
	    	if($this->checkSession()){
	    		header('Location: /account');
	    	}
	    	$arr = [
	    		'message' => $this->model->login(),
	    	];
	        $this->view->render('Вход', $arr);
	    }

	    // Страница регистрации
	    public function registerAction()
	    {
	    	if($this->checkSession()){
	    		if($this->checkStatus()){
	    			$arr = ['message' => $this->model->register(),];
			    	$this->view->render('Регистрация', $arr);
	    		}
	    		else{
	    			header('Location: /account');
	    		}
	    	}
	    	else{
	    		header('Location: /account/login');
	    	}
	    }

	    // Выход из личного кабинета
	    public function logoutAction()
	    {
	    	if($this->checkSession()){
	    		$_SESSION['auth'] = null;
	    	}
	    	header('Location: /account/login');
	    }

	    // Проверка сессии
	    private function checkSession()
	    {
	    	if(isset($_SESSION['auth']) && $_SESSION['auth'] !== null){
	    		return true;
	    	}
	    	return false;
	    }

	    // Проверка статуса
	    private function checkStatus()
	    {
	    	if(isset($_SESSION['status']) && $_SESSION['status'] == 'super-admin'){
	    		return true;
	    	}
	    	else{
	    		return false;
	    	}
	    }
	}
