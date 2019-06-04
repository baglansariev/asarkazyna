<?php

	spl_autoload_register(function($class){
		$path = $_SERVER['DOCUMENT_ROOT'].DS.$class.'.php';
		$path = str_replace('\\', '/', $path);
		if(file_exists($path)){
			require_once($path);		
		}
		// else{
		// 	echo 'Класс не существует';
		// }
	});
