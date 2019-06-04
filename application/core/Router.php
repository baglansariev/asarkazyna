<?php
	namespace application\core;

	use application\core\View;

	class Router
	{
		public $routes;
		public $uri;
		protected $params = [];

	    public function __construct()
	    {
	        $this->routes = require_once('application/config/routes.php');
	        $this->uri = trim($_SERVER['REQUEST_URI'], '/');
	    }

	    public function match()
	    {	
	    	foreach ($this->routes as $key => $val) {
	    		if(preg_match("#^$key$#", $this->uri)){
	    			$this->params = $val;
	    			return true;
	    		}
	    	}
	    	return false;
	    }
	    public function run()
	    {
	    	if($this->match()){
	    		$path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
	    		$action = $this->params['action'].'Action';
	    		$controller = new $path($this->params, $this->uri);
	    		$controller->$action();
	    	}
	    	else{
	    		View::errorResponse(404, 'Страница не найдена');
	    	}
	    	// devPrint($this->uri);
	    }
	}