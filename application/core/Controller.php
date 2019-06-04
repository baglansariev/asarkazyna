<?php
	namespace application\core;

	use application\core\View;

	abstract class Controller
	{
		public $route;
		public $view;
		public $model;

		public function __construct($route, $uri)
		{
			$this->uri = $uri;
			$this->route = $route;
			$this->view = new View($route);
			$this->getModel($route['controller']);
		}

		public function getModel($name)
		{
			$path = '\application\models\\'.ucfirst($name);
			if(class_exists($path)){
				$this->model = new $path;
			}
		}
	}