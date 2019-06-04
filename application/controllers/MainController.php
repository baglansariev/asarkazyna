<?php
	namespace application\controllers;

	use application\core\Controller;

	class MainController extends Controller
	{

	    public function indexAction()
	    {
	    	// devPrint('MainController');
	    	$this->view->render('Асар казына. Купить недвижимость в рассрочку в Шымкенте');
	    }
	}
