<?php
	session_start();
	
	require_once('application/lib/devtools.php');
	require_once('application/lib/define.php');
	require_once('application/lib/autoload.php');

	$router = new application\core\Router;
	$router->run();