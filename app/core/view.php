<?php

class View
{
	private $controller;

	function __construct($controller) {
        $this->controller = strtolower(substr($controller, 0, strpos($controller, "_Controller")));
    } 
    function render($view, $data = null) {
    	
    	$viewPath = 'app/views/'.$this->controller. '/' . $view . '.php';
        
    	if (file_exists($viewPath)) {
    		$content = $viewPath;
            include_once 'app/views/layout/layout.php';
    	}
    	else {
    		Router::ErrorPage();
    	}
        
    }
}